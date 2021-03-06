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

/* Temp2.html.twig */
class __TwigTemplate_d57c88efe34c8883df94ecc2c1459a4f946ba4a84377f1f423f0448843292ef8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Temp2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Temp2.html.twig"));

        // line 1
        echo "

</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\" >
    <!--begin::Container-->
    <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\" >
        <!--begin::Copyright-->

        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class=\"nav nav-dark\">
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\"></a>

            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">User Manuel</a>

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
        <div class=\"d-flex align-items-center mt-5\" >
            <div class=\"symbol symbol-100 mr-5\">
                <div class=\"symbol-label\" style=\"background-image:url('../../theme/html/demo1/dist/assets/media/users/300_21.jpg')\"></div>
                <i class=\"symbol-badge bg-success\"></i>
            </div>
            <div class=\"d-flex flex-column\">
                <a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "username", [], "any", false, false, false, 55), "html", null, true);
        echo "</a>

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
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "Email", [], "any", false, false, false, 73), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/logout"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
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
        return "Temp2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 76,  120 => 73,  99 => 55,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\" >
    <!--begin::Container-->
    <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\" >
        <!--begin::Copyright-->

        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class=\"nav nav-dark\">
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\"></a>

            <a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">User Manuel</a>

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
        <div class=\"d-flex align-items-center mt-5\" >
            <div class=\"symbol symbol-100 mr-5\">
                <div class=\"symbol-label\" style=\"background-image:url('../../theme/html/demo1/dist/assets/media/users/300_21.jpg')\"></div>
                <i class=\"symbol-badge bg-success\"></i>
            </div>
            <div class=\"d-flex flex-column\">
                <a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">{{  user.username }}</a>

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
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">{{ user.Email }}</span>
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <a href=\"{{ asset('/logout') }}\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
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
</html>", "Temp2.html.twig", "C:\\Users\\drwhoo\\Desktop\\TAC GIT\\TacQuiz\\TacQuiz\\templates\\Temp2.html.twig");
    }
}
