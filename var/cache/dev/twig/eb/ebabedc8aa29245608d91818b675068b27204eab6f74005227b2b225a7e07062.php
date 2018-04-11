<?php

/* APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig */
class __TwigTemplate_94080a0840360f0fc6f7244808c652ded9a35f2f242a8ed56e73ac004c0df913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("general_layout.html.twig", "APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95f7a14df063291f6bf83c5bbd1f5739b867408864e5571abb5c1beff77e11e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f7a14df063291f6bf83c5bbd1f5739b867408864e5571abb5c1beff77e11e2->enter($__internal_95f7a14df063291f6bf83c5bbd1f5739b867408864e5571abb5c1beff77e11e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig"));

        $__internal_9c7312002b949d8973f58b7358f774e06e0ea5ffa823e59a96339146e31dc3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7312002b949d8973f58b7358f774e06e0ea5ffa823e59a96339146e31dc3e6->enter($__internal_9c7312002b949d8973f58b7358f774e06e0ea5ffa823e59a96339146e31dc3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f7a14df063291f6bf83c5bbd1f5739b867408864e5571abb5c1beff77e11e2->leave($__internal_95f7a14df063291f6bf83c5bbd1f5739b867408864e5571abb5c1beff77e11e2_prof);

        
        $__internal_9c7312002b949d8973f58b7358f774e06e0ea5ffa823e59a96339146e31dc3e6->leave($__internal_9c7312002b949d8973f58b7358f774e06e0ea5ffa823e59a96339146e31dc3e6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d679d1b67a2f73ab42e5ecf778fa0e198775af5eed35b8c36b754a73464f291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d679d1b67a2f73ab42e5ecf778fa0e198775af5eed35b8c36b754a73464f291->enter($__internal_3d679d1b67a2f73ab42e5ecf778fa0e198775af5eed35b8c36b754a73464f291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a0ebde488fef40740e3c6cdaba554a90f1790005f51cb70243c8021d259d102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0ebde488fef40740e3c6cdaba554a90f1790005f51cb70243c8021d259d102->enter($__internal_3a0ebde488fef40740e3c6cdaba554a90f1790005f51cb70243c8021d259d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style_etablissementList.css"), "html", null, true);
        echo "\"/>
  ";
        
        $__internal_3a0ebde488fef40740e3c6cdaba554a90f1790005f51cb70243c8021d259d102->leave($__internal_3a0ebde488fef40740e3c6cdaba554a90f1790005f51cb70243c8021d259d102_prof);

        
        $__internal_3d679d1b67a2f73ab42e5ecf778fa0e198775af5eed35b8c36b754a73464f291->leave($__internal_3d679d1b67a2f73ab42e5ecf778fa0e198775af5eed35b8c36b754a73464f291_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e32692b847e88fd1e3e35aba83f156f126ead60efd72cc6883de966be3acd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e32692b847e88fd1e3e35aba83f156f126ead60efd72cc6883de966be3acd59->enter($__internal_7e32692b847e88fd1e3e35aba83f156f126ead60efd72cc6883de966be3acd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_204f6dae9d27b00eede4c4ff924ee0c8df2b4043a2f6456bd6c19cf3c892634a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204f6dae9d27b00eede4c4ff924ee0c8df2b4043a2f6456bd6c19cf3c892634a->enter($__internal_204f6dae9d27b00eede4c4ff924ee0c8df2b4043a2f6456bd6c19cf3c892634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\" class=\"z-index: 2\">
    <section id=\"top-section\" class=\"container-fluid padding-top-50 padding-bottom-mob-0\">
      <div class=\"col-sm-12\">
        <div class=\" text-center \">
          <br>
          <h2>
            Liste des ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etablissements"] ?? $this->getContext($context, "etablissements")), 0, array(), "array"), "niveauEtablissement", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etablissements"] ?? $this->getContext($context, "etablissements")), 0, array(), "array"), "statutEtablissement", array()), "html", null, true);
        echo "
          </h2>
        </div>
        <div class=\"panel-body padding-bottom-50 padding-bottom-mob-0 \">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etablissements"] ?? $this->getContext($context, "etablissements")));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 19
            echo "          <div class=\"challenge col-xs-12 col-sm-4 col-md-4 challenge-holder \" data-unique=\"challenge-6\">
            <a href=\"#\" class=\"challenge-wrap\">
              <div class=\"embed-responsive embed-responsive-16by9 radius\">
                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/spr.jpg"), "html", null, true);
            echo "\" title=\"\" class=\"embed-responsive-item\">
              </div>
              <div class=\"caption clearfix\" style=\"background-color:#fff;\">
                <div class=\"caption-title font-head\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "nom", array()), "html", null, true);
            echo "</div>
                <div class=\"caption-body is-truncated\" style=\"height: 80px; word-wrap: break-word;\">
                  <p><b style=\"color:#999\">Ville:</b> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "adresseVille", array()), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;&nbsp;
                    <b style=\"color:#999\">Rue:</b> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "adresseRue", array()), "html", null, true);
            echo " <br>
                    <b style=\"color:#999\">Tel:</b> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "telephone1", array()), "html", null, true);
            echo " <br>
                    <a href=\"#\">Note</a>
                  </p>
                  <p><a href=\"#\" class=\"btn btn-inscription\">Inscription</a></p>
                </div>
              </div>
            </a>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        </div>
        </div>
    </section>
  </div>

  ";
        
        $__internal_204f6dae9d27b00eede4c4ff924ee0c8df2b4043a2f6456bd6c19cf3c892634a->leave($__internal_204f6dae9d27b00eede4c4ff924ee0c8df2b4043a2f6456bd6c19cf3c892634a_prof);

        
        $__internal_7e32692b847e88fd1e3e35aba83f156f126ead60efd72cc6883de966be3acd59->leave($__internal_7e32692b847e88fd1e3e35aba83f156f126ead60efd72cc6883de966be3acd59_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71de6a6497167e9e40ecbc26abef11a9366a96075ca583669e30246c4408de9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71de6a6497167e9e40ecbc26abef11a9366a96075ca583669e30246c4408de9e->enter($__internal_71de6a6497167e9e40ecbc26abef11a9366a96075ca583669e30246c4408de9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86560a3a805f7fd3b67a69ff30e03dcb13c0ecbc11e76194289b8ec5acc3cc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86560a3a805f7fd3b67a69ff30e03dcb13c0ecbc11e76194289b8ec5acc3cc1e->enter($__internal_86560a3a805f7fd3b67a69ff30e03dcb13c0ecbc11e76194289b8ec5acc3cc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/etablissementJs.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
  ";
        
        $__internal_86560a3a805f7fd3b67a69ff30e03dcb13c0ecbc11e76194289b8ec5acc3cc1e->leave($__internal_86560a3a805f7fd3b67a69ff30e03dcb13c0ecbc11e76194289b8ec5acc3cc1e_prof);

        
        $__internal_71de6a6497167e9e40ecbc26abef11a9366a96075ca583669e30246c4408de9e->leave($__internal_71de6a6497167e9e40ecbc26abef11a9366a96075ca583669e30246c4408de9e_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  149 => 46,  133 => 38,  118 => 29,  114 => 28,  110 => 27,  105 => 25,  99 => 22,  94 => 19,  90 => 18,  81 => 14,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'general_layout.html.twig' %}

  {% block stylesheets %}
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style_etablissementList.css') }}\"/>
  {% endblock stylesheets %}

  {% block body %}
  <div class=\"row\" class=\"z-index: 2\">
    <section id=\"top-section\" class=\"container-fluid padding-top-50 padding-bottom-mob-0\">
      <div class=\"col-sm-12\">
        <div class=\" text-center \">
          <br>
          <h2>
            Liste des {{etablissements[0].niveauEtablissement}} {{etablissements[0].statutEtablissement}}
          </h2>
        </div>
        <div class=\"panel-body padding-bottom-50 padding-bottom-mob-0 \">
          {% for etablissement in etablissements %}
          <div class=\"challenge col-xs-12 col-sm-4 col-md-4 challenge-holder \" data-unique=\"challenge-6\">
            <a href=\"#\" class=\"challenge-wrap\">
              <div class=\"embed-responsive embed-responsive-16by9 radius\">
                <img src=\"{{ asset('assets/img/spr.jpg') }}\" title=\"\" class=\"embed-responsive-item\">
              </div>
              <div class=\"caption clearfix\" style=\"background-color:#fff;\">
                <div class=\"caption-title font-head\">{{etablissement.nom}}</div>
                <div class=\"caption-body is-truncated\" style=\"height: 80px; word-wrap: break-word;\">
                  <p><b style=\"color:#999\">Ville:</b> {{etablissement.adresseVille}} &nbsp;&nbsp;&nbsp;&nbsp;
                    <b style=\"color:#999\">Rue:</b> {{etablissement.adresseRue}} <br>
                    <b style=\"color:#999\">Tel:</b> {{etablissement.telephone1}} <br>
                    <a href=\"#\">Note</a>
                  </p>
                  <p><a href=\"#\" class=\"btn btn-inscription\">Inscription</a></p>
                </div>
              </div>
            </a>
          </div>
          {% endfor %}

        </div>
        </div>
    </section>
  </div>

  {% endblock %}

  {% block javascripts %}
  <script type=\"text/javascript\" src=\"{{ asset('assets/js/etablissementJs.js') }}\" language=\"javascript\"></script>
  {% endblock %}
", "APIEtablissementBundle:etablissement:etablissementListByCriteria.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/etablissement/etablissementListByCriteria.html.twig");
    }
}
