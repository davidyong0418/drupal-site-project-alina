<?php

/* {# inline_template_start #}<div class="row section-item first">
        <div class="col-md-6 section-image" id="item-section-image">
            <div class="row">
                <img src="{{ field_image }}">
            </div>
        </div>
        <div class="col-md-6" id="item-col-content">
            <div class="row">
                <div class="section-content"  id="item-section-content">
                    <h2>{{ title }}</h2>
                    <p>{{ body }}</p>
                    <a href="{{path}}">Leer más</a>
                </div>
            </div>
        </div>
    </div> */
class __TwigTemplate_322b399cefdd015cb01660252fca75f6f090da2de5d7cc3431b5ca6d84e7beb6 extends Twig_Template
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
        echo "<div class=\"row section-item first\">
        <div class=\"col-md-6 section-image\" id=\"item-section-image\">
            <div class=\"row\">
                <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\">
            </div>
        </div>
        <div class=\"col-md-6\" id=\"item-col-content\">
            <div class=\"row\">
                <div class=\"section-content\"  id=\"item-section-content\">
                    <h2>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
                    <p>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">Leer más</a>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row section-item first\">
        <div class=\"col-md-6 section-image\" id=\"item-section-image\">
            <div class=\"row\">
                <img src=\"{{ field_image }}\">
            </div>
        </div>
        <div class=\"col-md-6\" id=\"item-col-content\">
            <div class=\"row\">
                <div class=\"section-content\"  id=\"item-section-content\">
                    <h2>{{ title }}</h2>
                    <p>{{ body }}</p>
                    <a href=\"{{path}}\">Leer más</a>
                </div>
            </div>
        </div>
    </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  76 => 11,  72 => 10,  63 => 4,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"row section-item first\">
        <div class=\"col-md-6 section-image\" id=\"item-section-image\">
            <div class=\"row\">
                <img src=\"{{ field_image }}\">
            </div>
        </div>
        <div class=\"col-md-6\" id=\"item-col-content\">
            <div class=\"row\">
                <div class=\"section-content\"  id=\"item-section-content\">
                    <h2>{{ title }}</h2>
                    <p>{{ body }}</p>
                    <a href=\"{{path}}\">Leer más</a>
                </div>
            </div>
        </div>
    </div>", "");
    }
}
