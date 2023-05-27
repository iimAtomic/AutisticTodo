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

/* home/index.html.twig */
class __TwigTemplate_fed84134738f3c7dc2ea9aa0e0270aad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Note-App!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
  
   .cadre-todo
   {
       display: flex;
       width: 700px;
       height: 700px;
       left: -50px;
   }
   .todo-container
   {
    position: absolute;
    width: 430px;
    height: 636px;
    left: 864px;
    top: 162px;

   }
   .background
   {
    width: 430px;
    height: 202px;
    left: 864px;
    top: 162px;

    border-radius: 10px 10px 0px 0px;
   }

   .day
   {
    position: absolute;
    width: 104px;
    height: 22px;
    left: 317px;
    top: 114px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    color: #FFFFFF;

   }

   .date
   {
    position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
    font-family: 'Russo One';
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 58px;
    /* identical to box height */

    color: #FFFFFF;

   }
   .note-cadre
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 10px;

    position: absolute;
    width: 373px;
    height: 49px;
    left: 893px;
    top: 387px;

   }

   .note-text-cadre 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 227px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 5px;
    flex: none;
      flex-grow: 0;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    left: -27px;
    top: 1px;
   }
   .note-text 
   {
    font-family: 'Inter', serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: black;
    flex: none;
    order: 0;
    flex-grow: 0;
    position: absolute;
    border: none;
    background: none;
    outline: none;

   }
   .date-select
   {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 229px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;



   }
   .date-select-choice
   {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 11px;
      isolation: isolate;
      width: 126px;
      height: 46px;
      border-radius: 5px;
      flex: none;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      position: absolute;
      left: 229px;
      top: 2px;
      background-color: rgba(0, 0, 0, 0);
       -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;
      text-align: center;
   }
   .btn
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 45px;
    height: 46px;
    background: #20EEB0;
    border-radius: 5px;
    flex: none;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 358px;
    top: 2px;
    border: 1px solid;
    cursor:pointer
   }
   .btn-icon
   {display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 4px 15px;
    gap: 10px;
    width: 46px;
    height: 24px;
    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
    z-index: 0;
   }
   .note-list
   {
    position: absolute;
    width: 373px;
    height: 248px;
    /*left: 893px;
    top: 472px;*/
   }

   .note-list-list
   {
     position: relative;
     display: flex;
     flex-direction: column;
     justify-content: space-between;
     margin: 10px;
     bottom: 5px;
   }

   .note-box
   {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0;
    gap: 194px;
    position: relative;
    width: 373px;
    height: 44px;
    left: 896px;
    border: 1px solid green;
    border-radius: 10px;
    text-align: center;
    top: 472px;
    margin: 10px;
   }

   .note-text-bloc
   {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0px;
    gap: 5px;

    width: 117px;
    height: 44px;


    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
   }
   .note-text-text
   {
    height: 22px;
       font-family: 'Inter', serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #0D0D0D;
    flex: none;
    order: 0;
    flex-grow: 0;
    position: absolute;
    top: 1px;
    left: 16px;
   }
   .note-text-date
   {
      height: 17px;
       font-family: 'Inter', serif;
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 17px;
      color: #888888;
      flex: none;
      flex-grow: 0;
      order: 1;
      position: absolute;
      left: 17px;
      top: 25px;
   }


   .note-text-bloc-icon
   {
    width: 62px;
    height: 24px;
    /* Inside auto layout */
    flex: none;
    order: 1;
    flex-grow: 0;
   }
   .edit-icon
   {
    position: absolute;
    width: 24px;
    height: 24px;
    left: 311px;
    top: 10px;
    cursor:pointer;
   }

   .delete-icon
   {
    position: absolute;
    width: 24px;
    height: 24px;
    left: 343px;
    top: 10px;
    cursor:pointer;
   }
</style>

    ";
        // line 333
        $this->loadTemplate("/components/profil-user.html.twig", "home/index.html.twig", 333)->display($context);
        // line 334
        echo "
  
   
  <div class=\"cadre-todo\">
    ";
        // line 338
        $this->loadTemplate("/components/header.html.twig", "home/index.html.twig", 338)->display(twig_array_merge($context, ["jourDate" => ($context["jourDate"] ?? null), "heure" => ($context["heure"] ?? null)]));
        // line 339
        echo "      <div class=\"note-cadre\">
        <form action=\"";
        // line 340
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_task");
        echo "\" method='post'>
              <div class=\"note-text-cadre\">
                <input type=\"text\" name=\"titre\" value=\"\" class=\"note-text\">
              </div>
                <button type=\"submit\" class=\"btn\">
                    <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/plus.png"), "html", null, true);
        echo "\" alt=\"icon\">
                 </button>
                 <select name=\"jourDate\" class=\"date-select\" id=\"selectChoice\" onchange=\"onSelect()\">
                    <option></option>
                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["array_day"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 350
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "first", [], "any", false, false, false, 350), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "first", [], "any", false, false, false, 350), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "second", [], "any", false, false, false, 351), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "second", [], "any", false, false, false, 351), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 352
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "third", [], "any", false, false, false, 352), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "third", [], "any", false, false, false, 352), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fourth", [], "any", false, false, false, 353), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fourth", [], "any", false, false, false, 353), "html", null, true);
            echo "</option>
                        <option value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fifth", [], "any", false, false, false, 354), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "fifth", [], "any", false, false, false, 354), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "                 </select>
          </form>
      </div>

      <div class=\"note-list\">
          <div class=\"note-list-list\">
                 ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 363
            echo "                <div class=\"note-box\">
                <div class=\"note-text-bloc\">
                  <span class=\"note-text-text\">";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "titre", [], "any", false, false, false, 365), "html", null, true);
            echo "</span>
                  <span class=\"note-text-date\">";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "jourDate", [], "any", false, false, false, 366), "html", null, true);
            echo "</span>
                </div>
                <div class=\"note-text-icon-bloc\">
                  <a href=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 369)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 370
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/edit.png"), "html", null, true);
            echo "\" alt=\"editIcon\" class=\"edit-icon\">
                  </a>
                  <a href=\"";
            // line 372
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 372)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/delete.png"), "html", null, true);
            echo "\" alt=\"deleteIcon\" class=\"delete-icon\">
                  </a>
                </div>
              </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "          </div>
      </div>
  </div>



<script>

  function onSelect()
 {
   var select= document.getElementById('selectChoice').value
   if(select.length !==0)
   {document.getElementById('selectChoice').className=\"date-select-choice\"}
   else
   {document.getElementById('selectChoice').className=\"date-select\"}
 }
  
</script>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 378,  493 => 373,  489 => 372,  484 => 370,  480 => 369,  474 => 366,  470 => 365,  466 => 363,  462 => 362,  454 => 356,  444 => 354,  438 => 353,  432 => 352,  426 => 351,  419 => 350,  415 => 349,  408 => 345,  400 => 340,  397 => 339,  395 => 338,  389 => 334,  387 => 333,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\autisticprime\\templates\\home\\index.html.twig");
    }
}
