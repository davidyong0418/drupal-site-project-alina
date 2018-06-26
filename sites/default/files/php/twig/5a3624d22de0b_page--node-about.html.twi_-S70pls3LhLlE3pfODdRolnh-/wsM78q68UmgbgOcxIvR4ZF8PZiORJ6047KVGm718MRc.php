<?php

/* themes/prisma/templates/page/page--node-about.html.twig */
class __TwigTemplate_6f7cf9d2a558e62cd03e2da56c428ae9d800d6b53c51ee57a2708a04f5167646 extends Twig_Template
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
<div class=\"header\" style=\"background: url('/themes/prisma/assets/images/quienes-header.png'); background-size: cover;\">
";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header/header-page.html.twig"), "themes/prisma/templates/page/page--node-about.html.twig", 3)->display($context);
        // line 4
        echo "</div>
<div class=\"background\"></div>
<div class=\"wrap quienes-temp\">
    <div class=\"main-contain quienes-info\">
        <div class=\"page-intro container\">
            ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>
    </div>
    <div class=\"page-body \">
        <!-- MAIN_CONTENT -->
        <div class=\"container-fluid\">
        ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "product_widget", array()), "html", null, true));
        echo "
        </div>
        <!-- END MAIN_CONTENT -->
        <!-- SOMOS -->
       ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "team_widget", array()), "html", null, true));
        echo "
        <!-- END SOMOS -->
        <!-- CONTACT -->
        ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "address_widget", array()), "html", null, true));
        echo "
        <!-- END CONTACT -->
    </div>
</div>

<!-- Footer Section -->

";
        // line 29
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-about.html.twig", 29)->display($context);
        // line 30
        echo "
<!-- /Footer Section -->
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  88 => 29,  78 => 22,  72 => 19,  65 => 15,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-about.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-about.html.twig");
    }
}
