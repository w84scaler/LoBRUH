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

/* account_face.html */
class __TwigTemplate_49c8d28181c259b2bec95f84f02f8b62a95e534414e3030d15d25b7689e3a77c extends \Twig\Template
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
        echo "<div class=\"account_face\">
\t<div class=\"account_face_icon\" style=\"background-image: url('avatars/";
        // line 2
        echo twig_escape_filter($this->env, ($context["account_name"] ?? null), "html", null, true);
        echo ".jpg')\"></div>
\t<div class=\"account_face_name\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["account_name"] ?? null), "html", null, true);
        echo "</div>
\t<div class=\"account_rating\">Рейтинг: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["account_rating"] ?? null), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "account_face.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account_face.html", "D:\\web\\sites\\lab2\\templates\\account_face.html");
    }
}
