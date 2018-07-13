<?php

/* themes/eva/templates/navigation/book-navigation.html.twig */
class __TwigTemplate_7ccc1bb085154390eaf27a7168493fe563141a07728e4a2f3b961eab606d0826 extends Twig_Template
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
        $tags = array("if" => 31);
        $filters = array("t" => 35);
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

        // line 31
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 32
            echo "  <nav class=\"book-nav\" role=\"navigation\" aria-labelledby=\"book-label-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["book_id"] ?? null), "html", null, true));
            echo "\">
    ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tree"] ?? null), "html", null, true));
            echo "
    ";
            // line 34
            if (($context["has_links"] ?? null)) {
                // line 35
                echo "      <h2 class=\"invisible\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Book traversal links for")));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["book_title"] ?? null), "html", null, true));
                echo "</h2>
      <br />
      <ul class=\"nav justify-content-center\">
      ";
                // line 38
                if (($context["prev_url"] ?? null)) {
                    // line 39
                    echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                    // line 40
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
                // line 43
                echo "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 44
                    echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                    // line 45
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["parent_url"] ?? null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to parent page")));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Up")));
                    echo "</a>
        </li>
      ";
                }
                // line 48
                echo "      ";
                if (($context["next_url"] ?? null)) {
                    // line 49
                    echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                    // line 50
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
                // line 53
                echo "    </ul>
    ";
            }
            // line 55
            echo "  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/eva/templates/navigation/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  116 => 53,  104 => 50,  101 => 49,  98 => 48,  88 => 45,  85 => 44,  82 => 43,  70 => 40,  67 => 39,  65 => 38,  56 => 35,  54 => 34,  50 => 33,  45 => 32,  43 => 31,);
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
 * Theme override to navigate books.
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
 */
#}
{% if tree or has_links %}
  <nav class=\"book-nav\" role=\"navigation\" aria-labelledby=\"book-label-{{ book_id }}\">
    {{ tree }}
    {% if has_links %}
      <h2 class=\"invisible\">{{ 'Book traversal links for'|t }} {{ book_title }}</h2>
      <br />
      <ul class=\"nav justify-content-center\">
      {% if prev_url %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ prev_url }}\" rel=\"prev\" title=\"{{ 'Go to previous page'|t }}\"><b>{{ '‹'|t }}</b> {{ prev_title }}</a>
        </li>
      {% endif %}
      {% if parent_url %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ parent_url }}\" title=\"{{ 'Go to parent page'|t }}\">{{ 'Up'|t }}</a>
        </li>
      {% endif %}
      {% if next_url %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ next_url }}\" rel=\"next\" title=\"{{ 'Go to next page'|t }}\">{{ next_title }} <b>{{ '›'|t }}</b></a>
        </li>
      {% endif %}
    </ul>
    {% endif %}
  </nav>
{% endif %}
", "themes/eva/templates/navigation/book-navigation.html.twig", "/Volumes/Websites/cci/themes/eva/templates/navigation/book-navigation.html.twig");
    }
}
