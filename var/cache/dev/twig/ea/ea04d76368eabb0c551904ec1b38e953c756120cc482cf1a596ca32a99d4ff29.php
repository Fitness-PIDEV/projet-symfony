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

/* produit/updateProduit.html.twig */
class __TwigTemplate_0f862524d26a08be339d5d8cfef14ccb5370b5cf062b2790997548715d8c6181 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/updateProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/updateProduit.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/updateProduit.html.twig", 1);
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
                        <div> <p>Categorie</p></div>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "categories", [], "any", false, false, false, 59), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "categories", [], "any", false, false, false, 60), 'errors');
        echo "
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Image</p></div>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "imageProduit", [], "any", false, false, false, 63), 'widget');
        echo "
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Description</p></div>
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'widget');
        echo "
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'errors');
        echo "
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Etat</p></div>
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "etat", [], "any", false, false, false, 72), 'widget');
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "etat", [], "any", false, false, false, 73), 'errors');
        echo "
                        </div>
                        <div> <p>Quantite</p></div>
                        <div class=\"col-12 col-sm-6\">
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 77), 'widget');
        echo "
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 78), 'errors');
        echo "
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                        <button type=\"submit\" value=\"ajouter\" class=\"btn btn-info\">modifier</button>
                        <button type=\"submit\" class=\"btn btn-default float-right\">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'rest');
        echo "
                    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
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
        return "produit/updateProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 88,  213 => 87,  201 => 78,  197 => 77,  190 => 73,  186 => 72,  179 => 68,  175 => 67,  168 => 63,  162 => 60,  158 => 59,  152 => 56,  148 => 55,  141 => 51,  137 => 50,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <div> <p>Categorie</p></div>
                        {{ form_widget (form.categories) }}
                        {{ form_errors(form.categories) }}
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Image</p></div>
                            {{ form_widget (form.imageProduit) }}
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Description</p></div>
                            {{ form_widget (form.description) }}
                            {{ form_errors(form.description) }}
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <div> <p>Etat</p></div>
                            {{ form_widget (form.etat) }}
                            {{ form_errors(form.etat) }}
                        </div>
                        <div> <p>Quantite</p></div>
                        <div class=\"col-12 col-sm-6\">
                            {{ form_widget (form.quantiteProduit) }}
                            {{ form_errors(form.quantiteProduit) }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                        <button type=\"submit\" value=\"ajouter\" class=\"btn btn-info\">modifier</button>
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

{% endblock %}", "produit/updateProduit.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\produit\\updateProduit.html.twig");
    }
}
