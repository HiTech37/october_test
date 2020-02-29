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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/partials/nav.htm */
class __TwigTemplate_bfae65de19d494c1c0f9828ad97065fca758d19003063ae41424cf20ce170efd extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 4
        echo "
";
        // line 25
        echo "
<div class=\"container\">
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 27)) {
            // line 28
            echo "        <ul class=\"nav nav-tabs pull-right\">
            ";
            // line 29
            echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
            echo "
        </ul>
    ";
        }
        // line 32
        echo "</div>";
    }

    // line 5
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "    ";
            $macros["nav"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 9)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 9)) ? ("child-active") : (""));
                echo "\">
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 10), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10), "html", null, true);
                echo "</a>

            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                <ul>";
                    echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
                    echo "</ul>
            ";
                }
                // line 15
                echo "        </li>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    <li role=\"presentation\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isActive", [], "any", false, false, false, 18)) ? ("active") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isChildActive", [], "any", false, false, false, 18)) ? ("child-active") : (""));
            echo "\">
      <a href=\"";
            // line 19
            echo "login";
            echo "\">Login</a>
    </li>
    <li role=\"presentation\" class=\"";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isActive", [], "any", false, false, false, 21)) ? ("active") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isChildActive", [], "any", false, false, false, 21)) ? ("child-active") : (""));
            echo "\">
      <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 21,  124 => 19,  117 => 18,  109 => 15,  103 => 13,  101 => 12,  94 => 10,  87 => 9,  83 => 8,  80 => 7,  77 => 6,  64 => 5,  60 => 32,  54 => 29,  51 => 28,  49 => 27,  45 => 25,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Custom navigation implementation that only shows 2 levels deep #}

{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\">
            <a href=\"{{ item.url }}\">{{ item.title }}</a>

            {% if item.items %}
                <ul>{{ nav.render_menu(item.items) }}</ul>
            {% endif %}
        </li>

    {% endfor %}
    <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\">
      <a href=\"{{ 'login' }}\">Login</a>
    </li>
    <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\">
      <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
    </li>
{% endmacro %}

<div class=\"container\">
    {% if mainMenu.menuItems %}
        <ul class=\"nav nav-tabs pull-right\">
            {{ nav.render_menu(mainMenu.menuItems) }}
        </ul>
    {% endif %}
</div>", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/nav.htm", "");
    }
}
