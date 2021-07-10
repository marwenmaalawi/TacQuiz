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

/* quiz/displayQuizCat.html.twig */
class __TwigTemplate_0c70f9d9ea003646fe8cbaad3967eb92beb661275a93b97b41514fd7fba620f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/displayQuizCat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/displayQuizCat.html.twig"));

        // line 1
        $this->loadTemplate("Temp1.html.twig", "quiz/displayQuizCat.html.twig", 1)->display($context);
        // line 2
        echo "<style>
    .card {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        transition: box-shadow .25s;
    }
    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .img-card {
        width: 100%;
        height:200px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
    }
    .img-card img{
        width: 100%;
        height: 200px;
        object-fit:cover;
        transition: all .25s ease;
    }
    .card-content {
        padding:15px;
        text-align:left;
    }
    .card-title {
        margin-top:0px;
        font-weight: 700;
        font-size: 1.65em;
    }
    .card-title a {
        color: #000;
        text-decoration: none !important;
        text-transform: uppercase!important;
        text-align: center!important;
    }
    .card-read-more {
        border-top: 1px solid #D4D4D4;
    }
    .card-read-more a {
        text-decoration: none !important;
        padding:10px;
        font-weight:600;
        text-transform: uppercase;
        background-color: #5CB85C !important;
        color:white;!important;

    }
    .card-read-more a:hover {
        color: white!important;

    }
</style>



    <div class=\"container\">
         <div class=\"row\">
             ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Quiz"]) || array_key_exists("Quiz", $context) ? $context["Quiz"] : (function () { throw new RuntimeError('Variable "Quiz" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Q"]) {
            // line 67
            echo "             <div class=\"col-xs-12 col-sm-4\">
                 <div class=\"card\">
                     <div class=\"card-toolbar\" style=\"margin-left:300px;\">
                         <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UpdateQuiz", ["id" => twig_get_attribute($this->env, $this->source, $context["Q"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-white font-weight-bold\" >
                             <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                         </a>
                         <a  href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteQuiz", ["id" => twig_get_attribute($this->env, $this->source, $context["Q"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                             <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                         </a>
                     </div>
                     <a class=\"img-card\">
                         <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["Q"], "getImage", [], "method", false, false, false, 78))), "html", null, true);
            echo "\">
                     </a>
                     <br />
                     <div class=\"card-content\">
                         <h2 class=\"card-title\">
                             <a>
                                 <center>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Q"], "Title", [], "any", false, false, false, 84), "html", null, true);
            echo "</center>
                             </a>
                         </h2>

                     </div>

                     <div class=\"card-read-more\">
                         <a class=\"btn btn-link btn-block\" >
                             Consult Questions
                         </a>
                     </div>
                 </div>
             </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "         </div>
     </div>



";
        // line 103
        $this->loadTemplate("Temp2.html.twig", "quiz/displayQuizCat.html.twig", 103)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "quiz/displayQuizCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 103,  163 => 98,  143 => 84,  134 => 78,  126 => 73,  120 => 70,  115 => 67,  111 => 66,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'Temp1.html.twig' %}
<style>
    .card {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        transition: box-shadow .25s;
    }
    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .img-card {
        width: 100%;
        height:200px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
    }
    .img-card img{
        width: 100%;
        height: 200px;
        object-fit:cover;
        transition: all .25s ease;
    }
    .card-content {
        padding:15px;
        text-align:left;
    }
    .card-title {
        margin-top:0px;
        font-weight: 700;
        font-size: 1.65em;
    }
    .card-title a {
        color: #000;
        text-decoration: none !important;
        text-transform: uppercase!important;
        text-align: center!important;
    }
    .card-read-more {
        border-top: 1px solid #D4D4D4;
    }
    .card-read-more a {
        text-decoration: none !important;
        padding:10px;
        font-weight:600;
        text-transform: uppercase;
        background-color: #5CB85C !important;
        color:white;!important;

    }
    .card-read-more a:hover {
        color: white!important;

    }
</style>



    <div class=\"container\">
         <div class=\"row\">
             {% for Q in Quiz %}
             <div class=\"col-xs-12 col-sm-4\">
                 <div class=\"card\">
                     <div class=\"card-toolbar\" style=\"margin-left:300px;\">
                         <a href=\"{{path('UpdateQuiz',{id:Q.id})}}\" class=\"btn btn-sm btn-white font-weight-bold\" >
                             <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                         </a>
                         <a  href=\"{{path('DeleteQuiz',{id:Q.id})}}\" class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                             <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                         </a>
                     </div>
                     <a class=\"img-card\">
                         <img src=\"{{ asset('uploads/' ~ Q.getImage())}}\">
                     </a>
                     <br />
                     <div class=\"card-content\">
                         <h2 class=\"card-title\">
                             <a>
                                 <center>{{ Q.Title }}</center>
                             </a>
                         </h2>

                     </div>

                     <div class=\"card-read-more\">
                         <a class=\"btn btn-link btn-block\" >
                             Consult Questions
                         </a>
                     </div>
                 </div>
             </div>
             {% endfor %}
         </div>
     </div>



{% include 'Temp2.html.twig' %}", "quiz/displayQuizCat.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\quiz\\displayQuizCat.html.twig");
    }
}
