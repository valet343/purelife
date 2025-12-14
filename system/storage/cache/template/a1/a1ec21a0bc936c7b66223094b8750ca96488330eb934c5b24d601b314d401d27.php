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

/* common/login.twig */
class __TwigTemplate_20c61046257bec0b660e52a1f029ab02bcb3902aa85b936132e53537c698476c extends \Twig\Template
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
        echo "<style>
";
        // line 2
        if ((($context["config_login_page_bg"] ?? null) == 1)) {
        } elseif ((($context["config_login_page_bg"] ?? null) == 2)) {
            echo ".login_page .panel {box-shadow: none;border: none;}.login_page #container {background-color: #2a3b4c;}.login_page footer {color: #ccc;}";
        } elseif ((($context["config_login_page_bg"] ?? null) == 3)) {
            echo ".login_page .panel {box-shadow: none;border: none;}.login_page .video {position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);opacity: .2;min-height: 100%;min-width: 100%;}";
        }
        // line 3
        echo "</style>
<div class=\"login_page\">
";
        // line 5
        echo ($context["header"] ?? null);
        echo "
";
        // line 6
        if ((($context["config_login_page_bg"] ?? null) == 3)) {
            // line 7
            echo "<video class=\"video\" playsinline autoplay muted loop>
  <source src=\"../image/video_bg.mp4\" type=\"video/mp4\" />
  <source src=\"../image/video_bg.webm\" type=\"video/webm\" />
</video>
";
        }
        // line 12
        echo "<div id=\"content\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h1 class=\"panel-title\"><i class=\"fa fa-lock\"></i> ";
        // line 18
        echo ($context["text_login"] ?? null);
        echo "</h1>
          </div>
          <div class=\"panel-body\">
            ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 26
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 31
        echo "            ";
        echo ($context["config_login_after_auth"] ?? null);
        echo "
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 35
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 40
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                </div>
                ";
        // line 42
        if (($context["forgotten"] ?? null)) {
            // line 43
            echo "                <span class=\"help-block\"><a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></span>
                ";
        }
        // line 45
        echo "              </div>
              <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-key\"></i> ";
        // line 47
        echo ($context["button_login"] ?? null);
        echo "</button>
              </div>
              ";
        // line 49
        if (($context["redirect"] ?? null)) {
            // line 50
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 52
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  154 => 52,  148 => 50,  146 => 49,  141 => 47,  137 => 45,  129 => 43,  127 => 42,  120 => 40,  110 => 35,  104 => 32,  99 => 31,  91 => 27,  88 => 26,  80 => 22,  78 => 21,  72 => 18,  64 => 12,  57 => 7,  55 => 6,  51 => 5,  47 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/login.twig", "");
    }
}
