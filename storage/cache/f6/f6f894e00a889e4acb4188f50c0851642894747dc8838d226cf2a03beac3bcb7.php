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

/* includes/errors.twig */
class __TwigTemplate_1ebf2b3aa9559eb94336b20ef588deb4830de4e9e904f2940ea0bc17085b05aa extends Template
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
        echo "
";
        // line 2
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 3
            echo "
    <div class=\"alert alert-icon alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
        <i class=\"fa fa-exclamation-triangle\"></i>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "            <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        
    </div>
";
        }
        // line 14
        echo " 



";
    }

    public function getTemplateName()
    {
        return "includes/errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 12,  54 => 10,  50 => 9,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if errors | length > 0 %}

    <div class=\"alert alert-icon alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
        <i class=\"fa fa-exclamation-triangle\"></i>
        {% for error in errors %}
            <p>{{ error }}</p>
         {% endfor %}
        
    </div>
{% endif %} 



", "includes/errors.twig", "D:\\OpenServer\\domains\\office-booking.my\\resources\\views\\includes\\errors.twig");
    }
}
