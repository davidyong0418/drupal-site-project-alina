<?php

/* themes/prisma/templates/views/views-view-unformatted--product.html.twig */
class __TwigTemplate_e93b6dad64fea72b94b6a4bd299e3f04d10695c7f339a771eacf579f67b30bf4 extends Twig_Template
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
        $tags = array("for" => 2, "if" => 3, "set" => 4);
        $filters = array();
        $functions = array("file_url" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 3
            echo "    ";
            if ((($context["key"] % 2) == 0)) {
                // line 4
                echo "        ";
                $context["div_1"] = "col-md-6 section-image";
                // line 5
                echo "        ";
                $context["div_2"] = "col-md-6";
                // line 6
                echo "        ";
                $context["left"] = "";
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                $context["div_1"] = "col-md-6 col-md-push-6 section-image";
                // line 9
                echo "        ";
                $context["div_2"] = "col-md-6 col-md-pull-6";
                // line 10
                echo "        ";
                $context["left"] = "section-left";
                // line 11
                echo "    ";
            }
            // line 12
            echo "    ";
            $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array(), "array"), "#row", array(), "array"), "_entity", array()), "field_image", array()), "entity", array()), "fileuri", array())));
            // line 13
            echo "    <div class=\"row\">
        <div class=\"";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["div_1"] ?? null), "html", null, true));
            echo "\">
            <div class=\"row\">
                <img src=\"";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["img"] ?? null), "html", null, true));
            echo "\">
            </div>
        </div>
        <div class=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["div_2"] ?? null), "html", null, true));
            echo "\">
            <div class=\"row\">
                <div class=\"section-content ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["left"] ?? null), "html", null, true));
            echo "\">
                    ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/views/views-view-unformatted--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  103 => 22,  99 => 21,  94 => 19,  88 => 16,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/views/views-view-unformatted--product.html.twig", "/var/www/html/prisma/themes/prisma/templates/views/views-view-unformatted--product.html.twig");
    }
}
