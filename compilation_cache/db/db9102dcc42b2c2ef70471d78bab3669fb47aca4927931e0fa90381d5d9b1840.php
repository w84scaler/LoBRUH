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

/* champion_list.html */
class __TwigTemplate_57900e0b796a2885040c8b9c73b21c0a35b8d1c852460c2aafc17e8fdf56d024 extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" href=\"styles/champion_list_styles.css\">
\t\t";
        // line 8
        $this->loadTemplate("title.html", "champion_list.html", 8)->display(twig_array_merge($context, ["title_add" => "Champlist"]));
        // line 9
        echo "\t</head>

\t<body>

\t\t";
        // line 13
        $this->loadTemplate("header.html", "champion_list.html", 13)->display(twig_array_merge($context, ["account_name" => "w84scaler"]));
        // line 14
        echo "
\t\t<div class=\"main_block\">

\t\t\t";
        // line 17
        $this->loadTemplate("post_header.html", "champion_list.html", 17)->display(twig_array_merge($context, ["post_name" => "Добро пожаловать на League of BRUH"]));
        // line 18
        echo "
\t\t\t";
        // line 19
        $this->loadTemplate("search_form.html", "champion_list.html", 19)->display($context);
        // line 20
        echo "
\t\t\t<div class=\"content\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["champions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["champion"]) {
            // line 23
            echo "\t\t\t\t\t<div class=\"champion\">
\t\t\t\t\t";
            // line 24
            $this->loadTemplate("post_pic_1v1.html", "champion_list.html", 24)->display(twig_array_merge($context, ["post_id" => twig_get_attribute($this->env, $this->source, $context["champion"], "id", [], "any", false, false, false, 24), "post_name" => twig_get_attribute($this->env, $this->source,             // line 25
$context["champion"], "name", [], "any", false, false, false, 25), "post_head" => twig_get_attribute($this->env, $this->source,             // line 26
$context["champion"], "name", [], "any", false, false, false, 26)]));
            // line 27
            echo "\t\t\t\t\t</div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>

\t\t</div>

\t\t";
        // line 33
        $this->loadTemplate("footer.html", "champion_list.html", 33)->display($context);
        // line 34
        echo "
\t\t<script src=\"https://kit.fontawesome.com/5d6364b770.js\" crossorigin=\"anonymous\"></script>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "champion_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  117 => 33,  111 => 29,  96 => 27,  94 => 26,  93 => 25,  92 => 24,  89 => 23,  72 => 22,  68 => 20,  66 => 19,  63 => 18,  61 => 17,  56 => 14,  54 => 13,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "champion_list.html", "D:\\WT\\sites\\lab2\\templates\\champion_list.html");
    }
}
