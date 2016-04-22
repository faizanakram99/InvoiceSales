<?php

/* SalesBundle:invoice:new.html.twig */
class __TwigTemplate_7761339fa0622b0ec58b2c40b4204b10b36a45c680e3ffc3ccb54693bccb6f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_e251bed11ff1b8e84407e6f246a73cb65f6821675caae4e80d37b2856fdaf8b9 = $this->env->getExtension("native_profiler");
        $__internal_e251bed11ff1b8e84407e6f246a73cb65f6821675caae4e80d37b2856fdaf8b9->enter($__internal_e251bed11ff1b8e84407e6f246a73cb65f6821675caae4e80d37b2856fdaf8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalesBundle:invoice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e251bed11ff1b8e84407e6f246a73cb65f6821675caae4e80d37b2856fdaf8b9->leave($__internal_e251bed11ff1b8e84407e6f246a73cb65f6821675caae4e80d37b2856fdaf8b9_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fee6b08df36a4a9da55ec4e7e15b8ffe7af13e545aeff3e50bcd39762e1d707 = $this->env->getExtension("native_profiler");
        $__internal_5fee6b08df36a4a9da55ec4e7e15b8ffe7af13e545aeff3e50bcd39762e1d707->enter($__internal_5fee6b08df36a4a9da55ec4e7e15b8ffe7af13e545aeff3e50bcd39762e1d707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/jquery-ui.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/jquery-ui.structure.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/jquery-ui.theme.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5fee6b08df36a4a9da55ec4e7e15b8ffe7af13e545aeff3e50bcd39762e1d707->leave($__internal_5fee6b08df36a4a9da55ec4e7e15b8ffe7af13e545aeff3e50bcd39762e1d707_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b30c8217c54d4b2bbac65d396106f8fc445fd423a64bc69ebd0d0a2040ea5c98 = $this->env->getExtension("native_profiler");
        $__internal_b30c8217c54d4b2bbac65d396106f8fc445fd423a64bc69ebd0d0a2040ea5c98->enter($__internal_b30c8217c54d4b2bbac65d396106f8fc445fd423a64bc69ebd0d0a2040ea5c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | New Invoice ";
        
        $__internal_b30c8217c54d4b2bbac65d396106f8fc445fd423a64bc69ebd0d0a2040ea5c98->leave($__internal_b30c8217c54d4b2bbac65d396106f8fc445fd423a64bc69ebd0d0a2040ea5c98_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20bfc4c5c1dadeca1ac792dedf7546756c440565f13e5ff88cb6a8d2daaac2db = $this->env->getExtension("native_profiler");
        $__internal_20bfc4c5c1dadeca1ac792dedf7546756c440565f13e5ff88cb6a8d2daaac2db->enter($__internal_20bfc4c5c1dadeca1ac792dedf7546756c440565f13e5ff88cb6a8d2daaac2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
        <h1 class=\"text-center\">Invoice creation</h1>

        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"row\">

                <div class=\"form-group col-xs-12\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Number")));
        echo "
                </div>

                <div class=\"form-group col-xs-12\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Address")));
        echo "
                </div>

                <div class=\"form-group col-xs-12\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                </div>

                <div class=\"form-group col-xs-12\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("attr" => array("class" => "form-control")));
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
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
        </div>
    </div>
";
        
        $__internal_20bfc4c5c1dadeca1ac792dedf7546756c440565f13e5ff88cb6a8d2daaac2db->leave($__internal_20bfc4c5c1dadeca1ac792dedf7546756c440565f13e5ff88cb6a8d2daaac2db_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_124b5772cb1eb0796145cb66b443c254b8f6627af82f0ca7eb589316877335bf = $this->env->getExtension("native_profiler");
        $__internal_124b5772cb1eb0796145cb66b443c254b8f6627af82f0ca7eb589316877335bf->enter($__internal_124b5772cb1eb0796145cb66b443c254b8f6627af82f0ca7eb589316877335bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/script_create.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            var invoiceDate = \$( \"#invoice_date\" );
            invoiceDate.each(function(){
                    this.type=\"text\";
                });
            invoiceDate.datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0
            });
            });
    </script>
";
        
        $__internal_124b5772cb1eb0796145cb66b443c254b8f6627af82f0ca7eb589316877335bf->leave($__internal_124b5772cb1eb0796145cb66b443c254b8f6627af82f0ca7eb589316877335bf_prof);

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
        return array (  171 => 62,  167 => 61,  163 => 60,  157 => 59,  146 => 54,  141 => 52,  117 => 31,  110 => 27,  103 => 23,  96 => 19,  88 => 14,  83 => 11,  77 => 10,  65 => 9,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/css/jquery-ui.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/css/jquery-ui.structure.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/css/jquery-ui.theme.min.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title %} | New Invoice {% endblock %}*/
/* {% block body %}*/
/* */
/*         <h1 class="text-center">Invoice creation</h1>*/
/* */
/*         {{ form_start(form) }}*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.number, {'attr': {'class': 'form-control', 'placeholder' : 'Number'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.address, {'attr': {'class': 'form-control', 'placeholder' : 'Address'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Email'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_row(form.date, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/* */
/* */
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
/*     <script src="{{ asset('bundles/js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/js/script_create.js') }}"></script>*/
/*     <script>*/
/*         $(function() {*/
/*             var invoiceDate = $( "#invoice_date" );*/
/*             invoiceDate.each(function(){*/
/*                     this.type="text";*/
/*                 });*/
/*             invoiceDate.datepicker({*/
/*                 dateFormat: 'yy-mm-dd',*/
/*                 minDate: 0*/
/*             });*/
/*             });*/
/*     </script>*/
/* {% endblock %}*/
/* */
