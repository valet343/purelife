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

/* common/footer.twig */
class __TwigTemplate_3f6f2d12fc98ba8b1f68a43bcbff4a5618e3db415b6bb6faebd5964ca64f092e extends \Twig\Template
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
        echo "<footer id=\"footer\">";
        echo ($context["text_footer"] ?? null);
        echo "<br />";
        echo ($context["text_version"] ?? null);
        echo "<br /><div class=\"buttons_update\">";
        if (($context["update_cms"] ?? null)) {
            echo "<div class=\"text_update_cms\"><a href=\"";
            echo ($context["link_update_cms"] ?? null);
            echo "\">";
            echo ($context["text_update_cms"] ?? null);
            echo "</a></div></div>";
        }
        echo "</footer>
";
        // line 2
        if ((($context["widget_fast_use"] ?? null) == 1)) {
            // line 3
            echo "\t<div class=\"widget_fast_use\">
\t\t<div class=\"widget_fast_use_bg\"></div>
\t\t<div class=\"widget_fast_use_link\">
\t\t\t<i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
\t\t</div>
\t\t<ul class=\"widget_fast_use_content\">
\t\t\t<li><a href=\"";
            // line 9
            echo ($context["wf_orders"] ?? null);
            echo "\"><i class=\"fa fa-shopping-cart fw\"></i> ";
            echo ($context["text_wf_orders"] ?? null);
            echo "</a></li>
\t\t\t<li><a href=\"";
            // line 10
            echo ($context["wf_customers"] ?? null);
            echo "\"><i class=\"fa fa-user fw\"></i> ";
            echo ($context["text_wf_customers"] ?? null);
            echo "</a></li>
\t\t\t<li><a href=\"";
            // line 11
            echo ($context["wf_coupons"] ?? null);
            echo "\"><i class=\"fa fa-share-alt fw\"></i> ";
            echo ($context["text_wf_coupons"] ?? null);
            echo "</a></li>
\t\t\t<li><a href=\"";
            // line 12
            echo ($context["wf_reviews"] ?? null);
            echo "\"><i class=\"fa fa-commenting fw\"></i> ";
            echo ($context["text_wf_reviews"] ?? null);
            echo "</a></li>
\t\t</ul>
\t</div>
\t<script>
\t\t//dc_Widget
\t\t\t\$(\".widget_fast_use_link\").on(\"click\", function() {
\t\t\t\t\$(this).toggleClass(\"active\");
\t\t\t\t\$(\".widget_fast_use\").toggleClass(\"active\");
\t\t\t\t\$(\".widget_fast_use_content\").toggleClass(\"active\");
\t\t\t})
\t\t\t\$(\".widget_fast_use_bg\").on('click', function(){
\t\t\t\t\$(\".widget_fast_use_link\").removeClass(\"active\");
\t\t\t\t\$(\".widget_fast_use\").removeClass(\"active\");
\t\t\t\t\$(\".widget_fast_use_content\").removeClass(\"active\");
\t\t\t})
\t</script>
";
        }
        // line 29
        echo "</div>
<script>
\t//dc_Scripts
\t\t//dc_DarkTheme
\t\t\t\$(\".change_theme\").on(\"click\", function() {
\t\t\t  if(\$(\"html\").hasClass(\"dark\")) {
\t\t\t  \t\$(\"html\").removeClass(\"dark\")
\t\t\t  \tlocalStorage.removeItem('dark_mode');
\t\t\t  } else {
\t\t\t  \tlocalStorage.setItem('dark_mode', '1');
\t\t\t  \t\$(\"html\").addClass(\"dark\")
\t\t\t  }
\t\t\t})
\t\t\tif (localStorage.getItem('dark_mode') == null) {
\t\t\t\t\$(\"html\").removeClass(\"dark\")
\t\t\t} else {
\t\t\t\t\$(\"html\").addClass(\"dark\")
\t\t\t}
</script>
";
        // line 48
        if (($context["autocomplete_url"] ?? null)) {
            // line 49
            echo "<script type=\"text/javascript\">
\t//dc_GeneratorURL
\tfunction seoUrlFill(string,pageType,lang='en',langId='1'){var delimiter='-',keyword=\$('input[name=\"'+pageType+'_seo_url[0]['+langId+']\"]'),abc={'ß':'ss','à':'a','á':'a','â':'a','ã':'a','ä':'a','å':'a','æ':'ae','ç':'c','è':'e','é':'e','ê':'e','ë':'e','ì':'i','í':'i','î':'i','ï':'i','ð':'d','ñ':'n','ò':'o','ó':'o','ô':'o','õ':'o','ö':'o','ő':'o','ø':'o','ù':'u','ú':'u','û':'u','ü':'u','ű':'u','ý':'y','þ':'th','ÿ':'y','α':'a','β':'b','γ':'g','δ':'d','ε':'e','ζ':'z','η':'h','θ':'8','ι':'i','κ':'k','λ':'l','μ':'m','ν':'n','ξ':'3','ο':'o','π':'p','ρ':'r','σ':'s','τ':'t','υ':'y','φ':'f','χ':'x','ψ':'ps','ω':'w','ά':'a','έ':'e','ί':'i','ό':'o','ύ':'y','ή':'h','ώ':'w','ς':'s','ϊ':'i','ΰ':'y','ϋ':'y','ΐ':'i','ş':'s','ı':'i','ç':'c','ü':'u','ö':'o','ğ':'g','а':'a','б':'b','в':'v','г':'g','д':'d','е':'e','ё':'yo','ж':'zh','з':'z','и':'i','й':'j','к':'k','л':'l','м':'m','н':'n','о':'o','п':'p','р':'r','с':'s','т':'t','у':'u','ф':'f','х':'h','ц':'c','ч':'ch','ш':'sh','щ':'sh','ъ':'','ы':'y','ь':'','э':'e','ю':'yu','я':'ya','є':'ye','і':'i','ї':'yi','ґ':'g','č':'c','ď':'d','ě':'e','ň':'n','ř':'r','š':'s','ť':'t','ů':'u','ž':'z','ą':'a','ć':'c','ę':'e','ł':'l','ń':'n','ó':'o','ś':'s','ź':'z','ż':'z','ā':'a','č':'c','ē':'e','ģ':'g','ī':'i','ķ':'k','ļ':'l','ņ':'n','š':'s','ū':'u','ž':'z','ө':'o','ң':'n','ү':'u','ә':'a','ғ':'g','қ':'q','ұ':'u','ა':'a','ბ':'b','გ':'g','დ':'d','ე':'e','ვ':'v','ზ':'z','თ':'th','ი':'i','კ':'k','ლ':'l','მ':'m','ნ':'n','ო':'o','პ':'p','ჟ':'zh','რ':'r','ს':'s','ტ':'t','უ':'u','ფ':'ph','ქ':'q','ღ':'gh','ყ':'qh','შ':'sh','ჩ':'ch','ც':'ts','ძ':'dz','წ':'ts','ჭ':'tch','ხ':'kh','ჯ':'j','ჰ':'h'};switch(lang){case'bg':abc['щ']='sht';abc['ъ']='a';break;case'uk':abc['и']='y';break;}
\tstring=string.toLowerCase();for(var k in abc){string=string.replace(RegExp(k,'g'),abc[k]);}
\tvar alnum=(typeof(XRegExp)==='undefined')?RegExp('[^a-z0-9]+','ig'):XRegExp('[^\\\\p{L}\\\\p{N}]+','ig');string=string.replace(alnum,delimiter);string=string.replace(RegExp('['+delimiter+']{2,}','g'),delimiter);string=string.replace(RegExp('(^'+delimiter+'|'+delimiter+'\$)','g'),'');if(keyword.length&&keyword.val()==''){keyword.val(string);}}
</script>
";
        }
        // line 56
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  125 => 49,  123 => 48,  102 => 29,  80 => 12,  74 => 11,  68 => 10,  62 => 9,  54 => 3,  52 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.twig", "");
    }
}
