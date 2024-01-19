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

/* e_portfolio/apropos.html.twig */
class __TwigTemplate_686cb7dbea91cc28d7929d7e23ea968c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/apropos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/apropos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/apropos.html.twig", 1);
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
        echo "<body class=\"bg\">
<h1 class=\"text-center offset-xxl-1\"><strong>A propos de moi</strong> </h1>
<br>
<br>
<p class=\"offset-xxl-1\"> Je suis un homme très invesi dans un sport que j'affectionne plus que tout, le basket. </p>
<p class=\"offset-xxl-1\"> Je suis dans mon club :</p>
<ul class=\"offset-xxl-1\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo2.jpg"), "html", null, true);
        echo "\" alt=\"Description de la photo\" class=\"rounded-corners\" width=\"250\" height=\"auto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photo1.jpg"), "html", null, true);
        echo "\" alt=\"Description de la photo\" class=\"rounded-corners\" width=\"250\" height=\"auto\">
    <li> Responsable de notre école d'arbitrage </li><br><br>
    <li> Responsable de la répartition hebdomadaire de nos arbitres sur les matchs du weekend</li><br><br>
    <li> Référent arbitre auprès du comité départemental de la Loire (lorsque mon club à des problèmes au niveau de quelque chose qui concerne l'arbitrage, c'est moi qui m'en occupe)</li>
</ul><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p class=\"offset-xxl-1\"> Je suis aussi une personne investi dans mon établissement scolaire. 
    Durant mes années de lycée j'était membre :
    <ul class=\"offset-xxl-1\">
        <li> De la Maison les Lycéens</li>
        <li> Du Conseil de vie Lycéenne</li>
        <li> Du conseil d'administration</li>
    </ul>
   
   <p class=\"offset-xxl-1\"> Et dans mon IUT , je suis délégué suppléant mais plutôt porte parole du groupe B tandis que notre délégué est porte parole du groupe A
</p>
<br>
<br>
<br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "e_portfolio/apropos.html.twig";
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
        return array (  95 => 12,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<body class=\"bg\">
<h1 class=\"text-center offset-xxl-1\"><strong>A propos de moi</strong> </h1>
<br>
<br>
<p class=\"offset-xxl-1\"> Je suis un homme très invesi dans un sport que j'affectionne plus que tout, le basket. </p>
<p class=\"offset-xxl-1\"> Je suis dans mon club :</p>
<ul class=\"offset-xxl-1\"><img src=\"{{ asset('photo2.jpg') }}\" alt=\"Description de la photo\" class=\"rounded-corners\" width=\"250\" height=\"auto\"><img src=\"{{ asset('photo1.jpg') }}\" alt=\"Description de la photo\" class=\"rounded-corners\" width=\"250\" height=\"auto\">
    <li> Responsable de notre école d'arbitrage </li><br><br>
    <li> Responsable de la répartition hebdomadaire de nos arbitres sur les matchs du weekend</li><br><br>
    <li> Référent arbitre auprès du comité départemental de la Loire (lorsque mon club à des problèmes au niveau de quelque chose qui concerne l'arbitrage, c'est moi qui m'en occupe)</li>
</ul><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p class=\"offset-xxl-1\"> Je suis aussi une personne investi dans mon établissement scolaire. 
    Durant mes années de lycée j'était membre :
    <ul class=\"offset-xxl-1\">
        <li> De la Maison les Lycéens</li>
        <li> Du Conseil de vie Lycéenne</li>
        <li> Du conseil d'administration</li>
    </ul>
   
   <p class=\"offset-xxl-1\"> Et dans mon IUT , je suis délégué suppléant mais plutôt porte parole du groupe B tandis que notre délégué est porte parole du groupe A
</p>
<br>
<br>
<br>

{% endblock %}
", "e_portfolio/apropos.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\e_portfolio\\apropos.html.twig");
    }
}
