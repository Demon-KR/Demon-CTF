<?php

/* server/databases/databases_footer.twig */
class __TwigTemplate_1f4437349f8a00b4113d0f6014552d8fa23bb46bc4d4a98a2a895c2b6ffea14c extends Twig_Template
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
        echo "<tfoot>
    <tr>";
        // line 3
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 4
            echo "            <th></th>";
        }
        // line 6
        echo "        <th>";
        // line 7
        echo _gettext("Total");
        echo ": <span id=\"filter-rows-count\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["database_count"] ?? null), "html", null, true);
        // line 9
        echo "</span>
        </th>";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 12
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 13
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute($context["stat"], "footer", array(), "array"), 3, 1);
                    // line 14
                    $context["value"] = $this->getAttribute(($context["byte_format"] ?? null), 0, array(), "array");
                    // line 15
                    $context["unit"] = $this->getAttribute(($context["byte_format"] ?? null), 1, array(), "array");
                } elseif (($this->getAttribute(                // line 16
$context["stat"], "format", array(), "array") === "number")) {
                    // line 17
                    $context["value"] = PhpMyAdmin\Util::formatNumber($this->getAttribute($context["stat"], "footer", array(), "array"), 0);
                } else {
                    // line 19
                    $context["value"] = htmlentities($this->getAttribute($context["stat"], "footer", array(), "array"), 0);
                }
                // line 21
                echo "
            <th class=\"value\">";
                // line 23
                if ($this->getAttribute($context["stat"], "description_function", array(), "array", true, true)) {
                    // line 24
                    echo "                    <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($this->getAttribute($context["stat"], "footer", array(), "array")), "html", null, true);
                    echo "\">";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    </dfn>";
                } else {
                    // line 28
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                }
                // line 30
                echo "            </th>";
                // line 31
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 32
                    echo "                <th class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</th>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        if (($context["master_replication"] ?? null)) {
            // line 36
            echo "            <th></th>";
        }
        // line 38
        if (($context["slave_replication"] ?? null)) {
            // line 39
            echo "            <th></th>";
        }
        // line 41
        echo "        <th></th>
    </tr>
</tfoot>
</table>
</div>";
        // line 48
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 49
            $this->loadTemplate("select_all.twig", "server/databases/databases_footer.twig", 49)->display(array("pma_theme_image" =>             // line 50
($context["pma_theme_image"] ?? null), "text_dir" =>             // line 51
($context["text_dir"] ?? null), "form_name" => "dbStatsForm"));
            // line 55
            echo PhpMyAdmin\Util::getButtonOrImage("", "mult_submit ajax", _gettext("Drop"), "b_deltbl");
        }
        // line 64
        if (twig_test_empty(($context["dbstats"] ?? null))) {
            // line 65
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), array(_gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.")));
            // line 67
            ob_start();
            // line 68
            echo "        <strong>";
            echo _gettext("Enable statistics");
            echo "</strong>";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 70
            $context["items"] = array(0 => array("content" =>             // line 71
($context["content"] ?? null), "class" => "li_switch_dbstats", "url" => array("href" => ("server_databases.php" . PhpMyAdmin\Url::getCommon(array("dbstats" => "1"))), "title" => _gettext("Enable statistics"))));
            // line 78
            $this->loadTemplate("list/unordered.twig", "server/databases/databases_footer.twig", 78)->display(array("items" => ($context["items"] ?? null)));
        }
        // line 80
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/databases/databases_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 80,  128 => 78,  126 => 71,  125 => 70,  120 => 68,  118 => 67,  116 => 65,  114 => 64,  111 => 55,  109 => 51,  108 => 50,  107 => 49,  105 => 48,  99 => 41,  96 => 39,  94 => 38,  91 => 36,  89 => 35,  79 => 32,  77 => 31,  75 => 30,  72 => 28,  67 => 25,  63 => 24,  61 => 23,  58 => 21,  55 => 19,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  37 => 11,  34 => 9,  32 => 8,  29 => 7,  27 => 6,  24 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/databases_footer.twig", "/var/www/html/phpMyAdmin/templates/server/databases/databases_footer.twig");
    }
}
