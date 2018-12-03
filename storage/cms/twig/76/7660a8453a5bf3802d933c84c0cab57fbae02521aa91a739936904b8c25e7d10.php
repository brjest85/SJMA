<?php

/* /Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/layouts/default.htm */
class __TwigTemplate_51324e8262e971ed985d55ddc8df4fa12d5db5eb7114b23cca9ebea2e1c166fc extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_description", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "keywords", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "keywords", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_keywords", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
        <link rel=\"icon\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "        <title>";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo "</title>
    </head>
    <body class=\"layout-";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
        <div id=\"site-header\" class=\"site-header\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "        </div>
        <div id=\"site-content\" class=\"site-content\">
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/content"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        </div>
        <div id=\"site-footer\" class=\"site-footer\">
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "        </div>

        <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
        ";
        // line 27
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
        // line 28
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 29
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  131 => 28,  116 => 27,  112 => 26,  108 => 24,  104 => 23,  100 => 21,  96 => 20,  92 => 18,  88 => 17,  81 => 15,  69 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  46 => 8,  38 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"{% if this.page.description %}{{ this.page.description }}{% else %}{{ this.theme.meta_description }}{% endif %}\">
        <meta name=\"keywords\" content=\"{% if this.page.keywords %}{{ this.page.keywords }}{% else %}{{ this.theme.meta_keywords }}{% endif %}\">
        <meta name=\"title\" content=\"{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %}\">
        <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
        <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
        <link href=\"{{ 'assets/css/app.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
        <title>{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %} - {{ this.theme.website_name }}</title>
    </head>
    <body class=\"layout-{{ this.layout.id }} page-{{ this.page.id }}\">
        <div id=\"site-header\" class=\"site-header\">
            {% partial 'site/header' %}
        </div>
        <div id=\"site-content\" class=\"site-content\">
            {% partial 'site/content' %}
        </div>
        <div id=\"site-footer\" class=\"site-footer\">
            {% partial 'site/footer' %}
        </div>

        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
    </body>

</html>", "/Users/benjest/Documents/Personal/SJMA 2018/Website_october/sjma/themes/SJMA_theme/layouts/default.htm", "");
    }
}
