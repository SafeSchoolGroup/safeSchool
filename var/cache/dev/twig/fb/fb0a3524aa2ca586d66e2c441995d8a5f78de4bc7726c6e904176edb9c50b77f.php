<?php

/* APIEtablissementBundle:etablissement:new.html.twig */
class __TwigTemplate_ed757c9682ebccdeca778689912a61be388fe3898276a4517dc7ad004ed6d0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dbcf452576e9f60860a938aa625379621b2c56931f9760e83f256f14919053d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbcf452576e9f60860a938aa625379621b2c56931f9760e83f256f14919053d->enter($__internal_2dbcf452576e9f60860a938aa625379621b2c56931f9760e83f256f14919053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:new.html.twig"));

        $__internal_7e592c6be1187dbed27e674d85251407323a0ad7c9a29b6d897bfee4d14b5fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e592c6be1187dbed27e674d85251407323a0ad7c9a29b6d897bfee4d14b5fdf->enter($__internal_7e592c6be1187dbed27e674d85251407323a0ad7c9a29b6d897bfee4d14b5fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:new.html.twig"));

        // line 1
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form-school-registration", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_new"))));
        echo "
      <ul>
        <li class=\"text\">";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo " </li>
        <li class=\"agileits-main\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseRue", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseRue", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseVille", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseVille", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adressePostale", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adressePostale", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anneeCreation", array()), 'label');
        echo "</li>
        <li class=\"agileits-main\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anneeCreation", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtablissement", array()), 'label', array("label" => "Niveau"));
        echo "</li>
        <li class=\"agileits-main\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtablissement", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "statutEtablissement", array()), 'label', array("label" => "Statut"));
        echo "</li>
        <li class=\"agileits-main\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "statutEtablissement", array()), 'widget');
        echo "</li>
      </ul>
      <ul>
        <li class=\"text\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorieEtablissement", array()), 'label', array("label" => "Catégorie"));
        echo "</li>
        <li class=\"agileits-main\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorieEtablissement", array()), 'widget');
        echo "</li>
      </ul>

      <div class=\"agile-submit\">
          <input type=\"submit\" value=\"Créer\">
      </div>
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2dbcf452576e9f60860a938aa625379621b2c56931f9760e83f256f14919053d->leave($__internal_2dbcf452576e9f60860a938aa625379621b2c56931f9760e83f256f14919053d_prof);

        
        $__internal_7e592c6be1187dbed27e674d85251407323a0ad7c9a29b6d897bfee4d14b5fdf->leave($__internal_7e592c6be1187dbed27e674d85251407323a0ad7c9a29b6d897bfee4d14b5fdf_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:etablissement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  115 => 36,  111 => 35,  105 => 32,  101 => 31,  95 => 28,  91 => 27,  85 => 24,  81 => 23,  75 => 20,  71 => 19,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  45 => 8,  41 => 7,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {{ form_start(form, {'attr': {'id': 'form-school-registration', 'action': path('api_etablissement_new')}}) }}
      <ul>
        <li class=\"text\">{{ form_label(form.nom) }} </li>
        <li class=\"agileits-main\">{{ form_widget(form.nom) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{ form_label(form.adresseRue) }}</li>
        <li class=\"agileits-main\">{{ form_widget(form.adresseRue) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{ form_label(form.adresseVille) }}</li>
        <li class=\"agileits-main\">{{ form_widget(form.adresseVille) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.adressePostale) }}</li>
        <li class=\"agileits-main\">{{form_widget(form.adressePostale) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.telephone1) }}</li>
        <li class=\"agileits-main\">{{form_widget(form.telephone1) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.telephone2) }}</li>
        <li class=\"agileits-main\">{{form_widget(form.telephone2) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.email) }}</li>
        <li class=\"agileits-main\">{{form_widget(form.email) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.anneeCreation) }}</li>
        <li class=\"agileits-main\">{{form_widget(form.anneeCreation) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.niveauEtablissement,\"Niveau\") }}</li>
        <li class=\"agileits-main\">{{form_widget(form.niveauEtablissement) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.statutEtablissement,\"Statut\") }}</li>
        <li class=\"agileits-main\">{{form_widget(form.statutEtablissement) }}</li>
      </ul>
      <ul>
        <li class=\"text\">{{form_label(form.categorieEtablissement,\"Catégorie\") }}</li>
        <li class=\"agileits-main\">{{form_widget(form.categorieEtablissement) }}</li>
      </ul>

      <div class=\"agile-submit\">
          <input type=\"submit\" value=\"Créer\">
      </div>
    {{ form_end(form) }}
", "APIEtablissementBundle:etablissement:new.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/etablissement/new.html.twig");
    }
}
