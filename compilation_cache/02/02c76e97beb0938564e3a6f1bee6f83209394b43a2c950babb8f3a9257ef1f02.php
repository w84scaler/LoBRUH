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

/* sign_in_page.html */
class __TwigTemplate_c1f2cc3d6829266c84e59566733369823a91f4e7d7f6ee3c07ece05aa0b09129 extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" href=\"styles/sign_in_page_styles.css\">
\t\t";
        // line 8
        $this->loadTemplate("title.html", "sign_in_page.html", 8)->display(twig_array_merge($context, ["title_add" => " - Sign in"]));
        // line 9
        echo "\t</head>

\t<body>
\t\t<div class=\"empty_header\">
\t\t\t<div class=\"logo\">League of BRUH</div>
\t\t</div>
\t\t<div class=\"main_block\">

\t\t\t<form class=\"sign_in\" action=\"sign_in.php\">
\t\t\t\t<div class=\"work_section\">
\t\t\t\t\t";
        // line 19
        $this->loadTemplate("post_header.html", "sign_in_page.html", 19)->display(twig_array_merge($context, ["post_name" => "Sign In"]));
        // line 20
        echo "\t\t\t\t\t<div class=\"text_section\">
\t\t\t\t\t\t<input type=\"text\" class=\"text_input\" placeholder=\"Login\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_section\">
\t\t\t\t\t\t<input type=\"password\" class=\"text_input\" placeholder=\"Password\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" class=\"sign_in_button\" value=\"Sign In\">
\t\t\t\t</div>
\t\t\t</form>

\t\t</div>

\t\t";
        // line 32
        $this->loadTemplate("footer.html", "sign_in_page.html", 32)->display($context);
        // line 33
        echo "
\t\t<script src=\"https://kit.fontawesome.com/5d6364b770.js\" crossorigin=\"anonymous\"></script>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "sign_in_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  76 => 32,  62 => 20,  60 => 19,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sign_in_page.html", "D:\\web\\sites\\lab2\\templates\\sign_in_page.html");
    }
}
