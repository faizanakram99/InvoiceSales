<?php

/* SalesBundle:invoice:index.html.twig */
class __TwigTemplate_93d81aea66a018359c3eba9ae849b6f873b262625c87af26340cdc439d70b976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Invoice list</h1>

    <table class=\"table table-bordered table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Invoice Number</th>
                <th>Address</th>
                <th>Date</th>
                <th>Products</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) ? $context["invoices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_show", array("id" => $this->getAttribute($context["invoice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["invoice"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["invoice"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_show", array("id" => $this->getAttribute($context["invoice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invoice"], "products", array()), "count", array()), "html", null, true);
            echo " Products</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>


    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("invoice_new");
        echo "\" class=\"btn btn-info\">Create Invoice</a>

";
    }

    public function getTemplateName()
    {
        return "SalesBundle:invoice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  86 => 28,  74 => 24,  67 => 22,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Invoice list</h1>*/
/* */
/*     <table class="table table-bordered table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Invoice Number</th>*/
/*                 <th>Address</th>*/
/*                 <th>Date</th>*/
/*                 <th>Products</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for invoice in invoices %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('invoice_show', { 'id': invoice.id }) }}">{{ invoice.id }}</a></td>*/
/*                 <td>{{ invoice.number }}</td>*/
/*                 <td>{{ invoice.address }}</td>*/
/*                 <td>{% if invoice.date %}{{ invoice.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('invoice_show', { 'id': invoice.id }) }}">{{ invoice.products.count }} Products</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     <a href="{{ path('invoice_new') }}" class="btn btn-info">Create Invoice</a>*/
/* */
/* {% endblock %}*/
/* */
