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

/* cours/affichagefront.html.twig.twig */
class __TwigTemplate_fd0126a3c46db4c2763e9774380817e8984ed5bec2d79be46096f347c37a9ab7 extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/affichagefront.html.twig.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/affichagefront.html.twig.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "cours/affichagefront.html.twig.twig", 1);
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

        echo "Hello CoursController!";
        
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
    <div class=\"content-wrapper\" style=\"min-height: 1335.69px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Gestion Cours</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

                <!-- /.row -->

                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Liste des Cours</h3>

                                <div class=\"card-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">

                                        <div class=\"input-group-append\">
                                            <button type=\"submit\" class=\"btn btn-default\">
                                                <i class=\"fas fa-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th> nomCours </th>
                                        <th> dureeCours </th>
                                        <th> salle </th>
                                        <th> nomCoach </th>

                                        <th>delete</th>
                                        <th>update</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcours"]) || array_key_exists("tabcours", $context) ? $context["tabcours"] : (function () { throw new RuntimeError('Variable "tabcours" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                                        <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomCours", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "dureeCours", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "salle", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomCoach", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>

                                        <td>  <a  href=\" ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo " \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\" > delete</a>
                                        <td>  <a  href=\" ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecours", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo " \"  > update</a>

                                        </td>

                                    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo ">


                                    </tbody>
                                </table>
                                <!-- /.endTable -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/affichagefront.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 73,  173 => 69,  169 => 68,  164 => 66,  160 => 65,  156 => 64,  152 => 63,  146 => 62,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello CoursController!{% endblock %}

{% block body %}

    <div class=\"content-wrapper\" style=\"min-height: 1335.69px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Gestion Cours</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

                <!-- /.row -->

                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Liste des Cours</h3>

                                <div class=\"card-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">

                                        <div class=\"input-group-append\">
                                            <button type=\"submit\" class=\"btn btn-default\">
                                                <i class=\"fas fa-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th> nomCours </th>
                                        <th> dureeCours </th>
                                        <th> salle </th>
                                        <th> nomCoach </th>

                                        <th>delete</th>
                                        <th>update</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr {% for g in tabcours %}>
                                        <td> {{ g.nomCours }}</td>
                                        <td> {{ g.dureeCours }}</td>
                                        <td> {{ g.salle }}</td>
                                        <td> {{ g.nomCoach }}</td>

                                        <td>  <a  href=\" {{ path('coursDelete', {\"id\": g.id}) }} \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\" > delete</a>
                                        <td>  <a  href=\" {{ path('updatecours', {\"id\": g.id}) }} \"  > update</a>

                                        </td>

                                    </tr {% endfor %}>


                                    </tbody>
                                </table>
                                <!-- /.endTable -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

{% endblock %}", "cours/affichagefront.html.twig.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\cours\\affichagefront.html.twig.twig");
    }
}
