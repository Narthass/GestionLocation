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

/* emails/alerte.html.twig */
class __TwigTemplate_25ef63727d5e295a2eb2e3aaa3de3ce6 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p>Les contrats suivant doivent etre payé aujourd'hui:</p>
  <ul>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerte"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 9
            echo "    <li>
    Le contrat : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "
    du client: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 11), "prenom", [], "any", false, false, false, 11), "html", null, true);
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "emails/alerte.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  77 => 11,  73 => 10,  70 => 9,  66 => 8,  62 => 6,  58 => 5,  52 => 3,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/alerte.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\emails\\alerte.html.twig");
    }
}
