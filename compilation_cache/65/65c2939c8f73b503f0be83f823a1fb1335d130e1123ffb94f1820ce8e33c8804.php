<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.html */
class __TwigTemplate_24d3ee63ab69b4769ecabf6c34ff53a4484b72c86f92e43a68936a9bef5de82f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"header\">
\t<div class=\"navigation\">
\t\t<a class=\"site_logo\" href=\"index.php\">League of BRUH</a>
\t\t<a href=\"champion_list.php\" class=\"navigation_link\">Champion list</a>
\t\t<a href=\"runes.php\" class=\"navigation_link\">Runes</a>
\t\t<a href=\"summoner_spells.php\" class=\"navigation_link\">Sammoner spells</a>
\t\t<a href=\"patches.php\" class=\"navigation_link\">Skins updates</a>
\t</div>
\t<a class=\"login_href\" href=\"account.php\"><div class=\"account_icon\" style=\"background-image: url('avatars/";
        // line 9
        echo twig_escape_filter($this->env, ($context["account_name"] ?? null), "html", null, true);
        echo ".jpg')\"></div></a>
</div>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html", "D:\\web\\sites\\lab2\\templates\\header.html");
    }
}
