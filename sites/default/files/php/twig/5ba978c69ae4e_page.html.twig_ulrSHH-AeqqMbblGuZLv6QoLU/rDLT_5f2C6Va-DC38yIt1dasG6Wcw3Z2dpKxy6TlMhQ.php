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
        $tags = array("if" => 51);
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

        // line 47
        echo "<div class=\"website\">

  <header class=\"layout-header\">
    <div class=\"header-top\">
      ";
        // line 51
        if ($this->getAttribute(($context["page"] ?? null), "brand", array())) {
            // line 52
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "brand", array()), "html", null, true));
            echo "
      ";
        }
        // line 54
        echo "      <!-- <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col\">
            <h1 class=\"website-title\">Website Name</h1>
          </div>
          <div class=\"col text-right\">
            <h4 class=\"website-tagline\">Tagline</h4>
          </div>
        </div>
      </div> -->

    </div>";
        // line 66
        echo "
    <div class=\"header-bottom\">
      <div class=\"navigationbar container\">
        <div class=\"row\">
          <div class=\"navigation col\">
            ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 72
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
            ";
        }
        // line 74
        echo "          </div>";
        // line 75
        echo "          <div class=\"search col text-right\">
            ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 77
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
            ";
        }
        // line 79
        echo "          </div>";
        // line 80
        echo "        </div>
      </div>
    </div>";
        // line 83
        echo "
  </header>";
        // line 85
        echo "
  <section class=\"layout-body\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 89
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 90
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
        ";
        }
        // line 92
        echo "        <!-- <div class=\"body-breadcrumb col pt-1 mb-1 border-bottom\">
          Lorem ipsum / dolor sit amet / consectetur adipisicing elit
        </div>";
        // line 94
        echo " -->

        <!-- <div class=\"w-100\"></div> -->

        ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 99
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
        <!-- <div class=\"body-top col py-3\">
          <div class=\"row\">
              <div class=\"col-3\">
                <img src=\"https://fakeimg.pl/200x200/?text=Hello\" class=\"img-thumbnail rounded\">
              </div>
              <div class=\"col-9\">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
          </div>
        </div>";
            // line 110
            echo " -->

        <!-- <div class=\"w-100\"></div> -->
        ";
        }
        // line 114
        echo "
        ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "book_navigation", array())) {
            // line 116
            echo "          <div class=\"body-featured-trigger col-12 text-right\">
            <a class=\"btn btn-light btn-sm\" data-toggle=\"collapse\" href=\"#collapseBodyFeatured\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseBodyFeatured\"><i class=\"fas fa-bars\"></i> <span>目录</span></a>
          </div>

          <div class=\"w-100\"></div>

          ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "book_navigation", array()), "html", null, true));
            echo "

          <!-- <div class=\"body-featrued  col\">
            <div class=\"collapse\" id=\"collapseBodyFeatured\">
              <div class=\"card card-body\">
                <h3>INDEX</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>";
            // line 131
            echo " -->

          <!-- <div class=\"w-100\"></div> -->
        ";
        }
        // line 135
        echo "
        <main class=\"body-main col py-3\" role=\"main\">
          <article>

            ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 140
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
            ";
        }
        // line 142
        echo "
            <!-- <div class=\"highlighted\">
              <div class=\"alert alert-danger\" role=\"alert\">
                highlighted
              </div>
            </div> -->

            ";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 150
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
            ";
        }
        // line 152
        echo "
            <!-- <div class=\"help\">
              <div class=\"alert alert-info\" role=\"alert\">
                help
              </div>
            </div> -->

            ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 160
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
            ";
        }
        // line 162
        echo "
            <!-- <div class=\"content\">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> -->
          </article>
        </main>";
        // line 168
        echo "
      </div>";
        // line 170
        echo "    </div>";
        // line 171
        echo "  </section>";
        // line 172
        echo "


  <footer class=\"layout-footer fixed-bottom\">
    <div class=\"container\">
      <div class=\"row align-items-end\">
        <div class=\"col\">
          copyright
        </div>
    </div>
  </footer>";
        // line 183
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
        return array (  259 => 183,  247 => 172,  245 => 171,  243 => 170,  240 => 168,  233 => 162,  227 => 160,  225 => 159,  216 => 152,  210 => 150,  208 => 149,  199 => 142,  193 => 140,  191 => 139,  185 => 135,  179 => 131,  167 => 122,  159 => 116,  157 => 115,  154 => 114,  148 => 110,  133 => 99,  131 => 98,  125 => 94,  121 => 92,  115 => 90,  113 => 89,  107 => 85,  104 => 83,  100 => 80,  98 => 79,  92 => 77,  90 => 76,  87 => 75,  85 => 74,  79 => 72,  77 => 71,  70 => 66,  57 => 54,  51 => 52,  49 => 51,  43 => 47,);
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
 * - page.brand
 * - page.primary_menu
 * - page.search
 * - page.breadcrumb
 * - page.featured
 * - page.book_navigation
 * - page.help
 * - page.highlighted
 * - page.content
 * - page.footer
 * - page.page_bottom
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"website\">

  <header class=\"layout-header\">
    <div class=\"header-top\">
      {% if page.brand %}
      {{ page.brand }}
      {% endif %}
      <!-- <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col\">
            <h1 class=\"website-title\">Website Name</h1>
          </div>
          <div class=\"col text-right\">
            <h4 class=\"website-tagline\">Tagline</h4>
          </div>
        </div>
      </div> -->

    </div>{# /.header-top #}

    <div class=\"header-bottom\">
      <div class=\"navigationbar container\">
        <div class=\"row\">
          <div class=\"navigation col\">
            {% if page.primary_menu %}
            {{ page.primary_menu }}
            {% endif %}
          </div>{# /.navigation #}
          <div class=\"search col text-right\">
            {% if page.search %}
            {{ page.search }}
            {% endif %}
          </div>{# /.search #}
        </div>
      </div>
    </div>{# /.header-bottom #}

  </header>{# /header #}

  <section class=\"layout-body\">
    <div class=\"container\">
      <div class=\"row\">
        {% if page.breadcrumb %}
        {{ page.breadcrumb }}
        {% endif %}
        <!-- <div class=\"body-breadcrumb col pt-1 mb-1 border-bottom\">
          Lorem ipsum / dolor sit amet / consectetur adipisicing elit
        </div>{# /div.body-breadcrumb #} -->

        <!-- <div class=\"w-100\"></div> -->

        {% if page.featured %}
        {{ page.featured }}
        <!-- <div class=\"body-top col py-3\">
          <div class=\"row\">
              <div class=\"col-3\">
                <img src=\"https://fakeimg.pl/200x200/?text=Hello\" class=\"img-thumbnail rounded\">
              </div>
              <div class=\"col-9\">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
          </div>
        </div>{# /div.body-top #} -->

        <!-- <div class=\"w-100\"></div> -->
        {% endif %}

        {% if page.book_navigation %}
          <div class=\"body-featured-trigger col-12 text-right\">
            <a class=\"btn btn-light btn-sm\" data-toggle=\"collapse\" href=\"#collapseBodyFeatured\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseBodyFeatured\"><i class=\"fas fa-bars\"></i> <span>目录</span></a>
          </div>

          <div class=\"w-100\"></div>

          {{ page.book_navigation }}

          <!-- <div class=\"body-featrued  col\">
            <div class=\"collapse\" id=\"collapseBodyFeatured\">
              <div class=\"card card-body\">
                <h3>INDEX</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>{# /div.body-featrued #} -->

          <!-- <div class=\"w-100\"></div> -->
        {% endif %}

        <main class=\"body-main col py-3\" role=\"main\">
          <article>

            {% if page.highlighted %}
            {{ page.highlighted }}
            {% endif %}

            <!-- <div class=\"highlighted\">
              <div class=\"alert alert-danger\" role=\"alert\">
                highlighted
              </div>
            </div> -->

            {% if page.help %}
            {{ page.help }}
            {% endif %}

            <!-- <div class=\"help\">
              <div class=\"alert alert-info\" role=\"alert\">
                help
              </div>
            </div> -->

            {% if page.content %}
            {{ page.content }}
            {% endif %}

            <!-- <div class=\"content\">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> -->
          </article>
        </main>{# /main.body-main #}

      </div>{# /.row #}
    </div>{# /.container #}
  </section>{# /layout-body #}



  <footer class=\"layout-footer fixed-bottom\">
    <div class=\"container\">
      <div class=\"row align-items-end\">
        <div class=\"col\">
          copyright
        </div>
    </div>
  </footer>{# /footer.layout-footer #}

</div>{# /.website #}
", "themes/joy/templates/layout/page.html.twig", "/Volumes/Websites/cci/themes/joy/templates/layout/page.html.twig");
    }
}
