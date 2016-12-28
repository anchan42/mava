<?php

/* AppBundle:about:more.html.twig */
class __TwigTemplate_24c6e60421d95639f9ea738bb7f04731cc852bdeafec4bb365471fc32484af69 extends Twig_Template
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
        $__internal_d9904780d3a90742d6039569c93d9590bb4170f3d0335caf5ede7d949537226c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9904780d3a90742d6039569c93d9590bb4170f3d0335caf5ede7d949537226c->enter($__internal_d9904780d3a90742d6039569c93d9590bb4170f3d0335caf5ede7d949537226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:about:more.html.twig"));

        $__internal_821cceb29bbc22a5978eeedf35b7d0144b7c5a92a1044b8bc1e7a871f4f17a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821cceb29bbc22a5978eeedf35b7d0144b7c5a92a1044b8bc1e7a871f4f17a38->enter($__internal_821cceb29bbc22a5978eeedf35b7d0144b7c5a92a1044b8bc1e7a871f4f17a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:about:more.html.twig"));

        // line 2
        echo "<h1>User Profile</h1>
<strong>Name: </strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " <br/>
<strong>email: </strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo " <br/>
<strong>Bio: </strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "bio", array()), "html", null, true);
        echo " <br/>

<h1> TEST</h1>";
        
        $__internal_d9904780d3a90742d6039569c93d9590bb4170f3d0335caf5ede7d949537226c->leave($__internal_d9904780d3a90742d6039569c93d9590bb4170f3d0335caf5ede7d949537226c_prof);

        
        $__internal_821cceb29bbc22a5978eeedf35b7d0144b7c5a92a1044b8bc1e7a871f4f17a38->leave($__internal_821cceb29bbc22a5978eeedf35b7d0144b7c5a92a1044b8bc1e7a871f4f17a38_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:about:more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# mava/src/AppBundle/Resouces/views/About/more.html.twig #}
<h1>User Profile</h1>
<strong>Name: </strong>{{user.name}} <br/>
<strong>email: </strong>{{user.email}} <br/>
<strong>Bio: </strong>{{user.bio}} <br/>

<h1> TEST</h1>", "AppBundle:about:more.html.twig", "/home/anchan/NetBeansProjects/mava/src/AppBundle/Resources/views/about/more.html.twig");
    }
}
