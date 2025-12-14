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

/* speedy/template/common/cart.twig */
class __TwigTemplate_2ce4cf80585909d3365c66a7bc9d6ce6a2d8303ede7ac2273a5ef0f0b1596a35 extends \Twig\Template
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
        echo "<div id=\"cart\">
  ";
        // line 2
        if (($context["cart_sidebar_status"] ?? null)) {
            // line 3
            echo "  <button class=\"dropdown-toggle cart_button icon_cart\" type=\"button\" id=\"cart-total\"><p>";
            if ((($context["text_items_sum"] ?? null) != 0)) {
                echo ($context["text_items_sum"] ?? null);
            }
            echo "</p><span>";
            echo ($context["text_items_count"] ?? null);
            echo "</span></button>
  ";
        } else {
            // line 5
            echo "  <a class=\"cart_button\" href=\"";
            echo ($context["cart"] ?? null);
            echo "\" id=\"cart-total\"><p>";
            if ((($context["text_items_sum"] ?? null) != 0)) {
                echo ($context["text_items_sum"] ?? null);
            }
            echo "</p><span>";
            echo ($context["text_items_count"] ?? null);
            echo "</span></a>
  ";
        }
        // line 7
        echo "  <ul class=\"dropdown-menu\" style=\"";
        echo ($context["cart_sidebar_position"] ?? null);
        echo ": 0\">
    <h3>";
        // line 8
        echo ($context["text_heading_cart"] ?? null);
        echo "<button class=\"btn-close btn-close-cart\"></button></h3>
    <span>
    ";
        // line 10
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 11
            echo "    <li class=\"cart_content\">
      <div class=\"cart_items\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "        <div class=\"item\">
          ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "          <div class=\"image\">
              <a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                    echo "\">
                <img src=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" />
              </a>
          </div>
          ";
                }
                // line 22
                echo "          <div class=\"caption\">
            <div class=\"name\">
              <a href=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "</a>
              ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                <div class=\"options\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 28
                        echo "                - ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 28);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 28);
                        echo "
                <br>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                </div>
                ";
                }
                // line 33
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                - ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "
              ";
                }
                // line 36
                echo "            </div>
            <div class=\"price\">
              ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                echo "
              <div class=\"total_change\">
                <button onclick=\"updateCart('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 40);
                echo "', '-1', '1')\" class=\"btn cart-quantity__btn\">-</button>
                <input class=\"cart-quantity__input\" type=\"number\" name=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "\" size=\"2\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                echo "\" onchange=\"updateCart('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "', \$(this).val(), '0')\" />
                <button onclick=\"updateCart('";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 42);
                echo "', '+1', '1')\" class=\"btn cart-quantity__btn\">+</button>
              </div>
            </div>
            <div class=\"total\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 45);
                echo "</div>
          </div>
          <button type=\"button\" onclick=\"cart.remove('";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 47);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-delete btn-xs\"></button>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "      </div>
      <div class=\"voucher_items\">
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 53
                echo "        <div>
          <div class=\"text-center\"></div>
          <div class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 55);
                echo "</div>
          <div class=\"text-right\">x&nbsp;1</div>
          <div class=\"text-right\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 57);
                echo "</div>
          <div class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 58);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-delete btn-xs\"></button></div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      </div>
    </li>
    <li class=\"cart_total\">
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 65
                echo "        <div class=\"total_item\"><b>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 65);
                echo ":</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 65);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        <div class=\"buttons buttons_column\">
          ";
            // line 68
            if (($context["cart_sidebar_clear_status"] ?? null)) {
                echo "<a class=\"btn btn-gray-s\" onclick=\"cart.clear();\">";
                echo ($context["text_cart_clear"] ?? null);
                echo "</a>";
            }
            // line 69
            echo "          <a class=\"btn btn-gray\" href=\"";
            echo ($context["cart"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
          <a class=\"btn\" href=\"";
            // line 70
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
        </div>
    </li>
    ";
        } else {
            // line 74
            echo "    <li class=\"cart_empty\">
      <p class=\"text-center\">";
            // line 75
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary\">";
            // line 78
            echo ($context["button_continue"] ?? null);
            echo "</button>
          </div>
      </div>
    </li>
    ";
        }
        // line 83
        echo "    </span>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "speedy/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 83,  284 => 78,  278 => 75,  275 => 74,  266 => 70,  259 => 69,  253 => 68,  250 => 67,  239 => 65,  235 => 64,  230 => 61,  219 => 58,  215 => 57,  210 => 55,  206 => 53,  202 => 52,  198 => 50,  187 => 47,  180 => 45,  174 => 42,  166 => 41,  162 => 40,  157 => 38,  153 => 36,  145 => 34,  142 => 33,  138 => 31,  126 => 28,  122 => 27,  119 => 26,  117 => 25,  111 => 24,  107 => 22,  96 => 18,  92 => 17,  89 => 16,  87 => 15,  84 => 14,  80 => 13,  76 => 11,  74 => 10,  69 => 8,  64 => 7,  52 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/cart.twig", "");
    }
}
