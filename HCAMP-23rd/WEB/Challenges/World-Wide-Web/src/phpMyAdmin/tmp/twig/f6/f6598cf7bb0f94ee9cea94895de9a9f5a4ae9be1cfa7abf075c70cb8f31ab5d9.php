<?php

/* list/item.twig */
class __TwigTemplate_530f2b4327e5759725683dc8491abd66c2e9a49b8db1c3c8739f04277c1d8b9a extends Twig_Template
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
        echo "<li";
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 2
        if ( !twig_test_empty(($context["class"] ?? null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 4
        if (((array_key_exists("url", $context) && twig_test_iterable(($context["url"] ?? null))) &&  !twig_test_empty($this->getAttribute(($context["url"] ?? null), "href", array(), "array")))) {
            // line 5
            echo "        <a";
            if ( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "href", array(), "array"))) {
                echo " href=\"";
                echo $this->getAttribute(($context["url"] ?? null), "href", array(), "array");
                echo "\"";
            }
            // line 6
            if ( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "target", array(), "array"))) {
                echo " target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["url"] ?? null), "target", array(), "array"), "html", null, true);
                echo "\"";
            }
            // line 7
            if (( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "target", array(), "array")) && ($this->getAttribute(($context["url"] ?? null), "target", array(), "array") == "_blank"))) {
                echo " rel=\"noopener noreferrer\"";
            }
            // line 8
            if ( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "id", array(), "array"))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["url"] ?? null), "id", array(), "array"), "html", null, true);
                echo "\"";
            }
            // line 9
            if ( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "class", array(), "array"))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["url"] ?? null), "class", array(), "array"), "html", null, true);
                echo "\"";
            }
            // line 10
            if ( !twig_test_empty($this->getAttribute(($context["url"] ?? null), "title", array(), "array"))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["url"] ?? null), "title", array(), "array"), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 12
        echo ($context["content"] ?? null);
        // line 13
        if (((array_key_exists("url", $context) && twig_test_iterable(($context["url"] ?? null))) &&  !twig_test_empty($this->getAttribute(($context["url"] ?? null), "href", array(), "array")))) {
            // line 14
            echo "        </a>";
        }
        // line 16
        if ( !twig_test_empty(($context["mysql_help_page"] ?? null))) {
            // line 17
            echo PhpMyAdmin\Util::showMySQLDocu(($context["mysql_help_page"] ?? null));
        }
        // line 19
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "list/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  81 => 17,  79 => 16,  76 => 14,  74 => 13,  72 => 12,  64 => 10,  58 => 9,  52 => 8,  48 => 7,  42 => 6,  35 => 5,  33 => 4,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list/item.twig", "/var/www/html/phpMyAdmin/templates/list/item.twig");
    }
}
