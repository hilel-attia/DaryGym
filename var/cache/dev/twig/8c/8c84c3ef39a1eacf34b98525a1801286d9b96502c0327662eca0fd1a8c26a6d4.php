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

/* front/reservation/eventajax.html.twig */
class __TwigTemplate_a794f91ca387ce857ac59233d0708aff74a043a9eaf16e5fc8190792edd66d3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/eventajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/eventajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "    <div class=\"col-md-4 crossfit-col\">
        <div class=\"crossfit-item\">
            <img class=\"rx-lazy\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/") . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 4)), "html", null, true);
            echo "\" style=\"width: 150px; height: 150px;\" data-src=\"assets/img/serv-1.svg\" alt=\"img\">
            <h3>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
            <p>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
            <p style=\"color: #FFFFFF\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Date", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
            <p style=\"color: #FFFFFF\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
            <p style=\"color: #FFFFFF\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
            <p style=\"color: #FFFFFF\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
            <p style=\"color: #FFFFFF\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
            <a class=\"btn\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ajoute-reserve");
            echo "\">Réserver</a>
            <br>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qrcode", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Generer Qr code</a>
            <br>
            <button class=\"btn btn-primary\" id=\"checkout-button\">Checkout</button>
        </div>
    </div>
    <script src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://js.stripe.com/v3/"), "html", null, true);
            echo "\"></script>
    <script>
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51ITrmKDemurknTpxNogaH6qwkkX1HK7bxuSwQU2CGyorqtm0u4sXCrbYFAsbFLTRv1tZPANLJCzSiKCxL40xQXi90040tZxsuX');
        var checkoutButton = document.getElementById('checkout-button');
        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.
            fetch('/fr/reservation/create-checkout-session', {
                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/reservation/eventajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  88 => 14,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for event in evenement %}
    <div class=\"col-md-4 crossfit-col\">
        <div class=\"crossfit-item\">
            <img class=\"rx-lazy\" src=\"{{ asset('/uploads/images/') ~event.image}}\" style=\"width: 150px; height: 150px;\" data-src=\"assets/img/serv-1.svg\" alt=\"img\">
            <h3>{{ event.Nom }}</h3>
            <p>{{ event.description}}</p>
            <p style=\"color: #FFFFFF\">{{ event.Date}}</p>
            <p style=\"color: #FFFFFF\">{{ event.type}}</p>
            <p style=\"color: #FFFFFF\">{{ event.lieu}}</p>
            <p style=\"color: #FFFFFF\">{{ event.prix}}</p>
            <p style=\"color: #FFFFFF\">{{ event.dateFin}}</p>
            <a class=\"btn\" href=\"{{ path('Ajoute-reserve') }}\">Réserver</a>
            <br>
            <a href=\"{{ path('qrcode' , {'id' : event.id}) }}\" class=\"btn btn-primary\">Generer Qr code</a>
            <br>
            <button class=\"btn btn-primary\" id=\"checkout-button\">Checkout</button>
        </div>
    </div>
    <script src=\"{{ asset('https://js.stripe.com/v3/')}}\"></script>
    <script>
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51ITrmKDemurknTpxNogaH6qwkkX1HK7bxuSwQU2CGyorqtm0u4sXCrbYFAsbFLTRv1tZPANLJCzSiKCxL40xQXi90040tZxsuX');
        var checkoutButton = document.getElementById('checkout-button');
        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.
            fetch('/fr/reservation/create-checkout-session', {
                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    </script>
{% endfor %}", "front/reservation/eventajax.html.twig", "C:\\Users\\delll\\Desktop\\esprit\\Pi-dev\\DaryGym-master\\templates\\front\\reservation\\eventajax.html.twig");
    }
}
