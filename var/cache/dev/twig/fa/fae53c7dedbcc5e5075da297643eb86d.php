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

/* index/payements.html.twig */
class __TwigTemplate_bff28355546aa2334e4c9cc3add7e736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/payements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/payements.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/payements.html.twig", 1);
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

        echo "Payements
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
\t</style>

\t";
        // line 20
        if (array_key_exists("alerte", $context)) {
            // line 21
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) || array_key_exists("alerte", $context) ? $context["alerte"] : (function () { throw new RuntimeError('Variable "alerte" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "
\t";
        }
        // line 23
        echo "

\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payement_create", ["contratId" => twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-yellow w3-round-xlarge\">Archiver un payement</a>


\t

\t<div class=\"w3-row w3-section\">
\t\t<div class=\"w3-col\" style=\"width:50px\">
\t\t
\t\t</div>
\t\t<div class=\"w3-container w3-content w3-center w3-padding-64\" style=\"max-width:800px\" id=\"form\">
\t\t\t";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 35, $this->source); })()), "MontantRestant", [], "any", false, false, false, 35) > 0)) {
            // line 36
            echo "\t\t\t<h2 class=\"w3-panel w3-red w3-card-4 w3-center\">Montant restant à payer  :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 36, $this->source); })()), "MontantRestant", [], "any", false, false, false, 36), "html", null, true);
            echo "\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 39, $this->source); })()), "MontantRestant", [], "any", false, false, false, 39) < 0)) {
            // line 40
            echo "\t\t\t<h2 class=\"w3-panel w3-green w3-card-4 w3-center\">Montant à rembourser :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 40, $this->source); })()), "MontantRestant", [], "any", false, false, false, 40), "html", null, true);
            echo "\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>
\t\t\t";
        } else {
            // line 44
            echo "\t\t\t<h2 class=\"w3-panel w3-green w3-card-4 w3-center\">Montant entièrement réglé pour l'échéance en cours :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 44, $this->source); })()), "MontantRestant", [], "any", false, false, false, 44), "html", null, true);
            echo "\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>

\t\t\t";
        }
        // line 49
        echo "\t\t\t<h2 class=\"w3-center\">Entrer un nouveau règlement</h2>
\t\t\t<div>
\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form');
        echo "
\t\t\t\t
\t\t\t</div>
\t\t</div>


\t\t<br>


\t\t<h1>Liste des payements de
\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 61, $this->source); })()), "client", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
        echo "
\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 62, $this->source); })()), "client", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
        echo "
\t\t\tpour le contrat:
\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "
\t\t</h1>

\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payements"]) || array_key_exists("payements", $context) ? $context["payements"] : (function () { throw new RuntimeError('Variable "payements" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payement"]) {
            // line 68
            echo "\t\t\t";
            if ( !(null === $context["payement"])) {
                // line 69
                echo "

\t\t\t\t<h2>payement :";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payement"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "</h2>
\t\t\t\t<table class=\"w3-table w3-bordered w3-centered \">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["payement"], "TypePayement", [], "any", false, false, false, 75) == "Payement")) {
                    // line 76
                    echo "\t\t\t\t\t\t\tPayement
\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\tRemboursement
\t\t\t\t\t\t\t";
                }
                // line 80
                echo "
\t\t\t\t\t\t</th>


\t\t\t\t\t\t<th>Moyen payement</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t</tr>


\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payement"], "SommePayee", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payement"], "MoyenPayement", [], "any", false, false, false, 93), "html", null, true);
                echo "


\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 98
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payement"], "date", [], "any", false, false, false, 98), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t";
            }
            // line 104
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/payements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 106,  252 => 104,  243 => 98,  235 => 93,  229 => 90,  217 => 80,  213 => 78,  209 => 76,  207 => 75,  200 => 71,  196 => 69,  193 => 68,  189 => 67,  183 => 64,  178 => 62,  174 => 61,  161 => 51,  157 => 49,  148 => 44,  140 => 40,  138 => 39,  131 => 36,  129 => 35,  116 => 25,  112 => 23,  106 => 21,  104 => 20,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Payements
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
\t</style>

\t{% if alerte is defined %}
\t\t{{ alerte }}
\t{% endif %}


\t<a href=\"{{path('payement_create',{'contratId':contrat.id})}}\" role=\"button\" class=\"w3-btn w3-white w3-border w3-border-yellow w3-round-xlarge\">Archiver un payement</a>


\t

\t<div class=\"w3-row w3-section\">
\t\t<div class=\"w3-col\" style=\"width:50px\">
\t\t
\t\t</div>
\t\t<div class=\"w3-container w3-content w3-center w3-padding-64\" style=\"max-width:800px\" id=\"form\">
\t\t\t{% if contrat.MontantRestant > 0 %}
\t\t\t<h2 class=\"w3-panel w3-red w3-card-4 w3-center\">Montant restant à payer  :{{contrat.MontantRestant}}\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>
\t\t\t{% elseif contrat.MontantRestant < 0 %}
\t\t\t<h2 class=\"w3-panel w3-green w3-card-4 w3-center\">Montant à rembourser :{{contrat.MontantRestant}}\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>
\t\t\t{% else %}
\t\t\t<h2 class=\"w3-panel w3-green w3-card-4 w3-center\">Montant entièrement réglé pour l'échéance en cours :{{contrat.MontantRestant}}\t<i class=\"material-icons-outlined\">
\t\t\t\teuro_symbol
\t\t\t</i></h2>

\t\t\t{% endif %}
\t\t\t<h2 class=\"w3-center\">Entrer un nouveau règlement</h2>
\t\t\t<div>
\t\t\t\t{{ form(form) }}
\t\t\t\t
\t\t\t</div>
\t\t</div>


\t\t<br>


\t\t<h1>Liste des payements de
\t\t\t{{ contrat.client.nom }}
\t\t\t{{ contrat.client.prenom }}
\t\t\tpour le contrat:
\t\t\t{{ contrat.id }}
\t\t</h1>

\t\t{% for payement in payements %}
\t\t\t{% if payement is not null %}


\t\t\t\t<h2>payement :{{payement.id}}</h2>
\t\t\t\t<table class=\"w3-table w3-bordered w3-centered \">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t{% if payement.TypePayement == 'Payement'%}
\t\t\t\t\t\t\tPayement
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRemboursement
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</th>


\t\t\t\t\t\t<th>Moyen payement</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t</tr>


\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{payement.SommePayee}}</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{payement.MoyenPayement}}


\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{payement.date|date('d/m/Y')}}
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t{% endif %}

\t\t{% endfor %}

\t{% endblock %}
", "index/payements.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\payements.html.twig");
    }
}
