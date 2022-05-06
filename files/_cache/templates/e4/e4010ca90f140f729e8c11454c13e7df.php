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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_3de312d8cfc967540bd835f7ecdf71d6 extends Template
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
        // line 31
        echo "
";
        // line 32
        $context["rand_header"] = twig_random($this->env);
        // line 33
        echo "
<div class=\"btn-group\">
   ";
        // line 35
        if (($context["is_debug_active"] ?? null)) {
            // line 36
            echo "      <button class=\"btn btn-outline-danger d-none d-md-block see_debug\" role=\"button\">
         <i class=\"ti ti-bug fa-lg mt-1\" title=\" ";
            // line 37
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 38
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "</span>
         </i>
      </button>
   ";
        }
        // line 42
        echo "
   ";
        // line 43
        if ( !(null === ($context["user"] ?? null))) {
            // line 44
            echo "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle ";
            // line 46
            if (($context["is_debug_active"] ?? null)) {
                echo "bg-red-lt";
            }
            echo "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
               <div class=\"pe-2 d-none d-xl-block\">
                  <div style=\" color: #ffffff;\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : ("")))), "truncate", [0 => 35, 1 => "..."], "method", false, false, false, 49), "html", null, true);
            echo "</div>
                  ";
            // line 50
            $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name"));
            // line 51
            echo "                  <div class=\"mt-1 small text-muted\" title=\"";
            echo twig_escape_filter($this->env, ($context["entity_completename"] ?? null), "html", null, true);
            echo "\"
                       data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" style=\"color: #ffffff;\">
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
            echo "
                  </div>
               </div>

                ";
            // line 57
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 58
($context["user"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
            // line 61
            echo "
            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            echo "</h6>

               ";
            // line 66
            echo twig_include($this->env, $context, "layout/parts/profile_selector.html.twig");
            echo "

               <div class=\"dropdown-divider\"></div>

               ";
            // line 70
            if ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", twig_constant("UPDATE"))) {
                // line 71
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                echo "\"
                     class=\"dropdown-item ";
                // line 72
                if (($context["is_debug_active"] ?? null)) {
                    echo "bg-red-lt";
                }
                echo "\"
                     title=\"";
                // line 73
                echo twig_escape_filter($this->env, __("Change mode"), "html", null, true);
                echo "\">
                     <i class=\"ti fa-fw ti-bug debug\"></i>
                     ";
                // line 75
                echo twig_escape_filter($this->env, ((($context["is_debug_active"] ?? null)) ? (__("Debug mode enabled")) : (__("Debug mode disabled"))), "html", null, true);
                echo "
                  </a>
               ";
            }
            // line 78
            echo "
               ";
            // line 80
            echo "
               <div class=\"dropdown-item\">
                  <i class=\"ti fa-fw ti-language\"></i>
                  ";
            // line 83
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["help_url"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-help\"></i>
                  ";
            // line 90
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "
               </a>

               <a href=\"#\" class=\"dropdown-item\" title=\"";
            // line 93
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "\"
                  id=\"show_about_modal_";
            // line 94
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-info-circle\"></i>
                  ";
            // line 96
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "
                  ";
            // line 97
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 98
                echo "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
            }
            // line 102
            echo "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-adjustments-alt\"></i>
                  ";
            // line 108
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "
               </a>
               <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) ? ("?noAUTO=1") : ("")))), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-logout\"></i>
                  ";
            // line 112
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "
               </a>
            </div>
         </div>
      </div>

      <div class=\"modal fade\" id=\"about_modal_";
            // line 118
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
            // line 122
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 123
            echo twig_escape_filter($this->env, __("Close"), "html", null, true);
            echo "\"></button>
               </div>
               <div class=\"modal-body\">
                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
            // line 127
            echo twig_escape_filter($this->env, twig_constant("GLPI_VERSION"), "html", null, true);
            echo "
                     Copyright (C) 2015-";
            // line 128
            echo twig_escape_filter($this->env, twig_constant("GLPI_YEAR"), "html", null, true);
            echo " Teclib' and contributors
                  </a></p>
                  ";
            // line 130
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 131
                echo "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                // line 133
                echo twig_escape_filter($this->env, __("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                echo "\">
                           ";
                // line 134
                echo twig_escape_filter($this->env, twig_sprintf(__("A new version is available: %s."), ($context["founded_new_version"] ?? null)), "html", null, true);
                echo "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
            }
            // line 141
            echo "               </div>
            </div>
         </div>
      </div>

   ";
        } elseif (twig_constant("GLPI_DEMO_MODE")) {
            // line 147
            echo "      <div class=\"dropdown-item\">
         <i class=\"fas fa-fw fa-language\"></i>
         ";
            // line 149
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
      </div>

   ";
        }
        // line 153
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 157
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 159
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").remove().modal(\"show\");
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/user_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 159,  298 => 157,  292 => 153,  285 => 149,  281 => 147,  273 => 141,  263 => 134,  259 => 133,  255 => 131,  253 => 130,  248 => 128,  244 => 127,  237 => 123,  233 => 122,  226 => 118,  217 => 112,  210 => 110,  205 => 108,  198 => 106,  192 => 102,  186 => 98,  184 => 97,  180 => 96,  175 => 94,  171 => 93,  165 => 90,  158 => 88,  150 => 83,  145 => 80,  142 => 78,  136 => 75,  131 => 73,  125 => 72,  120 => 71,  118 => 70,  111 => 66,  106 => 64,  101 => 61,  99 => 58,  98 => 57,  91 => 53,  85 => 51,  83 => 50,  79 => 49,  71 => 46,  67 => 44,  65 => 43,  62 => 42,  55 => 38,  51 => 37,  48 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/user_header.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\user_header.html.twig");
    }
}
