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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizda/default.htm */
class __TwigTemplate_020e8e2c2b048cba37ac59caaa7b45a64a61db3e10ec7cb2c25ee1d7747cecc5 extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizda/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>This is the default markup for component BizHaqimizda</p>

<small>You can delete this file if you want</small>
", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/plugins/raxmatilla/bizhaqimizda/components/bizhaqimizda/default.htm", "");
    }
}
