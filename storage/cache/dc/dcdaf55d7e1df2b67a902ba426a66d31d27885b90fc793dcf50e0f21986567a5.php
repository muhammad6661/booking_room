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

/* layouts/app.twig */
class __TwigTemplate_73d071ccf2d816370bc8c97f8d5672922839519bd741b8ecd394429ef1aa1065 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta name=\"description\"
          content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta name=\"author\" content=\"pixelcave\">
    <meta name=\"robots\" content=\"noindex, nofollow\">
    <!-- Open Graph Meta -->
    <meta property=\"og:title\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework\">
    <meta property=\"og:site_name\" content=\"OneUI\">
    <meta property=\"og:description\"
          content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"\">
    <meta property=\"og:image\" content=\"\">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
    <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">
    ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->
</head>
<body>
<div id=\"page-container\"
     class=\"sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow\">
    <nav id=\"sidebar\" aria-label=\"Main Navigation\">
        <!-- Side Header -->
        <div class=\"content-header bg-white-5\">
            <!-- Logo -->
            <a class=\"font-w600 text-dual\" href=\"index.html\">
                        <span class=\"smini-visible\">
                            <i class=\"fa fa-circle-notch text-primary\"></i>
                        </span>
                <span class=\"smini-hide font-size-h5 tracking-wider\">
                            One
                            <span class=\"font-w400\">
                                UI
                            </span>
                        </span>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Side Header -->
        <!-- Sidebar Scrolling -->
        <div class=\"js-sidebar-scroll\">
            <!-- Side Navigation -->
            <div class=\"content-side\">
                <ul class=\"nav-main\">
                    <li class=\"nav-main-item\">
                        <a class=\"nav-main-link active\" href=\"/\">
                            <i class=\"nav-main-link-icon si si-speedometer\"></i>
                            <span class=\"nav-main-link-name\">
                                       Главная
                                    </span>
                        </a>
                    </li>
                    <li class=\"nav-main-item\">
                        <a class=\"nav-main-link active\" href=\"/booking-room\">
                            <i class=\"nav-main-link-icon si si-speedometer\"></i>
                            <span class=\"nav-main-link-name\">
                                        Бронирование комнат
                                    </span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->
    <!-- Header -->
    <header id=\"page-header\">
        <!-- Header Content -->
        <div class=\"content-header\">
            <!-- Left Section -->
            <div class=\"d-flex align-items-center\">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type=\"button\" class=\"btn btn-sm btn-dual mr-2 d-lg-none\" data-toggle=\"layout\"
                        data-action=\"sidebar_toggle\"><i class=\"fa fa-fw fa-bars\"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->
            <!-- Right Section -->
            <div class=\"d-flex align-items-center\">
                <!-- User Dropdown -->
                <div class=\"dropdown d-inline-block ml-2\">
                    <button type=\"button\" class=\"btn btn-sm btn-dual d-flex align-items-center\"
                            id=\"page-header-user-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                                <span class=\"d-none d-sm-inline-block ml-2\">
                                    ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_auth"] ?? null), "fio", [], "any", false, false, false, 108), "html", null, true);
        echo "
                                </span>
                        <i class=\"fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0\"
                         aria-labelledby=\"page-header-user-dropdown\">
                        <div class=\"p-2\">

                            <a class=\"dropdown-item d-flex align-items-center justify-content-between\" href=\"/logout\">
                                        <span class=\"font-size-sm font-w500\">
                                            Выйти
                                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id=\"page-header-loader\" class=\"overlay-header bg-white\">
            <div class=\"content-header\">
                <div class=\"w-100 text-center\">
                    <i class=\"fa fa-fw fa-circle-notch fa-spin\"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id=\"main-container\">
        <!-- Hero -->

        <!-- END Hero -->
        <!-- Page Content -->

        ";
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 149
        echo "
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- Footer -->
    <footer id=\"page-footer\" class=\"bg-body-light\">
        <div class=\"content py-3\">
            <div class=\"row font-size-sm\">
                <div class=\"col-sm-6 order-sm-2 py-1 text-center text-sm-right\">
                    Crafted with
                    <i class=\"fa fa-heart text-danger\"></i>
                    by
                    <a class=\"font-w600\" href=\"https://1.envato.market/ydb\" target=\"_blank\">
                        pixelcave
                    </a>
                </div>
                <div class=\"col-sm-6 order-sm-1 py-1 text-center text-sm-left\">
                    <a class=\"font-w600\" href=\"https://1.envato.market/AVD6j\" target=\"_blank\">
                        OneUI 4.91122
                    </a>
                    &copy;
                    <span data-toggle=\"year-copy\"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<script src=\"/public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js\"></script>
<script src=\"/public/assets/js/oneui.core.min.js\"></script>
<script src=\"/public/assets/js/oneui.app.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\"></script>
<script src=\"/public/assets/js/plugins/select2/js/select2.full.min.js\"></script>

<script src=\"/public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js\"></script>
<script src=\"/public/assets/js/plugins/dropzone/dropzone.min.js\"></script>
<script src=\"/public/assets/js/plugins/flatpickr/flatpickr.min.js\"></script>

<script src=\"/public/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js\"></script>
<script src=\"/public/assets/js/plugins/chart.js/Chart.bundle.min.js\"></script>
<script src=\"/public/assets/js/pages/be_pages_dashboard.min.js\"></script>
";
        // line 192
        $this->displayBlock('scripts', $context, $blocks);
        // line 193
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 148
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 192
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 192,  265 => 148,  259 => 31,  253 => 7,  248 => 193,  246 => 192,  201 => 149,  199 => 148,  156 => 108,  78 => 32,  76 => 31,  51 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        {% block title %}{% endblock %}
    </title>
    <meta name=\"description\"
          content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta name=\"author\" content=\"pixelcave\">
    <meta name=\"robots\" content=\"noindex, nofollow\">
    <!-- Open Graph Meta -->
    <meta property=\"og:title\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework\">
    <meta property=\"og:site_name\" content=\"OneUI\">
    <meta property=\"og:description\"
          content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"\">
    <meta property=\"og:image\" content=\"\">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
    <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">
    {% block stylesheets %}{% endblock %}
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->
</head>
<body>
<div id=\"page-container\"
     class=\"sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow\">
    <nav id=\"sidebar\" aria-label=\"Main Navigation\">
        <!-- Side Header -->
        <div class=\"content-header bg-white-5\">
            <!-- Logo -->
            <a class=\"font-w600 text-dual\" href=\"index.html\">
                        <span class=\"smini-visible\">
                            <i class=\"fa fa-circle-notch text-primary\"></i>
                        </span>
                <span class=\"smini-hide font-size-h5 tracking-wider\">
                            One
                            <span class=\"font-w400\">
                                UI
                            </span>
                        </span>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Side Header -->
        <!-- Sidebar Scrolling -->
        <div class=\"js-sidebar-scroll\">
            <!-- Side Navigation -->
            <div class=\"content-side\">
                <ul class=\"nav-main\">
                    <li class=\"nav-main-item\">
                        <a class=\"nav-main-link active\" href=\"/\">
                            <i class=\"nav-main-link-icon si si-speedometer\"></i>
                            <span class=\"nav-main-link-name\">
                                       Главная
                                    </span>
                        </a>
                    </li>
                    <li class=\"nav-main-item\">
                        <a class=\"nav-main-link active\" href=\"/booking-room\">
                            <i class=\"nav-main-link-icon si si-speedometer\"></i>
                            <span class=\"nav-main-link-name\">
                                        Бронирование комнат
                                    </span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->
    <!-- Header -->
    <header id=\"page-header\">
        <!-- Header Content -->
        <div class=\"content-header\">
            <!-- Left Section -->
            <div class=\"d-flex align-items-center\">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type=\"button\" class=\"btn btn-sm btn-dual mr-2 d-lg-none\" data-toggle=\"layout\"
                        data-action=\"sidebar_toggle\"><i class=\"fa fa-fw fa-bars\"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->
            <!-- Right Section -->
            <div class=\"d-flex align-items-center\">
                <!-- User Dropdown -->
                <div class=\"dropdown d-inline-block ml-2\">
                    <button type=\"button\" class=\"btn btn-sm btn-dual d-flex align-items-center\"
                            id=\"page-header-user-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                                <span class=\"d-none d-sm-inline-block ml-2\">
                                    {{ user_auth.fio }}
                                </span>
                        <i class=\"fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0\"
                         aria-labelledby=\"page-header-user-dropdown\">
                        <div class=\"p-2\">

                            <a class=\"dropdown-item d-flex align-items-center justify-content-between\" href=\"/logout\">
                                        <span class=\"font-size-sm font-w500\">
                                            Выйти
                                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id=\"page-header-loader\" class=\"overlay-header bg-white\">
            <div class=\"content-header\">
                <div class=\"w-100 text-center\">
                    <i class=\"fa fa-fw fa-circle-notch fa-spin\"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id=\"main-container\">
        <!-- Hero -->

        <!-- END Hero -->
        <!-- Page Content -->

        {% block  content %}{% endblock %}

        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- Footer -->
    <footer id=\"page-footer\" class=\"bg-body-light\">
        <div class=\"content py-3\">
            <div class=\"row font-size-sm\">
                <div class=\"col-sm-6 order-sm-2 py-1 text-center text-sm-right\">
                    Crafted with
                    <i class=\"fa fa-heart text-danger\"></i>
                    by
                    <a class=\"font-w600\" href=\"https://1.envato.market/ydb\" target=\"_blank\">
                        pixelcave
                    </a>
                </div>
                <div class=\"col-sm-6 order-sm-1 py-1 text-center text-sm-left\">
                    <a class=\"font-w600\" href=\"https://1.envato.market/AVD6j\" target=\"_blank\">
                        OneUI 4.91122
                    </a>
                    &copy;
                    <span data-toggle=\"year-copy\"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<script src=\"/public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js\"></script>
<script src=\"/public/assets/js/oneui.core.min.js\"></script>
<script src=\"/public/assets/js/oneui.app.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
<script src=\"/public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\"></script>
<script src=\"/public/assets/js/plugins/select2/js/select2.full.min.js\"></script>

<script src=\"/public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js\"></script>
<script src=\"/public/assets/js/plugins/dropzone/dropzone.min.js\"></script>
<script src=\"/public/assets/js/plugins/flatpickr/flatpickr.min.js\"></script>

<script src=\"/public/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js\"></script>
<script src=\"/public/assets/js/plugins/chart.js/Chart.bundle.min.js\"></script>
<script src=\"/public/assets/js/pages/be_pages_dashboard.min.js\"></script>
{% block scripts %}{% endblock %}
</body>
</html>", "layouts/app.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\layouts\\app.twig");
    }
}
