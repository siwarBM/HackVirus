<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/themes/training/pages/contact.htm */
class __TwigTemplate_df5c4e1a8f7b7e4b50b6e040ec4f5f2113d8a775697f5c6f4e0db9a7a2d2019f extends \Twig\Template
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
        echo "<h2>Contact</h2>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "<form>
    <label>Your name</label>
    <input type=\"text\" name=\"name\">
    <span data-validate-for=\"name\"></span>

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    <span data-validate-for=\"email\"></span>


    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\" data-attach-loading>Send</button>

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>

    <div class=\"flash error\">
        Error Try again
    </div>

    <div class=\"flash success\">
        Your message has been sent. Thank you.
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/themes/training/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Contact</h2>
{% component 'contactform' %}
<form>
    <label>Your name</label>
    <input type=\"text\" name=\"name\">
    <span data-validate-for=\"name\"></span>

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    <span data-validate-for=\"email\"></span>


    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\" data-attach-loading>Send</button>

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>

    <div class=\"flash error\">
        Error Try again
    </div>

    <div class=\"flash success\">
        Your message has been sent. Thank you.
    </div>
</form>", "C:\\xampp\\htdocs\\hackethon/themes/training/pages/contact.htm", "");
    }
}
