<?php

/* navigation/logo.twig */
class __TwigTemplate_6f4714a88bae65e89d8f5eef63410e7221f2874b5f186b2bf1f76bb2bac45ae2 extends Twig_Template
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
        if (($context["display_logo"] ?? null)) {
            // line 2
            echo "    <div id=\"pmalogo\">";
            // line 3
            if (($context["use_logo_link"] ?? null)) {
                // line 4
                echo "            <a href=\"";
                echo ((array_key_exists("logo_link", $context)) ? (_twig_default_filter(($context["logo_link"] ?? null), "#")) : ("#"));
                echo "\"";
                // line 5
                echo twig_escape_filter($this->env, ((array_key_exists("link_attribs", $context)) ? ((" " . ($context["link_attribs"] ?? null))) : ("")), "html", null, true);
                echo ">";
            }
            // line 7
            echo ($context["logo"] ?? null);
            // line 8
            if (($context["use_logo_link"] ?? null)) {
                // line 9
                echo "            </a>";
            }
            // line 11
            echo "    </div>";
        }
    }

    public function getTemplateName()
    {
        return "navigation/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  37 => 9,  35 => 8,  33 => 7,  29 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navigation/logo.twig", "/var/www/html/phpMyAdmin/templates/navigation/logo.twig");
    }
}
