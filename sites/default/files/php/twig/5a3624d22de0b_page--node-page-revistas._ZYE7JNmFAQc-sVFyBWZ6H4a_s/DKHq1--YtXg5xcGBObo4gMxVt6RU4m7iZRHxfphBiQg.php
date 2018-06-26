<?php

/* themes/prisma/templates/page/page--node-page-revistas.html.twig */
class __TwigTemplate_d98fa62a1a8091aae76020be93785825b1bda880ff7e702a8de5a1597a261154 extends Twig_Template
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
<div class=\"header\" style=\"background: url('/themes/prisma/assets/images/revistas.png'); background-size: cover;\">
    ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header/header-page.html.twig"), "themes/prisma/templates/page/page--node-page-revistas.html.twig", 3)->display($context);
        // line 4
        echo "</div>
<div class=\"background\"></div>
<div class=\"wrap revistas-temp\">
    <div class=\"page-intro page-body\">
        ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_revistas", array()), "html", null, true));
        echo "
    </div>
</div>

<!-- Footer Section -->

";
        // line 14
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-page-revistas.html.twig", 14)->display($context);
        // line 15
        echo "
<!-- /Footer Section -->
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-page-revistas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  64 => 14,  55 => 8,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-page-revistas.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-page-revistas.html.twig");
    }
}
