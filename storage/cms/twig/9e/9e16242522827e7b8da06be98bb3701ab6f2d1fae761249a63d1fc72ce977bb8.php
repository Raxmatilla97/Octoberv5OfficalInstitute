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

/* C:\laragon\www\OctoberLaravelOffical/themes/vue-institute/partials/general/footer.htm */
class __TwigTemplate_0101983eaed4048eeec728863be9215a74b4f622cab9c0a91ef9b4a47a3b2640 extends \Twig\Template
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
        echo "<!-- Javascript -->

<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/combined.js");
        echo "\"></script>
 
    



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/general/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Javascript -->

<script src=\"{{ '/assets/js/combined.js'|theme }}\"></script>
 
    



</body>
</html>", "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/general/footer.htm", "");
    }
}
