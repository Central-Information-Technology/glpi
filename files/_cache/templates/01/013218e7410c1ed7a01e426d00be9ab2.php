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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_16df57bb8529431ef8b6e3b1db5c54b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 32
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 33
        if ( !array_key_exists("css_files", $context)) {
            // line 34
            echo "   ";
            $context["css_files"] = [0 => ["path" => "public/lib/base.css"], 1 => ["path" => (("css/palettes/" .             // line 36
($context["theme"] ?? null)) . ".scss")]];
            // line 38
            echo "   ";
        }
        // line 40
        if ( !array_key_exists("js_files", $context)) {
            // line 41
            echo "   ";
            $context["js_files"] = [0 => ["path" => "public/lib/base.js"], 1 => ["path" => "js/common.js"]];
        }
        // line 46
        echo "
";
        // line 47
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 51
        $context["style"] = null;
        // line 52
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 53
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 54
            echo "         ";
        }
        // line 55
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 56
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 57
            echo "         ";
        }
        // line 58
        echo "
         <div class=\"container-tight py-6\" ";
        // line 59
        if ( !(null === ($context["style"] ?? null))) {
            echo "style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md\">
               <div class=\"card-body\">
               ";
        // line 67
        $this->displayBlock('content_block', $context, $blocks);
        // line 68
        echo "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 72
        $this->displayBlock('footer_block', $context, $blocks);
        // line 73
        echo "            </div>
         </div>
      </div>
   </div>

   ";
        // line 78
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 79
        echo "</body>
</html>
";
    }

    // line 67
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 78
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 78,  139 => 72,  133 => 67,  127 => 79,  125 => 78,  118 => 73,  116 => 72,  110 => 68,  108 => 67,  93 => 59,  90 => 58,  87 => 57,  84 => 56,  81 => 55,  78 => 54,  75 => 53,  72 => 52,  70 => 51,  63 => 47,  60 => 46,  56 => 41,  54 => 40,  51 => 38,  49 => 36,  47 => 34,  45 => 33,  43 => 32,  40 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\page_card_notlogged.html.twig");
    }
}
