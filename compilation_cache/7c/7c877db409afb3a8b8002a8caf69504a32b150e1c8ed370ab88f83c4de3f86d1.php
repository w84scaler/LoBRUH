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

/* post_pic_1v1.html */
class __TwigTemplate_ac3f4c15927806987b3429a1bc8db34a42ee489e46176cc151c553bdd3450d8e extends \Twig\Template
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
        echo "<a class=\"post_pic_href\" href=\"champion_page.php?page_id=";
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"post_pic_1v1\" style=\"background-image: url('champions/";
        // line 2
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null), "html", null, true);
        echo ".png')\"></div>
</a>
<a class=\"post_name_href\" href=\"champion_page.php?page_id=";
        // line 4
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"post_name\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["post_head"] ?? null), "html", null, true);
        echo "</div>
</a>";
    }

    public function getTemplateName()
    {
        return "post_pic_1v1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post_pic_1v1.html", "D:\\WT\\sites\\lab2\\templates\\post_pic_1v1.html");
    }
}
