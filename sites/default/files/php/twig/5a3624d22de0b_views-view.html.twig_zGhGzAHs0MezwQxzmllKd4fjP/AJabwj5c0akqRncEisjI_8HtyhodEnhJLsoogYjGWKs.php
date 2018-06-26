<?php

/* themes/prisma/templates/views/views-view.html.twig */
class __TwigTemplate_f22bf5f6d35dbe362ceaa1c35ed5bcc27ccc6fe51a08bea2a3c327124054af22 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        if ((($context["display_id"] ?? null) == "viajes")) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"eventos-filter filter-form\">
                <div class=\"form-group\">
                    <label>Filtrar por:</label>
                    <button type=\"button\" class=\"btn-round visible-xs btn-click\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> Filtrar</button>
                    ";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <div class=\"eventos-ports flex-wrap-center-colum\">
            ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
            ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
        </div>
    </div>
";
        } elseif ((        // line 17
($context["display_id"] ?? null) == "conference")) {
            // line 18
            echo "
        <div class=\"container\">
           <div class=\"row\">
        <h1>Conferenciantes:</h1>
        <div class=\"somos-filter row filter-form\">

            <label>Filtrar por:</label>
            <button type=\"button\" class=\"btn-round visible-xs btn-click\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> Filtrar</button>
            ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        </div>
        </div>
        </div>
        <div class=\"somos\">
            <div class=\"row\">
                ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
                ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
            </div>
            <div class=\"row\">
                ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
                ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
            </div>
        </div>
";
        } elseif ((        // line 40
($context["display_id"] ?? null) == "eventos")) {
            // line 41
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
        <div class=\"somos-filter filter-form row\">
            <label class=\"filter-label\">Filtrar por:</label>
            <button type=\"button\" class=\"btn-round visible-xs btn-click\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> Filtrar</button>
            ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        </div>
        </div>
        <div class=\"eventos-ports\">
            ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
        </div>
        ";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "


    </div>
";
        } elseif ((        // line 56
($context["display_id"] ?? null) == "actualidad")) {
            // line 57
            echo "    <div class=\"row\">
        <div class=\"somos-filter row filter-form\">
            <label>Filtrar por:</label>
            <button type=\"button\" class=\"btn-round visible-xs btn-click\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> Filtrar</button>
            ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        </div>
        <div class=\"post-new-section\">
                
                    ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
    
        </div>
        ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "


    </div>
";
        } else {
            // line 73
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
    ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  169 => 73,  161 => 68,  155 => 65,  148 => 61,  142 => 57,  140 => 56,  133 => 52,  128 => 50,  121 => 46,  114 => 41,  112 => 40,  106 => 37,  102 => 36,  96 => 33,  92 => 32,  83 => 26,  73 => 18,  71 => 17,  65 => 14,  61 => 13,  53 => 8,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/views/views-view.html.twig", "/var/www/html/prisma/themes/prisma/templates/views/views-view.html.twig");
    }
}
