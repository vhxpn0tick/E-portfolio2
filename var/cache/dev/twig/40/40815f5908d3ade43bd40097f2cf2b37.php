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

/* e_portfolio/RT3.html.twig */
class __TwigTemplate_75e460f73f705f4dda2f9908b5a248b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/RT3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/RT3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/RT3.html.twig", 1);
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo7.png"), "html", null, true);
        echo "\" alt=\"Description de la photo\" class=\"border-primary marge2\" width=\"250\" height=\"auto\">
<div class=\"card border-primary mb-3 offset-xxl-1 test\"  style=\"max-width: 30rem;\">
    <div class=\"card-header\"><h1> Créer des outils et applications informatiques </h1>
        <br>
        <br>
        <br>  
    <div class=\"card-body\">
        <p><strong>Utiliser des systèmes informatiques et ses outils </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Lire, exécuter, corriger et modifier un programme</strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong> Traduire un algorithme en programme</strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Connaitre l'architecture et les technologie des sites web </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 60%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Choisir des mécanisme de gestion des données </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
             </div>
             <p><strong>S'intégrer dans un environnement propice au développement et au travail collaboratif </strong><p>
                <div class=\"progress\">
                  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                 </div>
             <p><strong>Programmation en language C </strong><p>
                <div class=\"progress\">
                  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                 </div>
            <p><strong>Programmation en language Python </strong><p>
              <div class=\"progress\">
                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
               </div>
            </div>
        </div>
        
    
    </div>
    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo8.png"), "html", null, true);
        echo "\" alt=\"Description de la photo\" class=\"rounded-corners marge\" width=\"250\" height=\"auto\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>     </p>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "e_portfolio/RT3.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 50,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<img src=\"{{ asset('photo7.png') }}\" alt=\"Description de la photo\" class=\"border-primary marge2\" width=\"250\" height=\"auto\">
<div class=\"card border-primary mb-3 offset-xxl-1 test\"  style=\"max-width: 30rem;\">
    <div class=\"card-header\"><h1> Créer des outils et applications informatiques </h1>
        <br>
        <br>
        <br>  
    <div class=\"card-body\">
        <p><strong>Utiliser des systèmes informatiques et ses outils </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Lire, exécuter, corriger et modifier un programme</strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong> Traduire un algorithme en programme</strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Connaitre l'architecture et les technologie des sites web </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 60%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p><strong>Choisir des mécanisme de gestion des données </strong><p>
            <div class=\"progress\">
              <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
             </div>
             <p><strong>S'intégrer dans un environnement propice au développement et au travail collaboratif </strong><p>
                <div class=\"progress\">
                  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                 </div>
             <p><strong>Programmation en language C </strong><p>
                <div class=\"progress\">
                  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                 </div>
            <p><strong>Programmation en language Python </strong><p>
              <div class=\"progress\">
                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
               </div>
            </div>
        </div>
        
    
    </div>
    <img src=\"{{ asset('photo8.png') }}\" alt=\"Description de la photo\" class=\"rounded-corners marge\" width=\"250\" height=\"auto\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>     </p>
    
{% endblock %}
", "e_portfolio/RT3.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\e_portfolio\\RT3.html.twig");
    }
}
