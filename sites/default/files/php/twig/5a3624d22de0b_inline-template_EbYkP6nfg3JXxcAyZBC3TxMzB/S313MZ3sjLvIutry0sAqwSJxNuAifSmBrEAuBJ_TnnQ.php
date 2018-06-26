<?php

/* {# inline_template_start #}<div class="post-bg  imgResize-1-1">
<img src="{{ field_image }}">
<div class="post-entry">

                                       <p class="p-cat"> {{ field_category }}<p>
                                        <a href="{{ path }}" class="p-title">{{ title}}</a>
                                        <p class="p-date">{{ field_time }}</p>
                                    </div>
</div> */
class __TwigTemplate_31a3501e569acd90b2962dac658dfca99b0f5c0de306ebea10fdbe48b134a911 extends Twig_Template
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
        echo "<div class=\"post-bg  imgResize-1-1\">
<img src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\">
<div class=\"post-entry\">

                                       <p class=\"p-cat\"> ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_category"] ?? null), "html", null, true));
        echo "<p>
                                        <a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"p-title\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a>
                                        <p class=\"p-date\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_time"] ?? null), "html", null, true));
        echo "</p>
                                    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-bg  imgResize-1-1\">
<img src=\"{{ field_image }}\">
<div class=\"post-entry\">

                                       <p class=\"p-cat\"> {{ field_category }}<p>
                                        <a href=\"{{ path }}\" class=\"p-title\">{{ title}}</a>
                                        <p class=\"p-date\">{{ field_time }}</p>
                                    </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  64 => 6,  60 => 5,  54 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-bg  imgResize-1-1\">
<img src=\"{{ field_image }}\">
<div class=\"post-entry\">

                                       <p class=\"p-cat\"> {{ field_category }}<p>
                                        <a href=\"{{ path }}\" class=\"p-title\">{{ title}}</a>
                                        <p class=\"p-date\">{{ field_time }}</p>
                                    </div>
</div>", "");
    }
}
