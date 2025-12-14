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

/* speedy/template/common/home.twig */
class __TwigTemplate_a455f8bde754edc74e1757495d2011fdf40065bbe8a3be0c18de4d2eb6f34ca5 extends \Twig\Template
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
";
        // line 2
        if (($context["catalog_link"] ?? null)) {
            // line 3
            echo "<style>
  @media (max-width: 1100px) {
    .banner_main_slider {
      margin-top: 15px;
    }
  }
</style>
<p class=\"btn home_catalog_link\">";
            // line 10
            echo ($context["text_catalog"] ?? null);
            echo "</p>
<script>
  \$(\".home_catalog_link\").on(\"click\", function() {
    \$(\"#m_menu > .dropdown-menu\").addClass(\"active\").find(\".m_menu_nav\").addClass(\"active\");
    \$(\"#top\").addClass(\"active\");
    \$(\".m_menu_back\").fadeOut(0);
  });
</script>
";
        }
        // line 19
        echo "<div id=\"common-home\" class=\"container\">
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
    ";
        // line 23
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 25
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 27
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "speedy/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  52 => 10,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/home.twig", "");
    }
}
