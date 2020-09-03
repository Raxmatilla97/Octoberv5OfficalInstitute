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

/* C:\laragon\www\OctoberLaravelOffical/themes/vue-institute/partials/pages/team-tichers.htm */
class __TwigTemplate_b51b2aed95eccffb669362e129746f709993fc5a944195590462484b81a55044 extends \Twig\Template
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
        echo "<!--team-section-->
        <section class=\"ttm-row team-section tclearfix\">
            <div class=\"container-fluid\">
                <!-- section title -->
                <div class=\"section-title title-style-center_text\">
                    <div class=\"title-header\">
                        <h5>Talabalar tomonidan ovoz berish yo'li bilan anqilangan eng yaxshi o'qituvchilar</h5>
                        <h2 class=\"title\">Eng yaxshi o'qituvchilar</h2>
                    </div>
                    <div class=\"heading-seperator\"><span></span></div>
                </div><!-- section title end -->
                <!-- row -->
                <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 5, \"slidesToScroll\": 1, \"arrows\":false, \"autoplay\":false, \"infinite\":true, \"responsive\": [{\"breakpoint\":991,\"settings\":{\"slidesToShow\": 3}}, {\"breakpoint\":678,\"settings\":{\"slidesToShow\": 2}}, {\"breakpoint\":460,\"settings\":{\"slidesToShow\": 1}}]}'>
              
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 29
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                    
                             
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 57
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 84
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 111
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 138
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"";
        // line 165
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/oqituvchilar.png"), 350, 408.333, ["mode" => "crop", "quality" => "70"]]);
        echo "\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                    
                </div><!-- row end -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"mt-30 res-991-mt-20 mb_25 text-center\"><p>O'qituvchilarning to'liq reytingini ko'rishingiz uchun <u><a href=\"home-3.html#\"><strong>BU YERGA BOSING.</strong></a></u></p></div>
                    </div>
                </div>
            </div>
        </section>
        <!--team-section end-->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/team-tichers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 165,  188 => 138,  158 => 111,  128 => 84,  98 => 57,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--team-section-->
        <section class=\"ttm-row team-section tclearfix\">
            <div class=\"container-fluid\">
                <!-- section title -->
                <div class=\"section-title title-style-center_text\">
                    <div class=\"title-header\">
                        <h5>Talabalar tomonidan ovoz berish yo'li bilan anqilangan eng yaxshi o'qituvchilar</h5>
                        <h2 class=\"title\">Eng yaxshi o'qituvchilar</h2>
                    </div>
                    <div class=\"heading-seperator\"><span></span></div>
                </div><!-- section title end -->
                <!-- row -->
                <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 5, \"slidesToScroll\": 1, \"arrows\":false, \"autoplay\":false, \"infinite\":true, \"responsive\": [{\"breakpoint\":991,\"settings\":{\"slidesToShow\": 3}}, {\"breakpoint\":678,\"settings\":{\"slidesToShow\": 2}}, {\"breakpoint\":460,\"settings\":{\"slidesToShow\": 1}}]}'>
              
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                    
                             
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                           
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                        <!-- featured-imagebox-team -->
                        <div class=\"featured-imagebox featured-imagebox-team\">
                            <div class=\"ttm-team-box-view-overlay\">
                                <div class=\"featured-iconbox ttm-media-link\">
                                    <div class=\"media-block\">
                                        <ul class=\"social-icons\">
                                            <li class=\"social-twitter\"><a href=\"home-3.html#\"><i class=\"ti ti-twitter-alt\"></i></a></li>
                                            <li class=\"social-facebook\"><a href=\"home-3.html#\"><i class=\"ti ti-facebook\"></i></a></li>
                                            <li class=\"social-instagram\"><a href=\"home-3.html#\"><i class=\"ti ti-instagram\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"featured-thumbnail\">
                                    <img class=\"img-fluid lazyload\" data-src=\"{{ 'assets/images/oqituvchilar.png'|theme | resize (350,408.333,  { mode: 'crop', quality: '70' })}}\" alt=\"image\"> 
                                </div>
                            </div>
                            <div class=\"featured-content featured-content-team\">
                                <div class=\"featured-title\">
                                    <h5><a href=\"#\">O'qituvchi ism familyasi</a></h5>
                                </div>
                                <div class=\"team-position\">Ilmiy maqomi</div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                  
                    
                </div><!-- row end -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"mt-30 res-991-mt-20 mb_25 text-center\"><p>O'qituvchilarning to'liq reytingini ko'rishingiz uchun <u><a href=\"home-3.html#\"><strong>BU YERGA BOSING.</strong></a></u></p></div>
                    </div>
                </div>
            </div>
        </section>
        <!--team-section end-->", "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/team-tichers.htm", "");
    }
}
