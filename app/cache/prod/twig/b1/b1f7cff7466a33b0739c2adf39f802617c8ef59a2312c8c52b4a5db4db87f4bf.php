<?php

/* SalesBundle:invoice:edit.html.twig */
class __TwigTemplate_408ba023c693ebf01701b730b75a6e1cf71b1fc0707161569596349227466304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " | Edit Invoice ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Invoice edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Number")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "address", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Address")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "date", array()), 'row');
        echo "
        </div>
        <div id=\"addDiv\" class=\"form-group row edit-form\">
            ";
        // line 18
        $context["j"] = 0;
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "                <div id=\"div";
            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : null), "html", null, true);
            echo "\">
                    <div class=\"col-xs-12 col-md-8\">
                        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["product"], "description", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
            echo "
                    </div>

                    <div class=\"col-xs-6 col-md-3\">
                        ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["product"], "amount", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Amount")));
            echo "
                    </div>

                    <a class=\"col-xs-6 col-md-1 btnClose\" onclick=\"removeForm(this.parentNode.getAttribute('id'))\">
                        X
                    </a>
                </div>
                ";
            // line 33
            $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
            // line 34
            echo "                <div class=\"clearfix\"></div>
                <hr />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        </div>

        ";
        // line 40
        $context["amount"] = 0;
        // line 41
        echo "
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product_amount"]) {
            // line 43
            echo "            ";
            $context["amount"] = ((isset($context["amount"]) ? $context["amount"] : null) + $this->getAttribute($context["product_amount"], "amount", array()));
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_amount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        <div class=\"clearfix\"></div>
        <hr/>
        <div class=\"row\">
            <div id=\"total-text\" class=\"form-group col-xs-9 h3\">Total :</div>
            <div id=\"total-amount\" class=\"form-group col-xs-3 h3 text-center\"> ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : null), "html", null, true);
        echo "\$</div>

            <div class=\"form-group col-xs-4\">
                <input type=\"submit\" value=\"Save\" class=\"btn btn-info btn-block\" />
            </div>


            <div class=\"col-xs-4\">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
            </div>

            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products", array()), 'row');
        echo "
            ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

            <div class=\"col-xs-4\">
                ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <input type=\"Save\" value=\"Delete\" class=\"btn btn-block btn-info\">
                ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
            </div>
        </div>
";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/script_edit.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "SalesBundle:invoice:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 74,  180 => 73,  177 => 72,  169 => 67,  164 => 65,  158 => 62,  154 => 61,  148 => 58,  137 => 50,  130 => 45,  124 => 44,  121 => 43,  117 => 42,  114 => 41,  112 => 40,  107 => 37,  99 => 34,  97 => 33,  87 => 26,  80 => 22,  74 => 20,  69 => 19,  67 => 18,  61 => 15,  54 => 11,  48 => 8,  43 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} | Edit Invoice {% endblock %}*/
/* {% block body %}*/
/*     <h1>Invoice edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         <div class="form-group">*/
/*             {{ form_row(edit_form.number, {'attr': {'class': 'form-control', 'placeholder' : 'Number'}}) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(edit_form.address, {'attr': {'class': 'form-control', 'placeholder' : 'Address'}}) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_row(edit_form.date) }}*/
/*         </div>*/
/*         <div id="addDiv" class="form-group row edit-form">*/
/*             {% set j = 0 %}*/
/*             {% for product in edit_form.products %}*/
/*                 <div id="div{{ j }}">*/
/*                     <div class="col-xs-12 col-md-8">*/
/*                         {{ form_row(product.description, {'attr': {'class': 'form-control', 'placeholder' : 'Description'}}) }}*/
/*                     </div>*/
/* */
/*                     <div class="col-xs-6 col-md-3">*/
/*                         {{ form_row(product.amount, {'attr': {'class': 'form-control', 'placeholder' : 'Amount'}}) }}*/
/*                     </div>*/
/* */
/*                     <a class="col-xs-6 col-md-1 btnClose" onclick="removeForm(this.parentNode.getAttribute('id'))">*/
/*                         X*/
/*                     </a>*/
/*                 </div>*/
/*                 {% set j = (j+1) %}*/
/*                 <div class="clearfix"></div>*/
/*                 <hr />*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/* */
/*         {% set amount = 0 %}*/
/* */
/*         {% for product_amount in invoice.products %}*/
/*             {% set amount = (amount + product_amount.amount) %}*/
/*         {% endfor %}*/
/* */
/*         <div class="clearfix"></div>*/
/*         <hr/>*/
/*         <div class="row">*/
/*             <div id="total-text" class="form-group col-xs-9 h3">Total :</div>*/
/*             <div id="total-amount" class="form-group col-xs-3 h3 text-center"> {{ amount }}$</div>*/
/* */
/*             <div class="form-group col-xs-4">*/
/*                 <input type="submit" value="Save" class="btn btn-info btn-block" />*/
/*             </div>*/
/* */
/* */
/*             <div class="col-xs-4">*/
/*                 <a href="{{ path('invoice_index') }}" class="btn btn-block btn-info">Back to Invoice List</a>*/
/*             </div>*/
/* */
/*             {{ form_row(edit_form.products) }}*/
/*             {{ form_end(edit_form) }}*/
/* */
/*             <div class="col-xs-4">*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input type="Save" value="Delete" class="btn btn-block btn-info">*/
/*                 {{ form_end(delete_form) }}*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/js/script_edit.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
