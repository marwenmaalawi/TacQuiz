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

/* question/displayQuestions.html.twig */
class __TwigTemplate_c7d9cab90bca05303d97db92caf6149971766cd1e398d019d6aaa86824407889 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/displayQuestions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/displayQuestions.html.twig"));

        // line 1
        $this->loadTemplate("Temp1.html.twig", "question/displayQuestions.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 37
        echo "<style>
    #custombackground{
        background-image: url(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39))), "html", null, true);
        echo " \") ;

    }
    .btn-primary {
        margin-top: 1%;

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
        // line 63
        $context["Row"] = 0;
        // line 64
        $context["rows"] = 0;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 66
            echo "
    ";
            // line 67
            $context["rows"] = ((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 67, $this->source); })()) + 1);
            // line 68
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        if ((0 <= twig_compare((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 70, $this->source); })()), 2))) {
            // line 71
            echo "<div class=\"container mt-5\" >
    <div class=\"d-flex justify-content-center row\" >
        <div class=\"col-md-10 col-lg-10\">
            <div class=\"border\"  id=\"custombackground\" >
                <div class=\"question p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.5);\">
                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                        <h4 style=\"color: white\"> number of question: ";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "</h4>
                        <center style=\"text-transform: uppercase; font-family: 'Microsoft Tai Le'  ; font-size: x-large ;color: white;\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 78, $this->source); })()), "Title", [], "any", false, false, false, 78), "html", null, true);
            echo "</center>
                        <span><button class=\"btn-primary\" style=\"font-size: large;\"> Add Question</button></span>
                    </div>
                </div>
                <div class=\"question bg-transparent p-3 border-bottom\">


                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 86
                echo "                        ";
                $context["Row"] = ((isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 86, $this->source); })()) + 1);
                // line 87
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "answerType", [], "any", false, false, false, 87), "text"))) {
                    // line 88
                    echo "                            <div class=\"container mt-5\">
                                <div class=\"d-flex justify-content-center row\">
                                    <div class=\"col-md-10 col-lg-10\">
                                        <div style=\"background-color: rgba(255,255,255,0.7);\" >
                                            <div style=\"margin-left:88.5%;\">
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                    <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                </a>
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 96), "idquiz" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"border\">
                                            <div class=\"question  p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.7);\">
                                                <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["q"], "imageLink", [], "any", false, false, false, 104))), "html", null, true);
                    echo "\">

                                                    <span>(";
                    // line 106
                    echo twig_escape_filter($this->env, (isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 106, $this->source); })()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 106, $this->source); })()), "html", null, true);
                    echo " )</span>
                                                </div>
                                            </div>
                                            <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.6);\">
                                                <div class=\"d-flex flex-row align-items-center question-title\">
                                                    <h3 class=\"text-danger\">Q.</h3>
                                                    <h5 class=\"mt-1 ml-2\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 112), "html", null, true);
                    echo "</h5>
                                                </div>
                                                ";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["q"], "getChoices", [], "method", false, false, false, 114));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 115
                        echo "                                                    <ul class=\"list-group\">
                                                        ";
                        // line 116
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "state", [], "any", false, false, false, 116), true))) {
                            // line 117
                            echo "                                                            <li class=\"list-group-item\" style=\"background-color:#5CB85C; color:white; margin-bottom: 10px\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 117), "html", null, true);
                            echo "</li>
                                                        ";
                        } else {
                            // line 119
                            echo "                                                            <li class=\"list-group-item\" style=\"color:red; margin-bottom: 10px\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 119), "html", null, true);
                            echo "</li>
                                                        ";
                        }
                        // line 121
                        echo "                                                    </ul>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        ";
                }
                // line 131
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "answerType", [], "any", false, false, false, 131), "image"))) {
                    // line 132
                    echo "                            <div class=\"container mt-5\">
                                <div class=\"d-flex justify-content-center row\">
                                    <div class=\"col-md-10 col-lg-10\">
                                        <div  style=\"background-color: rgba(255,255,255,0.7);\" >
                                            <div style=\"margin-left:88.5%;\">
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                    <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                </a>
                                                <a  style=\"background-color: rgba(255,255,255,0.0); border:none; \"href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 140), "idquiz" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"border\">

                                            <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.7);\">
                                                <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["q"], "imageLink", [], "any", false, false, false, 149))), "html", null, true);
                    echo "\">
                                                    <span>(";
                    // line 150
                    echo twig_escape_filter($this->env, (isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo " )</span>
                                                </div>
                                            </div>
                                            <div class=\"question  p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.8);\">
                                                <div class=\"d-flex flex-row align-items-center question-title\">
                                                    <h3 class=\"text-danger\">Q.</h3>
                                                    <h5 class=\"mt-1 ml-2\">";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 156), "html", null, true);
                    echo "</h5>
                                                </div>
                                                ";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["q"], "getChoices", [], "method", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 159
                        echo "                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 159))), "html", null, true);
                        echo "\">
                                                    ";
                        // line 160
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "state", [], "any", false, false, false, 160), true))) {
                            // line 161
                            echo "                                                        <i style=\"color: #5CB85C; margin-right: 5px ;\" class=\"fas fa-check-circle \"></i>
                                                    ";
                        } else {
                            // line 163
                            echo "                                                        <i style=\"margin-right: 5px\" class=\"fa fa-times-circle text-danger mr-5\" aria-hidden=\"true\"></i>
                                                    ";
                        }
                        // line 165
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        ";
                }
                // line 174
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 180
            echo "
    <div class=\"container mt-5\"   >
        <div class=\"d-flex justify-content-center row\" >
            <div class=\"col-md-10 col-lg-10\">
                <div class=\"border\"  id=\"custombackground\" >
                    <div class=\"question p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.5);\">
                        <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                            <h4 style=\"color: white\"> number of question: ";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 187, $this->source); })()), "html", null, true);
            echo "</h4>
                            <center style=\"text-transform: uppercase; font-family: 'Microsoft Tai Le'  ; font-size: x-large ;color: white;\">";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 188, $this->source); })()), "Title", [], "any", false, false, false, 188), "html", null, true);
            echo "</center>
                            <span><button class=\"btn-primary\" style=\"font-size: large;\"> Add Question</button></span>
                        </div>
                    </div>
                    <div class=\"question bg-transparent p-3 border-bottom\" style=\"height: 900px\">


                        ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 195, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 196
                echo "                            ";
                $context["Row"] = ((isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 196, $this->source); })()) + 1);
                // line 197
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "answerType", [], "any", false, false, false, 197), "text"))) {
                    // line 198
                    echo "                                <div class=\"container mt-5\">
                                    <div class=\"d-flex justify-content-center row\">
                                        <div class=\"col-md-10 col-lg-10\">
                                            <div style=\"background-color: rgba(255,255,255,0.7);\" >
                                                <div style=\"margin-left:88.5%;\">
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                        <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                    </a>
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 206), "idquiz" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206)]), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                        <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"border\">
                                                <div class=\"question  p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.7);\">
                                                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["q"], "imageLink", [], "any", false, false, false, 214))), "html", null, true);
                    echo "\">

                                                        <span>(";
                    // line 216
                    echo twig_escape_filter($this->env, (isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 216, $this->source); })()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 216, $this->source); })()), "html", null, true);
                    echo " )</span>
                                                    </div>
                                                </div>
                                                <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.6);\">
                                                    <div class=\"d-flex flex-row align-items-center question-title\">
                                                        <h3 class=\"text-danger\">Q.</h3>
                                                        <h5 class=\"mt-1 ml-2\">";
                    // line 222
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 222), "html", null, true);
                    echo "</h5>
                                                    </div>
                                                    ";
                    // line 224
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["q"], "getChoices", [], "method", false, false, false, 224));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 225
                        echo "                                                        <ul class=\"list-group\">
                                                            ";
                        // line 226
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "state", [], "any", false, false, false, 226), true))) {
                            // line 227
                            echo "                                                                <li class=\"list-group-item\" style=\"background-color:#5CB85C; color:white; margin-bottom: 10px\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 227), "html", null, true);
                            echo "</li>
                                                            ";
                        } else {
                            // line 229
                            echo "                                                                <li class=\"list-group-item\" style=\"color:red; margin-bottom: 10px\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 229), "html", null, true);
                            echo "</li>
                                                            ";
                        }
                        // line 231
                        echo "                                                        </ul>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            ";
                }
                // line 241
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "answerType", [], "any", false, false, false, 241), "image"))) {
                    // line 242
                    echo "                                <div class=\"container mt-5\">
                                    <div class=\"d-flex justify-content-center row\">
                                        <div class=\"col-md-10 col-lg-10\">
                                            <div  style=\"background-color: rgba(255,255,255,0.7);\" >
                                                <div style=\"margin-left:88.5%;\">
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                        <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                    </a>
                                                    <a  style=\"background-color: rgba(255,255,255,0.0); border:none; \"href=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 250), "idquiz" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 250, $this->source); })()), "id", [], "any", false, false, false, 250)]), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                        <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"border\">

                                                <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.7);\">
                                                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["q"], "imageLink", [], "any", false, false, false, 259))), "html", null, true);
                    echo "\">
                                                        <span>(";
                    // line 260
                    echo twig_escape_filter($this->env, (isset($context["Row"]) || array_key_exists("Row", $context) ? $context["Row"] : (function () { throw new RuntimeError('Variable "Row" does not exist.', 260, $this->source); })()), "html", null, true);
                    echo " of ";
                    echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 260, $this->source); })()), "html", null, true);
                    echo " )</span>
                                                    </div>
                                                </div>
                                                <div class=\"question  p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.8);\">
                                                    <div class=\"d-flex flex-row align-items-center question-title\">
                                                        <h3 class=\"text-danger\">Q.</h3>
                                                        <h5 class=\"mt-1 ml-2\">";
                    // line 266
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 266), "html", null, true);
                    echo "</h5>
                                                    </div>
                                                    ";
                    // line 268
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["q"], "getChoices", [], "method", false, false, false, 268));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 269
                        echo "                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "getChoice", [], "method", false, false, false, 269))), "html", null, true);
                        echo "\">
                                                        ";
                        // line 270
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "state", [], "any", false, false, false, 270), true))) {
                            // line 271
                            echo "                                                            <i style=\"color: #5CB85C; margin-right: 5px ;\" class=\"fas fa-check-circle \"></i>
                                                        ";
                        } else {
                            // line 273
                            echo "                                                            <i style=\"margin-right: 5px\" class=\"fa fa-times-circle text-danger mr-5\" aria-hidden=\"true\"></i>
                                                        ";
                        }
                        // line 275
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 276
                    echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            ";
                }
                // line 284
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 290
        $this->loadTemplate("Temp2.html.twig", "question/displayQuestions.html.twig", 290)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/displayQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 290,  505 => 285,  499 => 284,  489 => 276,  483 => 275,  479 => 273,  475 => 271,  473 => 270,  468 => 269,  464 => 268,  459 => 266,  448 => 260,  444 => 259,  432 => 250,  422 => 242,  419 => 241,  409 => 233,  402 => 231,  396 => 229,  390 => 227,  388 => 226,  385 => 225,  381 => 224,  376 => 222,  365 => 216,  360 => 214,  349 => 206,  339 => 198,  336 => 197,  333 => 196,  329 => 195,  319 => 188,  315 => 187,  306 => 180,  299 => 175,  293 => 174,  283 => 166,  277 => 165,  273 => 163,  269 => 161,  267 => 160,  262 => 159,  258 => 158,  253 => 156,  242 => 150,  238 => 149,  226 => 140,  216 => 132,  213 => 131,  203 => 123,  196 => 121,  190 => 119,  184 => 117,  182 => 116,  179 => 115,  175 => 114,  170 => 112,  159 => 106,  154 => 104,  143 => 96,  133 => 88,  130 => 87,  127 => 86,  123 => 85,  113 => 78,  109 => 77,  101 => 71,  99 => 70,  92 => 68,  90 => 67,  87 => 66,  83 => 65,  81 => 64,  79 => 63,  52 => 39,  48 => 37,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'Temp1.html.twig' %}

{# <style>


label.radio {
cursor: pointer
}

label.radio input {
position: absolute;
top: 0;
left: 0;
visibility: hidden;
pointer-events: none
}

 label.radio span {
padding: 4px 0px;
border: 1px solid red;
display: inline-block;
color: white;
{# width: 700px;     height: 50px;

border-radius: 3px;
margin-top: 7px;
text-transform: uppercase;
font-size: medium;
}


.ans {
margin-left: 36px !important
}

</style> #}
<style>
    #custombackground{
        background-image: url(\"{{ asset('uploads/' ~ quiz.image) }} \") ;

    }
    .btn-primary {
        margin-top: 1%;

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
{% set Row = 0 %}
{% set rows = 0 %}
{% for q in question  %}

    {% set rows = rows + 1 %}

{% endfor %}
{% if rows>=2 %}
<div class=\"container mt-5\" >
    <div class=\"d-flex justify-content-center row\" >
        <div class=\"col-md-10 col-lg-10\">
            <div class=\"border\"  id=\"custombackground\" >
                <div class=\"question p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.5);\">
                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                        <h4 style=\"color: white\"> number of question: {{ rows }}</h4>
                        <center style=\"text-transform: uppercase; font-family: 'Microsoft Tai Le'  ; font-size: x-large ;color: white;\">{{quiz.Title}}</center>
                        <span><button class=\"btn-primary\" style=\"font-size: large;\"> Add Question</button></span>
                    </div>
                </div>
                <div class=\"question bg-transparent p-3 border-bottom\">


                    {% for q in question  %}
                        {% set Row = Row + 1 %}
                        {% if q.answerType ==\"text\" %}
                            <div class=\"container mt-5\">
                                <div class=\"d-flex justify-content-center row\">
                                    <div class=\"col-md-10 col-lg-10\">
                                        <div style=\"background-color: rgba(255,255,255,0.7);\" >
                                            <div style=\"margin-left:88.5%;\">
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                    <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                </a>
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"{{path('DeleteQuestion',{id:q.id,idquiz:quiz.id})}}\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"border\">
                                            <div class=\"question  p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.7);\">
                                                <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ q.imageLink)}}\">

                                                    <span>({{ Row }} of {{ rows }} )</span>
                                                </div>
                                            </div>
                                            <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.6);\">
                                                <div class=\"d-flex flex-row align-items-center question-title\">
                                                    <h3 class=\"text-danger\">Q.</h3>
                                                    <h5 class=\"mt-1 ml-2\">{{ q.question }}</h5>
                                                </div>
                                                {% for a in q.getChoices() %}
                                                    <ul class=\"list-group\">
                                                        {% if a.state==true %}
                                                            <li class=\"list-group-item\" style=\"background-color:#5CB85C; color:white; margin-bottom: 10px\">{{ a.getChoice() }}</li>
                                                        {% else %}
                                                            <li class=\"list-group-item\" style=\"color:red; margin-bottom: 10px\">{{ a.getChoice() }}</li>
                                                        {% endif %}
                                                    </ul>
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        {% endif %}
                        {% if q.answerType ==\"image\" %}
                            <div class=\"container mt-5\">
                                <div class=\"d-flex justify-content-center row\">
                                    <div class=\"col-md-10 col-lg-10\">
                                        <div  style=\"background-color: rgba(255,255,255,0.7);\" >
                                            <div style=\"margin-left:88.5%;\">
                                                <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                    <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                </a>
                                                <a  style=\"background-color: rgba(255,255,255,0.0); border:none; \"href=\"{{path('DeleteQuestion',{'id':q.id,'idquiz':quiz.id})}}\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"border\">

                                            <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.7);\">
                                                <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ q.imageLink)}}\">
                                                    <span>({{ Row }} of {{ rows }} )</span>
                                                </div>
                                            </div>
                                            <div class=\"question  p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.8);\">
                                                <div class=\"d-flex flex-row align-items-center question-title\">
                                                    <h3 class=\"text-danger\">Q.</h3>
                                                    <h5 class=\"mt-1 ml-2\">{{ q.question }}</h5>
                                                </div>
                                                {% for a in q.getChoices() %}
                                                    <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ a.getChoice())}}\">
                                                    {% if a.state==true %}
                                                        <i style=\"color: #5CB85C; margin-right: 5px ;\" class=\"fas fa-check-circle \"></i>
                                                    {% else %}
                                                        <i style=\"margin-right: 5px\" class=\"fa fa-times-circle text-danger mr-5\" aria-hidden=\"true\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    {% else %}

    <div class=\"container mt-5\"   >
        <div class=\"d-flex justify-content-center row\" >
            <div class=\"col-md-10 col-lg-10\">
                <div class=\"border\"  id=\"custombackground\" >
                    <div class=\"question p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.5);\">
                        <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                            <h4 style=\"color: white\"> number of question: {{ rows }}</h4>
                            <center style=\"text-transform: uppercase; font-family: 'Microsoft Tai Le'  ; font-size: x-large ;color: white;\">{{quiz.Title}}</center>
                            <span><button class=\"btn-primary\" style=\"font-size: large;\"> Add Question</button></span>
                        </div>
                    </div>
                    <div class=\"question bg-transparent p-3 border-bottom\" style=\"height: 900px\">


                        {% for q in question  %}
                            {% set Row = Row + 1 %}
                            {% if q.answerType ==\"text\" %}
                                <div class=\"container mt-5\">
                                    <div class=\"d-flex justify-content-center row\">
                                        <div class=\"col-md-10 col-lg-10\">
                                            <div style=\"background-color: rgba(255,255,255,0.7);\" >
                                                <div style=\"margin-left:88.5%;\">
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                        <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                    </a>
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"{{path('DeleteQuestion',{id:q.id,idquiz:quiz.id})}}\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                        <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"border\">
                                                <div class=\"question  p-3 border-bottom\" style=\"background-color: rgba(255,255,255,0.7);\">
                                                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ q.imageLink)}}\">

                                                        <span>({{ Row }} of {{ rows }} )</span>
                                                    </div>
                                                </div>
                                                <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.6);\">
                                                    <div class=\"d-flex flex-row align-items-center question-title\">
                                                        <h3 class=\"text-danger\">Q.</h3>
                                                        <h5 class=\"mt-1 ml-2\">{{ q.question }}</h5>
                                                    </div>
                                                    {% for a in q.getChoices() %}
                                                        <ul class=\"list-group\">
                                                            {% if a.state==true %}
                                                                <li class=\"list-group-item\" style=\"background-color:#5CB85C; color:white; margin-bottom: 10px\">{{ a.getChoice() }}</li>
                                                            {% else %}
                                                                <li class=\"list-group-item\" style=\"color:red; margin-bottom: 10px\">{{ a.getChoice() }}</li>
                                                            {% endif %}
                                                        </ul>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            {% endif %}
                            {% if q.answerType ==\"image\" %}
                                <div class=\"container mt-5\">
                                    <div class=\"d-flex justify-content-center row\">
                                        <div class=\"col-md-10 col-lg-10\">
                                            <div  style=\"background-color: rgba(255,255,255,0.7);\" >
                                                <div style=\"margin-left:88.5%;\">
                                                    <a style=\"background-color: rgba(255,255,255,0.0); border:none;\" href=\"#\" class=\"btn btn-sm btn-white font-weight-bold\" >
                                                        <i class=\"ki ki-gear text-success\" title=\"Edit\"></i>
                                                    </a>
                                                    <a  style=\"background-color: rgba(255,255,255,0.0); border:none; \"href=\"{{path('DeleteQuestion',{'id':q.id,'idquiz':quiz.id})}}\"  class=\"btn btn-sm btn-white font-weight-bold\" onclick=\"return confirm('Are you sure you want to delete this item?');\">
                                                        <i class=\"flaticon2-trash text-danger\" title=\"Delete\" ></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"border\">

                                                <div class=\"question p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.7);\">
                                                    <div class=\"d-flex flex-row justify-content-between align-items-center mcq\">
                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ q.imageLink)}}\">
                                                        <span>({{ Row }} of {{ rows }} )</span>
                                                    </div>
                                                </div>
                                                <div class=\"question  p-3 border-bottom\"  style=\"background-color: rgba(255,255,255,0.8);\">
                                                    <div class=\"d-flex flex-row align-items-center question-title\">
                                                        <h3 class=\"text-danger\">Q.</h3>
                                                        <h5 class=\"mt-1 ml-2\">{{ q.question }}</h5>
                                                    </div>
                                                    {% for a in q.getChoices() %}
                                                        <img style=\"height: 180px; width: 250px ;margin-bottom: 10px;margin-right: 5px\" src=\"{{ asset('uploads/' ~ a.getChoice())}}\">
                                                        {% if a.state==true %}
                                                            <i style=\"color: #5CB85C; margin-right: 5px ;\" class=\"fas fa-check-circle \"></i>
                                                        {% else %}
                                                            <i style=\"margin-right: 5px\" class=\"fa fa-times-circle text-danger mr-5\" aria-hidden=\"true\"></i>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
{% include 'Temp2.html.twig' %}", "question/displayQuestions.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\question\\displayQuestions.html.twig");
    }
}
