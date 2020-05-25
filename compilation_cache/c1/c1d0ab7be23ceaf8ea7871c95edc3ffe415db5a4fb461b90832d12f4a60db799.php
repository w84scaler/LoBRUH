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

/* main_lobruh.html */
class __TwigTemplate_724e52b8cf911c97038993df750543ef6a44549cc5e61ab659364cf71dae3371 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"styles/lobruh_styles.css\">
\t\t<link rel=\"stylesheet\" href=\"styles/main_lobruh_styles.css\">
\t\t<title>LoBRUH</title>
\t</head>

\t<body>

\t\t";
        // line 13
        $this->loadTemplate("header.html", "main_lobruh.html", 13)->display(twig_array_merge($context, ["account_name" => "w84scaler"]));
        // line 14
        echo "
\t\t<div class=\"main_block\">

\t\t\t";
        // line 17
        $this->loadTemplate("post_header.html", "main_lobruh.html", 17)->display(twig_array_merge($context, ["post_name" => "Добро пожаловать на League of BRUH"]));
        // line 18
        echo "\t\t\t<p>
\t\t\t\tЗдравствуй, bruh! Данный проект посвящен всеми ненавистной игре League of Legends от маленькой инди-компании (не многомилионной!) RitoGames. Если тебя вдруг (упаси господь) угораздило играть в ЭТО, то этот сайт будет полезен тебе, если ты вдруг захочешь посмотреть патчноты или узнать что-нибудь о своих любимых чемпионах. Также ты сможешь общаться с другими игроками (не известно как попавшими на этот сайт). И конечно о том что этот сайт юзлесс (скорее вего) история умалчивает. Добро пожаловать)0
\t\t\t</p>

\t\t\t<div class=\"content\">

\t\t\t\t<div class=\"random_champ\">
\t\t\t\t\t";
        // line 25
        $this->loadTemplate("post_header.html", "main_lobruh.html", 25)->display(twig_array_merge($context, ["post_name" => "Случайный чемпион"]));
        // line 26
        echo "\t\t\t\t\t";
        $this->loadTemplate("post_pic_1v1.html", "main_lobruh.html", 26)->display(twig_array_merge($context, ["post_id" => twig_get_attribute($this->env, $this->source, ($context["random_champ"] ?? null), "id", [], "any", false, false, false, 26), "post_name" => twig_get_attribute($this->env, $this->source,         // line 27
($context["random_champ"] ?? null), "name", [], "any", false, false, false, 27), "post_head" => twig_get_attribute($this->env, $this->source,         // line 28
($context["random_champ"] ?? null), "head", [], "any", false, false, false, 28)]));
        // line 29
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"last_skin\">
\t\t\t\t\t";
        // line 32
        $this->loadTemplate("post_header.html", "main_lobruh.html", 32)->display(twig_array_merge($context, ["post_name" => "Случайный образ"]));
        // line 33
        echo "\t\t\t\t\t";
        $this->loadTemplate("post_pic_16v9.html", "main_lobruh.html", 33)->display(twig_array_merge($context, ["post_href" => "", "champ_name" => twig_get_attribute($this->env, $this->source,         // line 34
($context["random_champ"] ?? null), "name", [], "any", false, false, false, 34), "post_skin_id" => twig_get_attribute($this->env, $this->source,         // line 35
($context["random_champ"] ?? null), "skin_id", [], "any", false, false, false, 35), "post_name" => twig_get_attribute($this->env, $this->source,         // line 36
($context["random_champ"] ?? null), "skin_name", [], "any", false, false, false, 36)]));
        // line 37
        echo "\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t";
        // line 43
        $this->loadTemplate("footer.html", "main_lobruh.html", 43)->display($context);
        // line 44
        echo "
\t\t<script src=\"https://kit.fontawesome.com/5d6364b770.js\" crossorigin=\"anonymous\"></script>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "main_lobruh.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  97 => 43,  89 => 37,  87 => 36,  86 => 35,  85 => 34,  83 => 33,  81 => 32,  76 => 29,  74 => 28,  73 => 27,  71 => 26,  69 => 25,  60 => 18,  58 => 17,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main_lobruh.html", "D:\\WT\\sites\\lab2\\templates\\main_lobruh.html");
    }
}
