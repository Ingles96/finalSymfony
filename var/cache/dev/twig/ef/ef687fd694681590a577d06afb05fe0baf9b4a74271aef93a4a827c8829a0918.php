<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_972b52f703a88b55abe751a9c98aef39220c85f8ffa3cf008ed21d51eedcfaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972b52f703a88b55abe751a9c98aef39220c85f8ffa3cf008ed21d51eedcfaea->enter($__internal_972b52f703a88b55abe751a9c98aef39220c85f8ffa3cf008ed21d51eedcfaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6aabd8da9ce4cc365a638d3149f42ee5222634ae596d2994b9db0faa7df7f343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aabd8da9ce4cc365a638d3149f42ee5222634ae596d2994b9db0faa7df7f343->enter($__internal_6aabd8da9ce4cc365a638d3149f42ee5222634ae596d2994b9db0faa7df7f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972b52f703a88b55abe751a9c98aef39220c85f8ffa3cf008ed21d51eedcfaea->leave($__internal_972b52f703a88b55abe751a9c98aef39220c85f8ffa3cf008ed21d51eedcfaea_prof);

        
        $__internal_6aabd8da9ce4cc365a638d3149f42ee5222634ae596d2994b9db0faa7df7f343->leave($__internal_6aabd8da9ce4cc365a638d3149f42ee5222634ae596d2994b9db0faa7df7f343_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1c6e6e8bd87d5845d37a1c468c14e8809cf623a71b12855ed23e616917ec483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c6e6e8bd87d5845d37a1c468c14e8809cf623a71b12855ed23e616917ec483->enter($__internal_f1c6e6e8bd87d5845d37a1c468c14e8809cf623a71b12855ed23e616917ec483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e3e0b2fcbe4f6e3a03b483bb4bb258e051f0f301ddd3acb51b1c42b711ded24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3e0b2fcbe4f6e3a03b483bb4bb258e051f0f301ddd3acb51b1c42b711ded24->enter($__internal_3e3e0b2fcbe4f6e3a03b483bb4bb258e051f0f301ddd3acb51b1c42b711ded24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e3e0b2fcbe4f6e3a03b483bb4bb258e051f0f301ddd3acb51b1c42b711ded24->leave($__internal_3e3e0b2fcbe4f6e3a03b483bb4bb258e051f0f301ddd3acb51b1c42b711ded24_prof);

        
        $__internal_f1c6e6e8bd87d5845d37a1c468c14e8809cf623a71b12855ed23e616917ec483->leave($__internal_f1c6e6e8bd87d5845d37a1c468c14e8809cf623a71b12855ed23e616917ec483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cc33ece3ca175f650fe95fbe2f12919de4a2fd19e796f839e02d4f5787f1ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc33ece3ca175f650fe95fbe2f12919de4a2fd19e796f839e02d4f5787f1ddf->enter($__internal_3cc33ece3ca175f650fe95fbe2f12919de4a2fd19e796f839e02d4f5787f1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb7e5160903ed5eef3cc234d8c63908656d5fda604b7c09b8f2518c9286537d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7e5160903ed5eef3cc234d8c63908656d5fda604b7c09b8f2518c9286537d6->enter($__internal_eb7e5160903ed5eef3cc234d8c63908656d5fda604b7c09b8f2518c9286537d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb7e5160903ed5eef3cc234d8c63908656d5fda604b7c09b8f2518c9286537d6->leave($__internal_eb7e5160903ed5eef3cc234d8c63908656d5fda604b7c09b8f2518c9286537d6_prof);

        
        $__internal_3cc33ece3ca175f650fe95fbe2f12919de4a2fd19e796f839e02d4f5787f1ddf->leave($__internal_3cc33ece3ca175f650fe95fbe2f12919de4a2fd19e796f839e02d4f5787f1ddf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00af25ad2fe21948aa8b55cd44bf1ba0cc481b0e376fa5f9d6f9080c66467dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00af25ad2fe21948aa8b55cd44bf1ba0cc481b0e376fa5f9d6f9080c66467dbe->enter($__internal_00af25ad2fe21948aa8b55cd44bf1ba0cc481b0e376fa5f9d6f9080c66467dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5bd5fe7367c6534b0f6b1ac423ba6d4be93d2ab8bddc9b185b33f9e295c78435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd5fe7367c6534b0f6b1ac423ba6d4be93d2ab8bddc9b185b33f9e295c78435->enter($__internal_5bd5fe7367c6534b0f6b1ac423ba6d4be93d2ab8bddc9b185b33f9e295c78435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5bd5fe7367c6534b0f6b1ac423ba6d4be93d2ab8bddc9b185b33f9e295c78435->leave($__internal_5bd5fe7367c6534b0f6b1ac423ba6d4be93d2ab8bddc9b185b33f9e295c78435_prof);

        
        $__internal_00af25ad2fe21948aa8b55cd44bf1ba0cc481b0e376fa5f9d6f9080c66467dbe->leave($__internal_00af25ad2fe21948aa8b55cd44bf1ba0cc481b0e376fa5f9d6f9080c66467dbe_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
