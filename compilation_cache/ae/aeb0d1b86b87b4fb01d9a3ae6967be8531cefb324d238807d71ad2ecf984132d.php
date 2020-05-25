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

/* skill.html */
class __TwigTemplate_708fb07268a7ffc54de469c3ec885a38839f0d7256d16269b9a68348e8295128 extends \Twig\Template
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
        echo "<div class=\"skill_pic\" style=\"background-image: url('champions/";
        echo twig_escape_filter($this->env, ($context["champ_name"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["champ_name"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["skill_id"] ?? null), "html", null, true);
        echo ".png')\"> </div>
<div class=\"skill_desc\">
\t<div class=\"skill_name\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["skill_name"] ?? null), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, ($context["skill_id"] ?? null), "html", null, true);
        echo "]</div>
\t<p>";
        // line 4
        echo twig_escape_filter($this->env, ($context["skill_desc"] ?? null), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "skill.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  46 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "skill.html", "D:\\WT\\sites\\lab2\\templates\\skill.html");
    }
}
