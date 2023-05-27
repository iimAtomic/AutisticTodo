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

/* /components/header.html.twig */
class __TwigTemplate_f162475a83a79b82b177cd3d497c5244 extends Template
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
        echo " <div class=\"todo-container\">

       <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/img.png"), "html", null, true);
        echo "\" alt=\"background\" class=\"background\">

       <span class=\"day\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["jourDate"] ?? null), "html", null, true);
        echo "</span>

       <span class=\"date\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["heure"] ?? null), "html", null, true);
        echo "</span>

      </div>
";
    }

    public function getTemplateName()
    {
        return "/components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/components/header.html.twig", "C:\\wamp64\\www\\autisticprime\\templates\\components\\header.html.twig");
    }
}
