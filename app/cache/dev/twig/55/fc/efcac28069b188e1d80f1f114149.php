<?php

/* LaboContenuBundle:Default:nosprojets.html.twig */
class __TwigTemplate_55fcefcac28069b188e1d80f1f114149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/labocontenu/css/styleContenuBundle.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
        echo "<script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/labocontenu/javascript/javascript.js"), "html", null, true);
        echo "'></script>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <a id=\"a\" href=\"#\">click</a>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:nosprojets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
