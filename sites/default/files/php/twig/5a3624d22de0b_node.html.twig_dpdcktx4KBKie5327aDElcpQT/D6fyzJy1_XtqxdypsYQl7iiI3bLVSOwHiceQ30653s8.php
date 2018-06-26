<?php

/* themes/prisma/templates/content/node.html.twig */
class __TwigTemplate_61b2aec132f5aafb4c36cb3fa5b3f983014350961dd9810f072d20b935d512d3 extends Twig_Template
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
        $tags = array("set" => 3, "if" => 26);
        $filters = array("clean_class" => 5, "t" => 64);
        $functions = array("attach_library" => 13, "file_url" => 27, "url" => 166);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
                array('attach_library', 'file_url', 'url')
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
        // line 3
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
";
        // line 15
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 17
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 18
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 19
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 20
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 21
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "

";
        // line 26
        if (($this->getAttribute(($context["node"] ?? null), "getType", array()) == "trademark")) {
            // line 27
            echo "    <div class=\"col-md-3\"><img class=\"factoria-img\" src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\"></div>
    <div class=\"col-md-9\">
        <div class=\"factoria-content\">
            <h1>";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h1>
            ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
        </div>
    </div>
";
        }
        // line 35
        echo "
";
        // line 36
        if (($this->getAttribute(($context["node"] ?? null), "getType", array()) == "rivistas")) {
            // line 37
            echo "    <div class=\"inter-ct-right col-sm-7 col-sm-push-4\">
        <div class=\"revi-content\">
            <h1 class=\"title\">";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h1>
            <p class=\"sub-title\">";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_sub", array()), "value", array()), "html", null, true));
            echo "</p>
            <div class=\"ctn\">
                ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
            </div>
        </div>
        <div class=\"row inter-lists\">
            <div class=\"inter-about col-sm-6 revistas-detail-mobile\">
                <img src=\"";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_avatar", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" class=\"img-responsive\" alt=\"\" />
                <div class=\"inter-about-info\">
                    <p class=\"inter-name\">
                        ";
            // line 50
            if ($this->getAttribute(($context["node"] ?? null), "field_info_name", array())) {
                // line 51
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_name", array()), "value", array()), "html", null, true));
                echo "
                        ";
            }
            // line 53
            echo "                    </p>
                    <p class=\"inter-position\">
                        ";
            // line 55
            if ($this->getAttribute(($context["node"] ?? null), "field_info_position", array())) {
                // line 56
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_position", array()), "value", array()), "html", null, true));
                echo "
                        ";
            }
            // line 58
            echo "                    </p>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <p class=\"lists-title\"><strong>Staff</strong></p>
                ";
            // line 63
            if ($this->getAttribute(($context["node"] ?? null), "field_staff", array())) {
                // line 64
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_staff", array()), "value", array()))));
                echo "
                ";
            }
            // line 66
            echo "            </div>
            <div class=\"col-sm-6\">
                <p class=\"lists-title\"><strong>Comercial</strong></p>
                ";
            // line 69
            if ($this->getAttribute(($context["node"] ?? null), "field_comercial", array())) {
                // line 70
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_comercial", array()), "value", array()))));
                echo "
                ";
            }
            // line 72
            echo "            </div>
        </div>
        <div class=\"inter-tab\">
            ";
            // line 75
            if (($context["tags"] ?? null)) {
                // line 76
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tags"] ?? null))));
                echo "
            ";
            }
            // line 78
            echo "        </div>

        <div class=\"inter-files-attach\">
            ";
            // line 81
            if (($context["revistas_file"] ?? null)) {
                // line 82
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["revistas_file"] ?? null))));
                echo "
            ";
            }
            // line 84
            echo "        </div>
    </div>
    <div class=\"inter-ct-left col-sm-4 col-sm-pull-7 hidden-xs\">
        <div class=\"row\">
            <div class=\"inter-about col-sm-8 revistas-detail-deskop\">
                <div class=\"square-wrap\" style=\"background-image: url(";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_avatar", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo ")\"></div>
                <div class=\"inter-about-info\">
                    <p class=\"inter-name\">
                        ";
            // line 92
            if ($this->getAttribute(($context["node"] ?? null), "field_info_name", array())) {
                // line 93
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_name", array()), "value", array()), "html", null, true));
                echo "
                        ";
            }
            // line 95
            echo "                    </p>
                    <p class=\"inter-position\">
                        ";
            // line 97
            if ($this->getAttribute(($context["node"] ?? null), "field_info_position", array())) {
                // line 98
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_info_position", array()), "value", array()), "html", null, true));
                echo "
                        ";
            }
            // line 100
            echo "                    </p>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 106
        echo "
";
        // line 107
        if ((($this->getAttribute(($context["node"] ?? null), "getType", array()) == "team") || ($this->getAttribute(($context["node"] ?? null), "getType", array()) == "conference"))) {
            // line 108
            echo "    <div class=\"office-info col-xs-6 col-md-4\">
        <div style=\"overflow: hidden; position: relative;\">
            <div class=\"square-wrap\" style=\"background-image: url(";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo ")\"></div>
        </div>
        <div class=\"categories hidden-xs\">
            <h3>Categoría:</h3>
            ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["category"] ?? null))));
            echo "
            <h3>Subcategoría:</h3>
            ";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["sub_category"] ?? null))));
            echo "
        </div>
    </div>
    <div class=\"office-content col-xs-6 visible-xs\">
        <div class=\"info\">
            <h1>";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h1>
            <h2>Escritor, deportista y trader español</h2>
            <h3>Solicitar conferenciante</h3>
        </div>
    </div>
    <div class=\"office-content col-xs-12 col-md-8\">
        <h1 class=\"hidden-xs\">";
            // line 127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h1>
        <h2 class=\"hidden-xs\">Escritor, deportista y trader español</h2>
        <h3 class=\"hidden-xs\">Solicitar conferenciante</h3>
        ";
            // line 130
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array())) {
                // line 131
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array()))));
                echo "
        ";
            }
            // line 133
            echo "        <hr />
        <h4 class=\"link_del\">Links del conferenciante:</h4>
        ";
            // line 135
            if ($this->getAttribute(($context["node"] ?? null), "field_link_social", array())) {
                // line 136
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_link_social", array()), "value", array()))));
                echo "
        ";
            }
            // line 138
            echo "    </div>
    <div class=\"office-info col-xs-12 visible-xs\">
        <h3>Categoría:</h3>
        ";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["category"] ?? null))));
            echo "
        <h3>Subcategoría:</h3>
        ";
            // line 143
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["sub_category"] ?? null))));
            echo "
    </div>
";
        }
        // line 146
        echo "
";
        // line 147
        if (($this->getAttribute(($context["node"] ?? null), "getType", array()) == "actualidad")) {
            // line 148
            echo "    <div class=\"row\">
        <div class=\"col-md-10 col-sm-offset-1\">
            <div class=\"inter-meta\">
                ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["category"] ?? null))));
            echo " | <span class=\"date\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_time", array()), "value", array()), "html", null, true));
            echo "</span>
            </div>

            <div class=\"inter-title\">
                <h2>";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h2>
            </div>

            <div class=\"inter-thumb\">
                <img src=\"";
            // line 159
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" class=\"img-responsive\" />
            </div>

            <div class=\"inter-ct-left col-sm-3\">
                <div class=\"inter-about row\">
                    <div class=\"inter-contact-info\">
                        <p class=\"text\">Compartir artículo</p>
                        <a href=\"https://twitter.com/share?url=";
            // line 166
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                        <a href=\"http://www.facebook.com/sharer.php?u=";
            // line 167
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                        <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        <a href=\"mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"inter-ct-right col-sm-9\">
                <div class=\"row\">
                    <div class=\"inter-content\">
                        ";
            // line 176
            if ($this->getAttribute(($context["node"] ?? null), "body", array())) {
                // line 177
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "value", array()))));
                echo "
                        ";
            }
            // line 179
            echo "                    </div>
                    <div class=\"inter-tab tags\">
                        <span>Tags: </span>
                        ";
            // line 182
            if (($context["tags"] ?? null)) {
                // line 183
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["tags"] ?? null))));
                echo "
                        ";
            }
            // line 185
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 185,  392 => 183,  390 => 182,  385 => 179,  379 => 177,  377 => 176,  367 => 169,  363 => 168,  359 => 167,  355 => 166,  345 => 159,  338 => 155,  329 => 151,  324 => 148,  322 => 147,  319 => 146,  313 => 143,  308 => 141,  303 => 138,  297 => 136,  295 => 135,  291 => 133,  285 => 131,  283 => 130,  277 => 127,  268 => 121,  260 => 116,  255 => 114,  248 => 110,  244 => 108,  242 => 107,  239 => 106,  231 => 100,  225 => 98,  223 => 97,  219 => 95,  213 => 93,  211 => 92,  205 => 89,  198 => 84,  192 => 82,  190 => 81,  185 => 78,  179 => 76,  177 => 75,  172 => 72,  166 => 70,  164 => 69,  159 => 66,  153 => 64,  151 => 63,  144 => 58,  138 => 56,  136 => 55,  132 => 53,  126 => 51,  124 => 50,  118 => 47,  110 => 42,  105 => 40,  101 => 39,  97 => 37,  95 => 36,  92 => 35,  85 => 31,  81 => 30,  74 => 27,  72 => 26,  67 => 24,  65 => 21,  64 => 20,  63 => 19,  62 => 18,  61 => 17,  60 => 15,  56 => 13,  53 => 12,  51 => 9,  50 => 8,  49 => 7,  48 => 6,  47 => 5,  46 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/content/node.html.twig", "/var/www/html/prisma/themes/prisma/templates/content/node.html.twig");
    }
}
