<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f10149a7bfb21a3580fef9f4cf47709f28ca29667b5191c3a861f5adef3b21af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85826356e79e234bb6baa6a0300f3d756d5a19ccb29aa153082d576b24d5cfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85826356e79e234bb6baa6a0300f3d756d5a19ccb29aa153082d576b24d5cfdb->enter($__internal_85826356e79e234bb6baa6a0300f3d756d5a19ccb29aa153082d576b24d5cfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5770907585013516ec076d5080e3edf3ea9e501ed1719678f09faeb7591f0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5770907585013516ec076d5080e3edf3ea9e501ed1719678f09faeb7591f0d2->enter($__internal_e5770907585013516ec076d5080e3edf3ea9e501ed1719678f09faeb7591f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85826356e79e234bb6baa6a0300f3d756d5a19ccb29aa153082d576b24d5cfdb->leave($__internal_85826356e79e234bb6baa6a0300f3d756d5a19ccb29aa153082d576b24d5cfdb_prof);

        
        $__internal_e5770907585013516ec076d5080e3edf3ea9e501ed1719678f09faeb7591f0d2->leave($__internal_e5770907585013516ec076d5080e3edf3ea9e501ed1719678f09faeb7591f0d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf50c74a8fb2d56a325a33ecaf742c0137341511c816994bbcd1070bd9d24f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf50c74a8fb2d56a325a33ecaf742c0137341511c816994bbcd1070bd9d24f7e->enter($__internal_bf50c74a8fb2d56a325a33ecaf742c0137341511c816994bbcd1070bd9d24f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_75087209f61bc8beb0abbc6682f19fbe1f411d7443276e8c93ebc4fea214f402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75087209f61bc8beb0abbc6682f19fbe1f411d7443276e8c93ebc4fea214f402->enter($__internal_75087209f61bc8beb0abbc6682f19fbe1f411d7443276e8c93ebc4fea214f402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75087209f61bc8beb0abbc6682f19fbe1f411d7443276e8c93ebc4fea214f402->leave($__internal_75087209f61bc8beb0abbc6682f19fbe1f411d7443276e8c93ebc4fea214f402_prof);

        
        $__internal_bf50c74a8fb2d56a325a33ecaf742c0137341511c816994bbcd1070bd9d24f7e->leave($__internal_bf50c74a8fb2d56a325a33ecaf742c0137341511c816994bbcd1070bd9d24f7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d085eb4d219df879a18ad24b06448878a566d8a156028f419cc1ecde72c95a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d085eb4d219df879a18ad24b06448878a566d8a156028f419cc1ecde72c95a3->enter($__internal_7d085eb4d219df879a18ad24b06448878a566d8a156028f419cc1ecde72c95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d21b5733a049f8586f9f00164fa6e81ba8c9d0e6f8213c7bc5db0c3727db0031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21b5733a049f8586f9f00164fa6e81ba8c9d0e6f8213c7bc5db0c3727db0031->enter($__internal_d21b5733a049f8586f9f00164fa6e81ba8c9d0e6f8213c7bc5db0c3727db0031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d21b5733a049f8586f9f00164fa6e81ba8c9d0e6f8213c7bc5db0c3727db0031->leave($__internal_d21b5733a049f8586f9f00164fa6e81ba8c9d0e6f8213c7bc5db0c3727db0031_prof);

        
        $__internal_7d085eb4d219df879a18ad24b06448878a566d8a156028f419cc1ecde72c95a3->leave($__internal_7d085eb4d219df879a18ad24b06448878a566d8a156028f419cc1ecde72c95a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2013109533ac324d4d4ae73527f25968eb9c106f4b4b5c7cb4eae35ad8ac0359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2013109533ac324d4d4ae73527f25968eb9c106f4b4b5c7cb4eae35ad8ac0359->enter($__internal_2013109533ac324d4d4ae73527f25968eb9c106f4b4b5c7cb4eae35ad8ac0359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_785d65d73cb6de1c830e49570a22447a981d4011a36ea3b06e2392db5e97c70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d65d73cb6de1c830e49570a22447a981d4011a36ea3b06e2392db5e97c70e->enter($__internal_785d65d73cb6de1c830e49570a22447a981d4011a36ea3b06e2392db5e97c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_785d65d73cb6de1c830e49570a22447a981d4011a36ea3b06e2392db5e97c70e->leave($__internal_785d65d73cb6de1c830e49570a22447a981d4011a36ea3b06e2392db5e97c70e_prof);

        
        $__internal_2013109533ac324d4d4ae73527f25968eb9c106f4b4b5c7cb4eae35ad8ac0359->leave($__internal_2013109533ac324d4d4ae73527f25968eb9c106f4b4b5c7cb4eae35ad8ac0359_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
