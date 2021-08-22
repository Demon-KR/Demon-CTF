<?php

/* server/databases/create.twig */
class __TwigTemplate_e18f640a982529d7e324b86507f968ed162922d2f1e1a81835eb866d78d74756 extends Twig_Template
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
        echo "<ul>
    <li id=\"li_create_database\" class=\"no_bullets\">";
        // line 3
        if (($context["is_create_db_priv"] ?? null)) {
            // line 4
            echo "            <form method=\"post\" action=\"server_databases.php\" id=\"create_database_form\" class=\"ajax\">
                <p><strong>
                    <label for=\"text_create_db\">";
            // line 7
            echo PhpMyAdmin\Util::getImage("b_newdb");
            // line 8
            echo _gettext("Create database");
            // line 9
            echo "                    </label>";
            // line 10
            echo PhpMyAdmin\Util::showMySQLDocu("CREATE_DATABASE");
            echo "
                </strong></p>";
            // line 13
            echo PhpMyAdmin\Url::getHiddenInputs("", "", 5);
            echo "
                <input type=\"hidden\" name=\"reload\" value=\"1\" />";
            // line 15
            if ( !twig_test_empty(($context["dbstats"] ?? null))) {
                // line 16
                echo "                    <input type=\"hidden\" name=\"dbstats\" value=\"1\" />";
            }
            // line 18
            echo "
                <input type=\"text\" name=\"new_db\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["db_to_create"] ?? null), "html", null, true);
            echo "\"
                    maxlength=\"64\" class=\"textfield\" id=\"text_create_db\" required
                    placeholder=\"";
            // line 21
            echo _gettext("Database name");
            echo "\" />";
            // line 22
            echo PhpMyAdmin\Charsets::getCollationDropdownBox(            // line 23
($context["dbi"] ?? null),             // line 24
($context["disable_is"] ?? null), "db_collation", null,             // line 27
($context["server_collation"] ?? null), true);
            // line 29
            echo "
                <input type=\"submit\" value=\"";
            // line 30
            echo _gettext("Create");
            echo "\" id=\"buttonGo\" />
            </form>";
        } else {
            // line 34
            echo "            <p><strong>";
            // line 35
            echo PhpMyAdmin\Util::getImage("b_newdb");
            // line 36
            echo _gettext("Create database");
            // line 37
            echo PhpMyAdmin\Util::showMySQLDocu("CREATE_DATABASE");
            echo "
            </strong></p>

            <span class=\"noPrivileges\">";
            // line 41
            echo PhpMyAdmin\Util::getImage("s_error", "", array("hspace" => 2, "border" => 0, "align" => "middle"));
            // line 46
            echo _gettext("No Privileges");
            // line 47
            echo "            </span>";
        }
        // line 49
        echo "    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "server/databases/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 49,  87 => 47,  85 => 46,  83 => 41,  77 => 37,  75 => 36,  73 => 35,  71 => 34,  66 => 30,  63 => 29,  61 => 27,  60 => 24,  59 => 23,  58 => 22,  55 => 21,  50 => 19,  47 => 18,  44 => 16,  42 => 15,  38 => 13,  34 => 10,  32 => 9,  30 => 8,  28 => 7,  24 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/create.twig", "/var/www/html/phpMyAdmin/templates/server/databases/create.twig");
    }
}
