<?php

/* EsqueletBundle:registro:register.html.twig */
class __TwigTemplate_4f3f1c5a5e1888dcd247b9c84bc540a65c143afbe313bbe09c099af981d7e047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05d8a34127857772bdb84887c34601ccf529aa03819af8cbcf028938d0a6d01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d8a34127857772bdb84887c34601ccf529aa03819af8cbcf028938d0a6d01d->enter($__internal_05d8a34127857772bdb84887c34601ccf529aa03819af8cbcf028938d0a6d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:registro:register.html.twig"));

        $__internal_b00864c4a889e7ac145ba964ddc516e573ff69420b5e004aee6c390613a5ad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00864c4a889e7ac145ba964ddc516e573ff69420b5e004aee6c390613a5ad46->enter($__internal_b00864c4a889e7ac145ba964ddc516e573ff69420b5e004aee6c390613a5ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:registro:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salvar", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Borrar", array()), 'row');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_05d8a34127857772bdb84887c34601ccf529aa03819af8cbcf028938d0a6d01d->leave($__internal_05d8a34127857772bdb84887c34601ccf529aa03819af8cbcf028938d0a6d01d_prof);

        
        $__internal_b00864c4a889e7ac145ba964ddc516e573ff69420b5e004aee6c390613a5ad46->leave($__internal_b00864c4a889e7ac145ba964ddc516e573ff69420b5e004aee6c390613a5ad46_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:registro:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Salvar) }}
    {{ form_row(form.Borrar) }}
{{ form_end(form) }}
", "EsqueletBundle:registro:register.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/registro/register.html.twig");
    }
}
