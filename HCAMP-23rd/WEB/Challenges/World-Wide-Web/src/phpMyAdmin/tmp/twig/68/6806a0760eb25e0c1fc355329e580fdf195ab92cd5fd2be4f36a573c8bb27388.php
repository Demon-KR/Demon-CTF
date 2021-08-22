<?php

/* database/structure/structure_table_row.twig */
class __TwigTemplate_b5d5be740cd0653ac7c1fc5b7bc4d40afff50764024434821a604fd2eb15063f extends Twig_Template
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
        echo "<tr id=\"row_tbl_";
        echo twig_escape_filter($this->env, ($context["curr"] ?? null), "html", null, true);
        echo "\"";
        echo ((($context["table_is_view"] ?? null)) ? (" class=\"is_view\"") : (""));
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["current_table"] ?? null), "TABLE_NAME", array(), "array")), "html", null, true);
        echo "\">
    <td class=\"center print_ignore\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["input_class"] ?? null), "html", null, true);
        echo "\"
            value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_table"] ?? null), "TABLE_NAME", array(), "array"), "html", null, true);
        echo "\"
            id=\"checkbox_tbl_";
        // line 7
        echo twig_escape_filter($this->env, ($context["curr"] ?? null), "html", null, true);
        echo "\" />
    </td>
    <th>";
        // line 10
        echo ($context["browse_table_label"] ?? null);
        // line 11
        echo ($context["tracking_icon"] ?? null);
        echo "
    </th>";
        // line 13
        if (($context["server_slave_status"] ?? null)) {
            // line 14
            echo "        <td class=\"center\">";
            // line 15
            echo ((($context["ignored"] ?? null)) ? (PhpMyAdmin\Util::getImage("s_cancel", _gettext("Not replicated"))) : (""));
            // line 16
            echo ((($context["do"] ?? null)) ? (PhpMyAdmin\Util::getImage("s_success", _gettext("Replicated"))) : (""));
            echo "
        </td>";
        }
        // line 21
        if ((($context["num_favorite_tables"] ?? null) > 0)) {
            // line 22
            echo "        <td class=\"center print_ignore\">";
            // line 24
            $context["fav_params"] = array("db" =>             // line 25
($context["db"] ?? null), "ajax_request" => true, "favorite_table" => $this->getAttribute(            // line 27
($context["current_table"] ?? null), "TABLE_NAME", array(), "array"), (((            // line 28
($context["already_favorite"] ?? null)) ? ("remove") : ("add")) . "_favorite") => true);
            // line 30
            $this->loadTemplate("database/structure/favorite_anchor.twig", "database/structure/structure_table_row.twig", 30)->display(array("table_name_hash" => md5($this->getAttribute(            // line 31
($context["current_table"] ?? null), "TABLE_NAME", array(), "array")), "db_table_name_hash" => md5(((            // line 32
($context["db"] ?? null) . ".") . $this->getAttribute(($context["current_table"] ?? null), "TABLE_NAME", array(), "array"))), "fav_params" =>             // line 33
($context["fav_params"] ?? null), "already_favorite" =>             // line 34
($context["already_favorite"] ?? null), "titles" =>             // line 35
($context["titles"] ?? null)));
            // line 37
            echo "        </td>";
        }
        // line 39
        echo "
    <td class=\"center print_ignore\">";
        // line 41
        echo ($context["browse_table"] ?? null);
        echo "
    </td>
    <td class=\"center print_ignore\">
        <a href=\"tbl_structure.php";
        // line 44
        echo ($context["tbl_url_query"] ?? null);
        echo "\">";
        // line 45
        echo $this->getAttribute(($context["titles"] ?? null), "Structure", array(), "array");
        echo "
        </a>
    </td>
    <td class=\"center print_ignore\">";
        // line 49
        echo ($context["search_table"] ?? null);
        echo "
    </td>";
        // line 52
        if ( !($context["db_is_system_schema"] ?? null)) {
            // line 53
            echo "        <td class=\"insert_table center print_ignore\">
            <a href=\"tbl_change.php";
            // line 54
            echo ($context["tbl_url_query"] ?? null);
            echo "\">";
            echo $this->getAttribute(($context["titles"] ?? null), "Insert", array(), "array");
            echo "</a>
        </td>
        <td class=\"center print_ignore\">";
            // line 56
            echo ($context["empty_table"] ?? null);
            echo "</td>
        <td class=\"center print_ignore\">
            <a class=\"ajax drop_table_anchor";
            // line 59
            echo (((($context["table_is_view"] ?? null) || ($this->getAttribute(($context["current_table"] ?? null), "ENGINE", array(), "array") == null))) ? (" view") : (""));
            echo "\"
                href=\"sql.php\" data-post=\"";
            // line 60
            echo ($context["tbl_url_query"] ?? null);
            echo "&amp;reload=1&amp;purge=1&amp;sql_query=";
            // line 61
            echo twig_escape_filter($this->env, twig_urlencode_filter(($context["drop_query"] ?? null)), "html", null, true);
            echo "&amp;message_to_show=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(($context["drop_message"] ?? null)), "html", null, true);
            echo "\">";
            // line 62
            echo $this->getAttribute(($context["titles"] ?? null), "Drop", array(), "array");
            echo "
            </a>
        </td>";
        }
        // line 67
        if (($this->getAttribute(($context["current_table"] ?? null), "TABLE_ROWS", array(), "array", true, true) && (($this->getAttribute(        // line 68
($context["current_table"] ?? null), "ENGINE", array(), "array") != null) || ($context["table_is_view"] ?? null)))) {
            // line 70
            $context["row_count"] = PhpMyAdmin\Util::formatNumber($this->getAttribute(($context["current_table"] ?? null), "TABLE_ROWS", array(), "array"), 0);
            // line 74
            echo "        <td class=\"value tbl_rows\"
            data-table=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current_table"] ?? null), "TABLE_NAME", array(), "array"), "html", null, true);
            echo "\">";
            // line 76
            if (($context["approx_rows"] ?? null)) {
                // line 77
                echo "                <a href=\"db_structure.php";
                echo PhpMyAdmin\Url::getCommon(array("ajax_request" => true, "db" =>                 // line 79
($context["db"] ?? null), "table" => $this->getAttribute(                // line 80
($context["current_table"] ?? null), "TABLE_NAME", array(), "array"), "real_row_count" => "true"));
                // line 82
                echo "\" class=\"ajax real_row_count\">
                    <bdi>
                        ~";
                // line 84
                echo twig_escape_filter($this->env, ($context["row_count"] ?? null), "html", null, true);
                echo "
                    </bdi>
                </a>";
            } else {
                // line 88
                echo twig_escape_filter($this->env, ($context["row_count"] ?? null), "html", null, true);
            }
            // line 90
            echo ($context["show_superscript"] ?? null);
            echo "
        </td>";
            // line 93
            if ( !(($context["properties_num_columns"] ?? null) > 1)) {
                // line 94
                echo "            <td class=\"nowrap\">";
                // line 95
                if ( !twig_test_empty($this->getAttribute(($context["current_table"] ?? null), "ENGINE", array(), "array"))) {
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["current_table"] ?? null), "ENGINE", array(), "array"), "html", null, true);
                } elseif (                // line 97
($context["table_is_view"] ?? null)) {
                    // line 98
                    echo _gettext("View");
                }
                // line 100
                echo "            </td>";
                // line 101
                if ((twig_length_filter($this->env, ($context["collation"] ?? null)) > 0)) {
                    // line 102
                    echo "                <td class=\"nowrap\">";
                    // line 103
                    echo ($context["collation"] ?? null);
                    echo "
                </td>";
                }
            }
            // line 108
            if (($context["is_show_stats"] ?? null)) {
                // line 109
                echo "            <td class=\"value tbl_size\">
                <a href=\"tbl_structure.php";
                // line 110
                echo ($context["tbl_url_query"] ?? null);
                echo "#showusage\">
                    <span>";
                // line 111
                echo twig_escape_filter($this->env, ($context["formatted_size"] ?? null), "html", null, true);
                echo "</span>
                    <span class=\"unit\">";
                // line 112
                echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                echo "</span>
                </a>
            </td>
            <td class=\"value tbl_overhead\">";
                // line 116
                echo ($context["overhead"] ?? null);
                echo "
            </td>";
            }
            // line 120
            if ( !(($context["show_charset"] ?? null) > 1)) {
                // line 121
                if ((twig_length_filter($this->env, ($context["charset"] ?? null)) > 0)) {
                    // line 122
                    echo "                <td class=\"nowrap\">";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
                    echo "
                </td>";
                }
            }
            // line 128
            if (($context["show_comment"] ?? null)) {
                // line 129
                $context["comment"] = $this->getAttribute(($context["current_table"] ?? null), "Comment", array(), "array");
                // line 130
                echo "            <td>";
                // line 131
                if ((twig_length_filter($this->env, ($context["comment"] ?? null)) > ($context["limit_chars"] ?? null))) {
                    // line 132
                    echo "                    <abbr title=\"";
                    echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                    echo "\">";
                    // line 133
                    echo twig_escape_filter($this->env, twig_slice($this->env, ($context["comment"] ?? null), 0, ($context["limit_chars"] ?? null)), "html", null, true);
                    echo "
                        ...
                    </abbr>";
                } else {
                    // line 137
                    echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                }
                // line 139
                echo "            </td>";
            }
            // line 142
            if (($context["show_creation"] ?? null)) {
                // line 143
                echo "            <td class=\"value tbl_creation\">";
                // line 144
                echo twig_escape_filter($this->env, ((($context["create_time"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["create_time"] ?? null)))) : ("-")), "html", null, true);
                echo "
            </td>";
            }
            // line 148
            if (($context["show_last_update"] ?? null)) {
                // line 149
                echo "            <td class=\"value tbl_last_update\">";
                // line 150
                echo twig_escape_filter($this->env, ((($context["update_time"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["update_time"] ?? null)))) : ("-")), "html", null, true);
                echo "
            </td>";
            }
            // line 154
            if (($context["show_last_check"] ?? null)) {
                // line 155
                echo "            <td class=\"value tbl_last_check\">";
                // line 156
                echo twig_escape_filter($this->env, ((($context["check_time"] ?? null)) ? (PhpMyAdmin\Util::localisedDate(strtotime(($context["check_time"] ?? null)))) : ("-")), "html", null, true);
                echo "
            </td>";
            }
        } elseif (        // line 160
($context["table_is_view"] ?? null)) {
            // line 161
            echo "        <td class=\"value tbl_rows\">-</td>
        <td class=\"nowrap\">";
            // line 163
            echo _gettext("View");
            // line 164
            echo "        </td>
        <td class=\"nowrap\">---</td>";
            // line 166
            if (($context["is_show_stats"] ?? null)) {
                // line 167
                echo "            <td class=\"value tbl_size\">-</td>
            <td class=\"value tbl_overhead\">-</td>";
            }
            // line 170
            if (($context["show_charset"] ?? null)) {
                // line 171
                echo "            <td></td>";
            }
            // line 173
            if (($context["show_comment"] ?? null)) {
                // line 174
                echo "            <td></td>";
            }
            // line 176
            if (($context["show_creation"] ?? null)) {
                // line 177
                echo "            <td class=\"value tbl_creation\">-</td>";
            }
            // line 179
            if (($context["show_last_update"] ?? null)) {
                // line 180
                echo "            <td class=\"value tbl_last_update\">-</td>";
            }
            // line 182
            if (($context["show_last_check"] ?? null)) {
                // line 183
                echo "            <td class=\"value tbl_last_check\">-</td>";
            }
        } else {
            // line 187
            $context["count"] = 0;
            // line 188
            if (($context["properties_num_columns"] ?? null)) {
                // line 189
                $context["count"] = (($context["count"] ?? null) + 2);
            }
            // line 191
            if (($context["is_show_stats"] ?? null)) {
                // line 192
                $context["count"] = (($context["count"] ?? null) + 2);
            }
            // line 194
            if (($context["show_charset"] ?? null)) {
                // line 195
                $context["count"] = (($context["count"] ?? null) + 1);
            }
            // line 197
            if (($context["show_comment"] ?? null)) {
                // line 198
                $context["count"] = (($context["count"] ?? null) + 1);
            }
            // line 200
            if (($context["show_creation"] ?? null)) {
                // line 201
                $context["count"] = (($context["count"] ?? null) + 1);
            }
            // line 203
            if (($context["show_last_update"] ?? null)) {
                // line 204
                $context["count"] = (($context["count"] ?? null) + 1);
            }
            // line 206
            if (($context["show_last_check"] ?? null)) {
                // line 207
                $context["count"] = (($context["count"] ?? null) + 1);
            }
            // line 210
            if (($context["db_is_system_schema"] ?? null)) {
                // line 211
                $context["action_colspan"] = 3;
            } else {
                // line 213
                $context["action_colspan"] = 6;
            }
            // line 215
            if ((($context["num_favorite_tables"] ?? null) > 0)) {
                // line 216
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
            }
            // line 219
            $context["colspan_for_structure"] = (($context["action_colspan"] ?? null) + 3);
            // line 220
            echo "        <td colspan=\"";
            echo (((($context["colspan_for_structure"] ?? null) - ($context["db_is_system_schema"] ?? null))) ? (6) : (9));
            echo "\"
            class=\"center\">";
            // line 222
            echo _gettext("in use");
            // line 223
            echo "        </td>";
        }
        // line 225
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "database/structure/structure_table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 225,  385 => 223,  383 => 222,  378 => 220,  376 => 219,  373 => 216,  371 => 215,  368 => 213,  365 => 211,  363 => 210,  360 => 207,  358 => 206,  355 => 204,  353 => 203,  350 => 201,  348 => 200,  345 => 198,  343 => 197,  340 => 195,  338 => 194,  335 => 192,  333 => 191,  330 => 189,  328 => 188,  326 => 187,  322 => 183,  320 => 182,  317 => 180,  315 => 179,  312 => 177,  310 => 176,  307 => 174,  305 => 173,  302 => 171,  300 => 170,  296 => 167,  294 => 166,  291 => 164,  289 => 163,  286 => 161,  284 => 160,  279 => 156,  277 => 155,  275 => 154,  270 => 150,  268 => 149,  266 => 148,  261 => 144,  259 => 143,  257 => 142,  254 => 139,  251 => 137,  245 => 133,  241 => 132,  239 => 131,  237 => 130,  235 => 129,  233 => 128,  227 => 123,  225 => 122,  223 => 121,  221 => 120,  216 => 116,  210 => 112,  206 => 111,  202 => 110,  199 => 109,  197 => 108,  191 => 103,  189 => 102,  187 => 101,  185 => 100,  182 => 98,  180 => 97,  178 => 96,  176 => 95,  174 => 94,  172 => 93,  168 => 90,  165 => 88,  159 => 84,  155 => 82,  153 => 80,  152 => 79,  150 => 77,  148 => 76,  145 => 75,  142 => 74,  140 => 70,  138 => 68,  137 => 67,  131 => 62,  126 => 61,  123 => 60,  119 => 59,  114 => 56,  107 => 54,  104 => 53,  102 => 52,  98 => 49,  92 => 45,  89 => 44,  83 => 41,  80 => 39,  77 => 37,  75 => 35,  74 => 34,  73 => 33,  72 => 32,  71 => 31,  70 => 30,  68 => 28,  67 => 27,  66 => 25,  65 => 24,  63 => 22,  61 => 21,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  46 => 11,  44 => 10,  39 => 7,  35 => 6,  31 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/structure/structure_table_row.twig", "/var/www/html/phpMyAdmin/templates/database/structure/structure_table_row.twig");
    }
}
