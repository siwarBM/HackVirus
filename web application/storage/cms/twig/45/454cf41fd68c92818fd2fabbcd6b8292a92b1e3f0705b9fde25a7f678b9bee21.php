<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/themes/training/pages/single-courier.htm */
class __TwigTemplate_1864d9b8a357ed9b40ccc4d3039abd4ed8b521a0f719ff622f339300ef77dcc4 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<div class=\"notification\">
    <button class=\"delete\"></button>

        <p style=\" margin-left: 260px;color:#00d1b2\"> <strong>Order :</strong>
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "order", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>

        <p style=\" margin-left: 260px\">Delivery man Name : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "courrier", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>

        <p style=\" margin-left: 260px\">details : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "details", [], "any", false, false, false, 14), "html", null, true);
            echo "</p></div>
";
        } else {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/themes/training/pages/single-courier.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  64 => 14,  59 => 12,  54 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<div class=\"notification\">
    <button class=\"delete\"></button>

        <p style=\" margin-left: 260px;color:#00d1b2\"> <strong>Order :</strong>
            {{record.order }}</p>

        <p style=\" margin-left: 260px\">Delivery man Name : {{record.courrier }}</p>

        <p style=\" margin-left: 260px\">details : {{record.details}}</p></div>
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\hackethon/themes/training/pages/single-courier.htm", "");
    }
}
