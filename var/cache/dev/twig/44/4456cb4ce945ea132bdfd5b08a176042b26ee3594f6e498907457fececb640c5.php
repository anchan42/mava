<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b8551b53712119c1caeb9304d2d518f7e67a936a5f3d539e0a3b45c6300ba018 extends Twig_Template
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
        $__internal_b7e82fa34a6c49f7dfa932e4fc922cef8558bd6c08387245263c61194bca5534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e82fa34a6c49f7dfa932e4fc922cef8558bd6c08387245263c61194bca5534->enter($__internal_b7e82fa34a6c49f7dfa932e4fc922cef8558bd6c08387245263c61194bca5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_028108a8df4228f7213745ab93bcd1df8b6ad37201ffe1bd3893cb50c3f96769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028108a8df4228f7213745ab93bcd1df8b6ad37201ffe1bd3893cb50c3f96769->enter($__internal_028108a8df4228f7213745ab93bcd1df8b6ad37201ffe1bd3893cb50c3f96769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e82fa34a6c49f7dfa932e4fc922cef8558bd6c08387245263c61194bca5534->leave($__internal_b7e82fa34a6c49f7dfa932e4fc922cef8558bd6c08387245263c61194bca5534_prof);

        
        $__internal_028108a8df4228f7213745ab93bcd1df8b6ad37201ffe1bd3893cb50c3f96769->leave($__internal_028108a8df4228f7213745ab93bcd1df8b6ad37201ffe1bd3893cb50c3f96769_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_913600f797bf3cbeb3f7a23fdc4e584492bb6249bfa349f7a57d2f7c5df695aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913600f797bf3cbeb3f7a23fdc4e584492bb6249bfa349f7a57d2f7c5df695aa->enter($__internal_913600f797bf3cbeb3f7a23fdc4e584492bb6249bfa349f7a57d2f7c5df695aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca1896de878b5feb272cdca91b328954fd74e027d9956603c9ea45ae07c72480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1896de878b5feb272cdca91b328954fd74e027d9956603c9ea45ae07c72480->enter($__internal_ca1896de878b5feb272cdca91b328954fd74e027d9956603c9ea45ae07c72480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ca1896de878b5feb272cdca91b328954fd74e027d9956603c9ea45ae07c72480->leave($__internal_ca1896de878b5feb272cdca91b328954fd74e027d9956603c9ea45ae07c72480_prof);

        
        $__internal_913600f797bf3cbeb3f7a23fdc4e584492bb6249bfa349f7a57d2f7c5df695aa->leave($__internal_913600f797bf3cbeb3f7a23fdc4e584492bb6249bfa349f7a57d2f7c5df695aa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_281a300eb7f6f03ac6a4fb4342dd385084a8266647579991f3aba41e1d5c81d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281a300eb7f6f03ac6a4fb4342dd385084a8266647579991f3aba41e1d5c81d4->enter($__internal_281a300eb7f6f03ac6a4fb4342dd385084a8266647579991f3aba41e1d5c81d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5dc4338c154ce9f5391f98d240957f21022b285ec26538973aca7f8abe8bd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dc4338c154ce9f5391f98d240957f21022b285ec26538973aca7f8abe8bd73->enter($__internal_d5dc4338c154ce9f5391f98d240957f21022b285ec26538973aca7f8abe8bd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d5dc4338c154ce9f5391f98d240957f21022b285ec26538973aca7f8abe8bd73->leave($__internal_d5dc4338c154ce9f5391f98d240957f21022b285ec26538973aca7f8abe8bd73_prof);

        
        $__internal_281a300eb7f6f03ac6a4fb4342dd385084a8266647579991f3aba41e1d5c81d4->leave($__internal_281a300eb7f6f03ac6a4fb4342dd385084a8266647579991f3aba41e1d5c81d4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec0b0a23144f421007d3d0f64c6e631d853d14245af41647b325afa363d90db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec0b0a23144f421007d3d0f64c6e631d853d14245af41647b325afa363d90db->enter($__internal_dec0b0a23144f421007d3d0f64c6e631d853d14245af41647b325afa363d90db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ae0a2e5ab1d98ce00720a8077245e9cc6e559499a74cfbfa3a5784e07efee0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae0a2e5ab1d98ce00720a8077245e9cc6e559499a74cfbfa3a5784e07efee0a->enter($__internal_1ae0a2e5ab1d98ce00720a8077245e9cc6e559499a74cfbfa3a5784e07efee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ae0a2e5ab1d98ce00720a8077245e9cc6e559499a74cfbfa3a5784e07efee0a->leave($__internal_1ae0a2e5ab1d98ce00720a8077245e9cc6e559499a74cfbfa3a5784e07efee0a_prof);

        
        $__internal_dec0b0a23144f421007d3d0f64c6e631d853d14245af41647b325afa363d90db->leave($__internal_dec0b0a23144f421007d3d0f64c6e631d853d14245af41647b325afa363d90db_prof);

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
