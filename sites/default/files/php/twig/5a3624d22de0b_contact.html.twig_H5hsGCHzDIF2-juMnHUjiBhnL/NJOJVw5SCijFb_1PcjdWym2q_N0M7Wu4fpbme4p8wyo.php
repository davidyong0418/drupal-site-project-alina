<?php

/* themes/prisma/templates/contact/contact.html.twig */
class __TwigTemplate_99af337b1aa61fa40fa074bb7a6a5dba226559911d0488ca7c8277cca36ad4d0 extends Twig_Template
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
        $tags = array("if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"footer-content\">
                <h1>Contacta con nosotros</h1>
                <p>¿Necesitas ayuda en algo? <br>Rellena este formulario y nos pondremos en contacto contigo lo antes posible.</p>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"footer-form\">
                ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "contact_form_widget", array())) {
            // line 12
            echo "                    <div class=\"row\">
                        ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_form_widget", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 16
        echo "            </div>    
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/contact/contact.html.twig", "/var/www/html/prisma/themes/prisma/templates/contact/contact.html.twig");
    }
}
