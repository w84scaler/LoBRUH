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

/* comment_form.html */
class __TwigTemplate_90bb43a3e10163bdf37ec3fd400bc326fcfafcdb73453c5ba9125424a4d690b3 extends \Twig\Template
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
        echo "<form action=\"comment.php?page_id=";
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\" class=\"comment_form\" method=\"post\">
\t<input name=\"text\" class=\"comment_text\" type=\"text\" placeholder=\"Ваш комментарий..\">
\t<input class=\"comment_button\" type=\"submit\" value=\"Отправить\">
</form>";
    }

    public function getTemplateName()
    {
        return "comment_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comment_form.html", "D:\\WT\\sites\\lab2\\templates\\comment_form.html");
    }
}
