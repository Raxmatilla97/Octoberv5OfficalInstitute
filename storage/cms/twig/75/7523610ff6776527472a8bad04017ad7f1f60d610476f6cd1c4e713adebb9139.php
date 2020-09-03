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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 20);
        // line 21
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 21);
        // line 22
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 22);
        // line 23
        echo "
";
        // line 24
        if (($context["record"] ?? null)) {
            // line 25
            echo "   
   <h5>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "h5", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                            <h2 class=\"title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "h2", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                    <p> ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 31);
            echo "</p>
                   
                    <!-- <h5 class=\"text-center\">Institut haqida qisqacha</h5> -->
                    <div class=\"row mt-25 mb-10\">
                        

                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                            
                           ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "list_key_chap", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 41
                echo "                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_url", [], "any", false, false, false, 41), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_nomi", [], "any", false, false, false, 41), "html", null, true);
                echo "</a></div></li>
                                
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                <!--<li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Guaranted career grow security</div></li>
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Experienced faculty and teachers</div></li>-->
                            </ul>
                        </div>
                       <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "list_key_ong", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 51
                echo "                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_url", [], "any", false, false, false, 51), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "list_nomi", [], "any", false, false, false, 51), "html", null, true);
                echo "</a></div></li>
                                
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                            </ul>
                        </div>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15\">
                                <a class=\"ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark\" href=\"#\">";
            // line 60
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ko'proq o'qish"]);
            echo "</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <div class=\"mt-30 res-991-mt-15 res-991-mb-30\">
                                <h6 class=\"ttm-textcolor-skincolor mb-2\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "qabulhona_tel", [], "any", false, false, false, 65), "html", null, true);
            echo " </h6>
                                <h6 class=\"font-weight-normal\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "qabul_text", [], "any", false, false, false, 66), "html", null, true);
            echo "</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-10\">
                    <!-- ttm_single_image-wrapper -->
                    <div class=\"ttm_single_image-wrapper\" style=\"height: 520px;\">
                        <img class=\"img-fluid lazyload\" style=\"height: 520px;\" data-src=\"";
            // line 74
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, false, 74));
            echo "\" alt=\"\"  id=\"optionalstuff\">
                    </div>
                </div>
";
        } else {
            // line 78
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 80
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
        return array (  179 => 80,  173 => 78,  166 => 74,  155 => 66,  151 => 65,  143 => 60,  135 => 54,  123 => 51,  119 => 50,  111 => 44,  99 => 41,  95 => 40,  83 => 31,  76 => 27,  72 => 26,  69 => 25,  67 => 24,  64 => 23,  62 => 22,  60 => 21,  58 => 20,  37 => 1,);
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
                        
                        {% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
   
   <h5>{{ record.h5 }}</h5>
                            <h2 class=\"title\">{{ record.h2 }}</h2>
                        </div>
                        <div class=\"heading-seperator\"><span></span></div>
                    </div><!-- section title end -->
                    <p> {{ record.text|raw }}</p>
                   
                    <!-- <h5 class=\"text-center\">Institut haqida qisqacha</h5> -->
                    <div class=\"row mt-25 mb-10\">
                        

                        <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                            
                           {% for list in record.list_key_chap %}
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\"><a href=\"{{ list.list_url}}\">{{ list.list_nomi}}</a></div></li>
                                
                                {% endfor %}
                                <!--<li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Guaranted career grow security</div></li>
                                <li><i class=\"fa fa-arrow-circle-right\"></i><div class=\"ttm-list-li-content\">Experienced faculty and teachers</div></li>-->
                            </ul>
                        </div>
                       <div class=\"col-lg-6 col-md-5 col-sm-6\">
                            <ul class=\"ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor\">
                                {% for list in record.list_key_ong %}
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
                                <h6 class=\"ttm-textcolor-skincolor mb-2\">{{ record.qabulhona_tel}} </h6>
                                <h6 class=\"font-weight-normal\">{{ record.qabul_text}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-10\">
                    <!-- ttm_single_image-wrapper -->
                    <div class=\"ttm_single_image-wrapper\" style=\"height: 520px;\">
                        <img class=\"img-fluid lazyload\" style=\"height: 520px;\" data-src=\"{{ record.image|media }}\" alt=\"\"  id=\"optionalstuff\">
                    </div>
                </div>
{% else %}
    {{ notFoundMessage }}
{% endif %}
                        
                            
                
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/about-us.htm", "");
    }
}
