<?php

/* /Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/partials/site/content.htm */
class __TwigTemplate_2b72e850ecaf8cd5ba7a417665bfc79bee8da97d41dc2ed7d82f8f265dd3cd86 extends Twig_Template
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
        return "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/partials/site/content.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/partials/site/content.htm", "");
    }
}
