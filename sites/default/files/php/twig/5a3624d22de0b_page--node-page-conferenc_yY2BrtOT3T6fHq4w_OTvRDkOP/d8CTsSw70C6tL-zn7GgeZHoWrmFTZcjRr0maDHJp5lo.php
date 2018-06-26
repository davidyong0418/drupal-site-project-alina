<?php

/* themes/prisma/templates/page/page--node-page-conference.html.twig */
class __TwigTemplate_340a4953abab79da609475e80b08525937560fef0647e947f833991117619068 extends Twig_Template
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
<div class=\"header\" style=\"background: url('/themes/prisma/assets/images/office.png'); background-size: cover;\">
    ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header/header-page.html.twig"), "themes/prisma/templates/page/page--node-page-conference.html.twig", 3)->display($context);
        // line 4
        echo "</div>
<div class=\"background\"></div>
<div class=\"wrap office-temp\">
    <div class=\"main-contain\">
        <div class=\"page-intro container\">
            ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>

        <div class=\"page-content somos-content\">
            <div class=\"container\">
            <div class=\" page-body somos-ports\">
                ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_conference", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
        <div class=\"container eventos-content\">
            <div class=\"post-lists row\">
                <h2 class=\"section-title\">Eventos pasados y futuros</h2>
                <div class=\"eventos-ports flex-wrap-center-colum\">
                    ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "eventos_widget", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
        <hr />

        <!--// POST LIST \\\\-->
        <!--// POST LIST \\\\-->
        <div class=\"container actualidad post-new-section\">
            <div class=\"post-lists row\">
                <h2 class=\"section-title\">Actualidad</h2>
                ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "actualidad_widget", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>          
</div>

<!-- Footer Section -->

";
        // line 42
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-page-conference.html.twig", 42)->display($context);
        // line 43
        echo "
<!-- /Footer Section -->";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-page-conference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  101 => 42,  90 => 34,  76 => 23,  65 => 15,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-page-conference.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-page-conference.html.twig");
    }
}
