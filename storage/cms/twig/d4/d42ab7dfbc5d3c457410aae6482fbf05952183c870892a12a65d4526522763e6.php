<?php

/* /home/vsites/homeschoolnetwork.org/themes/responsiv-flat/partials/footer.htm */
class __TwigTemplate_992666dff8df78d5cb14e44256d56a58d879547e1ae21a0214212989dbeaad6c extends Twig_Template
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
        echo "<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"/\">Home</a>
            </li>
            <li>
                <a href=\"/blog/about-us\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("About us"));
        echo "</a>
            </li>
            <li>
                <a href=\"/blog/page/1\">Blog</a>
            </li>
            <li>
                <a href=\"/blog/contact\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"https://www.facebook.com/HomeschoolNetwork\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
      <div>Logo made with <a href=\"https://www.designevo.com/en/\" title=\"Free Online Logo Maker\">DesignEvo</a></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"/\">Home</a>
            </li>
            <li>
                <a href=\"/blog/about-us\">{{ 'About us'|_ }}</a>
            </li>
            <li>
                <a href=\"/blog/page/1\">Blog</a>
            </li>
            <li>
                <a href=\"/blog/contact\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"https://www.facebook.com/HomeschoolNetwork\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
      <div>Logo made with <a href=\"https://www.designevo.com/en/\" title=\"Free Online Logo Maker\">DesignEvo</a></div>
    </div>
</div>", "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/partials/footer.htm", "");
    }
}
