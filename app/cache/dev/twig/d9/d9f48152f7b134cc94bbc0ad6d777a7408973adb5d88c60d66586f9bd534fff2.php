<?php

/* SalesBundle:invoice:edit.html.twig */
class __TwigTemplate_ad9bd9b64c034fe5386784f7ee67719e8e5e8bc23c9d85bfb20e61bc18d4c6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SalesBundle:invoice:edit.html.twig", 1);
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
        $__internal_84b335d0fae3f54bc7147aecae21548da18a6190a1c878195f7dd87f4418a745 = $this->env->getExtension("native_profiler");
        $__internal_84b335d0fae3f54bc7147aecae21548da18a6190a1c878195f7dd87f4418a745->enter($__internal_84b335d0fae3f54bc7147aecae21548da18a6190a1c878195f7dd87f4418a745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalesBundle:invoice:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b335d0fae3f54bc7147aecae21548da18a6190a1c878195f7dd87f4418a745->leave($__internal_84b335d0fae3f54bc7147aecae21548da18a6190a1c878195f7dd87f4418a745_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bea3448caa6a518ff09bd9ed23e7382c826f1a1b2c19b16dfc2c4968059ff334 = $this->env->getExtension("native_profiler");
        $__internal_bea3448caa6a518ff09bd9ed23e7382c826f1a1b2c19b16dfc2c4968059ff334->enter($__internal_bea3448caa6a518ff09bd9ed23e7382c826f1a1b2c19b16dfc2c4968059ff334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bea3448caa6a518ff09bd9ed23e7382c826f1a1b2c19b16dfc2c4968059ff334->leave($__internal_bea3448caa6a518ff09bd9ed23e7382c826f1a1b2c19b16dfc2c4968059ff334_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc2e5a2b107bd30d63c43d9829ed0a6cbc974f6fb7b031b9661cb938e746381a = $this->env->getExtension("native_profiler");
        $__internal_fc2e5a2b107bd30d63c43d9829ed0a6cbc974f6fb7b031b9661cb938e746381a->enter($__internal_fc2e5a2b107bd30d63c43d9829ed0a6cbc974f6fb7b031b9661cb938e746381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Edit Invoice ";
        
        $__internal_fc2e5a2b107bd30d63c43d9829ed0a6cbc974f6fb7b031b9661cb938e746381a->leave($__internal_fc2e5a2b107bd30d63c43d9829ed0a6cbc974f6fb7b031b9661cb938e746381a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_26598e9988f0666283b874090cfdea19a4e363f04f463809ec70835bf02b2d05 = $this->env->getExtension("native_profiler");
        $__internal_26598e9988f0666283b874090cfdea19a4e363f04f463809ec70835bf02b2d05->enter($__internal_26598e9988f0666283b874090cfdea19a4e363f04f463809ec70835bf02b2d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Invoice edit</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Number")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Address")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div id=\"addDiv\" class=\"form-group row edit-form\">
            ";
        // line 30
        $context["j"] = 0;
        // line 31
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "                <div>
                    <div class=\"col-xs-12 col-md-8\">
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["product"], "description", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
            echo "
                    </div>

                    <div class=\"col-xs-6 col-md-4\">
                        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["product"], "amount", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Amount")));
            echo "
                    </div>
                </div>

                <div class=\"clearfix\"></div>
                <hr />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        </div>


        <div class=\"clearfix\"></div>

        <div class=\"row\">

            <div class=\"form-group col-xs-4\">
                <input type=\"submit\" value=\"Save\" class=\"btn btn-info btn-block\" />
            </div>


            <div class=\"col-xs-4\">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("invoice_index");
        echo "\" class=\"btn btn-block btn-info\">Back to Invoice List</a>
            </div>

            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "products", array()), 'row');
        echo "
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            <div class=\"col-xs-4\">
                ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"Save\" value=\"Delete\" class=\"btn btn-block btn-info\">
                ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </div>
        </div>
";
        
        $__internal_26598e9988f0666283b874090cfdea19a4e363f04f463809ec70835bf02b2d05->leave($__internal_26598e9988f0666283b874090cfdea19a4e363f04f463809ec70835bf02b2d05_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3213bab8f3383b7987281ca6e6459d5382560fed93fbf41bdd6be49bac354e6d = $this->env->getExtension("native_profiler");
        $__internal_3213bab8f3383b7987281ca6e6459d5382560fed93fbf41bdd6be49bac354e6d->enter($__internal_3213bab8f3383b7987281ca6e6459d5382560fed93fbf41bdd6be49bac354e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-ui.min.js"), "html", null, true);
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
        
        $__internal_3213bab8f3383b7987281ca6e6459d5382560fed93fbf41bdd6be49bac354e6d->leave($__internal_3213bab8f3383b7987281ca6e6459d5382560fed93fbf41bdd6be49bac354e6d_prof);

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
        return array (  209 => 75,  204 => 74,  198 => 73,  187 => 68,  182 => 66,  176 => 63,  172 => 62,  166 => 59,  150 => 45,  137 => 38,  130 => 34,  126 => 32,  121 => 31,  119 => 30,  112 => 26,  105 => 22,  98 => 18,  92 => 15,  87 => 13,  83 => 11,  77 => 10,  65 => 9,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*             {{ form_row(edit_form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Email'}}) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_row(edit_form.date, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* */
/*         <div id="addDiv" class="form-group row edit-form">*/
/*             {% set j = 0 %}*/
/*             {% for product in edit_form.products %}*/
/*                 <div>*/
/*                     <div class="col-xs-12 col-md-8">*/
/*                         {{ form_row(product.description, {'attr': {'class': 'form-control', 'placeholder' : 'Description'}}) }}*/
/*                     </div>*/
/* */
/*                     <div class="col-xs-6 col-md-4">*/
/*                         {{ form_row(product.amount, {'attr': {'class': 'form-control', 'placeholder' : 'Amount'}}) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/*                 <hr />*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/* */
/* */
/*         <div class="clearfix"></div>*/
/* */
/*         <div class="row">*/
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
/*     <script src="{{ asset('bundles/js/jquery-ui.min.js') }}"></script>*/
/*     <script>*/
/*         $(function() {*/
/*             var invoiceDate = $( "#invoice_date" );*/
/*             invoiceDate.each(function(){*/
/*                 this.type="text";*/
/*             });*/
/*             invoiceDate.datepicker({*/
/*                 dateFormat: 'yy-mm-dd',*/
/*                 minDate: 0*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
