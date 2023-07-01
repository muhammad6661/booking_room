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

/* index.twig */
class __TwigTemplate_579c96b07ae31db7e7a83a411af09831004e519f1f3854065f3181d6c857c7d0 extends Template
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
        $this->parent = $this->loadTemplate("layouts/app.twig", "index.twig", 1);
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
        echo "    <div class=\"bg-body-light\">
        <div class=\"content content-full\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left\">
                <div class=\"flex-sm-fill\">
                    <h1 class=\"h3 font-w700 mb-2\">
                        Панель

                    </h1>
                    <h2 class=\"h6 font-w500 text-muted mb-0\">
                        Добро пожаловать
                        <a class=\"font-w600\" href=\"javascript:void(0)\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_auth"] ?? null), "fio", [], "any", false, false, false, 20), "html", null, true);
        echo "
                        </a>


                    </h2>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  60 => 9,  56 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.twig\" %}


{% block title %}
    Dashboard
{% endblock %}

{% block content %}
    <div class=\"bg-body-light\">
        <div class=\"content content-full\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left\">
                <div class=\"flex-sm-fill\">
                    <h1 class=\"h3 font-w700 mb-2\">
                        Панель

                    </h1>
                    <h2 class=\"h6 font-w500 text-muted mb-0\">
                        Добро пожаловать
                        <a class=\"font-w600\" href=\"javascript:void(0)\">
                            {{ user_auth.fio }}
                        </a>


                    </h2>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "index.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\index.twig");
    }
}
