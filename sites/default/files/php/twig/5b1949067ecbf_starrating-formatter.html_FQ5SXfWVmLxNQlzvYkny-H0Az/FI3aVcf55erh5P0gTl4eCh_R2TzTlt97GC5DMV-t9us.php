<?php

/* modules/starrating/templates/starrating-formatter.html.twig */
class __TwigTemplate_19a0faf1a0803ed3549c73f7385aae370729f13ec7a054e715af22c952f238e3 extends Twig_Template
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
        $tags = array("if" => 2, "for" => 3, "set" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
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
        echo "<div class='starrating'>
";
        // line 2
        if ((($context["type"] ?? null) == "starrating")) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["min"] ?? null), ($context["max"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if ((($context["i"] < ($context["rate"] ?? null)) || (($context["i"] > ($context["rate"] ?? null)) && ($context["fill_blank"] ?? null)))) {
                    // line 4
                    echo "      ";
                    if ((($context["i"] > ($context["rate"] ?? null)) && ($context["fill_blank"] ?? null))) {
                        // line 5
                        echo "        ";
                        $context["class"] = (($context["icon_type"] ?? null) . "-off");
                        // line 6
                        echo "      ";
                    } else {
                        // line 7
                        echo "        ";
                        $context["class"] = ((($context["icon_type"] ?? null) . ($context["icon_color"] ?? null)) . "-on");
                        // line 8
                        echo "      ";
                    }
                    // line 9
                    echo "      ";
                    if (($context["i"] % 2)) {
                        // line 10
                        echo "          ";
                        $context["class"] = (($context["class"] ?? null) . " odd");
                        // line 11
                        echo "      ";
                    } else {
                        // line 12
                        echo "      ";
                        $context["class"] = (($context["class"] ?? null) . " even");
                        // line 13
                        echo "      ";
                    }
                    // line 14
                    echo "      ";
                    $context["j"] = ($context["i"] + 1);
                    // line 15
                    echo "      ";
                    $context["class"] = ((($context["class"] ?? null) . " s") . ($context["j"] ?? null));
                    // line 16
                    echo "       <div class='rate-image ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["class"] ?? null), "html", null, true));
                    echo "'></div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rate"] ?? null), "html", null, true));
            echo "
";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/starrating/templates/starrating-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  101 => 19,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/starrating/templates/starrating-formatter.html.twig", "C:\\xampp\\htdocs\\ferfranca\\modules\\starrating\\templates\\starrating-formatter.html.twig");
    }
}
