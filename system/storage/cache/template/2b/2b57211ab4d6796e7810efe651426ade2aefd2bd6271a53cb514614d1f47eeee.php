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
class __TwigTemplate_b0051688119dbd1d3666b667c89fba1bd8c6a029fed0117bef3872802505fbc8 extends \Twig\Template
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
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"columns\">
    ";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"article_header\">
      <!--  <div class=\"article_header_left\">
          <a ";
        // line 16
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
        // line 17
        if (($context["review_status"] ?? null)) {
            // line 18
            echo "            <div class=\"rating\">
              ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 21
                    echo "                <span></span>
                ";
                } else {
                    // line 23
                    echo "                <span class=\"active\"></span>
                ";
                }
                // line 25
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                <p>";
            echo ($context["reviews"] ?? null);
            echo "</p>
            </div>
            <div class=\"rating\"><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 28
            echo ($context["text_write"] ?? null);
            echo "</a></div>
          ";
        }
        // line 30
        echo "        </div>-->
        <div class=\"article_header_right\">
          ";
        // line 32
        echo ($context["description"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"article_middle\">
        <div class=\"tab-content\">
        ";
        // line 37
        if (($context["review_status"] ?? null)) {
            // line 38
            echo "          <div class=\"tab-pane\" id=\"tab-review\">
            <form class=\"form-horizontal\" id=\"form-review\">
              <h3>";
            // line 40
            echo ($context["text_review"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              <div id=\"review\"></div>
              <h3>";
            // line 42
            echo ($context["text_write_tab"] ?? null);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
              ";
            // line 43
            if (($context["review_guest"] ?? null)) {
                // line 44
                echo "              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-name\">";
                // line 46
                echo ($context["entry_name"] ?? null);
                echo "</label> -->
                  <input type=\"text\" name=\"name\" value=\"";
                // line 47
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-review\">";
                // line 52
                echo ($context["entry_review"] ?? null);
                echo "</label> -->
                  <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\" placeholder=\"";
                // line 53
                echo ($context["entry_review"] ?? null);
                echo "\"></textarea>
                  <!-- <div class=\"help-block\">";
                // line 54
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-plus\">";
                // line 59
                echo ($context["entry_plus"] ?? null);
                echo "</label> -->
                  <textarea name=\"plus\" rows=\"3\" id=\"input-plus\" class=\"form-control\" placeholder=\"";
                // line 60
                echo ($context["entry_plus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-12\">
                  <!-- <label class=\"control-label\" for=\"input-minus\">";
                // line 65
                echo ($context["entry_minus"] ?? null);
                echo "</label> -->
                  <textarea name=\"minus\" rows=\"3\" id=\"input-minus\" class=\"form-control\" placeholder=\"";
                // line 66
                echo ($context["entry_minus"] ?? null);
                echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                  <label class=\"control-label\">";
                // line 70
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
                // line 84
                echo ($context["captcha"] ?? null);
                echo "
              <div class=\"buttons clearfix\">
                <div class=\"pull-right\">
                  <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 87
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                </div>
              </div>
              ";
            } else {
                // line 91
                echo "              ";
                echo ($context["text_login"] ?? null);
                echo "
              ";
            }
            // line 93
            echo "            </form>
          </div>
        ";
        }
        // line 96
        echo "        </div>
      ";
        // line 97
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    </div>
    ";
        // line 100
        echo ($context["column_right"] ?? null);
        echo "
  </div>
  ";
        // line 102
        if (($context["products"] ?? null)) {
            // line 103
            echo "  <section>
  <div class=\"section_title\">";
            // line 104
            echo ($context["text_related_product"] ?? null);
            echo "</div>
  <div class=\"products_items\">
    ";
            // line 106
            $context["i"] = 0;
            // line 107
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "    <div class=\"item\">
    <div class=\"item_inner\">
      <div class=\"image\">
        <a href=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
                echo "\">
          <img class=\"image_main\" src=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" />
          ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 113)) {
                    echo "<img class=\"image_hover\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 113);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\" />";
                }
                // line 114
                echo "        </a>
        ";
                // line 115
                if (($context["catalog_stickers_text"] ?? null)) {
                    // line 116
                    echo "        <ul class=\"stickers_text\">
          ";
                    // line 117
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_status", [], "any", false, false, false, 117)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_new_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_new_name"] ?? null);
                        echo "</li>";
                    }
                    // line 118
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_special_status", [], "any", false, false, false, 118)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_special_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_special_name"] ?? null);
                        echo "</li>";
                    }
                    // line 119
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_sale_status", [], "any", false, false, false, 119)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_sale_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_sale_name"] ?? null);
                        echo "</li>";
                    }
                    // line 120
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_hot_status", [], "any", false, false, false, 120)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_hot_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_hot_name"] ?? null);
                        echo "</li>";
                    }
                    // line 121
                    echo "        </ul>
        ";
                }
                // line 123
                echo "        <div class=\"buttons_compare_wishlist\">
          <button type=\"button\" class=\"button_wishlist icon_wishlist\" onclick=\"wishlist.add('";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"></button>
          <button type=\"button\" class=\"button_compare icon_compare\" onclick=\"compare.add('";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo "');\"></button>
          <button type=\"button\" class=\"button_view_modal icon_view_modal\"></button>
          ";
                // line 127
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 128
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
                // line 130
                echo "        </div>
        ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 131)) {
                    // line 132
                    echo "        <div class=\"percent\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_percent", [], "any", false, false, false, 132);
                    echo "%</div>
        ";
                }
                // line 134
                echo "      </div>
      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 136);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
                echo "</a></div>
        ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 137) && ($context["catalog_description"] ?? null))) {
                    echo "<p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 137);
                    echo "</p>";
                }
                // line 138
                echo "        <div class=\"additional\">
          <div class=\"rating\">
            ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 141
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 141) < $context["i"])) {
                        // line 142
                        echo "              <span></span>
              ";
                    } else {
                        // line 144
                        echo "              <span class=\"active\"></span>
              ";
                    }
                    // line 146
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "            <p>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 147);
                echo "</p>
          </div>
          ";
                // line 149
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 149) && ($context["catalog_model"] ?? null))) {
                    // line 150
                    echo "          <p class=\"model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 150);
                    echo "</p>
          ";
                }
                // line 152
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 152) && ($context["catalog_stock"] ?? null))) {
                    // line 153
                    echo "          <div class=\"stock";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 153) == 7)) {
                        echo " in";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 153) == 5)) {
                        echo " out";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 153) == 6)) {
                        echo " wait";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 153) == 8)) {
                        echo " pre";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 153);
                    echo "</div>
          ";
                }
                // line 155
                echo "        </div>
        <div class=\"price_button\">
          ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "          <div class=\"price\">
            ";
                    // line 159
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159)) {
                        // line 160
                        echo "            <div class=\"price-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                        echo "</div>
            ";
                    } else {
                        // line 162
                        echo "            <div class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 162);
                        echo "</div>
            <div class=\"price-stock price-new\">";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                        echo "</div>
            ";
                    }
                    // line 165
                    echo "          </div>
          ";
                }
                // line 167
                echo "          <button class=\"btn icon_cart";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "out_of_stock", [], "any", false, false, false, 167) && ($context["catalog_button_cart"] ?? null))) {
                    echo " out_of_stock";
                }
                echo "\" type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 167);
                echo "');\"></button>
        </div>
        <div class=\"hover_block\">
          ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 170) && ($context["catalog_attribute_groups"] ?? null))) {
                    // line 171
                    echo "          <ul class=\"attribute_groups\">
            ";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 173
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 173), 0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 174
                            echo "            <li>
              <b>";
                            // line 175
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 175);
                            echo ":</b>
              ";
                            // line 176
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 176)) > 90)) {
                                // line 177
                                echo "                ";
                                echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 177), 0, 90) . "...");
                                echo "
              ";
                            } else {
                                // line 179
                                echo "                ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 179);
                                echo "
              ";
                            }
                            // line 181
                            echo "            </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 183
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "          </ul>
          ";
                }
                // line 186
                echo "        </div>
      </div>
    </div>
    </div>
    ";
                // line 190
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 191
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "  </div>
  </section>
  ";
        }
        // line 195
        echo "  ";
        if (($context["articles"] ?? null)) {
            // line 196
            echo "  <section>
  <div class=\"section_title\">";
            // line 197
            echo ($context["text_related"] ?? null);
            echo "</div>
  <div class=\"blog_items\">
    ";
            // line 199
            $context["i"] = 0;
            // line 200
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 201
                echo "    <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 203);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 203);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 203);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 203);
                echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 205);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 205);
                echo "</a></h4>
          <p>";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 206);
                echo "</p>
          ";
                // line 207
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 207)) {
                    // line 208
                    echo "          <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 209
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 209) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 210
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
          ";
                }
                // line 212
                echo "          </div>
        <div class=\"button-group\">
          <button type=\"button\" onclick=\"location.href = ('";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 214);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_more"] ?? null);
                echo "</span> <i class=\"fa fa-share\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 215);
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 216
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 216);
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
        </div>
      </div>
    </div>
    ";
                // line 220
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 221
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "  </div>
  </section>
  ";
        }
        // line 225
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
        // line 282
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 287
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 293
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
        // line 349
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
        // line 362
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
        // line 385
        echo ($context["article_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id=";
        // line 389
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
        // line 464
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
        return array (  965 => 464,  887 => 389,  880 => 385,  855 => 362,  839 => 349,  780 => 293,  771 => 287,  763 => 282,  704 => 225,  699 => 222,  693 => 221,  691 => 220,  682 => 216,  678 => 215,  672 => 214,  668 => 212,  659 => 210,  652 => 209,  647 => 208,  645 => 207,  641 => 206,  635 => 205,  624 => 203,  618 => 201,  613 => 200,  611 => 199,  606 => 197,  603 => 196,  600 => 195,  595 => 192,  589 => 191,  587 => 190,  581 => 186,  577 => 184,  571 => 183,  564 => 181,  558 => 179,  552 => 177,  550 => 176,  546 => 175,  543 => 174,  538 => 173,  534 => 172,  531 => 171,  529 => 170,  516 => 167,  512 => 165,  507 => 163,  502 => 162,  496 => 160,  494 => 159,  491 => 158,  489 => 157,  485 => 155,  469 => 153,  466 => 152,  460 => 150,  458 => 149,  452 => 147,  446 => 146,  442 => 144,  438 => 142,  435 => 141,  431 => 140,  427 => 138,  421 => 137,  415 => 136,  411 => 134,  405 => 132,  403 => 131,  400 => 130,  386 => 128,  384 => 127,  379 => 125,  375 => 124,  372 => 123,  368 => 121,  359 => 120,  350 => 119,  341 => 118,  333 => 117,  330 => 116,  328 => 115,  325 => 114,  315 => 113,  307 => 112,  303 => 111,  298 => 108,  293 => 107,  291 => 106,  286 => 104,  283 => 103,  281 => 102,  276 => 100,  270 => 97,  267 => 96,  262 => 93,  256 => 91,  247 => 87,  241 => 84,  224 => 70,  217 => 66,  213 => 65,  205 => 60,  201 => 59,  193 => 54,  189 => 53,  185 => 52,  175 => 47,  171 => 46,  167 => 44,  165 => 43,  159 => 42,  152 => 40,  148 => 38,  146 => 37,  138 => 32,  134 => 30,  129 => 28,  123 => 26,  117 => 25,  113 => 23,  109 => 21,  106 => 20,  102 => 19,  99 => 18,  97 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/blog/article.twig", "");
    }
}
