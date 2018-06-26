<?php

/* themes/prisma/templates/page/page--node-rivistas.html.twig */
class __TwigTemplate_f1fd0f5bf7992a6c2ed8327334eace5f98e8ae999f61e590d09466b88b2e248b extends Twig_Template
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
        $tags = array("if" => 21, "include" => 62);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
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
<div id=\"main\" class=\"page-revistas-interior\">
    <div class=\"header\" style=\"background: url('/themes/prisma/assets/images/journals-bg.png'); background-size: cover;\">
    <div class=\"full-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-2 brand\">
                    <a href=\"/\" class=\"logo-dk\"><img src=\"/themes/prisma/assets/images/logo.png\"></a>
                    <a href=\"/\" class=\"logo-mb\"><img src=\"/themes/prisma/assets/images/logo-mb.png\"></a>
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\"  aria-expanded=\"false\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"col-sm-12 col-md-10 main-menu\">
                    <div class=\"collapse navbar-collapse pull-right\" id=\"main-menu\">
                        ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 22
            echo "                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                        ";
        }
        // line 24
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

        ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "revistas_interior_widget", array()), "html", null, true));
        echo "

    </div>
\t<div class=\"background\"></div>
    <div class=\"wrap revistas-interior-temp\">
        <div class=\"interior-content\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </div>

            </div>
        </div>
        <!-- // Revistas Statistics \\\\ -->
        <div class=\"revistas-statistics\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-11 col-sm-offset-1\">
                        <div class=\"row\">
                        ";
        // line 49
        if ($this->getAttribute(($context["page"] ?? null), "revistas_statistics_widget", array())) {
            // line 50
            echo "                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "revistas_statistics_widget", array()), "html", null, true));
            echo "
                        ";
        }
        // line 52
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Revistas Statistics \\\\ -->
    </div>

    <!-- Footer Section -->

    ";
        // line 62
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-rivistas.html.twig", 62)->display($context);
        // line 63
        echo "
    <!-- /Footer Section -->
</div>
<input type=\"hidden\" id=\"menu-link-active\" value = \"revistas\">
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-rivistas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 63,  126 => 62,  114 => 52,  108 => 50,  106 => 49,  92 => 38,  81 => 30,  73 => 24,  67 => 22,  65 => 21,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-rivistas.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-rivistas.html.twig");
    }
}
