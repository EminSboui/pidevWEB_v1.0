<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_39522ff2f11238a43a458b542059abf4b1c583f17a738cff1783dad86ba997a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebc3b6a725311ac6c9ff43583e55420efbcda97a7861bc187c86557a47e2fd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc3b6a725311ac6c9ff43583e55420efbcda97a7861bc187c86557a47e2fd88->enter($__internal_ebc3b6a725311ac6c9ff43583e55420efbcda97a7861bc187c86557a47e2fd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a3446297a922c57704d5cf565e5c9488aa056accb13886900f95421cc15eda7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3446297a922c57704d5cf565e5c9488aa056accb13886900f95421cc15eda7b->enter($__internal_a3446297a922c57704d5cf565e5c9488aa056accb13886900f95421cc15eda7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc3b6a725311ac6c9ff43583e55420efbcda97a7861bc187c86557a47e2fd88->leave($__internal_ebc3b6a725311ac6c9ff43583e55420efbcda97a7861bc187c86557a47e2fd88_prof);

        
        $__internal_a3446297a922c57704d5cf565e5c9488aa056accb13886900f95421cc15eda7b->leave($__internal_a3446297a922c57704d5cf565e5c9488aa056accb13886900f95421cc15eda7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21f783efc83e7d76fa478106fce911e7137652d8aae505b8a2b678993be2d1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f783efc83e7d76fa478106fce911e7137652d8aae505b8a2b678993be2d1f4->enter($__internal_21f783efc83e7d76fa478106fce911e7137652d8aae505b8a2b678993be2d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3c7ebeafc9a17f9a9e2274459cca8f4c6a068a8516930b961ca42a2a87d6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c7ebeafc9a17f9a9e2274459cca8f4c6a068a8516930b961ca42a2a87d6160->enter($__internal_f3c7ebeafc9a17f9a9e2274459cca8f4c6a068a8516930b961ca42a2a87d6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f3c7ebeafc9a17f9a9e2274459cca8f4c6a068a8516930b961ca42a2a87d6160->leave($__internal_f3c7ebeafc9a17f9a9e2274459cca8f4c6a068a8516930b961ca42a2a87d6160_prof);

        
        $__internal_21f783efc83e7d76fa478106fce911e7137652d8aae505b8a2b678993be2d1f4->leave($__internal_21f783efc83e7d76fa478106fce911e7137652d8aae505b8a2b678993be2d1f4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_49ffb7b8195dd6fe8b118cdf8d08b8d79c435fd8010b2aefc700339183ba86fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ffb7b8195dd6fe8b118cdf8d08b8d79c435fd8010b2aefc700339183ba86fa->enter($__internal_49ffb7b8195dd6fe8b118cdf8d08b8d79c435fd8010b2aefc700339183ba86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7780b3fb19b49a5e4009e6c504c3ceec1df4ad3b2dd1a9d85f2dab7301af2602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7780b3fb19b49a5e4009e6c504c3ceec1df4ad3b2dd1a9d85f2dab7301af2602->enter($__internal_7780b3fb19b49a5e4009e6c504c3ceec1df4ad3b2dd1a9d85f2dab7301af2602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7780b3fb19b49a5e4009e6c504c3ceec1df4ad3b2dd1a9d85f2dab7301af2602->leave($__internal_7780b3fb19b49a5e4009e6c504c3ceec1df4ad3b2dd1a9d85f2dab7301af2602_prof);

        
        $__internal_49ffb7b8195dd6fe8b118cdf8d08b8d79c435fd8010b2aefc700339183ba86fa->leave($__internal_49ffb7b8195dd6fe8b118cdf8d08b8d79c435fd8010b2aefc700339183ba86fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}