<?php

/* base.html.twig */
class __TwigTemplate_c708e13227b8ccc3046c7ad0997c8029c8c78cea160c0e8d18535b6790c043db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b323aaf2631ff71866635f8fbe27a74b73ea71a41ded7d5134673ee38096b5e0 = $this->env->getExtension("native_profiler");
        $__internal_b323aaf2631ff71866635f8fbe27a74b73ea71a41ded7d5134673ee38096b5e0->enter($__internal_b323aaf2631ff71866635f8fbe27a74b73ea71a41ded7d5134673ee38096b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
        
        $__internal_b323aaf2631ff71866635f8fbe27a74b73ea71a41ded7d5134673ee38096b5e0->leave($__internal_b323aaf2631ff71866635f8fbe27a74b73ea71a41ded7d5134673ee38096b5e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_357bd0999dd64fa9220b931b7b9bbf9ebdd71a0247d2e1e5ac054faa44ecf915 = $this->env->getExtension("native_profiler");
        $__internal_357bd0999dd64fa9220b931b7b9bbf9ebdd71a0247d2e1e5ac054faa44ecf915->enter($__internal_357bd0999dd64fa9220b931b7b9bbf9ebdd71a0247d2e1e5ac054faa44ecf915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_357bd0999dd64fa9220b931b7b9bbf9ebdd71a0247d2e1e5ac054faa44ecf915->leave($__internal_357bd0999dd64fa9220b931b7b9bbf9ebdd71a0247d2e1e5ac054faa44ecf915_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2e46b1af197f979920c856af373a1f876fe29c994416dd3c53fcf005a2aa167 = $this->env->getExtension("native_profiler");
        $__internal_a2e46b1af197f979920c856af373a1f876fe29c994416dd3c53fcf005a2aa167->enter($__internal_a2e46b1af197f979920c856af373a1f876fe29c994416dd3c53fcf005a2aa167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2e46b1af197f979920c856af373a1f876fe29c994416dd3c53fcf005a2aa167->leave($__internal_a2e46b1af197f979920c856af373a1f876fe29c994416dd3c53fcf005a2aa167_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7af6f0c56e83efe6071d640216bc418e670bdaee3d7704da9b2517e09a0d389 = $this->env->getExtension("native_profiler");
        $__internal_c7af6f0c56e83efe6071d640216bc418e670bdaee3d7704da9b2517e09a0d389->enter($__internal_c7af6f0c56e83efe6071d640216bc418e670bdaee3d7704da9b2517e09a0d389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7af6f0c56e83efe6071d640216bc418e670bdaee3d7704da9b2517e09a0d389->leave($__internal_c7af6f0c56e83efe6071d640216bc418e670bdaee3d7704da9b2517e09a0d389_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61c2f74537f9dbd046984eb7c2fdd422fc079bfb8d39fc7ed29541bde2d7afe6 = $this->env->getExtension("native_profiler");
        $__internal_61c2f74537f9dbd046984eb7c2fdd422fc079bfb8d39fc7ed29541bde2d7afe6->enter($__internal_61c2f74537f9dbd046984eb7c2fdd422fc079bfb8d39fc7ed29541bde2d7afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61c2f74537f9dbd046984eb7c2fdd422fc079bfb8d39fc7ed29541bde2d7afe6->leave($__internal_61c2f74537f9dbd046984eb7c2fdd422fc079bfb8d39fc7ed29541bde2d7afe6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  81 => 10,  70 => 6,  58 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
