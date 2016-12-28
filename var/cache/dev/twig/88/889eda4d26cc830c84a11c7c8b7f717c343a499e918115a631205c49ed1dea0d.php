<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_dcf0c21ca91b75d963b796fb39be62ab25cdaba4efa312dcf85bea999272dd06 extends Twig_Template
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
        $__internal_3e46057202fb0027e1173645f6c9d57edbc2bee32066bb3d08be23a20ec6c6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e46057202fb0027e1173645f6c9d57edbc2bee32066bb3d08be23a20ec6c6aa->enter($__internal_3e46057202fb0027e1173645f6c9d57edbc2bee32066bb3d08be23a20ec6c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d2994f3a9180994aab1cf0743dbb1c0990c83e6213f8d48d3044593a79f32990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2994f3a9180994aab1cf0743dbb1c0990c83e6213f8d48d3044593a79f32990->enter($__internal_d2994f3a9180994aab1cf0743dbb1c0990c83e6213f8d48d3044593a79f32990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3e46057202fb0027e1173645f6c9d57edbc2bee32066bb3d08be23a20ec6c6aa->leave($__internal_3e46057202fb0027e1173645f6c9d57edbc2bee32066bb3d08be23a20ec6c6aa_prof);

        
        $__internal_d2994f3a9180994aab1cf0743dbb1c0990c83e6213f8d48d3044593a79f32990->leave($__internal_d2994f3a9180994aab1cf0743dbb1c0990c83e6213f8d48d3044593a79f32990_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/anchan/NetBeansProjects/mava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
