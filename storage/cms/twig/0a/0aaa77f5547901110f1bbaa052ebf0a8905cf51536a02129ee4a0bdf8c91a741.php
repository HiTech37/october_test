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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/content/static-pages/index.htm */
class __TwigTemplate_85eca4c937d3386232878a8d57c27ae6eb6cf5c5466fba9c3499b61eae70bbbb extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('news'        );
        // line 2
        echo "<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('login'        );
        // line 8
        echo "<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/content/static-pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  51 => 8,  49 => 7,  46 => 6,  44 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put news %}
<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
{% endput %}

{% put login %}
<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
{% endput %}", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/content/static-pages/index.htm", "");
    }
}
