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

/* extension/module/ocproduct.twig */
class __TwigTemplate_4519c7d9111d5c64d935970ecdd7b95c7b676d06d558254121258cc03739f623 extends \Twig\Template
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default tt-panel\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal tt-module\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"control-option width-4\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"control-option\">
            <div class=\"switch tt-switch\">
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-on\" value=\"1\" ";
        // line 41
        if ((($context["status"] ?? null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-on\" class=\"switch-label switch-label-on\">";
        // line 42
        echo ($context["text_enabled"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-off\" value=\"0\" ";
        // line 43
        if ((($context["status"] ?? null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-off\" class=\"switch-label switch-label-off\">";
        // line 44
        echo ($context["text_disabled"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
                  </div>
            </div>
          </div>
      
          <div class=\"form-group parent-form\">
            <label class=\"control-label\" for=\"input-option\">";
        // line 51
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"control-option\">
              <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-all\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 54
        if ((($context["option"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-all\" class=\"switch-label switch-label-1\">";
        // line 55
        echo ($context["entry_type_all"] ?? null);
        echo "</label>
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-cate\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 56
        if ((($context["option"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-cate\" class=\"switch-label switch-label-2\">";
        // line 57
        echo ($context["entry_type_cate"] ?? null);
        echo "</label>
                 <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-auto\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 58
        if ((($context["option"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-auto\" class=\"switch-label switch-label-3\">";
        // line 59
        echo ($context["entry_type_auto"] ?? null);
        echo "</label>
                <span class=\"switch-selection\"></span>
              </div>
            </div>
          </div>
       
          ";
        // line 66
        echo "          <div class=\"option-all-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 68
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <div class=\"control-option width-4\">
                <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 70
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 73
            echo "          
                  <div id=\"featured-product";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
            echo "\" class=\"tt-product\">
                  <i class=\"fa fa-times\"></i>
                  <img src=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 76);
            echo "\" alt=\"\" />
                  ";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
            echo "
            
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
            echo "\" />
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>
              </div>
            </div>
          </div>
          ";
        // line 87
        echo "          <div class=\"option-cate-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-cate_id\">";
        // line 89
        echo ($context["entry_cate_select"] ?? null);
        echo "</label>
              <div class=\"control-option width-3\">
                <input type=\"text\" name=\"cate_name\" value=\"";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["cate_ids"] ?? null), "name", [], "any", false, false, false, 91);
        echo "\" placeholder=\"Search category\" id=\"input-cate_name\" class=\"form-control\" /><i class=\"fa fa-times\"></i>
                 <input type=\"hidden\" name=\"cate_id\" value=\"";
        // line 92
        echo twig_get_attribute($this->env, $this->source, ($context["cate_ids"] ?? null), "category_id", [], "any", false, false, false, 92);
        echo "\" id=\"input-cate_id\" />
               </div>
               ";
        // line 94
        if (($context["error_category"] ?? null)) {
            // line 95
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_category"] ?? null);
            echo "</div>
               ";
        }
        // line 97
        echo "             </div>
            <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-productfrom\">";
        // line 99
        echo ($context["entry_pfrom"] ?? null);
        echo "</label>
              <div class=\"control-option width-3\">            
                <div class=\"switch switch-long switch-multi3\">
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-all\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 102
        if ((($context["productfrom"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-all\" class=\"switch-label switch-label-1\">";
        // line 103
        echo ($context["entry_pfrom_all"] ?? null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-select\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 104
        if ((($context["productfrom"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-select\" class=\"switch-label switch-label-2\">";
        // line 105
        echo ($context["entry_pfrom_select"] ?? null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"specific-product\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 106
        if ((($context["productfrom"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"specific-product\" class=\"switch-label switch-label-3\">";
        // line 107
        echo ($context["entry_specificproduct"] ?? null);
        echo "</label>
                  <span class=\"switch-selection\"></span>
                </div>
              </div>
            </div>
            <div class=\"productfrom-all-selected select-options\">
            </div>
            <div class=\"productfrom-select-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-productcate\">";
        // line 116
        echo ($context["entry_product"] ?? null);
        echo "</label>
                <div class=\"control-option width-4\">
                  <input type=\"text\" name=\"productcate\" value=\"\" placeholder=\"";
        // line 118
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-productcate\" class=\"form-control\" />
                  <div id=\"category-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productcates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["productcate"]) {
            // line 121
            echo "                    <div id=\"category-product";
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 121);
            echo "\" class=\"tt-product\">          
                      <img src=\"";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "image", [], "any", false, false, false, 122);
            echo "\" alt=\"\" />
                      ";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "name", [], "any", false, false, false, 123);
            echo "            
                      <input type=\"hidden\" name=\"productcate[]\" value=\"";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 124);
            echo "\" />
                      <i class=\"fa fa-times\"></i>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productcate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"specific-product-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-specific-product\">";
        // line 134
        echo ($context["entry_selectspecificproduct"] ?? null);
        echo "</label>
                <div class=\"control-option width-3\">
                  <small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
        // line 136
        echo ($context["entry_selectspecificproduct_small"] ?? null);
        echo "</small>
                  <select name=\"input_specific_product\" id=\"input-specific-product\" class=\"form-control\">
                    ";
        // line 138
        if ((($context["input_specific_product"] ?? null) == 0)) {
            // line 139
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 140
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 141
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                      <option value=\"3\">";
            // line 142
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                      <option value=\"4\">";
            // line 143
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                     ";
        } elseif ((        // line 144
($context["input_specific_product"] ?? null) == 1)) {
            // line 145
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\" selected=\"selected\">";
            // line 146
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 147
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                      <option value=\"3\">";
            // line 148
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                      <option value=\"4\">";
            // line 149
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                     ";
        } elseif ((        // line 150
($context["input_specific_product"] ?? null) == 2)) {
            // line 151
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 152
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\" selected=\"selected\">";
            // line 153
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                      <option value=\"3\">";
            // line 154
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                      <option value=\"4\">";
            // line 155
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                    ";
        } elseif ((        // line 156
($context["input_specific_product"] ?? null) == 3)) {
            // line 157
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 158
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 159
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                      <option value=\"3\" selected=\"selected\">";
            // line 160
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                      <option value=\"4\">";
            // line 161
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 163
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 164
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 165
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                      <option value=\"3\">";
            // line 166
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                      <option value=\"4\" selected=\"selected\">";
            // line 167
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                    ";
        }
        // line 169
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>";
        // line 176
        echo "          <div class=\"option-auto-selected select-options\">
            <div class=\"form-group auto-select\">
              <label class=\"control-label\" for=\"input-autoproduct\">";
        // line 178
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <div class=\"control-option width-2\">
                <select name=\"autoproduct\" id=\"input-select\" class=\"form-control\">
                  ";
        // line 181
        if ((($context["autoproduct"] ?? null) == 0)) {
            // line 182
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 183
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 184
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    <option value=\"3\">";
            // line 185
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                    <option value=\"4\">";
            // line 186
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                   ";
        } elseif ((        // line 187
($context["autoproduct"] ?? null) == 1)) {
            // line 188
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 189
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 190
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    <option value=\"3\">";
            // line 191
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                    <option value=\"4\">";
            // line 192
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                   ";
        } elseif ((        // line 193
($context["autoproduct"] ?? null) == 2)) {
            // line 194
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 195
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\" selected=\"selected\">";
            // line 196
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    <option value=\"3\">";
            // line 197
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                    <option value=\"4\">";
            // line 198
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 199
($context["autoproduct"] ?? null) == 3)) {
            // line 200
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 201
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 202
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    <option value=\"3\" selected=\"selected\">";
            // line 203
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                    <option value=\"4\">";
            // line 204
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 206
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 207
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 208
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    <option value=\"3\">";
            // line 209
            echo ($context["entry_mostview"] ?? null);
            echo "</option>
                    <option value=\"4\" selected=\"selected\">";
            // line 210
            echo ($context["entry_dealproducts"] ?? null);
            echo "</option>
                  ";
        }
        // line 212
        echo "                </select>
              </div>
            </div>
          </div>
\t\t\t\t
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-row\">";
        // line 218
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"control-option width-4\">
              ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 221
            echo "                <div class=\"input-group\">
                  <span class=\"input-group-addon\">";
            // line 222
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
            echo "</span>
                  <input type=\"text\" name=\"title_lang[";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 223);
            echo "][title]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title_lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 223)] ?? null) : null), "title", [], "any", false, false, false, 223)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title_lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 223)] ?? null) : null), "title", [], "any", false, false, false, 223)) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 223);
            echo "\" class=\"form-control\" />
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"control-label\" for=\"input-class\">";
        // line 229
        echo ($context["entry_class"] ?? null);
        echo "</label>
\t\t\t<div class=\"control-option width-4\">
\t\t\t  <input type=\"text\" name=\"class\" value=\"";
        // line 231
        echo ($context["class"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_class"] ?? null);
        echo "\" id=\"input-class\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>\t
      ";
        // line 235
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-description";
        // line 236
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 236);
        echo "\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
          <div class=\"control-control\">
            <div class=\"tab-content\" style=\"margin: 10px;\">
              ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 240
            echo "              <div id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 240);
            echo "\">
                  <a href=\"javascript:void(0)\" class=\"language-label\"><span>";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 241);
            echo "</span><i class=\"fa fa-angle-down\"></i></a>
                  <div class=\"html-content\">
                     <textarea name=\"module_description[";
            // line 243
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243);
            echo "\" class=\"form-control summernote\">";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243)] ?? null) : null), "description", [], "any", false, false, false, 243)) : (""));
            echo "</textarea>
                  </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "          </div>
        </div>
      </div>
      ";
        // line 251
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-type\">";
        // line 252
        echo ($context["entry_product_type"] ?? null);
        echo "</label>
        <div class=\"control-option width-1\">
          <div class=\"switch switch-long switch-multi3\">
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-grid\" value=\"0\" ";
        // line 255
        if ((($context["type"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-grid\" class=\"switch-label switch-label-1\">";
        // line 256
        echo ($context["entry_grid"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-list\" value=\"1\" ";
        // line 257
        if ((($context["type"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-list\" class=\"switch-label switch-label-2\">";
        // line 258
        echo ($context["entry_list"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-other\" value=\"2\" ";
        // line 259
        if ((($context["type"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-other\" class=\"switch-label switch-label-3\">";
        // line 260
        echo ($context["entry_other"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group parent-form\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 266
        echo ($context["entry_slider"] ?? null);
        echo "</label>
        <div class=\"control-option\">    
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-on\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 269
        if ((($context["slider"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-on\" class=\"switch-label switch-label-on\">";
        // line 270
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-off\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 271
        if ((($context["slider"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-off\" class=\"switch-label switch-label-off\">";
        // line 272
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"slider-on-selected select-options\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-items\">";
        // line 279
        echo ($context["entry_item"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"items\" value=\"";
        // line 281
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"\" id=\"input-items\" class=\"tt-number-field\" />
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-auto\">";
        // line 285
        echo ($context["entry_auto"] ?? null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-on\" value=\"1\" ";
        // line 288
        if ((($context["auto"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-on\" class=\"switch-label switch-label-on\">";
        // line 289
        echo ($context["entry_yes"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-off\" value=\"0\" ";
        // line 290
        if ((($context["auto"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-off\" class=\"switch-label switch-label-off\">";
        // line 291
        echo ($context["entry_no"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 297
        echo ($context["entry_time"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"time\" value=\"";
        // line 299
        echo ($context["time"] ?? null);
        echo "\" placeholder=\"\" id=\"input-time\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 304
        echo ($context["entry_speed"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"speed\" value=\"";
        // line 306
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"\" id=\"input-speed\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-row\">";
        // line 311
        echo ($context["entry_rows"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"row\" value=\"";
        // line 313
        echo ($context["row"] ?? null);
        echo "\" placeholder=\"\" id=\"input-row\" class=\"tt-number-field\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-loop\">";
        // line 317
        echo ($context["entry_loop"] ?? null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-on\" value=\"1\" ";
        // line 320
        if ((($context["loop"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-on\" class=\"switch-label switch-label-on\">";
        // line 321
        echo ($context["entry_yes"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-off\" value=\"0\" ";
        // line 322
        if ((($context["loop"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-off\" class=\"switch-label switch-label-off\">";
        // line 323
        echo ($context["entry_no"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 329
        echo ($context["entry_margin"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"margin\" value=\"";
        // line 331
        echo ($context["margin"] ?? null);
        echo "\" placeholder=\"\" id=\"input-margin\" class=\"tt-number-field\" />
            <span class=\"suffix\">pixels</span>
          </div>
        </div>
\t\t
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-navigation\">";
        // line 337
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-on\" value=\"1\" ";
        // line 340
        if ((($context["navigation"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-on\" class=\"switch-label switch-label-on\">";
        // line 341
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-off\" value=\"0\" ";
        // line 342
        if ((($context["navigation"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-off\" class=\"switch-label switch-label-off\">";
        // line 343
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-pagination\">";
        // line 349
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
          <div class=\"control-option\">       
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-on\" value=\"1\" ";
        // line 352
        if ((($context["pagination"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-on\" class=\"switch-label switch-label-on\">";
        // line 353
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-off\" value=\"0\" ";
        // line 354
        if ((($context["pagination"] ?? null) == 0)) {
            echo "  checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-off\" class=\"switch-label switch-label-off\">";
        // line 355
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-width\">";
        // line 361
        echo ($context["entry_responsive"] ?? null);
        echo "</label>
          <div class=\"control-option width-6\">
           <i class=\"fa fa-desktop\"></i> ";
        // line 363
        echo ($context["entry_desktop"] ?? null);
        echo "
           <input type=\"text\" name=\"desktop\" value=\"";
        // line 364
        echo ($context["desktop"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-desktop\" class=\"tt-number-field\" />
            ";
        // line 365
        if (($context["error_width"] ?? null)) {
            // line 366
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 368
        echo "            <i class=\"fa fa-laptop\"></i> ";
        echo ($context["entry_sdesktop"] ?? null);
        echo "
            <input type=\"text\" name=\"tablet\" value=\"";
        // line 369
        echo ($context["tablet"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-tablet\" class=\"tt-number-field\" />
            ";
        // line 370
        if (($context["error_width"] ?? null)) {
            // line 371
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 373
        echo "            <i class=\"fa fa-tablet\"></i> ";
        echo ($context["entry_tablet"] ?? null);
        echo "
            <input type=\"text\" name=\"mobile\" value=\"";
        // line 374
        echo ($context["mobile"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-mobile\" class=\"tt-number-field\" />
            ";
        // line 375
        if (($context["error_width"] ?? null)) {
            // line 376
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 378
        echo "             <i class=\"fa fa-mobile\"></i> ";
        echo ($context["entry_mobile"] ?? null);
        echo "
            <input type=\"text\" name=\"smobile\" value=\"";
        // line 379
        echo ($context["smobile"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-smobile\" class=\"tt-number-field\" />
            ";
        // line 380
        if (($context["error_width"] ?? null)) {
            // line 381
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 383
        echo "          </div>
        </div>
      </div>
      <div class=\"slider-off-selected select-options\">
        <div class=\"form-group\">";
        // line 388
        echo "          <label class=\"control-label\" for=\"input-row\">";
        echo ($context["entry_pprow"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <select name=\"nrow\" id=\"input-nrow\" class=\"form-control\">
              ";
        // line 391
        if ((($context["nrow"] ?? null) == 0)) {
            // line 392
            echo "                <option value=\"0\" selected=\"selected\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 396
($context["nrow"] ?? null) == 1)) {
            // line 397
            echo "                <option value=\"0\">2</option>
                <option value=\"1\" selected=\"selected\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 401
($context["nrow"] ?? null) == 2)) {
            // line 402
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\" selected=\"selected\">4</option>
                <option value=\"3\">6</option>
              ";
        } else {
            // line 407
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\" selected=\"selected\">6</option>
              ";
        }
        // line 412
        echo "            </select>
          </div>
        </div>
      </div>
      ";
        // line 417
        echo "\t  <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showcart\">";
        // line 418
        echo ($context["entry_showcart"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showcart\" class=\"switch-input\" id=\"showcart-on\" value=\"1\" ";
        // line 421
        if ((($context["showcart"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcart-on\" class=\"switch-label switch-label-on\">";
        // line 422
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showcart\" class=\"switch-input\" id=\"showcart-off\" value=\"0\" ";
        // line 423
        if ((($context["showcart"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcart-off\" class=\"switch-label switch-label-off\">";
        // line 424
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showwishlist\">";
        // line 430
        echo ($context["entry_showwishlist"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showwishlist\" class=\"switch-input\" id=\"showwishlist-on\" value=\"1\" ";
        // line 433
        if ((($context["showwishlist"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showwishlist-on\" class=\"switch-label switch-label-on\">";
        // line 434
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showwishlist\" class=\"switch-input\" id=\"showwishlist-off\" value=\"0\" ";
        // line 435
        if ((($context["showwishlist"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showwishlist-off\" class=\"switch-label switch-label-off\">";
        // line 436
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showcompare\">";
        // line 442
        echo ($context["entry_showcompare"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showcompare\" class=\"switch-input\" id=\"showcompare-on\" value=\"1\" ";
        // line 445
        if ((($context["showcompare"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcompare-on\" class=\"switch-label switch-label-on\">";
        // line 446
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showcompare\" class=\"switch-input\" id=\"showcompare-off\" value=\"0\" ";
        // line 447
        if ((($context["showcompare"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcompare-off\" class=\"switch-label switch-label-off\">";
        // line 448
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showquickview\">";
        // line 454
        echo ($context["entry_showquickview"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showquickview\" class=\"switch-input\" id=\"showquickview-on\" value=\"1\" ";
        // line 457
        if ((($context["showquickview"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showquickview-on\" class=\"switch-label switch-label-on\">";
        // line 458
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showquickview\" class=\"switch-input\" id=\"showquickview-off\" value=\"0\" ";
        // line 459
        if ((($context["showquickview"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showquickview-off\" class=\"switch-label switch-label-off\">";
        // line 460
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 466
        echo ($context["entry_show_description"] ?? null);
        echo "</label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-on\" value=\"1\" ";
        // line 469
        if ((($context["description"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-on\" class=\"switch-label switch-label-on\">";
        // line 470
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-off\" value=\"0\" <";
        // line 471
        if ((($context["description"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-off\" class=\"switch-label switch-label-off\">";
        // line 472
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 478
        echo ($context["entry_countdown"] ?? null);
        echo "<small>";
        echo ($context["entry_countdown_small"] ?? null);
        echo "</small></label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-on\" value=\"1\" ";
        // line 481
        if ((($context["countdown"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-on\" class=\"switch-label switch-label-on\">";
        // line 482
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-off\" value=\"0\" ";
        // line 483
        if ((($context["countdown"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-off\" class=\"switch-label switch-label-off\">";
        // line 484
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 490
        echo ($context["entry_rotator"] ?? null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-on\" value=\"1\" ";
        // line 493
        if ((($context["rotator"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-on\" class=\"switch-label switch-label-on\">";
        // line 494
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-off\" value=\"0\" ";
        // line 495
        if ((($context["rotator"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-off\" class=\"switch-label switch-label-off\">";
        // line 496
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 502
        echo ($context["entry_newlabel"] ?? null);
        echo "</label>    
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-on\" value=\"1\" ";
        // line 505
        if ((($context["newlabel"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-on\" class=\"switch-label switch-label-on\">";
        // line 506
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-off\" value=\"0\" ";
        // line 507
        if ((($context["newlabel"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-off\" class=\"switch-label switch-label-off\">";
        // line 508
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 514
        echo ($context["entry_salelabel"] ?? null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-on\" value=\"1\" ";
        // line 517
        if ((($context["salelabel"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-on\" class=\"switch-label switch-label-on\">";
        // line 518
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-off\" value=\"0\" ";
        // line 519
        if ((($context["salelabel"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-off\" class=\"switch-label switch-label-off\">";
        // line 520
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-limit\">";
        // line 526
        echo ($context["entry_limit"] ?? null);
        echo "</label>
        <div class=\"control-option width-1\">
          <input type=\"text\" name=\"limit\" value=\"";
        // line 528
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"tt-number-field\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-width\">";
        // line 532
        echo ($context["entry_size"] ?? null);
        echo "<small>";
        echo ($context["entry_dessize"] ?? null);
        echo "</small></label>
        <div class=\"control-option width-2\">
          <input type=\"text\" name=\"width\" value=\"";
        // line 534
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"\" id=\"input-width\" class=\"tt-number-field\" />
          ";
        // line 535
        if (($context["error_width"] ?? null)) {
            // line 536
            echo "          <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
          ";
        }
        // line 538
        echo "           x
          <input type=\"text\" name=\"height\" value=\"";
        // line 539
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"\" id=\"input-height\" class=\"tt-number-field\" />
          ";
        // line 540
        if (($context["error_height"] ?? null)) {
            // line 541
            echo "          <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
          ";
        }
        // line 543
        echo "        </div>
      </div>

    </form>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  var category_id;
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token=";
        // line 565
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#featured-product' + item['value']).remove();
    
    \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#featured-product').scrollTop(1000);
  }
});
\$('#featured-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});
// Search category
\$('input[name=\\'cate_name\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token=";
        // line 595
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  select: function(item) {  
    document.getElementById(\"input-cate_name\").value= item['label'];  
    document.getElementById(\"input-cate_id\").value= item['value'];  
    \$('#featured-productcate').children().remove();
    }
});
\$('#input-cate_name').parent().delegate('.fa-times', 'click', function() {
  document.getElementById(\"input-cate_name\").value= '';
  document.getElementById(\"input-cate_id\").value= '';
  \$('#category-product').children().remove();
});

// Search product from category
\$('input[name=\\'productcate\\']').autocomplete({
  source: function( request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token=";
        // line 623
        echo ($context["user_token"] ?? null);
        echo "&category_id=' + \$(\"#input-cate_id\").val()+ '&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      data: {
      },
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
        
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'productcate\\']').val('');
    
    \$('#category-product' + item['value']).remove();
    
    \$('#category-product').append('<div id=\"category-product' + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"productcate[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#category-product').scrollTop(1000);
  }
});
  
\$('#category-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});

function GetOptionsSelect() {
    \$('.select-options').hide();
    var ParentForms = document.getElementsByClassName('parent-form');
    for (var j = 0; j < ParentForms.length; j ++){
      var InputChilds = ParentForms[j].getElementsByTagName('input');
      for (var i = 0; i < InputChilds.length; i++) {
            if (InputChilds[i].checked) {
              console.log(id);
              var id = InputChilds[i].id;
              var test = \$('.'+id+'-selected');
              \$(test).show();

            } //end if
 
      } // end for
    };
    
} //end

\$(document).ready(function(){
  GetOptionsSelect(); 
  \$('.list-selection label').on('click',function(){
      \$(this).parent().find('.active').removeClass('active');
      \$(this).addClass('active');
  });

})
";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 682
            echo "\$('#input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 682);
            echo "').summernote({height: 300});
\$('#language";
            // line 683
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 683);
            echo " .html-content').hide();
\$('#language";
            // line 684
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 684);
            echo " a').click(function(){
  \$('#language";
            // line 685
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685);
            echo " .html-content').slideToggle();
});
\$('#input-title";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 687);
            echo "').parent().parent().parent().css('border-top','2px solid #279CBB');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        echo "//--></script>
</div>
";
        // line 691
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1632 => 691,  1628 => 689,  1620 => 687,  1615 => 685,  1611 => 684,  1607 => 683,  1602 => 682,  1598 => 681,  1537 => 623,  1506 => 595,  1473 => 565,  1449 => 543,  1443 => 541,  1441 => 540,  1437 => 539,  1434 => 538,  1428 => 536,  1426 => 535,  1422 => 534,  1415 => 532,  1406 => 528,  1401 => 526,  1392 => 520,  1386 => 519,  1382 => 518,  1376 => 517,  1370 => 514,  1361 => 508,  1355 => 507,  1351 => 506,  1345 => 505,  1339 => 502,  1330 => 496,  1324 => 495,  1320 => 494,  1314 => 493,  1308 => 490,  1299 => 484,  1293 => 483,  1289 => 482,  1283 => 481,  1275 => 478,  1266 => 472,  1260 => 471,  1256 => 470,  1250 => 469,  1244 => 466,  1235 => 460,  1229 => 459,  1225 => 458,  1219 => 457,  1213 => 454,  1204 => 448,  1198 => 447,  1194 => 446,  1188 => 445,  1182 => 442,  1173 => 436,  1167 => 435,  1163 => 434,  1157 => 433,  1151 => 430,  1142 => 424,  1136 => 423,  1132 => 422,  1126 => 421,  1120 => 418,  1117 => 417,  1111 => 412,  1104 => 407,  1097 => 402,  1095 => 401,  1089 => 397,  1087 => 396,  1081 => 392,  1079 => 391,  1072 => 388,  1066 => 383,  1060 => 381,  1058 => 380,  1054 => 379,  1049 => 378,  1043 => 376,  1041 => 375,  1037 => 374,  1032 => 373,  1026 => 371,  1024 => 370,  1020 => 369,  1015 => 368,  1009 => 366,  1007 => 365,  1003 => 364,  999 => 363,  994 => 361,  985 => 355,  979 => 354,  975 => 353,  969 => 352,  963 => 349,  954 => 343,  948 => 342,  944 => 341,  938 => 340,  932 => 337,  923 => 331,  918 => 329,  909 => 323,  903 => 322,  899 => 321,  893 => 320,  887 => 317,  880 => 313,  875 => 311,  867 => 306,  862 => 304,  854 => 299,  849 => 297,  840 => 291,  834 => 290,  830 => 289,  824 => 288,  818 => 285,  811 => 281,  806 => 279,  796 => 272,  790 => 271,  786 => 270,  780 => 269,  774 => 266,  765 => 260,  759 => 259,  755 => 258,  749 => 257,  745 => 256,  739 => 255,  733 => 252,  730 => 251,  725 => 247,  709 => 243,  704 => 241,  699 => 240,  695 => 239,  687 => 236,  684 => 235,  676 => 231,  671 => 229,  666 => 226,  653 => 223,  649 => 222,  646 => 221,  642 => 220,  637 => 218,  629 => 212,  624 => 210,  620 => 209,  616 => 208,  612 => 207,  607 => 206,  602 => 204,  598 => 203,  594 => 202,  590 => 201,  585 => 200,  583 => 199,  579 => 198,  575 => 197,  571 => 196,  567 => 195,  562 => 194,  560 => 193,  556 => 192,  552 => 191,  548 => 190,  544 => 189,  539 => 188,  537 => 187,  533 => 186,  529 => 185,  525 => 184,  521 => 183,  516 => 182,  514 => 181,  508 => 178,  504 => 176,  498 => 169,  493 => 167,  489 => 166,  485 => 165,  481 => 164,  476 => 163,  471 => 161,  467 => 160,  463 => 159,  459 => 158,  454 => 157,  452 => 156,  448 => 155,  444 => 154,  440 => 153,  436 => 152,  431 => 151,  429 => 150,  425 => 149,  421 => 148,  417 => 147,  413 => 146,  408 => 145,  406 => 144,  402 => 143,  398 => 142,  394 => 141,  390 => 140,  385 => 139,  383 => 138,  378 => 136,  373 => 134,  365 => 128,  355 => 124,  351 => 123,  347 => 122,  342 => 121,  338 => 120,  333 => 118,  328 => 116,  316 => 107,  310 => 106,  306 => 105,  300 => 104,  296 => 103,  290 => 102,  284 => 99,  280 => 97,  274 => 95,  272 => 94,  267 => 92,  263 => 91,  258 => 89,  254 => 87,  248 => 82,  239 => 79,  234 => 77,  230 => 76,  225 => 74,  222 => 73,  218 => 72,  213 => 70,  208 => 68,  204 => 66,  195 => 59,  189 => 58,  185 => 57,  179 => 56,  175 => 55,  169 => 54,  163 => 51,  153 => 44,  147 => 43,  143 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocproduct.twig", "");
    }
}
