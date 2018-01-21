<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_8c32968c1f0d4cc1a9a407abc22777f79039dac25df7cbb99beb0adcd9652947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_17d88efec7e083b65da3dcbde0f5e76f3245e8336b1ef1f2d11275fba49d3e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d88efec7e083b65da3dcbde0f5e76f3245e8336b1ef1f2d11275fba49d3e28->enter($__internal_17d88efec7e083b65da3dcbde0f5e76f3245e8336b1ef1f2d11275fba49d3e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d88efec7e083b65da3dcbde0f5e76f3245e8336b1ef1f2d11275fba49d3e28->leave($__internal_17d88efec7e083b65da3dcbde0f5e76f3245e8336b1ef1f2d11275fba49d3e28_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caea39b89c963a57e4fa98ea67e14e41fa54f92bad4cb5ca2e5dbb23f51a56b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caea39b89c963a57e4fa98ea67e14e41fa54f92bad4cb5ca2e5dbb23f51a56b1->enter($__internal_caea39b89c963a57e4fa98ea67e14e41fa54f92bad4cb5ca2e5dbb23f51a56b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? null), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_caea39b89c963a57e4fa98ea67e14e41fa54f92bad4cb5ca2e5dbb23f51a56b1->leave($__internal_caea39b89c963a57e4fa98ea67e14e41fa54f92bad4cb5ca2e5dbb23f51a56b1_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_568b3d3aa009ea10f3b02d47dbadbf2fa1ea7647886457e09ff3c9fe6a6a586f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568b3d3aa009ea10f3b02d47dbadbf2fa1ea7647886457e09ff3c9fe6a6a586f->enter($__internal_568b3d3aa009ea10f3b02d47dbadbf2fa1ea7647886457e09ff3c9fe6a6a586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? null), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_568b3d3aa009ea10f3b02d47dbadbf2fa1ea7647886457e09ff3c9fe6a6a586f->leave($__internal_568b3d3aa009ea10f3b02d47dbadbf2fa1ea7647886457e09ff3c9fe6a6a586f_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_304f42b7bf6af9b2e53970360915e342beb0a98a616d31336d5363b1d329a0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304f42b7bf6af9b2e53970360915e342beb0a98a616d31336d5363b1d329a0b4->enter($__internal_304f42b7bf6af9b2e53970360915e342beb0a98a616d31336d5363b1d329a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? null), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? null), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? null), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? null), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? null), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? null)))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty(($context["info_and_error_logs"] ?? null))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? null), "info", true);
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    ";
            // line 91
            if (twig_test_empty(($context["deprecation_logs"] ?? null))) {
                // line 92
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 96
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? null), "deprecation", false, true);
                echo "
                    ";
            }
            // line 98
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? null)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 106
            if (twig_test_empty(($context["debug_logs"] ?? null))) {
                // line 107
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 111
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? null), "debug");
                echo "
                    ";
            }
            // line 113
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">";
            // line 117
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    ";
            // line 121
            if (twig_test_empty(($context["silenced_logs"] ?? null))) {
                // line 122
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 126
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? null), "silenced");
                echo "
                    ";
            }
            // line 128
            echo "                </div>
            </div>

            ";
            // line 131
            $context["compilerLogTotal"] = 0;
            // line 132
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "compilerLogs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
                // line 133
                echo "                ";
                $context["compilerLogTotal"] = (($context["compilerLogTotal"] ?? null) + twig_length_filter($this->env, $context["logs"]));
                // line 134
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["compilerLogTotal"] ?? null), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    ";
            // line 140
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "compilerLogs", array()))) {
                // line 141
                echo "                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    ";
            } else {
                // line 145
                echo "                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "compilerLogs", array()));
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
                foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                    // line 155
                    echo "                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            ";
                    // line 157
                    $context["context_id"] = ("context-compiler-" . $this->getAttribute($context["loop"], "index", array()));
                    // line 158
                    echo "
                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                    // line 159
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                    echo "\" data-toggle-alt-content=\"";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</a>

                                             <div id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["logs"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 164
                        echo "                                                    <li>";
                        echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute($context["log"], "message", array()));
                        echo "</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 175
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_304f42b7bf6af9b2e53970360915e342beb0a98a616d31336d5363b1d329a0b4->leave($__internal_304f42b7bf6af9b2e53970360915e342beb0a98a616d31336d5363b1d329a0b4_prof);

    }

    // line 182
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_39247d38cad314200f09f8f478455f6d5cb8b826b8656d33f9c656a9cf20422e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_39247d38cad314200f09f8f478455f6d5cb8b826b8656d33f9c656a9cf20422e->enter($__internal_39247d38cad314200f09f8f478455f6d5cb8b826b8656d33f9c656a9cf20422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 183
            echo "    ";
            $context["helper"] = $this;
            // line 184
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", array(), "any", true, true);
            // line 185
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 189
            echo ((($context["show_level"] ?? null)) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 190
            if (($context["channel_is_defined"] ?? null)) {
                echo "<th>Channel</th>";
            }
            // line 191
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 197
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? null)) ? ("") : (((twig_in_filter($this->getAttribute(                // line 198
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 199
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 201
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 203
                if (($context["show_level"] ?? null)) {
                    // line 204
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 206
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 209
                if (($context["channel_is_defined"] ?? null)) {
                    // line 210
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 212
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 213
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 215
                    echo "                        </td>

                    ";
                }
                // line 218
                echo "
                    <td class=\"font-normal\">";
                // line 219
                echo $context["helper"]->getrender_log_message(($context["category"] ?? null), $this->getAttribute($context["loop"], "index", array()), $context["log"]);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        </tbody>
    </table>
";
            
            $__internal_39247d38cad314200f09f8f478455f6d5cb8b826b8656d33f9c656a9cf20422e->leave($__internal_39247d38cad314200f09f8f478455f6d5cb8b826b8656d33f9c656a9cf20422e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 226
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4bd7729a686ab0cfd801315360ae9eaa245e430cd88a8eb47b0ad10b49877e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4bd7729a686ab0cfd801315360ae9eaa245e430cd88a8eb47b0ad10b49877e35->enter($__internal_4bd7729a686ab0cfd801315360ae9eaa245e430cd88a8eb47b0ad10b49877e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 227
            echo "    ";
            $context["has_context"] = ($this->getAttribute(($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? null), "context", array())));
            // line 228
            echo "    ";
            $context["has_trace"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "exception", array(), "any", false, true), "trace", array(), "any", true, true);
            // line 229
            echo "
    ";
            // line 230
            if ( !($context["has_context"] ?? null)) {
                // line 231
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()));
                echo "
    ";
            } else {
                // line 233
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()), $this->getAttribute(($context["log"] ?? null), "context", array()));
                echo "

        <div class=\"text-small font-normal\">
            ";
                // line 236
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 237
                echo "            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

            ";
                // line 239
                if (($context["has_trace"] ?? null)) {
                    // line 240
                    echo "                &nbsp;&nbsp;
                ";
                    // line 241
                    $context["trace_id"] = ((("trace-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                    // line 242
                    echo "                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            ";
                }
                // line 244
                echo "        </div>

        <div id=\"";
                // line 246
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                // line 247
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? null), "context", array()), 1));
                echo "
        </div>

        ";
                // line 250
                if (($context["has_trace"] ?? null)) {
                    // line 251
                    echo "            <div id=\"";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                    // line 252
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array()), "exception", array()), "trace", array()), 1));
                    echo "
            </div>
        ";
                }
                // line 255
                echo "    ";
            }
            
            $__internal_4bd7729a686ab0cfd801315360ae9eaa245e430cd88a8eb47b0ad10b49877e35->leave($__internal_4bd7729a686ab0cfd801315360ae9eaa245e430cd88a8eb47b0ad10b49877e35_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 255,  699 => 252,  694 => 251,  692 => 250,  686 => 247,  682 => 246,  678 => 244,  672 => 242,  670 => 241,  667 => 240,  665 => 239,  659 => 237,  657 => 236,  650 => 233,  644 => 231,  642 => 230,  639 => 229,  636 => 228,  633 => 227,  616 => 226,  596 => 222,  579 => 219,  576 => 218,  571 => 215,  565 => 213,  563 => 212,  559 => 211,  556 => 210,  554 => 209,  547 => 206,  541 => 204,  539 => 203,  533 => 201,  531 => 199,  530 => 198,  528 => 197,  511 => 196,  504 => 191,  500 => 190,  496 => 189,  490 => 185,  487 => 184,  484 => 183,  466 => 182,  454 => 175,  449 => 172,  432 => 169,  427 => 166,  418 => 164,  414 => 163,  409 => 161,  400 => 159,  397 => 158,  395 => 157,  391 => 155,  374 => 154,  363 => 145,  357 => 141,  355 => 140,  348 => 136,  345 => 135,  339 => 134,  336 => 133,  331 => 132,  329 => 131,  324 => 128,  318 => 126,  312 => 122,  310 => 121,  303 => 117,  297 => 113,  291 => 111,  285 => 107,  283 => 106,  276 => 102,  270 => 98,  264 => 96,  258 => 92,  256 => 91,  246 => 87,  240 => 81,  234 => 79,  228 => 75,  226 => 74,  217 => 70,  212 => 67,  206 => 66,  203 => 65,  200 => 64,  197 => 63,  194 => 62,  191 => 61,  188 => 60,  185 => 59,  182 => 58,  179 => 57,  174 => 56,  171 => 55,  169 => 54,  163 => 50,  161 => 49,  157 => 47,  151 => 46,  143 => 43,  137 => 40,  134 => 39,  132 => 38,  127 => 36,  120 => 35,  114 => 34,  104 => 30,  101 => 29,  93 => 26,  83 => 21,  73 => 16,  69 => 14,  67 => 13,  64 => 12,  59 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/logger.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
