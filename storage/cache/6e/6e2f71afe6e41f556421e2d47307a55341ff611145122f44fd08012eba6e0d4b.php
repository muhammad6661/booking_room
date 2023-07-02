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

/* /email/send.twig */
class __TwigTemplate_b2b2ba92e29a57fc281a904d9bbfefca8b7f1b24ea9b715f777dc2af00988810 extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Подтверждение бронирования</title>
    <style>
        /* Add any styling you want for the email here */
        body {
            font-family: Arial, sans-serif;
        }
        .message {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .booking-details {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .booking-item {
            margin-bottom: 5px;
        }
        .booking-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class=\"message\">Подтверждение бронирования</div>
<div class=\"message\">";
        // line 30
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</div>
<div class=\"booking-details\">

    <div class=\"booking-item\">
        <span>Кабинет:</span> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "
    </div>
    <div class=\"booking-item\">
        <span>Адрес:</span> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "address", [], "any", false, false, false, 37), "html", null, true);
        echo "
    </div>
    <div class=\"booking-item\">
        <span>Пользователь забронировал:</span> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "user", [], "any", false, false, false, 40), "fio", [], "any", false, false, false, 40), "html", null, true);
        echo "
    </div>

    <div class=\"booking-item\">
        <span>Дата бронирования:</span>От ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "getDateFrom", [], "any", false, false, false, 44), "d.m.Y H:i:m"), "html", null, true);
        echo " до ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "getDateTo", [], "any", false, false, false, 44), "d.m.Y H:i:m"), "html", null, true);
        echo " забронировано.
    </div>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/email/send.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  87 => 40,  81 => 37,  75 => 34,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Подтверждение бронирования</title>
    <style>
        /* Add any styling you want for the email here */
        body {
            font-family: Arial, sans-serif;
        }
        .message {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .booking-details {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .booking-item {
            margin-bottom: 5px;
        }
        .booking-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class=\"message\">Подтверждение бронирования</div>
<div class=\"message\">{{ text }}</div>
<div class=\"booking-details\">

    <div class=\"booking-item\">
        <span>Кабинет:</span> {{ room.title }}
    </div>
    <div class=\"booking-item\">
        <span>Адрес:</span> {{ room.address }}
    </div>
    <div class=\"booking-item\">
        <span>Пользователь забронировал:</span> {{ booking.user.fio }}
    </div>

    <div class=\"booking-item\">
        <span>Дата бронирования:</span>От {{ booking.getDateFrom | date('d.m.Y H:i:m') }} до {{ booking.getDateTo | date('d.m.Y H:i:m') }} забронировано.
    </div>
</div>

</body>
</html>", "/email/send.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\email\\send.twig");
    }
}
