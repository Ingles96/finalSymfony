<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5886ad691dc15f745a147dd931e5068469d0f7b14b0f0af3fb6d83cd498daff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5886ad691dc15f745a147dd931e5068469d0f7b14b0f0af3fb6d83cd498daff->enter($__internal_e5886ad691dc15f745a147dd931e5068469d0f7b14b0f0af3fb6d83cd498daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4d1d1a28c133297d2dc8c3b58a8a8c192c91569d662beedf7ae36723a54f3f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1d1a28c133297d2dc8c3b58a8a8c192c91569d662beedf7ae36723a54f3f09->enter($__internal_4d1d1a28c133297d2dc8c3b58a8a8c192c91569d662beedf7ae36723a54f3f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5886ad691dc15f745a147dd931e5068469d0f7b14b0f0af3fb6d83cd498daff->leave($__internal_e5886ad691dc15f745a147dd931e5068469d0f7b14b0f0af3fb6d83cd498daff_prof);

        
        $__internal_4d1d1a28c133297d2dc8c3b58a8a8c192c91569d662beedf7ae36723a54f3f09->leave($__internal_4d1d1a28c133297d2dc8c3b58a8a8c192c91569d662beedf7ae36723a54f3f09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0b734658b23ad150cbcf9f1bc180fd2d6f840371a3b2afc9a01dd4300414ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b734658b23ad150cbcf9f1bc180fd2d6f840371a3b2afc9a01dd4300414ce8->enter($__internal_e0b734658b23ad150cbcf9f1bc180fd2d6f840371a3b2afc9a01dd4300414ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37b1f78d32fc0dd490ed191a545710bb2968940f30f8e240acf64ab68ed5780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b1f78d32fc0dd490ed191a545710bb2968940f30f8e240acf64ab68ed5780d->enter($__internal_37b1f78d32fc0dd490ed191a545710bb2968940f30f8e240acf64ab68ed5780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_37b1f78d32fc0dd490ed191a545710bb2968940f30f8e240acf64ab68ed5780d->leave($__internal_37b1f78d32fc0dd490ed191a545710bb2968940f30f8e240acf64ab68ed5780d_prof);

        
        $__internal_e0b734658b23ad150cbcf9f1bc180fd2d6f840371a3b2afc9a01dd4300414ce8->leave($__internal_e0b734658b23ad150cbcf9f1bc180fd2d6f840371a3b2afc9a01dd4300414ce8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb1a3d949c988de7cdcbd6af30229e2ebf9bd5c93a38bde9432cf90e4765c1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1a3d949c988de7cdcbd6af30229e2ebf9bd5c93a38bde9432cf90e4765c1cf->enter($__internal_cb1a3d949c988de7cdcbd6af30229e2ebf9bd5c93a38bde9432cf90e4765c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_858b346191a56bc63081a39f1ef4842c67cd4d04b6c66e0c449bdd958ac3db67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858b346191a56bc63081a39f1ef4842c67cd4d04b6c66e0c449bdd958ac3db67->enter($__internal_858b346191a56bc63081a39f1ef4842c67cd4d04b6c66e0c449bdd958ac3db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_858b346191a56bc63081a39f1ef4842c67cd4d04b6c66e0c449bdd958ac3db67->leave($__internal_858b346191a56bc63081a39f1ef4842c67cd4d04b6c66e0c449bdd958ac3db67_prof);

        
        $__internal_cb1a3d949c988de7cdcbd6af30229e2ebf9bd5c93a38bde9432cf90e4765c1cf->leave($__internal_cb1a3d949c988de7cdcbd6af30229e2ebf9bd5c93a38bde9432cf90e4765c1cf_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_568456b23b26b7ca2c8aae97b73e129cbe9d6531ab6e8bab97124d570483fd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568456b23b26b7ca2c8aae97b73e129cbe9d6531ab6e8bab97124d570483fd38->enter($__internal_568456b23b26b7ca2c8aae97b73e129cbe9d6531ab6e8bab97124d570483fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68eb8da60a3e7401020f4212881b7af262e3f30ef38c2bb45b1ad442a4077e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eb8da60a3e7401020f4212881b7af262e3f30ef38c2bb45b1ad442a4077e06->enter($__internal_68eb8da60a3e7401020f4212881b7af262e3f30ef38c2bb45b1ad442a4077e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_68eb8da60a3e7401020f4212881b7af262e3f30ef38c2bb45b1ad442a4077e06->leave($__internal_68eb8da60a3e7401020f4212881b7af262e3f30ef38c2bb45b1ad442a4077e06_prof);

        
        $__internal_568456b23b26b7ca2c8aae97b73e129cbe9d6531ab6e8bab97124d570483fd38->leave($__internal_568456b23b26b7ca2c8aae97b73e129cbe9d6531ab6e8bab97124d570483fd38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
