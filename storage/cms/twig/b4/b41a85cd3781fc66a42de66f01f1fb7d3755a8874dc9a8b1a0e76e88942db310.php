<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_1007848f7b47814c337f4dd51f1682d74b8d227b0aebc27a176764f8d879bc73 extends \Twig\Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <h3>Register</h3>

    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        ";
            // line 26
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 27
                echo "            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        ";
            }
            // line 37
            echo "
        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>

    ";
            // line 50
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 52
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  97 => 50,  82 => 37,  70 => 27,  68 => 26,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
    <h3>Register</h3>

    {{ form_ajax('onRegister') }}

        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        {% endif %}

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>

    {{ form_close() }}
{% else %}
    <!-- Registration is disabled. -->
{% endif %}
", "C:\\xampp\\htdocs\\hackethon/plugins/rainlab/user/components/account/register.htm", "");
    }
}
