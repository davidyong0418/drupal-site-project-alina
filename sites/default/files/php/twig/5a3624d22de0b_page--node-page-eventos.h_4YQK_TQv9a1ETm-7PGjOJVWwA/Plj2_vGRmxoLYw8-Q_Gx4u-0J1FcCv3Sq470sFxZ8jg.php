<?php

/* themes/prisma/templates/page/page--node-page-eventos.html.twig */
class __TwigTemplate_f1c8820c8c84a22dbf9e7b51caf3d1480df88bbccbc645eec0ba24cbde1196b9 extends Twig_Template
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
        $tags = array("include" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
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
        echo "<!-- Header Section -->
<div class=\"header\" style=\"background: url('/themes/prisma/assets/images/eventos-bg.png'); background-size: cover;\">
    ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header/header-page.html.twig"), "themes/prisma/templates/page/page--node-page-eventos.html.twig", 3)->display($context);
        // line 4
        echo "</div>
<div class=\"background\"></div>
<div class=\"wrap eventos-temp\">
    <div class=\"main-contain\">
        <div class=\"page-intro container\">
            ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>

        <div class=\"page-content container-fluild  eventos-content\">
            <div class=\"container page-body\">
                ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_eventos", array()), "html", null, true));
        echo "

            </div>
        </div>

        <div class=\"container actualidad post-new-section\">
            <div class=\"post-lists row\">
                <h2>Actualidad</h2>
                ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "actualidad_widget", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->

";
        // line 30
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-page-eventos.html.twig", 30)->display($context);
        // line 31
        echo "
<!-- /Footer Section -->
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-page-eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  86 => 30,  75 => 22,  64 => 14,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-page-eventos.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-page-eventos.html.twig");
    }
}
