<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/layouts/default.htm */
class __TwigTemplate_8d32f66788a4979e1a29b377c2ba1fe7dad37d7187c746895ac54b62635983ea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    \t<meta charset=\"UTF-8\">
      ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "      <meta property=\"og:image\" content=\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "og_image", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "og_image", array()), "html", null, true);
        } else {
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-company.png");
        }
        echo "\" />
      <!--<title>Homeschool Network (Thailand) - ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</title>
      <meta property=\"og:description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "og_description", array()), "html", null, true);
        echo "\" />      
      <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
      <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">-->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
      <meta name=\"author\" content=\"OctoberCMS\">
      <meta name=\"generator\" content=\"OctoberCMS\">
      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\">
      ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "      <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/less/theme.less", 1 => "assets/css/custom.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
      <meta property=\"fb:admins\" content=\"528931910\" />
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
      <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/html5shiv.js", 1 => "assets/javascript/respond.min.js"));
        // line 26
        echo "\"></script>
      <![endif]-->
      <link href=\"https://fonts.googleapis.com/css?family=Sarabun\" rel=\"stylesheet\">
      <link href=\"https://fonts.googleapis.com/css?family=Kanit\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
      <div id=\"fb-root\"></div>
      <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=345191885891796&autoLogAppEvents=1\"></script>

      <div id=\"flash_message\"></div>
      <!-- Header -->
      <header id=\"layout-header\" class=\"header-navbar\">
          <!-- Nav -->
          ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      </header>

      <!-- Content -->
      <div id=\"layout-content\">
        ";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 45
        echo "      </div>

      <!-- Footer -->
      <footer id=\"layout-footer\">
          ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "      </footer>

      <!-- Scripts -->
      <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/jquery.min.js", 1 => "assets/javascript/pages/ui-elements.js", 2 => "assets/vendor/bootstrap/js/transition.js", 3 => "assets/vendor/bootstrap/js/alert.js", 4 => "assets/vendor/bootstrap/js/button.js", 5 => "assets/vendor/bootstrap/js/carousel.js", 6 => "assets/vendor/bootstrap/js/collapse.js", 7 => "assets/vendor/bootstrap/js/dropdown.js", 8 => "assets/vendor/bootstrap/js/modal.js", 9 => "assets/vendor/bootstrap/js/tooltip.js", 10 => "assets/vendor/bootstrap/js/popover.js", 11 => "assets/vendor/bootstrap/js/scrollspy.js", 12 => "assets/vendor/bootstrap/js/tab.js", 13 => "assets/vendor/bootstrap/js/affix.js", 14 => "assets/vendor/jquery-ui/js/jquery.ui.core.js", 15 => "assets/vendor/jquery-ui/js/jquery.ui.widget.js", 16 => "assets/vendor/jquery-ui/js/jquery.ui.mouse.js", 17 => "assets/vendor/jquery-ui/js/jquery.ui.position.js", 18 => "assets/vendor/jquery-ui/js/jquery.ui.button.js", 19 => "assets/vendor/jquery-ui/js/jquery.ui.slider.js", 20 => "assets/vendor/jquery-ui/js/jquery.ui.effects.js", 21 => "assets/vendor/jquery-ui/js/jquery.ui.touchpunch.js", 22 => "assets/vendor/flat-ui/js/video.js", 23 => "assets/vendor/flat-ui/js/bootstrap-switch.js", 24 => "assets/vendor/flat-ui/js/bootstrap-tagsinput.js", 25 => "assets/vendor/flat-ui/js/holder.js", 26 => "assets/vendor/flat-ui/js/typeahead.jquery.js", 27 => "assets/vendor/flat-ui/js/select2.js", 28 => "assets/vendor/flat-ui/js/flatui-radiocheck.js", 29 => "assets/javascript/app.js"));
        // line 88
        echo "\"></script>
      ";
        // line 89
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 90
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 91
        echo "      <script>
        function checkScroll(){
          var startY = \$('.navbar').height() * 2; //The point where the navbar changes in px

          if(\$(window).scrollTop() > startY){
                \$('.navbar').addClass(\"scrolled\");
            }else{
                \$('.navbar').removeClass(\"scrolled\");
            }
          }

          if(\$('.navbar').length > 0){
            \$(window).on(\"scroll load resize\", function(){
                checkScroll();
            });
          }
      </script>
    </body>
    <script type=\"text/javascript\">

\t\t\tvar _gaq = _gaq || [];
\t\t\t_gaq.push(['_setAccount', 'UA-32138803-1']);
\t\t\t_gaq.push(['_setDomainName', 'homeschoolnetwork.org']);
\t\t\t_gaq.push(['_trackPageview']);

\t\t\t(function() {
\t\t\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t\t\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t\t\t})();
\t\t</script>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 91,  146 => 90,  131 => 89,  128 => 88,  126 => 53,  121 => 50,  117 => 49,  111 => 45,  109 => 44,  103 => 40,  99 => 39,  86 => 31,  79 => 26,  77 => 23,  71 => 19,  68 => 16,  65 => 15,  61 => 14,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    \t<meta charset=\"UTF-8\">
      {% component 'SeoCmsPage' %}
      <meta property=\"og:image\" content=\"{% if this.page.og_image  %}{{ this.page.og_image }}{% else %}{{ 'assets/images/logo-company.png'|theme }}{% endif %}\" />
      <!--<title>Homeschool Network (Thailand) - {{ this.page.title|_ }}</title>
      <meta property=\"og:description\" content=\"{{ this.page.og_description }}\" />      
      <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
      <meta name=\"title\" content=\"{{ this.page.meta_title }}\">-->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
      <meta name=\"author\" content=\"OctoberCMS\">
      <meta name=\"generator\" content=\"OctoberCMS\">
      <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/logo.png'|theme }}\">
      {% styles %}
      <link href=\"{{ [
        'assets/less/theme.less',
        'assets/css/custom.css',
        ]|theme }}\" rel=\"stylesheet\">
      <meta property=\"fb:admins\" content=\"528931910\" />
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
      <script src=\"{{ [
      'assets/javascript/html5shiv.js',
      'assets/javascript/respond.min.js',
      ]|theme }}\"></script>
      <![endif]-->
      <link href=\"https://fonts.googleapis.com/css?family=Sarabun\" rel=\"stylesheet\">
      <link href=\"https://fonts.googleapis.com/css?family=Kanit\" rel=\"stylesheet\">
    </head>
    <body class=\"page-{{ this.page.id }} layout-{{ this.layout.id }}\">
      <div id=\"fb-root\"></div>
      <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=345191885891796&autoLogAppEvents=1\"></script>

      <div id=\"flash_message\"></div>
      <!-- Header -->
      <header id=\"layout-header\" class=\"header-navbar\">
          <!-- Nav -->
          {% partial \"nav\" %}
      </header>

      <!-- Content -->
      <div id=\"layout-content\">
        {% page %}
      </div>

      <!-- Footer -->
      <footer id=\"layout-footer\">
          {% partial \"footer\" %}
      </footer>

      <!-- Scripts -->
      <script src=\"{{ [
          'assets/javascript/jquery.min.js',
\t        'assets/javascript/pages/ui-elements.js',

          'assets/vendor/bootstrap/js/transition.js',
          'assets/vendor/bootstrap/js/alert.js',
          'assets/vendor/bootstrap/js/button.js',
          'assets/vendor/bootstrap/js/carousel.js',
          'assets/vendor/bootstrap/js/collapse.js',
          'assets/vendor/bootstrap/js/dropdown.js',
          'assets/vendor/bootstrap/js/modal.js',
          'assets/vendor/bootstrap/js/tooltip.js',
          'assets/vendor/bootstrap/js/popover.js',
          'assets/vendor/bootstrap/js/scrollspy.js',
          'assets/vendor/bootstrap/js/tab.js',
          'assets/vendor/bootstrap/js/affix.js',

          'assets/vendor/jquery-ui/js/jquery.ui.core.js',
          'assets/vendor/jquery-ui/js/jquery.ui.widget.js',
          'assets/vendor/jquery-ui/js/jquery.ui.mouse.js',
          'assets/vendor/jquery-ui/js/jquery.ui.position.js',
          'assets/vendor/jquery-ui/js/jquery.ui.button.js',
          'assets/vendor/jquery-ui/js/jquery.ui.slider.js',
          'assets/vendor/jquery-ui/js/jquery.ui.effects.js',
          'assets/vendor/jquery-ui/js/jquery.ui.touchpunch.js',

          'assets/vendor/flat-ui/js/video.js',
          'assets/vendor/flat-ui/js/bootstrap-switch.js',
          'assets/vendor/flat-ui/js/bootstrap-tagsinput.js',
          'assets/vendor/flat-ui/js/holder.js',
          'assets/vendor/flat-ui/js/typeahead.jquery.js',
          'assets/vendor/flat-ui/js/select2.js',
          'assets/vendor/flat-ui/js/flatui-radiocheck.js',

          'assets/javascript/app.js'
      ]|theme }}\"></script>
      {% framework extras %}
      {% scripts %}
      <script>
        function checkScroll(){
          var startY = \$('.navbar').height() * 2; //The point where the navbar changes in px

          if(\$(window).scrollTop() > startY){
                \$('.navbar').addClass(\"scrolled\");
            }else{
                \$('.navbar').removeClass(\"scrolled\");
            }
          }

          if(\$('.navbar').length > 0){
            \$(window).on(\"scroll load resize\", function(){
                checkScroll();
            });
          }
      </script>
    </body>
    <script type=\"text/javascript\">

\t\t\tvar _gaq = _gaq || [];
\t\t\t_gaq.push(['_setAccount', 'UA-32138803-1']);
\t\t\t_gaq.push(['_setDomainName', 'homeschoolnetwork.org']);
\t\t\t_gaq.push(['_trackPageview']);

\t\t\t(function() {
\t\t\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t\t\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t\t\t})();
\t\t</script>

</html>", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/layouts/default.htm", "");
    }
}
