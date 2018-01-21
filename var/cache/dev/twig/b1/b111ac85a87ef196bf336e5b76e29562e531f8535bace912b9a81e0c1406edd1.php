<?php

/* base.html.twig */
class __TwigTemplate_a7fae150b1c998bfdef05a8b308931f0da164143f378a63f076f5df95f1b72ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbf6730bbe90546f20685022e370a156f20121eef4a712c233011e8c6a0e1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbf6730bbe90546f20685022e370a156f20121eef4a712c233011e8c6a0e1ce->enter($__internal_fcbf6730bbe90546f20685022e370a156f20121eef4a712c233011e8c6a0e1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fcbf6730bbe90546f20685022e370a156f20121eef4a712c233011e8c6a0e1ce->leave($__internal_fcbf6730bbe90546f20685022e370a156f20121eef4a712c233011e8c6a0e1ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a7d189676588d5bfea919f6ae00787c1178119faffb85d2a9486b9c9bc37912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7d189676588d5bfea919f6ae00787c1178119faffb85d2a9486b9c9bc37912->enter($__internal_3a7d189676588d5bfea919f6ae00787c1178119faffb85d2a9486b9c9bc37912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3a7d189676588d5bfea919f6ae00787c1178119faffb85d2a9486b9c9bc37912->leave($__internal_3a7d189676588d5bfea919f6ae00787c1178119faffb85d2a9486b9c9bc37912_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7abc6efe9f248ea60c1a933c174e2682ff1e1e306519be453b4654e342aa11fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abc6efe9f248ea60c1a933c174e2682ff1e1e306519be453b4654e342aa11fe->enter($__internal_7abc6efe9f248ea60c1a933c174e2682ff1e1e306519be453b4654e342aa11fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7abc6efe9f248ea60c1a933c174e2682ff1e1e306519be453b4654e342aa11fe->leave($__internal_7abc6efe9f248ea60c1a933c174e2682ff1e1e306519be453b4654e342aa11fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6cd0ae1363e2a1c8672a6cfe7925c52093cb3f35c46ece0c1c228842538e9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cd0ae1363e2a1c8672a6cfe7925c52093cb3f35c46ece0c1c228842538e9ff->enter($__internal_c6cd0ae1363e2a1c8672a6cfe7925c52093cb3f35c46ece0c1c228842538e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6cd0ae1363e2a1c8672a6cfe7925c52093cb3f35c46ece0c1c228842538e9ff->leave($__internal_c6cd0ae1363e2a1c8672a6cfe7925c52093cb3f35c46ece0c1c228842538e9ff_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7df970af09f0d471b5f3e078a27f0f422973af816f89bcfec5b9f5d899a4bc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df970af09f0d471b5f3e078a27f0f422973af816f89bcfec5b9f5d899a4bc5d->enter($__internal_7df970af09f0d471b5f3e078a27f0f422973af816f89bcfec5b9f5d899a4bc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7df970af09f0d471b5f3e078a27f0f422973af816f89bcfec5b9f5d899a4bc5d->leave($__internal_7df970af09f0d471b5f3e078a27f0f422973af816f89bcfec5b9f5d899a4bc5d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/app/Resources/views/base.html.twig");
    }
}
