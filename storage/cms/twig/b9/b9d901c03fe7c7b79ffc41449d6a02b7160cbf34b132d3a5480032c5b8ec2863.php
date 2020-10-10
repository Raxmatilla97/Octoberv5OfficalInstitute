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

/* J:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/layouts/asosiy_sahifa.htm */
class __TwigTemplate_66eb0caef4b80e857fce75185b8280c89d8f185cca4da54bbb92273bfe94de17 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("general/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<body>

    <!--page start-->
    <div class=\"page\">


        <!--header start-->
        <header id=\"masthead\" class=\"header ttm-header-style-01\">
        
    
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/fbar-main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/top-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
    ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/main-menyu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "            

    
    ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/banner-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
    <!--site-main start-->
    <div class=\"site-main\">

    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/start-1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        
    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/about-us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "        
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/blog-section"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/hisoblagich"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/popular-cource"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo " 
    ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/our-events"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
      
    ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/whay-choose"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/happy-students"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "
        
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/team-tichers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "       

    ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/admission"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "    

      ";
        // line 50
        echo "      
          ";
        // line 52
        echo "      
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/client-section"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "      

    </div><!--site-main end-->

  ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "   
    <!--footer end-->

    <!--back-to-top start-->
    <a id=\"totop\" href=\"home-3.html#top\">
        <i class=\"fa fa-angle-up\"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("general/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/layouts/asosiy_sahifa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 70,  179 => 59,  175 => 58,  169 => 54,  165 => 53,  162 => 52,  159 => 50,  155 => 47,  151 => 46,  147 => 44,  143 => 43,  139 => 41,  134 => 40,  130 => 39,  126 => 37,  122 => 36,  119 => 35,  115 => 34,  112 => 33,  108 => 32,  105 => 31,  101 => 30,  98 => 29,  94 => 28,  91 => 27,  87 => 26,  81 => 22,  77 => 21,  72 => 18,  68 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'general/header'%}

<body>

    <!--page start-->
    <div class=\"page\">


        <!--header start-->
        <header id=\"masthead\" class=\"header ttm-header-style-01\">
        
    
    {% partial 'pages/fbar-main'%}
    
    {% partial 'pages/top-bar'%}

    {% partial 'pages/main-menyu'%}
            

    
    {% partial 'pages/banner-slider'%}

    <!--site-main start-->
    <div class=\"site-main\">

    {% partial 'pages/start-1'%}
        
    {% partial 'pages/about-us'%}
        
    {% partial 'pages/blog-section'%}

    {% partial 'pages/hisoblagich'%}

    {% partial 'pages/popular-cource'%}
 
    {% partial 'pages/our-events'%}

      
    {% partial 'pages/whay-choose'%}
    {% partial 'pages/happy-students'%}

        
    {% partial 'pages/team-tichers'%}
       

    {% partial 'pages/admission'%}
    

      {#{% partial 'pages/blog2'%}#}
      
          {#{% partial 'pages/interaktiv'%}#}
      
        {% partial 'pages/client-section'%}
      

    </div><!--site-main end-->

  {% partial 'pages/footer'%}
   
    <!--footer end-->

    <!--back-to-top start-->
    <a id=\"totop\" href=\"home-3.html#top\">
        <i class=\"fa fa-angle-up\"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

{% partial 'general/footer'%}", "J:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/layouts/asosiy_sahifa.htm", "");
    }
}
