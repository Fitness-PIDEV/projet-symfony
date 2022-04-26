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

/* cours/ListFrontCours.html.twig */
class __TwigTemplate_ef9aabae66c25796b5caf0cd12040f82ef1760b861b8b07ea5095022b6c4a8a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/ListFrontCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/ListFrontCours.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "cours/ListFrontCours.html.twig", 1);
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


        <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
        <div id=\"advantages\">
            <div class=\"box info-bar\">
                <div class=\"row\">


                    <div class=\"col-sm-12 col-md-8  products-number-sort\">
                        <div class=\"row\">
                            <h3>DECOUVREZ NOS COURS !</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcours"]) || array_key_exists("tabcours", $context) ? $context["tabcours"] : (function () { throw new RuntimeError('Variable "tabcours" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 25
            echo "                <div class=\"same-height-row\">
                    <div class=\"col-sm-4\">
                        <div class=\"box same-height clickable\">
                            <div class=\"icon\"><i class=\"fa fa-heart\"></i>
                            </div>

                            <h3><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "getId", [], "method", false, false, false, 31)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomCours", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></h3>
                            <p> <br> </p>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->


    </div>
    <!-- /#content -->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/ListFrontCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  103 => 31,  95 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}

<div id=\"all\">

    <div id=\"content\">


        <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
        <div id=\"advantages\">
            <div class=\"box info-bar\">
                <div class=\"row\">


                    <div class=\"col-sm-12 col-md-8  products-number-sort\">
                        <div class=\"row\">
                            <h3>DECOUVREZ NOS COURS !</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                {% for g in tabcours %}
                <div class=\"same-height-row\">
                    <div class=\"col-sm-4\">
                        <div class=\"box same-height clickable\">
                            <div class=\"icon\"><i class=\"fa fa-heart\"></i>
                            </div>

                            <h3><a href=\"{{ path('cours_detail', {\"id\": g.getId()}) }}\">{{ g.nomCours}}</a></h3>
                            <p> <br> </p>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
                {% endfor %}
            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->


    </div>
    <!-- /#content -->
</div>

{% endblock %}", "cours/ListFrontCours.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\cours\\ListFrontCours.html.twig");
    }
}
