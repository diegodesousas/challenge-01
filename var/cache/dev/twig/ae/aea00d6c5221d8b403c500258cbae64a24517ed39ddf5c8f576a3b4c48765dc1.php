<?php

/* ChallengeBundle:Main:index.html.twig */
class __TwigTemplate_e0b6f2c4e1cf7ea7bdfac27e077e4572751e52efe77b8add2c9864cc93547ae4 extends Twig_Template
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
        $__internal_d48bec04e628a2b93f2b1ccc8c90b5cf00c146332204eeb7182dacf41e8e027c = $this->env->getExtension("native_profiler");
        $__internal_d48bec04e628a2b93f2b1ccc8c90b5cf00c146332204eeb7182dacf41e8e027c->enter($__internal_d48bec04e628a2b93f2b1ccc8c90b5cf00c146332204eeb7182dacf41e8e027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallengeBundle:Main:index.html.twig"));

        // line 1
        echo "<html ng-app=\"challengeApp\">
    <head>
        <title>Challenge for PHP Developer</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/node_modules/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/app.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/node_modules/angular/angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/node_modules/angular-resource/angular-resource.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/node_modules/angular-route/angular-route.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/app/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/app/controllers.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/app/services.js"), "html", null, true);
        echo "\"></script>
    </head>

    <div ng-view></div>
</html>
";
        
        $__internal_d48bec04e628a2b93f2b1ccc8c90b5cf00c146332204eeb7182dacf41e8e027c->leave($__internal_d48bec04e628a2b93f2b1ccc8c90b5cf00c146332204eeb7182dacf41e8e027c_prof);

    }

    public function getTemplateName()
    {
        return "ChallengeBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  38 => 9,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <html ng-app="challengeApp">*/
/*     <head>*/
/*         <title>Challenge for PHP Developer</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <link rel="stylesheet" href="{{ asset('frontend/node_modules/bootstrap/dist/css/bootstrap.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}">*/
/* */
/*         <script src="{{ asset('frontend/node_modules/angular/angular.js') }}"></script>*/
/*         <script src="{{ asset('frontend/node_modules/angular-resource/angular-resource.js') }}"></script>*/
/*         <script src="{{ asset('frontend/node_modules/angular-route/angular-route.js') }}"></script>*/
/*         */
/*         <script src="{{ asset('frontend/app/app.js')}}"></script>*/
/*         <script src="{{ asset('frontend/app/controllers.js')}}"></script>*/
/*         <script src="{{ asset('frontend/app/services.js')}}"></script>*/
/*     </head>*/
/* */
/*     <div ng-view></div>*/
/* </html>*/
/* */
