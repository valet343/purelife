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

/* catalog/product_list.twig */
class __TwigTemplate_f71e299443e177a79a0e72ae109e75ceb69ce309fb246fb2667fd4548e6de859 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["enabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_enable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 10
        echo ($context["disabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_disable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" form=\"form-product\" formaction=\"";
        // line 11
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 35
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 39
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t  <div class=\"input-group\">
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 41
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t  <div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-name\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 48
        echo ($context["entry_model"] ?? null);
        echo "</label>
\t\t\t  <div class=\"input-group\">
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 50
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            <div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-model\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                  </div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class=\"form-group\">
                 <label class=\"control-label\" for=\"input-category-name\">";
        // line 57
        echo ($context["entry_category"] ?? null);
        echo "</label> <label class=\"control-label pull-right\" for=\"input-sub-category\">";
        echo ($context["entry_sub_category"] ?? null);
        echo " <input type=\"checkbox\" class=\"checkbox-inline\" name=\"filter_sub_category\" id=\"input-sub-category\" class=\"form-control\"";
        echo ($context["filter_sub_category"] ?? null);
        echo "    ";
        if (($context["filter_sub_category"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " /></label>
                <div class=\"clearfix\"></div>
\t\t\t\t<div class=\"input-group\">
                  <input type=\"text\" name=\"filter_category_name\" value=\"";
        // line 60
        echo ($context["filter_category_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category-name\" class=\"form-control\" />
                  <div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-category-name\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 65
        echo ($context["filter_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
              </div>
\t\t\t  
\t\t\t<div class=\"form-group\">
              <label class=\"control-label\" for=\"input-manufacturer-name\">";
        // line 69
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
\t\t\t  <div class=\"input-group\">
\t\t\t\t<input type=\"text\" name=\"filter_manufacturer_name\" value=\"";
        // line 71
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
\t\t\t\t
\t\t\t\t<div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-manufacturer\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t</div>
\t\t\t\t  <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"";
        // line 76
        echo ($context["filter_manufacturer_id"] ?? null);
        echo "\" id=\"input-manufacturer-id\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<!--
\t\t\t<div class=\"form-group\">
                <label class=\"control-label\" for=\"input-manufacturer-name\">";
        // line 82
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"filter_manufacturer_name\" value=\"";
        // line 84
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer-name\" class=\"form-control\" />
                  <div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-manufacturer-name\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <input type=\"hidden\" name=\"filter_manufacturer\" value=\"";
        // line 89
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
              </div>
\t\t\t  -->
\t\t\t<div class=\"form-group\">
                <label class=\"control-label\" for=\"input-price\">";
        // line 93
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"filter_price_min\" value=\"";
        // line 97
        echo ($context["filter_price_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_min"] ?? null);
        echo "\" id=\"input-price-min\" class=\"form-control\" />
                      <div class=\"input-group-btn\">
                        <button type=\"button\" id=\"button-clear-input-price-min\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-sm-6 pull-right\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"filter_price_max\" value=\"";
        // line 105
        echo ($context["filter_price_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_max"] ?? null);
        echo "\" id=\"input-price-max\" class=\"form-control\" />
                      <div class=\"input-group-btn\">
                        <button type=\"button\" id=\"button-clear-input-price-max\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 114
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"filter_quantity_min\" value=\"";
        // line 118
        echo ($context["filter_quantity_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_min"] ?? null);
        echo "\" id=\"input-quantity-min\" class=\"form-control\" />
                      <div class=\"input-group-btn\">
                        <button type=\"button\" id=\"button-clear-input-quantity-min\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-sm-6 pull-right\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"filter_quantity_max\" value=\"";
        // line 126
        echo ($context["filter_quantity_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_max"] ?? null);
        echo "\" id=\"input-quantity-max\" class=\"form-control\" />
                      <div class=\"input-group-btn\">
                        <button type=\"button\" id=\"button-clear-input-quantity-max\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 135
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 144
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 145
            echo "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 151
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 159
            echo "
                
                
                  
                
                
                <option value=\"1\">";
            // line 165
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 173
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 174
            echo "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 180
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 188
            echo "
                
                
                  
                
                
                <option value=\"0\">";
            // line 194
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 202
        echo "

              
              
                
              
              
              </select>
            </div>
\t\t\t<div class=\"form-group\">
              <label class=\"control-label\" for=\"input-noindex\">";
        // line 212
        echo ($context["entry_noindex"] ?? null);
        echo "</label>
              <select name=\"filter_noindex\" id=\"input-noindex\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 215
        if ((($context["filter_noindex"] ?? null) == "1")) {
            // line 216
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 218
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 220
        echo "                  ";
        if ((($context["filter_noindex"] ?? null) == "0")) {
            // line 221
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 223
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 225
        echo "              </select>
\t\t\t</div>

        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-import-batch\">Import label</label>
          <select name=\"filter_import_batch\" id=\"input-import-batch\" class=\"form-control\">
            <option value=\"\"></option>
            ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["importLabels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gkdImportLabel"]) {
            // line 233
            echo "            <option value=\"";
            echo $context["gkdImportLabel"];
            echo "\" ";
            if ((($context["filter_import_batch"] ?? null) == $context["gkdImportLabel"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $context["gkdImportLabel"];
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gkdImportLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "          </select>
        </div>
      
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 239
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t  <button type=\"button\" id=\"button-clear-filter\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i><span class=\"hidden-sm\"> ";
        // line 240
        echo ($context["button_clear"] ?? null);
        echo "</span></button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 248
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 251
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 257
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 258
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 259
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 260
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 261
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 262
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 263
        if ((($context["sort"] ?? null) == "p.noindex")) {
            echo " <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t  <td class=\"text-right\">";
        // line 264
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 269
        if (($context["products"] ?? null)) {
            // line 270
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 271
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 272
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 272), ($context["selected"] ?? null))) {
                    // line 273
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 273);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 275
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 275);
                    echo "\" />
                      ";
                }
                // line 276
                echo "</td>
                    <td class=\"text-center\">";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 277)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 277);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 277);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 278);
                echo "</td>
                    <td class=\"text-left\">";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 279);
                echo "</td>
                    <td class=\"text-right\">";
                // line 280
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 280)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 280);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 281);
                    echo "</div>
                      ";
                } else {
                    // line 283
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 283);
                    echo "
                      ";
                }
                // line 284
                echo "</td>
                    <td class=\"text-right\">";
                // line 285
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 285) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 285);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 285) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 285);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 285);
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 286);
                echo "</td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["product"], "noindex", [], "any", false, false, false, 287);
                echo "</td>
                    <td class=\"text-right\">
\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href_shop", [], "any", false, false, false, 289);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_shop"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t<a href=\"";
                // line 290
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 290);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "                  ";
        } else {
            // line 295
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"9\">";
            // line 296
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 299
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 305
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 306
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

 var filter_import_batch = \$('select[name=\\'filter_import_batch\\']').val();

  if (filter_import_batch != '*') {
\t\turl += '&filter_import_batch=' + encodeURIComponent(filter_import_batch);
\t}
      
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price_min = \$('input[name=\\'filter_price_min\\']').val();
\tif (filter_price_min) {
\t\turl += '&filter_price_min=' + encodeURIComponent(filter_price_min);
\t}
\t
\tvar filter_price_max = \$('input[name=\\'filter_price_max\\']').val();
\tif (filter_price_max) {
\t\turl += '&filter_price_max=' + encodeURIComponent(filter_price_max);
\t}

\tvar filter_quantity_min = \$('input[name=\\'filter_quantity_min\\']').val();
\tif (filter_quantity_min) {
\t\turl += '&filter_quantity_min=' + encodeURIComponent(filter_quantity_min);
\t}
\t
\tvar filter_quantity_max = \$('input[name=\\'filter_quantity_max\\']').val();
\tif (filter_quantity_max) {
\t\turl += '&filter_quantity_max=' + encodeURIComponent(filter_quantity_max);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}
\t
\tvar filter_category = \$('input[name=\\'filter_category\\']').val();
\tif (filter_category) {
\t\turl += '&filter_category=' + encodeURIComponent(filter_category);
\t}
\t
\tvar filter_sub_category = \$('input[name=\\'filter_sub_category\\']');
\tif (filter_sub_category.prop('checked')) {
\t\turl += '&filter_sub_category';
\t}
\t
\tvar filter_manufacturer_id = \$('input[name=\\'filter_manufacturer_id\\']').val();
\tif (filter_manufacturer_id) {
\t\turl += '&filter_manufacturer_id=' + encodeURIComponent(filter_manufacturer_id);
\t}
\t
\tvar filter_noindex = \$('select[name=\\'filter_noindex\\']').val();
\tif (filter_noindex !== '') {
\t\turl += '&filter_noindex=' + encodeURIComponent(filter_noindex);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 381
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
\$('#button-clear-filter').on('click', function() {
\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 384
        echo ($context["user_token"] ?? null);
        echo "';
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 396
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
\$('#button-clear-input-name').on('click',function(){
\t\$('input[name=\\'filter_name\\']').val('');
\t\$('#button-filter').trigger('click');
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 420
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
\$('#button-clear-input-model').on('click',function(){
\t\$('input[name=\\'filter_model\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('input[name=\\'filter_category_name\\']').autocomplete({
\t'source': function(request, response) {
\t\tif (\$('input[name=\\'filter_category_name\\']').val().length==0) {
\t\t\t\$('input[name=\\'filter_category\\']').val(null);
\t\t}
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 446
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json.length>0) {
\t\t\t\t\tjson.unshift({'category_id':null,'name':'";
        // line 450
        echo ($context["text_all"] ?? null);
        echo "'},{'category_id':0,'name':'";
        echo ($context["text_none_category"] ?? null);
        echo "'});
\t\t\t\t}
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tif (item['label']!='";
        // line 462
        echo ($context["text_all"] ?? null);
        echo "') {
\t\t\t\$('input[name=\\'filter_category_name\\']').val(item['label']);
\t\t} else {
\t\t\t\$('input[name=\\'filter_category_name\\']').val('');
\t\t}
\t\t\$('input[name=\\'filter_category\\']').val(item['value']);
\t}
});
\$('#button-clear-input-category-name').on('click',function(){
\t\$('input[name=\\'filter_category_name\\']').val('');
\t\$('input[name=\\'filter_category\\']').val(null);
\t\$('#button-filter').trigger('click');
});

// Manufacturer
\$('input[name=\\'filter_manufacturer_name\\']').autocomplete({
\t'source': function(request, response) {
\t\tif (\$('input[name=\\'filter_manufacturer_name\\']').val().length==0) {
\t\t\t\$('input[name=\\'filter_manufacturer_id\\']').val(null);
\t\t}
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 483
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json.length>0) {
\t\t\t\t\tjson.unshift({'manufacturer_id':null,'name':'";
        // line 487
        echo ($context["text_all"] ?? null);
        echo "'},{'manufacturer_id':0,'name':'";
        echo ($context["text_none_manufacturer"] ?? null);
        echo "'});
\t\t\t\t}
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_manufacturer_name\\']').val(item['label']);
\t\t\$('input[name=\\'filter_manufacturer_id\\']').val(item['value']);
\t}
});

\$('#button-clear-input-manufacturer').on('click',function(){
\t\$('input[name=\\'filter_manufacturer_name\\']').val('');
\t\$('input[name=\\'filter_manufacturer_id\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('#button-clear-input-price-min').on('click',function(){
\t\$('input[name=\\'filter_price_min\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('#button-clear-input-price-max').on('click',function(){
\t\$('input[name=\\'filter_price_max\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('#button-clear-input-quantity-min').on('click',function(){
\t\$('input[name=\\'filter_quantity_min\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('#button-clear-input-quantity-max').on('click',function(){
\t\$('input[name=\\'filter_quantity_max\\']').val('');
\t\$('#button-filter').trigger('click');
});
\$('input[name=\\'filter_name\\'], input[name=\\'filter_model\\'], input[name=\\'filter_category_name\\'], input[name=\\'filter_manufacturer_id\\'], input[name=\\'filter_price_min\\'], input[name=\\'filter_price_max\\'], input[name=\\'filter_quantity_min\\'], input[name=\\'filter_quantity_max\\']').keypress(function (e) {
\tif (e.which == 13) {
\t\t\$('#button-filter').trigger('click');
\t\treturn false;
\t}
});
//--></script></div>
";
        // line 532
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 532,  989 => 487,  982 => 483,  958 => 462,  941 => 450,  934 => 446,  905 => 420,  878 => 396,  863 => 384,  857 => 381,  779 => 306,  775 => 305,  767 => 299,  761 => 296,  758 => 295,  755 => 294,  743 => 290,  737 => 289,  732 => 287,  728 => 286,  712 => 285,  709 => 284,  703 => 283,  698 => 281,  692 => 280,  688 => 279,  684 => 278,  672 => 277,  669 => 276,  663 => 275,  657 => 273,  655 => 272,  652 => 271,  647 => 270,  645 => 269,  637 => 264,  619 => 263,  601 => 262,  583 => 261,  565 => 260,  547 => 259,  529 => 258,  525 => 257,  516 => 251,  510 => 248,  499 => 240,  495 => 239,  489 => 235,  474 => 233,  470 => 232,  461 => 225,  455 => 223,  449 => 221,  446 => 220,  440 => 218,  434 => 216,  432 => 215,  426 => 212,  414 => 202,  403 => 194,  395 => 188,  384 => 180,  376 => 174,  373 => 173,  362 => 165,  354 => 159,  343 => 151,  335 => 145,  333 => 144,  321 => 135,  307 => 126,  294 => 118,  287 => 114,  273 => 105,  260 => 97,  253 => 93,  246 => 89,  236 => 84,  231 => 82,  222 => 76,  212 => 71,  207 => 69,  200 => 65,  190 => 60,  176 => 57,  164 => 50,  159 => 48,  147 => 41,  142 => 39,  135 => 35,  129 => 31,  121 => 27,  118 => 26,  110 => 22,  108 => 21,  103 => 18,  92 => 16,  88 => 15,  83 => 13,  74 => 11,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
