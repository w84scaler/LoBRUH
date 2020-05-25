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

/* search_form.html */
class __TwigTemplate_356f683e56193b5158b55555a6eb0e719da2f34fa4512e93f96800aa1d7043a1 extends \Twig\Template
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
        echo "<form action=\"champion_list.php\" class=\"search_form\" method=\"get\">
\t<input name=\"search\" class=\"search_text\" type=\"text\" placeholder=\"Имя чемпиона\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["form_text"] ?? null), "html", null, true);
        echo "\">
\t<input class=\"search_button\" type=\"submit\" value=\"Найти\">
</form>";
    }

    public function getTemplateName()
    {
        return "search_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_form.html", "D:\\WT\\sites\\lab2\\templates\\search_form.html");
    }
}
