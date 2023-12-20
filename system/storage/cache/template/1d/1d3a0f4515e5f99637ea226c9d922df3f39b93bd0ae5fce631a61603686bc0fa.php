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

/* extension/module/octabproducts.twig */
class __TwigTemplate_d6b08d18666f46d5519f1b59561efc5b7879b7abbef3e6a1954ed4feabcbcd7f extends \Twig\Template
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
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"control-option\">
            <div class=\"switch tt-switch\">
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-on\" value=\"1\" ";
        // line 42
        if ((($context["status"] ?? null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-on\" class=\"switch-label switch-label-on\">";
        // line 43
        echo ($context["text_enabled"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-off\" value=\"0\" ";
        // line 44
        if ((($context["status"] ?? null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-off\" class=\"switch-label switch-label-off\">";
        // line 45
        echo ($context["text_disabled"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
                  </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-row\">";
        // line 52
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"control-option width-4\">
              ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 55
            echo "                <div class=\"input-group\">
                  <span class=\"input-group-addon\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 56);
            echo "</span>
                  <input type=\"text\" name=\"title_lang[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57);
            echo "][title]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title_lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57)] ?? null) : null), "title", [], "any", false, false, false, 57)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title_lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57)] ?? null) : null), "title", [], "any", false, false, false, 57)) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" class=\"form-control\" />
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"control-label\" for=\"input-class\">";
        // line 63
        echo ($context["entry_class"] ?? null);
        echo "</label>
\t\t\t<div class=\"control-option width-4\">
\t\t\t  <input type=\"text\" name=\"class\" value=\"";
        // line 65
        echo ($context["class"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_class"] ?? null);
        echo "\" id=\"input-class\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
      ";
        // line 69
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-description";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 70);
        echo "\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
          <div class=\"control-control\">
            <div class=\"tabdes-content\" style=\"margin: 10px;\">
              ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 74
            echo "              <div id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\">
                  <a href=\"javascript:void(0)\" class=\"language-label\"><span>";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 75);
            echo "</span><i class=\"fa fa-angle-down\"></i></a>
                  <div class=\"html-content\">
                     <textarea name=\"module_description[";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "\" class=\"form-control summernote\">";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null), "description", [], "any", false, false, false, 77)) : (""));
            echo "</textarea>
                  </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </div>
        </div>
      </div>
      ";
        // line 85
        echo "      <div class=\"form-group\" style=\"border-top: 2px solid #279CBB;\">
        <label class=\"control-label\" for=\"input-type\">";
        // line 86
        echo ($context["entry_product_type"] ?? null);
        echo "</label>
        <div class=\"control-option width-1\">
          <div class=\"switch switch-long switch-multi3\">
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-grid\" value=\"0\" ";
        // line 89
        if ((($context["type"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-grid\" class=\"switch-label switch-label-1\">";
        // line 90
        echo ($context["entry_grid"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-list\" value=\"1\" ";
        // line 91
        if ((($context["type"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-list\" class=\"switch-label switch-label-2\">";
        // line 92
        echo ($context["entry_list"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-other\" value=\"2\" ";
        // line 93
        if ((($context["type"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-other\" class=\"switch-label switch-label-3\">";
        // line 94
        echo ($context["entry_other"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group parent-form\"  style=\"border-top: 2px solid #279CBB;\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 100
        echo ($context["entry_slider"] ?? null);
        echo "</label>
        <div class=\"control-option\">    
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-on\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 103
        if ((($context["slider"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-on\" class=\"switch-label switch-label-on\">";
        // line 104
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-off\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 105
        if ((($context["slider"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-off\" class=\"switch-label switch-label-off\">";
        // line 106
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"slider-on-selected select-options\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-items\">";
        // line 113
        echo ($context["entry_item"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"items\" value=\"";
        // line 115
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"\" id=\"input-items\" class=\"tt-number-field\" />
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-row\">";
        // line 119
        echo ($context["entry_rows"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"row\" value=\"";
        // line 121
        echo ($context["row"] ?? null);
        echo "\" placeholder=\"\" id=\"input-row\" class=\"tt-number-field\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-loop\">";
        // line 125
        echo ($context["entry_loop"] ?? null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-on\" value=\"1\" ";
        // line 128
        if ((($context["loop"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-on\" class=\"switch-label switch-label-on\">";
        // line 129
        echo ($context["entry_yes"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-off\" value=\"0\" ";
        // line 130
        if ((($context["loop"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-off\" class=\"switch-label switch-label-off\">";
        // line 131
        echo ($context["entry_no"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 137
        echo ($context["entry_margin"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"margin\" value=\"";
        // line 139
        echo ($context["margin"] ?? null);
        echo "\" placeholder=\"\" id=\"input-margin\" class=\"tt-number-field\" />
            <span class=\"suffix\">pixels</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-auto\">";
        // line 144
        echo ($context["entry_auto"] ?? null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-on\" value=\"1\" ";
        // line 147
        if ((($context["auto"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-on\" class=\"switch-label switch-label-on\">";
        // line 148
        echo ($context["entry_yes"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-off\" value=\"0\" ";
        // line 149
        if ((($context["auto"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-off\" class=\"switch-label switch-label-off\">";
        // line 150
        echo ($context["entry_no"] ?? null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 156
        echo ($context["entry_time"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"time\" value=\"";
        // line 158
        echo ($context["time"] ?? null);
        echo "\" placeholder=\"\" id=\"input-time\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 163
        echo ($context["entry_speed"] ?? null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"speed\" value=\"";
        // line 165
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"\" id=\"input-speed\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-navigation\">";
        // line 170
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-on\" value=\"1\" ";
        // line 173
        if ((($context["navigation"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-on\" class=\"switch-label switch-label-on\">";
        // line 174
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-off\" value=\"0\" ";
        // line 175
        if ((($context["navigation"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-off\" class=\"switch-label switch-label-off\">";
        // line 176
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-pagination\">";
        // line 182
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
          <div class=\"control-option\">       
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-on\" value=\"1\" ";
        // line 185
        if ((($context["pagination"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-on\" class=\"switch-label switch-label-on\">";
        // line 186
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-off\" value=\"0\" ";
        // line 187
        if ((($context["pagination"] ?? null) == 0)) {
            echo "  checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-off\" class=\"switch-label switch-label-off\">";
        // line 188
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-width\">";
        // line 194
        echo ($context["entry_responsive"] ?? null);
        echo "</label>
          <div class=\"control-option width-6\">
           <i class=\"fa fa-desktop\"></i> ";
        // line 196
        echo ($context["entry_desktop"] ?? null);
        echo "
           <input type=\"text\" name=\"desktop\" value=\"";
        // line 197
        echo ($context["desktop"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-desktop\" class=\"tt-number-field\" />
            ";
        // line 198
        if (($context["error_width"] ?? null)) {
            // line 199
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 201
        echo "            <i class=\"fa fa-laptop\"></i> ";
        echo ($context["entry_sdesktop"] ?? null);
        echo "
            <input type=\"text\" name=\"tablet\" value=\"";
        // line 202
        echo ($context["tablet"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-tablet\" class=\"tt-number-field\" />
            ";
        // line 203
        if (($context["error_width"] ?? null)) {
            // line 204
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 206
        echo "            <i class=\"fa fa-tablet\"></i> ";
        echo ($context["entry_tablet"] ?? null);
        echo "
            <input type=\"text\" name=\"mobile\" value=\"";
        // line 207
        echo ($context["mobile"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-mobile\" class=\"tt-number-field\" />
            ";
        // line 208
        if (($context["error_width"] ?? null)) {
            // line 209
            echo "            <div class=\"text-danger\">";
            echo ($context["error_responsive"] ?? null);
            echo "</div>
            ";
        }
        // line 211
        echo "             <i class=\"fa fa-mobile\"></i> ";
        echo ($context["entry_mobile"] ?? null);
        echo "
            <input type=\"text\" name=\"smobile\" value=\"";
        // line 212
        echo ($context["smobile"] ?? null);
        echo "\" placeholder=\"\" id=\"responsive-smobile\" class=\"tt-number-field\" />
          </div>
        </div>
      </div>
      <div class=\"slider-off-selected select-options\">
        <div class=\"form-group\">";
        // line 218
        echo "          <label class=\"control-label\" for=\"input-row\">";
        echo ($context["entry_pprow"] ?? null);
        echo "</label>
          <div class=\"control-option width-1\">
            <select name=\"nrow\" id=\"input-nrow\" class=\"form-control\">
              ";
        // line 221
        if ((($context["nrow"] ?? null) == 0)) {
            // line 222
            echo "                <option value=\"0\" selected=\"select-options\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 226
($context["nrow"] ?? null) == 1)) {
            // line 227
            echo "                <option value=\"0\">2</option>
                <option value=\"1\" selected=\"select-options\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 231
($context["nrow"] ?? null) == 2)) {
            // line 232
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\" selected=\"select-options\">4</option>
                <option value=\"3\">6</option>
              ";
        } else {
            // line 237
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\" selected=\"select-options\">6</option>
              ";
        }
        // line 242
        echo "            </select>
          </div>
        </div>
      </div>
      ";
        // line 247
        echo "      <div class=\"form-group\" style=\"border-top: 2px solid #279CBB;\">
          <label class=\"control-label\" for=\"input-showcart\">";
        // line 248
        echo ($context["entry_showcart"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showcart\" class=\"switch-input\" id=\"showcart-on\" value=\"1\" ";
        // line 251
        if ((($context["showcart"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcart-on\" class=\"switch-label switch-label-on\">";
        // line 252
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showcart\" class=\"switch-input\" id=\"showcart-off\" value=\"0\" ";
        // line 253
        if ((($context["showcart"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcart-off\" class=\"switch-label switch-label-off\">";
        // line 254
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showwishlist\">";
        // line 260
        echo ($context["entry_showwishlist"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showwishlist\" class=\"switch-input\" id=\"showwishlist-on\" value=\"1\" ";
        // line 263
        if ((($context["showwishlist"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showwishlist-on\" class=\"switch-label switch-label-on\">";
        // line 264
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showwishlist\" class=\"switch-input\" id=\"showwishlist-off\" value=\"0\" ";
        // line 265
        if ((($context["showwishlist"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showwishlist-off\" class=\"switch-label switch-label-off\">";
        // line 266
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showcompare\">";
        // line 272
        echo ($context["entry_showcompare"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showcompare\" class=\"switch-input\" id=\"showcompare-on\" value=\"1\" ";
        // line 275
        if ((($context["showcompare"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcompare-on\" class=\"switch-label switch-label-on\">";
        // line 276
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showcompare\" class=\"switch-input\" id=\"showcompare-off\" value=\"0\" ";
        // line 277
        if ((($context["showcompare"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showcompare-off\" class=\"switch-label switch-label-off\">";
        // line 278
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t\t<div class=\"form-group\">
          <label class=\"control-label\" for=\"input-showquickview\">";
        // line 284
        echo ($context["entry_showquickview"] ?? null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"showquickview\" class=\"switch-input\" id=\"showquickview-on\" value=\"1\" ";
        // line 287
        if ((($context["showquickview"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showquickview-on\" class=\"switch-label switch-label-on\">";
        // line 288
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"showquickview\" class=\"switch-input\" id=\"showquickview-off\" value=\"0\" ";
        // line 289
        if ((($context["showquickview"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"showquickview-off\" class=\"switch-label switch-label-off\">";
        // line 290
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
\t  <div class=\"form-group\"  >
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 296
        echo ($context["entry_show_description"] ?? null);
        echo "</label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-on\" value=\"1\" ";
        // line 299
        if ((($context["description"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-on\" class=\"switch-label switch-label-on\">";
        // line 300
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-off\" value=\"0\" <";
        // line 301
        if ((($context["description"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-off\" class=\"switch-label switch-label-off\">";
        // line 302
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 308
        echo ($context["entry_countdown"] ?? null);
        echo "<small>";
        echo ($context["entry_countdown_small"] ?? null);
        echo "</small></label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-on\" value=\"1\" ";
        // line 311
        if ((($context["countdown"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-on\" class=\"switch-label switch-label-on\">";
        // line 312
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-off\" value=\"0\" ";
        // line 313
        if ((($context["countdown"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-off\" class=\"switch-label switch-label-off\">";
        // line 314
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 320
        echo ($context["entry_rotator"] ?? null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-on\" value=\"1\" ";
        // line 323
        if ((($context["rotator"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-on\" class=\"switch-label switch-label-on\">";
        // line 324
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-off\" value=\"0\" ";
        // line 325
        if ((($context["rotator"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-off\" class=\"switch-label switch-label-off\">";
        // line 326
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 332
        echo ($context["entry_newlabel"] ?? null);
        echo "</label>    
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-on\" value=\"1\" ";
        // line 335
        if ((($context["newlabel"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-on\" class=\"switch-label switch-label-on\">";
        // line 336
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-off\" value=\"0\" ";
        // line 337
        if ((($context["newlabel"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-off\" class=\"switch-label switch-label-off\">";
        // line 338
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 344
        echo ($context["entry_salelabel"] ?? null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-on\" value=\"1\" ";
        // line 347
        if ((($context["salelabel"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-on\" class=\"switch-label switch-label-on\">";
        // line 348
        echo ($context["entry_yes"] ?? null);
        echo "</label>
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-off\" value=\"0\" ";
        // line 349
        if ((($context["salelabel"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-off\" class=\"switch-label switch-label-off\">";
        // line 350
        echo ($context["entry_no"] ?? null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-limit\">";
        // line 356
        echo ($context["entry_limit"] ?? null);
        echo "</label>
        <div class=\"control-option width-1\">
          <input type=\"text\" name=\"limit\" value=\"";
        // line 358
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"tt-number-field\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-width\">";
        // line 362
        echo ($context["entry_size"] ?? null);
        echo "<small>";
        echo ($context["entry_dessize"] ?? null);
        echo "</small></label>
        <div class=\"control-option width-2\">
          <input type=\"text\" name=\"width\" value=\"";
        // line 364
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"\" id=\"input-width\" class=\"tt-number-field\" />
          ";
        // line 365
        if (($context["error_width"] ?? null)) {
            // line 366
            echo "          <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
          ";
        }
        // line 368
        echo "           x
          <input type=\"text\" name=\"height\" value=\"";
        // line 369
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"\" id=\"input-height\" class=\"tt-number-field\" />
          ";
        // line 370
        if (($context["error_height"] ?? null)) {
            // line 371
            echo "          <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
          ";
        }
        // line 373
        echo "        </div>
      </div>



      <div class=\"tabs-container\">
          ";
        // line 379
        $context["tab_id"] = 0;
        // line 380
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["octabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 381
            echo "          <div class=\"tab-container\">
          <div class=\"tab-heading\">Tab-";
            // line 382
            echo ($context["tab_id"] ?? null);
            echo "<span class=\"delete_tab\"><i class=\"fa fa-times\"></i>";
            echo ($context["entry_deletetab"] ?? null);
            echo "</span></div>
          <div class=\"tab-content\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-row\">";
            // line 385
            echo ($context["entry_overwritetitle"] ?? null);
            echo "</label>
              <div class=\"control-option width-4\">
                ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 388
                echo "                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
                // line 389
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 389);
                echo "</span>
                    <input type=\"text\" name=\"octab[";
                // line 390
                echo ($context["tab_id"] ?? null);
                echo "][tab_name][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 390);
                echo "][title]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["octab"], "tab_name", [], "any", false, false, false, 390)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 390)] ?? null) : null), "title", [], "any", false, false, false, 390)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["octab"], "tab_name", [], "any", false, false, false, 390)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 390)] ?? null) : null), "title", [], "any", false, false, false, 390)) : (""));
                echo "\" placeholder=\"\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 390);
                echo "-";
                echo ($context["tab_id"] ?? null);
                echo "\" class=\"form-control\" />
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "              </div>
            </div>
            <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-option\">";
            // line 396
            echo ($context["entry_type"] ?? null);
            echo "</label>
              <div class=\"control-option\">
              <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"octab[";
            // line 399
            echo ($context["tab_id"] ?? null);
            echo "][option]\" class=\"switch-input switch-input-1\" id=\"option-all-";
            echo ($context["tab_id"] ?? null);
            echo "\" onClick=\"GetOptionsSelect();\" value=\"0\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "option", [], "any", false, false, false, 399) == 0)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-all-";
            // line 400
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-1\" >";
            echo ($context["entry_type_all"] ?? null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 401
            echo ($context["tab_id"] ?? null);
            echo "][option]\" class=\"switch-input switch-input-2\" onClick=\"GetOptionsSelect();\" id=\"option-cate-";
            echo ($context["tab_id"] ?? null);
            echo "\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "option", [], "any", false, false, false, 401) == 1)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-cate-";
            // line 402
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo ($context["entry_type_cate"] ?? null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 403
            echo ($context["tab_id"] ?? null);
            echo "][option]\" class=\"switch-input switch-input-3\" onClick=\"GetOptionsSelect();\" id=\"option-auto-";
            echo ($context["tab_id"] ?? null);
            echo "\" value=\"2\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "option", [], "any", false, false, false, 403) == 2)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-auto-";
            // line 404
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo ($context["entry_type_auto"] ?? null);
            echo "</label>
                <span class=\"switch-selection\"></span>
              </div>
              </div>
            </div>

            <div class=\"option-all-";
            // line 410
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-productall-";
            // line 412
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_product"] ?? null);
            echo "</label>
              <div class=\"control-option width-4\">
                <input type=\"text\" name=\"octab[";
            // line 414
            echo ($context["tab_id"] ?? null);
            echo "][productall]\" value=\"\" placeholder=\"";
            echo ($context["entry_product"] ?? null);
            echo "\" id=\"input-productall-";
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"form-control\" />
                <div id=\"featured-product-";
            // line 415
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
            // line 416
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["octab"], "productalls", [], "any", false, false, false, 416));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
                  <div id=\"featured-product";
                // line 417
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 417);
                echo "\" class=\"tt-product\">
                  <i class=\"fa fa-times\"></i>
                  <img src=\"";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 419);
                echo "\" alt=\"\" />
                  ";
                // line 420
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 420);
                echo "     
                  <input type=\"hidden\" name=\"octab[";
                // line 421
                echo ($context["tab_id"] ?? null);
                echo "][productall][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 421);
                echo "  \" />
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            echo "                </div>
              </div>
            </div>
          </div>
          <!--------------------------- Categories tab-------------------------->
          <div class=\"option-cate-";
            // line 429
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-cate_id-";
            // line 431
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_cate_select"] ?? null);
            echo "</label>
              <div class=\"control-option width-3\">
                <input type=\"text\" name=\"octab[";
            // line 433
            echo ($context["tab_id"] ?? null);
            echo "][cate_name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["octab"], "cate_name", [], "any", false, false, false, 433);
            echo "\" placeholder=\"Search category\" id=\"input-cate_name-";
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"form-control input-cate_name\" /><i class=\"fa fa-times\"></i>
              <input type=\"hidden\" name=\"octab[";
            // line 434
            echo ($context["tab_id"] ?? null);
            echo "][cate_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["octab"], "cate_id", [], "any", false, false, false, 434);
            echo "\" id=\"input-cate_id-";
            echo ($context["tab_id"] ?? null);
            echo "\" />
            </div>
            </div>
             <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-productfrom-";
            // line 438
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_pfrom"] ?? null);
            echo "</label>
              <div class=\"control-option width-3\">            
                <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"octab[";
            // line 441
            echo ($context["tab_id"] ?? null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-all-";
            echo ($context["tab_id"] ?? null);
            echo "\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "productfrom", [], "any", false, false, false, 441) == 1)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-all-";
            // line 442
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-1\">";
            echo ($context["entry_pfrom_all"] ?? null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 443
            echo ($context["tab_id"] ?? null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-select-";
            echo ($context["tab_id"] ?? null);
            echo "\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "productfrom", [], "any", false, false, false, 443) == 0)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-select-";
            // line 444
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo ($context["entry_pfrom_select"] ?? null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 445
            echo ($context["tab_id"] ?? null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-specific-";
            echo ($context["tab_id"] ?? null);
            echo "\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "productfrom", [], "any", false, false, false, 445) == 2)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-specific-";
            // line 446
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo ($context["entry_specificproduct"] ?? null);
            echo "</label>
                <span class=\"switch-selection\"></span>
                 
              </div>
              </div>
            </div>
            <div class=\"productfrom-all-";
            // line 452
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
              <!-- <small class=\"text-for-allproducts\" style=\"padding: 10px 0; float: left;\"><?php echo \$entry_textall; ?></small> -->
            </div>
            <div class=\"productfrom-select-";
            // line 455
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-productcate-";
            // line 457
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_product"] ?? null);
            echo "</label>
                <div class=\"control-option width-4\">
                  <input type=\"text\" name=\"octab[";
            // line 459
            echo ($context["tab_id"] ?? null);
            echo "][productcate]\" value=\"\" placeholder=\"";
            echo ($context["entry_product"] ?? null);
            echo "\" id=\"input-productcate-";
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"form-control\" />
                  <div id=\"category-product-";
            // line 460
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
            // line 461
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["octab"], "productcates", [], "any", false, false, false, 461));
            foreach ($context['_seq'] as $context["_key"] => $context["productcate"]) {
                echo "   
                    <div id=\"category-product";
                // line 462
                echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 462);
                echo "\" class=\"tt-product\">       
                    <img src=\"";
                // line 463
                echo twig_get_attribute($this->env, $this->source, $context["productcate"], "image", [], "any", false, false, false, 463);
                echo "\" alt=\"\" /> 
                    ";
                // line 464
                echo twig_get_attribute($this->env, $this->source, $context["productcate"], "name", [], "any", false, false, false, 464);
                echo "      
                    <input type=\"hidden\" name=\"octab[";
                // line 465
                echo ($context["tab_id"] ?? null);
                echo "][productcate][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 465);
                echo "\" />
                    <i class=\"fa fa-times\"></i>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productcate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 469
            echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"productfrom-specific-";
            // line 473
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-specific-product-";
            // line 475
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_selectspecificproduct"] ?? null);
            echo "</label>
                <div class=\"control-option width-3\">
                 <small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
            // line 477
            echo ($context["entry_selectspecificproduct_small"] ?? null);
            echo "</small>
                  <select name=\"octab[";
            // line 478
            echo ($context["tab_id"] ?? null);
            echo "][input_specific_product]\" id=\"input-specific-product-";
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"form-control\">
                    ";
            // line 479
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "input_specific_product", [], "any", false, false, false, 479) == 0)) {
                // line 480
                echo "                    <option value=\"0\" selected=\"select-options\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                    <option value=\"1\">";
                // line 481
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                    <option value=\"2\">";
                // line 482
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                    <option value=\"3\">";
                // line 483
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                    <option value=\"4\">";
                // line 484
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 485
$context["octab"], "input_specific_product", [], "any", false, false, false, 485) == 1)) {
                // line 486
                echo "                    <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                    <option value=\"1\" selected=\"select-options\">";
                // line 487
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                    <option value=\"2\">";
                // line 488
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                    <option value=\"3\">";
                // line 489
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                    <option value=\"4\">";
                // line 490
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 491
$context["octab"], "input_specific_product", [], "any", false, false, false, 491) == 2)) {
                // line 492
                echo "                    <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                    <option value=\"1\">";
                // line 493
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                    <option value=\"2\" selected=\"select-options\">";
                // line 494
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                    <option value=\"3\">";
                // line 495
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                    <option value=\"4\">";
                // line 496
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 497
$context["octab"], "input_specific_product", [], "any", false, false, false, 497) == 3)) {
                // line 498
                echo "                    <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                    <option value=\"1\">";
                // line 499
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                    <option value=\"2\">";
                // line 500
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                    <option value=\"3\" selected=\"select-options\">";
                // line 501
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                    <option value=\"4\">";
                // line 502
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                    ";
            } else {
                // line 504
                echo "                    <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                    <option value=\"1\">";
                // line 505
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                    <option value=\"2\">";
                // line 506
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                    <option value=\"3\">";
                // line 507
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                    <option value=\"4\" selected=\"select-options\">";
                // line 508
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                    ";
            }
            // line 510
            echo "                  </select>
                </div>
              </div>
            </div>
          </div>
          <!--------------------------- Auto tab ----------------------- -->
          <div class=\"option-auto-";
            // line 516
            echo ($context["tab_id"] ?? null);
            echo "-selected select-options\">
            <div class=\"form-group auto-select\">
              <label class=\"control-label\" for=\"input-autoproduct-";
            // line 518
            echo ($context["tab_id"] ?? null);
            echo "\">";
            echo ($context["entry_product"] ?? null);
            echo "</label>
              <div class=\"control-option width-2\">
                <select name=\"octab[";
            // line 520
            echo ($context["tab_id"] ?? null);
            echo "][autoproduct]\" id=\"input-autoproduct-";
            echo ($context["tab_id"] ?? null);
            echo "\" class=\"form-control\">
                  ";
            // line 521
            if ((twig_get_attribute($this->env, $this->source, $context["octab"], "autoproduct", [], "any", false, false, false, 521) == 0)) {
                // line 522
                echo "                  <option value=\"0\" selected=\"select-options\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                  <option value=\"1\">";
                // line 523
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                  <option value=\"2\">";
                // line 524
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                  <option value=\"3\">";
                // line 525
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                  <option value=\"4\">";
                // line 526
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 527
$context["octab"], "autoproduct", [], "any", false, false, false, 527) == 1)) {
                // line 528
                echo "                  <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                  <option value=\"1\" selected=\"select-options\">";
                // line 529
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                  <option value=\"2\">";
                // line 530
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                  <option value=\"3\">";
                // line 531
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                  <option value=\"4\">";
                // line 532
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 533
$context["octab"], "autoproduct", [], "any", false, false, false, 533) == 2)) {
                // line 534
                echo "                  <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                  <option value=\"1\">";
                // line 535
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                  <option value=\"2\" selected=\"select-options\">";
                // line 536
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                  <option value=\"3\">";
                // line 537
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                  <option value=\"4\">";
                // line 538
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 539
$context["octab"], "autoproduct", [], "any", false, false, false, 539) == 3)) {
                // line 540
                echo "                  <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                  <option value=\"1\">";
                // line 541
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                  <option value=\"2\">";
                // line 542
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                  <option value=\"3\" selected=\"select-options\">";
                // line 543
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                  <option value=\"4\">";
                // line 544
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                  ";
            } else {
                // line 546
                echo "                  <option value=\"0\">";
                echo ($context["entry_new"] ?? null);
                echo "</option>
                  <option value=\"1\">";
                // line 547
                echo ($context["entry_sale"] ?? null);
                echo "</option>
                  <option value=\"2\">";
                // line 548
                echo ($context["entry_bestseller"] ?? null);
                echo "</option>
                  <option value=\"3\">";
                // line 549
                echo ($context["entry_mostview"] ?? null);
                echo "</option>
                  <option value=\"4\" selected=\"select-options\">";
                // line 550
                echo ($context["entry_dealproducts"] ?? null);
                echo "</option>
                  ";
            }
            // line 552
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
        </div>
      ";
            // line 558
            $context["tab_id"] = (($context["tab_id"] ?? null) + 1);
            // line 559
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "      </div>
      <button class=\"button-addnew\" type=\"button\" onClick=\"addTabs();\">";
        // line 561
        echo ($context["entry_addnewtab"] ?? null);
        echo "</button>
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
  var tab_id = ";
        // line 578
        echo ($context["tab_id"] ?? null);
        echo ";
function loadAutocomplete(i){
  \$(\"input[name=\\'octab[\"+i+\"][productall]\\']\").autocomplete({
    source: function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token=";
        // line 583
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
      \$(\"input[name=\\'octab[\"+i+\"][productall]\\']\").val('');
      
      \$('#featured-product-'+ i+ + item['value']).remove();
      \$('#featured-product-'+ i).append('<div id=\"featured-product-'+i + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"octab['+i+'][productall][]\" value=\"' + item['value'] + '\" /></div>');  
      
      \$('#featured-product-'+i).scrollTop(1000);
    }
  });
  \$('#featured-product-'+i).delegate('.fa-times', 'click', function() {
    \$(this).parent().remove();
  });

  // Search category
  \$(\"input[name=\\'octab[\"+i+\"][cate_name]\\']\").autocomplete({
    source: function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token=";
        // line 613
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
      document.getElementById(\"input-cate_name-\"+i).value= item['label'];  
      document.getElementById(\"input-cate_id-\"+i).value= item['value'];  
      \$('#category-product-'+i).children().remove();
      }
  });
  \$('#input-cate_name-'+i).parent().delegate('.fa-times', 'click', function() {
    document.getElementById(\"input-cate_name-\"+i).value= '';
    document.getElementById(\"input-cate_id-\"+i).value= '';
    \$('#category-product-'+i).children().remove();
  });

  // Search product from category
  \$(\"input[name=\\'octab[\"+i+\"][productcate]\\']\").autocomplete({
    source: function( request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token=";
        // line 641
        echo ($context["user_token"] ?? null);
        echo "&category_id=' + \$(\"#input-cate_id-\"+i).val()+ '&filter_name=' +  encodeURIComponent(request),
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
      
      \$('#category-product-' + i + item['value']).remove();
      
      \$('#category-product-' +i).append('<div id=\"category-product-' + i + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"octab['+i+'][productcate][]\" value=\"' + item['value'] + '\" /></div>');  
      
      \$('#category-product'+i).scrollTop(1000);
    }
  });
    
  \$('#category-product-'+i).delegate('.fa-times', 'click', function() {
    \$(this).parent().remove();
  });
}
function GetOptionsSelect() {
    \$('.select-options').hide();
    var ParentForms = document.getElementsByClassName('parent-form');
    for (var j = 0; j < ParentForms.length; j ++){
      var InputChilds = ParentForms[j].getElementsByTagName('input');
      for (var i = 0; i < InputChilds.length; i++) {
            if (InputChilds[i].checked) {
              var id = InputChilds[i].id;
              var test = \$('.'+id+'-selected');
              \$(test).show();

            } //end if
 
      } // end for
    };
    
} //end

\$(document).ready(function(){
  GetOptionsSelect(); 
  afterAdd();
  \$('.list-selection label').on('click',function(){
      \$(this).parent().find('.active').removeClass('active');
      \$(this).addClass('active');
  });
  for(i=0; i <= tab_id; i++){
    loadAutocomplete(i);
  }
  \$('.tab-content').hide(); 
})
";
        // line 702
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 703
            echo "  \$('#input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 703);
            echo "').summernote({height: 300});
  \$('#language";
            // line 704
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 704);
            echo " .html-content').hide();
  \$('#language";
            // line 705
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 705);
            echo " a').click(function(){
    \$('#language";
            // line 706
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 706);
            echo " .html-content').slideToggle();
  });
  \$('#input-title";
            // line 708
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 708);
            echo "').parent().parent().parent().css('border-top','2px solid #279CBB');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        echo "

function afterAdd(){
  \$('.tab-heading').on('click', function(){    
    \$(this).next('.tab-content').slideToggle();
\tevent.stoppropagation();
  })
  \$('.delete_tab').click(function(){
    \$(this).parent().parent().remove();
  })
}
function addTabs() {
  html  = '<div class=\"tab-container\"><div class=\"tab-heading\">Tab-'+tab_id+'<span class=\"delete_tab\"><i class=\"fa fa-times\"></i>";
        // line 722
        echo ($context["entry_deletetab"] ?? null);
        echo "</span></div><div class=\"tab-content\">';
    html += '<div class=\"form-group\">';
    html += '<label class=\"control-label\" for=\"input-row\">";
        // line 724
        echo ($context["entry_overwritetitle"] ?? null);
        echo "</label>';
    html += '<div class=\"control-option width-4\">';
    ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 727
            echo "    html += '<div class=\"input-group\">';
    html += '<span class=\"input-group-addon\">";
            // line 728
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 728);
            echo "</span>';
    html += '<input type=\"text\" name=\"octab[' + tab_id + '][tab_name][";
            // line 729
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 729);
            echo "][title]\" value=\"\" placeholder=\"\" id=\"input-tabname";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729);
            echo "-'+ tab_id +'\" class=\"form-control\" />';
    html += '</div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "    html += '</div></div>';
    html += '<div class=\"form-group parent-form\">';
    html += '<label class=\"control-label\" for=\"input-option\">";
        // line 734
        echo ($context["entry_type"] ?? null);
        echo "</label>';
    html += '<div class=\"control-option\"><div class=\"switch switch-long switch-multi3\">';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-1\" id=\"option-all-' + tab_id + '\" onClick=\"GetOptionsSelect();\" value=\"0\" checked=\"checked\"/>';
      html += '<label for=\"option-all-' + tab_id + '\" class=\"switch-label switch-label-1\" >";
        // line 737
        echo ($context["entry_type_all"] ?? null);
        echo "</label>';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-2\" onClick=\"GetOptionsSelect();\" id=\"option-cate-' + tab_id + '\" value=\"1\"/>';
    html += '<label for=\"option-cate-' + tab_id + '\" class=\"switch-label switch-label-2\">";
        // line 739
        echo ($context["entry_type_cate"] ?? null);
        echo "</label>';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-3\" onClick=\"GetOptionsSelect();\" id=\"option-auto-' + tab_id + '\" value=\"2\"/>';
    html += '<label for=\"option-auto-' + tab_id + '\" class=\"switch-label switch-label-3\">";
        // line 741
        echo ($context["entry_type_auto"] ?? null);
        echo "</label>';
    html += '<span class=\"switch-selection\"></span>';
    html += '</div></div>';
    html += '</div>';

    /////////////////////////////////

    html += '<div class=\"option-all-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-product\">";
        // line 750
        echo ($context["entry_product"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-4\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][productall]\" value=\"\" placeholder=\"";
        // line 752
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product-' + tab_id + '\" class=\"form-control\" />';
        html += '<div id=\"featured-product-' + tab_id + '\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
        html += '</div></div></div></div>'; 

        ////////////////////////////////////

        html += '<div class=\"option-cate-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-cate_id\">";
        // line 760
        echo ($context["entry_cate_select"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][cate_name]\" value=\"\" placeholder=\"Search category\" id=\"input-cate_name-' + tab_id + '\" class=\"form-control input-cate_name\" /><i class=\"fa fa-times\"></i>';
        html += '<input type=\"hidden\" name=\"octab[' + tab_id + '][cate_id]\" value=\"\" id=\"input-cate_id-' + tab_id + '\" />';
        html += '</div></div>';

        html += '<div class=\"form-group parent-form\">';
        html += '<label class=\"control-label\" for=\"input-productfrom\">";
        // line 767
        echo ($context["entry_pfrom"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';             
        html += '<div class=\"switch switch-long switch-multi3\">';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-all-' + tab_id + '\" value=\"1\" checked=\"checked\"  onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-all-' + tab_id + '\" class=\"switch-label switch-label-1\">";
        // line 771
        echo ($context["entry_pfrom_all"] ?? null);
        echo "</label>';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-select-' + tab_id + '\" value=\"0\" onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-select-' + tab_id + '\" class=\"switch-label switch-label-2\">";
        // line 773
        echo ($context["entry_pfrom_select"] ?? null);
        echo "</label>';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-specific-' + tab_id + '\" value=\"2\" onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-specific-' + tab_id + '\" class=\"switch-label switch-label-3\">";
        // line 775
        echo ($context["entry_specificproduct"] ?? null);
        echo "</label>';
        html += '<span class=\"switch-selection\"></span>';                 
        html += '</div></div></div>';

        html += '<div class=\"productfrom-all-' + tab_id + '-selected select-options\"></div>';

        html += '<div class=\"productfrom-select-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-productcate-' + tab_id + '\">";
        // line 783
        echo ($context["entry_product"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-4\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][productcate]\" value=\"\" placeholder=\"";
        // line 785
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-productcate-' + tab_id + '\" class=\"form-control\" />';
        html += '<div id=\"category-product-' + tab_id + '\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
        html += '</div></div></div></div>';


        html += '<div class=\"productfrom-specific-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-specific-product-' + tab_id + '\">";
        // line 792
        echo ($context["entry_selectspecificproduct"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';
        html += '<small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
        // line 794
        echo ($context["entry_selectspecificproduct_small"] ?? null);
        echo "</small>';
        html += '<select name=\"octab[' + tab_id + '][input_specific_product]\" id=\"input-specific-product-' + tab_id + '\" class=\"form-control\">';
        html += '<option value=\"0\">";
        // line 796
        echo ($context["entry_new"] ?? null);
        echo "</option>';
        html += '<option value=\"1\">";
        // line 797
        echo ($context["entry_sale"] ?? null);
        echo "</option>';
        html += '<option value=\"2\">";
        // line 798
        echo ($context["entry_bestseller"] ?? null);
        echo "</option>';
        html += '<option value=\"3\">";
        // line 799
        echo ($context["entry_mostview"] ?? null);
        echo "</option>';
        html += '<option value=\"4\">";
        // line 800
        echo ($context["entry_dealproducts"] ?? null);
        echo "</option>';
        html += '</select></div></div></div></div>';

        html += '<div class=\"option-auto-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group auto-select\">';
        html += '<label class=\"control-label\" for=\"input-autoproduct-' + tab_id + '\">";
        // line 805
        echo ($context["entry_product"] ?? null);
        echo "</label>';
        html += '<div class=\"control-option width-2\">';
        html += '<select name=\"octab[' + tab_id + '][autoproduct]\" id=\"input-select-' + tab_id + '\" class=\"form-control\">';
        html += '<option value=\"0\">";
        // line 808
        echo ($context["entry_new"] ?? null);
        echo "</option>';
        html += '<option value=\"1\">";
        // line 809
        echo ($context["entry_sale"] ?? null);
        echo "</option>';
        html += '<option value=\"2\">";
        // line 810
        echo ($context["entry_bestseller"] ?? null);
        echo "</option>';
        html += '<option value=\"3\">";
        // line 811
        echo ($context["entry_mostview"] ?? null);
        echo "</option>';
        html += '<option value=\"4\">";
        // line 812
        echo ($context["entry_dealproducts"] ?? null);
        echo "</option>';
        html += '</select></div></div></div>';
    html += '</div></div>';
  
  \$('.tabs-container').append(html); 
  GetOptionsSelect(); 
  afterAdd();
  loadAutocomplete(tab_id);
  tab_id++;
  \$('body').scrollTop(10000);
}
//--></script>
</div>
";
        // line 825
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/octabproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2009 => 825,  1993 => 812,  1989 => 811,  1985 => 810,  1981 => 809,  1977 => 808,  1971 => 805,  1963 => 800,  1959 => 799,  1955 => 798,  1951 => 797,  1947 => 796,  1942 => 794,  1937 => 792,  1927 => 785,  1922 => 783,  1911 => 775,  1906 => 773,  1901 => 771,  1894 => 767,  1884 => 760,  1873 => 752,  1868 => 750,  1856 => 741,  1851 => 739,  1846 => 737,  1840 => 734,  1836 => 732,  1825 => 729,  1821 => 728,  1818 => 727,  1814 => 726,  1809 => 724,  1804 => 722,  1790 => 710,  1782 => 708,  1777 => 706,  1773 => 705,  1769 => 704,  1764 => 703,  1760 => 702,  1696 => 641,  1665 => 613,  1632 => 583,  1624 => 578,  1604 => 561,  1601 => 560,  1595 => 559,  1593 => 558,  1585 => 552,  1580 => 550,  1576 => 549,  1572 => 548,  1568 => 547,  1563 => 546,  1558 => 544,  1554 => 543,  1550 => 542,  1546 => 541,  1541 => 540,  1539 => 539,  1535 => 538,  1531 => 537,  1527 => 536,  1523 => 535,  1518 => 534,  1516 => 533,  1512 => 532,  1508 => 531,  1504 => 530,  1500 => 529,  1495 => 528,  1493 => 527,  1489 => 526,  1485 => 525,  1481 => 524,  1477 => 523,  1472 => 522,  1470 => 521,  1464 => 520,  1457 => 518,  1452 => 516,  1444 => 510,  1439 => 508,  1435 => 507,  1431 => 506,  1427 => 505,  1422 => 504,  1417 => 502,  1413 => 501,  1409 => 500,  1405 => 499,  1400 => 498,  1398 => 497,  1394 => 496,  1390 => 495,  1386 => 494,  1382 => 493,  1377 => 492,  1375 => 491,  1371 => 490,  1367 => 489,  1363 => 488,  1359 => 487,  1354 => 486,  1352 => 485,  1348 => 484,  1344 => 483,  1340 => 482,  1336 => 481,  1331 => 480,  1329 => 479,  1323 => 478,  1319 => 477,  1312 => 475,  1307 => 473,  1301 => 469,  1289 => 465,  1285 => 464,  1281 => 463,  1277 => 462,  1271 => 461,  1267 => 460,  1259 => 459,  1252 => 457,  1247 => 455,  1241 => 452,  1230 => 446,  1220 => 445,  1214 => 444,  1204 => 443,  1198 => 442,  1188 => 441,  1180 => 438,  1169 => 434,  1161 => 433,  1154 => 431,  1149 => 429,  1142 => 424,  1131 => 421,  1127 => 420,  1123 => 419,  1118 => 417,  1112 => 416,  1108 => 415,  1100 => 414,  1093 => 412,  1088 => 410,  1077 => 404,  1067 => 403,  1061 => 402,  1051 => 401,  1045 => 400,  1035 => 399,  1029 => 396,  1024 => 393,  1007 => 390,  1003 => 389,  1000 => 388,  996 => 387,  991 => 385,  983 => 382,  980 => 381,  975 => 380,  973 => 379,  965 => 373,  959 => 371,  957 => 370,  953 => 369,  950 => 368,  944 => 366,  942 => 365,  938 => 364,  931 => 362,  922 => 358,  917 => 356,  908 => 350,  902 => 349,  898 => 348,  892 => 347,  886 => 344,  877 => 338,  871 => 337,  867 => 336,  861 => 335,  855 => 332,  846 => 326,  840 => 325,  836 => 324,  830 => 323,  824 => 320,  815 => 314,  809 => 313,  805 => 312,  799 => 311,  791 => 308,  782 => 302,  776 => 301,  772 => 300,  766 => 299,  760 => 296,  751 => 290,  745 => 289,  741 => 288,  735 => 287,  729 => 284,  720 => 278,  714 => 277,  710 => 276,  704 => 275,  698 => 272,  689 => 266,  683 => 265,  679 => 264,  673 => 263,  667 => 260,  658 => 254,  652 => 253,  648 => 252,  642 => 251,  636 => 248,  633 => 247,  627 => 242,  620 => 237,  613 => 232,  611 => 231,  605 => 227,  603 => 226,  597 => 222,  595 => 221,  588 => 218,  580 => 212,  575 => 211,  569 => 209,  567 => 208,  563 => 207,  558 => 206,  552 => 204,  550 => 203,  546 => 202,  541 => 201,  535 => 199,  533 => 198,  529 => 197,  525 => 196,  520 => 194,  511 => 188,  505 => 187,  501 => 186,  495 => 185,  489 => 182,  480 => 176,  474 => 175,  470 => 174,  464 => 173,  458 => 170,  450 => 165,  445 => 163,  437 => 158,  432 => 156,  423 => 150,  417 => 149,  413 => 148,  407 => 147,  401 => 144,  393 => 139,  388 => 137,  379 => 131,  373 => 130,  369 => 129,  363 => 128,  357 => 125,  350 => 121,  345 => 119,  338 => 115,  333 => 113,  323 => 106,  317 => 105,  313 => 104,  307 => 103,  301 => 100,  292 => 94,  286 => 93,  282 => 92,  276 => 91,  272 => 90,  266 => 89,  260 => 86,  257 => 85,  252 => 81,  236 => 77,  231 => 75,  226 => 74,  222 => 73,  214 => 70,  211 => 69,  203 => 65,  198 => 63,  193 => 60,  180 => 57,  176 => 56,  173 => 55,  169 => 54,  164 => 52,  154 => 45,  148 => 44,  144 => 43,  138 => 42,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/octabproducts.twig", "");
    }
}
