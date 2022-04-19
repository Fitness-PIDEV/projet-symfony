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

/* includes/header.html.twig */
class __TwigTemplate_bb49e76113eee6f5c53bfe9f6fff722fd8f65999a1197623fb006f7f8be70d3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id=\"top\">
    <div class=\"container\">
        <div class=\"col-md-6 offer\" data-animate=\"fadeInDown\">
            <a href=\"#\" class=\"btn btn-success btn-sm\" data-animate-hover=\"shake\">Offer of the day</a>  <a href=\"#\">Get flat 35% off on orders over \$50!</a>
        </div>
        <div class=\"col-md-6\" data-animate=\"fadeInDown\">
            <ul class=\"menu\">
                ";
        // line 10
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 11
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >Login</a>
                </li>
                <li><a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
                </li>
                ";
        }
        // line 16
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 17
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profile:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo " </a></li>
                ";
        }
        // line 19
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                ";
        }
        // line 22
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 23
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
            echo "\">Reclamation</a></li>
                ";
        }
        // line 25
        echo "                <li>
            </ul>
        </div>
    </div>
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"Login\">Customer login</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"customer-orders.html\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email-modal\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"password-modal\" placeholder=\"password\">
                        </div>

                        <p class=\"text-center\">
                            <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                        </p>

                    </form>

                    <p class=\"text-center text-muted\">Not registered yet?</p>
                    <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand home\" href=\"index.html\" data-animate-hover=\"bounce\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/logo.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"hidden-xs\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/logo-small.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"visible-xs\"><span class=\"sr-only\">Obaju - go to homepage</span>
            </a>
            <div class=\"navbar-buttons\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-align-justify\"></i>
                </button>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
                <a class=\"btn btn-default navbar-toggle\" href=\"basket.html\">
                    <i class=\"fa fa-shopping-cart\"></i>  <span class=\"hidden-xs\">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class=\"navbar-collapse collapse\" id=\"navigation\">

            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"active\"><a href=\"index.html\">Home</a>
                </li>
                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Men <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
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
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Featured</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Ladies <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
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
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\"img/banner.jpg\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\"img/banner2.jpg\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Template <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href=\"index.html\">Homepage</a>
                                            </li>
                                            <li><a href=\"category.html\">Category - sidebar left</a>
                                            </li>
                                            <li><a href=\"category-right.html\">Category - sidebar right</a>
                                            </li>
                                            <li><a href=\"category-full.html\">Category - full width</a>
                                            </li>
                                            <li><a href=\"detail.html\">Product detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href=\"register.html\">Register / login</a>
                                            </li>
                                            <li><a href=\"customer-orders.html\">Orders history</a>
                                            </li>
                                            <li><a href=\"customer-order.html\">Order history detail</a>
                                            </li>
                                            <li><a href=\"customer-wishlist.html\">Wishlist</a>
                                            </li>
                                            <li><a href=\"customer-account.html\">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href=\"basket.html\">Shopping cart</a>
                                            </li>
                                            <li><a href=\"checkout1.html\">Checkout - step 1</a>
                                            </li>
                                            <li><a href=\"checkout2.html\">Checkout - step 2</a>
                                            </li>
                                            <li><a href=\"checkout3.html\">Checkout - step 3</a>
                                            </li>
                                            <li><a href=\"checkout4.html\">Checkout - step 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog listing</a>
                                            </li>
                                            <li><a href=\"post.html\">Blog Post</a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a>
                                            </li>
                                            <li><a href=\"text.html\">Text page</a>
                                            </li>
                                            <li><a href=\"text-right.html\">Text page - right sidebar</a>
                                            </li>
                                            <li><a href=\"404.html\">404 page</a>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class=\"navbar-buttons\">

            <div class=\"navbar-collapse collapse right\" id=\"basket-overview\">
                <a href=\"basket.html\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i></a>
            </div>
            <!--/.nav-collapse -->



        </div>

        <div class=\"collapse clearfix\" id=\"search\">

            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"input-group-btn\">

\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>

\t\t    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->
<div id=\"all\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 73,  146 => 72,  97 => 25,  91 => 23,  88 => 22,  82 => 20,  79 => 19,  71 => 17,  68 => 16,  62 => 13,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id=\"top\">
    <div class=\"container\">
        <div class=\"col-md-6 offer\" data-animate=\"fadeInDown\">
            <a href=\"#\" class=\"btn btn-success btn-sm\" data-animate-hover=\"shake\">Offer of the day</a>  <a href=\"#\">Get flat 35% off on orders over \$50!</a>
        </div>
        <div class=\"col-md-6\" data-animate=\"fadeInDown\">
            <ul class=\"menu\">
                {% if not is_granted('ROLE_USER') %}
                <li><a href=\"{{ path('app_login') }}\" >Login</a>
                </li>
                <li><a href=\"{{ path('app_register') }}\">Register</a>
                </li>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <li><a href=\"{{ path('app_profile') }}\">Profile:{{ app.user.prenom }} </a></li>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <li><a href=\"{{ path('app_reclamation') }}\">Reclamation</a></li>
                {% endif %}
                <li>
            </ul>
        </div>
    </div>
    <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"Login\">Customer login</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"customer-orders.html\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email-modal\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"password-modal\" placeholder=\"password\">
                        </div>

                        <p class=\"text-center\">
                            <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                        </p>

                    </form>

                    <p class=\"text-center text-muted\">Not registered yet?</p>
                    <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand home\" href=\"index.html\" data-animate-hover=\"bounce\">
                <img src=\"{{ asset(\"front-office/img/logo.png\")}}\" alt=\"Obaju logo\" class=\"hidden-xs\">
                <img src=\"{{ asset(\"front-office/img/logo-small.png\")}}\" alt=\"Obaju logo\" class=\"visible-xs\"><span class=\"sr-only\">Obaju - go to homepage</span>
            </a>
            <div class=\"navbar-buttons\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-align-justify\"></i>
                </button>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#search\">
                    <span class=\"sr-only\">Toggle search</span>
                    <i class=\"fa fa-search\"></i>
                </button>
                <a class=\"btn btn-default navbar-toggle\" href=\"basket.html\">
                    <i class=\"fa fa-shopping-cart\"></i>  <span class=\"hidden-xs\">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class=\"navbar-collapse collapse\" id=\"navigation\">

            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"active\"><a href=\"index.html\">Home</a>
                </li>
                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Men <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
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
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Featured</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Ladies <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Clothing</h5>
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
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                            <li><a href=\"category.html\">Casual</a>
                                            </li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul>
                                            <li><a href=\"category.html\">Trainers</a>
                                            </li>
                                            <li><a href=\"category.html\">Sandals</a>
                                            </li>
                                            <li><a href=\"category.html\">Hiking shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\"img/banner.jpg\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"banner\">
                                            <a href=\"#\">
                                                <img src=\"img/banner2.jpg\" class=\"img img-responsive\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class=\"dropdown yamm-fw\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Template <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href=\"index.html\">Homepage</a>
                                            </li>
                                            <li><a href=\"category.html\">Category - sidebar left</a>
                                            </li>
                                            <li><a href=\"category-right.html\">Category - sidebar right</a>
                                            </li>
                                            <li><a href=\"category-full.html\">Category - full width</a>
                                            </li>
                                            <li><a href=\"detail.html\">Product detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href=\"register.html\">Register / login</a>
                                            </li>
                                            <li><a href=\"customer-orders.html\">Orders history</a>
                                            </li>
                                            <li><a href=\"customer-order.html\">Order history detail</a>
                                            </li>
                                            <li><a href=\"customer-wishlist.html\">Wishlist</a>
                                            </li>
                                            <li><a href=\"customer-account.html\">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href=\"basket.html\">Shopping cart</a>
                                            </li>
                                            <li><a href=\"checkout1.html\">Checkout - step 1</a>
                                            </li>
                                            <li><a href=\"checkout2.html\">Checkout - step 2</a>
                                            </li>
                                            <li><a href=\"checkout3.html\">Checkout - step 3</a>
                                            </li>
                                            <li><a href=\"checkout4.html\">Checkout - step 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog listing</a>
                                            </li>
                                            <li><a href=\"post.html\">Blog Post</a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a>
                                            </li>
                                            <li><a href=\"text.html\">Text page</a>
                                            </li>
                                            <li><a href=\"text-right.html\">Text page - right sidebar</a>
                                            </li>
                                            <li><a href=\"404.html\">404 page</a>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class=\"navbar-buttons\">

            <div class=\"navbar-collapse collapse right\" id=\"basket-overview\">
                <a href=\"basket.html\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i></a>
            </div>
            <!--/.nav-collapse -->



        </div>

        <div class=\"collapse clearfix\" id=\"search\">

            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"input-group-btn\">

\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>

\t\t    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->
<div id=\"all\">", "includes/header.html.twig", "C:\\Users\\Ahmed\\OneDrive\\Bureau\\projet-symfony user\\templates\\includes\\header.html.twig");
    }
}
