<?php

/* select_lang.twig */
class __TwigTemplate_227d50cee0040ce3743bf3c57f0c678a252122bb58b277ba37b6051383b47bd5 extends Twig_Template
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
        echo "    <form method=\"get\" action=\"index.php\" class=\"disableAjax\">";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["_form_params"] ?? null));
        // line 4
        if (($context["use_fieldset"] ?? null)) {
            // line 5
            echo "        <fieldset>
            <legend lang=\"en\" dir=\"ltr\">";
            // line 6
            echo ($context["language_title"] ?? null);
            echo "</legend>";
        } else {
            // line 8
            echo "        <bdo lang=\"en\" dir=\"ltr\">
            <label for=\"sel-lang\">";
            // line 9
            echo ($context["language_title"] ?? null);
            echo "</label>
        </bdo>";
        }
        // line 12
        echo "
    <select name=\"lang\" class=\"autosubmit\" lang=\"en\" dir=\"ltr\" id=\"sel-lang\">";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 17
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["language"], "getCode", array(), "method")), "html", null, true);
            echo "\"";
            // line 18
            if ($this->getAttribute($context["language"], "isActive", array(), "method")) {
                // line 19
                echo "                selected=\"selected\"";
            }
            // line 21
            echo ">";
            // line 22
            echo $this->getAttribute($context["language"], "getName", array(), "method");
            echo "
        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </select>";
        // line 28
        if (($context["use_fieldset"] ?? null)) {
            // line 29
            echo "        </fieldset>";
        }
        // line 31
        echo "
    </form>
";
    }

    public function getTemplateName()
    {
        return "select_lang.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  71 => 29,  69 => 28,  66 => 25,  58 => 22,  56 => 21,  53 => 19,  51 => 18,  47 => 17,  43 => 15,  40 => 12,  35 => 9,  32 => 8,  28 => 6,  25 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "select_lang.twig", "/var/www/html/phpMyAdmin/templates/select_lang.twig");
    }
}
