<?php

/* APIEtablissementBundle:home:base.html.twig */
class __TwigTemplate_1782ebadfb6b2317cca07dbed1b11b4b70fc16234fc18e13fa212b12ddf5a047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c83a1559d3573df60d8855e60960708cf4bfcab63875974e926431a542867c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c83a1559d3573df60d8855e60960708cf4bfcab63875974e926431a542867c->enter($__internal_b3c83a1559d3573df60d8855e60960708cf4bfcab63875974e926431a542867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:home:base.html.twig"));

        $__internal_2c4f6cb1fb87b38814c3232fb29ccfec98228242c86cd11b428354e63dd675f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4f6cb1fb87b38814c3232fb29ccfec98228242c86cd11b428354e63dd675f8->enter($__internal_2c4f6cb1fb87b38814c3232fb29ccfec98228242c86cd11b428354e63dd675f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:home:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Educational An  | Home </title>
    <!-- Meta tag Keywords -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <!--<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/chocolat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <!--light-box-files -->
    <!-- //css files -->
    <!-- online-fonts -->
    <!--<link href=\"//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext\" rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=Covered+By+Your+Grace\" rel=\"stylesheet\">-->
    <!-- //online-fonts -->
</head>
<body>
    ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "
    <!-- js -->
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "</body>
</html>
";
        
        $__internal_b3c83a1559d3573df60d8855e60960708cf4bfcab63875974e926431a542867c->leave($__internal_b3c83a1559d3573df60d8855e60960708cf4bfcab63875974e926431a542867c_prof);

        
        $__internal_2c4f6cb1fb87b38814c3232fb29ccfec98228242c86cd11b428354e63dd675f8->leave($__internal_2c4f6cb1fb87b38814c3232fb29ccfec98228242c86cd11b428354e63dd675f8_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7eb89da2749a7dad4d8cd178fb279951faf65b60b0249f912995c0a6563b3244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb89da2749a7dad4d8cd178fb279951faf65b60b0249f912995c0a6563b3244->enter($__internal_7eb89da2749a7dad4d8cd178fb279951faf65b60b0249f912995c0a6563b3244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83baf7e398bd73ea663d894672d3209a4baf94d194f1b27f0f18bd68d3656b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83baf7e398bd73ea663d894672d3209a4baf94d194f1b27f0f18bd68d3656b9a->enter($__internal_83baf7e398bd73ea663d894672d3209a4baf94d194f1b27f0f18bd68d3656b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83baf7e398bd73ea663d894672d3209a4baf94d194f1b27f0f18bd68d3656b9a->leave($__internal_83baf7e398bd73ea663d894672d3209a4baf94d194f1b27f0f18bd68d3656b9a_prof);

        
        $__internal_7eb89da2749a7dad4d8cd178fb279951faf65b60b0249f912995c0a6563b3244->leave($__internal_7eb89da2749a7dad4d8cd178fb279951faf65b60b0249f912995c0a6563b3244_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a316a75cf2bb3c6a1699c37c6fb2bcc7dad95a9ed0cdd31789e5b4133627fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a316a75cf2bb3c6a1699c37c6fb2bcc7dad95a9ed0cdd31789e5b4133627fa0->enter($__internal_0a316a75cf2bb3c6a1699c37c6fb2bcc7dad95a9ed0cdd31789e5b4133627fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_489620a904ca5b1f238b4a04b2b2914ffa4b43f14566cf33bcf9eddad0f9a7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489620a904ca5b1f238b4a04b2b2914ffa4b43f14566cf33bcf9eddad0f9a7b2->enter($__internal_489620a904ca5b1f238b4a04b2b2914ffa4b43f14566cf33bcf9eddad0f9a7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_489620a904ca5b1f238b4a04b2b2914ffa4b43f14566cf33bcf9eddad0f9a7b2->leave($__internal_489620a904ca5b1f238b4a04b2b2914ffa4b43f14566cf33bcf9eddad0f9a7b2_prof);

        
        $__internal_0a316a75cf2bb3c6a1699c37c6fb2bcc7dad95a9ed0cdd31789e5b4133627fa0->leave($__internal_0a316a75cf2bb3c6a1699c37c6fb2bcc7dad95a9ed0cdd31789e5b4133627fa0_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c286e30059b197f970446b9985054d98462d9b10beefc5c88bc3fab3a170991e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c286e30059b197f970446b9985054d98462d9b10beefc5c88bc3fab3a170991e->enter($__internal_c286e30059b197f970446b9985054d98462d9b10beefc5c88bc3fab3a170991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_246e81d9674557affe03f922d7bff2553d01e70cdf5463959c2c91d385685b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246e81d9674557affe03f922d7bff2553d01e70cdf5463959c2c91d385685b43->enter($__internal_246e81d9674557affe03f922d7bff2553d01e70cdf5463959c2c91d385685b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_246e81d9674557affe03f922d7bff2553d01e70cdf5463959c2c91d385685b43->leave($__internal_246e81d9674557affe03f922d7bff2553d01e70cdf5463959c2c91d385685b43_prof);

        
        $__internal_c286e30059b197f970446b9985054d98462d9b10beefc5c88bc3fab3a170991e->leave($__internal_c286e30059b197f970446b9985054d98462d9b10beefc5c88bc3fab3a170991e_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40cff02b51eae7a231d5c9fcd9485f1ff576b00082f81a94d91665229429301c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cff02b51eae7a231d5c9fcd9485f1ff576b00082f81a94d91665229429301c->enter($__internal_40cff02b51eae7a231d5c9fcd9485f1ff576b00082f81a94d91665229429301c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f5edc2ce31150e297c6129adec513e4cdb0bb66e07ff05faae6b06cbe73e3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5edc2ce31150e297c6129adec513e4cdb0bb66e07ff05faae6b06cbe73e3a0->enter($__internal_5f5edc2ce31150e297c6129adec513e4cdb0bb66e07ff05faae6b06cbe73e3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f5edc2ce31150e297c6129adec513e4cdb0bb66e07ff05faae6b06cbe73e3a0->leave($__internal_5f5edc2ce31150e297c6129adec513e4cdb0bb66e07ff05faae6b06cbe73e3a0_prof);

        
        $__internal_40cff02b51eae7a231d5c9fcd9485f1ff576b00082f81a94d91665229429301c->leave($__internal_40cff02b51eae7a231d5c9fcd9485f1ff576b00082f81a94d91665229429301c_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:home:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  138 => 29,  121 => 28,  104 => 19,  92 => 35,  90 => 34,  85 => 32,  81 => 30,  78 => 29,  76 => 28,  66 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  29 => 1,);
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
<html lang=\"en\">
<head>
    <title>Educational An  | Home </title>
    <!-- Meta tag Keywords -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link href=\"{{ asset('assets/front/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <link href=\"{{ asset('assets/front/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <!--<link rel=\"stylesheet\" href=\"{{ asset('assets/css/chocolat.css') }}\" type=\"text/css\" media=\"screen\">-->
    <link href=\"{{ asset('assets/front/css/owl.carousel.css') }}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
    <!--light-box-files -->
    <!-- //css files -->
    <!-- online-fonts -->
    <!--<link href=\"//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext\" rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=Covered+By+Your+Grace\" rel=\"stylesheet\">-->
    <!-- //online-fonts -->
</head>
<body>
    {% block body %}{% endblock %}
    {% block footer %}{% endblock %}

    <!-- js -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/front/js/jquery-2.1.4.min.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "APIEtablissementBundle:home:base.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/home/base.html.twig");
    }
}
