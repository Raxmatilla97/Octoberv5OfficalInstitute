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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm */
class __TwigTemplate_e274a83add6cda6364e42be7c8643f3fdaa10cdebd8936afead1f390a7b3e3f6 extends \Twig\Template
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
        echo "<!--course-section-->
     <section class=\"ttm-row course-section ttm-bgcolor-grey clearfix\">
        <div class=\"container\" style=\"max-width: 1600px\">
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- section title -->
                    <div class=\"section-title title-style-center_text\">
                        <div class=\"title-header\">
                            <h5>OTM AXBOROT XIZMATI</h5>
                            <h2 class=\"title\">OTM E'LONLARI</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 4, \"slidesToScroll\": 4, \"arrows\":false, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":0, \"infinite\":true, \"initialSlide\":2, \"responsive\": [{\"breakpoint\":1100,\"settings\":{\"slidesToShow\": 3}} , {\"breakpoint\":777,\"settings\":{\"slidesToShow\": 2}},
            {\"breakpoint\":590,\"settings\":{\"slidesToShow\": 1}}]}'>
              
              
              ";
        // line 22
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 22);
        // line 23
        echo "                ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 23);
        // line 24
        echo "                ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 24);
        // line 25
        echo "                ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 25);
        // line 26
        echo "                ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 26);
        // line 27
        echo "                ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 27);
        // line 28
        echo "                
         
            
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 32
            echo "                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-course -->
                    <div class=\"featured-imagebox featured-imagebox-course\">
                        <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                            <img class=\"img-fluid lazyload\" data-src=\"";
            // line 36
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 36)), 386, 345, ["mode" => "crop", "quality" => "80"]]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "\"> 
                        </div>
                        <div class=\"featured-content featured-content-post\">
                            <div class=\"featured-content-post-inner\">
                                <div class=\"post-title featured-title\">
                                    <h5><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></h5>
                                </div>
                               <!--  <div class=\"post-desc featured-desc\">
                                   <p>Are you excited to learn the web design, but not start yet...</p>
                               </div> -->
                            </div>
                            <div class=\"ttm-course-box-meta\">
                                <div class=\"ttm-enrolled\">
                                    <span class=\"ttm-count ttm-meta-line\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "status", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                                    <span class=\"ttm-comments ttm-meta-line\"><i class=\"fa fa-comment-o\"></i>2</span>
                                </div>  
                                <span class=\"ttm-lp-price\"><ins> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "categoriya", [], "any", false, false, false, 52), "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</ins></span>                            
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                
                
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mt-30 res-991-mt-20 mb_25 text-center\"><p>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Yanada ko'proq e'lonlar bilan tanishish uchun"]);
        echo " <u><a href=\"home-3.html#\"><strong>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["BU YERGA BOSING."]);
        echo "</strong></a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--course-section-->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 67,  143 => 61,  134 => 59,  122 => 52,  116 => 49,  103 => 41,  93 => 36,  87 => 32,  82 => 31,  77 => 28,  74 => 27,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--course-section-->
     <section class=\"ttm-row course-section ttm-bgcolor-grey clearfix\">
        <div class=\"container\" style=\"max-width: 1600px\">
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- section title -->
                    <div class=\"section-title title-style-center_text\">
                        <div class=\"title-header\">
                            <h5>OTM AXBOROT XIZMATI</h5>
                            <h2 class=\"title\">OTM E'LONLARI</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 4, \"slidesToScroll\": 4, \"arrows\":false, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":0, \"infinite\":true, \"initialSlide\":2, \"responsive\": [{\"breakpoint\":1100,\"settings\":{\"slidesToShow\": 3}} , {\"breakpoint\":777,\"settings\":{\"slidesToShow\": 2}},
            {\"breakpoint\":590,\"settings\":{\"slidesToShow\": 1}}]}'>
              
              
              {% set records = builderList.records %}
                {% set displayColumn = builderList.displayColumn %}
                {% set noRecordsMessage = builderList.noRecordsMessage %}
                {% set detailsPage = builderList.detailsPage %}
                {% set detailsKeyColumn = builderList.detailsKeyColumn %}
                {% set detailsUrlParameter = builderList.detailsUrlParameter %}
                
         
            
                {% for record in records %}
                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-course -->
                    <div class=\"featured-imagebox featured-imagebox-course\">
                        <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                            <img class=\"img-fluid lazyload\" data-src=\"{{ record.image|media| resize (386,345, { mode: 'crop', quality: '80' })}}\" alt=\"{{ record.title }}\"> 
                        </div>
                        <div class=\"featured-content featured-content-post\">
                            <div class=\"featured-content-post-inner\">
                                <div class=\"post-title featured-title\">
                                    <h5><a href=\"{{ record.slug }}\">{{ record.title}}</a></h5>
                                </div>
                               <!--  <div class=\"post-desc featured-desc\">
                                   <p>Are you excited to learn the web design, but not start yet...</p>
                               </div> -->
                            </div>
                            <div class=\"ttm-course-box-meta\">
                                <div class=\"ttm-enrolled\">
                                    <span class=\"ttm-count ttm-meta-line\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>{{ record.status }}</span>
                                    <span class=\"ttm-comments ttm-meta-line\"><i class=\"fa fa-comment-o\"></i>2</span>
                                </div>  
                                <span class=\"ttm-lp-price\"><ins> {{ record.categoriya.title}}</ins></span>                            
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                
                    {% else %}
                        <li class=\"no-data\">{{ noRecordsMessage }}</li>
                    {% endfor %}
                
                
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mt-30 res-991-mt-20 mb_25 text-center\"><p>{{\"Yanada ko'proq e'lonlar bilan tanishish uchun\"|_}} <u><a href=\"home-3.html#\"><strong>{{\"BU YERGA BOSING.\"|_}}</strong></a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--course-section-->", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm", "");
    }
}
