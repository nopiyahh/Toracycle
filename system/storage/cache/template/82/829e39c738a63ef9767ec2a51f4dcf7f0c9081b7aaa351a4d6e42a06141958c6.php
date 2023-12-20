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

/* tt_aero4/template/extension/module/ocproduct.twig */
class __TwigTemplate_6a7c471b3b3e0341fe4e4a8ad0ba1697b070010da73dd7ac93b40a5c43cece6c extends \Twig\Template
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
        echo "<div class=\"tt_product_module";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 1) >= 2)) {
            echo " multi-rows";
        }
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "class", [], "any", false, false, false, 1);
        echo "\" id=\"product_module";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 1);
        echo "\">
    <div class=\"module-title\">
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
\t</div>
\t";
        // line 14
        if (($context["module_description"] ?? null)) {
            // line 15
            echo "\t\t<div class=\"module-description\">
\t\t  ";
            // line 16
            echo ($context["module_description"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 19
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 21
            echo "\t";
        } else {
            // line 22
            echo "\t\t";
            $context["class_slider"] = "";
            // line 23
            echo "\t";
        }
        // line 24
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 24) == 0)) {
            // line 25
            echo "\t\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 26
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 26) == 1)) {
            // line 27
            echo "\t\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 28
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 28) == 2)) {
            // line 29
            echo "\t\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 30
            echo "\t";
        } else {
            echo "\t\t
\t\t";
            // line 31
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 32
            echo "\t";
        }
        // line 33
        echo "\t";
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            // line 34
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t";
                $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 35);
                // line 36
                echo "\t\t";
            } else {
                // line 37
                echo "\t\t\t";
                $context["rows"] = 1;
                // line 38
                echo "\t\t";
            }
            // line 39
            echo "\t\t";
            $context["count"] = 0;
            // line 40
            echo "    <div class=\"tt-product ";
            echo ($context["class_slider"] ?? null);
            echo "\">\t
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 42)) {
                    $context["rows"] = 1;
                }
                // line 43
                echo "            <!-- Grid -->
\t\t\t";
                // line 44
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 45
                    echo "\t\t\t<div class=\"row_items ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 45)) {
                        echo ($context["class"] ?? null);
                    }
                    echo "\">
\t\t\t";
                }
                // line 47
                echo "\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 48
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 48) == 0)) {
                    // line 49
                    echo "\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 55
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 55) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 55))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 55);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                        echo "\" />";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 58)) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 61
                        echo " 
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 63)) {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 64)) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 68)) {
                        echo "<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 69) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 69)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 69))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 71)) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 74)) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 75);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 78)) {
                                // line 79
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                    // line 86
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 88);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 88);
                        echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 93
                        echo ($context["text_buyer"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 94
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 95) == $context["i"])) {
                                // line 96
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo (("(" . $context["i"]) . "/5):");
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 101
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102) == $context["i"])) {
                                // line 103
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 104
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 109
                    echo " 
\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 112
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 112)) {
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 113);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 115)) {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                        echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 116)) . "%");
                        echo "</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo "\t
\t\t\t\t\t\t\t\t\t";
                    // line 118
                    if (($context["use_catalog"] ?? null)) {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119)) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 121
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                            // line 122
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 122)) {
                                // line 123
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 123);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 125
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 125);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 126
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 128)) {
                                // line 129
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 129);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"available\">";
                    echo ($context["text_stock"] ?? null);
                    echo "<span class=\"ex-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 134);
                    echo "</span></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 136
                    if (($context["use_catalog"] ?? null)) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 137)) {
                            // line 138
                            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 141
                    echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 145
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 145) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 145))) {
                        // line 146
                        echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 149
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 149), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 150
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
                        // line 151
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
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 158
($context["config_module"] ?? null), "type", [], "any", false, false, false, 158) == 1)) {
                    // line 159
                    echo "            <!-- List -->
            <div class=\"product-layout list-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 165);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 166) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 166))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 166);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 166);
                        echo "\" />";
                    }
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 167);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                    // line 169
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 170)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 175)) {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 179) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 179)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 179))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 181
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 181)) {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 182);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 184)) {
                            // line 185
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 188)) {
                                // line 189
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 189);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 194
                    echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                    // line 196
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 196)) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 198
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 198);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 198);
                        echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 201)) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 203
                        echo ($context["text_buyer"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 204
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 205
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 205) == $context["i"])) {
                                // line 206
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo (("(" . $context["i"]) . "/5):");
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 208
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 211
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 212
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 212) == $context["i"])) {
                                // line 213
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 214
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 216
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 220);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
                    echo "</a></h4> 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 222
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 222)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 223);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 225)) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                        echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 226)) . "%");
                        echo "</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["use_catalog"] ?? null)) {
                        // line 229
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 229)) {
                            // line 230
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 231
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                            // line 232
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 232)) {
                                // line 233
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 233);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 235
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 235);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 236
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 236);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 238
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 238)) {
                                // line 239
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 239);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 241
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 243
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 244
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 244)) {
                        echo "<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 244);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 245
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["use_catalog"] ?? null)) {
                        // line 246
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 246)) {
                            // line 247
                            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 247);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 249
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 250
                    echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 254
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 254) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 254))) {
                        // line 255
                        echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 257);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 258
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 258), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 259
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
                        // line 260
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
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 262);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 266
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                } else {
                    // line 268
                    echo "            <!-- other type -->
            <div class=\"product-layout product-customize \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"caption caption-top\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 277);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 278
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 278) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 278))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 278);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 278);
                        echo "\" />";
                    }
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 279);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 279);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 279);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                    // line 281
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 281)) {
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 282)) {
                            // line 283
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 284
                        echo " 
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 286)) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 287)) {
                            // line 288
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 290
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 291
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 291) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 291)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 291))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 293
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 293)) {
                            // line 294
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 294);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 296
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 297);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 299
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 300)) {
                                // line 301
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 301);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 304
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 306
                    echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                    // line 308
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 308)) {
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 310
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 310);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 310);
                        echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 313
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 313)) {
                        // line 314
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 315
                        echo ($context["text_buyer"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 316
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 317
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 317) == $context["i"])) {
                                // line 318
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo (("(" . $context["i"]) . "/5):");
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 320
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 321
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 323
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 324) == $context["i"])) {
                                // line 325
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 326
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 328
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 329
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 332
                    echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 332);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 332);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 334
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 334)) {
                        // line 335
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 335);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 337)) {
                        // line 338
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"rate-special\">";
                        echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 338)) . "%");
                        echo "</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["use_catalog"] ?? null)) {
                        // line 341
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 341)) {
                            // line 342
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 343
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                            // line 344
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 344)) {
                                // line 345
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 345);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 347
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 347);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 348
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 348);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 350
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 350)) {
                                // line 351
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 351);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 353
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 355
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 356
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 356)) {
                        echo "<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 356);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["use_catalog"] ?? null)) {
                        // line 358
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 358)) {
                            // line 359
                            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 359);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 361
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 362
                    echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 366
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 366) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 366))) {
                        // line 367
                        echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 369
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 369);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 370
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 370), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 371
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
                        // line 372
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
                        // line 374
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 374);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 378
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                }
                // line 380
                echo "\t\t\t\t";
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["products"] ?? null))))) {
                    // line 381
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 383
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
    </div>
\t";
        } else {
            // line 386
            echo "\t\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 388
        echo "\t<div class=\"clearfix\"></div>
</div>
";
        // line 390
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 390)) {
            // line 391
            echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#product_module";
            // line 393
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 393);
            echo " .tt-product\").owlCarousel({
                loop: ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "loop", [], "any", false, false, false, 394)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                margin: ";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", true, true, false, 395)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 395);
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
                nav: ";
            // line 396
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "navigation", [], "any", false, false, false, 396)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                dots: ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "pagination", [], "any", false, false, false, 397)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                autoplay:  ";
            // line 398
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "auto", [], "any", false, false, false, 398)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                autoplayTimeout: ";
            // line 399
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 399)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 399);
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
                autoplayHoverPause: true,
                autoplaySpeed: ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 401)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 401);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
                navSpeed: ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 402)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 402);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
                dotsSpeed: ";
            // line 403
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 403)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 403);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\t\t\tlazyLoad: true,
                responsive:{
\t\t\t\t\t0:{
\t\t\t\t\t\titems: 1,
\t\t\t\t\t\tnav: false,
\t\t\t\t\t\tdots: false
\t\t\t\t\t},
\t\t\t\t\t480:{
\t\t\t\t\t\titems: ";
            // line 412
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "smobile", [], "any", false, false, false, 412);
            echo ",
\t\t\t\t\t\tnav: false,
\t\t\t\t\t\tdots: false
\t\t\t\t\t},
\t\t\t\t\t768:{
\t\t\t\t\t\titems: ";
            // line 417
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "mobile", [], "any", false, false, false, 417);
            echo ",
\t\t\t\t\t},
\t\t\t\t\t992:{
\t\t\t\t\t\titems: ";
            // line 420
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "tablet", [], "any", false, false, false, 420);
            echo "
\t\t\t\t\t},
\t\t\t\t\t1200:{
\t\t\t\t\t\titems: ";
            // line 423
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "desktop", [], "any", false, false, false, 423);
            echo "
\t\t\t\t\t},
\t\t\t\t\t1600:{
\t\t\t\t\t\titems: ";
            // line 426
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 426);
            echo "
\t\t\t\t\t}
                },
\t\t\t\tonInitialized: function() {
\t\t\t\t\tvar count = \$(\"#product_module";
            // line 430
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 430);
            echo " .tt-product .owl-item.active\").length;
\t\t\t\t\tif(count == 1) {
\t\t\t\t\t\t\$(\"#product_module";
            // line 432
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 432);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 433
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 433);
            echo " .tt-product .active\").addClass('first');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\"#product_module";
            // line 435
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 435);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 436
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 436);
            echo " .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tonTranslated: function() {
\t\t\t\t\tvar count = \$(\"#product_module";
            // line 441
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 441);
            echo " .tt-product .owl-item.active\").length;
\t\t\t\t\tif(count == 1) {
\t\t\t\t\t\t\$(\"#product_module";
            // line 443
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 443);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 444
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 444);
            echo " .tt-product .active\").addClass('first');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\"#product_module";
            // line 446
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 446);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 447
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 447);
            echo " .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t}
\t\t\t\t}
            });
\t\t\t
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_aero4/template/extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1510 => 447,  1506 => 446,  1501 => 444,  1497 => 443,  1492 => 441,  1484 => 436,  1480 => 435,  1475 => 433,  1471 => 432,  1466 => 430,  1459 => 426,  1453 => 423,  1447 => 420,  1441 => 417,  1433 => 412,  1415 => 403,  1405 => 402,  1395 => 401,  1384 => 399,  1376 => 398,  1368 => 397,  1360 => 396,  1350 => 395,  1342 => 394,  1338 => 393,  1334 => 391,  1332 => 390,  1328 => 388,  1322 => 386,  1312 => 383,  1308 => 381,  1305 => 380,  1301 => 378,  1292 => 374,  1275 => 372,  1259 => 371,  1245 => 370,  1239 => 369,  1235 => 367,  1233 => 366,  1227 => 362,  1224 => 361,  1214 => 359,  1211 => 358,  1208 => 357,  1199 => 356,  1196 => 355,  1192 => 353,  1184 => 351,  1181 => 350,  1176 => 348,  1171 => 347,  1165 => 345,  1163 => 344,  1159 => 343,  1156 => 342,  1153 => 341,  1150 => 340,  1144 => 338,  1141 => 337,  1135 => 335,  1133 => 334,  1125 => 332,  1120 => 329,  1114 => 328,  1108 => 326,  1105 => 325,  1102 => 324,  1098 => 323,  1094 => 321,  1088 => 320,  1082 => 318,  1079 => 317,  1075 => 316,  1071 => 315,  1068 => 314,  1065 => 313,  1057 => 310,  1054 => 309,  1052 => 308,  1048 => 306,  1044 => 304,  1041 => 303,  1031 => 301,  1028 => 300,  1025 => 299,  1015 => 297,  1012 => 296,  1002 => 294,  1000 => 293,  994 => 291,  991 => 290,  985 => 288,  982 => 287,  979 => 286,  975 => 284,  969 => 283,  966 => 282,  964 => 281,  954 => 279,  946 => 278,  942 => 277,  931 => 268,  927 => 266,  918 => 262,  901 => 260,  885 => 259,  871 => 258,  865 => 257,  861 => 255,  859 => 254,  853 => 250,  850 => 249,  840 => 247,  837 => 246,  834 => 245,  825 => 244,  822 => 243,  818 => 241,  810 => 239,  807 => 238,  802 => 236,  797 => 235,  791 => 233,  789 => 232,  785 => 231,  782 => 230,  779 => 229,  776 => 228,  770 => 226,  767 => 225,  761 => 223,  759 => 222,  751 => 220,  746 => 217,  740 => 216,  734 => 214,  731 => 213,  728 => 212,  724 => 211,  720 => 209,  714 => 208,  708 => 206,  705 => 205,  701 => 204,  697 => 203,  694 => 202,  691 => 201,  683 => 198,  680 => 197,  678 => 196,  674 => 194,  670 => 192,  667 => 191,  657 => 189,  654 => 188,  651 => 187,  641 => 185,  638 => 184,  628 => 182,  626 => 181,  620 => 179,  617 => 178,  611 => 176,  608 => 175,  605 => 174,  602 => 173,  596 => 171,  593 => 170,  591 => 169,  581 => 167,  573 => 166,  569 => 165,  561 => 159,  559 => 158,  556 => 157,  547 => 153,  530 => 151,  514 => 150,  500 => 149,  494 => 148,  490 => 146,  488 => 145,  482 => 141,  479 => 140,  469 => 138,  466 => 137,  464 => 136,  456 => 134,  453 => 133,  449 => 131,  441 => 129,  438 => 128,  433 => 126,  428 => 125,  422 => 123,  420 => 122,  416 => 121,  413 => 120,  410 => 119,  408 => 118,  405 => 117,  399 => 116,  396 => 115,  390 => 113,  388 => 112,  381 => 110,  378 => 109,  373 => 107,  367 => 106,  361 => 104,  358 => 103,  355 => 102,  351 => 101,  347 => 99,  341 => 98,  335 => 96,  332 => 95,  328 => 94,  324 => 93,  321 => 92,  318 => 91,  310 => 88,  307 => 87,  305 => 86,  301 => 84,  297 => 82,  294 => 81,  284 => 79,  281 => 78,  278 => 77,  268 => 75,  265 => 74,  255 => 72,  253 => 71,  247 => 69,  238 => 68,  235 => 67,  229 => 65,  226 => 64,  223 => 63,  219 => 61,  213 => 60,  210 => 59,  208 => 58,  198 => 56,  190 => 55,  186 => 54,  179 => 49,  176 => 48,  173 => 47,  165 => 45,  163 => 44,  160 => 43,  155 => 42,  151 => 41,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  120 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  65 => 10,  59 => 8,  53 => 6,  51 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero4/template/extension/module/ocproduct.twig", "");
    }
}
