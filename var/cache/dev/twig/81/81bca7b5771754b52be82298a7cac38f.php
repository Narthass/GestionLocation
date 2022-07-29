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
class __TwigTemplate_1ff556a1550602d1b93ff0aa915e4d5b extends Template
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<style>
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
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t</h1>
\t<td>
\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_create_for_client", ["clientId" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-warning text-light\">Ajouter un contrat</a>
\t</td>
\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 32, $this->source); })()), "contrats", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 33
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 33) == false)) {
                // line 34
                echo "
\t\t\t<h2>contrat :";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 35), "html", null, true);
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
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>

\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 55), "d/m/y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 57), "clientId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "client", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" role=\"button\" class=\"btn btn-outline-danger\">supprimer</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_update", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-info\">modifier</a>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payements_display", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-success\">payements</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"border-bottom-0\">
\t\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_archiver", ["contratId" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-brown w3-round-xlarge\">archiver</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t</table>
\t\t";
            }
            // line 76
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 77, $this->source); })()), "contrats", [], "any", false, false, false, 77));
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
            // line 78
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["contrat"], "archivé", [], "any", false, false, false, 78) == true)) {
                // line 79
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79) == 0)) {
                    // line 80
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
                // line 94
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "surface", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>

\t\t\t\t\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "loyer", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "MontantRestant", [], "any", false, false, false, 98), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "ProchaineEcheance", [], "any", false, false, false, 99), "d/m/y"), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 102
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
        // line 103
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
        return array (  284 => 103,  270 => 102,  264 => 99,  260 => 98,  256 => 97,  251 => 95,  248 => 94,  232 => 80,  229 => 79,  226 => 78,  208 => 77,  202 => 76,  193 => 70,  184 => 64,  177 => 60,  171 => 57,  166 => 55,  162 => 54,  158 => 53,  153 => 51,  134 => 35,  131 => 34,  128 => 33,  124 => 32,  119 => 30,  113 => 27,  109 => 26,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrats
{% endblock %}


{% block body %}
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
