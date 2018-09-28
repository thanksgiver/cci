<?php

/* core/modules/book/templates/book-all-books-block.html.twig */
class __TwigTemplate_f5b113b1c3303e7c91acf300615cac6bce175273d364c979f85464ab37e59b70 extends Twig_Template
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
        $tags = array("for" => 20, "trans" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'trans'),
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

        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["book_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 21
            echo "  <nav role=\"navigation\" aria-label=\"";
            echo t("Book outline for @book.title", array("@book.title" => $this->getAttribute($context["book"], "title", array()), ));
            echo "\">
    ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["book"], "menu", array()), "html", null, true));
            echo "
  </nav>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/book/templates/book-all-books-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  47 => 21,  43 => 20,);
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
 * Default theme implementation for rendering book outlines within a block.
 *
 * This template is used only when the block is configured to \"show block on all
 * pages\", which presents multiple independent books on all pages.
 *
 * Available variables:
 * - book_menus: Book outlines.
 *   - id: The parent book ID.
 *   - title: The parent book title.
 *   - menu: The top-level book links.
 *
 * @see template_preprocess_book_all_books_block()
 *
 * @ingroup themeable
 */
#}
{% for book in book_menus %}
  <nav role=\"navigation\" aria-label=\"{% trans %}Book outline for {{ book.title }}{% endtrans %}\">
    {{ book.menu }}
  </nav>
{% endfor %}
", "core/modules/book/templates/book-all-books-block.html.twig", "/Volumes/Websites/cci/core/modules/book/templates/book-all-books-block.html.twig");
    }
}
