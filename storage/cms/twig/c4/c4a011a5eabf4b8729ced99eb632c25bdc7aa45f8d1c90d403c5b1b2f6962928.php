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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/general/header.htm */
class __TwigTemplate_1e8cd165d45bc98a475e700ac646b4130ebb46b41dca1ccb86c998e993a366f2 extends \Twig\Template
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
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"keywords\" content=\"HTML5 Template\" />
<meta name=\"description\" content=\"Academics and Education Html Template\" />
<meta name=\"author\" content=\"https://www.themetechmount.com/\" />
<meta name=\"viewport\" content=\" width=device-width, initial-scale=1, maximum-scale=1\" />
<title>Uniaro &#8211; Academics and Education Html Template </title>


<!-- favicon icon -->
<link rel=\"shortcut icon\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" />


<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/combined.css");
        echo "\"/> 



<!-- <style>

    .container {
    max-width: 1140px;
}
</style> -->





</head>";
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/general/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"keywords\" content=\"HTML5 Template\" />
<meta name=\"description\" content=\"Academics and Education Html Template\" />
<meta name=\"author\" content=\"https://www.themetechmount.com/\" />
<meta name=\"viewport\" content=\" width=device-width, initial-scale=1, maximum-scale=1\" />
<title>Uniaro &#8211; Academics and Education Html Template </title>


<!-- favicon icon -->
<link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" />


<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/combined.css'|theme }}\"/> 



<!-- <style>

    .container {
    max-width: 1140px;
}
</style> -->





</head>", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/general/header.htm", "");
    }
}
