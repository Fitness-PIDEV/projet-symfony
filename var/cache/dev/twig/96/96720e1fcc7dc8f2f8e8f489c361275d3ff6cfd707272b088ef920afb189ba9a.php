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

/* produit/index.html.twig */
class __TwigTemplate_b8c6c9b03524aece5d5091dc2b3da1bb601530eb03d11680127aad59b182a63a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/index.html.twig", 1);
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
                            <h3 class=\"card-title\">Liste des Produits    </h3>

                            <div class=\"card-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">

                                        <div class=\"input-group\">
                                          <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addproduits");
        echo "\"class=\"btn btn-outline-primary\">Ajouter Produit</a>
                                        </div>


                                </div>
                            </div>
                        </div>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "                        <div class=\"alert alert-success\">

                            ";
            // line 48
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </div>
                        <!-- /.card-header -->

                        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                            <table class=\"table table-striped\">

                                <thead>
                                <tr>
                                    <th> nomProduit </th>
                                    <th> prixProduit </th>
                                    <th> quantiteProduit </th>
                                    <th> description </th>
                                    <th> imageProduit </th>

                                    <th>delete</th>
                                    <th>update</th>

                                </tr>
                                </thead>
                                <tbody>



                                <tr ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabproduit"]) || array_key_exists("tabproduit", $context) ? $context["tabproduit"] : (function () { throw new RuntimeError('Variable "tabproduit" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                                    <td> ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomProduit", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prixProduit", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "quantiteProduit", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                    <td> <img style=\"width: 100px; height:100px\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, $context["g"], "imageProduit", [], "any", false, false, false, 78))), "html", null, true);
            echo "\"></td>

                                    <td>  <a  href=\" ";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produitDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo " \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\" class=\"btn btn-outline-primary\" > delete</a>
                                    <td>  <a  href=\" ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateproduits", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo " \" class=\"btn btn-outline-primary\"  > update</a>

                                    </td>

                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        <!-- /.container-fluid -->
        <div class=\"input-group\">
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\"class=\"btn btn-outline-primary\">Statistique</a>
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
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 103,  215 => 85,  204 => 81,  200 => 80,  195 => 78,  191 => 77,  187 => 76,  183 => 75,  179 => 74,  173 => 73,  148 => 50,  140 => 48,  136 => 46,  132 => 45,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello ProduitController!{% endblock %}

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
                            <h3 class=\"card-title\">Liste des Produits    </h3>

                            <div class=\"card-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">

                                        <div class=\"input-group\">
                                          <a href=\"{{ path('addproduits') }}\"class=\"btn btn-outline-primary\">Ajouter Produit</a>
                                        </div>


                                </div>
                            </div>
                        </div>
                        {% for message in app.flashes('success')%}
                        <div class=\"alert alert-success\">

                            {{ message }}
                            {% endfor %}
                        </div>
                        <!-- /.card-header -->

                        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                            <table class=\"table table-striped\">

                                <thead>
                                <tr>
                                    <th> nomProduit </th>
                                    <th> prixProduit </th>
                                    <th> quantiteProduit </th>
                                    <th> description </th>
                                    <th> imageProduit </th>

                                    <th>delete</th>
                                    <th>update</th>

                                </tr>
                                </thead>
                                <tbody>



                                <tr {% for g in tabproduit %}>
                                    <td> {{ g.nomProduit }}</td>
                                    <td> {{ g.prixProduit }}</td>
                                    <td> {{ g.quantiteProduit }}</td>
                                    <td>{{ g.description }}</td>
                                    <td> <img style=\"width: 100px; height:100px\" src=\"{{ asset('photo/' ~ g.imageProduit) }}\"></td>

                                    <td>  <a  href=\" {{ path('produitDelete', {\"id\": g.id}) }} \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\" class=\"btn btn-outline-primary\" > delete</a>
                                    <td>  <a  href=\" {{ path('updateproduits', {\"id\": g.id}) }} \" class=\"btn btn-outline-primary\"  > update</a>

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
        <!-- /.container-fluid -->
        <div class=\"input-group\">
            <a href=\"{{ path('stats') }}\"class=\"btn btn-outline-primary\">Statistique</a>
        </div>
    </section>
    <!-- /.content -->
</div>

{% endblock %}
", "produit/index.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\index.html.twig");
    }
}
