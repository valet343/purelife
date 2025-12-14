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

/* speedy/template/account/wishlist.twig */
class __TwigTemplate_2d3f1f6fc4d4f093b3508147e1693762ccd9fdcc64fff538b785189b82a0ef4f extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
  <div class=\"columns\">
    ";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 5
        echo ($context["class"] ?? null);
        echo "\">
      <ul itemscope itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
        
            ";
        // line 8
        $context["last_crumb"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
        // line 9
        echo "            ";
        $context["breadcrumbs"] = twig_slice($this->env, ($context["breadcrumbs"] ?? null), 0,  -1);
        // line 10
        echo "            ";
        $context["i"] = 1;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\" itemprop=\"item\"><span itemprop=\"name\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["i"] ?? null);
            echo "\" /></li>
                ";
            // line 13
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 14
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><link href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "href", [], "any", false, false, false, 15);
        echo "\" itemprop=\"item\"/><span itemprop=\"name\">";
        echo strip_tags(twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "text", [], "any", false, false, false, 15));
        echo "</span><meta itemprop=\"position\" content=\"";
        echo ($context["i"] ?? null);
        echo "\" /></li>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs123"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "            
        <li><a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
      ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 26
        echo "      <h1>";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 28
        if (($context["products"] ?? null)) {
            // line 29
            echo "      <div class=\"products_items\">
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 31
                echo "          <div class=\"item\">
          <div class=\"item_inner\">
            <div class=\"image\">
              <a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">
                <img class=\"image_main\" src=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" />
                ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 36)) {
                    echo "<img class=\"image_hover\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 36);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                    echo "\" />";
                }
                // line 37
                echo "              </a>
              <div class=\"buttons_compare_wishlist\">
                <button type=\"button\" class=\"button_wishlist icon_wishlist\" onclick=\"wishlist.add('";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
                echo "');\"></button>
                <button type=\"button\" class=\"button_compare icon_compare\" onclick=\"compare.add('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                echo "');\"></button>
                <button type=\"button\" class=\"button_view_modal icon_view_modal\"></button>
                ";
                // line 42
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 43
                    echo "                  <button type=\"button\" data-loading-text=\"";
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
                // line 45
                echo "              </div>
              ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "              <div class=\"percent\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_percent", [], "any", false, false, false, 47);
                    echo "%</div>
              ";
                }
                // line 49
                echo "            </div>
            <div class=\"caption\">
              <div class=\"name\"><a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "</a></div>
              ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 52) && ($context["catalog_description"] ?? null))) {
                    echo "<p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 52);
                    echo "</p>";
                }
                // line 53
                echo "              <div class=\"additional\">
                <div class=\"rating\">
                  ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56) < $context["i"])) {
                        // line 57
                        echo "                    <span></span>
                    ";
                    } else {
                        // line 59
                        echo "                    <span class=\"active\"></span>
                    ";
                    }
                    // line 61
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                  <p>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 62);
                echo "</p>
                </div>
                ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 64) && ($context["catalog_model"] ?? null))) {
                    // line 65
                    echo "                <p class=\"model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 65);
                    echo "</p>
                ";
                }
                // line 67
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 67) && ($context["catalog_stock"] ?? null))) {
                    // line 68
                    echo "                <div class=\"stock";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 68) == 7)) {
                        echo " in";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 68) == 5)) {
                        echo " out";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 68) == 6)) {
                        echo " wait";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status_id", [], "any", false, false, false, 68) == 8)) {
                        echo " pre";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 68);
                    echo "</div>
                ";
                }
                // line 70
                echo "              </div>
              <div class=\"price_button\">
                ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                <div class=\"price\">
                  ";
                    // line 74
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "                  <div class=\"price-stock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75);
                        echo "</div>
                  ";
                    } else {
                        // line 77
                        echo "                  <div class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
                        echo "</div>
                  <div class=\"price-stock price-new\">";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78);
                        echo "</div>
                  ";
                    }
                    // line 80
                    echo "                </div>
                ";
                }
                // line 82
                echo "                <button class=\"btn icon_cart";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "out_of_stock", [], "any", false, false, false, 82) && ($context["catalog_button_cart"] ?? null))) {
                    echo " out_of_stock";
                }
                echo "\" type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
                echo "');\"></button>
              </div>
              <div class=\"hover_block\">
                ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 85) && ($context["catalog_attribute_groups"] ?? null))) {
                    // line 86
                    echo "                <ul class=\"attribute_groups\">
                  ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 88
                        echo "                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 88), 0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 89
                            echo "                  <li>
                    <b>";
                            // line 90
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 90);
                            echo ":</b>
                    ";
                            // line 91
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 91)) > 90)) {
                                // line 92
                                echo "                      ";
                                echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 92), 0, 90) . "...");
                                echo "
                    ";
                            } else {
                                // line 94
                                echo "                      ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 94);
                                echo "
                    ";
                            }
                            // line 96
                            echo "                  </li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 98
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "                </ul>
                ";
                }
                // line 101
                echo "              </div>
            </div>
          </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </div>
      ";
        } else {
            // line 108
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 110
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 113
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 115
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 118
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "speedy/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 118,  409 => 115,  403 => 113,  395 => 110,  389 => 108,  385 => 106,  375 => 101,  371 => 99,  365 => 98,  358 => 96,  352 => 94,  346 => 92,  344 => 91,  340 => 90,  337 => 89,  332 => 88,  328 => 87,  325 => 86,  323 => 85,  312 => 82,  308 => 80,  303 => 78,  298 => 77,  292 => 75,  290 => 74,  287 => 73,  285 => 72,  281 => 70,  265 => 68,  262 => 67,  256 => 65,  254 => 64,  248 => 62,  242 => 61,  238 => 59,  234 => 57,  231 => 56,  227 => 55,  223 => 53,  217 => 52,  211 => 51,  207 => 49,  201 => 47,  199 => 46,  196 => 45,  182 => 43,  180 => 42,  175 => 40,  171 => 39,  167 => 37,  157 => 36,  149 => 35,  145 => 34,  140 => 31,  136 => 30,  133 => 29,  131 => 28,  127 => 27,  122 => 26,  114 => 22,  112 => 21,  109 => 20,  99 => 18,  96 => 17,  92 => 16,  83 => 15,  77 => 14,  75 => 13,  66 => 12,  61 => 11,  58 => 10,  55 => 9,  53 => 8,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/account/wishlist.twig", "");
    }
}
