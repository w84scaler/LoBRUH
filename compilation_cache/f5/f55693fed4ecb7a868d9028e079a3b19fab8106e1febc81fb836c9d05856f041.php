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

/* champ_desc.html */
class __TwigTemplate_83e3408eacaea7d316fe61f78f882d910928baf380fe8232571a64f9596a2024 extends \Twig\Template
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
        echo "<div class=\"champ_desc\">
\t<div class=\"champ_pic\" style=\"background-image: url('champions/";
        // line 2
        echo twig_escape_filter($this->env, ($context["champ_name"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["champ_name"] ?? null), "html", null, true);
        echo ".png')\"> </div>
\t<div class=\"champ_text\">
\t\t<p>
\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, ($context["champ_text"] ?? null), "html", null, true);
        echo "
\t\t</p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "champ_desc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "champ_desc.html", "D:\\WT\\sites\\lab2\\templates\\champ_desc.html");
    }
}
