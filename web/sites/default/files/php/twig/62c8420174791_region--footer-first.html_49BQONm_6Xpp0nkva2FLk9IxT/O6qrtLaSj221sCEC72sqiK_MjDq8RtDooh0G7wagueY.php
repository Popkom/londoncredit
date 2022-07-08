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

/* themes/custom/londoncredit_subtheeme/templates/region--footer-first.html.twig */
class __TwigTemplate_0f02d52b63d4bb7492a118aa1b1bba50394641e4492a880fb186e07ff6df6741 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "\t<section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"footerhome col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "home", "full", null, false), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"footerproducts col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "products", "full", null, false), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"importantpages col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "importantpages", "full", null, false), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"socialmedia col-md-5 offset-md-1 col-lg-3 offset-lg-0 \">
\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "socialmedialinks", "full", null, false), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
            // line 37
            echo "\t\t</div>
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/londoncredit_subtheeme/templates/region--footer-first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 37,  69 => 34,  63 => 31,  57 => 28,  51 => 25,  44 => 22,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a region.
*
* Available variables:
* - content: The content for this region, typically blocks.
* - attributes: HTML attributes for the region div.
* - region: The name of the region variable as defined in the theme's
* .info.yml file.
*
* @see template_preprocess_region()
*/
#}
{%
set classes = [
'region',
'region-' ~ region|clean_class,
]
%}
{% if content %}
\t<section{{attributes.addClass(classes)}}>
\t\t<div class=\"row\">
\t\t\t<div class=\"footerhome col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t{{ drupal_entity('block', 'home', check_access=false) }}
\t\t\t</div>
\t\t\t<div class=\"footerproducts col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t{{ drupal_entity('block', 'products', check_access=false) }}
\t\t\t</div>
\t\t\t<div class=\"importantpages col-md-5 offset-md-1 col-lg-3 offset-lg-0\">
\t\t\t\t{{ drupal_entity('block', 'importantpages', check_access=false) }}
\t\t\t</div>
\t\t\t<div class=\"socialmedia col-md-5 offset-md-1 col-lg-3 offset-lg-0 \">
\t\t\t\t{{ drupal_entity('block', 'socialmedialinks', check_access=false) }}
\t\t\t</div>
\t\t\t{# {{ drupal_entity('block', 'footerblock', check_access=false) }} #}
\t\t</div>
\t</section>
{% endif %}
", "themes/custom/londoncredit_subtheeme/templates/region--footer-first.html.twig", "/var/www/html/web/themes/custom/londoncredit_subtheeme/templates/region--footer-first.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 21);
        static $filters = array("clean_class" => 18, "escape" => 22);
        static $functions = array("drupal_entity" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['drupal_entity']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
