<?php

/* APIEtablissementBundle::etablissement/registration.html.twig */
class __TwigTemplate_52dad3adf6a73581a2155ce00b3804d0c8ad12a8c4e902767f09a4a1fa1703f7 extends Twig_Template
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
        $__internal_68f129390afd4d72899dc6d43ef9c02c4c75e86f967cdcb8ed4093cc4b62961d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f129390afd4d72899dc6d43ef9c02c4c75e86f967cdcb8ed4093cc4b62961d->enter($__internal_68f129390afd4d72899dc6d43ef9c02c4c75e86f967cdcb8ed4093cc4b62961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle::etablissement/registration.html.twig"));

        $__internal_08b90195b84dd3464fbbdf09e2bffb39b7f5fc8552656af6672130c8802a9248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b90195b84dd3464fbbdf09e2bffb39b7f5fc8552656af6672130c8802a9248->enter($__internal_08b90195b84dd3464fbbdf09e2bffb39b7f5fc8552656af6672130c8802a9248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle::etablissement/registration.html.twig"));

        // line 1
        echo "<!-- Modal1 -->
<div class=\"modal fade\" id=\"registration_modal\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal content-->
        <div class=\"modal-content abt-w3l\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close clo1\" data-dismiss=\"modal\">&times;</button>
                <h4>Renseigner les informations</h4>
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("APIEtablissementBundle:Etablissement:new"));
        echo "
            </div>
        </div>
    </div>
</div>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/etablissementJs.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"JavaScript\" >
        \$(document).ready(function(){
            \$(document).on('submit','form#form-school-registration',function(e){
                e.preventDefault();
               \$.ajax({
                    method      : \$(this).attr( 'method' ),
                    url         : \$(this).attr('action'),
                    data        : \$(this).serialize(),
                    dataType    : \"json\"
               })
                   .done (function(data, status, object) {
                     if (data.message == \"Success\") {
                       alert(data.userN + \"\\n\" + data.userpas);
                     }
                     else{
                       alert(\"wrong\");
                     }
                     //window.location.href = 'http://localhost:8000/login';
                        //if(data.error) \$('div.has-error').html(data.message);
                    })
                    .fail(function(data, status, object){
                        console.log(data);
                    });
            });
        });
    </script>
<!-- //Modal1 -->
";
        
        $__internal_68f129390afd4d72899dc6d43ef9c02c4c75e86f967cdcb8ed4093cc4b62961d->leave($__internal_68f129390afd4d72899dc6d43ef9c02c4c75e86f967cdcb8ed4093cc4b62961d_prof);

        
        $__internal_08b90195b84dd3464fbbdf09e2bffb39b7f5fc8552656af6672130c8802a9248->leave($__internal_08b90195b84dd3464fbbdf09e2bffb39b7f5fc8552656af6672130c8802a9248_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle::etablissement/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  43 => 14,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Modal1 -->
<div class=\"modal fade\" id=\"registration_modal\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal content-->
        <div class=\"modal-content abt-w3l\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close clo1\" data-dismiss=\"modal\">&times;</button>
                <h4>Renseigner les informations</h4>
                {{ render(controller('APIEtablissementBundle:Etablissement:new')) }}
            </div>
        </div>
    </div>
</div>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-3.1.0.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/etablissementJs.js') }}\"></script>
    <script type=\"text/javascript\" language=\"JavaScript\" >
        \$(document).ready(function(){
            \$(document).on('submit','form#form-school-registration',function(e){
                e.preventDefault();
               \$.ajax({
                    method      : \$(this).attr( 'method' ),
                    url         : \$(this).attr('action'),
                    data        : \$(this).serialize(),
                    dataType    : \"json\"
               })
                   .done (function(data, status, object) {
                     if (data.message == \"Success\") {
                       alert(data.userN + \"\\n\" + data.userpas);
                     }
                     else{
                       alert(\"wrong\");
                     }
                     //window.location.href = 'http://localhost:8000/login';
                        //if(data.error) \$('div.has-error').html(data.message);
                    })
                    .fail(function(data, status, object){
                        console.log(data);
                    });
            });
        });
    </script>
<!-- //Modal1 -->
", "APIEtablissementBundle::etablissement/registration.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/etablissement/registration.html.twig");
    }
}
