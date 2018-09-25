<?php

/* themes/joy/templates/block/block--joy-branding.html.twig */
class __TwigTemplate_7cd615e33bf17892deda0b185c405a3bf94b3fa272488fe0b7b6b0ff2e80ad19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/joy/templates/block/block--joy-branding.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 22);
        $filters = array("t" => 23);
        $functions = array("path" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"container\">
  <div class=\"row align-items-end\">
    <div class=\"col\">
      ";
        // line 22
        if (($context["site_name"] ?? null)) {
            // line 23
            echo "      <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <h1 class=\"website-title\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "</h1>
    </a>
      ";
        }
        // line 27
        echo "    </div>
    <div class=\"col text-right\">
      ";
        // line 29
        if (($context["site_slogan"] ?? null)) {
            // line 30
            echo "      <h4 class=\"website-tagline\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</h4>
      ";
        }
        // line 32
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/joy/templates/block/block--joy-branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  81 => 30,  79 => 29,  75 => 27,  69 => 24,  62 => 23,  60 => 22,  55 => 19,  52 => 18,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}


{% block content %}
<div class=\"container\">
  <div class=\"row align-items-end\">
    <div class=\"col\">
      {% if site_name %}
      <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <h1 class=\"website-title\">{{ site_name }}</h1>
    </a>
      {% endif %}
    </div>
    <div class=\"col text-right\">
      {% if site_slogan %}
      <h4 class=\"website-tagline\">{{ site_slogan }}</h4>
      {% endif %}
    </div>
  </div>
</div>{# /.container #}
{% endblock %}
", "themes/joy/templates/block/block--joy-branding.html.twig", "/Volumes/Websites/cci/themes/joy/templates/block/block--joy-branding.html.twig");
    }
}
