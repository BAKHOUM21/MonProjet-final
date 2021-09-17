<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/pagination_quicknav.html.twig */
class __TwigTemplate_e84b132fba39c820620da477f8a4d5ca72c3acdc8f54179d801fc4dec60c89c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        if ((($context["previous_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if (($context["first_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if (($context["first_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["first_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if (($context["previous_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 32
            if (($context["previous_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["previous_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, ($context["jump_page_url"] ?? null), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && (($context["next_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
            // line 39
            if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && (($context["next_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["next_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && (($context["last_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && (($context["last_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["last_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  103 => 41,  92 => 39,  85 => 38,  74 => 36,  61 => 32,  54 => 31,  43 => 29,  36 => 28,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig", "C:\\wamp64\\www\\MonProjet\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\pagination_quicknav.html.twig");
    }
}
