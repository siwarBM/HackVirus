<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_13e08fe6410c3a1cd9d7bb2b9a62b038ed352548a1fdb5d55b903ec01a6f82d0 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    ";
        // line 23
        if (($context["updateRequiresPassword"] ?? null)) {
            // line 24
            echo "        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    ";
        }
        // line 30
        echo "
    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  78 => 30,  70 => 24,  68 => 23,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onUpdate') }}

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    {% if updateRequiresPassword %}
        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}
", "C:\\xampp\\htdocs\\hackethon/plugins/rainlab/user/components/account/update.htm", "");
    }
}
