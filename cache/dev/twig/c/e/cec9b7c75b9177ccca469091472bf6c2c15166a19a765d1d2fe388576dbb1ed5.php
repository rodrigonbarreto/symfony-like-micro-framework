<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_cec9b7c75b9177ccca469091472bf6c2c15166a19a765d1d2fe388576dbb1ed5 extends Twig_Template
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
        $__internal_a7de58573075b627297b62fcd92bcf01a27c607687548fb2c6fae5538a618d4c = $this->env->getExtension("native_profiler");
        $__internal_a7de58573075b627297b62fcd92bcf01a27c607687548fb2c6fae5538a618d4c->enter($__internal_a7de58573075b627297b62fcd92bcf01a27c607687548fb2c6fae5538a618d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_a7de58573075b627297b62fcd92bcf01a27c607687548fb2c6fae5538a618d4c->leave($__internal_a7de58573075b627297b62fcd92bcf01a27c607687548fb2c6fae5538a618d4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
