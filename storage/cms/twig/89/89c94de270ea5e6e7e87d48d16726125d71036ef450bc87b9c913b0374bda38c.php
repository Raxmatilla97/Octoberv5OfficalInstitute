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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/footer.htm */
class __TwigTemplate_885a5e248667c938dae298f4f6fbf25b5c93300156d6c0f96824161aa9a70cc2 extends \Twig\Template
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
        echo "<!--footer start-->
     <footer class=\"footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix\">
        <div class=\"second-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area\">
                        <div class=\"widget widget_text clearfix\">
                            <div class=\"footer-logo\">
                                <img id=\"footer-logo-img\" style=\"max-height: 105px;\" class=\"img-center lazyload\" data-src=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oq_logo.png"), ["mode" => "crop", "quality" => "80"]]);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"textwidget widget-text\">
                                <p class=\"pb-10 pr-30 res-575-pr-0\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Toshkent viloyati Chirchiq davlat pedagogika instituti web sayti."]);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"widget widget_timing clearfix\">
                           <h3 class=\"widget-title\">Bog'lanish</h3>
                           <div class=\"ttm-timelist-block-wrapper\">
                               <ul class=\"ttm-timelist-block pr-15\">
                                   <li>Chirchiq shahri, Amir Temur ko'chasi 104 uy</li>
                                   <li>\t+99870 716-68-05</li>
                                   <li>tvchdpi@edu.uz</li>
                               </ul>
                           </div>
                       </div> 
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 widget-area\">
                        <div class=\"ftco-footer-widget mb-4 ml-md-4\">
            
             
 <div class=\"mapouter\" ><div class=\"gmap_canvas\"><iframe width=\"100%\" height=\"440\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Chirchik%20Social%20Economy%20College%2C%20Chirchik%2C%20%D0%A3%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe></a></div><style>.mapouter{position:relative;text-align:right;height:300;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300;width:100%;}</style></div>
  
  </div>
                    </div>
                  
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area\">
                        <div class=\"widget widget_nav_menu clearfix\" style=\"margin-left: 20px;\">
                           <h3 class=\"widget-title\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Foydali havolalar"]);
        echo "</h3>
                            <ul id=\"menu-footer-services\">
                                <li><a href=\"\">Elektron ta'lim tizimi</a></li>
                                <li><a href=\"\">Elektron kutubxona</a></li>
                                <li><a href=\"\">Email pochta</a></li>
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottom-footer-text text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                    
                        <div class=\"d-sm-flex flex-row align-items-center justify-content-center pb-15\">
                            <img data-src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" class=\"img-fluid lazyload\" alt=\"award-one\">
                            <div class=\"ml-30 pl-30 border-left res-575-ml-0 res-575-pl-0 res-575-mt-20\">
                                <img style=\"height: 40px;\" data-src=\"";
        // line 58
        echo "/storage/app/media/20-09-10raxi-dev.jpg";
        echo "\" class=\"img-fluid lazyload\" alt=\"award-two\">
                            </div>
                        </div>
                        <div class=\"text-center pb-15\">Copyright © 2020 Created by <a href=\"https://#/\">RA : Raxmatilla Fayziyev TSMG-18/3K</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->";
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 58,  81 => 37,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--footer start-->
     <footer class=\"footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix\">
        <div class=\"second-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area\">
                        <div class=\"widget widget_text clearfix\">
                            <div class=\"footer-logo\">
                                <img id=\"footer-logo-img\" style=\"max-height: 105px;\" class=\"img-center lazyload\" data-src=\"{{ 'assets/images/oq_logo.png'|theme |resize (  { mode: 'crop', quality: '80' })}}\" alt=\"\">
                            </div>
                            <div class=\"textwidget widget-text\">
                                <p class=\"pb-10 pr-30 res-575-pr-0\">{{\"Toshkent viloyati Chirchiq davlat pedagogika instituti web sayti.\"|_}}</p>
                            </div>
                        </div>
                        <div class=\"widget widget_timing clearfix\">
                           <h3 class=\"widget-title\">Bog'lanish</h3>
                           <div class=\"ttm-timelist-block-wrapper\">
                               <ul class=\"ttm-timelist-block pr-15\">
                                   <li>Chirchiq shahri, Amir Temur ko'chasi 104 uy</li>
                                   <li>\t+99870 716-68-05</li>
                                   <li>tvchdpi@edu.uz</li>
                               </ul>
                           </div>
                       </div> 
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 widget-area\">
                        <div class=\"ftco-footer-widget mb-4 ml-md-4\">
            
             
 <div class=\"mapouter\" ><div class=\"gmap_canvas\"><iframe width=\"100%\" height=\"440\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Chirchik%20Social%20Economy%20College%2C%20Chirchik%2C%20%D0%A3%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe></a></div><style>.mapouter{position:relative;text-align:right;height:300;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300;width:100%;}</style></div>
  
  </div>
                    </div>
                  
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area\">
                        <div class=\"widget widget_nav_menu clearfix\" style=\"margin-left: 20px;\">
                           <h3 class=\"widget-title\">{{\"Foydali havolalar\"|_}}</h3>
                            <ul id=\"menu-footer-services\">
                                <li><a href=\"\">Elektron ta'lim tizimi</a></li>
                                <li><a href=\"\">Elektron kutubxona</a></li>
                                <li><a href=\"\">Email pochta</a></li>
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottom-footer-text text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                    
                        <div class=\"d-sm-flex flex-row align-items-center justify-content-center pb-15\">
                            <img data-src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" class=\"img-fluid lazyload\" alt=\"award-one\">
                            <div class=\"ml-30 pl-30 border-left res-575-ml-0 res-575-pl-0 res-575-mt-20\">
                                <img style=\"height: 40px;\" data-src=\"{{\"/storage/app/media/20-09-10raxi-dev.jpg\"}}\" class=\"img-fluid lazyload\" alt=\"award-two\">
                            </div>
                        </div>
                        <div class=\"text-center pb-15\">Copyright © 2020 Created by <a href=\"https://#/\">RA : Raxmatilla Fayziyev TSMG-18/3K</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/footer.htm", "");
    }
}
