<?php

/* LaboContenuBundle:Default:index.html.twig */
class __TwigTemplate_5ee82e2d8bf8e6c008cb75ff04d682d4 extends Twig_Template
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
        echo "    <h1>Accueil</h1>
    <h3 class=\"index\">Le laboratoire Web'n'Dev 2011/2012 de supinfo ouvre ses portes !</h3>
    <p>
        <b>D</b>orénavant, découvrez un labo’ tout neuf : nouvelle équipe, nouveaux projets, nouveaux outils…<br>
        Partez à l’aventure au travers des technologies du développement web, le tout dans un très bon « team spirit », au sein d’une communauté active.
    </p>
    <div id=\"block_article\">
        <div class=\"article1\">
            <article>
            <h3>Technologies Web</h3>
            <p>
                En vue d’incarner un esprit de développement à la fois innovateur et performant, le labo <b>Web’n'Dev</b> s’est lancé dans une période de renouveau. 
                Les idées fusent face aux <b>technologies émergentes</b> du Web. Ainsi, notre laboratoire veut à tout prix rester à la veille technologique…
                <a href=\"\">En savoir +</a>
            </p>
            </article>  
        </div>

        <div class=\"article1\">
            <article>
                <h3>Projets en equipe</h3>
                <p>
                    En cette nouvelle année, le labo Web’n'Dev tient à mettre en oeuvre <b>l’esprit en équipe.</b>
                    Comme nous le savons tous, dans une entreprise le travail d’équipe est une base fondamentale.
                    C’est pour cela que <b>l’entre-aide</b> sera un de nos buts et points forts…<br>
                    <a href=\"\">En savoir +</a>
                </p>
            </article>
        </div>
            
        <div class=\"article1\">
            <article>
                <h3>Communauté</h3>
                <p>
                    Vous vous êtes déjà confronté à un <b>problème insolvable</b> par vous-même ?
                    Dans les domaines du web développement, la Plateforme « <b>Level-Up</b> » résoudra tous vos problèmes. 
                    En effet, le labo Web’n'Dev se veut pionnier au niveau <b>communautaire online !</b> …
                    <a href=\"\">En savoir +</a>
                </p>
            </article>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LaboContenuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
