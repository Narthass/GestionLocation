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

/* base.html.twig */
class __TwigTemplate_395f4c23245b5e2eeb73850f21bc003d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t
\t\t
\t\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Outlined\" rel=\"stylesheet\">
\t
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 15
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
\t\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "\t</head>
\t<body>
\t\t";
        // line 24
        $this->loadTemplate("layout/header.html.twig", "base.html.twig", 24)->display($context);
        // line 25
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "            <div class=\"w3-panel w3-light-green\" id=\"flash\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t
\t\t   
\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Chabotterie vie!
\t\t\t";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  130 => 30,  123 => 20,  119 => 19,  112 => 16,  108 => 15,  100 => 6,  92 => 31,  89 => 30,  80 => 27,  77 => 26,  72 => 25,  70 => 24,  66 => 22,  64 => 19,  61 => 18,  58 => 15,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\base.html.twig");
    }
}
