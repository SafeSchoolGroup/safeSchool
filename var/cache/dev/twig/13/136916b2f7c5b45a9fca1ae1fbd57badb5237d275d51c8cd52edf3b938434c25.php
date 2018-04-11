<?php

/* APIEtablissementBundle:etablissement:index.html.twig */
class __TwigTemplate_224019ec85284852b637218c2adfbc5b08fd328216f33998123ecaf00e37f801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "APIEtablissementBundle:etablissement:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40560a5773b27d8ea4e44452b6cf02b0171aac5c79294a937ed244f1f69c891e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40560a5773b27d8ea4e44452b6cf02b0171aac5c79294a937ed244f1f69c891e->enter($__internal_40560a5773b27d8ea4e44452b6cf02b0171aac5c79294a937ed244f1f69c891e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:index.html.twig"));

        $__internal_f3f537404f486f68a07dd0ab57c9d7ea18157b2649492d4486a6d0e9c1f1f50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f537404f486f68a07dd0ab57c9d7ea18157b2649492d4486a6d0e9c1f1f50a->enter($__internal_f3f537404f486f68a07dd0ab57c9d7ea18157b2649492d4486a6d0e9c1f1f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:etablissement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40560a5773b27d8ea4e44452b6cf02b0171aac5c79294a937ed244f1f69c891e->leave($__internal_40560a5773b27d8ea4e44452b6cf02b0171aac5c79294a937ed244f1f69c891e_prof);

        
        $__internal_f3f537404f486f68a07dd0ab57c9d7ea18157b2649492d4486a6d0e9c1f1f50a->leave($__internal_f3f537404f486f68a07dd0ab57c9d7ea18157b2649492d4486a6d0e9c1f1f50a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e95912bab361dd94661916a244d76d05c8d3b50161270435f48db3f1355a694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e95912bab361dd94661916a244d76d05c8d3b50161270435f48db3f1355a694->enter($__internal_4e95912bab361dd94661916a244d76d05c8d3b50161270435f48db3f1355a694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9185ab0498cd2fdbf331313a26517a252b69fc1fdafb9927bf33272f21682791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9185ab0498cd2fdbf331313a26517a252b69fc1fdafb9927bf33272f21682791->enter($__internal_9185ab0498cd2fdbf331313a26517a252b69fc1fdafb9927bf33272f21682791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Nomfondateur</th>
                <th>Prenomfondateur</th>
                <th>Nomdirecteur</th>
                <th>Prenomdirecteur</th>
                <th>Adresserue</th>
                <th>Adresseville</th>
                <th>Adressepostale</th>
                <th>Telephone1</th>
                <th>Telephone2</th>
                <th>Email</th>
                <th>Urlsite</th>
                <th>Anneecreation</th>
                <th>Historique</th>
                <th>Statutetablissement</th>
                <th>Categorieetablissement</th>
                <th>Niveauetablissement</th>
                <th>Logoetablissement</th>
                <th>Photocouvertureetablissement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etablissements"] ?? $this->getContext($context, "etablissements")));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "nom", array()), "html", null, true);
            echo "</td>
                
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "adresseRue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "adresseVille", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "adressePostale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "telephone1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "telephone2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "urlSite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "anneeCreation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "historique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "statutEtablissement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "categorieetablissement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "niveauEtablissement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "logoEtablissement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "photoCouvertureEtablissement", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_edit", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9185ab0498cd2fdbf331313a26517a252b69fc1fdafb9927bf33272f21682791->leave($__internal_9185ab0498cd2fdbf331313a26517a252b69fc1fdafb9927bf33272f21682791_prof);

        
        $__internal_4e95912bab361dd94661916a244d76d05c8d3b50161270435f48db3f1355a694->leave($__internal_4e95912bab361dd94661916a244d76d05c8d3b50161270435f48db3f1355a694_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:etablissement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  175 => 64,  163 => 58,  157 => 55,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  93 => 36,  87 => 35,  84 => 34,  80 => 33,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Etablissement list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Nomfondateur</th>
                <th>Prenomfondateur</th>
                <th>Nomdirecteur</th>
                <th>Prenomdirecteur</th>
                <th>Adresserue</th>
                <th>Adresseville</th>
                <th>Adressepostale</th>
                <th>Telephone1</th>
                <th>Telephone2</th>
                <th>Email</th>
                <th>Urlsite</th>
                <th>Anneecreation</th>
                <th>Historique</th>
                <th>Statutetablissement</th>
                <th>Categorieetablissement</th>
                <th>Niveauetablissement</th>
                <th>Logoetablissement</th>
                <th>Photocouvertureetablissement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etablissement in etablissements %}
            <tr>
                <td><a href=\"{{ path('api_etablissement_show', { 'id': etablissement.id }) }}\">{{ etablissement.id }}</a></td>
                <td>{{ etablissement.nom }}</td>
                
                <td>{{ etablissement.adresseRue }}</td>
                <td>{{ etablissement.adresseVille }}</td>
                <td>{{ etablissement.adressePostale }}</td>
                <td>{{ etablissement.telephone1 }}</td>
                <td>{{ etablissement.telephone2 }}</td>
                <td>{{ etablissement.email }}</td>
                <td>{{ etablissement.urlSite }}</td>
                <td>{{ etablissement.anneeCreation }}</td>
                <td>{{ etablissement.historique }}</td>
                <td>{{ etablissement.statutEtablissement }}</td>
                <td>{{ etablissement.categorieetablissement }}</td>
                <td>{{ etablissement.niveauEtablissement }}</td>
                <td>{{ etablissement.logoEtablissement }}</td>
                <td>{{ etablissement.photoCouvertureEtablissement }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('api_etablissement_show', { 'id': etablissement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('api_etablissement_edit', { 'id': etablissement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('api_etablissement_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "APIEtablissementBundle:etablissement:index.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/etablissement/index.html.twig");
    }
}
