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
class __TwigTemplate_353d23e9fd2638d9c49e0e8eaf7f9bb7173428708fc1731c53e88f73c2709a25 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"copyright\">
      ";
        // line 4
        if (($context["logo"] ?? null)) {
            // line 5
            echo "      <div class=\"logo\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\"></div>
      ";
        }
        // line 7
        echo "      <p>";
        echo ($context["powered"] ?? null);
        echo "</p>
      ";
        // line 8
        if (((((((($context["footer_socials"] ?? null) && ($context["instagram"] ?? null)) || ($context["facebook"] ?? null)) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null)) || ($context["linkedin"] ?? null)) || ($context["pinterest"] ?? null))) {
            // line 9
            echo "      <ul class=\"social_links\">
        ";
            // line 10
            if (($context["instagram"] ?? null)) {
                echo "<li class=\"instagram\"><a href=\"";
                echo ($context["instagram"] ?? null);
                echo "\"></a></li>";
            }
            // line 11
            echo "        ";
            if (($context["facebook"] ?? null)) {
                echo "<li class=\"facebook\"><a href=\"";
                echo ($context["facebook"] ?? null);
                echo "\"></a></li>";
            }
            // line 12
            echo "        ";
            if (($context["twitter"] ?? null)) {
                echo "<li class=\"twitter\"><a href=\"";
                echo ($context["twitter"] ?? null);
                echo "\"></a></li>";
            }
            // line 13
            echo "        ";
            if (($context["youtube"] ?? null)) {
                echo "<li class=\"youtube\"><a href=\"";
                echo ($context["youtube"] ?? null);
                echo "\"></a></li>";
            }
            // line 14
            echo "        ";
            if (($context["linkedin"] ?? null)) {
                echo "<li class=\"linkedin\"><a href=\"";
                echo ($context["linkedin"] ?? null);
                echo "\"></a></li>";
            }
            // line 15
            echo "        ";
            if (($context["pinterest"] ?? null)) {
                echo "<li class=\"pinterest\"><a href=\"";
                echo ($context["pinterest"] ?? null);
                echo "\"></a></li>";
            }
            // line 16
            echo "      </ul>
      ";
        }
        // line 18
        echo "    </div>
    <div class=\"footer_item categories\">
      <h3>";
        // line 20
        echo ($context["text_catalog"] ?? null);
        echo "</h3>
      ";
        // line 21
        echo ($context["menu"] ?? null);
        echo "
    </div>
    <div class=\"footer_item informations\">
      <h3>";
        // line 24
        echo ($context["text_information"] ?? null);
        echo "</h3>
      <ul class=\"footer_item_inner\">
        <li><a href=\"";
        // line 26
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 27
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 28
        echo ($context["compare"] ?? null);
        echo "\">";
        echo ($context["text_compare_page"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 29
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 30
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturers_page"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 33
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 33);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 33);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 36
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
      </ul>
    </div>
    <div class=\"footer_item contacts\">
      <h3>";
        // line 40
        echo ($context["text_contact"] ?? null);
        echo "</h3>
      <div class=\"footer_item_inner\">
        ";
        // line 42
        if (($context["footer_phones"] ?? null)) {
            // line 43
            echo "        <!-- <p>";
            echo ($context["text_telephone"] ?? null);
            echo "</p> -->
        <ul class=\"phones\">
          <li><a href=\"tel:";
            // line 45
            echo ($context["telephone"] ?? null);
            echo "\">";
            echo ($context["telephone"] ?? null);
            echo "</a></li>
          ";
            // line 46
            if (($context["telephone_2"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_2"] ?? null);
                echo "</a></li>";
            }
            // line 47
            echo "          ";
            if (($context["telephone_3"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_3"] ?? null);
                echo "</a></li>";
            }
            // line 48
            echo "          ";
            if (($context["telephone_4"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_4"] ?? null);
                echo "</a></li>";
            }
            // line 49
            echo "        </ul>
        ";
        }
        // line 51
        echo "        ";
        if ((((($context["footer_messengers"] ?? null) && ($context["telegram"] ?? null)) || ($context["viber"] ?? null)) || ($context["whatsapp"] ?? null))) {
            // line 52
            echo "        <!-- <p>";
            echo ($context["text_messenger"] ?? null);
            echo "</p> -->
        <ul class=\"messenger_links\">
          ";
            // line 54
            if (($context["telegram"] ?? null)) {
                echo "<li class=\"telegram\"><a href=\"https://t.me/";
                echo ($context["telegram"] ?? null);
                echo "\"></a></li>";
            }
            // line 55
            echo "          ";
            if (($context["viber"] ?? null)) {
                echo "<li class=\"viber\"><a href=\"viber://chat?number=";
                echo ($context["viber"] ?? null);
                echo "\"></a></li>";
            }
            // line 56
            echo "          ";
            if (($context["whatsapp"] ?? null)) {
                echo "<li class=\"whatsapp\"><a href=\"whatsapp://send?phone=";
                echo ($context["whatsapp"] ?? null);
                echo "\"></a></li>";
            }
            // line 57
            echo "        </ul>
        ";
        }
        // line 59
        echo "        ";
        if (($context["footer_email"] ?? null)) {
            // line 60
            echo "        <p>";
            echo ($context["text_email"] ?? null);
            echo "</p>
        <ul>
          <li><a href=\"mailto:";
            // line 62
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></li>
        </ul>
        ";
        }
        // line 65
        echo "        ";
        if (($context["footer_address"] ?? null)) {
            // line 66
            echo "        <p>";
            echo ($context["text_address"] ?? null);
            echo "</p>
        <div class=\"address\">";
            // line 67
            echo ($context["address"] ?? null);
            echo "</div>
        ";
        }
        // line 69
        echo "        ";
        if (($context["footer_map"] ?? null)) {
            // line 70
            echo "        <div class=\"map\" style=\"display: flex;margin-top: 5px\">";
            echo ($context["footer_map_code"] ?? null);
            echo "</div>
        ";
        }
        // line 72
        echo "      </div>
  </div>
  </div>
</footer>
";
        // line 76
        if ((($context["footer_payments_status"] ?? null) && ($context["footer_payments"] ?? null))) {
            // line 77
            echo "<div class=\"footer_payments_icons\">
  ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer_payments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["footer_payment"]) {
                // line 79
                echo "  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footer_payment"], "image", [], "any", false, false, false, 79);
                echo "\" alt=\"\">
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "</div>
";
        }
        // line 83
        echo "<script src=\"catalog/view/javascript/dc_speedy_scripts.js";
        if (($context["developer_mode"] ?? null)) {
            echo "?v=";
            echo ($context["developer_mode"] ?? null);
        }
        echo "\" type=\"text/javascript\"></script>
";
        // line 84
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
        // line 85
        if (($context["code_footer_js"] ?? null)) {
            echo "<script>";
            echo ($context["code_footer_js"] ?? null);
            echo "</script>";
        }
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 87
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 87);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 87);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 87);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 90
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
        // line 92
        echo "<script src=\"catalog/view/javascript/jquery.cookie.min.js\"></script>
";
        // line 93
        if (($context["widgets_modal_cookie_description"] ?? null)) {
            // line 94
            echo "<div class=\"cookie_modal\">
  ";
            // line 95
            echo ($context["widgets_modal_cookie_description"] ?? null);
            echo "
  <span class=\"btn\">";
            // line 96
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
        // line 113
        if (($context["widgets_messenger_status"] ?? null)) {
            // line 114
            echo "<div class=\"widgets_messenger_link\"></div>
<ul class=\"widgets_messenger_content\">
  <li><a href=\"tel:";
            // line 116
            echo ($context["telephone"] ?? null);
            echo "\">";
            echo ($context["telephone"] ?? null);
            echo "</a></li>
  ";
            // line 117
            if (($context["telephone_2"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_2"] ?? null);
                echo "</a></li>";
            }
            // line 118
            echo "  ";
            if (($context["telephone_3"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_3"] ?? null);
                echo "</a></li>";
            }
            // line 119
            echo "  ";
            if (($context["telephone_4"] ?? null)) {
                echo "<li><a href=\"tel:";
                echo ($context["telephone"] ?? null);
                echo "\">";
                echo ($context["telephone_4"] ?? null);
                echo "</a></li>";
            }
            // line 120
            echo "  <span></span>
  ";
            // line 121
            if (($context["telegram"] ?? null)) {
                echo "<li class=\"telegram\"><a href=\"https://t.me/";
                echo ($context["telegram"] ?? null);
                echo "\">";
                echo ($context["text_telegram"] ?? null);
                echo "</a></li>";
            }
            // line 122
            echo "  ";
            if (($context["viber"] ?? null)) {
                echo "<li class=\"viber\"><a href=\"viber://chat?number=";
                echo ($context["viber"] ?? null);
                echo "\">";
                echo ($context["text_viber"] ?? null);
                echo "</a></li>";
            }
            // line 123
            echo "  ";
            if (($context["whatsapp"] ?? null)) {
                echo "<li class=\"whatsapp\"><a href=\"whatsapp://send?phone=";
                echo ($context["whatsapp"] ?? null);
                echo "\">";
                echo ($context["text_whatsapp"] ?? null);
                echo "</a></li>";
            }
            // line 124
            echo "  <span></span>
  <li><a href=\"mailto:";
            // line 125
            echo ($context["email"] ?? null);
            echo "\">";
            echo ($context["email"] ?? null);
            echo "</a></li>
  <span></span>
  ";
            // line 127
            if (($context["instagram"] ?? null)) {
                echo "<li class=\"instagram\"><a href=\"";
                echo ($context["instagram"] ?? null);
                echo "\">";
                echo ($context["text_instagram"] ?? null);
                echo "</a></li>";
            }
            // line 128
            echo "  ";
            if (($context["facebook"] ?? null)) {
                echo "<li class=\"facebook\"><a href=\"";
                echo ($context["facebook"] ?? null);
                echo "\">";
                echo ($context["text_facebook"] ?? null);
                echo "</a></li>";
            }
            // line 129
            echo "  ";
            if (($context["twitter"] ?? null)) {
                echo "<li class=\"twitter\"><a href=\"";
                echo ($context["twitter"] ?? null);
                echo "\">";
                echo ($context["text_twitter"] ?? null);
                echo "</a></li>";
            }
            // line 130
            echo "  ";
            if (($context["youtube"] ?? null)) {
                echo "<li class=\"youtube\"><a href=\"";
                echo ($context["youtube"] ?? null);
                echo "\">";
                echo ($context["text_youtube"] ?? null);
                echo "</a></li>";
            }
            // line 131
            echo "  ";
            if (($context["linkedin"] ?? null)) {
                echo "<li class=\"linkedin\"><a href=\"";
                echo ($context["linkedin"] ?? null);
                echo "\">";
                echo ($context["text_linkedin"] ?? null);
                echo "</a></li>";
            }
            // line 132
            echo "  ";
            if (($context["pinterest"] ?? null)) {
                echo "<li class=\"pinterest\"><a href=\"";
                echo ($context["pinterest"] ?? null);
                echo "\">";
                echo ($context["text_pinterest"] ?? null);
                echo "</a></li>";
            }
            // line 133
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
        // line 149
        if (($context["smartsearch"] ?? null)) {
            // line 150
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
            // line 189
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
            // line 225
            echo ($context["smartsearch_field"] ?? null);
            echo "', function(e) {  
    var smartsearch = \$(this).parent().find('.smartsearch');
    if (smartsearch.find('.items>.item').length > 0) {
        smartsearch.show();
    }
}); 
\$(document).mouseup(function (e) {
    var container = \$('";
            // line 232
            echo ($context["smartsearch_field"] ?? null);
            echo "');                    
    if (!container.is(e.target) && container.has(e.target).length === 0) { 
        container.parent().find('.smartsearch').hide();
    }
});
</script>
";
        }
        // line 239
        if (((($context["buyoneclick_status_product"] ?? null) || ($context["buyoneclick_status_category"] ?? null)) || ($context["buyoneclick_status_module"] ?? null))) {
            // line 240
            echo "<div class=\"modal\" id=\"boc_order\">
</div>
<div id=\"boc_success\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div class=\"text-center\">";
            // line 246
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
            // line 294
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 295
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
            // line 334
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 335
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
        // line 348
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
</body></html>";
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
        return array (  810 => 348,  795 => 335,  791 => 334,  750 => 295,  746 => 294,  695 => 246,  687 => 240,  685 => 239,  675 => 232,  665 => 225,  626 => 189,  585 => 150,  583 => 149,  565 => 133,  556 => 132,  547 => 131,  538 => 130,  529 => 129,  520 => 128,  512 => 127,  505 => 125,  502 => 124,  493 => 123,  484 => 122,  476 => 121,  473 => 120,  464 => 119,  455 => 118,  447 => 117,  441 => 116,  437 => 114,  435 => 113,  415 => 96,  411 => 95,  408 => 94,  406 => 93,  403 => 92,  390 => 90,  386 => 89,  373 => 87,  369 => 86,  363 => 85,  352 => 84,  344 => 83,  340 => 81,  331 => 79,  327 => 78,  324 => 77,  322 => 76,  316 => 72,  310 => 70,  307 => 69,  302 => 67,  297 => 66,  294 => 65,  286 => 62,  280 => 60,  277 => 59,  273 => 57,  266 => 56,  259 => 55,  253 => 54,  247 => 52,  244 => 51,  240 => 49,  231 => 48,  222 => 47,  214 => 46,  208 => 45,  202 => 43,  200 => 42,  195 => 40,  186 => 36,  179 => 35,  168 => 33,  164 => 32,  158 => 31,  152 => 30,  146 => 29,  140 => 28,  134 => 27,  128 => 26,  123 => 24,  117 => 21,  113 => 20,  109 => 18,  105 => 16,  98 => 15,  91 => 14,  84 => 13,  77 => 12,  70 => 11,  64 => 10,  61 => 9,  59 => 8,  54 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/common/footer.twig", "");
    }
}
