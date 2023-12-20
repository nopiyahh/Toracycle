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

/* tt_aero4/template/extension/module/oclayerednavigation/occategory.twig */
class __TwigTemplate_8a8d21d8e2ab7075741e8ee682711a4052e1ea216b48ea19c82c3aa65c455a25 extends \Twig\Template
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
<div class=\"container layer-category\">
    <div class=\"layered-navigation-block\"></div>
    <div class=\"ajax-loader\">
        <img src=\"";
        // line 5
        echo ($context["module_oclayerednavigation_loader_img"] ?? null);
        echo "\" alt=\"\" />
    </div>
    <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
    <div class=\"row\"><div class=\"col-order\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-md-6 col-sm-12";
            // line 15
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-md-9 col-sm-12";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1 class=\"category-name\">";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"category-info\">
            ";
        // line 23
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 24
            echo "\t\t\t\t";
            if (($context["thumb"] ?? null)) {
                // line 25
                echo "\t\t\t\t\t<div class=\"category-image\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t";
            if (($context["description"] ?? null)) {
                // line 28
                echo "\t\t\t\t\t<div class=\"category-des\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 29
            echo " 
\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
            ";
        // line 32
        if (($context["categories"] ?? null)) {
            // line 33
            echo "                <h3 class=\"text-refine\">";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
                ";
            // line 34
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 35
                echo "                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <ul class=\"list-cate\">
                                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 39
                    echo "                                    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                            </ul>
                        </div>
                    </div>
                ";
            } else {
                // line 45
                echo "                    <div class=\"row\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 46
                    echo "                        <div class=\"col-sm-3\">
                            <ul>
                                ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 49
                        echo "                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 49);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                        echo "</a></li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                            </ul>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo " </div>
                    <br />
                ";
            }
            // line 56
            echo "            ";
        }
        // line 57
        echo "            <div class=\"custom-category\">
                ";
        // line 58
        if (($context["products"] ?? null)) {
            // line 59
            echo "                <div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t<div class=\"toolbar toolbar-products toolbar-top\">
\t\t\t\t\t<div class=\"modes\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"toolbar-amount\">
\t\t\t\t\t\t<span>";
            // line 68
            echo ($context["results"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorter\">
\t\t\t\t\t\t<label>";
            // line 71
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 74
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 74) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 75);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 75);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 77);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 77);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"limiter\">
\t\t\t\t\t\t<label>";
            // line 83
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 86
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 86) == ($context["limit"] ?? null))) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 87);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 87);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 89);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 89);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    <div class=\"row\">
\t\t\t\t\t\t";
            // line 97
            $context["count"] = 1;
            // line 98
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"item ";
                // line 101
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 107)) {
                    echo "<img class=\"img-r\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 107);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                    echo "\" class=\"img-responsive\" />";
                }
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 116
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 116);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 117
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                // line 118
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 118);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 126);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 126);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 131
                    echo ($context["text_buyer"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 133) == $context["i"])) {
                            // line 134
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (("(" . $context["i"]) . "/5):");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 140) == $context["i"])) {
                            // line 141
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 144
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 148);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 151)) . "%");
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 152
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 153)) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 155
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 156
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 163);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 167);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 168
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 168);
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
                // line 176
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.product-list .item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t\$('#grid-view').click(function() {
\t\t\t\t\t\t\t\t\t\t\$(\".item";
                // line 178
                echo ($context["count"] ?? null);
                echo " .images-container\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('#list-view').click(function() {
\t\t\t\t\t\t\t\t\t\t\$(\".item";
                // line 181
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 186
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 187
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "\t\t\t\t\t</div>
                </div>
                <div class=\"toolbar toolbar-products toolbar-bottom\">
                    <div class=\"toolbar-amount\"><span>";
            // line 191
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"pages\">";
            // line 192
            echo ($context["pagination"] ?? null);
            echo "</div>
                </div>
                ";
        }
        // line 195
        echo "                ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 196
            echo "                    <p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
            // line 198
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                    </div>
                ";
        }
        // line 201
        echo "            </div>
            ";
        // line 202
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 203
        echo ($context["column_right"] ?? null);
        echo "</div></div>
</div>
<script type=\"text/javascript\">
\$('body').addClass('product-category');
</script>
";
        // line 208
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_aero4/template/extension/module/oclayerednavigation/occategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 208,  638 => 203,  634 => 202,  631 => 201,  623 => 198,  617 => 196,  614 => 195,  608 => 192,  604 => 191,  599 => 188,  593 => 187,  591 => 186,  581 => 181,  573 => 178,  566 => 176,  549 => 168,  544 => 167,  540 => 165,  532 => 163,  529 => 162,  524 => 160,  519 => 159,  513 => 157,  511 => 156,  507 => 155,  504 => 154,  502 => 153,  499 => 152,  493 => 151,  491 => 150,  483 => 148,  478 => 145,  472 => 144,  466 => 142,  463 => 141,  460 => 140,  456 => 139,  452 => 137,  446 => 136,  440 => 134,  437 => 133,  433 => 132,  429 => 131,  426 => 130,  424 => 129,  421 => 128,  413 => 126,  410 => 125,  408 => 124,  395 => 118,  387 => 117,  379 => 116,  376 => 115,  370 => 113,  367 => 112,  361 => 110,  359 => 109,  356 => 108,  346 => 107,  338 => 106,  334 => 105,  327 => 101,  323 => 99,  318 => 98,  316 => 97,  309 => 92,  303 => 91,  295 => 89,  287 => 87,  284 => 86,  280 => 85,  275 => 83,  270 => 80,  264 => 79,  256 => 77,  248 => 75,  245 => 74,  241 => 73,  236 => 71,  230 => 68,  215 => 59,  213 => 58,  210 => 57,  207 => 56,  202 => 53,  194 => 51,  183 => 49,  179 => 48,  175 => 46,  170 => 45,  164 => 41,  153 => 39,  149 => 38,  144 => 35,  142 => 34,  137 => 33,  135 => 32,  132 => 31,  128 => 29,  122 => 28,  119 => 27,  109 => 25,  106 => 24,  104 => 23,  99 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  65 => 11,  54 => 9,  50 => 8,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero4/template/extension/module/oclayerednavigation/occategory.twig", "");
    }
}
