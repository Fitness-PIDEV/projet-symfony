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

/* produit/affichagefront.html.twig.twig */
class __TwigTemplate_427cf17756647f8075827029d9d0f37d22c8648a92821f778652f3d34e85745f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affichagefront.html.twig.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affichagefront.html.twig.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/affichagefront.html.twig.twig", 1);
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
                                    <form class=\"forms-sample\" method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_prod");
        echo "\">
                                        <div class=\"input-group\">
                                            <input type=\"search\" class=\"form-control rounded\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"search-addon\" name=\"key\"/>
                                            <button type=\"submit\" class=\"btn btn-outline-primary\" >search</button>
                                            <button type=\"submit\" class=\"btn btn-outline-primary\" ><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addproduits");
        echo "\">Ajouter Produit</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th> nomProduit </th>
                                    <th> prixProduit </th>
                                    <th> imageProduit </th>
                                    <th> quantiteProduit </th>
                                    <th> idCategorie </th>
                                    
                                    <th> description </th>

                                    <th>delete</th>
                                    <th>update</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabproduit"]) || array_key_exists("tabproduit", $context) ? $context["tabproduit"] : (function () { throw new RuntimeError('Variable "tabproduit" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                                    <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nomProduit", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prixProduit", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                    <td> <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photo/" . twig_get_attribute($this->env, $this->source, $context["g"], "imageProduit", [], "any", false, false, false, 68))), "html", null, true);
            echo "\"></td>
                                    <td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "quantiteProduit", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "idCategorie", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>

                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>


                                    <td>  <a  href=\" ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produitDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo " \" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\" class=\"btn btn-outline-primary\" > delete</a>
                                    <td>  <a  href=\" ";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateproduits", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo " \" class=\"btn btn-outline-primary\"  > update</a>

                                    </td>

                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return "produit/affichagefront.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  192 => 76,  188 => 75,  182 => 72,  177 => 70,  173 => 69,  169 => 68,  165 => 67,  161 => 66,  155 => 65,  126 => 39,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                    <form class=\"forms-sample\" method=\"post\" action=\"{{ path('recherche_prod') }}\">
                                        <div class=\"input-group\">
                                            <input type=\"search\" class=\"form-control rounded\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"search-addon\" name=\"key\"/>
                                            <button type=\"submit\" class=\"btn btn-outline-primary\" >search</button>
                                            <button type=\"submit\" class=\"btn btn-outline-primary\" ><a href=\"{{ path('addproduits') }}\">Ajouter Produit</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th> nomProduit </th>
                                    <th> prixProduit </th>
                                    <th> imageProduit </th>
                                    <th> quantiteProduit </th>
                                    <th> idCategorie </th>
                                    
                                    <th> description </th>

                                    <th>delete</th>
                                    <th>update</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr {% for g in tabproduit %}>
                                    <td> {{ g.nomProduit }}</td>
                                    <td> {{ g.prixProduit }}</td>
                                    <td> <img src=\"{{ asset('photo/' ~ g.imageProduit) }}\"></td>
                                    <td> {{ g.quantiteProduit }}</td>
                                    <td>{{ g.idCategorie }}</td>

                                    <td>{{ g.description }}</td>


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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

{% endblock %}
", "produit/affichagefront.html.twig.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\affichagefront.html.twig.twig");
    }
}
