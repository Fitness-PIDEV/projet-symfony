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
class __TwigTemplate_75310b6cbdebe259d710cae08b777eef80eb19baf27d3e17cb13327a3b517c52 extends Template
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
                <h4>About us</h4>
                <hr>
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





            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>User section</h4>
                <hr>
                <ul>
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" >Login</a>
                    </li>
                    <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>
                    </li>
                </ul>

                <hr class=\"hidden-md hidden-lg hidden-sm\">
            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Get in touch</h4>
                <hr>
                    Esprit, Ariana Soghra
                    <br>fitnessesprit8@gmail.com
                    <br>+216 22 236 895


                </p>


                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->



            <div class=\"col-md-3 col-sm-6\">

                <h4>Get the news</h4>

                <p class=\"text-muted\">Subscribe to our mailing list to get the latest updates.</p>

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
            <p class=\"pull-left\">Copyrights © 2022 - Fitness, All Rights Reserved.</p>

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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- *** FOOTER ***
_________________________________________________________ -->
<div id=\"footer\" data-animate=\"fadeInUp\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <h4>About us</h4>
                <hr>
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





            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>User section</h4>
                <hr>
                <ul>
                    <li><a href=\"{{ path('app_login') }}\" >Login</a>
                    </li>
                    <li><a href=\"{{ path('app_register') }}\">Register</a>
                    </li>
                </ul>

                <hr class=\"hidden-md hidden-lg hidden-sm\">
            </div>
            <!-- /.col-md-3 -->

            <div class=\"col-md-3 col-sm-6\">

                <h4>Get in touch</h4>
                <hr>
                    Esprit, Ariana Soghra
                    <br>fitnessesprit8@gmail.com
                    <br>+216 22 236 895


                </p>


                <hr class=\"hidden-md hidden-lg\">

            </div>
            <!-- /.col-md-3 -->



            <div class=\"col-md-3 col-sm-6\">

                <h4>Get the news</h4>

                <p class=\"text-muted\">Subscribe to our mailing list to get the latest updates.</p>

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
            <p class=\"pull-left\">Copyrights © 2022 - Fitness, All Rights Reserved.</p>

        </div>

    </div>
</div>
<!-- *** COPYRIGHT END *** -->
</div>", "includes/footer.html.twig", "C:\\Users\\Ahmed\\OneDrive\\Bureau\\projet-symfony user\\templates\\includes\\footer.html.twig");
    }
}
