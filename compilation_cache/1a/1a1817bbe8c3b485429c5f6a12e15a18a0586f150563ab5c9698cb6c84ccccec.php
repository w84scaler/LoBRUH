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

/* post_pic_16v9.html */
class __TwigTemplate_dfe7165c9733dd67d6212b25aeaefe6a5cd337af92acf210aa0f1893ecfbf7d0 extends \Twig\Template
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
        echo "<a class=\"post_pic_href\" href=\"";
        echo twig_escape_filter($this->env, ($context["post_href"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"post_pic_16v9\" style=\"background-image: url('skins/";
        // line 2
        echo twig_escape_filter($this->env, ($context["champ_name"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ($context["post_skin_id"] ?? null), "html", null, true);
        echo ".jpg')\"></div>
</a>
<a class=\"post_name_href\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["post_href"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"post_name\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null), "html", null, true);
        echo "</div>
</a>";
    }

    public function getTemplateName()
    {
        return "post_pic_16v9.html";
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
        return new Source("", "post_pic_16v9.html", "D:\\WT\\sites\\lab2\\templates\\post_pic_16v9.html");
    }
}
