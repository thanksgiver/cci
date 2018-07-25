<?php

/* themes/grace/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_1b22b90c7c558fc4004cd47602ef55c634b0d8f7fbe2716553d8e1e4eddddd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 14);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
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

        // line 14
        if (($context["primary"] ?? null)) {
            // line 15
            echo "  <h2 class=\"invisible\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs")));
            echo "</h2>
  <div class=\"btn-group py-3\" role=\"group\">";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true));
            echo "</div>
";
        }
        // line 18
        if (($context["secondary"] ?? null)) {
            // line 19
            echo "  <h2 class=\"invisible\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <div class=\"btn-group py-3\" role=\"group\">";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/grace/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  57 => 19,  55 => 18,  50 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display primary and secondary local tasks.
 *
 * Available variables:
 * - primary: HTML list items representing primary tasks.
 * - secondary: HTML list items representing primary tasks.
 *
 * Each item in these variables (primary and secondary) can be individually
 * themed in menu-local-task.html.twig.
 */
#}
{% if primary %}
  <h2 class=\"invisible\">{{ 'Primary tabs'|t }}</h2>
  <div class=\"btn-group py-3\" role=\"group\">{{ primary }}</div>
{% endif %}
{% if secondary %}
  <h2 class=\"invisible\">{{ 'Secondary tabs'|t }}</h2>
  <div class=\"btn-group py-3\" role=\"group\">{{ secondary }}</div>
{% endif %}
", "themes/grace/templates/navigation/menu-local-tasks.html.twig", "/Volumes/Websites/cci/themes/grace/templates/navigation/menu-local-tasks.html.twig");
    }
}
