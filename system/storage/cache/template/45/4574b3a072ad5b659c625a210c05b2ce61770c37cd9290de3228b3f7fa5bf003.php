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

/* speedy/template/extension/module/latest.twig */
class __TwigTemplate_e09b24c78aa27e0f7c2a0e77a48f749c3059a4e3f3dbde6b8a7d15c265778129 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "<section>
  <div class=\"section_title\">
    ";
            // line 4
            echo ($context["heading_title"] ?? null);
            echo "
    <div class=\"swiper_arrows swiper_arrows_products";
            // line 5
            if (((($context["products_type"] ?? null) == "slider") && ($context["products_slider_arrows"] ?? null))) {
                echo " swiper_arrows_products_active";
            }
            echo "\" id=\"products_items_slider_arrows_latest\">
      <div class=\"arrow arrow_prev\"></div>
      <div class=\"arrow arrow_next\"></div>
    </div>
  </div>
  ";
            // line 10
            if ((($context["products_type"] ?? null) == "slider")) {
                echo "<div class=\"swiper-pagination\" id=\"products_items_slider_pagination_latest\"></div>";
            }
            // line 11
            echo "  <div class=\"products_items";
            if ((($context["products_type"] ?? null) == "slider")) {
                echo " products_items_slider";
            }
            echo "\" id=\"products_items_slider_latest\">
    ";
            // line 12
            if ((($context["products_type"] ?? null) == "slider")) {
                echo "<div class=\"swiper-wrapper\">";
            }
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "      <div class=\"";
                if ((($context["products_type"] ?? null) == "slider")) {
                    echo "swiper-slide ";
                }
                echo "item product_";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 14);
                echo "\">
        <div class=\"image\">
          <a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\">
            <img class=\"image_main\" src=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" />
            ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 18)) {
                    echo "<img class=\"image_hover\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" />";
                }
                // line 19
                echo "          </a>
          ";
                // line 20
                if (($context["catalog_stickers_text"] ?? null)) {
                    // line 21
                    echo "          <ul class=\"stickers_text\">
            ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_status", [], "any", false, false, false, 22)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_new_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_new_name"] ?? null);
                        echo "</li>";
                    }
                    // line 23
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_special_status", [], "any", false, false, false, 23)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_special_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_special_name"] ?? null);
                        echo "</li>";
                    }
                    // line 24
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_sale_status", [], "any", false, false, false, 24)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_sale_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_sale_name"] ?? null);
                        echo "</li>";
                    }
                    // line 25
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "sticker_hot_status", [], "any", false, false, false, 25)) {
                        echo "<li style=\"background: ";
                        echo ($context["sticker_hot_background"] ?? null);
                        echo "\">";
                        echo ($context["sticker_hot_name"] ?? null);
                        echo "</li>";
                    }
                    // line 26
                    echo "          </ul>
          ";
                }
                // line 28
                echo "          <div class=\"buttons_compare_wishlist\">
            <button type=\"button\" class=\"button_wishlist icon_wishlist\" onclick=\"wishlist.add('";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 29);
                echo "');\"></button>
            <button type=\"button\" class=\"button_compare icon_compare\" onclick=\"compare.add('";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 30);
                echo "');\"></button>
            <button type=\"button\" class=\"button_view_modal icon_view_modal\"></button>
            ";
                // line 32
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 33
                    echo "              <button type=\"button\" data-loading-text=\"";
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
                // line 35
                echo "          </div>
          ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "          <div class=\"percent\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_percent", [], "any", false, false, false, 37);
                    echo "%</div>
          ";
                }
                // line 39
                echo "        </div>
        <div class=\"caption\">
          <div class=\"name\"><a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "</a></div>
          ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 42) && ($context["catalog_description"] ?? null))) {
                    echo "<p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 42);
                    echo "</p>";
                }
                // line 43
                echo "          <div class=\"additional\">
            <div class=\"rating\">
              ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 46
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 46) < $context["i"])) {
                        // line 47
                        echo "                <span></span>
                ";
                    } else {
                        // line 49
                        echo "                <span class=\"active\"></span>
                ";
                    }
                    // line 51
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 52);
                echo "</p>
            </div>
            ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 54) && ($context["catalog_model"] ?? null))) {
                    // line 55
                    echo "            <p class=\"model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 55);
                    echo "</p>
            ";
                }
                // line 57
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 57) && ($context["catalog_stock"] ?? null))) {
                    // line 58
                    echo "            <div class=\"stock";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 58) == 7)) {
                        echo " in";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 58) == 5)) {
                        echo " out";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 58) == 6)) {
                        echo " wait";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 58) == 8)) {
                        echo " pre";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 58);
                    echo "</div>
            ";
                }
                // line 60
                echo "          </div>
          <div class=\"price_button\">
            ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "            <div class=\"price\">
              ";
                    // line 64
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "              <div class=\"price-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                        echo "</div>
              ";
                    } else {
                        // line 67
                        echo "              <div class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67);
                        echo "</div>
              <div class=\"price-stock price-new\">";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68);
                        echo "</div>
              ";
                    }
                    // line 70
                    echo "            </div>
            ";
                }
                // line 72
                echo "            <button class=\"btn icon_cart";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "out_of_stock", [], "any", false, false, false, 72) && ($context["catalog_button_cart"] ?? null))) {
                    echo " out_of_stock";
                }
                echo "\" type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
                echo "');\"></button>
          </div>
          <div class=\"hover_block\">
            ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 75) && ($context["catalog_attribute_groups"] ?? null))) {
                    // line 76
                    echo "            <ul class=\"attribute_groups\">
              ";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 77));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 78
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 78), 0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 79
                            echo "              <li>
                <b>";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 80);
                            echo ":</b>
                ";
                            // line 81
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 81)) > 90)) {
                                // line 82
                                echo "                  ";
                                echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 82), 0, 90) . "...");
                                echo "
                ";
                            } else {
                                // line 84
                                echo "                  ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 84);
                                echo "
                ";
                            }
                            // line 86
                            echo "              </li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 88
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "            </ul>
            ";
                }
                // line 91
                echo "          </div>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "    ";
            if ((($context["products_type"] ?? null) == "slider")) {
                echo "</div>";
            }
            // line 96
            echo "  </div>
  ";
            // line 97
            if ((($context["products_type"] ?? null) == "slider")) {
                // line 98
                echo "  <script>
    // Проверка на наличие блока в Aside
    if(\$(\"#products_items_slider_latest\").parent().parent().attr(\"id\") != 'column-left') {
      var swiperlatest = new Swiper(\"#products_items_slider_latest\", {
        lazy: true,
        loop: true,
        navigation: {
          nextEl: \"#products_items_slider_arrows_latest .arrow_next\",
          prevEl: \"#products_items_slider_arrows_latest .arrow_prev\",
        },
        pagination: {
          el: \"#products_items_slider_pagination_latest\",
          type: \"progressbar\",
        },
        breakpoints: {
          320: {
            slidesPerView: ";
                // line 114
                echo ($context["products_slider_limit_xs"] ?? null);
                echo ",
            spaceBetween: 10,
          },
          480: {
            slidesPerView: ";
                // line 118
                echo ($context["products_slider_limit_sm"] ?? null);
                echo ",
            spaceBetween: 10,
          },
          768: {
            slidesPerView: ";
                // line 122
                echo ($context["products_slider_limit_md"] ?? null);
                echo ",
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: ";
                // line 126
                echo ($context["products_slider_limit_lg"] ?? null);
                echo ",
            spaceBetween: 10,
          },
          1280: {
            slidesPerView: ";
                // line 130
                echo ($context["products_slider_limit_xl"] ?? null);
                echo ",
            spaceBetween: 10,
          },
          1440: {
            slidesPerView: ";
                // line 134
                echo ($context["products_slider_limit"] ?? null);
                echo ",
            spaceBetween: 10,
          }
        }
      });
    } else {
      var swiperlatestAside = new Swiper(\"#products_items_slider_latest\", {
        lazy: true,
        loop: true,
        navigation: {
          nextEl: \"#products_items_slider_arrows_latest .arrow_next\",
          prevEl: \"#products_items_slider_arrows_latest .arrow_prev\",
        },
        slidesPerView: 1,
        spaceBetween: 10,
      });
    }
  </script>
  ";
            }
            // line 153
            echo "</section>
";
        }
    }

    public function getTemplateName()
    {
        return "speedy/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 153,  435 => 134,  428 => 130,  421 => 126,  414 => 122,  407 => 118,  400 => 114,  382 => 98,  380 => 97,  377 => 96,  372 => 95,  363 => 91,  359 => 89,  353 => 88,  346 => 86,  340 => 84,  334 => 82,  332 => 81,  328 => 80,  325 => 79,  320 => 78,  316 => 77,  313 => 76,  311 => 75,  300 => 72,  296 => 70,  291 => 68,  286 => 67,  280 => 65,  278 => 64,  275 => 63,  273 => 62,  269 => 60,  253 => 58,  250 => 57,  244 => 55,  242 => 54,  236 => 52,  230 => 51,  226 => 49,  222 => 47,  219 => 46,  215 => 45,  211 => 43,  205 => 42,  199 => 41,  195 => 39,  189 => 37,  187 => 36,  184 => 35,  170 => 33,  168 => 32,  163 => 30,  159 => 29,  156 => 28,  152 => 26,  143 => 25,  134 => 24,  125 => 23,  117 => 22,  114 => 21,  112 => 20,  109 => 19,  99 => 18,  91 => 17,  87 => 16,  77 => 14,  72 => 13,  68 => 12,  61 => 11,  57 => 10,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/extension/module/latest.twig", "");
    }
}
