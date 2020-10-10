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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/whay-choose.htm */
class __TwigTemplate_e734b1f5dfcf0ce415a231020691c49827d05ab2ff15b1696e4c7863ea6ad23a extends \Twig\Template
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
        echo "<!-- Axborot xizmati uchun component -->
  ";
        // line 2
        $context["axborot"] = twig_get_attribute($this->env, $this->source, ($context["AxborotCompoment"] ?? null), "axborot", [], "any", false, false, false, 2);
        // line 3
        echo "<!-- Axborotlarni soni -->
  ";
        // line 4
        $context["axborotcount"] = twig_get_attribute($this->env, $this->source, ($context["AxborotCompoment"] ?? null), "axborotcount", [], "any", false, false, false, 4);
        // line 5
        echo "<style>
    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    </style>
<!--why_choose2-section -->
        <div class=\"ttm-row why_choose2-section clearfix\">
            <div class=\"container\" style=\"max-width: 1500px\">
                <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- section title -->
                        <div class=\"section-title title-style-center_text\">
                            <div class=\"title-header\">
                                <h5>";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM AXBOROT XIZMATI"]);
        echo "</h5>
                                <h3 class=\"title\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["BOSHQA YANGILIKLAR VA QIZIQARLI MAQOLALAR"]);
        echo "</h3>
                            </div>
                            <div class=\"heading-seperator\"><span></span></div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row end-->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"ttm-tabs tabs-style-01\" data-effect=\"fadeIn\">
                            <ul class=\"tabs clearfix\">
                                <li class=\"tab active\"><a href=\"#\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Axborot makoni"]);
        echo "</a></li>
                                <li class=\"tab\"><a href=\"#\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ilmiy maqolalar"]);
        echo "</a></li>                   
                                <li class=\"tab\"><a href=\"#\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Majmualar"]);
        echo "</a></li>
                            </ul>
                            <div class=\"content-tab\">
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <img class=\"img-fluid lazyload\" data-src=\"";
        // line 43
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), ["/storage/app/media/sayt%20sozlamlari%20suratlari/axborot_makoni.jpg", 566]);
        echo "\" alt=\"image\">
                                            <div class=\"featured-icon-box icon-align-before-content mt_30 ml-auto\">
                                                <div class=\"featured-icon\">
                                                    <div class=\"ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-skincolor ttm-icon_element-size-sm\">
                                                        <i class=\"flaticon-book\"></i>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class=\"featured-content \" style=\"width: 200px;margin-right: 460px;bottom: 10px;background: white;border-color: #ff4f01;border-style: solid;\">
                                                    <div class=\"featured-title\">
                                                        <h5>";
        // line 54
        echo twig_escape_filter($this->env, ($context["axborotcount"] ?? null), "html", null, true);
        echo " ta</h5>
                                                    </div>
                                                    <div class=\"featured-desc\">
                                                        <p>Ma'lumotlar ko'lami</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> Axborot makoni</strong> bu talabalarga qiziqarli va ilmiy ko'rinishdagi yangilik va maqolalarni chop etib boriladigan rukun.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                                                                    
                                                                                                     
    
    
                                                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["axborot"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 72
            echo "         

                                                            <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 74), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 74), "html", null, true);
            echo "</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 74), "Y-m-d"), "html", null, true);
            echo " <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "user", [], "any", false, false, false, 74), "first_name", [], "any", false, false, false, 74), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "user", [], "any", false, false, false, 74), "last_name", [], "any", false, false, false, 74), "html", null, true);
            echo " <img src=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "user", [], "any", false, false, false, 74), "avatar", [], "any", false, false, false, 74), "getThumb", [0 => 80, 1 => 80, 2 => "crop"], "method", false, false, false, 74), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"avatar\"> 
                                                            </li>
                                                            <hr>
                                                            
                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                                            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "

                                                    
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Barcha maqolalarni ko'rish"]);
        echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- content-inner end-->
                                
                                
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mb-20\">
                                                <h4 class=\"font-weight-normal\">OTM ilmiy maqolalari</h4>
                                                <p>Chirchiq davlat pedagogika instituti professor o'qituvchilar tomonidan yozilgan ilmiy maqolalar va elektron jurnallar bo'limi.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                
                                                
                                                <div class=\"col-xs-12 col-sm-6 col-md-12 col-lg-12 widget-area\">
                                                    <div class=\"widget style2 widget-out-link clearfix\">
                                                      
                                                        <ul class=\"widget-post ttm-recent-post-list pr-5\">
                                                            <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/blog-one-150x150.jpg");
        echo "\"></a>
                                                                <span class=\"post-date\">August 12, 2019 <strong>Chop etuvchi: Fayziyev Raxmatilla </strong></span> 
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                            <hr>
                                                               <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/blog-one-150x150.jpg");
        echo "\"></a>
                                                                <span class=\"post-date\">August 12, 2019</span>
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                            <hr>
                                                                <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/blog-one-150x150.jpg");
        echo "\"></a>
                                                                <span class=\"post-date\">August 12, 2019</span>
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                        
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ko'proq ilmiy maqolalarni o'qish"]);
        echo "</a>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <img class=\"img-fluid lazyload\" data-src=\"";
        // line 137
        echo "/storage/app/media/sayt%20sozlamlari%20suratlari/ilmiy_maqolalar.png";
        echo "\" alt=\"image\">
                                        </div>
                                    </div>
                                </div><!-- content-inner end-->
                                <!-- content-inner -->
                                
<<<<<<< HEAD
                           
                                
=======
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                         <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
<<<<<<< HEAD
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> ";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["So'ngi majmualar"]);
        echo "</strong> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Eng so'ngi majmualar bilan tanishing"]);
        echo "</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                    
                                                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["majmualarCompoment"] ?? null), "majmuacomp", [], "any", false, false, false, 154));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 155
            echo "                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 155), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 155), "html", null, true);
            echo "</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 155), "M d, Y"), "html", null, true);
            echo " <strong style=\"color: #ff4f01;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chop etuvchi"]);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 155), "first_name", [], "any", false, false, false, 155), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 155), "last_name", [], "any", false, false, false, 155), "html", null, true);
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 155), "avatar", [], "any", false, false, false, 155), "path", [], "any", false, false, false, 155), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>       
                                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                                    
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                         <div class=\"col-md-6\" style=\"background: #f4f6f9 !important;\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                  <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> ";
        // line 168
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mashhur majmualar"]);
        echo "</strong> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Eng ko'p ko'rilgan majmualar"]);
        echo "</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["majmualarCompoment"] ?? null), "majmuacomp2", [], "any", false, false, false, 171));
        foreach ($context['_seq'] as $context["_key"] => $context["post2"]) {
            // line 172
            echo "                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post2"], "slug", [], "any", false, false, false, 172), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post2"], "title", [], "any", false, false, false, 172), "html", null, true);
            echo "</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post2"], "created_at", [], "any", false, false, false, 172), "M d, Y"), "html", null, true);
            echo " <strong style=\"color: #ff4f01;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chop etuvchi"]);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post2"], "user", [], "any", false, false, false, 172), "first_name", [], "any", false, false, false, 172), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post2"], "user", [], "any", false, false, false, 172), "last_name", [], "any", false, false, false, 172), "html", null, true);
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post2"], "user", [], "any", false, false, false, 172), "avatar", [], "any", false, false, false, 172), "path", [], "any", false, false, false, 172), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>       
                                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                                        
                                                      
=======
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> \"So'ngi majmualar\"</strong> Saytga joylashtirilgan eng so'ngi majmualar</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                             <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                           <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Barcha maqolalarni ko'rish"]);
        echo "</a>
                                            </div>
                                        </div>
                                         <div class=\"col-md-6\" style=\"background: #f4f6f9 !important;\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> \"Eng ko'p ko'rilgan\"</strong> Foydalanuvchilar tomonidna eng ko'p etibor berilgan majmualar.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                             <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                           <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
<<<<<<< HEAD
        // line 183
=======
        // line 191
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Barcha maqolalarni ko'rish"]);
        echo "</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- content-inner end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--why_choose2-section end-->";
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/whay-choose.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  354 => 183,  345 => 176,  322 => 172,  318 => 171,  310 => 168,  299 => 159,  276 => 155,  272 => 154,  263 => 150,  247 => 137,  240 => 133,  227 => 123,  218 => 117,  209 => 111,  184 => 89,  174 => 81,  165 => 79,  145 => 74,  141 => 72,  136 => 71,  116 => 54,  102 => 43,  92 => 36,  88 => 35,  84 => 34,  70 => 23,  66 => 22,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
=======
        return array (  307 => 191,  280 => 167,  247 => 137,  240 => 133,  227 => 123,  218 => 117,  209 => 111,  184 => 89,  174 => 81,  165 => 79,  145 => 74,  141 => 72,  136 => 71,  116 => 54,  102 => 43,  92 => 36,  88 => 35,  84 => 34,  70 => 23,  66 => 22,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
    }

    public function getSourceContext()
    {
        return new Source("<!-- Axborot xizmati uchun component -->
  {% set axborot = AxborotCompoment.axborot %}
<!-- Axborotlarni soni -->
  {% set axborotcount = AxborotCompoment.axborotcount %}
<style>
    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    </style>
<!--why_choose2-section -->
        <div class=\"ttm-row why_choose2-section clearfix\">
            <div class=\"container\" style=\"max-width: 1500px\">
                <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- section title -->
                        <div class=\"section-title title-style-center_text\">
                            <div class=\"title-header\">
                                <h5>{{\"OTM AXBOROT XIZMATI\"|_}}</h5>
                                <h3 class=\"title\">{{\"BOSHQA YANGILIKLAR VA QIZIQARLI MAQOLALAR\"|_}}</h3>
                            </div>
                            <div class=\"heading-seperator\"><span></span></div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row end-->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"ttm-tabs tabs-style-01\" data-effect=\"fadeIn\">
                            <ul class=\"tabs clearfix\">
                                <li class=\"tab active\"><a href=\"#\">{{\"Axborot makoni\"|_}}</a></li>
                                <li class=\"tab\"><a href=\"#\">{{\"Ilmiy maqolalar\"|_}}</a></li>                   
                                <li class=\"tab\"><a href=\"#\">{{\"Majmualar\"|_}}</a></li>
                            </ul>
                            <div class=\"content-tab\">
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <img class=\"img-fluid lazyload\" data-src=\"{{ '/storage/app/media/sayt%20sozlamlari%20suratlari/axborot_makoni.jpg'| resize(566) }}\" alt=\"image\">
                                            <div class=\"featured-icon-box icon-align-before-content mt_30 ml-auto\">
                                                <div class=\"featured-icon\">
                                                    <div class=\"ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-skincolor ttm-icon_element-size-sm\">
                                                        <i class=\"flaticon-book\"></i>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class=\"featured-content \" style=\"width: 200px;margin-right: 460px;bottom: 10px;background: white;border-color: #ff4f01;border-style: solid;\">
                                                    <div class=\"featured-title\">
                                                        <h5>{{axborotcount}} ta</h5>
                                                    </div>
                                                    <div class=\"featured-desc\">
                                                        <p>Ma'lumotlar ko'lami</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> Axborot makoni</strong> bu talabalarga qiziqarli va ilmiy ko'rinishdagi yangilik va maqolalarni chop etib boriladigan rukun.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                                                                    
                                                                                                     
    
    
                                                        {% for record in axborot %}
         

                                                            <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"{{record.slug}}\">{{record.title}}</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> {{record.created_at|date('Y-m-d')}} <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> {{record.user.first_name }} {{record.user.last_name }} <img src=\" {{ record.user.avatar.getThumb(80,80, 'crop') }}\" alt=\"Avatar\" class=\"avatar\"> 
                                                            </li>
                                                            <hr>
                                                            
                                                        {% else %}
                                                            <li class=\"no-data\">{{ noRecordsMessage }}</li>
                                                        {% endfor %}


                                                    
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">{{ \"Barcha maqolalarni ko'rish\"|_ }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- content-inner end-->
                                
                                
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mb-20\">
                                                <h4 class=\"font-weight-normal\">OTM ilmiy maqolalari</h4>
                                                <p>Chirchiq davlat pedagogika instituti professor o'qituvchilar tomonidan yozilgan ilmiy maqolalar va elektron jurnallar bo'limi.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                
                                                
                                                <div class=\"col-xs-12 col-sm-6 col-md-12 col-lg-12 widget-area\">
                                                    <div class=\"widget style2 widget-out-link clearfix\">
                                                      
                                                        <ul class=\"widget-post ttm-recent-post-list pr-5\">
                                                            <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"{{ 'assets/images/blog/blog-one-150x150.jpg'|theme}}\"></a>
                                                                <span class=\"post-date\">August 12, 2019 <strong>Chop etuvchi: Fayziyev Raxmatilla </strong></span> 
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                            <hr>
                                                               <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"{{ 'assets/images/blog/blog-one-150x150.jpg'|theme}}\"></a>
                                                                <span class=\"post-date\">August 12, 2019</span>
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                            <hr>
                                                                <li>
                                                                <a href=\"blog-single.html\"><img class=\" lazyloaded\" data-src=\"images/blog/blog-one-150x150.jpg\" alt=\"post-img\" src=\"{{ 'assets/images/blog/blog-one-150x150.jpg'|theme}}\"></a>
                                                                <span class=\"post-date\">August 12, 2019</span>
                                                                <a href=\"blog-single.html\">I Turned A Challenge Into A Positive Thing</a>
                                                            </li>
                                                        
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">{{\"Ko'proq ilmiy maqolalarni o'qish\"|_}}</a>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <img class=\"img-fluid lazyload\" data-src=\"{{ '/storage/app/media/sayt%20sozlamlari%20suratlari/ilmiy_maqolalar.png' }}\" alt=\"image\">
                                        </div>
                                    </div>
                                </div><!-- content-inner end-->
                                <!-- content-inner -->
                                
<<<<<<< HEAD
                           
                                
=======
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
                                <!-- content-inner -->
                                <div class=\"content-inner\">
                                    <div class=\"row\">
                                         <div class=\"col-md-6\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
<<<<<<< HEAD
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> {{\"So'ngi majmualar\"|_}}</strong> {{\"Eng so'ngi majmualar bilan tanishing\"|_}}</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                    
                                                    {% for post in majmualarCompoment.majmuacomp %}
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"{{post.slug}}\">{{post.title}}</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> {{post.created_at|date('M d, Y')}} <strong style=\"color: #ff4f01;\">{{\"Chop etuvchi\"|_}}:</strong> {{post.user.first_name}} {{post.user.last_name}}  <img src=\"{{post.user.avatar.path}}\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>       
                                                      {% endfor%}
                                                    
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                         <div class=\"col-md-6\" style=\"background: #f4f6f9 !important;\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                  <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> {{\"Mashhur majmualar\"|_}}</strong> {{\"Eng ko'p ko'rilgan majmualar\"|_}}</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                    {% for post2 in majmualarCompoment.majmuacomp2 %}
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"{{post2.slug}}\">{{post2.title}}</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> {{post2.created_at|date('M d, Y')}} <strong style=\"color: #ff4f01;\">{{\"Chop etuvchi\"|_}}:</strong> {{post2.user.first_name}} {{post2.user.last_name}}  <img src=\"{{post2.user.avatar.path}}\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>       
                                                      {% endfor%}
                                                        
                                                      
=======
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> \"So'ngi majmualar\"</strong> Saytga joylashtirilgan eng so'ngi majmualar</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                             <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                           <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">{{ \"Barcha maqolalarni ko'rish\"|_ }}</a>
                                            </div>
                                        </div>
                                         <div class=\"col-md-6\" style=\"background: #f4f6f9 !important;\">
                                            <div class=\"pt-15 pl-15 pr-15 pb-15 res-991-p-0 res-991-mt-20\">
                                                <h4 class=\"font-weight-normal\"><strong style=\"color: #ff4f01;\"> \"Eng ko'p ko'rilgan\"</strong> Foydalanuvchilar tomonidna eng ko'p etibor berilgan majmualar.</p>
                                                <div class=\"pt-10 pb-30 res-991-pb-15\">
                                                    <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                                        <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                             <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
                                                        
                                                           <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><b><a href=\"#\">Popular Online Courses Popular Online Courses Popular Online Courses</a></b></div> <br> <strong style=\"color: #ff4f01;\"> Chop etildi: </strong> 2020-avgust <strong style=\"color: #ff4f01;\">Chop etuvchi:</strong> Fayziyev Raxmatilla  <img src=\"http://www.staroceans.org.s3-website-us-east-1.amazonaws.com/w3c/img_avatar.png\" alt=\"Avatar\" class=\"avatar\"> 
                                                        </li>
                                                        <hr>
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
                                                        
                                                      
                                                    
                                                    </ul>
                                                </div>
                                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">{{ \"Barcha maqolalarni ko'rish\"|_ }}</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- content-inner end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--why_choose2-section end-->", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/whay-choose.htm", "");
    }
}
