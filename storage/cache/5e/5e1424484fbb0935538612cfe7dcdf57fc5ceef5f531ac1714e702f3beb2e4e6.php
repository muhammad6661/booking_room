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

/* auth/login.twig */
class __TwigTemplate_b2034621650501bfd5502c217b5a01e757d9d6ab5180745a135b63f4ff6d0e6b extends Template
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
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">

    <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name=\"description\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta name=\"author\" content=\"pixelcave\">
    <meta name=\"robots\" content=\"noindex, nofollow\">

    <!-- Open Graph Meta -->
    <meta property=\"og:title\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework\">
    <meta property=\"og:site_name\" content=\"OneUI\">
    <meta property=\"og:description\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
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

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Light themed Header
    'page-header-dark'                          Dark themed Header

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id=\"page-container\">

    <!-- Main Container -->
    <main id=\"main-container\">
        <!-- Page Content -->
        <div class=\"hero-static\">
            <div class=\"content\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-4\">
                        <!-- Sign In Block -->
                        <div class=\"block block-rounded block-themed mb-0\">
                            <div class=\"block-header bg-primary-dark\">
                                <h3 class=\"block-title\">Войти</h3>
                                <div class=\"block-options\">
                                    <a class=\"btn-block-option font-size-sm\" href=\"/registration\">Регистрация</a>

                                </div>
                            </div>
                            <div class=\"block-content\">
                                <div class=\"p-sm-3 px -lg-4 py-lg-5\">
                                    <h1 class=\"h2 mb-1\">Войти</h1>
                                    <p class=\"text-muted\">

                                    </p>

                                    <!-- Sign In Form -->
                                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                    ";
        // line 106
        echo twig_include($this->env, $context, "includes/errors.twig");
        echo "
                                    <form class=\"\" action=\"/login\" method=\"POST\">
                                        <div class=\"py-3\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"login\" name=\"login\" placeholder=\"Логин\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"login-password\" name=\"password\" placeholder=\"Пароль\">
                                            </div>

                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 col-xl-5\">
                                                <button type=\"submit\" class=\"btn btn-block btn-alt-primary\">
                                                    <i class=\"fa fa-fw fa-sign-in-alt mr-1\"></i> Войти
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    OneUI JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out /public/assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the /public/assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    /public/assets/js/core/jquery.min.js
    /public/assets/js/core/bootstrap.bundle.min.js
    /public/assets/js/core/simplebar.min.js
    /public/assets/js/core/jquery-scrollLock.min.js
    /public/assets/js/core/jquery.appear.min.js
    /public/assets/js/core/js.cookie.min.js
-->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/oneui.core.min.js"), "html", null, true);
        echo "\"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at /public/assets/_js/main/app.js
-->
<script src=\"/public/assets/js/oneui.app.min.js\"></script>

<!-- Page JS Plugins -->
<script src=\"/public/assets/js/plugins/jquery-validation/jquery.validate.min.js\"></script>

<!-- Page JS Code -->
<script src=\"/public/assets/js/pages/op_auth_signin.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 157,  144 => 106,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">

    <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name=\"description\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
    <meta name=\"author\" content=\"pixelcave\">
    <meta name=\"robots\" content=\"noindex, nofollow\">

    <!-- Open Graph Meta -->
    <meta property=\"og:title\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework\">
    <meta property=\"og:site_name\" content=\"OneUI\">
    <meta property=\"og:description\" content=\"OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest\">
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

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Light themed Header
    'page-header-dark'                          Dark themed Header

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id=\"page-container\">

    <!-- Main Container -->
    <main id=\"main-container\">
        <!-- Page Content -->
        <div class=\"hero-static\">
            <div class=\"content\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-4\">
                        <!-- Sign In Block -->
                        <div class=\"block block-rounded block-themed mb-0\">
                            <div class=\"block-header bg-primary-dark\">
                                <h3 class=\"block-title\">Войти</h3>
                                <div class=\"block-options\">
                                    <a class=\"btn-block-option font-size-sm\" href=\"/registration\">Регистрация</a>

                                </div>
                            </div>
                            <div class=\"block-content\">
                                <div class=\"p-sm-3 px -lg-4 py-lg-5\">
                                    <h1 class=\"h2 mb-1\">Войти</h1>
                                    <p class=\"text-muted\">

                                    </p>

                                    <!-- Sign In Form -->
                                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                    {{ include('includes/errors.twig') }}
                                    <form class=\"\" action=\"/login\" method=\"POST\">
                                        <div class=\"py-3\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"login\" name=\"login\" placeholder=\"Логин\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"login-password\" name=\"password\" placeholder=\"Пароль\">
                                            </div>

                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 col-xl-5\">
                                                <button type=\"submit\" class=\"btn btn-block btn-alt-primary\">
                                                    <i class=\"fa fa-fw fa-sign-in-alt mr-1\"></i> Войти
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    OneUI JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out /public/assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the /public/assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    /public/assets/js/core/jquery.min.js
    /public/assets/js/core/bootstrap.bundle.min.js
    /public/assets/js/core/simplebar.min.js
    /public/assets/js/core/jquery-scrollLock.min.js
    /public/assets/js/core/jquery.appear.min.js
    /public/assets/js/core/js.cookie.min.js
-->
<script src=\"{{ asset('assets/js/oneui.core.min.js') }}\"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at /public/assets/_js/main/app.js
-->
<script src=\"/public/assets/js/oneui.app.min.js\"></script>

<!-- Page JS Plugins -->
<script src=\"/public/assets/js/plugins/jquery-validation/jquery.validate.min.js\"></script>

<!-- Page JS Code -->
<script src=\"/public/assets/js/pages/op_auth_signin.min.js\"></script>
</body>
</html>
", "auth/login.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\auth\\login.twig");
    }
}
