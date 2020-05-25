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

/* account_comment.html */
class __TwigTemplate_ff84f5bfbe59fd8ddb8e424982b61f1ed7bf1711efe506c5802d604cd3074037 extends \Twig\Template
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
        echo "<div class=\"account_comment_header\">
\t<a class=\"account_comment_href\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["comment_href"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["comment_name"] ?? null), "html", null, true);
        echo "</a>
\t<div class=\"account_comment_time\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["comment_time"] ?? null), "html", null, true);
        echo "</div>
</div>
<p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["comment_text"] ?? null), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "account_comment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account_comment.html", "D:\\web\\sites\\lab2\\templates\\account_comment.html");
    }
}
