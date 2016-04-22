<?php

/* SalesBundle:invoice:index.html.twig */
class __TwigTemplate_81a839158995abc1fe935c9ce20bd48c9be455799daab94f7fd6ee3c7e7095a0 extends Twig_Template
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
        $__internal_ad48d708eac12ccbba395abbd1145b076380410d7ef74cbc53f60ab0b2164994 = $this->env->getExtension("native_profiler");
        $__internal_ad48d708eac12ccbba395abbd1145b076380410d7ef74cbc53f60ab0b2164994->enter($__internal_ad48d708eac12ccbba395abbd1145b076380410d7ef74cbc53f60ab0b2164994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalesBundle:invoice:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad48d708eac12ccbba395abbd1145b076380410d7ef74cbc53f60ab0b2164994->leave($__internal_ad48d708eac12ccbba395abbd1145b076380410d7ef74cbc53f60ab0b2164994_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7b0f5c5c77f23b6f8ad786a4d42a48dd4702945b2e32bacb8224ee638503e15 = $this->env->getExtension("native_profiler");
        $__internal_f7b0f5c5c77f23b6f8ad786a4d42a48dd4702945b2e32bacb8224ee638503e15->enter($__internal_f7b0f5c5c77f23b6f8ad786a4d42a48dd4702945b2e32bacb8224ee638503e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) ? $context["invoices"] : $this->getContext($context, "invoices")));
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
        
        $__internal_f7b0f5c5c77f23b6f8ad786a4d42a48dd4702945b2e32bacb8224ee638503e15->leave($__internal_f7b0f5c5c77f23b6f8ad786a4d42a48dd4702945b2e32bacb8224ee638503e15_prof);

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
        return array (  101 => 32,  95 => 28,  83 => 24,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
