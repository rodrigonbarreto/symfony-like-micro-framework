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
        $__internal_617ec210018a457df07d0d80f1e4389154347ee1c6e208f6f90565a9183ae9ed = $this->env->getExtension("native_profiler");
        $__internal_617ec210018a457df07d0d80f1e4389154347ee1c6e208f6f90565a9183ae9ed->enter($__internal_617ec210018a457df07d0d80f1e4389154347ee1c6e208f6f90565a9183ae9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_617ec210018a457df07d0d80f1e4389154347ee1c6e208f6f90565a9183ae9ed->leave($__internal_617ec210018a457df07d0d80f1e4389154347ee1c6e208f6f90565a9183ae9ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00a69412f8f635d97126be54389fd01605d15c1aa2205464359d6e7397a8f95f = $this->env->getExtension("native_profiler");
        $__internal_00a69412f8f635d97126be54389fd01605d15c1aa2205464359d6e7397a8f95f->enter($__internal_00a69412f8f635d97126be54389fd01605d15c1aa2205464359d6e7397a8f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00a69412f8f635d97126be54389fd01605d15c1aa2205464359d6e7397a8f95f->leave($__internal_00a69412f8f635d97126be54389fd01605d15c1aa2205464359d6e7397a8f95f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5860b13da21aab3b544659bbbc140bc005e8396e47e8f4bf7f4f5e7d24ba18ee = $this->env->getExtension("native_profiler");
        $__internal_5860b13da21aab3b544659bbbc140bc005e8396e47e8f4bf7f4f5e7d24ba18ee->enter($__internal_5860b13da21aab3b544659bbbc140bc005e8396e47e8f4bf7f4f5e7d24ba18ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5860b13da21aab3b544659bbbc140bc005e8396e47e8f4bf7f4f5e7d24ba18ee->leave($__internal_5860b13da21aab3b544659bbbc140bc005e8396e47e8f4bf7f4f5e7d24ba18ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49713f00fb29ee1d6ed5c70ec76857c15225adbc945878d5ba0f700a3ff4f84e = $this->env->getExtension("native_profiler");
        $__internal_49713f00fb29ee1d6ed5c70ec76857c15225adbc945878d5ba0f700a3ff4f84e->enter($__internal_49713f00fb29ee1d6ed5c70ec76857c15225adbc945878d5ba0f700a3ff4f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49713f00fb29ee1d6ed5c70ec76857c15225adbc945878d5ba0f700a3ff4f84e->leave($__internal_49713f00fb29ee1d6ed5c70ec76857c15225adbc945878d5ba0f700a3ff4f84e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e395ce733cc69fdfba993a2b231c0dd99f6be801a146ddf6e926eef5366f021 = $this->env->getExtension("native_profiler");
        $__internal_2e395ce733cc69fdfba993a2b231c0dd99f6be801a146ddf6e926eef5366f021->enter($__internal_2e395ce733cc69fdfba993a2b231c0dd99f6be801a146ddf6e926eef5366f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e395ce733cc69fdfba993a2b231c0dd99f6be801a146ddf6e926eef5366f021->leave($__internal_2e395ce733cc69fdfba993a2b231c0dd99f6be801a146ddf6e926eef5366f021_prof);

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
