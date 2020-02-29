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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/partials/snippets/news.htm */
class __TwigTemplate_5fefba1c572e0ac43ed11ed79f7fd2a81d393f682d7f874f8384e5e895dc7752 extends \Twig\Template
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
        echo "<div class=\"news-container\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 2), "take", [0 => 5], "method", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"module-news\">
            <div class=\"calendar\">
                <span class=\"month\">";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 5), "M"), "html", null, true);
            echo "</span>
                <span class=\"day\">";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 6), "d"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"news\">
                <a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 9)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>.
                <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <p>There are no posts to display. You know what they say, no news is good news!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/snippets/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  74 => 14,  65 => 10,  59 => 9,  53 => 6,  49 => 5,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"news-container\">
    {% for post in blogPosts.posts.take(5) %}
        <div class=\"module-news\">
            <div class=\"calendar\">
                <span class=\"month\">{{ post.published_at|date('M') }}</span>
                <span class=\"day\">{{ post.published_at|date('d') }}</span>
            </div>
            <div class=\"news\">
                <a href=\"{{ 'blog/post'|page({ slug: post.slug }) }}\">{{ post.title }}</a>.
                <p>{{ post.excerpt }}</p>
            </div>
        </div>
    {% else %}
        <p>There are no posts to display. You know what they say, no news is good news!</p>
    {% endfor %}
</div>", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/snippets/news.htm", "");
    }
}
