<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_a499ac83e597583ff9aca763444ca1026288dd475f3aac356d4d2d761a2bd355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f39f64b1c46900c84199caa33fe51561b44f699658bc7fc8736a4a352619dee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39f64b1c46900c84199caa33fe51561b44f699658bc7fc8736a4a352619dee2->enter($__internal_f39f64b1c46900c84199caa33fe51561b44f699658bc7fc8736a4a352619dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39f64b1c46900c84199caa33fe51561b44f699658bc7fc8736a4a352619dee2->leave($__internal_f39f64b1c46900c84199caa33fe51561b44f699658bc7fc8736a4a352619dee2_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72279fc04d3da1284d7f9dd82636b3289d202c75596e303d66b29d391d39c318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72279fc04d3da1284d7f9dd82636b3289d202c75596e303d66b29d391d39c318->enter($__internal_72279fc04d3da1284d7f9dd82636b3289d202c75596e303d66b29d391d39c318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "events", array())) > 0);
        // line 20
        echo "
    ";
        // line 21
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? null), "duration", array()))) : ("n/a"));
        // line 22
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "events", array()))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? null), "inittime", array()))) : ("n/a"));
        // line 23
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && ($this->getAttribute(($context["collector"] ?? null), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 24
        echo "
    ";
        // line 25
        ob_start();
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 34
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 38
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
    ";
        // line 42
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
        echo "
";
        
        $__internal_72279fc04d3da1284d7f9dd82636b3289d202c75596e303d66b29d391d39c318->leave($__internal_72279fc04d3da1284d7f9dd82636b3289d202c75596e303d66b29d391d39c318_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d8d4f18f0a4b0886248f8bdbc01a9f6ffdb94a2442e2f03675c383ba0eea62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8d4f18f0a4b0886248f8bdbc01a9f6ffdb94a2442e2f03675c383ba0eea62a->enter($__internal_6d8d4f18f0a4b0886248f8bdbc01a9f6ffdb94a2442e2f03675c383ba0eea62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_6d8d4f18f0a4b0886248f8bdbc01a9f6ffdb94a2442e2f03675c383ba0eea62a->leave($__internal_6d8d4f18f0a4b0886248f8bdbc01a9f6ffdb94a2442e2f03675c383ba0eea62a_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f367619adece5f6de0069815f23fcf71afb5688e889c304bf2b8721cdf42d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f367619adece5f6de0069815f23fcf71afb5688e889c304bf2b8721cdf42d3b->enter($__internal_2f367619adece5f6de0069815f23fcf71afb5688e889c304bf2b8721cdf42d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "events", array())) > 0);
        // line 54
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 58
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? null), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 63
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? null), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array()), "memory", array())) {
            // line 68
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        if ((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())) > 0)) {
            // line 75
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 79
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 82
            if (($context["has_time_events"] ?? null)) {
                // line 83
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 84
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 85
                    echo "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? null) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                    // line 86
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "            ";
            } else {
                // line 88
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 89
                echo "            ";
            }
            // line 90
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 92
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? null), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 93
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 96
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 100
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "events", array()))) {
            // line 101
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 105
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_2f367619adece5f6de0069815f23fcf71afb5688e889c304bf2b8721cdf42d3b->leave($__internal_2f367619adece5f6de0069815f23fcf71afb5688e889c304bf2b8721cdf42d3b_prof);

    }

    // line 109
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_3eac83a18281298e979236ac2b9c727925c589f4ffdc8093f7327a0374525b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eac83a18281298e979236ac2b9c727925c589f4ffdc8093f7327a0374525b65->enter($__internal_3eac83a18281298e979236ac2b9c727925c589f4ffdc8093f7327a0374525b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 110
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 117
        if ($this->getAttribute(($context["profile"] ?? null), "parent", array())) {
            // line 118
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 119
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method")));
            echo "
            <small>
                ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 125
($context["profile"] ?? null), "children", array())) > 0)) {
            // line 126
            echo "        <h3>
            Main Request <small>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        echo $context["helper"]->getdisplay_timeline(("timeline_" . ($context["token"] ?? null)), $this->getAttribute(($context["collector"] ?? null), "events", array()), ($context["colors"] ?? null));
        echo "

    ";
        // line 133
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array()))) {
            // line 134
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 136
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 140
                echo "            <h4>
                <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["events"] ?? null), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 145
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), ($context["events"] ?? null), ($context["colors"] ?? null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "    ";
        }
        // line 148
        echo "
    <script>";
        // line 149
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 191
        echo twig_jsonencode_filter(($context["colors"] ?? null));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 464
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 466
        echo $context["helper"]->getdump_request_data(($context["token"] ?? null), ($context["profile"] ?? null), $this->getAttribute(($context["collector"] ?? null), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 468
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array()))) {
            // line 469
            echo "                ,
";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 471
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 474
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 506
        echo "</script>
";
        
        $__internal_3eac83a18281298e979236ac2b9c727925c589f4ffdc8093f7327a0374525b65->leave($__internal_3eac83a18281298e979236ac2b9c727925c589f4ffdc8093f7327a0374525b65_prof);

    }

    // line 509
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_54bb98d429b355e5fa5d7ce87baabd9da526ada32b0c45edd3b99dfdc75e2306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_54bb98d429b355e5fa5d7ce87baabd9da526ada32b0c45edd3b99dfdc75e2306->enter($__internal_54bb98d429b355e5fa5d7ce87baabd9da526ada32b0c45edd3b99dfdc75e2306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 511
            $context["__internal_35fc70af1d0bbcd9ba9f23e9a15aef6050cf223717f90290159529e70e2f3fb4"] = $this;
            // line 512
            echo "                {
                    \"id\": \"";
            // line 513
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 514
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute(($context["events"] ?? null), "__section__", array()), "origin", array()) - ($context["origin"] ?? null))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 516
            echo $context["__internal_35fc70af1d0bbcd9ba9f23e9a15aef6050cf223717f90290159529e70e2f3fb4"]->getdump_events(($context["events"] ?? null));
            echo "
                    ]
                }
";
            
            $__internal_54bb98d429b355e5fa5d7ce87baabd9da526ada32b0c45edd3b99dfdc75e2306->leave($__internal_54bb98d429b355e5fa5d7ce87baabd9da526ada32b0c45edd3b99dfdc75e2306_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 522
    public function getdump_events($__events__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_048160657a493b38396b08c06896ef51d14053b922b4dc19c7f2b4a3e0161ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_048160657a493b38396b08c06896ef51d14053b922b4dc19c7f2b4a3e0161ade->enter($__internal_048160657a493b38396b08c06896ef51d14053b922b4dc19c7f2b4a3e0161ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 524
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
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
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 525
                if (("__section__" != $context["name"])) {
                    // line 526
                    echo "                        {
                            \"name\": \"";
                    // line 527
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 528
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 529
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 530
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 531
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 532
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 533
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 535
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 536
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 538
                    echo "]
                        }";
                    // line 539
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_048160657a493b38396b08c06896ef51d14053b922b4dc19c7f2b4a3e0161ade->leave($__internal_048160657a493b38396b08c06896ef51d14053b922b4dc19c7f2b4a3e0161ade_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 545
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_230a2b0932898fd16572f8d24451aeb771faebffc4182cede99fb342af5a3f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_230a2b0932898fd16572f8d24451aeb771faebffc4182cede99fb342af5a3f66->enter($__internal_230a2b0932898fd16572f8d24451aeb771faebffc4182cede99fb342af5a3f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 546
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 549
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 552
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
            $__internal_230a2b0932898fd16572f8d24451aeb771faebffc4182cede99fb342af5a3f66->leave($__internal_230a2b0932898fd16572f8d24451aeb771faebffc4182cede99fb342af5a3f66_prof);

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
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1007 => 552,  1004 => 551,  993 => 549,  989 => 548,  985 => 546,  968 => 545,  935 => 539,  932 => 538,  913 => 536,  896 => 535,  892 => 533,  888 => 532,  884 => 531,  880 => 530,  876 => 529,  872 => 528,  868 => 527,  865 => 526,  863 => 525,  846 => 524,  831 => 522,  809 => 516,  804 => 514,  800 => 513,  797 => 512,  795 => 511,  777 => 509,  769 => 506,  735 => 474,  717 => 471,  700 => 470,  697 => 469,  695 => 468,  690 => 466,  685 => 464,  409 => 191,  365 => 149,  362 => 148,  359 => 147,  351 => 145,  345 => 142,  339 => 141,  336 => 140,  333 => 139,  329 => 138,  324 => 136,  320 => 134,  318 => 133,  313 => 131,  310 => 130,  304 => 127,  301 => 126,  299 => 125,  293 => 122,  289 => 121,  284 => 119,  281 => 118,  279 => 117,  270 => 110,  264 => 109,  253 => 105,  247 => 101,  245 => 100,  239 => 96,  233 => 93,  229 => 92,  225 => 90,  222 => 89,  219 => 88,  216 => 87,  210 => 86,  207 => 85,  202 => 84,  199 => 83,  197 => 82,  191 => 79,  187 => 78,  182 => 75,  180 => 74,  177 => 73,  170 => 69,  167 => 68,  165 => 67,  158 => 63,  150 => 58,  144 => 54,  141 => 53,  135 => 52,  124 => 47,  121 => 46,  115 => 45,  106 => 42,  103 => 41,  97 => 38,  90 => 34,  86 => 32,  84 => 31,  81 => 30,  75 => 27,  70 => 26,  68 => 25,  65 => 24,  62 => 23,  59 => 22,  57 => 21,  54 => 20,  51 => 19,  45 => 18,  38 => 1,  35 => 6,  33 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/time.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/time.html.twig");
    }
}
