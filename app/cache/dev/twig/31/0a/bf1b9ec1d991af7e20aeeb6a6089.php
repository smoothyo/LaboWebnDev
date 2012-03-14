<?php

/* LaboContenueBundle:Default:index.html.twig */
class __TwigTemplate_310abf1b9ec1d991af7e20aeeb6a6089 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "LaboContenueBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
