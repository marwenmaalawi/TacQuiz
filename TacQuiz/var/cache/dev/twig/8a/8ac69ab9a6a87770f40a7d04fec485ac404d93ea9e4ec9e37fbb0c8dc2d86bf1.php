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

/* category/displayCategoryQuiz.html.twig */
class __TwigTemplate_febe2e01499b56cfb9863de61f72572c96ce19d9914dd6520316e3c1050bde09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayCategoryQuiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayCategoryQuiz.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("Temp1.html.twig", "category/displayCategoryQuiz.html.twig", 2)->display($context);
        // line 3
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

<div class=\"row\" >
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCat"]) || array_key_exists("listCat", $context) ? $context["listCat"] : (function () { throw new RuntimeError('Variable "listCat" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 27
            echo "   <div class=\"col-md-3\" style=\"  margin-bottom: 15px;\">
    <div class=\"card card-custom gutter-b\" style=\"border: solid 1px #5CB85C; border-radius:6px;\">
        <div class=\"card-header\">

            <div class=\"card-title\" style=\" text-shadow: 2px 2px #CED9DF;   text-transform: uppercase;\" >
                <h3 class=\"card-label\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "Title", [], "any", false, false, false, 33), "html", null, true);
            echo "
                </h3>
                <a  href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DisplayQuizCat", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"></a>

            </div>


        </div>
        <div class=\"card-body\"  >

       <a  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DisplayQuizCat", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><button class=\"btn-primary\" style=\"margin-left: 150px;\">Consult</button></a>
        </div>
    </div>


   </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "






</div>

";
        // line 59
        $this->loadTemplate("Temp2.html.twig", "category/displayCategoryQuiz.html.twig", 59)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/displayCategoryQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  114 => 50,  101 => 43,  90 => 35,  85 => 33,  77 => 27,  73 => 26,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'Temp1.html.twig' %}
<style> .btn-primary {
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

<div class=\"row\" >
    {% for C in listCat %}
   <div class=\"col-md-3\" style=\"  margin-bottom: 15px;\">
    <div class=\"card card-custom gutter-b\" style=\"border: solid 1px #5CB85C; border-radius:6px;\">
        <div class=\"card-header\">

            <div class=\"card-title\" style=\" text-shadow: 2px 2px #CED9DF;   text-transform: uppercase;\" >
                <h3 class=\"card-label\">
                    {{ C.Title }}
                </h3>
                <a  href=\"{{path('DisplayQuizCat',{id:C.id})}}\"></a>

            </div>


        </div>
        <div class=\"card-body\"  >

       <a  href=\"{{path('DisplayQuizCat',{id:C.id})}}\"><button class=\"btn-primary\" style=\"margin-left: 150px;\">Consult</button></a>
        </div>
    </div>


   </div>
    {%endfor%}







</div>

{% include 'Temp2.html.twig' %}", "category/displayCategoryQuiz.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\category\\displayCategoryQuiz.html.twig");
    }
}
