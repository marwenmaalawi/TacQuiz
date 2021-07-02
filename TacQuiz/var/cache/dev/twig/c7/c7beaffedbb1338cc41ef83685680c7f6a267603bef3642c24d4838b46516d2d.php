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

/* test/index.html.twig */
class __TwigTemplate_acd6ae9248cafc01ea2b38025c1a5b45bc7088d57ae16a4f8a101b3805081213 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

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
    <a href=\"../index.html\">
        <img alt=\"Logo\" src=\"../../theme/html/demo1/dist/assets/media/logos/logo-light.png\" />
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
        <button class=\"btn btn-hover-text-primary p-0 ml-2\" id=\"kt_header_mobile_topbar_toggle\">
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
<div class=\"d-flex flex-column flex-root\">
    <!--begin::Page-->
    <div class=\"d-flex flex-row flex-column-fluid page\">
        <!--begin::Aside-->
        <div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\">
            <!--begin::Brand-->
            <div class=\"brand flex-column-auto\" id=\"kt_brand\">
                <!--begin::Logo-->
                <a href=\"../index.html\" class=\"brand-logo\">
                    <img alt=\"Logo\" src=\"../../theme/html/demo1/dist/assets/media/logos/logo-light.png\" />
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
            <div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\">
                <!--begin::Menu Container-->
                <div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\">
                    <!--begin::Menu Nav-->
                    <ul class=\"menu-nav\">
                        <li class=\"menu-item\" aria-haspopup=\"true\">
                            <a href=\"../index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Category</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"4\" width=\"7\" height=\"7\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Category</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Applications</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-line\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Users</span>
                                            <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-rounded label-primary\">6</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/apps/user/list-default.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">List - Default</span>
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
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"4\" y=\"4\" width=\"8\" height=\"16\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Categories</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Pages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Login</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/pages/login/login-1.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 1</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/pages/login/login-2.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 2</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 3</span>
                                                        <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-inline label-info\">Wizard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/signup.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign Up</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/signin.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign In</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/forgot.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Forgot Password</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 4</span>
                                                        <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-inline label-info\">Wizard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/signup.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign Up</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/signin.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign In</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/forgot.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Forgot Password</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Classic</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-1.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 1</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-2.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 2</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-3.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 3</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-4.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 4</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-5.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 5</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-6.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 6</span>
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
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Quiz</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Bucket.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Quiz</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/themes/aside-light.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Light Aside</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/themes/header-dark.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Dark Header</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Quizzes</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Subheaders</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/subheader/toolbar.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Toolbar Nav</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Results</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
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
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
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
        <div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\">
            <!--begin::Header-->
            <div id=\"kt_header\" class=\"header header-fixed\">
                <!--begin::Container-->
                <div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
                    <!--begin::Header Menu Wrapper-->
                    <div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\">
                        <!--begin::Header Menu-->
                        <div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\">
                            <!--begin::Header Nav-->
                            <ul class=\"menu-nav\">
                                <li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                        <span class=\"menu-text\">Dashboard</span>
                                        <i class=\"menu-arrow\"></i>
                                    </a>
                                    <div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <span class=\"menu-text\">By Test</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <span class=\"menu-text\">By Group</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Lock-overturning.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
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
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">New Category</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">Categories</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">New Quiz</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
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
                                <li class=\"menu-item menu-item-submenu menu-item-rel\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                        <span class=\"menu-text\">Help</span>
                                        <i class=\"menu-arrow\"></i>
                                    </a>
                                    <div class=\"menu-submenu menu-submenu-classic menu-submenu-left\">
                                        <ul class=\"menu-subnav\">
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Safe-chat.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">User Manual</span>
                                                </a>
                                            </li>
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">FAQ</span>
                                                </a>
                                            </li>
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">Cantact US</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class=\"topbar\">
                        <!--begin::Search-->
                        <div class=\"dropdown\" id=\"kt_quick_search_toggle\">
                            <!--begin::Toggle-->
                            <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
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
                                    <li class=\"navi-item active\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/128-spain.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">Spanish</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class=\"navi-item\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/162-germany.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">German</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class=\"navi-item\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/063-japan.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">Japanese</span>
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
                        <div class=\"topbar-item\">
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
            <div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
                <!--begin::Subheader-->
                <div class=\"subheader py-2 py-lg-6 subheader-solid\" id=\"kt_subheader\">
                    <div class=\"container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap\">
                        <!--begin::Info-->
                        <div class=\"d-flex align-items-center flex-wrap mr-1\">
                            <!--begin::Page Heading-->
                            <div class=\"d-flex align-items-baseline flex-wrap mr-5\">
                                <!--begin::Page Title-->
                                <h5 class=\"text-dark font-weight-bold my-1 mr-5\"></h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->

                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class=\"d-flex flex-column-fluid\">
                    <!--begin::Container-->
                    <div class=\"container\"></div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\">
                <!--begin::Container-->
                <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
                    <!--begin::Copyright-->
                    <div class=\"text-dark order-2 order-md-1\">
                        <span class=\"text-muted font-weight-bold mr-2\">2021©</span>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"text-dark-75 text-hover-primary\">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class=\"nav nav-dark\">
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">Team</a>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id=\"kt_quick_user\" class=\"offcanvas offcanvas-right p-10\">
    <!--begin::Header-->
    <div class=\"offcanvas-header d-flex align-items-center justify-content-between pb-5\">
        <h3 class=\"font-weight-bold m-0\">User Profile</h3>
        <a href=\"#\" class=\"btn btn-xs btn-icon btn-light btn-hover-primary\" id=\"kt_quick_user_close\">
            <i class=\"ki ki-close icon-xs text-muted\"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class=\"offcanvas-content pr-5 mr-n5\">
        <!--begin::Header-->
        <div class=\"d-flex align-items-center mt-5\">
            <div class=\"symbol symbol-100 mr-5\">
                <div class=\"symbol-label\" style=\"background-image:url('../../theme/html/demo1/dist/assets/media/users/300_21.jpg')\"></div>
                <i class=\"symbol-badge bg-success\"></i>
            </div>
            <div class=\"d-flex flex-column\">
                <a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">James Jones</a>
                
                <div class=\"navi mt-2\">
                    <a href=\"#\" class=\"navi-item\">
\t\t\t\t\t\t\t\t<span class=\"navi-link p-0 pb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"navi-icon mr-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"19.5\" cy=\"17.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">jm@softplus.com</span>
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <a href=\"#\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class=\"separator separator-dashed mt-8 mb-5\"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class=\"navi navi-spacer-x-0 p-0\">
            <!--begin::Item-->
            <a href=\"../custom/apps/user/profile-1/personal-information.html\" class=\"navi-item\">
                <div class=\"navi-link\">
                    <div class=\"symbol symbol-40 bg-light mr-3\">
                        <div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"18.5\" cy=\"5.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
                                        <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <div class=\"navi-text\">
                        <div class=\"font-weight-bold\">My Profile</div>
                        <div class=\"text-muted\">Account settings and more
                            <span class=\"label label-light-danger label-inline font-weight-bold\">update</span></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->


<!--begin::Scrolltop-->
<div id=\"kt_scrolltop\" class=\"scrolltop\">
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
                <!--end::Svg Icon-->
\t\t\t</span>
</div>
<!--end::Scrolltop-->


<script>var HOST_URL = \"https://preview.keenthemes.com/metronic/theme/html/tools/preview\";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { \"breakpoints\": { \"sm\": 576, \"md\": 768, \"lg\": 992, \"xl\": 1200, \"xxl\": 1400 }, \"colors\": { \"theme\": { \"base\": { \"white\": \"#ffffff\", \"primary\": \"#3699FF\", \"secondary\": \"#E5EAEE\", \"success\": \"#1BC5BD\", \"info\": \"#8950FC\", \"warning\": \"#FFA800\", \"danger\": \"#F64E60\", \"light\": \"#E4E6EF\", \"dark\": \"#181C32\" }, \"light\": { \"white\": \"#ffffff\", \"primary\": \"#E1F0FF\", \"secondary\": \"#EBEDF3\", \"success\": \"#C9F7F5\", \"info\": \"#EEE5FF\", \"warning\": \"#FFF4DE\", \"danger\": \"#FFE2E5\", \"light\": \"#F3F6F9\", \"dark\": \"#D6D6E0\" }, \"inverse\": { \"white\": \"#ffffff\", \"primary\": \"#ffffff\", \"secondary\": \"#3F4254\", \"success\": \"#ffffff\", \"info\": \"#ffffff\", \"warning\": \"#ffffff\", \"danger\": \"#ffffff\", \"light\": \"#464E5F\", \"dark\": \"#ffffff\" } }, \"gray\": { \"gray-100\": \"#F3F6F9\", \"gray-200\": \"#EBEDF3\", \"gray-300\": \"#E4E6EF\", \"gray-400\": \"#D1D3E0\", \"gray-500\": \"#B5B5C3\", \"gray-600\": \"#7E8299\", \"gray-700\": \"#5E6278\", \"gray-800\": \"#3F4254\", \"gray-900\": \"#181C32\" } }, \"font-family\": \"Poppins\" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src=\"../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../theme/html/demo1/dist/assets/js/scripts.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../../../keenthemes.com/metronic/assets/js/engage_code.js\"></script>
<!--end::Global Theme Bundle-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 14:54:43 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
    <a href=\"../index.html\">
        <img alt=\"Logo\" src=\"../../theme/html/demo1/dist/assets/media/logos/logo-light.png\" />
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
        <button class=\"btn btn-hover-text-primary p-0 ml-2\" id=\"kt_header_mobile_topbar_toggle\">
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
<div class=\"d-flex flex-column flex-root\">
    <!--begin::Page-->
    <div class=\"d-flex flex-row flex-column-fluid page\">
        <!--begin::Aside-->
        <div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\">
            <!--begin::Brand-->
            <div class=\"brand flex-column-auto\" id=\"kt_brand\">
                <!--begin::Logo-->
                <a href=\"../index.html\" class=\"brand-logo\">
                    <img alt=\"Logo\" src=\"../../theme/html/demo1/dist/assets/media/logos/logo-light.png\" />
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
            <div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\">
                <!--begin::Menu Container-->
                <div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\">
                    <!--begin::Menu Nav-->
                    <ul class=\"menu-nav\">
                        <li class=\"menu-item\" aria-haspopup=\"true\">
                            <a href=\"../index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Category</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"4\" width=\"7\" height=\"7\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Category</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Applications</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-line\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Users</span>
                                            <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-rounded label-primary\">6</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/apps/user/list-default.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">List - Default</span>
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
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"4\" y=\"4\" width=\"8\" height=\"16\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Categories</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Pages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                        <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Login</span>
                                            <i class=\"menu-arrow\"></i>
                                        </a>
                                        <div class=\"menu-submenu\">
                                            <i class=\"menu-arrow\"></i>
                                            <ul class=\"menu-subnav\">
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/pages/login/login-1.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 1</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item\" aria-haspopup=\"true\">
                                                    <a href=\"../custom/pages/login/login-2.html\" class=\"menu-link\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 2</span>
                                                    </a>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 3</span>
                                                        <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-inline label-info\">Wizard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/signup.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign Up</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/signin.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign In</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-3/forgot.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Forgot Password</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Login 4</span>
                                                        <span class=\"menu-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-inline label-info\">Wizard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/signup.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign Up</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/signin.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Sign In</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/login-4/forgot.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Forgot Password</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                                        <i class=\"menu-bullet menu-bullet-dot\">
                                                            <span></span>
                                                        </i>
                                                        <span class=\"menu-text\">Classic</span>
                                                        <i class=\"menu-arrow\"></i>
                                                    </a>
                                                    <div class=\"menu-submenu\">
                                                        <i class=\"menu-arrow\"></i>
                                                        <ul class=\"menu-subnav\">
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-1.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 1</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-2.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 2</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-3.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 3</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-4.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 4</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-5.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 5</span>
                                                                </a>
                                                            </li>
                                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                                <a href=\"../custom/pages/login/classic/login-6.html\" class=\"menu-link\">
                                                                    <i class=\"menu-bullet menu-bullet-dot\">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class=\"menu-text\">Login 6</span>
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
                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Quiz</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Bucket.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">New Quiz</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/themes/aside-light.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Light Aside</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/themes/header-dark.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Dark Header</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                <span class=\"menu-text\">Quizzes</span>
                                <i class=\"menu-arrow\"></i>
                            </a>
                            <div class=\"menu-submenu\">
                                <i class=\"menu-arrow\"></i>
                                <ul class=\"menu-subnav\">
                                    <li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Subheaders</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </li>
                                    <li class=\"menu-item\" aria-haspopup=\"true\">
                                        <a href=\"../layout/subheader/toolbar.html\" class=\"menu-link\">
                                            <i class=\"menu-bullet menu-bullet-dot\">
                                                <span></span>
                                            </i>
                                            <span class=\"menu-text\">Toolbar Nav</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class=\"menu-section\">
                            <h4 class=\"menu-text\">Results</h4>
                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
                        </li>
                        <li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
                            <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
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
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
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
        <div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\">
            <!--begin::Header-->
            <div id=\"kt_header\" class=\"header header-fixed\">
                <!--begin::Container-->
                <div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
                    <!--begin::Header Menu Wrapper-->
                    <div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\">
                        <!--begin::Header Menu-->
                        <div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\">
                            <!--begin::Header Nav-->
                            <ul class=\"menu-nav\">
                                <li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                        <span class=\"menu-text\">Dashboard</span>
                                        <i class=\"menu-arrow\"></i>
                                    </a>
                                    <div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <span class=\"menu-text\">By Test</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <span class=\"menu-text\">By Group</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Lock-overturning.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
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
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">New Category</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">Categories</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
                                                                <i class=\"menu-bullet menu-bullet-line\">
                                                                    <span></span>
                                                                </i>
                                                                <span class=\"menu-text\">New Quiz</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"menu-item\" aria-haspopup=\"true\">
                                                            <a href=\"javascript:;\" class=\"menu-link\">
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
                                <li class=\"menu-item menu-item-submenu menu-item-rel\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
                                    <a href=\"javascript:;\" class=\"menu-link menu-toggle\">
                                        <span class=\"menu-text\">Help</span>
                                        <i class=\"menu-arrow\"></i>
                                    </a>
                                    <div class=\"menu-submenu menu-submenu-classic menu-submenu-left\">
                                        <ul class=\"menu-subnav\">
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Safe-chat.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">User Manual</span>
                                                </a>
                                            </li>
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">FAQ</span>
                                                </a>
                                            </li>
                                            <li class=\"menu-item\" aria-haspopup=\"true\">
                                                <a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                                <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <span class=\"menu-text\">Cantact US</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class=\"topbar\">
                        <!--begin::Search-->
                        <div class=\"dropdown\" id=\"kt_quick_search_toggle\">
                            <!--begin::Toggle-->
                            <div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
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
                                    <li class=\"navi-item active\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/128-spain.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">Spanish</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class=\"navi-item\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/162-germany.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">German</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class=\"navi-item\">
                                        <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/flags/063-japan.svg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"navi-text\">Japanese</span>
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
                        <div class=\"topbar-item\">
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
            <div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
                <!--begin::Subheader-->
                <div class=\"subheader py-2 py-lg-6 subheader-solid\" id=\"kt_subheader\">
                    <div class=\"container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap\">
                        <!--begin::Info-->
                        <div class=\"d-flex align-items-center flex-wrap mr-1\">
                            <!--begin::Page Heading-->
                            <div class=\"d-flex align-items-baseline flex-wrap mr-5\">
                                <!--begin::Page Title-->
                                <h5 class=\"text-dark font-weight-bold my-1 mr-5\"></h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->

                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class=\"d-flex flex-column-fluid\">
                    <!--begin::Container-->
                    <div class=\"container\"></div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\">
                <!--begin::Container-->
                <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
                    <!--begin::Copyright-->
                    <div class=\"text-dark order-2 order-md-1\">
                        <span class=\"text-muted font-weight-bold mr-2\">2021©</span>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"text-dark-75 text-hover-primary\">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class=\"nav nav-dark\">
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">Team</a>
                        <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id=\"kt_quick_user\" class=\"offcanvas offcanvas-right p-10\">
    <!--begin::Header-->
    <div class=\"offcanvas-header d-flex align-items-center justify-content-between pb-5\">
        <h3 class=\"font-weight-bold m-0\">User Profile</h3>
        <a href=\"#\" class=\"btn btn-xs btn-icon btn-light btn-hover-primary\" id=\"kt_quick_user_close\">
            <i class=\"ki ki-close icon-xs text-muted\"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class=\"offcanvas-content pr-5 mr-n5\">
        <!--begin::Header-->
        <div class=\"d-flex align-items-center mt-5\">
            <div class=\"symbol symbol-100 mr-5\">
                <div class=\"symbol-label\" style=\"background-image:url('../../theme/html/demo1/dist/assets/media/users/300_21.jpg')\"></div>
                <i class=\"symbol-badge bg-success\"></i>
            </div>
            <div class=\"d-flex flex-column\">
                <a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">James Jones</a>
                
                <div class=\"navi mt-2\">
                    <a href=\"#\" class=\"navi-item\">
\t\t\t\t\t\t\t\t<span class=\"navi-link p-0 pb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"navi-icon mr-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"19.5\" cy=\"17.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">jm@softplus.com</span>
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <a href=\"#\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class=\"separator separator-dashed mt-8 mb-5\"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class=\"navi navi-spacer-x-0 p-0\">
            <!--begin::Item-->
            <a href=\"../custom/apps/user/profile-1/personal-information.html\" class=\"navi-item\">
                <div class=\"navi-link\">
                    <div class=\"symbol symbol-40 bg-light mr-3\">
                        <div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"18.5\" cy=\"5.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
                                        <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <div class=\"navi-text\">
                        <div class=\"font-weight-bold\">My Profile</div>
                        <div class=\"text-muted\">Account settings and more
                            <span class=\"label label-light-danger label-inline font-weight-bold\">update</span></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->


<!--begin::Scrolltop-->
<div id=\"kt_scrolltop\" class=\"scrolltop\">
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
                <!--end::Svg Icon-->
\t\t\t</span>
</div>
<!--end::Scrolltop-->


<script>var HOST_URL = \"https://preview.keenthemes.com/metronic/theme/html/tools/preview\";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { \"breakpoints\": { \"sm\": 576, \"md\": 768, \"lg\": 992, \"xl\": 1200, \"xxl\": 1400 }, \"colors\": { \"theme\": { \"base\": { \"white\": \"#ffffff\", \"primary\": \"#3699FF\", \"secondary\": \"#E5EAEE\", \"success\": \"#1BC5BD\", \"info\": \"#8950FC\", \"warning\": \"#FFA800\", \"danger\": \"#F64E60\", \"light\": \"#E4E6EF\", \"dark\": \"#181C32\" }, \"light\": { \"white\": \"#ffffff\", \"primary\": \"#E1F0FF\", \"secondary\": \"#EBEDF3\", \"success\": \"#C9F7F5\", \"info\": \"#EEE5FF\", \"warning\": \"#FFF4DE\", \"danger\": \"#FFE2E5\", \"light\": \"#F3F6F9\", \"dark\": \"#D6D6E0\" }, \"inverse\": { \"white\": \"#ffffff\", \"primary\": \"#ffffff\", \"secondary\": \"#3F4254\", \"success\": \"#ffffff\", \"info\": \"#ffffff\", \"warning\": \"#ffffff\", \"danger\": \"#ffffff\", \"light\": \"#464E5F\", \"dark\": \"#ffffff\" } }, \"gray\": { \"gray-100\": \"#F3F6F9\", \"gray-200\": \"#EBEDF3\", \"gray-300\": \"#E4E6EF\", \"gray-400\": \"#D1D3E0\", \"gray-500\": \"#B5B5C3\", \"gray-600\": \"#7E8299\", \"gray-700\": \"#5E6278\", \"gray-800\": \"#3F4254\", \"gray-900\": \"#181C32\" } }, \"font-family\": \"Poppins\" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src=\"../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../theme/html/demo1/dist/assets/js/scripts.bundle49d8.js?v=7.2.8\"></script>
<script src=\"../../../../keenthemes.com/metronic/assets/js/engage_code.js\"></script>
<!--end::Global Theme Bundle-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 14:54:43 GMT -->
</html>", "test/index.html.twig", "C:\\Users\\drwhoo\\Desktop\\TacQuiz\\templates\\test\\index.html.twig");
    }
}