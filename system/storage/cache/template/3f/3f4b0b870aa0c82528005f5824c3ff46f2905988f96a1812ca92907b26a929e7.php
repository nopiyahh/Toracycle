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

/* catalog/octestimonial_form.twig */
class __TwigTemplate_7237afbebd56c3afa0f26b91a27ca8c44bad2090842d7625aa57d31a458f5fb9 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"testimonial_description[customer_name]\"  value=\"";
        // line 32
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["testimonial_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["customer_name"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                            ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 40
        echo ($context["entry_description"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" name=\"testimonial_description[content]\" id=\"content\">";
        // line 42
        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["testimonial_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["content"] ?? null) : null)) {
            echo " ";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["testimonial_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["content"] ?? null) : null);
            echo " ";
        } else {
            echo " ";
        }
        echo "</textarea>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 51
        if (($context["status"] ?? null)) {
            // line 52
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 53
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 55
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 56
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 58
        echo "                            </select>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 64
        echo ($context["entry_image"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">

                            <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 67
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\"  /></a>
                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 68
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 72
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"sort_order\" value=\"";
        // line 74
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 82
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/octestimonial_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 82,  211 => 74,  206 => 72,  199 => 68,  195 => 67,  189 => 64,  181 => 58,  176 => 56,  171 => 55,  166 => 53,  161 => 52,  159 => 51,  153 => 48,  138 => 42,  133 => 40,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/octestimonial_form.twig", "");
    }
}
