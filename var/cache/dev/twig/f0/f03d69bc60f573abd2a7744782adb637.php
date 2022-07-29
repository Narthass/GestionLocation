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
class __TwigTemplate_4ef40d24431e688e9bbe52fd100df76d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/contrats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/contrats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/contrats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contrats
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "<script>   
function afficherContratsArchives(){
\tvar bouttonContratsArchives = document.getElementById(\"contratsArchives\");
    if (bouttonContratsArchives.style.display == \"none\") {
    bouttonContratsArchives.style.display = \"block\";
    } else {
    bouttonContratsArchives.style.display = \"none\";
    }}
    
    afficherContratsArchives();
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}

\t\t#contratsArchives {
\t\t\tdisplay: none;
\t\t}
\t</style>

\t<h1>Liste des contrats de
\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "
\t</h1>
\t<td>
\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_create_for_client", ["clientId" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-warning text-light\">Ajouter un contrat</a>
\t</td>
\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "contrats", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 46
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 46) == false)) {
                // line 47
                echo "
\t\t\t<h2>contrat :";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "</h2>
\t\t\t<table class=\"table border-info\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Surface</th>


\t\t\t\t\t<th>Montant du loyer</th>
\t\t\t\t\t<th>Montant restant à payer</th>
\t\t\t\t\t<th>Date de la prochaine échéance</th>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>


\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>

\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 68), "d/m/y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 70), "clientId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" role=\"button\" class=\"btn btn-outline-danger\">supprimer</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_update", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-info\">modifier</a>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payements_display", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-success\">payements</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"border-bottom-0\">
\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_archiver", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-brown w3-round-xlarge\">archiver</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t</table>
\t\t";
            }
            // line 89
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 90, $this->source); })()), "contrats", [], "any", false, false, false, 90));
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
            // line 91
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 91) == true)) {
                // line 92
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92) == 0)) {
                    // line 93
                    echo "\t\t\t\t<button onclick=\"afficherContratsArchives()\">Les contrats archivés</button>


\t\t\t\t<div id=\"contratsArchives\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Surface</th>


\t\t\t\t\t\t\t<th>Montant du loyer</th>
\t\t\t\t\t\t\t<th>Montant restant à payer</th>
\t\t\t\t\t\t\t<th>Date de la prochaine échéance</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>

\t\t\t\t\t\t<td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 112), "d/m/y"), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 115
            echo "\t\t\t";
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
        // line 116
        echo "\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  317 => 116,  303 => 115,  297 => 112,  293 => 111,  289 => 110,  284 => 108,  281 => 107,  265 => 93,  262 => 92,  259 => 91,  241 => 90,  235 => 89,  226 => 83,  217 => 77,  210 => 73,  204 => 70,  199 => 68,  195 => 67,  191 => 66,  186 => 64,  167 => 48,  164 => 47,  161 => 46,  157 => 45,  152 => 43,  146 => 40,  142 => 39,  121 => 20,  111 => 19,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrats
{% endblock %}

{% block javascripts %}
<script>   
function afficherContratsArchives(){
\tvar bouttonContratsArchives = document.getElementById(\"contratsArchives\");
    if (bouttonContratsArchives.style.display == \"none\") {
    bouttonContratsArchives.style.display = \"block\";
    } else {
    bouttonContratsArchives.style.display = \"none\";
    }}
    
    afficherContratsArchives();
\t</script>
{% endblock %}
{% block body %}
\t
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}

\t\t#contratsArchives {
\t\t\tdisplay: none;
\t\t}
\t</style>

\t<h1>Liste des contrats de
\t\t{{ client.nom }}
\t\t{{ client.prenom }}
\t</h1>
\t<td>
\t\t<a href=\"{{path('contrat_create_for_client',{'clientId':client.id})}}\" role=\"button\" class=\"btn btn-warning text-light\">Ajouter un contrat</a>
\t</td>
\t{% for contrat in client.contrats %}
\t\t{% if contrat.archivé == false %}

\t\t\t<h2>contrat :{{contrat.id}}</h2>
\t\t\t<table class=\"table border-info\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Surface</th>


\t\t\t\t\t<th>Montant du loyer</th>
\t\t\t\t\t<th>Montant restant à payer</th>
\t\t\t\t\t<th>Date de la prochaine échéance</th>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>


\t\t\t\t<tr>
\t\t\t\t\t<td>{{contrat.surface}}</td>

\t\t\t\t\t<td>{{contrat.loyer}}</td>
\t\t\t\t\t<td>{{contrat.MontantRestant}}</td>
\t\t\t\t\t<td>{{contrat.ProchaineEcheance | date('d/m/y')}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('contrat_delete',{'contratId':contrat.id,'clientId':contrat.client.id})}}\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" role=\"button\" class=\"btn btn-outline-danger\">supprimer</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('contrat_update',{'contratId':contrat.id})}}\" role=\"button\" class=\"btn btn-outline-info\">modifier</a>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('payements_display',{'contratId':contrat.id})}}\" role=\"button\" class=\"btn btn-outline-success\">payements</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"border-bottom-0\">
\t\t\t\t\t\t<a href=\"{{path('contrat_archiver',{'contratId':contrat.id})}}\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-brown w3-round-xlarge\">archiver</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t</table>
\t\t{% endif %}
\t{% endfor %}
\t{% for contrat in client.contrats %}
\t\t{% if contrat.archivé == true %}
\t\t\t{% if loop.index0 == 0 %}
\t\t\t\t<button onclick=\"afficherContratsArchives()\">Les contrats archivés</button>


\t\t\t\t<div id=\"contratsArchives\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Surface</th>


\t\t\t\t\t\t\t<th>Montant du loyer</th>
\t\t\t\t\t\t\t<th>Montant restant à payer</th>
\t\t\t\t\t\t\t<th>Date de la prochaine échéance</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{contrat.surface}}</td>

\t\t\t\t\t\t<td>{{contrat.loyer}}</td>
\t\t\t\t\t\t<td>{{contrat.MontantRestant}}</td>
\t\t\t\t\t\t<td>{{contrat.ProchaineEcheance | date('d/m/y')}}</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</table>
\t</div>
{% endblock %}
", "index/contrats.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\contrats.html.twig");
    }
}
