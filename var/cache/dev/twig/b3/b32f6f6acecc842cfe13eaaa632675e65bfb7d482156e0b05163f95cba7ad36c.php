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

/* front/reservation/index.html.twig */
class __TwigTemplate_707ba6dfca192c2ba734527ce2771250f0b03bf51b1a4b339ee8f4e82573bb95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/reservation/index.html.twig", 1);
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
        echo "        <section class=\"s-crossfit\">
            <div class=\"container\">
                <h2>Search A Post !!</h2>

                <div class=\"sidebar-search\">

                    <div class=\"input-group custom-search-form\">

                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                    </div>
                    <!-- /input-group -->
                </div>
                <div class=\"row\" id=\"all\">
                    ";
        // line 16
        $this->loadTemplate("front/reservation/eventajax.html.twig", "front/reservation/index.html.twig", 16)->display($context);
        // line 17
        echo "                </div>
                <div class=\"row\" id=\"search\">
                    ";
        // line 25
        echo "                </div>
                <br><br><br><br>
            </div>
        </section>
     <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
     <script
             src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
     </script>
     <script>
         \$( document ).ready(function() {
             var currentRequest = null;
             \$(\"#search\").keyup(function(e){
                 /* La variable value va prendre la valeur insérer dans le champ de texte
                 afin d’effectuer la recherche */
                 var value = \$(this).val();
                 if(currentRequest != null) {
                     currentRequest.abort();
                 }
                 /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                 « search » pour faire la recherche */
                 currentRequest = \$.ajax({
                     url : \"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxevent");
        echo "\",
                     type : 'GET',
                     data: {
                         'searchValue' : value
                     },
                     success : function(retour)
                     {
                         \$('#all').html(retour);
                     },
                 });
                 return false;
             });
         });
     </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  100 => 31,  95 => 29,  89 => 25,  85 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
 {% block contenpage %}
        <section class=\"s-crossfit\">
            <div class=\"container\">
                <h2>Search A Post !!</h2>

                <div class=\"sidebar-search\">

                    <div class=\"input-group custom-search-form\">

                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                    </div>
                    <!-- /input-group -->
                </div>
                <div class=\"row\" id=\"all\">
                    {% include 'front/reservation/eventajax.html.twig' %}
                </div>
                <div class=\"row\" id=\"search\">
                    {#  {% for event in evenement %}
                        {% if  event == 'null' %}
                            <div class=\"alert alert-danger\">Vide</div>
                        {% endif %}
                    {% endfor %}
                    #}
                </div>
                <br><br><br><br>
            </div>
        </section>
     <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
     <script
             src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
     </script>
     <script>
         \$( document ).ready(function() {
             var currentRequest = null;
             \$(\"#search\").keyup(function(e){
                 /* La variable value va prendre la valeur insérer dans le champ de texte
                 afin d’effectuer la recherche */
                 var value = \$(this).val();
                 if(currentRequest != null) {
                     currentRequest.abort();
                 }
                 /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                 « search » pour faire la recherche */
                 currentRequest = \$.ajax({
                     url : \"{{ path('ajaxevent') }}\",
                     type : 'GET',
                     data: {
                         'searchValue' : value
                     },
                     success : function(retour)
                     {
                         \$('#all').html(retour);
                     },
                 });
                 return false;
             });
         });
     </script>
{% endblock %}





", "front/reservation/index.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\reservation\\index.html.twig");
    }
}
