<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/themes/training/partials/header.htm */
class __TwigTemplate_e4ba1796074c9f951b5ed56474424f09e8d9a8488250e410df72f252193cbf2d extends \Twig\Template
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
        echo "<header class=\"main-header\">
        <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
            <hr class=\"navbar-divider\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item\" href=\"#\">
                    <img src=\"themes/training/assets/compiled/css/images/prf.png\">
                </a>
                <a role=\"button\" class=\"navbar-burger burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                </a>
            </div>
            <div id=\"navbarBasicExample\" class=\"navbar-menu\">
                <div class=\"navbar-start\">
                    <a class=\"navbar-item\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">
                       Home
                    </a>
                    <a class=\"navbar-item\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">
                        ";
        // line 20
        if ( !($context["user"] ?? null)) {
            // line 21
            echo "                        Login
                        ";
        } else {
            // line 23
            echo "                        My profile
                        ";
        }
        // line 25
        echo "                    </a>
                    <a class=\"navbar-item\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop");
        echo "\" >
                        shop
                    </a>

                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <a class=\"navbar-link\">
                            about us
                        </a>

                        <div class=\"navbar-dropdown\">
                            <a class=\"navbar-item\"href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">
                                About
                            </a>
                            <a class=\"navbar-item\">
                                Jobs
                            </a>
                            <a class=\"navbar-item\">
                                Contact
                            </a>
                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item\">
                                Report an issue
                            </a>
                        </div>
                    </div>
                    ";
        // line 51
        if (($context["user"] ?? null)) {
            // line 52
            echo "                    <a class=\"navbar-item\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                    ";
        }
        // line 54
        echo "
                </div>


            </div>
        </nav>


</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/themes/training/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  110 => 52,  108 => 51,  90 => 36,  77 => 26,  74 => 25,  70 => 23,  66 => 21,  64 => 20,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
        <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
            <hr class=\"navbar-divider\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item\" href=\"#\">
                    <img src=\"themes/training/assets/compiled/css/images/prf.png\">
                </a>
                <a role=\"button\" class=\"navbar-burger burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                    <span aria-hidden=\"true\"></span>
                </a>
            </div>
            <div id=\"navbarBasicExample\" class=\"navbar-menu\">
                <div class=\"navbar-start\">
                    <a class=\"navbar-item\" href=\"{{'homepage'|page}}\">
                       Home
                    </a>
                    <a class=\"navbar-item\" href=\"{{'login'|page}}\">
                        {% if not user %}
                        Login
                        {% else %}
                        My profile
                        {% endif %}
                    </a>
                    <a class=\"navbar-item\" href=\"{{'shop'|page}}\" >
                        shop
                    </a>

                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <a class=\"navbar-link\">
                            about us
                        </a>

                        <div class=\"navbar-dropdown\">
                            <a class=\"navbar-item\"href=\"{{'about-us'|page}}\">
                                About
                            </a>
                            <a class=\"navbar-item\">
                                Jobs
                            </a>
                            <a class=\"navbar-item\">
                                Contact
                            </a>
                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item\">
                                Report an issue
                            </a>
                        </div>
                    </div>
                    {% if user %}
                    <a class=\"navbar-item\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                    {% endif %}

                </div>


            </div>
        </nav>


</header>", "C:\\xampp\\htdocs\\hackethon/themes/training/partials/header.htm", "");
    }
}
