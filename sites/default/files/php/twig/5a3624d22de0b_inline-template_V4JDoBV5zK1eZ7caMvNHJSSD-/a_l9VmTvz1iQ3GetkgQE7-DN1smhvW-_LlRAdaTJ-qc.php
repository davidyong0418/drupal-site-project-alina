<?php

/* {# inline_template_start #}<div class="journals-img">
<a href="{{path}}">
                                <img src="{{ field_image }}" class="img-responsive" alt="" />
</a>
                            </div>
                 <div class="journals-info">
<a class='fb-info' href="https://facebook.com/"><span class="icon-img"><i class="fa fa-facebook-f"></i></span></a>
                                <a href="https://instagram.com/"><span class="icon-img"><i class="fa fa-instagram"></i></span></a>
                                <a href="https://twitter.com/"><span class="icon-img"><i class="fa fa-twitter"></i></span></a>
                                <a href="{{path}}" class="btn-round">Ir a la web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> */
class __TwigTemplate_2c057d3b771bdb1e616fe708700b334b96ced28e43d141658101fb244c1e1f49 extends Twig_Template
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
        echo "<div class=\"journals-img\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">
                                <img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"\" />
</a>
                            </div>
                 <div class=\"journals-info\">
<a class='fb-info' href=\"https://facebook.com/\"><span class=\"icon-img\"><i class=\"fa fa-facebook-f\"></i></span></a>
                                <a href=\"https://instagram.com/\"><span class=\"icon-img\"><i class=\"fa fa-instagram\"></i></span></a>
                                <a href=\"https://twitter.com/\"><span class=\"icon-img\"><i class=\"fa fa-twitter\"></i></span></a>
                                <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"btn-round\">Ir a la web <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                            </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"journals-img\">
<a href=\"{{path}}\">
                                <img src=\"{{ field_image }}\" class=\"img-responsive\" alt=\"\" />
</a>
                            </div>
                 <div class=\"journals-info\">
<a class='fb-info' href=\"https://facebook.com/\"><span class=\"icon-img\"><i class=\"fa fa-facebook-f\"></i></span></a>
                                <a href=\"https://instagram.com/\"><span class=\"icon-img\"><i class=\"fa fa-instagram\"></i></span></a>
                                <a href=\"https://twitter.com/\"><span class=\"icon-img\"><i class=\"fa fa-twitter\"></i></span></a>
                                <a href=\"{{path}}\" class=\"btn-round\">Ir a la web <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                            </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  60 => 3,  56 => 2,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"journals-img\">
<a href=\"{{path}}\">
                                <img src=\"{{ field_image }}\" class=\"img-responsive\" alt=\"\" />
</a>
                            </div>
                 <div class=\"journals-info\">
<a class='fb-info' href=\"https://facebook.com/\"><span class=\"icon-img\"><i class=\"fa fa-facebook-f\"></i></span></a>
                                <a href=\"https://instagram.com/\"><span class=\"icon-img\"><i class=\"fa fa-instagram\"></i></span></a>
                                <a href=\"https://twitter.com/\"><span class=\"icon-img\"><i class=\"fa fa-twitter\"></i></span></a>
                                <a href=\"{{path}}\" class=\"btn-round\">Ir a la web <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                            </div>", "");
    }
}
