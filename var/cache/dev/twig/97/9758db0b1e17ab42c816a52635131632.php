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

/* base.html.twig */
class __TwigTemplate_a1a8719410c4573e6b39da2728386f2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head class=\"bg\">
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\">
        <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/pulse/bootstrap.min.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js\"></script>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body class=\"bg\">
      <style>
        .bg {
              position: relative; /* Important pour positionner correctement le pseudo-élément */
              background-color: rgba(187, 185, 185, 0.8); /* Couleur de fond légèrement transparente */
              height: 120vh;
              color: black;
            }
        .bg::before {
          content: ''; /* Nécessaire pour que le pseudo-élément s'affiche */
          position: absolute; /* Positionnement absolu par rapport à .bg */
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-image: url(\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo2.png"), "html", null, true);
        echo "\"); /* Remplacez par le chemin de votre image */
          background-repeat: no-repeat; /* Empêche la répétition de l'image */
          background-position: center center; /* Centre l'image */
          opacity: 0.3; /* Valeur de transparence de l'image de fond */
          z-index: -1; /* Place le pseudo-élément sous le contenu du .bg */
        }
        .voila{
          color: rgba(187, 185, 185);
        }
        .marge{
          margin-top : 5% ;
          margin-right : 5%;
          margin-left: 10% ;

        }
        .marge2{
          margin-top : 5% ;
          margin-left : 5%;
          margin-right: 10% ;

        }
        .test{
          background-color:#9354f1 ;
          border: 2%;
          color : black ;
          margin-top: 3%;
          
          
        }
        .footer {
          position: fixed;
          bottom: 0;
          left: 0;
          width: 100%;
          background-color: #333; /* Choisissez la couleur de fond appropriée */
          color: white; /* Couleur du texte */
          text-align: center;
        }
        .border-primary {
          border-radius: 2%; /* Ajustez la valeur pour obtenir l'arrondi que vous souhaitez */
          float: left ;
          

        }
        .rounded-corners {
          border-radius: 2%; /* Ajustez la valeur pour obtenir l'arrondi que vous souhaitez */
          float: right ;
          

        }

        </style>
        <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand voila\" href=\"/\">E-Portfolio</a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse \" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link active voila\" href=\"/\">Accueil
                  <span class=\"visually-hidden\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/infos\">A propos de moi</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/CV\">CV</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT1\">Administrer</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT2\">Connecter</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT3\">Programmer</a>
              </li>
            </ul>
            <form class=\"d-flex\">
              <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
              <button class=\"btn btn-secondary  my-2 my-sm-0\" type=\"submit\">Rechercher</button>
            </form>
          </div>
        </div>
      </nav>

        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer class=\"footer\"><p xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:dct=\"http://purl.org/dc/terms/\"><span property=\"dct:title\">E-portfolio</span> by <span property=\"cc:attributionName\">Mathieu Bovy</span> is licensed under <a href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1\" target=\"_blank\" rel=\"license noopener noreferrer\" style=\"display:inline-block;\">Attribution-NonCommercial-NoDerivatives 4.0 International<img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1\"></a></p></footer>

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  279 => 123,  269 => 122,  256 => 15,  246 => 14,  233 => 11,  223 => 10,  204 => 5,  183 => 125,  181 => 122,  89 => 33,  71 => 17,  69 => 14,  66 => 13,  63 => 10,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head class=\"bg\">
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('logo.png') }}\">
        <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/pulse/bootstrap.min.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js\"></script>
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"bg\">
      <style>
        .bg {
              position: relative; /* Important pour positionner correctement le pseudo-élément */
              background-color: rgba(187, 185, 185, 0.8); /* Couleur de fond légèrement transparente */
              height: 120vh;
              color: black;
            }
        .bg::before {
          content: ''; /* Nécessaire pour que le pseudo-élément s'affiche */
          position: absolute; /* Positionnement absolu par rapport à .bg */
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-image: url(\"{{ asset('logo2.png') }}\"); /* Remplacez par le chemin de votre image */
          background-repeat: no-repeat; /* Empêche la répétition de l'image */
          background-position: center center; /* Centre l'image */
          opacity: 0.3; /* Valeur de transparence de l'image de fond */
          z-index: -1; /* Place le pseudo-élément sous le contenu du .bg */
        }
        .voila{
          color: rgba(187, 185, 185);
        }
        .marge{
          margin-top : 5% ;
          margin-right : 5%;
          margin-left: 10% ;

        }
        .marge2{
          margin-top : 5% ;
          margin-left : 5%;
          margin-right: 10% ;

        }
        .test{
          background-color:#9354f1 ;
          border: 2%;
          color : black ;
          margin-top: 3%;
          
          
        }
        .footer {
          position: fixed;
          bottom: 0;
          left: 0;
          width: 100%;
          background-color: #333; /* Choisissez la couleur de fond appropriée */
          color: white; /* Couleur du texte */
          text-align: center;
        }
        .border-primary {
          border-radius: 2%; /* Ajustez la valeur pour obtenir l'arrondi que vous souhaitez */
          float: left ;
          

        }
        .rounded-corners {
          border-radius: 2%; /* Ajustez la valeur pour obtenir l'arrondi que vous souhaitez */
          float: right ;
          

        }

        </style>
        <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand voila\" href=\"/\">E-Portfolio</a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse \" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link active voila\" href=\"/\">Accueil
                  <span class=\"visually-hidden\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/infos\">A propos de moi</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/CV\">CV</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT1\">Administrer</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT2\">Connecter</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/RT3\">Programmer</a>
              </li>
            </ul>
            <form class=\"d-flex\">
              <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
              <button class=\"btn btn-secondary  my-2 my-sm-0\" type=\"submit\">Rechercher</button>
            </form>
          </div>
        </div>
      </nav>

        {% block body %}
        
        {% endblock %}
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer class=\"footer\"><p xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:dct=\"http://purl.org/dc/terms/\"><span property=\"dct:title\">E-portfolio</span> by <span property=\"cc:attributionName\">Mathieu Bovy</span> is licensed under <a href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1\" target=\"_blank\" rel=\"license noopener noreferrer\" style=\"display:inline-block;\">Attribution-NonCommercial-NoDerivatives 4.0 International<img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1\"></a></p></footer>

    </body>
</html>
", "base.html.twig", "C:\\E-portfolio\\e-portfolio\\templates\\base.html.twig");
    }
}
