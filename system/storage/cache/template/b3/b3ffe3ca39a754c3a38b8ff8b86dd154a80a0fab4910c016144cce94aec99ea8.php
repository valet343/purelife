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

/* extension/theme/speedy.twig */
class __TwigTemplate_d636de14f271de597c83543517540f754fad5ee7c77184d4d724fa17c2e6eba4 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"dc_pro_theme\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title_text"] ?? null);
        echo " <span>v";
        echo ($context["speedy_version"] ?? null);
        echo "</span></h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\" style=\"position: relative;\">
\t\t\t\t<div class=\"load\">
\t\t\t\t\t<img src=\"../image/catalog/favicon.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-pages\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_pages"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-parts\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_parts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-images\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_images"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-widgets\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-help\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 39
        if (($context["theme_speedy_update_status"] ?? null)) {
            echo "<li class=\"tab_update_alert\"><a href=\"#tab-update\" data-toggle=\"tab\">";
            echo ($context["tab_update"] ?? null);
            echo " (";
            echo ($context["theme_speedy_update_version"] ?? null);
            echo ")</a></li>";
        }
        // line 40
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"tab-general_left\">
\t\t\t\t\t\t\t\t\t\t<li class=\"main active\"><a href=\"#tab-main\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_main"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"header\"><a href=\"#tab-header\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_header"] ?? null);
        echo "</a></li> -->
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"footer\"><a href=\"#tab-footer\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_footer"] ?? null);
        echo "</a></li> -->
\t\t\t\t\t\t\t\t\t\t<li class=\"push\"><a href=\"#tab-push\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_push"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"adaptive\"><a href=\"#tab-adaptive\" data-toggle=\"tab\">";
        // line 50
        echo ($context["tab_adaptive"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"code\"><a href=\"#tab-code\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_code"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 58
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\" title=\"";
        // line 60
        echo ($context["help_directory"] ?? null);
        echo "\">";
        echo ($context["entry_directory"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_directory\" id=\"input-directory\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["directory"] == ($context["theme_speedy_directory"] ?? null))) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"border-top: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 74
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        if (($context["theme_speedy_status"] ?? null)) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"hidden\" name=\"theme_speedy_version\" value=\"";
        // line 85
        echo ($context["theme_speedy_version"] ?? null);
        echo "\" /> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 90
        echo ($context["text_theme_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-group_theme_colors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-scheme-color\">";
        // line 92
        echo ($context["text_theme_colors"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        if ((($context["theme_speedy_scheme_color"] ?? null) == 1)) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_1\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_1\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_1\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        if ((($context["theme_speedy_scheme_color"] ?? null) == 2)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_2\" value=\"2\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_2\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_2\" value=\"2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_2\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 116
        if ((($context["theme_speedy_scheme_color"] ?? null) == 3)) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_3\" value=\"3\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_3\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_3\" value=\"3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_3\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        if ((($context["theme_speedy_scheme_color"] ?? null) == 4)) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_4\" value=\"4\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_4\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_4\" value=\"4\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_4\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        if ((($context["theme_speedy_scheme_color"] ?? null) == 5)) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_5\" value=\"5\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_5\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_5\" value=\"5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_5\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 146
        if ((($context["theme_speedy_scheme_color"] ?? null) == 6)) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_6\" value=\"6\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_6\" class=\"active\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_6\" value=\"6\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_6\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-scheme-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 156
        if ((($context["theme_speedy_scheme_color"] ?? null) == 99)) {
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_99\" value=\"99\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_99\" class=\"active\">Своя конфигурация</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_scheme_color\" id=\"scheme_color_99\" value=\"99\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"scheme_color_99\">Своя конфигурация</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-scheme-color-edit\">Разрешить изменять цвета</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_edit_item scheme_color_edit_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 170
        if (($context["theme_speedy_scheme_color_edit"] ?? null)) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"scheme_color_edit\" name=\"theme_speedy_scheme_color_edit\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 172
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"scheme_color_edit\" name=\"theme_speedy_scheme_color_edit\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 175
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 176
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 177
        if ( !($context["theme_speedy_scheme_color_edit"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"scheme_color_edit\" name=\"theme_speedy_scheme_color_edit\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"scheme_color_edit\" name=\"theme_speedy_scheme_color_edit\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 182
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-background-color\">";
        // line 187
        echo ($context["entry_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_background_color\" value=\"";
        // line 189
        echo ($context["theme_speedy_background_color"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-background-color\" class=\"form-control colorpicker theme_background_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-main-color\">";
        // line 193
        echo ($context["entry_main_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\" style=\"padding-left: 0px;\"> ";
        // line 195
        if (($context["theme_speedy_main_color_type"] ?? null)) {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"main_color_type\" name=\"theme_speedy_main_color_type\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tГрадиент
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"main_color_type\" name=\"theme_speedy_main_color_type\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tГрадиент
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 201
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 202
        if ( !($context["theme_speedy_main_color_type"] ?? null)) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"main_color_type\" name=\"theme_speedy_main_color_type\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tСплошной
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"main_color_type\" name=\"theme_speedy_main_color_type\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tСплошной
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_main_color\" value=\"";
        // line 211
        echo ($context["theme_speedy_main_color"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-main-color\" class=\"form-control colorpicker theme_main_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"theme_main_color_add theme_main_color_add_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_main_color_2\" value=\"";
        // line 213
        echo ($context["theme_speedy_main_color_2"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-main-color-2\" class=\"form-control colorpicker theme_main_color_2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_main_color_3\" value=\"";
        // line 214
        echo ($context["theme_speedy_main_color_3"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-main-color-3\" class=\"form-control colorpicker theme_main_color_3 \" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-background-top-color\">";
        // line 219
        echo ($context["entry_background_top_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_background_top_color\" value=\"";
        // line 221
        echo ($context["theme_speedy_background_top_color"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-background-top-color\" class=\"form-control colorpicker theme_background_top_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header-color\">Шапка";
        // line 225
        echo ($context["entry_header_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_header_color\" value=\"";
        // line 227
        echo ($context["theme_speedy_header_color"] ?? null);
        echo "\" placeholder=\"#ffffff\" id=\"input-header-color\" class=\"form-control colorpicker theme_header_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-special-color\">Шапка";
        // line 231
        echo ($context["entry_header_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_special_color\" value=\"";
        // line 233
        echo ($context["theme_speedy_special_color"] ?? null);
        echo "\" placeholder=\"#f28400\" id=\"input-special-color\" class=\"form-control colorpicker theme_special_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-background-footer-color\">";
        // line 237
        echo ($context["entry_background_footer_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_background_footer_color\" value=\"";
        // line 239
        echo ($context["theme_speedy_background_footer_color"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-background-footer-color\" class=\"form-control colorpicker theme_footer_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-background-payments-color\">Фон нижней части (иконки оплаты</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 scheme_color_item scheme_color_item_hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_background_payments_color\" value=\"";
        // line 245
        echo ($context["theme_speedy_background_payments_color"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-background-payments-color\" class=\"form-control colorpicker theme_background_payments_color\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>Шрифт, текст</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"\">Шрифт</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_font_family\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 255
        if ((($context["theme_speedy_font_family"] ?? null) == 1)) {
            // line 256
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Helvetica Neue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Open Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 259
($context["theme_speedy_font_family"] ?? null) == 2)) {
            // line 260
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Helvetica Neue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Open Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Helvetica Neue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Open Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"\">Размер основного текста</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_font_size\" value=\"";
        // line 275
        echo ($context["theme_speedy_font_size"] ?? null);
        echo "\" placeholder=\"14/26\" aria-describedby=\"theme_speedy_font_size\" id=\"input-adaptive-container-width\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"theme_speedy_font_size\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\t\t// Проверка на доступность редактирования цветов цветовой схемы
\t\t\t\t\t\t\t\t\t\t\tif(\$(\".scheme_color_edit[value='1']\").is(\":checked\")) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").removeClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").removeClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип основного цвета
\t\t\t\t\t\t\t\t\t\t\tif(\$(\".main_color_type[value='1']\").is(\":checked\")) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_add\").removeClass(\"theme_main_color_add_hidden\");
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t// Разрешить изменять цвета
\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit\").on(\"click\", function() {
\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit\").removeAttr('sce');
\t\t\t\t\t\t\t\t\t\t\t\$(this).attr('sce', true);
\t\t\t\t\t\t\t\t\t\t\tif(\$(\".scheme_color_edit[value='1']\").is(\":checked\")) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").removeClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").addClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t// Вкл \"свою конфигурацию\"
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_99\").prop('checked', true);
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").addClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").removeClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t// Разрешить изменять тип основного цвета

\t\t\t\t\t\t\t\t\t\t\$(\".main_color_type\").on(\"click\", function() {
\t\t\t\t\t\t\t\t\t\t\tif(\$(\".main_color_type[value='1']\").is(\":checked\")) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).parent().parent().find(\".theme_main_color_add\").removeClass(\"theme_main_color_add_hidden\");
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).parent().parent().find(\".theme_main_color_add\").addClass(\"theme_main_color_add_hidden\");
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t// Проверка на выбор кастомной цветовой схемы
\t\t\t\t\t\t\t\t\t\tif(\$(\"#scheme_color_99\").is('checked')) {
\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").removeClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").addClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit[value='1']\").prop('checked', true);
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").removeClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\$(\".radio-scheme-color label\").on(\"click\", function() {
\t\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('for') == 'scheme_color_99') {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").removeClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").addClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit[value='1']\").prop('checked', true);
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_item\").addClass(\"scheme_color_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit_item\").removeClass(\"scheme_color_edit_item_hidden\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".scheme_color_edit[value='0']\").prop('checked', true);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t///////////////////////////////////

\t\t\t\t\t\t\t\t\t\t// Пресеты #input-scheme-color

\t\t\t\t\t\t\t\t\t\t// #1
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_1\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#41ade3\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#23a1cd\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#0e89ca\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#f28400\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#081e2e\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#07141f\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t// #2
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_2\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#33d1b9\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#1ab887\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#46d9b1\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#f28400\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#082e26\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#072a23\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t// #3
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_3\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#6cc60b\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#0fc51b\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#19cb5f\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#f28400\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#192b06\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#121f04\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t// #4
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_4\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#de2020\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#ff1f1f\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#fb4646\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#f28400\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#1d0202\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#0c0202\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t// #5
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_5\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#e86628\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#ff5e00\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#d97530\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#0fc51b\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#291602\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#1b0e01\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t// #6
\t\t\t\t\t\t\t\t\t\t\t\$(\"#scheme_color_6\").on('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t// Фон сайту
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_color\").val(\"#f7f8f9\");
\t\t\t\t\t\t\t\t\t\t\t\t// Основной цвет
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color\").val(\"#8525e1\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_2\").val(\"#8515b2\");
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_main_color_3\").val(\"#cb46b0\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон top
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_top_color\").val(\"#f8f9fa\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон header
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_header_color\").val(\"#ffffff\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон акционных элементов
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_special_color\").val(\"#f28400\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_footer_color\").val(\"#120630\");
\t\t\t\t\t\t\t\t\t\t\t\t// Фон footer (оплаты)
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".theme_background_payments_color\").val(\"#05111b\");

\t\t\t\t\t\t\t\t\t\t\t\t\$(\".colorpicker\").spectrum({type: \"component\"});
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"tab-pane\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-push\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>Корзина</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-push-cart-alert-type\">Тип уведомления</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_push_cart_alert_type\" id=\"input-push-cart-alert-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 487
        if ((($context["theme_speedy_push_cart_alert_type"] ?? null) == "modal")) {
            // line 488
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"modal\" selected=\"selected\">";
            echo ($context["entry_push_alert_type_modal"] ?? null);
            echo "Модальное окно</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"alert\">";
            // line 489
            echo ($context["entry_push_alert_type_alert"] ?? null);
            echo "Всплывающее уведомление</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"modal\">";
            echo ($context["entry_push_alert_type_modal"] ?? null);
            echo "Модальное окно</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"alert\" selected=\"selected\">";
            // line 492
            echo ($context["entry_push_alert_type_alert"] ?? null);
            echo "Всплывающее уведомление</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 494
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>Избранное, сравнение</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-push-alert-type\">Тип уведомления</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_push_alert_type\" id=\"input-push-alert-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 504
        if ((($context["theme_speedy_push_alert_type"] ?? null) == "modal")) {
            // line 505
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"modal\" selected=\"selected\">";
            echo ($context["entry_push_alert_type_modal"] ?? null);
            echo "Модальное окно</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"alert\">";
            // line 506
            echo ($context["entry_push_alert_type_alert"] ?? null);
            echo "Всплывающее уведомление</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 508
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"modal\">";
            echo ($context["entry_push_alert_type_modal"] ?? null);
            echo "Модальное окно</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"alert\" selected=\"selected\">";
            // line 509
            echo ($context["entry_push_alert_type_alert"] ?? null);
            echo "Всплывающее уведомление</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 511
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-adaptive\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 518
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"adaptive-container-width-type\">Ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_adaptive_container_width_type\" id=\"adaptive_container_width_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 523
        if (($context["theme_speedy_adaptive_container_width_type"] ?? null)) {
            // line 524
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 527
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 530
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-adaptive-container-width\">Максимальная ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_adaptive_container_width\" value=\"";
        // line 537
        echo ($context["theme_speedy_adaptive_container_width"] ?? null);
        echo "\" placeholder=\"1470\" aria-describedby=\"basic-adaptive_container_width\" id=\"input-adaptive-container-width\" class=\"form-control adaptive-container-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon";
        // line 538
        if ( !($context["theme_speedy_adaptive_container_width_type"] ?? null)) {
            echo " percent";
        }
        echo "\" id=\"basic-adaptive_container_width\">";
        if (($context["theme_speedy_adaptive_container_width_type"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип ширины сайта
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#adaptive_container_width_type\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#adaptive_container_width_type :selected\").val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width\").val(\"1470\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width\").text(\"px\").removeClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width\").val(\"90\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width\").text(\"%\").addClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t//

\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>от 1366px до 1600px</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"adaptive-container-width-type_lg\">Ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_adaptive_container_width_type_lg\" id=\"adaptive_container_width_type_lg\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 564
        if (($context["theme_speedy_adaptive_container_width_type_lg"] ?? null)) {
            // line 565
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 568
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 571
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-adaptive-container-width_lg\">Максимальная ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_adaptive_container_width_lg\" value=\"";
        // line 578
        echo ($context["theme_speedy_adaptive_container_width_lg"] ?? null);
        echo "\" placeholder=\"1280\" aria-describedby=\"basic-adaptive_container_width_lg\" id=\"input-adaptive-container-width_lg\" class=\"form-control adaptive-container-width_lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon";
        // line 579
        if ( !($context["theme_speedy_adaptive_container_width_type_lg"] ?? null)) {
            echo " percent";
        }
        echo "\" id=\"basic-adaptive_container_width_lg\">";
        if (($context["theme_speedy_adaptive_container_width_type_lg"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип ширины сайта
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#adaptive_container_width_type_lg\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#adaptive_container_width_type_lg :selected\").val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_lg\").val(\"1200\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_lg\").text(\"px\").removeClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_lg\").val(\"90\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_lg\").text(\"%\").addClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t//

\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>от 1280px до 1366px</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"adaptive-container-width-type_md\">Ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_adaptive_container_width_type_md\" id=\"adaptive_container_width_type_md\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 605
        if (($context["theme_speedy_adaptive_container_width_type_md"] ?? null)) {
            // line 606
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 609
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 612
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-adaptive-container-width_md\">Максимальная ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_adaptive_container_width_md\" value=\"";
        // line 619
        echo ($context["theme_speedy_adaptive_container_width_md"] ?? null);
        echo "\" placeholder=\"1170\" aria-describedby=\"basic-adaptive_container_width_md\" id=\"input-adaptive-container-width_md\" class=\"form-control adaptive-container-width_md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon";
        // line 620
        if ( !($context["theme_speedy_adaptive_container_width_type_md"] ?? null)) {
            echo " percent";
        }
        echo "\" id=\"basic-adaptive_container_width_md\">";
        if (($context["theme_speedy_adaptive_container_width_type_md"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип ширины сайта
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#adaptive_container_width_type_md\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#adaptive_container_width_type_md :selected\").val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_md\").val(\"1200\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_md\").text(\"px\").removeClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_md\").val(\"90\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_md\").text(\"%\").addClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t//

\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>от 768px до 1280px</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"adaptive-container-width-type_sm\">Ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_adaptive_container_width_type_sm\" id=\"adaptive_container_width_type_sm\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 646
        if (($context["theme_speedy_adaptive_container_width_type_sm"] ?? null)) {
            // line 647
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 650
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 653
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-adaptive-container-width_sm\">Максимальная ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_adaptive_container_width_sm\" value=\"";
        // line 660
        echo ($context["theme_speedy_adaptive_container_width_sm"] ?? null);
        echo "\" placeholder=\"90\" aria-describedby=\"basic-adaptive_container_width_sm\" id=\"input-adaptive-container-width_sm\" class=\"form-control adaptive-container-width_sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon";
        // line 661
        if ( !($context["theme_speedy_adaptive_container_width_type_sm"] ?? null)) {
            echo " percent";
        }
        echo "\" id=\"basic-adaptive_container_width_sm\">";
        if (($context["theme_speedy_adaptive_container_width_type_sm"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип ширины сайта
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#adaptive_container_width_type_sm\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#adaptive_container_width_type_sm :selected\").val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_sm\").val(\"700\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_sm\").text(\"px\").removeClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_sm\").val(\"90\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_sm\").text(\"%\").addClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t//

\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>от 320px до 768px</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"adaptive-container-width-type_xs\">Ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_adaptive_container_width_type_xs\" id=\"adaptive_container_width_type_xs\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 687
        if (($context["theme_speedy_adaptive_container_width_type_xs"] ?? null)) {
            // line 688
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 691
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Фиксированная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Адаптивная</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 694
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-adaptive-container-width_xs\">Максимальная ширина сайта</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_adaptive_container_width_xs\" value=\"";
        // line 701
        echo ($context["theme_speedy_adaptive_container_width_xs"] ?? null);
        echo "\" placeholder=\"90\" aria-describedby=\"basic-adaptive_container_width_xs\" id=\"input-adaptive-container-width_xs\" class=\"form-control adaptive-container-width_xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon";
        // line 702
        if ( !($context["theme_speedy_adaptive_container_width_type_xs"] ?? null)) {
            echo " percent";
        }
        echo "\" id=\"basic-adaptive_container_width_xs\">";
        if (($context["theme_speedy_adaptive_container_width_type_xs"] ?? null)) {
            echo "px";
        } else {
            echo "%";
        }
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип ширины сайта
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#adaptive_container_width_type_xs\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#adaptive_container_width_type_xs :selected\").val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_xs\").val(\"300\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_xs\").text(\"px\").removeClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".adaptive-container-width_xs\").val(\"90\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#basic-adaptive_container_width_xs\").text(\"%\").addClass(\"percent\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t//

\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-code\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>Подключение файлов</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-code-css-link\">Название файла стилей</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_code_header_css_link\" value=\"";
        // line 729
        echo ($context["theme_speedy_code_header_css_link"] ?? null);
        echo "\" placeholder=\"my_styles\" id=\"input-code-css-link\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible\">Расположить в catalog/view/theme/speedy/stylesheet/</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-code-footer-js-link\">Название файла скриптов</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_code_footer_js_link\" value=\"";
        // line 736
        echo ($context["theme_speedy_code_footer_js_link"] ?? null);
        echo "\" placeholder=\"my_scripts\" id=\"input-code-footer-js-link\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible\">Расположить в catalog/view/javascript/</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 742
        echo ($context["text_code_js_css"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-code-css\">";
        // line 744
        echo ($context["entry_code_css"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_code_header_css\" rows=\"5\" placeholder=\"";
        // line 746
        echo ($context["help_code_empty"] ?? null);
        echo "\" id=\"input-code-header-css\" class=\"form-control\">";
        echo ($context["theme_speedy_code_header_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-code-header-js\">";
        // line 750
        echo ($context["entry_code_header_js"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_code_header_js\" rows=\"5\" placeholder=\"";
        // line 752
        echo ($context["help_code_empty"] ?? null);
        echo "\" id=\"input-code-header-js\" class=\"form-control\">";
        echo ($context["theme_speedy_code_header_js"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-code-footer-js\">";
        // line 756
        echo ($context["entry_code_footer_js"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_code_footer_js\" rows=\"5\" placeholder=\"";
        // line 758
        echo ($context["help_code_empty"] ?? null);
        echo "\" id=\"input-code-footer-js\" class=\"form-control\">";
        echo ($context["theme_speedy_code_footer_js"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane tab_pages\" id=\"tab-pages\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-home\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_home\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 773
        echo ($context["tab_home"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-catalog\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_catalog\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 779
        echo ($context["tab_catalog"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-product\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_product\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 785
        echo ($context["tab_product"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"disable\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-information\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_info\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 791
        echo ($context["tab_information"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-contacts\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_contact\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 797
        echo ($context["tab_contacts"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-checkout\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_checkout\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 803
        echo ($context["tab_checkout"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-register\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_register\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 809
        echo ($context["tab_register"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex active\" id=\"tab-home\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 820
        echo ($context["text_home_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-home-catalog\">";
        // line 822
        echo ($context["entry_home_catalog"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 824
        if (($context["theme_speedy_home_catalog_status"] ?? null)) {
            // line 825
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_home_catalog_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 826
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 828
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_home_catalog_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 829
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 830
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 831
        if ( !($context["theme_speedy_home_catalog_status"] ?? null)) {
            // line 832
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_home_catalog_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 833
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 835
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_home_catalog_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 836
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 837
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-catalog\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 849
        echo ($context["text_catalog_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 851
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_description_length\" value=\"";
        // line 853
        echo ($context["theme_speedy_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 854
        if (($context["error_product_description_length"] ?? null)) {
            // line 855
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_product_description_length"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 857
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-stickers-text\">";
        // line 860
        echo ($context["entry_catalog_stickers_text"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 862
        if (($context["theme_speedy_catalog_stickers_text"] ?? null)) {
            // line 863
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_text\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 864
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 866
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_text\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 867
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 868
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 869
        if ( !($context["theme_speedy_catalog_stickers_text"] ?? null)) {
            // line 870
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_text\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 871
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 873
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_text\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 874
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 875
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-group-item-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-stickers-image\">";
        // line 879
        echo ($context["entry_catalog_stickers_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 881
        if (($context["theme_speedy_catalog_stickers_image"] ?? null)) {
            // line 882
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 883
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 885
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 886
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 887
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 888
        if ( !($context["theme_speedy_catalog_stickers_image"] ?? null)) {
            // line 889
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 890
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 892
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stickers_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 893
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 894
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-description\">";
        // line 898
        echo ($context["entry_catalog_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 900
        if (($context["theme_speedy_catalog_description"] ?? null)) {
            // line 901
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 902
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 904
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 905
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 906
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 907
        if ( !($context["theme_speedy_catalog_description"] ?? null)) {
            // line 908
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 909
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 911
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 912
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 913
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-model\">";
        // line 917
        echo ($context["entry_catalog_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 919
        if (($context["theme_speedy_catalog_model"] ?? null)) {
            // line 920
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_model\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 921
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 923
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_model\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 924
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 925
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 926
        if ( !($context["theme_speedy_catalog_model"] ?? null)) {
            // line 927
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_model\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 928
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 930
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_model\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 931
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 932
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-stock\">";
        // line 936
        echo ($context["entry_catalog_stock"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 938
        if (($context["theme_speedy_catalog_stock"] ?? null)) {
            // line 939
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stock\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 940
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 942
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stock\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 943
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 944
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 945
        if ( !($context["theme_speedy_catalog_stock"] ?? null)) {
            // line 946
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stock\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 947
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 949
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_stock\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 950
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 951
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-stock\">";
        // line 955
        echo ($context["entry_catalog_attribute_groups"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 957
        if (($context["theme_speedy_catalog_attribute_groups"] ?? null)) {
            // line 958
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_attribute_groups\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 959
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 961
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_attribute_groups\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 962
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 963
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 964
        if ( !($context["theme_speedy_catalog_attribute_groups"] ?? null)) {
            // line 965
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_attribute_groups\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 966
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 968
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_attribute_groups\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 969
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 970
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-stock\">";
        // line 974
        echo ($context["entry_catalog_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 976
        if (($context["theme_speedy_catalog_quantity"] ?? null)) {
            // line 977
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_quantity\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 978
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 980
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_quantity\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 981
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 982
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 983
        if ( !($context["theme_speedy_catalog_quantity"] ?? null)) {
            // line 984
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_quantity\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 985
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 987
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_quantity\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 988
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 989
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-button-cart\">";
        // line 993
        echo ($context["entry_catalog_stock_buy_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 995
        if (($context["theme_speedy_catalog_button_cart"] ?? null)) {
            // line 996
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_button_cart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 997
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 999
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_button_cart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1000
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1001
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1002
        if ( !($context["theme_speedy_catalog_button_cart"] ?? null)) {
            // line 1003
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_button_cart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1004
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1006
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_catalog_button_cart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1007
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1008
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1013
        echo ($context["text_navigation_catalog"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-position\">";
        // line 1015
        echo ($context["entry_category_refine_img"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1017
        if (($context["theme_speedy_category_refine_img"] ?? null)) {
            // line 1018
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_category_refine_img\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1019
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1021
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_category_refine_img\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1022
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1023
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1024
        if ( !($context["theme_speedy_category_refine_img"] ?? null)) {
            // line 1025
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_category_refine_img\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1026
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1028
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_category_refine_img\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1029
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1030
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 1034
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_limit\" value=\"";
        // line 1036
        echo ($context["theme_speedy_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1037
        if (($context["error_product_limit"] ?? null)) {
            // line 1038
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_product_limit"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1040
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-position\">";
        // line 1043
        echo ($context["entry_description_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1045
        if (($context["theme_speedy_description_position"] ?? null)) {
            // line 1046
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_description_position\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1047
            echo ($context["text_up"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1049
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_description_position\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1050
            echo ($context["text_up"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1051
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1052
        if ( !($context["theme_speedy_description_position"] ?? null)) {
            // line 1053
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_description_position\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1054
            echo ($context["text_bottom"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1056
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_description_position\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1057
            echo ($context["text_bottom"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1058
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tab-general_left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"main active\"><a href=\"#tab-product-main\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1072
        echo ($context["tab_product_main"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-shipping\"><a href=\"#tab-product-shipping\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1073
        echo ($context["tab_product_shipping"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-payment\"><a href=\"#tab-product-payment\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1074
        echo ($context["tab_product_payment"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-guarantee\"><a href=\"#tab-product-guarantee\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1075
        echo ($context["tab_product_guarantee"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-edges\"><a href=\"#tab-product-edges\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1076
        echo ($context["tab_product_edges"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-questions\"><a href=\"#tab-product-questions\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 1077
        echo ($context["tab_product_questions"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-sticker-text\"><a href=\"#tab-product-sticker-text\" data-toggle=\"tab\" aria-expanded=\"false\">Стикеры</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-video\"><a href=\"#tab-product-video\" data-toggle=\"tab\" aria-expanded=\"false\">Видео</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-product-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1086
        echo ($context["text_product_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-fixed-scroll-thumbs\">";
        // line 1088
        echo ($context["entry_product_fixed_scroll_thumbs"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1090
        if (($context["theme_speedy_product_fixed_scroll_thumbs"] ?? null)) {
            // line 1091
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_scroll_thumbs\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1092
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1094
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_scroll_thumbs\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1095
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1096
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1097
        if ( !($context["theme_speedy_product_fixed_scroll_thumbs"] ?? null)) {
            // line 1098
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_scroll_thumbs\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1099
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1101
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_scroll_thumbs\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1102
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1103
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-manufacturer\">";
        // line 1107
        echo ($context["entry_product_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1109
        if (($context["theme_speedy_product_manufacturer"] ?? null)) {
            // line 1110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_manufacturer\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1111
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_manufacturer\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1114
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1115
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1116
        if ( !($context["theme_speedy_product_manufacturer"] ?? null)) {
            // line 1117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_manufacturer\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1118
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_manufacturer\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1121
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1122
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-model\">";
        // line 1126
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1128
        if (($context["theme_speedy_product_model"] ?? null)) {
            // line 1129
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_model\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1130
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_model\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1133
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1134
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1135
        if ( !($context["theme_speedy_product_model"] ?? null)) {
            // line 1136
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_model\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1137
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1139
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_model\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1140
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1141
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sku\">";
        // line 1145
        echo ($context["entry_product_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1147
        if (($context["theme_speedy_product_sku"] ?? null)) {
            // line 1148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sku\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1149
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1151
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sku\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1152
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1153
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1154
        if ( !($context["theme_speedy_product_sku"] ?? null)) {
            // line 1155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sku\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1156
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1158
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sku\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1159
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1160
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-stock\">";
        // line 1164
        echo ($context["entry_product_stock"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1166
        if (($context["theme_speedy_product_stock"] ?? null)) {
            // line 1167
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_stock\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1168
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_stock\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1171
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1172
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1173
        if ( !($context["theme_speedy_product_stock"] ?? null)) {
            // line 1174
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_stock\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1175
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1177
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_stock\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1178
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1179
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-purchased-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 1183
        echo ($context["help_purchased_product"] ?? null);
        echo "\">";
        echo ($context["entry_purchased_product"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1185
        if ((($context["theme_speedy_product_purchased_product"] ?? null) == 2)) {
            // line 1186
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"2\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1187
            echo ($context["text_yes"] ?? null);
            echo ($context["help_2_purchased_product"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1189
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1190
            echo ($context["text_yes"] ?? null);
            echo ($context["help_2_purchased_product"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1191
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1192
        if ((($context["theme_speedy_product_purchased_product"] ?? null) == 1)) {
            // line 1193
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1194
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1196
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1197
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1198
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1199
        if ( !($context["theme_speedy_product_purchased_product"] ?? null)) {
            // line 1200
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1201
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_purchased_product\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1204
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1205
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-fixed-nav-tabs\">";
        // line 1209
        echo ($context["entry_product_viewed"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1211
        if (($context["theme_speedy_product_viewed"] ?? null)) {
            // line 1212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_viewed\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1213
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_viewed\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1216
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1217
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1218
        if ( !($context["theme_speedy_product_viewed"] ?? null)) {
            // line 1219
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_viewed\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1220
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1222
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_viewed\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1223
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1224
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-fixed-nav-tabs\">";
        // line 1228
        echo ($context["entry_product_fixed_nav_tabs"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1230
        if (($context["theme_speedy_product_fixed_nav_tabs"] ?? null)) {
            // line 1231
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_nav_tabs\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1232
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1234
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_nav_tabs\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1235
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1236
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1237
        if ( !($context["theme_speedy_product_fixed_nav_tabs"] ?? null)) {
            // line 1238
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_nav_tabs\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1239
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1241
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_fixed_nav_tabs\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1242
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1243
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-button-cart\">";
        // line 1247
        echo ($context["entry_product_stock_buy_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1249
        if (($context["theme_speedy_product_button_cart"] ?? null)) {
            // line 1250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_button_cart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1251
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_button_cart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1254
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1255
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1256
        if ( !($context["theme_speedy_product_button_cart"] ?? null)) {
            // line 1257
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_button_cart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1258
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1260
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_button_cart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1261
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1262
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-button-cart\">";
        // line 1266
        echo ($context["entry_product_special_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1268
        if ((($context["theme_speedy_product_special_price_type"] ?? null) == "percent")) {
            // line 1269
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_special_price_type\" value=\"percent\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1270
            echo ($context["text_percent"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1272
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_special_price_type\" value=\"percent\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1273
            echo ($context["text_percent"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1274
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1275
        if ((($context["theme_speedy_product_special_price_type"] ?? null) == "cost")) {
            // line 1276
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_special_price_type\" value=\"cost\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1277
            echo ($context["text_cost"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1279
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_special_price_type\" value=\"cost\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1280
            echo ($context["text_cost"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1281
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-button-cart\">";
        // line 1285
        echo ($context["entry_product_bottom_bar"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1287
        if (($context["theme_speedy_product_bottom_bar"] ?? null)) {
            // line 1288
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_bottom_bar\" value=\"percent\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1289
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_bottom_bar\" value=\"percent\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1292
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1293
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1294
        if ( !($context["theme_speedy_product_bottom_bar"] ?? null)) {
            // line 1295
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_bottom_bar\" value=\"cost\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1296
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1298
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_bottom_bar\" value=\"cost\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1299
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1300
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-bottom\">";
        // line 1301
        echo ($context["help_product_bottom_bar"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-shipping\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1308
        echo ($context["text_shipping"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-shipping-status\">";
        // line 1310
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1312
        if (($context["theme_speedy_product_shipping_status"] ?? null)) {
            // line 1313
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_shipping_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1314
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1316
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_shipping_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1317
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1318
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1319
        if ( !($context["theme_speedy_product_shipping_status"] ?? null)) {
            // line 1320
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_shipping_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1321
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1323
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_shipping_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1324
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1325
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-shipping-description\">";
        // line 1329
        echo ($context["entry_product_shipping_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_shipping\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1333
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_shipping";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1333);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1333);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1333);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1333);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1333);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1335
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">";
        // line 1336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1337
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_shipping";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1337);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_product_shipping_description[";
            // line 1339
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["language"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["language_id"] ?? null) : null);
            echo "]\" id=\"input-product-shipping-description";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["language"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["language_id"] ?? null) : null);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["theme_speedy_product_shipping_description"] ?? null), (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["language_id"] ?? null) : null), [], "array", true, true, false, 1339)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["theme_speedy_product_shipping_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[(($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1342
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-shipping-items\">";
        // line 1346
        echo ($context["entry_product_shipping_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_shipping_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1350
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_shipping_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1350);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1350);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1350);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1350);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1350);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1352
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1354
        $context["shipping_row"] = 0;
        // line 1355
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1356
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_shipping_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"shipping_items";
            // line 1357
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 1360
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1361
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1366
            if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["theme_speedy_product_shipping_items"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1366)] ?? null) : null)) {
                // line 1367
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["theme_speedy_product_shipping_items"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1367)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_product_shipping_item"]) {
                    // line 1368
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"shipping-row";
                    echo ($context["shipping_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_shipping_item[";
                    // line 1369
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1369);
                    echo "][";
                    echo ($context["shipping_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_shipping_item"], "title", [], "any", false, false, false, 1369);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1370
                    if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_theme_speedy_product_shipping_item"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1370)] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["shipping_row"] ?? null)] ?? null) : null)) {
                        // line 1371
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_theme_speedy_product_shipping_item"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1371)] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["shipping_row"] ?? null)] ?? null) : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1372
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"\" id=\"shipping-image";
                    // line 1373
                    echo ($context["shipping_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_shipping_item"], "thumb", [], "any", false, false, false, 1373);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_speedy_product_shipping_item[";
                    // line 1374
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1374);
                    echo "][";
                    echo ($context["shipping_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_shipping_item"], "image", [], "any", false, false, false, 1374);
                    echo "\" id=\"input-image-shipping";
                    echo ($context["shipping_row"] ?? null);
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#shipping-row";
                    // line 1375
                    echo ($context["shipping_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1377
                    $context["shipping_row"] = (($context["shipping_row"] ?? null) + 1);
                    // line 1378
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_product_shipping_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1379
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1380
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addShipping('";
            // line 1384
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1384);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1390
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-payment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1397
        echo ($context["text_payment"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-status\">";
        // line 1399
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1401
        if (($context["theme_speedy_product_payment_status"] ?? null)) {
            // line 1402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_payment_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1403
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1405
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_payment_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1406
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1407
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1408
        if ( !($context["theme_speedy_product_payment_status"] ?? null)) {
            // line 1409
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_payment_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1410
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1412
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_payment_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1413
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1414
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-description\">";
        // line 1418
        echo ($context["entry_product_payment_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_payment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1422
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_payment";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1422);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1422);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1422);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1422);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1422);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1424
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">";
        // line 1425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1426
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_payment";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1426);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_product_payment_description[";
            // line 1428
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null);
            echo "]\" id=\"input-product-payment-description";
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["theme_speedy_product_payment_description"] ?? null), (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["language_id"] ?? null) : null), [], "array", true, true, false, 1428)) ? ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["theme_speedy_product_payment_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1431
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-items\">";
        // line 1435
        echo ($context["entry_product_payment_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_payment_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1439
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_payment_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1439);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1439);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1439);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1439);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1439);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1441
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1443
        $context["payment_row"] = 0;
        // line 1444
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1445
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_payment_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1445);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"payment_items";
            // line 1446
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1446);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 1449
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1450
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1455
            if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["theme_speedy_product_payment_items"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1455)] ?? null) : null)) {
                // line 1456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["theme_speedy_product_payment_items"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1456)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_product_payment_item"]) {
                    // line 1457
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"payment-row";
                    echo ($context["payment_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_payment_item[";
                    // line 1458
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1458);
                    echo "][";
                    echo ($context["payment_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_payment_item"], "title", [], "any", false, false, false, 1458);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1459
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_theme_speedy_product_payment_item"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1459)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["payment_row"] ?? null)] ?? null) : null)) {
                        // line 1460
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["error_theme_speedy_product_payment_item"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1460)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["payment_row"] ?? null)] ?? null) : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1461
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"\" id=\"payment-image";
                    // line 1462
                    echo ($context["payment_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_payment_item"], "thumb", [], "any", false, false, false, 1462);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_speedy_product_payment_item[";
                    // line 1463
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1463);
                    echo "][";
                    echo ($context["payment_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_payment_item"], "image", [], "any", false, false, false, 1463);
                    echo "\" id=\"input-image-payment";
                    echo ($context["payment_row"] ?? null);
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#payment-row";
                    // line 1464
                    echo ($context["payment_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1466
                    $context["payment_row"] = (($context["payment_row"] ?? null) + 1);
                    // line 1467
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_product_payment_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1468
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1469
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addPayment('";
            // line 1473
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1473);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1479
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-guarantee\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1486
        echo ($context["text_guarantee"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-guarantee-status\">";
        // line 1488
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1490
        if (($context["theme_speedy_product_guarantee_status"] ?? null)) {
            // line 1491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_guarantee_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1492
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1494
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_guarantee_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1495
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1496
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1497
        if ( !($context["theme_speedy_product_guarantee_status"] ?? null)) {
            // line 1498
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_guarantee_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1499
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1501
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_guarantee_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1502
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1503
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-guarantee-description\">";
        // line 1507
        echo ($context["entry_product_guarantee_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_guarantee\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_guarantee";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1511);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1511);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1511);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1511);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1511);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1513
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">";
        // line 1514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1515
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_guarantee";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1515);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_product_guarantee_description[";
            // line 1517
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["language_id"] ?? null) : null);
            echo "]\" id=\"input-product-guarantee-description";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["theme_speedy_product_guarantee_description"] ?? null), (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["language_id"] ?? null) : null), [], "array", true, true, false, 1517)) ? ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["theme_speedy_product_guarantee_description"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[(($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1520
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-edges\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1527
        echo ($context["text_edges"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-edges-status\">";
        // line 1529
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1531
        if (($context["theme_speedy_product_edges_status"] ?? null)) {
            // line 1532
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_edges_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1533
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1535
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_edges_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1536
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1537
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1538
        if ( !($context["theme_speedy_product_edges_status"] ?? null)) {
            // line 1539
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_edges_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1540
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1542
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_edges_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1543
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1544
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-edges-items\">";
        // line 1548
        echo ($context["entry_product_edges_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_edges_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1551
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1552
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_edges_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1552);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1552);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1552);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1552);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1552);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1554
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1556
        $context["edges_row"] = 0;
        // line 1557
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1558
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_edges_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1558);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"edges_items";
            // line 1559
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1559);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 1562
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1563
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1568
            if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["theme_speedy_product_edges_items"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1568)] ?? null) : null)) {
                // line 1569
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["theme_speedy_product_edges_items"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1569)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_product_edges_item"]) {
                    // line 1570
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"edges-row";
                    echo ($context["edges_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_edges_item[";
                    // line 1571
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1571);
                    echo "][";
                    echo ($context["edges_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_edges_item"], "title", [], "any", false, false, false, 1571);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1572
                    if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_theme_speedy_product_edges_item"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1572)] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["edges_row"] ?? null)] ?? null) : null)) {
                        // line 1573
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_theme_speedy_product_edges_item"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1573)] ?? null) : null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["edges_row"] ?? null)] ?? null) : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1574
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"\" id=\"edges-image";
                    // line 1575
                    echo ($context["edges_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_edges_item"], "thumb", [], "any", false, false, false, 1575);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_speedy_product_edges_item[";
                    // line 1576
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1576);
                    echo "][";
                    echo ($context["edges_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_product_edges_item"], "image", [], "any", false, false, false, 1576);
                    echo "\" id=\"input-image-edges";
                    echo ($context["edges_row"] ?? null);
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#edges-row";
                    // line 1577
                    echo ($context["edges_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1579
                    $context["edges_row"] = (($context["edges_row"] ?? null) + 1);
                    // line 1580
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_product_edges_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1581
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1582
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addEdges('";
            // line 1586
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1586);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1592
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-questions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1599
        echo ($context["tab_product_questions"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-questions-status\">";
        // line 1601
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1603
        if (($context["theme_speedy_product_questions_status"] ?? null)) {
            // line 1604
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_questions_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1605
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1607
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_questions_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1608
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1609
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1610
        if ( !($context["theme_speedy_product_questions_status"] ?? null)) {
            // line 1611
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_questions_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1612
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1614
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_questions_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1615
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1616
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-sticker-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Стикеры (текстовые)</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-sticker-text-status\">";
        // line 1625
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1627
        if (($context["theme_speedy_product_sticker_text_status"] ?? null)) {
            // line 1628
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_text_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1629
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1631
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_text_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1632
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1633
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1634
        if ( !($context["theme_speedy_product_sticker_text_status"] ?? null)) {
            // line 1635
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_text_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1636
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_text_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1639
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1640
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Стикер \"Новинка\"</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-sticker-new-status\">";
        // line 1647
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1649
        if (($context["theme_speedy_product_sticker_new_status"] ?? null)) {
            // line 1650
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_new_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1651
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1653
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_new_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1654
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1655
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1656
        if ( !($context["theme_speedy_product_sticker_new_status"] ?? null)) {
            // line 1657
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_new_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1658
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1660
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_new_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1661
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1662
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-new-background\">Фон стикера</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_new_background\" value=\"";
        // line 1668
        echo ($context["theme_speedy_product_sticker_new_background"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-product-sticker-new-background\" class=\"form-control colorpicker\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-new-name\">Текст на стикере</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1675
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_new_name[";
            // line 1676
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1676);
            echo "]\" value=\"";
            echo (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["theme_speedy_product_sticker_new_name"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1676)] ?? null) : null)) ? ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["theme_speedy_product_sticker_new_name"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1676)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 1677
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1677);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1677);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1677);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1680
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-new-days\">Количество дней обозначающее товар как новый</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_new_days\" value=\"";
        // line 1685
        echo ($context["theme_speedy_product_sticker_new_days"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-product-sticker-new-days\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Стикер \"Со скидкой\"</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-sticker-special-status\">";
        // line 1692
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1694
        if (($context["theme_speedy_product_sticker_special_status"] ?? null)) {
            // line 1695
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_special_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1696
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1698
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_special_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1699
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1700
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1701
        if ( !($context["theme_speedy_product_sticker_special_status"] ?? null)) {
            // line 1702
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_special_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1703
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1705
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_special_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1706
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1707
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-special-background\">Фон стикера</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_special_background\" value=\"";
        // line 1713
        echo ($context["theme_speedy_product_sticker_special_background"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-product-sticker-special-background\" class=\"form-control colorpicker\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-special-name\">Текст на стикере</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1720
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_special_name[";
            // line 1721
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1721);
            echo "]\" value=\"";
            echo (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["theme_speedy_product_sticker_special_name"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1721)] ?? null) : null)) ? ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["theme_speedy_product_sticker_special_name"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1721)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 1722
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1722);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1722);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1722);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1725
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Стикер \"Хит продаж\"</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-sticker-sale-status\">";
        // line 1731
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1733
        if (($context["theme_speedy_product_sticker_sale_status"] ?? null)) {
            // line 1734
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_sale_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1735
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1737
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_sale_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1738
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1739
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1740
        if ( !($context["theme_speedy_product_sticker_sale_status"] ?? null)) {
            // line 1741
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_sale_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1742
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1744
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_sale_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1745
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1746
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-sale-background\">Фон стикера</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_sale_background\" value=\"";
        // line 1752
        echo ($context["theme_speedy_product_sticker_sale_background"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-product-sticker-sale-background\" class=\"form-control colorpicker\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-sale-name\">Текст на стикере</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1759
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_sale_name[";
            // line 1760
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1760);
            echo "]\" value=\"";
            echo (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["theme_speedy_product_sticker_sale_name"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1760)] ?? null) : null)) ? ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["theme_speedy_product_sticker_sale_name"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1760)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 1761
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1761);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1761);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1761);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1764
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-sale-count\">Количество продаж товара, чтоб он считался хитом продаж</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_sale_count\" value=\"";
        // line 1769
        echo ($context["theme_speedy_product_sticker_sale_count"] ?? null);
        echo "\" placeholder=\"15\" id=\"input-product-sticker-sale-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Стикер \"Популярный\"</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-sticker-hot-status\">";
        // line 1776
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1778
        if (($context["theme_speedy_product_sticker_hot_status"] ?? null)) {
            // line 1779
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_hot_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1780
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1782
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_hot_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1783
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1784
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1785
        if ( !($context["theme_speedy_product_sticker_hot_status"] ?? null)) {
            // line 1786
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_hot_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1787
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1789
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_sticker_hot_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1790
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1791
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-hot-background\">Фон стикера</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_hot_background\" value=\"";
        // line 1797
        echo ($context["theme_speedy_product_sticker_hot_background"] ?? null);
        echo "\" placeholder=\"#000000\" id=\"input-product-sticker-hot-background\" class=\"form-control colorpicker\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-hot-name\">Текст на стикере</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1804
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_hot_name[";
            // line 1805
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1805);
            echo "]\" value=\"";
            echo (((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["theme_speedy_product_sticker_hot_name"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1805)] ?? null) : null)) ? ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["theme_speedy_product_sticker_hot_name"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1805)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 1806
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1806);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1806);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1806);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1809
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sticker-hot-count\">Количество просмотров товара, чтоб он считался популярным</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_product_sticker_hot_count\" value=\"";
        // line 1814
        echo ($context["theme_speedy_product_sticker_hot_count"] ?? null);
        echo "\" placeholder=\"15\" id=\"input-product-sticker-hot-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-video\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Видео в товаре</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-video-status\">";
        // line 1823
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1825
        if (($context["theme_speedy_product_video_status"] ?? null)) {
            // line 1826
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1827
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1829
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1830
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1831
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1832
        if ( !($context["theme_speedy_product_video_status"] ?? null)) {
            // line 1833
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1834
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1836
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1837
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1838
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-bottom\">При включение в каждом товаре появится дополнительное поле для ссылки на видео.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-video-status\">Добавить видео к доп. фотографиям в товаре</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1845
        if (($context["theme_speedy_product_video_additional"] ?? null)) {
            // line 1846
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_additional\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1847
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1849
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_additional\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1850
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1851
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1852
        if ( !($context["theme_speedy_product_video_additional"] ?? null)) {
            // line 1853
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_additional\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1854
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1856
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_additional\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1857
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1858
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-video-status\">Отдельная вкладка с видео</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1864
        if (($context["theme_speedy_product_video_tab"] ?? null)) {
            // line 1865
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_tab\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1866
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1868
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_tab\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1869
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1870
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1871
        if ( !($context["theme_speedy_product_video_tab"] ?? null)) {
            // line 1872
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_tab\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1873
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1875
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_product_video_tab\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1876
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1877
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-information\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1894
        echo ($context["text_information_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-contacts\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1906
        echo ($context["text_contacts_contact_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contacts-contact-status\">";
        // line 1908
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1910
        if (($context["theme_speedy_contacts_contact_status"] ?? null)) {
            // line 1911
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_contact_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1912
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1914
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_contact_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1915
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1916
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1917
        if ( !($context["theme_speedy_contacts_contact_status"] ?? null)) {
            // line 1918
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_contact_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1919
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1921
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_contact_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1922
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1923
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1930
        echo ($context["text_contacts_shops_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contacts-shops-status\">";
        // line 1932
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1934
        if (($context["theme_speedy_contacts_shops_status"] ?? null)) {
            // line 1935
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_shops_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1936
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1938
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_shops_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1939
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1940
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1941
        if ( !($context["theme_speedy_contacts_shops_status"] ?? null)) {
            // line 1942
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_shops_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1943
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1945
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_contacts_shops_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1946
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1947
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1950
        echo ($context["shops_link"] ?? null);
        echo "\" class=\"link link-20\" target=\"_blank\">";
        echo ($context["text_shops_link"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-checkout\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1963
        echo ($context["text_checkout_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1965
        echo ($context["text_checkout_main_setting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1967
        echo ($context["simple_link"] ?? null);
        echo "\" class=\"link link-20\" target=\"_blank\">";
        echo ($context["text_checkout_main_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible\">";
        // line 1968
        echo ($context["text_checkout_main_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1973
        echo ($context["text_checkout_cart_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-checkout-cart-fixed\">";
        // line 1975
        echo ($context["entry_checkout_cart_fixed"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1977
        if (($context["theme_speedy_checkout_fixed_cart"] ?? null)) {
            // line 1978
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_fixed_cart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1979
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1981
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_fixed_cart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1982
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1983
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1984
        if ( !($context["theme_speedy_checkout_fixed_cart"] ?? null)) {
            // line 1985
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_fixed_cart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1986
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1988
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_fixed_cart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1989
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1990
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-checkout-label-view\">";
        // line 1994
        echo ($context["entry_checkout_label_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1996
        if (($context["theme_speedy_checkout_label_view"] ?? null)) {
            // line 1997
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_label_view\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1998
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2000
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_label_view\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2001
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2002
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2003
        if ( !($context["theme_speedy_checkout_label_view"] ?? null)) {
            // line 2004
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_label_view\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2005
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2007
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_checkout_label_view\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2008
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2009
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-register\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2021
        echo ($context["text_register_setting"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2023
        echo ($context["text_checkout_main_setting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 2025
        echo ($context["simple_link"] ?? null);
        echo "\" class=\"link link-20\" target=\"_blank\">";
        echo ($context["text_checkout_main_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible\">";
        // line 2026
        echo ($context["text_checkout_main_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-register-rules\">";
        // line 2030
        echo ($context["entry_register_rules"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2032
        if (($context["theme_speedy_register_rules"] ?? null)) {
            // line 2033
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_register_rules\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2034
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2036
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_register_rules\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2037
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2038
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2039
        if ( !($context["theme_speedy_register_rules"] ?? null)) {
            // line 2040
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_register_rules\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2041
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2043
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_register_rules\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2044
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2045
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-register-register-rules-description\">";
        // line 2049
        echo ($context["entry_register_rules_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_register_rules\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2052
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2053
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_register_rules";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2053);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2053);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2053);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2053);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2053);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2055
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">";
        // line 2056
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2057
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_register_rules";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2057);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_register_rules_description[";
            // line 2059
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null);
            echo "]\" id=\"input-register-register-rules-description";
            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["language"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["language_id"] ?? null) : null);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["theme_speedy_register_rules_description"] ?? null), (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["language"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["language_id"] ?? null) : null), [], "array", true, true, false, 2059)) ? ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["theme_speedy_register_rules_description"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[(($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["language"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2062
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane tab_pages\" id=\"tab-parts\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-header\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_pages_header\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2077
        echo ($context["tab_header"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-footer\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_pages_footer\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2083
        echo ($context["tab_footer"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-products\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_page_product\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2089
        echo ($context["tab_products"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-menu\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_pages_menu\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2095
        echo ($context["tab_menu"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-m-menu\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_pages_menu\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2101
        echo ($context["tab_m_menu"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"disable\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-pagination\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon_pages_pagination\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 2107
        echo ($context["tab_pagination"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2119
        echo ($context["text_header_elements"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-currency\">";
        // line 2121
        echo ($context["entry_header_currency"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2123
        if (($context["theme_speedy_header_currency"] ?? null)) {
            // line 2124
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_currency\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2125
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_currency\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2128
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2129
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2130
        if ( !($context["theme_speedy_header_currency"] ?? null)) {
            // line 2131
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_currency\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2132
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_currency\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2135
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2136
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-language\">";
        // line 2140
        echo ($context["entry_header_language"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2142
        if (($context["theme_speedy_header_language"] ?? null)) {
            // line 2143
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_language\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2144
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_language\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2147
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2148
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2149
        if ( !($context["theme_speedy_header_language"] ?? null)) {
            // line 2150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_language\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2151
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2153
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_language\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2154
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2155
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-compare\">";
        // line 2159
        echo ($context["entry_header_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2161
        if (($context["theme_speedy_header_compare"] ?? null)) {
            // line 2162
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2163
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2165
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_compare\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2166
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2167
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2168
        if ( !($context["theme_speedy_header_compare"] ?? null)) {
            // line 2169
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2170
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2172
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_compare\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2173
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2174
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-wishlist\">";
        // line 2178
        echo ($context["entry_header_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2180
        if (($context["theme_speedy_header_wishlist"] ?? null)) {
            // line 2181
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2182
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2184
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2185
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2186
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2187
        if ( !($context["theme_speedy_header_wishlist"] ?? null)) {
            // line 2188
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2189
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2191
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2192
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2193
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-account\">";
        // line 2197
        echo ($context["entry_header_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2199
        if (($context["theme_speedy_header_account"] ?? null)) {
            // line 2200
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_account\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2201
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_account\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2204
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2205
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2206
        if ( !($context["theme_speedy_header_account"] ?? null)) {
            // line 2207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_account\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2208
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_account\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2211
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2212
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2219
        echo ($context["text_header_menu"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_header_menu_links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2223
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_header_menu_links";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2223);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2223);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2223);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2223);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2223);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2225
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2227
        $context["header_menu_row"] = 0;
        // line 2228
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2229
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_header_menu_links";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2229);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"header_menu_links";
            // line 2230
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2230);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 2233
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">SEO URL</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2239
            if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["theme_speedy_header_menu_links"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2239)] ?? null) : null)) {
                // line 2240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["theme_speedy_header_menu_links"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2240)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_header_menu_link"]) {
                    // line 2241
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"header-menu-link-row-";
                    echo ($context["header_menu_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_header_menu_link[";
                    // line 2242
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2242);
                    echo "][";
                    echo ($context["header_menu_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_header_menu_link"], "title", [], "any", false, false, false, 2242);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_header_menu_link[";
                    // line 2244
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2244);
                    echo "][";
                    echo ($context["header_menu_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_header_menu_link"], "link", [], "any", false, false, false, 2244);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#header-menu-link-row-";
                    // line 2247
                    echo ($context["header_menu_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2250
                    $context["header_menu_row"] = (($context["header_menu_row"] ?? null) + 1);
                    // line 2251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_header_menu_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2252
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 2253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addHeaderMenuLinks('";
            // line 2257
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2257);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2263
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2269
        echo ($context["text_contacts_elements"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-phones\">";
        // line 2271
        echo ($context["entry_contacts_phones"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2273
        if (($context["theme_speedy_header_phones"] ?? null)) {
            // line 2274
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_phones\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2275
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2277
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_phones\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2278
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2279
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2280
        if ( !($context["theme_speedy_header_phones"] ?? null)) {
            // line 2281
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_phones\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2282
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2284
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_phones\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2285
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2286
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-messengers\">";
        // line 2290
        echo ($context["entry_contacts_messengers"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2292
        if (($context["theme_speedy_header_messengers"] ?? null)) {
            // line 2293
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_messengers\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2294
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2296
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_messengers\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2297
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2298
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2299
        if ( !($context["theme_speedy_header_messengers"] ?? null)) {
            // line 2300
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_messengers\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2301
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2303
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_messengers\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2304
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2305
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-email\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2311
        if (($context["theme_speedy_header_email"] ?? null)) {
            // line 2312
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_email\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2313
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2315
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_email\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2316
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2317
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2318
        if ( !($context["theme_speedy_header_email"] ?? null)) {
            // line 2319
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_email\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2320
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2322
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_email\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2323
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2324
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header-email\">";
        // line 2328
        echo ($context["entry_contacts_open"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2330
        if (($context["theme_speedy_header_open"] ?? null)) {
            // line 2331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_open\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2332
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2334
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_open\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2335
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2336
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2337
        if ( !($context["theme_speedy_header_open"] ?? null)) {
            // line 2338
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_open\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2339
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2341
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_header_open\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2342
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2343
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2357
        echo ($context["text_footer_elements"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-payments\">";
        // line 2359
        echo ($context["entry_footer_payments"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2361
        if (($context["theme_speedy_footer_payments_status"] ?? null)) {
            // line 2362
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_payments_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2363
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2365
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_payments_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2366
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2367
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2368
        if ( !($context["theme_speedy_footer_payments_status"] ?? null)) {
            // line 2369
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_payments_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2370
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2372
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_payments_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2373
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2374
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-payment-icons-items\">";
        // line 2378
        echo ($context["entry_product_payment_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"footer-payment-icons\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 2384
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2385
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2391
        $context["footer_payment_row"] = 0;
        // line 2392
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_speedy_footer_payments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_footer_payment"]) {
            // line 2393
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"footer-payment-row";
            echo ($context["footer_payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 2394
            echo ($context["footer_payment_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_footer_payment"], "thumb", [], "any", false, false, false, 2394);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"theme_speedy_footer_payment[";
            echo ($context["footer_payment_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_footer_payment"], "image", [], "any", false, false, false, 2394);
            echo "\" id=\"input-image";
            echo ($context["footer_payment_row"] ?? null);
            echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"theme_speedy_footer_payment[";
            // line 2395
            echo ($context["footer_payment_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_footer_payment"], "sort_order", [], "any", false, false, false, 2395);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#footer-payment-row";
            // line 2396
            echo ($context["footer_payment_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2398
            $context["footer_payment_row"] = (($context["footer_payment_row"] ?? null) + 1);
            // line 2399
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_footer_payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2400
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"AddFooterPaymentRow();\" data-toggle=\"tooltip\" title=\"";
        // line 2404
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2415
        echo ($context["text_footer_menu"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_menu_lenght\">";
        // line 2417
        echo ($context["entry_footer_menu_lenght"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_footer_menu_lenght\" value=\"";
        // line 2419
        echo ($context["theme_speedy_footer_menu_lenght"] ?? null);
        echo "\" placeholder=\"10\" id=\"input-footer_menu_lenght\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2426
        echo ($context["text_contacts_elements"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-phones\">";
        // line 2428
        echo ($context["entry_contacts_phones"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2430
        if (($context["theme_speedy_footer_phones"] ?? null)) {
            // line 2431
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_phones\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2432
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2434
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_phones\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2435
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2436
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2437
        if ( !($context["theme_speedy_footer_phones"] ?? null)) {
            // line 2438
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_phones\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2439
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2441
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_phones\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2442
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2443
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-messengers\">";
        // line 2447
        echo ($context["entry_contacts_messengers"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2449
        if (($context["theme_speedy_footer_messengers"] ?? null)) {
            // line 2450
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_messengers\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2451
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2453
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_messengers\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2454
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2455
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2456
        if ( !($context["theme_speedy_footer_messengers"] ?? null)) {
            // line 2457
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_messengers\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2458
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2460
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_messengers\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2461
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2462
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-email\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2468
        if (($context["theme_speedy_footer_email"] ?? null)) {
            // line 2469
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_email\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2470
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2472
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_email\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2473
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2474
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2475
        if ( !($context["theme_speedy_footer_email"] ?? null)) {
            // line 2476
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_email\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2477
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2479
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_email\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2480
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2481
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-socials\">";
        // line 2485
        echo ($context["entry_footer_socials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2487
        if (($context["theme_speedy_footer_socials"] ?? null)) {
            // line 2488
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_socials\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2489
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_socials\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2492
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2493
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2494
        if ( !($context["theme_speedy_footer_socials"] ?? null)) {
            // line 2495
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_socials\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2496
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2498
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_socials\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2499
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2500
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-socials\">";
        // line 2504
        echo ($context["entry_footer_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2506
        if (($context["theme_speedy_footer_address"] ?? null)) {
            // line 2507
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_address\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2508
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2510
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_address\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2511
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2512
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2513
        if ( !($context["theme_speedy_footer_address"] ?? null)) {
            // line 2514
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_address\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2515
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2517
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_address\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2518
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2519
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2526
        echo ($context["text_footer_map"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-map-status\">";
        // line 2528
        echo ($context["entry_footer_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2530
        if (($context["theme_speedy_footer_map"] ?? null)) {
            // line 2531
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_map\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2532
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2534
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_map\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2535
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2536
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2537
        if ( !($context["theme_speedy_footer_map"] ?? null)) {
            // line 2538
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_map\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2539
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2541
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_footer_map\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2542
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2543
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-map-code\">";
        // line 2547
        echo ($context["entry_footer_map_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_footer_map_code\" rows=\"5\" placeholder=\"";
        // line 2549
        echo ($context["theme_speedy_footer_map_code_empty"] ?? null);
        echo "\" id=\"input-code-footer-map-code\" class=\"form-control\">";
        echo ($context["theme_speedy_footer_map_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible alert-bottom\">";
        // line 2550
        echo ($context["entry_footer_map_code_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-products\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2564
        echo ($context["text_products"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type\">";
        // line 2566
        echo ($context["entry_products_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_type\" id=\"input-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 2569
        if ((($context["theme_speedy_products_type"] ?? null) == "list")) {
            // line 2570
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"list\" selected=\"selected\">";
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"slider\">";
            // line 2571
            echo ($context["text_slider"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        } else {
            // line 2573
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"list\">";
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"slider\" selected=\"selected\">";
            // line 2574
            echo ($context["text_slider"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        }
        // line 2576
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"alert alert-warning type_slider\">";
        // line 2577
        echo ($context["products_type_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-slider-arrows\">";
        // line 2581
        echo ($context["entry_products_slider_arrows"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2583
        if (($context["theme_speedy_products_slider_arrows"] ?? null)) {
            // line 2584
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_products_slider_arrows\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2585
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2587
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_products_slider_arrows\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2588
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2589
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2590
        if ( !($context["theme_speedy_products_slider_arrows"] ?? null)) {
            // line 2591
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_products_slider_arrows\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2592
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2594
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_products_slider_arrows\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2595
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2596
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit\">";
        // line 2600
        echo ($context["entry_products_slider_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2604
        if ((($context["theme_speedy_products_slider_limit"] ?? null) == "3")) {
            // line 2605
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } elseif ((        // line 2608
($context["theme_speedy_products_slider_limit"] ?? null) == "4")) {
            // line 2609
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2613
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\" selected=\"selected\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2617
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit-xl\">";
        // line 2621
        echo ($context["entry_products_slider_limit_xl"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit_xl\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2625
        if ((($context["theme_speedy_products_slider_limit_xl"] ?? null) == "3")) {
            // line 2626
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } elseif ((        // line 2629
($context["theme_speedy_products_slider_limit_xl"] ?? null) == "4")) {
            // line 2630
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2634
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\" selected=\"selected\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2638
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit-lg\">";
        // line 2642
        echo ($context["entry_products_slider_limit_lg"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit_lg\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2646
        if ((($context["theme_speedy_products_slider_limit_lg"] ?? null) == "3")) {
            // line 2647
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } elseif ((        // line 2650
($context["theme_speedy_products_slider_limit_lg"] ?? null) == "4")) {
            // line 2651
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2655
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"5\" selected=\"selected\">5</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2659
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit-md\">";
        // line 2663
        echo ($context["entry_products_slider_limit_md"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit_md\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2666
        if ((($context["theme_speedy_products_slider_limit_md"] ?? null) == "2")) {
            // line 2667
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\" selected=\"selected\">2</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2670
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2673
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit-sm\">";
        // line 2677
        echo ($context["entry_products_slider_limit_sm"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit_sm\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2680
        if ((($context["theme_speedy_products_slider_limit_sm"] ?? null) == "2")) {
            // line 2681
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\" selected=\"selected\">2</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2684
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2687
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer-products-type-limit-xs\">";
        // line 2691
        echo ($context["entry_products_slider_limit_xs"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <select name=\"theme_speedy_products_slider_limit_xs\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t              ";
        // line 2694
        if ((($context["theme_speedy_products_slider_limit_xs"] ?? null) == "1")) {
            // line 2695
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"1\" selected=\"selected\">1</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        } else {
            // line 2698
            echo "\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t                  <option value=\"2\" selected=\"selected\">2</option>
\t\t\t\t\t\t\t\t\t\t\t              ";
        }
        // line 2701
        echo "\t\t\t\t\t\t\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка на тип (слайдер)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка при старте
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$(\"#input-type :selected\").val() == 'slider') {
\t\t\t\t\t\t\t\t\t\t\t\t\t      \t\$(\".type_slider\").css({\"display\":\"revert\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_list\").css({\"display\":\"none\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t      } else {
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_list\").css({\"display\":\"revert\"});
\t\t\t\t\t\t\t\t\t\t\t\t        \t\$(\".type_slider\").css({\"display\":\"none\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверка при клике
\t\t\t\t\t\t\t\t\t\t\t\t\t    \$(\"#input-type\").on('change', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t      if(\$(\"#input-type :selected\").val() == 'slider') {
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_slider\").css({\"display\":\"revert\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_list\").css({\"display\":\"none\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t      } else {
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_list\").css({\"display\":\"revert\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t        \$(\".type_slider\").css({\"display\":\"none\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t\t\t\t    \t//
\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-menu\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2737
        echo ($context["text_menu"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2739
        echo ($context["text_menu_setting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 2741
        echo ($context["dc_menu_link"] ?? null);
        echo "\" class=\"link link-20\" target=\"_blank\">";
        echo ($context["text_menu_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible\">";
        // line 2742
        echo ($context["text_menu_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-m-menu\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"fieldset row\">
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2755
        echo ($context["text_m_menu"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-cart-sidebar-status\">";
        // line 2757
        echo ($context["entry_m_menu_catalog_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2759
        if (($context["theme_speedy_m_menu_catalog_status"] ?? null)) {
            // line 2760
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_m_menu_catalog_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2761
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2763
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_m_menu_catalog_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2764
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2765
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 2766
        if ( !($context["theme_speedy_m_menu_catalog_status"] ?? null)) {
            // line 2767
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_m_menu_catalog_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2768
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2770
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_m_menu_catalog_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2771
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2772
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Свои ссылки в мобильном меню</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_links_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2782
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_links_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2782);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2782);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2782);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2782);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2782);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2784
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2786
        $context["menu_row"] = 0;
        // line 2787
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2788
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_links_items";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2788);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"links_items";
            // line 2789
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2789);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 2792
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">SEO URL</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Иконка</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2799
            if ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["theme_speedy_m_menu_additional_links"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2799)] ?? null) : null)) {
                // line 2800
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["theme_speedy_m_menu_additional_links"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2800)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_speedy_m_menu_additional_link"]) {
                    // line 2801
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"link-row-";
                    echo ($context["menu_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_m_menu_additional_link[";
                    // line 2802
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2802);
                    echo "][";
                    echo ($context["menu_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_m_menu_additional_link"], "title", [], "any", false, false, false, 2802);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_m_menu_additional_link[";
                    // line 2804
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2804);
                    echo "][";
                    echo ($context["menu_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_m_menu_additional_link"], "link", [], "any", false, false, false, 2804);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"\" id=\"link-image";
                    // line 2806
                    echo ($context["menu_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img width=\"24\" height=\"24\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_m_menu_additional_link"], "thumb", [], "any", false, false, false, 2806);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_speedy_m_menu_additional_link[";
                    // line 2807
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2807);
                    echo "][";
                    echo ($context["menu_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_speedy_m_menu_additional_link"], "image", [], "any", false, false, false, 2807);
                    echo "\" id=\"input-image-link";
                    echo ($context["menu_row"] ?? null);
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#link-row-";
                    // line 2809
                    echo ($context["menu_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2812
                    $context["menu_row"] = (($context["menu_row"] ?? null) + 1);
                    // line 2813
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_speedy_m_menu_additional_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2814
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 2815
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addLinks('";
            // line 2819
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2819);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2825
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane tab-pane-flex\" id=\"tab-pagination\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-left-50\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"back_to_tab_pages\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane-right\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2837
        echo ($context["text_pagination"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-images\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 2846
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2848
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_category_width\" value=\"";
        // line 2852
        echo ($context["theme_speedy_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_category_height\" value=\"";
        // line 2855
        echo ($context["theme_speedy_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2858
        if (($context["error_image_category"] ?? null)) {
            // line 2859
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_category"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2861
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-manufacturer-width\">";
        // line 2864
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_manufacturer_width\" value=\"";
        // line 2868
        echo ($context["theme_speedy_image_manufacturer_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-manufacturer-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_manufacturer_height\" value=\"";
        // line 2871
        echo ($context["theme_speedy_image_manufacturer_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2874
        if (($context["error_image_manufacturer"] ?? null)) {
            // line 2875
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_manufacturer"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2877
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2880
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_thumb_width\" value=\"";
        // line 2884
        echo ($context["theme_speedy_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_thumb_height\" value=\"";
        // line 2887
        echo ($context["theme_speedy_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2890
        if (($context["error_image_thumb"] ?? null)) {
            // line 2891
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_thumb"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2893
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 2896
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_popup_width\" value=\"";
        // line 2900
        echo ($context["theme_speedy_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_popup_height\" value=\"";
        // line 2903
        echo ($context["theme_speedy_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2906
        if (($context["error_image_popup"] ?? null)) {
            // line 2907
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_popup"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2909
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 2912
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_product_width\" value=\"";
        // line 2916
        echo ($context["theme_speedy_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_product_height\" value=\"";
        // line 2919
        echo ($context["theme_speedy_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2922
        if (($context["error_image_product"] ?? null)) {
            // line 2923
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_product"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2925
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 2928
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_additional_width\" value=\"";
        // line 2932
        echo ($context["theme_speedy_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_additional_height\" value=\"";
        // line 2935
        echo ($context["theme_speedy_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2938
        if (($context["error_image_additional"] ?? null)) {
            // line 2939
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_additional"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2941
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 2944
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_related_width\" value=\"";
        // line 2948
        echo ($context["theme_speedy_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_related_height\" value=\"";
        // line 2951
        echo ($context["theme_speedy_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2954
        if (($context["error_image_related"] ?? null)) {
            // line 2955
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_related"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2957
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 2960
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_compare_width\" value=\"";
        // line 2964
        echo ($context["theme_speedy_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_compare_height\" value=\"";
        // line 2967
        echo ($context["theme_speedy_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2970
        if (($context["error_image_compare"] ?? null)) {
            // line 2971
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_compare"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2973
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 2976
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_wishlist_width\" value=\"";
        // line 2980
        echo ($context["theme_speedy_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_wishlist_height\" value=\"";
        // line 2983
        echo ($context["theme_speedy_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2986
        if (($context["error_image_wishlist"] ?? null)) {
            // line 2987
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_wishlist"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2989
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 2992
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_cart_width\" value=\"";
        // line 2996
        echo ($context["theme_speedy_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_cart_height\" value=\"";
        // line 2999
        echo ($context["theme_speedy_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3002
        if (($context["error_image_cart"] ?? null)) {
            // line 3003
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_cart"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3005
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 3008
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_location_width\" value=\"";
        // line 3012
        echo ($context["theme_speedy_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_speedy_image_location_height\" value=\"";
        // line 3015
        echo ($context["theme_speedy_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3018
        if (($context["error_image_location"] ?? null)) {
            // line 3019
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_location"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3021
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-widgets\">
\t\t\t\t\t\t\t<fieldset class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"tab-general_left\">
\t\t\t\t\t\t\t\t\t\t<li class=\"cart active\"><a href=\"#tab-cart\" data-toggle=\"tab\">";
        // line 3029
        echo ($context["tab_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"messenger\"><a href=\"#tab-messenger\" data-toggle=\"tab\">";
        // line 3030
        echo ($context["tab_messenger"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"cookie\"><a href=\"#tab-cookie\" data-toggle=\"tab\">";
        // line 3031
        echo ($context["tab_cookie"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"checklang\"><a href=\"#tab-checklang\" data-toggle=\"tab\">";
        // line 3032
        echo ($context["tab_checklang"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"bottombar\"><a href=\"#tab-bottombar\" data-toggle=\"tab\">";
        // line 3033
        echo ($context["tab_bottombar"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-cart\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3040
        echo ($context["text_cart_sidebar"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-cart-sidebar-status\">";
        // line 3042
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3044
        if (($context["theme_speedy_widgets_cart_sidebar_status"] ?? null)) {
            // line 3045
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3046
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3048
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3049
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3050
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3051
        if ( !($context["theme_speedy_widgets_cart_sidebar_status"] ?? null)) {
            // line 3052
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3053
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3055
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3056
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3057
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-cart-sidebar-position\">";
        // line 3061
        echo ($context["entry_widgets_cart_sidebar_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_widgets_cart_sidebar_position\" id=\"input-widgets-cart-sidebar-position\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3064
        if ((($context["theme_speedy_widgets_cart_sidebar_position"] ?? null) == "right")) {
            // line 3065
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right\" selected=\"selected\">";
            echo ($context["entry_widgets_cart_sidebar_position_right"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left\">";
            // line 3066
            echo ($context["entry_widgets_cart_sidebar_position_left"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3068
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right\">";
            echo ($context["entry_widgets_cart_sidebar_position_right"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left\" selected=\"selected\">";
            // line 3069
            echo ($context["entry_widgets_cart_sidebar_position_left"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3071
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-cart-sidebar-status\">Показывать кнопку очистки корзины</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3077
        if (($context["theme_speedy_widgets_cart_sidebar_clear_status"] ?? null)) {
            // line 3078
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_clear_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3079
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3081
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_clear_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3082
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3083
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3084
        if ( !($context["theme_speedy_widgets_cart_sidebar_clear_status"] ?? null)) {
            // line 3085
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_clear_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3086
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3088
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_cart_sidebar_clear_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3089
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3090
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-messenger\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3097
        echo ($context["text_messenger"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-directory\">";
        // line 3099
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3101
        if (($context["theme_speedy_widgets_messenger_status"] ?? null)) {
            // line 3102
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_messenger_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3103
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3105
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_messenger_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3106
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3107
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3108
        if ( !($context["theme_speedy_widgets_messenger_status"] ?? null)) {
            // line 3109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_messenger_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3110
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3112
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_messenger_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3113
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3114
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-cookie\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3121
        echo ($context["text_modal_cookie"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-modal-cookie-status\">";
        // line 3123
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3125
        if (($context["theme_speedy_widgets_modal_cookie_status"] ?? null)) {
            // line 3126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_modal_cookie_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3127
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3129
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_modal_cookie_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3130
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3131
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3132
        if ( !($context["theme_speedy_widgets_modal_cookie_status"] ?? null)) {
            // line 3133
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_modal_cookie_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3134
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3136
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_modal_cookie_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3137
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3138
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-modal-cookie-description\">";
        // line 3142
        echo ($context["entry_push_modal_cookie_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_modal_cookie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language_modal_cookie";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3146);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3146);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3146);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3146);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3146);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3148
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">";
        // line 3149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language_modal_cookie";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3150);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_speedy_widgets_modal_cookie_description[";
            // line 3152
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["language"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["language_id"] ?? null) : null);
            echo "]\" id=\"input-widgets-modal-cookie-description";
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["language_id"] ?? null) : null);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["theme_speedy_widgets_modal_cookie_description"] ?? null), (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["language"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["language_id"] ?? null) : null), [], "array", true, true, false, 3152)) ? ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["theme_speedy_widgets_modal_cookie_description"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[(($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["language"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3155
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-checklang\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3162
        echo ($context["text_checklang"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-checklang-status\">";
        // line 3164
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3166
        if (($context["theme_speedy_widgets_checklang_status"] ?? null)) {
            // line 3167
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_checklang_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3168
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_checklang_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3171
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3172
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3173
        if ( !($context["theme_speedy_widgets_checklang_status"] ?? null)) {
            // line 3174
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_checklang_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3175
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3177
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_checklang_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3178
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3179
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible alert-bottom\">";
        // line 3180
        echo ($context["text_checklang_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-checklang-type\">";
        // line 3184
        echo ($context["entry_widgets_checklang_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_speedy_widgets_checklang_type\" id=\"input-widgets-checklang-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3187
        if ((($context["theme_speedy_widgets_checklang_type"] ?? null) == "ua_lang")) {
            // line 3188
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ua_lang\" selected=\"selected\">";
            echo ($context["entry_widgets_checklang_ua_lang"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"list_lang\">";
            // line 3189
            echo ($context["entry_widgets_checklang_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3191
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ua_lang\">";
            echo ($context["entry_widgets_checklang_ua_lang"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"list_lang\" selected=\"selected\">";
            // line 3192
            echo ($context["entry_widgets_checklang_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3194
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible alert-bottom\">";
        // line 3195
        echo ($context["text_checklang_type_help"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-bottombar\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3202
        echo ($context["text_bottombar"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-widgets-bottombar-status\">";
        // line 3204
        echo ($context["entry_see"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3206
        if (($context["theme_speedy_widgets_bottombar_status"] ?? null)) {
            // line 3207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_bottombar_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3208
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_bottombar_status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3211
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3212
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 3213
        if ( !($context["theme_speedy_widgets_bottombar_status"] ?? null)) {
            // line 3214
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_bottombar_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3215
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 3217
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_speedy_widgets_bottombar_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3218
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3219
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-help\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 3230
        echo ($context["text_support"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 3232
        echo ($context["text_support_links"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<p>Чат сообщества DEV-OPENCART.COM в Telegram - <a class=\"link\" target=\"_blank\" href=\"https://t.me/+WFGthATQ6SQLAUWF\">Вступить</a></p>
\t\t\t\t\t\t\t\t\t\t<p>Это чат сообщества пользователей DEVCART CMS - <a class=\"link\" target=\"_blank\" href=\"https://t.me/devcart\">Вступить</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 3239
        echo ($context["text_support_docs"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<p>Документация - <a class=\"link\" target=\"_blank\" href=\"https://dev-opencart.com/devcart-faq\">здесь</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 3245
        echo ($context["text_support_license"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">";
        // line 3246
        echo ($context["text_support_license_desc"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 3250
        if (($context["theme_speedy_update_status"] ?? null)) {
            // line 3251
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-update\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>Оновлення шаблону</legend>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t      <div class=\"panel-heading\">
\t\t\t\t\t\t\t        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> Нововведення у цьому оновленні</h3>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t\t            ";
            // line 3260
            echo ($context["theme_speedy_update_log"] ?? null);
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"panel panel-default\">
\t\t\t\t\t\t\t      <div class=\"panel-heading\">
\t\t\t\t\t\t\t        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> Встановлення оновлення <span class=\"header_new_version_cms\"></span></h3>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t\t        <div class=\"alert alert-warning\">Пожалуйста, сделайте резервную копию вашего сайта перед обновлением!</div>
\t\t\t\t\t\t\t        <div class=\"alert alert-success\"><b>Обязательно <u>обновите модификаторы</u> после установки обновления, иначе оно не будет запущено.</b></div>

\t\t\t\t\t\t\t        <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t          <div class=\"panel panel-default\">
\t\t\t\t\t\t\t            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
\t\t\t\t\t\t\t              <h4 class=\"panel-title\">
\t\t\t\t\t\t\t                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t                  Автоматическое обновление
\t\t\t\t\t\t\t                </a>
\t\t\t\t\t\t\t              </h4>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t\t\t\t\t              <div class=\"panel-body\">
\t\t\t\t\t\t\t                <button type=\"button\" style=\"pointer-events: none;opacity: .5;\" id=\"button-upload\" data-loading-text=\"Завантаження...\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Завантажити и установити</button>
\t\t\t\t\t\t\t                <script>
\t\t\t\t\t\t\t                  \$('#button-upload').on('click', function(){
\t\t\t\t\t\t\t                    \$.ajax({
\t\t\t\t\t\t\t                      url: 'index.php?route=extension/theme/speedy/speedy_update_download/download&user_token=";
            // line 3287
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\t\t\t\t\t                      type: 'post',
\t\t\t\t\t\t\t                      dataType: 'json',
\t\t\t\t\t\t\t                      data: {link: '";
            // line 3290
            echo ($context["link_to_download_update"] ?? null);
            echo "'}, // Передаём ссылку на новый апдейт в апдейтор (speedy_update_download)
\t\t\t\t\t\t\t                      beforeSend: function() {
\t\t\t\t\t\t\t                        \$('#button-upload').button('loading');
\t\t\t\t\t\t\t                      },
\t\t\t\t\t\t\t                      complete: function() {
\t\t\t\t\t\t\t                        \$('#button-upload').button('reset');
\t\t\t\t\t\t\t                      },
\t\t\t\t\t\t\t                      success: function() {
\t\t\t\t\t\t\t                      \talert(\"Все пройшло добре, але обов'язково оновіть модифікатори після перезагрузки (СИНЯ КНОПКА)\");
\t\t\t\t\t\t\t                      \tlocation.href = 'index.php?route=marketplace/modification&user_token=";
            // line 3299
            echo ($context["user_token"] ?? null);
            echo "';
\t\t\t\t\t\t\t                      },
\t\t\t\t\t\t\t                      error: function(xhr) {
\t\t\t\t\t\t\t                      \talert(xhr.responseText);
\t\t\t\t\t\t\t                      }
\t\t\t\t\t\t\t                    });
\t\t\t\t\t\t\t                  })
\t\t\t\t\t\t\t                </script>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <span class=\"backup_ready\">
\t\t\t\t\t\t\t                  <input type=\"radio\" name=\"backup_ready\" id=\"backup_ready\">
\t\t\t\t\t\t\t                  <label for=\"backup_ready\">Я сделал(а) резервную копию сайта перед обновлением</label>
\t\t\t\t\t\t\t                </span>
\t\t\t\t\t\t\t                <script>
\t\t\t\t\t\t\t                  \$(\".backup_ready\").on('click', function() {
\t\t\t\t\t\t\t                    \$(\"#button-upload\").removeAttr(\"style\");
\t\t\t\t\t\t\t                  })
\t\t\t\t\t\t\t                </script>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <div class=\"alert\" style=\"font-size:12px;margin-bottom: 0px;border:1px solid #e9e9e9\">
\t\t\t\t\t\t\t                  Архів із оновленими файлами буде автоматично завантажений та розпакований у кореневу папку вашого сайту. Це безпечно.<br>
\t\t\t\t\t\t\t\t\t\t\t  Сторонні (встановлені вами) доповнення не постраждають.
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t              </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t          <div class=\"panel panel-default\">
\t\t\t\t\t\t\t            <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
\t\t\t\t\t\t\t              <h4 class=\"panel-title\">
\t\t\t\t\t\t\t                <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t                  Ручное обновление
\t\t\t\t\t\t\t                </a>
\t\t\t\t\t\t\t              </h4>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t\t              <div class=\"panel-body\">
\t\t\t\t\t\t\t                <a target=\"_blank\" href=\"";
            // line 3337
            echo ($context["link_to_download_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Завантажити</a>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <br>
\t\t\t\t\t\t\t                <div class=\"alert\" style=\"font-size:12px;margin-bottom: 0px;border:1px solid #e9e9e9\">
\t\t\t\t\t\t\t                  Завантажте архів з оновленими файлами та розпакуйте його в кореневу папку вашого сайту. Це безпечно.<br>
\t\t\t\t\t\t\t\t\t\t\t  Сторонні (встановлені вами) доповнення не постраждають.
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t              </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 3353
        echo "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 3359
        echo ($context["footer"] ?? null);
        echo "
<script>
\$(window).on('load', function () {
\t\$(\".load\").remove();
});
</script>
<script>
\t\$(document).ready(function() {
\t\t\$(\"#tab-pages > fieldset > ul > li > a\").on(\"click\", function() {
\t\t\t\$(\"#tab-pages > fieldset > ul\").css({\"display\":\"none\"});
\t\t\t\$(\"#tab-pages > fieldset > .tab-content\").css({\"display\":\"initial\"});
\t\t});
\t\t\$(\"#tab-pages .back_to_tab_pages\").on(\"click\", function() {
\t\t\t\$(\"#tab-pages > fieldset > .tab-content\").css({\"display\":\"none\"});
\t\t\t\$(\"#tab-pages > fieldset > ul\").css({\"display\":\"grid\"});
\t\t});
\t});
\t\$(document).ready(function() {
\t\t\$(\"#tab-parts > fieldset > ul > li > a\").on(\"click\", function() {
\t\t\t\$(\"#tab-parts > fieldset > ul\").css({\"display\":\"none\"});
\t\t\t\$(\"#tab-parts > fieldset > .tab-content\").css({\"display\":\"initial\"});
\t\t});
\t\t\$(\"#tab-parts .back_to_tab_pages\").on(\"click\", function() {
\t\t\t\$(\"#tab-parts > fieldset > .tab-content\").css({\"display\":\"none\"});
\t\t\t\$(\"#tab-parts > fieldset > ul\").css({\"display\":\"grid\"});
\t\t});
\t});
</script>
<script>
\t\$('.colorpicker').spectrum({type: \"component\"});
</script>
<script>
\t\$('#language_shipping a:first, #language_shipping_items a:first, #language_payment a:first, #language_payment_items a:first, #language_guarantee a:first, #language_edges_items a:first, #language_modal_cookie a:first, #footer_payment_icons a:first, #language_links_items a:first, #language_register_rules a:first, #language_header_menu_links a:first').tab('show');
</script>
<script type=\"text/javascript\"><!--
var footer_payment_row = ";
        // line 3394
        echo ($context["footer_payment_row"] ?? null);
        echo ";

function AddFooterPaymentRow() {
\thtml = '<tr id=\"footer-payment-row' + footer_payment_row + '\">';
\thtml += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + footer_payment_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 3398
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"theme_speedy_footer_payment[' + footer_payment_row + '][image]\" value=\"\" id=\"input-image' + footer_payment_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"theme_speedy_footer_payment[' + footer_payment_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 3399
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#footer-payment-row' + footer_payment_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3400
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#footer-payment-icons tbody').append(html);

\tfooter_payment_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var shipping_row = ";
        // line 3409
        echo ($context["shipping_row"] ?? null);
        echo ";

function addShipping(language_id) {
\thtml  = '<tr id=\"shipping-row' + shipping_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_shipping_item[' + language_id + '][' + shipping_row + '][title]\" value=\"\" placeholder=\"";
        // line 3413
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"shipping-image' + shipping_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 3414
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"theme_speedy_product_shipping_item[' + language_id + '][' + shipping_row + '][image]\" value=\"\" id=\"input-image-shipping' + shipping_row + '\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#shipping-row' + shipping_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3415
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#shipping_items' + language_id + ' tbody').append(html);
\t
\tshipping_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var payment_row = ";
        // line 3424
        echo ($context["payment_row"] ?? null);
        echo ";

function addPayment(language_id) {
\thtml  = '<tr id=\"payment-row' + payment_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_payment_item[' + language_id + '][' + payment_row + '][title]\" value=\"\" placeholder=\"";
        // line 3428
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"payment-image' + payment_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 3429
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"theme_speedy_product_payment_item[' + language_id + '][' + payment_row + '][image]\" value=\"\" id=\"input-image-payment' + payment_row + '\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#payment-row' + payment_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3430
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#payment_items' + language_id + ' tbody').append(html);
\t
\tpayment_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var edges_row = ";
        // line 3439
        echo ($context["edges_row"] ?? null);
        echo ";

function addEdges(language_id) {
\thtml  = '<tr id=\"edges-row' + edges_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_product_edges_item[' + language_id + '][' + edges_row + '][title]\" value=\"\" placeholder=\"";
        // line 3443
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"edges-image' + edges_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 3444
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"theme_speedy_product_edges_item[' + language_id + '][' + edges_row + '][image]\" value=\"\" id=\"input-image-edges' + edges_row + '\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#edges-row' + edges_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3445
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#edges_items' + language_id + ' tbody').append(html);
\t
\tedges_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var menu_row = ";
        // line 3454
        echo ($context["menu_row"] ?? null);
        echo ";

function addLinks(language_id) {
\thtml  = '<tr id=\"link-row' + menu_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_m_menu_additional_link[' + language_id + '][' + menu_row + '][title]\" value=\"\" placeholder=\"";
        // line 3458
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_m_menu_additional_link[' + language_id + '][' + menu_row + '][link]\" value=\"\" placeholder=\"";
        // line 3459
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"link-image' + menu_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img width=\"24\" height=\"24\" src=\"";
        // line 3460
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"theme_speedy_m_menu_additional_link[' + language_id + '][' + menu_row + '][image]\" value=\"\" id=\"input-image-link' + menu_row + '\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#link-row' + menu_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3461
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#links_items' + language_id + ' tbody').append(html);
\t
\tmenu_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var header_menu_row = ";
        // line 3470
        echo ($context["header_menu_row"] ?? null);
        echo ";

function addHeaderMenuLinks(language_id) {
\thtml  = '<tr id=\"header-menu-link-row' + header_menu_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_header_menu_link[' + language_id + '][' + header_menu_row + '][title]\" value=\"\" placeholder=\"";
        // line 3474
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"theme_speedy_header_menu_link[' + language_id + '][' + header_menu_row + '][link]\" value=\"\" placeholder=\"";
        // line 3475
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#header-menu-link-row' + header_menu_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3476
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#header_menu_links' + language_id + ' tbody').append(html);
\t
\theader_menu_row++;
}
//--></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<link type=\"text/css\" href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/javascript/codemirror/theme/material.css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/javascript.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/css.js\"></script>
<script>
const codemirror = CodeMirror.fromTextArea(document.getElementById('input-code-header-css'), {
\tmode : 'css',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true,
\ttheme: 'material'
});
const codemirror2 = CodeMirror.fromTextArea(document.getElementById('input-code-header-js'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true,
\ttheme: 'material'
});
const codemirror3 = CodeMirror.fromTextArea(document.getElementById('input-code-footer-js'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true,
\ttheme: 'material'
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/theme/speedy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  7625 => 3476,  7621 => 3475,  7617 => 3474,  7610 => 3470,  7598 => 3461,  7592 => 3460,  7588 => 3459,  7584 => 3458,  7577 => 3454,  7565 => 3445,  7559 => 3444,  7555 => 3443,  7548 => 3439,  7536 => 3430,  7530 => 3429,  7526 => 3428,  7519 => 3424,  7507 => 3415,  7501 => 3414,  7497 => 3413,  7490 => 3409,  7478 => 3400,  7474 => 3399,  7468 => 3398,  7461 => 3394,  7423 => 3359,  7415 => 3353,  7396 => 3337,  7355 => 3299,  7343 => 3290,  7337 => 3287,  7307 => 3260,  7296 => 3251,  7294 => 3250,  7287 => 3246,  7283 => 3245,  7274 => 3239,  7264 => 3232,  7259 => 3230,  7246 => 3219,  7241 => 3218,  7238 => 3217,  7233 => 3215,  7230 => 3214,  7228 => 3213,  7225 => 3212,  7220 => 3211,  7217 => 3210,  7212 => 3208,  7209 => 3207,  7207 => 3206,  7202 => 3204,  7197 => 3202,  7187 => 3195,  7184 => 3194,  7179 => 3192,  7174 => 3191,  7169 => 3189,  7164 => 3188,  7162 => 3187,  7156 => 3184,  7149 => 3180,  7146 => 3179,  7141 => 3178,  7138 => 3177,  7133 => 3175,  7130 => 3174,  7128 => 3173,  7125 => 3172,  7120 => 3171,  7117 => 3170,  7112 => 3168,  7109 => 3167,  7107 => 3166,  7102 => 3164,  7097 => 3162,  7088 => 3155,  7072 => 3152,  7066 => 3150,  7062 => 3149,  7059 => 3148,  7042 => 3146,  7038 => 3145,  7032 => 3142,  7026 => 3138,  7021 => 3137,  7018 => 3136,  7013 => 3134,  7010 => 3133,  7008 => 3132,  7005 => 3131,  7000 => 3130,  6997 => 3129,  6992 => 3127,  6989 => 3126,  6987 => 3125,  6982 => 3123,  6977 => 3121,  6968 => 3114,  6963 => 3113,  6960 => 3112,  6955 => 3110,  6952 => 3109,  6950 => 3108,  6947 => 3107,  6942 => 3106,  6939 => 3105,  6934 => 3103,  6931 => 3102,  6929 => 3101,  6924 => 3099,  6919 => 3097,  6910 => 3090,  6905 => 3089,  6902 => 3088,  6897 => 3086,  6894 => 3085,  6892 => 3084,  6889 => 3083,  6884 => 3082,  6881 => 3081,  6876 => 3079,  6873 => 3078,  6871 => 3077,  6863 => 3071,  6858 => 3069,  6853 => 3068,  6848 => 3066,  6843 => 3065,  6841 => 3064,  6835 => 3061,  6829 => 3057,  6824 => 3056,  6821 => 3055,  6816 => 3053,  6813 => 3052,  6811 => 3051,  6808 => 3050,  6803 => 3049,  6800 => 3048,  6795 => 3046,  6792 => 3045,  6790 => 3044,  6785 => 3042,  6780 => 3040,  6770 => 3033,  6766 => 3032,  6762 => 3031,  6758 => 3030,  6754 => 3029,  6744 => 3021,  6738 => 3019,  6736 => 3018,  6728 => 3015,  6720 => 3012,  6713 => 3008,  6708 => 3005,  6702 => 3003,  6700 => 3002,  6692 => 2999,  6684 => 2996,  6677 => 2992,  6672 => 2989,  6666 => 2987,  6664 => 2986,  6656 => 2983,  6648 => 2980,  6641 => 2976,  6636 => 2973,  6630 => 2971,  6628 => 2970,  6620 => 2967,  6612 => 2964,  6605 => 2960,  6600 => 2957,  6594 => 2955,  6592 => 2954,  6584 => 2951,  6576 => 2948,  6569 => 2944,  6564 => 2941,  6558 => 2939,  6556 => 2938,  6548 => 2935,  6540 => 2932,  6533 => 2928,  6528 => 2925,  6522 => 2923,  6520 => 2922,  6512 => 2919,  6504 => 2916,  6497 => 2912,  6492 => 2909,  6486 => 2907,  6484 => 2906,  6476 => 2903,  6468 => 2900,  6461 => 2896,  6456 => 2893,  6450 => 2891,  6448 => 2890,  6440 => 2887,  6432 => 2884,  6425 => 2880,  6420 => 2877,  6414 => 2875,  6412 => 2874,  6404 => 2871,  6396 => 2868,  6389 => 2864,  6384 => 2861,  6378 => 2859,  6376 => 2858,  6368 => 2855,  6360 => 2852,  6353 => 2848,  6348 => 2846,  6336 => 2837,  6322 => 2825,  6308 => 2819,  6302 => 2815,  6299 => 2814,  6293 => 2813,  6291 => 2812,  6283 => 2809,  6272 => 2807,  6264 => 2806,  6253 => 2804,  6242 => 2802,  6237 => 2801,  6232 => 2800,  6230 => 2799,  6220 => 2792,  6214 => 2789,  6209 => 2788,  6204 => 2787,  6202 => 2786,  6198 => 2784,  6181 => 2782,  6177 => 2781,  6166 => 2772,  6161 => 2771,  6158 => 2770,  6153 => 2768,  6150 => 2767,  6148 => 2766,  6145 => 2765,  6140 => 2764,  6137 => 2763,  6132 => 2761,  6129 => 2760,  6127 => 2759,  6122 => 2757,  6117 => 2755,  6101 => 2742,  6095 => 2741,  6090 => 2739,  6085 => 2737,  6047 => 2701,  6042 => 2698,  6037 => 2695,  6035 => 2694,  6029 => 2691,  6023 => 2687,  6018 => 2684,  6013 => 2681,  6011 => 2680,  6005 => 2677,  5999 => 2673,  5994 => 2670,  5989 => 2667,  5987 => 2666,  5981 => 2663,  5975 => 2659,  5969 => 2655,  5963 => 2651,  5961 => 2650,  5956 => 2647,  5954 => 2646,  5947 => 2642,  5941 => 2638,  5935 => 2634,  5929 => 2630,  5927 => 2629,  5922 => 2626,  5920 => 2625,  5913 => 2621,  5907 => 2617,  5901 => 2613,  5895 => 2609,  5893 => 2608,  5888 => 2605,  5886 => 2604,  5879 => 2600,  5873 => 2596,  5868 => 2595,  5865 => 2594,  5860 => 2592,  5857 => 2591,  5855 => 2590,  5852 => 2589,  5847 => 2588,  5844 => 2587,  5839 => 2585,  5836 => 2584,  5834 => 2583,  5829 => 2581,  5822 => 2577,  5819 => 2576,  5814 => 2574,  5809 => 2573,  5804 => 2571,  5799 => 2570,  5797 => 2569,  5791 => 2566,  5786 => 2564,  5769 => 2550,  5763 => 2549,  5758 => 2547,  5752 => 2543,  5747 => 2542,  5744 => 2541,  5739 => 2539,  5736 => 2538,  5734 => 2537,  5731 => 2536,  5726 => 2535,  5723 => 2534,  5718 => 2532,  5715 => 2531,  5713 => 2530,  5708 => 2528,  5703 => 2526,  5694 => 2519,  5689 => 2518,  5686 => 2517,  5681 => 2515,  5678 => 2514,  5676 => 2513,  5673 => 2512,  5668 => 2511,  5665 => 2510,  5660 => 2508,  5657 => 2507,  5655 => 2506,  5650 => 2504,  5644 => 2500,  5639 => 2499,  5636 => 2498,  5631 => 2496,  5628 => 2495,  5626 => 2494,  5623 => 2493,  5618 => 2492,  5615 => 2491,  5610 => 2489,  5607 => 2488,  5605 => 2487,  5600 => 2485,  5594 => 2481,  5589 => 2480,  5586 => 2479,  5581 => 2477,  5578 => 2476,  5576 => 2475,  5573 => 2474,  5568 => 2473,  5565 => 2472,  5560 => 2470,  5557 => 2469,  5555 => 2468,  5547 => 2462,  5542 => 2461,  5539 => 2460,  5534 => 2458,  5531 => 2457,  5529 => 2456,  5526 => 2455,  5521 => 2454,  5518 => 2453,  5513 => 2451,  5510 => 2450,  5508 => 2449,  5503 => 2447,  5497 => 2443,  5492 => 2442,  5489 => 2441,  5484 => 2439,  5481 => 2438,  5479 => 2437,  5476 => 2436,  5471 => 2435,  5468 => 2434,  5463 => 2432,  5460 => 2431,  5458 => 2430,  5453 => 2428,  5448 => 2426,  5438 => 2419,  5433 => 2417,  5428 => 2415,  5414 => 2404,  5408 => 2400,  5402 => 2399,  5400 => 2398,  5393 => 2396,  5385 => 2395,  5371 => 2394,  5366 => 2393,  5361 => 2392,  5359 => 2391,  5350 => 2385,  5346 => 2384,  5337 => 2378,  5331 => 2374,  5326 => 2373,  5323 => 2372,  5318 => 2370,  5315 => 2369,  5313 => 2368,  5310 => 2367,  5305 => 2366,  5302 => 2365,  5297 => 2363,  5294 => 2362,  5292 => 2361,  5287 => 2359,  5282 => 2357,  5266 => 2343,  5261 => 2342,  5258 => 2341,  5253 => 2339,  5250 => 2338,  5248 => 2337,  5245 => 2336,  5240 => 2335,  5237 => 2334,  5232 => 2332,  5229 => 2331,  5227 => 2330,  5222 => 2328,  5216 => 2324,  5211 => 2323,  5208 => 2322,  5203 => 2320,  5200 => 2319,  5198 => 2318,  5195 => 2317,  5190 => 2316,  5187 => 2315,  5182 => 2313,  5179 => 2312,  5177 => 2311,  5169 => 2305,  5164 => 2304,  5161 => 2303,  5156 => 2301,  5153 => 2300,  5151 => 2299,  5148 => 2298,  5143 => 2297,  5140 => 2296,  5135 => 2294,  5132 => 2293,  5130 => 2292,  5125 => 2290,  5119 => 2286,  5114 => 2285,  5111 => 2284,  5106 => 2282,  5103 => 2281,  5101 => 2280,  5098 => 2279,  5093 => 2278,  5090 => 2277,  5085 => 2275,  5082 => 2274,  5080 => 2273,  5075 => 2271,  5070 => 2269,  5062 => 2263,  5048 => 2257,  5042 => 2253,  5039 => 2252,  5033 => 2251,  5031 => 2250,  5023 => 2247,  5011 => 2244,  5000 => 2242,  4995 => 2241,  4990 => 2240,  4988 => 2239,  4979 => 2233,  4973 => 2230,  4968 => 2229,  4963 => 2228,  4961 => 2227,  4957 => 2225,  4940 => 2223,  4936 => 2222,  4930 => 2219,  4921 => 2212,  4916 => 2211,  4913 => 2210,  4908 => 2208,  4905 => 2207,  4903 => 2206,  4900 => 2205,  4895 => 2204,  4892 => 2203,  4887 => 2201,  4884 => 2200,  4882 => 2199,  4877 => 2197,  4871 => 2193,  4866 => 2192,  4863 => 2191,  4858 => 2189,  4855 => 2188,  4853 => 2187,  4850 => 2186,  4845 => 2185,  4842 => 2184,  4837 => 2182,  4834 => 2181,  4832 => 2180,  4827 => 2178,  4821 => 2174,  4816 => 2173,  4813 => 2172,  4808 => 2170,  4805 => 2169,  4803 => 2168,  4800 => 2167,  4795 => 2166,  4792 => 2165,  4787 => 2163,  4784 => 2162,  4782 => 2161,  4777 => 2159,  4771 => 2155,  4766 => 2154,  4763 => 2153,  4758 => 2151,  4755 => 2150,  4753 => 2149,  4750 => 2148,  4745 => 2147,  4742 => 2146,  4737 => 2144,  4734 => 2143,  4732 => 2142,  4727 => 2140,  4721 => 2136,  4716 => 2135,  4713 => 2134,  4708 => 2132,  4705 => 2131,  4703 => 2130,  4700 => 2129,  4695 => 2128,  4692 => 2127,  4687 => 2125,  4684 => 2124,  4682 => 2123,  4677 => 2121,  4672 => 2119,  4657 => 2107,  4648 => 2101,  4639 => 2095,  4630 => 2089,  4621 => 2083,  4612 => 2077,  4595 => 2062,  4579 => 2059,  4573 => 2057,  4569 => 2056,  4566 => 2055,  4549 => 2053,  4545 => 2052,  4539 => 2049,  4533 => 2045,  4528 => 2044,  4525 => 2043,  4520 => 2041,  4517 => 2040,  4515 => 2039,  4512 => 2038,  4507 => 2037,  4504 => 2036,  4499 => 2034,  4496 => 2033,  4494 => 2032,  4489 => 2030,  4482 => 2026,  4476 => 2025,  4471 => 2023,  4466 => 2021,  4452 => 2009,  4447 => 2008,  4444 => 2007,  4439 => 2005,  4436 => 2004,  4434 => 2003,  4431 => 2002,  4426 => 2001,  4423 => 2000,  4418 => 1998,  4415 => 1997,  4413 => 1996,  4408 => 1994,  4402 => 1990,  4397 => 1989,  4394 => 1988,  4389 => 1986,  4386 => 1985,  4384 => 1984,  4381 => 1983,  4376 => 1982,  4373 => 1981,  4368 => 1979,  4365 => 1978,  4363 => 1977,  4358 => 1975,  4353 => 1973,  4345 => 1968,  4339 => 1967,  4334 => 1965,  4329 => 1963,  4311 => 1950,  4306 => 1947,  4301 => 1946,  4298 => 1945,  4293 => 1943,  4290 => 1942,  4288 => 1941,  4285 => 1940,  4280 => 1939,  4277 => 1938,  4272 => 1936,  4269 => 1935,  4267 => 1934,  4262 => 1932,  4257 => 1930,  4248 => 1923,  4243 => 1922,  4240 => 1921,  4235 => 1919,  4232 => 1918,  4230 => 1917,  4227 => 1916,  4222 => 1915,  4219 => 1914,  4214 => 1912,  4211 => 1911,  4209 => 1910,  4204 => 1908,  4199 => 1906,  4184 => 1894,  4165 => 1877,  4160 => 1876,  4157 => 1875,  4152 => 1873,  4149 => 1872,  4147 => 1871,  4144 => 1870,  4139 => 1869,  4136 => 1868,  4131 => 1866,  4128 => 1865,  4126 => 1864,  4118 => 1858,  4113 => 1857,  4110 => 1856,  4105 => 1854,  4102 => 1853,  4100 => 1852,  4097 => 1851,  4092 => 1850,  4089 => 1849,  4084 => 1847,  4081 => 1846,  4079 => 1845,  4070 => 1838,  4065 => 1837,  4062 => 1836,  4057 => 1834,  4054 => 1833,  4052 => 1832,  4049 => 1831,  4044 => 1830,  4041 => 1829,  4036 => 1827,  4033 => 1826,  4031 => 1825,  4026 => 1823,  4014 => 1814,  4007 => 1809,  3994 => 1806,  3986 => 1805,  3983 => 1804,  3979 => 1803,  3970 => 1797,  3962 => 1791,  3957 => 1790,  3954 => 1789,  3949 => 1787,  3946 => 1786,  3944 => 1785,  3941 => 1784,  3936 => 1783,  3933 => 1782,  3928 => 1780,  3925 => 1779,  3923 => 1778,  3918 => 1776,  3908 => 1769,  3901 => 1764,  3888 => 1761,  3880 => 1760,  3877 => 1759,  3873 => 1758,  3864 => 1752,  3856 => 1746,  3851 => 1745,  3848 => 1744,  3843 => 1742,  3840 => 1741,  3838 => 1740,  3835 => 1739,  3830 => 1738,  3827 => 1737,  3822 => 1735,  3819 => 1734,  3817 => 1733,  3812 => 1731,  3804 => 1725,  3791 => 1722,  3783 => 1721,  3780 => 1720,  3776 => 1719,  3767 => 1713,  3759 => 1707,  3754 => 1706,  3751 => 1705,  3746 => 1703,  3743 => 1702,  3741 => 1701,  3738 => 1700,  3733 => 1699,  3730 => 1698,  3725 => 1696,  3722 => 1695,  3720 => 1694,  3715 => 1692,  3705 => 1685,  3698 => 1680,  3685 => 1677,  3677 => 1676,  3674 => 1675,  3670 => 1674,  3661 => 1668,  3653 => 1662,  3648 => 1661,  3645 => 1660,  3640 => 1658,  3637 => 1657,  3635 => 1656,  3632 => 1655,  3627 => 1654,  3624 => 1653,  3619 => 1651,  3616 => 1650,  3614 => 1649,  3609 => 1647,  3600 => 1640,  3595 => 1639,  3592 => 1638,  3587 => 1636,  3584 => 1635,  3582 => 1634,  3579 => 1633,  3574 => 1632,  3571 => 1631,  3566 => 1629,  3563 => 1628,  3561 => 1627,  3556 => 1625,  3545 => 1616,  3540 => 1615,  3537 => 1614,  3532 => 1612,  3529 => 1611,  3527 => 1610,  3524 => 1609,  3519 => 1608,  3516 => 1607,  3511 => 1605,  3508 => 1604,  3506 => 1603,  3501 => 1601,  3496 => 1599,  3487 => 1592,  3473 => 1586,  3467 => 1582,  3464 => 1581,  3458 => 1580,  3456 => 1579,  3449 => 1577,  3439 => 1576,  3431 => 1575,  3428 => 1574,  3422 => 1573,  3420 => 1572,  3410 => 1571,  3405 => 1570,  3400 => 1569,  3398 => 1568,  3390 => 1563,  3386 => 1562,  3380 => 1559,  3375 => 1558,  3370 => 1557,  3368 => 1556,  3364 => 1554,  3347 => 1552,  3343 => 1551,  3337 => 1548,  3331 => 1544,  3326 => 1543,  3323 => 1542,  3318 => 1540,  3315 => 1539,  3313 => 1538,  3310 => 1537,  3305 => 1536,  3302 => 1535,  3297 => 1533,  3294 => 1532,  3292 => 1531,  3287 => 1529,  3282 => 1527,  3273 => 1520,  3257 => 1517,  3251 => 1515,  3247 => 1514,  3244 => 1513,  3227 => 1511,  3223 => 1510,  3217 => 1507,  3211 => 1503,  3206 => 1502,  3203 => 1501,  3198 => 1499,  3195 => 1498,  3193 => 1497,  3190 => 1496,  3185 => 1495,  3182 => 1494,  3177 => 1492,  3174 => 1491,  3172 => 1490,  3167 => 1488,  3162 => 1486,  3153 => 1479,  3139 => 1473,  3133 => 1469,  3130 => 1468,  3124 => 1467,  3122 => 1466,  3115 => 1464,  3105 => 1463,  3097 => 1462,  3094 => 1461,  3088 => 1460,  3086 => 1459,  3076 => 1458,  3071 => 1457,  3066 => 1456,  3064 => 1455,  3056 => 1450,  3052 => 1449,  3046 => 1446,  3041 => 1445,  3036 => 1444,  3034 => 1443,  3030 => 1441,  3013 => 1439,  3009 => 1438,  3003 => 1435,  2997 => 1431,  2981 => 1428,  2975 => 1426,  2971 => 1425,  2968 => 1424,  2951 => 1422,  2947 => 1421,  2941 => 1418,  2935 => 1414,  2930 => 1413,  2927 => 1412,  2922 => 1410,  2919 => 1409,  2917 => 1408,  2914 => 1407,  2909 => 1406,  2906 => 1405,  2901 => 1403,  2898 => 1402,  2896 => 1401,  2891 => 1399,  2886 => 1397,  2877 => 1390,  2863 => 1384,  2857 => 1380,  2854 => 1379,  2848 => 1378,  2846 => 1377,  2839 => 1375,  2829 => 1374,  2821 => 1373,  2818 => 1372,  2812 => 1371,  2810 => 1370,  2800 => 1369,  2795 => 1368,  2790 => 1367,  2788 => 1366,  2780 => 1361,  2776 => 1360,  2770 => 1357,  2765 => 1356,  2760 => 1355,  2758 => 1354,  2754 => 1352,  2737 => 1350,  2733 => 1349,  2727 => 1346,  2721 => 1342,  2705 => 1339,  2699 => 1337,  2695 => 1336,  2692 => 1335,  2675 => 1333,  2671 => 1332,  2665 => 1329,  2659 => 1325,  2654 => 1324,  2651 => 1323,  2646 => 1321,  2643 => 1320,  2641 => 1319,  2638 => 1318,  2633 => 1317,  2630 => 1316,  2625 => 1314,  2622 => 1313,  2620 => 1312,  2615 => 1310,  2610 => 1308,  2600 => 1301,  2597 => 1300,  2592 => 1299,  2589 => 1298,  2584 => 1296,  2581 => 1295,  2579 => 1294,  2576 => 1293,  2571 => 1292,  2568 => 1291,  2563 => 1289,  2560 => 1288,  2558 => 1287,  2553 => 1285,  2547 => 1281,  2542 => 1280,  2539 => 1279,  2534 => 1277,  2531 => 1276,  2529 => 1275,  2526 => 1274,  2521 => 1273,  2518 => 1272,  2513 => 1270,  2510 => 1269,  2508 => 1268,  2503 => 1266,  2497 => 1262,  2492 => 1261,  2489 => 1260,  2484 => 1258,  2481 => 1257,  2479 => 1256,  2476 => 1255,  2471 => 1254,  2468 => 1253,  2463 => 1251,  2460 => 1250,  2458 => 1249,  2453 => 1247,  2447 => 1243,  2442 => 1242,  2439 => 1241,  2434 => 1239,  2431 => 1238,  2429 => 1237,  2426 => 1236,  2421 => 1235,  2418 => 1234,  2413 => 1232,  2410 => 1231,  2408 => 1230,  2403 => 1228,  2397 => 1224,  2392 => 1223,  2389 => 1222,  2384 => 1220,  2381 => 1219,  2379 => 1218,  2376 => 1217,  2371 => 1216,  2368 => 1215,  2363 => 1213,  2360 => 1212,  2358 => 1211,  2353 => 1209,  2347 => 1205,  2342 => 1204,  2339 => 1203,  2334 => 1201,  2331 => 1200,  2329 => 1199,  2326 => 1198,  2321 => 1197,  2318 => 1196,  2313 => 1194,  2310 => 1193,  2308 => 1192,  2305 => 1191,  2299 => 1190,  2296 => 1189,  2290 => 1187,  2287 => 1186,  2285 => 1185,  2278 => 1183,  2272 => 1179,  2267 => 1178,  2264 => 1177,  2259 => 1175,  2256 => 1174,  2254 => 1173,  2251 => 1172,  2246 => 1171,  2243 => 1170,  2238 => 1168,  2235 => 1167,  2233 => 1166,  2228 => 1164,  2222 => 1160,  2217 => 1159,  2214 => 1158,  2209 => 1156,  2206 => 1155,  2204 => 1154,  2201 => 1153,  2196 => 1152,  2193 => 1151,  2188 => 1149,  2185 => 1148,  2183 => 1147,  2178 => 1145,  2172 => 1141,  2167 => 1140,  2164 => 1139,  2159 => 1137,  2156 => 1136,  2154 => 1135,  2151 => 1134,  2146 => 1133,  2143 => 1132,  2138 => 1130,  2135 => 1129,  2133 => 1128,  2128 => 1126,  2122 => 1122,  2117 => 1121,  2114 => 1120,  2109 => 1118,  2106 => 1117,  2104 => 1116,  2101 => 1115,  2096 => 1114,  2093 => 1113,  2088 => 1111,  2085 => 1110,  2083 => 1109,  2078 => 1107,  2072 => 1103,  2067 => 1102,  2064 => 1101,  2059 => 1099,  2056 => 1098,  2054 => 1097,  2051 => 1096,  2046 => 1095,  2043 => 1094,  2038 => 1092,  2035 => 1091,  2033 => 1090,  2028 => 1088,  2023 => 1086,  2011 => 1077,  2007 => 1076,  2003 => 1075,  1999 => 1074,  1995 => 1073,  1991 => 1072,  1975 => 1058,  1970 => 1057,  1967 => 1056,  1962 => 1054,  1959 => 1053,  1957 => 1052,  1954 => 1051,  1949 => 1050,  1946 => 1049,  1941 => 1047,  1938 => 1046,  1936 => 1045,  1931 => 1043,  1926 => 1040,  1920 => 1038,  1918 => 1037,  1912 => 1036,  1905 => 1034,  1899 => 1030,  1894 => 1029,  1891 => 1028,  1886 => 1026,  1883 => 1025,  1881 => 1024,  1878 => 1023,  1873 => 1022,  1870 => 1021,  1865 => 1019,  1862 => 1018,  1860 => 1017,  1855 => 1015,  1850 => 1013,  1843 => 1008,  1838 => 1007,  1835 => 1006,  1830 => 1004,  1827 => 1003,  1825 => 1002,  1822 => 1001,  1817 => 1000,  1814 => 999,  1809 => 997,  1806 => 996,  1804 => 995,  1799 => 993,  1793 => 989,  1788 => 988,  1785 => 987,  1780 => 985,  1777 => 984,  1775 => 983,  1772 => 982,  1767 => 981,  1764 => 980,  1759 => 978,  1756 => 977,  1754 => 976,  1749 => 974,  1743 => 970,  1738 => 969,  1735 => 968,  1730 => 966,  1727 => 965,  1725 => 964,  1722 => 963,  1717 => 962,  1714 => 961,  1709 => 959,  1706 => 958,  1704 => 957,  1699 => 955,  1693 => 951,  1688 => 950,  1685 => 949,  1680 => 947,  1677 => 946,  1675 => 945,  1672 => 944,  1667 => 943,  1664 => 942,  1659 => 940,  1656 => 939,  1654 => 938,  1649 => 936,  1643 => 932,  1638 => 931,  1635 => 930,  1630 => 928,  1627 => 927,  1625 => 926,  1622 => 925,  1617 => 924,  1614 => 923,  1609 => 921,  1606 => 920,  1604 => 919,  1599 => 917,  1593 => 913,  1588 => 912,  1585 => 911,  1580 => 909,  1577 => 908,  1575 => 907,  1572 => 906,  1567 => 905,  1564 => 904,  1559 => 902,  1556 => 901,  1554 => 900,  1549 => 898,  1543 => 894,  1538 => 893,  1535 => 892,  1530 => 890,  1527 => 889,  1525 => 888,  1522 => 887,  1517 => 886,  1514 => 885,  1509 => 883,  1506 => 882,  1504 => 881,  1499 => 879,  1493 => 875,  1488 => 874,  1485 => 873,  1480 => 871,  1477 => 870,  1475 => 869,  1472 => 868,  1467 => 867,  1464 => 866,  1459 => 864,  1456 => 863,  1454 => 862,  1449 => 860,  1444 => 857,  1438 => 855,  1436 => 854,  1430 => 853,  1423 => 851,  1418 => 849,  1404 => 837,  1399 => 836,  1396 => 835,  1391 => 833,  1388 => 832,  1386 => 831,  1383 => 830,  1378 => 829,  1375 => 828,  1370 => 826,  1367 => 825,  1365 => 824,  1360 => 822,  1355 => 820,  1341 => 809,  1332 => 803,  1323 => 797,  1314 => 791,  1305 => 785,  1296 => 779,  1287 => 773,  1267 => 758,  1262 => 756,  1253 => 752,  1248 => 750,  1239 => 746,  1234 => 744,  1229 => 742,  1220 => 736,  1210 => 729,  1172 => 702,  1168 => 701,  1159 => 694,  1154 => 691,  1149 => 688,  1147 => 687,  1110 => 661,  1106 => 660,  1097 => 653,  1092 => 650,  1087 => 647,  1085 => 646,  1048 => 620,  1044 => 619,  1035 => 612,  1030 => 609,  1025 => 606,  1023 => 605,  986 => 579,  982 => 578,  973 => 571,  968 => 568,  963 => 565,  961 => 564,  924 => 538,  920 => 537,  911 => 530,  906 => 527,  901 => 524,  899 => 523,  891 => 518,  882 => 511,  877 => 509,  872 => 508,  867 => 506,  862 => 505,  860 => 504,  848 => 494,  843 => 492,  838 => 491,  833 => 489,  828 => 488,  826 => 487,  611 => 275,  602 => 268,  596 => 264,  590 => 260,  588 => 259,  583 => 256,  581 => 255,  568 => 245,  559 => 239,  554 => 237,  547 => 233,  542 => 231,  535 => 227,  530 => 225,  523 => 221,  518 => 219,  510 => 214,  506 => 213,  501 => 211,  496 => 208,  491 => 206,  486 => 203,  484 => 202,  481 => 201,  476 => 199,  471 => 196,  469 => 195,  464 => 193,  457 => 189,  452 => 187,  446 => 183,  441 => 182,  438 => 181,  433 => 179,  430 => 178,  428 => 177,  425 => 176,  420 => 175,  417 => 174,  412 => 172,  409 => 171,  407 => 170,  398 => 163,  393 => 160,  388 => 157,  386 => 156,  381 => 153,  376 => 150,  371 => 147,  369 => 146,  364 => 143,  359 => 140,  354 => 137,  352 => 136,  347 => 133,  342 => 130,  337 => 127,  335 => 126,  330 => 123,  325 => 120,  320 => 117,  318 => 116,  313 => 113,  308 => 110,  303 => 107,  301 => 106,  296 => 103,  291 => 100,  286 => 97,  284 => 96,  277 => 92,  272 => 90,  264 => 85,  261 => 84,  256 => 82,  251 => 81,  246 => 79,  241 => 78,  239 => 77,  233 => 74,  227 => 70,  221 => 69,  213 => 67,  205 => 65,  202 => 64,  198 => 63,  190 => 60,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  155 => 46,  147 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  110 => 31,  101 => 25,  97 => 23,  89 => 19,  87 => 18,  81 => 14,  70 => 12,  66 => 11,  59 => 9,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/theme/speedy.twig", "");
    }
}
