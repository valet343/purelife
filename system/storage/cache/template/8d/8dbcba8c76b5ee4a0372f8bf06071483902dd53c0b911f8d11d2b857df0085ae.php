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

/* speedy/template/extension/module/speedy_categorywall.twig */
class __TwigTemplate_61617595bf92738a9b0338649158b892a9d2c32a271998974e1192f5a2342e11 extends \Twig\Template
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
            echo "<section class=\"category_wall\">
  <!-- <div class=\"section_title\">";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</div> -->
  <div id=\"category_wall\" class=\"swiper\">
    <ul class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                    echo " 
        <li class=\"swiper-slide item\">
          <a href=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 9);
                    echo "\" /></a>
          <div class=\"caption\"><p><a href=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                    echo "</a></p><span class=\"category_wall_open\"></span></div>
          <ul class=\"category_wall_hover\">
            ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 13
                        echo "              <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 13);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 13);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "          </ul>
        </li>
        ";
                } else {
                    // line 18
                    echo "        <li class=\"swiper-slide item\">
          <a href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 19);
                    echo "\" /></a>
          <div class=\"caption\"><p><a href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                    echo "</a></p></div>
        </li>
        ";
                }
                // line 23
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </ul>
  </div>
  <script>
    \$(\".category_wall_open\").on(\"click\", function() {
      \$(\".category_wall_hover\").removeClass(\"active\");
      \$(this).parent().parent().find(\".category_wall_hover\").addClass(\"active\");
    })
  </script>
  <script>
    var swiperCategoryWall = new Swiper(\"#category_wall\", {
      slidesPerView: \"auto\",
      spaceBetween: 10,
      freeMode: true,
    });
  </script>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "speedy/template/extension/module/speedy_categorywall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  108 => 23,  100 => 20,  94 => 19,  91 => 18,  86 => 15,  75 => 13,  71 => 12,  64 => 10,  58 => 9,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/extension/module/speedy_categorywall.twig", "");
    }
}
