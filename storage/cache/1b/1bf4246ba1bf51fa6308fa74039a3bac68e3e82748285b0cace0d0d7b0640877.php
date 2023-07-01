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

/* auth/registration.twig */
class __TwigTemplate_2ec03981d5ff6727bf4a0c7172b9b576e23e879e8deea605ed9c88832ae65262 extends Template
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

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
        <!-- END Icons -->

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
        <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">

    </head>
    <body>
       
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
                                        <h3 class=\"block-title\">Регистрация</h3>
                                        <div class=\"block-options\">
                                            <a class=\"btn-block-option font-size-sm\" href=\"/login\">Войти</a>
                                        
                                        </div>
                                    </div>
                                    <div class=\"block-content\">
                                        <div class=\"p-sm-3 px -lg-4 py-lg-5\">
                                            <h1 class=\"h2 mb-1\">Регистрация</h1>
                                          
                                            ";
        // line 41
        echo twig_include($this->env, $context, "includes/errors.twig");
        echo "
                                            <form class=\"\" action=\"/registration\" method=\"POST\">
                                                <div class=\"py-3\">
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"fio\" name=\"fio\" placeholder=\"ФИО\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"phone\" class=\"form-control form-control-alt form-control-lg\" id=\"phone\" name=\"phone\" placeholder=\"Тел.номер\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"email\" name=\"email\" placeholder=\"Email\">
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"password\" name=\"password\" placeholder=\"Пароль\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"confirm-password\" name=\"confirm-password\" placeholder=\"Подтверждение пароля\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <div class=\"col-md-6 col-xl-5\">
                                                        <button type=\"submit\" class=\"btn btn-block btn-alt-primary\">
                                                            <i class=\"fa fa-fw fa-sign-in-alt mr-1\"></i> Регистрация
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


        <script src=\"/public/assets/js/oneui.core.min.js\"></script>
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
        return "auth/registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 41,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
        <!-- END Icons -->

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
        <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">

    </head>
    <body>
       
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
                                        <h3 class=\"block-title\">Регистрация</h3>
                                        <div class=\"block-options\">
                                            <a class=\"btn-block-option font-size-sm\" href=\"/login\">Войти</a>
                                        
                                        </div>
                                    </div>
                                    <div class=\"block-content\">
                                        <div class=\"p-sm-3 px -lg-4 py-lg-5\">
                                            <h1 class=\"h2 mb-1\">Регистрация</h1>
                                          
                                            {{ include('includes/errors.twig') }}
                                            <form class=\"\" action=\"/registration\" method=\"POST\">
                                                <div class=\"py-3\">
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"fio\" name=\"fio\" placeholder=\"ФИО\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"phone\" class=\"form-control form-control-alt form-control-lg\" id=\"phone\" name=\"phone\" placeholder=\"Тел.номер\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control form-control-alt form-control-lg\" id=\"email\" name=\"email\" placeholder=\"Email\">
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"password\" name=\"password\" placeholder=\"Пароль\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input type=\"password\" class=\"form-control form-control-alt form-control-lg\" id=\"confirm-password\" name=\"confirm-password\" placeholder=\"Подтверждение пароля\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <div class=\"col-md-6 col-xl-5\">
                                                        <button type=\"submit\" class=\"btn btn-block btn-alt-primary\">
                                                            <i class=\"fa fa-fw fa-sign-in-alt mr-1\"></i> Регистрация
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


        <script src=\"/public/assets/js/oneui.core.min.js\"></script>
        <script src=\"/public/assets/js/oneui.app.min.js\"></script>

        <!-- Page JS Plugins -->
        <script src=\"/public/assets/js/plugins/jquery-validation/jquery.validate.min.js\"></script>

        <!-- Page JS Code -->
        <script src=\"/public/assets/js/pages/op_auth_signin.min.js\"></script>
    </body>
</html>
", "auth/registration.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\auth\\registration.twig");
    }
}
