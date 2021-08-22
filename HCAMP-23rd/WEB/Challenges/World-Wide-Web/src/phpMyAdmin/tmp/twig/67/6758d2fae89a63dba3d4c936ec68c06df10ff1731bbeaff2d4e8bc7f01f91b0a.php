<?php

/* server/sub_page_header.twig */
class __TwigTemplate_d61e49844a733283fa72d2dc41151791f247a3b7581da6eefc71c74200c5e990 extends Twig_Template
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
        $context["header"] = array("variables" => array("image" => "s_vars", "text" => _gettext("Server variables and settings")), "engines" => array("image" => "b_engine", "text" => _gettext("Storage engines")), "plugins" => array("image" => "b_engine", "text" => _gettext("Plugins")), "binlog" => array("image" => "s_tbl", "text" => _gettext("Binary log")), "collations" => array("image" => "s_asci", "text" => _gettext("Character sets and collations")), "replication" => array("image" => "s_replication", "text" => _gettext("Replication")), "database_statistics" => array("image" => "s_db", "text" => _gettext("Databases statistics")), "databases" => array("image" => "s_db", "text" => _gettext("Databases")), "privileges" => array("image" => "b_usrlist", "text" => _gettext("Privileges")));
        // line 40
        echo "<h2>";
        // line 41
        if (((array_key_exists("is_image", $context)) ? (_twig_default_filter(($context["is_image"] ?? null), true)) : (true))) {
            // line 42
            echo PhpMyAdmin\Util::getImage($this->getAttribute($this->getAttribute(($context["header"] ?? null), ($context["type"] ?? null), array(), "array"), "image", array(), "array"));
        } else {
            // line 44
            echo PhpMyAdmin\Util::getIcon($this->getAttribute($this->getAttribute(($context["header"] ?? null), ($context["type"] ?? null), array(), "array"), "image", array(), "array"));
        }
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), ($context["type"] ?? null), array(), "array"), "text", array(), "array"), "html", null, true);
        // line 47
        echo ((array_key_exists("link", $context)) ? (PhpMyAdmin\Util::showMySQLDocu(($context["link"] ?? null))) : (""));
        echo "
</h2>
";
    }

    public function getTemplateName()
    {
        return "server/sub_page_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 47,  31 => 46,  28 => 44,  25 => 42,  23 => 41,  21 => 40,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/sub_page_header.twig", "/var/www/html/phpMyAdmin/templates/server/sub_page_header.twig");
    }
}
