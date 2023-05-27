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

/* /components/flash-message.html.twig */
class __TwigTemplate_28aa5999d20a444934895b8d48bff5bc extends Template
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
  
    .flash
    {
    position: absolute;
    width: 900px;
    height: 116px;
    left: 300px;
    top: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 116px;
    color: red;
    }

</style>

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 21
            echo "
      ";
            // line 22
            if ($context["notice"]) {
                // line 23
                echo "        <div x-data=\"{show:true}\" x-init=\"setTimeout(()=>show=false, 6000)\"x-show=\"show\" class=\"flash\"> 
       <p>
        ";
                // line 25
                echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
                echo "
       </p>
  </div>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/components/flash-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  67 => 23,  65 => 22,  62 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/components/flash-message.html.twig", "/home/u940117542/domains/nexus-legacy.com/public_html/autisticprime/templates/components/flash-message.html.twig");
    }
}
