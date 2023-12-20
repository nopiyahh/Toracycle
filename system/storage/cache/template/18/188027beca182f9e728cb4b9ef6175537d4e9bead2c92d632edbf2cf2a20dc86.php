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

/* tt_aero4/template/extension/module/octabproducts.twig */
class __TwigTemplate_b7033117ceaa3f6c5fec8b11b5cc9caeefb5f206b4e8a163cd038ddffc547012 extends \Twig\Template
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
        echo "<div class=\"tt_tabsproduct_module";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 1) >= 2)) {
            echo " multi-rows";
        }
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "class", [], "any", false, false, false, 1);
        echo "\" id=\"product_module";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 1);
        echo "\">
\t<div class=\"module-title\">
\t  <h2>
\t\t<span>
\t\t";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 5)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 5)) {
            // line 6
            echo "\t\t  ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 6)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 6);
            echo "
\t\t";
        } else {
            // line 8
            echo "\t\t  ";
            echo ($context["heading_title"] ?? null);
            echo "
\t\t";
        }
        // line 10
        echo "\t\t</span>
\t  </h2>
\t  
  </div>
  ";
        // line 14
        if (($context["module_description"] ?? null)) {
            // line 15
            echo "\t\t<div class=\"module-description\">
\t\t  ";
            // line 16
            echo ($context["module_description"] ?? null);
            echo "
\t\t</div>
\t  ";
        }
        // line 19
        echo "\t  <ul class=\"tab-heading tabs-categorys\">
      ";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["octabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 22
            echo "        <li><a data-toggle=\"pill\" href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 22);
            echo ($context["i"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["octab"], "title", [], "any", false, false, false, 22);
            echo "</a></li>
        ";
            // line 23
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 24
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</ul>
  ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 26)) {
            // line 27
            echo "\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 28
            echo "  ";
        } else {
            // line 29
            echo "\t";
            $context["class_slider"] = "";
            // line 30
            echo "  ";
        }
        // line 31
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 31) == 0)) {
            // line 32
            echo "\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            echo "\t
  ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 33) == 1)) {
            // line 34
            echo "\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 35
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 35) == 2)) {
            // line 36
            echo "\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 37
            echo "  ";
        } else {
            // line 38
            echo "\t";
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 39
            echo "  ";
        }
        // line 40
        echo "  <div class=\"tt-product\">
    <div class=\"tab-content\">
\t\t";
        // line 42
        $context["i"] = 0;
        echo "\t  
\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 43)) {
            // line 44
            echo "\t\t\t";
            $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 44);
            // line 45
            echo "\t\t";
        } else {
            // line 46
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 47
            echo "\t\t";
        }
        echo "\t\t
\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["octabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 49
            echo "\t";
            list($context["count"], $context["count_i"]) =             [0, 0];
            // line 50
            echo "\t";
            list($context["items_numb"], $context["items_gnumb"]) =             [3, 6];
            // line 51
            echo "\t<div class=\"tab-container-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 51);
            echo " ";
            echo ($context["class_slider"] ?? null);
            echo " tab-pane fade\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 51);
            echo ($context["i"] ?? null);
            echo "\">\t\t
\t";
            // line 52
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 52)) > 0)) {
                // line 53
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 54
                    echo "\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 54)) {
                        $context["rows"] = 1;
                    }
                    // line 55
                    echo "            <!-- Grid -->
\t\t\t";
                    // line 56
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 56) == 0)) {
                        echo "\t
\t\t\t";
                        // line 57
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 58
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 58)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 61
                        echo "\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 66
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 67
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 67) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 67))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 67);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                            echo "\" />";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 70
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 70)) {
                            // line 71
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71)) {
                                // line 72
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 75)) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 76)) {
                                // line 77
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 80) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 80)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 80))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 82
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 82)) {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 85)) {
                                // line 86
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 86);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["use_quickview"] ?? null)) {
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 89)) {
                                    // line 90
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "\" onclick=\"ocquickview.ajaxView('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
                                    echo "')\"><span>";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 92
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 95)) {
                            echo "<div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 96
                        echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                        // line 98
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 98)) {
                            // line 99
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 100
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 100);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 100);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 103)) {
                            // line 104
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 105
                            echo ($context["text_buyer"] ?? null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 106
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 107
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 107) == $context["i"])) {
                                    // line 108
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo (("(" . $context["i"]) . "/5):");
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 110
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 111
                            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 113
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 114
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 114) == $context["i"])) {
                                    // line 115
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 116
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 118
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 119
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 122);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                        echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                        // line 123
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 123)) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 124);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                            echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 127)) . "%");
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 130
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130)) {
                                // line 131
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 132
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 133
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 133)) {
                                    // line 134
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 136
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 136);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 137
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 139
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 139)) {
                                    // line 140
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 140);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 142
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 146)) {
                                // line 147
                                echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 149
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 155
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 155) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 155))) {
                            // line 156
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 158
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 159
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 159), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 160
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 161
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t //\$('#Countdown";
                            // line 163
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 167
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t\t";
                        // line 168
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 168))))) {
                            // line 169
                            echo "\t\t\t\t</div>
\t\t\t\t";
                        }
                        // line 171
                        echo "            ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 171) == 1)) {
                        // line 172
                        echo "            <!-- List -->
\t\t\t";
                        // line 173
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 174
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 174)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 176
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 177
                        echo "\t\t\t\t<div class=\"product-layout list-style\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 182);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 183) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 183))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 183);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183);
                            echo "\" />";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 184);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 187)) {
                                // line 188
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 191)) {
                            // line 192
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 192)) {
                                // line 193
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 196) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 196)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 196))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 198
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 198)) {
                                // line 199
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 201)) {
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 202);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 204
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["use_quickview"] ?? null)) {
                                // line 205
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 205)) {
                                    // line 206
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "\" onclick=\"ocquickview.ajaxView('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 206);
                                    echo "')\"><span>";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 208
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 209
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 211)) {
                            echo "<div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 211);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 212
                        echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                        // line 214
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 214)) {
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 216);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 216);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 219)) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 221
                            echo ($context["text_buyer"] ?? null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 222
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 223) == $context["i"])) {
                                    // line 224
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo (("(" . $context["i"]) . "/5):");
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 226
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 227
                            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 229
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 230
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 230) == $context["i"])) {
                                    // line 231
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 232
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 235
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 238
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 238);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 238);
                        echo "</a></h4> 
\t\t\t\t\t\t\t\t\t";
                        // line 239
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 239)) {
                            // line 240
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 240);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 242
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 242)) {
                            // line 243
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                            echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 243)) . "%");
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 244
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 245
                        if (($context["use_catalog"] ?? null)) {
                            // line 246
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 246)) {
                                // line 247
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 248
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 249
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 249)) {
                                    // line 250
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 250);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 252
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 252);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 253
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 253);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 255
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 255)) {
                                    // line 256
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 256);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 258
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 260
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 261
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 262
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 262)) {
                                // line 263
                                echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 263);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 265
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 266
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 272
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 272) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 272))) {
                            // line 273
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 275
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 275);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 276
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 277
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 278
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t //\$('#Countdown";
                            // line 280
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 280);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 284
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t\t";
                        // line 285
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 285))))) {
                            // line 286
                            echo "\t\t\t\t</div>
\t\t\t\t";
                        }
                        // line 288
                        echo "            ";
                    } else {
                        // line 289
                        echo "            <!-- other type -->
\t\t\t";
                        // line 290
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 291
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 291)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 293
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 294
                        echo "\t\t\t\t<div class=\"product-layout product-customize  \">
\t\t\t\t\t<div class=\"product-thumb transition \">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 300
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 300);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 301
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 301) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 301))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 301);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 301);
                            echo "\" />";
                        }
                        // line 302
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 302);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 304
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 304)) {
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 305)) {
                                // line 306
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 308
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 309)) {
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 310)) {
                                // line 311
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 314
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 314) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 314)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 314))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 316
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 316)) {
                                // line 317
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 317);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 319
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 319)) {
                                // line 320
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 320);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 322
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["use_quickview"] ?? null)) {
                                // line 323
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 323)) {
                                    // line 324
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "\" onclick=\"ocquickview.ajaxView('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 324);
                                    echo "')\"><span>";
                                    echo ($context["button_quickview"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 326
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 327
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 329
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 329)) {
                            echo "<div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 329);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 330
                        echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                        // line 332
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 332)) {
                            // line 333
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 334
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 334);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 334);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 337
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 337)) {
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 339
                            echo ($context["text_buyer"] ?? null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 340
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 341
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 341) == $context["i"])) {
                                    // line 342
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo (("(" . $context["i"]) . "/5):");
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 344
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 345
                            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 347
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 348
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 348) == $context["i"])) {
                                    // line 349
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 350
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 352
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 353
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 356
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 356);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 356);
                        echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                        // line 357
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 357)) {
                            // line 358
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 358);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 359
                        echo "\t
\t\t\t\t\t\t\t\t\t";
                        // line 360
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 360)) {
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                            echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 361)) . "%");
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 363
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 364
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 364)) {
                                // line 365
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 366
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 367
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 367)) {
                                    // line 368
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 368);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 370
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 370);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 371
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 371);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 373
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 373)) {
                                    // line 374
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 374);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 376
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 378
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 379
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 380
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 380)) {
                                // line 381
                                echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 381);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 383
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 384
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 390
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 390) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 390))) {
                            // line 391
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 393
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 393);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 394
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 394), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 395
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 396
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t//\$('#Countdown";
                            // line 398
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 398);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 402
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t";
                        // line 403
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 403))))) {
                            // line 404
                            echo "\t\t\t\t</div>
\t\t\t";
                        }
                        // line 406
                        echo "\t\t\t";
                    }
                    // line 407
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t\t  \t\t  
\t\t";
            } else {
                // line 409
                echo "\t\t\t<p class=\"text_empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
\t\t";
            }
            // line 411
            echo "        </div>
\t\t";
            // line 412
            $context["i"] = (($context["i"] ?? null) + 1);
            echo "\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "\t\t
    </div>
  </div>
  <div class=\"clearfix\"></div>
</div>
  <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$('a[href=\"#tab-";
        // line 420
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 420);
        echo "0\"]').trigger( \"click\" );
\t  ";
        // line 421
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 421)) {
            // line 422
            echo "      \$(\".tab-container-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 422);
            echo "\").owlCarousel({
\t\titems: ";
            // line 423
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 423);
            echo ",
        loop: ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "loop", [], "any", false, false, false, 424)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        margin: ";
            // line 425
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", true, true, false, 425)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 425);
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
        nav: ";
            // line 426
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "navigation", [], "any", false, false, false, 426)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        dots: ";
            // line 427
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "pagination", [], "any", false, false, false, 427)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplay:  ";
            // line 428
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "auto", [], "any", false, false, false, 428)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplayTimeout: ";
            // line 429
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 429)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 429);
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
        autoplayHoverPause: true,
        autoplaySpeed: ";
            // line 431
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 431)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 431);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        navSpeed: ";
            // line 432
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 432)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 432);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        dotsSpeed: ";
            // line 433
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 433)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 433);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\tlazyLoad: true,
        responsive:{
\t\t\t0:{
\t\t\t\titems: 1,
\t\t\t\tnav: false,
\t\t\t\tdots: false
\t\t\t},
\t\t\t480:{
\t\t\t\titems: ";
            // line 442
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "smobile", [], "any", false, false, false, 442);
            echo ",
\t\t\t\tnav: false,
\t\t\t\tdots: false
\t\t\t},
\t\t\t768:{
\t\t\t\titems: ";
            // line 447
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "mobile", [], "any", false, false, false, 447);
            echo ",
\t\t\t},
\t\t\t992:{
\t\t\t\titems: ";
            // line 450
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "tablet", [], "any", false, false, false, 450);
            echo "
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: ";
            // line 453
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "desktop", [], "any", false, false, false, 453);
            echo "
\t\t\t},
\t\t\t1600:{
\t\t\t\titems: ";
            // line 456
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 456);
            echo "
\t\t\t}
\t\t},
\t\tonInitialized: function() {
\t\t\tvar count = \$(\".tab-container-";
            // line 460
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 460);
            echo " .owl-item.active\").length;
\t\t\tif(count == 1) {
\t\t\t\t\$(\".tab-container-";
            // line 462
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 462);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 463
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 463);
            echo " .owl-item.active\").addClass('first');
\t\t\t} else {
\t\t\t\t\$(\".tab-container-";
            // line 465
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 465);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 466
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 466);
            echo " .owl-item.active:first\").addClass('first');
\t\t\t}
\t\t},
\t\tonTranslated: function() {
\t\t\tvar count = \$(\".tab-container-";
            // line 470
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 470);
            echo " .owl-item.active\").length;
\t\t\tif(count == 1) {
\t\t\t\t\$(\".tab-container-";
            // line 472
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 472);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 473
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 473);
            echo " .owl-item.active\").addClass('first');
\t\t\t} else {
\t\t\t\t\$(\".tab-container-";
            // line 475
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 475);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 476
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 476);
            echo " .owl-item.active:first\").addClass('first');
\t\t\t}
\t\t}
      });
\t\t
\t";
        }
        // line 482
        echo "    });
  </script>";
    }

    public function getTemplateName()
    {
        return "tt_aero4/template/extension/module/octabproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1625 => 482,  1616 => 476,  1612 => 475,  1607 => 473,  1603 => 472,  1598 => 470,  1591 => 466,  1587 => 465,  1582 => 463,  1578 => 462,  1573 => 460,  1566 => 456,  1560 => 453,  1554 => 450,  1548 => 447,  1540 => 442,  1522 => 433,  1512 => 432,  1502 => 431,  1491 => 429,  1483 => 428,  1475 => 427,  1467 => 426,  1457 => 425,  1449 => 424,  1445 => 423,  1440 => 422,  1438 => 421,  1434 => 420,  1425 => 413,  1417 => 412,  1414 => 411,  1408 => 409,  1399 => 407,  1396 => 406,  1392 => 404,  1390 => 403,  1387 => 402,  1378 => 398,  1361 => 396,  1345 => 395,  1331 => 394,  1325 => 393,  1321 => 391,  1319 => 390,  1311 => 384,  1308 => 383,  1298 => 381,  1295 => 380,  1292 => 379,  1289 => 378,  1285 => 376,  1277 => 374,  1274 => 373,  1269 => 371,  1264 => 370,  1258 => 368,  1256 => 367,  1252 => 366,  1249 => 365,  1246 => 364,  1243 => 363,  1237 => 361,  1235 => 360,  1232 => 359,  1226 => 358,  1224 => 357,  1217 => 356,  1212 => 353,  1206 => 352,  1200 => 350,  1197 => 349,  1194 => 348,  1190 => 347,  1186 => 345,  1180 => 344,  1174 => 342,  1171 => 341,  1167 => 340,  1163 => 339,  1160 => 338,  1157 => 337,  1149 => 334,  1146 => 333,  1144 => 332,  1140 => 330,  1131 => 329,  1127 => 327,  1124 => 326,  1114 => 324,  1111 => 323,  1108 => 322,  1098 => 320,  1095 => 319,  1085 => 317,  1083 => 316,  1077 => 314,  1074 => 313,  1068 => 311,  1065 => 310,  1062 => 309,  1059 => 308,  1053 => 306,  1050 => 305,  1048 => 304,  1038 => 302,  1030 => 301,  1026 => 300,  1018 => 294,  1015 => 293,  1007 => 291,  1005 => 290,  1002 => 289,  999 => 288,  995 => 286,  993 => 285,  990 => 284,  981 => 280,  964 => 278,  948 => 277,  934 => 276,  928 => 275,  924 => 273,  922 => 272,  914 => 266,  911 => 265,  901 => 263,  898 => 262,  895 => 261,  892 => 260,  888 => 258,  880 => 256,  877 => 255,  872 => 253,  867 => 252,  861 => 250,  859 => 249,  855 => 248,  852 => 247,  849 => 246,  847 => 245,  844 => 244,  838 => 243,  835 => 242,  829 => 240,  827 => 239,  820 => 238,  815 => 235,  809 => 234,  803 => 232,  800 => 231,  797 => 230,  793 => 229,  789 => 227,  783 => 226,  777 => 224,  774 => 223,  770 => 222,  766 => 221,  763 => 220,  760 => 219,  752 => 216,  749 => 215,  747 => 214,  743 => 212,  734 => 211,  730 => 209,  727 => 208,  717 => 206,  714 => 205,  711 => 204,  701 => 202,  698 => 201,  688 => 199,  686 => 198,  680 => 196,  677 => 195,  671 => 193,  668 => 192,  665 => 191,  662 => 190,  656 => 188,  653 => 187,  651 => 186,  641 => 184,  633 => 183,  629 => 182,  622 => 177,  619 => 176,  611 => 174,  609 => 173,  606 => 172,  603 => 171,  599 => 169,  597 => 168,  594 => 167,  585 => 163,  568 => 161,  552 => 160,  538 => 159,  532 => 158,  528 => 156,  526 => 155,  519 => 150,  516 => 149,  506 => 147,  503 => 146,  500 => 145,  497 => 144,  493 => 142,  485 => 140,  482 => 139,  477 => 137,  472 => 136,  466 => 134,  464 => 133,  460 => 132,  457 => 131,  454 => 130,  451 => 129,  445 => 127,  442 => 126,  436 => 124,  434 => 123,  427 => 122,  422 => 119,  416 => 118,  410 => 116,  407 => 115,  404 => 114,  400 => 113,  396 => 111,  390 => 110,  384 => 108,  381 => 107,  377 => 106,  373 => 105,  370 => 104,  367 => 103,  359 => 100,  356 => 99,  354 => 98,  350 => 96,  341 => 95,  337 => 93,  334 => 92,  324 => 90,  321 => 89,  318 => 88,  308 => 86,  305 => 85,  295 => 83,  293 => 82,  287 => 80,  284 => 79,  278 => 77,  275 => 76,  272 => 75,  269 => 74,  263 => 72,  260 => 71,  258 => 70,  248 => 68,  240 => 67,  236 => 66,  229 => 61,  226 => 60,  218 => 58,  216 => 57,  212 => 56,  209 => 55,  204 => 54,  199 => 53,  197 => 52,  187 => 51,  184 => 50,  181 => 49,  177 => 48,  172 => 47,  169 => 46,  166 => 45,  163 => 44,  161 => 43,  157 => 42,  153 => 40,  150 => 39,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  135 => 34,  133 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  111 => 26,  108 => 25,  102 => 24,  100 => 23,  92 => 22,  87 => 21,  85 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  65 => 10,  59 => 8,  53 => 6,  51 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero4/template/extension/module/octabproducts.twig", "");
    }
}
