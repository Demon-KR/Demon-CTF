<?php

/* display/results/options_block.twig */
class __TwigTemplate_25be20896b78dda0461775185b902c3143092c5d34b1b476a1a60dcd903f901c extends Twig_Template
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
        echo "<form method=\"post\" action=\"sql.php\" name=\"displayOptionsForm\" class=\"ajax print_ignore\">";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(array("db" =>         // line 3
($context["db"] ?? null), "table" =>         // line 4
($context["table"] ?? null), "sql_query" =>         // line 5
($context["sql_query"] ?? null), "goto" =>         // line 6
($context["goto"] ?? null), "display_options_form" => 1));
        // line 10
        echo PhpMyAdmin\Util::getDivForSliderEffect("", _gettext("Options"));
        echo "
        <fieldset>
            <div class=\"formelement\">";
        // line 14
        echo PhpMyAdmin\Util::getRadioFields("pftext", array("P" => _gettext("Partial texts"), "F" => _gettext("Full texts")),         // line 20
($context["pftext"] ?? null), true, true, "", ("pftext_" .         // line 24
($context["unique_id"] ?? null)));
        // line 25
        echo "
            </div>";
        // line 28
        if ((($context["relwork"] ?? null) && ($context["displaywork"] ?? null))) {
            // line 29
            echo "                <div class=\"formelement\">";
            // line 30
            echo PhpMyAdmin\Util::getRadioFields("relational_display", array("K" => _gettext("Relational key"), "D" => _gettext("Display column for relationships")),             // line 36
($context["relational_display"] ?? null), true, true, "", ("relational_display_" .             // line 40
($context["unique_id"] ?? null)));
            // line 41
            echo "
                </div>";
        }
        // line 44
        echo "
            <div class=\"formelement\">";
        // line 46
        $this->loadTemplate("checkbox.twig", "display/results/options_block.twig", 46)->display(array("html_field_name" => "display_binary", "label" => _gettext("Show binary contents"), "checked" =>  !twig_test_empty(        // line 49
($context["display_binary"] ?? null)), "onclick" => false, "html_field_id" => ("display_binary_" .         // line 51
($context["unique_id"] ?? null))));
        // line 53
        $this->loadTemplate("checkbox.twig", "display/results/options_block.twig", 53)->display(array("html_field_name" => "display_blob", "label" => _gettext("Show BLOB contents"), "checked" =>  !twig_test_empty(        // line 56
($context["display_blob"] ?? null)), "onclick" => false, "html_field_id" => ("display_blob_" .         // line 58
($context["unique_id"] ?? null))));
        // line 60
        echo "            </div>";
        // line 66
        echo "            <div class=\"formelement\">";
        // line 67
        $this->loadTemplate("checkbox.twig", "display/results/options_block.twig", 67)->display(array("html_field_name" => "hide_transformation", "label" => _gettext("Hide browser transformation"), "checked" =>  !twig_test_empty(        // line 70
($context["hide_transformation"] ?? null)), "onclick" => false, "html_field_id" => ("hide_transformation_" .         // line 72
($context["unique_id"] ?? null))));
        // line 74
        echo "            </div>";
        // line 77
        if (($context["possible_as_geometry"] ?? null)) {
            // line 78
            echo "                <div class=\"formelement\">";
            // line 79
            echo PhpMyAdmin\Util::getRadioFields("geoOption", array("GEOM" => _gettext("Geometry"), "WKT" => _gettext("Well Known Text"), "WKB" => _gettext("Well Known Binary")),             // line 86
($context["geo_option"] ?? null), true, true, "", ("geoOption_" .             // line 90
($context["unique_id"] ?? null)));
            // line 91
            echo "
                </div>";
        } else {
            // line 94
            echo "                <div class=\"formelement\">";
            // line 95
            echo twig_escape_filter($this->env, ($context["possible_as_geometry"] ?? null), "html", null, true);
            // line 96
            echo PhpMyAdmin\Util::getRadioFields("geoOption", array("WKT" => _gettext("Well Known Text"), "WKB" => _gettext("Well Known Binary")),             // line 102
($context["geo_option"] ?? null), true, true, "", ("geoOption_" .             // line 106
($context["unique_id"] ?? null)));
            // line 107
            echo "
                </div>";
        }
        // line 110
        echo "            <div class=\"clearfloat\"></div>
        </fieldset>

        <fieldset class=\"tblFooters\">
            <input type=\"submit\" value=\"";
        // line 114
        echo _gettext("Go");
        echo "\" />
        </fieldset>
    </div>";
        // line 117
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "display/results/options_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 117,  102 => 114,  96 => 110,  92 => 107,  90 => 106,  89 => 102,  88 => 96,  86 => 95,  84 => 94,  80 => 91,  78 => 90,  77 => 86,  76 => 79,  74 => 78,  72 => 77,  70 => 74,  68 => 72,  67 => 70,  66 => 67,  64 => 66,  62 => 60,  60 => 58,  59 => 56,  58 => 53,  56 => 51,  55 => 49,  54 => 46,  51 => 44,  47 => 41,  45 => 40,  44 => 36,  43 => 30,  41 => 29,  39 => 28,  36 => 25,  34 => 24,  33 => 20,  32 => 14,  27 => 10,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/results/options_block.twig", "/var/www/html/phpMyAdmin/templates/display/results/options_block.twig");
    }
}
