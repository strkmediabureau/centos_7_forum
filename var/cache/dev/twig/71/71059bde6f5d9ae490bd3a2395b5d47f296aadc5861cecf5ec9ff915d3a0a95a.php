<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_8cc6837210751b5d75f4cd84396c3a334d037aafa76c12d3d590a15bc9705316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_effa3f5bedc5a7b6c595b31f6323a0cec57e63abb51184a16119b40be9d4a082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effa3f5bedc5a7b6c595b31f6323a0cec57e63abb51184a16119b40be9d4a082->enter($__internal_effa3f5bedc5a7b6c595b31f6323a0cec57e63abb51184a16119b40be9d4a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_effa3f5bedc5a7b6c595b31f6323a0cec57e63abb51184a16119b40be9d4a082->leave($__internal_effa3f5bedc5a7b6c595b31f6323a0cec57e63abb51184a16119b40be9d4a082_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab6ebbdf4abcfe7bcb44fcc6c1f1c8083abd8e64d1f678a62e7b54408a29f452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6ebbdf4abcfe7bcb44fcc6c1f1c8083abd8e64d1f678a62e7b54408a29f452->enter($__internal_ab6ebbdf4abcfe7bcb44fcc6c1f1c8083abd8e64d1f678a62e7b54408a29f452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? null), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? null), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null)));
        echo "
";
        
        $__internal_ab6ebbdf4abcfe7bcb44fcc6c1f1c8083abd8e64d1f678a62e7b54408a29f452->leave($__internal_ab6ebbdf4abcfe7bcb44fcc6c1f1c8083abd8e64d1f678a62e7b54408a29f452_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52f3953b23f5ed35b29891ce53ebe5cd662a2623435b7588c574c922696592fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f3953b23f5ed35b29891ce53ebe5cd662a2623435b7588c574c922696592fb->enter($__internal_52f3953b23f5ed35b29891ce53ebe5cd662a2623435b7588c574c922696592fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_52f3953b23f5ed35b29891ce53ebe5cd662a2623435b7588c574c922696592fb->leave($__internal_52f3953b23f5ed35b29891ce53ebe5cd662a2623435b7588c574c922696592fb_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb77e9b46ffe5093571383bfb68caa94a473a61f584d88fd87d51b8f17562464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb77e9b46ffe5093571383bfb68caa94a473a61f584d88fd87d51b8f17562464->enter($__internal_fb77e9b46ffe5093571383bfb68caa94a473a61f584d88fd87d51b8f17562464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? null), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? null), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>";
                // line 88
                $context["file"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array"), false)) : (false));
                // line 89
                $context["link"] = ((($context["file"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(($context["file"] ?? null), 1)) : (false));
                // line 90
                echo "<td>";
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                }
                echo "</td>
                    <td class=\"font-normal\">";
                // line 91
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_fb77e9b46ffe5093571383bfb68caa94a473a61f584d88fd87d51b8f17562464->leave($__internal_fb77e9b46ffe5093571383bfb68caa94a473a61f584d88fd87d51b8f17562464_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 100,  230 => 94,  221 => 91,  206 => 90,  204 => 89,  202 => 88,  200 => 87,  196 => 86,  174 => 67,  166 => 62,  158 => 57,  150 => 52,  144 => 48,  136 => 42,  133 => 41,  127 => 40,  116 => 35,  113 => 34,  107 => 33,  98 => 30,  95 => 29,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/twig.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
