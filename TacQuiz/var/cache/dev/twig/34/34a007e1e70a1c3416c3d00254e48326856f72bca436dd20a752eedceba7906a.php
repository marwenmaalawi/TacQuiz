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

/* category/displayCategory.html.twig */
class __TwigTemplate_9425c66aeaa5d4393508aede096d90f261793f3e5a21d298c90409a461f5834e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayCategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/displayCategory.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("Temp1.html.twig", "category/displayCategory.html.twig", 2)->display($context);
        // line 3
        echo "
 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCat"]) || array_key_exists("listCat", $context) ? $context["listCat"] : (function () { throw new RuntimeError('Variable "listCat" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 5
            echo "<div class=\"card card-custom gutter-b\">
    <div class=\"card-header\">

        <div class=\"card-title\">
            <h3 class=\"card-label\">
               ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "Title", [], "any", false, false, false, 10), "html", null, true);
            echo "
            </h3>
        </div>
        <div class=\"card-toolbar\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Updatecat", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-white font-weight-bold\" >
                <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
            </a>
            <a  href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Deletecat", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
            </a>
        </div>


    </div>
    <div class=\"card-body\">
        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "Description", [], "any", false, false, false, 25), "html", null, true);
            echo "

    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $this->loadTemplate("Temp2.html.twig", "category/displayCategory.html.twig", 31)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/displayCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  97 => 30,  86 => 25,  75 => 17,  69 => 14,  62 => 10,  55 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'Temp1.html.twig' %}

 {% for C in listCat %}
<div class=\"card card-custom gutter-b\">
    <div class=\"card-header\">

        <div class=\"card-title\">
            <h3 class=\"card-label\">
               {{ C.Title }}
            </h3>
        </div>
        <div class=\"card-toolbar\">
            <a href=\"{{path('Updatecat',{id:C.id})}}\" class=\"btn btn-sm btn-white font-weight-bold\" >
                <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
            </a>
            <a  href=\"{{path('Deletecat',{id:C.id})}}\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
            </a>
        </div>


    </div>
    <div class=\"card-body\">
        {{ C.Description }}

    </div>
</div>
{% endfor %}

{% include 'Temp2.html.twig' %}
", "category/displayCategory.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\category\\displayCategory.html.twig");
    }
}
