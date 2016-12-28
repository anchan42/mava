<?php

/* about/index.html.twig */
class __TwigTemplate_ef9882ac6897dc062e78aad87c66070fab2806643709a07f86a6e2fc00d11bb1 extends Twig_Template
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
        $__internal_2cde2e82c31fffceee8f160f8c02ce9f66567b34fa19207d6f14e2ab140a3bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cde2e82c31fffceee8f160f8c02ce9f66567b34fa19207d6f14e2ab140a3bd5->enter($__internal_2cde2e82c31fffceee8f160f8c02ce9f66567b34fa19207d6f14e2ab140a3bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_791db0e21c44c5faafcc549cb163129440c5d554fa6f0a3d2d075781017ca8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791db0e21c44c5faafcc549cb163129440c5d554fa6f0a3d2d075781017ca8f6->enter($__internal_791db0e21c44c5faafcc549cb163129440c5d554fa6f0a3d2d075781017ca8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        // line 14
        echo "
";
        // line 16
        echo "
";
        // line 17
        if (($context["user"] ?? $this->getContext($context, "user"))) {
            // line 18
            echo "    <h1>User Profile</h1>
    <strong>Name: </strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
            echo " <br/>
    <strong>Bio: </strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "bio", array()), "html", null, true);
            echo " <br/>
    <button type=\"button\" onclick=\"location.href = '";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_more", array("name" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()))), "html", null, true);
            echo "'\">more</button>
";
        } else {
            // line 23
            echo "    mava is a web app for task management and team collaboration. <br/>
";
        }
        
        $__internal_2cde2e82c31fffceee8f160f8c02ce9f66567b34fa19207d6f14e2ab140a3bd5->leave($__internal_2cde2e82c31fffceee8f160f8c02ce9f66567b34fa19207d6f14e2ab140a3bd5_prof);

        
        $__internal_791db0e21c44c5faafcc549cb163129440c5d554fa6f0a3d2d075781017ca8f6->leave($__internal_791db0e21c44c5faafcc549cb163129440c5d554fa6f0a3d2d075781017ca8f6_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  44 => 21,  40 => 20,  36 => 19,  33 => 18,  31 => 17,  28 => 16,  25 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# mava/app/Resources/views/about/index.html.twig #}
{#
{% if user %}
  <h1>User Profile</h1>
  <strong>Name: </strong>{{user.name}} <br/>
  <strong>email: </strong>{{user.email}} <br/>
  <strong>Bio: </strong>{{user.bio}} <br/>
{% else %}
  mava is a web app for task management and team collaboration. <br/>
{% endif %}

{{ 'Jenkins Rocks!!!' }}
#}

{# mava/src/AppBundle/Resouces/views/About/user.html.twig #}

{% if user %}
    <h1>User Profile</h1>
    <strong>Name: </strong>{{user.name}} <br/>
    <strong>Bio: </strong>{{user.bio}} <br/>
    <button type=\"button\" onclick=\"location.href = '{{ path('app_about_more', {'name': user.name}) }}'\">more</button>
{% else %}
    mava is a web app for task management and team collaboration. <br/>
{% endif %}", "about/index.html.twig", "/home/anchan/NetBeansProjects/mava/app/Resources/views/about/index.html.twig");
    }
}
