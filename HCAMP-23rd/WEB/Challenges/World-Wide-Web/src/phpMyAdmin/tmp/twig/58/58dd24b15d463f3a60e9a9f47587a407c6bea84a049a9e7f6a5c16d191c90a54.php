<?php

/* server/databases/index.twig */
class __TwigTemplate_188d63264a07fd181320a63e70b37b22beaec8a9d61a5ea6211fcb2eb392da92 extends Twig_Template
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
        // line 2
        $this->loadTemplate("server/sub_page_header.twig", "server/databases/index.twig", 2)->display(array("type" => ((        // line 3
($context["dbstats"] ?? null)) ? ("database_statistics") : ("databases"))));
        // line 7
        if (($context["show_create_db"] ?? null)) {
            // line 8
            $this->loadTemplate("server/databases/create.twig", "server/databases/index.twig", 8)->display(array("is_create_db_priv" =>             // line 9
($context["is_create_db_priv"] ?? null), "dbstats" =>             // line 10
($context["dbstats"] ?? null), "db_to_create" =>             // line 11
($context["db_to_create"] ?? null), "server_collation" =>             // line 12
($context["server_collation"] ?? null), "dbi" =>             // line 13
($context["dbi"] ?? null), "disable_is" =>             // line 14
($context["disable_is"] ?? null)));
        }
        // line 18
        $this->loadTemplate("filter.twig", "server/databases/index.twig", 18)->display(array("filter_value" => ""));
        // line 21
        if ( !(null === ($context["databases"] ?? null))) {
            // line 22
            echo ($context["databases"] ?? null);
        } else {
            // line 24
            echo "    <p>";
            echo _gettext("No databases");
            echo "</p>";
        }
    }

    public function getTemplateName()
    {
        return "server/databases/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 24,  37 => 22,  35 => 21,  33 => 18,  30 => 14,  29 => 13,  28 => 12,  27 => 11,  26 => 10,  25 => 9,  24 => 8,  22 => 7,  20 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/index.twig", "/var/www/html/phpMyAdmin/templates/server/databases/index.twig");
    }
}
