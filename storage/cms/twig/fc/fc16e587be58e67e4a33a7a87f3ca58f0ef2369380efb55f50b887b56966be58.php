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

/* C:\laragon\www\OctoberLaravelOffical/themes/vue-institute/partials/pages/hisoblagich.htm */
class __TwigTemplate_e18ce8836df57e5025ccca0ab35c97ae8e597e7a7cf02c8e8e6c77c37d68cbed extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
 ";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<!--fid-section-->
        <section class=\"ttm-row fid-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img4 clearfix\" style=\"padding: 80px 0 80px; background-image: url(";
            // line 7
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "orqa_fon", [], "any", false, false, false, 7)), 1900, 337, ["mode" => "crop", "quality" => "20"]]);
            echo ");\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\">
                <!-- row -->
                <div class=\"row ttm-vertical_sep\">
                      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hisoblagich", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["hisob"]) {
                // line 13
                echo "                           <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                <!-- ttm-fid -->
                                                <div class=\"ttm-fid inside ttm-fid-with-icon text-center\">
                                                    <div class=\"ttm-fid-icon-wrapper\">
                                                        <i class=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hisob"], "hisoblagich", [], "any", false, false, false, 17), "html", null, true);
                echo "\"></i>
                                                    </div>
                                                    <div class=\"ttm-fid-contents\">
                                                        <h4 class=\"ttm-fid-inner\">
                                                            <span    data-appear-animation=\"animateDigits\" 
                                                                    data-from=\"0\"                                             
                                                                    data-interval=\"15\" 
                                                                    data-before=\"\" 
                                                                    data-before-style=\"sup\" 
                                                                    data-after=\"\" 
                                                                    data-after-style=\"sub\" 
                                                                    data-to= ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hisob"], "raqami", [], "any", false, false, false, 28), "html", null, true);
                echo "
                                                                    class=\"numinate\">
                                                            </span>
                                                            <sub>+</sub>
                                                        </h4>
                                                        <h3 class=\"ttm-fid-title\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hisob"], "text", [], "any", false, false, false, 33), "html", null, true);
                echo "</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>  
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hisob'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                            
                                        </div><!-- row end -->
                                    </div>
                                </section>
                                <!--fid-section-->        
                        ";
        } else {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
                ";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/hisoblagich.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 44,  102 => 38,  91 => 33,  83 => 28,  69 => 17,  63 => 13,  59 => 12,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

 {% if record %}
<!--fid-section-->
        <section class=\"ttm-row fid-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img4 clearfix\" style=\"padding: 80px 0 80px; background-image: url({{ record.orqa_fon|media | resize (1900,337, { mode: 'crop', quality: '20' })}});\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\">
                <!-- row -->
                <div class=\"row ttm-vertical_sep\">
                      {% for hisob in record.hisoblagich %}
                           <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                <!-- ttm-fid -->
                                                <div class=\"ttm-fid inside ttm-fid-with-icon text-center\">
                                                    <div class=\"ttm-fid-icon-wrapper\">
                                                        <i class=\"{{ hisob.hisoblagich}}\"></i>
                                                    </div>
                                                    <div class=\"ttm-fid-contents\">
                                                        <h4 class=\"ttm-fid-inner\">
                                                            <span    data-appear-animation=\"animateDigits\" 
                                                                    data-from=\"0\"                                             
                                                                    data-interval=\"15\" 
                                                                    data-before=\"\" 
                                                                    data-before-style=\"sup\" 
                                                                    data-after=\"\" 
                                                                    data-after-style=\"sub\" 
                                                                    data-to= {{ hisob.raqami }}
                                                                    class=\"numinate\">
                                                            </span>
                                                            <sub>+</sub>
                                                        </h4>
                                                        <h3 class=\"ttm-fid-title\">{{ hisob.text}}</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>  
                                            {% endfor %}
                                            
                                        </div><!-- row end -->
                                    </div>
                                </section>
                                <!--fid-section-->        
                        {% else %}
                    {{ notFoundMessage }}
                {% endif %}", "C:\\laragon\\www\\OctoberLaravelOffical/themes/vue-institute/partials/pages/hisoblagich.htm", "");
    }
}
