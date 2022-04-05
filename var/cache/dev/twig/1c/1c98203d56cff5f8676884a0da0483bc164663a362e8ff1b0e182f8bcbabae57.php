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

/* base-back.html.twig */
class __TwigTemplate_91835844a381ee637a340dce200ffb87c9b88e334141e87a948aceff1a62b848 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">

";
        // line 70
        echo twig_include($this->env, $context, "includes/header-back.html.twig");
        echo "
";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo twig_include($this->env, $context, "includes/footer-back.html.twig");
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- JQVMap -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ChartJS -->
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Summernote -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- overlayScrollbars -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 66
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 72,  277 => 71,  267 => 66,  263 => 64,  258 => 62,  253 => 60,  248 => 58,  243 => 56,  238 => 54,  233 => 52,  229 => 51,  224 => 49,  219 => 47,  215 => 46,  210 => 44,  205 => 42,  200 => 40,  191 => 34,  185 => 32,  175 => 31,  165 => 29,  161 => 27,  156 => 25,  151 => 23,  146 => 21,  141 => 19,  136 => 17,  131 => 15,  124 => 11,  120 => 9,  110 => 8,  91 => 5,  76 => 74,  74 => 71,  70 => 70,  65 => 67,  63 => 31,  60 => 30,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/fontawesome-free/css/all.min.css\") }}\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\") }}\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/icheck-bootstrap/icheck-bootstrap.min.css\") }}\">
        <!-- JQVMap -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/jqvmap/jqvmap.min.css\") }}\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/dist/css/adminlte.min.css\") }}\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\") }}\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/daterangepicker/daterangepicker.css\") }}\">
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/plugins/summernote/summernote-bs4.min.css\") }}\">
        {#{{ encore_entry_link_tags('app') }}#}
    {% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset(\"back-office/plugins/jquery/jquery.min.js\") }}\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"{{ asset(\"back-office/plugins/jquery-ui/jquery-ui.min.js\") }}\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"{{ asset(\"back-office/plugins/bootstrap/js/bootstrap.bundle.min.js\") }}\"></script>
        <!-- ChartJS -->
        <script src=\"{{ asset(\"back-office/plugins/chart.js/Chart.min.js\") }}\"></script>
        <!-- Sparkline -->
        <script src=\"{{ asset(\"back-office/plugins/sparklines/sparkline.js\") }}\"></script>
        <!-- JQVMap -->
        <script src=\"{{ asset(\"back-office/plugins/jqvmap/jquery.vmap.min.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/plugins/jqvmap/maps/jquery.vmap.usa.js\") }}\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"{{ asset(\"back-office/plugins/jquery-knob/jquery.knob.min.js\") }}\"></script>
        <!-- daterangepicker -->
        <script src=\"{{ asset(\"back-office/plugins/moment/moment.min.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/plugins/daterangepicker/daterangepicker.js\") }}\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"{{ asset(\"back-office/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\") }}\"></script>
        <!-- Summernote -->
        <script src=\"{{ asset(\"back-office/plugins/summernote/summernote-bs4.min.js\") }}\"></script>
        <!-- overlayScrollbars -->
        <script src=\"{{ asset(\"back-office/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\") }}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset(\"back-office/dist/js/adminlte.js\") }}\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"{{ asset(\"back-office/dist/js/demo.js\") }}\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"{{ asset(\"back-office/dist/js/pages/dashboard.js\") }}\"></script>
        {#{{ encore_entry_script_tags('app') }}#}
    {% endblock %}
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">

{{ include('includes/header-back.html.twig') }}
{% block body %}

{% endblock %}
{{ include('includes/footer-back.html.twig') }}
</body>

</html>
", "base-back.html.twig", "C:\\wamp64\\(2)\\www\\Fitness\\templates\\base-back.html.twig");
    }
}
