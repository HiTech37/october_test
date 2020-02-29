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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/partials/footer.htm */
class __TwigTemplate_08ef4fe9db1908ef01886a50a0303d7e9f4b70ef6d6855f8bde9a639b668d416 extends \Twig\Template
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
        echo "<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", [], "any", false, false, false, 4)) {
            // line 5
            echo "            <ul class=\"menu-links\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                    <li class=\"head-link ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 7)) ? ("active") : (""));
                echo "\">
                        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["childItem"]) {
                        // line 12
                        echo "                            <li class=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["childItem"], "isActive", [], "any", false, false, false, 12)) ? ("active") : (""));
                        echo "\">
                                <a href=\"";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childItem"], "url", [], "any", false, false, false, 13), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childItem"], "title", [], "any", false, false, false, 13), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        ";
        }
        // line 20
        echo "
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
                ";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 38
        echo "            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 52
        echo "<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  144 => 52,  142 => 51,  133 => 44,  125 => 38,  121 => 37,  115 => 34,  99 => 20,  95 => 18,  89 => 17,  86 => 16,  75 => 13,  70 => 12,  65 => 11,  63 => 10,  56 => 8,  51 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        {% if footerMenu.menuItems %}
            <ul class=\"menu-links\">
                {% for item in footerMenu.menuItems %}
                    <li class=\"head-link {{ item.isActive ? 'active' : '' }}\">
                        <a href=\"{{ item.url }}\">{{ item.title }}</a>
                    </li>
                    {% if item.items %}
                        {% for childItem in item.items %}
                            <li class=\"{{ childItem.isActive ? 'active' : '' }}\">
                                <a href=\"{{ childItem.url }}\">{{ childItem.title }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </ul>
        {% endif %}

        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                </ul>
                {% content 'contact/details' %}
            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright {{ \"now\"|date(\"Y\") }} Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

{# This script splits the footer menu in to 3 columns #}
{% put scripts %}
<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
{% endput %}", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/footer.htm", "");
    }
}
