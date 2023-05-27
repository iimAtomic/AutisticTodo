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

/* base.html.twig */
class __TwigTemplate_11597a47b3c1cff592f82ce702def33e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <style>
            *{
                padding: 0;
                margin: 0;
            }

            body{
                background-color: #222222;
            }

             .cadre
            {   position: relative;
                width: 1600px;
                height: 960px;
                overflow-x:hidden;
            }

            .name
            {
                position: absolute;
                width: 636px;
                height: 116px;
                font-family:  'Monospaced','Inter', serif;
                font-style: normal;
                font-weight: 700;
                font-size: 66px;
                line-height: 116px;
                color: #007FDB;
            }
        </style>
        <script src=\"//unpkg.com/alpinejs\" defer></script>
    </head>
    <body>
        <div class=\"cadre\">
           <div class=\"cadre-name\">
            <span class=\"name\">AUTISTIC PRIME</span>
            </div>
           ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "           ";
        $this->loadTemplate("/components/flash-message.html.twig", "base.html.twig", 46)->display($context);
        // line 47
        echo "        </div>
    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  102 => 5,  94 => 47,  91 => 46,  89 => 45,  50 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\autisticprime\\templates\\base.html.twig");
    }
}
