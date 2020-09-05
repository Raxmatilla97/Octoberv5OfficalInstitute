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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizdacompo/default.htm */
class __TwigTemplate_0eb1123b06a70dd23193b48ea7a850aa12deffce8cea551d705d4600e01d71e3 extends \Twig\Template
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
        echo "<p>This is the default markup for component BizHaqimizda</p>

<small>You can delete this file if you want</small>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["BizHaqimizdaComponent"] ?? null), "bizhaqimizda", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "h2", [], "any", false, false, false, 6), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizdacompo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>This is the default markup for component BizHaqimizda</p>

<small>You can delete this file if you want</small>

{% for post in BizHaqimizdaComponent.bizhaqimizda %}
    {{ post.h2 }}
{% endfor %}", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizdacompo/default.htm", "");
    }
}
