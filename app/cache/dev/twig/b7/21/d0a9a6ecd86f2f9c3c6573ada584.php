<?php

/* AcmeParqueBundle:Parque:new.html.twig */
class __TwigTemplate_b721d0a9a6ecd86f2f9c3c6573ada584 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeParqueBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Crear de Individuos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo " \t<h1>Agregar Individuo</h1>
 \t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("individuos_create"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    
    <p>
        <input type=\"submit\" />
    </p>
</form>
\t
";
    }

    public function getTemplateName()
    {
        return "AcmeParqueBundle:Parque:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
