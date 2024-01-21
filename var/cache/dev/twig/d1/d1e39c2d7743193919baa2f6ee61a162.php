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

/* e_portfolio/RT1.html.twig */
class __TwigTemplate_44246572eac4a27fb532ced0b8797e01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/RT1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/RT1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/RT1.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo3.jpg"), "html", null, true);
        echo "\" class=\"border-primary marge2\" width=\"450\" height=\"auto\">
<div class=\"card border-primary  test\"  style=\"max-width: 30rem;\">
  <div class=\"card-header\"><h1> Administrer les réseaux et l'internet </h1>
    <br>
    <br>
    <br>
  </div>
  <div class=\"card-body\">
    <p><strong>Connaissance des risques et des fondamentaux de l'électronique </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 85%;\"></div>
      </div>
      <p><strong>Connaissance dans l'encodage des informations </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 65%;\"></div>
      </div>
      <p><strong>Configuration de base des réseaux (vlan ...) </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 70%;\"></div>
      </div>
      <p><strong>Maitrise des rôle et des fonctionnement des divers équipements actifs </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 75%;\"></div>
      </div>
      <p><strong>Identification de problème et de dysfonctionnement du réseau </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 60%;\"></div>
      </div>
      <p><strong>Installation du poste client  </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 72%;\"></div>
      </div>
  </div>
</div>
<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo5.jpg"), "html", null, true);
        echo "\" class=\"rounded-corners marge\" width=\"450\" height=\"auto\">


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "e_portfolio/RT1.html.twig";
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
        return array (  125 => 40,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<img src=\"{{ asset('photo3.jpg') }}\" class=\"border-primary marge2\" width=\"450\" height=\"auto\">
<div class=\"card border-primary  test\"  style=\"max-width: 30rem;\">
  <div class=\"card-header\"><h1> Administrer les réseaux et l'internet </h1>
    <br>
    <br>
    <br>
  </div>
  <div class=\"card-body\">
    <p><strong>Connaissance des risques et des fondamentaux de l'électronique </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 85%;\"></div>
      </div>
      <p><strong>Connaissance dans l'encodage des informations </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 65%;\"></div>
      </div>
      <p><strong>Configuration de base des réseaux (vlan ...) </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 70%;\"></div>
      </div>
      <p><strong>Maitrise des rôle et des fonctionnement des divers équipements actifs </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 75%;\"></div>
      </div>
      <p><strong>Identification de problème et de dysfonctionnement du réseau </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 60%;\"></div>
      </div>
      <p><strong>Installation du poste client  </strong><p>
      <div class=\"progress\">
        <div class=\"progress-bar bg-success\" style=\"width: 72%;\"></div>
      </div>
  </div>
</div>
<img src=\"{{ asset('photo5.jpg') }}\" class=\"rounded-corners marge\" width=\"450\" height=\"auto\">


{% endblock %}
", "e_portfolio/RT1.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\e_portfolio\\RT1.html.twig");
    }
}
