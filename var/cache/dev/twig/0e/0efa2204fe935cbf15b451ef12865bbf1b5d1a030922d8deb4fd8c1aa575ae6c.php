<?php

/* APIEtablissementBundle:etablissement:etablissement_layout.html.twig */
class __TwigTemplate_0a73e4385cd055468b081c476ca9c690e246e26e2ea0691fbdfb8efc31361dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::general_layout.html.twig", "APIEtablissementBundle:etablissement:etablissement_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheetsEtablissement' => array($this, 'block_stylesheetsEtablissement'),
            'body' => array($this, 'block_body'),
            'bodyEtablissement' => array($this, 'block_bodyEtablissement'),
            'javascripts' => array($this, 'block_javascripts'),
            'scriptEtablissement' => array($this, 'block_scriptEtablissement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::general_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a8b953872c218e8c8fde23ef80063664aa126dd16b31194fb7871d8ac8d548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a8b953872c218e8c8fde23ef80063664aa126dd16b31194fb7871d8ac8d548->enter($__internal_49a8b953872c218e8c8fde23ef80063664aa126dd16b31194fb7871d8ac8d548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:etablissement_layout.html.twig"));

        $__internal_b98931ac0748d7fad2256fed390a7d18eda11dbe7ed4e8fcb5d9bacf4c11e9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98931ac0748d7fad2256fed390a7d18eda11dbe7ed4e8fcb5d9bacf4c11e9d2->enter($__internal_b98931ac0748d7fad2256fed390a7d18eda11dbe7ed4e8fcb5d9bacf4c11e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:etablissement_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a8b953872c218e8c8fde23ef80063664aa126dd16b31194fb7871d8ac8d548->leave($__internal_49a8b953872c218e8c8fde23ef80063664aa126dd16b31194fb7871d8ac8d548_prof);

        
        $__internal_b98931ac0748d7fad2256fed390a7d18eda11dbe7ed4e8fcb5d9bacf4c11e9d2->leave($__internal_b98931ac0748d7fad2256fed390a7d18eda11dbe7ed4e8fcb5d9bacf4c11e9d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_939b612f5a8d70694934db011464a300fbcb93cca58681f282a0697b1ff80e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939b612f5a8d70694934db011464a300fbcb93cca58681f282a0697b1ff80e4c->enter($__internal_939b612f5a8d70694934db011464a300fbcb93cca58681f282a0697b1ff80e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09ef995b66b68225cd1e11460c71b2a93316a83085a43ac235cc1603efac7ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ef995b66b68225cd1e11460c71b2a93316a83085a43ac235cc1603efac7ef6->enter($__internal_09ef995b66b68225cd1e11460c71b2a93316a83085a43ac235cc1603efac7ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles_etablissement.css"), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->displayBlock('stylesheetsEtablissement', $context, $blocks);
        
        $__internal_09ef995b66b68225cd1e11460c71b2a93316a83085a43ac235cc1603efac7ef6->leave($__internal_09ef995b66b68225cd1e11460c71b2a93316a83085a43ac235cc1603efac7ef6_prof);

        
        $__internal_939b612f5a8d70694934db011464a300fbcb93cca58681f282a0697b1ff80e4c->leave($__internal_939b612f5a8d70694934db011464a300fbcb93cca58681f282a0697b1ff80e4c_prof);

    }

    public function block_stylesheetsEtablissement($context, array $blocks = array())
    {
        $__internal_1931845ef3df05f632f05864d1ae02e9c536d13813a710f9af79a53af7fa9f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1931845ef3df05f632f05864d1ae02e9c536d13813a710f9af79a53af7fa9f37->enter($__internal_1931845ef3df05f632f05864d1ae02e9c536d13813a710f9af79a53af7fa9f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheetsEtablissement"));

        $__internal_be22ee99b1e0c7a20158be618b101fba1972221b3988562b8825f903bdefe686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be22ee99b1e0c7a20158be618b101fba1972221b3988562b8825f903bdefe686->enter($__internal_be22ee99b1e0c7a20158be618b101fba1972221b3988562b8825f903bdefe686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheetsEtablissement"));

        
        $__internal_be22ee99b1e0c7a20158be618b101fba1972221b3988562b8825f903bdefe686->leave($__internal_be22ee99b1e0c7a20158be618b101fba1972221b3988562b8825f903bdefe686_prof);

        
        $__internal_1931845ef3df05f632f05864d1ae02e9c536d13813a710f9af79a53af7fa9f37->leave($__internal_1931845ef3df05f632f05864d1ae02e9c536d13813a710f9af79a53af7fa9f37_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_096ca61f8151086ca66969fb0e9d3d617544b2d0d9cc26cde8d53d441c652ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096ca61f8151086ca66969fb0e9d3d617544b2d0d9cc26cde8d53d441c652ea7->enter($__internal_096ca61f8151086ca66969fb0e9d3d617544b2d0d9cc26cde8d53d441c652ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c1bc7c0f02850e166c837bc2c4452248616a9761992bbd64196045e4ab2d105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1bc7c0f02850e166c837bc2c4452248616a9761992bbd64196045e4ab2d105->enter($__internal_8c1bc7c0f02850e166c837bc2c4452248616a9761992bbd64196045e4ab2d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
 <div class=\"row\" id=\"div-tout\">


       <!-- side bar gauche -->

       <div class=\"col-md-2\" id=\"div-side-bar\">
              <div class=\"row\" id=\"div-logo\">
                      <div class=\"col-md-4 avpLogo\" >

                      </div>
                      <div class=\"col-md-4\" >
                        <!--<img src=  id=\"logo\" width=\"100\" height=\"100\">-->
                      </div>


                        <div class=\"col-md-4 avpLogo\" id=\"apLogo\">

                        </div>
              </div>

<!--
                  <div>

                        <p id=\"p-nomEtablissement\">

                        </p>

                      <img src=  id=\"img-etab\" width=\"250\" height=\"200\">
                  </div>
-->
                  <div id=\"nte\">Noter l'etablissement</div>
                  <div id=\"div-trait\"></div>
                  <div id=\"div-historique\">
                      <span id=\"nm\">jean piaget</span>
                  </div>

                  <a class=\"btn btn-default\" id=\"btn\" href=\"#\" >S'INSCRIRE CHEZ NOUS</a>

                  <p id=\"p-avEvents\">
                    Evenements
                  </p>

                  <!-- events -->

            <div id=\"div-events\">

              <!-- 1er event -->

              <div id=\"div-event1\">
                <div class=\"grandDiv-event\">
                  <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                  <div class=\"petitDiv-event context-dark\">
                    <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                  </div>
                </div>
                <div class=\"row div-infoEvent\">
                  <div class=\"col-md-3 div-infoDate\">
                    <p>

                    </p>
                    <p>


                    </p>

                  </div>
                  <div class=\"col-md-7\" id=\"div-descEvent\">
                    <p id=\"p-titreEvents\">

                    </p>


                  </div>
                </div>
              </div>

              <div class=\"entreEvent\">

              </div>

              <!-- 2eme event -->

              <div id=\"div-event2\">
                <div class=\"grandDiv-event\">
                  <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                  <div class=\"petitDiv-event context-dark\">
                    <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                  </div>
                </div>
                <div class=\"row div-infoEvent\">
                  <div class=\"col-md-3 div-infoDate\">
                    <p>

                    </p>
                    <p>


                    </p>

                  </div>
                  <div class=\"col-md-7\" id=\"div-descEvent\">
                    <p id=\"p-titreEvents\">

                    </p>


                  </div>
                </div>
              </div>


                            <div class=\"entreEvent\">

                            </div>

                            <!-- 3eme event -->

                            <div id=\"div-event3\">
                              <div class=\"grandDiv-event\">
                                <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                                <div class=\"petitDiv-event context-dark\">
                                  <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                                </div>
                              </div>
                              <div class=\"row div-infoEvent\">
                                <div class=\"col-md-3 div-infoDate\">
                                  <p>

                                  </p>
                                <p>


                                  </p>

                                </div>
                                <div class=\"col-md-7\" id=\"div-descEvent\">
                                  <p id=\"p-titreEvents\">

                                  </p>


                                </div>
                              </div>
                            </div>

            </div>
        </div>



      <div class=\"col-md-6\" id=\"div-banniere\">
          <!-- Div banniere -->
        <div class=\"div-img_banniere\" id=\"div-img_banniere\">
          <img src=  id=\"img-banniere\" height=\"500\" width=\"1075\">
        </div>

        <!-- Div contenu -->

        <div class=\"\">
          ";
        // line 170
        $this->displayBlock('bodyEtablissement', $context, $blocks);
        // line 171
        echo "        </div>

      </div>




</div>
";
        
        $__internal_8c1bc7c0f02850e166c837bc2c4452248616a9761992bbd64196045e4ab2d105->leave($__internal_8c1bc7c0f02850e166c837bc2c4452248616a9761992bbd64196045e4ab2d105_prof);

        
        $__internal_096ca61f8151086ca66969fb0e9d3d617544b2d0d9cc26cde8d53d441c652ea7->leave($__internal_096ca61f8151086ca66969fb0e9d3d617544b2d0d9cc26cde8d53d441c652ea7_prof);

    }

    // line 170
    public function block_bodyEtablissement($context, array $blocks = array())
    {
        $__internal_b25c81513aabc04a2bd408ec8fb41653d4c54416011371d4afc7921ce3fb1f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25c81513aabc04a2bd408ec8fb41653d4c54416011371d4afc7921ce3fb1f82->enter($__internal_b25c81513aabc04a2bd408ec8fb41653d4c54416011371d4afc7921ce3fb1f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyEtablissement"));

        $__internal_09b696de6a9f4b367020d83cfdf0aa04cfa685329f89eea94ea7e1ad9ac5f193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b696de6a9f4b367020d83cfdf0aa04cfa685329f89eea94ea7e1ad9ac5f193->enter($__internal_09b696de6a9f4b367020d83cfdf0aa04cfa685329f89eea94ea7e1ad9ac5f193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyEtablissement"));

        
        $__internal_09b696de6a9f4b367020d83cfdf0aa04cfa685329f89eea94ea7e1ad9ac5f193->leave($__internal_09b696de6a9f4b367020d83cfdf0aa04cfa685329f89eea94ea7e1ad9ac5f193_prof);

        
        $__internal_b25c81513aabc04a2bd408ec8fb41653d4c54416011371d4afc7921ce3fb1f82->leave($__internal_b25c81513aabc04a2bd408ec8fb41653d4c54416011371d4afc7921ce3fb1f82_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b8de4b9120fb7bd02503fa2cc5fdd8fba5ccde426386118ff2f318d34abe01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8de4b9120fb7bd02503fa2cc5fdd8fba5ccde426386118ff2f318d34abe01f->enter($__internal_5b8de4b9120fb7bd02503fa2cc5fdd8fba5ccde426386118ff2f318d34abe01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffeb31b007cc15d50d55214e4a141c71d28a43e2fba192bd565fcaf1f4f64d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffeb31b007cc15d50d55214e4a141c71d28a43e2fba192bd565fcaf1f4f64d05->enter($__internal_ffeb31b007cc15d50d55214e4a141c71d28a43e2fba192bd565fcaf1f4f64d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "  ";
        $this->displayBlock('scriptEtablissement', $context, $blocks);
        
        $__internal_ffeb31b007cc15d50d55214e4a141c71d28a43e2fba192bd565fcaf1f4f64d05->leave($__internal_ffeb31b007cc15d50d55214e4a141c71d28a43e2fba192bd565fcaf1f4f64d05_prof);

        
        $__internal_5b8de4b9120fb7bd02503fa2cc5fdd8fba5ccde426386118ff2f318d34abe01f->leave($__internal_5b8de4b9120fb7bd02503fa2cc5fdd8fba5ccde426386118ff2f318d34abe01f_prof);

    }

    public function block_scriptEtablissement($context, array $blocks = array())
    {
        $__internal_a5139d7ad6b246c527b7d9e764cc84b56b649c21c2fba562600473511f23c8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5139d7ad6b246c527b7d9e764cc84b56b649c21c2fba562600473511f23c8a2->enter($__internal_a5139d7ad6b246c527b7d9e764cc84b56b649c21c2fba562600473511f23c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scriptEtablissement"));

        $__internal_d379afbedf476a4d2d5dd7b0d7594f9a73351a4c7507acd14a4be90eedae6ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d379afbedf476a4d2d5dd7b0d7594f9a73351a4c7507acd14a4be90eedae6ec8->enter($__internal_d379afbedf476a4d2d5dd7b0d7594f9a73351a4c7507acd14a4be90eedae6ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scriptEtablissement"));

        
        $__internal_d379afbedf476a4d2d5dd7b0d7594f9a73351a4c7507acd14a4be90eedae6ec8->leave($__internal_d379afbedf476a4d2d5dd7b0d7594f9a73351a4c7507acd14a4be90eedae6ec8_prof);

        
        $__internal_a5139d7ad6b246c527b7d9e764cc84b56b649c21c2fba562600473511f23c8a2->leave($__internal_a5139d7ad6b246c527b7d9e764cc84b56b649c21c2fba562600473511f23c8a2_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:etablissement:etablissement_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 182,  293 => 181,  276 => 170,  258 => 171,  256 => 170,  94 => 10,  85 => 9,  59 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::general_layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/styles_etablissement.css') }}\">
    {% block stylesheetsEtablissement %}{% endblock stylesheetsEtablissement %}
{% endblock stylesheets %}


{% block body %}

 <div class=\"row\" id=\"div-tout\">


       <!-- side bar gauche -->

       <div class=\"col-md-2\" id=\"div-side-bar\">
              <div class=\"row\" id=\"div-logo\">
                      <div class=\"col-md-4 avpLogo\" >

                      </div>
                      <div class=\"col-md-4\" >
                        <!--<img src=  id=\"logo\" width=\"100\" height=\"100\">-->
                      </div>


                        <div class=\"col-md-4 avpLogo\" id=\"apLogo\">

                        </div>
              </div>

<!--
                  <div>

                        <p id=\"p-nomEtablissement\">

                        </p>

                      <img src=  id=\"img-etab\" width=\"250\" height=\"200\">
                  </div>
-->
                  <div id=\"nte\">Noter l'etablissement</div>
                  <div id=\"div-trait\"></div>
                  <div id=\"div-historique\">
                      <span id=\"nm\">jean piaget</span>
                  </div>

                  <a class=\"btn btn-default\" id=\"btn\" href=\"#\" >S'INSCRIRE CHEZ NOUS</a>

                  <p id=\"p-avEvents\">
                    Evenements
                  </p>

                  <!-- events -->

            <div id=\"div-events\">

              <!-- 1er event -->

              <div id=\"div-event1\">
                <div class=\"grandDiv-event\">
                  <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                  <div class=\"petitDiv-event context-dark\">
                    <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                  </div>
                </div>
                <div class=\"row div-infoEvent\">
                  <div class=\"col-md-3 div-infoDate\">
                    <p>

                    </p>
                    <p>


                    </p>

                  </div>
                  <div class=\"col-md-7\" id=\"div-descEvent\">
                    <p id=\"p-titreEvents\">

                    </p>


                  </div>
                </div>
              </div>

              <div class=\"entreEvent\">

              </div>

              <!-- 2eme event -->

              <div id=\"div-event2\">
                <div class=\"grandDiv-event\">
                  <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                  <div class=\"petitDiv-event context-dark\">
                    <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                  </div>
                </div>
                <div class=\"row div-infoEvent\">
                  <div class=\"col-md-3 div-infoDate\">
                    <p>

                    </p>
                    <p>


                    </p>

                  </div>
                  <div class=\"col-md-7\" id=\"div-descEvent\">
                    <p id=\"p-titreEvents\">

                    </p>


                  </div>
                </div>
              </div>


                            <div class=\"entreEvent\">

                            </div>

                            <!-- 3eme event -->

                            <div id=\"div-event3\">
                              <div class=\"grandDiv-event\">
                                <img src=  class=\"img-event\" width=\"250\" height=\"365\">
                                <div class=\"petitDiv-event context-dark\">
                                  <a href=\"#\" class=\"btn btn-primary\">Allez dans le journal</a>
                                </div>
                              </div>
                              <div class=\"row div-infoEvent\">
                                <div class=\"col-md-3 div-infoDate\">
                                  <p>

                                  </p>
                                <p>


                                  </p>

                                </div>
                                <div class=\"col-md-7\" id=\"div-descEvent\">
                                  <p id=\"p-titreEvents\">

                                  </p>


                                </div>
                              </div>
                            </div>

            </div>
        </div>



      <div class=\"col-md-6\" id=\"div-banniere\">
          <!-- Div banniere -->
        <div class=\"div-img_banniere\" id=\"div-img_banniere\">
          <img src=  id=\"img-banniere\" height=\"500\" width=\"1075\">
        </div>

        <!-- Div contenu -->

        <div class=\"\">
          {% block bodyEtablissement %}{% endblock %}
        </div>

      </div>




</div>
{% endblock body %}

{% block javascripts %}
  {% block scriptEtablissement %}{% endblock scriptEtablissement %}
{% endblock %}
", "APIEtablissementBundle:etablissement:etablissement_layout.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/etablissement/etablissement_layout.html.twig");
    }
}
