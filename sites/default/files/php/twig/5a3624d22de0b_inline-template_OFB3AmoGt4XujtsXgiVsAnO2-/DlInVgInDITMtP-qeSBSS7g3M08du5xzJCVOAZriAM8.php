<?php

/* {# inline_template_start #}                                 
<div class="contact-content">
{{ field_google_map }} 
                                            <p><img src="/themes/prisma/assets/svg/pincho.svg"><span>{{ field_address }}</span></p>
                                            <p>{{ field_phone}} <br />{{ field_email }} </p>
                                        </div> */
class __TwigTemplate_e7816aa3922674207c7176dec8a6e61ac52c5b9298a36bf69cbd767bf8d700c7 extends Twig_Template
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
        echo "                                 
<div class=\"contact-content\">
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_google_map"] ?? null), "html", null, true));
        echo " 
                                            <p><img src=\"/themes/prisma/assets/svg/pincho.svg\"><span>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_address"] ?? null), "html", null, true));
        echo "</span></p>
                                            <p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_phone"] ?? null), "html", null, true));
        echo " <br />";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_email"] ?? null), "html", null, true));
        echo " </p>
                                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                                 
<div class=\"contact-content\">
{{ field_google_map }} 
                                            <p><img src=\"/themes/prisma/assets/svg/pincho.svg\"><span>{{ field_address }}</span></p>
                                            <p>{{ field_phone}} <br />{{ field_email }} </p>
                                        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
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
<div class=\"contact-content\">
{{ field_google_map }} 
                                            <p><img src=\"/themes/prisma/assets/svg/pincho.svg\"><span>{{ field_address }}</span></p>
                                            <p>{{ field_phone}} <br />{{ field_email }} </p>
                                        </div>", "");
    }
}
