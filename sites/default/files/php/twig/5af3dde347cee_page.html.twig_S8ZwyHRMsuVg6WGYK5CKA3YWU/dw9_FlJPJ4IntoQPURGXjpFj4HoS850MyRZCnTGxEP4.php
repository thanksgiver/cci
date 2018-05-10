<?php

/* themes/eva/templates/layout/page.html.twig */
class __TwigTemplate_fa31dfad43ad4c8704e46a3eec068eb1d479de9bfa6df950b831bdb5e7e0da68 extends Twig_Template
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
        $tags = array("if" => 71);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 46
        echo "<div class=\"container\">

  <div class=\"row\">

    <div class=\"col\">
      <header role=\"banner\">
        ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </header>

      ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
      ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "

      ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

      ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

      ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

      <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 66
        echo "
        <div class=\"layout-content\">
          ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>";
        // line 70
        echo "
        ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 72
            echo "          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 78
            echo "          <aside class=\"layout-sidebar-second\" role=\"complementary\">
            ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 82
        echo "
      </main>

      ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 86
            echo "        <footer role=\"contentinfo\">
          ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
        </footer>
      ";
        }
        // line 90
        echo "    </div>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/eva/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 90,  128 => 87,  125 => 86,  123 => 85,  118 => 82,  112 => 79,  109 => 78,  107 => 77,  104 => 76,  98 => 73,  95 => 72,  93 => 71,  90 => 70,  86 => 68,  82 => 66,  76 => 62,  71 => 60,  66 => 58,  61 => 56,  57 => 55,  51 => 52,  43 => 46,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
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
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"container\">

  <div class=\"row\">

    <div class=\"col\">
      <header role=\"banner\">
        {{ page.header }}
      </header>

      {{ page.primary_menu }}
      {{ page.secondary_menu }}

      {{ page.breadcrumb }}

      {{ page.highlighted }}

      {{ page.help }}

      <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

        <div class=\"layout-content\">
          {{ page.content }}
        </div>{# /.layout-content #}

        {% if page.sidebar_first %}
          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endif %}

        {% if page.sidebar_second %}
          <aside class=\"layout-sidebar-second\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endif %}

      </main>

      {% if page.footer %}
        <footer role=\"contentinfo\">
          {{ page.footer }}
        </footer>
      {% endif %}
    </div>

  </div>

</div>{# /.container #}
", "themes/eva/templates/layout/page.html.twig", "/Volumes/DATA-01/03-WEBSITE/cci/themes/eva/templates/layout/page.html.twig");
    }
}
