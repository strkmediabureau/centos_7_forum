<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_64a1fc2b82eb4b28f12cf4b9c44a47424fd88f58962bddd7d340e99bf0e35e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_4afa479ec0aac0cb0ffa51bfbcc873ef5b3d60b4b9f254e513b33d88ead19b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afa479ec0aac0cb0ffa51bfbcc873ef5b3d60b4b9f254e513b33d88ead19b78->enter($__internal_4afa479ec0aac0cb0ffa51bfbcc873ef5b3d60b4b9f254e513b33d88ead19b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4afa479ec0aac0cb0ffa51bfbcc873ef5b3d60b4b9f254e513b33d88ead19b78->leave($__internal_4afa479ec0aac0cb0ffa51bfbcc873ef5b3d60b4b9f254e513b33d88ead19b78_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b98193afb58b3023150db4436714928fcd7e8ca95043ea00444a4d6181b85718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98193afb58b3023150db4436714928fcd7e8ca95043ea00444a4d6181b85718->enter($__internal_b98193afb58b3023150db4436714928fcd7e8ca95043ea00444a4d6181b85718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_b98193afb58b3023150db4436714928fcd7e8ca95043ea00444a4d6181b85718->leave($__internal_b98193afb58b3023150db4436714928fcd7e8ca95043ea00444a4d6181b85718_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81843125597a39fbd192a6567bf7e8dfa8b300f45d7e12d5129387ff6a618ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81843125597a39fbd192a6567bf7e8dfa8b300f45d7e12d5129387ff6a618ed5->enter($__internal_81843125597a39fbd192a6567bf7e8dfa8b300f45d7e12d5129387ff6a618ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute(($context["collector"] ?? null), "enabled", array()) && $this->getAttribute(($context["collector"] ?? null), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = ((($context["is_authenticated"] ?? null)) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute(($context["collector"] ?? null), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute(($context["collector"] ?? null), "impersonated", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "impersonatorUser", array()), "html", null, true);
            echo "</span>
                </div>
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"sf-toolbar-info-group\">
            ";
        // line 29
        if ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
            // line 30
            echo "                ";
            if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                // line 31
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "user", array()), "html", null, true);
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 38
                echo ((($context["is_authenticated"] ?? null)) ? ("green") : ("red"));
                echo "\">";
                echo ((($context["is_authenticated"] ?? null)) ? ("Yes") : ("No"));
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["collector"] ?? null), "tokenClass", array()));
                echo "</span>
                    </div>
                ";
            } else {
                // line 46
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                ";
            }
            // line 51
            echo "
                ";
            // line 52
            if ($this->getAttribute(($context["collector"] ?? null), "firewall", array())) {
                // line 53
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            if (($this->getAttribute(($context["collector"] ?? null), "token", array()) && $this->getAttribute(($context["collector"] ?? null), "logoutUrl", array()))) {
                // line 60
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a>
                            ";
                // line 64
                if (($this->getAttribute(($context["collector"] ?? null), "impersonated", array()) && $this->getAttribute(($context["collector"] ?? null), "impersonationExitPath", array()))) {
                    // line 65
                    echo "                                | <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "impersonationExitPath", array()), "html", null, true);
                    echo "\">Exit impersonation</a>
                            ";
                }
                // line 67
                echo "                        </span>
                    </div>
                ";
            }
            // line 70
            echo "            ";
        } else {
            // line 71
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            ";
        }
        // line 75
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
    ";
        // line 78
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["color_code"] ?? null)));
        echo "
";
        
        $__internal_81843125597a39fbd192a6567bf7e8dfa8b300f45d7e12d5129387ff6a618ed5->leave($__internal_81843125597a39fbd192a6567bf7e8dfa8b300f45d7e12d5129387ff6a618ed5_prof);

    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b169ff1ecdb6753ccf62ab99c58e1a080e93924da953ad450382e1e6b641363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b169ff1ecdb6753ccf62ab99c58e1a080e93924da953ad450382e1e6b641363->enter($__internal_2b169ff1ecdb6753ccf62ab99c58e1a080e93924da953ad450382e1e6b641363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute(($context["collector"] ?? null), "enabled", array()) ||  !$this->getAttribute(($context["collector"] ?? null), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 83
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_2b169ff1ecdb6753ccf62ab99c58e1a080e93924da953ad450382e1e6b641363->leave($__internal_2b169ff1ecdb6753ccf62ab99c58e1a080e93924da953ad450382e1e6b641363_prof);

    }

    // line 88
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f258e057e7303c03ad0108b6b2d4ff69fb2e075545917be194989a0911f3ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f258e057e7303c03ad0108b6b2d4ff69fb2e075545917be194989a0911f3ff1->enter($__internal_9f258e057e7303c03ad0108b6b2d4ff69fb2e075545917be194989a0911f3ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 89
        echo "    <h2>Security Token</h2>

    ";
        // line 91
        if ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
            // line 92
            echo "        ";
            if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                // line 93
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 95
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? null), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute(($context["collector"] ?? null), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 100
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 116
                echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "roles", array()), 1))));
                echo "

                            ";
                // line 118
                if (( !$this->getAttribute(($context["collector"] ?? null), "authenticated", array()) && twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", array())))) {
                    // line 119
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 121
                echo "                        </td>
                    </tr>

                    ";
                // line 124
                if ($this->getAttribute(($context["collector"] ?? null), "supportsRoleHierarchy", array())) {
                    // line 125
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 127
                    echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 130
                echo "
                    ";
                // line 131
                if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                    // line 132
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 134
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "token", array())));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 137
                echo "                </tbody>
            </table>
        ";
            } elseif ($this->getAttribute(            // line 139
($context["collector"] ?? null), "enabled", array())) {
                // line 140
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 144
            echo "

        <h2>Security Firewall</h2>

        ";
            // line 148
            if ($this->getAttribute(($context["collector"] ?? null), "firewall", array())) {
                // line 149
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 155
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 159
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 163
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 168
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "security_enabled", array())) {
                    // line 169
                    echo "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 181
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "provider", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 185
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "context", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 189
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "entry_point", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "user_checker", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 197
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_handler", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 201
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_url", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 205
                    echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                ";
                    // line 212
                    if (twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "listeners", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "listeners", array()), array())) : (array())))) {
                        // line 213
                        echo "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                ";
                    } else {
                        // line 217
                        echo "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        ";
                        // line 226
                        $context["previous_event"] = twig_first($this->env, $this->getAttribute(($context["collector"] ?? null), "listeners", array()));
                        // line 227
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "listeners", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 228
                            echo "                            ";
                            if (($this->getAttribute($context["loop"], "first", array()) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                                // line 229
                                echo "                                ";
                                if ( !$this->getAttribute($context["loop"], "first", array())) {
                                    // line 230
                                    echo "                                    </tbody>
                                ";
                                }
                                // line 232
                                echo "
                                <tbody>
                                ";
                                // line 234
                                $context["previous_event"] = $context["listener"];
                                // line 235
                                echo "                            ";
                            }
                            // line 236
                            echo "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 238
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                            echo "</td>
                                <td class=\"no-wrap\">";
                            // line 239
                            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["listener"], "time", array()) * 1000)), "html", null, true);
                            echo " ms</td>
                                <td class=\"font-normal\">";
                            // line 240
                            echo (($this->getAttribute($context["listener"], "response", array())) ? (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "response", array())))) : ("(none)"));
                            echo "</td>
                            </tr>

                            ";
                            // line 243
                            if ($this->getAttribute($context["loop"], "last", array())) {
                                // line 244
                                echo "                                </tbody>
                            ";
                            }
                            // line 246
                            echo "                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        echo "                    </table>
                ";
                    }
                    // line 249
                    echo "            ";
                }
                // line 250
                echo "        ";
            } elseif ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
                // line 251
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 255
            echo "    ";
        } else {
            // line 256
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 260
        echo "
    ";
        // line 261
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 262
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 266
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "voters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 281
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 283
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["voter"]));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "            </tbody>
        </table>
    ";
        }
        // line 289
        echo "
    ";
        // line 290
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 291
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 310
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 313
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 316
                echo "
                        </td>
                        <td>
                            ";
                // line 319
                if ((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) {
                    // line 320
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 322
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "attributes", array())));
                    echo "
                            ";
                }
                // line 324
                echo "                        </td>
                        <td>";
                // line 325
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "seek", array(0 => "object"), "method")));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_9f258e057e7303c03ad0108b6b2d4ff69fb2e075545917be194989a0911f3ff1->leave($__internal_9f258e057e7303c03ad0108b6b2d4ff69fb2e075545917be194989a0911f3ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 328,  722 => 325,  719 => 324,  713 => 322,  707 => 320,  705 => 319,  700 => 316,  698 => 313,  693 => 311,  690 => 310,  673 => 309,  653 => 291,  651 => 290,  648 => 289,  643 => 286,  626 => 283,  622 => 282,  619 => 281,  602 => 280,  585 => 266,  577 => 262,  575 => 261,  572 => 260,  566 => 256,  563 => 255,  557 => 251,  554 => 250,  551 => 249,  547 => 247,  533 => 246,  529 => 244,  527 => 243,  521 => 240,  517 => 239,  513 => 238,  509 => 236,  506 => 235,  504 => 234,  500 => 232,  496 => 230,  493 => 229,  490 => 228,  472 => 227,  470 => 226,  459 => 217,  453 => 213,  451 => 212,  441 => 205,  434 => 201,  427 => 197,  420 => 193,  413 => 189,  406 => 185,  399 => 181,  385 => 169,  383 => 168,  375 => 163,  368 => 159,  361 => 155,  354 => 151,  350 => 149,  348 => 148,  342 => 144,  336 => 140,  334 => 139,  330 => 137,  324 => 134,  320 => 132,  318 => 131,  315 => 130,  309 => 127,  305 => 125,  303 => 124,  298 => 121,  294 => 119,  292 => 118,  287 => 116,  268 => 100,  260 => 95,  256 => 93,  253 => 92,  251 => 91,  247 => 89,  241 => 88,  230 => 83,  225 => 82,  219 => 81,  210 => 78,  207 => 77,  203 => 75,  197 => 71,  194 => 70,  189 => 67,  183 => 65,  181 => 64,  177 => 63,  172 => 60,  170 => 59,  167 => 58,  161 => 55,  157 => 53,  155 => 52,  152 => 51,  145 => 46,  139 => 43,  129 => 38,  121 => 33,  117 => 31,  114 => 30,  112 => 29,  108 => 27,  101 => 23,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  83 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Security/Collector/security.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views/Collector/security.html.twig");
    }
}
