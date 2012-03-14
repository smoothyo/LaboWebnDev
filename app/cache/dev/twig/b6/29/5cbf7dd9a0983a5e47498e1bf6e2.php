<?php

/* LaboContenuBundle:Default:technologiesweb.html.twig */
class __TwigTemplate_b6295cbf7dd9a0983a5e47498e1bf6e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'css' => array($this, 'block_css'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Les technologies web</h1>
    <img class=\"logo_technologies\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/labocontenu/images/techno.png"), "html", null, true);
        echo "\"/>
    <p>
        En vue d’incarner un esprit de développement à la fois innovateur et performant, le labo <b>Web’n'Dev</b> s’est lancé dans une période de renouveau.
        Les idées fusent façe aux technologies émergentes du Web.
        Ainsi, notre laboratoire veut à tout prix promouvoir la veille technologique.<br><br>
        Le laboratoire <b>Web’n'Dev</b> de <b>SUPINFO</b> Paris encadrera des ateliers d’entraide, de création, de projets.
        Au programme, les indispensables tel : que le <b>CSS3</b>, <b>l’HTML5</b>, <b>JavaScript</b>, <b>jQuery</b> le <b>php/MySQL</b>, …
        Nous verrons aussi les méthodes de développements sur terminaux mobiles et nous pourrons étudier le célèbre CMS (Content Management System) <b>WordPress</b>.
        Dans un souci de perfection, nous développerons de manière à valider nos créations <b>W3C</b>.
    </p>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:technologiesweb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
