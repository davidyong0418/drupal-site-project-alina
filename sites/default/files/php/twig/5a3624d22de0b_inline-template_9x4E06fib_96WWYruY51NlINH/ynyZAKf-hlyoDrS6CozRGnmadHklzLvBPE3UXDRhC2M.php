<?php

/* {# inline_template_start #}
										<img src="{{field_image}}">
										<div class="item-content">
											<div class="item-name">
												<a href="{{path}}"><span>{{title}}</span></a>
											</div>
											<div class="item-txt">
												<p>{{body}}</p>
											</div>
											<div class="clear"></div>
										</div> */
class __TwigTemplate_5e26552ff5704edd79a8ac2b7327a0995e11376f37380818f72c01f68f3b4cee extends Twig_Template
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

        // line 2
        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"><span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{field_image}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path}}\"><span>{{title}}</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>{{body}}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  60 => 5,  53 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{field_image}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path}}\"><span>{{title}}</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>{{body}}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t</div>", "");
    }
}
