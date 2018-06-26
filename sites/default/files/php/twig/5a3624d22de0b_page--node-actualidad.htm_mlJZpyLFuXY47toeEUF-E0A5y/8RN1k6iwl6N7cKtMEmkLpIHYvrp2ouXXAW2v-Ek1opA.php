<?php

/* themes/prisma/templates/page/page--node-actualidad.html.twig */
class __TwigTemplate_1ce446d824f70111448ab8816d4ea9787c55986b28476113caeb6ed90901f140 extends Twig_Template
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
        $tags = array("if" => 22, "include" => 46);
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
<div id=\"main\" class=\"actualidad-interior-single\">
    <div class=\"header\" style=\"background: url('/themes/prisma/assets/images/actualidad-interior-pic.png'); background-size: cover;  background-repeat: no-repeat;
         background-position: center;\">
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
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 23
            echo "                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                        ";
        }
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
\t<div class=\"background\"></div>
    <div class=\"wrap actualidad-temp\">

        <!-- // Revistas Interior Content \\\\ -->
        <div class=\"interior-content\">
            <div class=\"container\">
                ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

            </div>
        </div>
        ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "related_actualidad", array()), "html", null, true));
        echo "
    </div>

    <!-- Footer Section -->

    ";
        // line 46
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-actualidad.html.twig", 46)->display($context);
        // line 47
        echo "
    <!-- /Footer Section -->
</div>
<input type=\"hidden\" id=\"menu-link-active\" value = \"actualidad\">
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-actualidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  103 => 46,  95 => 41,  88 => 37,  74 => 25,  68 => 23,  66 => 22,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-actualidad.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-actualidad.html.twig");
    }
}
