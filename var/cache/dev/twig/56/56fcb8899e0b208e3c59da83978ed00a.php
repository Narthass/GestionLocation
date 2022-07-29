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

/* index/mentionsLegales.html.twig */
class __TwigTemplate_a68f70c375d089595fb12438c50dcd70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/mentionsLegales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/mentionsLegales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/mentionsLegales.html.twig", 1);
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

        echo "Bienvenue sur Interloc ! ";
        
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
        echo "        <h1>Mentions légales</h1>

En vigueur au 21/07/2022
<p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
visiteurs, ci-après l\"\"Utilisateur\", du site www.interloc.fr , ci-après le \"Site\", les présentes mentions
légales.
La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve
des présentes mentions légales.
Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».</p>

<h2>ARTICLE 1 - L'EDITEUR</h2>
<p>L’édition et la direction de la publication du Site est assurée par Clergue Jordan, domiciliée 9 allée des
sablières, dont le numéro de téléphone est 0652525252, et l'adresse e-mail
jordan.clergue@gmail.com.
ci-après l'\"Editeur\".
</p>
<h2>ARTICLE 2 - L'HEBERGEUR</h2>
<p>L'hébergeur du Site est la société O2SWITCH, dont le siège social est situé au 224 BD GUSTAVE
FLAUBERT, 63000 CLERMONT-FERRAND , avec le numéro de téléphone : 0444446040 +
adresse mail de contact
</p>
<h2>ARTICLE 3 - ACCES AU SITE</h2>
<p>Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
programmée ou non et pouvant découlant d’une nécessité de maintenance.
En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.
</p>
<h2>ARTICLE 4 - COLLECTE DES DONNEES</h2>
<p>Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
mesure où il ne collecte aucune donnée concernant les utilisateurs.
Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
</p>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/mentionsLegales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur Interloc ! {% endblock %}

{% block body %}
        <h1>Mentions légales</h1>

En vigueur au 21/07/2022
<p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
visiteurs, ci-après l\"\"Utilisateur\", du site www.interloc.fr , ci-après le \"Site\", les présentes mentions
légales.
La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve
des présentes mentions légales.
Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».</p>

<h2>ARTICLE 1 - L'EDITEUR</h2>
<p>L’édition et la direction de la publication du Site est assurée par Clergue Jordan, domiciliée 9 allée des
sablières, dont le numéro de téléphone est 0652525252, et l'adresse e-mail
jordan.clergue@gmail.com.
ci-après l'\"Editeur\".
</p>
<h2>ARTICLE 2 - L'HEBERGEUR</h2>
<p>L'hébergeur du Site est la société O2SWITCH, dont le siège social est situé au 224 BD GUSTAVE
FLAUBERT, 63000 CLERMONT-FERRAND , avec le numéro de téléphone : 0444446040 +
adresse mail de contact
</p>
<h2>ARTICLE 3 - ACCES AU SITE</h2>
<p>Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
programmée ou non et pouvant découlant d’une nécessité de maintenance.
En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.
</p>
<h2>ARTICLE 4 - COLLECTE DES DONNEES</h2>
<p>Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
mesure où il ne collecte aucune donnée concernant les utilisateurs.
Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
</p>




{% endblock %}", "index/mentionsLegales.html.twig", "C:\\xampp\\htdocs\\ProjetCaravane\\templates\\index\\mentionsLegales.html.twig");
    }
}
