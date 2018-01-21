<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_e21823e6503e9b0095139a2d69405a0cfdb68e6b4db544095c5e76b8547273e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f44aa48cd7b0b6d0042fd3b18482ade8489c729409ec42cdb208c354441d63b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44aa48cd7b0b6d0042fd3b18482ade8489c729409ec42cdb208c354441d63b5->enter($__internal_f44aa48cd7b0b6d0042fd3b18482ade8489c729409ec42cdb208c354441d63b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        // line 3
        $context["__internal_6248f9bb1471cbf437705f274ed46fd1e3dfccb49c4eadff40027cef236fe398"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44aa48cd7b0b6d0042fd3b18482ade8489c729409ec42cdb208c354441d63b5->leave($__internal_f44aa48cd7b0b6d0042fd3b18482ade8489c729409ec42cdb208c354441d63b5_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f168a0862c7e8d77e49badd9e102e0a1ecc28fa855debae63365148a62ab83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f168a0862c7e8d77e49badd9e102e0a1ecc28fa855debae63365148a62ab83f->enter($__internal_0f168a0862c7e8d77e49badd9e102e0a1ecc28fa855debae63365148a62ab83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) : (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_0f168a0862c7e8d77e49badd9e102e0a1ecc28fa855debae63365148a62ab83f->leave($__internal_0f168a0862c7e8d77e49badd9e102e0a1ecc28fa855debae63365148a62ab83f_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        $__internal_652aaf57bf4a02ef1d4e589fb4f52c647fef674b2eee665bdfde0c46d60df5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652aaf57bf4a02ef1d4e589fb4f52c647fef674b2eee665bdfde0c46d60df5ee->enter($__internal_652aaf57bf4a02ef1d4e589fb4f52c647fef674b2eee665bdfde0c46d60df5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 31
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
        
        $__internal_652aaf57bf4a02ef1d4e589fb4f52c647fef674b2eee665bdfde0c46d60df5ee->leave($__internal_652aaf57bf4a02ef1d4e589fb4f52c647fef674b2eee665bdfde0c46d60df5ee_prof);

    }

    // line 42
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f2d77b2e395da0511508f0c19c69f281f69b1aebd972db320ee73b6ea8fd4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2d77b2e395da0511508f0c19c69f281f69b1aebd972db320ee73b6ea8fd4d0->enter($__internal_0f2d77b2e395da0511508f0c19c69f281f69b1aebd972db320ee73b6ea8fd4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 230px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid #DDD;
            margin-left: 250px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;

        }
        .tree .toggle-button {
            /* provide a bigger clickable area than just 10x10px */
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 10px;
            height: 10px;
            /* position the icon in the center of the clickable area */
            margin-left: 3px;
            margin-top: 3px;
            background-size: 10px 20px;
            background-color: #AAA;
        }
        .tree .toggle-icon.empty {
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            margin-top: -5px;
            margin-left: -15px;
            background-size: 10px 10px;
        }
        .tree ul ul .tree-inner {
            padding-left: 37px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 52px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 67px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 82px;
        }
        .tree .tree-inner:hover {
            background: #dfdfdf;
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: #E0E0E0;
            font-weight: bold;
        }
        .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
            background-color: #999;
        }
        .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: #B0413E;
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: #B0413E;
        }
        .errors h3 {
            color: #B0413E;
        }
        .errors th {
            background: #B0413E;
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: #B0413E;
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_0f2d77b2e395da0511508f0c19c69f281f69b1aebd972db320ee73b6ea8fd4d0->leave($__internal_0f2d77b2e395da0511508f0c19c69f281f69b1aebd972db320ee73b6ea8fd4d0_prof);

    }

    // line 183
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6eb744e0ceecf381dde4cf2e1de2c62a09a7140ecee4bcedc7faba81e7f98cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eb744e0ceecf381dde4cf2e1de2c62a09a7140ecee4bcedc7faba81e7f98cc->enter($__internal_c6eb744e0ceecf381dde4cf2e1de2c62a09a7140ecee4bcedc7faba81e7f98cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 184
        echo "    <h2>Forms</h2>

    ";
        // line 186
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) {
            // line 187
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 190
                echo "                ";
                echo $context["__internal_6248f9bb1471cbf437705f274ed46fd1e3dfccb49c4eadff40027cef236fe398"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 197
                echo "                ";
                echo $context["__internal_6248f9bb1471cbf437705f274ed46fd1e3dfccb49c4eadff40027cef236fe398"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms_by_hash", array()), $this->getAttribute($context["loop"], "first", array()));
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "        </div>
    ";
        } else {
            // line 201
            echo "        <div class=\"empty\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 205
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
        
        $__internal_c6eb744e0ceecf381dde4cf2e1de2c62a09a7140ecee4bcedc7faba81e7f98cc->leave($__internal_c6eb744e0ceecf381dde4cf2e1de2c62a09a7140ecee4bcedc7faba81e7f98cc_prof);

    }

    // line 425
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_643041e51a47a927797e367c67e3ef42e1e7deecec28eb1c520b4565f1901b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_643041e51a47a927797e367c67e3ef42e1e7deecec28eb1c520b4565f1901b10->enter($__internal_643041e51a47a927797e367c67e3ef42e1e7deecec28eb1c520b4565f1901b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 426
            echo "    ";
            $context["tree"] = $this;
            // line 427
            echo "    ";
            $context["has_error"] = ($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0));
            // line 428
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 430
            if (($context["has_error"] ?? null)) {
                // line 431
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 433
            echo "
            ";
            // line 434
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 435
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 437
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 439
            echo "
            <span ";
            // line 440
            if ((($context["has_error"] ?? null) || (($this->getAttribute(($context["data"] ?? null), "has_children_error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "has_children_error", array()), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 441
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 445
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 446
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !(($this->getAttribute(($context["data"] ?? null), "has_children_error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "has_children_error", array()), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 447
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 448
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 450
                echo "            </ul>
        ";
            }
            // line 452
            echo "    </li>
";
            
            $__internal_643041e51a47a927797e367c67e3ef42e1e7deecec28eb1c520b4565f1901b10->leave($__internal_643041e51a47a927797e367c67e3ef42e1e7deecec28eb1c520b4565f1901b10_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 455
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_168a6f7a268c866fe5b0a606eb32c191dea86f4d9513c408041055ac6b44a3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_168a6f7a268c866fe5b0a606eb32c191dea86f4d9513c408041055ac6b44a3dc->enter($__internal_168a6f7a268c866fe5b0a606eb32c191dea86f4d9513c408041055ac6b44a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 456
            echo "    ";
            $context["tree"] = $this;
            // line 457
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter(($context["show"] ?? null), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if ($this->getAttribute(($context["data"] ?? null), "id", array(), "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2 class=\"dump-inline\">
            ";
            // line 459
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if ($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true)) {
                echo "(";
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array())));
                echo ")";
            }
            // line 460
            echo "        </h2>

        ";
            // line 462
            if (($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0))) {
                // line 463
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 470
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Origin</th>
                        <th>Cause</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 479
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 480
                    echo "                <tr>
                    <td>";
                    // line 481
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 483
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 484
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 485
($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 486
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 488
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 490
                    echo "                    </td>
                    <td>
                        ";
                    // line 492
                    if ($this->getAttribute($context["error"], "trace", array())) {
                        // line 493
                        echo "                            <span class=\"newline\">Caused by:</span>
                            ";
                        // line 494
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 495
                            echo "                                ";
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["stacked"]));
                            echo "
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 497
                        echo "                        ";
                    } else {
                        // line 498
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    // line 500
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 503
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 507
            echo "
        ";
            // line 508
            if ($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", true, true)) {
                // line 509
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 510
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 515
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                // line 527
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 528
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "seek", array(0 => "model"), "method")));
                    echo "
                            ";
                } else {
                    // line 530
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 532
                echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                // line 536
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "seek", array(0 => "norm"), "method")));
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                // line 541
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 542
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "seek", array(0 => "view"), "method")));
                    echo "
                            ";
                } else {
                    // line 544
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 546
                echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
            }
            // line 552
            echo "
        ";
            // line 553
            if ($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", true, true)) {
                // line 554
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 555
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 560
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 561
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 562
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                    // line 573
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 574
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "seek", array(0 => "view"), "method")));
                        echo "
                            ";
                    } else {
                        // line 576
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 578
                    echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                    // line 582
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "seek", array(0 => "norm"), "method")));
                    echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                    // line 587
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 588
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "seek", array(0 => "model"), "method")));
                        echo "
                            ";
                    } else {
                        // line 590
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 592
                    echo "                        </td>
                    </tr>
                </tbody>
            </table>
        ";
                } else {
                    // line 597
                    echo "            <div class=\"empty\">
                <p>This form was not submitted.</p>
            </div>
        ";
                }
                // line 601
                echo "        </div>
        ";
            }
            // line 603
            echo "
        ";
            // line 604
            if ($this->getAttribute(($context["data"] ?? null), "passed_options", array(), "any", true, true)) {
                // line 605
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 606
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 611
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 612
                if (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "passed_options", array()))) {
                    // line 613
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Passed Value</th>
                        <th>Resolved Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                    // line 622
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 623
                        echo "                <tr>
                    <th>";
                        // line 624
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td>";
                        // line 625
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                        echo "</td>
                    <td>
                        ";
                        // line 628
                        echo "                        ";
                        $context["option_value"] = (($this->getAttribute($context["value"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], "value", array()), $context["value"])) : ($context["value"]));
                        // line 629
                        echo "                        ";
                        $context["resolved_option_value"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array(), "any", false, true), $context["option"], array(), "array", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array(), "any", false, true), $context["option"], array(), "array", false, true), "value", array()), $this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array"))) : ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array")));
                        // line 630
                        echo "                        ";
                        if ((($context["resolved_option_value"] ?? null) == ($context["option_value"] ?? null))) {
                            // line 631
                            echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                        } else {
                            // line 633
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), "seek", array(0 => $context["option"]), "method")));
                            echo "
                        ";
                        }
                        // line 635
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 638
                    echo "                </tbody>
            </table>
            ";
                } else {
                    // line 641
                    echo "                <div class=\"empty\">
                    <p>No options where passed when constructing this form.</p>
                </div>
            ";
                }
                // line 645
                echo "        </div>
        ";
            }
            // line 647
            echo "
        ";
            // line 648
            if ($this->getAttribute(($context["data"] ?? null), "resolved_options", array(), "any", true, true)) {
                // line 649
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 650
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 655
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 664
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 665
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 666
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 667
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 674
            echo "
        ";
            // line 675
            if ($this->getAttribute(($context["data"] ?? null), "view_vars", array(), "any", true, true)) {
                // line 676
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 677
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 682
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Variable</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 691
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 692
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 693
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 694
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 697
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 701
            echo "    </div>

    ";
            // line 703
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 704
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_168a6f7a268c866fe5b0a606eb32c191dea86f4d9513c408041055ac6b44a3dc->leave($__internal_168a6f7a268c866fe5b0a606eb32c191dea86f4d9513c408041055ac6b44a3dc_prof);

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
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1233 => 704,  1229 => 703,  1225 => 701,  1219 => 697,  1210 => 694,  1206 => 693,  1203 => 692,  1199 => 691,  1187 => 682,  1179 => 677,  1176 => 676,  1174 => 675,  1171 => 674,  1165 => 670,  1156 => 667,  1152 => 666,  1149 => 665,  1145 => 664,  1133 => 655,  1125 => 650,  1122 => 649,  1120 => 648,  1117 => 647,  1113 => 645,  1107 => 641,  1102 => 638,  1094 => 635,  1088 => 633,  1084 => 631,  1081 => 630,  1078 => 629,  1075 => 628,  1070 => 625,  1066 => 624,  1063 => 623,  1059 => 622,  1048 => 613,  1046 => 612,  1042 => 611,  1034 => 606,  1031 => 605,  1029 => 604,  1026 => 603,  1022 => 601,  1016 => 597,  1009 => 592,  1005 => 590,  999 => 588,  997 => 587,  989 => 582,  983 => 578,  979 => 576,  973 => 574,  971 => 573,  958 => 562,  956 => 561,  952 => 560,  944 => 555,  941 => 554,  939 => 553,  936 => 552,  928 => 546,  924 => 544,  918 => 542,  916 => 541,  908 => 536,  902 => 532,  898 => 530,  892 => 528,  890 => 527,  875 => 515,  867 => 510,  864 => 509,  862 => 508,  859 => 507,  853 => 503,  845 => 500,  841 => 498,  838 => 497,  829 => 495,  825 => 494,  822 => 493,  820 => 492,  816 => 490,  810 => 488,  806 => 486,  804 => 485,  801 => 484,  799 => 483,  794 => 481,  791 => 480,  787 => 479,  775 => 470,  767 => 465,  763 => 463,  761 => 462,  757 => 460,  749 => 459,  735 => 457,  732 => 456,  714 => 455,  695 => 452,  691 => 450,  682 => 448,  678 => 447,  669 => 446,  667 => 445,  660 => 441,  654 => 440,  651 => 439,  647 => 437,  641 => 435,  639 => 434,  636 => 433,  630 => 431,  628 => 430,  624 => 429,  621 => 428,  618 => 427,  615 => 426,  598 => 425,  373 => 205,  367 => 201,  363 => 199,  346 => 197,  329 => 196,  323 => 192,  314 => 190,  310 => 189,  306 => 187,  304 => 186,  300 => 184,  294 => 183,  147 => 43,  141 => 42,  133 => 39,  127 => 36,  124 => 35,  122 => 34,  117 => 32,  110 => 31,  104 => 30,  94 => 26,  91 => 25,  83 => 22,  76 => 18,  72 => 16,  70 => 15,  67 => 14,  61 => 11,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/form.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/form.html.twig");
    }
}
