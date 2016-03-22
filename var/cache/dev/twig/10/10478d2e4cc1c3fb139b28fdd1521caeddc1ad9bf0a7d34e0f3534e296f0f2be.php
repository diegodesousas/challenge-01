<?php

/* ChallengeBundle:Main:index.html.twig */
class __TwigTemplate_0274134c330b5d8047bc323bf83a38d99150c193da4213d3835c4c5ac7554325 extends Twig_Template
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
        $__internal_143526ffea33434b26d0b1d49a46ba2b37be15b4d1a3b533056f56afaee7c439 = $this->env->getExtension("native_profiler");
        $__internal_143526ffea33434b26d0b1d49a46ba2b37be15b4d1a3b533056f56afaee7c439->enter($__internal_143526ffea33434b26d0b1d49a46ba2b37be15b4d1a3b533056f56afaee7c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChallengeBundle:Main:index.html.twig"));

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
        
        $__internal_143526ffea33434b26d0b1d49a46ba2b37be15b4d1a3b533056f56afaee7c439->leave($__internal_143526ffea33434b26d0b1d49a46ba2b37be15b4d1a3b533056f56afaee7c439_prof);

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
