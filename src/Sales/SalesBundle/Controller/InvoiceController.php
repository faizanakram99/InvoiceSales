<?php

namespace Sales\SalesBundle\Controller;

use Sales\SalesBundle\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sales\SalesBundle\Entity\Invoice;
use Sales\SalesBundle\Form\InvoiceType;
use Sales\SalesBundle\Controller\ProductsController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;



/**
 * Invoice controller.
 *
 * @Route("/")
 */
class InvoiceController extends Controller
{
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

        return $this->render('SalesBundle:invoice:index.html.twig', array(
            'invoices' => $invoices,
        ));
    }

    /**
     * Creates a new Invoice entity.
     *
     * @Route("/new", name="invoice_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invoice = new Invoice();


        $form = $this->createForm('Sales\SalesBundle\Form\InvoiceType', $invoice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            foreach ($invoice->getProducts() as $p){
                $p->setInvoice($invoice);
                $em->persist($p);
            }
            $em->persist($invoice);
            $em->flush();

            return $this->redirectToRoute('invoice_show', array('id' => $invoice->getId()));
        }

        return $this->render('SalesBundle:invoice:new.html.twig', array(
            'invoice' => $invoice,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Invoice entity.
     *
     * @Route("/{id}", name="invoice_show")
     * @Method("GET")
     */
    public function showAction(Invoice $invoice)
    {
        $deleteForm = $this->createDeleteForm($invoice);

        return $this->render('SalesBundle:invoice:show.html.twig', array(
            'invoice' => $invoice,
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Finds and displays a Invoice entity.
     *
     * @Route("/{id}/pdf", name="invoice_show_pdf")
     * @Method("GET")
     */
    public function showPdfAction(Invoice $invoice)
    {
        $html = $this->renderView('SalesBundle:invoice:show_pdf.html.twig',array(
            'invoice'  => $invoice
        ));
        $file = 'file'.$invoice->getId().'.pdf';
        return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
        200,
        array(
            'Content-Type'          => 'application/pdf',
            'Content-Disposition'   => "inline; filename = $file"
        ));
    }



    /**
     * Finds and displays a Invoice entity.
     *
     * @Route("/{id}/download", name="invoice_download_pdf")
     * @Method("GET")
     */
    public function pdfDownloadAction(Invoice $invoice)
    {
        $html = $this->renderView('SalesBundle:invoice:show_pdf.html.twig',array(
            'invoice'  => $invoice
        ));
        $file = 'file'.$invoice->getId().'.pdf';
        return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
        200,
        array(
            'Content-Type'          => 'application/pdf',
            'Content-Disposition'   => "attachment; filename = $file"
        ));
    }




    /**
     * Finds and displays a Invoice entity.
     *
     * @Route("/{id}/email", name="invoice_email")
     * @Method("GET")
     */
    public function sendEmailAction(Invoice $invoice, Request $request)
    {
        $html = $this->renderView('SalesBundle:invoice:show_pdf.html.twig',array(
            'invoice'  => $invoice
        ));

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



    /**
     * Displays a form to edit an existing Invoice entity.
     *
     * @Route("/{id}/edit", name="invoice_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Invoice $invoice)
    {
        $deleteForm = $this->createDeleteForm($invoice);
        $editForm = $this->createForm('Sales\SalesBundle\Form\InvoiceType', $invoice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invoice);
            $em->flush();

            return $this->redirectToRoute('invoice_show', array('id' => $invoice->getId()));
        }

        return $this->render('SalesBundle:invoice:edit.html.twig', array(
            'invoice' => $invoice,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Invoice entity.
     *
     * @Route("/{id}", name="invoice_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Invoice $invoice)
    {
        $form = $this->createDeleteForm($invoice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invoice);
            $em->flush();
        }

        return $this->redirectToRoute('invoice_index');
    }

    /**
     * Creates a form to delete a Invoice entity.
     *
     * @param Invoice $invoice The Invoice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Invoice $invoice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invoice_delete', array('id' => $invoice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
