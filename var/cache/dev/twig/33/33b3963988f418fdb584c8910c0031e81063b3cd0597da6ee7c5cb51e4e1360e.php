<?php

/* EsqueletBundle:Default:usuario.html.twig */
class __TwigTemplate_ca90efb17a9168ae5ee12d23eae504380ae291f0aecff5474c8d9f779d5cd543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletBundle:Default:usuario.html.twig", 1);
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
        $__internal_4b0e4726f7c66d2b004a5fa180ab1e0dde5728dc02f262f0d0dadb42b23667ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0e4726f7c66d2b004a5fa180ab1e0dde5728dc02f262f0d0dadb42b23667ad->enter($__internal_4b0e4726f7c66d2b004a5fa180ab1e0dde5728dc02f262f0d0dadb42b23667ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:usuario.html.twig"));

        $__internal_1d5b69509c71f5a1f01d17a26c2632e8c94e1c5b0800eb9fe225d795ad5ad8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5b69509c71f5a1f01d17a26c2632e8c94e1c5b0800eb9fe225d795ad5ad8d4->enter($__internal_1d5b69509c71f5a1f01d17a26c2632e8c94e1c5b0800eb9fe225d795ad5ad8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:usuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0e4726f7c66d2b004a5fa180ab1e0dde5728dc02f262f0d0dadb42b23667ad->leave($__internal_4b0e4726f7c66d2b004a5fa180ab1e0dde5728dc02f262f0d0dadb42b23667ad_prof);

        
        $__internal_1d5b69509c71f5a1f01d17a26c2632e8c94e1c5b0800eb9fe225d795ad5ad8d4->leave($__internal_1d5b69509c71f5a1f01d17a26c2632e8c94e1c5b0800eb9fe225d795ad5ad8d4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_507d066d3b22ad4a259cc0dc5822ae6e69511093b64430ea702f193dca90ef62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507d066d3b22ad4a259cc0dc5822ae6e69511093b64430ea702f193dca90ef62->enter($__internal_507d066d3b22ad4a259cc0dc5822ae6e69511093b64430ea702f193dca90ef62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dc27fb34f1421053fdbabd491c840c0ba1c5eb0a900aadfd63f57b7bd5f0ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc27fb34f1421053fdbabd491c840c0ba1c5eb0a900aadfd63f57b7bd5f0ff0->enter($__internal_3dc27fb34f1421053fdbabd491c840c0ba1c5eb0a900aadfd63f57b7bd5f0ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  Usuario codificado
</div>
";
        
        $__internal_3dc27fb34f1421053fdbabd491c840c0ba1c5eb0a900aadfd63f57b7bd5f0ff0->leave($__internal_3dc27fb34f1421053fdbabd491c840c0ba1c5eb0a900aadfd63f57b7bd5f0ff0_prof);

        
        $__internal_507d066d3b22ad4a259cc0dc5822ae6e69511093b64430ea702f193dca90ef62->leave($__internal_507d066d3b22ad4a259cc0dc5822ae6e69511093b64430ea702f193dca90ef62_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"container\">
  Usuario codificado
</div>
{% endblock %}
", "EsqueletBundle:Default:usuario.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/usuario.html.twig");
    }
}
