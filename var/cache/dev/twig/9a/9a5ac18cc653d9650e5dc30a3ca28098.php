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

/* e_portfolio/index.html.twig */
class __TwigTemplate_242d31781535af628ecbef73e6fcf828 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/index.html.twig", 1);
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
        echo "
<div class=\"example-wrapper\">
    <br>
    <br>
    <h3 class=\"text-center\">Bonjour , 
    <br> Jeune homme actif et investi, je saurais mettre à disposition toutes mes compétences afin de <br> faire proposer une excellente prestation à votre clientèle  .</h3>
    <br>
    <br>
    <br>
    
      <div class=\"card border-primary mb-3 mx-1 test\"  style=\"max-width: 30rem;\">
        <div class=\"card-header\">Information Personnelle</div>
        <div class=\"card-body\">
          <p class=\"card-text\">Nom : BOVY </p>
          <p class=\"card-text\">Prénom : Mathieu </p>
          <p class=\"card-text\">Date de naissance : 12/03/2005</p>
          <p class=\"card-text\">Adresse : 224 chemin de la croix rouge 42330 Aveizieux</p>
          <p class=\"card-text\">Mail : mathieubovydumas@gmail.com</p>
          <p class=\"card-text\">Numéro de téléphone : 07 68 56 71 22 </p>
          <a href=\"/infos\" class=\"btn btn-primary offset-xxl-7 rounded-corners\" role=\"button\">Pour en Savoir plus </a>
        </div>
      </div>
   

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "e_portfolio/index.html.twig";
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
        return array (  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

<div class=\"example-wrapper\">
    <br>
    <br>
    <h3 class=\"text-center\">Bonjour , 
    <br> Jeune homme actif et investi, je saurais mettre à disposition toutes mes compétences afin de <br> faire proposer une excellente prestation à votre clientèle  .</h3>
    <br>
    <br>
    <br>
    
      <div class=\"card border-primary mb-3 mx-1 test\"  style=\"max-width: 30rem;\">
        <div class=\"card-header\">Information Personnelle</div>
        <div class=\"card-body\">
          <p class=\"card-text\">Nom : BOVY </p>
          <p class=\"card-text\">Prénom : Mathieu </p>
          <p class=\"card-text\">Date de naissance : 12/03/2005</p>
          <p class=\"card-text\">Adresse : 224 chemin de la croix rouge 42330 Aveizieux</p>
          <p class=\"card-text\">Mail : mathieubovydumas@gmail.com</p>
          <p class=\"card-text\">Numéro de téléphone : 07 68 56 71 22 </p>
          <a href=\"/infos\" class=\"btn btn-primary offset-xxl-7 rounded-corners\" role=\"button\">Pour en Savoir plus </a>
        </div>
      </div>
   

</div>

{% endblock %}
", "e_portfolio/index.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\e_portfolio\\index.html.twig");
    }
}
