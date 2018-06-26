<?php

/* {# inline_template_start #}             <img class="img-responsive" src="{{field_image}}" alt="" />
                                    <p class="name">{{title}}</p>
                                    <p class="txt">Escritora</p>
                                    <p class="txt">{{ field_escritora }}</p>
              */
class __TwigTemplate_9116728a8ce6a3deeaa0a387e2697c145101f4e8341a3cb8d334d040ce660dd8 extends Twig_Template
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
        echo "             <img class=\"img-responsive\" src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" alt=\"\" />
                                    <p class=\"name\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</p>
                                    <p class=\"txt\">Escritora</p>
                                    <p class=\"txt\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_escritora"] ?? null), "html", null, true));
        echo "</p>
             ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}             <img class=\"img-responsive\" src=\"{{field_image}}\" alt=\"\" />
                                    <p class=\"name\">{{title}}</p>
                                    <p class=\"txt\">Escritora</p>
                                    <p class=\"txt\">{{ field_escritora }}</p>
             ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  52 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}             <img class=\"img-responsive\" src=\"{{field_image}}\" alt=\"\" />
                                    <p class=\"name\">{{title}}</p>
                                    <p class=\"txt\">Escritora</p>
                                    <p class=\"txt\">{{ field_escritora }}</p>
             ", "");
    }
}
