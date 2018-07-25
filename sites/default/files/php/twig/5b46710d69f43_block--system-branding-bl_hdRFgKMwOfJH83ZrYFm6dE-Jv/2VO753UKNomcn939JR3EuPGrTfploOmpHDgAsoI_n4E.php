<?php

/* themes/grace/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_501beb5c359880e252124eec423e767bebfa4092b66d23dc0747d5da180d600e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/grace/templates/block/block--system-branding-block.html.twig", 1);
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
        $tags = array("if" => 18);
        $filters = array("t" => 19);
        $functions = array("path" => 19);

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

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"brand\">
  ";
        // line 18
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "    <a class=\"logo\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 23
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 24
            echo "    <a class=\"title\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <h2>";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "
        <small class=\"text-muted\">";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</small>
      </h2>
    </a>
  ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/grace/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  89 => 26,  85 => 25,  78 => 24,  75 => 23,  67 => 20,  60 => 19,  58 => 18,  55 => 17,  52 => 16,  11 => 1,);
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
<div class=\"brand\">
  {% if site_logo %}
    <a class=\"logo\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  {% if site_name %}
    <a class=\"title\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <h2>{{ site_name }}
        <small class=\"text-muted\">{{ site_slogan }}</small>
      </h2>
    </a>
  {% endif %}
</div>
{% endblock %}
", "themes/grace/templates/block/block--system-branding-block.html.twig", "/Volumes/Websites/cci/themes/grace/templates/block/block--system-branding-block.html.twig");
    }
}
