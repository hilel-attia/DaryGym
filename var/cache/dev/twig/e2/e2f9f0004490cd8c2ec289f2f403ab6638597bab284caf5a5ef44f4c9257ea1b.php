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

/* front/history/index.html.twig */
class __TwigTemplate_c8c7f19a047726fed9bf05279ee29b8f8766d5aae668c9669d348e8ca50b5ad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/history/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/history/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/history/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 3
        echo "     <section class=\"s-out-trainer\" style=\"background-image: url(assets/img/bg-contacts.svg);\">
         <div class=\"container\">
             <h2 class=\"title-decor\">Our <span>Event</span></h2>
             <p class=\"slogan\">Be spotive , Be happy , Be lifes</p>
             <div class=\"row\">
                 ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["blog"]);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "                     <div class=\"col-md-4 crossfit-col\">
                         <div class=\"crossfit-item\">
                             <div class=\"border border-dark rounded p-4 clearfix\" style=\"height: 50%; width:100%\">
                                 <p style=\"color: #FFFFFF\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "nomarchive", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                                 <p style=\"color: #FFFFFF\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                                 <td><td><img class=\"-google-plus-circle\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14)), "html", null, true);
            echo "\"alt=\"historyque\" width=\"192\" height=\"140\" ></td>
                                 <hr>
                                 <hr>
                                 <centre>
                                 <ul class=\"social-list\">

                                     <li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                     </div>
                 </div>
             </div>
         </div>
     </section>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/history/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  92 => 14,  88 => 13,  84 => 12,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
 {% block contenpage %}
     <section class=\"s-out-trainer\" style=\"background-image: url(assets/img/bg-contacts.svg);\">
         <div class=\"container\">
             <h2 class=\"title-decor\">Our <span>Event</span></h2>
             <p class=\"slogan\">Be spotive , Be happy , Be lifes</p>
             <div class=\"row\">
                 {% for blog in blog %}
                     <div class=\"col-md-4 crossfit-col\">
                         <div class=\"crossfit-item\">
                             <div class=\"border border-dark rounded p-4 clearfix\" style=\"height: 50%; width:100%\">
                                 <p style=\"color: #FFFFFF\">{{ blog.nomarchive }}</p>
                                 <p style=\"color: #FFFFFF\">{{ blog.description}}</p>
                                 <td><td><img class=\"-google-plus-circle\" src=\"{{ asset('uploads/images/') ~ blog.image }}\"alt=\"historyque\" width=\"192\" height=\"140\" ></td>
                                 <hr>
                                 <hr>
                                 <centre>
                                 <ul class=\"social-list\">

                                     <li><a target=\"_blank\" href=\"https://www.facebook.com/rovadex\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://twitter.com/RovadexStudio\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://www.youtube.com\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                                     <li><a target=\"_blank\" href=\"https://www.instagram.com/rovadex\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 {% endfor %}
                     </div>
                 </div>
             </div>
         </div>
     </section>
 {% endblock %}


", "front/history/index.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\history\\index.html.twig");
    }
}
