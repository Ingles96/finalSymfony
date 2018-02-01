<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d2940b4316178c80701cdff80d84abab405036e52e4e3ec8cb7ca23246d9019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2940b4316178c80701cdff80d84abab405036e52e4e3ec8cb7ca23246d9019->enter($__internal_2d2940b4316178c80701cdff80d84abab405036e52e4e3ec8cb7ca23246d9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_954ce4f65488390f57d8c321f158bdbf6f88d515de6b63f0fb93761ab45e1568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954ce4f65488390f57d8c321f158bdbf6f88d515de6b63f0fb93761ab45e1568->enter($__internal_954ce4f65488390f57d8c321f158bdbf6f88d515de6b63f0fb93761ab45e1568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2d2940b4316178c80701cdff80d84abab405036e52e4e3ec8cb7ca23246d9019->leave($__internal_2d2940b4316178c80701cdff80d84abab405036e52e4e3ec8cb7ca23246d9019_prof);

        
        $__internal_954ce4f65488390f57d8c321f158bdbf6f88d515de6b63f0fb93761ab45e1568->leave($__internal_954ce4f65488390f57d8c321f158bdbf6f88d515de6b63f0fb93761ab45e1568_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0531dbf60a0fbc7ce9e6026c3acea627e5691c1784af67e62f2ad7edd02f66e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0531dbf60a0fbc7ce9e6026c3acea627e5691c1784af67e62f2ad7edd02f66e6->enter($__internal_0531dbf60a0fbc7ce9e6026c3acea627e5691c1784af67e62f2ad7edd02f66e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddf5ee8068c2f99dafbcc6b7928618bcd0d9dc9b492788a4e7f047a8fa5d9bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf5ee8068c2f99dafbcc6b7928618bcd0d9dc9b492788a4e7f047a8fa5d9bf7->enter($__internal_ddf5ee8068c2f99dafbcc6b7928618bcd0d9dc9b492788a4e7f047a8fa5d9bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ddf5ee8068c2f99dafbcc6b7928618bcd0d9dc9b492788a4e7f047a8fa5d9bf7->leave($__internal_ddf5ee8068c2f99dafbcc6b7928618bcd0d9dc9b492788a4e7f047a8fa5d9bf7_prof);

        
        $__internal_0531dbf60a0fbc7ce9e6026c3acea627e5691c1784af67e62f2ad7edd02f66e6->leave($__internal_0531dbf60a0fbc7ce9e6026c3acea627e5691c1784af67e62f2ad7edd02f66e6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bf1c69c4311e805e6e1c8064fd3aa312e95869fd7fd70efc034ded7581c7f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf1c69c4311e805e6e1c8064fd3aa312e95869fd7fd70efc034ded7581c7f38->enter($__internal_3bf1c69c4311e805e6e1c8064fd3aa312e95869fd7fd70efc034ded7581c7f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c600b3c38ce7b4d713b8079d7effbfcdd31cea333cf138cbdf6f1eafd3422717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c600b3c38ce7b4d713b8079d7effbfcdd31cea333cf138cbdf6f1eafd3422717->enter($__internal_c600b3c38ce7b4d713b8079d7effbfcdd31cea333cf138cbdf6f1eafd3422717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c600b3c38ce7b4d713b8079d7effbfcdd31cea333cf138cbdf6f1eafd3422717->leave($__internal_c600b3c38ce7b4d713b8079d7effbfcdd31cea333cf138cbdf6f1eafd3422717_prof);

        
        $__internal_3bf1c69c4311e805e6e1c8064fd3aa312e95869fd7fd70efc034ded7581c7f38->leave($__internal_3bf1c69c4311e805e6e1c8064fd3aa312e95869fd7fd70efc034ded7581c7f38_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_322afd4df5e9f6d855d2232c091b60e4f26fcb61a4bafb8580e8aa88b9d3ae75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322afd4df5e9f6d855d2232c091b60e4f26fcb61a4bafb8580e8aa88b9d3ae75->enter($__internal_322afd4df5e9f6d855d2232c091b60e4f26fcb61a4bafb8580e8aa88b9d3ae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50a9712dcd3ea1b2ea17970fcfc6de5a41be8bc5651756a854abe55e8aa688a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a9712dcd3ea1b2ea17970fcfc6de5a41be8bc5651756a854abe55e8aa688a4->enter($__internal_50a9712dcd3ea1b2ea17970fcfc6de5a41be8bc5651756a854abe55e8aa688a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50a9712dcd3ea1b2ea17970fcfc6de5a41be8bc5651756a854abe55e8aa688a4->leave($__internal_50a9712dcd3ea1b2ea17970fcfc6de5a41be8bc5651756a854abe55e8aa688a4_prof);

        
        $__internal_322afd4df5e9f6d855d2232c091b60e4f26fcb61a4bafb8580e8aa88b9d3ae75->leave($__internal_322afd4df5e9f6d855d2232c091b60e4f26fcb61a4bafb8580e8aa88b9d3ae75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
