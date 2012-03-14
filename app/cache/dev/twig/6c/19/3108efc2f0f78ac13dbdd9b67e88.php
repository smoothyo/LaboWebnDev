<?php

/* LaboContenuBundle:Default:communaute.html.twig */
class __TwigTemplate_6c193108efc2f0f78ac13dbdd9b67e88 extends Twig_Template
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
        echo "    <h1>Communauté</h1>
    <h3>La plateforme \"Level Up\":</h3>
    <p>
        Cette année le laboratoire innove en mettant en place <b>une plateforme communautaire</b> d’aide au développement web. 
        La plateforme « <b>Level-Up</b> » est là pour tout les étudiants de SUPINFO souhaitant poser des questions concernant leur problèmes techniques en matière
        de développement.<br><br>
        Si vous vous êtes déjà confronté à un <b>problème insolvable</b> par vous-même, n’auriez vous pas voulu trouver des gens pour vous aider rapidement ? 
        Plus la peine de fouiller dans les forums, venez directement poser la question sur la plateforme « <b>Level-Up</b> »  et la communauté vous répondra.
    </p>
    <h3>Comment ça marche:</h3>
    <p>
        Le labo Web’n'Dev se reconcentre sur l’essentiel et met en avant l’aide entre les étudiants. 
        Vivons ensemble <b>le renouveau du communautaire online</b> ! Grâce à « <b>Level-Up</b> », tout le monde est gagnant : <b>on y apprend et on s’y construit une notoriété</b>.<br><br>
        Aidez vos collègues qui sont en difficulté et suivant la qualité de votre réponse, les internautes vous noteront. 
        Ainsi vous gagnerez en <b>confiance et en réputation : identifions les nouveaux experts de demain par vos participations !</b><br><br>
        C’est dans ce contexte convivial que le labo. Web’n'Dev de SUPINFO Paris vous accueille… Alors n’hésitez plus, la Plateforme « Level-Up » est <b>faite pour vous</b>.
    </p>
    <img class=\"logo_technologies\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/labocontenu/images/levelup.png"), "html", null, true);
        echo " \"/>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:communaute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
