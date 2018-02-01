<?php

/* carlet/editar.html.twig */
class __TwigTemplate_ad7d56b07917a3aed9bd2ce8fa9b5a25b181a4604f705a0b59406b58799ac1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/editar.html.twig", 1);
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
        $__internal_3d477dc09ee84f2818c7abe846a7918ab33e600784c5d28377c4540208bee261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d477dc09ee84f2818c7abe846a7918ab33e600784c5d28377c4540208bee261->enter($__internal_3d477dc09ee84f2818c7abe846a7918ab33e600784c5d28377c4540208bee261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/editar.html.twig"));

        $__internal_6677826c554177a1e28cc47c5fe32c49e8625f6edc45f18c9bdadd4203024a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6677826c554177a1e28cc47c5fe32c49e8625f6edc45f18c9bdadd4203024a8d->enter($__internal_6677826c554177a1e28cc47c5fe32c49e8625f6edc45f18c9bdadd4203024a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d477dc09ee84f2818c7abe846a7918ab33e600784c5d28377c4540208bee261->leave($__internal_3d477dc09ee84f2818c7abe846a7918ab33e600784c5d28377c4540208bee261_prof);

        
        $__internal_6677826c554177a1e28cc47c5fe32c49e8625f6edc45f18c9bdadd4203024a8d->leave($__internal_6677826c554177a1e28cc47c5fe32c49e8625f6edc45f18c9bdadd4203024a8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c790bd87558e55f72e9019303a7fcd32d5341c7de540d6f924fcc678095d5dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c790bd87558e55f72e9019303a7fcd32d5341c7de540d6f924fcc678095d5dec->enter($__internal_c790bd87558e55f72e9019303a7fcd32d5341c7de540d6f924fcc678095d5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1272848182d45538e8f142edcc2d1b22c567e379e1baeadc490e6f89ce1f004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1272848182d45538e8f142edcc2d1b22c567e379e1baeadc490e6f89ce1f004a->enter($__internal_1272848182d45538e8f142edcc2d1b22c567e379e1baeadc490e6f89ce1f004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1272848182d45538e8f142edcc2d1b22c567e379e1baeadc490e6f89ce1f004a->leave($__internal_1272848182d45538e8f142edcc2d1b22c567e379e1baeadc490e6f89ce1f004a_prof);

        
        $__internal_c790bd87558e55f72e9019303a7fcd32d5341c7de540d6f924fcc678095d5dec->leave($__internal_c790bd87558e55f72e9019303a7fcd32d5341c7de540d6f924fcc678095d5dec_prof);

    }

    public function getTemplateName()
    {
        return "carlet/editar.html.twig";
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
", "carlet/editar.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\editar.html.twig");
    }
}
