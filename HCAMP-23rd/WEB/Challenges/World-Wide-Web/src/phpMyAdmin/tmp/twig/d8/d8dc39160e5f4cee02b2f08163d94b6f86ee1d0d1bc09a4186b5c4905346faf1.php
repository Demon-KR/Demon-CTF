<?php

/* display/results/comment_for_row.twig */
class __TwigTemplate_66d5ba7a6b091967cf618f3f6df8e2d82fd6a46b8b30983411164c61ec2b08ae extends Twig_Template
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
        if (($this->getAttribute(($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array", true, true) && $this->getAttribute($this->getAttribute(        // line 2
($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array", false, true), $this->getAttribute(($context["fields_meta"] ?? null), "name", array()), array(), "array", true, true))) {
            // line 3
            echo "    <span class=\"tblcomment\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array"), $this->getAttribute(($context["fields_meta"] ?? null), "name", array()), array(), "array"), "html", null, true);
            echo "\">";
            // line 4
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array"), $this->getAttribute(($context["fields_meta"] ?? null), "name", array()), array(), "array")) > ($context["limit_chars"] ?? null))) {
                // line 5
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array"), $this->getAttribute(($context["fields_meta"] ?? null), "name", array()), array(), "array"), 0, ($context["limit_chars"] ?? null)), "html", null, true);
                echo "…";
            } else {
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comments_map"] ?? null), $this->getAttribute(($context["fields_meta"] ?? null), "table", array()), array(), "array"), $this->getAttribute(($context["fields_meta"] ?? null), "name", array()), array(), "array"), "html", null, true);
            }
            // line 9
            echo "    </span>";
        }
    }

    public function getTemplateName()
    {
        return "display/results/comment_for_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/results/comment_for_row.twig", "/var/www/html/phpMyAdmin/templates/display/results/comment_for_row.twig");
    }
}
