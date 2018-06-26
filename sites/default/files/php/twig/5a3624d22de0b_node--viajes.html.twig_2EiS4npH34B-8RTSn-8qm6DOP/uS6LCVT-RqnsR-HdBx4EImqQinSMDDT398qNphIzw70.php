<?php

/* themes/prisma/templates/node/node--viajes.html.twig */
class __TwigTemplate_75638b716278021e5f57fe8ae077aa8db8015204ca6d032da2819dfcc93a55b3 extends Twig_Template
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
        $tags = array("if" => 12);
        $filters = array("t" => 13);
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('file_url')
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
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-8 col-md-push-4\">
        <h1>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
        echo "</h1>
    </div>
    <div class=\"col-sm-12 viajes-info\">
    <div class=\"col-xs-12 col-md-8 col-md-push-4\">
        <img src=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\">
    </div>
    <div class=\"col-xs-12 col-md-4 col-md-pull-8 viajes-left\">
        <div class=\"viajes-event-info\">
            <p><img src=\"/themes/prisma/assets/svg/pincho.svg\" class=\"icon_svg_pincho\">
                <span><b>";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_city", array()), "value", array())) {
            // line 13
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_city", array()), "value", array()))));
            echo "
                        ";
        }
        // line 14
        echo ", <br>del 10 al 18 de junio</b></span>
                </p>
                <div class=\"clear\"></div><p></p>
                <p><i class=\"fa fa-info\" aria-hidden=\"true\"></i>
                    <span>Las habitaciones del hotel serán para dos personas. <br>Reservas habitaciones: <br><b>93 492 87 09</b></span></p>
                <div class=\"clear\"></div><p></p>
                <div class=\"btn-load-more-ajax\">
                    <a href=\"#\" class=\"btn-round red\">Comprar </a>
                </div>
            </div>

        </div>
    </div>
    <div class=\"col-xs-12\">
        <div class=\"col-sm-12 col-md-8 col-md-push-4\">
            <div class=\"viajes-content\">
                <div>

                    <!-- // Programa \\\\ -->

                    <section class=\"programa-section\">

                        <div>

                            <!-- Nav tabs -->

                            <ul class=\"nav tab-parent flex-center-colum\" role=\"tablist\">

                                <li role=\"presentation\" class=\"active\"><a href=\"#descripcion\" aria-controls=\"descripcion\" role=\"tab\" data-toggle=\"tab\">Descripción del viaje</a></li>

                                <li role=\"presentation\"><a href=\"#horarios\" aria-controls=\"horarios\" role=\"tab\" data-toggle=\"tab\">Horarios por días</a></li>

                            </ul>



                            <!-- // Tab panes \\\\ -->

                            <div class=\"tab-content\">

                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"descripcion\">
                                    <div>
                                        ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array())) {
            // line 57
            echo "                                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array()))));
            echo "
                                        ";
        }
        // line 59
        echo "                                    </div>
                                    <div class=\"inner-wrap\">
                                        <h2 class=\"via_tab_title_1\">Viajaras con:</h2>
                                        <div class=\"somos row\">
                                            ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["conference"] ?? null))));
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"horarios\">
                                    <section class=\"programa-section tab-child\">
                                        <div>
                                            <!-- Nav tabs -->
                                            <div class=\"text-center\">
                                                <div class=\"jscustom-list\">
                                                    <div class=\"visible-xs\"><span class=\"text-mb\"></span></div>
                                                    <ul class=\"nav flex-center-colum\" role=\"tablist\">
                                                        ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tab_viajes"] ?? null))));
        echo "
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- // Tab panes \\\\ -->
                                            <div class=\"tab-content\">
                                                ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tab_content_viajes"] ?? null))));
        echo "
                                            </div>
                                            <!-- // Tab panes \\\\ -->
                                        </div>

                                    </section>

                                </div>

                            </div>

                            <!-- // Tab panes \\\\ -->

                        </div>


                    </section>

                    <!-- // Programa \\\\ -->

                    <!-- MAIN CONTENT -->
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/node/node--viajes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 82,  143 => 75,  128 => 63,  122 => 59,  116 => 57,  114 => 56,  70 => 14,  64 => 13,  62 => 12,  54 => 7,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/node/node--viajes.html.twig", "/var/www/html/prisma/themes/prisma/templates/node/node--viajes.html.twig");
    }
}
