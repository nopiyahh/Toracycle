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

/* blog/articlelist_list.twig */
class __TwigTemplate_f69e9c59aef9742973a14a5d6cb69dbe873c5b8dd68ef0de3faf1fd60eafeccc extends \Twig\Template
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
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-article-list\" formaction=\"";
        // line 7
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-article-list').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article-list\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 40
        echo ($context["column_name"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 41
        echo ($context["column_status"] ?? null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 42
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 46
        if (($context["articles_list"] ?? null)) {
            // line 47
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 48
                echo "                                    <tr>
                                        <td class=\"text-center\">
                                            ";
                // line 50
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["list"], "article_list_id", [], "any", false, false, false, 50), ($context["selected"] ?? null))) {
                    // line 51
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["list"], "article_list_id", [], "any", false, false, false, 51);
                    echo "\" checked=\"checked\" />
                                            ";
                } else {
                    // line 53
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["list"], "article_list_id", [], "any", false, false, false, 53);
                    echo "\" />
                                            ";
                }
                // line 55
                echo "                                        <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 55);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["list"], "status", [], "any", false, false, false, 56);
                echo "</td>
                                        <td class=\"text-right\"><a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["list"], "edit", [], "any", false, false, false, 57);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                ";
        } else {
            // line 61
            echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"8\">";
            // line 62
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    </tr>
                                ";
        }
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 70
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 71
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "blog/articlelist_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 77,  214 => 71,  210 => 70,  203 => 65,  197 => 62,  194 => 61,  191 => 60,  180 => 57,  176 => 56,  171 => 55,  165 => 53,  159 => 51,  157 => 50,  153 => 48,  148 => 47,  146 => 46,  139 => 42,  135 => 41,  131 => 40,  122 => 34,  116 => 31,  112 => 29,  104 => 25,  101 => 24,  93 => 20,  91 => 19,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/articlelist_list.twig", "");
    }
}
