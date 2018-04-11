<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c74e174028fa436415b581e560215b54d636c470e4508e7a7f1a830dea5639c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c5c3ac2dd76cc138f431419fda5df46ea99bdce555cd2e43a08eecb897c1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c5c3ac2dd76cc138f431419fda5df46ea99bdce555cd2e43a08eecb897c1fd->enter($__internal_f1c5c3ac2dd76cc138f431419fda5df46ea99bdce555cd2e43a08eecb897c1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_de62f17b6a102bf10ad05f418b6f7fd0bfb3555851e917ce1d4cede8071f01cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de62f17b6a102bf10ad05f418b6f7fd0bfb3555851e917ce1d4cede8071f01cc->enter($__internal_de62f17b6a102bf10ad05f418b6f7fd0bfb3555851e917ce1d4cede8071f01cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c5c3ac2dd76cc138f431419fda5df46ea99bdce555cd2e43a08eecb897c1fd->leave($__internal_f1c5c3ac2dd76cc138f431419fda5df46ea99bdce555cd2e43a08eecb897c1fd_prof);

        
        $__internal_de62f17b6a102bf10ad05f418b6f7fd0bfb3555851e917ce1d4cede8071f01cc->leave($__internal_de62f17b6a102bf10ad05f418b6f7fd0bfb3555851e917ce1d4cede8071f01cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0d9bb74d72487482616897421170516f25cd7146e4a5e461dcdcba537156ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d9bb74d72487482616897421170516f25cd7146e4a5e461dcdcba537156ac5->enter($__internal_d0d9bb74d72487482616897421170516f25cd7146e4a5e461dcdcba537156ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69a02409cbaf978ecd13733e04d834d83f5cf40d55422b4f6f3a6d26c1d8906b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a02409cbaf978ecd13733e04d834d83f5cf40d55422b4f6f3a6d26c1d8906b->enter($__internal_69a02409cbaf978ecd13733e04d834d83f5cf40d55422b4f6f3a6d26c1d8906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_69a02409cbaf978ecd13733e04d834d83f5cf40d55422b4f6f3a6d26c1d8906b->leave($__internal_69a02409cbaf978ecd13733e04d834d83f5cf40d55422b4f6f3a6d26c1d8906b_prof);

        
        $__internal_d0d9bb74d72487482616897421170516f25cd7146e4a5e461dcdcba537156ac5->leave($__internal_d0d9bb74d72487482616897421170516f25cd7146e4a5e461dcdcba537156ac5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
