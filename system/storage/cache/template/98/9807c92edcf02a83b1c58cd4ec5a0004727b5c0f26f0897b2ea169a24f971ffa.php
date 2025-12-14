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

/* speedy/template/common/menu.twig */
class __TwigTemplate_eb9d36d0953f985a193bdbbf78f38e63981ae454a1717375005f2e54397086e5 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<!-- <style>
  #menu .dropdown-menu > ul {
    height: ";
            // line 4
            echo ($context["menu_height"] ?? null);
            echo "px;
  }
</style> -->
  <nav id=\"menu\">
    <button class=\"dropdown-toggle\"><span class=\"hidden_xs\">";
            // line 8
            echo ($context["text_category"] ?? null);
            echo "</span></button>
    <span class=\"dropdown-menu\">
      <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "        <li class=\"dropdown\">
          <a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14) && ($context["menu_view_image"] ?? null))) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    echo "</a>
              <span>
              <ul class=\"dropdown-menu-2\">
              ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 17), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 18
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "                ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 19)) {
                                // line 20
                                echo "                <li class=\"dropdown\">
                  <a href=\"";
                                // line 21
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 21);
                                echo "\">";
                                if ((twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 21) && ($context["menu_view_image_2"] ?? null))) {
                                    echo "<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 21);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                                    echo "\">";
                                }
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                                echo "</a>
                    <span>
                    <ul class=\"dropdown-menu-3\">
                    ";
                                // line 24
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 24));
                                foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                    // line 25
                                    echo "                    ";
                                    if (twig_get_attribute($this->env, $this->source, $context["grand_child"], "grand_childs_2", [], "any", false, false, false, 25)) {
                                        // line 26
                                        echo "                    <li class=\"dropdown\">
                      <a href=\"";
                                        // line 27
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 27);
                                        echo "\">";
                                        if ((twig_get_attribute($this->env, $this->source, $context["grand_child"], "thumb", [], "any", false, false, false, 27) && ($context["menu_view_image_3"] ?? null))) {
                                            echo "<img src=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "thumb", [], "any", false, false, false, 27);
                                            echo "\" alt=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 27);
                                            echo "\">";
                                        }
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 27);
                                        echo "</a>
                      <span>
                      <ul class=\"dropdown-menu-4\">
                      ";
                                        // line 30
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["grand_child"], "grand_childs_2", [], "any", false, false, false, 30));
                                        foreach ($context['_seq'] as $context["_key"] => $context["grand_child_2"]) {
                                            // line 31
                                            echo "                        <li><a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child_2"], "href", [], "any", false, false, false, 31);
                                            echo "\">";
                                            if ((twig_get_attribute($this->env, $this->source, $context["grand_child_2"], "thumb", [], "any", false, false, false, 31) && ($context["menu_view_image_4"] ?? null))) {
                                                echo "<img src=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["grand_child_2"], "thumb", [], "any", false, false, false, 31);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["grand_child_2"], "name", [], "any", false, false, false, 31);
                                                echo "\">";
                                            }
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child_2"], "name", [], "any", false, false, false, 31);
                                            echo "</a></li>
                      ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child_2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 33
                                        echo "                      </ul>
                      </span>
                    </li>    
                    ";
                                    } else {
                                        // line 37
                                        echo "                    <li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 37);
                                        echo "\">";
                                        if ((twig_get_attribute($this->env, $this->source, $context["grand_child"], "thumb", [], "any", false, false, false, 37) && ($context["menu_view_image_3"] ?? null))) {
                                            echo "<img src=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "thumb", [], "any", false, false, false, 37);
                                            echo "\" alt=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 37);
                                            echo "\">";
                                        }
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 37);
                                        echo "</a></li>
                    ";
                                    }
                                    // line 39
                                    echo "                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 40
                                echo "                    </ul>
                    </span>
                </li>
                ";
                            } else {
                                // line 44
                                echo "                <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                                echo "\">";
                                if ((twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 44) && ($context["menu_view_image_2"] ?? null))) {
                                    echo "<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 44);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                                    echo "\">";
                                }
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                                echo "</a></li>
                ";
                            }
                            // line 46
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "              </ul>
              </span>
        </li>
        ";
                } else {
                    // line 52
                    echo "        <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 52);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 52) && ($context["menu_view_image"] ?? null))) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 52);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                    echo "</a></li>
        ";
                }
                // line 54
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
            if (($context["menu_additional_links"] ?? null)) {
                // line 56
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["menu_additional_links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["menu_additional_link"]) {
                    // line 57
                    echo "          <li class=\"menu_additional_link\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "link", [], "any", false, false, false, 57);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 57) && ($context["menu_view_image"] ?? null))) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 57);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 57);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 57);
                    echo "</a></li>
          <li class=\"dropdown menu_additional_link\">
            <a href=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "link", [], "any", false, false, false, 59);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 59) && ($context["menu_view_image"] ?? null))) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 59);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 59);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 59);
                    echo "</a>
            <span>
              <ul class=\"dropdown-menu-2\">
                <li class=\"dropdown\">
                  <a href=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "link", [], "any", false, false, false, 63);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 63) && ($context["menu_view_image"] ?? null))) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "image", [], "any", false, false, false, 63);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 63);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["menu_additional_link"], "title", [], "any", false, false, false, 63);
                    echo "</a>
                  <span>
                    <ul class=\"dropdown-menu-2\">
                    </ul>
                  </span>
                </li>
              </ul>
            </span>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_additional_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "        ";
            }
            // line 74
            echo "      </ul>
    </span>
  </nav>
";
        }
        // line 78
        echo "<script>
  \$(\"#menu .dropdown-menu ul li:nth-of-type(2)\").after(\$(\".menu_additional_link\"));
</script>";
    }

    public function getTemplateName()
    {
        return "speedy/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 78,  312 => 74,  309 => 73,  284 => 63,  268 => 59,  253 => 57,  248 => 56,  245 => 55,  239 => 54,  224 => 52,  218 => 48,  212 => 47,  206 => 46,  191 => 44,  185 => 40,  179 => 39,  164 => 37,  158 => 33,  140 => 31,  136 => 30,  121 => 27,  118 => 26,  115 => 25,  111 => 24,  96 => 21,  93 => 20,  90 => 19,  85 => 18,  81 => 17,  66 => 14,  63 => 13,  60 => 12,  56 => 11,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/menu.twig", "");
    }
}
