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

/* index/contrats.html.twig */
class __TwigTemplate_690593d3a80fe3913dc436be7215c8de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/contrats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contrats
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<script>
\t\tfunction afficherContratsArchives() {
var bouttonContratsArchives = document.getElementById(\"contratsArchives\");
if (bouttonContratsArchives.style.display === \"none\") {
bouttonContratsArchives.style.display = \"block\";
} else {
bouttonContratsArchives.style.display = \"none\";
}
}
\t</script>
";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<style>
\t.example-wrapper {
\t\tmargin: 1em auto;
\t\tmax-width: 800px;
\t\twidth: 95%;
\t\tfont: 18px / 1.5 sans-serif;
\t}
\t.example-wrapper code {
\t\tbackground: #F5F5F5;
\t\tpadding: 2px 6px;
\t}

\t#contratsArchives{
\t\tdisplay:none;
\t}
\t
</style>

<h1>Liste des contrats de
\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "
</h1>
<td>
\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_create_for_client", ["clientId" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-yellow w3-round-xlarge\">Ajouter un contrat</a>
</td>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "contrats", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 46
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 46) == false)) {
                // line 47
                echo "
\t\t<h2>contrat :";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "</h2>
\t\t<table class=\"w3-table w3-bordered w3-centered \">
\t\t\t<tr>
\t\t\t\t<th>Surface</th>


\t\t\t\t<th>Montant du loyer</th>
\t\t\t\t<th>Montant restant à payer</th>
\t\t\t\t<th>Date de la prochaine échéance</th>
\t\t\t</tr>


\t\t\t<tr>
\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>

\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 65), "d/m/y"), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-red w3-round-xlarge\">supprimer</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_update", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-blue w3-round-xlarge\">modifier</a>
\t\t\t\t</td>
\t\t\t\t<td></td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payements_display", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-purple w3-round-xlarge\">payements</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</td>
\t\t<td></td>
\t\t<td>
\t\t\t<a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_archiver", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-brown w3-round-xlarge\">archiver</a>
\t\t</td>
\t</td>
</tr></table>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "contrats", [], "any", false, false, false, 83));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 83) == true)) {
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 83) == 0)) {
                    // line 84
                    echo "<button onclick=\"afficherContratsArchives()\">Les contrats archivés</button>


<div id=\"contratsArchives\">
\t<table>
\t\t<tr>
\t\t\t<th>Surface</th>


\t\t\t<th>Montant du loyer</th>
\t\t\t<th>Montant restant à payer</th>
\t\t\t<th>Date de la prochaine échéance</th>
\t\t</tr>
\t";
                }
                // line 98
                echo "\t<tr>
\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>

\t\t<td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 103), "d/m/y"), "html", null, true);
                echo "</td>
\t</tr>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</table></div>";
    }

    public function getTemplateName()
    {
        return "index/contrats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 105,  243 => 103,  239 => 102,  235 => 101,  230 => 99,  227 => 98,  211 => 84,  192 => 83,  181 => 80,  172 => 74,  165 => 70,  159 => 67,  154 => 65,  150 => 64,  146 => 63,  141 => 61,  125 => 48,  122 => 47,  119 => 46,  115 => 45,  110 => 43,  104 => 40,  100 => 39,  79 => 20,  75 => 19,  60 => 7,  56 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/contrats.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\contrats.html.twig");
    }
}
