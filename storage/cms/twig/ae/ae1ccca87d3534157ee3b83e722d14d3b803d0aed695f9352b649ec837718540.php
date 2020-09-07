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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/our-events.htm */
class __TwigTemplate_6ad2ce9ac838eaaa419f9486a93e81df9f2998fe46dfcd1a8c77c432a1dd60ef extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["Konfrensiyalar"] ?? null), "konfrense", [], "any", false, false, false, 1);
        echo "    

<!--event-section-->
    <section class=\"ttm-row event2-section bg-img1 ttm-bgcolor-darkgrey clearfix\">
        <div class=\"container\" style=\"max-width: 1300px\">
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- section title -->
                    <div class=\"section-title title-style-center_text\">
                        <div class=\"title-header\">
                            <h5>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OTM AXBOROT XIZMATI"]);
        echo "</h5>
                            <h2 class=\"title\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KONFERENSIYALAR"]);
        echo "</h2>
                            <br>
                            <h6>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Konferensiyalarda qatnashish orqali o`z ilmiy salogiyatingizni yuksaltiring."]);
        echo "</h6>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 1, \"slidesToScroll\": 3, \"arrows\":false, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":\"300px\", \"infinite\":true, \"responsive\": [{\"breakpoint\":991,\"settings\":{\"slidesToShow\": 1, \"centerPadding\":\"0px\",\"centerMode\":false }} ]}'>
                          
                     
             
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 27
            echo "                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-event -->
                    <div class=\"featured-imagebox featured-imagebox-event\">
                        <div class=\"ttm-event-thumbnail featured-thumbnail\">
                            <img class=\"img-fluid lazyload\" data-src=\"";
            // line 31
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 31)), 740, 510, ["mode" => "crop", "quality" => "70"]]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                            <div class=\"ttm-box-event-date\">
                                <span class=\"ttm-entry-date\">
                                    <time class=\"entry-date\" datetime=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "kun_soat", [], "any", false, false, false, 34), "d-M"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "kun_soat", [], "any", false, false, false, 34), "d-M"), "html", null, true);
            echo "</time>
                                </span>
                            </div>
                        </div>
                        <div class=\"featured-content featured-content-event\">
                            <div class=\"event-title featured-title\">
                                <h5><a href=\"courses-single.html\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></h5>
                            </div>
                            <div class=\"ttm-box-meta ttm-events-meta\">
                                <div class=\"ttm-meta-details ttm-event-meta-details\">
                                    <div class=\"ttm-event-meta-item ttm-event-date\"> 
                                        <i class=\"fa fa-clock-o\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "kun_soat", [], "any", false, false, false, 45), "H:i:s"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"ttm-event-meta-item ttm-event-vanue\"> 
                                        <i class=\"fa fa-map-marker\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "manzil", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"ttm-eventbox-footer\">
                                 <a class=\"ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor\" href=\"#\">";
            // line 53
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["To'liq o'qish"]);
            echo "<i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-event end-->
                </div>
                
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mt-20 mb_25 text-center\"><p>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Yanada ko'proq konferensiyalar haqida bilmoqchi bo'lsangiz"]);
        echo " <u><a href=\"home-3.html#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["BU YERGA BOSING."]);
        echo "</a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--event-section-->";
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/our-events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  147 => 62,  138 => 60,  126 => 53,  118 => 48,  112 => 45,  104 => 40,  93 => 34,  85 => 31,  79 => 27,  74 => 26,  60 => 15,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = Konfrensiyalar.konfrense %}    

<!--event-section-->
    <section class=\"ttm-row event2-section bg-img1 ttm-bgcolor-darkgrey clearfix\">
        <div class=\"container\" style=\"max-width: 1300px\">
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- section title -->
                    <div class=\"section-title title-style-center_text\">
                        <div class=\"title-header\">
                            <h5>{{\"OTM AXBOROT XIZMATI\"|_}}</h5>
                            <h2 class=\"title\">{{\"KONFERENSIYALAR\"|_}}</h2>
                            <br>
                            <h6>{{\"Konferensiyalarda qatnashish orqali o`z ilmiy salogiyatingizni yuksaltiring.\"|_}}</h6>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class=\"row slick_slider\" data-slick='{\"slidesToShow\": 1, \"slidesToScroll\": 3, \"arrows\":false, \"autoplay\":true, \"centerMode\":true, \"centerPadding\":\"300px\", \"infinite\":true, \"responsive\": [{\"breakpoint\":991,\"settings\":{\"slidesToShow\": 1, \"centerPadding\":\"0px\",\"centerMode\":false }} ]}'>
                          
                     
             
                {% for record in records %}
                <div class=\"ttm-box-col-wrapper col-lg-4\">
                    <!-- featured-imagebox-event -->
                    <div class=\"featured-imagebox featured-imagebox-event\">
                        <div class=\"ttm-event-thumbnail featured-thumbnail\">
                            <img class=\"img-fluid lazyload\" data-src=\"{{ record.image|media| resize (740, 510 , { mode: 'crop', quality: '70' }) }}\" alt=\"{{ record.title }}\">
                            <div class=\"ttm-box-event-date\">
                                <span class=\"ttm-entry-date\">
                                    <time class=\"entry-date\" datetime=\"{{ record.kun_soat|date('d-M') }}\">{{ record.kun_soat|date('d-M') }}</time>
                                </span>
                            </div>
                        </div>
                        <div class=\"featured-content featured-content-event\">
                            <div class=\"event-title featured-title\">
                                <h5><a href=\"courses-single.html\">{{ record.title }}</a></h5>
                            </div>
                            <div class=\"ttm-box-meta ttm-events-meta\">
                                <div class=\"ttm-meta-details ttm-event-meta-details\">
                                    <div class=\"ttm-event-meta-item ttm-event-date\"> 
                                        <i class=\"fa fa-clock-o\"></i> {{ record.kun_soat|date('H:i:s') }}
                                    </div>
                                    <div class=\"ttm-event-meta-item ttm-event-vanue\"> 
                                        <i class=\"fa fa-map-marker\"></i> {{ record.manzil }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"ttm-eventbox-footer\">
                                 <a class=\"ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor\" href=\"#\">{{\"To'liq o'qish\"|_}}<i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-event end-->
                </div>
                
                    {% else %}
                        <li class=\"no-data\">{{ noRecordsMessage }}</li>
                    {% endfor %}


            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mt-20 mb_25 text-center\"><p>{{\"Yanada ko'proq konferensiyalar haqida bilmoqchi bo'lsangiz\"|_}} <u><a href=\"home-3.html#\">{{\"BU YERGA BOSING.\"|_}}</a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--event-section-->", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/our-events.htm", "");
    }
}
