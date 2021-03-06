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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/banner-slider.htm */
class __TwigTemplate_1dbfdc4f8654fd5ca5629027299294e92527e9c8468607cfc8a4e841fec5b4df extends \Twig\Template
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
<<<<<<< HEAD
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oq_logo.png"), ["mode" => "crop", "quality" => "80"]]);
=======
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oq_logo.png");
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
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
<<<<<<< HEAD
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/korona_virus.jpg"), ["mode" => "crop", "quality" => "80"]]);
=======
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/korona_virus.jpg");
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
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
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/banner-slider.htm";
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
<<<<<<< HEAD
                                    <img class=\"img-fluid d-inline-block lazyload \"  data-src=\"{{ 'assets/images/oq_logo.png'|theme |resize ( { mode: 'crop', quality: '80' }) }}\" style=\"width: 200px;\">
=======
                                    <img class=\"img-fluid d-inline-block lazyload \"  data-src=\"{{ 'assets/images/oq_logo.png'|theme }}\" style=\"width: 200px;\">
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
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
<<<<<<< HEAD
        <img class=\"img-fluid lazyload \" data-src=\"{{ 'assets/images/slides/korona_virus.jpg'|theme |resize ( { mode: 'crop', quality: '80' }) }}\" alt=\"slider-image\"/>
=======
        <img class=\"img-fluid lazyload \" data-src=\"{{ 'assets/images/slides/korona_virus.jpg'|theme }}\" alt=\"slider-image\"/>
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
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
</div>", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/banner-slider.htm", "");
    }
}
