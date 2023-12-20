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

/* tt_aero3/template/common/language.twig */
class __TwigTemplate_0a59c72d037e2450f0f203b73cb9cdbb248ddfc9a579f5add68d47c4d86c9677 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) >= 1)) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">";
            // line 4
            echo ($context["text_language"] ?? null);
            echo ":</span>
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    echo " 
\t\t\t";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo "
\t\t\t<i class=\"fa fa-angle-down\"></i>
      ";
                }
                // line 11
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "      </button>
      <ul class=\"dropdown-menu\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 15
                echo "\t\t ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 15) == ($context["code"] ?? null))) {
                    // line 16
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 16);
                    echo "\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 16);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 16);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 16);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 16);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 16);
                    echo "</button></li>
\t\t";
                } else {
                    // line 18
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 18);
                    echo "\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 18);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 18);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 18);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 18);
                    echo "</button></li>
\t\t";
                }
                // line 20
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 24
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_aero3/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  120 => 21,  114 => 20,  98 => 18,  82 => 16,  79 => 15,  75 => 14,  71 => 12,  65 => 11,  59 => 8,  54 => 7,  50 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero3/template/common/language.twig", "");
    }
}
