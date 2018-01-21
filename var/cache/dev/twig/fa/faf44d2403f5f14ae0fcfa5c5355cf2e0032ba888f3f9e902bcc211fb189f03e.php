<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_71bd4cd29e61cc3a6403ac53f7aee6593d0032bcd8d46d08b85348e663801705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5b4ed4810402e4cbc49bb1ec09cbfbd0cff381ae02add8d757c6f6d82074bce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4ed4810402e4cbc49bb1ec09cbfbd0cff381ae02add8d757c6f6d82074bce8->enter($__internal_5b4ed4810402e4cbc49bb1ec09cbfbd0cff381ae02add8d757c6f6d82074bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4ed4810402e4cbc49bb1ec09cbfbd0cff381ae02add8d757c6f6d82074bce8->leave($__internal_5b4ed4810402e4cbc49bb1ec09cbfbd0cff381ae02add8d757c6f6d82074bce8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cc48d324905426dc3bb60033a680fa9589df8a4273dacb60b8110d34871d2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc48d324905426dc3bb60033a680fa9589df8a4273dacb60b8110d34871d2ec->enter($__internal_5cc48d324905426dc3bb60033a680fa9589df8a4273dacb60b8110d34871d2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5cc48d324905426dc3bb60033a680fa9589df8a4273dacb60b8110d34871d2ec->leave($__internal_5cc48d324905426dc3bb60033a680fa9589df8a4273dacb60b8110d34871d2ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65b303c00945c68386fc9c6ee2e161cdfb9f3826787f7f2a11fde850b3ea28cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b303c00945c68386fc9c6ee2e161cdfb9f3826787f7f2a11fde850b3ea28cd->enter($__internal_65b303c00945c68386fc9c6ee2e161cdfb9f3826787f7f2a11fde850b3ea28cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_65b303c00945c68386fc9c6ee2e161cdfb9f3826787f7f2a11fde850b3ea28cd->leave($__internal_65b303c00945c68386fc9c6ee2e161cdfb9f3826787f7f2a11fde850b3ea28cd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbcd09982b4dbef967b8445d9b7c35e27277c32e1440150e7a22f3fc5c0895f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcd09982b4dbef967b8445d9b7c35e27277c32e1440150e7a22f3fc5c0895f7->enter($__internal_dbcd09982b4dbef967b8445d9b7c35e27277c32e1440150e7a22f3fc5c0895f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_dbcd09982b4dbef967b8445d9b7c35e27277c32e1440150e7a22f3fc5c0895f7->leave($__internal_dbcd09982b4dbef967b8445d9b7c35e27277c32e1440150e7a22f3fc5c0895f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/exception.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
