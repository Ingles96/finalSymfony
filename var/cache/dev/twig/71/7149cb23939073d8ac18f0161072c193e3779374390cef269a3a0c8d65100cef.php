<?php

/* carlet/edit.html.twig */
class __TwigTemplate_7959d5a88257fed31ccf6d7a2ad6cde9373951cc394a0f59255c3d78ed36c4c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed2996d64412f40fc96b6ba5706866557e35dbe56ea373d9ef7a0fbe30b9a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed2996d64412f40fc96b6ba5706866557e35dbe56ea373d9ef7a0fbe30b9a14->enter($__internal_9ed2996d64412f40fc96b6ba5706866557e35dbe56ea373d9ef7a0fbe30b9a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/edit.html.twig"));

        $__internal_de5bef0f70d853de429efd7a3f5da458abb635e7522f908b95b5842aadd9a61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5bef0f70d853de429efd7a3f5da458abb635e7522f908b95b5842aadd9a61e->enter($__internal_de5bef0f70d853de429efd7a3f5da458abb635e7522f908b95b5842aadd9a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed2996d64412f40fc96b6ba5706866557e35dbe56ea373d9ef7a0fbe30b9a14->leave($__internal_9ed2996d64412f40fc96b6ba5706866557e35dbe56ea373d9ef7a0fbe30b9a14_prof);

        
        $__internal_de5bef0f70d853de429efd7a3f5da458abb635e7522f908b95b5842aadd9a61e->leave($__internal_de5bef0f70d853de429efd7a3f5da458abb635e7522f908b95b5842aadd9a61e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea71dc34dc9cd467848342713a3fdd1b5608ed0e067e46f26544926a5d872ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea71dc34dc9cd467848342713a3fdd1b5608ed0e067e46f26544926a5d872ae->enter($__internal_cea71dc34dc9cd467848342713a3fdd1b5608ed0e067e46f26544926a5d872ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bf3230657ed37b7c5d1d52488622a9d0839ce28604742add22b9457b3ecc62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf3230657ed37b7c5d1d52488622a9d0839ce28604742add22b9457b3ecc62b->enter($__internal_9bf3230657ed37b7c5d1d52488622a9d0839ce28604742add22b9457b3ecc62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar jugador</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Editar\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carlet_index");
        echo "\">Volver a la lista</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9bf3230657ed37b7c5d1d52488622a9d0839ce28604742add22b9457b3ecc62b->leave($__internal_9bf3230657ed37b7c5d1d52488622a9d0839ce28604742add22b9457b3ecc62b_prof);

        
        $__internal_cea71dc34dc9cd467848342713a3fdd1b5608ed0e067e46f26544926a5d872ae->leave($__internal_cea71dc34dc9cd467848342713a3fdd1b5608ed0e067e46f26544926a5d872ae_prof);

    }

    public function getTemplateName()
    {
        return "carlet/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Editar jugador</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Editar\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('carlet_index') }}\">Volver a la lista</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "carlet/edit.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\edit.html.twig");
    }
}
