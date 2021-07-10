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

/* category/displayAllCategory.html.twig */
class __TwigTemplate_77c773586ecc244f27d0d6e00d24c0767101ee9d55be287201b70789250b3559 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayAllCategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayAllCategory.html.twig"));

        // line 1
        $this->loadTemplate("Temp1.html.twig", "category/displayAllCategory.html.twig", 1)->display($context);
        // line 2
        echo "


 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCat"]) || array_key_exists("listCat", $context) ? $context["listCat"] : (function () { throw new RuntimeError('Variable "listCat" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 6
            echo "     <div class=\"card card-custom gutter-b\">
         <div class=\"card-header\">

             <div class=\"card-title\">
                 <h3 class=\"card-label\">
                     ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "Title", [], "any", false, false, false, 11), "html", null, true);
            echo " by  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["C"], "User", [], "any", false, false, false, 11), "getUsername", [], "method", false, false, false, 11), "html", null, true);
            echo "
                 </h3>
             </div>


         </div>
         <div class=\"card-body\">
             ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "Description", [], "any", false, false, false, 18), "html", null, true);
            echo "

         </div>
     </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("Temp2.html.twig", "category/displayAllCategory.html.twig", 24)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/displayAllCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  84 => 23,  73 => 18,  61 => 11,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'Temp1.html.twig' %}



 {% for C in listCat %}
     <div class=\"card card-custom gutter-b\">
         <div class=\"card-header\">

             <div class=\"card-title\">
                 <h3 class=\"card-label\">
                     {{ C.Title }} by  {{ C.User.getUsername() }}
                 </h3>
             </div>


         </div>
         <div class=\"card-body\">
             {{ C.Description }}

         </div>
     </div>
 {% endfor %}

{% include 'Temp2.html.twig' %}
", "category/displayAllCategory.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\category\\displayAllCategory.html.twig");
    }
}
