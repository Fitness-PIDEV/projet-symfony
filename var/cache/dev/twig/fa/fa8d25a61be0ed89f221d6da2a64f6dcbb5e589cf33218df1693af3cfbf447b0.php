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

/* produit/ajouterProduit.html.twig */
class __TwigTemplate_6f4815528d2706a3364530ad02155d2d30f9b3db1c30c308767767292834e205 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajouterProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajouterProduit.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/ajouterProduit.html.twig", 1);
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
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Remplir le formulaire</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- SELECT2 EXAMPLE -->
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Ajouter Produit</h3>

                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"card-body\">

                                    <div class=\"col-md-6\">
                                    <div> <p>Nom_Produit</p></div>

                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nomProduit", [], "any", false, false, false, 50), 'widget');
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nomProduit", [], "any", false, false, false, 51), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Prix</p></div>
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prixProduit", [], "any", false, false, false, 55), 'widget');
        echo "
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prixProduit", [], "any", false, false, false, 56), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                     <div> <p>Categorie</p></div>
                                     ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "categories", [], "any", false, false, false, 60), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "categories", [], "any", false, false, false, 61), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Image</p></div>
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "imageProduit", [], "any", false, false, false, 65), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Description</p></div>
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'widget');
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'errors');
        echo "
                                    </div>
                                    ";
        // line 77
        echo "                                    <div> <p>Quantite</p></div>
                                    <div class=\"col-12 col-sm-6\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 79), 'widget');
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 80), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer\">
                                    <button type=\"submit\" value=\"ajouter\" class=\"btn btn-info\">Ajouter</button>
                                    <button type=\"submit\" class=\"btn btn-default float-right\">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'rest');
        echo "
                                ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->



                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">

                    </div>
                </div>

                <section/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/ajouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 90,  206 => 89,  194 => 80,  190 => 79,  186 => 77,  181 => 70,  177 => 69,  170 => 65,  163 => 61,  159 => 60,  152 => 56,  148 => 55,  141 => 51,  137 => 50,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello ProduitController!{% endblock %}

{% block body %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Remplir le formulaire</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- SELECT2 EXAMPLE -->
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Ajouter Produit</h3>

                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                                <div class=\"card-body\">

                                    <div class=\"col-md-6\">
                                    <div> <p>Nom_Produit</p></div>

                                    {{ form_widget (form.nomProduit) }}
                                    {{ form_errors(form.nomProduit) }}
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Prix</p></div>
                                    {{ form_widget (form.prixProduit) }}
                                    {{ form_errors(form.prixProduit) }}
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                     <div> <p>Categorie</p></div>
                                     {{ form_widget (form.categories) }}
                                    {{ form_errors(form.categories) }}
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Image</p></div>
                                    {{ form_widget (form.imageProduit) }}
                                    </div>
                                    <div class=\"col-12 col-sm-6\">
                                    <div> <p>Description</p></div>
                                    {{ form_widget (form.description) }}
                                    {{ form_errors(form.description) }}
                                    </div>
                                    {#  <div class=\"col-12 col-sm-6\">
                                    <div> <p>Etat</p></div>
                                    {{ form_widget (form.etat) }}
                                    {{ form_errors(form.etat) }}
                                    </div>#}
                                    <div> <p>Quantite</p></div>
                                    <div class=\"col-12 col-sm-6\">
                                    {{ form_widget (form.quantiteProduit) }}
                                    {{ form_errors(form.quantiteProduit) }}
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer\">
                                    <button type=\"submit\" value=\"ajouter\" class=\"btn btn-info\">Ajouter</button>
                                    <button type=\"submit\" class=\"btn btn-default float-right\">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                                {{ form_rest(form) }}
                                {{ form_end(form) }}
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->



                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">

                    </div>
                </div>

                <section/>

{% endblock %}", "produit/ajouterProduit.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\ajouterProduit.html.twig");
    }
}
