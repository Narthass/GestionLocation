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

/* index/clients.html.twig */
class __TwigTemplate_43cd79384a182e77e04d24524a77aae4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/clients.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/clients.html.twig", 1);
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

        echo "Clients";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

";
        // line 11
        if ( !(null === (isset($context["alerter"]) || array_key_exists("alerter", $context) ? $context["alerter"] : (function () { throw new RuntimeError('Variable "alerter" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "<div class='alert alert-danger'>
<p>Les contrats suivant doivent etre payé aujourd'hui:</p>
    <ul class='w3-ul' style=\"width:30%\">
  
    
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alerter"]) || array_key_exists("alerter", $context) ? $context["alerter"] : (function () { throw new RuntimeError('Variable "alerter" does not exist.', 17, $this->source); })()));
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

<table class=\"table border-info\">
<tr>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Email</th>
  <th>Telephone</th>
  <td></td>
  <td></td>
  <td></td>
   

</tr>
";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 48
                echo "



<tr>
  <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
  <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
  <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
  <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
  
  <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete_admin", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" role=\"button\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" class=\" btn btn-outline-danger\">supprimer</a></td>
  <td><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_update_admin", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-info\">modifier</a></td>
   <td><a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backoffice", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-success\">contrats</a></td>

</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BAILLEUR")) {
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "clients", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 68
                echo "



<tr>
  <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
  <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
  <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
  <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
  
   <td><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" role=\"button\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" class=\" btn btn-outline-danger\">supprimer</a></td>
  <td><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_update", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-info\">modifier</a></td>
   <td><a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_display", ["clientId" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-outline-success\">contrats</a></td>

</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 85
        echo "

<tr>
  <td class=\"border-bottom-0\"><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_create");
        echo "\" role=\"button\" class=\"btn btn-success text-light\">Ajouter un client</a></td>
  ";
        // line 89
        if ( !twig_test_empty((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 89, $this->source); })()))) {
            // line 90
            echo "  <td class=\"border-bottom-0\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_create");
            echo "\" role=\"button\" class=\"btn btn-warning text-light\">Ajouter un contrat</a></td>
  ";
        }
        // line 92
        echo "  

</tr>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 92,  265 => 90,  263 => 89,  259 => 88,  254 => 85,  243 => 80,  239 => 79,  235 => 78,  230 => 76,  226 => 75,  222 => 74,  218 => 73,  211 => 68,  207 => 67,  205 => 66,  202 => 65,  191 => 60,  187 => 59,  183 => 58,  178 => 56,  174 => 55,  170 => 54,  166 => 53,  159 => 48,  155 => 47,  153 => 46,  132 => 27,  127 => 24,  121 => 20,  108 => 18,  104 => 17,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clients{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

{% if alerter is not null %}
<div class='alert alert-danger'>
<p>Les contrats suivant doivent etre payé aujourd'hui:</p>
    <ul class='w3-ul' style=\"width:30%\">
  
    
    {% for contrat in alerter %}
        <li> Contrat: {{ contrat.id }} du client :{{ contrat.client.nom }} {{ contrat.client.prenom }}</li>
    {% endfor %}
    
    </ul>
</div>    
{% else %}
  

{% endif %}





<h1>Liste des clients</h1>

<table class=\"table border-info\">
<tr>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Email</th>
  <th>Telephone</th>
  <td></td>
  <td></td>
  <td></td>
   

</tr>
{% if is_granted ('ROLE_ADMIN') %}
{% for client in clients %}




<tr>
  <td>{{client.nom}}</td>
  <td>{{client.prenom}}</td>
  <td>{{client.email}}</td>
  <td>{{client.telephone}}</td>
  
  <td><a href=\"{{path('client_delete_admin',{'clientId':client.id})}}\" role=\"button\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" class=\" btn btn-outline-danger\">supprimer</a></td>
  <td><a href=\"{{path('client_update_admin',{'clientId':client.id})}}\" role=\"button\" class=\"btn btn-outline-info\">modifier</a></td>
   <td><a href=\"{{path('admin_backoffice',{'clientId':client.id})}}\" role=\"button\" class=\"btn btn-outline-success\">contrats</a></td>

</tr>
{% endfor %}
{% endif %}

{% if is_granted ('ROLE_BAILLEUR') %}
{% for client in app.user.clients %}




<tr>
  <td>{{client.nom}}</td>
  <td>{{client.prenom}}</td>
  <td>{{client.email}}</td>
  <td>{{client.telephone}}</td>
  
   <td><a href=\"{{path('client_delete',{'clientId':client.id})}}\" role=\"button\" onclick=\"return confirm('etes vous sur de vouloir supprimer ce client?')\" class=\" btn btn-outline-danger\">supprimer</a></td>
  <td><a href=\"{{path('client_update',{'clientId':client.id})}}\" role=\"button\" class=\"btn btn-outline-info\">modifier</a></td>
   <td><a href=\"{{path('contrat_display',{'clientId':client.id})}}\" role=\"button\" class=\"btn btn-outline-success\">contrats</a></td>

</tr>
{% endfor %}
{% endif %}


<tr>
  <td class=\"border-bottom-0\"><a href=\"{{path('client_create')}}\" role=\"button\" class=\"btn btn-success text-light\">Ajouter un client</a></td>
  {% if clients is not empty %}
  <td class=\"border-bottom-0\"><a href=\"{{path('contrat_create')}}\" role=\"button\" class=\"btn btn-warning text-light\">Ajouter un contrat</a></td>
  {% endif %}
  

</tr>
</table>
{% endblock %}
", "index/clients.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\clients.html.twig");
    }
}
