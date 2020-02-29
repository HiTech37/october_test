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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/partials/title.htm */
class __TwigTemplate_73cd009c207e21e05adfaaec350e9cd1f0426dd35bce62843354c1cf967ad415 extends \Twig\Template
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
        if ( !($context["bannerImage"] ?? null)) {
            // line 2
            echo "    ";
            $context["randomImage"] = [0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs"];
            // line 3
            echo "    ";
            $context["bannerImage"] = ((($context["banner"] ?? null)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(($context["banner"] ?? null))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env, ($context["randomImage"] ?? null))) . ".jpg"))));
        }
        // line 5
        echo "
<div class=\"title-image\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["bannerImage"] ?? null), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12))), "html", null, true);
        echo "</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                ";
        // line 18
        echo twig_escape_filter($this->env, ((($context["tagline"] ?? null)) ? (($context["tagline"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "meta_title", [], "any", false, false, false, 18))), "html", null, true);
        echo "
            </span>
        </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  58 => 12,  50 => 7,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not bannerImage %}
    {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}
    {% set bannerImage = banner ? banner|media : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}
{% endif %}

<div class=\"title-image\">
    <img src=\"{{ bannerImage }}\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>{{ title ?: this.page.title }}</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                {{ tagline ?: this.page.meta_title }}
            </span>
        </h2>
    </div>
</div>", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/title.htm", "");
    }
}
