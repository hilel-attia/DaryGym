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

/* front/base.html.twig */
class __TwigTemplate_394ab4f4ba104e13fa3e55488f2dbd41aa091b044589e023d6180d9129aec61b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"description\" content=\"\">
        <meta name=\"format-detection\" content=\"telephone=no\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
        <title>Welcome!</title>
        <!-- =================== STYLE =================== -->

        ";
        // line 23
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </head>
<body id=\"home\">
<!--================ PRELOADER ================-->
<div class=\"preloader-cover\">
    <div id=\"cube-loader\">
        <div class=\"caption\">
            <div class=\"cube-loader\">
                <div class=\"cube loader-1\"></div>
                <div class=\"cube loader-2\"></div>

            </div>
        </div>
    </div>
</div>
<header class=\"header\">
    <a href=\"#\" class=\"nav-btn\">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class=\"top-panel\">
        <div class=\"container\">
            <div class=\"header-left\">
                <ul class=\"header-cont\">
                    <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><a href=\"tel:216 280\">216 28 028 837</a></li>
                    <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>Mon - Sun: 8:00AM - 10:00PM </li>
                </ul>
            </div>
            <div class=\"header-right\">
                <form class=\"search-form\">
                    <input type=\"search\" class=\"search-form__field\" placeholder=\"Search\" value=\"\" name=\"s\">
                    <button type=\"submit\" class=\"search-form__submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </form>
                <ul class=\"social-list\">
                    <li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"header-menu\">
        <div class=\"container\">
            <div class=\"header-logo\">
                <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            </div>
            <nav class=\"nav-menu\">
                <ul class=\"nav-list\">
                    <li class=\"dropdown\">
                        <a href=\"#\">Home <i class=\"fa fa-caret-down\"></i></a>
                        <ul>
                            <li class=\"menu-active\"><a href=\"index.html\">Crossfit</a></li>
                            <li><a href=\"home-fitness.html\">Fitness</a></li>
                            <li><a href=\"home-crossfit-lite.html\">Crossfit Lite</a></li>
                        </ul>
                    </li>
                    <li><a href=\"about.html\">About</a></li>
                    <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuille-list");
        echo "\">Acceuille</a></li>
                    <ul>

                        <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation-list");
        echo "\">Evenement</a></li>

                    </ul>
                    </li>
                    <li><a href=\"blog.html\">News</a></li>
                    <li><a href=\"contacts.html\">Contacts</a></li>
                </ul>
            </nav>
        </div>
        ";
        // line 108
        $this->displayBlock('contenpage', $context, $blocks);
        // line 109
        echo "    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-grid.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <!--=================== SCRIPT\t===================-->
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rx-lazy.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/parallax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  271 => 108,  259 => 36,  255 => 35,  251 => 34,  247 => 33,  243 => 32,  240 => 31,  230 => 30,  218 => 27,  214 => 26,  210 => 25,  205 => 24,  195 => 23,  183 => 109,  181 => 108,  169 => 99,  163 => 96,  147 => 83,  100 => 38,  98 => 30,  95 => 29,  92 => 23,  85 => 17,  72 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    {% block body %}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"description\" content=\"\">
        <meta name=\"format-detection\" content=\"telephone=no\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/img/favicon.png\") }}\">
        <title>Welcome!</title>
        <!-- =================== STYLE =================== -->

        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/slick.min.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/bootstrap-grid.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/font-awesome.min.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/style.css\") }}\">
        {% endblock %}

        {% block javascripts %}
            <!--=================== SCRIPT\t===================-->
            <script src=\"{{ asset(\"assets/js/jquery-2.2.4.min.js\") }}\"></script>
            <script src=\"{{ asset(\"assets/js/slick.min.js\") }}\"></script>
            <script src=\"{{ asset(\"assets/js/rx-lazy.js\") }}\"></script>
            <script src=\"{{ asset(\"assets/js/parallax.min.js\") }}\"></script>
            <script src=\"{{ asset(\"assets/js/scripts.js\") }}\"></script>
        {% endblock %}
    </head>
<body id=\"home\">
<!--================ PRELOADER ================-->
<div class=\"preloader-cover\">
    <div id=\"cube-loader\">
        <div class=\"caption\">
            <div class=\"cube-loader\">
                <div class=\"cube loader-1\"></div>
                <div class=\"cube loader-2\"></div>

            </div>
        </div>
    </div>
</div>
<header class=\"header\">
    <a href=\"#\" class=\"nav-btn\">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class=\"top-panel\">
        <div class=\"container\">
            <div class=\"header-left\">
                <ul class=\"header-cont\">
                    <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><a href=\"tel:216 280\">216 28 028 837</a></li>
                    <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>Mon - Sun: 8:00AM - 10:00PM </li>
                </ul>
            </div>
            <div class=\"header-right\">
                <form class=\"search-form\">
                    <input type=\"search\" class=\"search-form__field\" placeholder=\"Search\" value=\"\" name=\"s\">
                    <button type=\"submit\" class=\"search-form__submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </form>
                <ul class=\"social-list\">
                    <li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                    <li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"header-menu\">
        <div class=\"container\">
            <div class=\"header-logo\">
                <a href=\"index.html\" class=\"logo\"><img src=\"{{ asset('assets/img/logo.svg') }}\" alt=\"logo\"></a>
            </div>
            <nav class=\"nav-menu\">
                <ul class=\"nav-list\">
                    <li class=\"dropdown\">
                        <a href=\"#\">Home <i class=\"fa fa-caret-down\"></i></a>
                        <ul>
                            <li class=\"menu-active\"><a href=\"index.html\">Crossfit</a></li>
                            <li><a href=\"home-fitness.html\">Fitness</a></li>
                            <li><a href=\"home-crossfit-lite.html\">Crossfit Lite</a></li>
                        </ul>
                    </li>
                    <li><a href=\"about.html\">About</a></li>
                    <li><a href=\"{{ path('acceuille-list') }}\">Acceuille</a></li>
                    <ul>

                        <li><a href=\"{{ path('reservation-list') }}\">Evenement</a></li>

                    </ul>
                    </li>
                    <li><a href=\"blog.html\">News</a></li>
                    <li><a href=\"contacts.html\">Contacts</a></li>
                </ul>
            </nav>
        </div>
        {% block contenpage %}{% endblock %}
    </div>
</header>
{% endblock %}", "front/base.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\base.html.twig");
    }
}
