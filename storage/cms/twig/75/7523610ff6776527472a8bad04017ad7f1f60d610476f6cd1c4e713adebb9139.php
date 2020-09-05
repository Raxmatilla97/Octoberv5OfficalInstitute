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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/about-us.htm */
class __TwigTemplate_a91896e615a40ac0798a7c46f9ee260d886c559f5221332e85fb67f8f1a8047c extends \Twig\Template
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
        echo "<style>
    @media (max-width:980px) {
      img#optionalstuff {
        display: none;
      }
    } 
     

  
    </style>
    <!--introduction-section-->
    <section class=\"ttm-row introduction-section clearfix\">
        <div class=\"container\" style=\"max-width: 1600px\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12\">
                    <!-- section title -->
                    <div class=\"section-title\">
                        <div class=\"title-header\">
                        
                  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["BizHaqimizdaComponent"] ?? null), "bizhaqimizda", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "                  ";
            if ($context["post"]) {
                // line 22
                echo "   
   <h5>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "h5", [], "any", false, false, false, 23), "html", null, true);
                echo "</h5>
                            <h2 class=\"title\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "h2", [], "any", false, false, false, 24), "html", null, true);
                echo "</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                    <p> ";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["post"], "text", [], "any", false, false, false, 28);
                echo "</p>
                   
                    <!-- <h5 class=\"text-center\">Institut haqida qisqacha</h5> -->
                    <div class=\"row mt-25 mb-10\">
                        

                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                            
                           ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "list_key_chap", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                    // line 38
                    echo "                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_url", [], "any", false, false, false, 38), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_nomi", [], "any", false, false, false, 38), "html", null, true);
                    echo "</a></div></li>
                                
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                                <!--<li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Guaranted career grow security</div></li>
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Experienced faculty and teachers</div></li>-->
                            </ul>
                        </div>
                       <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "list_key_ong", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                    // line 48
                    echo "                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_url", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_nomi", [], "any", false, false, false, 48), "html", null, true);
                    echo "</a></div></li>
                                
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                            </ul>
                        </div>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15\">
                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
                // line 57
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ko'proq o'qish"]);
                echo "</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15 res-991-mb-30\">
                                <h6 class=\"ttm-textcolor-skincolor mb-2\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "qabulhona_tel", [], "any", false, false, false, 62), "html", null, true);
                echo " </h6>
                                <h6 class=\"font-weight-normal\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "qabul_text", [], "any", false, false, false, 63), "html", null, true);
                echo "</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-10\">
                    <!-- ttm_single_image-wrapper -->
                    <div class=\"ttm_single_image-wrapper\" style=\"height: 520px;\">
                        <img class=\"img-fluid lazyload\" style=\"height: 520px;\" data-src=\"";
                // line 71
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 71));
                echo "\" alt=\"\"  id=\"optionalstuff\">
                    </div>
                </div>
                ";
            } else {
                // line 75
                echo "                    ";
                echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
                echo "
                ";
            }
            // line 77
            echo "              
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "          
                            
                
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 78,  175 => 77,  169 => 75,  162 => 71,  151 => 63,  147 => 62,  139 => 57,  131 => 51,  119 => 48,  115 => 47,  107 => 41,  95 => 38,  91 => 37,  79 => 28,  72 => 24,  68 => 23,  65 => 22,  62 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media (max-width:980px) {
      img#optionalstuff {
        display: none;
      }
    } 
     

  
    </style>
    <!--introduction-section-->
    <section class=\"ttm-row introduction-section clearfix\">
        <div class=\"container\" style=\"max-width: 1600px\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12\">
                    <!-- section title -->
                    <div class=\"section-title\">
                        <div class=\"title-header\">
                        
                  {% for post in BizHaqimizdaComponent.bizhaqimizda %}
                  {% if post %}
   
   <h5>{{ post.h5 }}</h5>
                            <h2 class=\"title\">{{ post.h2 }}</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                    <p> {{ post.text|raw }}</p>
                   
                    <!-- <h5 class=\"text-center\">Institut haqida qisqacha</h5> -->
                    <div class=\"row mt-25 mb-10\">
                        

                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                            
                           {% for list in post.list_key_chap %}
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"{{ list.list_url}}\">{{ list.list_nomi}}</a></div></li>
                                
                                {% endfor %}
                                <!--<li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Guaranted career grow security</div></li>
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Experienced faculty and teachers</div></li>-->
                            </ul>
                        </div>
                       <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                {% for list in post.list_key_ong %}
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"{{ list.list_url}}\">{{ list.list_nomi}}</a></div></li>
                                
                                {% endfor %}
                            </ul>
                        </div>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15\">
                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">{{ \"Ko'proq o'qish\"|_}}</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15 res-991-mb-30\">
                                <h6 class=\"ttm-textcolor-skincolor mb-2\">{{ post.qabulhona_tel}} </h6>
                                <h6 class=\"font-weight-normal\">{{ post.qabul_text}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-10\">
                    <!-- ttm_single_image-wrapper -->
                    <div class=\"ttm_single_image-wrapper\" style=\"height: 520px;\">
                        <img class=\"img-fluid lazyload\" style=\"height: 520px;\" data-src=\"{{ post.image|media }}\" alt=\"\"  id=\"optionalstuff\">
                    </div>
                </div>
                {% else %}
                    {{ notFoundMessage }}
                {% endif %}
              
              {% endfor %}          
                            
                
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/about-us.htm", "");
    }
}
