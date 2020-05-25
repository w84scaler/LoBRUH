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

/* account.html */
class __TwigTemplate_b0c0a25207c5e058249fc65154ea2aaba251e8e28084195aa6d2ab63f9e7a210 extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" href=\"styles/account_styles.css\">
\t\t";
        // line 8
        $this->loadTemplate("title.html", "account.html", 8)->display(twig_array_merge($context, ["title_add" => ($context["user_name"] ?? null)]));
        // line 9
        echo "\t</head>

\t<body>

\t\t";
        // line 13
        $this->loadTemplate("header.html", "account.html", 13)->display(twig_array_merge($context, ["account_name" => ($context["user_name"] ?? null)]));
        // line 14
        echo "
\t\t<div class=\"main_block\">

\t\t\t";
        // line 17
        $this->loadTemplate("post_header.html", "account.html", 17)->display(twig_array_merge($context, ["post_name" => "Профиль"]));
        // line 18
        echo "
\t\t\t<div class=\"content\">

\t\t\t\t";
        // line 21
        $this->loadTemplate("account_face.html", "account.html", 21)->display(twig_array_merge($context, ["account_name" => ($context["user_name"] ?? null), "account_rating" => "0"]));
        // line 23
        echo "
\t\t\t\t<div class=\"account_comments\">
\t\t\t\t\t";
        // line 25
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
            // line 26
            echo "\t\t\t\t\t<div class=\"account_comment\">
\t\t\t\t\t\t";
            // line 27
            $this->loadTemplate("account_comment.html", "account.html", 27)->display(twig_array_merge($context, ["comment_name" => twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 27), "comment_href" => "champion_page.php", "comment_time" => twig_get_attribute($this->env, $this->source,             // line 29
$context["comment"], "time", [], "any", false, false, false, 29), "comment_text" => twig_get_attribute($this->env, $this->source,             // line 30
$context["comment"], "text", [], "any", false, false, false, 30)]));
            // line 31
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        // line 34
        echo "\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t";
        // line 40
        $this->loadTemplate("footer.html", "account.html", 40)->display($context);
        // line 41
        echo "
\t\t<script src=\"https://kit.fontawesome.com/5d6364b770.js\" crossorigin=\"anonymous\"></script>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "account.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  122 => 40,  114 => 34,  98 => 31,  96 => 30,  95 => 29,  94 => 27,  91 => 26,  74 => 25,  70 => 23,  68 => 21,  63 => 18,  61 => 17,  56 => 14,  54 => 13,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account.html", "D:\\WT\\sites\\lab2\\templates\\account.html");
    }
}
