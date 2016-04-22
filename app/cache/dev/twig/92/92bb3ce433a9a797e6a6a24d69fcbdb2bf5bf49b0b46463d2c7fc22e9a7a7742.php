<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_656626e102afb74f052340672eb0deae33c17e7071aef4b9a0990929a14d4a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95765c0a38128ca8c296116c558e76d61476d7ff2408c385ed687445bde24dae = $this->env->getExtension("native_profiler");
        $__internal_95765c0a38128ca8c296116c558e76d61476d7ff2408c385ed687445bde24dae->enter($__internal_95765c0a38128ca8c296116c558e76d61476d7ff2408c385ed687445bde24dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95765c0a38128ca8c296116c558e76d61476d7ff2408c385ed687445bde24dae->leave($__internal_95765c0a38128ca8c296116c558e76d61476d7ff2408c385ed687445bde24dae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b973804529cfc72bfc05cb23529d9ceb1a80fde796c5d09ffedc4ebe5fa9234 = $this->env->getExtension("native_profiler");
        $__internal_1b973804529cfc72bfc05cb23529d9ceb1a80fde796c5d09ffedc4ebe5fa9234->enter($__internal_1b973804529cfc72bfc05cb23529d9ceb1a80fde796c5d09ffedc4ebe5fa9234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b973804529cfc72bfc05cb23529d9ceb1a80fde796c5d09ffedc4ebe5fa9234->leave($__internal_1b973804529cfc72bfc05cb23529d9ceb1a80fde796c5d09ffedc4ebe5fa9234_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5119235907ee42d642f91f32cf58413b63e6ec5d55479d8ed15aad4117af4769 = $this->env->getExtension("native_profiler");
        $__internal_5119235907ee42d642f91f32cf58413b63e6ec5d55479d8ed15aad4117af4769->enter($__internal_5119235907ee42d642f91f32cf58413b63e6ec5d55479d8ed15aad4117af4769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5119235907ee42d642f91f32cf58413b63e6ec5d55479d8ed15aad4117af4769->leave($__internal_5119235907ee42d642f91f32cf58413b63e6ec5d55479d8ed15aad4117af4769_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d3e52ede0de6ba9e2d9185ecf92a4e595845c31716291df82966d693fbdee8 = $this->env->getExtension("native_profiler");
        $__internal_44d3e52ede0de6ba9e2d9185ecf92a4e595845c31716291df82966d693fbdee8->enter($__internal_44d3e52ede0de6ba9e2d9185ecf92a4e595845c31716291df82966d693fbdee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44d3e52ede0de6ba9e2d9185ecf92a4e595845c31716291df82966d693fbdee8->leave($__internal_44d3e52ede0de6ba9e2d9185ecf92a4e595845c31716291df82966d693fbdee8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
