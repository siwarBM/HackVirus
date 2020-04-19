<?php

use Twig\Environment;
use Twig\Source;

/* C:\xampp\htdocs\hackethon/themes/training/partials/footer.htm */
class __TwigTemplate_70d61e0f766067f1dbcffa25b39da2e83288d0ab028fd1c9a359e70e819b0be2 extends \Twig\Template
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
        echo "<footer class=\"main-footer\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Together </strong>against<a href=\"#\"> CoronaVirus</a>.
        </p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hackethon/themes/training/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"main-footer\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Together </strong>against<a href=\"#\"> CoronaVirus</a>.
        </p>
    </div>
</footer>", "C:\\xampp\\htdocs\\hackethon/themes/training/partials/footer.htm", "");
    }
}
