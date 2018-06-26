<?php

/* themes/prisma/templates/views/views-view-unformatted--address.html.twig */
class __TwigTemplate_5474777a99ef293daabf6d66d960c795bb9a56566dc345bceeade322e1ac7a9d extends Twig_Template
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
        $tags = array("for" => 6, "if" => 8, "set" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
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
<div class=\"contact\">
    <div class=\"container\">
        <h1>Contacta con nosotros</h1>
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 7
            echo "            <div class=\"col-xs-12 col-md-6 contact-info\">
            ";
            // line 8
            if (($context["key"] == 0)) {
                // line 9
                echo "            ";
                $context["link"] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.2887094938487!2d2.1265032154258505!3d41.38953607926397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498665ec48553%3A0x8a0443e2b5163378!2sAvinguda+Diagonal%2C+662%2C+08034+Barcelona%2C+Spain!5e0!3m2!1sen!2s!4v1518430291681";
                // line 10
                echo "                  
      
            ";
            } else {
                // line 13
                echo "                     ";
                $context["link"] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.225465321063!2d-3.642830884400451!3d40.44814647936145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f18ee1150df%3A0x561ff091531b8f14!2sCalle+de+Josefa+Valc%C3%A1rcel%2C+42%2C+28027+Madrid%2C+Spain!5e0!3m2!1sen!2s!4v1518430165679";
                // line 14
                echo "            ";
            }
            // line 15
            echo "            <iframe src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
            echo "\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
            </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/views/views-view-unformatted--address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  78 => 16,  73 => 15,  70 => 14,  67 => 13,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/views/views-view-unformatted--address.html.twig", "/var/www/html/prisma/themes/prisma/templates/views/views-view-unformatted--address.html.twig");
    }
}
