<?php

/* /Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/demo/pages/404.htm */
class __TwigTemplate_7abc974ed5cd0a4555a1a44dc343c83da9efcabd88d5903355fdde6fb2d092f9 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/demo/pages/404.htm", "");
    }
}
