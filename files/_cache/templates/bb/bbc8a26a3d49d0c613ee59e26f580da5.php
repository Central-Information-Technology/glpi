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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_b464071dd5957f829cef817898d897da extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 51
        echo "
";
        // line 68
        echo "
";
        // line 80
        echo "

";
        // line 101
        echo "

";
        // line 119
        echo "

";
        // line 142
        echo "

";
        // line 167
        echo "

";
        // line 182
        echo "

";
        // line 261
        echo "
";
        // line 288
        echo "
";
        // line 321
        echo "
";
        // line 355
        echo "
";
        // line 372
        echo "
";
        // line 385
        echo "
";
        // line 390
        echo "
";
        // line 401
        echo "
";
        // line 426
        echo "
";
        // line 454
        echo "
";
        // line 466
        echo "
";
        // line 487
        echo "
";
        // line 509
        echo "
";
        // line 530
        echo "
";
        // line 550
        echo "
";
        // line 573
        echo "
";
        // line 584
        echo "
";
        // line 604
        echo "
";
        // line 625
        echo "
";
        // line 657
        echo "
";
        // line 668
        echo "
";
        // line 695
        echo "
";
        // line 706
        echo "
";
        // line 716
        echo "

";
        // line 734
        echo "

";
        // line 793
        echo "

";
        // line 824
        echo "

";
    }

    // line 32
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "   ";
            $context["margins"] = "mt-3";
            // line 34
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 35
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 36
                echo "   ";
            }
            // line 37
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 38
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 40
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 41
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 42
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 43
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 46
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 53
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 54
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 55
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 57
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 58
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 59
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 60
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 63
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 69
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 70
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 70)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 70)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 71
            echo "   ";
            $context["tplmark"] = "";
            // line 72
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 72)) {
                echo " ";
                // line 73
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 73);
                // line 74
                echo "   ";
            }
            // line 75
            echo "   ";
            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (($context["withtemplate"] ?? null) == 2), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 75), 4 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null)]);
            // line 76
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 77
            echo "
   ";
            // line 78
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 78, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 83
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 84
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 84), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 84)) {
                // line 85
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 86
                echo "   ";
            }
            // line 87
            echo "
   ";
            // line 88
            ob_start(function () { return ''; });
            // line 89
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 89), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 92
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, ("maxlenght=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 92)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 93
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 93)) ? ("readonly") : (""));
            echo "
             ";
            // line 94
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 94)) ? ("disabled") : (""));
            echo "
             ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 95)) ? ("multiple") : (""));
            echo " ";
            // line 96
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 96)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            echo "
   ";
            // line 99
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 99, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 103
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 104
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 104), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 104)) {
                // line 105
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 106
                echo "   ";
            }
            // line 107
            echo "
   ";
            // line 108
            ob_start(function () { return ''; });
            // line 109
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 111
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 112
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 112)) ? ("readonly") : (""));
            echo "
             ";
            // line 113
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 113)) ? ("required") : (""));
            echo "
             ";
            // line 114
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 114)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            echo "
   ";
            // line 117
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 117, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 122), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 122)) {
                // line 123
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 124
                echo "   ";
            }
            // line 125
            echo "
   ";
            // line 126
            ob_start(function () { return ''; });
            // line 127
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 128
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
         <input type=\"checkbox\" name=\"";
            // line 129
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 130
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 131
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 131)) ? ("readonly") : (""));
            echo "
                ";
            // line 132
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 132)) ? ("required") : (""));
            echo "
                ";
            // line 133
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 133)) ? ("disabled") : (""));
            echo " />
         ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 134)) {
                // line 135
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 135), "html", null, true);
                echo "</span>
         ";
            }
            // line 137
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo "
   ";
            // line 140
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 140, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 144
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 145
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 145) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 145), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 145)))) {
                // line 146
                echo "      ";
                // line 147
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 148
                echo "   ";
            }
            // line 149
            echo "
   ";
            // line 150
            if ((($context["value"] ?? null) == "")) {
                // line 151
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 151)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 151)) : (0));
                // line 152
                echo "   ";
            }
            // line 153
            echo "
   ";
            // line 154
            ob_start(function () { return ''; });
            // line 155
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 157
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 158
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 158)) ? ("readonly") : (""));
            echo "
         ";
            // line 159
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 159)) ? ("disabled") : (""));
            echo "
         ";
            // line 160
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 160)) ? ("required") : (""));
            echo "
         ";
            // line 161
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 161)) ? (print (twig_escape_filter($this->env, ("min=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 161)), "html", null, true))) : (print ("")));
            echo "
         ";
            // line 162
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 162)) ? (print (twig_escape_filter($this->env, ("max=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 162)), "html", null, true))) : (print ("")));
            echo "
         ";
            // line 163
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 163)) ? (print (twig_escape_filter($this->env, ("step=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 163)), "html", null, true))) : (print ("")));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 165, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 169
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 170
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 171
            echo "   ";
            ob_start(function () { return ''; });
            // line 172
            echo "      <span class=\"form-control\" readonly>
         ";
            // line 173
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 174
                echo "            &nbsp;
         ";
            } else {
                // line 176
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 178
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 180
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 180, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 184
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 185
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "uploads" => []],             // line 191
($context["options"] ?? null));
            // line 192
            echo "
   ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 193), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 193)) {
                // line 194
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 195
                echo "   ";
            }
            // line 196
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 196)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 196)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 196))));
            // line 197
            echo "
   ";
            // line 198
            ob_start(function () { return ''; });
            // line 199
            echo "      ";
            // line 200
            echo "      <textarea class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 202
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 202)) ? ("disabled") : (""));
            echo "
                ";
            // line 203
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 203)) ? ("readonly") : (""));
            echo "
                ";
            // line 204
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 204)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 204)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 206
            echo "
   ";
            // line 207
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 207)) {
                // line 208
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 209
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 210
($context["options"] ?? null), "rand", [], "any", false, false, false, 210), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 212
($context["options"] ?? null), "disabled", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 212), false)) : (false))]);
                // line 214
                echo "   ";
            }
            // line 215
            echo "
   ";
            // line 216
            $context["add_html"] = "";
            // line 217
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 217) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 217))) {
                // line 218
                echo "      ";
                ob_start(function () { return ''; });
                // line 219
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 220
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 222
($context["options"] ?? null), "uploads", [], "any", false, false, false, 222), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 223
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 223), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 223)]]);
                // line 225
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 226
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 226) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 226)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 226)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 226))) {
                // line 227
                echo "      ";
                ob_start(function () { return ''; });
                // line 228
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 229
($context["id"] ?? null), "name" =>                 // line 230
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 232
($context["options"] ?? null), "uploads", [], "any", false, false, false, 232), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 233
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 233), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 233)]]);
                // line 235
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 236
                echo "   ";
            }
            // line 237
            echo "
   ";
            // line 238
            if ((($context["add_html"] ?? null) != "")) {
                // line 239
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 239)) {
                    // line 240
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 240));
                    // line 241
                    echo "      ";
                }
                // line 242
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 243
                echo "   ";
            }
            // line 244
            echo "
   ";
            // line 245
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 245, $context, $this->getSourceContext());
            echo "
   ";
            // line 246
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 246) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 247
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 251
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 252
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
                echo ",
                  '";
                // line 253
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 262
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 263
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 263), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 263)) {
                // line 264
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 265
                echo "   ";
            }
            // line 266
            echo "
   ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 267)) {
                // line 268
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 269
                    echo "         ";
                    $context["class"] = "warn";
                    // line 270
                    echo "      ";
                }
                // line 271
                echo "   ";
            } else {
                // line 272
                echo "      ";
                $context["class"] = "";
                // line 273
                echo "   ";
            }
            // line 274
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 275), "html", null, true);
            echo "\">
      ";
            // line 277
            echo "      ";
            // line 278
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 279
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 280
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 280)) ? ("required") : (""));
            echo "
             ";
            // line 281
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 281)) ? ("readonly") : (""));
            echo "
             ";
            // line 282
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 282)) ? ("disabled") : (""));
            echo " />
      ";
            // line 283
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 283)) {
                // line 284
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 286
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 289
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 290
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 291
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 291))], ($context["options"] ?? null));
            // line 292
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 293
            echo "
   ";
            // line 294
            ob_start(function () { return ''; });
            // line 295
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 295, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 298), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 305
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 305)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 306
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 306)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 307
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["locale"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 318
            echo "
   ";
            // line 319
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 319, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 322
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 323
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 324
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 324))], ($context["options"] ?? null));
            // line 325
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 326
            echo "
   ";
            // line 327
            ob_start(function () { return ''; });
            // line 328
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 328, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 331), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 339
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 339)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 340
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 340)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 341
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 352
            echo "
   ";
            // line 353
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 353, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 356
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 357
            echo "   ";
            ob_start(function () { return ''; });
            // line 358
            echo "      <input data-jscolor=\"\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 360
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 361
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 361)) ? ("readonly") : (""));
            echo "
         ";
            // line 362
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 362)) ? ("disabled") : (""));
            echo "
         ";
            // line 363
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 363)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
         jscolor.install();
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 370
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 370, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 373
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 374
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password"], ($context["options"] ?? null));
            // line 375
            echo "   ";
            ob_start(function () { return ''; });
            // line 376
            echo "      <input type=\"password\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 378
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 379
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 379)) ? ("readonly") : (""));
            echo "
         ";
            // line 380
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 380)) ? ("disabled") : (""));
            echo "
         ";
            // line 381
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 381)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 383
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 383, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 386
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 387
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 388
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 388, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 391
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 392
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 394
($context["name"] ?? null)],             // line 395
($context["options"] ?? null));
            // line 396
            echo "   ";
            ob_start(function () { return ''; });
            // line 397
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
            // line 398
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 399
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 399, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 402
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 403
            echo "   ";
            ob_start(function () { return ''; });
            // line 404
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 405
            $context["clearable"] = (($__internal_compile_7 = ($context["options"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["clearable"] ?? null) : null);
            // line 406
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 406) &&  !(null === (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["url"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)) : (null));
            // line 407
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 408
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 409
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]), "html", null, true);
                echo ">
         ";
            }
            // line 411
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]), "html", null, true);
            echo " />
         ";
            // line 412
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 413
                echo "            </a>
         ";
            }
            // line 415
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 416
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 417
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 418
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 422
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 424
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 424, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 427
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 428
            echo "   ";
            ob_start(function () { return ''; });
            // line 429
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 430
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 431
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 432
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_10 =                 // line 435
($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["clearable"] ?? null) : null), "no_label" => true]], 432, $context, $this->getSourceContext());
                // line 437
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            echo "      </div>
      ";
            // line 441
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 441, $context, $this->getSourceContext());
            // line 444
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 446
            echo "
   ";
            // line 447
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 447)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 447)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 447))));
            // line 448
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 448, $context, $this->getSourceContext());
            echo "
   ";
            // line 449
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 449, $context, $this->getSourceContext());
            // line 452
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 455
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 456
            echo "   ";
            ob_start(function () { return ''; });
            // line 457
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 459
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 460
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 460)) ? ("readonly") : (""));
            echo "
         ";
            // line 461
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 461)) ? ("disabled") : (""));
            echo "
         ";
            // line 462
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 462)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 464
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 464, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 467
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 468
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 469
            echo "
   ";
            // line 470
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 470)) {
                // line 471
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 472
                echo "   ";
            }
            // line 473
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 473), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 473)) {
                // line 474
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 475
                echo "   ";
            }
            // line 476
            echo "
   ";
            // line 477
            ob_start(function () { return ''; });
            // line 478
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 479
($context["value"] ?? null), "rand" =>             // line 480
($context["rand"] ?? null), "width" => "100%"],             // line 482
($context["options"] ?? null))]);
            // line 483
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 484
            echo "
   ";
            // line 485
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 485))])], 485, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 488
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 489
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 490
            echo "
   ";
            // line 491
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 491)) {
                // line 492
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 493
                echo "   ";
            }
            // line 494
            echo "
   ";
            // line 495
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 495), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 495)) {
                // line 496
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 497
                echo "   ";
            }
            // line 498
            echo "
   ";
            // line 499
            ob_start(function () { return ''; });
            // line 500
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 501
($context["value"] ?? null)), "rand" =>             // line 502
($context["rand"] ?? null), "width" => "100%"],             // line 504
($context["options"] ?? null))]);
            // line 505
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 506
            echo "
   ";
            // line 507
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 507))])], 507, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 510
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 511
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 512
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 512), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 512)) {
                // line 513
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 514
                echo "   ";
            }
            // line 515
            echo "
   ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 516)) {
                // line 517
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 518
                echo "   ";
            }
            // line 519
            echo "
   ";
            // line 520
            ob_start(function () { return ''; });
            // line 521
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 522
($context["value"] ?? null), "rand" =>             // line 523
($context["rand"] ?? null), "width" => "100%"],             // line 525
($context["options"] ?? null))]);
            // line 526
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 527
            echo "
   ";
            // line 528
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 528))])], 528, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 531
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 532
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 533
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 533), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 533)) {
                // line 534
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 535
                echo "   ";
            }
            // line 536
            echo "
   ";
            // line 537
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 537)) {
                // line 538
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 539
                echo "   ";
            }
            // line 540
            echo "
   ";
            // line 541
            ob_start(function () { return ''; });
            // line 542
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 543
($context["rand"] ?? null), "width" => "100%"],             // line 545
($context["options"] ?? null))]);
            // line 546
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 547
            echo "
   ";
            // line 548
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 548))])], 548, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 551
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 552
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 553
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 553), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 553)) {
                // line 554
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 555
                echo "   ";
            }
            // line 556
            echo "
   ";
            // line 557
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 557)) {
                // line 558
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 559
                echo "   ";
            }
            // line 560
            echo "
   ";
            // line 561
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 561)) ? (_twig_default_filter((($__internal_compile_11 = ($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["types"] ?? null) : null), [])) : ([]));
            // line 562
            echo "
   ";
            // line 563
            ob_start(function () { return ''; });
            // line 564
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 565
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 567
($context["value"] ?? null)],             // line 568
($context["options"] ?? null))]);
            // line 569
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 570
            echo "
   ";
            // line 571
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 571))])], 571, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 574
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 575
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 577
($context["options"] ?? null));
            // line 578
            echo "
   ";
            // line 579
            ob_start(function () { return ''; });
            // line 580
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 581
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 582
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 582))])], 582, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 585
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 586
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 587
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 587), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 587)) {
                // line 588
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 589
                echo "   ";
            }
            // line 590
            echo "
   ";
            // line 591
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 591)) {
                // line 592
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 593
                echo "   ";
            }
            // line 594
            echo "
   ";
            // line 595
            ob_start(function () { return ''; });
            // line 596
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 597
($context["rand"] ?? null), "width" => "100%"],             // line 599
($context["options"] ?? null))]);
            // line 600
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 601
            echo "
   ";
            // line 602
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 602))])], 602, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 605
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 606
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 607
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 607), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 607)) {
                // line 608
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 609
                echo "   ";
            }
            // line 610
            echo "
   ";
            // line 611
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 611)) {
                // line 612
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 613
                echo "   ";
            }
            // line 614
            echo "
   ";
            // line 615
            ob_start(function () { return ''; });
            // line 616
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 617
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 619
($context["value"] ?? null)],             // line 620
($context["options"] ?? null))]);
            // line 621
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 622
            echo "
   ";
            // line 623
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 623))])], 623, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 626
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 627
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 627)) {
                // line 628
                echo "      ";
                // line 629
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 630
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 633
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 634
                echo "   ";
            }
            // line 635
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 636
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 636), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 636)) {
                // line 637
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 638
                echo "   ";
            }
            // line 639
            echo "
   ";
            // line 640
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 640)) {
                // line 641
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 642
                echo "   ";
            }
            // line 643
            echo "
   ";
            // line 644
            ob_start(function () { return ''; });
            // line 645
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 646
($context["name"] ?? null), "value" =>             // line 647
($context["value"] ?? null), "rand" =>             // line 648
($context["rand"] ?? null), "width" => "100%"],             // line 650
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 652
            echo "
   ";
            // line 653
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 654
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 654))])], 654, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 658
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 659
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 660
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 661
                echo "   ";
            }
            // line 662
            echo "
   ";
            // line 663
            ob_start(function () { return ''; });
            // line 664
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 666
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 666, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 669
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 670
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => ""],             // line 675
($context["options"] ?? null));
            // line 676
            echo "
   ";
            // line 677
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 677)) {
                // line 678
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 680
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 680)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 680)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 680))));
                // line 681
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 682
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 682)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 682)) : (""));
                // line 683
                echo "
      ";
                // line 684
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 684) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 684), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 684))) {
                    // line 685
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 685)) {
                        // line 686
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 686, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 687
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 687)) {
                        // line 688
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 688, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 690
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 690, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 692
                    echo "      ";
                }
                // line 693
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 696
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 697
            echo "   ";
            ob_start(function () { return ''; });
            // line 698
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 699
            if ( !(null === ($context["value"] ?? null))) {
                // line 700
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 702
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 704
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 704))])], 704, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 707
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 708
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 709
            echo "
   ";
            // line 710
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 710)) {
                // line 711
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 711, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 713
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 713, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 718
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 719
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 722
($context["options"] ?? null));
            // line 723
            echo "
   ";
            // line 724
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 724) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 724)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 724)) : ("col-12 col-sm-6"));
            // line 725
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 725)) {
                // line 726
                echo "      ";
                $context["class"] = "col-12";
                // line 727
                echo "   ";
            }
            // line 728
            echo "
   <div class=\"";
            // line 729
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 729), "html", null, true);
            echo "\">
      ";
            // line 730
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 731
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 736
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 737
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 748
($context["options"] ?? null));
            // line 749
            echo "
   ";
            // line 750
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 750)) {
                // line 751
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 754
                echo "
      ";
                // line 755
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 755)) {
                    // line 756
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 760
                    echo "      ";
                }
                // line 761
                echo "   ";
            }
            // line 762
            echo "
   ";
            // line 763
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 763)) {
                // line 764
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 768
                echo "   ";
            }
            // line 769
            echo "
   ";
            // line 770
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 770)) {
                // line 771
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 772
($context["options"] ?? null), "label_class", [], "any", false, false, false, 772) . " text-xxl-end")]);
                // line 774
                echo "   ";
            }
            // line 775
            echo "
   ";
            // line 776
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 776))) {
                // line 777
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 777)]);
                // line 778
                echo "   ";
            } else {
                // line 779
                echo "      ";
                $context["extra_attribs"] = "";
                // line 780
                echo "   ";
            }
            // line 781
            echo "
   <div class=\"form-field row ";
            // line 782
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 782), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 782), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 782), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 783
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 783))], 783, $context, $this->getSourceContext());
            echo "
      ";
            // line 784
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 784)) {
                // line 785
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 786
                echo "      ";
            }
            // line 787
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 787), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 788
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 789
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 795
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 796
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 802
($context["options"] ?? null));
            // line 803
            echo "
   ";
            // line 804
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 804)) {
                // line 805
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 808
                echo "   ";
            }
            // line 809
            echo "
   ";
            // line 810
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 810))) {
                // line 811
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 811)]);
                // line 812
                echo "   ";
            } else {
                // line 813
                echo "      ";
                $context["extra_attribs"] = "";
                // line 814
                echo "   ";
            }
            // line 815
            echo "
   <div class=\"form-field ";
            // line 816
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 816), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 816), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 816), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 817
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 817))], 817, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 818
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 818), "html", null, true);
            echo " field-container\">
         ";
            // line 819
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 821
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 826
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 827
            echo "   ";
            $context["required_mark"] = "";
            // line 828
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 828), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 828)], "method", false, false, false, 828) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 828))) {
                // line 829
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 830
                echo "   ";
            }
            // line 831
            echo "
   ";
            // line 832
            $context["helper"] = "";
            // line 833
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 833)) {
                // line 834
                echo "      ";
                ob_start(function () { return ''; });
                // line 835
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 836
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 836), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 840
                echo "   ";
            }
            // line 841
            echo "
   <label class=\"";
            // line 842
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 843
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 844
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 845
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2732 => 845,  2728 => 844,  2724 => 843,  2718 => 842,  2715 => 841,  2712 => 840,  2705 => 836,  2702 => 835,  2699 => 834,  2696 => 833,  2694 => 832,  2691 => 831,  2688 => 830,  2685 => 829,  2682 => 828,  2679 => 827,  2663 => 826,  2651 => 821,  2646 => 819,  2642 => 818,  2638 => 817,  2628 => 816,  2625 => 815,  2622 => 814,  2619 => 813,  2616 => 812,  2613 => 811,  2611 => 810,  2608 => 809,  2605 => 808,  2602 => 805,  2600 => 804,  2597 => 803,  2595 => 802,  2593 => 796,  2576 => 795,  2563 => 789,  2559 => 788,  2552 => 787,  2549 => 786,  2546 => 785,  2544 => 784,  2540 => 783,  2530 => 782,  2527 => 781,  2524 => 780,  2521 => 779,  2518 => 778,  2515 => 777,  2513 => 776,  2510 => 775,  2507 => 774,  2505 => 772,  2503 => 771,  2501 => 770,  2498 => 769,  2495 => 768,  2492 => 764,  2490 => 763,  2487 => 762,  2484 => 761,  2481 => 760,  2478 => 756,  2476 => 755,  2473 => 754,  2470 => 751,  2468 => 750,  2465 => 749,  2463 => 748,  2461 => 737,  2444 => 736,  2432 => 731,  2428 => 730,  2422 => 729,  2419 => 728,  2416 => 727,  2413 => 726,  2410 => 725,  2408 => 724,  2405 => 723,  2403 => 722,  2401 => 719,  2385 => 718,  2372 => 713,  2366 => 711,  2364 => 710,  2361 => 709,  2358 => 708,  2345 => 707,  2333 => 704,  2329 => 702,  2323 => 700,  2321 => 699,  2316 => 698,  2313 => 697,  2297 => 696,  2287 => 693,  2284 => 692,  2278 => 690,  2272 => 688,  2270 => 687,  2265 => 686,  2262 => 685,  2260 => 684,  2257 => 683,  2254 => 682,  2251 => 681,  2248 => 680,  2242 => 678,  2240 => 677,  2237 => 676,  2235 => 675,  2233 => 670,  2217 => 669,  2205 => 666,  2199 => 664,  2197 => 663,  2194 => 662,  2191 => 661,  2188 => 660,  2185 => 659,  2169 => 658,  2156 => 654,  2154 => 653,  2151 => 652,  2146 => 650,  2145 => 648,  2144 => 647,  2143 => 646,  2141 => 645,  2139 => 644,  2136 => 643,  2133 => 642,  2130 => 641,  2128 => 640,  2125 => 639,  2122 => 638,  2119 => 637,  2116 => 636,  2113 => 635,  2110 => 634,  2107 => 633,  2101 => 630,  2098 => 629,  2096 => 628,  2093 => 627,  2076 => 626,  2065 => 623,  2062 => 622,  2059 => 621,  2057 => 620,  2056 => 619,  2055 => 617,  2053 => 616,  2051 => 615,  2048 => 614,  2045 => 613,  2042 => 612,  2040 => 611,  2037 => 610,  2034 => 609,  2031 => 608,  2028 => 607,  2025 => 606,  2009 => 605,  1998 => 602,  1995 => 601,  1992 => 600,  1990 => 599,  1989 => 597,  1987 => 596,  1985 => 595,  1982 => 594,  1979 => 593,  1976 => 592,  1974 => 591,  1971 => 590,  1968 => 589,  1965 => 588,  1962 => 587,  1959 => 586,  1943 => 585,  1931 => 582,  1928 => 581,  1925 => 580,  1923 => 579,  1920 => 578,  1918 => 577,  1916 => 575,  1901 => 574,  1890 => 571,  1887 => 570,  1884 => 569,  1882 => 568,  1881 => 567,  1880 => 565,  1878 => 564,  1876 => 563,  1873 => 562,  1871 => 561,  1868 => 560,  1865 => 559,  1862 => 558,  1860 => 557,  1857 => 556,  1854 => 555,  1851 => 554,  1848 => 553,  1845 => 552,  1829 => 551,  1818 => 548,  1815 => 547,  1812 => 546,  1810 => 545,  1809 => 543,  1807 => 542,  1805 => 541,  1802 => 540,  1799 => 539,  1796 => 538,  1794 => 537,  1791 => 536,  1788 => 535,  1785 => 534,  1782 => 533,  1779 => 532,  1763 => 531,  1752 => 528,  1749 => 527,  1746 => 526,  1744 => 525,  1743 => 523,  1742 => 522,  1740 => 521,  1738 => 520,  1735 => 519,  1732 => 518,  1729 => 517,  1727 => 516,  1724 => 515,  1721 => 514,  1718 => 513,  1715 => 512,  1712 => 511,  1696 => 510,  1685 => 507,  1682 => 506,  1679 => 505,  1677 => 504,  1676 => 502,  1675 => 501,  1673 => 500,  1671 => 499,  1668 => 498,  1665 => 497,  1662 => 496,  1660 => 495,  1657 => 494,  1654 => 493,  1651 => 492,  1649 => 491,  1646 => 490,  1643 => 489,  1626 => 488,  1615 => 485,  1612 => 484,  1609 => 483,  1607 => 482,  1606 => 480,  1605 => 479,  1603 => 478,  1601 => 477,  1598 => 476,  1595 => 475,  1592 => 474,  1589 => 473,  1586 => 472,  1583 => 471,  1581 => 470,  1578 => 469,  1575 => 468,  1559 => 467,  1547 => 464,  1542 => 462,  1538 => 461,  1534 => 460,  1528 => 459,  1524 => 457,  1521 => 456,  1505 => 455,  1495 => 452,  1493 => 449,  1488 => 448,  1486 => 447,  1483 => 446,  1479 => 444,  1477 => 441,  1474 => 440,  1466 => 437,  1464 => 435,  1463 => 432,  1460 => 431,  1456 => 430,  1453 => 429,  1450 => 428,  1434 => 427,  1422 => 424,  1418 => 422,  1411 => 418,  1407 => 417,  1402 => 416,  1399 => 415,  1395 => 413,  1393 => 412,  1386 => 411,  1378 => 409,  1375 => 408,  1372 => 407,  1369 => 406,  1367 => 405,  1364 => 404,  1361 => 403,  1344 => 402,  1332 => 399,  1329 => 398,  1326 => 397,  1323 => 396,  1321 => 395,  1320 => 394,  1318 => 392,  1302 => 391,  1290 => 388,  1287 => 387,  1271 => 386,  1259 => 383,  1254 => 381,  1250 => 380,  1246 => 379,  1242 => 378,  1238 => 376,  1235 => 375,  1232 => 374,  1216 => 373,  1204 => 370,  1194 => 363,  1190 => 362,  1186 => 361,  1180 => 360,  1176 => 358,  1173 => 357,  1157 => 356,  1146 => 353,  1143 => 352,  1127 => 341,  1123 => 340,  1119 => 339,  1111 => 334,  1105 => 331,  1098 => 328,  1096 => 327,  1093 => 326,  1090 => 325,  1087 => 324,  1084 => 323,  1068 => 322,  1057 => 319,  1054 => 318,  1038 => 307,  1034 => 306,  1030 => 305,  1023 => 301,  1017 => 298,  1010 => 295,  1008 => 294,  1005 => 293,  1002 => 292,  999 => 291,  996 => 290,  980 => 289,  970 => 286,  966 => 284,  964 => 283,  960 => 282,  956 => 281,  952 => 280,  946 => 279,  941 => 278,  939 => 277,  935 => 275,  932 => 274,  929 => 273,  926 => 272,  923 => 271,  920 => 270,  917 => 269,  914 => 268,  912 => 267,  909 => 266,  906 => 265,  903 => 264,  900 => 263,  884 => 262,  867 => 253,  863 => 252,  859 => 251,  853 => 247,  851 => 246,  847 => 245,  844 => 244,  841 => 243,  838 => 242,  835 => 241,  832 => 240,  829 => 239,  827 => 238,  824 => 237,  821 => 236,  818 => 235,  816 => 233,  815 => 232,  814 => 230,  813 => 229,  811 => 228,  808 => 227,  805 => 226,  802 => 225,  800 => 223,  799 => 222,  798 => 220,  796 => 219,  793 => 218,  790 => 217,  788 => 216,  785 => 215,  782 => 214,  780 => 212,  779 => 210,  778 => 209,  776 => 208,  774 => 207,  771 => 206,  764 => 204,  760 => 203,  756 => 202,  748 => 200,  746 => 199,  744 => 198,  741 => 197,  738 => 196,  735 => 195,  732 => 194,  730 => 193,  727 => 192,  725 => 191,  723 => 185,  707 => 184,  695 => 180,  691 => 178,  685 => 176,  681 => 174,  679 => 173,  676 => 172,  673 => 171,  670 => 170,  654 => 169,  642 => 165,  637 => 163,  633 => 162,  629 => 161,  625 => 160,  621 => 159,  617 => 158,  611 => 157,  607 => 155,  605 => 154,  602 => 153,  599 => 152,  596 => 151,  594 => 150,  591 => 149,  588 => 148,  585 => 147,  583 => 146,  580 => 145,  564 => 144,  553 => 140,  550 => 139,  546 => 137,  540 => 135,  538 => 134,  534 => 133,  530 => 132,  526 => 131,  522 => 130,  518 => 129,  514 => 128,  511 => 127,  509 => 126,  506 => 125,  503 => 124,  500 => 123,  497 => 122,  481 => 121,  470 => 117,  467 => 116,  462 => 114,  458 => 113,  454 => 112,  450 => 111,  446 => 110,  441 => 109,  439 => 108,  436 => 107,  433 => 106,  430 => 105,  427 => 104,  411 => 103,  400 => 99,  397 => 98,  391 => 96,  388 => 95,  384 => 94,  380 => 93,  376 => 92,  370 => 91,  364 => 89,  362 => 88,  359 => 87,  356 => 86,  353 => 85,  350 => 84,  347 => 83,  331 => 82,  320 => 78,  317 => 77,  314 => 76,  311 => 75,  308 => 74,  305 => 73,  301 => 72,  298 => 71,  295 => 70,  278 => 69,  263 => 63,  257 => 60,  254 => 59,  252 => 58,  248 => 57,  243 => 55,  240 => 54,  237 => 53,  223 => 52,  208 => 46,  202 => 43,  199 => 42,  197 => 41,  193 => 40,  188 => 38,  185 => 37,  182 => 36,  179 => 35,  176 => 34,  173 => 33,  158 => 32,  152 => 824,  148 => 793,  144 => 734,  140 => 716,  137 => 706,  134 => 695,  131 => 668,  128 => 657,  125 => 625,  122 => 604,  119 => 584,  116 => 573,  113 => 550,  110 => 530,  107 => 509,  104 => 487,  101 => 466,  98 => 454,  95 => 426,  92 => 401,  89 => 390,  86 => 385,  83 => 372,  80 => 355,  77 => 321,  74 => 288,  71 => 261,  67 => 182,  63 => 167,  59 => 142,  55 => 119,  51 => 101,  47 => 80,  44 => 68,  41 => 51,  38 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\fields_macros.html.twig");
    }
}
