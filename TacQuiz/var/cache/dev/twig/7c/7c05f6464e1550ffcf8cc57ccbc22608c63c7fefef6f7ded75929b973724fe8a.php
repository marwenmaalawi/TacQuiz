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

/* quiz/addQuiz.html.twig */
class __TwigTemplate_fd2c80ec717823fa8b860bd9feea4c9f82d2afc2645468dbbbe26a4517d44a4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/addQuiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/addQuiz.html.twig"));

        // line 1
        echo "<style> .btn-primary {
        margin-top: 1%;
        width: 100px;
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;


    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;
    }
</style>
";
        // line 22
        $this->loadTemplate("Temp1.html.twig", "quiz/addQuiz.html.twig", 22)->display($context);
        // line 23
        echo "<div style =\"margin-left: 23%; margin-right: 23%;  border: solid 1px #5CB85C; padding:2%; border-radius: 30px; margin-bottom: 25px;  \"  >
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #5CB85C ;  \" > New Quiz  </h1>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Category", [], "any", false, false, false, 26), 'label');
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Category", [], "any", false, false, false, 27), 'widget');
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Title", [], "any", false, false, false, 28), 'label');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Title", [], "any", false, false, false, 29), 'widget');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date_quiz", [], "any", false, false, false, 30), 'label');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date_quiz", [], "any", false, false, false, 31), 'widget');
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'label');
        echo "
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), 'widget');
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "random", [], "any", false, false, false, 34), 'label');
        echo "
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "random", [], "any", false, false, false, 35), 'widget');
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "publicResult", [], "any", false, false, false, 36), 'label');
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "publicResult", [], "any", false, false, false, 37), 'widget');
        echo "
    <div class=\"btn-primary \"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Submit", [], "any", false, false, false, 38), 'row');
        echo " </div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

</div>
";
        // line 42
        $this->loadTemplate("Temp2.html.twig", "quiz/addQuiz.html.twig", 42)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "quiz/addQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style> .btn-primary {
        margin-top: 1%;
        width: 100px;
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;


    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #5CB85C !important;
        border-color: #5CB85C !important;
        border-radius: 6px;
    }
</style>
{% include 'Temp1.html.twig' %}
<div style =\"margin-left: 23%; margin-right: 23%;  border: solid 1px #5CB85C; padding:2%; border-radius: 30px; margin-bottom: 25px;  \"  >
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #5CB85C ;  \" > New Quiz  </h1>
    {{ form_start(form) }}
    {{ form_label(form.Category,\"\")  }}
    {{ form_widget(form.Category) }}
    {{ form_label(form.Title,\"\")  }}
    {{ form_widget(form.Title) }}
    {{ form_label(form.date_quiz,\"\")  }}
    {{ form_widget(form.date_quiz) }}
    {{ form_label(form.image,\"\")  }}
    {{ form_widget(form.image) }}
    {{ form_label(form.random,\"\")  }}
    {{ form_widget(form.random) }}
    {{ form_label(form.publicResult,\"\")  }}
    {{ form_widget(form.publicResult) }}
    <div class=\"btn-primary \"> {{ form_row(form.Submit) }} </div>
    {{ form_end(form) }}

</div>
{% include 'Temp2.html.twig' %}", "quiz/addQuiz.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\quiz\\addQuiz.html.twig");
    }
}
