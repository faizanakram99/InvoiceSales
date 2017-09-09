<?php

namespace Sales\SalesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sales\SalesBundle\Entity\Invoice;
use Sales\SalesBundle\Form\InvoiceType;
use Symfony\Component\HttpFoundation\Response;


/**
 * Invoice controller.
 *
 * @Route("/")
 */
class InvoiceController extends Controller
{
    private function getFormType(){
        return InvoiceType::class;
    }

    /**
     * Lists all Invoice entities.
     *
     * @Route("/", name="invoice_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $invoices = $em->getRepository('SalesBundle:Invoice')->findAll();

        return $this->render('SalesBundle:invoice:index.html.twig', [
            'invoices' => $invoices,
        ]);
    }

    /**
     * Displays a form to edit an existing Invoice entity
     * or creates a new Invoice entity
     * @Route("/new", name="invoice_new")
     * @Route("/{id}/edit", name="invoice_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Invoice $invoice = null)
    {
        if(!$invoice) $invoice = new Invoice();
        $form = $this->createForm($this->getFormType(), $invoice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invoice);
            $em->flush();
            return $this->redirectToRoute('invoice_show', ['id' => $invoice->getId()]);
        }

        return $this->render('SalesBundle:invoice:edit.html.twig', [
            'invoice' => $invoice,
            'form' => $form->createView()
        ]);
    }

    /**
     * Finds and displays a Invoice entity.
     *
     * @Route("/{id}", name="invoice_show")
     * @Method("GET")
     */
    public function showAction(Invoice $invoice)
    {
        return $this->render('SalesBundle:invoice:show.html.twig', [
            'invoice' => $invoice
        ]);
    }

    /**
     * Deletes a Invoice entity.
     *
     * @Route("/{id}", name="invoice_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Invoice $invoice)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($invoice);
        $em->flush();

        return $this->redirectToRoute('invoice_index');
    }

    /**
     * Downloads invoice as pdf or displays inline
     *
     * @Route("/{id}/pdf", name="invoice_show_pdf")
     * @Route("/{id}/download", name="invoice_download_pdf")
     * @Method("GET")
     */
    public function pdfAction(Invoice $invoice, $_route)
    {
        $html = $this->renderView('SalesBundle:invoice:pdf.html.twig', [
            'invoice'  => $invoice
        ]);
        $file = 'file'.$invoice->getId().'.pdf';

        $disposition = $_route === "invoice_show_pdf" ? "inline" : "attachment";

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, [
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => $disposition."; filename = ".$file
            ]
        );
    }

    /**
     * @Route("/{id}/email", name="invoice_email")
     * @Method("GET")
     */
    public function sendEmailAction(Invoice $invoice, Request $request)
    {
        $html = $this->renderView('pdf.html.twig',[
            'invoice'  => $invoice
        ]);

        $file = 'file'.$invoice->getId().'.pdf';

        $email = $invoice->getEmail();

        if (file_exists($file)) {
            $message = \Swift_Message::newInstance()
            ->setSubject('Invoice')
            ->setFrom('symfony.angular@gmail.com')
            ->setTo($email)
            ->setBody("Happy Shopping. Your invoice has been attached!",'text/html')
            ->attach(\Swift_Attachment::fromPath($file, 'application/pdf'));
            $this->get('mailer')->send($message);
        }

        else{
            $this->get('knp_snappy.pdf')->generateFromHtml($html, $file);
            $message = \Swift_Message::newInstance()
            ->setSubject('Invoice')
            ->setFrom('symfony.angular@gmail.com')
            ->setTo($email)
            ->setBody("Happy Shopping. Your invoice has been attached!",'text/html')
            ->attach(\Swift_Attachment::fromPath($file, 'application/pdf'));
            $this->get('mailer')->send($message);
        }
        return new Response("Email sent successfully!");
    }
}
