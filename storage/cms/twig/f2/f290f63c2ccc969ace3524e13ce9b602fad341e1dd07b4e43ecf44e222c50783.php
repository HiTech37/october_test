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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/layouts/default.htm */
class __TwigTemplate_dce9026b9b2a82663420df3b1f969af56ec41739ed2bda664ff53aaf6c9b0ed1 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        
        

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"slider-wrapper title-style\">
                    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "                </div>

                ";
        // line 35
        $context["hasChildren"] = twig_get_attribute($this->env, $this->source, ((twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", [], "any", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", [], "any", false, false, false, 35)) : (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, false, 35))), "children", [], "any", false, false, false, 35);
        // line 36
        echo "
                <div class=\"content-area with-padding\">
                    ";
        // line 38
        if (($context["hasChildren"] ?? null)) {
            // line 39
            echo "                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"module-sidemenu\">
                                    ";
            // line 42
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, false, 42)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidemenu"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "                                </div>
                            </div>
                            <div class=\"col-md-9\">
                                ";
            // line 46
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
            // line 47
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 50
            echo "                        ";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                </div>
            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 70,  153 => 69,  148 => 66,  144 => 65,  129 => 52,  126 => 51,  123 => 50,  118 => 47,  116 => 46,  111 => 43,  106 => 42,  101 => 39,  99 => 38,  95 => 36,  93 => 35,  89 => 33,  85 => 32,  75 => 24,  71 => 23,  66 => 20,  62 => 19,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'meta' %}
    </head>
    <body>
        
        

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial \"header\" %}

            <!-- Nav -->
            <nav id=\"layout-nav\">
                {% partial \"nav\" %}
            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"slider-wrapper title-style\">
                    {% partial \"title\" %}
                </div>

                {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

                <div class=\"content-area with-padding\">
                    {% if hasChildren %}
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"module-sidemenu\">
                                    {% partial 'sidemenu' page=staticPage.page %}
                                </div>
                            </div>
                            <div class=\"col-md-9\">
                                {% page %}
                            </div>
                        </div>
                    {% else %}
                        {% page %}
                    {% endif %}
                </div>
            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        {% partial 'scripts' %}

    </body>
</html>", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/layouts/default.htm", "");
    }
}
