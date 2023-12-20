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

/* tt_aero4/template/extension/module/oclayerednavigation/occategoryfilter.twig */
class __TwigTemplate_52814923e5f15dd72d3ea92b6cf5d15c3437d5ffe214711d6afba9af07dd0bf3 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "\t<div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t<div class=\"toolbar toolbar-products toolbar-top\">
\t\t<div class=\"modes\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"toolbar-amount\">
\t\t\t<span>";
            // line 11
            echo ($context["results"] ?? null);
            echo "</span>
\t\t</div>
\t\t<div class=\"sorter\">
\t\t\t<label>";
            // line 14
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 17
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 17) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 18
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 18);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 18);
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 20);
                    echo "</option>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"limiter\">
\t\t\t<label>";
            // line 26
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 29
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 29) == ($context["limit"] ?? null))) {
                    // line 30
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 30);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 30);
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 32);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 32);
                    echo "</option>
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t</select>
\t\t</div>
\t</div>
\t<div class=\"custom-products\">
\t\t<div class=\"row\">
\t\t\t";
            // line 40
            $context["count"] = 1;
            // line 41
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t<div class=\"item ";
                // line 44
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 50)) {
                    echo "<img class=\"img-r\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 50);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" class=\"img-responsive\" />";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 59
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 60
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                // line 61
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 69);
                    echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 74
                    echo ($context["text_buyer"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 76) == $context["i"])) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (("(" . $context["i"]) . "/5):");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83) == $context["i"])) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 91);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 91);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 94)) . "%");
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t
\t\t\t\t\t\t\t\t\t";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 98
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105)) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 110);
                echo "</div>
\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 111
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 111);
                echo "')\"></i><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$(\".product-list .item";
                // line 119
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.product-list .item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t\$('#grid-view').click(function() {
\t\t\t\t\t\t\t\$(\".item";
                // line 121
                echo ($context["count"] ?? null);
                echo " .images-container\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#list-view').click(function() {
\t\t\t\t\t\t\t\$(\".item";
                // line 124
                echo ($context["count"] ?? null);
                echo " .caption\").append(\$('.item";
                echo ($context["count"] ?? null);
                echo " .action-links'));
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t</div>
\t\t\t";
                // line 129
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 130
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t</div>
\t</div>
\t<div class=\"toolbar toolbar-products toolbar-bottom\">
\t\t<div class=\"toolbar-amount\"><span>";
            // line 134
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t<div class=\"pages\">";
            // line 135
            echo ($context["pagination"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 138
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 139
            echo "\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t<div class=\"buttons\">
\t\t<div class=\"pull-right\"><a href=\"";
            // line 141
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_aero4/template/extension/module/oclayerednavigation/occategoryfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 141,  440 => 139,  438 => 138,  432 => 135,  428 => 134,  423 => 131,  417 => 130,  415 => 129,  405 => 124,  397 => 121,  390 => 119,  373 => 111,  368 => 110,  364 => 108,  356 => 106,  353 => 105,  348 => 103,  343 => 102,  337 => 100,  335 => 99,  331 => 98,  328 => 97,  326 => 96,  323 => 95,  317 => 94,  315 => 93,  307 => 91,  302 => 88,  296 => 87,  290 => 85,  287 => 84,  284 => 83,  280 => 82,  276 => 80,  270 => 79,  264 => 77,  261 => 76,  257 => 75,  253 => 74,  250 => 73,  248 => 72,  245 => 71,  237 => 69,  234 => 68,  232 => 67,  219 => 61,  211 => 60,  203 => 59,  200 => 58,  194 => 56,  191 => 55,  185 => 53,  183 => 52,  180 => 51,  170 => 50,  162 => 49,  158 => 48,  151 => 44,  147 => 42,  142 => 41,  140 => 40,  133 => 35,  127 => 34,  119 => 32,  111 => 30,  108 => 29,  104 => 28,  99 => 26,  94 => 23,  88 => 22,  80 => 20,  72 => 18,  69 => 17,  65 => 16,  60 => 14,  54 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero4/template/extension/module/oclayerednavigation/occategoryfilter.twig", "");
    }
}
