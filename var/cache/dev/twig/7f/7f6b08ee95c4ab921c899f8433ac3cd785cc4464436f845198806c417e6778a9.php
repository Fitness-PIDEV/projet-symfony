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

/* categorie/affichagefront.html.twig.twig */
class __TwigTemplate_73de86058894049fe83e9fe5acbb173f6d801e978b43f428bfb8486bdc59178c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/affichagefront.html.twig.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/affichagefront.html.twig.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "categorie/affichagefront.html.twig.twig", 1);
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

        echo "Hello CategorieController!";
        
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
        echo "    <div class=\"content-wrapper\" style=\"min-height: 1335.69px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Gestion Produit</h1>
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
                                <h3 class=\"card-title\">Liste des Produits</h3>

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
                                        <th> nomCategorie </th>
                                        <th> etat </th>

                                        <th>delete</th>
                                        <th>update</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcat"]) || array_key_exists("tabcat", $context) ? $context["tabcat"] : (function () { throw new RuntimeError('Variable "tabcat" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                                        <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomCategorie", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "etat", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>

                                        <td>  <a  href=\" ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo " \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\"class=\"btn btn-outline-primary\"  > delete</a>
                                        <td>  <a  href=\" ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo " \" class=\"btn btn-outline-primary\"  > update</a>

                                        </td>

                                    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
            <div class=\"input-group\">
               <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addcategorie");
        echo "\" class=\"btn btn-outline-primary\">Ajouter Categorie</a>
            </div>
        </section>
        <!-- /.content -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/affichagefront.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 85,  173 => 68,  162 => 64,  158 => 63,  153 => 61,  149 => 60,  143 => 59,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello CategorieController!{% endblock %}

{% block body %}
    <div class=\"content-wrapper\" style=\"min-height: 1335.69px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Gestion Produit</h1>
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
                                <h3 class=\"card-title\">Liste des Produits</h3>

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
                                        <th> nomCategorie </th>
                                        <th> etat </th>

                                        <th>delete</th>
                                        <th>update</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr {% for g in tabcat %}>
                                        <td> {{ g.nomCategorie }}</td>
                                        <td>{{ g.etat }}</td>

                                        <td>  <a  href=\" {{ path('categorieDelete', {\"id\": g.id}) }} \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\"class=\"btn btn-outline-primary\"  > delete</a>
                                        <td>  <a  href=\" {{ path('updatecategorie', {\"id\": g.id}) }} \" class=\"btn btn-outline-primary\"  > update</a>

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
            <div class=\"input-group\">
               <a href=\"{{ path('addcategorie') }}\" class=\"btn btn-outline-primary\">Ajouter Categorie</a>
            </div>
        </section>
        <!-- /.content -->
    </div>
{% endblock %}
", "categorie/affichagefront.html.twig.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\categorie\\affichagefront.html.twig.twig");
    }
}
