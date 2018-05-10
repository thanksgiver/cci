<?php

/* themes/eva/templates/navigation/menu--main.html.twig */
class __TwigTemplate_922777aaff0ebd478c1cfc7c8409748aa1798632a556eca7c841aee5ab27d30a extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 30, "if" => 32, "for" => 38);
        $filters = array();
        $functions = array("link" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "


";
        // line 71
        echo "
";
    }

    // line 30
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "  ";
            $context["menus"] = $this;
            // line 32
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 33
                echo "

    ";
                // line 35
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    echo "      <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

        ";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "
          ";
                        // line 40
                        if ($this->getAttribute($context["item"], "is_expanded", array())) {
                            // line 41
                            echo "            <li class=\"nav-item dropdown\">
              ";
                            // line 42
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "setAttribute", array(0 => "id", 1 => "navbarDropdown"), "method"), "setAttribute", array(0 => "role", 1 => "button"), "method"), "setAttribute", array(0 => "data-toggle", 1 => "dropdown"), "method"), "setAttribute", array(0 => "aria-haspopup", 1 => "true"), "method"), "setAttribute", array(0 => "aria-expanded", 1 => "false"), "method"), "addClass", array(0 => "nav-link dropdown-toggle"), "method")), "html", null, true));
                            echo "
              ";
                            // line 43
                            if ($this->getAttribute($context["item"], "below", array())) {
                                // line 44
                                echo "                ";
                                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                                echo "
              ";
                            }
                            // line 46
                            echo "          ";
                        } else {
                            // line 47
                            echo "            <li class=\"nav-item\">
              ";
                            // line 48
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "nav-link"), "method")), "html", null, true));
                            echo "
          ";
                        }
                        // line 50
                        echo "
          </li>

        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "
    ";
                } else {
                    // line 56
                    echo "      <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 58
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "dropdown-item"), "method")), "html", null, true));
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "    ";
                }
                // line 61
                echo "

    ";
                // line 63
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 64
                    echo "      </ul>
    ";
                } else {
                    // line 66
                    echo "      </div>
    ";
                }
                // line 68
                echo "
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/eva/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  166 => 66,  162 => 64,  160 => 63,  156 => 61,  153 => 60,  144 => 58,  140 => 57,  137 => 56,  133 => 54,  124 => 50,  119 => 48,  116 => 47,  113 => 46,  107 => 44,  105 => 43,  101 => 42,  98 => 41,  96 => 40,  93 => 39,  89 => 38,  85 => 36,  83 => 35,  79 => 33,  76 => 32,  73 => 31,  59 => 30,  54 => 71,  48 => 27,  45 => 22,  43 => 21,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}


{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}


    {% if menu_level == 0 %}
      <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

        {% for item in items %}

          {% if(item.is_expanded)%}
            <li class=\"nav-item dropdown\">
              {{ link(item.title, item.url, item.attributes.setAttribute('id', 'navbarDropdown').setAttribute('role', 'button').setAttribute('data-toggle', 'dropdown').setAttribute('aria-haspopup', 'true').setAttribute('aria-expanded', 'false').addClass('nav-link dropdown-toggle')) }}
              {% if item.below %}
                {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
              {% endif %}
          {% else %}
            <li class=\"nav-item\">
              {{ link(item.title, item.url, item.attributes.addClass('nav-link')) }}
          {% endif %}

          </li>

        {% endfor %}

    {% else %}
      <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
        {% for item in items %}
          {{ link(item.title, item.url, item.attributes.addClass('dropdown-item')) }}
        {% endfor %}
    {% endif %}


    {% if menu_level == 0 %}
      </ul>
    {% else %}
      </div>
    {% endif %}

  {% endif %}
{% endmacro %}

{#
<ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
  <li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Link</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
  </li>
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Dropdown link
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
      <a class=\"dropdown-item\" href=\"#\">Action</a>
      <a class=\"dropdown-item\" href=\"#\">Another action</a>
      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
    </div>
  </li>
</ul>
#}
", "themes/eva/templates/navigation/menu--main.html.twig", "/Volumes/Websites/cci/themes/eva/templates/navigation/menu--main.html.twig");
    }
}
