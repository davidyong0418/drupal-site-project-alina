<?php

/* themes/prisma/templates/header/header-microsite.html.twig */
class __TwigTemplate_2c0cda5f3ba5130d635f1b7433d59b2ea480e1b90c96153958d4e8b5eb7b72cf extends Twig_Template
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
        echo "<!-- // HEADER \\\\ -->
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"flex-container\">
                <div class=\"col-xs-2 hidden-lg\">
                    <div id=\"mainSidenav\" class=\"sidenav\">
                        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
                        <a href=\"#programa\" onclick=\"closeNav()\">PROGRAMA</a>
                        <a href=\"#ponentes\" onclick=\"closeNav()\">PONENTES</a>
                        <a href=\"#noticias\" onclick=\"closeNav()\">NOTICIAS</a>
                        <a href=\"#patrocinadores\" onclick=\"closeNav()\">PATROCINADORES</a>
                        <a href=\"#colaboradores\" onclick=\"closeNav()\">COLABORADORES</a>
                        <div class=\"social-sp\">
                            <div class=\"flex-center-colum\">
                                <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" onclick=\"openNav()\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\"  aria-expanded=\"false\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <a href=\"/\" class=\"logo\">
                        <img src=\"/themes/prisma/assets/images/logo-2.png\">
                    </a>
                </div>
                <div class=\"col-sm-6 visible-lg\">
                    <ul class=\"flex-right-center-colum nav-menu-main\">
                        <li><a href=\"#programa\">PROGRAMA</a></li>
                        <li><a href=\"#ponentes\">PONENTES</a></li>
                        <li><a href=\"#noticias\">NOTICIAS</a></li>
                        <li><a href=\"#patrocinadores\">PATROCINADORES</a></li>
                        <li><a href=\"#colaboradores\">COLABORADORES</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-1 visible-lg\">
                    <div class=\"flex-right-center-colum social-fa\">
                        <a href=\"#\"><i class=\"fa fa-twitter fa-lg\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-facebook fa-lg\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-linkedin fa-lg\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
                <a href=\"#\" class=\"col-sm-3 col-md-2 col-xs-4 btn-menu\">
                    <div class=\"flex-center-colum\">
                        <span>COMPRAR ENTRADA</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- // HEADER \\\\ -->
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/header/header-microsite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/header/header-microsite.html.twig", "/var/www/html/prisma/themes/prisma/templates/header/header-microsite.html.twig");
    }
}
