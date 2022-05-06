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

/* pages/login.html.twig */
class __TwigTemplate_31786347100fe4552677c6db65b8f78d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "   <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">

            <h2 class=\"card-header text-center mb-4\">";
        // line 43
        echo twig_escape_filter($this->env, __("Login to your account"), "html", null, true);
        echo "</h2>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
        // line 45
        echo twig_escape_filter($this->env, __("Login"), "html", null, true);
        echo "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\">
                  ";
        // line 50
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "

                  ";
        // line 52
        if (($context["show_lost_password"] ?? null)) {
            // line 53
            echo "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            echo "\">
                           ";
            // line 55
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "
                        </a>
                     </span>
                  ";
        }
        // line 59
        echo "               </label>
               <input type=\"password\" class=\"form-control\" name=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 63
        if (twig_constant("GLPI_DEMO_MODE")) {
            // line 64
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 65
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo "</label>
                  ";
            // line 66
            echo ($context["languages_dropdown"] ?? null);
            echo "
               </div>
            ";
        }
        // line 69
        echo "
            ";
        // line 70
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 71
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 72
            echo twig_escape_filter($this->env, __("Login source"), "html", null, true);
            echo "</label>
                  ";
            // line 73
            echo ($context["auth_dropdown_login"] ?? null);
            echo "
               </div>
            ";
        }
        // line 76
        echo "
            ";
        // line 77
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 78
            echo "               <div class=\"mb-2\">
                  <label class=\"form-check\">
                     <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["rmbfield"] ?? null), "html", null, true);
            echo "\" ";
            echo (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            echo " />
                     <span class=\"form-check-label\">";
            // line 81
            echo twig_escape_filter($this->env, __("Remember me"), "html", null, true);
            echo "</span>
                  </label>
               </div>
            ";
        }
        // line 85
        echo "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 88
        echo twig_escape_filter($this->env, __("Sign in"), "html", null, true);
        echo "
               </button>
            </div>

            ";
        // line 92
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 93
            echo "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 95
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 98
        echo "         </div>

         ";
        // line 100
        if (($context["right_panel"] ?? null)) {
            // line 101
            echo "            <div class=\"col-auto offset-md-1 p-2 text-center\">
               ";
            // line 102
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 103
                echo "                  <div class=\"rich_text_container\">
                     ";
                // line 104
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                  </div>
               ";
            }
            // line 107
            echo "
               ";
            // line 108
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 109
                echo "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 113
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                  </a>
               ";
            }
            // line 116
            echo "
               <hr />

               ";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 122
        echo "      </div>
   </form>
";
    }

    // line 126
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "   ";
        echo ($context["copyright_message"] ?? null);
        echo "
";
    }

    // line 130
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 131,  263 => 130,  256 => 127,  252 => 126,  246 => 122,  240 => 119,  235 => 116,  229 => 113,  223 => 109,  221 => 108,  218 => 107,  212 => 104,  209 => 103,  207 => 102,  204 => 101,  202 => 100,  198 => 98,  192 => 95,  188 => 93,  186 => 92,  179 => 88,  174 => 85,  167 => 81,  161 => 80,  157 => 78,  155 => 77,  152 => 76,  146 => 73,  142 => 72,  139 => 71,  137 => 70,  134 => 69,  128 => 66,  124 => 65,  121 => 64,  119 => 63,  113 => 60,  110 => 59,  103 => 55,  99 => 54,  96 => 53,  94 => 52,  89 => 50,  82 => 46,  78 => 45,  73 => 43,  65 => 38,  61 => 37,  57 => 36,  52 => 35,  48 => 34,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\login.html.twig");
    }
}
