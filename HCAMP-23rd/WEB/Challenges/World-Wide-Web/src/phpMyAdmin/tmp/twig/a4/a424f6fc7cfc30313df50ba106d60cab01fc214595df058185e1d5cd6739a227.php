<?php

/* server/databases/table_header.twig */
class __TwigTemplate_2b9a372d7272e53ac9d646ee6961b935b27109c11aac4c36192b441f94e9c3fb extends Twig_Template
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
        echo "<thead>
    <tr>";
        // line 3
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 4
            echo "            <th></th>";
        }
        // line 6
        echo "        <th>
            <a href=\"server_databases.php";
        // line 7
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\">";
        // line 8
        echo _gettext("Database");
        // line 9
        echo (((($context["sort_by"] ?? null) == "SCHEMA_NAME")) ? (PhpMyAdmin\Util::getImage(("s_" .         // line 10
($context["sort_order"] ?? null)),         // line 11
($context["sort_order_text"] ?? null))) : (""));
        // line 12
        echo "
            </a>
        </th>";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 16
                $context["url_params"] = twig_array_merge(($context["url_params"] ?? null), array("sort_by" =>                 // line 17
$context["stat_name"], "sort_order" => ((((                // line 18
($context["sort_by"] ?? null) == $context["stat_name"]) && (($context["sort_order"] ?? null) == "desc"))) ? ("asc") : ("desc"))));
                // line 20
                echo "
            <th";
                // line 21
                echo ((($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) ? (" colspan=\"2\"") : (""));
                echo ">
                <a href=\"server_databases.php";
                // line 22
                echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
                echo "\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "disp_name", array(), "array"), "html", null, true);
                // line 24
                echo (((($context["sort_by"] ?? null) == $context["stat_name"])) ? (PhpMyAdmin\Util::getImage(("s_" .                 // line 25
($context["sort_order"] ?? null)),                 // line 26
($context["sort_order_text"] ?? null))) : (""));
                // line 27
                echo "
                </a>
            </th>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        if (($context["master_replication"] ?? null)) {
            // line 32
            echo "            <th>";
            echo _gettext("Master replication");
            echo "</th>";
        }
        // line 34
        if (($context["slave_replication"] ?? null)) {
            // line 35
            echo "            <th>";
            echo _gettext("Slave replication");
            echo "</th>";
        }
        // line 37
        echo "        <th>";
        echo _gettext("Action");
        echo "</th>
    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  86 => 35,  84 => 34,  79 => 32,  77 => 31,  68 => 27,  66 => 26,  65 => 25,  64 => 24,  62 => 23,  59 => 22,  55 => 21,  52 => 20,  50 => 18,  49 => 17,  48 => 16,  43 => 15,  39 => 12,  37 => 11,  36 => 10,  35 => 9,  33 => 8,  30 => 7,  27 => 6,  24 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/table_header.twig", "/var/www/html/phpMyAdmin/templates/server/databases/table_header.twig");
    }
}
