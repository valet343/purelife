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
class __TwigTemplate_865437be9abbb0c174ba3c92749593c7dc59d1d043d9658ed1ae0a22bed50c9c extends \Twig\Template
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
        // line 28
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
        // line 29
        if (($context["review_status"] ?? null)) {
            // line 30
            echo "            <div class=\"rating\">
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 33
                    echo "                <span></span>
                ";
                } else {
                    // line 35
                    echo "                <span class=\"active\"></span>
                ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                <p>";
            echo ($context["reviews"] ?? null);
            echo "</p>
            </div>
            <div class=\"rating\"><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 40
            echo ($context["text_write"] ?? null);
            echo "</a></div>
          ";
        }
        // line 42
        echo "        </div>-->
        <div class=\"article_header_right\">
            <div style=\"width: 50%; /* Обов'язково задати ширину меншу, ніж у батьківського блоку */
  margin-left: auto; margin-right: auto;  /* Або скорочено: */  margin: 0 auto;\">
<img src=\"";
        // line 46
        echo ($context["thumb"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"  width=\"400\" height=\"400\"/></a>

          <a ";
        // line 48
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
        // line 49
        if (($context["review_status"] ?? null)) {
            // line 50
            echo "            <div class=\"rating\">
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 53
                    echo "                <span></span>
                ";
                } else {
                    // line 55
                    echo "                <span class=\"active\"></span>
                ";
                }
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                <p>";
            echo ($context["reviews"] ?? null);
            echo "</p>
            </div>
            <div class=\"rating\"><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 60
            echo ($context["text_write"] ?? null);
            echo "</a></div>
          ";
        }
        // line 62
        echo "        </div>


          ";
        // line 65
        echo ($context["description"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"article_middle\">
        <div class=\"tab-content\">
        ";
        // line 70
        if (($context["review_status"] ?? null)) {
            // line 71
            echo "          <div class=\"tab-pane\" id=\"tab-review\">
            <form class=\"form-horizontal\" id=\"form-review\">
              <h3>";
            // line 73
            echo ($context["text_review"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              <div id=\"review\"></div>
              <h3>";
            // line 75
            echo ($context["text_write_tab"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              ";
            // line 76
            if (($context["review_guest"] ?? null)) {
                // line 77
                echo "              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-name\">";
                // line 79
                echo ($context["entry_name"] ?? null);
                echo "</label> -->
                  <input type=\"text\" name=\"name\" value=\"";
                // line 80
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-review\">";
                // line 85
                echo ($context["entry_review"] ?? null);
                echo "</label> -->
                  <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\" placeholder=\"";
                // line 86
                echo ($context["entry_review"] ?? null);
                echo "\"></textarea>
                  <!-- <div class=\"help-block\">";
                // line 87
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-plus\">";
                // line 92
                echo ($context["entry_plus"] ?? null);
                echo "</label> -->
                  <textarea name=\"plus\" rows=\"3\" id=\"input-plus\" class=\"form-control\" placeholder=\"";
                // line 93
                echo ($context["entry_plus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-minus\">";
                // line 98
                echo ($context["entry_minus"] ?? null);
                echo "</label> -->
                  <textarea name=\"minus\" rows=\"3\" id=\"input-minus\" class=\"form-control\" placeholder=\"";
                // line 99
                echo ($context["entry_minus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                  <label class=\"control-label\">";
                // line 103
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
                // line 117
                echo ($context["captcha"] ?? null);
                echo "
              <div class=\"buttons clearfix\">
                <div class=\"pull-right\">
                  <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 120
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                </div>
              </div>
              ";
            } else {
                // line 124
                echo "              ";
                echo ($context["text_login"] ?? null);
                echo "
              ";
            }
            // line 126
            echo "            </form>
          </div>
        ";
        }
        // line 129
        echo "        </div>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    </div>
    ";
        // line 133
        echo ($context["column_right"] ?? null);
        echo "
  </div>
  ";
        // line 135
        if (($context["products"] ?? null)) {
            // line 136
            echo "  <section>
  <div class=\"section_title\">";
            // line 137
            echo ($context["text_related_product"] ?? null);
            echo "</div>
  <div class=\"products_items\">
    ";
            // line 139
            $context["i"] = 0;
            // line 140
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "    <div class=\"item\">
    <div class=\"item_inner\">
      <div class=\"image\">
        <a href=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
                echo "\">
          <img class=\"image_main\" src=\"";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 145);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                echo "\" />
          ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 146)) {
                    echo "<img class=\"image_hover\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 146);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "\" />";
                }
                // line 147
                echo "        </a>
        ";
                // line 148
                if (($context["catalog_stickers_text"] ?? null)) {
                    // line 149
                    echo "        <ul class=\"stickers_text\">
          ";
                    // line 150
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_status", [], "any", false, false, false, 150)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_new_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_new_name"] ?? null);
                        echo "</li>";
                    }
                    // line 151
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_special_status", [], "any", false, false, false, 151)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_special_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_special_name"] ?? null);
                        echo "</li>";
                    }
                    // line 152
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_sale_status", [], "any", false, false, false, 152)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_sale_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_sale_name"] ?? null);
                        echo "</li>";
                    }
                    // line 153
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_hot_status", [], "any", false, false, false, 153)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_hot_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_hot_name"] ?? null);
                        echo "</li>";
                    }
                    // line 154
                    echo "        </ul>
        ";
                }
                // line 156
                echo "        <div class=\"buttons_compare_wishlist\">
          <button type=\"button\" class=\"button_wishlist icon_wishlist\" onclick=\"wishlist.add('";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "');\"></button>
          <button type=\"button\" class=\"button_compare icon_compare\" onclick=\"compare.add('";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                echo "');\"></button>
          <button type=\"button\" class=\"button_view_modal icon_view_modal\"></button>
          ";
                // line 160
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 161
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
                // line 163
                echo "        </div>
        ";
                // line 164
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "        <div class=\"percent\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_percent", [], "any", false, false, false, 165);
                    echo "%</div>
        ";
                }
                // line 167
                echo "      </div>
      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 169);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 169);
                echo "</a></div>
        ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 170) && ($context["catalog_description"] ?? null))) {
                    echo "<p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 170);
                    echo "</p>";
                }
                // line 171
                echo "        <div class=\"additional\">
          <div class=\"rating\">
            ";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 174
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 174) < $context["i"])) {
                        // line 175
                        echo "              <span></span>
              ";
                    } else {
                        // line 177
                        echo "              <span class=\"active\"></span>
              ";
                    }
                    // line 179
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "            <p>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 180);
                echo "</p>
          </div>
          ";
                // line 182
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 182) && ($context["catalog_model"] ?? null))) {
                    // line 183
                    echo "          <p class=\"model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 183);
                    echo "</p>
          ";
                }
                // line 185
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 185) && ($context["catalog_stock"] ?? null))) {
                    // line 186
                    echo "          <div class=\"stock";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 186) == 7)) {
                        echo " in";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 186) == 5)) {
                        echo " out";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 186) == 6)) {
                        echo " wait";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 186) == 8)) {
                        echo " pre";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 186);
                    echo "</div>
          ";
                }
                // line 188
                echo "        </div>
        <div class=\"price_button\">
          ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 190)) {
                    // line 191
                    echo "          <div class=\"price\">
            ";
                    // line 192
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 192)) {
                        // line 193
                        echo "            <div class=\"price-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 193);
                        echo "</div>
            ";
                    } else {
                        // line 195
                        echo "            <div class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 195);
                        echo "</div>
            <div class=\"price-stock price-new\">";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 196);
                        echo "</div>
            ";
                    }
                    // line 198
                    echo "          </div>
          ";
                }
                // line 200
                echo "          <button class=\"btn icon_cart";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "out_of_stock", [], "any", false, false, false, 200) && ($context["catalog_button_cart"] ?? null))) {
                    echo " out_of_stock";
                }
                echo "\" type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 200);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 200);
                echo "');\"></button>
        </div>
        <div class=\"hover_block\">
          ";
                // line 203
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 203) && ($context["catalog_attribute_groups"] ?? null))) {
                    // line 204
                    echo "          <ul class=\"attribute_groups\">
            ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 205));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 206
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 206), 0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 207
                            echo "            <li>
              <b>";
                            // line 208
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 208);
                            echo ":</b>
              ";
                            // line 209
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 209)) > 90)) {
                                // line 210
                                echo "                ";
                                echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 210), 0, 90) . "...");
                                echo "
              ";
                            } else {
                                // line 212
                                echo "                ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 212);
                                echo "
              ";
                            }
                            // line 214
                            echo "            </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 216
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "          </ul>
          ";
                }
                // line 219
                echo "        </div>
      </div>
    </div>
    </div>
    ";
                // line 223
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 224
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "  </div>
  </section>
  ";
        }
        // line 228
        echo "  ";
        if (($context["articles"] ?? null)) {
            // line 229
            echo "  <section>
  <div class=\"section_title\">";
            // line 230
            echo ($context["text_related"] ?? null);
            echo "</div>
  <div class=\"blog_items\">
    ";
            // line 232
            $context["i"] = 0;
            // line 233
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 234
                echo "    <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 236);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 236);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 236);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 236);
                echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 238);
                echo "</a></h4>
          <p>";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 239);
                echo "</p>
          ";
                // line 240
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "          <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 242
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 242) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 243
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
          ";
                }
                // line 245
                echo "          </div>
        <div class=\"button-group\">
          <button type=\"button\" onclick=\"location.href = ('";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 247);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_more"] ?? null);
                echo "</span> <i class=\"fa fa-share\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 248);
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 249
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 249);
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
        </div>
      </div>
    </div>
    ";
                // line 253
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 254
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "  </div>
  </section>
  ";
        }
        // line 258
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
        // line 315
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 320
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 326
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
        // line 382
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
        // line 395
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
        // line 418
        echo ($context["article_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id=";
        // line 422
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
        // line 497
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
        return array (  1078 => 497,  1000 => 422,  993 => 418,  968 => 395,  952 => 382,  893 => 326,  884 => 320,  876 => 315,  817 => 258,  812 => 255,  806 => 254,  804 => 253,  795 => 249,  791 => 248,  785 => 247,  781 => 245,  772 => 243,  765 => 242,  760 => 241,  758 => 240,  754 => 239,  748 => 238,  737 => 236,  731 => 234,  726 => 233,  724 => 232,  719 => 230,  716 => 229,  713 => 228,  708 => 225,  702 => 224,  700 => 223,  694 => 219,  690 => 217,  684 => 216,  677 => 214,  671 => 212,  665 => 210,  663 => 209,  659 => 208,  656 => 207,  651 => 206,  647 => 205,  644 => 204,  642 => 203,  629 => 200,  625 => 198,  620 => 196,  615 => 195,  609 => 193,  607 => 192,  604 => 191,  602 => 190,  598 => 188,  582 => 186,  579 => 185,  573 => 183,  571 => 182,  565 => 180,  559 => 179,  555 => 177,  551 => 175,  548 => 174,  544 => 173,  540 => 171,  534 => 170,  528 => 169,  524 => 167,  518 => 165,  516 => 164,  513 => 163,  499 => 161,  497 => 160,  492 => 158,  488 => 157,  485 => 156,  481 => 154,  472 => 153,  463 => 152,  454 => 151,  446 => 150,  443 => 149,  441 => 148,  438 => 147,  428 => 146,  420 => 145,  416 => 144,  411 => 141,  406 => 140,  404 => 139,  399 => 137,  396 => 136,  394 => 135,  389 => 133,  383 => 130,  380 => 129,  375 => 126,  369 => 124,  360 => 120,  354 => 117,  337 => 103,  330 => 99,  326 => 98,  318 => 93,  314 => 92,  306 => 87,  302 => 86,  298 => 85,  288 => 80,  284 => 79,  280 => 77,  278 => 76,  272 => 75,  265 => 73,  261 => 71,  259 => 70,  251 => 65,  246 => 62,  241 => 60,  235 => 58,  229 => 57,  225 => 55,  221 => 53,  218 => 52,  214 => 51,  211 => 50,  209 => 49,  193 => 48,  184 => 46,  178 => 42,  173 => 40,  167 => 38,  161 => 37,  157 => 35,  153 => 33,  150 => 32,  146 => 31,  143 => 30,  141 => 29,  125 => 28,  116 => 22,  112 => 21,  108 => 20,  103 => 18,  100 => 17,  90 => 15,  87 => 14,  83 => 13,  74 => 12,  68 => 11,  66 => 10,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/blog/article.twig", "");
    }
}
