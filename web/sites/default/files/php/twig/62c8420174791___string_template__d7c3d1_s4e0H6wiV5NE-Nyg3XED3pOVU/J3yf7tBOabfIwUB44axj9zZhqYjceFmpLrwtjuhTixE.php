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

/* __string_template__d7c3d1d336b2779c230ffcfeb3fc50f1fafc9d7afd5a24a9a64b0a0e8f919c2b */
class __TwigTemplate_e7b82ef319b91cf416aa3b67b7ecdfec57ab22343525ed1e743361f3a15c6747 extends \Twig\Template
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
        // line 1
        echo "<div class=\"row\">
<div class=\"title col-xl-2 offset-xl-1\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nothing_1"] ?? null), 2, $this->source), "html", null, true);
        echo "</div> 
 <div class=\"row\">
<div class=\"title-dekstop col-xl-2 offset-xl-1\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nothing_1"] ?? null), 4, $this->source), "html", null, true);
        echo "</div> 
<div class=\"name col-xl-2 col-lg-2 col-md-2 \">
<div class=\"name- \">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 6, $this->source), "html", null, true);
        echo "</div>
<div class=\"surname \">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_surname"] ?? null), 7, $this->source), "html", null, true);
        echo " </div>
</div>

<div class=\"headshot-position-body col-xl-6 p-0 col-md-8 col-lg-8\">

<div class=\"body-team\" id=\"body-team\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 12, $this->source), "html", null, true);
        echo "</div>
<div class=\"open-position\">
<div class=\"open-body\"><span><i class=\"fa-solid fa-plus\"></i></span></div>
<div class=\"position\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_position"] ?? null), 15, $this->source), "html", null, true);
        echo " </div>
</div>

<div class=\"headshot  col-xl-8 offset-xl-4\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cover"] ?? null), 18, $this->source), "html", null, true);
        echo "</div>


 



</div>
</div></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__d7c3d1d336b2779c230ffcfeb3fc50f1fafc9d7afd5a24a9a64b0a0e8f919c2b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  70 => 15,  64 => 12,  56 => 7,  52 => 6,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"row\">
<div class=\"title col-xl-2 offset-xl-1\">{{ nothing_1 }}</div> 
 <div class=\"row\">
<div class=\"title-dekstop col-xl-2 offset-xl-1\">{{ nothing_1 }}</div> 
<div class=\"name col-xl-2 col-lg-2 col-md-2 \">
<div class=\"name- \">{{ field_name }}</div>
<div class=\"surname \">{{ field_surname }} </div>
</div>

<div class=\"headshot-position-body col-xl-6 p-0 col-md-8 col-lg-8\">

<div class=\"body-team\" id=\"body-team\">{{ body }}</div>
<div class=\"open-position\">
<div class=\"open-body\"><span><i class=\"fa-solid fa-plus\"></i></span></div>
<div class=\"position\">{{ field_position }} </div>
</div>

<div class=\"headshot  col-xl-8 offset-xl-4\">{{ field_cover }}</div>


 



</div>
</div></div>", "__string_template__d7c3d1d336b2779c230ffcfeb3fc50f1fafc9d7afd5a24a9a64b0a0e8f919c2b", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
