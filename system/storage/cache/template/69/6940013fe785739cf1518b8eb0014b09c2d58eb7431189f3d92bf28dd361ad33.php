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

/* tt_aero2/template/common/search.twig */
class __TwigTemplate_1351e3a4a5451c942544546f3f19c0f838439972040956831c69701247d24e1c extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<div class=\"btn-group\">
\t\t<div class=\"dropdown-toggle search-button\" data-toggle=\"dropdown\"></div>
\t\t<div class=\"dropdown-menu search-content\" >
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
\t\t\t<span class=\"input-group-btn\">
\t\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"></button>
\t\t\t</span>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aero2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero2/template/common/search.twig", "");
    }
}
