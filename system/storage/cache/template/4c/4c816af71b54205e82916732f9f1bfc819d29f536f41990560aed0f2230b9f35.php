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

/* tt_aero4/template/product/ocquickview/product.twig */
class __TwigTemplate_f703afc3009792b1fcb8e13064bc47b4f2d802fc8e9fe620bbe3a6b0ec3effee extends \Twig\Template
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
        echo "<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
        <div id=\"content\" class=\"product-quickview\">
            <div class=\"row\">
\t\t\t\t\t <div class=\"col-sm-6 block-1 owl-style2\"> 
\t\t\t\t\t\t";
        // line 8
        if (($context["thumb"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t\t\t<div class=\"thumbnails\">
\t\t\t\t\t\t\t\t<a class=\"thumbnail\" title=\"";
            // line 10
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<img data-zoom-image=\"";
            // line 11
            echo ($context["popup"] ?? null);
            echo "\" src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t";
            // line 14
            if (($context["images"] ?? null)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<div class=\"image-additional-container owl-style3\">
\t\t\t\t\t\t\t\t\t<div id=\"gallery_02\" class=\"thumbnails-additional owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail current-additional\" data-image=\"";
                // line 17
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"  title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 18
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 22);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t</div><!-- block-1 -->
\t\t\t\t\t<div class=\"col-sm-6 block-2 product-info-main\">
\t\t\t\t\t\t<h1 class=\"product-name\">";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t";
        // line 32
        if (($context["review_status"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<span>";
            // line 34
            echo ($context["text_buyer"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) == $context["i"])) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo (("(" . $context["i"]) . "/5):");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) == $context["i"])) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class_r"] = ("rating" . $context["i"]);
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo ($context["class_r"] ?? null);
                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t";
        if (($context["rate_special"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t\t<p class=\"rate-special\">";
            echo (("-" . ($context["rate_special"] ?? null)) . "%");
            echo "</p>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t
\t\t\t\t\t\t";
        // line 54
        if (($context["price"] ?? null)) {
            // line 55
            echo "\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 56
                echo "\t\t\t\t\t\t\t<li class=\"price-box box-regular\">
\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
                // line 58
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t\t<li class=\"price-box box-special\">
\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                // line 63
                echo ($context["special"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                // line 64
                echo ($context["price"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"box-options\">
\t\t\t\t\t\t  ";
        // line 70
        if (($context["price"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 72
            if (($context["tax"] ?? null)) {
                // line 73
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "<span class=\"ex-text\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 76
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 79
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 83);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 83);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 89
        if (($context["manufacturer"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t<li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\"><span class=\"ex-text\">";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_model"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["model"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t\t";
        // line 93
        if (($context["reward"] ?? null)) {
            // line 94
            echo "\t\t\t\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " <span class=\"ex-text\">";
            echo ($context["reward"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"short-des\">";
        // line 99
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t<div id=\"product\"> 
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
        // line 102
        echo ($context["entry_qty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"quantity-box\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 104
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"plus\" value=\"&#43;\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"minus\" value=\"-\" class=\"form-control\" />\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 108
        echo ($context["product_id"] ?? null);
        echo "\" />              
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-cart\" id=\"button-cart\" data-loading-text=\"";
        // line 109
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  class=\"btn btn-default\" title=\"";
        // line 110
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"addWishlist('";
        echo ($context["product_id"] ?? null);
        echo "');\"></button>
\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  class=\"btn btn-default\" title=\"";
        // line 111
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"addCompare('";
        echo ($context["product_id"] ?? null);
        echo "');\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 113
        if (($context["options"] ?? null)) {
            // line 114
            echo "\t\t\t\t\t\t\t<div class=\"option-container\">
\t\t\t\t\t\t\t<h3>";
            // line 115
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 117) == "select")) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 118)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 119);
                    echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 121
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 122));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 123);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 123);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 124
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124)) {
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 125);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 125);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 132) == "radio")) {
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 133)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "\"> 
\t\t\t\t\t\t\t\t\t\t";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 140)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 140);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 140);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 141);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 142
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                            // line 143
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 143);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "checkbox")) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 158);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 159
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 159)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 159);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 159);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 159)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 159);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 159);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 160);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 161
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 161)) {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 162);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 162);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) == "text")) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 171)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 173);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 173);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176) == "textarea")) {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 177)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 179);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "file")) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 189) == "date")) {
                    // line 190
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 190)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 191);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 191);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 193);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "datetime")) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 204);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "time")) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 215);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 226
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
            // line 227
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 230
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 232);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 232);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 238
        echo "\t\t\t\t\t\t\t";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 239
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 240
            echo ($context["text_minimum"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 242
        echo "\t\t\t\t\t\t</div><!-- #product -->
\t\t\t\t\t\t";
        // line 243
        if (($context["tags"] ?? null)) {
            // line 244
            echo "\t\t\t\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 246);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 246);
                    echo "</a>,
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 247
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 247);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 247);
                    echo "</a> ";
                }
                // line 248
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t</div><!-- block-2 -->                    
            </div>            
        </div>
<script type=\"text/javascript\"><!--
    \$('.product-quickview select[name=\\'recurring_id\\'], .product-quickview input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('.product-quickview input[name=\\'product_id\\'], .product-quickview input[name=\\'quantity\\'], .product-quickview select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('.product-quickview #recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                if (json['success']) {
                    \$('.product-quickview #recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.product-quickview #button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('.product-quickview #product input[type=\\'text\\'], .product-quickview #product input[type=\\'hidden\\'], .product-quickview #product input[type=\\'radio\\']:checked, .product-quickview #product input[type=\\'checkbox\\']:checked, .product-quickview #product select, .product-quickview #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('.product-quickview #button-cart').button('loading');
            },
            complete: function() {
                \$('.product-quickview #button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('.product-quickview #input-option' + i.replace('_', '-'));
                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }
                    if (json['error']['recurring']) {
                        \$('.product-quickview select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('#cart > button #cart-total').html(json['total']);
\t\t\t\t\t\$('#cart > button .total-price').html(json['total_price']);
                    \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickTime: false
    });
    \$('.datetime').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: true,
        pickTime: true
    });
    \$('.time').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: false
    });
    \$('.product-quickview button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;
        \$('#form-upload').remove();
        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
        \$('.product-quickview #form-upload input[name=\\'file\\']').trigger('click');
        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }
        timer = setInterval(function() {
            if (\$('.product-quickview #form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);
                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('.product-quickview #form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();
                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }
                        if (json['success']) {
                            alert(json['success']);
                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--   
    function addWishlist(product_id) {
        \$.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
                \$('#wishlist-total .count').html(json['total']);
\t\t\t\t\$('#wishlist-total').attr('title', json['total']);
                \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
    function addCompare(product_id) {
        \$.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('#compare-total').html(json['total']);
                    \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
\tvar thumbnails_owl = \$('.product-quickview .thumbnails-additional');\t
\tthumbnails_owl.on('initialize.owl.carousel initialized.owl.carousel ' +
\t\t'initialize.owl.carousel initialize.owl.carousel ',
\t\tfunction(e) {
\t\t  \$(\".product-quickview #gallery_02 .thumbnail\").show();
\t\t});
\tthumbnails_owl.owlCarousel({
\t\titems: 4,
\t\tnav: false,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 10,
\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],\t\t\t\t
\t});\t
\t\$(\".product-quickview .thumbnails img\").elevateZoom({
\t\tzoomType : \"window\",
\t\tcursor: \"crosshair\",
\t\tgallery:'gallery_02', 
\t\tgalleryActiveClass: \"active\", 
\t\timageCrossfade: true,
\t\tresponsive: true,
\t\tzoomWindowOffetx: 0,
\t\tzoomWindowOffety: 0,
\t});
\tvar thumbnails_additional = \$('.product-quickview .thumbnails-additional .thumbnail');
\tthumbnails_additional.each(function(){
\t\t\$(this).click(function(){
\t\t\tthumbnails_additional.removeClass('current-additional');
\t\t\t\$(this).addClass('current-additional');
\t\t});
\t});
\tvar minimum_qv = ";
        // line 450
        echo ($context["minimum"] ?? null);
        echo ";
\t\$(\".product-quickview #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\".product-quickview #input-quantity\").val(minimum);
\t\t}
\t});
\t  // increase number of product
\tfunction minus_qv(minimum){
\t\tvar currentval = parseInt(\$(\".product-quickview #input-quantity\").val());
\t\t\$(\".product-quickview #input-quantity\").val(currentval-1);
\t\tif(\$(\".product-quickview #input-quantity\").val() <= 0 || \$(\".product-quickview #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\".product-quickview #input-quantity\").val(minimum);
\t\t}
\t  };
\t  // decrease of product
\tfunction plus_qv(){
\t\tvar currentval = parseInt(\$(\".product-quickview #input-quantity\").val());
\t\t\$(\".product-quickview #input-quantity\").val(currentval+1);
\t};
\t\$('.product-quickview #minus').click(function(){
\t\tminus_qv(minimum);
\t});
\t\$('.product-quickview #plus').click(function(){
\t\tplus_qv();
\t});
//--></script>";
    }

    public function getTemplateName()
    {
        return "tt_aero4/template/product/ocquickview/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 450,  876 => 250,  867 => 248,  860 => 247,  850 => 246,  846 => 245,  841 => 244,  839 => 243,  836 => 242,  831 => 240,  828 => 239,  825 => 238,  819 => 234,  808 => 232,  804 => 231,  800 => 230,  794 => 227,  791 => 226,  788 => 225,  784 => 223,  778 => 222,  764 => 215,  757 => 213,  750 => 212,  747 => 211,  733 => 204,  726 => 202,  719 => 201,  716 => 200,  702 => 193,  695 => 191,  688 => 190,  685 => 189,  677 => 186,  669 => 185,  665 => 184,  658 => 183,  655 => 182,  643 => 179,  637 => 178,  630 => 177,  627 => 176,  615 => 173,  609 => 172,  602 => 171,  599 => 170,  594 => 167,  586 => 164,  579 => 162,  577 => 161,  572 => 160,  556 => 159,  550 => 158,  546 => 156,  542 => 155,  538 => 154,  534 => 153,  527 => 152,  524 => 151,  519 => 148,  511 => 145,  504 => 143,  502 => 142,  498 => 141,  480 => 140,  474 => 139,  470 => 137,  466 => 136,  462 => 135,  458 => 134,  451 => 133,  448 => 132,  443 => 129,  436 => 127,  429 => 125,  427 => 124,  420 => 123,  416 => 122,  412 => 121,  406 => 120,  400 => 119,  393 => 118,  390 => 117,  386 => 116,  382 => 115,  379 => 114,  377 => 113,  370 => 111,  364 => 110,  358 => 109,  354 => 108,  347 => 104,  342 => 102,  336 => 99,  327 => 96,  319 => 94,  317 => 93,  310 => 92,  300 => 90,  298 => 89,  295 => 88,  291 => 86,  288 => 85,  277 => 83,  273 => 82,  268 => 79,  265 => 78,  257 => 76,  254 => 75,  246 => 73,  244 => 72,  241 => 71,  239 => 70,  235 => 68,  232 => 67,  226 => 64,  222 => 63,  219 => 62,  212 => 58,  208 => 56,  205 => 55,  203 => 54,  200 => 53,  194 => 52,  191 => 51,  186 => 48,  180 => 47,  174 => 45,  171 => 44,  168 => 43,  164 => 42,  160 => 40,  154 => 39,  148 => 37,  145 => 36,  141 => 35,  137 => 34,  134 => 33,  132 => 32,  128 => 31,  124 => 29,  121 => 28,  116 => 25,  103 => 22,  94 => 21,  90 => 20,  81 => 18,  73 => 17,  69 => 15,  67 => 14,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero4/template/product/ocquickview/product.twig", "");
    }
}
