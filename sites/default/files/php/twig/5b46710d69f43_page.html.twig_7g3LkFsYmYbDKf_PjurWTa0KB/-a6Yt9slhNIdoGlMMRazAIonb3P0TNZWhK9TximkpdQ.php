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
        $tags = array("if" => 54);
        $filters = array("t" => 90);
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
        // line 53
        echo "  <header class=\"header-banner navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar\">
    ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 55
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
    ";
        }
        // line 57
        echo "  </header>
";
        // line 59
        echo "

<div class=\"container-fuild\">
  <div class=\"row flex-xl-nowrap\">
    <aside class=\"d-none d-lg-block col-12 col-lg-3 sidebar-left\">
      <div class=\"p-lg-3 p-xl-4\">

        ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "brand", array())) {
            // line 67
            echo "        ";
            // line 68
            echo "        <div class=\"logo-container mx-auto\">
          ";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "brand", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 72
            echo "        ";
        }
        // line 73
        echo "
        ";
        // line 75
        echo "
        <blockquote class=\"blockquote pt-2 text-center\">
          <p class=\"mb-0\">神爱世人，甚至将他的独生子赐给他们，叫一切信他的，不致灭亡，反得永生。</p>
          <footer class=\"blockquote-footer\">约翰福音<cite title=\"Source Title\">3：16</cite></footer>
        </blockquote>

        ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "tagline", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tagline", array()), "html", null, true));
            echo "
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "
        ";
        // line 88
        echo "        <div class=\"search-container mb-5\">
          <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Keywords")));
        echo "\" aria-label=\"Keyword\" aria-describedby=\"search-button\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" id=\"search-button\"><span class=\"oi oi-magnifying-glass\"></span></button>
          </div>
          </div>
        </div>
        ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 97
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
        ";
        }
        // line 99
        echo "        ";
        // line 100
        echo "
        ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 102
            echo "        <nav class=\"navigation\">
          ";
            // line 104
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
            // line 179
            echo "          </div>";
            echo " -->
          ";
            // line 181
            echo "        </nav>";
            // line 182
            echo "        ";
        }
        // line 183
        echo "      </div>
    </aside>";
        // line 185
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
        // line 197
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 198
            echo "        ";
            // line 199
            echo "        <div class=\"secondary-menu\">
          <div class=\"mt-5 mb-5 ml-auto mr-auto w-75\">
            ";
            // line 201
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
          </div>
        </div>
        ";
            // line 206
            echo "        ";
        }
        // line 207
        echo "
      </div>
    </aside>";
        // line 210
        echo "
    <main class=\"col-12 col-lg-9 col-xl-6 main-content\">
      <div class=\"p-sm-3 p-md-3 p-lg-3 p-xl-4\">

        ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 215
            echo "        ";
            // line 216
            echo "        <div class=\"pb-3\">
          ";
            // line 217
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
            // line 227
            echo "        ";
        }
        // line 228
        echo "
        ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 230
            echo "        ";
            // line 231
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
          ";
            // line 232
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 235
            echo "        ";
        }
        // line 236
        echo "
        ";
        // line 237
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 238
            echo "        ";
            // line 239
            echo "        <div class=\"alert alert-info\" role=\"alert\">
          ";
            // line 240
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 243
            echo "        ";
        }
        // line 244
        echo "
        ";
        // line 245
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 246
            echo "        ";
            // line 247
            echo "        <article class=\"content\">
            ";
            // line 248
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </article>
        ";
            // line 251
            echo "        ";
        }
        // line 252
        echo "
        ";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 254
            echo "        ";
            // line 255
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
          ";
            // line 256
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 259
            echo "        ";
        }
        // line 260
        echo "
        </div>
    </main>";
        // line 263
        echo "</div>";
        // line 264
        echo "</div>";
        // line 266
        echo "<footer class=\"site-footer fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-auto m-auto\">
        <p class=\"text-center\">
          ";
        // line 271
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 272
            echo "          ";
            // line 273
            echo "          <small>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "</small>
          ";
            // line 275
            echo "          ";
        }
        // line 276
        echo "        </p>
      </div>
    </div>
  </div>
</footer>
";
        // line 282
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
        return array (  401 => 282,  394 => 276,  391 => 275,  386 => 273,  384 => 272,  382 => 271,  375 => 266,  373 => 264,  371 => 263,  367 => 260,  364 => 259,  359 => 256,  356 => 255,  354 => 254,  352 => 253,  349 => 252,  346 => 251,  341 => 248,  338 => 247,  336 => 246,  334 => 245,  331 => 244,  328 => 243,  323 => 240,  320 => 239,  318 => 238,  316 => 237,  313 => 236,  310 => 235,  305 => 232,  302 => 231,  300 => 230,  298 => 229,  295 => 228,  292 => 227,  280 => 217,  277 => 216,  275 => 215,  273 => 214,  267 => 210,  263 => 207,  260 => 206,  253 => 201,  249 => 199,  247 => 198,  245 => 197,  231 => 185,  228 => 183,  225 => 182,  223 => 181,  219 => 179,  141 => 104,  138 => 102,  136 => 101,  133 => 100,  131 => 99,  125 => 97,  123 => 96,  114 => 90,  110 => 88,  107 => 86,  104 => 84,  98 => 82,  96 => 81,  88 => 75,  85 => 73,  82 => 72,  77 => 69,  74 => 68,  72 => 67,  70 => 66,  61 => 59,  58 => 57,  52 => 55,  50 => 54,  47 => 53,  43 => 50,);
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

{# REGIONS :: page.header #}
  <header class=\"header-banner navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar\">
    {% if page.header %}
      {{ page.header }}
    {% endif %}
  </header>
{# REGIONS :: page.header #}


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
