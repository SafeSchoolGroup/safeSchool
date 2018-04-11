<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_96c2b972692bde527a39fa5144fc1540f3051e39a0c6fd7dbac06e32f4abbb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6070229d29b7f1d16507acd75576d8e4741accdf7877b3d58a0db3b37c2f6262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6070229d29b7f1d16507acd75576d8e4741accdf7877b3d58a0db3b37c2f6262->enter($__internal_6070229d29b7f1d16507acd75576d8e4741accdf7877b3d58a0db3b37c2f6262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e2951cd200da10d7be2adc70d46f4d8a048762aa4b0901825ee3db963ac55e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2951cd200da10d7be2adc70d46f4d8a048762aa4b0901825ee3db963ac55e52->enter($__internal_e2951cd200da10d7be2adc70d46f4d8a048762aa4b0901825ee3db963ac55e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6070229d29b7f1d16507acd75576d8e4741accdf7877b3d58a0db3b37c2f6262->leave($__internal_6070229d29b7f1d16507acd75576d8e4741accdf7877b3d58a0db3b37c2f6262_prof);

        
        $__internal_e2951cd200da10d7be2adc70d46f4d8a048762aa4b0901825ee3db963ac55e52->leave($__internal_e2951cd200da10d7be2adc70d46f4d8a048762aa4b0901825ee3db963ac55e52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e87ec5a388728fdbff8d145f90aa67fb4cfcb36306215108798f0ec1db013cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87ec5a388728fdbff8d145f90aa67fb4cfcb36306215108798f0ec1db013cb1->enter($__internal_e87ec5a388728fdbff8d145f90aa67fb4cfcb36306215108798f0ec1db013cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7e54542af386e19fb5b56c87595a1575a30b305d245db6b3ab15e338b314cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e54542af386e19fb5b56c87595a1575a30b305d245db6b3ab15e338b314cc3->enter($__internal_b7e54542af386e19fb5b56c87595a1575a30b305d245db6b3ab15e338b314cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b7e54542af386e19fb5b56c87595a1575a30b305d245db6b3ab15e338b314cc3->leave($__internal_b7e54542af386e19fb5b56c87595a1575a30b305d245db6b3ab15e338b314cc3_prof);

        
        $__internal_e87ec5a388728fdbff8d145f90aa67fb4cfcb36306215108798f0ec1db013cb1->leave($__internal_e87ec5a388728fdbff8d145f90aa67fb4cfcb36306215108798f0ec1db013cb1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19a7420df9d2b713fcd9a204b9a48bd3ddd0527a1c49253b5ad9a1947f9d9757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a7420df9d2b713fcd9a204b9a48bd3ddd0527a1c49253b5ad9a1947f9d9757->enter($__internal_19a7420df9d2b713fcd9a204b9a48bd3ddd0527a1c49253b5ad9a1947f9d9757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95f977ee7dc3b67a675d1ff46d822f4bf29d1c95125ab776a129cc3843511f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f977ee7dc3b67a675d1ff46d822f4bf29d1c95125ab776a129cc3843511f49->enter($__internal_95f977ee7dc3b67a675d1ff46d822f4bf29d1c95125ab776a129cc3843511f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95f977ee7dc3b67a675d1ff46d822f4bf29d1c95125ab776a129cc3843511f49->leave($__internal_95f977ee7dc3b67a675d1ff46d822f4bf29d1c95125ab776a129cc3843511f49_prof);

        
        $__internal_19a7420df9d2b713fcd9a204b9a48bd3ddd0527a1c49253b5ad9a1947f9d9757->leave($__internal_19a7420df9d2b713fcd9a204b9a48bd3ddd0527a1c49253b5ad9a1947f9d9757_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c9941b933b818449c58f9a55270b4dd32d4c98fd8ae23838029757537df0bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9941b933b818449c58f9a55270b4dd32d4c98fd8ae23838029757537df0bac->enter($__internal_6c9941b933b818449c58f9a55270b4dd32d4c98fd8ae23838029757537df0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd8c5bf6f0d0a306070d45b2b0c00ff91d23a9202d67b39f2ca88662e6490d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c5bf6f0d0a306070d45b2b0c00ff91d23a9202d67b39f2ca88662e6490d09->enter($__internal_bd8c5bf6f0d0a306070d45b2b0c00ff91d23a9202d67b39f2ca88662e6490d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bd8c5bf6f0d0a306070d45b2b0c00ff91d23a9202d67b39f2ca88662e6490d09->leave($__internal_bd8c5bf6f0d0a306070d45b2b0c00ff91d23a9202d67b39f2ca88662e6490d09_prof);

        
        $__internal_6c9941b933b818449c58f9a55270b4dd32d4c98fd8ae23838029757537df0bac->leave($__internal_6c9941b933b818449c58f9a55270b4dd32d4c98fd8ae23838029757537df0bac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
