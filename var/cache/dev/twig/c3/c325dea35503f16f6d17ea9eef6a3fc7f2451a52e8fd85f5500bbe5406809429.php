<?php

/* APIEtablissementBundle:home:index.html.twig */
class __TwigTemplate_0f17fefd5dc30c2fc4faf161885913ba87a2d5e2bf577c0cd96219a06d4e1485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APIEtablissementBundle:home:base.html.twig", "APIEtablissementBundle:home:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APIEtablissementBundle:home:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08221cea6fbdd305dc81e4e50ec48d4c7a7a405092cc2a5b2c80e8533b98e61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08221cea6fbdd305dc81e4e50ec48d4c7a7a405092cc2a5b2c80e8533b98e61f->enter($__internal_08221cea6fbdd305dc81e4e50ec48d4c7a7a405092cc2a5b2c80e8533b98e61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:home:index.html.twig"));

        $__internal_e0cfc86538c6a4d27ae9fa8c91b6b29051fe51f5f27af0187ca6c7b676f7f1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cfc86538c6a4d27ae9fa8c91b6b29051fe51f5f27af0187ca6c7b676f7f1f7->enter($__internal_e0cfc86538c6a4d27ae9fa8c91b6b29051fe51f5f27af0187ca6c7b676f7f1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIEtablissementBundle:home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08221cea6fbdd305dc81e4e50ec48d4c7a7a405092cc2a5b2c80e8533b98e61f->leave($__internal_08221cea6fbdd305dc81e4e50ec48d4c7a7a405092cc2a5b2c80e8533b98e61f_prof);

        
        $__internal_e0cfc86538c6a4d27ae9fa8c91b6b29051fe51f5f27af0187ca6c7b676f7f1f7->leave($__internal_e0cfc86538c6a4d27ae9fa8c91b6b29051fe51f5f27af0187ca6c7b676f7f1f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_050bdc98638d88eebbec58ca954ddd98eda8058928813bcb2ddcacabd11ed670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050bdc98638d88eebbec58ca954ddd98eda8058928813bcb2ddcacabd11ed670->enter($__internal_050bdc98638d88eebbec58ca954ddd98eda8058928813bcb2ddcacabd11ed670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8fbd17eef1dadcc77f3e3767e28ca2ae704c34e8198fe58dbb63e246dddfcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fbd17eef1dadcc77f3e3767e28ca2ae704c34e8198fe58dbb63e246dddfcb5->enter($__internal_b8fbd17eef1dadcc77f3e3767e28ca2ae704c34e8198fe58dbb63e246dddfcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main-w3layouts\" id=\"home\">
    <!--top-bar-->
    <div class=\"top-search-bar\">
        <div class=\"header-top-nav\">
            <ul>
                ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <li>
                            <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\" style=\"color: #FFFFFF\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                ";
        } else {
            // line 16
            echo "
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal3\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i>Se connecter</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal4\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>Créer un compte</a></li>
                ";
        }
        // line 20
        echo "            </ul>
        </div>
    </div>
    <!-- Modal1 -->
    <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4>Subscribe Now</h4>
                    <!--newsletter-->
                    <div class=\"newsletter\">
                        <form action=\"#\" method=\"post\">
                            <input type=\"email\" name=\"email\" size=\"30\" required=\"\" placeholder=\"Please fill your email\" />
                            <input type=\"submit\" value=\"Subscribe\" />
                        </form>
                    </div>
                    <!--//newsletter-->
                </div>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>

    <!-- //Modal1 -->

    <!-- Modal3 -->
    <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <!-- Modal content-->
            <div class=\"modal-content news-w3l\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                    <h4>Connectez-vous </h4>
                </div>

                ";
        // line 57
        echo "
            </div>
        </div>
    </div>
  </div>
    <div class=\"clearfix\"></div>
    <!-- //Modal3 -->

    <!-- Modal4 -->
    <div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <!-- Modal content-->
            <div class=\"modal-content news-w3l\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                    <h4>Register Now</h4>
                    <div>
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Elève</a></li>
                            <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Chef Etablissement</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                <div class=\"login-main wthree\">

                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                                <div class=\"login-main wthree\">

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--newsletter-->


                        <!--<form action=\"#\" method=\"post\">
                            <input type=\"text\" placeholder=\"Name\" name=\"Name\">
                            <input type=\"email\" placeholder=\"Email\" required=\"\" name=\"Email\">
                            <input type=\"password\" placeholder=\"Password\" name=\"Password\">
                            <input type=\"password\" placeholder=\"Confirm Password\" name=\"Password\">
                            <input type=\"text\" placeholder=\"Phone Number\" name=\"Number\">
                            <input type=\"submit\" value=\"Register Now\">
                        </form>-->

                    <!--//newsletter-->
                </div>
            </div>
        </div>
    </div>
    <!-- //modal 4-->

    <div class=\"clearfix\"></div>
    <div class=\"clearfix\"></div>
    <!--//top-bar-->
    <!-- navigation -->
    <div class =\"top-nav\">
        <nav class=\"navbar navbar-default\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>
            <!-- navbar-header -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"index.html\" class=\"hvr-underline-from-center active\">Acceuil</a></li>
                    <li><a href=\"#about\" class=\"hvr-underline-from-center scroll\">Etablissements</a></li>
                    <li><a href=\"#services\" class=\"hvr-underline-from-center scroll\">Classement</a></li>
                    <li><a href=\"#gallery\" class=\"hvr-underline-from-center scroll\">Comment évaluer ?</a></li>
                    <li><a href=\"#contact\" class=\"hvr-underline-from-center scroll\">Contactez-nous</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </nav>
    </div>
    <!-- //navigation -->

    <div class=\"header\">
        <!-- Slider -->
        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li>

                        <div class=\"slider-info\">
                            <p>wisdom begins with wonder.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>Education is a vaccine for violence.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>wisdom begins with wonder.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>Learning never exhausts the mind.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>

                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!-- //Slider -->
    </div>
    <div class=\"search\">
        <form action=\"\" method=\"post\">
            <input type=\"search\" placeholder=\"Rechercher un établissement ...\" required=\"\" name=\"search\" />
            <input type=\"submit\" value=\" \">
        </form>
    </div>
</div>
<!--main-content-->

<!--about-->
    <div id=\"about\" class=\"about\">
        <div class=\"container\">
            ";
        // line 201
        echo "        <!-- Modal1 -->
        <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" >
            <div class=\"modal-dialog\" role=\"document\">
                <!-- Modal content-->
                <div class=\"modal-content abt-w3l\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close clo1\" data-dismiss=\"modal\">&times;</button>
                        <h4>Enter the Following Details</h4>
                            <ul>
                                <li class=\"text\">Name of Applicant :  </li>
                                <li class=\"agileits-main\"><input name=\"name\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Date of Birth :  </li>
                                <li class=\"agileits-main\"><input name=\"organization\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Father Name  :  </li>
                                <li class=\"agileits-main\"><input name=\"name\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Gender  :  </li>
                                <li class=\"agileits-main\"><input name=\"contact\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">mobile no  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Address  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">District  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">State  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <div class=\"clear\"></div>
                            <div class=\"agile-submit\">
                                <input type=\"submit\" value=\"submit\">
                            </div>
                        </form>-->

                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal1 -->
        <div class=\"clearfix\"></div>
    </div>
</div>
<div class=\"about-info\">
    <img src=\"images/ab.jpg\" alt=\"about-image\">
</div>
<div class=\"clearfix\"></div>
<!--//about-->

<div class=\"col-md-2\">
    <a href=\"#modal-form-suite\" data-toggle=\"modal\" class=\"btn btn-lg btn-primary\">Poursuivre votre enregistrement </a>
</div>

<!-- modal end form -->
<div class=\"modal fade\" id=\"modal-form-suite\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal content-->
        <div class=\"modal-content news-w3l\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                <h3>Inform<span>ations</span></h3>
            </div>
              <div class=\"contact-agile\" id=\"contact\">
                  <div class=\"container\">
                      <form action=\"";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_etablissement_school_final_registration");
        echo "\" id=\"form-school-final-registration\" method=\"post\" class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\">
                          <div class=\"contact-grids1 agileinfo\">
                              <div class=\"contact-me \">
                                  <h4>Historique de l'établissement :</h4>
                                  <textarea name=\"historique\" placeholder=\"\" required=\"\"></textarea>
                              </div>
                              <div class=\"col-md-5 contact-form1\">
                                  <h4>Logo de l'établissement :</h4>
                                  <input type=\"file\" name=\"logo_etablissement\" placeholder=\"\" required=\"\">
                              </div>
                              <div class=\"col-md-5 contact-form1\">
                                  <h4>Photo de couverture :</h4>
                                  <input type=\"file\" name=\"photo_couverture\" placeholder=\"\" required=\"\">
                              </div>
                              <div class=\"col-md-2 contact-form\">
                                  <input type=\"submit\" value=\"Enregistrer\">
                              </div>
                              <div class=\"clearfix\"> </div>
                          </div>
                      </form>
                  </div>
              </div>
        </div>
    </div>
</div>

<!-- services -->
<div class=\"services\" id=\"services\">
    <h3>Services</h3>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/book.png\" alt=\" \" /></a>
        </div>
        <h4>Service 1</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/edu.png\" alt=\" \" /></a>
        </div>
        <h4>Service 2</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/uni.png\" alt=\" \" /></a>
        </div>
        <h4>Service 3</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/hourglass.png\" alt=\" \" /></a>
        </div>
        <h4>Service 4</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/book2.png\" alt=\" \" /></a>
        </div>
        <h4>Service 5</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"clearfix\"> </div>
</div>
<!-- //services -->


<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g1.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g2.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g3.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g4.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g5.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g6.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal7\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g7.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->

<!-- Events -->
<div class=\"event\" id=\"events\">
    <div class=\"container\">
        <h3>Events</h3>
        <div class=\"col-md-4 eve-agile e1\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\"><img src=\"images/e2.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>17</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>78</h6>
                </div>
                <div class=\"eve-w3lright e1\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"col-md-4 eve-agile e2\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\"><img src=\"images/e1.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>64</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>86</h6>
                </div>
                <div class=\"eve-w3lright\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"col-md-4 eve-agile e3\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\"><img src=\"images/e3.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>47</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>58</h6>
                </div>
                <div class=\"eve-w3lright\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"myModal5\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e2.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>
<!-- //Modal1 -->
<div class=\"modal fade\" id=\"myModal6\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e1.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>

<!-- //Modal1 -->
<div class=\"modal fade\" id=\"myModal7\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e3.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>
<!-- //Modal1 -->

<!-- //Events -->

<!--test-->
<div id=\"testimonials\" class=\"review\">
    <div class=\"container\">
        <h3 class=\"title-w3\">Testimonials</h3>
        <div class=\"test-monials\">
            <!--//screen-gallery-->
            <div class=\"sreen-gallery-cursual\">

                <div id=\"owl-demo\" class=\"owl-carousel\">
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p><img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t1.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>James</h5>
                        </div>
                    </div>
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p> <img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t2.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>Williams Allen</h5>
                        </div>
                    </div>
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p><img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t3.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>Richard</h5>
                        </div>
                    </div>
                </div>
                <!--//screen-gallery-->
            </div>
        </div>
    </div>
</div>
<!--//test-->

<!--contact-->

<div class=\"contact-agile\" id=\"contact\">
    <h3>Contact <span>Us</span></h3>
    <div class=\"container\">
        <form action=\"#\" method=\"post\" class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\">
            <div class=\"contact-grids1 agileinfo\">
                <div class=\"contact-me \">
                    <h4>Message</h4>
                    <textarea name=\"Message\" placeholder=\"\" required=\"\"> </textarea>
                </div>
                <div class=\"col-md-5 contact-form1\">
                    <h4>Name</h4>
                    <input type=\"text\" name=\"Name\" placeholder=\"\" required=\"\">
                </div>
                <div class=\"col-md-5 contact-form1\">
                    <h4>Email</h4>
                    <input type=\"email\" name=\"Email\" placeholder=\"\" required=\"\">
                </div>
                <div class=\"col-md-2 contact-form\">
                    <input type=\"submit\" value=\"Submit\">
                </div>
                <div class=\"clearfix\"> </div>

            </div>
        </form>

    </div>
</div>
<!--//contact-->

";
        
        $__internal_b8fbd17eef1dadcc77f3e3767e28ca2ae704c34e8198fe58dbb63e246dddfcb5->leave($__internal_b8fbd17eef1dadcc77f3e3767e28ca2ae704c34e8198fe58dbb63e246dddfcb5_prof);

        
        $__internal_050bdc98638d88eebbec58ca954ddd98eda8058928813bcb2ddcacabd11ed670->leave($__internal_050bdc98638d88eebbec58ca954ddd98eda8058928813bcb2ddcacabd11ed670_prof);

    }

    // line 683
    public function block_footer($context, array $blocks = array())
    {
        $__internal_10f01d3e00d6930939d2000169ae5da0ca72d90a1735d3dd7280c07fbcfb83ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f01d3e00d6930939d2000169ae5da0ca72d90a1735d3dd7280c07fbcfb83ca->enter($__internal_10f01d3e00d6930939d2000169ae5da0ca72d90a1735d3dd7280c07fbcfb83ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_658bac2a70ca1e40622276bc0c29e180053fe9ce806b661b729d8ff7f6ab680c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658bac2a70ca1e40622276bc0c29e180053fe9ce806b661b729d8ff7f6ab680c->enter($__internal_658bac2a70ca1e40622276bc0c29e180053fe9ce806b661b729d8ff7f6ab680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 684
        echo "    ";
        $this->loadTemplate("APIEtablissementBundle:home:footer.html.twig", "APIEtablissementBundle:home:index.html.twig", 684)->display($context);
        
        $__internal_658bac2a70ca1e40622276bc0c29e180053fe9ce806b661b729d8ff7f6ab680c->leave($__internal_658bac2a70ca1e40622276bc0c29e180053fe9ce806b661b729d8ff7f6ab680c_prof);

        
        $__internal_10f01d3e00d6930939d2000169ae5da0ca72d90a1735d3dd7280c07fbcfb83ca->leave($__internal_10f01d3e00d6930939d2000169ae5da0ca72d90a1735d3dd7280c07fbcfb83ca_prof);

    }

    // line 687
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd36c8283318d90f9237654ad1799d073de8164d400a31eab4f4eb0eb60665cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd36c8283318d90f9237654ad1799d073de8164d400a31eab4f4eb0eb60665cd->enter($__internal_dd36c8283318d90f9237654ad1799d073de8164d400a31eab4f4eb0eb60665cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83ab4a06a9cbcbe355f34901ec3bad659ebe6591b664463db228089b05cb7841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ab4a06a9cbcbe355f34901ec3bad659ebe6591b664463db228089b05cb7841->enter($__internal_83ab4a06a9cbcbe355f34901ec3bad659ebe6591b664463db228089b05cb7841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 688
        echo "   <!-- <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script> -->

    <!--<script>
        \$(function() {
            \$('.gallery-grid a').Chocolat();
        });
    </script>-->
    <!-- required-js-files-->

    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#owl-demo\").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>
    <!--//required-js-files-->

    <script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                pager:false,
                nav: true,
                speed: 1000,
                namespace: \"callbacks\",
                before: function () {
                    \$('.events').append(\"<li>before event fired.</li>\");
                },
                after: function () {
                    \$('.events').append(\"<li>after event fired.</li>\");
                }
            });
        });
    </script>


    <!-- start-smoth-scrolling -->
    <script type=\"text/javascript\" src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- bottom-top -->
    <!-- smooth scrolling -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */
            \$().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
    <!-- //smooth scrolling -->
    <!--// bottom-top -->
    <script type=\"text/javascript\" src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_83ab4a06a9cbcbe355f34901ec3bad659ebe6591b664463db228089b05cb7841->leave($__internal_83ab4a06a9cbcbe355f34901ec3bad659ebe6591b664463db228089b05cb7841_prof);

        
        $__internal_dd36c8283318d90f9237654ad1799d073de8164d400a31eab4f4eb0eb60665cd->leave($__internal_dd36c8283318d90f9237654ad1799d073de8164d400a31eab4f4eb0eb60665cd_prof);

    }

    public function getTemplateName()
    {
        return "APIEtablissementBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 763,  846 => 734,  842 => 733,  818 => 712,  800 => 697,  787 => 688,  778 => 687,  767 => 684,  758 => 683,  342 => 276,  265 => 201,  120 => 57,  82 => 20,  76 => 16,  70 => 13,  66 => 12,  60 => 10,  58 => 9,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'APIEtablissementBundle:home:base.html.twig' %}

{% block body %}
<div class=\"main-w3layouts\" id=\"home\">
    <!--top-bar-->
    <div class=\"top-search-bar\">
        <div class=\"header-top-nav\">
            <ul>
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-primary\" style=\"color: #FFFFFF\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                        </li>
                {% else %}

                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal3\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i>Se connecter</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal4\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>Créer un compte</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
    <!-- Modal1 -->
    <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4>Subscribe Now</h4>
                    <!--newsletter-->
                    <div class=\"newsletter\">
                        <form action=\"#\" method=\"post\">
                            <input type=\"email\" name=\"email\" size=\"30\" required=\"\" placeholder=\"Please fill your email\" />
                            <input type=\"submit\" value=\"Subscribe\" />
                        </form>
                    </div>
                    <!--//newsletter-->
                </div>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>

    <!-- //Modal1 -->

    <!-- Modal3 -->
    <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <!-- Modal content-->
            <div class=\"modal-content news-w3l\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                    <h4>Connectez-vous </h4>
                </div>

                {#{{ render(controller('UserBundle:Security:login')) }}#}

            </div>
        </div>
    </div>
  </div>
    <div class=\"clearfix\"></div>
    <!-- //Modal3 -->

    <!-- Modal4 -->
    <div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\" >
        <div class=\"modal-dialog\" role=\"document\">
            <!-- Modal content-->
            <div class=\"modal-content news-w3l\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                    <h4>Register Now</h4>
                    <div>
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Elève</a></li>
                            <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Chef Etablissement</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                <div class=\"login-main wthree\">

                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                                <div class=\"login-main wthree\">

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--newsletter-->


                        <!--<form action=\"#\" method=\"post\">
                            <input type=\"text\" placeholder=\"Name\" name=\"Name\">
                            <input type=\"email\" placeholder=\"Email\" required=\"\" name=\"Email\">
                            <input type=\"password\" placeholder=\"Password\" name=\"Password\">
                            <input type=\"password\" placeholder=\"Confirm Password\" name=\"Password\">
                            <input type=\"text\" placeholder=\"Phone Number\" name=\"Number\">
                            <input type=\"submit\" value=\"Register Now\">
                        </form>-->

                    <!--//newsletter-->
                </div>
            </div>
        </div>
    </div>
    <!-- //modal 4-->

    <div class=\"clearfix\"></div>
    <div class=\"clearfix\"></div>
    <!--//top-bar-->
    <!-- navigation -->
    <div class =\"top-nav\">
        <nav class=\"navbar navbar-default\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>
            <!-- navbar-header -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"index.html\" class=\"hvr-underline-from-center active\">Acceuil</a></li>
                    <li><a href=\"#about\" class=\"hvr-underline-from-center scroll\">Etablissements</a></li>
                    <li><a href=\"#services\" class=\"hvr-underline-from-center scroll\">Classement</a></li>
                    <li><a href=\"#gallery\" class=\"hvr-underline-from-center scroll\">Comment évaluer ?</a></li>
                    <li><a href=\"#contact\" class=\"hvr-underline-from-center scroll\">Contactez-nous</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </nav>
    </div>
    <!-- //navigation -->

    <div class=\"header\">
        <!-- Slider -->
        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li>

                        <div class=\"slider-info\">
                            <p>wisdom begins with wonder.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>Education is a vaccine for violence.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>wisdom begins with wonder.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>
                    <li>

                        <div class=\"slider-info\">
                            <p>Learning never exhausts the mind.</p>
                            <h3><a href=\"index.html\"><span>Edu</span> cational</a></h3>
                            <h6>wisdom begins with wonder.</h6>
                        </div>
                    </li>

                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!-- //Slider -->
    </div>
    <div class=\"search\">
        <form action=\"\" method=\"post\">
            <input type=\"search\" placeholder=\"Rechercher un établissement ...\" required=\"\" name=\"search\" />
            <input type=\"submit\" value=\" \">
        </form>
    </div>
</div>
<!--main-content-->

<!--about-->
    <div id=\"about\" class=\"about\">
        <div class=\"container\">
            {#{% include '::random_schools.html.twig' %}#}
        <!-- Modal1 -->
        <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" >
            <div class=\"modal-dialog\" role=\"document\">
                <!-- Modal content-->
                <div class=\"modal-content abt-w3l\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close clo1\" data-dismiss=\"modal\">&times;</button>
                        <h4>Enter the Following Details</h4>
                            <ul>
                                <li class=\"text\">Name of Applicant :  </li>
                                <li class=\"agileits-main\"><input name=\"name\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Date of Birth :  </li>
                                <li class=\"agileits-main\"><input name=\"organization\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Father Name  :  </li>
                                <li class=\"agileits-main\"><input name=\"name\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Gender  :  </li>
                                <li class=\"agileits-main\"><input name=\"contact\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">mobile no  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">Address  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">District  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <ul>
                                <li class=\"text\">State  :  </li>
                                <li class=\"agileits-main\"><input name=\"mobile\" type=\"text\" required></li>
                            </ul>
                            <div class=\"clear\"></div>
                            <div class=\"agile-submit\">
                                <input type=\"submit\" value=\"submit\">
                            </div>
                        </form>-->

                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal1 -->
        <div class=\"clearfix\"></div>
    </div>
</div>
<div class=\"about-info\">
    <img src=\"images/ab.jpg\" alt=\"about-image\">
</div>
<div class=\"clearfix\"></div>
<!--//about-->

<div class=\"col-md-2\">
    <a href=\"#modal-form-suite\" data-toggle=\"modal\" class=\"btn btn-lg btn-primary\">Poursuivre votre enregistrement </a>
</div>

<!-- modal end form -->
<div class=\"modal fade\" id=\"modal-form-suite\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal content-->
        <div class=\"modal-content news-w3l\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close w3l\" data-dismiss=\"modal\">&times;</button>
                <h3>Inform<span>ations</span></h3>
            </div>
              <div class=\"contact-agile\" id=\"contact\">
                  <div class=\"container\">
                      <form action=\"{{path('api_etablissement_school_final_registration')}}\" id=\"form-school-final-registration\" method=\"post\" class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\">
                          <div class=\"contact-grids1 agileinfo\">
                              <div class=\"contact-me \">
                                  <h4>Historique de l'établissement :</h4>
                                  <textarea name=\"historique\" placeholder=\"\" required=\"\"></textarea>
                              </div>
                              <div class=\"col-md-5 contact-form1\">
                                  <h4>Logo de l'établissement :</h4>
                                  <input type=\"file\" name=\"logo_etablissement\" placeholder=\"\" required=\"\">
                              </div>
                              <div class=\"col-md-5 contact-form1\">
                                  <h4>Photo de couverture :</h4>
                                  <input type=\"file\" name=\"photo_couverture\" placeholder=\"\" required=\"\">
                              </div>
                              <div class=\"col-md-2 contact-form\">
                                  <input type=\"submit\" value=\"Enregistrer\">
                              </div>
                              <div class=\"clearfix\"> </div>
                          </div>
                      </form>
                  </div>
              </div>
        </div>
    </div>
</div>

<!-- services -->
<div class=\"services\" id=\"services\">
    <h3>Services</h3>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/book.png\" alt=\" \" /></a>
        </div>
        <h4>Service 1</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/edu.png\" alt=\" \" /></a>
        </div>
        <h4>Service 2</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/uni.png\" alt=\" \" /></a>
        </div>
        <h4>Service 3</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/hourglass.png\" alt=\" \" /></a>
        </div>
        <h4>Service 4</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"col-md-2 services-gd text-center\" data-wow-delay=\".5s\">
        <div class=\"hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a\">
            <a href=\"#\" class=\"hi-icon\"><img src=\"images/book2.png\" alt=\" \" /></a>
        </div>
        <h4>Service 5</h4>
        <p>Lorem Ipsum</p>
    </div>
    <div class=\"clearfix\"> </div>
</div>
<!-- //services -->


<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g1.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g2.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g3.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g4.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g5.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g6.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class=\"portfolio-modal modal fade slideanim\" id=\"portfolioModal7\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\"></div>
            </div>
        </div>
        <div class=\"container\">

            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"modal-body\">
                    <h3>Educational</h3>

                    <img src=\"images/g7.jpg\" class=\"img-responsive\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->

<!-- Events -->
<div class=\"event\" id=\"events\">
    <div class=\"container\">
        <h3>Events</h3>
        <div class=\"col-md-4 eve-agile e1\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\"><img src=\"images/e2.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>17</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>78</h6>
                </div>
                <div class=\"eve-w3lright e1\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal5\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"col-md-4 eve-agile e2\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\"><img src=\"images/e1.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>64</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>86</h6>
                </div>
                <div class=\"eve-w3lright\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal6\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"col-md-4 eve-agile e3\">
            <div class=\"eve-sub1\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\"><img src=\"images/e3.jpg\" alt=\"image\"></a>
                <h4><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\">Educational</a></h4>
                <h6>By an <a href=\"#\">admin</a>, Oct-2016</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
            <div class=\"eve-sub2\">
                <div class=\"eve-w3lleft\">
                    <h6><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>47</h6>
                    <h6><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>58</h6>
                </div>
                <div class=\"eve-w3lright\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal7\"><h5>More</h5></a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"myModal5\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e2.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>
<!-- //Modal1 -->
<div class=\"modal fade\" id=\"myModal6\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e1.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>

<!-- //Modal1 -->
<div class=\"modal fade\" id=\"myModal7\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4>Educational</h4>
                <img src=\"images/e3.jpg\" alt=\"blog-image\" />
                <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
            </div>
        </div>

    </div>
</div>
<!-- //Modal1 -->

<!-- //Events -->

<!--test-->
<div id=\"testimonials\" class=\"review\">
    <div class=\"container\">
        <h3 class=\"title-w3\">Testimonials</h3>
        <div class=\"test-monials\">
            <!--//screen-gallery-->
            <div class=\"sreen-gallery-cursual\">

                <div id=\"owl-demo\" class=\"owl-carousel\">
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p><img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t1.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>James</h5>
                        </div>
                    </div>
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p> <img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t2.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>Williams Allen</h5>
                        </div>
                    </div>
                    <div class=\"item-owl\">
                        <div class=\"test-review\">
                            <p><img src=\"images/left-quote.png\" alt=\"\">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src=\"images/right-quote.png\" alt=\"\"></p>
                            <div class=\"img-agile\">
                                <img src=\"images/t3.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </div>
                            <h5>Richard</h5>
                        </div>
                    </div>
                </div>
                <!--//screen-gallery-->
            </div>
        </div>
    </div>
</div>
<!--//test-->

<!--contact-->

<div class=\"contact-agile\" id=\"contact\">
    <h3>Contact <span>Us</span></h3>
    <div class=\"container\">
        <form action=\"#\" method=\"post\" class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\">
            <div class=\"contact-grids1 agileinfo\">
                <div class=\"contact-me \">
                    <h4>Message</h4>
                    <textarea name=\"Message\" placeholder=\"\" required=\"\"> </textarea>
                </div>
                <div class=\"col-md-5 contact-form1\">
                    <h4>Name</h4>
                    <input type=\"text\" name=\"Name\" placeholder=\"\" required=\"\">
                </div>
                <div class=\"col-md-5 contact-form1\">
                    <h4>Email</h4>
                    <input type=\"email\" name=\"Email\" placeholder=\"\" required=\"\">
                </div>
                <div class=\"col-md-2 contact-form\">
                    <input type=\"submit\" value=\"Submit\">
                </div>
                <div class=\"clearfix\"> </div>

            </div>
        </form>

    </div>
</div>
<!--//contact-->

{% endblock body %}

{% block footer %}
    {% include 'APIEtablissementBundle:home:footer.html.twig' %}
{% endblock footer %}

{% block javascripts %}
   <!-- <script src=\"{{ asset('assets/front/js/jquery.chocolat.js') }}\"></script> -->

    <!--<script>
        \$(function() {
            \$('.gallery-grid a').Chocolat();
        });
    </script>-->
    <!-- required-js-files-->

    <script src=\"{{ asset('assets/front/js/owl.carousel.js') }}\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#owl-demo\").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>
    <!--//required-js-files-->

    <script src=\"{{ asset('assets/front/js/responsiveslides.min.js') }}\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                pager:false,
                nav: true,
                speed: 1000,
                namespace: \"callbacks\",
                before: function () {
                    \$('.events').append(\"<li>before event fired.</li>\");
                },
                after: function () {
                    \$('.events').append(\"<li>after event fired.</li>\");
                }
            });
        });
    </script>


    <!-- start-smoth-scrolling -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/front/js/move-top.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/front/js/easing.js') }}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- bottom-top -->
    <!-- smooth scrolling -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */
            \$().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
    <!-- //smooth scrolling -->
    <!--// bottom-top -->
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.js') }}\"></script>

{% endblock javascripts %}
", "APIEtablissementBundle:home:index.html.twig", "D:\\FBR\\programmmation\\programs\\wamp64\\www\\safeSchool_heroku\\src\\API\\EtablissementBundle/Resources/views/home/index.html.twig");
    }
}
