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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/hisoblagichcompo/default.htm */
class __TwigTemplate_6fb385114fdccf7c7f594339bf6925133487b5b60dbb4832f3f947dbaaa758a2 extends \Twig\Template
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
        echo "<p>This is the default markup for component Hisoblagich</p>

<small>You can delete this file if you want</small>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/hisoblagichcompo/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>This is the default markup for component Hisoblagich</p>

<small>You can delete this file if you want</small>
", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/hisoblagichcompo/default.htm", "");
    }
}
