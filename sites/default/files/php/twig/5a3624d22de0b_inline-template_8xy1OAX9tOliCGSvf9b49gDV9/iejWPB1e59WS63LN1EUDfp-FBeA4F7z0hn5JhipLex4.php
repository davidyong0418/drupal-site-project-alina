<?php

/* {# inline_template_start #}         <div class="post-ctn">
<img src="{{field_image}}" class="img-responsive" />
                                            <div class="eve-txt">
                                                <p class="eve-cat"><i class="icon_location"></i>{{field_city}}</p>
                                                <a href="{{path}}" class="eve-title">{{title}}</a>
                                                <p class="eve-date"><i class="icon_calendar"></i>{{ field_time }}</p>
                                            </div>
</div> */
class __TwigTemplate_fdd785bd9253862dd081078ee6934f0cf889c481bcf48cd987c9ba0548734de8 extends Twig_Template
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
        echo "         <div class=\"post-ctn\">
<img src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\" />
                                            <div class=\"eve-txt\">
                                                <p class=\"eve-cat\"><i class=\"icon_location\"></i>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_city"] ?? null), "html", null, true));
        echo "</p>
                                                <a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"eve-title\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a>
                                                <p class=\"eve-date\"><i class=\"icon_calendar\"></i>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_time"] ?? null), "html", null, true));
        echo "</p>
                                            </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}         <div class=\"post-ctn\">
<img src=\"{{field_image}}\" class=\"img-responsive\" />
                                            <div class=\"eve-txt\">
                                                <p class=\"eve-cat\"><i class=\"icon_location\"></i>{{field_city}}</p>
                                                <a href=\"{{path}}\" class=\"eve-title\">{{title}}</a>
                                                <p class=\"eve-date\"><i class=\"icon_calendar\"></i>{{ field_time }}</p>
                                            </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  62 => 5,  58 => 4,  53 => 2,  50 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}         <div class=\"post-ctn\">
<img src=\"{{field_image}}\" class=\"img-responsive\" />
                                            <div class=\"eve-txt\">
                                                <p class=\"eve-cat\"><i class=\"icon_location\"></i>{{field_city}}</p>
                                                <a href=\"{{path}}\" class=\"eve-title\">{{title}}</a>
                                                <p class=\"eve-date\"><i class=\"icon_calendar\"></i>{{ field_time }}</p>
                                            </div>
</div>", "");
    }
}
