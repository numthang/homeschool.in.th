<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-evaluate.htm */
class __TwigTemplate_d6f04118b659223cbf82e62c8619d0e9fbd9f94c751791509a73763d5cdf4c20 extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluate"));
        echo "</h3>
    </div>
</section>

<div class=\"container\">
\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">
\t\t    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courses"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t\t    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courseform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "\t\t  </div>
\t</div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-evaluate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  41 => 11,  37 => 10,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>{{ 'New evaluate'|_ }}</h3>
    </div>
</section>

<div class=\"container\">
\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">
\t\t    {% component 'courses' %}
\t\t    {% component 'courseform' %}
\t\t  </div>
\t</div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-evaluate.htm", "");
    }
}
