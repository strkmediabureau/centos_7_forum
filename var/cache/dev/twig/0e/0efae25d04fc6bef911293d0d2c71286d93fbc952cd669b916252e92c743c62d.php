<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ff9cbd39ddad1ba270c2b04e42383a6354edfaee418701b2aeaf34dedc5741eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9fabbaaeeabe97cc48a13732dc3d09e06cd9b90548ff4c61093f9ec7e52b3296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fabbaaeeabe97cc48a13732dc3d09e06cd9b90548ff4c61093f9ec7e52b3296->enter($__internal_9fabbaaeeabe97cc48a13732dc3d09e06cd9b90548ff4c61093f9ec7e52b3296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fabbaaeeabe97cc48a13732dc3d09e06cd9b90548ff4c61093f9ec7e52b3296->leave($__internal_9fabbaaeeabe97cc48a13732dc3d09e06cd9b90548ff4c61093f9ec7e52b3296_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_deaaf756b7106e8c8976afd12acd933e77f37adb6d7df7f29712cc2397c164f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deaaf756b7106e8c8976afd12acd933e77f37adb6d7df7f29712cc2397c164f7->enter($__internal_deaaf756b7106e8c8976afd12acd933e77f37adb6d7df7f29712cc2397c164f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deaaf756b7106e8c8976afd12acd933e77f37adb6d7df7f29712cc2397c164f7->leave($__internal_deaaf756b7106e8c8976afd12acd933e77f37adb6d7df7f29712cc2397c164f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4328153baaceed18a4f98cc7e1068ac9c7c0e8014656ae12f0685a94e4e9b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4328153baaceed18a4f98cc7e1068ac9c7c0e8014656ae12f0685a94e4e9b57->enter($__internal_b4328153baaceed18a4f98cc7e1068ac9c7c0e8014656ae12f0685a94e4e9b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4328153baaceed18a4f98cc7e1068ac9c7c0e8014656ae12f0685a94e4e9b57->leave($__internal_b4328153baaceed18a4f98cc7e1068ac9c7c0e8014656ae12f0685a94e4e9b57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8f69f5ca37df26eb8e10bbf18bd87d7b8f3670ddcfa18eaf7d6558b644cbbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f69f5ca37df26eb8e10bbf18bd87d7b8f3670ddcfa18eaf7d6558b644cbbb4->enter($__internal_b8f69f5ca37df26eb8e10bbf18bd87d7b8f3670ddcfa18eaf7d6558b644cbbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_b8f69f5ca37df26eb8e10bbf18bd87d7b8f3670ddcfa18eaf7d6558b644cbbb4->leave($__internal_b8f69f5ca37df26eb8e10bbf18bd87d7b8f3670ddcfa18eaf7d6558b644cbbb4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/router.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
