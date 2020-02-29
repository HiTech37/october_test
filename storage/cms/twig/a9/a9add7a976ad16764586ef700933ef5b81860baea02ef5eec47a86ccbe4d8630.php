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

/* D:\xampp\htdocs\install-master/themes/rainlab-relax/pages/login.htm */
class __TwigTemplate_1d547ac7ffd785970dcbfef3d1d65340c5d8ce4e2d2ac6234d4a40e6c8bbfa5a extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "<div class=\"row\">

    <div class=\"col-md-12\">
        <div id=\"partialContactForm\">
          <div class=\"row\">

              <div class=\"col-md-6\">
                  <h3>Sign in</h3>
                  ";
            // line 10
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "              </div>

              <div class=\"col-md-6\">
                  ";
            // line 14
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "              </div>

          </div>
        </div>
    </div>
</div>


";
        } else {
            // line 24
            echo "
    ";
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "
    ";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "
    ";
            // line 29
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 30
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  90 => 29,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  73 => 24,  62 => 15,  58 => 14,  53 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}
<div class=\"row\">

    <div class=\"col-md-12\">
        <div id=\"partialContactForm\">
          <div class=\"row\">

              <div class=\"col-md-6\">
                  <h3>Sign in</h3>
                  {% partial account ~ '::signin' %}
              </div>

              <div class=\"col-md-6\">
                  {% partial account ~ '::register' %}
              </div>

          </div>
        </div>
    </div>
</div>


{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}", "D:\\xampp\\htdocs\\install-master/themes/rainlab-relax/pages/login.htm", "");
    }
}
