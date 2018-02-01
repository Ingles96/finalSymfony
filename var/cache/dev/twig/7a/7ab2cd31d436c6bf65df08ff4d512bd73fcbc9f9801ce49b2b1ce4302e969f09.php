<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_d4e4f275aeb83b3878644a77d0a4e5d5a1fda217c284cbadbacc111d4ece1fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4f275aeb83b3878644a77d0a4e5d5a1fda217c284cbadbacc111d4ece1fb7->enter($__internal_d4e4f275aeb83b3878644a77d0a4e5d5a1fda217c284cbadbacc111d4ece1fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_668cc193540fd25679dd1c5eba99694c3bad7723df0deea95f1188256775b20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668cc193540fd25679dd1c5eba99694c3bad7723df0deea95f1188256775b20f->enter($__internal_668cc193540fd25679dd1c5eba99694c3bad7723df0deea95f1188256775b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e4f275aeb83b3878644a77d0a4e5d5a1fda217c284cbadbacc111d4ece1fb7->leave($__internal_d4e4f275aeb83b3878644a77d0a4e5d5a1fda217c284cbadbacc111d4ece1fb7_prof);

        
        $__internal_668cc193540fd25679dd1c5eba99694c3bad7723df0deea95f1188256775b20f->leave($__internal_668cc193540fd25679dd1c5eba99694c3bad7723df0deea95f1188256775b20f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75f063d40770e9015f47a7fd799542e12eccce13d9418328bf13f26cd7d27c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f063d40770e9015f47a7fd799542e12eccce13d9418328bf13f26cd7d27c37->enter($__internal_75f063d40770e9015f47a7fd799542e12eccce13d9418328bf13f26cd7d27c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf3373416329e23d30538a197be27b2c6d3d2c5ec36219e4b116d498552851f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3373416329e23d30538a197be27b2c6d3d2c5ec36219e4b116d498552851f4->enter($__internal_cf3373416329e23d30538a197be27b2c6d3d2c5ec36219e4b116d498552851f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cf3373416329e23d30538a197be27b2c6d3d2c5ec36219e4b116d498552851f4->leave($__internal_cf3373416329e23d30538a197be27b2c6d3d2c5ec36219e4b116d498552851f4_prof);

        
        $__internal_75f063d40770e9015f47a7fd799542e12eccce13d9418328bf13f26cd7d27c37->leave($__internal_75f063d40770e9015f47a7fd799542e12eccce13d9418328bf13f26cd7d27c37_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fce2fd6fea8ab9dadd545a0a959f267dc885494e250dfc87274db201026f996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fce2fd6fea8ab9dadd545a0a959f267dc885494e250dfc87274db201026f996->enter($__internal_7fce2fd6fea8ab9dadd545a0a959f267dc885494e250dfc87274db201026f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b3c20aa2c4c2eaed11b333e365841ee134484b7f6b142ca4cce490d1b94816f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3c20aa2c4c2eaed11b333e365841ee134484b7f6b142ca4cce490d1b94816f->enter($__internal_6b3c20aa2c4c2eaed11b333e365841ee134484b7f6b142ca4cce490d1b94816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6b3c20aa2c4c2eaed11b333e365841ee134484b7f6b142ca4cce490d1b94816f->leave($__internal_6b3c20aa2c4c2eaed11b333e365841ee134484b7f6b142ca4cce490d1b94816f_prof);

        
        $__internal_7fce2fd6fea8ab9dadd545a0a959f267dc885494e250dfc87274db201026f996->leave($__internal_7fce2fd6fea8ab9dadd545a0a959f267dc885494e250dfc87274db201026f996_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34c8194da253a4d65d315d372f1b477fee0c7c954b02a0a7fcfbdf0f23fc82f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c8194da253a4d65d315d372f1b477fee0c7c954b02a0a7fcfbdf0f23fc82f5->enter($__internal_34c8194da253a4d65d315d372f1b477fee0c7c954b02a0a7fcfbdf0f23fc82f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c436fcbfa93b0bb3865836f23c21511587cda715f794e0ca6806e9dd6c92d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c436fcbfa93b0bb3865836f23c21511587cda715f794e0ca6806e9dd6c92d21->enter($__internal_8c436fcbfa93b0bb3865836f23c21511587cda715f794e0ca6806e9dd6c92d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c436fcbfa93b0bb3865836f23c21511587cda715f794e0ca6806e9dd6c92d21->leave($__internal_8c436fcbfa93b0bb3865836f23c21511587cda715f794e0ca6806e9dd6c92d21_prof);

        
        $__internal_34c8194da253a4d65d315d372f1b477fee0c7c954b02a0a7fcfbdf0f23fc82f5->leave($__internal_34c8194da253a4d65d315d372f1b477fee0c7c954b02a0a7fcfbdf0f23fc82f5_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
