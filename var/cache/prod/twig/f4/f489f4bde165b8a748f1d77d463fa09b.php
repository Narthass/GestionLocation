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

/* index/index.html.twig */
class __TwigTemplate_9911acbe3f8c63bd93e50728e6f485b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Clients";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

";
        // line 11
        if ( !(null === ($context["alerter"] ?? null))) {
            // line 12
            echo "<div class='w3-border w3-border-red'>
<p>Les contrats suivant doivent etre payé aujourd'hui:</p>
    <ul class='w3-ul' style=\"width:30%\">
  
    
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["alerter"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
                // line 18
                echo "        <li> Contrat: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo " du client :";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    
    </ul>
</div>    
";
        } else {
            // line 24
            echo "  

";
        }
        // line 27
        echo "




<h1>Liste des clients</h1>

<table class=\"w3-table w3-bordered w3-centered\">
<tr>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Email</th>
  <th>Telephone</th>
   

</tr>
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 44
            echo "
<tr>
  <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
  <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
  <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
  
  <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" role=\"button\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" class=\" w3-btn w3-white w3-border w3-border-red w3-round-xlarge\">supprimer</a></td>
  <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_update", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-blue w3-round-xlarge\">modifier</a></td>
   <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_display", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-purple w3-round-xlarge\">contrats</a></td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<tr>
  <td><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_create");
        echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\">Ajouter un client</a></td>
  <td><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_create");
        echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-yellow w3-round-xlarge\">Ajouter un contrat</a></td>
 
  

</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  166 => 58,  163 => 57,  153 => 53,  149 => 52,  145 => 51,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 44,  120 => 43,  102 => 27,  97 => 24,  91 => 20,  78 => 18,  74 => 17,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\index.html.twig");
    }
}
