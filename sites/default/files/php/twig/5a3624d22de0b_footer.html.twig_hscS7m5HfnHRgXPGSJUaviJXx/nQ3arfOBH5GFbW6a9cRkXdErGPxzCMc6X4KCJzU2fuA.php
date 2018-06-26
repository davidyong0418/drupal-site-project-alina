<?php

/* themes/prisma/templates/footer/footer.html.twig */
class __TwigTemplate_9c1f697777f99d1012049d6e4c18a4f3567a8a2ca2e48049717981694fb9f06e extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/contact/contact.html.twig"), "themes/prisma/templates/footer/footer.html.twig", 3)->display($context);
        // line 4
        echo "        <div class='row'>
            <div class=\"col-xs-12\">
                <div class=\"ads\">
                    <img src=\"/themes/prisma/assets/images/footer-ads.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid footer-text\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-push-6 footer-link\">
                    <ul>
                        <li><a href=\"https://www.linkedin.com/company/prismapublicaciones/?trk=ppro_cprof&originalSubdomain=es\" target=\"_blank\">Aviso legal</a></li>
                        <li><a href=\"#\">Condiciones de uso</a></li>
                        <li><a href=\"#\">Política de cookies</a></li>
                    </ul>
                </div>
                <div class=\"col-md-6 col-md-pull-6 copyright\">
                    <p>© Prisma Publicaciones 2002 S.L </p>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/footer/footer.html.twig", "/var/www/html/prisma/themes/prisma/templates/footer/footer.html.twig");
    }
}
