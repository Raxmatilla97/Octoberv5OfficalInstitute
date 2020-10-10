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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm */
class __TwigTemplate_7b2b171f08f7e981f2ec360de45a61423a92a6b5db25997a4c2b21a2209946d7 extends \Twig\Template
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
                            <h5>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM AXBOROT XIZMATI"]);
        echo "</h5>
                            <h2 class=\"title\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM E'LONLARI"]);
        echo "</h2>
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["Elonlar"] ?? null), "elonlarlist", [], "any", false, false, false, 22);
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 24
            echo "                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-course -->
                    <div class=\"featured-imagebox featured-imagebox-course\">
                        <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                            <img class=\"img-fluid lazyload\" data-src=\"";
            // line 28
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 28)), 386, 345, ["mode" => "crop", "quality" => "70"]]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "\"> 
                        </div>
                        <div class=\"featured-content featured-content-post\">
                            <div class=\"featured-content-post-inner\">
                                <div class=\"post-title featured-title\">
                                    <h5><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></h5>
                                </div>
                               <!--  <div class=\"post-desc featured-desc\">
                                   <p>Are you excited to learn the web design, but not start yet...</p>
                               </div> -->
                            </div>
                            <div class=\"ttm-course-box-meta\">
                                <div class=\"ttm-enrolled\">
                                    <span class=\"ttm-count ttm-meta-line\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "status", [], "any", false, false, false, 41), "html", null, true);
            echo "</span>
                                    <span class=\"ttm-comments ttm-meta-line\"><i class=\"fa fa-comment-o\"></i>2</span>
                                </div>  
                                <span class=\"ttm-lp-price\"><ins> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "categoriya", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</ins></span>                            
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                
                
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mt-30 res-991-mt-20 mb_25 text-center\"><p>";
        // line 59
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
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  130 => 53,  121 => 51,  109 => 44,  103 => 41,  90 => 33,  80 => 28,  74 => 24,  68 => 23,  66 => 22,  52 => 11,  48 => 10,  37 => 1,);
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
                            <h5>{{\"OTM AXBOROT XIZMATI\"|_}}</h5>
                            <h2 class=\"title\">{{\"OTM E'LONLARI\"|_}}</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 4, \"slidesToScroll\": 4, \"arrows\":false, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":0, \"infinite\":true, \"initialSlide\":2, \"responsive\": [{\"breakpoint\":1100,\"settings\":{\"slidesToShow\": 3}} , {\"breakpoint\":777,\"settings\":{\"slidesToShow\": 2}},
            {\"breakpoint\":590,\"settings\":{\"slidesToShow\": 1}}]}'>
              
              
              {% set records = Elonlar.elonlarlist %}
                {% for record in records %}
                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-course -->
                    <div class=\"featured-imagebox featured-imagebox-course\">
                        <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                            <img class=\"img-fluid lazyload\" data-src=\"{{ record.image|media| resize (386,345, { mode: 'crop', quality: '70' })}}\" alt=\"{{ record.title }}\"> 
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
    <!--course-section-->", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/popular-cource.htm", "");
    }
}
