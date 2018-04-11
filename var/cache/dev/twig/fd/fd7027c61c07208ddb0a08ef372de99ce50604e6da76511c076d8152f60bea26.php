<?php

/* base.html.twig */
class __TwigTemplate_db148fa989d607ccf4b10c5f5609cbb38fb042866485a69f24b4add51f28d77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_979afe4d24c497c178614c6c350f250a990f5bfc08f13d5343dee22821734699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979afe4d24c497c178614c6c350f250a990f5bfc08f13d5343dee22821734699->enter($__internal_979afe4d24c497c178614c6c350f250a990f5bfc08f13d5343dee22821734699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_74d1f883b74ecbce254c33482410149bf7fffd724b745812cc392fb678f38ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d1f883b74ecbce254c33482410149bf7fffd724b745812cc392fb678f38ca2->enter($__internal_74d1f883b74ecbce254c33482410149bf7fffd724b745812cc392fb678f38ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_979afe4d24c497c178614c6c350f250a990f5bfc08f13d5343dee22821734699->leave($__internal_979afe4d24c497c178614c6c350f250a990f5bfc08f13d5343dee22821734699_prof);

        
        $__internal_74d1f883b74ecbce254c33482410149bf7fffd724b745812cc392fb678f38ca2->leave($__internal_74d1f883b74ecbce254c33482410149bf7fffd724b745812cc392fb678f38ca2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03e38edfe3d8a3cf9d7cb5974e0282f6eff26b9ae1a6a74edd31fb6add4b7af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e38edfe3d8a3cf9d7cb5974e0282f6eff26b9ae1a6a74edd31fb6add4b7af5->enter($__internal_03e38edfe3d8a3cf9d7cb5974e0282f6eff26b9ae1a6a74edd31fb6add4b7af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f84bd41d2d8e69c7c6b57763d08773827bae7825876983562755277cbd5473cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84bd41d2d8e69c7c6b57763d08773827bae7825876983562755277cbd5473cc->enter($__internal_f84bd41d2d8e69c7c6b57763d08773827bae7825876983562755277cbd5473cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f84bd41d2d8e69c7c6b57763d08773827bae7825876983562755277cbd5473cc->leave($__internal_f84bd41d2d8e69c7c6b57763d08773827bae7825876983562755277cbd5473cc_prof);

        
        $__internal_03e38edfe3d8a3cf9d7cb5974e0282f6eff26b9ae1a6a74edd31fb6add4b7af5->leave($__internal_03e38edfe3d8a3cf9d7cb5974e0282f6eff26b9ae1a6a74edd31fb6add4b7af5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97c3ad317ad7b1bb3ad9d9015acbcc2424f0b627ae2743f09d33a621a2311662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c3ad317ad7b1bb3ad9d9015acbcc2424f0b627ae2743f09d33a621a2311662->enter($__internal_97c3ad317ad7b1bb3ad9d9015acbcc2424f0b627ae2743f09d33a621a2311662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b70986723730ac779fcd8b4cf1cbdb46e23883d1a705e87ddf27d8669b6775f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b70986723730ac779fcd8b4cf1cbdb46e23883d1a705e87ddf27d8669b6775f->enter($__internal_9b70986723730ac779fcd8b4cf1cbdb46e23883d1a705e87ddf27d8669b6775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b70986723730ac779fcd8b4cf1cbdb46e23883d1a705e87ddf27d8669b6775f->leave($__internal_9b70986723730ac779fcd8b4cf1cbdb46e23883d1a705e87ddf27d8669b6775f_prof);

        
        $__internal_97c3ad317ad7b1bb3ad9d9015acbcc2424f0b627ae2743f09d33a621a2311662->leave($__internal_97c3ad317ad7b1bb3ad9d9015acbcc2424f0b627ae2743f09d33a621a2311662_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ca677bcb497477dd7cca6f2466372a407c7d4a5b9cccf7f65a4dc6b7e5a387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ca677bcb497477dd7cca6f2466372a407c7d4a5b9cccf7f65a4dc6b7e5a387->enter($__internal_74ca677bcb497477dd7cca6f2466372a407c7d4a5b9cccf7f65a4dc6b7e5a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_948c00d2238b983a1d6cd9add71a82cc4b8bf1c692c5efa0288ee0795e3c1bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948c00d2238b983a1d6cd9add71a82cc4b8bf1c692c5efa0288ee0795e3c1bb5->enter($__internal_948c00d2238b983a1d6cd9add71a82cc4b8bf1c692c5efa0288ee0795e3c1bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_948c00d2238b983a1d6cd9add71a82cc4b8bf1c692c5efa0288ee0795e3c1bb5->leave($__internal_948c00d2238b983a1d6cd9add71a82cc4b8bf1c692c5efa0288ee0795e3c1bb5_prof);

        
        $__internal_74ca677bcb497477dd7cca6f2466372a407c7d4a5b9cccf7f65a4dc6b7e5a387->leave($__internal_74ca677bcb497477dd7cca6f2466372a407c7d4a5b9cccf7f65a4dc6b7e5a387_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30c6dff9d5c8b854bead0f20247f7670ebc504efb9562df7333787dc39af1728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c6dff9d5c8b854bead0f20247f7670ebc504efb9562df7333787dc39af1728->enter($__internal_30c6dff9d5c8b854bead0f20247f7670ebc504efb9562df7333787dc39af1728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca2c3c4fab7cf57f6cbb57db0d6b9dbd2b498684bdbb164ece157a0a50ee9bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2c3c4fab7cf57f6cbb57db0d6b9dbd2b498684bdbb164ece157a0a50ee9bce->enter($__internal_ca2c3c4fab7cf57f6cbb57db0d6b9dbd2b498684bdbb164ece157a0a50ee9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca2c3c4fab7cf57f6cbb57db0d6b9dbd2b498684bdbb164ece157a0a50ee9bce->leave($__internal_ca2c3c4fab7cf57f6cbb57db0d6b9dbd2b498684bdbb164ece157a0a50ee9bce_prof);

        
        $__internal_30c6dff9d5c8b854bead0f20247f7670ebc504efb9562df7333787dc39af1728->leave($__internal_30c6dff9d5c8b854bead0f20247f7670ebc504efb9562df7333787dc39af1728_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\app\\Resources\\views\\base.html.twig");
    }
}
