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

/* layout/footer.html.twig */
class __TwigTemplate_a021997e38604c3df43c8c4c1e6eccea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        // line 1
        echo "<div class=\"container bg-info \">
  <footer class=\"py-3 my-4  \">
    <ul class=\"nav justify-content-center border-bottom border-light pb-3 mb-3\">
      
   
      <li class=\"nav-item\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\" class=\"nav-link px-2  text-light\">Mentions Legales</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2  text-light\">A propos</a></li>
    </ul>
    <p class=\"text-center text-light\">© 2022 Company, Inc</p>
  </footer>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container bg-info \">
  <footer class=\"py-3 my-4  \">
    <ul class=\"nav justify-content-center border-bottom border-light pb-3 mb-3\">
      
   
      <li class=\"nav-item\"><a href=\"{{path('mentions_legales')}}\" class=\"nav-link px-2  text-light\">Mentions Legales</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2  text-light\">A propos</a></li>
    </ul>
    <p class=\"text-center text-light\">© 2022 Company, Inc</p>
  </footer>
</div>", "layout/footer.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\layout\\footer.html.twig");
    }
}
