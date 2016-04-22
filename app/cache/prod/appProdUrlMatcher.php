<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // invoice_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_invoice_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'invoice_index');
            }

            return array (  '_controller' => 'Sales\\SalesBundle\\Controller\\InvoiceController::indexAction',  '_route' => 'invoice_index',);
        }
        not_invoice_index:

        // invoice_new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_invoice_new;
            }

            return array (  '_controller' => 'Sales\\SalesBundle\\Controller\\InvoiceController::newAction',  '_route' => 'invoice_new',);
        }
        not_invoice_new:

        // invoice_show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_invoice_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_show')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\InvoiceController::showAction',));
        }
        not_invoice_show:

        // invoice_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_invoice_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_edit')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\InvoiceController::editAction',));
        }
        not_invoice_edit:

        // invoice_delete
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_invoice_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_delete')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\InvoiceController::deleteAction',));
        }
        not_invoice_delete:

        if (0 === strpos($pathinfo, '/products')) {
            // products_index
            if (rtrim($pathinfo, '/') === '/products') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'products_index');
                }

                return array (  '_controller' => 'Sales\\SalesBundle\\Controller\\ProductsController::indexAction',  '_route' => 'products_index',);
            }
            not_products_index:

            // products_new
            if ($pathinfo === '/products/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_products_new;
                }

                return array (  '_controller' => 'Sales\\SalesBundle\\Controller\\ProductsController::newAction',  '_route' => 'products_new',);
            }
            not_products_new:

            // products_show
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_show')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\ProductsController::showAction',));
            }
            not_products_show:

            // products_edit
            if (preg_match('#^/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_products_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_edit')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\ProductsController::editAction',));
            }
            not_products_edit:

            // products_delete
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_products_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_delete')), array (  '_controller' => 'Sales\\SalesBundle\\Controller\\ProductsController::deleteAction',));
            }
            not_products_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
