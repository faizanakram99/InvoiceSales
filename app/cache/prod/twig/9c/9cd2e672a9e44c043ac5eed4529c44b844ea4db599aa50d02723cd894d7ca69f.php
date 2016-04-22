<?php

/* SalesBundle:invoice:show.html.twig */
class __TwigTemplate_de05aa973a97ae6359cfda1c590610f975d9b6cd82df0db837740462c452cfc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " | Show Invoices ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Invoice</h1>

    <table class=\"table table-bordered table-striped table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Invoice Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>


                <tr>
                    <th>Products</th>

                        <td>
                            <ul class=\"list-unstyled row\">
                                ";
        // line 31
        $context["amount"] = 0;
        // line 32
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "
                                    <li>
                                        <span class=\"col-xs-9\">
                                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "
                                        </span>
                                        <span class=\"col-xs-3\">
                                            - ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "amount", array()), "html", null, true);
            echo "\$
                                        </span>
                                    </li>
                                    ";
            // line 42
            $context["amount"] = ((isset($context["amount"]) ? $context["amount"] : null) + $this->getAttribute($context["product"], "amount", array()));
            // line 43
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                                <li>
                                    <div class=\"clearfix\"></div>
                                    <hr />
                                    <span class=\"h4 col-xs-9\">
                                        Total
                                    </span>

                                    <span class=\"h4 col-xs-3\">
                                        - ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : null), "html", null, true);
        echo "\$
                                    </span>
                                </li>

                            </ul>
                        </td>
                </tr>

        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-xs-4\">
          <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
        </div>

        <div class=\"col-xs-4\">
           <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-info\">Edit Invoice</a>
        </div>

        <div class=\"col-xs-4\">
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete Invoice\" class=\"btn btn-block btn-info\">
            ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SalesBundle:invoice:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 75,  153 => 73,  146 => 69,  139 => 65,  124 => 53,  113 => 44,  107 => 43,  105 => 42,  99 => 39,  93 => 36,  88 => 33,  83 => 32,  81 => 31,  67 => 22,  60 => 18,  53 => 14,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} | Show Invoices {% endblock %}*/
/* {% block body %}*/
/*     <h1>Invoice</h1>*/
/* */
/*     <table class="table table-bordered table-striped table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ invoice.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Invoice Number</th>*/
/*                 <td>{{ invoice.number }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ invoice.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{% if invoice.date %}{{ invoice.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* */
/* */
/*                 <tr>*/
/*                     <th>Products</th>*/
/* */
/*                         <td>*/
/*                             <ul class="list-unstyled row">*/
/*                                 {% set amount = 0 %}*/
/*                                 {% for product in invoice.products %}*/
/* */
/*                                     <li>*/
/*                                         <span class="col-xs-9">*/
/*                                             {{ product.description }}*/
/*                                         </span>*/
/*                                         <span class="col-xs-3">*/
/*                                             - {{ product.amount }}$*/
/*                                         </span>*/
/*                                     </li>*/
/*                                     {% set amount = (amount + product.amount) %}*/
/*                                 {% endfor %}*/
/* */
/*                                 <li>*/
/*                                     <div class="clearfix"></div>*/
/*                                     <hr />*/
/*                                     <span class="h4 col-xs-9">*/
/*                                         Total*/
/*                                     </span>*/
/* */
/*                                     <span class="h4 col-xs-3">*/
/*                                         - {{ amount }}$*/
/*                                     </span>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </td>*/
/*                 </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     <div class="row">*/
/*         <div class="col-xs-4">*/
/*           <a href="{{ path('invoice_index') }}" class="btn btn-block btn-info">Back to Invoice List</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-4">*/
/*            <a href="{{ path('invoice_edit', { 'id': invoice.id }) }}" class="btn btn-block btn-info">Edit Invoice</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-4">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete Invoice" class="btn btn-block btn-info">*/
/*             {{ form_end(delete_form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
