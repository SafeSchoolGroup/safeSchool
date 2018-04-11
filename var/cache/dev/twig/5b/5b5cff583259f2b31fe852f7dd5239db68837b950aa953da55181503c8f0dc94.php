<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ae952ff987f4be0db79421cda4e7c8953a269e7ee44728feb71c0a2b5fe01739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_090aad5ad179c5f2186b0c45f49ff48cbab0a912ec6201a931d68cd4bbeabb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090aad5ad179c5f2186b0c45f49ff48cbab0a912ec6201a931d68cd4bbeabb13->enter($__internal_090aad5ad179c5f2186b0c45f49ff48cbab0a912ec6201a931d68cd4bbeabb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_824ab683a08e7e19c41368f397922361c1f998340718c05ddc62d4f419eead3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824ab683a08e7e19c41368f397922361c1f998340718c05ddc62d4f419eead3f->enter($__internal_824ab683a08e7e19c41368f397922361c1f998340718c05ddc62d4f419eead3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_090aad5ad179c5f2186b0c45f49ff48cbab0a912ec6201a931d68cd4bbeabb13->leave($__internal_090aad5ad179c5f2186b0c45f49ff48cbab0a912ec6201a931d68cd4bbeabb13_prof);

        
        $__internal_824ab683a08e7e19c41368f397922361c1f998340718c05ddc62d4f419eead3f->leave($__internal_824ab683a08e7e19c41368f397922361c1f998340718c05ddc62d4f419eead3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c67a3fc832ff0a97dc23d72e7e9950177c28c608d9aff81156c794a2f9c27c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c67a3fc832ff0a97dc23d72e7e9950177c28c608d9aff81156c794a2f9c27c5->enter($__internal_0c67a3fc832ff0a97dc23d72e7e9950177c28c608d9aff81156c794a2f9c27c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9379b783be30f334721cae7ff90f882ebd10a1c028efa8be694fb0a1bba1afd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9379b783be30f334721cae7ff90f882ebd10a1c028efa8be694fb0a1bba1afd5->enter($__internal_9379b783be30f334721cae7ff90f882ebd10a1c028efa8be694fb0a1bba1afd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9379b783be30f334721cae7ff90f882ebd10a1c028efa8be694fb0a1bba1afd5->leave($__internal_9379b783be30f334721cae7ff90f882ebd10a1c028efa8be694fb0a1bba1afd5_prof);

        
        $__internal_0c67a3fc832ff0a97dc23d72e7e9950177c28c608d9aff81156c794a2f9c27c5->leave($__internal_0c67a3fc832ff0a97dc23d72e7e9950177c28c608d9aff81156c794a2f9c27c5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c91947877d149da01633aaed2d3652440c69dfb91c59af7a2d3a1e728bb12716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91947877d149da01633aaed2d3652440c69dfb91c59af7a2d3a1e728bb12716->enter($__internal_c91947877d149da01633aaed2d3652440c69dfb91c59af7a2d3a1e728bb12716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8f2d2686634a12578f7503bf9124eedabbfe442c00c1392f10b2eb479edc3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f2d2686634a12578f7503bf9124eedabbfe442c00c1392f10b2eb479edc3a3->enter($__internal_f8f2d2686634a12578f7503bf9124eedabbfe442c00c1392f10b2eb479edc3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f8f2d2686634a12578f7503bf9124eedabbfe442c00c1392f10b2eb479edc3a3->leave($__internal_f8f2d2686634a12578f7503bf9124eedabbfe442c00c1392f10b2eb479edc3a3_prof);

        
        $__internal_c91947877d149da01633aaed2d3652440c69dfb91c59af7a2d3a1e728bb12716->leave($__internal_c91947877d149da01633aaed2d3652440c69dfb91c59af7a2d3a1e728bb12716_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f9a7eddf8424dcef581b5f41230e4844d3d44e93664d66ca51fdfb75c1de796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9a7eddf8424dcef581b5f41230e4844d3d44e93664d66ca51fdfb75c1de796->enter($__internal_6f9a7eddf8424dcef581b5f41230e4844d3d44e93664d66ca51fdfb75c1de796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb68b154bdb72e1e69d77add930da277e4c29721cf9530566f9c5513dd460f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb68b154bdb72e1e69d77add930da277e4c29721cf9530566f9c5513dd460f1e->enter($__internal_bb68b154bdb72e1e69d77add930da277e4c29721cf9530566f9c5513dd460f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb68b154bdb72e1e69d77add930da277e4c29721cf9530566f9c5513dd460f1e->leave($__internal_bb68b154bdb72e1e69d77add930da277e4c29721cf9530566f9c5513dd460f1e_prof);

        
        $__internal_6f9a7eddf8424dcef581b5f41230e4844d3d44e93664d66ca51fdfb75c1de796->leave($__internal_6f9a7eddf8424dcef581b5f41230e4844d3d44e93664d66ca51fdfb75c1de796_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
