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

/* speedy/template/extension/module/speedy_banner_main.twig */
class __TwigTemplate_743c87303af01bca31802004a7c453cf4b136ab3d91224275b525097de54e4d7 extends \Twig\Template
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
        if (($context["banners_main"] ?? null)) {
            // line 2
            echo "<section class=\"banner_main";
            if ((($context["container"] ?? null) == "fixed")) {
                echo " banner_main_fixed";
            } else {
                echo " banner_main_adaptive";
            }
            echo "\">
    <div class=\"swiper";
            // line 3
            if ((($context["type"] ?? null) == "slider")) {
                echo " banner_main_slider";
            } else {
                echo " banner_main_carousel";
            }
            echo "\" id=\"";
            if ((($context["type"] ?? null) == "slider")) {
                echo "banner_main_slider";
            } else {
                echo "banner_main_carousel";
            }
            echo ($context["module"] ?? null);
            echo "\">
        <div class=\"swiper-wrapper\">
                    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners_main"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner_main"]) {
                // line 6
                echo "                        <div class=\"swiper-slide item";
                if ((($context["type"] ?? null) == "slider")) {
                    if ((($context["slider_type"] ?? null) == "image_and_text")) {
                        echo " item_type_image_and_text";
                    } else {
                        echo " item_type_image";
                    }
                }
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["banner_main"], "background_color", [], "any", false, false, false, 6) && (($context["slider_type"] ?? null) == "image_and_text"))) {
                    echo " style=\"background: ";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "background_color", [], "any", false, false, false, 6);
                    echo "\"";
                }
                echo ">
                                ";
                // line 7
                if (((($context["slider_type"] ?? null) == "image_and_text") && (($context["type"] ?? null) == "slider"))) {
                    // line 8
                    echo "                                <div class=\"item_inner\" style=\"width: ";
                    echo ($context["width_item"] ?? null);
                    echo "px;max-width: 100%;\">
                                    <img src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "image", [], "any", false, false, false, 9);
                    echo "\" />
                                    <span class=\"";
                    // line 10
                    if ((twig_get_attribute($this->env, $this->source, $context["banner_main"], "position", [], "any", false, false, false, 10) == 1)) {
                        echo "position_left";
                    } else {
                        echo "position_right";
                    }
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "class", [], "any", false, false, false, 10);
                    echo "\">
                                        <p class=\"title\">";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "title", [], "any", false, false, false, 11);
                    echo "</p>
                                        <p class=\"description\">";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "description", [], "any", false, false, false, 12);
                    echo "</p>
                                        ";
                    // line 13
                    if (twig_get_attribute($this->env, $this->source, $context["banner_main"], "link", [], "any", false, false, false, 13)) {
                        // line 14
                        echo "                                            <a class=\"link\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "link", [], "any", false, false, false, 14);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "button_text", [], "any", false, false, false, 14);
                        echo "</a>
                                        ";
                    } else {
                        // line 16
                        echo "                                            <p class=\"link\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "button_text", [], "any", false, false, false, 16);
                        echo "</p>
                                        ";
                    }
                    // line 18
                    echo "                                    </span>
                                </div>
                                ";
                } else {
                    // line 21
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["banner_main"], "link", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "link", [], "any", false, false, false, 22);
                        echo "\" target=\"_blank\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "image", [], "any", false, false, false, 22);
                        echo "\" /></a>
                                    ";
                    } else {
                        // line 24
                        echo "                                    <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_main"], "image", [], "any", false, false, false, 24);
                        echo "\" />
                                    ";
                    }
                    // line 26
                    echo "                                ";
                }
                // line 27
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_main'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>
        ";
            // line 30
            if (($context["arrows"] ?? null)) {
                // line 31
                echo "        <div class=\"banner_main_arrows swiper_arrows\">
            <div class=\"arrow arrow_prev\"></div>
            <div class=\"arrow arrow_next\"></div>
        </div>
        ";
            }
            // line 36
            echo "    </div>
    ";
            // line 37
            if (((($context["type"] ?? null) == "carousel") && (($context["freemode"] ?? null) == 0))) {
                // line 38
                echo "    <style>
        .banner_main_carousel .item {
            max-width: initial;
        }
    </style>
    ";
            }
            // line 44
            echo "    <script>
    ";
            // line 45
            if ((($context["container"] ?? null) == "adaptive")) {
                // line 46
                echo "        // Если слайдер стоит первым, то перенести его ближе к шапке
        if(\$(\"#content > *:first-child\").hasClass(\"banner_main_adaptive\")) {
            \$(\"#common-home\").eq(0).before(\$(\".banner_main_adaptive\"));
        }
    ";
            }
            // line 51
            echo "    ";
            if ((((($context["container"] ?? null) == "adaptive") && (($context["type"] ?? null) == "carousel")) && (($context["freemode"] ?? null) == 0))) {
                // line 52
                echo "        // Если слайдер стоит первым, то перенести его ближе к шапке + сделать отступ слева для красоты
        \$(\"#common-home\").eq(0).before(\$(\".banner_main_adaptive\"));
    ";
            }
            // line 55
            echo "    ";
            if ((((($context["container"] ?? null) == "adaptive") && (($context["type"] ?? null) == "carousel")) && (($context["freemode"] ?? null) == 1))) {
                // line 56
                echo "        // Если слайдер стоит первым, то перенести его ближе к шапке + сделать отступ слева для красоты
        var marginLeftBanner = \$(\".container\").offset().left + 10;
        \$(\".banner_main_adaptive\").css({\"margin-left\":marginLeftBanner});
    ";
            }
            // line 60
            echo "    ";
            if ((($context["type"] ?? null) == "slider")) {
                // line 61
                echo "        // Условия для слайдера
        var swiperbannerMain = new Swiper(\"#banner_main_slider";
                // line 62
                echo ($context["module"] ?? null);
                echo "\", {
          slidesPerView: 1,
          
          spaceBetween: 0,
          loop: true,
          ";
                // line 67
                if (($context["autoplay"] ?? null)) {
                    // line 68
                    echo "          autoplay: {
            delay: ";
                    // line 69
                    if (($context["autoplay_time"] ?? null)) {
                        echo ($context["autoplay_time"] ?? null);
                    } else {
                        echo "2000";
                    }
                    // line 70
                    echo "          },
          ";
                }
                // line 72
                echo "          ";
                if (($context["arrows"] ?? null)) {
                    // line 73
                    echo "          navigation: {
            nextEl: \".banner_main_arrows .arrow_next\",
            prevEl: \".banner_main_arrows .arrow_prev\",
          },
          ";
                }
                // line 78
                echo "        });
        // Инверсия цветов в зависимости от фона
        function isDark( color ) {
            var match = /rgb\\((\\d+).*?(\\d+).*?(\\d+)\\)/.exec(color);
            return ( match[1] & 255 )
                 + ( match[2] & 255 )
                 + ( match[3] & 255 )
                   < 3 * 256 / 2;
        }
        \$('.item_type_image_and_text').each(function() {
            \$(this).css(\"color\", isDark(\$(this).css(\"background\")) ? 'white' : 'black');
        });
    ";
            } else {
                // line 91
                echo "        // Условия для слайдера (тип: истории)
        var swiperbannerMain = new Swiper(\"#banner_main_carousel";
                // line 92
                echo ($context["module"] ?? null);
                echo "\", {
          ";
                // line 93
                if (($context["freemode"] ?? null)) {
                    echo "  
          slidesPerView: \"auto\",
          ";
                } else {
                    // line 96
                    echo "          breakpoints: {
              320: {
                slidesPerView: 1,
              },
              480: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              1024: {
                slidesPerView: 3,
              },
              1280: {
                slidesPerView: 4,
              },
              1440: {
                slidesPerView: ";
                    // line 113
                    echo ($context["carousel_items"] ?? null);
                    echo ",
              },
            },
          ";
                }
                // line 117
                echo "          spaceBetween: 10,
          loop: true,
          ";
                // line 119
                if (($context["autoplay"] ?? null)) {
                    // line 120
                    echo "          autoplay: {
            delay: ";
                    // line 121
                    if (($context["autoplay_time"] ?? null)) {
                        echo ($context["autoplay_time"] ?? null);
                    } else {
                        echo "2000";
                    }
                    // line 122
                    echo "          },
          ";
                }
                // line 124
                echo "          ";
                if (($context["arrows"] ?? null)) {
                    // line 125
                    echo "          navigation: {
            nextEl: \".banner_main_arrows .arrow_next\",
            prevEl: \".banner_main_arrows .arrow_prev\",
          },
          ";
                }
                // line 130
                echo "        });
    ";
            }
            // line 132
            echo "    </script>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "speedy/template/extension/module/speedy_banner_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 132,  338 => 130,  331 => 125,  328 => 124,  324 => 122,  318 => 121,  315 => 120,  313 => 119,  309 => 117,  302 => 113,  283 => 96,  277 => 93,  273 => 92,  270 => 91,  255 => 78,  248 => 73,  245 => 72,  241 => 70,  235 => 69,  232 => 68,  230 => 67,  222 => 62,  219 => 61,  216 => 60,  210 => 56,  207 => 55,  202 => 52,  199 => 51,  192 => 46,  190 => 45,  187 => 44,  179 => 38,  177 => 37,  174 => 36,  167 => 31,  165 => 30,  162 => 29,  155 => 27,  152 => 26,  146 => 24,  138 => 22,  135 => 21,  130 => 18,  124 => 16,  116 => 14,  114 => 13,  110 => 12,  106 => 11,  96 => 10,  92 => 9,  87 => 8,  85 => 7,  68 => 6,  64 => 5,  48 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/extension/module/speedy_banner_main.twig", "");
    }
}
