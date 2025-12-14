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
class __TwigTemplate_d1d0bf9c4eecf811806741b9b461fdfbfef09a84030999de06d49c455859dd36 extends \Twig\Template
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

\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
\t\t\t\t
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 29
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 29);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 29);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 29);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 32);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 32);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<!--OC15-TE-->
<script type=\"text/javascript\" src=\"view/javascript/client_translate_expert.js?v=02.06.1000\"></script>
<link type=\"text/css\" rel=\"stylesheet\" href=\"view/stylesheet/client_translate_expert.css?v=02.06.1000\" />

</head>
<body>

\t\t\t\t";
        // line 45
        if (($context["warning_file_update_speedy"] ?? null)) {
            // line 46
            echo "\t\t\t\t<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"update_speedy_modal\">
\t\t\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t        <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> Выполните обновление</h4>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-body\">
\t\t\t\t        <p>Будь ласка, виконайте оновлення шаблону до кінця.</p>
\t\t\t\t        <p>Натисніть на це посилання: <a target=\"_blank\" href=\"";
            // line 55
            echo ($context["update_speedy_file_link"] ?? null);
            echo "\"><b>update_speedy.php</b></a></p>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t  \$(document).ready(function() {

\t\t\t\t    \$('#update_speedy_modal').modal();
\t\t\t\t  })
\t\t\t\t</script>
\t\t\t\t";
        }
        // line 67
        echo "\t      \t
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">

<script>
\tdocument.js_const_client_translate_expert_is_enabled = ";
        // line 72
        echo ($context["client_translate_expert_is_enabled"] ?? null);
        echo ";
\tdocument.js_const_client_translate_expert_languages = ";
        // line 73
        echo ($context["client_translate_expert_languages"] ?? null);
        echo ";
</script>
\t  
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 77
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand pro-label\"><img src=\"view/image/logo_left.svg\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a><button class=\"change_theme\"></button></div>
    ";
        // line 78
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown dropdown_plus\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 80
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 82
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 83
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 84
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 85
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 86
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 92
            echo ($context["search"] ?? null);
            echo "
    </div>

    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"hidden-md hidden-lg\"><a href=\"#\" id=\"navbar-dc-pro-menu\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i><span class=\"label\">";
            // line 96
            echo ($context["count_all"] ?? null);
            echo "</span><i class=\"fa fa-caret-down fa-fw\"></i></a>
        </li>
      <li class=\"dropdown dropdown_user\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 98
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />
        <!-- ";
            // line 99
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " -->
        <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 102
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 104
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 106
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 106);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 106);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 109
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://dev-opencart.com/devcart\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 110
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://dev-opencart.com/devcart-faq\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 111
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://t.me/devcart\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 112
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 115
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>

    <ul class=\"nav navbar-nav navbar-right navbar-dc-pro\">
      <!-- dc_pro -->
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 120
            echo ($context["reviews"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["reviews_total"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 122
            echo ($context["art_aqa_product"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-question-circle fa-lg\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["art_aqa_product_total"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 124
            echo ($context["found_cheaper_link"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["found_cheaper_count"] ?? null);
            echo "</span></a>
        </li>
        <!-- <li class=\"dropdown-dc-pro\"><a href=\"";
            // line 126
            echo ($context["fast_checkout_link"] ?? null);
            echo "\" class=\"dc_header_count_icon\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i><span class=\"label\">";
            echo ($context["fast_checkout_count"] ?? null);
            echo "</span></a>
        </li> -->
        <li class=\"dropdown-dc-pro dropdown dropdown_orders\"><a class=\"dropdown-toggle dc_header_count_icon\" data-toggle=\"dropdown\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span class=\"label\">";
            // line 128
            echo ($context["orders_count"] ?? null);
            echo "</span><i class=\"fa fa-caret-down fa-fw\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            <li class=\"dropdown-header\">Заказы</li>
            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 132
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "link", [], "any", false, false, false, 132);
                echo "\"><span class=\"label label-info pull-right\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "total", [], "any", false, false, false, 132);
                echo "</span>";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 132);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "          </ul>
        </li>
      <!------------>
    </ul>
    ";
        }
        // line 138
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
        return array (  392 => 138,  385 => 134,  372 => 132,  368 => 131,  362 => 128,  355 => 126,  348 => 124,  341 => 122,  334 => 120,  324 => 115,  318 => 112,  314 => 111,  310 => 110,  306 => 109,  303 => 108,  292 => 106,  288 => 105,  284 => 104,  277 => 102,  269 => 99,  259 => 98,  254 => 96,  247 => 92,  236 => 86,  230 => 85,  224 => 84,  218 => 83,  212 => 82,  205 => 80,  200 => 78,  192 => 77,  185 => 73,  181 => 72,  174 => 67,  159 => 55,  148 => 46,  146 => 45,  137 => 38,  128 => 36,  124 => 35,  121 => 34,  110 => 32,  106 => 31,  93 => 29,  89 => 28,  73 => 14,  67 => 12,  65 => 11,  59 => 9,  57 => 8,  53 => 7,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
