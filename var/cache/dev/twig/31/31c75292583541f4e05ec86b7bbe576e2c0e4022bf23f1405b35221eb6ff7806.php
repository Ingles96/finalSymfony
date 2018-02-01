<?php

/* EsqueletBundle:Default:inicio.html.twig */
class __TwigTemplate_0bbd41fe83654ebbdc9c7a3dfec1d0fb334fa3c136d815d0d699f426dee193fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsqueletBundle:Default:inicio.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30ee40b12420706fe0f869c669a88f02d17d4ada8e981898f6d4a4d5b28be1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ee40b12420706fe0f869c669a88f02d17d4ada8e981898f6d4a4d5b28be1d8->enter($__internal_30ee40b12420706fe0f869c669a88f02d17d4ada8e981898f6d4a4d5b28be1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:inicio.html.twig"));

        $__internal_b8463accec84b0d2897630b526b7e932b37a3e434f36326dffe6423fe46f7c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8463accec84b0d2897630b526b7e932b37a3e434f36326dffe6423fe46f7c0c->enter($__internal_b8463accec84b0d2897630b526b7e932b37a3e434f36326dffe6423fe46f7c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ee40b12420706fe0f869c669a88f02d17d4ada8e981898f6d4a4d5b28be1d8->leave($__internal_30ee40b12420706fe0f869c669a88f02d17d4ada8e981898f6d4a4d5b28be1d8_prof);

        
        $__internal_b8463accec84b0d2897630b526b7e932b37a3e434f36326dffe6423fe46f7c0c->leave($__internal_b8463accec84b0d2897630b526b7e932b37a3e434f36326dffe6423fe46f7c0c_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:inicio.html.twig";
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
        return new Twig_Source("{% extends '::base.html.twig' %}
", "EsqueletBundle:Default:inicio.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/inicio.html.twig");
    }
}
