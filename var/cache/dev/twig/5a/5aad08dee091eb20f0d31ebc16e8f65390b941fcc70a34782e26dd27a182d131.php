<?php

/* carlet/new.html.twig */
class __TwigTemplate_5dad467a77f43097d8d5b9ae64d461d69c4d4260b02ab81d813e7a06a5852460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/new.html.twig", 1);
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
        $__internal_dc9d4e7eeb84e67181ac360958b322f99604b24db325f8c9a75421e3f71a85bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9d4e7eeb84e67181ac360958b322f99604b24db325f8c9a75421e3f71a85bc->enter($__internal_dc9d4e7eeb84e67181ac360958b322f99604b24db325f8c9a75421e3f71a85bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/new.html.twig"));

        $__internal_b1491655a5d38a132dfc39a617193812b91501668dab396711fa37e84968e2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1491655a5d38a132dfc39a617193812b91501668dab396711fa37e84968e2e9->enter($__internal_b1491655a5d38a132dfc39a617193812b91501668dab396711fa37e84968e2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9d4e7eeb84e67181ac360958b322f99604b24db325f8c9a75421e3f71a85bc->leave($__internal_dc9d4e7eeb84e67181ac360958b322f99604b24db325f8c9a75421e3f71a85bc_prof);

        
        $__internal_b1491655a5d38a132dfc39a617193812b91501668dab396711fa37e84968e2e9->leave($__internal_b1491655a5d38a132dfc39a617193812b91501668dab396711fa37e84968e2e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bfbeb7e2dfc1d0bf2dcbd693a6a97b452fabd87d0e79965cd40b12149f4a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bfbeb7e2dfc1d0bf2dcbd693a6a97b452fabd87d0e79965cd40b12149f4a63->enter($__internal_c3bfbeb7e2dfc1d0bf2dcbd693a6a97b452fabd87d0e79965cd40b12149f4a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9124eb63f9c840fd19d042d86acb4c544b97bc298a56620484ebd8e7916467e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9124eb63f9c840fd19d042d86acb4c544b97bc298a56620484ebd8e7916467e->enter($__internal_f9124eb63f9c840fd19d042d86acb4c544b97bc298a56620484ebd8e7916467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear jugador</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carlet_index");
        echo "\">Volver a la lista</a>
        </li>
    </ul>
";
        
        $__internal_f9124eb63f9c840fd19d042d86acb4c544b97bc298a56620484ebd8e7916467e->leave($__internal_f9124eb63f9c840fd19d042d86acb4c544b97bc298a56620484ebd8e7916467e_prof);

        
        $__internal_c3bfbeb7e2dfc1d0bf2dcbd693a6a97b452fabd87d0e79965cd40b12149f4a63->leave($__internal_c3bfbeb7e2dfc1d0bf2dcbd693a6a97b452fabd87d0e79965cd40b12149f4a63_prof);

    }

    public function getTemplateName()
    {
        return "carlet/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Crear jugador</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Crear\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('carlet_index') }}\">Volver a la lista</a>
        </li>
    </ul>
{% endblock %}
", "carlet/new.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\new.html.twig");
    }
}
