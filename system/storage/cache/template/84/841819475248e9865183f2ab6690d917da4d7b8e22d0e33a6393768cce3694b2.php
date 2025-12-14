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

/* speedy/template/extension/module/blog_featured.twig */
class __TwigTemplate_ade4cadeddb383e572070e12541b748146eb3dcd900b1b31d408b47add112c8d extends \Twig\Template
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
        echo "<section>
  <div class=\"section_title\">
    ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
    <div class=\"swiper_arrows swiper_arrows_products swiper_arrows_products_active\" id=\"blog_items_slider_arrows_featured\">
      <div class=\"arrow arrow_prev\"></div>
      <div class=\"arrow arrow_next\"></div>
    </div>
  </div>
  <div class=\"products_items blog_items\" id=\"blog_items_slider_featured\">
    <div class=\"swiper-wrapper\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
    <div class=\"swiper-slide item\">
        <div class=\"image\">
          <a href=\"";
            // line 14
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["article"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\"><img src=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["article"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["thumb"] ?? null) : null);
            echo "\" alt=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["article"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["article"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
            echo "\" class=\"img-responsive\" /></a>
        </div>
        <div class=\"caption\">
          <div class=\"name\"><a href=\"";
            // line 17
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["article"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["article"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
            echo "</a></div>
          <p class=\"description\">";
            // line 18
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["article"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["description"] ?? null) : null);
            echo "</p>
          <div class=\"additional\">
            ";
            // line 20
            if (($context["configblog_review_status"] ?? null)) {
                // line 21
                echo "              <div class=\"rating\">
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 23) < $context["i"])) {
                        // line 24
                        echo "                <span></span>
                ";
                    } else {
                        // line 26
                        echo "                <span class=\"active\"></span>
                ";
                    }
                    // line 28
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "              </div>
             ";
            }
            // line 31
            echo "          </div>
          <div class=\"price_button\">
            <div class=\"date\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 33);
            echo "</div>
            <button class=\"btn icon_read\" type=\"button\" onclick=\"location.href = ('";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 34);
            echo "');\"></button>
          </div>
        </div>
    </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "   </div>
  </div>
  <script>
      // Проверка на нахождение модуля в aside
      if(\$(\"#blog_items_slider_featured\").parent().parent().attr(\"id\") != 'column-left') {
        var swiperblogfeatured = new Swiper(\"#blog_items_slider_featured\", {
          lazy: true,
          loop: true,
          navigation: {
            nextEl: \"#blog_items_slider_arrows_featured .arrow_next\",
            prevEl: \"#blog_items_slider_arrows_featured .arrow_prev\",
          },
          breakpoints: {
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 10,
            },
            1280: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
          },
          spaceBetween: 10,
        });
      } else {
        var swiperblogfeaturedAside = new Swiper(\"#blog_items_slider_featured\", {
          lazy: true,
          loop: true,
          navigation: {
            nextEl: \"#blog_items_slider_arrows_featured .arrow_next\",
            prevEl: \"#blog_items_slider_arrows_featured .arrow_prev\",
          },
          slidesPerView: 1,
          spaceBetween: 10,
        });
      }
    </script>
</section>";
    }

    public function getTemplateName()
    {
        return "speedy/template/extension/module/blog_featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  121 => 34,  117 => 33,  113 => 31,  109 => 29,  103 => 28,  99 => 26,  95 => 24,  92 => 23,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  72 => 17,  60 => 14,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/extension/module/blog_featured.twig", "");
    }
}
