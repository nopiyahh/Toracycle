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

/* tt_aero3/template/common/footer.twig */
class __TwigTemplate_3cc71431a431631e773d8951bcf89cfefd0aeba775e7c98f28d493be492f10be extends \Twig\Template
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
        echo "
<footer>
\t
\t<div class=\"footer-top\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t  <div class=\"col1 col-md-4 col-sm-12 col-footer\">
\t\t\t\t\t";
        // line 8
        if (($context["block5"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t\t";
            echo ($context["block5"] ?? null);
            echo "
\t\t\t\t\t";
        }
        // line 10
        echo "\t
\t\t\t\t</div>
\t\t\t  ";
        // line 12
        if (($context["informations"] ?? null)) {
            // line 13
            echo "\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
            // line 14
            echo ($context["text_information"] ?? null);
            echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 18
                echo "\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 18);
                echo "</a></li>
\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t  <li><a href=\"";
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
            // line 21
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
        }
        // line 26
        echo "\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 27
        echo ($context["text_service"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 30
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 31
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 32
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 33
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 34
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 35
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col4 col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 40
        echo ($context["text_extra"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 43
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 44
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 45
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 46
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 47
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 48
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 53
        echo ($context["text_account"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 56
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 57
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 58
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 59
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 60
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 61
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"container-inner\">
\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t<span>";
        // line 72
        echo ($context["powered"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 74
        if (($context["block7"] ?? null)) {
            // line 75
            echo "\t\t\t\t\t";
            echo ($context["block7"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 76
        echo "\t
\t\t\t\t";
        // line 77
        if (($context["block6"] ?? null)) {
            // line 78
            echo "\t\t\t\t\t";
            echo ($context["block6"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 79
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"back-top\"><i class=\"fa fa-angle-up\"></i></div>
</footer>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t// hide #back-top first
\t\$(\"#back-top\").hide();
\t// fade in #back-top
\t\$(function () {
\t\t\$(window).scroll(function () {
\t\t\tif (\$(this).scrollTop() > \$('body').height()/3) {
\t\t\t\t\$('#back-top').fadeIn();
\t\t\t} else {
\t\t\t\t\$('#back-top').fadeOut();
\t\t\t}
\t\t});
\t\t// scroll body to 0px on click
\t\t\$('#back-top').click(function () {
\t\t\t\$('body,html').animate({scrollTop: 0}, 800);
\t\t\treturn false;
\t\t});
\t});
});
</script>
";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 107
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_aero3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 109,  305 => 107,  301 => 106,  272 => 79,  266 => 78,  264 => 77,  261 => 76,  255 => 75,  253 => 74,  248 => 72,  232 => 61,  226 => 60,  220 => 59,  214 => 58,  208 => 57,  202 => 56,  196 => 53,  186 => 48,  180 => 47,  174 => 46,  168 => 45,  162 => 44,  156 => 43,  150 => 40,  140 => 35,  134 => 34,  128 => 33,  122 => 32,  116 => 31,  110 => 30,  104 => 27,  101 => 26,  91 => 21,  84 => 20,  73 => 18,  69 => 17,  63 => 14,  60 => 13,  58 => 12,  54 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero3/template/common/footer.twig", "");
    }
}
