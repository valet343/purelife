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

/* speedy/template/extension/module/speedy_dw_modal.twig */
class __TwigTemplate_23d867309f690cf7919ce6a7ae977ea9e98a3ad121c8b7c317aec87752d4220b extends \Twig\Template
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
        echo "<div class=\"modal quick_view_loading\" id=\"dwquickview-modal\">
\t<div class=\"wsx\"></div>\t\t
\t<div class=\"btn-close\"></div>
</div>
<script type=\"text/javascript\">
var dw_data = {\"btn\":\"";
        // line 6
        if (($context["btnquick"] ?? null)) {
            echo "<a href=\\\"#\\\" class=\\\"dw-icon\\\"><i class=\\\"fa fa-eye\\\"></i></a>";
        } else {
            echo "<a href=\\\"#\\\">Быстрый просмотр</a>";
        }
        echo "\", \"load\":\"<div class=\\\"load\\\"><img src=\\\"";
        echo ($context["loading_gif"] ?? null);
        echo "\\\" /></div>\"};
</script>
<script type=\"text/javascript\">
function livePrice(){
\t\$.ajax({
\t\ttype: 'POST',
\t\turl: 'index.php?route=extension/module/speedy_quick_view/live',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product  input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[name=\\'quantity\\']'),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif(json.success) {
\t\t\t\t\$('.after-price .dw-price-old').html(json.new_price.price);
\t\t\t\t\$('.after-price .dw-price-specail').html(json.new_price.special);
\t\t\t\t\$('.after-price .dw-price-specail').html('<span class=\"old-pr\">'+json.new_price.price+'</span> '+json.new_price.special);
\t\t\t\t\$('.after-price .dw-tax').html(json.new_price.tax);\t\t\t\t
\t\t\t}
\t\t}
\t});
}\t\t\t
\$('body').on('change', '#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\'], #product input[type=\\'checkbox\\'], #product select, #product textarea', function(){
\tlivePrice();
});
\$('body').on('keyup', '#product input[name=\\'quantity\\']', function(){
\tlivePrice();
});
</script> ";
    }

    public function getTemplateName()
    {
        return "speedy/template/extension/module/speedy_dw_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "speedy/template/extension/module/speedy_dw_modal.twig", "");
    }
}
