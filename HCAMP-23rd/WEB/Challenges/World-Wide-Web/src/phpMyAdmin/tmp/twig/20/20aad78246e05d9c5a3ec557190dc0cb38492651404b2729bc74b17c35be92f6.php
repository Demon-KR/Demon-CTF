<?php

/* list/unordered.twig */
class __TwigTemplate_b75af44e6a6f4c95c4468abadc8340439e03336ef51c3e14f50fa77a675348df extends Twig_Template
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
        // line 1
        echo "<ul";
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 2
        if ( !twig_test_empty(($context["class"] ?? null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 4
        if ( !twig_test_empty(($context["items"] ?? null))) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                if ( !twig_test_iterable($context["item"])) {
                    // line 7
                    $context["item"] = array("content" => $context["item"]);
                }
                // line 9
                $this->loadTemplate("list/item.twig", "list/unordered.twig", 9)->display($context["item"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ( !twig_test_empty(        // line 11
($context["content"] ?? null))) {
            // line 12
            echo ($context["content"] ?? null);
        }
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "list/unordered.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  52 => 12,  50 => 11,  44 => 9,  41 => 7,  39 => 6,  35 => 5,  33 => 4,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list/unordered.twig", "/var/www/html/phpMyAdmin/templates/list/unordered.twig");
    }
}
