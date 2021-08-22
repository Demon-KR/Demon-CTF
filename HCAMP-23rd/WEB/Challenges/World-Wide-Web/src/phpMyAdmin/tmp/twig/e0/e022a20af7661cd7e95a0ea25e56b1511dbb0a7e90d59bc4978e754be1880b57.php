<?php

/* display/results/additional_fields.twig */
class __TwigTemplate_0cbb4afa889e86168e6c25631ce7cf7dba5511b9b2394569a537f4d389e72167 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"sql_query\" value=\"";
        echo ($context["sql_query"] ?? null);
        echo "\" />
<input type=\"hidden\" name=\"goto\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\" />";
        // line 4
        echo "<input type=\"hidden\" name=\"pos\" size=\"3\" value=\"";
        echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
        echo "\" />";
        // line 6
        echo _gettext("Number of rows:");
        // line 7
        echo PhpMyAdmin\Util::getDropdown("session_max_rows",         // line 9
($context["number_of_rows_choices"] ?? null),         // line 10
($context["max_rows"] ?? null), "", "autosubmit",         // line 13
($context["number_of_rows_placeholder"] ?? null));
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "display/results/additional_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  40 => 13,  39 => 10,  38 => 9,  37 => 7,  35 => 6,  32 => 5,  27 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/results/additional_fields.twig", "/var/www/html/phpMyAdmin/templates/display/results/additional_fields.twig");
    }
}
