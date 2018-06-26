<?php

/* themes/prisma/templates/page/views-view-unformatted--_actualidad_.html.twig */
class __TwigTemplate_ab37020107fefece6a1946fee2e7deeec151ecfbdcab7b432f2d96158029c7f1 extends Twig_Template
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
        $tags = array("for" => 9, "set" => 10, "if" => 12);
        $filters = array();
        $functions = array("file_url" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array(),
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
        echo "
<!--// POST LIST \\\\-->
<!--// POST LIST \\\\-->
<div class=\"post-new-section\">
    <div class=\"container\">
        <h3 class=\"title\">Actualidad</h3>
        <div class=\"post-lists row\">
     
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 10
            echo "                ";
            $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array(), "array"), "#row", array(), "array"), "_entity", array()), "field_image", array()), "entity", array()), "fileuri", array())));
            // line 11
            echo "                ";
            $context["path"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array(), "array"), "#row", array(), "array"), "_entity", array()), "title", array()), "url", array());
            // line 12
            echo "                ";
            if (($context["key"] == 0)) {
                // line 13
                echo "                    <div class=\"post-item item-first col-sm-8 col-xs-12\">
                        <div class=\"post-bg\" style=\"background-image: url('";
                // line 14
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["img"] ?? null), "html", null, true));
                echo "');\">
                    ";
            } else {
                // line 16
                echo "                    <div class=\"post-item col-sm-4 col-xs-12\">
                         <div class=\"post-bg imgResize-1-1\" style=\"background-image: url('";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["img"] ?? null), "html", null, true));
                echo "');\">
                ";
            }
            // line 19
            echo "                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
        </div>
    </div>
</div>
<!--// POST LIST \\\\-->
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/views-view-unformatted--_actualidad_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  82 => 19,  77 => 17,  74 => 16,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/views-view-unformatted--_actualidad_.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/views-view-unformatted--_actualidad_.html.twig");
    }
}
