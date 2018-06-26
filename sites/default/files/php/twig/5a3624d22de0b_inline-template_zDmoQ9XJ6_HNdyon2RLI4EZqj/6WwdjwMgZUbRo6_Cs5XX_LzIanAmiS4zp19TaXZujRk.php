<?php

/* {# inline_template_start #}<img src="{{field_image}}">
                        <div class="item-content">
                            <div class="item-name">
                                <span>{{ title }} </span>
                            </div>
                            <div class="item-txt">
                                <p>{{field_description}}</p>
                            </div>
                            <div class="clear"></div>
                        </div> */
class __TwigTemplate_d2ca0e08941b7d4140f8bbcbfe4e474b69628f4da0750e9160f07692496e4df7 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<img src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\">
                        <div class=\"item-content\">
                            <div class=\"item-name\">
                                <span>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </span>
                            </div>
                            <div class=\"item-txt\">
                                <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_description"] ?? null), "html", null, true));
        echo "</p>
                            </div>
                            <div class=\"clear\"></div>
                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<img src=\"{{field_image}}\">
                        <div class=\"item-content\">
                            <div class=\"item-name\">
                                <span>{{ title }} </span>
                            </div>
                            <div class=\"item-txt\">
                                <p>{{field_description}}</p>
                            </div>
                            <div class=\"clear\"></div>
                        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  59 => 4,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<img src=\"{{field_image}}\">
                        <div class=\"item-content\">
                            <div class=\"item-name\">
                                <span>{{ title }} </span>
                            </div>
                            <div class=\"item-txt\">
                                <p>{{field_description}}</p>
                            </div>
                            <div class=\"clear\"></div>
                        </div>", "");
    }
}
