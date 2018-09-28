<?php

/* themes/joy/templates/layout/page.html.twig */
class __TwigTemplate_e99e12e4156b71ba19e92fc3de38cc6232d589d7a01b06ce1ba0122c6e82f0b9 extends Twig_Template
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
        $tags = array("if" => 56);
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

        // line 50
        echo "<div id=\"website\">

  <header id=\"layout-header\" role=\"banner\">
    <div class=\"container-fuild\">
      <div class=\"row no-gutters\">

        ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 57
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 61
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 63
        echo "
      </div>
    </div>
  </header>";
        // line 67
        echo "

  ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 70
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "local_task", array())) {
            // line 74
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "local_task", array()), "html", null, true));
            echo "
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 78
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 82
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 86
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
  ";
        }
        // line 88
        echo "

  <section id=\"layout-body\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 93
        if ($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())) {
            echo "<div class=\"col-9\">";
        } else {
            echo "<div class=\"col-12\">";
        }
        // line 94
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 95
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          ";
        }
        // line 97
        echo "        </div>
        <div class=\"col-3\">
          ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())) {
            // line 100
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
          ";
        }
        // line 102
        echo "        </div>
      </div>
    </div>
  </section>";
        // line 106
        echo "
  <footer id=\"layout-footer\">
  </footer>";
        // line 109
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/joy/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 109,  170 => 106,  165 => 102,  159 => 100,  157 => 99,  153 => 97,  147 => 95,  144 => 94,  138 => 93,  131 => 88,  125 => 86,  123 => 85,  120 => 84,  114 => 82,  112 => 81,  109 => 80,  103 => 78,  101 => 77,  98 => 76,  92 => 74,  90 => 73,  87 => 72,  81 => 70,  79 => 69,  75 => 67,  70 => 63,  64 => 61,  62 => 60,  59 => 59,  53 => 57,  51 => 56,  43 => 50,);
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
 *   linking to the front page. This includes the language dobody or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.page_top
 * - page.header
 * - page.primary_menu
 * - page.featured_top
 * - page.breadcrumb
 * - page.local_task
 * - page.highlighted
 * - page.help
 * - page.content
 * - page.right_sidebar
 * - page.search
 * - page.top
 * - page.bottom
 * - page.footer
 * - page.page_bottom
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"website\">

  <header id=\"layout-header\" role=\"banner\">
    <div class=\"container-fuild\">
      <div class=\"row no-gutters\">

        {% if page.header %}
        {{ page.header }}
        {% endif %}

        {% if page.primary_menu %}
        {{ page.primary_menu }}
        {% endif %}

      </div>
    </div>
  </header>{# /header#layout-header #}


  {% if page.featured_top %}
  {{ page.featured_top }}
  {% endif %}

  {% if page.local_task %}
  {{ page.local_task }}
  {% endif %}

  {% if page.breadcrumb %}
  {{ page.breadcrumb }}
  {% endif %}

  {% if page.highlighted %}
  {{ page.highlighted }}
  {% endif %}

  {% if page.help %}
  {{ page.help }}
  {% endif %}


  <section id=\"layout-body\">
    <div class=\"container\">
      <div class=\"row\">
        {% if page.right_sidebar %}<div class=\"col-9\">{% else %}<div class=\"col-12\">{% endif %}
          {% if page.content %}
          {{ page.content }}
          {% endif %}
        </div>
        <div class=\"col-3\">
          {% if page.right_sidebar %}
          {{ page.right_sidebar }}
          {% endif %}
        </div>
      </div>
    </div>
  </section>{# /section#layout-body #}

  <footer id=\"layout-footer\">
  </footer>{# /footer#layout-footer #}

</div>{# /.website #}
", "themes/joy/templates/layout/page.html.twig", "/Volumes/Websites/cci/themes/joy/templates/layout/page.html.twig");
    }
}
