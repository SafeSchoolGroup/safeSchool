<?php

/* ::general_layout.html.twig */
class __TwigTemplate_83771bbeadc571536f33d4c8fcc07180ff7fc96f353a5bf75e3542cfe56415eb extends Twig_Template
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
        $__internal_cd5bf4c13ca8ecb042f1158c155a425e910e84090fd1449799f5af58624eee69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5bf4c13ca8ecb042f1158c155a425e910e84090fd1449799f5af58624eee69->enter($__internal_cd5bf4c13ca8ecb042f1158c155a425e910e84090fd1449799f5af58624eee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::general_layout.html.twig"));

        $__internal_486f8162a77af479d3f8d2d58ab08c5a4ae3fef4a4ab812a5ec789c54b95db86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486f8162a77af479d3f8d2d58ab08c5a4ae3fef4a4ab812a5ec789c54b95db86->enter($__internal_486f8162a77af479d3f8d2d58ab08c5a4ae3fef4a4ab812a5ec789c54b95db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::general_layout.html.twig"));

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
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Etablissements <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <div class=\"container\">
                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Secondaires </a> </h3></li> <!--  enseignement général -->

                                            <ul>
                                                <li><a href=\"\">Public</a></li>
                                                <li><a href=\"\">Privé</a></li>
                                                    <ul>
                                                        <li><a href=\"\">Catholique </a></li>
                                                        <li><a href=\"\">Coranique</a></li>
                                                        <li><a href=\"\">Protestant</a></li>
                                                        <li><a href=\"\">LaÏc</a></li>
                                                        <li><a href=\"\">Social</a></li>
                                                    </ul>
                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Lycées </a> </h3></li>
                                                <ul>
                                                    <li><a href=\"\">Agricole </a></li>
                                                    <li><a href=\"\">Technique</a></li>
                                                </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Universités </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Ecole </a></li>
                                                <li><a href=\"\">Faculté</a></li>
                                                <li><a href=\"\">Institut</a></li>
                                            </ul>
                                        </ul>

                                    </div>
                                </ul>
                            </li>

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
        // line 149
        $this->displayBlock('carousel', $context, $blocks);
        // line 150
        echo "
            <div class=\"container\">
                    ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 153
        echo "            </div>
  ";
        // line 154
        $this->displayBlock('school_registration', $context, $blocks);
        // line 155
        echo "  ";
        $this->loadTemplate("APIEtablissementBundle::etablissement/registration.html.twig", "::general_layout.html.twig", 155)->display($context);
        // line 156
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
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 208
        echo "
    </body>
</html>
";
        
        $__internal_cd5bf4c13ca8ecb042f1158c155a425e910e84090fd1449799f5af58624eee69->leave($__internal_cd5bf4c13ca8ecb042f1158c155a425e910e84090fd1449799f5af58624eee69_prof);

        
        $__internal_486f8162a77af479d3f8d2d58ab08c5a4ae3fef4a4ab812a5ec789c54b95db86->leave($__internal_486f8162a77af479d3f8d2d58ab08c5a4ae3fef4a4ab812a5ec789c54b95db86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75847f311bf7033d0d730e80c2659d44eed5464af7065a0fd75a92843e799c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75847f311bf7033d0d730e80c2659d44eed5464af7065a0fd75a92843e799c8d->enter($__internal_75847f311bf7033d0d730e80c2659d44eed5464af7065a0fd75a92843e799c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8ad6746cd92fb841a6c23f35e2435df04bd2eb87c6dc7241e5c6f76d9251261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ad6746cd92fb841a6c23f35e2435df04bd2eb87c6dc7241e5c6f76d9251261->enter($__internal_f8ad6746cd92fb841a6c23f35e2435df04bd2eb87c6dc7241e5c6f76d9251261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8ad6746cd92fb841a6c23f35e2435df04bd2eb87c6dc7241e5c6f76d9251261->leave($__internal_f8ad6746cd92fb841a6c23f35e2435df04bd2eb87c6dc7241e5c6f76d9251261_prof);

        
        $__internal_75847f311bf7033d0d730e80c2659d44eed5464af7065a0fd75a92843e799c8d->leave($__internal_75847f311bf7033d0d730e80c2659d44eed5464af7065a0fd75a92843e799c8d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_074199b71017d2335b2e40d15f79ff84e3e80bc761ca65f7ad2b64dab9fae675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074199b71017d2335b2e40d15f79ff84e3e80bc761ca65f7ad2b64dab9fae675->enter($__internal_074199b71017d2335b2e40d15f79ff84e3e80bc761ca65f7ad2b64dab9fae675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4091d906e8401a3a1bf28f8b252a28a04979152825226dc5210f8345c98d3d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4091d906e8401a3a1bf28f8b252a28a04979152825226dc5210f8345c98d3d9a->enter($__internal_4091d906e8401a3a1bf28f8b252a28a04979152825226dc5210f8345c98d3d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4091d906e8401a3a1bf28f8b252a28a04979152825226dc5210f8345c98d3d9a->leave($__internal_4091d906e8401a3a1bf28f8b252a28a04979152825226dc5210f8345c98d3d9a_prof);

        
        $__internal_074199b71017d2335b2e40d15f79ff84e3e80bc761ca65f7ad2b64dab9fae675->leave($__internal_074199b71017d2335b2e40d15f79ff84e3e80bc761ca65f7ad2b64dab9fae675_prof);

    }

    // line 149
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_73bae6e6841e012f46cd28da742e17000a459a3637bb8bbc2c3f53c4e067b606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bae6e6841e012f46cd28da742e17000a459a3637bb8bbc2c3f53c4e067b606->enter($__internal_73bae6e6841e012f46cd28da742e17000a459a3637bb8bbc2c3f53c4e067b606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_07cb871af985fbd63431a2485a78f0b304f07012148fd799bdfb85e903f81486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cb871af985fbd63431a2485a78f0b304f07012148fd799bdfb85e903f81486->enter($__internal_07cb871af985fbd63431a2485a78f0b304f07012148fd799bdfb85e903f81486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_07cb871af985fbd63431a2485a78f0b304f07012148fd799bdfb85e903f81486->leave($__internal_07cb871af985fbd63431a2485a78f0b304f07012148fd799bdfb85e903f81486_prof);

        
        $__internal_73bae6e6841e012f46cd28da742e17000a459a3637bb8bbc2c3f53c4e067b606->leave($__internal_73bae6e6841e012f46cd28da742e17000a459a3637bb8bbc2c3f53c4e067b606_prof);

    }

    // line 152
    public function block_body($context, array $blocks = array())
    {
        $__internal_442ec8c94837c5c7189e0799b9ed781f91a79602244bc74301d0337a3b63358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442ec8c94837c5c7189e0799b9ed781f91a79602244bc74301d0337a3b63358b->enter($__internal_442ec8c94837c5c7189e0799b9ed781f91a79602244bc74301d0337a3b63358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6ba7d8e89bafaff3a0b197c7d1de1a84e16ba23b3017120e93bf07fd1132796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ba7d8e89bafaff3a0b197c7d1de1a84e16ba23b3017120e93bf07fd1132796->enter($__internal_b6ba7d8e89bafaff3a0b197c7d1de1a84e16ba23b3017120e93bf07fd1132796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6ba7d8e89bafaff3a0b197c7d1de1a84e16ba23b3017120e93bf07fd1132796->leave($__internal_b6ba7d8e89bafaff3a0b197c7d1de1a84e16ba23b3017120e93bf07fd1132796_prof);

        
        $__internal_442ec8c94837c5c7189e0799b9ed781f91a79602244bc74301d0337a3b63358b->leave($__internal_442ec8c94837c5c7189e0799b9ed781f91a79602244bc74301d0337a3b63358b_prof);

    }

    // line 154
    public function block_school_registration($context, array $blocks = array())
    {
        $__internal_87b4a85527ac45ac77d63304595c9d95d00c36956ac44aa4e02dec401e69cbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b4a85527ac45ac77d63304595c9d95d00c36956ac44aa4e02dec401e69cbd5->enter($__internal_87b4a85527ac45ac77d63304595c9d95d00c36956ac44aa4e02dec401e69cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "school_registration"));

        $__internal_7f877cb54b81bc12f558a713da63b7d655abbad69d7ac51c19e4f41960ba413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f877cb54b81bc12f558a713da63b7d655abbad69d7ac51c19e4f41960ba413e->enter($__internal_7f877cb54b81bc12f558a713da63b7d655abbad69d7ac51c19e4f41960ba413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "school_registration"));

        
        $__internal_7f877cb54b81bc12f558a713da63b7d655abbad69d7ac51c19e4f41960ba413e->leave($__internal_7f877cb54b81bc12f558a713da63b7d655abbad69d7ac51c19e4f41960ba413e_prof);

        
        $__internal_87b4a85527ac45ac77d63304595c9d95d00c36956ac44aa4e02dec401e69cbd5->leave($__internal_87b4a85527ac45ac77d63304595c9d95d00c36956ac44aa4e02dec401e69cbd5_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_792748771b0e33f2f7a03d89dd842e2e5adcd3442fd76c8f97fe3f509e79c1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792748771b0e33f2f7a03d89dd842e2e5adcd3442fd76c8f97fe3f509e79c1bd->enter($__internal_792748771b0e33f2f7a03d89dd842e2e5adcd3442fd76c8f97fe3f509e79c1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_58bff627c73fba4a1b85a08568eb11af0936317ef2f2e2f9ffb2e27c4da1191e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bff627c73fba4a1b85a08568eb11af0936317ef2f2e2f9ffb2e27c4da1191e->enter($__internal_58bff627c73fba4a1b85a08568eb11af0936317ef2f2e2f9ffb2e27c4da1191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_58bff627c73fba4a1b85a08568eb11af0936317ef2f2e2f9ffb2e27c4da1191e->leave($__internal_58bff627c73fba4a1b85a08568eb11af0936317ef2f2e2f9ffb2e27c4da1191e_prof);

        
        $__internal_792748771b0e33f2f7a03d89dd842e2e5adcd3442fd76c8f97fe3f509e79c1bd->leave($__internal_792748771b0e33f2f7a03d89dd842e2e5adcd3442fd76c8f97fe3f509e79c1bd_prof);

    }

    public function getTemplateName()
    {
        return "::general_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 207,  364 => 154,  347 => 152,  330 => 149,  313 => 13,  295 => 7,  282 => 208,  280 => 207,  275 => 205,  271 => 204,  221 => 156,  218 => 155,  216 => 154,  213 => 153,  211 => 152,  207 => 150,  205 => 149,  94 => 41,  77 => 27,  62 => 14,  60 => 13,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  31 => 1,);
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
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Etablissements <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <div class=\"container\">
                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Secondaires </a> </h3></li> <!--  enseignement général -->

                                            <ul>
                                                <li><a href=\"\">Public</a></li>
                                                <li><a href=\"\">Privé</a></li>
                                                    <ul>
                                                        <li><a href=\"\">Catholique </a></li>
                                                        <li><a href=\"\">Coranique</a></li>
                                                        <li><a href=\"\">Protestant</a></li>
                                                        <li><a href=\"\">LaÏc</a></li>
                                                        <li><a href=\"\">Social</a></li>
                                                    </ul>
                                            </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Lycées </a> </h3></li>
                                                <ul>
                                                    <li><a href=\"\">Agricole </a></li>
                                                    <li><a href=\"\">Technique</a></li>
                                                </ul>
                                        </ul>

                                        <ul class=\"submenu-list\">
                                            <li><h3><a href=\"\">Universités </a> </h3></li>
                                            <ul>
                                                <li><a href=\"\">Ecole </a></li>
                                                <li><a href=\"\">Faculté</a></li>
                                                <li><a href=\"\">Institut</a></li>
                                            </ul>
                                        </ul>

                                    </div>
                                </ul>
                            </li>

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
", "::general_layout.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\app/Resources\\views/general_layout.html.twig");
    }
}
