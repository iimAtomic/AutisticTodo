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

/* security/login.html.twig */
class __TwigTemplate_d704c8f5d778921f548a5b8c1df9e25e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
     position: absolute;
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
    width: 60px;
    height: 22px;
    left: 334px;
    top: 114px;

       font-family: 'Russo One', serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    color: #FFFFFF;}

   .date
   {position: absolute;
    width: 192px;
    height: 58px;
    left: 210px;
    top: 131px;
    font-family: 'Russo One', serif;
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 58px;
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
    top: 428px;

   }

   .note-text-cadre-email 
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 0px;
    left:48px
   }

    .note-text-cadre-password
   {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;
    gap: 10px;
    width: 267px;
    height: 27px;
    background: cornflowerblue;
    border-radius: 27px;
    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 1;
    position: absolute;
    top: 75px;
    left:48px;
   }
   .note-text 
   {
    width: 275px;
    height: 19px;
    font-family: 'Inter';
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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
      background: url('https://api.iconify.design/uil/angle-down.svg') no-repeat center center / contain;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
      width: 50px;
      height: 46px;
      border-radius: 5px;
      flex: none;
        flex-grow: 0;
      flex-grow: 0;
      order: 1;
      align-self: stretch;
      flex-grow: 0;
      position: absolute;
      left: 304px;
      top: 2px;
        background-color: rgba(0, 0, 0, 0);
      background-color: rgba(0, 0, 0, 0);
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #20EEB0;
      border: 1px solid;


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
    width: 114px;
    height: 46px;
    background: #20EEB0;
    border-radius: 26px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 141px;
    top: 165px;
    border: 1px solid;
   }
    
   .btn-icon
   {
    display: flex;
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
   .create-account
   {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 11px;
    isolation: isolate;
    width: 114px;
    height: 0px;
    color: darkslateblue;
    border-radius: 0px;
    flex: none;
    flex-grow: 0;
    flex-grow: 0;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    position: absolute;
    left: 206px;
    top: 231px;
   }
</style>


   
  <div class=\"cadre-todo\">
       
       <div class=\"todo-container\">

         <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/background.png"), "html", null, true);
        echo "\" alt=\"background\" class=\"background\">

      </div>


      <div class=\"note-cadre\">

        <form action=\"";
        // line 277
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

              ";
        // line 281
        if (($context["error"] ?? null)) {
            // line 282
            echo "                  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 282), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 282), "security"), "html", null, true);
            echo "</div>
              ";
        }
        // line 284
        echo "
              <div class=\"note-text-cadre-email\">
                <label for=\"email\" class=\"label-email\" style=\"position: absolute;top: -23px;left: -15px;\">
                  Email: </label>
                <input type=\"email\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\"  class=\"note-text\" autocomplete=\"email\" required autofocus>

              </div>

               <div class=\"note-text-cadre-password\">

                <label for=\"password\" class=\"label-password\" style=\"position: absolute;top: -24px; left: -15px;\">
                  Mot de passe: </label>

                  <input type=\"password\" name=\"password\"  class=\"note-text\" autocomplete=\"current-password\" required>


              </div>
              
               
                <button type=\"submit\" class=\"btn\">
                Se connecter
                 </button>

                 <a href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_register");
        echo "\" class=\"create-account\">
                  <p>Créer un compte</p>
                 </a>

                

                 
              
            
  
          </form>
      </div>

     

  </div>




";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 307,  358 => 288,  352 => 284,  346 => 282,  344 => 281,  339 => 279,  334 => 277,  324 => 270,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\autisticprime\\templates\\security\\login.html.twig");
    }
}
