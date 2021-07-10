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

/* user/connection.html.twig */
class __TwigTemplate_4805cc12c217b74df69d409e0209919467811e24a4b006357f5aecd79dd33ca8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connection.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
    <!-- End Google Tag Manager -->
    <meta charset=\"utf-8\" />
    <title>| Keenthemes</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <link rel=\"canonical\" href=\"https://keenthemes.com/metronic\" />
    <!--begin::Fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href=\"../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/style.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/header/base/light49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/header/menu/light49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/brand/dark49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/aside/dark49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Layout Themes-->
    <link rel=\"shortcut icon\" href=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico\" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
    <style> .btn-primary {
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;
        }
    </style>
</head>
<body class=\"bg-info\" style=\"background-color:#60696F !important;\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded mt-5\">
                <a class=\"navbar-brand\" style=\"font-size: 35px\" href=\"#\">TacQuiz</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\" >
                    <ul class=\"navbar-nav mr-auto\"></ul>
                    <div class=\"form-inline my-2 my-lg-0\">
                        <div class=\"col-auto pl-0\">
                            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "Email", [], "any", false, false, false, 66), 'label');
        echo "
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Email", [], "any", false, false, false, 67), 'widget');
        echo "
                        </div>
                        <div class=\"col-auto pl-0\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Password", [], "any", false, false, false, 70), 'label');
        echo "
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Password", [], "any", false, false, false, 71), 'widget');
        echo "
                        </div>
                        <div class=\"col-auto pl-0 pr-0\">
                            <label>&nbsp;</label>
                            <div style=\"background-color: #60696F\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "Connect", [], "any", false, false, false, 75), 'row');
        echo "</div>
                            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 76,  134 => 75,  127 => 71,  123 => 70,  117 => 67,  113 => 66,  109 => 65,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
    <!-- End Google Tag Manager -->
    <meta charset=\"utf-8\" />
    <title>| Keenthemes</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <link rel=\"canonical\" href=\"https://keenthemes.com/metronic\" />
    <!--begin::Fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href=\"../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/style.bundle49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/header/base/light49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/header/menu/light49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/brand/dark49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../../theme/html/demo1/dist/assets/css/themes/layout/aside/dark49d8.css?v=7.2.8\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Layout Themes-->
    <link rel=\"shortcut icon\" href=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico\" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
    <style> .btn-primary {
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #5CB85C;
            border-color: #5CB85C;
            border-radius: 6px;
        }
    </style>
</head>
<body class=\"bg-info\" style=\"background-color:#60696F !important;\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded mt-5\">
                <a class=\"navbar-brand\" style=\"font-size: 35px\" href=\"#\">TacQuiz</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\" >
                    <ul class=\"navbar-nav mr-auto\"></ul>
                    <div class=\"form-inline my-2 my-lg-0\">
                        <div class=\"col-auto pl-0\">
                            {{ form_start(form) }}
                            {{ form_label(form.Email,\"\")  }}
                            {{ form_widget(form.Email) }}
                        </div>
                        <div class=\"col-auto pl-0\">
                            {{ form_label(form.Password,\"\") }}
                            {{ form_widget(form.Password)}}
                        </div>
                        <div class=\"col-auto pl-0 pr-0\">
                            <label>&nbsp;</label>
                            <div style=\"background-color: #60696F\">{{ form_row(form.Connect) }}</div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</body>
</html>", "user/connection.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\user\\connection.html.twig");
    }
}
