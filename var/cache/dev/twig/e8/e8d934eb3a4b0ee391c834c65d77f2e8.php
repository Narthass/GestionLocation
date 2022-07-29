<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/header.html.twig */
class __TwigTemplate_3ccbc76ddda00adc606b0e6e472adfdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-success\">
\t<div class=\"container-fluid d-flex justify-content-end\" >
\t\t<a class=\"navbar-brand h-100 \" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" id='logo'><img class='h-100' src='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "'></a>
\t    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav  mb-2 mb-lg-0 \">
\t\t\t\t<li class=\"nav-item bg-success \">
\t\t\t\t\t<a class=\"nav-link active text-light h-100\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Index</a>
\t\t\t\t</li>


\t\t\t\t";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle bg-success text-light\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tVos options
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 19
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 20
                echo "\t\t\t\t\t\t\t<ul class=\"dropdown-menu bg-success\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backoffice");
                echo "\">Client</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Deconnection</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
            } else {
                // line 31
                echo "
\t\t\t\t\t\t\t<ul class=\"dropdown-menu bg-success\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
                echo "\">Client</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Deconnection</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t</li>

\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t<li class=\"nav-item bg-success text-light\">
\t\t\t\t\t\t<a class=\"nav-link active text-light\" aria-current=\"page\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item bg-success\">
\t\t\t\t\t\t<a class=\"nav-link active text-light\" aria-current=\"page\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  127 => 48,  121 => 45,  118 => 44,  113 => 41,  106 => 37,  100 => 34,  95 => 31,  86 => 25,  80 => 22,  76 => 20,  74 => 19,  68 => 15,  66 => 14,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-success\">
\t<div class=\"container-fluid d-flex justify-content-end\" >
\t\t<a class=\"navbar-brand h-100 \" href=\"{{path('app_index')}}\" id='logo'><img class='h-100' src='{{asset('images/logo.png')}}'></a>
\t    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav  mb-2 mb-lg-0 \">
\t\t\t\t<li class=\"nav-item bg-success \">
\t\t\t\t\t<a class=\"nav-link active text-light h-100\" aria-current=\"page\" href=\"{{path('app_index')}}\">Index</a>
\t\t\t\t</li>


\t\t\t\t{% if is_granted ('ROLE_USER')%}
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle bg-success text-light\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tVos options
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if is_granted ('ROLE_ADMIN')%}
\t\t\t\t\t\t\t<ul class=\"dropdown-menu bg-success\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"{{path('admin_backoffice')}}\">Client</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"{{path('app_logout')}}\">Deconnection</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<ul class=\"dropdown-menu bg-success\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"{{path('app_client')}}\">Client</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item bg-success text-light\" href=\"{{path('app_logout')}}\">Deconnection</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>

\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item bg-success text-light\">
\t\t\t\t\t\t<a class=\"nav-link active text-light\" aria-current=\"page\" href=\"{{path('app_register')}}\">S'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item bg-success\">
\t\t\t\t\t\t<a class=\"nav-link active text-light\" aria-current=\"page\" href=\"{{path('app_login')}}\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "layout/header.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\layout\\header.html.twig");
    }
}
