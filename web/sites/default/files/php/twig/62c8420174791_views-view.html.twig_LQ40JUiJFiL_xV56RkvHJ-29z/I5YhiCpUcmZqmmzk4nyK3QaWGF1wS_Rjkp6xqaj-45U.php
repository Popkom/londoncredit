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

/* themes/custom/londoncredit_subtheeme/templates/views-view.html.twig */
class __TwigTemplate_7bc908d009e7a7af562ef307683f92ed60ceb0757fa8fd5bb17ab9b269d3455d extends \Twig\Template
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
\t";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        echo "
\t";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 45, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 47
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
\t";
        // line 48
        if (($context["header"] ?? null)) {
            // line 49
            echo "\t\t<div class=\"view-header\">
\t\t\t";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 50, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 53
        echo "\t";
        if (($context["exposed"] ?? null)) {
            // line 54
            echo "\t\t<div class=\"view-filters\">
\t\t\t";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 55, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 58
        echo "\t";
        if (($context["attachment_before"] ?? null)) {
            // line 59
            echo "\t\t<div class=\"attachment attachment-before\">
\t\t\t";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 60, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if (($context["rows"] ?? null)) {
            // line 65
            echo "\t\t<div class=\"view-content row p-0 m-0\">
\t\t\t";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 66, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        } elseif (        // line 68
($context["empty"] ?? null)) {
            // line 69
            echo "\t\t<div class=\"view-empty\">
\t\t\t";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 70, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 73
        echo "
\t";
        // line 74
        if (($context["pager"] ?? null)) {
            // line 75
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 75, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 77
        echo "\t";
        if (($context["attachment_after"] ?? null)) {
            // line 78
            echo "\t\t<div class=\"attachment attachment-after\">
\t\t\t";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 79, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 82
        echo "\t";
        if (($context["more"] ?? null)) {
            // line 83
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 83, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 85
        echo "\t";
        if (($context["footer"] ?? null)) {
            // line 86
            echo "\t\t<div class=\"view-footer\">
\t\t\t";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 87, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 90
        echo "\t";
        if (($context["feed_icons"] ?? null)) {
            // line 91
            echo "\t\t<div class=\"feed-icons\">
\t\t\t";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 92, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/londoncredit_subtheeme/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 95,  176 => 92,  173 => 91,  170 => 90,  164 => 87,  161 => 86,  158 => 85,  152 => 83,  149 => 82,  143 => 79,  140 => 78,  137 => 77,  131 => 75,  129 => 74,  126 => 73,  120 => 70,  117 => 69,  115 => 68,  110 => 66,  107 => 65,  105 => 64,  102 => 63,  96 => 60,  93 => 59,  90 => 58,  84 => 55,  81 => 54,  78 => 53,  72 => 50,  69 => 49,  67 => 48,  62 => 47,  56 => 45,  54 => 44,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{attributes.addClass(classes)}}>
\t{{ title_prefix }}
\t{% if title %}
\t\t{{ title }}
\t{% endif %}
\t{{ title_suffix }}
\t{% if header %}
\t\t<div class=\"view-header\">
\t\t\t{{ header }}
\t\t</div>
\t{% endif %}
\t{% if exposed %}
\t\t<div class=\"view-filters\">
\t\t\t{{ exposed }}
\t\t</div>
\t{% endif %}
\t{% if attachment_before %}
\t\t<div class=\"attachment attachment-before\">
\t\t\t{{ attachment_before }}
\t\t</div>
\t{% endif %}

\t{% if rows %}
\t\t<div class=\"view-content row p-0 m-0\">
\t\t\t{{ rows }}
\t\t</div>
\t{% elseif empty %}
\t\t<div class=\"view-empty\">
\t\t\t{{ empty }}
\t\t</div>
\t{% endif %}

\t{% if pager %}
\t\t{{ pager }}
\t{% endif %}
\t{% if attachment_after %}
\t\t<div class=\"attachment attachment-after\">
\t\t\t{{ attachment_after }}
\t\t</div>
\t{% endif %}
\t{% if more %}
\t\t{{ more }}
\t{% endif %}
\t{% if footer %}
\t\t<div class=\"view-footer\">
\t\t\t{{ footer }}
\t\t</div>
\t{% endif %}
\t{% if feed_icons %}
\t\t<div class=\"feed-icons\">
\t\t\t{{ feed_icons }}
\t\t</div>
\t{% endif %}
</div>
", "themes/custom/londoncredit_subtheeme/templates/views-view.html.twig", "/var/www/html/web/themes/custom/londoncredit_subtheeme/templates/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 44);
        static $filters = array("clean_class" => 36, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
