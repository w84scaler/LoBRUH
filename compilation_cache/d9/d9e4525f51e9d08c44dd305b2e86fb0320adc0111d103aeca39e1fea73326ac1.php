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

/* comment.html */
class __TwigTemplate_42edfb8ae72eabc96d7a547057608816c534d5dbcb62457dd0108e573154bc50 extends \Twig\Template
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
        echo "<div class=\"comment_header\">
\t<a class=\"author_href\" href=\"/account.php\"><div class=\"author_icon\" style=\"background-image: url('/avatars/";
        // line 2
        echo twig_escape_filter($this->env, ($context["comment_author"] ?? null), "html", null, true);
        echo ".jpg')\"></div></a>
\t<div class=\"comment_name\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["comment_author"] ?? null), "html", null, true);
        echo "<br>";
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
        return "comment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comment.html", "D:\\WT\\sites\\lab2\\templates\\comment.html");
    }
}
