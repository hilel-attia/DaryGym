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

/* admin/user/user.html.twig */
class __TwigTemplate_be969db835c2ddb11f84480929ef797d669db134d8558a1bc39b75b4c3aa7a28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/user.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/user/user.html.twig", 1);
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
        echo "
\t<div class=\"\">
\t\t<div class=\"page-title\">
\t\t\t<div class=\"title_left\">
\t\t\t\t<h5>
\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.listing"), "html", null, true);
        echo "
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"clearfix\"></div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.user_listing"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_user");
        echo "\" class=\"btn btn-success\">NEW</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_user");
        echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"action\" required id=\"action_select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.group_actions"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.deactivate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.deactivate"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.Activate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.Activate"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.username"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.email"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.name"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.modifier"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.status"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()), function ($__user__) use ($context, $macros) { $context["user"] = $__user__; return  !twig_get_attribute($this->env, $this->source, $context["user"], "deleted", [], "any", false, false, false, 58); }));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nomComplet", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["user"], "valid", [], "any", false, false, false, 70)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-warning activate-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 87,  229 => 81,  225 => 79,  217 => 75,  209 => 71,  207 => 70,  199 => 65,  194 => 63,  190 => 62,  186 => 61,  182 => 60,  179 => 59,  175 => 58,  169 => 55,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  149 => 50,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  106 => 31,  96 => 24,  90 => 21,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}

\t<div class=\"\">
\t\t<div class=\"page-title\">
\t\t\t<div class=\"title_left\">
\t\t\t\t<h5>
\t\t\t\t\t{{ \"backend.user.listing\"|trans }}
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"clearfix\"></div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t{{ \"backend.user.user_listing\"|trans }}</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_new_user') }}\" class=\"btn btn-success\">NEW</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<form action=\"{{ path('app_admin_groupaction_user') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"action\" required id=\"action_select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t\t{{ \"backend.user.group_actions\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.deactivate\"|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ \"backend.user.deactivate\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.Activate\"|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ \"backend.user.Activate\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.delete\"|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ \"backend.user.delete\"|trans }}</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.username\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.email\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.name\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.modifier\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.status\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.delete\"|trans }}</th>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for user in users|filter(user => not user.deleted)  %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ user.id }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.nomComplet }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_user',{\"id\":user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{%  if user.valid %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_user', {'id': user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_user', {'id': user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_delete_user', {'id': user.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "admin/user/user.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\admin\\user\\user.html.twig");
    }
}
