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

/* speedy/template/common/footer.twig */
class __TwigTemplate_bac9a1a53d3301227a478ccd2831606902b87f907b0ab42c5bced2b436d986ad extends \Twig\Template
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
        echo "
\t        ";
        // line 2
        echo ($context["dw_quick_modal"] ?? null);
        echo "
\t    
<footer>
  <div class=\"container\">
    <div class=\"copyright\">
      ";
        // line 7
        if (($context["logo"] ?? null)) {
            // line 8
            echo "      <div class=\"logo\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\"></div>
      ";
        }
        // line 10
        echo "      <p>";
        echo ($context["powered"] ?? null);
        echo "</p>
      ";
        // line 11
        if (((((((($context["footer_socials"] ?? null) && ($context["instagram"] ?? null)) || ($context["facebook"] ?? null)) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null)) || ($context["linkedin"] ?? null)) || ($context["pinterest"] ?? null))) {
            // line 12
            echo "      <ul class=\"social_links\">
        ";
            // line 13
            if (($context["instagram"] ?? null)) {
                echo "<li class=\"instagram\"><a href=\"";
                echo ($context["instagram"] ?? null);
                echo "\"></a></li>";
            }
            // line 14
            echo "        ";
            if (($context["facebook"] ?? null)) {
                echo "<li class=\"facebook\"><a href=\"";
                echo ($context["facebook"] ?? null);
                echo "\"></a></li>";
            }
            // line 15
            echo "        ";
            if (($context["twitter"] ?? null)) {
                echo "<li class=\"twitter\"><a href=\"";
                echo ($context["twitter"] ?? null);
                echo "\"></a></li>";
            }
            // line 16
            echo "        ";
            if (($context["youtube"] ?? null)) {
                echo "<li class=\"youtube\"><a href=\"";
                echo ($context["youtube"] ?? null);
                echo "\"></a></li>";
            }
            // line 17
            echo "        ";
            if (($context["linkedin"] ?? null)) {
                echo "<li class=\"linkedin\"><a href=\"";
                echo ($context["linkedin"] ?? null);
                echo "\"></a></li>";
            }
            // line 18
            echo "        ";
            if (($context["pinterest"] ?? null)) {
                echo "<li class=\"pinterest\"><a href=\"";
                echo ($context["pinterest"] ?? null);
                echo "\"></a></li>";
            }
            // line 19
            echo "      </ul>
      ";
        }
        // line 21
        echo "    </div>
    <div class=\"footer_item categories\">
      <h3>";
        // line 23
        echo ($context["text_catalog"] ?? null);
        echo "</h3>
      ";
        // line 24
        echo ($context["menu"] ?? null);
        echo "
    </div>
    <div class=\"footer_item informations\">
      <h3>";
        // line 27
        echo ($context["text_information"] ?? null);
        echo "</h3>
      <ul class=\"footer_item_inner\">
        <li><a href=\"";
        // line 29
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 30
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo ($context["compare"] ?? null);
        echo "\">";
        echo ($context["text_compare_page"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 32
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 33
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturers_page"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 34
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 36
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 36);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 36);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 39
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
      </ul>
    </div>
    <div class=\"footer_item contacts\">
      <h3>";
        // line 43
        echo ($context["text_contact"] ?? null);
        echo "</h3>
      <div class=\"footer_item_inner\">
        ";
        // line 45
        if (($context["footer_phones"] ?? null)) {
            // line 46
            echo "        <!-- <p>";
            echo ($context["text_telephone"] ?? null);
            echo "</p> -->
        <ul class=\"phones\">
          <li><a href=\"tel:";
            // line 48
            echo ($context["telephone"] ?? null);
            echo "\">";
            echo ($context["telephone"] ?? null);
            echo "</a></li>
          ";
            // line 49
            if (($context["telephone_2"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_2"] ?? null);
                echo "</a></li>";
            }
            // line 50
            echo "          ";
            if (($context["telephone_3"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_3"] ?? null);
                echo "</a></li>";
            }
            // line 51
            echo "          ";
            if (($context["telephone_4"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_4"] ?? null);
                echo "</a></li>";
            }
            // line 52
            echo "        </ul>
        ";
        }
        // line 54
        echo "        ";
        if ((((($context["footer_messengers"] ?? null) && ($context["telegram"] ?? null)) || ($context["viber"] ?? null)) || ($context["whatsapp"] ?? null))) {
            // line 55
            echo "        <!-- <p>";
            echo ($context["text_messenger"] ?? null);
            echo "</p> -->
        <ul class=\"messenger_links\">
          ";
            // line 57
            if (($context["telegram"] ?? null)) {
                echo "<li class=\"telegram\"><a href=\"https://t.me/";
                echo ($context["telegram"] ?? null);
                echo "\"></a></li>";
            }
            // line 58
            echo "          ";
            if (($context["viber"] ?? null)) {
                echo "<li class=\"viber\"><a href=\"viber://chat?number=";
                echo ($context["viber"] ?? null);
                echo "\"></a></li>";
            }
            // line 59
            echo "          ";
            if (($context["whatsapp"] ?? null)) {
                echo "<li class=\"whatsapp\"><a href=\"whatsapp://send?phone=";
                echo ($context["whatsapp"] ?? null);
                echo "\"></a></li>";
            }
            // line 60
            echo "        </ul>
        ";
        }
        // line 62
        echo "        ";
        if (($context["footer_email"] ?? null)) {
            // line 63
            echo "        <p>";
            echo ($context["text_email"] ?? null);
            echo "</p>
        <ul>
          <li><a href=\"mailto:";
            // line 65
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></li>
        </ul>
        ";
        }
        // line 68
        echo "        ";
        if (($context["footer_address"] ?? null)) {
            // line 69
            echo "        <p>";
            echo ($context["text_address"] ?? null);
            echo "</p>
        <div class=\"address\">";
            // line 70
            echo ($context["address"] ?? null);
            echo "</div>
        ";
        }
        // line 72
        echo "        ";
        if (($context["footer_map"] ?? null)) {
            // line 73
            echo "        <div class=\"map\" style=\"display: flex;margin-top: 5px\">";
            echo ($context["footer_map_code"] ?? null);
            echo "</div>
        ";
        }
        // line 75
        echo "      </div>
  </div>
  </div>
";
        // line 78
        echo ($context["microdatapro"] ?? null);
        echo " ";
        $context["microdatapro_main_flag"] = 1;
        echo " ";
        // line 79
        echo "
            ";
        // line 80
        if (($context["catalog_quantity"] ?? null)) {
            echo "      
            <script>
                    var priceFormated = function (price) {
                        let jj;
                        price = price * '";
            // line 84
            echo twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "value", [], "any", false, false, false, 84);
            echo "';
                        
                         let c = '";
            // line 86
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "decimals", [], "any", false, false, false, 86))) ? ("0") : (twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "decimals", [], "any", false, false, false, 86)));
            echo "';
                        let d = '";
            // line 87
            echo twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "decimal_point", [], "any", false, false, false, 87);
            echo "';
                        let t = '";
            // line 88
            echo twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "thousand_point", [], "any", false, false, false, 88);
            echo "';
                        let s_left = '";
            // line 89
            echo twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "symbol_left", [], "any", false, false, false, 89);
            echo "';
                        let s_right = '";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["data_currency"] ?? null), "symbol_right", [], "any", false, false, false, 90);
            echo "';
                        let i = parseInt(price = Math.abs(price).toFixed(c)) + '';
                         jj = ((jj = i.length) > 3) ? jj % 3 : 0;
                        
                        return s_left + (jj ? i.substr(0, jj) + t : '') + i.substr(jj).replace(/(\\d{3})(?=\\d)/g, \"\$1\" + t) + (c ? d + Math.abs(price - i).toFixed(c).slice(2) : '') + s_right;
                    };
                            
                    var textMaximum ='";
            // line 97
            echo ($context["text_maximum"] ?? null);
            echo "',
                        textMinimum = '";
            // line 98
            echo ($context["text_minimum"] ?? null);
            echo "',
                        textAddMultiple = '";
            // line 99
            echo ($context["text_add_multiple"] ?? null);
            echo "';
            </script>        
            ";
        }
        // line 102
        echo "        
</footer>
";
        // line 104
        if ((($context["footer_payments_status"] ?? null) && ($context["footer_payments"] ?? null))) {
            // line 105
            echo "<div class=\"footer_payments_icons\">
  ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer_payments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["footer_payment"]) {
                // line 107
                echo "  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footer_payment"], "image", [], "any", false, false, false, 107);
                echo "\" alt=\"\">
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "</div>
";
        }
        // line 111
        echo "<script src=\"catalog/view/javascript/dc_speedy_scripts.js";
        if (($context["developer_mode"] ?? null)) {
            echo "?v=";
            echo ($context["developer_mode"] ?? null);
        }
        echo "\" type=\"text/javascript\"></script>
";
        // line 112
        if (($context["code_footer_js_link"] ?? null)) {
            echo "<script src=\"catalog/view/javascript/";
            echo ($context["code_footer_js_link"] ?? null);
            echo ".js";
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 113
        if (($context["code_footer_js"] ?? null)) {
            echo "<script>";
            echo ($context["code_footer_js"] ?? null);
            echo "</script>";
        }
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 115
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 115);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 115);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 115);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 118
            echo "<script src=\"";
            echo $context["script"];
            if (($context["developer_mode"] ?? null)) {
                echo "?v=";
                echo ($context["developer_mode"] ?? null);
            }
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "<script src=\"catalog/view/javascript/jquery.cookie.min.js\"></script>
";
        // line 121
        if (($context["widgets_modal_cookie_description"] ?? null)) {
            // line 122
            echo "<div class=\"cookie_modal\">
  ";
            // line 123
            echo ($context["widgets_modal_cookie_description"] ?? null);
            echo "
  <span class=\"btn\">";
            // line 124
            echo ($context["button_continue"] ?? null);
            echo "</span>
  <span class=\"btn btn-close\"></span>
</div>
<script>
  if (localStorage.getItem('agree_cookie') == null) {
    if(\$(\".wl-popup-language\").length != 1) {
      setTimeout(function(){
        \$(\".cookie_modal\").addClass(\"active\"); 
      }, 5000);
    }
  }
  \$(\".cookie_modal span\").on(\"click\", function() {
    localStorage.setItem('agree_cookie', '1');
    \$(\".cookie_modal\").remove();
  });
</script>
";
        }
        // line 141
        if (($context["widgets_messenger_status"] ?? null)) {
            // line 142
            echo "<div class=\"widgets_messenger_link\"></div>
<ul class=\"widgets_messenger_content\">
  <li><a href=\"tel:";
            // line 144
            echo ($context["telephone"] ?? null);
            echo "\">";
            echo ($context["telephone"] ?? null);
            echo "</a></li>
  ";
            // line 145
            if (($context["telephone_2"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_2"] ?? null);
                echo "</a></li>";
            }
            // line 146
            echo "  ";
            if (($context["telephone_3"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_3"] ?? null);
                echo "</a></li>";
            }
            // line 147
            echo "  ";
            if (($context["telephone_4"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_4"] ?? null);
                echo "</a></li>";
            }
            // line 148
            echo "  <span></span>
  ";
            // line 149
            if (($context["telegram"] ?? null)) {
                echo "<li class=\"telegram\"><a href=\"https://t.me/";
                echo ($context["telegram"] ?? null);
                echo "\">";
                echo ($context["text_telegram"] ?? null);
                echo "</a></li>";
            }
            // line 150
            echo "  ";
            if (($context["viber"] ?? null)) {
                echo "<li class=\"viber\"><a href=\"viber://chat?number=";
                echo ($context["viber"] ?? null);
                echo "\">";
                echo ($context["text_viber"] ?? null);
                echo "</a></li>";
            }
            // line 151
            echo "  ";
            if (($context["whatsapp"] ?? null)) {
                echo "<li class=\"whatsapp\"><a href=\"whatsapp://send?phone=";
                echo ($context["whatsapp"] ?? null);
                echo "\">";
                echo ($context["text_whatsapp"] ?? null);
                echo "</a></li>";
            }
            // line 152
            echo "  <span></span>
  <li><a href=\"mailto:";
            // line 153
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></li>
  <span></span>
  ";
            // line 155
            if (($context["instagram"] ?? null)) {
                echo "<li class=\"instagram\"><a href=\"";
                echo ($context["instagram"] ?? null);
                echo "\">";
                echo ($context["text_instagram"] ?? null);
                echo "</a></li>";
            }
            // line 156
            echo "  ";
            if (($context["facebook"] ?? null)) {
                echo "<li class=\"facebook\"><a href=\"";
                echo ($context["facebook"] ?? null);
                echo "\">";
                echo ($context["text_facebook"] ?? null);
                echo "</a></li>";
            }
            // line 157
            echo "  ";
            if (($context["twitter"] ?? null)) {
                echo "<li class=\"twitter\"><a href=\"";
                echo ($context["twitter"] ?? null);
                echo "\">";
                echo ($context["text_twitter"] ?? null);
                echo "</a></li>";
            }
            // line 158
            echo "  ";
            if (($context["youtube"] ?? null)) {
                echo "<li class=\"youtube\"><a href=\"";
                echo ($context["youtube"] ?? null);
                echo "\">";
                echo ($context["text_youtube"] ?? null);
                echo "</a></li>";
            }
            // line 159
            echo "  ";
            if (($context["linkedin"] ?? null)) {
                echo "<li class=\"linkedin\"><a href=\"";
                echo ($context["linkedin"] ?? null);
                echo "\">";
                echo ($context["text_linkedin"] ?? null);
                echo "</a></li>";
            }
            // line 160
            echo "  ";
            if (($context["pinterest"] ?? null)) {
                echo "<li class=\"pinterest\"><a href=\"";
                echo ($context["pinterest"] ?? null);
                echo "\">";
                echo ($context["text_pinterest"] ?? null);
                echo "</a></li>";
            }
            // line 161
            echo "</ul>
<script>
  \$(\".widgets_messenger_link\").on(\"click\", function(){
    if(\$(this).hasClass(\"active\")){
      \$(this).removeClass(\"active\");
      \$(\".widgets_messenger_content\").removeClass(\"active\");
    } else {      
      \$(this).addClass(\"active\");
      \$(\".widgets_messenger_content\").addClass(\"active\");
      if(!\$(\".dropdown-bg\").hasClass(\"active\")) {
        \$(\".dropdown-bg\").addClass(\"active\");
      }
    }
  })
</script>
";
        }
        // line 177
        if (($context["smartsearch"] ?? null)) {
            // line 178
            echo "<script type=\"text/javascript\"> 
\$(document).on('keyup', '#search_input', function(e) {
  if (e.keyCode == 40 || e.keyCode == 38) {
      return;
  }
  var search = \$(this).val();
  var input = \$(this);
  \$.ajax({
      url: 'index.php?route=extension/module/smartsearch',
      type: 'post',
      data: 'search=' + search,
      dataType: 'json',
      beforeSend: function() {                                    
      },
      complete: function() {                                    
      },
      success: function(json) {
      //alert(json)
        if (input.parent().parent().find('.smartsearch').length == 0) {
            input.parent().after('<div class=\"smartsearch\"></div>');
            \$(\".search\").css({\"z-index\":\"999\"});
            \$(\"#top\").addClass(\"active\");
            if(!\$(\".dropdown-bg\").hasClass(\"active\")) {
              \$(\".dropdown-bg\").addClass(\"active\");
            }
        }
        if (json['html']) {
            \$('.smartsearch').html(json['html']);
            \$('.smartsearch').show();
        } else {
            \$('.smartsearch').html('');
            \$('.smartsearch').hide();
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
      //alert(thrownError + \" \" + xhr.statusText + \" \" + xhr.responseText);
      }
  });
});
\$(document).on('keyup', '";
            // line 217
            echo ($context["smartsearch_field"] ?? null);
            echo "', function(e) {
var smartsearch = \$(this).parent().find('.smartsearch');
if (e.keyCode == 40) {
    if (smartsearch.find('.item').length > 0) {
        if (smartsearch.find('.item.current').length == 0) {                                        
            smartsearch.find('.item').first().addClass('current')
        } else {
            var el = smartsearch.find('.item.current');
            el.removeClass('current');
            if (el.next().length == 0) {
                smartsearch.find('.item').first().addClass('current')
            } else {
                el.next().addClass('current');
            }                                        
        }
        \$(this).val(smartsearch.find('.item.current').attr('search_name'));

    }                                
}
if (e.keyCode == 38) {
    if (smartsearch.find('.item').length > 0) {
        if (smartsearch.find('.item.current').length == 0) {                                    
            smartsearch.find('.item').last().addClass('current')
        } else {
            var el = smartsearch.find('.item.current');
            el.removeClass('current');
            if (el.prev().length == 0) {
                smartsearch.find('.item').last().addClass('current')
            } else {
                el.prev().addClass('current');
            }                                        
        }
        \$(this).val(smartsearch.find('.item.current').attr('search_name'));
    }
}
});
\$(document).on('focus', '";
            // line 253
            echo ($context["smartsearch_field"] ?? null);
            echo "', function(e) {  
    var smartsearch = \$(this).parent().find('.smartsearch');
    if (smartsearch.find('.items>.item').length > 0) {
        smartsearch.show();
    }
}); 
\$(document).mouseup(function (e) {
    var container = \$('";
            // line 260
            echo ($context["smartsearch_field"] ?? null);
            echo "');                    
    if (!container.is(e.target) && container.has(e.target).length === 0) { 
        container.parent().find('.smartsearch').hide();
    }
});
</script>
";
        }
        // line 267
        if (((($context["buyoneclick_status_product"] ?? null) || ($context["buyoneclick_status_category"] ?? null)) || ($context["buyoneclick_status_module"] ?? null))) {
            // line 268
            echo "<div class=\"modal\" id=\"boc_order\">
</div>
<div id=\"boc_success\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div class=\"text-center\">";
            // line 274
            echo ($context["buyoneclick_success_field"] ?? null);
            echo "</div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
  \$('body').on('click', '.boc_order_btn', function(event) {
    if(!\$(\".dropdown-bg\").hasClass(\"active\")) {
      \$(\".dropdown-bg\").addClass(\"active\");
    }
    \$.ajax({
      url: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$(event.target).button('loading');
        \$('#boc_order').empty();
        \$('#boc_order').append('<div class=\"lds-rolling\"><div></div></div>');
      },
      complete: function() {
        \$(event.target).button('reset');
      },
      success: function(json) {
        \$('.alert, .text-danger').remove();
        \$('.form-group').removeClass('has-error');
        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));
              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              }
            }
          }

          if (json['error']['recurring']) {
            \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
          }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
        } else {
          \$(\"#boc_order\").addClass('active');
          \$('#boc_order').empty();
          \$('#boc_order').html(json['success']);
          ";
            // line 322
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 323
            echo "        }

        \$(\".btn-close\").on(\"click\", function() {
          \$(\".modal\").removeClass(\"active\");
          \$(\".dropdown-bg\").removeClass(\"active\");
        })
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
      }
    });
  });
  \$('body').on('click', '.button_fast_checkout', function(event) {
    if(!\$(\".dropdown-bg\").hasClass(\"active\")) {
      \$(\".dropdown-bg\").addClass(\"active\");
    }
    var for_post = {};
    for_post.product_id = \$(this).attr('data-product_id');
    \$.ajax({
      url: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
      type: 'post',
      data: for_post,
      dataType: 'json',
      beforeSend: function() {
        \$(event.target).button('loading');
      },
      complete: function() {
        \$(event.target).button('reset');
      },
      success: function(json) {
        \$('.alert, .text-danger').remove();
        \$('.form-group').removeClass('has-error');
        if (json['redirect']) {
          location = json['redirect'];
        } else {
          // console.log(json);
          \$(\"#boc_order\").addClass('active');
          \$('#boc_order').empty();
          \$('#boc_order').html(json['success']);
          ";
            // line 362
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 363
            echo "        }
        \$(\".btn-close\").on(\"click\", function() {
          \$(\".modal\").removeClass(\"active\");
          \$(\".dropdown-bg\").removeClass(\"active\");
        })
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
      }
    });
  });
</script>
";
        }
        // line 376
        echo "<script>
// Ajax cart quantity
function updateCart(key, quantity, flag) {
  if (qnty == '') return;
  var qnty = Number(\$('input[name=\\'' + key + '\\']').val());

  if(flag != 0) {
    qnty += Number(quantity);
  }

  \$.ajax({
    type: 'post',
    data: 'quantity[' + key + ']='+qnty,
    url: 'index.php?route=checkout/cart/edit',
    dataType: 'html',
    success: function(data) {
        \$('#cart > ul > span').load('index.php?route=common/cart/info ul li');
    }
  });
}
</script>
<script>
  \$.jMaskGlobals.translation[\"a\"] = \$.jMaskGlobals.translation[\"0\"];
  delete \$.jMaskGlobals.translation[\"0\"];
</script>
";
        // line 401
        if ( !(isset($context["microdatapro_main_flag"]) || array_key_exists("microdatapro_main_flag", $context))) {
            echo ($context["microdatapro"] ?? null);
            echo " ";
            $context["microdatapro_main_flag"] = 1;
        }
        echo " ";
        // line 402
        if ( !(isset($context["microdatapro_main_flag"]) || array_key_exists("microdatapro_main_flag", $context))) {
            echo ($context["microdatapro"] ?? null);
        }
        echo " ";
        // line 403
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "speedy/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 403,  913 => 402,  906 => 401,  879 => 376,  864 => 363,  860 => 362,  819 => 323,  815 => 322,  764 => 274,  756 => 268,  754 => 267,  744 => 260,  734 => 253,  695 => 217,  654 => 178,  652 => 177,  634 => 161,  625 => 160,  616 => 159,  607 => 158,  598 => 157,  589 => 156,  581 => 155,  574 => 153,  571 => 152,  562 => 151,  553 => 150,  545 => 149,  542 => 148,  533 => 147,  524 => 146,  516 => 145,  510 => 144,  506 => 142,  504 => 141,  484 => 124,  480 => 123,  477 => 122,  475 => 121,  472 => 120,  459 => 118,  455 => 117,  442 => 115,  438 => 114,  432 => 113,  421 => 112,  413 => 111,  409 => 109,  400 => 107,  396 => 106,  393 => 105,  391 => 104,  387 => 102,  381 => 99,  377 => 98,  373 => 97,  363 => 90,  359 => 89,  355 => 88,  351 => 87,  347 => 86,  342 => 84,  335 => 80,  332 => 79,  327 => 78,  322 => 75,  316 => 73,  313 => 72,  308 => 70,  303 => 69,  300 => 68,  292 => 65,  286 => 63,  283 => 62,  279 => 60,  272 => 59,  265 => 58,  259 => 57,  253 => 55,  250 => 54,  246 => 52,  237 => 51,  228 => 50,  220 => 49,  214 => 48,  208 => 46,  206 => 45,  201 => 43,  192 => 39,  185 => 38,  174 => 36,  170 => 35,  164 => 34,  158 => 33,  152 => 32,  146 => 31,  140 => 30,  134 => 29,  129 => 27,  123 => 24,  119 => 23,  115 => 21,  111 => 19,  104 => 18,  97 => 17,  90 => 16,  83 => 15,  76 => 14,  70 => 13,  67 => 12,  65 => 11,  60 => 10,  50 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/footer.twig", "");
    }
}
