<?php

/* SalesBundle:invoice:new.html.twig */
class __TwigTemplate_a27708c1be7fd4b0256b034aa9f42d0bae07ad985569311a80578f31919ca424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:new.html.twig", 1);
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
        echo " | New Invoice ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <h1 class=\"text-center\">Invoice creation</h1>

        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

            <div class=\"row\">
                <div class=\"form-group col-xs-12\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Number")));
        echo "
                </div>
                <div class=\"form-group col-xs-12\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Address")));
        echo "
                </div>

                <div class=\"form-group col-xs-12\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'row');
        echo "
                </div>

                <div id=\"addDiv\" class=\"form-group col-xs-12\"></div>
                <div class=\"clearfix\"></div>
                <hr/>
                <div id=\"total-text\" class=\"form-group col-xs-8 h3\">Total :</div>
                <div id=\"total-amount\" class=\"form-group col-xs-4 h3\"></div>
                <div class=\"clearfix\"></div>


                    <div class=\"form-group col-xs-4\">
                        <input type=\"button\" value=\"Add Products\" onclick=\"add()\" class=\"btn btn-info btn-block\"/>
                    </div>

                    <div class=\"form-group col-xs-4\">
                        <input type=\"submit\" value=\"Submit\" class=\"btn btn-info btn-block\" />
                    </div>

        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
        </div>
    </div>
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/script_create.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "SalesBundle:invoice:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  102 => 45,  99 => 44,  91 => 39,  86 => 37,  64 => 18,  57 => 14,  51 => 11,  44 => 7,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} | New Invoice {% endblock %}*/
/* {% block body %}*/
/* */
/*         <h1 class="text-center">Invoice creation</h1>*/
/* */
/*         {{ form_start(form) }}*/
/* */
/*             <div class="row">*/
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.number, {'attr': {'class': 'form-control', 'placeholder' : 'Number'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.address, {'attr': {'class': 'form-control', 'placeholder' : 'Address'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.date) }}*/
/*                 </div>*/
/* */
/*                 <div id="addDiv" class="form-group col-xs-12"></div>*/
/*                 <div class="clearfix"></div>*/
/*                 <hr/>*/
/*                 <div id="total-text" class="form-group col-xs-8 h3">Total :</div>*/
/*                 <div id="total-amount" class="form-group col-xs-4 h3"></div>*/
/*                 <div class="clearfix"></div>*/
/* */
/* */
/*                     <div class="form-group col-xs-4">*/
/*                         <input type="button" value="Add Products" onclick="add()" class="btn btn-info btn-block"/>*/
/*                     </div>*/
/* */
/*                     <div class="form-group col-xs-4">*/
/*                         <input type="submit" value="Submit" class="btn btn-info btn-block" />*/
/*                     </div>*/
/* */
/*         {{ form_end(form) }}*/
/*         <div class="col-xs-4">*/
/*             <a href="{{ path('invoice_index') }}" class="btn btn-block btn-info">Back to Invoice List</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*     <script src="{{ asset('bundles/js/script_create.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
