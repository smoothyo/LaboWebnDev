<?php

/* LaboContenuBundle:Default:projetequipe.html.twig */
class __TwigTemplate_9fa82064d5cda6b62f48674d9a3d487a extends Twig_Template
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
        echo "    <h1>Les projets en équipe</h1>
    <img class=\"logo_technologies\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/labocontenu/images/equipe.jpg"), "html", null, true);
        echo "\"/>
    <p>
        En cette nouvelle année, le labo Web’n’Dev tient à mettre en œuvre <b>l’esprit d'équipe</b>.<br><br>
        Comme nous le savons tous, dans une entreprise le travail d’équipe est une base fondamentale.
        C’est pour cela que <b>l’entre-aide</b> sera un de nos buts et points forts…<br><br>

        Ainsi, le labo Web’n'Dev de SUPINFO Paris compte former des <b>groupes</b> de travail menés par des chefs de projets.
        Ces formations de quelques élèves participeront à <b>des briefing réguliers</b> et seront contraints à des <b>deadlines fréquentes</b>.
        Ainsi dans un tel encadrement, <b>le laboratoire pousse ses membres à l’excellence</b>…
        (Excellence d’autant plus importante que vous projets seront proposés comme tel)<br><br>

        C’est dans une humeur de convivialité que le labo vous invite à travailler et reste disponible à vous tous au travers de ce site, de la plate-forme « Level Up »
        et à SUPINFO même.<br><br>
    </p>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:projetequipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
