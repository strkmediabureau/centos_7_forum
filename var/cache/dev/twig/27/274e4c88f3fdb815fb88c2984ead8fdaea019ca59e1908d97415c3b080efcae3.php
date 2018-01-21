<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_4f59eadd0114716d907a437e99b094b8dea9c3e583b730658fa254a7cb4cb953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $__internal_6179492be3e66bfc97892610cdc6083d51ef22ce9e94b1e9eacbf036c1ea9154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6179492be3e66bfc97892610cdc6083d51ef22ce9e94b1e9eacbf036c1ea9154->enter($__internal_6179492be3e66bfc97892610cdc6083d51ef22ce9e94b1e9eacbf036c1ea9154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6179492be3e66bfc97892610cdc6083d51ef22ce9e94b1e9eacbf036c1ea9154->leave($__internal_6179492be3e66bfc97892610cdc6083d51ef22ce9e94b1e9eacbf036c1ea9154_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4be310b1bef50e968415e87c6151d361abd1f6e5c064f76696717388a5792381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be310b1bef50e968415e87c6151d361abd1f6e5c064f76696717388a5792381->enter($__internal_4be310b1bef50e968415e87c6151d361abd1f6e5c064f76696717388a5792381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? null), "controller", array()));
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute(($context["collector"] ?? null), "redirect", array())) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "controller", array()), $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "route", array()), ((("GET" != $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "method", array()))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "method", array())) : ("")));
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            ";
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "forward", array()), "controller", array()));
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute(($context["collector"] ?? null), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? null), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", array()), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ($this->getAttribute(($context["collector"] ?? null), "route", array())) {
            // line 26
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? null), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 27
            echo "            ";
            if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["collector"] ?? null), "method", array()))) ? ($this->getAttribute(($context["collector"] ?? null), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "route", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statustext", array()), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 40
        if (("GET" != $this->getAttribute(($context["collector"] ?? null), "method", array()))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 53
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 58
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 70
        if (array_key_exists("redirect_handler", $context)) {
            // line 71
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 78
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 85
        if (array_key_exists("forward_handler", $context)) {
            // line 86
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 90
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "forward", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "forward", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 96
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 97
        echo "
    ";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null)));
        echo "
";
        
        $__internal_4be310b1bef50e968415e87c6151d361abd1f6e5c064f76696717388a5792381->leave($__internal_4be310b1bef50e968415e87c6151d361abd1f6e5c064f76696717388a5792381_prof);

    }

    // line 101
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c8fb75644f187327e13fb00cfc72dfcdba88b6aafd264a4ce3424ec4b40fc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8fb75644f187327e13fb00cfc72dfcdba88b6aafd264a4ce3424ec4b40fc80->enter($__internal_3c8fb75644f187327e13fb00cfc72dfcdba88b6aafd264a4ce3424ec4b40fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 102
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 103
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_3c8fb75644f187327e13fb00cfc72dfcdba88b6aafd264a4ce3424ec4b40fc80->leave($__internal_3c8fb75644f187327e13fb00cfc72dfcdba88b6aafd264a4ce3424ec4b40fc80_prof);

    }

    // line 108
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb1acad7eeb7858d0775d81cf7e46aaf2df3c016fe45a92048dea27090d7370a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1acad7eeb7858d0775d81cf7e46aaf2df3c016fe45a92048dea27090d7370a->enter($__internal_bb1acad7eeb7858d0775d81cf7e46aaf2df3c016fe45a92048dea27090d7370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 109
        echo "    ";
        $context["helper"] = $this;
        // line 110
        echo "
    <h2>
        ";
        // line 112
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? null), "controller", array()));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 122
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestquery", array()), "all", array()))) {
            // line 123
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 127
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestquery", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 129
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 132
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestrequest", array()), "all", array()))) {
            // line 133
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 137
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestrequest", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 139
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 142
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestattributes", array()), "all", array()))) {
            // line 143
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 147
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestattributes", array())), false);
            echo "
                ";
        }
        // line 149
        echo "
                <h3>Request Headers</h3>
                ";
        // line 151
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 155
        if (($this->getAttribute(($context["collector"] ?? null), "content", array()) == false)) {
            // line 156
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ($this->getAttribute(        // line 159
($context["collector"] ?? null), "content", array())) {
            // line 160
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "content", array()), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 164
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 168
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 170
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 180
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 184
        echo (((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestcookies", array()), "all", array())) && twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "responsecookies", array()), "all", array())))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 190
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestcookies", array()), "all", array()))) {
            // line 191
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 195
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestcookies", array())), false);
            echo "
                ";
        }
        // line 197
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 200
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "responsecookies", array()), "all", array()))) {
            // line 201
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 205
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "responsecookies", array())), true);
            echo "
                ";
        }
        // line 207
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 210
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 216
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) {
            // line 217
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 221
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array())), false);
            echo "
                ";
        }
        // line 223
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 226
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionattributes", array()))) {
            // line 227
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 231
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
            echo "
                ";
        }
        // line 233
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 236
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 242
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", array()))) {
            // line 243
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 247
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "flashes", array())), false);
            echo "
                ";
        }
        // line 249
        echo "            </div>
        </div>

        ";
        // line 252
        if ($this->getAttribute(($context["profile"] ?? null), "parent", array())) {
            // line 253
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 262
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>
        ";
        }
        // line 266
        echo "
        ";
        // line 267
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array()))) {
            // line 268
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 269
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 273
                echo "                    <h3>
                        <a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">
                            ";
                // line 275
                echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "controller", array()));
                echo "
                        </a>
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
";
        
        $__internal_bb1acad7eeb7858d0775d81cf7e46aaf2df3c016fe45a92048dea27090d7370a->leave($__internal_bb1acad7eeb7858d0775d81cf7e46aaf2df3c016fe45a92048dea27090d7370a_prof);

    }

    // line 288
    public function getset_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e921aad9bdd7798cbe225672bbad7f75dab46be61cd29195c167f4e00712d334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e921aad9bdd7798cbe225672bbad7f75dab46be61cd29195c167f4e00712d334->enter($__internal_e921aad9bdd7798cbe225672bbad7f75dab46be61cd29195c167f4e00712d334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            echo "    ";
            if ($this->getAttribute(($context["controller"] ?? null), "class", array(), "any", true, true)) {
                // line 290
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? null), "file", array()), $this->getAttribute(($context["controller"] ?? null), "line", array()));
                // line 292
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? null), "file", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span>";
                }
                // line 294
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? null), "class", array()))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? null), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? null), "method", array()))) : ("")), "html", null, true);
                }
                // line 301
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_e921aad9bdd7798cbe225672bbad7f75dab46be61cd29195c167f4e00712d334->leave($__internal_e921aad9bdd7798cbe225672bbad7f75dab46be61cd29195c167f4e00712d334_prof);

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
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 303,  686 => 301,  683 => 298,  681 => 297,  677 => 295,  675 => 294,  665 => 292,  663 => 291,  657 => 290,  654 => 289,  637 => 288,  629 => 285,  624 => 282,  616 => 280,  608 => 277,  603 => 275,  599 => 274,  596 => 273,  592 => 272,  586 => 269,  583 => 268,  581 => 267,  578 => 266,  571 => 262,  565 => 259,  561 => 258,  554 => 253,  552 => 252,  547 => 249,  541 => 247,  535 => 243,  533 => 242,  524 => 236,  519 => 233,  513 => 231,  507 => 227,  505 => 226,  500 => 223,  494 => 221,  488 => 217,  486 => 216,  477 => 210,  472 => 207,  466 => 205,  460 => 201,  458 => 200,  453 => 197,  447 => 195,  441 => 191,  439 => 190,  430 => 184,  423 => 180,  410 => 170,  406 => 168,  400 => 164,  394 => 161,  391 => 160,  389 => 159,  384 => 156,  382 => 155,  375 => 151,  371 => 149,  365 => 147,  359 => 143,  357 => 142,  352 => 139,  346 => 137,  340 => 133,  338 => 132,  333 => 129,  327 => 127,  321 => 123,  319 => 122,  306 => 112,  302 => 110,  299 => 109,  293 => 108,  282 => 103,  279 => 102,  273 => 101,  264 => 98,  261 => 97,  258 => 96,  248 => 91,  244 => 90,  238 => 86,  236 => 85,  233 => 84,  223 => 79,  219 => 78,  212 => 74,  207 => 71,  205 => 70,  194 => 66,  186 => 61,  181 => 58,  176 => 55,  172 => 53,  170 => 52,  164 => 49,  159 => 46,  154 => 43,  150 => 41,  148 => 40,  140 => 37,  135 => 34,  133 => 33,  130 => 32,  127 => 31,  122 => 29,  117 => 28,  112 => 27,  107 => 26,  105 => 25,  98 => 24,  96 => 23,  93 => 22,  91 => 21,  88 => 20,  85 => 19,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/request.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}
