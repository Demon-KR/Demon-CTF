<?php

/* database/structure/table_header.twig */
class __TwigTemplate_aa738e39915f1121fe96ab578dad296e360d3331383251e112f0e75f357196fe extends Twig_Template
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
        echo "<form method=\"post\" action=\"db_structure.php\" name=\"tablesForm\" id=\"tablesForm\">";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
<div class=\"responsivetable\">
<table id=\"structureTable\" class=\"data\">
    <thead>
        <tr>
            <th class=\"print_ignore\"></th>
            <th>";
        // line 8
        echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Table"), "table");
        echo "</th>";
        // line 9
        if (($context["replication"] ?? null)) {
            // line 10
            echo "                <th>";
            echo _gettext("Replication");
            echo "</th>";
        }
        // line 13
        if (($context["db_is_system_schema"] ?? null)) {
            // line 14
            $context["action_colspan"] = 3;
        } else {
            // line 16
            $context["action_colspan"] = 6;
        }
        // line 18
        if ((($context["num_favorite_tables"] ?? null) > 0)) {
            // line 19
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
        }
        // line 21
        echo "            <th colspan=\"";
        echo twig_escape_filter($this->env, ($context["action_colspan"] ?? null), "html", null, true);
        echo "\" class=\"print_ignore\">";
        // line 22
        echo _gettext("Action");
        // line 23
        echo "            </th>";
        // line 25
        echo "            <th>";
        // line 26
        echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Rows"), "records", "DESC");
        // line 27
        echo PhpMyAdmin\Util::showHint(PhpMyAdmin\Sanitize::sanitize(_gettext("May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].")));
        // line 29
        echo "
            </th>";
        // line 31
        if ( !(($context["properties_num_columns"] ?? null) > 1)) {
            // line 32
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Type"), "type");
            echo "</th>
                <th>";
            // line 33
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Collation"), "collation");
            echo "</th>";
        }
        // line 36
        if (($context["is_show_stats"] ?? null)) {
            // line 38
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Size"), "size", "DESC");
            echo "</th>";
            // line 40
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Overhead"), "overhead", "DESC");
            echo "</th>";
        }
        // line 43
        if (($context["show_charset"] ?? null)) {
            // line 44
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Charset"), "charset");
            echo "</th>";
        }
        // line 47
        if (($context["show_comment"] ?? null)) {
            // line 48
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Comment"), "comment");
            echo "</th>";
        }
        // line 51
        if (($context["show_creation"] ?? null)) {
            // line 53
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Creation"), "creation", "DESC");
            echo "</th>";
        }
        // line 56
        if (($context["show_last_update"] ?? null)) {
            // line 58
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Last update"), "last_update", "DESC");
            echo "</th>";
        }
        // line 61
        if (($context["show_last_check"] ?? null)) {
            // line 63
            echo "                <th>";
            echo PhpMyAdmin\Util::sortableTableHeader(_gettext("Last check"), "last_check", "DESC");
            echo "</th>";
        }
        // line 65
        echo "        </tr>
    </thead>
    <tbody>
";
    }

    public function getTemplateName()
    {
        return "database/structure/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 65,  122 => 63,  120 => 61,  115 => 58,  113 => 56,  108 => 53,  106 => 51,  101 => 48,  99 => 47,  94 => 44,  92 => 43,  87 => 40,  83 => 38,  81 => 36,  77 => 33,  72 => 32,  70 => 31,  67 => 29,  65 => 27,  63 => 26,  61 => 25,  59 => 23,  57 => 22,  53 => 21,  50 => 19,  48 => 18,  45 => 16,  42 => 14,  40 => 13,  35 => 10,  33 => 9,  30 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/structure/table_header.twig", "/var/www/html/phpMyAdmin/templates/database/structure/table_header.twig");
    }
}
