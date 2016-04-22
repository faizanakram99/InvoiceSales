<?php

/* SalesBundle:invoice:show.html.twig */
class __TwigTemplate_cc54c7c8c082a7e7d43940cf549610fbd3aeddd7f35de658eb66eb4b07761976 extends Twig_Template
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
        $__internal_07c2e82e4b343038a084952e75f8d59d8ff9f029820f3b2d0bdbf808d9348f8c = $this->env->getExtension("native_profiler");
        $__internal_07c2e82e4b343038a084952e75f8d59d8ff9f029820f3b2d0bdbf808d9348f8c->enter($__internal_07c2e82e4b343038a084952e75f8d59d8ff9f029820f3b2d0bdbf808d9348f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalesBundle:invoice:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c2e82e4b343038a084952e75f8d59d8ff9f029820f3b2d0bdbf808d9348f8c->leave($__internal_07c2e82e4b343038a084952e75f8d59d8ff9f029820f3b2d0bdbf808d9348f8c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad99470ba54b36333449df971e31263be403eaa7a99e5bb5ecbf2b97f67f1935 = $this->env->getExtension("native_profiler");
        $__internal_ad99470ba54b36333449df971e31263be403eaa7a99e5bb5ecbf2b97f67f1935->enter($__internal_ad99470ba54b36333449df971e31263be403eaa7a99e5bb5ecbf2b97f67f1935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Show Invoices ";
        
        $__internal_ad99470ba54b36333449df971e31263be403eaa7a99e5bb5ecbf2b97f67f1935->leave($__internal_ad99470ba54b36333449df971e31263be403eaa7a99e5bb5ecbf2b97f67f1935_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_835f7cf90aa4bcfc0d6286749f37da6de57e67cbc7d3398223e326e896d76afe = $this->env->getExtension("native_profiler");
        $__internal_835f7cf90aa4bcfc0d6286749f37da6de57e67cbc7d3398223e326e896d76afe->enter($__internal_835f7cf90aa4bcfc0d6286749f37da6de57e67cbc7d3398223e326e896d76afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Invoice</h1>

    <table class=\"table table-bordered table-striped table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Invoice Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "address", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "email", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Date</th>
                <td>";
        // line 28
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>


                <tr>
                    <th>Products</th>

                        <td>
                            <ul class=\"list-unstyled row\">
                                ";
        // line 37
        $context["amount"] = 0;
        // line 38
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "
                                    <li>
                                        <span class=\"col-xs-9\">
                                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "
                                        </span>
                                        <span class=\"col-xs-3\">
                                            - ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "amount", array()), "html", null, true);
            echo "\$
                                        </span>
                                    </li>
                                    ";
            // line 48
            $context["amount"] = ((isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")) + $this->getAttribute($context["product"], "amount", array()));
            // line 49
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                                <li>
                                    <div class=\"clearfix\"></div>
                                    <hr />
                                    <span class=\"h4 col-xs-9\">
                                        Total
                                    </span>

                                    <span class=\"h4 col-xs-3\">
                                        - ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")), "html", null, true);
        echo "\$
                                    </span>
                                </li>

                            </ul>
                        </td>
                </tr>

        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-xs-6 col-md-4 margin-down\">
           <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_show_pdf", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-info\">View as pdf</a>
        </div>

        <div class=\"col-xs-6 col-md-4 margin-down\">
           <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_download_pdf", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-info\">Download Invoice</a>
        </div>

        <div class=\"col-xs-6 col-md-4 margin-down\">
           <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_email", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-info\">Email Invoice</a>
        </div>

        <div class=\"col-xs-6 col-md-4 margin-down\">
          <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
        </div>

        <div class=\"col-xs-6 col-md-4 margin-down\">
           <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-info\">Edit Invoice</a>
        </div>

        <div class=\"col-xs-6 col-md-4 margin-down\">
            ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete Invoice\" class=\"btn btn-block btn-info\">
            ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_835f7cf90aa4bcfc0d6286749f37da6de57e67cbc7d3398223e326e896d76afe->leave($__internal_835f7cf90aa4bcfc0d6286749f37da6de57e67cbc7d3398223e326e896d76afe_prof);

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
        return array (  203 => 93,  198 => 91,  191 => 87,  184 => 83,  177 => 79,  170 => 75,  163 => 71,  148 => 59,  137 => 50,  131 => 49,  129 => 48,  123 => 45,  117 => 42,  112 => 39,  107 => 38,  105 => 37,  91 => 28,  83 => 23,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
/* */
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ invoice.email }}</td>*/
/*             </tr>*/
/* */
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
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*            <a href="{{ path('invoice_show_pdf', { 'id': invoice.id }) }}" class="btn btn-block btn-info">View as pdf</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*            <a href="{{ path('invoice_download_pdf', { 'id': invoice.id }) }}" class="btn btn-block btn-info">Download Invoice</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*            <a href="{{ path('invoice_email', { 'id': invoice.id }) }}" class="btn btn-block btn-info">Email Invoice</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*           <a href="{{ path('invoice_index') }}" class="btn btn-block btn-info">Back to Invoice List</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*            <a href="{{ path('invoice_edit', { 'id': invoice.id }) }}" class="btn btn-block btn-info">Edit Invoice</a>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 col-md-4 margin-down">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete Invoice" class="btn btn-block btn-info">*/
/*             {{ form_end(delete_form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
