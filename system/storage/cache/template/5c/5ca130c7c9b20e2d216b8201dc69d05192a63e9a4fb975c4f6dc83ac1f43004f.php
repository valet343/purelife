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

/* speedy/template/common/header.twig */
class __TwigTemplate_10f8cb61cc84353cea68cb59fba3031dc4241a142555274d131d24cddaf22048 extends \Twig\Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        if (($context["og_image"] ?? null)) {
        } else {
        }
        // line 26
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
";
        // line 28
        if ((($context["font_family"] ?? null) == 1)) {
            echo "<link href=\"catalog/view/theme/speedy/stylesheet/fonts_1.css\" rel=\"stylesheet\">";
        } elseif ((($context["font_family"] ?? null) == 2)) {
            echo "<link href=\"catalog/view/theme/speedy/stylesheet/fonts_2.css\" rel=\"stylesheet\">";
        } elseif ((($context["font_family"] ?? null) == 3)) {
            echo "<link href=\"catalog/view/theme/speedy/stylesheet/fonts_3.css\" rel=\"stylesheet\">";
        }
        // line 29
        echo "<style>
:root {
  --container_width: ";
        // line 31
        echo ($context["container_width"] ?? null);
        if (($context["container_width_type"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo ";
  --container_width_lg: ";
        // line 32
        echo ($context["container_width_lg"] ?? null);
        if (($context["container_width_type_lg"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo ";
  --container_width_md: ";
        // line 33
        echo ($context["container_width_md"] ?? null);
        if (($context["container_width_type_md"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo ";
  --container_width_sm: ";
        // line 34
        echo ($context["container_width_sm"] ?? null);
        if (($context["container_width_type_sm"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo ";
  --container_width_xs: ";
        // line 35
        echo ($context["container_width_xs"] ?? null);
        if (($context["container_width_type_xs"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo ";
  --font_size: ";
        // line 36
        echo ($context["font_size"] ?? null);
        echo "px;
  ";
        // line 37
        if (($context["main_color_type"] ?? null)) {
            // line 38
            echo "  --buttons_color: linear-gradient(45deg, ";
            echo ($context["main_color"] ?? null);
            echo " 0%, ";
            echo ($context["main_color_2"] ?? null);
            echo " 50%, ";
            echo ($context["main_color_3"] ?? null);
            echo " 100%);
  --main_color_2: ";
            // line 39
            echo ($context["main_color_2"] ?? null);
            echo ";
  --main_color_3: ";
            // line 40
            echo ($context["main_color_3"] ?? null);
            echo ";
  ";
        } else {
            // line 42
            echo "  --buttons_color: ";
            echo ($context["main_color"] ?? null);
            echo ";
  ";
        }
        // line 44
        echo "  --main_color: ";
        echo ($context["main_color"] ?? null);
        echo ";
  --header_color: ";
        // line 45
        echo ($context["header_color"] ?? null);
        echo ";
  --special_color: ";
        // line 46
        echo ($context["special_color"] ?? null);
        echo ";
  --background_color: ";
        // line 47
        echo ($context["background_color"] ?? null);
        echo ";
  --background_top_color: ";
        // line 48
        echo ($context["background_top_color"] ?? null);
        echo ";
  --background_footer_color: ";
        // line 49
        echo ($context["background_footer_color"] ?? null);
        echo ";
  --background_payments_color: ";
        // line 50
        echo ($context["background_payments_color"] ?? null);
        echo ";
}
</style>
<link href=\"catalog/view/theme/speedy/stylesheet/stylesheet.css";
        // line 53
        if (($context["developer_mode"] ?? null)) {
            echo "?v=";
            echo ($context["developer_mode"] ?? null);
        }
        echo "\" rel=\"stylesheet\">
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 55
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 55);
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 55);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 55);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        if (($context["code_header_css_link"] ?? null)) {
            echo "<link href=\"catalog/view/theme/speedy/stylesheet/";
            echo ($context["code_header_css_link"] ?? null);
            echo ".css";
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" rel=\"stylesheet\">";
        }
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 59
            echo "<script src=\"";
            echo $context["script"];
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "<script src=\"catalog/view/javascript/common_pro_themes.js";
        if (($context["developer_mode"] ?? null)) {
            echo "?v=";
            echo ($context["developer_mode"] ?? null);
        }
        echo "\" type=\"text/javascript\"></script>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 63
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 63);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 63);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 66
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        if (($context["code_header_css"] ?? null)) {
            echo "<style>";
            echo ($context["code_header_css"] ?? null);
            echo "</style>";
        }
        // line 69
        if (($context["code_header_js"] ?? null)) {
            echo "<script>";
            echo ($context["code_header_js"] ?? null);
            echo "</script>";
        }
        // line 70
        if (((($context["buyoneclick_status_product"] ?? null) || ($context["buyoneclick_status_category"] ?? null)) || ($context["buyoneclick_status_module"] ?? null))) {
            // line 71
            echo "<script async src=\"catalog/view/javascript/buyoneclick.js";
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" type=\"text/javascript\"></script>
<script>
  function clickAnalytics(){
    ";
            // line 74
            if (((((($context["buyoneclick_google_status"] ?? null) && (isset($context["buyoneclick_google_category_btn"]) || array_key_exists("buyoneclick_google_category_btn", $context))) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && (isset($context["buyoneclick_google_action_btn"]) || array_key_exists("buyoneclick_google_action_btn", $context))) && (($context["buyoneclick_google_action_btn"] ?? null) != ""))) {
                // line 75
                echo "      ga('send', 'event', '";
                echo ($context["buyoneclick_google_category_btn"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_btn"] ?? null);
                echo "');
      gtag('event', '";
                // line 76
                echo ($context["buyoneclick_google_action_btn"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_btn"] ?? null);
                echo "'});
    ";
            }
            // line 78
            echo "    return true;
  }
  function clickAnalyticsSend(){
    ";
            // line 81
            if (((((($context["buyoneclick_google_status"] ?? null) && (isset($context["buyoneclick_google_category_send"]) || array_key_exists("buyoneclick_google_category_send", $context))) && (($context["buyoneclick_google_category_send"] ?? null) != "")) && (isset($context["buyoneclick_google_action_send"]) || array_key_exists("buyoneclick_google_action_send", $context))) && (($context["buyoneclick_google_action_send"] ?? null) != ""))) {
                // line 82
                echo "      ga('send', 'event', '";
                echo ($context["buyoneclick_google_category_send"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_send"] ?? null);
                echo "');
      gtag('event', '";
                // line 83
                echo ($context["buyoneclick_google_action_send"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_send"] ?? null);
                echo "'});
    ";
            }
            // line 85
            echo "    return true;
  }
  function clickAnalyticsSuccess(){
    ";
            // line 88
            if (((((($context["buyoneclick_google_status"] ?? null) && (isset($context["buyoneclick_google_category_success"]) || array_key_exists("buyoneclick_google_category_success", $context))) && (($context["buyoneclick_google_category_success"] ?? null) != "")) && (isset($context["buyoneclick_google_action_success"]) || array_key_exists("buyoneclick_google_action_success", $context))) && (($context["buyoneclick_google_action_success"] ?? null) != ""))) {
                // line 89
                echo "      ga('send', 'event', '";
                echo ($context["buyoneclick_google_category_success"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_success"] ?? null);
                echo "');
      gtag('event', '";
                // line 90
                echo ($context["buyoneclick_google_action_success"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_success"] ?? null);
                echo "'});
    ";
            }
            // line 92
            echo "    return true;
  }
</script>
  ";
            // line 95
            if (($context["buyoneclick_validation_type"] ?? null)) {
                // line 96
                echo "    <script async src=\"catalog/view/javascript/jquery.mask.min.js\"></script>
    <script>
      \$(document).ready(function(){
        \$('#boc_phone').mask('";
                // line 99
                echo ($context["buyoneclick_validation_type"] ?? null);
                echo "');
      });
    </script>
  ";
            }
            // line 103
            echo "  ";
            if (($context["buyoneclick_exan_status"] ?? null)) {
                // line 104
                echo "    <script async src=\"catalog/view/javascript/sourcebuster.min.js\"></script>
    <script>
      sbjs.init({
        callback: placeData
      });

      function placeData(sb) {
        \$sb_first_typ   = sb.first.typ;
        \$sb_first_src   = sb.first.src;
        \$sb_first_mdm   = sb.first.mdm;
        \$sb_first_cmp   = sb.first.cmp;
        \$sb_first_cnt   = sb.first.cnt;
        \$sb_first_trm   = sb.first.trm;

        \$sb_curr_typ    = sb.current.typ;
        \$sb_curr_src    = sb.current.src;
        \$sb_curr_mdm    = sb.current.mdm;
        \$sb_curr_cmp    = sb.current.cmp;
        \$sb_curr_cnt    = sb.current.cnt;
        \$sb_curr_trm    = sb.current.trm;

        \$sb_first_add_fd  = sb.first_add.fd;
        \$sb_first_add_ep  = sb.first_add.ep;
        \$sb_first_add_rf  = sb.first_add.rf;

        \$sb_curr_add_fd   = sb.current_add.fd;
        \$sb_curr_add_ep   = sb.current_add.ep;
        \$sb_curr_add_rf   = sb.current_add.rf;

        \$sb_session_pgs   = sb.session.pgs;
        \$sb_session_cpg   = sb.session.cpg;

        \$sb_udata_vst   = sb.udata.vst;
        \$sb_udata_uip   = sb.udata.uip;
        \$sb_udata_uag   = sb.udata.uag;

        \$sb_promo_code    = sb.promo.code;
      };

      function valueData() {
        document.getElementById('sb_first_typ').value = \$sb_first_typ;
        document.getElementById('sb_first_src').value = \$sb_first_src;
        document.getElementById('sb_first_mdm').value = \$sb_first_mdm;
        document.getElementById('sb_first_cmp').value = \$sb_first_cmp;
        document.getElementById('sb_first_cnt').value = \$sb_first_cnt;
        document.getElementById('sb_first_trm').value = \$sb_first_trm;

        document.getElementById('sb_current_typ').value  = \$sb_curr_typ;
        document.getElementById('sb_current_src').value  = \$sb_curr_src;
        document.getElementById('sb_current_mdm').value  = \$sb_curr_mdm;
        document.getElementById('sb_current_cmp').value  = \$sb_curr_cmp;
        document.getElementById('sb_current_cnt').value  = \$sb_curr_cnt;
        document.getElementById('sb_current_trm').value  = \$sb_curr_trm;

        document.getElementById('sb_first_add_fd').value  = \$sb_first_add_fd;
        document.getElementById('sb_first_add_ep').value  = \$sb_first_add_ep;
        document.getElementById('sb_first_add_rf').value  = \$sb_first_add_rf;

        document.getElementById('sb_current_add_fd').value = \$sb_curr_add_fd;
        document.getElementById('sb_current_add_ep').value = \$sb_curr_add_ep;
        document.getElementById('sb_current_add_rf').value = \$sb_curr_add_rf;

        document.getElementById('sb_session_pgs').value  = \$sb_session_pgs;
        document.getElementById('sb_session_cpg').value  = \$sb_session_cpg;

        document.getElementById('sb_udata_vst').value = \$sb_udata_vst;
        document.getElementById('sb_udata_uip').value = \$sb_udata_uip;
        document.getElementById('sb_udata_uag').value = \$sb_udata_uag;

        document.getElementById('sb_promo_code').value   = \$sb_promo_code;
      };
    </script>
  ";
            }
        }
        // line 178
        echo "</head>
<body>
";
        // line 180
        if ((($context["banner_top_status"] ?? null) == 1)) {
            // line 181
            echo "<style>
@media (max-width: 1100px) {
  .banner_top_body {
    padding-top: ";
            // line 184
            if ((($context["banner_top_type"] ?? null) == "banner")) {
                echo ($context["banner_top_height"] ?? null);
            } else {
                echo ($context["banner_top_info_height"] ?? null);
            }
            echo "px;
  }
}
</style>
";
            // line 188
            if ((($context["banner_top_type"] ?? null) == "banner")) {
                // line 189
                echo "  <div class=\"banner_top\" style=\"background: ";
                echo ($context["banner_top_background"] ?? null);
                echo ";height: ";
                echo ($context["banner_top_height"] ?? null);
                echo "px;\">
    ";
                // line 190
                if (($context["banner_top_link"] ?? null)) {
                    // line 191
                    echo "    <a class=\"banner_top_item\" href=\"";
                    echo ($context["banner_top_link"] ?? null);
                    echo "\" target=\"_blank\">
      <img src=\"";
                    // line 192
                    echo ($context["banner_top_image"] ?? null);
                    echo "\" alt=\"\">
      <p>";
                    // line 193
                    echo ($context["banner_top_text"] ?? null);
                    echo "</p>
    </a>
    ";
                } else {
                    // line 196
                    echo "    <span class=\"banner_top_item\">
      <img src=\"";
                    // line 197
                    echo ($context["banner_top_image"] ?? null);
                    echo "\" alt=\"\">
      <p>";
                    // line 198
                    echo ($context["banner_top_text"] ?? null);
                    echo "</p>
    </span>
    ";
                }
                // line 201
                echo "  </div>
";
            } else {
                // line 203
                echo "  <div class=\"banner_top banner_top_info\" style=\"background: ";
                echo ($context["banner_top_info_background"] ?? null);
                echo ";height: ";
                echo ($context["banner_top_info_height"] ?? null);
                echo "px;\">
    ";
                // line 204
                if (($context["banner_top_info_link"] ?? null)) {
                    // line 205
                    echo "    <a class=\"banner_top_item\" href=\"";
                    echo ($context["banner_top_info_link"] ?? null);
                    echo "\" target=\"_blank\">
      <p>";
                    // line 206
                    echo ($context["banner_top_info_text"] ?? null);
                    echo "</p>
    </a>
    ";
                } else {
                    // line 209
                    echo "    <span class=\"banner_top_item\">
      <p>";
                    // line 210
                    echo ($context["banner_top_info_text"] ?? null);
                    echo "</p>
    </span>
    ";
                }
                // line 213
                echo "    <div class=\"banner_top_info_close btn-close\"></div>
  </div>
  <script>
  if (localStorage.getItem('";
                // line 216
                echo ($context["banner_top_info_id"] ?? null);
                echo "') == null) {
    \$(\"body\").addClass(\"banner_top_body\");
    \$(\".banner_top_info\").addClass(\"active\");
  }
  \$(\".banner_top_info_close\").on(\"click\", function() {
    localStorage.setItem('";
                // line 221
                echo ($context["banner_top_info_id"] ?? null);
                echo "', '1');
    \$(\"body\").removeClass(\"banner_top_body\");
    \$(\".banner_top_info\").remove();
  });
</script>
";
            }
        }
        // line 228
        echo "<nav id=\"top\">
  <div class=\"container\">
    <div id=\"m_menu\">
      <button class=\"dropdown-toggle\"></button>
      <div class=\"dropdown-menu\">
        <div class=\"m_menu_header\">
          <div class=\"logo\">
            ";
        // line 235
        if (($context["logo"] ?? null)) {
            // line 236
            echo "              ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 237
                echo "                <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" />
              ";
            } else {
                // line 239
                echo "                <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" /></a>
              ";
            }
            // line 241
            echo "            ";
        }
        // line 242
        echo "          </div>
          <div class=\"btn-close\"></div>
        </div>
        <div class=\"m_menu_header_nav\">
          
        </div>
        <div class=\"m_menu_content\">
          <ul class=\"m_menu_content_links\">
            <li class=\"dropdown dropdown_icon catalog_icon dropdown_catalog\"><a href=\"#\"><img src=\"catalog/view/theme/speedy/image/icons/menu.svg\" alt=\"\">";
        // line 250
        echo ($context["link_catalog"] ?? null);
        echo "</a></li>
            ";
        // line 251
        if (($context["m_menu_custom_links"] ?? null)) {
            // line 252
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["m_menu_custom_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m_menu_custom_link"]) {
                // line 253
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["m_menu_custom_link"], "link", [], "any", false, false, false, 253);
                echo "\"><img wdith=\"24\" height=\"24\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["m_menu_custom_link"], "image", [], "any", false, false, false, 253);
                echo "\" alt=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["m_menu_custom_link"], "title", [], "any", false, false, false, 253);
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m_menu_custom_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "            ";
        }
        // line 256
        echo "            <li class=\"dropdown dropdown_icon customer_icon dropdown_customer\">
              <a href=\"#\"><img wdith=\"24\" height=\"24\" src=\"catalog/view/theme/speedy/image/icons/account.svg\" alt=\"\">";
        // line 257
        echo ($context["link_customer"] ?? null);
        echo "</a>
              <ul class=\"dropdown-menu\"></ul>
            </li>
          </ul>
        </div>
        <ul class=\"m_menu_footer\"></ul>
      </div>
    </div>
    <ul class=\"menu\">
      ";
        // line 266
        if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
            // line 267
            echo "      <li>";
            echo ($context["text_home"] ?? null);
            echo "</li>
      ";
        } else {
            // line 269
            echo "      <li><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["text_home"] ?? null);
            echo "</a></li>
      ";
        }
        // line 271
        echo "      <li><a href=\"";
        echo ($context["blog"] ?? null);
        echo "\">";
        echo ($context["text_blog"] ?? null);
        echo "</a></li>
      ";
        // line 272
        if (($context["informations"] ?? null)) {
            // line 273
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 274
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 274);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 274);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "      ";
        }
        // line 277
        echo "      ";
        if (($context["header_menu_links"] ?? null)) {
            // line 278
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header_menu_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header_menu_link"]) {
                // line 279
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["header_menu_link"], "title", [], "any", false, false, false, 279)) {
                    echo "<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["header_menu_link"], "link", [], "any", false, false, false, 279);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["header_menu_link"], "title", [], "any", false, false, false, 279);
                    echo "</a></li>";
                }
                // line 280
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_menu_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "      ";
        }
        // line 282
        echo "    </ul>
    <div class=\"top_right\">
      ";
        // line 284
        if (($context["header_language"] ?? null)) {
            echo ($context["language"] ?? null);
        }
        // line 285
        echo "      ";
        if (($context["header_currency"] ?? null)) {
            echo ($context["currency"] ?? null);
        }
        // line 286
        echo "      <div class=\"account\">
        <div class=\"dropdown-toggle icon_account\"><span class=\"hidden_xs\">";
        // line 287
        echo ($context["text_account"] ?? null);
        echo "</span></div>
        <div class=\"dropdown-menu\">
          <ul>
            ";
        // line 290
        if (($context["logged"] ?? null)) {
            // line 291
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 292
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 293
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 294
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 295
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 297
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 298
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 300
        echo "          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"logo\">
      ";
        // line 309
        if (($context["logo"] ?? null)) {
            // line 310
            echo "        ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 311
                echo "          <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" />
        ";
            } else {
                // line 313
                echo "          <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" /></a>
        ";
            }
            // line 315
            echo "      ";
        }
        // line 316
        echo "    </div>
    ";
        // line 317
        if ((($context["speedy_menu_status"] ?? null) == 1)) {
            // line 318
            echo "      ";
            echo ($context["speedy_menu"] ?? null);
            echo "
    ";
        } else {
            // line 320
            echo "      ";
            echo ($context["menu"] ?? null);
            echo "
    ";
        }
        // line 322
        echo "    ";
        echo ($context["search"] ?? null);
        echo "
    <div class=\"contacts\">
      <div class=\"dropdown-toggle icon_contacts\">";
        // line 324
        if (($context["header_phones"] ?? null)) {
            echo "<span>";
            echo ($context["telephone"] ?? null);
            echo "</span>";
            if (($context["telephone_2"] ?? null)) {
                echo "<span>";
                echo ($context["telephone_2"] ?? null);
                echo "</span>";
            }
        } else {
            echo "<span>";
            echo ($context["text_callback"] ?? null);
            echo "</span>";
        }
        echo "</div>
      <div class=\"dropdown-menu\">
        ";
        // line 326
        if (($context["header_phones"] ?? null)) {
            // line 327
            echo "        <p>";
            echo ($context["text_telephone"] ?? null);
            echo "</p>
        <ul class=\"phones\">
          <li><a href=\"tel:";
            // line 329
            echo ($context["telephone"] ?? null);
            echo "\">";
            echo ($context["telephone"] ?? null);
            echo "</a></li>
          ";
            // line 330
            if (($context["telephone_2"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone_2"] ?? null);
                echo "\">";
                echo ($context["telephone_2"] ?? null);
                echo "</a></li>";
            }
            // line 331
            echo "          ";
            if (($context["telephone_3"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone_3"] ?? null);
                echo "\">";
                echo ($context["telephone_3"] ?? null);
                echo "</a></li>";
            }
            // line 332
            echo "          ";
            if (($context["telephone_4"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone_4"] ?? null);
                echo "\">";
                echo ($context["telephone_4"] ?? null);
                echo "</a></li>";
            }
            // line 333
            echo "        </ul>
        ";
        }
        // line 335
        echo "        ";
        if ((((($context["header_messengers"] ?? null) && ($context["telegram"] ?? null)) || ($context["viber"] ?? null)) || ($context["whatsapp"] ?? null))) {
            // line 336
            echo "        <p>";
            echo ($context["text_messenger"] ?? null);
            echo "</p>
        <ul class=\"messenger_links\">
          ";
            // line 338
            if (($context["telegram"] ?? null)) {
                echo "<li class=\"telegram\"><a href=\"https://t.me/";
                echo ($context["telegram"] ?? null);
                echo "\"></a></li>";
            }
            // line 339
            echo "          ";
            if (($context["viber"] ?? null)) {
                echo "<li class=\"viber\"><a href=\"viber://chat?number=";
                echo ($context["viber"] ?? null);
                echo "\"></a></li>";
            }
            // line 340
            echo "          ";
            if (($context["whatsapp"] ?? null)) {
                echo "<li class=\"whatsapp\"><a href=\"whatsapp://send?phone=";
                echo ($context["whatsapp"] ?? null);
                echo "\"></a></li>";
            }
            // line 341
            echo "        </ul>
        ";
        }
        // line 343
        echo "        ";
        if (($context["header_email"] ?? null)) {
            // line 344
            echo "        <p>";
            echo ($context["text_email"] ?? null);
            echo "</p>
        <ul class=\"mail\">
          <li><a href=\"mailto:";
            // line 346
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></li>
        </ul>
        ";
        }
        // line 349
        echo "      </div>
      ";
        // line 350
        if ((($context["header_open"] ?? null) && ($context["open"] ?? null))) {
            // line 351
            echo "        <div class=\"open\">";
            echo ($context["open"] ?? null);
            echo "</div>
      ";
        }
        // line 353
        echo "    </div>
    ";
        // line 354
        if (($context["header_compare"] ?? null)) {
            echo "<li class=\"compare\"><a class=\"icon_compare\" href=\"";
            echo ($context["compare"] ?? null);
            echo "\"><p>";
            echo ($context["text_compare_desc"] ?? null);
            echo "</p><span>";
            echo ($context["text_compare"] ?? null);
            echo "</span></a></li>";
        }
        // line 355
        echo "    ";
        if (($context["header_wishlist"] ?? null)) {
            echo "<li class=\"wishlist\"><a class=\"icon_wishlist\" href=\"";
            echo ($context["wishlist"] ?? null);
            echo "\"><p>";
            echo ($context["text_wishlist_desc"] ?? null);
            echo "</p><span>";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a></li>";
        }
        // line 356
        echo "    ";
        echo ($context["cart"] ?? null);
        echo "
  </div>
</header>
";
        // line 359
        if (($context["bottombar"] ?? null)) {
            // line 360
            echo "<div class=\"bottom_bar\">
  <ul>
    <li class=\"bottom_bar_catalog\"><span class=\"link\"><p>";
            // line 362
            echo ($context["text_catalog"] ?? null);
            echo "</p></span></li>
    <li class=\"bottom_bar_cart\"><a class=\"link\" href=\"";
            // line 363
            echo ($context["shopping_cart"] ?? null);
            echo "\"><p>";
            echo ($context["text_shopping_cart"] ?? null);
            echo "</p><span class=\"cart_count\">";
            echo ($context["text_cart_count"] ?? null);
            echo "</span></a></li>
    <li class=\"bottom_bar_compare\"><a class=\"link\" href=\"";
            // line 364
            echo ($context["compare"] ?? null);
            echo "\"><p>";
            echo ($context["text_compare_desc"] ?? null);
            echo "</p><span class=\"compare_count\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a></li>
    <li class=\"bottom_bar_wishlist\"><a class=\"link\" href=\"";
            // line 365
            echo ($context["wishlist"] ?? null);
            echo "\"><p>";
            echo ($context["text_wishlist_desc"] ?? null);
            echo "</p><span class=\"wishlist_count\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a></li>
  </ul>
</div>
<script>
  \$(\".bottom_bar_catalog\").on(\"click\", function() {
    \$(\"#m_menu > .dropdown-menu\").addClass(\"active\").find(\".m_menu_nav\").addClass(\"active\");
    \$(\"#top\").addClass(\"active\");
    \$(\".m_menu_back\").fadeOut(0);
  });
  //fix_height_other_block
  \$(\"body\").addClass(\"body_bottombar\");
  \$(document).ready(function() {
    \$(\".ocf-btn-mobile-fixed, .widgets_messenger_link, .widgets_messenger_content, .product_bar\").addClass(\"up_from_bottom_bar\");
  });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "speedy/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1087 => 365,  1079 => 364,  1071 => 363,  1067 => 362,  1063 => 360,  1061 => 359,  1054 => 356,  1043 => 355,  1033 => 354,  1030 => 353,  1024 => 351,  1022 => 350,  1019 => 349,  1011 => 346,  1005 => 344,  1002 => 343,  998 => 341,  991 => 340,  984 => 339,  978 => 338,  972 => 336,  969 => 335,  965 => 333,  956 => 332,  947 => 331,  939 => 330,  933 => 329,  927 => 327,  925 => 326,  907 => 324,  901 => 322,  895 => 320,  889 => 318,  887 => 317,  884 => 316,  881 => 315,  869 => 313,  859 => 311,  856 => 310,  854 => 309,  843 => 300,  836 => 298,  829 => 297,  822 => 295,  816 => 294,  810 => 293,  804 => 292,  797 => 291,  795 => 290,  789 => 287,  786 => 286,  781 => 285,  777 => 284,  773 => 282,  770 => 281,  764 => 280,  755 => 279,  750 => 278,  747 => 277,  744 => 276,  733 => 274,  728 => 273,  726 => 272,  719 => 271,  711 => 269,  705 => 267,  703 => 266,  691 => 257,  688 => 256,  685 => 255,  672 => 253,  667 => 252,  665 => 251,  661 => 250,  651 => 242,  648 => 241,  636 => 239,  626 => 237,  623 => 236,  621 => 235,  612 => 228,  602 => 221,  594 => 216,  589 => 213,  583 => 210,  580 => 209,  574 => 206,  569 => 205,  567 => 204,  560 => 203,  556 => 201,  550 => 198,  546 => 197,  543 => 196,  537 => 193,  533 => 192,  528 => 191,  526 => 190,  519 => 189,  517 => 188,  506 => 184,  501 => 181,  499 => 180,  495 => 178,  419 => 104,  416 => 103,  409 => 99,  404 => 96,  402 => 95,  397 => 92,  390 => 90,  383 => 89,  381 => 88,  376 => 85,  369 => 83,  362 => 82,  360 => 81,  355 => 78,  348 => 76,  341 => 75,  339 => 74,  329 => 71,  327 => 70,  321 => 69,  315 => 68,  307 => 66,  303 => 65,  292 => 63,  288 => 62,  280 => 61,  267 => 59,  263 => 58,  252 => 57,  235 => 55,  231 => 54,  224 => 53,  218 => 50,  214 => 49,  210 => 48,  206 => 47,  202 => 46,  198 => 45,  193 => 44,  187 => 42,  182 => 40,  178 => 39,  169 => 38,  167 => 37,  163 => 36,  154 => 35,  145 => 34,  136 => 33,  127 => 32,  118 => 31,  114 => 29,  106 => 28,  102 => 26,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/header.twig", "");
    }
}
