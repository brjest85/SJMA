<?php

/* /Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/footer.htm */
class __TwigTemplate_2b456f6478e83bbee7d0b71570991785a2862747c6fe9e652f14e793b0d60fc3 extends Twig_Template
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"copyright text-center\">
                <small class=\"text-muted\">&copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"copyright text-center\">
                <small class=\"text-muted\">&copy; {{ this.theme.website_name }} {{ \"now\"|date(\"Y\") }}</small>
            </div>
        </div>
    </div>
</div>", "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/prismify-bootstrap-starter-kit/partials/site/footer.htm", "");
    }
}
