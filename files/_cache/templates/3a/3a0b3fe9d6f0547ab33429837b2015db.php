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

/* components/form/header.html.twig */
class __TwigTemplate_04dfd31fcab4e773debacfbb0874a4b8 extends Template
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
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 32) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 32)));
        // line 33
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 33) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canedit"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["canedit"] ?? null) : null)) : (true));
        // line 34
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["rand"] = twig_random($this->env);
        // line 36
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formtitle"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 36)));
        // line 37
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 37)));
        // line 38
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["noid"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["noid"] ?? null) : null)) : (false));
        // line 39
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39), "id", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)) : ( -1));
        // line 40
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["formoptions"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formoptions"] ?? null) : null)) : (""));
        // line 41
        echo "
";
        // line 42
        $context["entity_id"] = 0;
        // line 43
        $context["entity_name"] = "";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 44)) {
            // line 45
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 45) == "Entity") && ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null) == 0))) {
                // line 46
                echo "      ";
                $context["entity_id"] = null;
                // line 47
                echo "   ";
            } else {
                // line 48
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null)))) ? ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 48), "entities_id", [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 48)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null)))) ? ((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 48)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 49
                echo "   ";
            }
            // line 50
            echo "
   ";
            // line 51
            if (Session::isMultiEntitiesMode()) {
                // line 52
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["entities_id"] ?? null) : null));
                // line 53
                echo "   ";
            }
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null)], "method", false, false, false, 56)) {
            // line 57
            echo "<form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
      action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
   <div id=\"massive_container_";
            // line 59
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
</form>

<form name=\"asset_form\" method=\"post\" action=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
            echo "\" />
";
        }
        // line 66
        echo "   <div id=\"mainformtable\">
      ";
        // line 67
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["template_name"] ?? null) : null));
        // line 68
        echo "      ";
        if (((($context["withtemplate"] ?? null) == 2) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 68))) {
            // line 69
            echo "         <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
         ";
            // line 70
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
            // line 71
            echo "      ";
        } elseif ((($context["withtemplate"] ?? null) == 1)) {
            // line 72
            echo "         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
         <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            // line 73
            echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
            echo "\"
                name=\"template_name\" id=\"textfield_template_name";
            // line 74
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                value=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
      ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 76
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 76)) {
            // line 77
            echo "         ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
            // line 78
            echo "      ";
        } else {
            // line 79
            echo "         ";
            if (((($context["noid"] ?? null) == false) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (twig_length_filter($this->env, ($context["nametype"] ?? null)) == 0)))) {
                // line 80
                echo "            ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["id"] ?? null) : null));
                // line 81
                echo "         ";
            }
            // line 82
            echo "      ";
        }
        // line 83
        echo "
      ";
        // line 84
        if (( !array_key_exists("no_header", $context) || (($context["no_header"] ?? null) == false))) {
            // line 85
            echo "         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2\">
            <h3 class=\"card-title d-flex align-items-center ps-4\">
               ";
            // line 87
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 87);
            // line 88
            echo "               ";
            if ((twig_length_filter($this->env, ($context["icon"] ?? null)) > 0)) {
                // line 89
                echo "                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"";
                // line 90
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-2x\"></i>
                  </div>
               ";
            }
            // line 93
            echo "               <span>
               ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 94) > 0)) {
                // line 95
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
                echo "
               ";
            } else {
                // line 97
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo "
               ";
            }
            // line 99
            echo "               </span>
               ";
            // line 100
            if (($context["header_toolbar"] ?? null)) {
                // line 101
                echo "                  <div class=\"d-inline-block toolbar ms-2\">
                     ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                    // line 103
                    echo "                        ";
                    echo $context["raw_element"];
                    echo "
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                  </div>
               ";
            }
            // line 107
            echo "            </h3>

            ";
            // line 109
            $context["single_actions_ms_auto"] = true;
            // line 110
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 110) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
                // line 111
                echo "               ";
                $context["single_actions_ms_auto"] = false;
                // line 112
                echo "               <span class=\"badge entity-name mx-1 px-2 py-3 ms-auto\" title=\"";
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"ti ti-stack me-2\"></i>
                  ";
                // line 114
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "
               </span>

               ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 117)) {
                    // line 118
                    echo "                  <span class=\"badge is_recursive-toggle mx-1 px-2 py-3\">
                     <label class=\"form-check d-flex align-items-center mb-0\">
                        ";
                    // line 120
                    $context["disabled"] = (($context["canedit"] ?? null) == false);
                    // line 121
                    echo "                        ";
                    $context["comment"] = __("Change visibility in child entities.");
                    // line 122
                    echo "
                        ";
                    // line 123
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                        // line 124
                        echo "                           ";
                        $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                        // line 125
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 126
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => "recursive"], "method", false, false, false, 126)) {
                        // line 127
                        echo "                           ";
                        $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                        // line 128
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 129
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 129)) {
                        // line 130
                        echo "                           ";
                        $context["comment"] = __("Flag change forbidden. Linked items found.");
                        // line 131
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 132
                        echo "                        ";
                    }
                    // line 133
                    echo "
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                              ";
                    // line 135
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 135)) {
                        echo "checked=\"checked\"";
                    }
                    // line 136
                    echo "                              ";
                    if (($context["disabled"] ?? null)) {
                        echo "disabled=\"disabled\"";
                    }
                    echo " />
                        ";
                    // line 137
                    if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 137)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 137))) {
                        // line 138
                        echo "                            ";
                        // line 139
                        echo "                            <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
                        ";
                    }
                    // line 141
                    echo "                        <span class=\"form-check-label mb-0 mx-2\">
                           ";
                    // line 142
                    echo twig_escape_filter($this->env, __("Child entities"), "html", null, true);
                    echo "
                           <i class=\"fas fa-info ms-1\" title=\"";
                    // line 143
                    echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                    echo "\"></i>
                        </span>
                     </label>
                  </span>
               ";
                }
                // line 148
                echo "            ";
            }
            // line 149
            echo "
            ";
            // line 150
            echo twig_include($this->env, $context, "components/form/single-action.html.twig");
            echo "
         </div>
      ";
        }
        // line 153
        echo "
      ";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 157
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 157), "request", [0 => "in_modal"], "method", false, false, false, 157) == true)) {
            // line 158
            echo "      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 158,  376 => 157,  371 => 154,  368 => 153,  362 => 150,  359 => 149,  356 => 148,  348 => 143,  344 => 142,  341 => 141,  337 => 139,  335 => 138,  333 => 137,  326 => 136,  322 => 135,  318 => 133,  315 => 132,  312 => 131,  309 => 130,  306 => 129,  303 => 128,  300 => 127,  297 => 126,  294 => 125,  291 => 124,  289 => 123,  286 => 122,  283 => 121,  281 => 120,  277 => 118,  275 => 117,  269 => 114,  263 => 112,  260 => 111,  257 => 110,  255 => 109,  251 => 107,  247 => 105,  238 => 103,  234 => 102,  231 => 101,  229 => 100,  226 => 99,  220 => 97,  212 => 95,  210 => 94,  207 => 93,  201 => 90,  198 => 89,  195 => 88,  193 => 87,  189 => 85,  187 => 84,  184 => 83,  181 => 82,  178 => 81,  175 => 80,  172 => 79,  169 => 78,  166 => 77,  164 => 76,  160 => 75,  156 => 74,  152 => 73,  149 => 72,  146 => 71,  144 => 70,  139 => 69,  136 => 68,  134 => 67,  131 => 66,  126 => 64,  120 => 63,  114 => 60,  110 => 59,  106 => 58,  99 => 57,  97 => 56,  94 => 55,  90 => 53,  87 => 52,  85 => 51,  82 => 50,  79 => 49,  76 => 48,  73 => 47,  70 => 46,  67 => 45,  65 => 44,  63 => 43,  61 => 42,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\header.html.twig");
    }
}
