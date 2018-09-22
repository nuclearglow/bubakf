<?php

/* pagination.html */
class __TwigTemplate_5b720b9e8485f40ee294777e7171097b3224b3c218150d1175436b81c9b0af0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
";
        // line 2
        if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
            // line 3
            echo "\t<li class=\"dropdown-container dropdown-button-control dropdown-page-jump page-jump\">
\t\t<a class=\"button button-icon-only dropdown-trigger\" href=\"#\" title=\"";
            // line 4
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE_CLICK");
            echo "\" role=\"button\"><i class=\"icon fa-level-down fa-rotate-270\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</span></a>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t<li>";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</li>
\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" max=\"999999\" title=\"";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_PAGE");
            echo "\" class=\"inputbox tiny\" data-per-page=\"";
            echo ($context["PER_PAGE"] ?? null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
            echo "\" data-start-name=\"";
            echo ($context["START_NAME"] ?? null);
            echo "\" />
\t\t\t\t\t<input class=\"button2\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
";
        }
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 18
            echo "\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 19
                echo "\t\t<li class=\"arrow previous\"><a class=\"button button-icon-only\" href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\"><i class=\"icon fa-chevron-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                echo "</span></a></li>
\t";
            } elseif ($this->getAttribute(            // line 20
$context["pagination"], "S_IS_CURRENT", array())) {
                // line 21
                echo "\t<li class=\"active\"><span>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</span></li>
\t";
            } elseif ($this->getAttribute(            // line 22
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                // line 23
                echo "\t<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                echo "</span></li>
\t";
            } elseif ($this->getAttribute(            // line 24
$context["pagination"], "S_IS_NEXT", array())) {
                // line 25
                echo "\t\t<li class=\"arrow next\"><a class=\"button button-icon-only\" href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\"><i class=\"icon fa-chevron-right fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                echo "</span></a></li>
\t";
            } else {
                // line 27
                echo "\t\t<li><a class=\"button\" href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" role=\"button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  99 => 27,  91 => 25,  89 => 24,  84 => 23,  82 => 22,  77 => 21,  75 => 20,  68 => 19,  65 => 18,  61 => 17,  52 => 11,  42 => 10,  36 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pagination.html", "");
    }
}
