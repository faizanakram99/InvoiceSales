<?php

/* base.html.twig */
class __TwigTemplate_fad6d843621acbe88d66b8476e0f8abfb24ceddf979dca082e68cf17117301a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c639aeba51c34e5c5edea3f7c857349e99be497f168570fa86f4603fe44041c = $this->env->getExtension("native_profiler");
        $__internal_5c639aeba51c34e5c5edea3f7c857349e99be497f168570fa86f4603fe44041c->enter($__internal_5c639aeba51c34e5c5edea3f7c857349e99be497f168570fa86f4603fe44041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"author\" content=\"Faizan Akram!\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>Sales Invoice ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_5c639aeba51c34e5c5edea3f7c857349e99be497f168570fa86f4603fe44041c->leave($__internal_5c639aeba51c34e5c5edea3f7c857349e99be497f168570fa86f4603fe44041c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3535bc4ba66c994f5b84602e52eb794a20e0941be568c07269633ff54628b5b4 = $this->env->getExtension("native_profiler");
        $__internal_3535bc4ba66c994f5b84602e52eb794a20e0941be568c07269633ff54628b5b4->enter($__internal_3535bc4ba66c994f5b84602e52eb794a20e0941be568c07269633ff54628b5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Home ";
        
        $__internal_3535bc4ba66c994f5b84602e52eb794a20e0941be568c07269633ff54628b5b4->leave($__internal_3535bc4ba66c994f5b84602e52eb794a20e0941be568c07269633ff54628b5b4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68f5b3c9e47f380f4ebdbc22b05cd6d412764ffce1963ec57dc4894986affcac = $this->env->getExtension("native_profiler");
        $__internal_68f5b3c9e47f380f4ebdbc22b05cd6d412764ffce1963ec57dc4894986affcac->enter($__internal_68f5b3c9e47f380f4ebdbc22b05cd6d412764ffce1963ec57dc4894986affcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/styles.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_68f5b3c9e47f380f4ebdbc22b05cd6d412764ffce1963ec57dc4894986affcac->leave($__internal_68f5b3c9e47f380f4ebdbc22b05cd6d412764ffce1963ec57dc4894986affcac_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_956c883b4d05cad1a393765d58a6655bb9b3dea78b5bc32e0a5ea1b2a87dddd4 = $this->env->getExtension("native_profiler");
        $__internal_956c883b4d05cad1a393765d58a6655bb9b3dea78b5bc32e0a5ea1b2a87dddd4->enter($__internal_956c883b4d05cad1a393765d58a6655bb9b3dea78b5bc32e0a5ea1b2a87dddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

            ";
        
        $__internal_956c883b4d05cad1a393765d58a6655bb9b3dea78b5bc32e0a5ea1b2a87dddd4->leave($__internal_956c883b4d05cad1a393765d58a6655bb9b3dea78b5bc32e0a5ea1b2a87dddd4_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec70673a6f8dbf06bfa50824a42d25f3bebe60c0577ae5ce8f1730bb73efc591 = $this->env->getExtension("native_profiler");
        $__internal_ec70673a6f8dbf06bfa50824a42d25f3bebe60c0577ae5ce8f1730bb73efc591->enter($__internal_ec70673a6f8dbf06bfa50824a42d25f3bebe60c0577ae5ce8f1730bb73efc591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ec70673a6f8dbf06bfa50824a42d25f3bebe60c0577ae5ce8f1730bb73efc591->leave($__internal_ec70673a6f8dbf06bfa50824a42d25f3bebe60c0577ae5ce8f1730bb73efc591_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  111 => 21,  102 => 17,  96 => 16,  87 => 10,  82 => 9,  76 => 8,  64 => 7,  55 => 24,  53 => 21,  50 => 20,  48 => 16,  40 => 12,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="author" content="Faizan Akram!" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <title>Sales Invoice {% block title %} | Home {% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/css/styles.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {% block body %}*/
/* */
/* */
/*             {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/js/jquery-1.11.3.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
