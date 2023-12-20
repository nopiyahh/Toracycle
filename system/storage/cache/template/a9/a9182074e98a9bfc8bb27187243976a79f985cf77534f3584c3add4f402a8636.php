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

/* tt_aero3/template/common/search.twig */
class __TwigTemplate_9b92fc5c222ee8b47b8b704221f19ee20521ca2c8c64f7bb988366e4fb51acf8 extends \Twig\Template
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
\t
\t\t
\t\t<div class=\" search-content\" >
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
\t
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aero3/template/common/search.twig";
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
        return new Source("", "tt_aero3/template/common/search.twig", "");
    }
}
