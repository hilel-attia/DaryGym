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

/* front/includes/header.html.twig */
class __TwigTemplate_cf8a424c1e07074a3b29db2ebad4a71b559cbe34e7baa6524b4eeb898c71ad5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/header.html.twig"));

        // line 1
        echo "\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t{# <!--================ PRELOADER ================-->
\t<div class=\"preloader-cover\">
\t\t<div id=\"cube-loader\">
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"cube-loader\">
\t\t\t\t\t<div class=\"cube loader-1\"></div>
\t\t\t\t\t<div class=\"cube loader-2\"></div>
\t\t\t\t\t<div class=\"cube loader-4\"></div>
\t\t\t\t\t<div class=\"cube loader-3\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
                    <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><a href=\"tel:18004886040\">1-800-488-6040</a></li>
                    <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>Mon - Fri: 8:00AM - 7:00PM | Sat - Sun: Closed</li>
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
                <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.svg\" alt=\"logo\"></a>
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
                    <li><a href=\"services.html\">Services</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\">Pages <i class=\"fa fa-caret-down\"></i></a>
                        <ul>
                            <li><a href=\"program.html\">Program</a></li>
                            <li><a href=\"trainer.html\">Trainer</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog.html\">News</a></li>
                    <li><a href=\"contacts.html\">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header> #}", "front/includes/header.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\includes\\header.html.twig");
    }
}
