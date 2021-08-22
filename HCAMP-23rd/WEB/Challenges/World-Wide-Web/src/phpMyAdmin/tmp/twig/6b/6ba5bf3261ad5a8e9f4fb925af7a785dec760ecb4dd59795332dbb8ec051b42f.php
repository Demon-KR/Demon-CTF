<?php

/* error/report_form.twig */
class __TwigTemplate_bd93d490db2dfcbcc90c7aa8d168574f7007471df73a26e2bbe0c9c64de924ac extends Twig_Template
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
        echo "<form action=\"error_report.php\" method=\"post\" name=\"report_frm\" id=\"report_frm\"
      class=\"ajax\">
    <fieldset style=\"padding-top:0\">

        <p>";
        // line 6
        echo _gettext("This report automatically includes data about the error and information about relevant configuration settings. It will be sent to the phpMyAdmin team for debugging the error.");
        // line 9
        echo "        </p>

        <div class=\"label\"><label><strong>";
        // line 12
        echo _gettext("Can you tell us the steps leading to this error? It decisively helps in debugging:");
        // line 13
        echo "                </strong></label>
        </div>
        <textarea class=\"report-description\" name=\"description\"
                  id=\"report_description\"></textarea>

        <div class=\"label\"><label><p>";
        // line 19
        echo _gettext("You may examine the data in the error report:");
        // line 20
        echo "                </p></label></div>
        <pre class=\"report-data\">";
        // line 21
        echo ($context["report_data"] ?? null);
        echo "</pre>

        <input type=\"checkbox\" name=\"always_send\" id=\"always_send_checkbox\" />
        <label for=\"always_send_checkbox\">";
        // line 25
        echo _gettext("Automatically send report next time");
        // line 26
        echo "        </label>

    </fieldset>";
        // line 30
        echo ($context["hidden_inputs"] ?? null);
        // line 31
        echo ($context["hidden_fields"] ?? null);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "error/report_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 31,  57 => 30,  53 => 26,  51 => 25,  45 => 21,  42 => 20,  40 => 19,  33 => 13,  31 => 12,  27 => 9,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error/report_form.twig", "/var/www/html/phpMyAdmin/templates/error/report_form.twig");
    }
}
