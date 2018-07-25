<?php

/* themes/grace/templates/layout/page.html.twig */
class __TwigTemplate_4ede28a998e92934b061f68b892dce995c235a9c0e46d9ddfbac44f5344ee600 extends Twig_Template
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
        $tags = array("if" => 52);
        $filters = array("t" => 89);
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

        // line 50
        echo "<div class=\"website-root\">

";
        // line 52
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 54
            echo "  <header class=\"header-banner navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar\">
    ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
  </header>
";
        }
        // line 59
        echo "
<div class=\"container-fuild\">
  <div class=\"row flex-xl-nowrap\">
    <aside class=\"d-none d-lg-block col-12 col-lg-3 sidebar-left\">
      <div class=\"p-lg-3 p-xl-4\">

        ";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "brand", array())) {
            // line 66
            echo "        ";
            // line 67
            echo "        <div class=\"logo-container mx-auto\">
          ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "brand", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 71
            echo "        ";
        }
        // line 72
        echo "
        ";
        // line 74
        echo "
        <blockquote class=\"blockquote pt-2 text-center\">
          <p class=\"mb-0\">神爱世人，甚至将他的独生子赐给他们，叫一切信他的，不致灭亡，反得永生。</p>
          <footer class=\"blockquote-footer\">约翰福音<cite title=\"Source Title\">3：16</cite></footer>
        </blockquote>

        ";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "tagline", array())) {
            // line 81
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tagline", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "
        ";
        // line 85
        echo "
        ";
        // line 87
        echo "        <div class=\"search-container mb-5\">
          <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Keywords")));
        echo "\" aria-label=\"Keyword\" aria-describedby=\"search-button\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" id=\"search-button\"><span class=\"oi oi-magnifying-glass\"></span></button>
          </div>
          </div>
        </div>
        ";
        // line 95
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 96
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
        ";
        }
        // line 98
        echo "        ";
        // line 99
        echo "
        ";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 101
            echo "        <nav class=\"navigation\">
          ";
            // line 103
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
          <!-- <div class=\"primary-menu\">
            <div id=\"accordian\">
              <ul>
                  <li>
                      <h3><a href=\"#\">About Us</a></h3>
                      <ul>
                          <li><a href=\"#\">Reports</a></li>
                          <li><a href=\"#\">Search</a></li>
                          <li><a href=\"#\">Graphs</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Tasks</a></h3>
                      <ul>
                          <li><a href=\"#\">Today's tasks</a></li>
                          <li>
                              <a href=\"#\">DrillDown</a>
                              <ul>
                                  <li><a href=\"#\">Today's tasks</a></li>
                                  <li><a href=\"#\">Urgent</a></li>
                                  <li>
                                      <a href=\"#\">Overdues</a>
                                      <ul>
                                          <li><a href=\"#\">Today's tasks</a></li>
                                          <li><a href=\"#\">Urgent</a></li>
                                          <li><a href=\"#\">Overdues</a></li>
                                          <li><a href=\"#\">Recurring</a></li>
                                          <li><a href=\"#\">Settings</a></li>
                                      </ul>
                                  </li>
                                  <li><a href=\"#\">Recurring</a></li>
                                  <li><a href=\"#\">Settings</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"#\">Overdues</a>
                              <ul>
                                  <li><a href=\"#\">Today's tasks</a></li>
                                  <li><a href=\"#\">Urgent</a></li>
                                  <li><a href=\"#\">Overdues</a></li>
                                  <li><a href=\"#\">Recurring</a></li>
                                  <li><a href=\"#\">Settings</a></li>
                              </ul>
                          </li>
                          <li><a href=\"#\">Recurring</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Calendar</a></h3>
                      <ul>
                          <li><a href=\"#\">Current Month</a></li>
                          <li><a href=\"#\">Current Week</a></li>
                          <li><a href=\"#\">Previous Month</a></li>
                          <li><a href=\"#\">Previous Week</a></li>
                          <li><a href=\"#\">Next Month</a></li>
                          <li><a href=\"#\">Next Week</a></li>
                          <li><a href=\"#\">Team Calendar</a></li>
                          <li><a href=\"#\">Private Calendar</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Favourites</a></h3>
                      <ul>
                          <li><a href=\"#\">Global favs</a></li>
                          <li><a href=\"#\">My favs</a></li>
                          <li><a href=\"#\">Team favs</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
              </ul>
            </div>";
            // line 178
            echo "          </div>";
            echo " -->
          ";
            // line 180
            echo "        </nav>";
            // line 181
            echo "        ";
        }
        // line 182
        echo "      </div>
    </aside>";
        // line 184
        echo "
    <aside class=\"d-none d-xl-block col-xl-3 sidebar-right\">
      <div class=\"p-xl-4\">
        <div class=\"card m-auto w-75\">
          <img class=\"card-img-top\" src=\"https://fakeimg.pl/360x180/?text=Hello\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
          </div>
        </div>

        ";
        // line 196
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 197
            echo "        ";
            // line 198
            echo "        <div class=\"secondary-menu\">
          <div class=\"mt-5 mb-5 ml-auto mr-auto w-75\">
            ";
            // line 200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
          </div>
        </div>
        ";
            // line 205
            echo "        ";
        }
        // line 206
        echo "
      </div>
    </aside>";
        // line 209
        echo "
    <main class=\"col-12 col-lg-9 col-xl-6 main-content\">
      <div class=\"p-sm-3 p-md-3 p-lg-3 p-xl-4\">

        ";
        // line 213
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 214
            echo "        ";
            // line 215
            echo "        <div class=\"pb-3\">
          ";
            // line 216
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
          <!-- <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav> -->
        </div>
        ";
            // line 226
            echo "        ";
        }
        // line 227
        echo "
        ";
        // line 228
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 229
            echo "        ";
            // line 230
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
          ";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 234
            echo "        ";
        }
        // line 235
        echo "
        ";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 237
            echo "        ";
            // line 238
            echo "        <div class=\"alert alert-info\" role=\"alert\">
          ";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 242
            echo "        ";
        }
        // line 243
        echo "
        ";
        // line 244
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 245
            echo "        ";
            // line 246
            echo "        <article class=\"content\">
            ";
            // line 247
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </article>
        ";
            // line 250
            echo "        ";
        }
        // line 251
        echo "
        ";
        // line 252
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 253
            echo "        ";
            // line 254
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
          ";
            // line 255
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 258
            echo "        ";
        }
        // line 259
        echo "
        </div>
    </main>";
        // line 262
        echo "</div>";
        // line 263
        echo "</div>";
        // line 265
        echo "<footer class=\"site-footer fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-auto m-auto\">
        <p class=\"text-center\">
          ";
        // line 270
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 271
            echo "          ";
            // line 272
            echo "          <small>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "</small>
          ";
            // line 274
            echo "          ";
        }
        // line 275
        echo "        </p>
      </div>
    </div>
  </div>
</footer>
";
        // line 281
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/grace/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 281,  390 => 275,  387 => 274,  382 => 272,  380 => 271,  378 => 270,  371 => 265,  369 => 263,  367 => 262,  363 => 259,  360 => 258,  355 => 255,  352 => 254,  350 => 253,  348 => 252,  345 => 251,  342 => 250,  337 => 247,  334 => 246,  332 => 245,  330 => 244,  327 => 243,  324 => 242,  319 => 239,  316 => 238,  314 => 237,  312 => 236,  309 => 235,  306 => 234,  301 => 231,  298 => 230,  296 => 229,  294 => 228,  291 => 227,  288 => 226,  276 => 216,  273 => 215,  271 => 214,  269 => 213,  263 => 209,  259 => 206,  256 => 205,  249 => 200,  245 => 198,  243 => 197,  241 => 196,  227 => 184,  224 => 182,  221 => 181,  219 => 180,  215 => 178,  137 => 103,  134 => 101,  132 => 100,  129 => 99,  127 => 98,  121 => 96,  119 => 95,  110 => 89,  106 => 87,  103 => 85,  100 => 83,  94 => 81,  92 => 80,  84 => 74,  81 => 72,  78 => 71,  73 => 68,  70 => 67,  68 => 66,  66 => 65,  58 => 59,  52 => 55,  49 => 54,  47 => 52,  43 => 50,);
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
 * - page.header
 * - page.brand
 * - page.tagline
 * - page.primary_menu
 * - page.secondary_menu
 * - page.page_top
 * - page.page_bottom
 * - page.highlighted
 * - page.featured_top
 * - page.breadcrumb
 * - page.content
 * - page.search
 * - page.featured_bottom
 * - page.footer
 * - page.copyright
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"website-root\">

{% if page.header %}
{# REGIONS :: page.header #}
  <header class=\"header-banner navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar\">
    {{ page.header }}
  </header>
{# REGIONS :: page.header #}
{% endif %}

<div class=\"container-fuild\">
  <div class=\"row flex-xl-nowrap\">
    <aside class=\"d-none d-lg-block col-12 col-lg-3 sidebar-left\">
      <div class=\"p-lg-3 p-xl-4\">

        {% if page.brand %}
        {# REGIONS :: page.brand #}
        <div class=\"logo-container mx-auto\">
          {{ page.brand }}
        </div>
        {# REGIONS :: page.brand #}
        {% endif %}

        {# REGIONS :: page.tagline #}

        <blockquote class=\"blockquote pt-2 text-center\">
          <p class=\"mb-0\">神爱世人，甚至将他的独生子赐给他们，叫一切信他的，不致灭亡，反得永生。</p>
          <footer class=\"blockquote-footer\">约翰福音<cite title=\"Source Title\">3：16</cite></footer>
        </blockquote>

        {% if page.tagline %}
          {{ page.tagline }}
        {% endif %}

        {# REGIONS :: page.tagline #}

        {# REGIONS :: page.search #}
        <div class=\"search-container mb-5\">
          <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'Keywords'|t }}\" aria-label=\"Keyword\" aria-describedby=\"search-button\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" id=\"search-button\"><span class=\"oi oi-magnifying-glass\"></span></button>
          </div>
          </div>
        </div>
        {% if page.search %}
          {{ page.search }}
        {% endif %}
        {# REGIONS :: page.search #}

        {% if page.primary_menu %}
        <nav class=\"navigation\">
          {# REGIONS :: page.primary_menu #}
          {{ page.primary_menu }}
          <!-- <div class=\"primary-menu\">
            <div id=\"accordian\">
              <ul>
                  <li>
                      <h3><a href=\"#\">About Us</a></h3>
                      <ul>
                          <li><a href=\"#\">Reports</a></li>
                          <li><a href=\"#\">Search</a></li>
                          <li><a href=\"#\">Graphs</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Tasks</a></h3>
                      <ul>
                          <li><a href=\"#\">Today's tasks</a></li>
                          <li>
                              <a href=\"#\">DrillDown</a>
                              <ul>
                                  <li><a href=\"#\">Today's tasks</a></li>
                                  <li><a href=\"#\">Urgent</a></li>
                                  <li>
                                      <a href=\"#\">Overdues</a>
                                      <ul>
                                          <li><a href=\"#\">Today's tasks</a></li>
                                          <li><a href=\"#\">Urgent</a></li>
                                          <li><a href=\"#\">Overdues</a></li>
                                          <li><a href=\"#\">Recurring</a></li>
                                          <li><a href=\"#\">Settings</a></li>
                                      </ul>
                                  </li>
                                  <li><a href=\"#\">Recurring</a></li>
                                  <li><a href=\"#\">Settings</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href=\"#\">Overdues</a>
                              <ul>
                                  <li><a href=\"#\">Today's tasks</a></li>
                                  <li><a href=\"#\">Urgent</a></li>
                                  <li><a href=\"#\">Overdues</a></li>
                                  <li><a href=\"#\">Recurring</a></li>
                                  <li><a href=\"#\">Settings</a></li>
                              </ul>
                          </li>
                          <li><a href=\"#\">Recurring</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Calendar</a></h3>
                      <ul>
                          <li><a href=\"#\">Current Month</a></li>
                          <li><a href=\"#\">Current Week</a></li>
                          <li><a href=\"#\">Previous Month</a></li>
                          <li><a href=\"#\">Previous Week</a></li>
                          <li><a href=\"#\">Next Month</a></li>
                          <li><a href=\"#\">Next Week</a></li>
                          <li><a href=\"#\">Team Calendar</a></li>
                          <li><a href=\"#\">Private Calendar</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
                  <li>
                      <h3><a href=\"#\">Favourites</a></h3>
                      <ul>
                          <li><a href=\"#\">Global favs</a></li>
                          <li><a href=\"#\">My favs</a></li>
                          <li><a href=\"#\">Team favs</a></li>
                          <li><a href=\"#\">Settings</a></li>
                      </ul>
                  </li>
              </ul>
            </div>{# /#accordian #}
          </div>{# /.primary-menu #} -->
          {# REGIONS :: page.primary_menu #}
        </nav>{# /.navigation #}
        {% endif %}
      </div>
    </aside>{# /.sidebar-left #}

    <aside class=\"d-none d-xl-block col-xl-3 sidebar-right\">
      <div class=\"p-xl-4\">
        <div class=\"card m-auto w-75\">
          <img class=\"card-img-top\" src=\"https://fakeimg.pl/360x180/?text=Hello\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
          </div>
        </div>

        {% if page.secondary_menu %}
        {# REGIONS :: page.secondary_menu #}
        <div class=\"secondary-menu\">
          <div class=\"mt-5 mb-5 ml-auto mr-auto w-75\">
            {{ page.secondary_menu }}
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
          </div>
        </div>
        {# REGIONS :: page.secondary_menu #}
        {% endif %}

      </div>
    </aside>{# /.sidebar-right #}

    <main class=\"col-12 col-lg-9 col-xl-6 main-content\">
      <div class=\"p-sm-3 p-md-3 p-lg-3 p-xl-4\">

        {% if page.breadcrumb %}
        {# REGIONS :: page.breadcrumb #}
        <div class=\"pb-3\">
          {{ page.breadcrumb }}
          <!-- <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav> -->
        </div>
        {# REGIONS :: page.breadcrumb #}
        {% endif %}

        {% if page.highlighted %}
        {# REGIONS :: page.highlighted #}
        <div class=\"alert alert-danger\" role=\"alert\">
          {{ page.highlighted }}
        </div>
        {# REGIONS :: page.highlighted #}
        {% endif %}

        {% if page.featured_top %}
        {# REGIONS :: page.featured_top #}
        <div class=\"alert alert-info\" role=\"alert\">
          {{ page.featured_top }}
        </div>
        {# REGIONS :: page.featured_top #}
        {% endif %}

        {% if page.content %}
        {# REGIONS :: page.content #}
        <article class=\"content\">
            {{ page.content }}
        </article>
        {# REGIONS :: page.content #}
        {% endif %}

        {% if page.featured_bottom %}
        {# REGIONS :: page.featured_bottom #}
        <div class=\"alert alert-warning\" role=\"alert\">
          {{ page.featured_bottom }}
        </div>
        {# REGIONS :: page.featured_bottom #}
        {% endif %}

        </div>
    </main>{# /.main-content #}
</div>{# /.row.flex-xl-nowrap #}
</div>{# /.container-fuild #}
{# REGIONS :: page.footer #}
<footer class=\"site-footer fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-auto m-auto\">
        <p class=\"text-center\">
          {% if page.footer %}
          {# REGIONS :: page.copyright #}
          <small>{{ page.footer }}</small>
          {# REGIONS :: page.copyright #}
          {% endif %}
        </p>
      </div>
    </div>
  </div>
</footer>
{# REGIONS :: page.footer #}
</div>{# /.website-root #}
", "themes/grace/templates/layout/page.html.twig", "/Volumes/Websites/cci/themes/grace/templates/layout/page.html.twig");
    }
}
