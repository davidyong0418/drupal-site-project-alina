<?php

/* themes/prisma/templates/page/page--node-event.html.twig */
class __TwigTemplate_709ff28655a6cdad5cc267c66a8fc7dd8f2b8e4ccc2302e8178fa265fa931721 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 20);
        $filters = array("t" => 21);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array('t'),
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
        echo "<div id=\"main\" class=\"microsite-evento-template\">
    ";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header/header-microsite.html.twig"), "themes/prisma/templates/page/page--node-event.html.twig", 2)->display($context);
        // line 3
        echo "\t<div class=\"background\"></div>
    <!-- MAIN CONTENT -->
    <div class=\"wrap\">

        <!-- // BANNER \\\\ -->
        <div class=\"banner\" style=\"background-image: url('/themes/prisma/assets/images/eventos-bg2.png')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-2 banner-marker\">
                        <img class=\"img-responsive\" src=\"/themes/prisma/assets/images/marker.png\" alt=\"\" />
                    </div>

                    <div class=\"col-sm-8\">
                        <div class=\"row\">
                            <div class=\"banner-content text-center\">
                                <h1 class=\"banner-text-1\">";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
        echo "</h1>
                                <div class=\"banner-text-2\">
                                ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array())) {
            // line 21
            echo "                                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array()))));
            echo "
                                ";
        }
        // line 23
        echo "                                </div>
                                <div class=\"flex-wrap-center-colum event-detail-deskop\">
                                    <div class=\"col-sm-5 col-xs-12 banner-box\">
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> <span>";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_time", array()), "value", array()), "html", null, true));
        echo "</span>
                                        </div>
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> <span>";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_clock", array()), "value", array()), "html", null, true));
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5 col-xs-12 banner-box\">
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> <span>
                                            ";
        // line 36
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_location", array()), "value", array())) {
            // line 37
            echo "                                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_location", array()), "value", array()))));
            echo "
                                            ";
        }
        // line 39
        echo "                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"flex-wrap-center-colum event-detail-mobile\">
                                    <div class=\"col-sm-5 col-xs-12 banner-box\">
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> <span>
                                            ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_location", array()), "value", array())) {
            // line 48
            echo "                                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_location", array()), "value", array()))));
            echo "
                                            ";
        }
        // line 50
        echo "                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5 col-xs-12 banner-box\">
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> <span>";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_time", array()), "value", array()), "html", null, true));
        echo "</span>
                                        </div>
                                        <div class=\"banner-info\">
                                            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> <span>";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_clock", array()), "value", array()), "html", null, true));
        echo "</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // BANNER \\\\ -->


        <!-- // Programa \\\\ -->
            <section class=\"programa-section\" id=\"programa\">

                    <div class=\"container\">

                        <h1 class=\"page-title text-center\">Programa</h1>

                        <div>

                            <!-- Nav tabs -->
                            <div class=\"text-center\">
                                <div class=\"jscustom-list\">
                                    <div class=\"visible-xs\"><span class=\"text-mb\"></span></div>
                                    <ul class=\"nav flex-center-colum\" role=\"tablist\">
                                    ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tab_menu"] ?? null))));
        echo "
                                    </ul>
                                </div>
                            </div>

                            <!-- // Tab panes \\\\ -->

                            <div class=\"tab-content\">

                                ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tab_content"] ?? null))));
        echo "

                            </div>

                            <!-- // Tab panes \\\\ -->

                        </div>

                    </div>

                </section>
        <!-- // Programa \\\\ -->

        <!-- // Ponentes \\\\ -->
        <section id=\"ponentes\" class=\"ponentes-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <h2 class=\"title text-center\" >Ponentes</h2>
                    <div class=\"text-center\">
                        ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "ponentes_widget", array()), "html", null, true));
        echo "

                    </div>
                </div>
            </div>
        </section>
        <!-- // Ponentes \\\\ -->

        <!-- // Noticias \\\\ -->
        <section class=\"noticias-section\" id=\"noticias\">
            ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "noticias_widget", array()), "html", null, true));
        echo "
        </section>
        <!-- // Noticias \\\\ -->
        <section class=\"container\" id=\"patrocinadores\">
            ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "patrocinadores_widget", array()), "html", null, true));
        echo "
        </section>
          <section class=\"container\" id=\"colaboradores\">
            ";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "colaboradores_widget", array()), "html", null, true));
        echo "
        </section>



    </div>
    <!-- MAIN CONTENT -->

    <!-- // FOOTER \\\\ -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 footer-content\">
                    <h1>Contacta con nosotros</h1>
                    <p>¿Necesitas ayuda en algo? Rellena este formulario y nos pondremos en contacto contigo lo antes posible.</p>
                </div>
                <div class=\"col-md-7\">
                    <div class='footer-form'>
                        ";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "contact_form_widget", array())) {
            // line 150
            echo "                            <div class=\"row\">
                                ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_form_widget", array()), "html", null, true));
            echo "
                            </div>
                        ";
        }
        // line 154
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid footer-text\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 copyright\">
                        <p>© Copyright I Encuentro Planeta Vial, todos los derechos reservados  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // FOOTER \\\\ -->

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 154,  255 => 151,  252 => 150,  250 => 149,  229 => 131,  223 => 128,  216 => 124,  203 => 114,  181 => 95,  169 => 86,  138 => 58,  132 => 55,  125 => 50,  119 => 48,  117 => 47,  107 => 39,  101 => 37,  99 => 36,  90 => 30,  84 => 27,  78 => 23,  72 => 21,  70 => 20,  65 => 18,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-event.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-event.html.twig");
    }
}
