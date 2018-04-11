<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2a49cffef938e493a5f37980f7c8244e527f0a0e83702d92d659e743fa8bcc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90cdd97005aa9673d1817ae40477b44eb2b0b0538500c185a97f0bf1a1de7137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cdd97005aa9673d1817ae40477b44eb2b0b0538500c185a97f0bf1a1de7137->enter($__internal_90cdd97005aa9673d1817ae40477b44eb2b0b0538500c185a97f0bf1a1de7137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bf64a83d1977bb724f5b931e68e3cd24bb20a3937cce1dea149787e5f04cafe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf64a83d1977bb724f5b931e68e3cd24bb20a3937cce1dea149787e5f04cafe1->enter($__internal_bf64a83d1977bb724f5b931e68e3cd24bb20a3937cce1dea149787e5f04cafe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cdd97005aa9673d1817ae40477b44eb2b0b0538500c185a97f0bf1a1de7137->leave($__internal_90cdd97005aa9673d1817ae40477b44eb2b0b0538500c185a97f0bf1a1de7137_prof);

        
        $__internal_bf64a83d1977bb724f5b931e68e3cd24bb20a3937cce1dea149787e5f04cafe1->leave($__internal_bf64a83d1977bb724f5b931e68e3cd24bb20a3937cce1dea149787e5f04cafe1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8b1d382811f5b1754210668d8ce183994f9b88558cf958697ac90478823aca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b1d382811f5b1754210668d8ce183994f9b88558cf958697ac90478823aca7->enter($__internal_a8b1d382811f5b1754210668d8ce183994f9b88558cf958697ac90478823aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3897f8bb27c0d3529433786c0d6b0b0797827ce0e990f4e10155de180a7bf504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3897f8bb27c0d3529433786c0d6b0b0797827ce0e990f4e10155de180a7bf504->enter($__internal_3897f8bb27c0d3529433786c0d6b0b0797827ce0e990f4e10155de180a7bf504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3897f8bb27c0d3529433786c0d6b0b0797827ce0e990f4e10155de180a7bf504->leave($__internal_3897f8bb27c0d3529433786c0d6b0b0797827ce0e990f4e10155de180a7bf504_prof);

        
        $__internal_a8b1d382811f5b1754210668d8ce183994f9b88558cf958697ac90478823aca7->leave($__internal_a8b1d382811f5b1754210668d8ce183994f9b88558cf958697ac90478823aca7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
