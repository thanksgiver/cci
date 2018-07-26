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
        $filters = array("t" => 105);
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
    <aside class=\"d-none d-md-block col-12 col-md-3 col-lg-2 col-xl-2 sidebar-left\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4\">

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
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 76
            echo "        <nav class=\"navigation text-center\">
           ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        </nav>";
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        // line 81
        echo "
        ";
        // line 83
        echo "        <div class=\"alert alert-secondary mt-2\" role=\"alert\">
        <blockquote class=\"blockquote m-0\">
          <p class=\"mb-0\">神爱世人，甚至将他的独生子赐给他们，叫一切信他的，不致灭亡，反得永生。</p>
          <footer class=\"blockquote-footer\">约翰福音<cite title=\"Source Title\">3：16</cite></footer>
        </blockquote>
        </div>

        ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "tagline", array())) {
            // line 91
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tagline", array()), "html", null, true));
            echo "
        ";
        }
        // line 93
        echo "        ";
        // line 94
        echo "
      </div>
    </aside>";
        // line 97
        echo "

    <aside class=\"d-none d-lg-block col-lg-2 col-xl-2 sidebar-right\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4\">

        ";
        // line 103
        echo "        <div class=\"search-container mb-5 w-75 mx-auto\">
          <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Keywords")));
        echo "\" aria-label=\"Keyword\" aria-describedby=\"search-button\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" id=\"search-button\"><span class=\"oi oi-magnifying-glass\"></span></button>
          </div>
          </div>
        </div>
        ";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 112
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
        ";
        }
        // line 114
        echo "        ";
        // line 115
        echo "
        <!-- <div class=\"card m-auto w-75\">
          <img class=\"card-img-top\" src=\"https://fakeimg.pl/360x180/?text=Hello\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
          </div>
        </div> -->

        ";
        // line 125
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 126
            echo "        ";
            // line 127
            echo "        <div class=\"secondary-menu\">
          <div class=\"mt-5 mb-5 ml-auto mr-auto w-75\">
            ";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
          </div>
        </div>
        ";
            // line 134
            echo "        ";
        }
        // line 135
        echo "
      </div>
    </aside>";
        // line 138
        echo "
    <main class=\"col-12 col-md-9 col-lg-8 col-xl-8 main-content\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4 px-xl-5\">

        ";
        // line 142
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 143
            echo "        ";
            // line 144
            echo "        <div class=\"pb-3\">
          ";
            // line 145
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
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 157
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 158
            echo "        ";
            // line 159
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
          ";
            // line 160
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 163
            echo "        ";
        }
        // line 164
        echo "
        ";
        // line 165
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 166
            echo "        ";
            // line 167
            echo "        <div class=\"alert alert-info\" role=\"alert\">
          ";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 171
            echo "        ";
        }
        // line 172
        echo "
        ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 174
            echo "        ";
            // line 175
            echo "        <article class=\"content\">
            ";
            // line 176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </article>
        ";
            // line 179
            echo "        ";
        }
        // line 180
        echo "
        ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 182
            echo "        ";
            // line 183
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
          ";
            // line 184
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 187
            echo "        ";
        }
        // line 188
        echo "
        </div>
    </main>";
        // line 191
        echo "</div>";
        // line 192
        echo "</div>";
        // line 193
        echo "

";
        // line 196
        echo "<footer class=\"site-footer fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-auto m-auto\">
        <p class=\"text-center\">
          ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "copyright", array())) {
            // line 202
            echo "          ";
            // line 203
            echo "          <small>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "copyright", array()), "html", null, true));
            echo "</small>
          ";
            // line 205
            echo "          ";
        }
        // line 206
        echo "        </p>
      </div>
    </div>
  </div>
</footer>
";
        // line 212
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
        return array (  331 => 212,  324 => 206,  321 => 205,  316 => 203,  314 => 202,  312 => 201,  305 => 196,  301 => 193,  299 => 192,  297 => 191,  293 => 188,  290 => 187,  285 => 184,  282 => 183,  280 => 182,  278 => 181,  275 => 180,  272 => 179,  267 => 176,  264 => 175,  262 => 174,  260 => 173,  257 => 172,  254 => 171,  249 => 168,  246 => 167,  244 => 166,  242 => 165,  239 => 164,  236 => 163,  231 => 160,  228 => 159,  226 => 158,  224 => 157,  221 => 156,  218 => 155,  206 => 145,  203 => 144,  201 => 143,  199 => 142,  193 => 138,  189 => 135,  186 => 134,  179 => 129,  175 => 127,  173 => 126,  171 => 125,  159 => 115,  157 => 114,  151 => 112,  149 => 111,  140 => 105,  136 => 103,  129 => 97,  125 => 94,  123 => 93,  117 => 91,  115 => 90,  106 => 83,  103 => 81,  101 => 80,  98 => 79,  94 => 77,  91 => 76,  88 => 75,  85 => 73,  82 => 72,  77 => 69,  74 => 68,  72 => 67,  70 => 66,  61 => 59,  58 => 57,  52 => 55,  50 => 54,  47 => 53,  43 => 50,);
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
    <aside class=\"d-none d-md-block col-12 col-md-3 col-lg-2 col-xl-2 sidebar-left\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4\">

        {% if page.brand %}
        {# REGIONS :: page.brand #}
        <div class=\"logo-container mx-auto\">
          {{ page.brand }}
        </div>
        {# REGIONS :: page.brand #}
        {% endif %}

        {# REGIONS :: page.primary_menu #}
        {% if page.primary_menu %}
        <nav class=\"navigation text-center\">
           {{ page.primary_menu }}
        </nav>{# /.navigation #}
        {% endif %}
        {# REGIONS :: page.primary_menu #}

        {# REGIONS :: page.tagline #}
        <div class=\"alert alert-secondary mt-2\" role=\"alert\">
        <blockquote class=\"blockquote m-0\">
          <p class=\"mb-0\">神爱世人，甚至将他的独生子赐给他们，叫一切信他的，不致灭亡，反得永生。</p>
          <footer class=\"blockquote-footer\">约翰福音<cite title=\"Source Title\">3：16</cite></footer>
        </blockquote>
        </div>

        {% if page.tagline %}
          {{ page.tagline }}
        {% endif %}
        {# REGIONS :: page.tagline #}

      </div>
    </aside>{# /.sidebar-left #}


    <aside class=\"d-none d-lg-block col-lg-2 col-xl-2 sidebar-right\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4\">

        {# REGIONS :: page.search #}
        <div class=\"search-container mb-5 w-75 mx-auto\">
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

        <!-- <div class=\"card m-auto w-75\">
          <img class=\"card-img-top\" src=\"https://fakeimg.pl/360x180/?text=Hello\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
          </div>
        </div> -->

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

    <main class=\"col-12 col-md-9 col-lg-8 col-xl-8 main-content\">
      <div class=\"p-xs-2 p-sm-2 p-md-3 p-lg-4 px-xl-5\">

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
          {% if page.copyright %}
          {# REGIONS :: page.copyright #}
          <small>{{ page.copyright }}</small>
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
