<?php

/* /Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/content.htm */
class __TwigTemplate_c31dd65c7bdbb39e91756051a6813a7e5fe70d5745a3228ba8544fb6600d6073 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/content.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/content.htm", "");
    }
}
