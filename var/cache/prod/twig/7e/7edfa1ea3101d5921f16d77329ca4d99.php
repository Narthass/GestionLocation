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
class __TwigTemplate_84f8057bf5cedf5890508b546d233a2b extends Template
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
        // line 1
        echo "<div class=\"w3-bar w3-light-grey\">
    <a href=\"/\" class=\"w3-bar-item w3-button w3-green\">Clients</a>
    
   
    <a href=\"javascript:void(0)\" class=\"w3-bar-item w3-button w3-right\"><i class=\"fa fa-search\"></i></a>
  </div>";
    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/header.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\layout\\header.html.twig");
    }
}
