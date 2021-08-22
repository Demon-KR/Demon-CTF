<?php

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_2c3a7c5f4d4c40799d3a3d0826574c5ce02da2b14554e7d730201bc924ead413 extends Twig_Template
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
        echo "<tbody id=\"tbl_summary_row\">
<tr>
    <th class=\"print_ignore\"></th>
    <th class=\"tbl_num nowrap\">";
        // line 5
        ob_start();
        // line 6
        echo _ngettext("%s table", "%s tables", abs(($context["num_tables"] ?? null)));
        $context["num_tables_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo twig_escape_filter($this->env, sprintf(($context["num_tables_trans"] ?? null), PhpMyAdmin\Util::formatNumber(($context["num_tables"] ?? null), 0)), "html", null, true);
        echo "
    </th>";
        // line 10
        if (($context["server_slave_status"] ?? null)) {
            // line 11
            echo "        <th>";
            echo _gettext("Replication");
            echo "</th>";
        }
        // line 13
        $context["sum_colspan"] = ((($context["db_is_system_schema"] ?? null)) ? (4) : (7));
        // line 14
        if ((($context["num_favorite_tables"] ?? null) == 0)) {
            // line 15
            $context["sum_colspan"] = (($context["sum_colspan"] ?? null) - 1);
        }
        // line 17
        echo "    <th colspan=\"";
        echo twig_escape_filter($this->env, ($context["sum_colspan"] ?? null), "html", null, true);
        echo "\" class=\"print_ignore\">";
        echo _gettext("Sum");
        echo "</th>";
        // line 18
        $context["row_count_sum"] = PhpMyAdmin\Util::formatNumber(($context["sum_entries"] ?? null), 0);
        // line 20
        $context["row_sum_url"] = array();
        // line 21
        if (array_key_exists("approx_rows", $context)) {
            // line 22
            $context["row_sum_url"] = array("ajax_request" => true, "db" =>             // line 24
($context["db"] ?? null), "real_row_count" => "true", "real_row_count_all" => "true");
        }
        // line 29
        if (($context["approx_rows"] ?? null)) {
            // line 30
            ob_start();
            // line 31
            echo "<a href=\"db_structure.php";
            // line 32
            echo PhpMyAdmin\Url::getCommon(($context["row_sum_url"] ?? null));
            echo "\" class=\"ajax row_count_sum\">~";
            // line 33
            echo twig_escape_filter($this->env, ($context["row_count_sum"] ?? null), "html", null, true);
            // line 34
            echo "</a>";
            $context["cell_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 37
            $context["cell_text"] = ($context["row_count_sum"] ?? null);
        }
        // line 39
        echo "    <th class=\"value tbl_rows\">";
        echo twig_escape_filter($this->env, ($context["cell_text"] ?? null), "html", null, true);
        echo "</th>";
        // line 40
        if ( !(($context["properties_num_columns"] ?? null) > 1)) {
            // line 42
            $context["default_engine"] = $this->getAttribute(($context["dbi"] ?? null), "fetchValue", array(0 => "SELECT @@storage_engine;"), "method");
            // line 43
            if (twig_test_empty(($context["default_engine"] ?? null))) {
                // line 45
                $context["default_engine"] = $this->getAttribute(($context["dbi"] ?? null), "fetchValue", array(0 => "SELECT @@default_storage_engine;"), "method");
            }
            // line 47
            echo "        <th class=\"center\">
            <dfn title=\"";
            // line 48
            echo twig_escape_filter($this->env, sprintf(_gettext("%s is the default storage engine on this MySQL server."), ($context["default_engine"] ?? null)), "html", null, true);
            echo "\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["default_engine"] ?? null), "html", null, true);
            echo "
            </dfn>
        </th>
        <th>";
            // line 53
            if ( !twig_test_empty(($context["db_collation"] ?? null))) {
                // line 54
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr(($context["db_collation"] ?? null)), "html", null, true);
                echo " (";
                echo _gettext("Default");
                echo ")\">";
                // line 55
                echo twig_escape_filter($this->env, ($context["db_collation"] ?? null), "html", null, true);
                echo "
                </dfn>";
            }
            // line 58
            echo "        </th>";
        }
        // line 61
        if (($context["is_show_stats"] ?? null)) {
            // line 62
            $context["sum"] = PhpMyAdmin\Util::formatByteDown(($context["sum_size"] ?? null), 3, 1);
            // line 63
            $context["sum_formatted"] = $this->getAttribute(($context["sum"] ?? null), 0, array(), "array");
            // line 64
            $context["sum_unit"] = $this->getAttribute(($context["sum"] ?? null), 1, array(), "array");
            // line 65
            echo "        <th class=\"value tbl_size\">";
            echo twig_escape_filter($this->env, ($context["sum_formatted"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["sum_unit"] ?? null), "html", null, true);
            echo "</th>";
            // line 67
            $context["overhead"] = PhpMyAdmin\Util::formatByteDown(($context["overhead_size"] ?? null), 3, 1);
            // line 68
            $context["overhead_formatted"] = $this->getAttribute(($context["overhead"] ?? null), 0, array(), "array");
            // line 69
            $context["overhead_unit"] = $this->getAttribute(($context["overhead"] ?? null), 1, array(), "array");
            // line 70
            echo "        <th class=\"value tbl_overhead\">";
            echo twig_escape_filter($this->env, ($context["overhead_formatted"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["overhead_unit"] ?? null), "html", null, true);
            echo "</th>";
        }
        // line 73
        if (($context["show_charset"] ?? null)) {
            // line 74
            echo "        <th>";
            echo twig_escape_filter($this->env, ($context["db_charset"] ?? null), "html", null, true);
            echo "</th>";
        }
        // line 76
        if (($context["show_comment"] ?? null)) {
            // line 77
            echo "        <th></th>";
        }
        // line 79
        if (($context["show_creation"] ?? null)) {
            // line 80
            echo "        <th class=\"value tbl_creation\">";
            // line 81
            echo twig_escape_filter($this->env, ((($context["create_time_all"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["create_time_all"] ?? null)))) : ("-")), "html", null, true);
            echo "
        </th>";
        }
        // line 84
        if (($context["show_last_update"] ?? null)) {
            // line 85
            echo "        <th class=\"value tbl_last_update\">";
            // line 86
            echo twig_escape_filter($this->env, ((($context["update_time_all"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["update_time_all"] ?? null)))) : ("-")), "html", null, true);
            echo "
        </th>";
        }
        // line 89
        if (($context["show_last_check"] ?? null)) {
            // line 90
            echo "        <th class=\"value tbl_last_check\">";
            // line 91
            echo twig_escape_filter($this->env, ((($context["check_time_all"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["check_time_all"] ?? null)))) : ("-")), "html", null, true);
            echo "
        </th>";
        }
        // line 94
        echo "</tr>
</tbody>
";
    }

    public function getTemplateName()
    {
        return "database/structure/body_for_table_summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 94,  181 => 91,  179 => 90,  177 => 89,  172 => 86,  170 => 85,  168 => 84,  163 => 81,  161 => 80,  159 => 79,  156 => 77,  154 => 76,  149 => 74,  147 => 73,  141 => 70,  139 => 69,  137 => 68,  135 => 67,  130 => 65,  128 => 64,  126 => 63,  124 => 62,  122 => 61,  119 => 58,  114 => 55,  108 => 54,  106 => 53,  100 => 49,  97 => 48,  94 => 47,  91 => 45,  89 => 43,  87 => 42,  85 => 40,  81 => 39,  78 => 37,  74 => 34,  72 => 33,  69 => 32,  67 => 31,  65 => 30,  63 => 29,  60 => 24,  59 => 22,  57 => 21,  55 => 20,  53 => 18,  47 => 17,  44 => 15,  42 => 14,  40 => 13,  35 => 11,  33 => 10,  29 => 8,  26 => 6,  24 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/structure/body_for_table_summary.twig", "/var/www/html/phpMyAdmin/templates/database/structure/body_for_table_summary.twig");
    }
}
