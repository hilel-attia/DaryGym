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

/* admin/participant/index.html.twig */
class __TwigTemplate_25e2d1add9ad9d533ee27480ade726abc7eea39470a9ee0ee29d066d0714c89c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/participant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/participant/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/participant/index.html.twig", 1);
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
        echo "    <div><p><h2>Liste  des participents</h2></p></div>

    ";
        // line 5
        if ((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <table id=\"reservation\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Name-participant</th>
                <th>UserName-participant</th>
                <th>ville</th>
                <th>NumeroTelephone-participant</th>

            </tr>
            </thead>
            <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
                // line 18
                echo "                <tr>
                    <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "namepart", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "usernamepart", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "ville", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "numtelephonepart", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteParticipants", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet evenement ?');\">Supprimer
                        </a>
                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qrcode", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Generer Qr code</a>
                    </td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 35
            echo "        <p>Aucun Participant</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/participant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  128 => 32,  117 => 27,  111 => 24,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  87 => 17,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/bars.html.twig' %}
{% block contenpage %}
    <div><p><h2>Liste  des participents</h2></p></div>

    {% if reservation %}
        <table id=\"reservation\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Name-participant</th>
                <th>UserName-participant</th>
                <th>ville</th>
                <th>NumeroTelephone-participant</th>

            </tr>
            </thead>
            <tbody>
            {% for parte in reservation %}
                <tr>
                    <td>{{ parte.namepart }}</td>
                    <td>{{ parte.usernamepart }}</td>
                    <td>{{ parte.ville}}</td>
                    <td>{{ parte.numtelephonepart}}</td>
                    <td>
                        <a href=\"{{ path('deleteParticipants',{ 'id':parte.id})}}\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet evenement ?');\">Supprimer
                        </a>
                        <a href=\"{{ path('qrcode' , {'id' : parte.id}) }}\" class=\"btn btn-primary\">Generer Qr code</a>
                    </td>

                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>Aucun Participant</p>
    {% endif %}
{% endblock %}", "admin/participant/index.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\admin\\participant\\index.html.twig");
    }
}
