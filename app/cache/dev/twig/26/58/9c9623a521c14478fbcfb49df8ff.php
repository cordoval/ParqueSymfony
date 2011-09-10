<?php

/* AcmeParqueBundle::layout.html.twig */
class __TwigTemplate_26589c9623a521c14478fbcfb49df8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeparque/css/style.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeparque/js/jquery-1.4.2.min.js"), "html");
        echo " \"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeparque/js/jquery.imghover-1.1rc.js"), "html");
        echo " \"></script>
\t\t
\t\t<script>
\t\t\t\$(window).load(function(){
  \t\t\t\t\$('#wrapper').fadeIn(1300);
  \t\t\t\t\$('div.logos').imghover({suffix: '-hovered' , fade: 'true' , fadeSpeed: 500}); \t\t\t\t
\t\t\t});
\t\t</script>
\t\t
        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    
    <body>
        <div id=\"wrapper\">
        ";
        // line 25
        echo "            <div id=\"wheader\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_homepage"), "html");
        echo "\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeparque/images/13.svg"), "html");
        echo "\"  /><h1>Parque UTFSM</h1>
                </a>
                ";
        // line 35
        echo "            </div>

            <div id=\"wcontent\">
                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </div>

            <div id=\"wfooter\">
            \t<div class=\"logos\">
\t\t\t\t\t<a href=\"http://www.utfsm.cl/\" alt=\"Lider en Ciencia y Tecnología\" title=\"Lider en Ciencia y Tecnología\" ><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeparque/images/utfsm-logo.png"), "html");
        echo "\" /></a>
\t\t\t\t</div> 
            </div>
        </div>
    </body>
</html>
";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeParqueBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
