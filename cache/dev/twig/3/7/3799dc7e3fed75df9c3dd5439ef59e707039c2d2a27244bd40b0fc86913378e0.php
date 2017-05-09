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
        $__internal_9de7881f53485092816227d4aeafaa411bdacb0a561f4d58833df1a5472c075e = $this->env->getExtension("native_profiler");
        $__internal_9de7881f53485092816227d4aeafaa411bdacb0a561f4d58833df1a5472c075e->enter($__internal_9de7881f53485092816227d4aeafaa411bdacb0a561f4d58833df1a5472c075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mighty_mouse/rescue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de7881f53485092816227d4aeafaa411bdacb0a561f4d58833df1a5472c075e->leave($__internal_9de7881f53485092816227d4aeafaa411bdacb0a561f4d58833df1a5472c075e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c718494d5f20098678559f54ddcfca7f92dac65a5b3718e27ab0a3c70f9b83e = $this->env->getExtension("native_profiler");
        $__internal_2c718494d5f20098678559f54ddcfca7f92dac65a5b3718e27ab0a3c70f9b83e->enter($__internal_2c718494d5f20098678559f54ddcfca7f92dac65a5b3718e27ab0a3c70f9b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["quote"]) ? $context["quote"] : null), "html", null, true);
        echo "</h1>
";
        
        $__internal_2c718494d5f20098678559f54ddcfca7f92dac65a5b3718e27ab0a3c70f9b83e->leave($__internal_2c718494d5f20098678559f54ddcfca7f92dac65a5b3718e27ab0a3c70f9b83e_prof);

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
