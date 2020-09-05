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

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/hisoblagich.htm */
class __TwigTemplate_b74aee92e5cafa204d638e7e03da83627e7fa11921c44137e52fdd4c035ae5e8 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Hisoblagich"] ?? null), "hisoblash", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["hisob"]) {
            // line 2
            echo "
 ";
            // line 3
            if ($context["hisob"]) {
                // line 4
                echo "<!--fid-section-->
        <section class=\"ttm-row fid-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img4 clearfix\" style=\"padding: 80px 0 80px; background-image: url(";
                // line 5
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["hisob"], "orqa_fon", [], "any", false, false, false, 5)), 1900, 337, ["mode" => "crop", "quality" => "20"]]);
                echo ");\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\">
                <!-- row -->
                <div class=\"row ttm-vertical_sep\">
                      ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["hisob"], "hisoblagich", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["raqam"]) {
                    // line 11
                    echo "                           <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                <!-- ttm-fid -->
                                                <div class=\"ttm-fid inside ttm-fid-with-icon text-center\">
                                                    <div class=\"ttm-fid-icon-wrapper\">
                                                        <i class=\"";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raqam"], "hisoblagich", [], "any", false, false, false, 15), "html", null, true);
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
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raqam"], "raqami", [], "any", false, false, false, 26), "html", null, true);
                    echo "
                                                                    class=\"numinate\">
                                                            </span>
                                                            <sub>+</sub>
                                                        </h4>
                                                        <h3 class=\"ttm-fid-title\">";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raqam"], "text", [], "any", false, false, false, 31), "html", null, true);
                    echo "</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>  
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raqam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                                            
                                        </div><!-- row end -->
                                    </div>
                                </section>
                                <!--fid-section-->        
                        ";
            } else {
                // line 42
                echo "                    ";
                echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hisob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/hisoblagich.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  100 => 36,  89 => 31,  81 => 26,  67 => 15,  61 => 11,  57 => 10,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for hisob in Hisoblagich.hisoblash %}

 {% if hisob %}
<!--fid-section-->
        <section class=\"ttm-row fid-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img4 clearfix\" style=\"padding: 80px 0 80px; background-image: url({{ hisob.orqa_fon|media | resize (1900,337, { mode: 'crop', quality: '20' })}});\">
            <div class=\"ttm-row-wrapper-bg-layer ttm-bg-layer\"></div>
            <div class=\"container\">
                <!-- row -->
                <div class=\"row ttm-vertical_sep\">
                      {% for raqam in  hisob.hisoblagich %}
                           <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                <!-- ttm-fid -->
                                                <div class=\"ttm-fid inside ttm-fid-with-icon text-center\">
                                                    <div class=\"ttm-fid-icon-wrapper\">
                                                        <i class=\"{{ raqam.hisoblagich }}\"></i>
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
                                                                    data-to= {{ raqam.raqami }}
                                                                    class=\"numinate\">
                                                            </span>
                                                            <sub>+</sub>
                                                        </h4>
                                                        <h3 class=\"ttm-fid-title\">{{ raqam.text}}</h3>
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
    {% endif %}
{% endfor%}", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/hisoblagich.htm", "");
    }
}
