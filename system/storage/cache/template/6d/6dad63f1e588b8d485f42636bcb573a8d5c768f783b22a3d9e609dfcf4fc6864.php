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

/* speedy/template/common/language.twig */
class __TwigTemplate_9d2bb4ed7dcb65d66d1fb414f0f880a5c3a0cf970f24d3e21b83a7ae3168f197 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            if (($context["checklang_status"] ?? null)) {
                // line 3
                echo "  ";
                if (((isset($context["popup"]) || array_key_exists("popup", $context)) && (($context["popup"] ?? null) == true))) {
                    // line 4
                    echo "  <style>
    .wl-popup-language {
      padding: 15px;
      box-shadow: 0px 0px 25px #d8d8d8;
      background: #f0f0f0;
      border-radius: 5px;
      position: fixed;
      bottom: -100%;
      left: 50%;
      transform: translate(-50%, 0%);
      transition: bottom 1s;
    }
    .wl-popup-language.active {
      bottom: 30px;
      z-index: 1000;
    }
    .wl-popup-language-ua-lang {
      display: flex;
      align-items: center;
    }
    .wl-popup-language-close {
      background: var(--background_footer_color);
/*      right: -15px;*/
/*      top: -15px;*/
      position: relative;
      margin-left: 5px;
      border-radius: 7px;
    }
    .wl-popup-language-close:hover {
      cursor: pointer;
    }
    .wl-popup-language p {
      color: #000;
      font-size: 13px;
      font-weight: 500;
    }
    .wl-popup-language u {
      background: url(catalog/view/theme/speedy/image/icons/ua.svg) no-repeat;
      background-size: cover;
      border-radius: 100%;
      margin-right: 8px;
      width: 30px;
      height: 30px;
    }
    .wl-popup-language span {
      display: block;
      color: #000;
      font-size: 12px;
      opacity: .67;
      margin-bottom: 10px;
    }
    .wl-popup-language-ua-lang span {
      display: none;
    }
    .wl-popup-language .btn-group li {
      margin-right: 10px;
    }
    .wl-popup-language-ua-lang .btn-group li {
      margin-right: 0px;
    }
    .wl-popup-language .btn-group li:last-child {
      margin-right: 0px;
    }
    .wl-popup-language .btn-group {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    .wl-popup-language-ua-lang .btn-group {
      justify-content: flex-start;
    }
    .wl-popup-language .btn-group .language-select {
      text-align: center !important;
    }
    .wl-popup-language-ua-lang .btn-group .language-select {
      display: none;
      font-size: 12px;
      font-weight: 500;
    }
    .wl-popup-language-ua-lang .btn-group .language-select[name=\"uk-ua\"] {
      display: flex;
      margin-left: 10px;
    }
    @media (max-width: 380px) {
      .wl-popup-language {
        width: 90%;
      }
    }
  </style>
  <div class=\"wl-popup-language";
                    // line 93
                    if ((($context["checklang_type"] ?? null) == "ua_lang")) {
                        echo " wl-popup-language-ua-lang";
                    }
                    echo "\">
    ";
                    // line 94
                    if ((($context["checklang_type"] ?? null) == "ua_lang")) {
                        // line 95
                        echo "    <u class=\"icon\"></u>
    <p>";
                        // line 96
                        echo ($context["text_popup_language_title_ua_lang"] ?? null);
                        echo "</p>
    <span>";
                        // line 97
                        echo ($context["text_popup_language_description_ua_lang"] ?? null);
                        echo "</span>
    ";
                    } else {
                        // line 99
                        echo "    <p>";
                        echo ($context["text_popup_language_title"] ?? null);
                        echo "</p>
    <span>";
                        // line 100
                        echo ($context["text_popup_language_description"] ?? null);
                        echo "</span>
    ";
                    }
                    // line 102
                    echo "    <form action=\"";
                    echo ($context["action"] ?? null);
                    echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <ul class=\"btn-group\">
        ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 105
                        echo "        <li>
          <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 106);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 106);
                        echo "</button>
        </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "      </ul>
      <input type=\"hidden\" name=\"code\" value=\"\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 111
                    echo ($context["redirect"] ?? null);
                    echo "\" />
    </form>
    <div class=\"wl-popup-language-close btn-close\"></div>
  </div>
  <script>
  \$(\".dropdown-bg\").after(\$(\".wl-popup-language\"));
  \$(\".wl-popup-language-close\").on(\"click\", function() {
    \$(this).parent().remove();
  })
  </script>
  ";
                    // line 121
                    if ((($context["checklang_type"] ?? null) == "ua_lang")) {
                        // line 122
                        echo "    <script>
      \$('#form-language button[name=\"uk-ua\"]').text(\"";
                        // line 123
                        echo ($context["text_popup_language_button_ua_lang"] ?? null);
                        echo "\")
      if(\$(\"html\").attr(\"lang\") != \"uk\") {
        setTimeout(function(){
          \$(\".wl-popup-language\").addClass(\"active\");
        }, 1000);
      }
    </script>
  ";
                    } else {
                        // line 131
                        echo "    <script>
      setTimeout(function(){
        \$(\".wl-popup-language\").addClass(\"active\");
      }, 1000);
    </script>
  ";
                    }
                    // line 137
                    echo "  ";
                }
            }
            // line 139
            echo "<form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
  <button class=\"dropdown-toggle\">";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 140) == ($context["code"] ?? null))) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 140);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</button>
  <ul class=\"dropdown-menu\">
    ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 143
                echo "    <li>
      <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 144);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 144);
                echo "</button>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "  </ul>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 149
            echo ($context["redirect"] ?? null);
            echo "\" />
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "speedy/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 149,  272 => 147,  261 => 144,  258 => 143,  254 => 142,  239 => 140,  234 => 139,  230 => 137,  222 => 131,  211 => 123,  208 => 122,  206 => 121,  193 => 111,  189 => 109,  178 => 106,  175 => 105,  171 => 104,  165 => 102,  160 => 100,  155 => 99,  150 => 97,  146 => 96,  143 => 95,  141 => 94,  135 => 93,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/language.twig", "");
    }
}
