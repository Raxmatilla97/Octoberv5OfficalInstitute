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

/* C:\laragon\www\OctoberLaravelOffical/themes/vue-institute/partials/pages/top-bar.htm */
class __TwigTemplate_91e82f630c069190f75e302f80ba42bee86229f05078b305e902a1b5ea61e42f extends \Twig\Template
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
        echo "<!-- top_bar -->
      <div class=\"top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12 d-flex flex-row align-items-center\">
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_icon\"><i class=\"fa fa-envelope-o\"></i></div><a href=\"mailto:tvchdpi@edu.uz\">tvchdpi@edu.uz</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_icon\"><i class=\"fa fa-phone\"></i></div>+99870 716-68-05
                    </div>
                    <div class=\"top_bar_contact_item ml-auto\">
                        <a href=\"#\">Test</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <a href=\"#\">Admin panel</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_social\">
                            <ul class=\"social-icons\">
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Facebook\" tabindex=\"-1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Twitter\" tabindex=\"-1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Flickr\" tabindex=\"-1\"><i class=\"fa fa-flickr\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Linkedin\" tabindex=\"-1\"><i class=\"fa fa-linkedin\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor\" href=\"#\">Savol-javob forumi </a>
                </div>
            </div>
        </div>
    </div><!-- top_bar end-->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/top-bar.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- top_bar -->
      <div class=\"top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12 d-flex flex-row align-items-center\">
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_icon\"><i class=\"fa fa-envelope-o\"></i></div><a href=\"mailto:tvchdpi@edu.uz\">tvchdpi@edu.uz</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_icon\"><i class=\"fa fa-phone\"></i></div>+99870 716-68-05
                    </div>
                    <div class=\"top_bar_contact_item ml-auto\">
                        <a href=\"#\">Test</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <a href=\"#\">Admin panel</a>
                    </div>
                    <div class=\"top_bar_contact_item\">
                        <div class=\"top_bar_social\">
                            <ul class=\"social-icons\">
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Facebook\" tabindex=\"-1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Twitter\" tabindex=\"-1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Flickr\" tabindex=\"-1\"><i class=\"fa fa-flickr\"></i></a>
                                </li>
                                <li><a class=\"tooltip-bottom\" target=\"_blank\" href=\"#\" data-tooltip=\"Linkedin\" tabindex=\"-1\"><i class=\"fa fa-linkedin\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor\" href=\"#\">Savol-javob forumi </a>
                </div>
            </div>
        </div>
    </div><!-- top_bar end-->", "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/top-bar.htm", "");
    }
}
