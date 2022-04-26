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

/* produit/listFrontproduit.html.twig */
class __TwigTemplate_8ba2ba3b4d6c8bdf94b14815a995d90d85f47f92d0ff01ebd66f51e486a4261d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listFrontproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listFrontproduit.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/listFrontproduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProduitController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div id=\"content\">
    <div class=\"container\">

        <div class=\"col-md-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"#\">Home</a>
                </li>
                <li>SHOP</li>
            </ul>
        </div>

        <div class=\"col-md-9\">

            <div class=\"box info-bar\">
                <div class=\"row\">


                    <div class=\"col-sm-12 col-md-8  products-number-sort\">
                        <div class=\"row\">

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row products\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabproduit"]) || array_key_exists("tabproduit", $context) ? $context["tabproduit"] : (function () { throw new RuntimeError('Variable "tabproduit" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 36
            echo "                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"detail.html\">
                                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, $context["g"], "imageProduit", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"detail.html\">
                                        <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, $context["g"], "imageProduit", [], "any", false, false, false, 47))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href=\"detail.html\" class=\"invisible\">
                            <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, $context["g"], "imageProduit", [], "any", false, false, false, 53))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"detail.html\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomProduit", [], "any", false, false, false, 56), "html", null, true);
            echo " </a></h3>
                            <p class=\"price\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prixProduit", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                            <p class=\"buttons\">
                                <a href=\"detail.html\" class=\"btn btn-default\">View detail</a>
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                <!-- /.col-md-4 -->
            </div>

            <!-- /.products -->




        </div>
        <!-- /.col-md-9 -->

        <div class=\"col-md-3\">
            <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Categories</h3>
                </div>

                <div class=\"panel-body\">
                    <ul class=\"nav nav-pills nav-stacked category-menu\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcategorie"]) || array_key_exists("tabcategorie", $context) ? $context["tabcategorie"] : (function () { throw new RuntimeError('Variable "tabcategorie" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 92
            echo "                        <li>
                            <a href=\"category.html\"> ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategorie", [], "any", false, false, false, 93), "html", null, true);
            echo "</a>

                        </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                    </ul>

                </div>
            </div>





            <!-- *** MENUS AND FILTERS END *** -->

            <div class=\"banner\">
                <a href=\"#\">
                    <img src=\"img/banner.jpg\" alt=\"sales 2014\" class=\"img-responsive\">
                </a>
            </div>
        </div>

    </div>
    <!-- /.container -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/listFrontproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 98,  207 => 93,  204 => 92,  200 => 91,  175 => 68,  158 => 57,  154 => 56,  148 => 53,  139 => 47,  131 => 42,  123 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Hello ProduitController!{% endblock %}

{% block body %}



    <div id=\"content\">
    <div class=\"container\">

        <div class=\"col-md-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"#\">Home</a>
                </li>
                <li>SHOP</li>
            </ul>
        </div>

        <div class=\"col-md-9\">

            <div class=\"box info-bar\">
                <div class=\"row\">


                    <div class=\"col-sm-12 col-md-8  products-number-sort\">
                        <div class=\"row\">

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row products\">
                {% for g in tabproduit %}
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"detail.html\">
                                        <img src=\"{{ asset('photo/' ~ g.imageProduit) }}\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"detail.html\">
                                        <img src=\"{{ asset('photo/' ~ g.imageProduit) }}\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href=\"detail.html\" class=\"invisible\">
                            <img src=\"{{ asset('photo/' ~ g.imageProduit) }}\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"detail.html\">{{ g.nomProduit}} </a></h3>
                            <p class=\"price\">{{ g.prixProduit}}</p>
                            <p class=\"buttons\">
                                <a href=\"detail.html\" class=\"btn btn-default\">View detail</a>
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
                {% endfor %}

                <!-- /.col-md-4 -->
            </div>

            <!-- /.products -->




        </div>
        <!-- /.col-md-9 -->

        <div class=\"col-md-3\">
            <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Categories</h3>
                </div>

                <div class=\"panel-body\">
                    <ul class=\"nav nav-pills nav-stacked category-menu\">
                        {% for c in tabcategorie %}
                        <li>
                            <a href=\"category.html\"> {{ c.nomCategorie }}</a>

                        </li>

                        {% endfor %}

                    </ul>

                </div>
            </div>





            <!-- *** MENUS AND FILTERS END *** -->

            <div class=\"banner\">
                <a href=\"#\">
                    <img src=\"img/banner.jpg\" alt=\"sales 2014\" class=\"img-responsive\">
                </a>
            </div>
        </div>

    </div>
    <!-- /.container -->
    </div>

{% endblock %}", "produit/listFrontproduit.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\listFrontproduit.html.twig");
    }
}
