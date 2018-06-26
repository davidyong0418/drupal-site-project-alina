<?php

/* {# inline_template_start #}<div class="container">
                    <div class="sld-info col-sm-6 col-sm-offset-1 col-xs-8 col-xs-offset-1">
                    <h1>{{title}}</h1>
{{body}}
                    </div>
                </div>

                    */
class __TwigTemplate_724240702819dc6407de7b45c7902a8f7b0806839c0f5a6b01e640ab41a3f952 extends Twig_Template
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
        echo "<div class=\"container\">
                    <div class=\"sld-info col-sm-6 col-sm-offset-1 col-xs-8 col-xs-offset-1\">
                    <h1>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h1>
";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
                    </div>
                </div>

                   ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container\">
                    <div class=\"sld-info col-sm-6 col-sm-offset-1 col-xs-8 col-xs-offset-1\">
                    <h1>{{title}}</h1>
{{body}}
                    </div>
                </div>

                   ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"container\">
                    <div class=\"sld-info col-sm-6 col-sm-offset-1 col-xs-8 col-xs-offset-1\">
                    <h1>{{title}}</h1>
{{body}}
                    </div>
                </div>

                   ", "");
    }
}
