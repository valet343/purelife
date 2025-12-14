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

/* speedy/template/blog/article.twig */
class __TwigTemplate_7070c3faadd4fe27fc39e7de803ff716eb77910303f4a95a1781f8a40b5e6f45 extends \Twig\Template
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
        echo "
<div id=\"blog-article\" class=\"container\">
  <ul itemscope itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
    
            ";
        // line 5
        $context["last_crumb"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
        // line 6
        echo "            ";
        $context["breadcrumbs"] = twig_slice($this->env, ($context["breadcrumbs"] ?? null), 0,  -1);
        // line 7
        echo "            ";
        $context["i"] = 1;
        // line 8
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\" itemprop=\"item\"><span itemprop=\"name\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["i"] ?? null);
            echo "\" /></li>
                ";
            // line 10
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 11
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><link href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "href", [], "any", false, false, false, 12);
        echo "\" itemprop=\"item\"/><span itemprop=\"name\">";
        echo strip_tags(twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "text", [], "any", false, false, false, 12));
        echo "</span><meta itemprop=\"position\" content=\"";
        echo ($context["i"] ?? null);
        echo "\" /></li>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs123"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "            
    <li><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"columns\">
    ";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 21
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"article_header\">
      <!--  <div class=\"article_header_left\">
          <a ";
        // line 26
        if (($context["zoom_product"] ?? null)) {
            echo "data-fancybox=\"gallery\"";
        }
        echo " class=\"thumbnail zoom\" href=\"";
        echo ($context["popup"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a>
          ";
        // line 27
        if (($context["review_status"] ?? null)) {
            // line 28
            echo "            <div class=\"rating\">
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 31
                    echo "                <span></span>
                ";
                } else {
                    // line 33
                    echo "                <span class=\"active\"></span>
                ";
                }
                // line 35
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                <p>";
            echo ($context["reviews"] ?? null);
            echo "</p>
            </div>
            <div class=\"rating\"><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 38
            echo ($context["text_write"] ?? null);
            echo "</a></div>
          ";
        }
        // line 40
        echo "        </div>-->
        <div class=\"article_header_right\">
            <div style=\"width: 50%; /* Обов'язково задати ширину меншу, ніж у батьківського блоку */
  margin-left: auto;
  margin-right: auto;
  /* Або скорочено: */
  margin: 0 auto;\">
          <a ";
        // line 47
        if (($context["zoom_product"] ?? null)) {
            echo "data-fancybox=\"gallery\"";
        }
        echo " class=\"thumbnail zoom\" href=\"";
        echo ($context["popup"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a>
          ";
        // line 48
        if (($context["review_status"] ?? null)) {
            // line 49
            echo "            <div class=\"rating\">
              ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 52
                    echo "                <span></span>
                ";
                } else {
                    // line 54
                    echo "                <span class=\"active\"></span>
                ";
                }
                // line 56
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                <p>";
            echo ($context["reviews"] ?? null);
            echo "</p>
            </div>
            <div class=\"rating\"><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 59
            echo ($context["text_write"] ?? null);
            echo "</a></div>
          ";
        }
        // line 61
        echo "        </div>


          ";
        // line 64
        echo ($context["description"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"article_middle\">
        <div class=\"tab-content\">
        ";
        // line 69
        if (($context["review_status"] ?? null)) {
            // line 70
            echo "          <div class=\"tab-pane\" id=\"tab-review\">
            <form class=\"form-horizontal\" id=\"form-review\">
              <h3>";
            // line 72
            echo ($context["text_review"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              <div id=\"review\"></div>
              <h3>";
            // line 74
            echo ($context["text_write_tab"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              ";
            // line 75
            if (($context["review_guest"] ?? null)) {
                // line 76
                echo "              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-name\">";
                // line 78
                echo ($context["entry_name"] ?? null);
                echo "</label> -->
                  <input type=\"text\" name=\"name\" value=\"";
                // line 79
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-review\">";
                // line 84
                echo ($context["entry_review"] ?? null);
                echo "</label> -->
                  <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\" placeholder=\"";
                // line 85
                echo ($context["entry_review"] ?? null);
                echo "\"></textarea>
                  <!-- <div class=\"help-block\">";
                // line 86
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-plus\">";
                // line 91
                echo ($context["entry_plus"] ?? null);
                echo "</label> -->
                  <textarea name=\"plus\" rows=\"3\" id=\"input-plus\" class=\"form-control\" placeholder=\"";
                // line 92
                echo ($context["entry_plus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-minus\">";
                // line 97
                echo ($context["entry_minus"] ?? null);
                echo "</label> -->
                  <textarea name=\"minus\" rows=\"3\" id=\"input-minus\" class=\"form-control\" placeholder=\"";
                // line 98
                echo ($context["entry_minus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                  <label class=\"control-label\">";
                // line 102
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                  <div class=\"rating\">
                    <input type=\"radio\" id=\"rating_1\" name=\"rating\" value=\"1\" />
                    <label class=\"radio_label\" for=\"rating_1\"></label>
                    <input type=\"radio\" id=\"rating_2\" name=\"rating\" value=\"2\" />
                    <label class=\"radio_label\" for=\"rating_2\"></label>
                    <input type=\"radio\" id=\"rating_3\" name=\"rating\" value=\"3\" />
                    <label class=\"radio_label\" for=\"rating_3\"></label>
                    <input type=\"radio\" id=\"rating_4\" name=\"rating\" value=\"4\" />
                    <label class=\"radio_label\" for=\"rating_4\"></label>
                    <input type=\"radio\" id=\"rating_5\" name=\"rating\" value=\"5\" />
                    <label class=\"radio_label\" for=\"rating_5\"></label>
                  </div>
              </div>
              ";
                // line 116
                echo ($context["captcha"] ?? null);
                echo "
              <div class=\"buttons clearfix\">
                <div class=\"pull-right\">
                  <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 119
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                </div>
              </div>
              ";
            } else {
                // line 123
                echo "              ";
                echo ($context["text_login"] ?? null);
                echo "
              ";
            }
            // line 125
            echo "            </form>
          </div>
        ";
        }
        // line 128
        echo "        </div>
      ";
        // line 129
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    </div>
    ";
        // line 132
        echo ($context["column_right"] ?? null);
        echo "
  </div>
  ";
        // line 134
        if (($context["products"] ?? null)) {
            // line 135
            echo "  <section>
  <div class=\"section_title\">";
            // line 136
            echo ($context["text_related_product"] ?? null);
            echo "</div>
  <div class=\"products_items\">
    ";
            // line 138
            $context["i"] = 0;
            // line 139
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                echo "    <div class=\"item\">
    <div class=\"item_inner\">
      <div class=\"image\">
        <a href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                echo "\">
          <img class=\"image_main\" src=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 144);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
                echo "\" />
          ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 145)) {
                    echo "<img class=\"image_hover\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 145);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                    echo "\" />";
                }
                // line 146
                echo "        </a>
        ";
                // line 147
                if (($context["catalog_stickers_text"] ?? null)) {
                    // line 148
                    echo "        <ul class=\"stickers_text\">
          ";
                    // line 149
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_status", [], "any", false, false, false, 149)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_new_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_new_name"] ?? null);
                        echo "</li>";
                    }
                    // line 150
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_special_status", [], "any", false, false, false, 150)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_special_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_special_name"] ?? null);
                        echo "</li>";
                    }
                    // line 151
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_sale_status", [], "any", false, false, false, 151)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_sale_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_sale_name"] ?? null);
                        echo "</li>";
                    }
                    // line 152
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_hot_status", [], "any", false, false, false, 152)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_hot_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_hot_name"] ?? null);
                        echo "</li>";
                    }
                    // line 153
                    echo "        </ul>
        ";
                }
                // line 155
                echo "        <div class=\"buttons_compare_wishlist\">
          <button type=\"button\" class=\"button_wishlist icon_wishlist\" onclick=\"wishlist.add('";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                echo "');\"></button>
          <button type=\"button\" class=\"button_compare icon_compare\" onclick=\"compare.add('";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "');\"></button>
          <button type=\"button\" class=\"button_view_modal icon_view_modal\"></button>
          ";
                // line 159
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 160
                    echo "            <button type=\"button\" data-loading-text=\"";
                    echo ($context["buyoneclick_text_loading"] ?? null);
                    echo "\" class=\"button_fast_checkout icon_fast_checkout\" ";
                    if (((((($context["buyoneclick_google_status"] ?? null) && (isset($context["buyoneclick_google_category_btn"]) || array_key_exists("buyoneclick_google_category_btn", $context))) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && (isset($context["buyoneclick_google_action_btn"]) || array_key_exists("buyoneclick_google_action_btn", $context))) && (($context["buyoneclick_google_action_btn"] ?? null) != ""))) {
                        echo " onClick=\"clickAnalytics(); return true;\" ";
                    }
                    echo " data-target=\"#boc_order\" data-product=\"";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
                    echo "\" data-product_id=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_id"] ?? null) : null);
                    echo "\"></button>
          ";
                }
                // line 162
                echo "        </div>
        ";
                // line 163
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "        <div class=\"percent\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_percent", [], "any", false, false, false, 164);
                    echo "%</div>
        ";
                }
                // line 166
                echo "      </div>
      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 168);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 168);
                echo "</a></div>
        ";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 169) && ($context["catalog_description"] ?? null))) {
                    echo "<p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 169);
                    echo "</p>";
                }
                // line 170
                echo "        <div class=\"additional\">
          <div class=\"rating\">
            ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 173
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 173) < $context["i"])) {
                        // line 174
                        echo "              <span></span>
              ";
                    } else {
                        // line 176
                        echo "              <span class=\"active\"></span>
              ";
                    }
                    // line 178
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "            <p>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 179);
                echo "</p>
          </div>
          ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 181) && ($context["catalog_model"] ?? null))) {
                    // line 182
                    echo "          <p class=\"model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 182);
                    echo "</p>
          ";
                }
                // line 184
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 184) && ($context["catalog_stock"] ?? null))) {
                    // line 185
                    echo "          <div class=\"stock";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 185) == 7)) {
                        echo " in";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 185) == 5)) {
                        echo " out";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 185) == 6)) {
                        echo " wait";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 185) == 8)) {
                        echo " pre";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 185);
                    echo "</div>
          ";
                }
                // line 187
                echo "        </div>
        <div class=\"price_button\">
          ";
                // line 189
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "          <div class=\"price\">
            ";
                    // line 191
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 191)) {
                        // line 192
                        echo "            <div class=\"price-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 192);
                        echo "</div>
            ";
                    } else {
                        // line 194
                        echo "            <div class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 194);
                        echo "</div>
            <div class=\"price-stock price-new\">";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 195);
                        echo "</div>
            ";
                    }
                    // line 197
                    echo "          </div>
          ";
                }
                // line 199
                echo "          <button class=\"btn icon_cart";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "out_of_stock", [], "any", false, false, false, 199) && ($context["catalog_button_cart"] ?? null))) {
                    echo " out_of_stock";
                }
                echo "\" type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 199);
                echo "');\"></button>
        </div>
        <div class=\"hover_block\">
          ";
                // line 202
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 202) && ($context["catalog_attribute_groups"] ?? null))) {
                    // line 203
                    echo "          <ul class=\"attribute_groups\">
            ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 204));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 205
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 205), 0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 206
                            echo "            <li>
              <b>";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 207);
                            echo ":</b>
              ";
                            // line 208
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 208)) > 90)) {
                                // line 209
                                echo "                ";
                                echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 209), 0, 90) . "...");
                                echo "
              ";
                            } else {
                                // line 211
                                echo "                ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 211);
                                echo "
              ";
                            }
                            // line 213
                            echo "            </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "          </ul>
          ";
                }
                // line 218
                echo "        </div>
      </div>
    </div>
    </div>
    ";
                // line 222
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 223
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "  </div>
  </section>
  ";
        }
        // line 227
        echo "  ";
        if (($context["articles"] ?? null)) {
            // line 228
            echo "  <section>
  <div class=\"section_title\">";
            // line 229
            echo ($context["text_related"] ?? null);
            echo "</div>
  <div class=\"blog_items\">
    ";
            // line 231
            $context["i"] = 0;
            // line 232
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 233
                echo "    <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 235);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 235);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 235);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 235);
                echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 237);
                echo "</a></h4>
          <p>";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 238);
                echo "</p>
          ";
                // line 239
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 239)) {
                    // line 240
                    echo "          <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 241
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 241) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 242
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
          ";
                }
                // line 244
                echo "          </div>
        <div class=\"button-group\">
          <button type=\"button\" onclick=\"location.href = ('";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 246);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_more"] ?? null);
                echo "</span> <i class=\"fa fa-share\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 247);
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 248
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 248);
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
        </div>
      </div>
    </div>
    ";
                // line 252
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 253
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "  </div>
  </section>
  ";
        }
        // line 257
        echo "</div>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 314
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 319
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 325
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
        // line 381
        if ( !($context["zoom_product"] ?? null)) {
            echo " 
<script>
  \$(document).ready(function() {
    \$('.thumbnails').magnificPopup({
      type:'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
</script>
";
        }
        // line 394
        echo "<script type=\"text/javascript\"><!--
// Звезды при добавления рейтинга
\$(\"#form-review label.radio_label\").mouseenter(function(){
  \$(this).prevAll(\"label\").andSelf().addClass('hover');
  \$(this).nextAll(\"label\").removeClass('hover');
});
\$(\"#form-review label.radio_label\").mouseout(function(){
  \$(\"#form-review label.radio_label\").removeClass('hover'); 
});
\$(\"#form-review label.radio_label\").click(function(){
  \$(this).prevAll(\"label\").andSelf().addClass('active hover');
  \$(this).nextAll(\"label\").removeClass('active hover');
});
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=blog/article/review&article_id=";
        // line 417
        echo ($context["article_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id=";
        // line 421
        echo ($context["article_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
        if(\$('.alert-item-modal-push').length < 1) {
          \$('body').append('<ul class=\"alert-modal alert-item-modal-push\"></ul>');
        }
        if(\$('.alert-item').length = 6) {
          \$('.alert-item').eq(5).prevAll(\".alert-item\").remove();
        }
        var i = 0
        var \$alertItem = \$('<li class=\"alert-item ' + i++ + '\">' + json['error'] + '<button class=\"btn-close btn-close-alert-modal\"></button></li>').addClass(\"alert-item-animate\");
        \$(\".alert-item-modal-push\").prepend(\$alertItem);
        setTimeout(function() {
            \$alertItem.remove();
        }, 2400);
      }

\t\t\tif (json['success']) {
        if(\$('.alert-item-modal-push').length < 1) {
          \$('body').append('<ul class=\"alert-modal alert-item-modal-push\"></ul>');
        }
        if(\$('.alert-item').length = 6) {
          \$('.alert-item').eq(5).prevAll(\".alert-item\").remove();
        }
        var i = 0
        var \$alertItem = \$('<li class=\"alert-item ' + i++ + '\">' + json['success'] + '<button class=\"btn-close btn-close-alert-modal\"></button></li>').addClass(\"alert-item-animate\");
        \$(\".alert-item-modal-push\").prepend(\$alertItem);
        setTimeout(function() {
            \$alertItem.remove();
        }, 2400);

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
        \$('.radio_label').removeClass('active');
      }
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
  \$('#description').find('a>img').each(function(){
    \$(this).parent().addClass('gallery');
  });
  \$('#description').magnificPopup({
    delegate: 'a.gallery',
    type: 'image',
    gallery: {
        enabled: true
    }
  });

  gotoReview = function() {
    offset = \$('#form-review').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  gotoReviewWrite = function() {
    offset = \$('#form-review h2').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  
});
--></script>
";
        // line 496
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "speedy/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1070 => 496,  992 => 421,  985 => 417,  960 => 394,  944 => 381,  885 => 325,  876 => 319,  868 => 314,  809 => 257,  804 => 254,  798 => 253,  796 => 252,  787 => 248,  783 => 247,  777 => 246,  773 => 244,  764 => 242,  757 => 241,  752 => 240,  750 => 239,  746 => 238,  740 => 237,  729 => 235,  723 => 233,  718 => 232,  716 => 231,  711 => 229,  708 => 228,  705 => 227,  700 => 224,  694 => 223,  692 => 222,  686 => 218,  682 => 216,  676 => 215,  669 => 213,  663 => 211,  657 => 209,  655 => 208,  651 => 207,  648 => 206,  643 => 205,  639 => 204,  636 => 203,  634 => 202,  621 => 199,  617 => 197,  612 => 195,  607 => 194,  601 => 192,  599 => 191,  596 => 190,  594 => 189,  590 => 187,  574 => 185,  571 => 184,  565 => 182,  563 => 181,  557 => 179,  551 => 178,  547 => 176,  543 => 174,  540 => 173,  536 => 172,  532 => 170,  526 => 169,  520 => 168,  516 => 166,  510 => 164,  508 => 163,  505 => 162,  491 => 160,  489 => 159,  484 => 157,  480 => 156,  477 => 155,  473 => 153,  464 => 152,  455 => 151,  446 => 150,  438 => 149,  435 => 148,  433 => 147,  430 => 146,  420 => 145,  412 => 144,  408 => 143,  403 => 140,  398 => 139,  396 => 138,  391 => 136,  388 => 135,  386 => 134,  381 => 132,  375 => 129,  372 => 128,  367 => 125,  361 => 123,  352 => 119,  346 => 116,  329 => 102,  322 => 98,  318 => 97,  310 => 92,  306 => 91,  298 => 86,  294 => 85,  290 => 84,  280 => 79,  276 => 78,  272 => 76,  270 => 75,  264 => 74,  257 => 72,  253 => 70,  251 => 69,  243 => 64,  238 => 61,  233 => 59,  227 => 57,  221 => 56,  217 => 54,  213 => 52,  210 => 51,  206 => 50,  203 => 49,  201 => 48,  185 => 47,  176 => 40,  171 => 38,  165 => 36,  159 => 35,  155 => 33,  151 => 31,  148 => 30,  144 => 29,  141 => 28,  139 => 27,  123 => 26,  116 => 22,  112 => 21,  108 => 20,  103 => 18,  100 => 17,  90 => 15,  87 => 14,  83 => 13,  74 => 12,  68 => 11,  66 => 10,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/blog/article.twig", "");
    }
}
