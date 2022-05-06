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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_ac82505a1a3bb61d42846e83430a9376 extends Template
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
        $context["enctype"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 32)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 33
        $context["new_cls"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 33)) ? ("new-itil-object") : (""));
        // line 34
        echo "
";
        // line 35
        $context["form_path"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 35);
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 36)) {
            // line 37
            echo "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null));
        }
        // line 39
        echo "
";
        // line 40
        if (($context["selfservice"] ?? null)) {
            // line 41
            echo "   ";
            $context["form_path"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/tracking.injector.php");
        }
        // line 43
        echo "
";
        // line 44
        $context["track_changes"] = "true";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 45)) {
            // line 46
            echo "   ";
            $context["track_changes"] = "false";
        }
        // line 48
        echo "
<form method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["form_path"] ?? null), "html", null, true);
        echo "\" enctype=\"";
        echo twig_escape_filter($this->env, ($context["enctype"] ?? null), "html", null, true);
        echo "\"
      data-track-changes=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["track_changes"] ?? null), "html", null, true);
        echo "\" id=\"itil-form\" class=\"";
        echo twig_escape_filter($this->env, ($context["new_cls"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <input type=\"hidden\" name=\"id\" value=\"";
        // line 51
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51), "id", [], "array", true, true, false, 51) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true))) : (print (0)));
        echo "\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 55
        if (array_key_exists("itiltemplate_key", $context)) {
            // line 56
            echo "      <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["itiltemplate_key"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 58
        echo "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 59
            echo "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            echo twig_escape_filter($this->env, ($context["predefined_fields"] ?? null), "html", null, true);
            echo "\" />
   ";
        }
        // line 61
        echo "
   ";
        // line 62
        if (($context["selfservice"] ?? null)) {
            // line 63
            echo "      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
      ";
            // line 65
            echo "   ";
        }
        // line 66
        echo "
   ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 67) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 67))) {
            // line 68
            echo "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 68) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["tickets_id"] ?? null) : null)) : ((($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["_tickets_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 70
        echo "
   ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 71) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 71))) {
            // line 72
            echo "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 72) &&  !(null === (($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["problems_id"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["problems_id"] ?? null) : null)) : ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_problems_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 74
        echo "
   ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 75)) {
            // line 76
            echo "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_from_items_id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_from_items_id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 77
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 77) &&  !(null === (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_from_itemtype"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_from_itemtype"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\" />
   ";
        }
        // line 79
        echo "
   ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 80) && ((($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_promoted_fup_id"] ?? null) : null) > 0))) {
            // line 81
            echo "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_promoted_fup_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 83
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 83) && ((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_promoted_task_id"] ?? null) : null) > 0))) {
            // line 84
            echo "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_promoted_task_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 86
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 86) && ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_skip_promoted_fields"] ?? null) : null) > 0))) {
            // line 87
            echo "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 89
        echo "
   ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 90) && (twig_length_filter($this->env, (($__internal_compile_20 = ($context["params"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_tasktemplates_id"] ?? null) : null)) > 0))) {
            // line 91
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["params"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["_tasktemplates_id"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 92
                echo "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                echo twig_escape_filter($this->env, $context["tasktemplate_id"], "html", null, true);
                echo "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasktemplate_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "   ";
        }
        // line 95
        echo "
   ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 96) && (twig_length_filter($this->env, (($__internal_compile_22 = ($context["params"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_hidden_fields"] ?? null) : null)) > 0))) {
            // line 97
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = ($context["params"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["_hidden_fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 98
                echo "         <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["field_value"], "html", null, true);
                echo "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/mainform_open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 100,  228 => 98,  223 => 97,  221 => 96,  218 => 95,  215 => 94,  206 => 92,  201 => 91,  199 => 90,  196 => 89,  190 => 87,  187 => 86,  181 => 84,  178 => 83,  172 => 81,  170 => 80,  167 => 79,  162 => 77,  157 => 76,  155 => 75,  152 => 74,  146 => 72,  144 => 71,  141 => 70,  135 => 68,  133 => 67,  130 => 66,  127 => 65,  124 => 63,  122 => 62,  119 => 61,  113 => 59,  110 => 58,  102 => 56,  100 => 55,  94 => 52,  90 => 51,  84 => 50,  78 => 49,  75 => 48,  71 => 46,  69 => 45,  67 => 44,  64 => 43,  60 => 41,  58 => 40,  55 => 39,  51 => 37,  49 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/mainform_open.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\mainform_open.html.twig");
    }
}
