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

/* /components/profil-user.html.twig */
class __TwigTemplate_1e863633ac67ac0144cc239f13ac919f extends Template
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
        echo "<style>

.profil
    {
    position: absolute;
    width: 1000px;
    height: 116px;
    left: 975px;
    top: 30px;
    font-family: 'Inter', serif;
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 116px;
    color: coral;
    }

.avatar
{
    position: absolute;
    width: 600px;
    height: 116px;
    left: 900px;
    top: 2px;
    font-family: 'Inter', serif;
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 116px;
    transform: scale(0.1);}
</style>


<div class=\"container-profil\">
        <span class=\"profil\">
         Salut ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo "
        </span>
        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"avatar\">
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/profil.png"), "html", null, true);
        echo "\" alt=\"profil\" >
        </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/components/profil-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  79 => 38,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/components/profil-user.html.twig", "/home/u940117542/domains/nexus-legacy.com/public_html/autisticprime/templates/components/profil-user.html.twig");
    }
}
