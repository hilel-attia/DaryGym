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

/* admin/evenement/index.html.twig */
class __TwigTemplate_c07602b7dea72be0177d4225758fc7dc191810fae25a4d2aca5d2ee33e5b6592 extends Template
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
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 4
        echo "    <div><p><h2>Liste  des evenement</h2></p></div>

    ";
        // line 6
        if ((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <table id=\"evenement\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Lieux</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Datefin</th>
                <th>image</th>

            </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 23
                echo "                <tr>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Lieu", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Date", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Type", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Prix", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "datefin", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Description", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    <td><td> <img class=\"-google-plus-circle\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 31)), "html", null, true);
                echo "\"alt=\"exercice\" width=\"192\" height=\"140\" >  </td>
                    </td>
                    <td>
                        <a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ajoute-event");
                echo "\" class=\"btn btn-dark\">Ajouter</a>
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"  class=\"btn btn-dark\">Modifier</a>

                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet evenement ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 46
            echo "        <p>Aucun articles</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 46,  153 => 43,  141 => 37,  136 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  95 => 23,  91 => 22,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/bars.html.twig' %}

{% block contenpage %}
    <div><p><h2>Liste  des evenement</h2></p></div>

    {% if evenement %}
        <table id=\"evenement\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Lieux</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Datefin</th>
                <th>image</th>

            </tr>
            </thead>
            <tbody>
            {% for event in evenement %}
                <tr>
                    <td>{{ event.Nom }}</td>
                    <td>{{ event.Lieu }}</td>
                    <td>{{ event.Date }}</td>
                    <td>{{ event.Type }}</td>
                    <td>{{ event.Prix }}</td>
                    <td>{{ event.datefin }}</td>
                    <td>{{ event.Description }}</td>
                    <td><td> <img class=\"-google-plus-circle\" src=\"{{ asset('uploads/images/') ~ event.image }}\"alt=\"exercice\" width=\"192\" height=\"140\" >  </td>
                    </td>
                    <td>
                        <a href=\"{{ path('Ajoute-event') }}\" class=\"btn btn-dark\">Ajouter</a>
                        <a href=\"{{ path('updateEvenement',{'id':event.id})}}\"  class=\"btn btn-dark\">Modifier</a>

                        <a href=\"{{ path('deleteEvenement' ,{ 'id':event.id})}}\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet evenement ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>Aucun articles</p>
    {% endif %}
{% endblock %}", "admin/evenement/index.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\admin\\evenement\\index.html.twig");
    }
}
