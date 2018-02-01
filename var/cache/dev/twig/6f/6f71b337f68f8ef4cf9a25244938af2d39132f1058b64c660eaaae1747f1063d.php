<?php

/* EsqueletBundle:Default:noticias.html.twig */
class __TwigTemplate_1935aea03aecdbd551a2d461558c739e43211ddd7979bd7075daafdea1189f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsqueletBundle:Default:noticias.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55bd51fa30edbe8096e3b3bf6263a11e1dd4f0b22b1a4ddea4a2163b987a9e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bd51fa30edbe8096e3b3bf6263a11e1dd4f0b22b1a4ddea4a2163b987a9e6d->enter($__internal_55bd51fa30edbe8096e3b3bf6263a11e1dd4f0b22b1a4ddea4a2163b987a9e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:noticias.html.twig"));

        $__internal_db5d3afaf686add7896c077606d9529850dba0b178bbd259d4061a23ea01224c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5d3afaf686add7896c077606d9529850dba0b178bbd259d4061a23ea01224c->enter($__internal_db5d3afaf686add7896c077606d9529850dba0b178bbd259d4061a23ea01224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:noticias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55bd51fa30edbe8096e3b3bf6263a11e1dd4f0b22b1a4ddea4a2163b987a9e6d->leave($__internal_55bd51fa30edbe8096e3b3bf6263a11e1dd4f0b22b1a4ddea4a2163b987a9e6d_prof);

        
        $__internal_db5d3afaf686add7896c077606d9529850dba0b178bbd259d4061a23ea01224c->leave($__internal_db5d3afaf686add7896c077606d9529850dba0b178bbd259d4061a23ea01224c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9eb6c3cf44aea6acba1394f640aa23b212f4416516a072a73afa8e64b52f222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eb6c3cf44aea6acba1394f640aa23b212f4416516a072a73afa8e64b52f222->enter($__internal_d9eb6c3cf44aea6acba1394f640aa23b212f4416516a072a73afa8e64b52f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec9b7678e107ff1cc963a00046c5dd5f33dda685a80296c48ec7b085aa7af4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9b7678e107ff1cc963a00046c5dd5f33dda685a80296c48ec7b085aa7af4d8->enter($__internal_ec9b7678e107ff1cc963a00046c5dd5f33dda685a80296c48ec7b085aa7af4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["futbol"]) ? $context["futbol"] : $this->getContext($context, "futbol")));
        foreach ($context['_seq'] as $context["_key"] => $context["carlet"]) {
            // line 5
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "nombre", array()), "html", null, true);
            echo "</li>
<li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "apellidos", array()), "html", null, true);
            echo "</li>
<li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "categoria", array()), "html", null, true);
            echo "</li>
<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "altura", array()), "html", null, true);
            echo "</li>
<li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "peso", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec9b7678e107ff1cc963a00046c5dd5f33dda685a80296c48ec7b085aa7af4d8->leave($__internal_ec9b7678e107ff1cc963a00046c5dd5f33dda685a80296c48ec7b085aa7af4d8_prof);

        
        $__internal_d9eb6c3cf44aea6acba1394f640aa23b212f4416516a072a73afa8e64b52f222->leave($__internal_d9eb6c3cf44aea6acba1394f640aa23b212f4416516a072a73afa8e64b52f222_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 8,  62 => 7,  58 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
{% for carlet in futbol %}
<li>{{ carlet.nombre }}</li>
<li>{{ carlet.apellidos }}</li>
<li>{{ carlet.categoria }}</li>
<li>{{ carlet.altura }}</li>
<li>{{ carlet.peso }}</li>
{% endfor %}
{% endblock %}
", "EsqueletBundle:Default:noticias.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/noticias.html.twig");
    }
}
