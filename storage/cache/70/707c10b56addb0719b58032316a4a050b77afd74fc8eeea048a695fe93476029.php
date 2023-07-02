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

/* booking/index.twig */
class __TwigTemplate_a5e31598b068ba79e7b0bba43d3e9077d13c73004432c98935a83a7c928a3c60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/app.twig", "booking/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    Dashboard
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/dropzone/dist/min/dropzone.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/flatpickr/flatpickr.min.css\">

    <!-- Fonts and OneUI framework -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
    <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->

    <!-- Hero -->
    <div class=\"bg-body-light\">
        <div class=\"content content-full\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center\">
                <h1 class=\"flex-sm-fill h3 my-2\">
                    Бронирование комнат
                </h1>

            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class=\"content \">
        <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
        <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
        <div class=\"block block-rounded \">
            <div class=\"block-header\">
                <h3 class=\"block-title\">Задача</h3>
            </div>
            <div class=\"block-content \">
                <form action=\"/booking-room\" method=\"POST\"  class=\"mb-6\">



                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <p class=\"font-size-sm text-muted\">
                                1. Задача: В офисе есть 5 кабинетов. Не используя фреймворки, написать команду, которая проверяет свободен ли кабинет в определенное время и даст возможность его забронировать. После бронирования кабинета, чтоб была команда — «Отправлять уведомление человеку, который занимает его (на E-mail и номер телефона) с датой, временем и номером кабинета». Если кабинет занят, выводить сообщение кем и до скольки он занят. Использовать СУБД. Желательно использовать PSR-рекомендации. Во время разработки используйте git и Github и делайте значимые коммиты. Результаты задачи должны быть размещены в вашей учетной записи Github, отправьте нам только ссылку. Мы не принимаем результаты задач в .zip/.rar и т. д.
                            </p>
                        </div>
                        <div class=\"col-lg-8 col-xl-6\">
                            ";
        // line 68
        echo twig_include($this->env, $context, "includes/errors.twig");
        echo "
                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Дата от</label>
                                    <input required type=\"text\" class=\"js-flatpickr form-control bg-white\" id=\"example-flatpickr-datetime-24\" name=\"date_from\" data-enable-time=\"true\" data-time_24hr=\"true\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Дата до</label>
                                    <input required type=\"text\" class=\"js-flatpickr form-control bg-white\" id=\"example-flatpickr-datetime-24\" name=\"date_to\" data-enable-time=\"true\" data-time_24hr=\"true\">
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Комната</label>
                                    <select class=\" form-control\" id=\"example-select2\" name=\"room\" style=\"width: 100%;\" data-placeholder=\"Choose one..\">
                                        <option value=\"\">Выберите</option>
                                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 88
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "title", [], "any", false, false, false, 88), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row items-push\">
                        <div class=\"col-lg-7 offset-lg-4\">
                            <button type=\"submit\" class=\"btn btn-alt-primary\">Брониторвать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Flatpickr Datetimepicker -->






    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->

    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS Core

        Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
        to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

        If you like, you could also include them separately directly from the assets/js/core folder in the following
        order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

        assets/js/core/jquery.min.js
        assets/js/core/bootstrap.bundle.min.js
        assets/js/core/simplebar.min.js
        assets/js/core/jquery-scrollLock.min.js
        assets/js/core/jquery.appear.min.js
        assets/js/core/js.cookie.min.js
    -->
";
    }

    // line 138
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "
    <!-- Page JS Plugins -->
    <script src=\"/public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
    <script src=\"/public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\"></script>
    <script src=\"/public/assets/js/plugins/select2/js/select2.full.min.js\"></script>
    <script src=\"/public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js\"></script>
    <script src=\"/public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js\"></script>
    <script src=\"/public/assets/js/plugins/dropzone/dropzone.min.js\"></script>
    <script src=\"/public/assets/js/plugins/flatpickr/flatpickr.min.js\"></script>

    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function(){One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);});</script>

";
    }

    public function getTemplateName()
    {
        return "booking/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 139,  210 => 138,  159 => 90,  148 => 88,  144 => 87,  122 => 68,  61 => 9,  57 => 8,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.twig\" %}


{% block title %}
    Dashboard
{% endblock %}

{% block content %}


    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel=\"shortcut icon\" href=\"/public/assets/media/favicons/favicon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/public/assets/media/favicons/favicon-192x192.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/public/assets/media/favicons/apple-touch-icon-180x180.png\">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/dropzone/dist/min/dropzone.min.css\">
    <link rel=\"stylesheet\" href=\"/public/assets/js/plugins/flatpickr/flatpickr.min.css\">

    <!-- Fonts and OneUI framework -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\">
    <link rel=\"stylesheet\" id=\"css-main\" href=\"/public/assets/css/oneui.min.css\">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel=\"stylesheet\" id=\"css-theme\" href=\"/public/assets/css/themes/amethyst.min.css\"> -->
    <!-- END Stylesheets -->

    <!-- Hero -->
    <div class=\"bg-body-light\">
        <div class=\"content content-full\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center\">
                <h1 class=\"flex-sm-fill h3 my-2\">
                    Бронирование комнат
                </h1>

            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class=\"content \">
        <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
        <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
        <div class=\"block block-rounded \">
            <div class=\"block-header\">
                <h3 class=\"block-title\">Задача</h3>
            </div>
            <div class=\"block-content \">
                <form action=\"/booking-room\" method=\"POST\"  class=\"mb-6\">



                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <p class=\"font-size-sm text-muted\">
                                1. Задача: В офисе есть 5 кабинетов. Не используя фреймворки, написать команду, которая проверяет свободен ли кабинет в определенное время и даст возможность его забронировать. После бронирования кабинета, чтоб была команда — «Отправлять уведомление человеку, который занимает его (на E-mail и номер телефона) с датой, временем и номером кабинета». Если кабинет занят, выводить сообщение кем и до скольки он занят. Использовать СУБД. Желательно использовать PSR-рекомендации. Во время разработки используйте git и Github и делайте значимые коммиты. Результаты задачи должны быть размещены в вашей учетной записи Github, отправьте нам только ссылку. Мы не принимаем результаты задач в .zip/.rar и т. д.
                            </p>
                        </div>
                        <div class=\"col-lg-8 col-xl-6\">
                            {{ include('includes/errors.twig') }}
                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Дата от</label>
                                    <input required type=\"text\" class=\"js-flatpickr form-control bg-white\" id=\"example-flatpickr-datetime-24\" name=\"date_from\" data-enable-time=\"true\" data-time_24hr=\"true\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Дата до</label>
                                    <input required type=\"text\" class=\"js-flatpickr form-control bg-white\" id=\"example-flatpickr-datetime-24\" name=\"date_to\" data-enable-time=\"true\" data-time_24hr=\"true\">
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-xl-4\">
                                    <label for=\"example-flatpickr-datetime-24\">Комната</label>
                                    <select class=\" form-control\" id=\"example-select2\" name=\"room\" style=\"width: 100%;\" data-placeholder=\"Choose one..\">
                                        <option value=\"\">Выберите</option>
                                        {% for room in rooms%}
                                            <option value=\"{{ room.id }}\">{{ room.title }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row items-push\">
                        <div class=\"col-lg-7 offset-lg-4\">
                            <button type=\"submit\" class=\"btn btn-alt-primary\">Брониторвать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Flatpickr Datetimepicker -->






    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->

    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS Core

        Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
        to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

        If you like, you could also include them separately directly from the assets/js/core folder in the following
        order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

        assets/js/core/jquery.min.js
        assets/js/core/bootstrap.bundle.min.js
        assets/js/core/simplebar.min.js
        assets/js/core/jquery-scrollLock.min.js
        assets/js/core/jquery.appear.min.js
        assets/js/core/js.cookie.min.js
    -->
{% endblock %}
{% block scripts %}

    <!-- Page JS Plugins -->
    <script src=\"/public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
    <script src=\"/public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\"></script>
    <script src=\"/public/assets/js/plugins/select2/js/select2.full.min.js\"></script>
    <script src=\"/public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js\"></script>
    <script src=\"/public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js\"></script>
    <script src=\"/public/assets/js/plugins/dropzone/dropzone.min.js\"></script>
    <script src=\"/public/assets/js/plugins/flatpickr/flatpickr.min.js\"></script>

    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function(){One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);});</script>

{% endblock %}", "booking/index.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\booking\\index.twig");
    }
}
