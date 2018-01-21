<?php

/* @WebProfiler/Collector/validator.html.twig */
class __TwigTemplate_552f1f38b19a0fb2999bf44bfb05b33f5d9c8ab8a8f198790a70a8aa697d7191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/validator.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09def414ffa3f5b1af7f4b0efc74fae41da589211cc04cb0e288eb53c07b2c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09def414ffa3f5b1af7f4b0efc74fae41da589211cc04cb0e288eb53c07b2c5f->enter($__internal_09def414ffa3f5b1af7f4b0efc74fae41da589211cc04cb0e288eb53c07b2c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09def414ffa3f5b1af7f4b0efc74fae41da589211cc04cb0e288eb53c07b2c5f->leave($__internal_09def414ffa3f5b1af7f4b0efc74fae41da589211cc04cb0e288eb53c07b2c5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73bf4fa1cb1e1fa809187a6dcdb3084960dccae46049644e570e480af4941018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bf4fa1cb1e1fa809187a6dcdb3084960dccae46049644e570e480af4941018->enter($__internal_73bf4fa1cb1e1fa809187a6dcdb3084960dccae46049644e570e480af4941018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? null), "violationsCount", array()) > 0) || twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "calls", array())))) {
            // line 5
            echo "        ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? null), "violationsCount", array())) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "violationsCount", array())) ? ($this->getAttribute(($context["collector"] ?? null), "violationsCount", array())) : (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "calls", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "calls", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status";
            // line 20
            echo ((($this->getAttribute(($context["collector"] ?? null), "violationsCount", array()) > 0)) ? (" sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "violationsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_73bf4fa1cb1e1fa809187a6dcdb3084960dccae46049644e570e480af4941018->leave($__internal_73bf4fa1cb1e1fa809187a6dcdb3084960dccae46049644e570e480af4941018_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc38a5a452214f60f743d40266249335f83a5459a4241807f7f8f36aeb56f603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc38a5a452214f60f743d40266249335f83a5459a4241807f7f8f36aeb56f603->enter($__internal_bc38a5a452214f60f743d40266249335f83a5459a4241807f7f8f36aeb56f603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? null), "violationsCount", array())) ? (" label-status-error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "calls", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
        echo "</span>
        <strong>Validator</strong>
        ";
        // line 32
        if (($this->getAttribute(($context["collector"] ?? null), "violationsCount", array()) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "violationsCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_bc38a5a452214f60f743d40266249335f83a5459a4241807f7f8f36aeb56f603->leave($__internal_bc38a5a452214f60f743d40266249335f83a5459a4241807f7f8f36aeb56f603_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efc5158a5679928f6fc58982f8c09762101b1e0ceda9c533dd762dbe9ce1c603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc5158a5679928f6fc58982f8c09762101b1e0ceda9c533dd762dbe9ce1c603->enter($__internal_efc5158a5679928f6fc58982f8c09762101b1e0ceda9c533dd762dbe9ce1c603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <h2>Validator calls</h2>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "calls", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 44
            echo "        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 46
            $context["caller"] = $this->getAttribute($context["call"], "caller", array());
            // line 47
            echo "                ";
            if ($this->getAttribute(($context["caller"] ?? null), "line", array())) {
                // line 48
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["caller"] ?? null), "file", array()), $this->getAttribute(($context["caller"] ?? null), "line", array()));
                // line 49
                echo "                    ";
                if (($context["link"] ?? null)) {
                    // line 50
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 52
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 54
                echo "                ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 57
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? null), "line", array()), "html", null, true);
            echo "</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute(($context["caller"] ?? null), "file", array()), $this->getAttribute(($context["caller"] ?? null), "line", array()));
            echo "
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                ";
            // line 67
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["call"], "context", array()), 1));
            echo "
            </div>

            ";
            // line 70
            if (twig_length_filter($this->env, $this->getAttribute($context["call"], "violations", array()))) {
                // line 71
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["call"], "violations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                    // line 81
                    echo "                        <tr>
                            <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "propertyPath", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "message", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 84
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["violation"], "seek", array(0 => "invalidValue"), "method")));
                    echo "</td>
                            <td>";
                    // line 85
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["violation"]));
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                </table>
            ";
            } else {
                // line 90
                echo "                No violations
            ";
            }
            // line 92
            echo "        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 94
            echo "        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_efc5158a5679928f6fc58982f8c09762101b1e0ceda9c533dd762dbe9ce1c603->leave($__internal_efc5158a5679928f6fc58982f8c09762101b1e0ceda9c533dd762dbe9ce1c603_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 94,  289 => 92,  285 => 90,  281 => 88,  272 => 85,  268 => 84,  264 => 83,  260 => 82,  257 => 81,  253 => 80,  242 => 71,  240 => 70,  234 => 67,  230 => 66,  223 => 62,  218 => 60,  207 => 57,  201 => 55,  198 => 54,  190 => 52,  180 => 50,  177 => 49,  174 => 48,  171 => 47,  169 => 46,  165 => 44,  147 => 43,  143 => 41,  137 => 40,  129 => 37,  123 => 34,  120 => 33,  118 => 32,  113 => 30,  106 => 29,  100 => 28,  90 => 24,  87 => 23,  79 => 20,  72 => 16,  68 => 14,  66 => 13,  63 => 12,  57 => 9,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/validator.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/validator.html.twig");
    }
}
