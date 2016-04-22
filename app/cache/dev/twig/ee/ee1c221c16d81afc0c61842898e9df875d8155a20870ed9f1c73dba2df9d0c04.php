<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5188da0c5bed30a49d660235f8c7d2499f2d6ee2b605f92dd40e1e7b0dabd27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db8c543a4ad64c468fee416c864a6773d0478907867a35d86cbffe8d5ddd317c = $this->env->getExtension("native_profiler");
        $__internal_db8c543a4ad64c468fee416c864a6773d0478907867a35d86cbffe8d5ddd317c->enter($__internal_db8c543a4ad64c468fee416c864a6773d0478907867a35d86cbffe8d5ddd317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8c543a4ad64c468fee416c864a6773d0478907867a35d86cbffe8d5ddd317c->leave($__internal_db8c543a4ad64c468fee416c864a6773d0478907867a35d86cbffe8d5ddd317c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be291e6b171385962446c77539ba6fe3641b9010d129e93b49ac637b37f44652 = $this->env->getExtension("native_profiler");
        $__internal_be291e6b171385962446c77539ba6fe3641b9010d129e93b49ac637b37f44652->enter($__internal_be291e6b171385962446c77539ba6fe3641b9010d129e93b49ac637b37f44652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be291e6b171385962446c77539ba6fe3641b9010d129e93b49ac637b37f44652->leave($__internal_be291e6b171385962446c77539ba6fe3641b9010d129e93b49ac637b37f44652_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d0ef7cc1fcccb4c4acd95835becd1395ccea9900302932d365bf8da439e32af = $this->env->getExtension("native_profiler");
        $__internal_0d0ef7cc1fcccb4c4acd95835becd1395ccea9900302932d365bf8da439e32af->enter($__internal_0d0ef7cc1fcccb4c4acd95835becd1395ccea9900302932d365bf8da439e32af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d0ef7cc1fcccb4c4acd95835becd1395ccea9900302932d365bf8da439e32af->leave($__internal_0d0ef7cc1fcccb4c4acd95835becd1395ccea9900302932d365bf8da439e32af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d8222dae2431bccef1bb0948ef07e7b68340f1cc3378d6f49b8e9119c2c7af1 = $this->env->getExtension("native_profiler");
        $__internal_3d8222dae2431bccef1bb0948ef07e7b68340f1cc3378d6f49b8e9119c2c7af1->enter($__internal_3d8222dae2431bccef1bb0948ef07e7b68340f1cc3378d6f49b8e9119c2c7af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d8222dae2431bccef1bb0948ef07e7b68340f1cc3378d6f49b8e9119c2c7af1->leave($__internal_3d8222dae2431bccef1bb0948ef07e7b68340f1cc3378d6f49b8e9119c2c7af1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
