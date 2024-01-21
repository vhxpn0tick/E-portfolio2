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

/* e_portfolio/CV.html.twig */
class __TwigTemplate_a26c941a2c06def194703a7db08eabaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/CV.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/CV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/CV.html.twig", 1);
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
<button onclick=\"downloadPDF()\" class=\"btn btn-primary border-primary\">Télécharger en PDF</button>

    <div id=\"content-to-download\" class=\"container\" type=\"button\">
        <header class=\"header\">
            <h1>CV Mathieu Bovy</h1>
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CV.png"), "html", null, true);
        echo "\" />
            
        </header>
        <div class=\"gauche\">
            <div >
                <h2 >Compétences :</h2>
                <ul>
                    <li>Attentif à l'accueil du public</li>
                    <li>Bonne maitrise des outils informatiques </li>
                    <li>Gestion du comportement humain (apaisement de l’humeur)</li>
                    <li>Bonne communication orale et écrire</li>
                    <li>Maitrise émotionnelle et gestion de celles-ci</li>
                    <br>          
                    <li>Optimisation du temps et de l’espace afin d’augmenter l’efficacité</li>
                    <li>Capacité d’adaptation face à des situations imprévues</li>
                    <li>Gestion d’équipe</li>
                    <li>Contrôle qualité</li>

                </ul>
            </div>

            <div >
                <h2 >Savoir être :</h2>
            <ul>
                <li>Rigoureux</li>
                <li>Attentif</li>
                <li>Réactif</li>
                <li>À l’écoute</li>
                <li>Calme</li>
                <li>Sens du travail d’équipe et de l’entraide</li>
                <li>Autonome</li>
                <li>Fait preuve d’adaptation</li>
                <li>Capable de gérer des conflits</li>
                <li>Persévérant</li>
                <li>Soigné</li>
            </ul>

            </div>

            <div>
                <h2 >Expériences professionnelles :</h2>
                <h3>Ouvrier Polyvalent :</h3>
                <ul>
                    <li>La Découpe Stéphanoise 
                           42240 Veauches
                        </li>
                    </ul>
                <h3>Opérateur de production : </h3>
                <ul>
                    <li>AOSTE SNC
                        69590 Saint Symphorien sur Coise
                    </li>
                </ul>
                <h3>Ramasseur de fruit saisonnier :</h3>
                <ul>
                    <li>EARL le verger des brindilles : 
                           42140 Grammond
                    </li>
            </div>

            <div >
                <h2>Divers :</h2>
                <ul>
                    <li>Arbitre départemental de basketball</li>
                    <li>membre du bureau d’un club sportif</li>
                    <li>responsable arbitrage et formation arbitre de ce club</li>
            </div>
        </div>
        <div class=\"droite\">
            <div >
                <h2>Informations Personnelles</h2>
                <p>Mathieu Bovy<br>12/03/2005</p>
            </div>
            <div>
                <h2 >Formation</h2>
                <ul>
                    <li>Brevet des college <br>
                        Année 2020</li>
                    <li>Baccalauréat <br>
                        année 2023 <br>
                        options mathématiques  et physique chimie</li>
                    <li>BUT réseaux et télécommunications<br>
                        En cours</li>
            </div>
            <div >
                <h2 >Langues</h2>
                <ul>
                    <li>Allemand (A2/B1)</li>
                    <li>Anglais (B1/B2)</li>
                </ul>
            </div>
            <div>
                <h2>Coordonnées</h2>
                <ul>
                    <li>mail : Mathieubovydumas@gmail.com</li>
                    <li>téléphone : 07 68 56 71 22</li>
                    <li>adresse : 224 chemin de la croix rouge, 42330 Aveizieux</li>
                </ul>

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
        return "e_portfolio/CV.html.twig";
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

<button onclick=\"downloadPDF()\" class=\"btn btn-primary border-primary\">Télécharger en PDF</button>

    <div id=\"content-to-download\" class=\"container\" type=\"button\">
        <header class=\"header\">
            <h1>CV Mathieu Bovy</h1>
            <img src=\"{{ asset('CV.png') }}\" />
            
        </header>
        <div class=\"gauche\">
            <div >
                <h2 >Compétences :</h2>
                <ul>
                    <li>Attentif à l'accueil du public</li>
                    <li>Bonne maitrise des outils informatiques </li>
                    <li>Gestion du comportement humain (apaisement de l’humeur)</li>
                    <li>Bonne communication orale et écrire</li>
                    <li>Maitrise émotionnelle et gestion de celles-ci</li>
                    <br>          
                    <li>Optimisation du temps et de l’espace afin d’augmenter l’efficacité</li>
                    <li>Capacité d’adaptation face à des situations imprévues</li>
                    <li>Gestion d’équipe</li>
                    <li>Contrôle qualité</li>

                </ul>
            </div>

            <div >
                <h2 >Savoir être :</h2>
            <ul>
                <li>Rigoureux</li>
                <li>Attentif</li>
                <li>Réactif</li>
                <li>À l’écoute</li>
                <li>Calme</li>
                <li>Sens du travail d’équipe et de l’entraide</li>
                <li>Autonome</li>
                <li>Fait preuve d’adaptation</li>
                <li>Capable de gérer des conflits</li>
                <li>Persévérant</li>
                <li>Soigné</li>
            </ul>

            </div>

            <div>
                <h2 >Expériences professionnelles :</h2>
                <h3>Ouvrier Polyvalent :</h3>
                <ul>
                    <li>La Découpe Stéphanoise 
                           42240 Veauches
                        </li>
                    </ul>
                <h3>Opérateur de production : </h3>
                <ul>
                    <li>AOSTE SNC
                        69590 Saint Symphorien sur Coise
                    </li>
                </ul>
                <h3>Ramasseur de fruit saisonnier :</h3>
                <ul>
                    <li>EARL le verger des brindilles : 
                           42140 Grammond
                    </li>
            </div>

            <div >
                <h2>Divers :</h2>
                <ul>
                    <li>Arbitre départemental de basketball</li>
                    <li>membre du bureau d’un club sportif</li>
                    <li>responsable arbitrage et formation arbitre de ce club</li>
            </div>
        </div>
        <div class=\"droite\">
            <div >
                <h2>Informations Personnelles</h2>
                <p>Mathieu Bovy<br>12/03/2005</p>
            </div>
            <div>
                <h2 >Formation</h2>
                <ul>
                    <li>Brevet des college <br>
                        Année 2020</li>
                    <li>Baccalauréat <br>
                        année 2023 <br>
                        options mathématiques  et physique chimie</li>
                    <li>BUT réseaux et télécommunications<br>
                        En cours</li>
            </div>
            <div >
                <h2 >Langues</h2>
                <ul>
                    <li>Allemand (A2/B1)</li>
                    <li>Anglais (B1/B2)</li>
                </ul>
            </div>
            <div>
                <h2>Coordonnées</h2>
                <ul>
                    <li>mail : Mathieubovydumas@gmail.com</li>
                    <li>téléphone : 07 68 56 71 22</li>
                    <li>adresse : 224 chemin de la croix rouge, 42330 Aveizieux</li>
                </ul>

            </div>
        </div>
    </div>
    
{% endblock %}
", "e_portfolio/CV.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\e_portfolio\\CV.html.twig");
    }
}
