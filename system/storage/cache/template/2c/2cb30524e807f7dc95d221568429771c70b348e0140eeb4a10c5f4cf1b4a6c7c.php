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

/* tt_aero1/template/product/search.twig */
class __TwigTemplate_45851f2a01c0dc5f8d4fa5f7bb279df97a90678c0bebf3732a4e8c2613f1d44d extends \Twig\Template
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
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 18
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                // line 28
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 51
        if (($context["sub_category"] ?? null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 61
        if (($context["description"] ?? null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 69
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "                <div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t<div class=\"toolbar toolbar-products\">
\t\t\t\t\t<div class=\"modes\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"toolbar-amount\">
\t\t\t\t\t\t<span>";
            // line 80
            echo ($context["results"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorter\">
\t\t\t\t\t\t<label>";
            // line 83
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 86
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 86) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 87);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 87);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 89);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 89);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"limiter\">
\t\t\t\t\t\t<label>";
            // line 95
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 98
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 98) == ($context["limit"] ?? null))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 99);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 99);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 101);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 101);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    <div class=\"row\">
\t\t\t\t\t\t";
            // line 109
            $context["count"] = 1;
            // line 110
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 111
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"item ";
                // line 113
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 118);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 119)) {
                    echo "<img class=\"img-r\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 119);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                    echo "\" class=\"img-responsive\" />";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 128
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 129
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                // line 130
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 130);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 136
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 138);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 138);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 141
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 143
                    echo ($context["text_buyer"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 145) == $context["i"])) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (("(" . $context["i"]) . "/5):");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 152) == $context["i"])) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 154
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 162
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 162)) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 163)) . "%");
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 165
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 167
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 168
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 168)) {
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 169);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 171);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 172);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 175);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 179);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 180
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 180);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 180);
                echo "')\"></i><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\$(\".product-list .item";
                // line 188
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.product-list .item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t\$('#grid-view').click(function() {
\t\t\t\t\t\t\t\t\t\t\$(\".item";
                // line 190
                echo ($context["count"] ?? null);
                echo " .images-container\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('#list-view').click(function() {
\t\t\t\t\t\t\t\t\t\t\$(\".item";
                // line 193
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 198
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 199
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "\t\t\t\t\t</div>
                </div>
                <div class=\"toolbar toolbar-products toolbar-bottom\">
                    <div class=\"toolbar-amount\"><span>";
            // line 203
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"pages\">";
            // line 204
            echo ($context["pagination"] ?? null);
            echo "</div>
                </div>
                ";
        } else {
            // line 206
            echo "                
\t\t\t\t  <p>";
            // line 207
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t  ";
        }
        // line 209
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 210
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';
\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}
\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}
\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\tif (filter_description) {
\t\turl += '&description=true';
\t}
\tlocation = url;
});
\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});
\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});
\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 247
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_aero1/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 247,  667 => 210,  662 => 209,  657 => 207,  654 => 206,  648 => 204,  644 => 203,  639 => 200,  633 => 199,  631 => 198,  621 => 193,  613 => 190,  606 => 188,  589 => 180,  584 => 179,  580 => 177,  572 => 175,  569 => 174,  564 => 172,  559 => 171,  553 => 169,  551 => 168,  547 => 167,  544 => 166,  542 => 165,  539 => 164,  533 => 163,  531 => 162,  523 => 160,  518 => 157,  512 => 156,  506 => 154,  503 => 153,  500 => 152,  496 => 151,  492 => 149,  486 => 148,  480 => 146,  477 => 145,  473 => 144,  469 => 143,  466 => 142,  464 => 141,  461 => 140,  453 => 138,  450 => 137,  448 => 136,  435 => 130,  427 => 129,  419 => 128,  416 => 127,  410 => 125,  407 => 124,  401 => 122,  399 => 121,  396 => 120,  386 => 119,  378 => 118,  374 => 117,  367 => 113,  363 => 111,  358 => 110,  356 => 109,  349 => 104,  343 => 103,  335 => 101,  327 => 99,  324 => 98,  320 => 97,  315 => 95,  310 => 92,  304 => 91,  296 => 89,  288 => 87,  285 => 86,  281 => 85,  276 => 83,  270 => 80,  255 => 71,  253 => 70,  249 => 69,  245 => 68,  239 => 66,  235 => 64,  231 => 62,  229 => 61,  220 => 56,  216 => 54,  212 => 52,  210 => 51,  204 => 47,  198 => 46,  192 => 45,  186 => 44,  178 => 42,  170 => 40,  167 => 39,  162 => 38,  154 => 36,  146 => 34,  143 => 33,  138 => 32,  130 => 30,  122 => 28,  119 => 27,  115 => 26,  111 => 25,  102 => 21,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero1/template/product/search.twig", "");
    }
}
