<?php

/* general_layout.html.twig */
class __TwigTemplate_ef1a4b53d61898d07bd1d2c7f9672bcdba47894b2fbe2f8228bb1a496231fbdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
            'school_registration' => array($this, 'block_school_registration'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed5406d5d488c17e1019b9222b87ffd44e53aa3b02ebaac94c139bf8660cee55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5406d5d488c17e1019b9222b87ffd44e53aa3b02ebaac94c139bf8660cee55->enter($__internal_ed5406d5d488c17e1019b9222b87ffd44e53aa3b02ebaac94c139bf8660cee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general_layout.html.twig"));

        $__internal_dfd8a105f22cdb8a889f3b3e69ecc14987ca79bf92db8f158d80b2557636d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd8a105f22cdb8a889f3b3e69ecc14987ca79bf92db8f158d80b2557636d607->enter($__internal_dfd8a105f22cdb8a889f3b3e69ecc14987ca79bf92db8f158d80b2557636d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general_layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styless.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    \t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   \t\t<!--[if lt IE 9]>
      \t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      \t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    \t<![endif]-->
    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"bar-menu\">
                <div class=\"row\">
                    <a href=\"#\" id=\"a-activer\">Activer mon compte</a>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-primary\" id=\"a-btn-connection\">Connexion</a>
                </div>
            </div>

\t\t<nav class=\"navbar navbar-inverse\" id=\"nav-main-menu\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#div-collapse\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\" id=\"a-logo\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/safeschoolLogoOmbree.png"), "html", null, true);
        echo "\" width=\"10%\">
                    </a>
                </div><!-- /.navbar-header -->

                <div class=\"collapse navbar-collapse\" id=\"div-collapse\">
                        <ul class=\"nav navbar-nav\" id=\"ul-main-navbar\">
                            <li class=\"\"><a href=\"#\">Acceuil</a></li>
                            <li class=\"\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_list");
        echo "\">Etablissements</a></li>                            

                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Documents <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" id=\"ul-snd-dropdown\">
                                    <div class=\"container\">
                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Epreuves </a> </h3></li>

                                            <ul>
                                                <li><a href=\"\">Secondaire</a></li>
                                                    <ul>
                                                        <li><a href=\"\">1<sup>er</sup> Cycle </a></li>
                                                        <li><a href=\"\">2<sup>nd</sup> Cycle</a></li>
                                                    </ul>
                                                <li><a href=\"\">Universitaire</a></li>

                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Mémoires </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Bts </a></li>
                                                <li><a href=\"\">DTS/Licence</a></li>
                                                <li><a href=\"\">Master</a></li>
                                                <li><a href=\"\">Doctorat</a></li>
                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Exposés </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Secondaire</a></li>
                                                <ul>
                                                    <li><a href=\"\">1<sup>er</sup> Cycle </a></li>
                                                    <li><a href=\"\">2<sup>nd</sup> Cycle</a></li>
                                                </ul>
                                                <li><a href=\"\">Universitaire</a></li>

                                            </ul>
                                        </ul>

                                    </div>
                                </ul>
                            </li>
                            <li class=\"\"><a href=\"#\">Exploits</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#registration_modal\" data-toggle=\"modal\" class=\"btn btn-primary\">Enregistrer votre établissement</a></li>
                        </ul>

                    <form class=\"navbar-form navbar-right\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher des établissements\" id=\"input-search\">
                            <span class=\"glyphicon glyphicon-search\" id=\"glyph-search\"></span>
                        </div>
                    </form>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.col-lg-9 -->
         </nav>

\t";
        // line 110
        $this->displayBlock('carousel', $context, $blocks);
        // line 111
        echo "
            <div class=\"container\">
                    ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "            </div>
  ";
        // line 115
        $this->displayBlock('school_registration', $context, $blocks);
        // line 116
        echo "  ";
        $this->loadTemplate("APIEtablissementBundle::etablissement/registration.html.twig", "general_layout.html.twig", 116)->display($context);
        // line 117
        echo "\t<footer>
\t\t<div class=\"container\">
\t\t\t<ul class=\"ul-footer-list\">
                <li><h3> ACTIVITES </h3></li>
\t\t\t\t<li><a href=\"\">Activer mon compte </a></li>
\t\t\t\t<li><a href=\"\">Etablissements</a></li>
\t\t\t\t<li><a href=\"\">Documents</a></li>
\t\t\t\t<li><a href=\"\">Exploits</a></li>
\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t<li><a href=\"\">Contactez-nous</a></li>
\t\t\t</ul>

            <ul class=\"ul-footer-list\">
                <li><h3> SERVICES </h3></li>
                <li><a href=\"\">Activer mon compte </a></li>
                <li><a href=\"\">Etablissements</a></li>
                <li><a href=\"\">Documents</a></li>
                <li><a href=\"\">Exploits</a></li>
                <li><a href=\"\">Forum</a></li>
                <li><a href=\"\">Contactez-nous</a></li>
            </ul>

\t\t\t<ul class=\"ul-footer-list\">
                <li><h3> AIDE & SUPPORT </h3></li>
\t\t\t\t<li><a href=\"\">Avis & Suggestions</a></li>
\t\t\t\t<li><a href=\"\">Voir les établissements à proximité</a></li>
\t\t\t\t<li><a href=\"\">Aide</a></li>
\t\t\t\t<li><a href=\"\">A propos</a></li>
\t\t\t</ul>

\t\t</div>
       <div class=\"div-footer-divider\"></div>

            <ul class=\"ul-footer-languages\">
                    <li><a href=\"\">English</a></li>
                    <li><a href=\"\">Français</a></li>
                    <li><a href=\"\">Deutsch</a></li>
            </ul>

        <ul class=\"ul-footer-terms\">
            <li>Copyright &copy; 2016 safeSchool, Inc.</li>
            <li><a href=\"\">Mentions légales</a>&boxv;</li>
            <li><a href=\"\">Politique de confidentialité</a>&boxv;</li>
           <li><a href=\"\">Plan du site</a></li>
        </ul>
\t</footer>
        </div><!-- end /div.container-fluid -->

        <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 168
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "
    </body>
</html>
";
        
        $__internal_ed5406d5d488c17e1019b9222b87ffd44e53aa3b02ebaac94c139bf8660cee55->leave($__internal_ed5406d5d488c17e1019b9222b87ffd44e53aa3b02ebaac94c139bf8660cee55_prof);

        
        $__internal_dfd8a105f22cdb8a889f3b3e69ecc14987ca79bf92db8f158d80b2557636d607->leave($__internal_dfd8a105f22cdb8a889f3b3e69ecc14987ca79bf92db8f158d80b2557636d607_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49adeaf1b90f46852993f1562d468ca82c3efa573a9effb6fc92f68957bb1c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49adeaf1b90f46852993f1562d468ca82c3efa573a9effb6fc92f68957bb1c98->enter($__internal_49adeaf1b90f46852993f1562d468ca82c3efa573a9effb6fc92f68957bb1c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8fa1b7ecf96fecb224e3ef6498f4febaff04bb550c2819273e8536efdc03350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa1b7ecf96fecb224e3ef6498f4febaff04bb550c2819273e8536efdc03350->enter($__internal_c8fa1b7ecf96fecb224e3ef6498f4febaff04bb550c2819273e8536efdc03350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8fa1b7ecf96fecb224e3ef6498f4febaff04bb550c2819273e8536efdc03350->leave($__internal_c8fa1b7ecf96fecb224e3ef6498f4febaff04bb550c2819273e8536efdc03350_prof);

        
        $__internal_49adeaf1b90f46852993f1562d468ca82c3efa573a9effb6fc92f68957bb1c98->leave($__internal_49adeaf1b90f46852993f1562d468ca82c3efa573a9effb6fc92f68957bb1c98_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5621e6f9b8c409bb6b322a922dd5f6e9e8da7c4f49e536dd1416ff62689f09da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5621e6f9b8c409bb6b322a922dd5f6e9e8da7c4f49e536dd1416ff62689f09da->enter($__internal_5621e6f9b8c409bb6b322a922dd5f6e9e8da7c4f49e536dd1416ff62689f09da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_111b5332790f7fc4914ac7e343a743d3a8327275039dabf33b3674cafa859eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111b5332790f7fc4914ac7e343a743d3a8327275039dabf33b3674cafa859eeb->enter($__internal_111b5332790f7fc4914ac7e343a743d3a8327275039dabf33b3674cafa859eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_111b5332790f7fc4914ac7e343a743d3a8327275039dabf33b3674cafa859eeb->leave($__internal_111b5332790f7fc4914ac7e343a743d3a8327275039dabf33b3674cafa859eeb_prof);

        
        $__internal_5621e6f9b8c409bb6b322a922dd5f6e9e8da7c4f49e536dd1416ff62689f09da->leave($__internal_5621e6f9b8c409bb6b322a922dd5f6e9e8da7c4f49e536dd1416ff62689f09da_prof);

    }

    // line 110
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_9a96139a9294cbde681a47279cc9c6c458a77fd6cac23fa9bfa3110588f4c257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a96139a9294cbde681a47279cc9c6c458a77fd6cac23fa9bfa3110588f4c257->enter($__internal_9a96139a9294cbde681a47279cc9c6c458a77fd6cac23fa9bfa3110588f4c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_72f1eb6401aa7acee57c134633334b56d170cd820d93bcc5d33b2a9d0a3feb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f1eb6401aa7acee57c134633334b56d170cd820d93bcc5d33b2a9d0a3feb1a->enter($__internal_72f1eb6401aa7acee57c134633334b56d170cd820d93bcc5d33b2a9d0a3feb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_72f1eb6401aa7acee57c134633334b56d170cd820d93bcc5d33b2a9d0a3feb1a->leave($__internal_72f1eb6401aa7acee57c134633334b56d170cd820d93bcc5d33b2a9d0a3feb1a_prof);

        
        $__internal_9a96139a9294cbde681a47279cc9c6c458a77fd6cac23fa9bfa3110588f4c257->leave($__internal_9a96139a9294cbde681a47279cc9c6c458a77fd6cac23fa9bfa3110588f4c257_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ae452995d80a91be59b475e27d1e6247b36e633eb8608d8bf65e42794481403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae452995d80a91be59b475e27d1e6247b36e633eb8608d8bf65e42794481403->enter($__internal_7ae452995d80a91be59b475e27d1e6247b36e633eb8608d8bf65e42794481403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28abb93fc38b9c584250fef029b5f28d7cad7127308f5fcff80b6b29fa6cc4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28abb93fc38b9c584250fef029b5f28d7cad7127308f5fcff80b6b29fa6cc4e5->enter($__internal_28abb93fc38b9c584250fef029b5f28d7cad7127308f5fcff80b6b29fa6cc4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28abb93fc38b9c584250fef029b5f28d7cad7127308f5fcff80b6b29fa6cc4e5->leave($__internal_28abb93fc38b9c584250fef029b5f28d7cad7127308f5fcff80b6b29fa6cc4e5_prof);

        
        $__internal_7ae452995d80a91be59b475e27d1e6247b36e633eb8608d8bf65e42794481403->leave($__internal_7ae452995d80a91be59b475e27d1e6247b36e633eb8608d8bf65e42794481403_prof);

    }

    // line 115
    public function block_school_registration($context, array $blocks = array())
    {
        $__internal_dab45dcbea6c4b66ccb71cf699c219f5dcc834029b997a6a0a00ee6d1c0ab4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab45dcbea6c4b66ccb71cf699c219f5dcc834029b997a6a0a00ee6d1c0ab4c1->enter($__internal_dab45dcbea6c4b66ccb71cf699c219f5dcc834029b997a6a0a00ee6d1c0ab4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "school_registration"));

        $__internal_2044f2abca4a60622077cb5089082a3cf2920ee9bd4a145544aad63aa6316451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2044f2abca4a60622077cb5089082a3cf2920ee9bd4a145544aad63aa6316451->enter($__internal_2044f2abca4a60622077cb5089082a3cf2920ee9bd4a145544aad63aa6316451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "school_registration"));

        
        $__internal_2044f2abca4a60622077cb5089082a3cf2920ee9bd4a145544aad63aa6316451->leave($__internal_2044f2abca4a60622077cb5089082a3cf2920ee9bd4a145544aad63aa6316451_prof);

        
        $__internal_dab45dcbea6c4b66ccb71cf699c219f5dcc834029b997a6a0a00ee6d1c0ab4c1->leave($__internal_dab45dcbea6c4b66ccb71cf699c219f5dcc834029b997a6a0a00ee6d1c0ab4c1_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b944411f78e74d537ebdf38fe801ed3850dd0031c2ab3cfbcb8f5521bb51868f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b944411f78e74d537ebdf38fe801ed3850dd0031c2ab3cfbcb8f5521bb51868f->enter($__internal_b944411f78e74d537ebdf38fe801ed3850dd0031c2ab3cfbcb8f5521bb51868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_439bbbfb57499d20e68480ed463bb8ceb5700b9cfb0bacdb172afb37f00b104d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439bbbfb57499d20e68480ed463bb8ceb5700b9cfb0bacdb172afb37f00b104d->enter($__internal_439bbbfb57499d20e68480ed463bb8ceb5700b9cfb0bacdb172afb37f00b104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_439bbbfb57499d20e68480ed463bb8ceb5700b9cfb0bacdb172afb37f00b104d->leave($__internal_439bbbfb57499d20e68480ed463bb8ceb5700b9cfb0bacdb172afb37f00b104d_prof);

        
        $__internal_b944411f78e74d537ebdf38fe801ed3850dd0031c2ab3cfbcb8f5521bb51868f->leave($__internal_b944411f78e74d537ebdf38fe801ed3850dd0031c2ab3cfbcb8f5521bb51868f_prof);

    }

    public function getTemplateName()
    {
        return "general_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 168,  328 => 115,  311 => 113,  294 => 110,  277 => 13,  259 => 7,  246 => 169,  244 => 168,  239 => 166,  235 => 165,  185 => 117,  182 => 116,  180 => 115,  177 => 114,  175 => 113,  171 => 111,  169 => 110,  104 => 48,  94 => 41,  77 => 27,  62 => 14,  60 => 13,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  31 => 1,);
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
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/styless.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\" />

        {% block stylesheets %}{% endblock %}

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    \t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   \t\t<!--[if lt IE 9]>
      \t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      \t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    \t<![endif]-->
    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"bar-menu\">
                <div class=\"row\">
                    <a href=\"#\" id=\"a-activer\">Activer mon compte</a>
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-primary\" id=\"a-btn-connection\">Connexion</a>
                </div>
            </div>

\t\t<nav class=\"navbar navbar-inverse\" id=\"nav-main-menu\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#div-collapse\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\" id=\"a-logo\">
                        <img src=\"{{ asset ('assets/img/safeschoolLogoOmbree.png') }}\" width=\"10%\">
                    </a>
                </div><!-- /.navbar-header -->

                <div class=\"collapse navbar-collapse\" id=\"div-collapse\">
                        <ul class=\"nav navbar-nav\" id=\"ul-main-navbar\">
                            <li class=\"\"><a href=\"#\">Acceuil</a></li>
                            <li class=\"\"><a href=\"{{path('api_etablissement_list')}}\">Etablissements</a></li>                            

                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Documents <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" id=\"ul-snd-dropdown\">
                                    <div class=\"container\">
                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Epreuves </a> </h3></li>

                                            <ul>
                                                <li><a href=\"\">Secondaire</a></li>
                                                    <ul>
                                                        <li><a href=\"\">1<sup>er</sup> Cycle </a></li>
                                                        <li><a href=\"\">2<sup>nd</sup> Cycle</a></li>
                                                    </ul>
                                                <li><a href=\"\">Universitaire</a></li>

                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Mémoires </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Bts </a></li>
                                                <li><a href=\"\">DTS/Licence</a></li>
                                                <li><a href=\"\">Master</a></li>
                                                <li><a href=\"\">Doctorat</a></li>
                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Exposés </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Secondaire</a></li>
                                                <ul>
                                                    <li><a href=\"\">1<sup>er</sup> Cycle </a></li>
                                                    <li><a href=\"\">2<sup>nd</sup> Cycle</a></li>
                                                </ul>
                                                <li><a href=\"\">Universitaire</a></li>

                                            </ul>
                                        </ul>

                                    </div>
                                </ul>
                            </li>
                            <li class=\"\"><a href=\"#\">Exploits</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#registration_modal\" data-toggle=\"modal\" class=\"btn btn-primary\">Enregistrer votre établissement</a></li>
                        </ul>

                    <form class=\"navbar-form navbar-right\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher des établissements\" id=\"input-search\">
                            <span class=\"glyphicon glyphicon-search\" id=\"glyph-search\"></span>
                        </div>
                    </form>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.col-lg-9 -->
         </nav>

\t{% block carousel %}{% endblock %}

            <div class=\"container\">
                    {% block body %}{% endblock %}
            </div>
  {% block school_registration %}{% endblock %}
  {% include 'APIEtablissementBundle::etablissement/registration.html.twig' %}
\t<footer>
\t\t<div class=\"container\">
\t\t\t<ul class=\"ul-footer-list\">
                <li><h3> ACTIVITES </h3></li>
\t\t\t\t<li><a href=\"\">Activer mon compte </a></li>
\t\t\t\t<li><a href=\"\">Etablissements</a></li>
\t\t\t\t<li><a href=\"\">Documents</a></li>
\t\t\t\t<li><a href=\"\">Exploits</a></li>
\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t<li><a href=\"\">Contactez-nous</a></li>
\t\t\t</ul>

            <ul class=\"ul-footer-list\">
                <li><h3> SERVICES </h3></li>
                <li><a href=\"\">Activer mon compte </a></li>
                <li><a href=\"\">Etablissements</a></li>
                <li><a href=\"\">Documents</a></li>
                <li><a href=\"\">Exploits</a></li>
                <li><a href=\"\">Forum</a></li>
                <li><a href=\"\">Contactez-nous</a></li>
            </ul>

\t\t\t<ul class=\"ul-footer-list\">
                <li><h3> AIDE & SUPPORT </h3></li>
\t\t\t\t<li><a href=\"\">Avis & Suggestions</a></li>
\t\t\t\t<li><a href=\"\">Voir les établissements à proximité</a></li>
\t\t\t\t<li><a href=\"\">Aide</a></li>
\t\t\t\t<li><a href=\"\">A propos</a></li>
\t\t\t</ul>

\t\t</div>
       <div class=\"div-footer-divider\"></div>

            <ul class=\"ul-footer-languages\">
                    <li><a href=\"\">English</a></li>
                    <li><a href=\"\">Français</a></li>
                    <li><a href=\"\">Deutsch</a></li>
            </ul>

        <ul class=\"ul-footer-terms\">
            <li>Copyright &copy; 2016 safeSchool, Inc.</li>
            <li><a href=\"\">Mentions légales</a>&boxv;</li>
            <li><a href=\"\">Politique de confidentialité</a>&boxv;</li>
           <li><a href=\"\">Plan du site</a></li>
        </ul>
\t</footer>
        </div><!-- end /div.container-fluid -->

        <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-3.1.0.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.js') }}\"></script>

        {% block javascripts %}{% endblock %}

    </body>
</html>
", "general_layout.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\app\\Resources\\views\\general_layout.html.twig");
    }
}
