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

/* themes/custom/londoncredit_subtheeme/templates/page.html.twig */
class __TwigTemplate_d8a370c426311792808574d34eaf731f26755fcffd760873a84ddac022349d3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
\t<div id=\"page\">
\t\t<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
\t\t\t";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 131
        echo "\t\t</header>
\t\t";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "\t\t\t<div class=\"highlighted\">
\t\t\t\t<aside class=\"";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 139
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 139)) {
            // line 140
            echo "\t\t\t";
            $this->displayBlock('featured', $context, $blocks);
            // line 147
            echo "\t\t";
        }
        // line 148
        echo "\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "\t\t</div>
\t\t";
        // line 178
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 178) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 178)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 178))) {
            // line 179
            echo "\t\t\t<div class=\"featured-bottom\">
\t\t\t\t<aside class=\"";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 180, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 187
        echo "\t\t<footer class=\"site-footer\">
\t\t\t";
        // line 188
        $this->displayBlock('footer', $context, $blocks);
        // line 205
        echo "\t\t</footer>
\t</div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "\t\t\t\t\t<nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form ml-auto\">
\t\t\t\t\t\t\t\t\t";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t<nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "
\t\t\t\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 98, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 101, $this->source), "html", null, true);
            echo "\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t\t";
            // line 102
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-body\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 109)) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t\t";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 121
            echo "\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t";
        if (($context["container_navbar"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t<div class=\"search-icon \">
\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass\"></i>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t";
    }

    // line 140
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 142, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t";
    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "\t\t\t\t<div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 150, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 153, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>

\t\t\t\t\t\t\t\t";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 161, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 167)) {
            // line 168
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 168, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 188
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "\t\t\t\t<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 189, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 190
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 190) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 190))) {
            // line 191
            echo "\t\t\t\t\t\t<div class=\"site-footer__top clearfix\">
\t\t\t\t\t\t\t";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 198)) {
            // line 199
            echo "\t\t\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t\t\t";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/londoncredit_subtheeme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 203,  385 => 200,  382 => 199,  379 => 198,  373 => 195,  369 => 194,  365 => 193,  361 => 192,  358 => 191,  356 => 190,  351 => 189,  347 => 188,  341 => 174,  334 => 170,  328 => 168,  325 => 167,  318 => 163,  312 => 161,  310 => 160,  304 => 157,  297 => 153,  292 => 151,  287 => 150,  283 => 149,  275 => 143,  271 => 142,  268 => 141,  264 => 140,  256 => 126,  252 => 124,  249 => 123,  245 => 121,  242 => 120,  238 => 118,  234 => 116,  231 => 115,  224 => 111,  221 => 110,  219 => 109,  214 => 108,  207 => 103,  205 => 102,  201 => 101,  195 => 98,  192 => 97,  190 => 96,  185 => 95,  181 => 93,  179 => 92,  174 => 91,  170 => 89,  166 => 87,  163 => 86,  157 => 83,  154 => 82,  152 => 81,  148 => 80,  143 => 79,  139 => 77,  137 => 76,  132 => 75,  129 => 74,  125 => 73,  118 => 205,  116 => 188,  113 => 187,  106 => 183,  102 => 182,  98 => 181,  94 => 180,  91 => 179,  89 => 178,  86 => 177,  84 => 149,  81 => 148,  78 => 147,  75 => 140,  72 => 139,  65 => 135,  61 => 134,  58 => 133,  56 => 132,  53 => 131,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
\t<div id=\"page\">
\t\t<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
\t\t\t{% block head %}
\t\t\t\t{% if page.secondary_menu or page.top_header or page.top_header_form %}
\t\t\t\t\t<nav{{navbar_top_attributes}}>
\t\t\t\t\t\t{% if container_navbar %}
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{{ page.secondary_menu }}
\t\t\t\t\t\t\t{{ page.top_header }}
\t\t\t\t\t\t\t{% if page.top_header_form %}
\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form ml-auto\">
\t\t\t\t\t\t\t\t\t{{ page.top_header_form }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if container_navbar %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</nav>
\t\t\t\t{% endif %}
\t\t\t\t<nav{{navbar_attributes}}>
\t\t\t\t\t{% if container_navbar %}
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{{ page.header }}
\t\t\t\t\t\t{% if page.primary_menu or page.header_form %}

\t\t\t\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"{{ navbar_collapse_btn_data }}\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"{{ navbar_collapse_class }}\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t\t{% if navbar_offcanvas %}
\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-body\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{{ page.primary_menu }}
\t\t\t\t\t\t\t\t\t{% if page.header_form %}
\t\t\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t{{ page.header_form }}

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if navbar_offcanvas %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if sidebar_collapse %}
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if container_navbar %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"search-icon \">
\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass\"></i>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t{% endblock %}
\t\t</header>
\t\t{% if page.highlighted %}
\t\t\t<div class=\"highlighted\">
\t\t\t\t<aside class=\"{{ container }} section clearfix\" role=\"complementary\">
\t\t\t\t\t{{ page.highlighted }}
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if page.featured_top %}
\t\t\t{% block featured %}
\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
\t\t\t\t\t\t{{ page.featured_top }}
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t{% endif %}
\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t{% block content %}
\t\t\t\t<div id=\"main\" class=\"{{ container }}\">
\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main{{content_attributes}}>
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>

\t\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t{% if page.sidebar_first %}
\t\t\t\t\t\t\t<div{{sidebar_first_attributes}}>
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if page.sidebar_second %}
\t\t\t\t\t\t\t<div{{sidebar_second_attributes}}>
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t\t{% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
\t\t\t<div class=\"featured-bottom\">
\t\t\t\t<aside class=\"{{ container }} clearfix\" role=\"complementary\">
\t\t\t\t\t{{ page.featured_bottom_first }}
\t\t\t\t\t{{ page.featured_bottom_second }}
\t\t\t\t\t{{ page.featured_bottom_third }}
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endif %}
\t\t<footer class=\"site-footer\">
\t\t\t{% block footer %}
\t\t\t\t<div class=\"{{ container }}\">
\t\t\t\t\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
\t\t\t\t\t\t<div class=\"site-footer__top clearfix\">
\t\t\t\t\t\t\t{{ page.footer_first }}
\t\t\t\t\t\t\t{{ page.footer_second }}
\t\t\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t\t\t\t{{ page.footer_fourth }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.footer_fifth %}
\t\t\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t\t\t{{ page.footer_fifth }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</footer>
\t</div>
</div>
", "themes/custom/londoncredit_subtheeme/templates/page.html.twig", "/var/www/html/web/themes/custom/londoncredit_subtheeme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 132);
        static $filters = array("t" => 72, "escape" => 134);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
