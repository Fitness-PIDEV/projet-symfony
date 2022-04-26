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

/* produit/details.html.twig */
class __TwigTemplate_ffa476df937580d53abfa528b6eb57fae0b3b5552f0083e1ab2f8d43ee40bffa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/details.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-3\">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Categories</h3>
                    </div>

                   ";
        // line 30
        echo "                </div>

            </div>
            <!-- *** MENUS AND FILTERS END *** -->
            <div class=\"col-md-9\">
                <div id=\"mainImage\">

                    <img  style=\"width: 300px; height:300px\"src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 37, $this->source); })()), "imageProduit", [], "any", false, false, false, 37))), "html", null, true);
        echo "\">
                </div>
                <div class=\"box\" id=\"details\">
                    <p>
                    <h4>Nom du Produit</h4>
                    <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 42, $this->source); })()), "nomProduit", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    <h4>Prix</h4>
                    <p class=\"single-product-pricing\"> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 44, $this->source); })()), "prixProduit", [], "any", false, false, false, 44), "html", null, true);
        echo " DT</p>

                    <h4>Description</h4>
                    <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    <h4>quantite</h4>
                    <p> Il reste que ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 49), "html", null, true);
        echo " de ce produit</p>

                    <hr>

                </div>


            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  113 => 47,  107 => 44,  102 => 42,  94 => 37,  85 => 30,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}

<div id=\"all\">

    <div id=\"content\">
        <div class=\"container\">

            <div class=\"col-md-3\">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class=\"panel panel-default sidebar-menu\">

                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Categories</h3>
                    </div>

                   {# <div class=\"panel-body\">
                        <ul class=\"nav nav-pills nav-stacked category-menu\">
                            {% for c in tabcategorie %}
                            <li>
                                <a href=\"category.html\"> {{ c.nomCategorie }}</a>

                            </li>

                            {% endfor %}
                        </ul>

                      </div> #}
                </div>

            </div>
            <!-- *** MENUS AND FILTERS END *** -->
            <div class=\"col-md-9\">
                <div id=\"mainImage\">

                    <img  style=\"width: 300px; height:300px\"src=\"{{ asset('photo/' ~ produit.imageProduit) }}\">
                </div>
                <div class=\"box\" id=\"details\">
                    <p>
                    <h4>Nom du Produit</h4>
                    <p>{{ produit.nomProduit }}</p>
                    <h4>Prix</h4>
                    <p class=\"single-product-pricing\"> {{ produit.prixProduit }} DT</p>

                    <h4>Description</h4>
                    <p>{{ produit.description }}</p>
                    <h4>quantite</h4>
                    <p> Il reste que {{ produit.quantiteProduit}} de ce produit</p>

                    <hr>

                </div>


            </div>
        </div>
    </div>
</div>
{% endblock %}", "produit/details.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\details.html.twig");
    }
}
