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

/* C:\laragon\www\OctoberLaravelOffical/themes/vue-institute/partials/pages/banner-slider.htm */
class __TwigTemplate_df7ec0615364a2d244a0db8a0205dcc2ddd1daa38dedbdefc38dad8e035b35fc extends \Twig\Template
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
        echo "<div class=\"banner-slider slick_slider slick-arrows-style1\" data-slick='{\"slidesToShow\": 1, \"slidesToScroll\": 1, \"arrows\":true, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":0, \"infinite\":true, \"initialSlide\":2, \"responsive\": [{\"breakpoint\":870,\"settings\":{\"slidesToShow\": 1}} , {\"breakpoint\":525,\"settings\":{\"slidesToShow\": 1}}]}'>
    <!-- banner-slide -->
    <div class=\"banner-slide\">
        <img class=\"img-fluid lazyload\"  data-src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/tvchdpi.jpg");
        echo "\" alt=\"slider-image\" />
        <div class=\"banner-caption\">
            <div class=\"info\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"banner-text ttm-textcolor-white text-center\">
                                <div class=\"logo-icon slideInUp animated mx-auto\">
                                    <img class=\"img-fluid d-inline-block lazyload \"  data-src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oq_logo.png");
        echo "\" style=\"width: 200px;\">
                                </div>
                                <div class=\"slideInUp animated text font-weight-normal mt-10\"><strong>OLD SITE:institut saytining eski versiyasini quyidagi havola orqali ishlatishingiz mumkin. <a href=\"#\" ><span class=\"ttm-textcolor-skincolor\">BU YERGA!</span></a></strong>  </div>  
                                <div class=\"mt-10 mb-15\">
                                    <h2 class=\"slideInUp animated\">Toshkent viloyati <span class=\"ttm-textcolor-skincolor\">Chirchiq davlat pedagogika</span> instituti</h2>
                                </div>
                                <h3 class=\"slideInUp animated font-weight-normal ttm-md-hide\">SITE BETTA: 2020.05</h3>                        
                                <div class=\"slideInUp animated mt-50 res-991-mt-20\">
                                    <a href=\"home-3.html#\" class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white\">To'liqroq o'qish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-slide -->
    <div class=\"banner-slide \">
        <img class=\"img-fluid lazyload \" data-src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/korona_virus.jpg");
        echo "\" alt=\"slider-image\"/>
        <div class=\"banner-caption\">
            <div class=\"info\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"banner-text ttm-textcolor-white text-center\">
                                <div class=\"slideInUp animated ttm-shap ttm-bgcolor-skincolor pt-10 pl-20 pr-20 pb-10 ttm-textcolor-white d-inline-block\">UYDA QOLING! TA'LIM OLING!</div>
                                <div class=\"mt-15 mb-15\">
                                    <h2 class=\"slideInUp animated\">COVID-19</h2>
                                    <h2 class=\"slideInUp animated\">BILIM OLISHGA XALAQIT BERA OLMAYDI!</h2>
                                </div>
                                <div class=\"slideInUp animated text font-weight-normal mt-10\"><strong> Toshkent viloyati Chirchiq davlat pedagogika instituti <span class=\"ttm-textcolor-skincolor\">sirtqi taʼlim 1-bosqich talabalari diqqatiga!</span></a></strong> </div>   
                                <div class=\"slideInUp animated text\">Institutning COVID-19 ga oid so'ngi eloni. </div>
                                <div class=\"slideInUp animated mt-50 res-991-mt-20\">
                                    <a href=\"home-3.html#\" class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white\">O'qish uchun</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/banner-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner-slider slick_slider slick-arrows-style1\" data-slick='{\"slidesToShow\": 1, \"slidesToScroll\": 1, \"arrows\":true, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":0, \"infinite\":true, \"initialSlide\":2, \"responsive\": [{\"breakpoint\":870,\"settings\":{\"slidesToShow\": 1}} , {\"breakpoint\":525,\"settings\":{\"slidesToShow\": 1}}]}'>
    <!-- banner-slide -->
    <div class=\"banner-slide\">
        <img class=\"img-fluid lazyload\"  data-src=\"{{ 'assets/images/slides/tvchdpi.jpg'|theme }}\" alt=\"slider-image\" />
        <div class=\"banner-caption\">
            <div class=\"info\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"banner-text ttm-textcolor-white text-center\">
                                <div class=\"logo-icon slideInUp animated mx-auto\">
                                    <img class=\"img-fluid d-inline-block lazyload \"  data-src=\"{{ 'assets/images/oq_logo.png'|theme }}\" style=\"width: 200px;\">
                                </div>
                                <div class=\"slideInUp animated text font-weight-normal mt-10\"><strong>OLD SITE:institut saytining eski versiyasini quyidagi havola orqali ishlatishingiz mumkin. <a href=\"#\" ><span class=\"ttm-textcolor-skincolor\">BU YERGA!</span></a></strong>  </div>  
                                <div class=\"mt-10 mb-15\">
                                    <h2 class=\"slideInUp animated\">Toshkent viloyati <span class=\"ttm-textcolor-skincolor\">Chirchiq davlat pedagogika</span> instituti</h2>
                                </div>
                                <h3 class=\"slideInUp animated font-weight-normal ttm-md-hide\">SITE BETTA: 2020.05</h3>                        
                                <div class=\"slideInUp animated mt-50 res-991-mt-20\">
                                    <a href=\"home-3.html#\" class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white\">To'liqroq o'qish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-slide -->
    <div class=\"banner-slide \">
        <img class=\"img-fluid lazyload \" data-src=\"{{ 'assets/images/slides/korona_virus.jpg'|theme }}\" alt=\"slider-image\"/>
        <div class=\"banner-caption\">
            <div class=\"info\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"banner-text ttm-textcolor-white text-center\">
                                <div class=\"slideInUp animated ttm-shap ttm-bgcolor-skincolor pt-10 pl-20 pr-20 pb-10 ttm-textcolor-white d-inline-block\">UYDA QOLING! TA'LIM OLING!</div>
                                <div class=\"mt-15 mb-15\">
                                    <h2 class=\"slideInUp animated\">COVID-19</h2>
                                    <h2 class=\"slideInUp animated\">BILIM OLISHGA XALAQIT BERA OLMAYDI!</h2>
                                </div>
                                <div class=\"slideInUp animated text font-weight-normal mt-10\"><strong> Toshkent viloyati Chirchiq davlat pedagogika instituti <span class=\"ttm-textcolor-skincolor\">sirtqi taʼlim 1-bosqich talabalari diqqatiga!</span></a></strong> </div>   
                                <div class=\"slideInUp animated text\">Institutning COVID-19 ga oid so'ngi eloni. </div>
                                <div class=\"slideInUp animated mt-50 res-991-mt-20\">
                                    <a href=\"home-3.html#\" class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white\">O'qish uchun</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
</div>
</div>", "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/banner-slider.htm", "");
    }
}
