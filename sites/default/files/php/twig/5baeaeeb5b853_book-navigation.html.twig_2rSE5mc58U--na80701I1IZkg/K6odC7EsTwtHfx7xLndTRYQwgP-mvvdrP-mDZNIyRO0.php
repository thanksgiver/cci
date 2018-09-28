<?php

/* themes/joy/templates/book/book-navigation.html.twig */
class __TwigTemplate_369af89ee9ac33152cdfa2a1afde7eec646c340416d3536806ac4a953907151a extends Twig_Template
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
        $tags = array("if" => 33);
        $filters = array("t" => 41);
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

        // line 33
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 34
            echo "  <nav role=\"navigation\" aria-labelledby=\"book-label-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["book_id"] ?? null), "html", null, true));
            echo "\">
    ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tree"] ?? null), "html", null, true));
            echo "
    ";
            // line 36
            if (($context["has_links"] ?? null)) {
                // line 37
                echo "      <hr>
      <ul class=\"book-navigation-links\">
      ";
                // line 39
                if (($context["prev_url"] ?? null)) {
                    // line 40
                    echo "        <li>
          <a href=\"";
                    // line 41
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prev_url"] ?? null), "html", null, true));
                    echo "\" rel=\"prev\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                    echo "\"><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("‹")));
                    echo "</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prev_title"] ?? null), "html", null, true));
                    echo "</a>
        </li>
      ";
                }
                // line 44
                echo "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 45
                    echo "        <li>
          <a href=\"";
                    // line 46
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["parent_url"] ?? null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to parent page")));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Up")));
                    echo "</a>
        </li>
      ";
                }
                // line 49
                echo "      ";
                if (($context["next_url"] ?? null)) {
                    // line 50
                    echo "        <li>
          <a href=\"";
                    // line 51
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["next_url"] ?? null), "html", null, true));
                    echo "\" rel=\"next\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["next_title"] ?? null), "html", null, true));
                    echo " <b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("›")));
                    echo "</b></a>
        </li>
      ";
                }
                // line 54
                echo "    </ul>
    ";
            }
            // line 56
            echo "  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/joy/templates/book/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 56,  111 => 54,  99 => 51,  96 => 50,  93 => 49,  83 => 46,  80 => 45,  77 => 44,  65 => 41,  62 => 40,  60 => 39,  56 => 37,  54 => 36,  50 => 35,  45 => 34,  43 => 33,);
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
 * Default theme implementation to navigate books.
 *
 * Presented under nodes that are a part of book outlines.
 *
 * Available variables:
 * - tree: The immediate children of the current node rendered as an unordered
 *   list.
 * - current_depth: Depth of the current node within the book outline. Provided
 *   for context.
 * - prev_url: URL to the previous node.
 * - prev_title: Title of the previous node.
 * - parent_url: URL to the parent node.
 * - parent_title: Title of the parent node. Not printed by default. Provided
 *   as an option.
 * - next_url: URL to the next node.
 * - next_title: Title of the next node.
 * - has_links: Flags TRUE whenever the previous, parent or next data has a
 *   value.
 * - book_id: The book ID of the current outline being viewed. Same as the node
 *   ID containing the entire outline. Provided for context.
 * - book_url: The book/node URL of the current outline being viewed. Provided
 *   as an option. Not used by default.
 * - book_title: The book/node title of the current outline being viewed.
 *
 * @see template_preprocess_book_navigation()
 *
 * @ingroup themeable
 */
#}
{% if tree or has_links %}
  <nav role=\"navigation\" aria-labelledby=\"book-label-{{ book_id }}\">
    {{ tree }}
    {% if has_links %}
      <hr>
      <ul class=\"book-navigation-links\">
      {% if prev_url %}
        <li>
          <a href=\"{{ prev_url }}\" rel=\"prev\" title=\"{{ 'Go to previous page'|t }}\"><b>{{ '‹'|t }}</b> {{ prev_title }}</a>
        </li>
      {% endif %}
      {% if parent_url %}
        <li>
          <a href=\"{{ parent_url }}\" title=\"{{ 'Go to parent page'|t }}\">{{ 'Up'|t }}</a>
        </li>
      {% endif %}
      {% if next_url %}
        <li>
          <a href=\"{{ next_url }}\" rel=\"next\" title=\"{{ 'Go to next page'|t }}\">{{ next_title }} <b>{{ '›'|t }}</b></a>
        </li>
      {% endif %}
    </ul>
    {% endif %}
  </nav>
{% endif %}
", "themes/joy/templates/book/book-navigation.html.twig", "/Volumes/Websites/cci/themes/joy/templates/book/book-navigation.html.twig");
    }
}
