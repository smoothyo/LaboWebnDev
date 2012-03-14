<?php

/* ::layout.html.twig */
class __TwigTemplate_fd194b78d15cc6c5305824a8fb944e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <title>Laboratoire Web Supinfo</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "        
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js\"></script>
        ";
        // line 11
        $this->displayBlock('js', $context, $blocks);
        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/javascript.js"), "html", null, true);
        echo "\"></script>
    </head>
    
    <body>
        <div class=\"all\">
            <header>
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/supinfoLogo.png"), "html", null, true);
        echo "\" class=\"logoSupinfo\"/>
                <h1>Laboratoire Developpement Web</h1>
            </header>   
            <nav>
                <ul id=\"nav\">
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_homepage"), "html", null, true);
        echo "\" class=\"active\">Accueil</a></li>
                    <li class=\"jq\"><a href=\"\">Le Labo</a>
                        <ul class=\"sous-menu\">
                            <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_presentation"), "html", null, true);
        echo "\" title=\"Présentation\">Présentation</a></li>
                            <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_technologiesweb"), "html", null, true);
        echo "\" title=\"Les technologies Web\">Les technologies Web</a></li>
                            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_projetequipe"), "html", null, true);
        echo "\" title=\"Les projets en équipe\">Les projets en équipe</a></li>
                        </ul>

                    </li>
                    <li><a class=\"li\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_communaute"), "html", null, true);
        echo "\" title=\"Communauté\">Communauté</a></li>
                    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LaboContenuBundle_nosprojets"), "html", null, true);
        echo "\" title=\"Nos projets\">Nos projets 2012</a></li>
                    <li><a href=\"#\" title=\"Inscription\">Inscription [fermé]</a></li>
                </ul>
            </nav>
                
                <div id=\"corps\">
                    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "                </div>
                    
                <aside>
                    ";
        // line 44
        $this->displayBlock('aside', $context, $blocks);
        // line 48
        echo "                </aside>
        </div>
    </body>
</html>";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "                    ";
    }

    // line 44
    public function block_aside($context, array $blocks = array())
    {
        // line 45
        echo "                        <div class=clickme\">clickez</div>
                        <img class=\"img\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/supinfoLogo.png"), "html", null, true);
        echo "\" style=\"display: none\" width=\"100\" height=\"123\" />
                    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
