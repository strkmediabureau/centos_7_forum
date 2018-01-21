<?php

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_fcbe9fae0e706f55f82b189bfd541f7b8b97d643c5c7bf5caff8cc61dda3945f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
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
        $__internal_32c1a8f7f4b092dca8edb22d1dc34c17016ee0d219db183ed096377bdde7a6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c1a8f7f4b092dca8edb22d1dc34c17016ee0d219db183ed096377bdde7a6d1->enter($__internal_32c1a8f7f4b092dca8edb22d1dc34c17016ee0d219db183ed096377bdde7a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c1a8f7f4b092dca8edb22d1dc34c17016ee0d219db183ed096377bdde7a6d1->leave($__internal_32c1a8f7f4b092dca8edb22d1dc34c17016ee0d219db183ed096377bdde7a6d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e360dc600f1537b6057e9a5dca749b420878681848cdeb0cf536a9aed1e4036d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e360dc600f1537b6057e9a5dca749b420878681848cdeb0cf536a9aed1e4036d->enter($__internal_e360dc600f1537b6057e9a5dca749b420878681848cdeb0cf536a9aed1e4036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "hits", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "reads", array()), "html", null, true);
            if ( !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "hit_read_ratio", array()))) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "hit_read_ratio", array()), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null)));
            echo "
    ";
        }
        
        $__internal_e360dc600f1537b6057e9a5dca749b420878681848cdeb0cf536a9aed1e4036d->leave($__internal_e360dc600f1537b6057e9a5dca749b420878681848cdeb0cf536a9aed1e4036d_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42566a8f7de0bae43de19c63c186259186d9035043939d618476ba0859abff1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42566a8f7de0bae43de19c63c186259186d9035043939d618476ba0859abff1d->enter($__internal_42566a8f7de0bae43de19c63c186259186d9035043939d618476ba0859abff1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">
        ";
        // line 40
        echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        echo "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_42566a8f7de0bae43de19c63c186259186d9035043939d618476ba0859abff1d->leave($__internal_42566a8f7de0bae43de19c63c186259186d9035043939d618476ba0859abff1d_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b4050c619ea5af82ba6964d227d8754071fdd218c4be54b877381cda4836236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4050c619ea5af82ba6964d227d8754071fdd218c4be54b877381cda4836236->enter($__internal_1b4050c619ea5af82ba6964d227d8754071fdd218c4be54b877381cda4836236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()) == 0)) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "reads", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "deletes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "hits", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array()), "misses", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())) : (0)), "html", null, true);
            echo " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "calls", array()));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "statistics", array()), $context["name"], array(), "array"), "calls", array()), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 101
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    echo "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "statistics", array()), $context["name"], array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        echo "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            echo "                                                ";
                            echo twig_escape_filter($this->env, sprintf("%0.2f", (1000 * $this->getAttribute($context["value"], "value", array()))), "html", null, true);
                            echo " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            echo "                                                ";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($context["value"], "value", array(), "any", true, true) &&  !(null === $this->getAttribute($context["value"], "value", array())))) ? ($this->getAttribute($context["value"], "value", array())) : (0)), "html", null, true);
                            echo " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "
                                            ";
                        }
                        // line 117
                        echo "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        echo twig_escape_filter($this->env, ((($context["key"] == "hit_read_ratio")) ? ("Hits/reads") : (twig_capitalize_string_filter($this->env, $context["key"]))), "html", null, true);
                        echo "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            echo "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
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
                        // line 138
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (($this->getAttribute($context["call"], "end", array()) - $this->getAttribute($context["call"], "start", array())) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "name", array()), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 142
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($context["call"], "value", array()), "result", array()), 2));
                        echo "</td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "        </div>
    ";
        }
        
        $__internal_1b4050c619ea5af82ba6964d227d8754071fdd218c4be54b877381cda4836236->leave($__internal_1b4050c619ea5af82ba6964d227d8754071fdd218c4be54b877381cda4836236_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 151,  379 => 148,  374 => 145,  357 => 142,  353 => 141,  349 => 140,  345 => 139,  342 => 138,  325 => 137,  310 => 124,  304 => 123,  300 => 121,  298 => 120,  293 => 118,  290 => 117,  284 => 115,  278 => 113,  276 => 112,  271 => 111,  269 => 110,  265 => 108,  261 => 107,  257 => 105,  251 => 102,  248 => 101,  246 => 100,  238 => 97,  233 => 96,  229 => 95,  218 => 87,  210 => 82,  203 => 78,  195 => 73,  188 => 69,  181 => 65,  173 => 60,  166 => 56,  162 => 54,  156 => 50,  154 => 49,  150 => 47,  144 => 46,  132 => 40,  126 => 38,  120 => 37,  110 => 33,  107 => 32,  101 => 29,  87 => 25,  80 => 21,  73 => 17,  69 => 15,  66 => 14,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/cache.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/cache.html.twig");
    }
}
