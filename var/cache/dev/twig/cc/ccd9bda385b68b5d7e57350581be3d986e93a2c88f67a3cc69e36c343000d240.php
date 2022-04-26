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

/* includes/footer.html.twig */
class __TwigTemplate_f8548abc7171c56a3d8e44984372fdfb355ad3a5141d0cfd15f50f8a335f5f45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        echo "<!-- *** FOOTER ***
_________________________________________________________ -->
<div id=\"footer\" data-animate=\"fadeInUp\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <h4>Pages</h4>

                <ul>
                    <li><a href=\"text.html\">About us</a>
                    </li>
                    <li><a href=\"text.html\">Terms and conditions</a>
                    </li>
                    <li><a href=\"faq.html\">FAQ</a>
                    </li>
                    <li><a href=\"contact.html\">Contact us</a>
                    </li>
                </ul>

                <hr>

                <h4>User section</h4>

                <ul>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>
                    </li>
                    <li><a href=\"register.html\">Regiter</a>
                    </li>
                </ul>

                <hr class=\"hidden-md hidden-lg hidden-sm\">

            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Top categories</h4>

                <h5>Men</h5>

                <ul>
                    <li><a href=\"category.html\">T-shirts</a>
                    </li>
                    <li><a href=\"category.html\">Shirts</a>
                    </li>
                    <li><a href=\"category.html\">Accessories</a>
                    </li>
                </ul>

                <h5>Ladies</h5>
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

                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Where to find us</h4>

                <p><strong>Obaju Ltd.</strong>
                    <br>13/25 New Avenue
                    <br>New Heaven
                    <br>45Y 73J
                    <br>England
                    <br>
                    <strong>Great Britain</strong>
                </p>

                <a href=\"contact.html\">Go to contact page</a>

                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->



            <div class=\"col-md-3 col-sm-6\">

                <h4>Get the news</h4>

                <p class=\"text-muted\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                <form>
                    <div class=\"input-group\">

                        <input type=\"text\" class=\"form-control\">

                        <span class=\"input-group-btn\">

\t\t\t    <button class=\"btn btn-default\" type=\"button\">Subscribe!</button>

\t\t\t</span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr>

                <h4>Stay in touch</h4>

                <p class=\"social\">
                    <a href=\"#\" class=\"facebook external\" data-animate-hover=\"shake\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\" class=\"twitter external\" data-animate-hover=\"shake\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\" class=\"instagram external\" data-animate-hover=\"shake\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\" class=\"gplus external\" data-animate-hover=\"shake\"><i class=\"fa fa-google-plus\"></i></a>
                    <a href=\"#\" class=\"email external\" data-animate-hover=\"shake\"><i class=\"fa fa-envelope\"></i></a>
                </p>


            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->
<!-- *** COPYRIGHT ***
 _________________________________________________________ -->
<div id=\"copyright\">
    <div class=\"container\">
        <div class=\"col-md-6\">
            <p class=\"pull-left\">© 2015 Your name goes here.</p>

        </div>
        <div class=\"col-md-6\">
            <p class=\"pull-right\">Template by <a href=\"https://bootstrapious.com/e-commerce-templates\">Bootstrapious</a> & <a href=\"https://fity.cz\">Fity</a>
                <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- *** FOOTER ***
_________________________________________________________ -->
<div id=\"footer\" data-animate=\"fadeInUp\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <h4>Pages</h4>

                <ul>
                    <li><a href=\"text.html\">About us</a>
                    </li>
                    <li><a href=\"text.html\">Terms and conditions</a>
                    </li>
                    <li><a href=\"faq.html\">FAQ</a>
                    </li>
                    <li><a href=\"contact.html\">Contact us</a>
                    </li>
                </ul>

                <hr>

                <h4>User section</h4>

                <ul>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>
                    </li>
                    <li><a href=\"register.html\">Regiter</a>
                    </li>
                </ul>

                <hr class=\"hidden-md hidden-lg hidden-sm\">

            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Top categories</h4>

                <h5>Men</h5>

                <ul>
                    <li><a href=\"category.html\">T-shirts</a>
                    </li>
                    <li><a href=\"category.html\">Shirts</a>
                    </li>
                    <li><a href=\"category.html\">Accessories</a>
                    </li>
                </ul>

                <h5>Ladies</h5>
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

                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Where to find us</h4>

                <p><strong>Obaju Ltd.</strong>
                    <br>13/25 New Avenue
                    <br>New Heaven
                    <br>45Y 73J
                    <br>England
                    <br>
                    <strong>Great Britain</strong>
                </p>

                <a href=\"contact.html\">Go to contact page</a>

                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->



            <div class=\"col-md-3 col-sm-6\">

                <h4>Get the news</h4>

                <p class=\"text-muted\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                <form>
                    <div class=\"input-group\">

                        <input type=\"text\" class=\"form-control\">

                        <span class=\"input-group-btn\">

\t\t\t    <button class=\"btn btn-default\" type=\"button\">Subscribe!</button>

\t\t\t</span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr>

                <h4>Stay in touch</h4>

                <p class=\"social\">
                    <a href=\"#\" class=\"facebook external\" data-animate-hover=\"shake\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\" class=\"twitter external\" data-animate-hover=\"shake\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\" class=\"instagram external\" data-animate-hover=\"shake\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\" class=\"gplus external\" data-animate-hover=\"shake\"><i class=\"fa fa-google-plus\"></i></a>
                    <a href=\"#\" class=\"email external\" data-animate-hover=\"shake\"><i class=\"fa fa-envelope\"></i></a>
                </p>


            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->
<!-- *** COPYRIGHT ***
 _________________________________________________________ -->
<div id=\"copyright\">
    <div class=\"container\">
        <div class=\"col-md-6\">
            <p class=\"pull-left\">© 2015 Your name goes here.</p>

        </div>
        <div class=\"col-md-6\">
            <p class=\"pull-right\">Template by <a href=\"https://bootstrapious.com/e-commerce-templates\">Bootstrapious</a> & <a href=\"https://fity.cz\">Fity</a>
                <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->
</div>", "includes/footer.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\includes\\footer.html.twig");
    }
}
