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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/partials/snippets/login.htm */
class __TwigTemplate_cb02d3dbaeff51de3de556e8973d6e95ba1fa96277dc350b9940e582dae20e31 extends \Twig\Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "    <p>You are logged in</p>
    <p>
        <a href=\"";
            // line 4
            echo RainLab\Pages\Classes\Page::url("clients");
            echo "\" class=\"btn btn-default\">
            Access Client Area
        </a>
    </p>
";
        } else {
            // line 9
            echo "    ";
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin", ["redirect" => RainLab\Pages\Classes\Page::url("clients"), "class" => "module-form"]]);
            // line 12
            echo "
        <label>";
            // line 13
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
        <input type=\"text\" name=\"login\" value=\"\" class=\"text\" />

        <label>Password</label>
        <input type=\"password\" name=\"password\" value=\"\" class=\"text\" />
        <button type=\"submit\" class=\"submit\">Sign in</button>
    ";
            // line 19
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"";
            // line 23
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
            echo "\">
                Forgot password?
            </a>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
            echo "\">
                Sign up
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/snippets/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  73 => 23,  66 => 19,  57 => 13,  54 => 12,  51 => 9,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
    <p>You are logged in</p>
    <p>
        <a href=\"{{ 'clients'|staticPage }}\" class=\"btn btn-default\">
            Access Client Area
        </a>
    </p>
{% else %}
    {{ form_ajax('onSignin', {
        redirect: 'clients'|staticPage,
        class: 'module-form'
    }) }}
        <label>{{ loginAttributeLabel }}</label>
        <input type=\"text\" name=\"login\" value=\"\" class=\"text\" />

        <label>Password</label>
        <input type=\"password\" name=\"password\" value=\"\" class=\"text\" />
        <button type=\"submit\" class=\"submit\">Sign in</button>
    {{ form_close() }}

    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"{{ 'forgot-password'|page }}\">
                Forgot password?
            </a>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"{{ 'account'|page }}\">
                Sign up
            </a>
        </div>
    </div>
{% endif %}", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/partials/snippets/login.htm", "");
    }
}
