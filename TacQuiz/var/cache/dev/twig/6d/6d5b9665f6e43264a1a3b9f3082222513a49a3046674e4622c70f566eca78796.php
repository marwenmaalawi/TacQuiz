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

/* Temp1.html.twig */
class __TwigTemplate_315cee664e7abfc8a3903898d237a3bda1aa0c23e3589870066bbecbfc76a23e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Temp1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Temp1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 14:54:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
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
<!--end::Head-->
<!--begin::Body-->
<body id=\"kt_body\" class=\"header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading\">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id=\"kt_header_mobile\" class=\"header-mobile align-items-center header-mobile-fixed\">
    <!--begin::Logo-->
    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Home"), "html", null, true);
        echo "\" class=\"brand-logo\">
        <H1 style=\"color:white;\">TacQuiz</H1>
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class=\"d-flex align-items-center\">
        <!--begin::Aside Mobile Toggle-->
        <button class=\"btn p-0 burger-icon burger-icon-left\" id=\"kt_aside_mobile_toggle\">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class=\"btn p-0 burger-icon ml-4\" id=\"kt_header_mobile_toggle\">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class=\"btn btn-hover-text-primary p-0 ml-2\" id=\"kt_header_mobile_topbar_toggle\" >
\t\t\t\t\t<span class=\"svg-icon svg-icon-xl\">
\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t<path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t<path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
                        <!--end::Svg Icon-->
\t\t\t\t\t</span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class=\"d-flex flex-column flex-root\" >
    <!--begin::Page-->
    <div class=\"d-flex flex-row flex-column-fluid page\"style=\"background-color:white !important;\" >
        <!--begin::Aside-->
        <div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\" >
            <!--begin::Brand-->
            <div class=\"brand flex-column-auto\" id=\"kt_brand\">
                <!--begin::Logo-->

                <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Home"), "html", null, true);
        echo "\" class=\"brand-logo\">
                    <H1 style=\"color:white;\">TacQuiz</H1>
                </a>
                <!--end::Logo-->
                <!--begin::Toggle-->
                <button class=\"brand-toggle btn btn-sm px-0\" id=\"kt_aside_toggle\">
\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon svg-icon-xl\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-left.svg-->
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t</span>
                </button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\" style=\"background-color: #CED9DF !important;\">
                <!--begin::Menu Container-->
                <div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\" style=\"background-color: #CED9DF !important;\">
                    <!--begin::Menu Nav-->
                    <ul class=\"menu-nav\" style=\"background-color: #CED9DF !important;\">
                        <li class=\"menu-item\" aria-haspopup=\"true\">
                            <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Home"), "html", null, true);
        echo "\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home-1\" style=\"color: white\"></i>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Home</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Category</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Addcat"), "html", null, true);
        echo "\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki ki-plus\" style=\"color: white\"></i>

                                            <!--end::Svg Icon--></span>
                                <!--end::Svg Icon-->
                                </span>

                                <span class=\"menu-text\">New Category</span>

                            </a>

                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/DisplaycatUser"), "html", null, true);
        echo "\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t   <i class=\"ki ki-bold-sort\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Categories</span>

                            </a>

                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Quiz</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Addquiz"), "html", null, true);
        echo "\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Bucket.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-pen\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Quiz</span>

                            </a>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/DisplaycatUserQuiz"), "html", null, true);
        echo "\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-notepad\" style=\"color: white\"></i>


                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Quizzes</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Results</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-rectangular\" style=\"color: white\"></i>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Recent Results</span>
                                <i class=\"menu-arrow\"></i>
                            </a>

                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Forms</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Form Controls</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../crud/forms/controls/base.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Base Inputs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-folder-1\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">All Results</span>
                                <i class=\"menu-arrow\"></i>
                            </a>

                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Forms</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Form Controls</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../crud/forms/controls/base.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Base Inputs</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                </li>

                </ul>
                <!--end::Menu Nav-->
            </div>
            <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\" style=\"background-color:white\"  >
        <!--begin::Header-->
        <div id=\"kt_header\" class=\"header header-fixed\" style=\"background-color: #60696F\">
            <!--begin::Container-->
            <div class=\"container-fluid d-flex align-items-stretch justify-content-between\" >
                <!--begin::Header Menu Wrapper-->
                <div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\" \">
                <!--begin::Header Menu-->
                <div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\" >
                    <!--begin::Header Nav-->
                    <ul class=\"menu-nav\">
                        <li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\"  style=\"background-color:#CED9DF\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                <span class=\"menu-text\">Dashboard</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\" >
                                <div class=\"menu-subnav\">
                                    <ul class=\"menu-content\">
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Recent Results</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">&nbsp;&nbsp;&nbsp;By Test</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <span class=\"menu-text\">By Group</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Lock-overturning.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <span class=\"menu-text\">By Link</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Quiz</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">

                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Displaycat"), "html", null, true);
        echo "\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Categories</span>
                                                    </a>
                                                </li>


                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/DisplayQuiz"), "html", null, true);
        echo "\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Quizzes</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Groups</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">New Group</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Links</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <span class=\"menu-text\">New Link</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <span class=\"menu-text\">Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class=\"topbar\" >
                <!--begin::Search-->
                <div class=\"dropdown\" id=\"kt_quick_search_toggle\"  >
                    <!--begin::Toggle-->
                    <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\" >
                        <div class=\"btn btn-icon btn-clean btn-lg btn-dropdown mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-xl svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class=\"dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg\">
                        <div class=\"quick-search quick-search-dropdown\" id=\"kt_quick_search_dropdown\">
                            <!--begin:Form-->
                            <form method=\"get\" class=\"quick-search-form\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<pathpathpath d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" />
                                    <div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"quick-search-close ki ki-close icon-sm text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!--begin::Scroll-->
                            <div class=\"quick-search-wrapper scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\"></div>
                            <!--end::Scroll-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Search-->

                <!--begin::Languages-->
                <div class=\"dropdown\">
                    <!--begin::Toggle-->
                    <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                        <div class=\"btn btn-icon btn-clean btn-dropdown btn-lg mr-1\">
                            <img class=\"h-20px w-20px rounded-sm\" src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/226-united-states.svg\" alt=\"\" />
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class=\"dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right\">
                        <!--begin::Nav-->
                        <ul class=\"navi navi-hover py-4\">
                            <!--begin::Item-->
                            <li class=\"navi-item\">
                                <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/226-united-states.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"navi-text\">English</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class=\"navi-item\">
                                <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/195-france.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"navi-text\">French</span>
                                </a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Languages-->
                <!--begin::User-->
                <div class=\"topbar-item\" >
                    <div class=\"btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2\" id=\"kt_quick_user_toggle\">
                                <span class=\"symbol symbol-lg-35 symbol-25 symbol-light-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label font-size-h5 font-weight-bold\">S</span>
\t\t\t\t\t\t\t\t\t\t</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\" style=\"background-color:white !important;\" >
        <!--begin::Subheader-->
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class=\"d-flex flex-column-fluid\"  >
            <!--begin::Container-->
            <div class=\"container\"  >




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Temp1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 408,  463 => 398,  268 => 206,  253 => 194,  233 => 177,  215 => 162,  198 => 148,  167 => 120,  120 => 76,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 14:54:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
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
<!--end::Head-->
<!--begin::Body-->
<body id=\"kt_body\" class=\"header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading\">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id=\"kt_header_mobile\" class=\"header-mobile align-items-center header-mobile-fixed\">
    <!--begin::Logo-->
    <a href=\"{{ asset('/Home') }}\" class=\"brand-logo\">
        <H1 style=\"color:white;\">TacQuiz</H1>
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class=\"d-flex align-items-center\">
        <!--begin::Aside Mobile Toggle-->
        <button class=\"btn p-0 burger-icon burger-icon-left\" id=\"kt_aside_mobile_toggle\">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class=\"btn p-0 burger-icon ml-4\" id=\"kt_header_mobile_toggle\">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class=\"btn btn-hover-text-primary p-0 ml-2\" id=\"kt_header_mobile_topbar_toggle\" >
\t\t\t\t\t<span class=\"svg-icon svg-icon-xl\">
\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t<path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t<path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
                        <!--end::Svg Icon-->
\t\t\t\t\t</span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class=\"d-flex flex-column flex-root\" >
    <!--begin::Page-->
    <div class=\"d-flex flex-row flex-column-fluid page\"style=\"background-color:white !important;\" >
        <!--begin::Aside-->
        <div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\" >
            <!--begin::Brand-->
            <div class=\"brand flex-column-auto\" id=\"kt_brand\">
                <!--begin::Logo-->

                <a href=\"{{ asset('/Home') }}\" class=\"brand-logo\">
                    <H1 style=\"color:white;\">TacQuiz</H1>
                </a>
                <!--end::Logo-->
                <!--begin::Toggle-->
                <button class=\"brand-toggle btn btn-sm px-0\" id=\"kt_aside_toggle\">
\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon svg-icon-xl\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-left.svg-->
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t</span>
                </button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\" style=\"background-color: #CED9DF !important;\">
                <!--begin::Menu Container-->
                <div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\" style=\"background-color: #CED9DF !important;\">
                    <!--begin::Menu Nav-->
                    <ul class=\"menu-nav\" style=\"background-color: #CED9DF !important;\">
                        <li class=\"menu-item\" aria-haspopup=\"true\">
                            <a href=\"{{ asset('/Home') }}\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home-1\" style=\"color: white\"></i>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Home</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Category</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"{{ asset('/Addcat') }}\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ki ki-plus\" style=\"color: white\"></i>

                                            <!--end::Svg Icon--></span>
                                <!--end::Svg Icon-->
                                </span>

                                <span class=\"menu-text\">New Category</span>

                            </a>

                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"{{ asset('/DisplaycatUser') }}\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t   <i class=\"ki ki-bold-sort\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Categories</span>

                            </a>

                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Quiz</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"{{ asset ('/Addquiz')}}\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Bucket.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-pen\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Quiz</span>

                            </a>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"{{ asset ('/DisplaycatUserQuiz')}}\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-notepad\" style=\"color: white\"></i>


                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Quizzes</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Results</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-rectangular\" style=\"color: white\"></i>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Recent Results</span>
                                <i class=\"menu-arrow\"></i>
                            </a>

                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Forms</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Form Controls</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../crud/forms/controls/base.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Base Inputs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-folder-1\" style=\"color: white\"></i>

                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">All Results</span>
                                <i class=\"menu-arrow\"></i>
                            </a>

                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Forms</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Form Controls</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../crud/forms/controls/base.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Base Inputs</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                </li>

                </ul>
                <!--end::Menu Nav-->
            </div>
            <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\" style=\"background-color:white\"  >
        <!--begin::Header-->
        <div id=\"kt_header\" class=\"header header-fixed\" style=\"background-color: #60696F\">
            <!--begin::Container-->
            <div class=\"container-fluid d-flex align-items-stretch justify-content-between\" >
                <!--begin::Header Menu Wrapper-->
                <div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\" \">
                <!--begin::Header Menu-->
                <div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\" >
                    <!--begin::Header Nav-->
                    <ul class=\"menu-nav\">
                        <li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\"  style=\"background-color:#CED9DF\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                <span class=\"menu-text\">Dashboard</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\" >
                                <div class=\"menu-subnav\">
                                    <ul class=\"menu-content\">
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Recent Results</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">&nbsp;&nbsp;&nbsp;By Test</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <span class=\"menu-text\">By Group</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Lock-overturning.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <span class=\"menu-text\">By Link</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Quiz</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">

                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"{{ asset('/Displaycat') }}\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Categories</span>
                                                    </a>
                                                </li>


                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"{{ asset('/DisplayQuiz') }}\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-line\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Quizzes</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Groups</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">New Group</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=\"menu-item\">
                                            <h3 class=\"menu-heading menu-toggle\">
                                                <i class=\"menu-bullet menu-bullet-dot\">
                                                    <span></span>
                                                </i>
                                                <span class=\"menu-text\">Links</span>
                                                <i class=\"menu-arrow\"></i>
                                            </h3>
                                            <ul class=\"menu-inner\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <span class=\"menu-text\">New Link</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"javascript:;\" class=\"menu-link\">
                                                        <span class=\"menu-text\">Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class=\"topbar\" >
                <!--begin::Search-->
                <div class=\"dropdown\" id=\"kt_quick_search_toggle\"  >
                    <!--begin::Toggle-->
                    <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\" >
                        <div class=\"btn btn-icon btn-clean btn-lg btn-dropdown mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-xl svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class=\"dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg\">
                        <div class=\"quick-search quick-search-dropdown\" id=\"kt_quick_search_dropdown\">
                            <!--begin:Form-->
                            <form method=\"get\" class=\"quick-search-form\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<pathpathpath d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" />
                                    <div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"quick-search-close ki ki-close icon-sm text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!--begin::Scroll-->
                            <div class=\"quick-search-wrapper scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\"></div>
                            <!--end::Scroll-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Search-->

                <!--begin::Languages-->
                <div class=\"dropdown\">
                    <!--begin::Toggle-->
                    <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                        <div class=\"btn btn-icon btn-clean btn-dropdown btn-lg mr-1\">
                            <img class=\"h-20px w-20px rounded-sm\" src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/226-united-states.svg\" alt=\"\" />
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div class=\"dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right\">
                        <!--begin::Nav-->
                        <ul class=\"navi navi-hover py-4\">
                            <!--begin::Item-->
                            <li class=\"navi-item\">
                                <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/226-united-states.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"navi-text\">English</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class=\"navi-item\">
                                <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/195-france.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"navi-text\">French</span>
                                </a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Languages-->
                <!--begin::User-->
                <div class=\"topbar-item\" >
                    <div class=\"btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2\" id=\"kt_quick_user_toggle\">
                                <span class=\"symbol symbol-lg-35 symbol-25 symbol-light-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label font-size-h5 font-weight-bold\">S</span>
\t\t\t\t\t\t\t\t\t\t</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\" style=\"background-color:white !important;\" >
        <!--begin::Subheader-->
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class=\"d-flex flex-column-fluid\"  >
            <!--begin::Container-->
            <div class=\"container\"  >




", "Temp1.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\Temp1.html.twig");
    }
}
