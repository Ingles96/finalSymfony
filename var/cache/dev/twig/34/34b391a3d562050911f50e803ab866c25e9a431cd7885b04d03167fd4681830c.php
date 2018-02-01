<?php

/* default/index.html.twig */
class __TwigTemplate_3600cc78cdcca7057e0183a9a66b5240574c75abd7c4d631bf37f423c420b88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9abf971566da123e79616b5ed1108580e5fabdcf3c86167f106e18c1bb285bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9abf971566da123e79616b5ed1108580e5fabdcf3c86167f106e18c1bb285bd->enter($__internal_b9abf971566da123e79616b5ed1108580e5fabdcf3c86167f106e18c1bb285bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e8d0855f498679f6476f1d4cf9703ae2f189b39c3a15ef832da9e3bec3bd9f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d0855f498679f6476f1d4cf9703ae2f189b39c3a15ef832da9e3bec3bd9f02->enter($__internal_e8d0855f498679f6476f1d4cf9703ae2f189b39c3a15ef832da9e3bec3bd9f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9abf971566da123e79616b5ed1108580e5fabdcf3c86167f106e18c1bb285bd->leave($__internal_b9abf971566da123e79616b5ed1108580e5fabdcf3c86167f106e18c1bb285bd_prof);

        
        $__internal_e8d0855f498679f6476f1d4cf9703ae2f189b39c3a15ef832da9e3bec3bd9f02->leave($__internal_e8d0855f498679f6476f1d4cf9703ae2f189b39c3a15ef832da9e3bec3bd9f02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\default\\index.html.twig");
    }
}
