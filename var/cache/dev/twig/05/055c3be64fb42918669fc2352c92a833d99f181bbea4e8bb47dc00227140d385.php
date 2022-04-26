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
class __TwigTemplate_5268e05c08902d18c194a11dc3dccf74a9067348a81363eb49ee5f8c8d2e8479 extends Template
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

                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"detail.html\">
                                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"detail.html\">
                                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/product1_2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href=\"detail.html\" class=\"invisible\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"detail.html\">Fur coat with very but very very long name</a></h3>
                            <p class=\"price\">\$143.00</p>
                            <p class=\"buttons\">
                                <a href=\"detail.html\" class=\"btn btn-default\">View detail</a>
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>


                <!-- /.col-md-4 -->
            </div>
            <!-- /.products -->

            <div class=\"pages\">

                <p class=\"loadMore\">
                    <a href=\"#\" class=\"btn btn-primary btn-lg\"><i class=\"fa fa-chevron-down\"></i> Load more</a>
                </p>

                <ul class=\"pagination\">
                    <li><a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\"><a href=\"#\">1</a>
                    </li>
                    <li><a href=\"#\">2</a>
                    </li>
                    <li><a href=\"#\">3</a>
                    </li>
                    <li><a href=\"#\">4</a>
                    </li>
                    <li><a href=\"#\">5</a>
                    </li>
                    <li><a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>


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
                        <li>
                            <a href=\"category.html\">Men <span class=\"badge pull-right\">42</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Shirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"active\">
                            <a href=\"category.html\">Ladies  <span class=\"badge pull-right\">123</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Skirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"category.html\">Kids  <span class=\"badge pull-right\">11</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Skirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>

            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Brands <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>

                <div class=\"panel-body\">

                    <form>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Armani (10)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Versace (12)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Carlo Bruni (15)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Jack Honey (14)
                                </label>
                            </div>
                        </div>

                        <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                    </form>

                </div>
            </div>

            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Colours <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>

                <div class=\"panel-body\">

                    <form>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour white\"></span> White (14)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour blue\"></span> Blue (10)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour green\"></span> Green (20)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour yellow\"></span> Yellow (13)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour red\"></span> Red (10)
                                </label>
                            </div>
                        </div>

                        <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                    </form>

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
        return array (  144 => 54,  135 => 48,  127 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"detail.html\">
                                        <img src=\"{{ asset(\"front-office/img/product1.jpg\")}}\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"detail.html\">
                                        <img src=\"{{ asset(\"front-office/img/product1_2.jpg\")}}\" alt=\"\" class=\"img-responsive\">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href=\"detail.html\" class=\"invisible\">
                            <img src=\"{{ asset(\"front-office/img/product1.jpg\")}}\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"detail.html\">Fur coat with very but very very long name</a></h3>
                            <p class=\"price\">\$143.00</p>
                            <p class=\"buttons\">
                                <a href=\"detail.html\" class=\"btn btn-default\">View detail</a>
                                <a href=\"basket.html\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>


                <!-- /.col-md-4 -->
            </div>
            <!-- /.products -->

            <div class=\"pages\">

                <p class=\"loadMore\">
                    <a href=\"#\" class=\"btn btn-primary btn-lg\"><i class=\"fa fa-chevron-down\"></i> Load more</a>
                </p>

                <ul class=\"pagination\">
                    <li><a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\"><a href=\"#\">1</a>
                    </li>
                    <li><a href=\"#\">2</a>
                    </li>
                    <li><a href=\"#\">3</a>
                    </li>
                    <li><a href=\"#\">4</a>
                    </li>
                    <li><a href=\"#\">5</a>
                    </li>
                    <li><a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>


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
                        <li>
                            <a href=\"category.html\">Men <span class=\"badge pull-right\">42</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Shirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"active\">
                            <a href=\"category.html\">Ladies  <span class=\"badge pull-right\">123</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Skirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"category.html\">Kids  <span class=\"badge pull-right\">11</span></a>
                            <ul>
                                <li><a href=\"category.html\">T-shirts</a>
                                </li>
                                <li><a href=\"category.html\">Skirts</a>
                                </li>
                                <li><a href=\"category.html\">Pants</a>
                                </li>
                                <li><a href=\"category.html\">Accessories</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>

            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Brands <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>

                <div class=\"panel-body\">

                    <form>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Armani (10)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Versace (12)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Carlo Bruni (15)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\">Jack Honey (14)
                                </label>
                            </div>
                        </div>

                        <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                    </form>

                </div>
            </div>

            <div class=\"panel panel-default sidebar-menu\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Colours <a class=\"btn btn-xs btn-danger pull-right\" href=\"#\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>

                <div class=\"panel-body\">

                    <form>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour white\"></span> White (14)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour blue\"></span> Blue (10)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour green\"></span> Green (20)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour yellow\"></span> Yellow (13)
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> <span class=\"colour red\"></span> Red (10)
                                </label>
                            </div>
                        </div>

                        <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>

                    </form>

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
