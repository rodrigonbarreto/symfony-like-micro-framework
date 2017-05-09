<?php

/* mighty_mouse/rescue.html.twig */
class __TwigTemplate_3799dc7e3fed75df9c3dd5439ef59e707039c2d2a27244bd40b0fc86913378e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mighty_mouse/rescue.html.twig", 1);
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
        $__internal_403582d99471100e5b475b015d786d06bf532d1f8a8165b366f4be91fbeda07b = $this->env->getExtension("native_profiler");
        $__internal_403582d99471100e5b475b015d786d06bf532d1f8a8165b366f4be91fbeda07b->enter($__internal_403582d99471100e5b475b015d786d06bf532d1f8a8165b366f4be91fbeda07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mighty_mouse/rescue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403582d99471100e5b475b015d786d06bf532d1f8a8165b366f4be91fbeda07b->leave($__internal_403582d99471100e5b475b015d786d06bf532d1f8a8165b366f4be91fbeda07b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0314fa0da883aead97740a921bb6c743871b545874cc39d1980749b475c9f219 = $this->env->getExtension("native_profiler");
        $__internal_0314fa0da883aead97740a921bb6c743871b545874cc39d1980749b475c9f219->enter($__internal_0314fa0da883aead97740a921bb6c743871b545874cc39d1980749b475c9f219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["quote"]) ? $context["quote"] : null), "html", null, true);
        echo "</h1>
";
        
        $__internal_0314fa0da883aead97740a921bb6c743871b545874cc39d1980749b475c9f219->leave($__internal_0314fa0da883aead97740a921bb6c743871b545874cc39d1980749b475c9f219_prof);

    }

    public function getTemplateName()
    {
        return "mighty_mouse/rescue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
