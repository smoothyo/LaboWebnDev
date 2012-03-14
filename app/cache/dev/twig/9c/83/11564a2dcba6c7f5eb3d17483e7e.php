<?php

/* LaboContenuBundle:Default:presentation.html.twig */
class __TwigTemplate_9c8311564a2dcba6c7f5eb3d17483e7e extends Twig_Template
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
        echo "    <h1>Le laboratoire Web'n'Dev</h1>
    <h3>Mais, au fait qu'est ce que le laboratoire Web'n'Dev ?</h3>
    <p>
        Tous d’abord, le labo’ Web’n'Dev est un laboratoire de <b>SUPINFO Paris</b> qui traite essentiellement des technologies du développement web :
        des langages tels que le <b>PHP</b>, le <b>jQuery</b>, les <b>différents frameworks</b> (notamment Symfony, Zend, …),
        la prise en main des <b>CMS</b> les plus populaires (<b>WordPress, Drupal</b>), le respect des normes <b>W3C</b>,
        sans oublier de passer par la création pour <b>les plateformes mobiles</b>.
    </p>
    <h3>Comment fonctionne ce laboratoire et qui le gère ?</h3>
    <p>
        Sur le campus de <b>SUPINFO Paris</b>, les deux CLM (Campus Lab Mangers) sont <b>Arthur BERZIERI et Cédric OUALLET</b>.
        Pour épauler ces deux derniers, <b>Thibault HARTEEL</b> s’occupe de la communication au sein du laboratoire et notamment sur le site internet du labo. Web’n'Dev.
    </p>
    <h3>Comment sont organisés les projets ?</h3>
    <p>
        En ce qui concerne les projets, <b>nous constituons des groupes pilotés en interne par des chefs de projets</b> qui devront mener des réunions
        et auront pour objectif de piloter les autres membres afin de faire avancer le projet en un temps imparti (les fameuses deadlines). <br><br>
        Des réunions de laboratoire auront lieu tout au long de l’année afin d’avoir de la visibilité sur l’avancée des groupes.
        Le but est de faire le point régulièrement sur l’avancement des projets et de pouvoir tous monter en compétence, que le projet ai abouti ou non.<br><br>
        Allez jetez un coup d’œil sur notre page : <a href=\"#\"> » Nos projets 2012 «</a>  pour en savoir plus.
    </p>
    <h3>Vers qui se tourner en cas de problème ou pour toute question ?</h3>
    <p>
        Vous pouvez envoyer des mails aux deux CLM du laboratoire:<br>
        <ul>
            <li>Arthur BERZIERI: <a href=\"mailto: 125154@supinfo.com\">125154@supinfo.com</a></li>
            <li>Cedric OUALLET: <a href=\"mailto: 126123@supinfo.com\">126123@supinfo.com</a></li>
        </ul>
    </p>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
