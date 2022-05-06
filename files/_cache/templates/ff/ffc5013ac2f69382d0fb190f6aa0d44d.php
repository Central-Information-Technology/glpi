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

/* components/search/display_data.html.twig */
class __TwigTemplate_0bd36e4e5ae2c8f9f5abe0ef4af8ca84 extends Template
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
        $context["is_ajax"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 32) &&  !(null === (($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null)));
        // line 33
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (_twig_default_filter(($context["fluid_search"] ?? null), true)) : (true));
        // line 34
        if ( !($context["is_ajax"] ?? null)) {
            // line 35
            echo "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 37
        echo "
";
        // line 39
        $context["normalized_itemtype"] = twig_replace_filter(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 40
        echo "
<form id=\"massform";
        // line 41
        echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
        echo "\" method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        echo "\"
      data-search-itemtype=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype"] ?? null) : null), "html", null, true);
        echo "\" data-start=\"";
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "\" data-count=\"";
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "\" data-limit=\"";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         ";
        // line 45
        if (((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display_type"] ?? null) : null) == twig_constant("Search::GLOBAL_SEARCH"))) {
            // line 46
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
            echo "</h2>

            ";
            // line 48
            if ((($context["count"] ?? null) > (($context["start"] ?? null) + twig_constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                // line 49
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"far fa-eye\"></i>
                  ";
                // line 51
                echo twig_escape_filter($this->env, __("View all"), "html", null, true);
                echo "
               </a>
            ";
            }
            // line 54
            echo "         ";
        } else {
            // line 55
            echo "            ";
            echo twig_include($this->env, $context, "components/search/controls.html.twig");
            echo "
         ";
        }
        // line 57
        echo "      </div>

      ";
        // line 59
        if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["as_map"] ?? null) : null) == 0)) {
            // line 60
            echo "         ";
            echo twig_include($this->env, $context, "components/search/table.html.twig");
            echo "
      ";
        }
        // line 62
        echo "      ";
        if ((($context["count"] ?? null) > 0)) {
            // line 63
            echo "         ";
            if ((((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_type"] ?? null) : null) != twig_constant("Search::GLOBAL_SEARCH")) && ((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["as_map"] ?? null) : null) == 0))) {
                // line 64
                echo "            <div class=\"card-footer search-footer\">
               ";
                // line 65
                echo twig_include($this->env, $context, "components/pager.html.twig");
                echo "
            </div>
         ";
            }
            // line 68
            echo "      ";
        } elseif (((($__internal_compile_8 = (($__internal_compile_9 = ($context["data"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["search"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["as_map"] ?? null) : null) == 1)) {
            // line 69
            echo "         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            ";
            // line 70
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 73
        echo "   </div>
</form>

";
        // line 76
        if ( !($context["is_ajax"] ?? null)) {
            // line 77
            echo "   </div>

   ";
            // line 79
            if (((($__internal_compile_10 = (($__internal_compile_11 = ($context["data"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["search"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as_map"] ?? null) : null) == 0)) {
                // line 80
                echo "      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform";
                // line 83
                echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
                echo "\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
      </script>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/search/display_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  159 => 80,  157 => 79,  153 => 77,  151 => 76,  146 => 73,  140 => 70,  137 => 69,  134 => 68,  128 => 65,  125 => 64,  122 => 63,  119 => 62,  113 => 60,  111 => 59,  107 => 57,  101 => 55,  98 => 54,  92 => 51,  86 => 49,  84 => 48,  78 => 46,  76 => 45,  64 => 42,  58 => 41,  55 => 40,  53 => 39,  50 => 37,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/display_data.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\display_data.html.twig");
    }
}
