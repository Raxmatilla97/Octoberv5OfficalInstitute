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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/blog-section.htm */
class __TwigTemplate_842f0d49a4e0e446295ee1e78e216049bd0673b2cce06318a0c9381dde54dc0a extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "

<!--blog-section-->
        <section class=\"ttm-row blog-section bg-img2 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\" style=\"max-width: 1600px\">
                 <!-- row -->
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-10 col-lg-10 col-md-12\">
                        <!-- section-title -->
                        <div class=\"section-title style2 clearfix\">
                            <div class=\"title-header\">
                                <h5>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM AXBOROT XIZMATI"]);
        echo "</h5>
                                <h2 class=\"title\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM YANGILIKLARI"]);
        echo "</h2>
                            </div>
                            <div class=\"title-desc\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Institutda bo'layotgan so'ngi yangilik va tadbirlarni bu yerda o'qishingiz mumkin. Yanayam ko'proq yangiliklarni ko'rish uchun"]);
        echo " <strong>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Barcha yangiliklar"]);
        echo "</strong> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["tugmasidan foydalaning."]);
        echo "</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class=\"col-xl-2 col-lg-2 col-md-12\">
                        <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mb-15 float-lg-right\" href=\"index.html#\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Barcha yangiliklar"]);
        echo "</a>
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 4, \"slidesToScroll\": 1, \"arrows\":false, \"autoplay\":true, \"infinite\":true, \"responsive\": [{\"breakpoint\":1300,\"settings\":{\"slidesToShow\": 3}},{\"breakpoint\":950,\"settings\":{\"slidesToShow\": 2}}, {\"breakpoint\":540,\"settings\":{\"slidesToShow\": 1}}]}'>
                   
                   
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                                                   
                        <!-- featured-imagebox-post -->
                        <div class=\"featured-imagebox featured-imagebox-post style1\">
                            <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                               ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 34)) {
                echo " <img class=\"img-fluid lazyload\" data-src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 34)), 370, 368, ["mode" => "crop", "quality" => "80"]]);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "\">";
            }
            // line 35
            echo "                            </div>
                            <div class=\"featured-content featured-content-post\">
                                
                                 <div class=\"ttm-box-post-date\" style=\"right: 80%; background-color: #72a92c; height: 30px;\">
                                    <span class=\"ttm-entry-date\">
                                      <span class=\"ttm-count ttm-meta-line\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "statistics", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                                    </span>
                                </div>
                                
                                <div class=\"ttm-box-post-date\">
                                    <span class=\"ttm-entry-date\">
                                        <time class=\"entry-date\" datetime=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
            echo "</time>
                                    </span>
                                </div>
                                <div class=\"post-meta\">
                                    <span class=\"ttm-meta-line byline\"><i class=\"fa fa-user\"></i>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 50), "getFullNameAttribute", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                                    <span class=\"ttm-meta-line cat-link\"><i class=\"fa fa-tag\"></i>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"post-title featured-title\">
                                    <h5 style=\" margin-top: 5px; 
                                    margin-bottom: 0; 
                                    font-size: 24px; 
                                    line-height: 34px; 
                                    font-weight: 400; 
                                    text-overflow: ellipsis; 
                                    overflow: hidden; display: -webkit-box;
                                    -webkit-line-clamp: 4 ;
                                    -webkit-box-orient: vertical;\"><a href=\"/";
            // line 62
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 62), "html", null, true);
            echo "\"  >
                                    ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                    </a></h5>
                                    
                                </div>
                               ";
            // line 70
            echo "                            </div>
                        </div><!-- featured-imagebox-post end-->
                        
                    </div>
                         ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                         <img style=\"width: 700px;\" src=\"";
            echo "storage/app/media/sayt sozlamlari suratlari/trends_in_ux_for_ecommerce_websites.png";
            echo "\">
                    <span class=\"post-nodata\">";
            // line 76
            echo ($context["noPostsMessage"] ?? null);
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                    
                </div>
            </div>
        </section>
        <!--blog-section end-->";
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/blog-section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  173 => 76,  168 => 75,  159 => 70,  152 => 63,  146 => 62,  132 => 51,  128 => 50,  119 => 46,  110 => 40,  103 => 35,  95 => 34,  88 => 29,  83 => 28,  73 => 21,  62 => 17,  57 => 15,  53 => 14,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = newsPosts.posts %}


<!--blog-section-->
        <section class=\"ttm-row blog-section bg-img2 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\" style=\"max-width: 1600px\">
                 <!-- row -->
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-10 col-lg-10 col-md-12\">
                        <!-- section-title -->
                        <div class=\"section-title style2 clearfix\">
                            <div class=\"title-header\">
                                <h5>{{ 'OTM AXBOROT XIZMATI'|_}}</h5>
                                <h2 class=\"title\">{{\"OTM YANGILIKLARI\"|_}}</h2>
                            </div>
                            <div class=\"title-desc\">{{\"Institutda bo'layotgan so'ngi yangilik va tadbirlarni bu yerda o'qishingiz mumkin. Yanayam ko'proq yangiliklarni ko'rish uchun\"|_}} <strong>{{\"Barcha yangiliklar\"|_}}</strong> {{\"tugmasidan foydalaning.\"|_}}</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class=\"col-xl-2 col-lg-2 col-md-12\">
                        <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mb-15 float-lg-right\" href=\"index.html#\">{{\"Barcha yangiliklar\"|_}}</a>
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 4, \"slidesToScroll\": 1, \"arrows\":false, \"autoplay\":true, \"infinite\":true, \"responsive\": [{\"breakpoint\":1300,\"settings\":{\"slidesToShow\": 3}},{\"breakpoint\":950,\"settings\":{\"slidesToShow\": 2}}, {\"breakpoint\":540,\"settings\":{\"slidesToShow\": 1}}]}'>
                   
                   
            {% for post in posts %}
                    <div class=\"ttm-box-col-wrapper col-lg-4\">
                                                   
                        <!-- featured-imagebox-post -->
                        <div class=\"featured-imagebox featured-imagebox-post style1\">
                            <div class=\"ttm-post-thumbnail featured-thumbnail\"> 
                               {% if post.image %} <img class=\"img-fluid lazyload\" data-src=\"{{ post.image|media | resize(370, 368,  { mode: 'crop', quality: '80' }) }}\" alt=\"{{ post.title }}\">{% endif %}
                            </div>
                            <div class=\"featured-content featured-content-post\">
                                
                                 <div class=\"ttm-box-post-date\" style=\"right: 80%; background-color: #72a92c; height: 30px;\">
                                    <span class=\"ttm-entry-date\">
                                      <span class=\"ttm-count ttm-meta-line\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ post.statistics}}</span>
                                    </span>
                                </div>
                                
                                <div class=\"ttm-box-post-date\">
                                    <span class=\"ttm-entry-date\">
                                        <time class=\"entry-date\" datetime=\"{{ post.published_at|date('Y-m-d') }}\">{{ post.published_at|date('Y-m-d') }}</time>
                                    </span>
                                </div>
                                <div class=\"post-meta\">
                                    <span class=\"ttm-meta-line byline\"><i class=\"fa fa-user\"></i>{{ post.user.getFullNameAttribute }}</span>
                                    <span class=\"ttm-meta-line cat-link\"><i class=\"fa fa-tag\"></i>{{ post.category.name }}</span>
                                </div>
                                <div class=\"post-title featured-title\">
                                    <h5 style=\" margin-top: 5px; 
                                    margin-bottom: 0; 
                                    font-size: 24px; 
                                    line-height: 34px; 
                                    font-weight: 400; 
                                    text-overflow: ellipsis; 
                                    overflow: hidden; display: -webkit-box;
                                    -webkit-line-clamp: 4 ;
                                    -webkit-box-orient: vertical;\"><a href=\"/{{ postPage }}/{{ post.slug }}\"  >
                                    {{ post.title }}
                                    </a></h5>
                                    
                                </div>
                               {# <div class=\"post-desc featured-desc\">
                                    {% if post.introductory %}<p>  {{ post.introductory|raw }} </p>{% endif %}
                                </div>#}
                            </div>
                        </div><!-- featured-imagebox-post end-->
                        
                    </div>
                         {% else %}
                         <img style=\"width: 700px;\" src=\"{{\"storage/app/media/sayt sozlamlari suratlari/trends_in_ux_for_ecommerce_websites.png\"}}\">
                    <span class=\"post-nodata\">{{ noPostsMessage|raw }}</span>
                    {% endfor %}

                    
                </div>
            </div>
        </section>
        <!--blog-section end-->", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/blog-section.htm", "");
    }
}
