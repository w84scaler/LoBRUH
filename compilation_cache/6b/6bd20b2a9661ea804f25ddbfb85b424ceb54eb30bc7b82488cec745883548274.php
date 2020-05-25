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

/* champion_page.html */
class __TwigTemplate_52e54f00af3f43c64bf6b5a15063d03866bfc632e53195b37b79ced54b6dbc9c extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" href=\"styles/champion_page.css\">
\t\t";
        // line 8
        $this->loadTemplate("title.html", "champion_page.html", 8)->display(twig_array_merge($context, ["title_add" => ($context["champ_name"] ?? null)]));
        // line 9
        echo "\t</head>

\t<body>

\t\t";
        // line 13
        $this->loadTemplate("header.html", "champion_page.html", 13)->display(twig_array_merge($context, ["account_name" => ($context["user_name"] ?? null)]));
        // line 14
        echo "
\t\t<div class=\"main_block\">

\t\t\t";
        // line 17
        $this->loadTemplate("post_header.html", "champion_page.html", 17)->display(twig_array_merge($context, ["post_name" => twig_get_attribute($this->env, $this->source, ($context["champ_desc"] ?? null), "name", [], "any", false, false, false, 17)]));
        // line 18
        echo "
\t\t\t";
        // line 19
        $this->loadTemplate("champ_desc.html", "champion_page.html", 19)->display(twig_array_merge($context, ["champ_name" => ($context["champ_name"] ?? null), "champ_text" => twig_get_attribute($this->env, $this->source,         // line 20
($context["champ_desc"] ?? null), "description", [], "any", false, false, false, 20)]));
        // line 21
        echo "
\t\t\t";
        // line 22
        $this->loadTemplate("post_header.html", "champion_page.html", 22)->display(twig_array_merge($context, ["post_name" => "Умения"]));
        // line 23
        echo "\t\t\t<div class=\"skills\">
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 25
            echo "\t\t\t\t\t";
            $this->loadTemplate("skill.html", "champion_page.html", 25)->display(twig_array_merge($context, ["skill_id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 25), "skill_name" => twig_get_attribute($this->env, $this->source,             // line 26
$context["skill"], "name", [], "any", false, false, false, 26), "skill_desc" => twig_get_attribute($this->env, $this->source,             // line 27
$context["skill"], "description", [], "any", false, false, false, 27)]));
            // line 28
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>

\t\t\t";
        // line 31
        $this->loadTemplate("post_header.html", "champion_page.html", 31)->display(twig_array_merge($context, ["post_name" => "Доступные образы"]));
        // line 32
        echo "\t\t\t<div class=\"skins\">
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["skins"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skin"]) {
            // line 34
            echo "\t\t\t\t\t<div class=\"skin\">
\t\t\t\t\t";
            // line 35
            $this->loadTemplate("post_pic_16v9.html", "champion_page.html", 35)->display(twig_array_merge($context, ["post_href" => "", "champ_name" =>             // line 36
($context["champ_name"] ?? null), "post_skin_id" => twig_get_attribute($this->env, $this->source,             // line 37
$context["skin"], "id", [], "any", false, false, false, 37), "post_name" => twig_get_attribute($this->env, $this->source,             // line 38
$context["skin"], "name", [], "any", false, false, false, 38)]));
            // line 39
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</div>

\t\t\t";
        // line 43
        $this->loadTemplate("post_header.html", "champion_page.html", 43)->display(twig_array_merge($context, ["post_name" => "Комментарии"]));
        // line 44
        echo "
\t\t\t";
        // line 45
        $this->loadTemplate("comment_form.html", "champion_page.html", 45)->display($context);
        // line 46
        echo "
\t\t\t<div class=\"comments\">
\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 49
            echo "\t\t\t\t<div class=\"comment\">
\t\t\t\t\t";
            // line 50
            $this->loadTemplate("comment.html", "champion_page.html", 50)->display(twig_array_merge($context, ["comment_author" => twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 50), "comment_time" => twig_get_attribute($this->env, $this->source,             // line 51
$context["comment"], "time", [], "any", false, false, false, 51), "comment_text" => twig_get_attribute($this->env, $this->source,             // line 52
$context["comment"], "text", [], "any", false, false, false, 52)]));
            // line 53
            echo "\t\t\t\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t</div>

\t\t</div>

\t\t";
        // line 59
        $this->loadTemplate("footer.html", "champion_page.html", 59)->display($context);
        // line 60
        echo "
\t\t<script src=\"https://kit.fontawesome.com/5d6364b770.js\" crossorigin=\"anonymous\"></script>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "champion_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 60,  222 => 59,  216 => 55,  201 => 53,  199 => 52,  198 => 51,  197 => 50,  194 => 49,  177 => 48,  173 => 46,  171 => 45,  168 => 44,  166 => 43,  162 => 41,  147 => 39,  145 => 38,  144 => 37,  143 => 36,  142 => 35,  139 => 34,  122 => 33,  119 => 32,  117 => 31,  113 => 29,  99 => 28,  97 => 27,  96 => 26,  94 => 25,  77 => 24,  74 => 23,  72 => 22,  69 => 21,  67 => 20,  66 => 19,  63 => 18,  61 => 17,  56 => 14,  54 => 13,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "champion_page.html", "D:\\WT\\sites\\lab2\\templates\\champion_page.html");
    }
}
