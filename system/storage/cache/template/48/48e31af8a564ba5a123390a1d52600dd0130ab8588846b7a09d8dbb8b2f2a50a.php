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

/* tt_aero1/template/common/footer.twig */
class __TwigTemplate_04afe2bd3a3ab234ed06053f9ca87ef871518d9412be2e88867bb3cc824d7b2c extends \Twig\Template
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
\t\t\t  
\t\t\t  ";
        // line 8
        if (($context["informations"] ?? null)) {
            // line 9
            echo "\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
            // line 10
            echo ($context["text_information"] ?? null);
            echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 14);
                echo "</a></li>
\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t  <li><a href=\"";
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
            // line 17
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
        }
        // line 22
        echo "\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 23
        echo ($context["text_service"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 26
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 27
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 28
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 29
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 30
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 31
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col4 col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 36
        echo ($context["text_extra"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 39
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 40
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 41
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 42
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 43
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 44
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-2 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h3>";
        // line 49
        echo ($context["text_account"] ?? null);
        echo "</h3></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 52
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 53
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 54
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 55
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 56
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 57
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
        // line 68
        echo ($context["powered"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 70
        if (($context["block7"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t";
            echo ($context["block7"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 72
        echo "\t
\t\t\t\t";
        // line 73
        if (($context["block6"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t";
            echo ($context["block6"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 75
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 103
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_aero1/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 105,  293 => 103,  289 => 102,  260 => 75,  254 => 74,  252 => 73,  249 => 72,  243 => 71,  241 => 70,  236 => 68,  220 => 57,  214 => 56,  208 => 55,  202 => 54,  196 => 53,  190 => 52,  184 => 49,  174 => 44,  168 => 43,  162 => 42,  156 => 41,  150 => 40,  144 => 39,  138 => 36,  128 => 31,  122 => 30,  116 => 29,  110 => 28,  104 => 27,  98 => 26,  92 => 23,  89 => 22,  79 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aero1/template/common/footer.twig", "");
    }
}
