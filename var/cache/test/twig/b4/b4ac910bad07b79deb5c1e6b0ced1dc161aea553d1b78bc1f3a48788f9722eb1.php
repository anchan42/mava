<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
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
        $__internal_1112c86d973316276b277f81c4159c4a26e9832c702888baa4768a760f2f9e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1112c86d973316276b277f81c4159c4a26e9832c702888baa4768a760f2f9e36->enter($__internal_1112c86d973316276b277f81c4159c4a26e9832c702888baa4768a760f2f9e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c6c38e40ecf7c3a3c5b0bf3470e4184b47910734292a6e9248ef9ad57fb57193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c38e40ecf7c3a3c5b0bf3470e4184b47910734292a6e9248ef9ad57fb57193->enter($__internal_c6c38e40ecf7c3a3c5b0bf3470e4184b47910734292a6e9248ef9ad57fb57193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1112c86d973316276b277f81c4159c4a26e9832c702888baa4768a760f2f9e36->leave($__internal_1112c86d973316276b277f81c4159c4a26e9832c702888baa4768a760f2f9e36_prof);

        
        $__internal_c6c38e40ecf7c3a3c5b0bf3470e4184b47910734292a6e9248ef9ad57fb57193->leave($__internal_c6c38e40ecf7c3a3c5b0bf3470e4184b47910734292a6e9248ef9ad57fb57193_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61603455dfa790807509ab4eb7a2e638f5aeb2674f2d92abd423b19de3fabdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61603455dfa790807509ab4eb7a2e638f5aeb2674f2d92abd423b19de3fabdbd->enter($__internal_61603455dfa790807509ab4eb7a2e638f5aeb2674f2d92abd423b19de3fabdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f072f88405042cc4141ec6249c27714f42be0a13b4e68c011ea36f6a7df1a647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f072f88405042cc4141ec6249c27714f42be0a13b4e68c011ea36f6a7df1a647->enter($__internal_f072f88405042cc4141ec6249c27714f42be0a13b4e68c011ea36f6a7df1a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f072f88405042cc4141ec6249c27714f42be0a13b4e68c011ea36f6a7df1a647->leave($__internal_f072f88405042cc4141ec6249c27714f42be0a13b4e68c011ea36f6a7df1a647_prof);

        
        $__internal_61603455dfa790807509ab4eb7a2e638f5aeb2674f2d92abd423b19de3fabdbd->leave($__internal_61603455dfa790807509ab4eb7a2e638f5aeb2674f2d92abd423b19de3fabdbd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb3eb6244a088e3f763691bc265455a6cc4680570a2c710ec9836a93b0381779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3eb6244a088e3f763691bc265455a6cc4680570a2c710ec9836a93b0381779->enter($__internal_fb3eb6244a088e3f763691bc265455a6cc4680570a2c710ec9836a93b0381779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5399e83b9e4e9f870816b840146da6d8b804b1138033db0441525b9feb2d54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5399e83b9e4e9f870816b840146da6d8b804b1138033db0441525b9feb2d54f->enter($__internal_a5399e83b9e4e9f870816b840146da6d8b804b1138033db0441525b9feb2d54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5399e83b9e4e9f870816b840146da6d8b804b1138033db0441525b9feb2d54f->leave($__internal_a5399e83b9e4e9f870816b840146da6d8b804b1138033db0441525b9feb2d54f_prof);

        
        $__internal_fb3eb6244a088e3f763691bc265455a6cc4680570a2c710ec9836a93b0381779->leave($__internal_fb3eb6244a088e3f763691bc265455a6cc4680570a2c710ec9836a93b0381779_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f53c4585fdae9d75ffe7f72fdba1e1b0bd1300cf4a9b19ec5e48bf965b303104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53c4585fdae9d75ffe7f72fdba1e1b0bd1300cf4a9b19ec5e48bf965b303104->enter($__internal_f53c4585fdae9d75ffe7f72fdba1e1b0bd1300cf4a9b19ec5e48bf965b303104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d09a2de87c7dbba0de84f6f8372896bb29597ce22f8f8763fdcc9da2edacdfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09a2de87c7dbba0de84f6f8372896bb29597ce22f8f8763fdcc9da2edacdfff->enter($__internal_d09a2de87c7dbba0de84f6f8372896bb29597ce22f8f8763fdcc9da2edacdfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d09a2de87c7dbba0de84f6f8372896bb29597ce22f8f8763fdcc9da2edacdfff->leave($__internal_d09a2de87c7dbba0de84f6f8372896bb29597ce22f8f8763fdcc9da2edacdfff_prof);

        
        $__internal_f53c4585fdae9d75ffe7f72fdba1e1b0bd1300cf4a9b19ec5e48bf965b303104->leave($__internal_f53c4585fdae9d75ffe7f72fdba1e1b0bd1300cf4a9b19ec5e48bf965b303104_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/anchan/NetBeansProjects/mava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
