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

/* common/header.twig */
class __TwigTemplate_b3f50df6da91ea240f217c4b98d4fe2eaeebfad41b6a9e4a91ad51f874e64733 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<link rel=\"icon\" href=\"view/image/favicon.svg\">
<meta charset=\"UTF-8\" />
<title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 7
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 8
        if (($context["description"] ?? null)) {
            // line 9
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 11
        if (($context["keywords"] ?? null)) {
            // line 12
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 14
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/dc_styles.css?v=2\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 29);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 29);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 40
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand pro-label\"><img src=\"view/image/logo_left.svg\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a><button class=\"change_theme\"></button></div>
    ";
        // line 41
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown dropdown_plus\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 43
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 45
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 46
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 47
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 48
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 49
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 55
            echo ($context["search"] ?? null);
            echo "
    </div>

    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"hidden-md hidden-lg\"><a href=\"#\" id=\"navbar-dc-pro-menu\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i><span class=\"label\">";
            // line 59
            echo ($context["count_all"] ?? null);
            echo "</span><i class=\"fa fa-caret-down fa-fw\"></i></a>
        </li>
      <li class=\"dropdown dropdown_user\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 61
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />
        <!-- ";
            // line 62
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " -->
        <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 65
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 67
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 69
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 69);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 69);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 72
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://dev-opencart.com/devcart\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 73
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://dev-opencart.com/devcart-faq\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 74
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://t.me/devcart\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 75
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 78
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>

    <ul class=\"nav navbar-nav navbar-right navbar-dc-pro\">
      <!-- dc_pro -->
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 83
            echo ($context["reviews"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["reviews_total"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 85
            echo ($context["art_aqa_product"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-question-circle fa-lg\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["art_aqa_product_total"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 87
            echo ($context["found_cheaper_link"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["found_cheaper_count"] ?? null);
            echo "</span></a>
        </li>
        <!-- <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 89
            echo ($context["fast_checkout_link"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["fast_checkout_count"] ?? null);
            echo "</span></a>
        </li> -->
        <li class=\"dropdown-dc-pro dropdown dropdown_orders\"><a class=\"dropdown-toggle dc_header_count_icon\" data-toggle=\"dropdown\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span class=\"label\">";
            // line 91
            echo ($context["orders_count"] ?? null);
            echo "</span><i class=\"fa fa-caret-down fa-fw\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            <li class=\"dropdown-header\">Заказы</li>
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 95
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "link", [], "any", false, false, false, 95);
                echo "\"><span class=\"label label-info pull-right\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "total", [], "any", false, false, false, 95);
                echo "</span>";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 95);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "          </ul>
        </li>
      <!------------>
    </ul>
    ";
        }
        // line 101
        echo "</div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 101,  334 => 97,  321 => 95,  317 => 94,  311 => 91,  304 => 89,  297 => 87,  290 => 85,  283 => 83,  273 => 78,  267 => 75,  263 => 74,  259 => 73,  255 => 72,  252 => 71,  241 => 69,  237 => 68,  233 => 67,  226 => 65,  218 => 62,  208 => 61,  203 => 59,  196 => 55,  185 => 49,  179 => 48,  173 => 47,  167 => 46,  161 => 45,  154 => 43,  149 => 41,  141 => 40,  134 => 35,  125 => 33,  121 => 32,  118 => 31,  107 => 29,  103 => 28,  90 => 26,  86 => 25,  73 => 14,  67 => 12,  65 => 11,  59 => 9,  57 => 8,  53 => 7,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
