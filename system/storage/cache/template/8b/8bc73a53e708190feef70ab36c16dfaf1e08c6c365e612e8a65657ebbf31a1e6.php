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

/* speedy/template/error/not_found.twig */
class __TwigTemplate_483106b3132b2cae7e629f8ec8b4c499d9a5c1821c591e317f31d58f4621ff83 extends \Twig\Template
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
        echo "<div id=\"error-not-found\">
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <div class=\"columns\">
    ";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 6
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"description\">";
        // line 14
        echo ($context["text_error"] ?? null);
        echo "</div>
      <div class=\"menu\">";
        // line 15
        echo ($context["menu"] ?? null);
        echo "</div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 17
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 19
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 21
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 24
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "speedy/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  102 => 21,  97 => 19,  90 => 17,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  70 => 11,  59 => 9,  55 => 8,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/error/not_found.twig", "");
    }
}
