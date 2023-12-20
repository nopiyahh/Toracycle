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

/* catalog/occategorythumbnail_form.twig */
class __TwigTemplate_a634a1711b3048126d15bd1e0b02d566fb0608b82485f817c805899055253d9f extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-occategorythumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-occategorythumbnail\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" disabled=\"disabled\" id=\"input-name\" value=\"";
        // line 31
        echo ($context["category_name"] ?? null);
        echo "\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 35
        echo ($context["entry_thumbnail_image"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"><a href=\"javascript:void(0);\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 36
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                            <input type=\"hidden\" name=\"thumbnail_image\" value=\"";
        // line 37
        echo ($context["thumbnail_image"] ?? null);
        echo "\" id=\"input-thumbnail-image\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 41
        echo ($context["entry_homethumb_image"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"><a href=\"javascript:void(0);\" id=\"home-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 42
        echo ($context["home_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                            <input type=\"hidden\" name=\"homethumb_image\" value=\"";
        // line 43
        echo ($context["homethumb_image"] ?? null);
        echo "\" id=\"input-homethumb-image\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-featured\">";
        // line 47
        echo ($context["entry_featured"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"featured\" id=\"input-featured\" class=\"form-control\">
                            ";
        // line 50
        if (($context["featured"] ?? null)) {
            // line 51
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 52
            echo ($context["text_no"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 54
            echo "                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_no"] ?? null);
            echo "</option>
                            ";
        }
        // line 57
        echo "                            </select>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 65
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/occategorythumbnail_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  181 => 57,  176 => 55,  171 => 54,  166 => 52,  161 => 51,  159 => 50,  153 => 47,  146 => 43,  140 => 42,  136 => 41,  129 => 37,  123 => 36,  119 => 35,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/occategorythumbnail_form.twig", "");
    }
}
