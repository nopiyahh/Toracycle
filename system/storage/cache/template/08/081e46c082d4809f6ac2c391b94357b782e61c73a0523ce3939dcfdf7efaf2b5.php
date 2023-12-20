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

/* blog/article_form.twig */
class __TwigTemplate_951b22069b8f619d99d5c7a2c509cba6d08effa2186c61a1bab337a942ae3f84 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-article\" data-toggle=\"tooltip\" title=\"";
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
            echo "              <li><a href=\"";
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
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\" class=\"form-horizontal\">
          <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t";
        // line 32
        if (($context["status"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t  </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 43
        echo ($context["entry_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 47
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 49
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 49), ($context["article_store"] ?? null))) {
                // line 50
                echo "                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 50);
                echo "\" checked=\"checked\" />
                    ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 51);
                echo "
                    ";
            } else {
                // line 53
                echo "                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 53);
                echo "\" />
                    ";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 54);
                echo "
                    ";
            }
            // line 56
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </div>
            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 63
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"sort_order\" value=\"";
        // line 65
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"blog-image\">";
        // line 70
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t  <a href=\"javascript:void(0);\" id=\"blog-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 72
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t  <input type=\"hidden\" name=\"image\" value=\"";
        // line 73
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
\t\t\t  </div>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 78
        echo ($context["entry_author"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"author\" value=\"";
        // line 80
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
          <div class=\"tab-content\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 86
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 86);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 86);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 86);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 86);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 91
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["article_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["article_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null), "name", [], "any", false, false, false, 95)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" class=\"form-control\" />
                      ";
            // line 96
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null)) {
                // line 97
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 99
            echo "                    </div>
                  </div>

                  <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-intro-text";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "\">";
            echo ($context["entry_intro_text"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" data-toggle=\"summernote\" name=\"article_description[";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
            echo "][intro_text]\" placeholder=\"";
            echo ($context["entry_intro_text"] ?? null);
            echo "\" id=\"input-intro-text";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
            echo "\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["article_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["article_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105)] ?? null) : null), "intro_text", [], "any", false, false, false, 105)) : (""));
            echo "</textarea>
                        </div>
                  </div>


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea class=\"form-control\" data-toggle=\"summernote\" name=\"article_description[";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            echo "\">";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["article_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["article_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null), "description", [], "any", false, false, false, 113)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["article_description"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["article_description"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null), "meta_title", [], "any", false, false, false, 119)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119);
            echo "\" class=\"form-control\" />
                      ";
            // line 120
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_meta_title"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null)) {
                // line 121
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_meta_title"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 123
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["article_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["article_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null), "meta_description", [], "any", false, false, false, 128)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "\" class=\"form-control\">";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["article_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["article_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 134)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\" title=\"";
            // line 138
            echo ($context["help_keyword"] ?? null);
            echo "\">";
            echo ($context["entry_keyword"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"keyword\" value=\"";
            // line 140
            echo ($context["keyword"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_keyword"] ?? null);
            echo "\" id=\"input-keyword\" class=\"form-control\" />
                      ";
            // line 141
            if (($context["error_keyword"] ?? null)) {
                // line 142
                echo "                      <div class=\"text-danger\">";
                echo ($context["error_keyword"] ?? null);
                echo "</div>
                      ";
            }
            // line 144
            echo "                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "              </div>


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
</div>
<script type=\"text/javascript\"><!--

    \$('#language a:first').tab('show');

    //--></script>
";
        // line 171
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "blog/article_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 171,  448 => 148,  439 => 144,  433 => 142,  431 => 141,  425 => 140,  418 => 138,  405 => 134,  398 => 132,  385 => 128,  378 => 126,  373 => 123,  367 => 121,  365 => 120,  355 => 119,  348 => 117,  335 => 113,  328 => 111,  313 => 105,  306 => 103,  300 => 99,  294 => 97,  292 => 96,  282 => 95,  275 => 93,  269 => 91,  265 => 90,  261 => 88,  244 => 86,  240 => 85,  230 => 80,  225 => 78,  217 => 73,  211 => 72,  206 => 70,  196 => 65,  191 => 63,  185 => 59,  177 => 56,  172 => 54,  167 => 53,  162 => 51,  157 => 50,  155 => 49,  151 => 47,  147 => 46,  141 => 43,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/article_form.twig", "");
    }
}
