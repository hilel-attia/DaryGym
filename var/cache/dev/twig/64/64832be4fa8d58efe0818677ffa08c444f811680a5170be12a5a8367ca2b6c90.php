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

/* front/index.html.twig */
class __TwigTemplate_3c79af2d5330a4183a1a145eb3443f2827465df3308864cd2d0996e0fd647b49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
        <title>Welcome!</title>
        <!-- =================== STYLE =================== -->
        
        ";
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </head>
    <body id=\"home\">
   \t<!--================ PRELOADER ================-->
\t<div class=\"preloader-cover\">
\t\t<div id=\"cube-loader\">
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"cube-loader\">
\t\t\t\t\t<div class=\"cube loader-1\"></div>
\t\t\t\t\t<div class=\"cube loader-2\"></div>
\t\t\t\t\t
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
        // line 75
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
\t\t\t\t\t<li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuille-list");
        echo "\">Acceuille</a></li>
                        <ul>

\t\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation-list");
        echo "\">Evenement</a></li>

                        </ul>
                    </li>
                    <li><a href=\"blog.html\">News</a></li>
                    <li><a href=\"contacts.html\">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    
\t
\t<!-- ================ FOOTER END ================ -->

\t<!--=================== TO TOP ===================-->
\t<a class=\"to-top\" href=\"#home\">
\t\t<i class=\"fa fa-chevron-up\" aria-hidden=\"true\"></i>
\t</a>
        
       
    </body>
</html>




";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-grid.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <!--=================== SCRIPT\t===================-->
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rx-lazy.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/parallax.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "
<section class=\"s-crossfit-slider\">
\t\t<div class=\"crossfit-slider\">
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image:url(";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/{{ img/effect-1.svg }}"), "html", null, true);
        echo ");\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-1.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image: url(assets/img/effect-1.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-2.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image: url(assets/img/effect-1.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-3.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"slider-navigation\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"slider-navigation-cover\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
<section class=\"s-crossfit\">
\t\t<div class=\"container\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/group-circle-2.svg\" alt=\"img\" class=\"crossfit-icon-1 rx-lazy\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/line-red-1.svg\" alt=\"img\" class=\"crossfit-icon-2 rx-lazy\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/tringle-about-top.svg\" alt=\"img\" class=\"crossfit-icon-3 rx-lazy\">
\t\t\t<h2 class=\"title-decor\">Welcome To <span>Crossfit</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-1.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>body bulding</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-2.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>group workouts</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-3.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>boxing</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============== S-CROSSFIT END ============== -->

\t<!-- ============== S-OUR-PROGRAMS ============== -->
\t<section class=\"s-our-programs\" style=\"background-image: url(assets/img/bg-programs.jpg);\">
\t\t<div class=\"mask\"></div>
\t\t<div class=\"our-programs-effect\" style=\"background-image: url(assets/img/bg-programs.svg);\"></div>
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Our <span>Programs</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Personal trainer</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Personal trainer</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-2.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Free workout</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-2.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Free workout</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-3.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>CrossFit</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-3.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>CrossFit</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-4.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Martial Arts</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-4.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Martial Arts</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-OUR-PROGRAMS END ============ -->

\t<!-- =============== S-OUT-TRAINER =============== -->
\t<section class=\"s-out-trainer\" style=\"background-image: url(assets/img/bg-contacts.svg);\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Our <span>Trainer</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">Sam piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">kim piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-3.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">Samanta piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-4.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">artur piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============= S-OUT-TRAINER END ============= -->

\t<!-- ============ S-CROSSFIT-BANNER ============ -->
\t<section class=\"s-crossfit-banner\">
\t\t<div class=\"crossfit-banner-left\" style=\"background-image: url(assets/img/crossmax-2.jpg);\"></div>
\t\t<div class=\"crossfit-banner-right\">
\t\t\t<div class=\"text-top\">open</div>
\t\t\t<h2>crossmax</h2>
\t\t\t<div class=\"text-bottom\">free open <a href=\"program.html\">training</a></div>
\t\t</div>
\t</section>
\t<!-- ========== S-CROSSFIT-BANNER END ========== -->

\t<!-- ============== S-CLUB-CARDS ============== -->
\t<section class=\"s-club-cards\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Club <span>Cards</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-1.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">40</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>3 months</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-2.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">70</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>6 months</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li>Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-3.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">120</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>1 year</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li>Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li>lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-CLUB-CARDS END ============ -->

\t<!-- ============== S-TESTIMONIALS ============== -->
\t<section class=\"s-testimonials\" style=\"background-image: url(assets/img/bg-testimonials.jpg);\">
\t\t<div class=\"mask\"></div>
\t\t<img class=\"testimonials-effect\" src=\"assets/img/bg-testimonials.svg\" alt=\"effect\">
\t\t<div class=\"container\">
\t\t\t<div class=\"testimonials-slider\">
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-1.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Anna Piters</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-2.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Mark Klark</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-3.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Kat Smith</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-TESTIMONIALS END ============ -->

\t<!--================ RELATED POSTS ================-->
\t<section class=\"s-related-posts home-related-posts\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Latest <span>News</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">fitness</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-4.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">lifting</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">fitness</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-3.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">lifting</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--============== RELATED POSTS END ==============-->

\t<!-- =========== S-TRAINING-SCHEDULE =========== -->
\t<section class=\"s-training-schedule\" style=\"background-image: url(assets/img/bg-table-1.svg);\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Training <span>Schedule</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"training-schedule-cover\">
\t\t\t\t<h3 class=\"training-schedule-top\">1-7 APRIL, 2019</h3>
\t\t\t\t<div class=\"training-schedule-table\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>monday</th>
\t\t\t\t\t\t\t<th>tuesday</th>
\t\t\t\t\t\t\t<th>wednesday</th>
\t\t\t\t\t\t\t<th>thursday</th>
\t\t\t\t\t\t\t<th>friday</th>
\t\t\t\t\t\t\t<th>saturday</th>
\t\t\t\t\t\t\t<th>sunday</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>9-00</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>boxing</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>boxing</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>10-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>yoga</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">10-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">10-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>11-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">11-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">11-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>12-00</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>karate</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>karate</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>13-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">13-00 – 14:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">13-00 – 14:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ========= S-TRAINING-SCHEDULE END ========= -->
    <!-- masonry
================================================== -->

<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item-logo\">
\t\t\t\t\t<a href=\"index.html\" class=\"logo-footer\"><img src=\"assets/img/footer-logo2.svg\" alt=\"logo\"></a>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item footer-item-list\">
\t\t\t\t\t<h3>Links</h3>
\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t<li><a href=\"#\">Sed ut perspiciatis unde</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Omnis iste natus error sit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Voluptatem accusantium</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Doloremque laudantium</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item\">
\t\t\t\t\t<h3>Contact us</h3>
\t\t\t\t\t<ul class=\"footer-cont\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><a href=\"tel:18004886040\">1-800-488-6040</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:crossFit@gmail.com\">CrossFit@gmail.com</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><a href=\"contacts.html\">London,Street 225r.21</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item\">
\t\t\t\t\t<h3>Blog</h3>
\t\t\t\t\t<ul class=\"footer-blog\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"img-cover\"><img src=\"assets/img/footer-icon-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t<div class=\"footer-blog-info\">
\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"blog.html\">Sed ut perspiciatis</a></div>
\t\t\t\t\t\t\t\t<p>Omnis iste natus error sit voluptatem…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"img-cover\"><img src=\"assets/img/footer-icon-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t<div class=\"footer-blog-info\">
\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"blog.html\">Sed ut perspiciatis</a></div>
\t\t\t\t\t\t\t\t<p>Omnis iste natus error sit voluptatem…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"copyright\"><a href=\"#\" target=\"_blank\">Rovadex</a> © 2019. Fitmax. All Rights Reserved.</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t<li><a href=\"blog.html\">News</a></li>
\t\t\t\t\t<li><a href=\"contacts.html\">Contacts</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- ================ FOOTER END ================ -->

\t<!--=================== TO TOP ===================-->
\t<a class=\"to-top\" href=\"#home\">
\t\t<i class=\"fa fa-chevron-up\" aria-hidden=\"true\"></i>
\t</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 126,  267 => 120,  257 => 119,  245 => 28,  241 => 27,  237 => 26,  233 => 25,  229 => 24,  226 => 23,  216 => 22,  204 => 19,  200 => 18,  196 => 17,  191 => 16,  181 => 15,  171 => 119,  140 => 91,  134 => 88,  118 => 75,  71 => 30,  69 => 22,  66 => 21,  63 => 15,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/img/favicon.png\") }}\">
        <title>Welcome!</title>
        <!-- =================== STYLE =================== -->
        
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/slick.min.css\") }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/bootstrap-grid.css\") }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/font-awesome.min.css\") }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/style.css\") }}\">
        {% endblock %}

        {% block javascripts %}
            <!--=================== SCRIPT\t===================-->
\t<script src=\"{{ asset(\"assets/js/jquery-2.2.4.min.js\") }}\"></script>
\t<script src=\"{{ asset(\"assets/js/slick.min.js\") }}\"></script>
\t<script src=\"{{ asset(\"assets/js/rx-lazy.js\") }}\"></script>
\t<script src=\"{{ asset(\"assets/js/parallax.min.js\") }}\"></script>
\t<script src=\"{{ asset(\"assets/js/scripts.js\") }}\"></script>
        {% endblock %}
    </head>
    <body id=\"home\">
   \t<!--================ PRELOADER ================-->
\t<div class=\"preloader-cover\">
\t\t<div id=\"cube-loader\">
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"cube-loader\">
\t\t\t\t\t<div class=\"cube loader-1\"></div>
\t\t\t\t\t<div class=\"cube loader-2\"></div>
\t\t\t\t\t
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
\t\t\t\t\t<li><a href=\"{{ path('acceuille-list') }}\">Acceuille</a></li>
                        <ul>

\t\t\t\t\t\t\t<li><a href=\"{{ path('reservation-list') }}\">Evenement</a></li>

                        </ul>
                    </li>
                    <li><a href=\"blog.html\">News</a></li>
                    <li><a href=\"contacts.html\">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    
\t
\t<!-- ================ FOOTER END ================ -->

\t<!--=================== TO TOP ===================-->
\t<a class=\"to-top\" href=\"#home\">
\t\t<i class=\"fa fa-chevron-up\" aria-hidden=\"true\"></i>
\t</a>
        
       
    </body>
</html>




{% block body %}

<section class=\"s-crossfit-slider\">
\t\t<div class=\"crossfit-slider\">
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image:url({{ asset('assets/{{ img/effect-1.svg }}') }});\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-1.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image: url(assets/img/effect-1.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-2.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"crossfit-slide\">
\t\t\t\t<div class=\"crossfit-slider-effect effect-1\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.2\" style=\"background-image: url(assets/img/effect-1.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slider-effect effect-2\">
\t\t\t\t\t<div data-hover-only=\"true\" class=\"scene\">
\t\t\t\t\t\t<span class=\"scene-item\" data-depth=\"0.4\" style=\"background-image: url(assets/img/effect-2.svg);\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"crossfit-slide-bg\" style=\"background-image: url(assets/img/slide-3.jpg);\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"crossfit-slide-cover\">
\t\t\t\t\t\t<h2 class=\"title\">push <span>yourself</span></h2>
\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"slider-navigation\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"slider-navigation-cover\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
<section class=\"s-crossfit\">
\t\t<div class=\"container\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/group-circle-2.svg\" alt=\"img\" class=\"crossfit-icon-1 rx-lazy\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/line-red-1.svg\" alt=\"img\" class=\"crossfit-icon-2 rx-lazy\">
\t\t\t<img src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/tringle-about-top.svg\" alt=\"img\" class=\"crossfit-icon-3 rx-lazy\">
\t\t\t<h2 class=\"title-decor\">Welcome To <span>Crossfit</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-1.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>body bulding</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-2.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>group workouts</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 crossfit-col\">
\t\t\t\t\t<div class=\"crossfit-item\">
\t\t\t\t\t\t<img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/serv-3.svg\" alt=\"img\">
\t\t\t\t\t\t<h3>boxing</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t\t<a class=\"btn\" href=\"program.html\">view Schedule</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============== S-CROSSFIT END ============== -->

\t<!-- ============== S-OUR-PROGRAMS ============== -->
\t<section class=\"s-our-programs\" style=\"background-image: url(assets/img/bg-programs.jpg);\">
\t\t<div class=\"mask\"></div>
\t\t<div class=\"our-programs-effect\" style=\"background-image: url(assets/img/bg-programs.svg);\"></div>
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Our <span>Programs</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Personal trainer</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Personal trainer</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-2.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Free workout</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-2.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Free workout</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-3.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>CrossFit</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-3.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>CrossFit</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3 program-col\">
\t\t\t\t\t<div class=\"program-item\">
\t\t\t\t\t\t<div class=\"program-item-front\" style=\"background-image: url(assets/img/programs-4.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Martial Arts</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"program-item-back\" style=\"background-image: url(assets/img/programs-4.jpg);\">
\t\t\t\t\t\t\t<div class=\"program-item-inner\">
\t\t\t\t\t\t\t\t<h3>Martial Arts</h3>
\t\t\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-OUR-PROGRAMS END ============ -->

\t<!-- =============== S-OUT-TRAINER =============== -->
\t<section class=\"s-out-trainer\" style=\"background-image: url(assets/img/bg-contacts.svg);\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Our <span>Trainer</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">Sam piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">kim piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-3.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">Samanta piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 out-trainer-col\">
\t\t\t\t\t<div class=\"out-trainer-item\">
\t\t\t\t\t\t<a href=\"trainer.html\" class=\"out-trainer-img\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/trainer-4.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t<div class=\"out-trainer-info\">
\t\t\t\t\t\t\t<h3><a href=\"trainer.html\">artur piters</a></h3>
\t\t\t\t\t\t\t<div class=\"prof\">Weightlifting</div>
\t\t\t\t\t\t\t<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============= S-OUT-TRAINER END ============= -->

\t<!-- ============ S-CROSSFIT-BANNER ============ -->
\t<section class=\"s-crossfit-banner\">
\t\t<div class=\"crossfit-banner-left\" style=\"background-image: url(assets/img/crossmax-2.jpg);\"></div>
\t\t<div class=\"crossfit-banner-right\">
\t\t\t<div class=\"text-top\">open</div>
\t\t\t<h2>crossmax</h2>
\t\t\t<div class=\"text-bottom\">free open <a href=\"program.html\">training</a></div>
\t\t</div>
\t</section>
\t<!-- ========== S-CROSSFIT-BANNER END ========== -->

\t<!-- ============== S-CLUB-CARDS ============== -->
\t<section class=\"s-club-cards\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Club <span>Cards</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-1.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">40</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>3 months</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-2.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">70</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>6 months</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li>Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li class=\"item-excluded\">lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 club-card-col\">
\t\t\t\t\t<div class=\"club-card-item\" style=\"background-image: url(assets/img/bg-price-3.svg);\">
\t\t\t\t\t\t<div class=\"price-cover\">
\t\t\t\t\t\t\t<div class=\"price\">120</div>
\t\t\t\t\t\t\t<div class=\"date\"><span>99</span>1 year</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t<li>Maecenas consequat</li>
\t\t\t\t\t\t\t<li>ex id lobortis venenatis</li>
\t\t\t\t\t\t\t<li>Mauris id erat enim</li>
\t\t\t\t\t\t\t<li>Morbi dolor dolortin</li>
\t\t\t\t\t\t\t<li>lorem ut, venenatis dapibus mi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"program.html\" class=\"btn\">order now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-CLUB-CARDS END ============ -->

\t<!-- ============== S-TESTIMONIALS ============== -->
\t<section class=\"s-testimonials\" style=\"background-image: url(assets/img/bg-testimonials.jpg);\">
\t\t<div class=\"mask\"></div>
\t\t<img class=\"testimonials-effect\" src=\"assets/img/bg-testimonials.svg\" alt=\"effect\">
\t\t<div class=\"container\">
\t\t\t<div class=\"testimonials-slider\">
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-1.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Anna Piters</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-2.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Mark Klark</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-slide\">
\t\t\t\t\t<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
\t\t\t\t\t<img src=\"assets/img/testimonials-3.png\" alt=\"img\">
\t\t\t\t\t<h3 class=\"name\">Kat Smith</h3>
\t\t\t\t\t<div class=\"prof\">our client</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ============ S-TESTIMONIALS END ============ -->

\t<!--================ RELATED POSTS ================-->
\t<section class=\"s-related-posts home-related-posts\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Latest <span>News</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">fitness</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-4.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">lifting</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">fitness</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-3.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 related-post-col\">
\t\t\t\t\t<div class=\"post-item-cover\">
\t\t\t\t\t\t<div class=\"post-header\">
\t\t\t\t\t\t\t<div class=\"related-post-categ\">lifting</div>
\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t<a href=\"single-blog.html\"><img class=\"rx-lazy\" src=\"assets/img/placeholder-all.png\" data-src=\"assets/img/blog-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>October 31, 2019</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"title\"><a href=\"single-blog.html\">Sed ut perspiciatis unde omnis</a></h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-footer\">
\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t<span class=\"post-by\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">By Rovadex</a></span>
\t\t\t\t\t\t\t\t<span class=\"post-comment\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i><a href=\"#\">2 Comments(s)</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"single-blog.html\" class=\"btn\"><span>read more</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--============== RELATED POSTS END ==============-->

\t<!-- =========== S-TRAINING-SCHEDULE =========== -->
\t<section class=\"s-training-schedule\" style=\"background-image: url(assets/img/bg-table-1.svg);\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title-decor\">Training <span>Schedule</span></h2>
\t\t\t<p class=\"slogan\">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
\t\t\t<div class=\"training-schedule-cover\">
\t\t\t\t<h3 class=\"training-schedule-top\">1-7 APRIL, 2019</h3>
\t\t\t\t<div class=\"training-schedule-table\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>monday</th>
\t\t\t\t\t\t\t<th>tuesday</th>
\t\t\t\t\t\t\t<th>wednesday</th>
\t\t\t\t\t\t\t<th>thursday</th>
\t\t\t\t\t\t\t<th>friday</th>
\t\t\t\t\t\t\t<th>saturday</th>
\t\t\t\t\t\t\t<th>sunday</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>9-00</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>boxing</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>boxing</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">9-00 – 11:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>10-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>yoga</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">10-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">10-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>11-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">11-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">11-00 – 12:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>12-00</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>karate</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>karate</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">12-00 – 13:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>13-00</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">13-00 – 14:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4>body bulding</h4>
\t\t\t\t\t\t\t\t\t<div class=\"date\">13-00 – 14:00</div>
\t\t\t\t\t\t\t\t\t<div class=\"name\">Mark Klark</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ========= S-TRAINING-SCHEDULE END ========= -->
    <!-- masonry
================================================== -->

<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item-logo\">
\t\t\t\t\t<a href=\"index.html\" class=\"logo-footer\"><img src=\"assets/img/footer-logo2.svg\" alt=\"logo\"></a>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
\t\t\t\t\t<ul class=\"social-list\">
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item footer-item-list\">
\t\t\t\t\t<h3>Links</h3>
\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t<li><a href=\"#\">Sed ut perspiciatis unde</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Omnis iste natus error sit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Voluptatem accusantium</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Doloremque laudantium</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item\">
\t\t\t\t\t<h3>Contact us</h3>
\t\t\t\t\t<ul class=\"footer-cont\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><a href=\"tel:18004886040\">1-800-488-6040</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:crossFit@gmail.com\">CrossFit@gmail.com</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><a href=\"contacts.html\">London,Street 225r.21</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3 footer-item\">
\t\t\t\t\t<h3>Blog</h3>
\t\t\t\t\t<ul class=\"footer-blog\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"img-cover\"><img src=\"assets/img/footer-icon-1.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t<div class=\"footer-blog-info\">
\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"blog.html\">Sed ut perspiciatis</a></div>
\t\t\t\t\t\t\t\t<p>Omnis iste natus error sit voluptatem…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"img-cover\"><img src=\"assets/img/footer-icon-2.jpg\" alt=\"img\"></a>
\t\t\t\t\t\t\t<div class=\"footer-blog-info\">
\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"blog.html\">Sed ut perspiciatis</a></div>
\t\t\t\t\t\t\t\t<p>Omnis iste natus error sit voluptatem…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"copyright\"><a href=\"#\" target=\"_blank\">Rovadex</a> © 2019. Fitmax. All Rights Reserved.</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t<li><a href=\"blog.html\">News</a></li>
\t\t\t\t\t<li><a href=\"contacts.html\">Contacts</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- ================ FOOTER END ================ -->

\t<!--=================== TO TOP ===================-->
\t<a class=\"to-top\" href=\"#home\">
\t\t<i class=\"fa fa-chevron-up\" aria-hidden=\"true\"></i>
\t</a>

{% endblock %}
", "front/index.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\index.html.twig");
    }
}
