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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig */
class __TwigTemplate_0da983fa8a24e5f3b24a2ebed50c6ab87ecf5168c482f02dc4a697679c99e477 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'manufacturer_form_rest' => [$this, 'block_manufacturer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brands", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? null), 'errors');
        echo "

      ";
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["invalidCatalogNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" =>         // line 44
($context["invalidCatalogNameHint"] ?? null)]);
        // line 45
        echo "

      ";
        // line 47
        ob_start(function () { return ''; });
        // line 48
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}"), "html", null, true);
        echo "
      ";
        $context["invalidGenericNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
      ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "short_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Short description", [], "Admin.Catalog.Feature")]);
        // line 53
        echo "

      ";
        // line 55
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global")]);
        // line 57
        echo "

      ";
        // line 59
        ob_start(function () { return ''; });
        // line 60
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a brand logo from your computer.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
      ";
        $context["logoHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
      ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "logo", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logo", [], "Admin.Global"), "help" =>         // line 65
($context["logoHint"] ?? null)]);
        // line 66
        echo "

      ";
        // line 68
        if (((isset($context["logoImage"]) || array_key_exists("logoImage", $context)) &&  !(null === ($context["logoImage"] ?? null)))) {
            // line 69
            echo "        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 72
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 72)->display($context);
            // line 73
            echo "          </div>
        </div>
      ";
        }
        // line 76
        echo "
      ";
        // line 77
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Catalog.Feature"), "help" =>         // line 79
($context["invalidGenericNameHint"] ?? null)]);
        // line 80
        echo "

      ";
        // line 82
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 84
($context["invalidGenericNameHint"] ?? null)]);
        // line 85
        echo "

      ";
        // line 87
        ob_start(function () { return ''; });
        // line 88
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 89
        echo twig_escape_filter($this->env, ($context["invalidGenericNameHint"] ?? null), "html", null, true);
        echo "
      ";
        $context["keywordHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
      ";
        // line 92
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 94
($context["keywordHint"] ?? null)]);
        // line 95
        echo "

      ";
        // line 97
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "is_enabled", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled", [], "Admin.Global")]);
        // line 99
        echo "

      ";
        // line 101
        if ($this->getAttribute(($context["manufacturerForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 102
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["manufacturerForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 104
            echo "
      ";
        }
        // line 106
        echo "
      ";
        // line 107
        $this->displayBlock('manufacturer_form_rest', $context, $blocks);
        // line 110
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 107
    public function block_manufacturer_form_rest($context, array $blocks = [])
    {
        // line 108
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 108,  218 => 107,  212 => 121,  205 => 117,  199 => 114,  195 => 113,  190 => 110,  188 => 107,  185 => 106,  181 => 104,  178 => 102,  176 => 101,  172 => 99,  170 => 97,  166 => 95,  164 => 94,  163 => 92,  160 => 91,  155 => 89,  150 => 88,  148 => 87,  144 => 85,  142 => 84,  141 => 82,  137 => 80,  135 => 79,  134 => 77,  131 => 76,  126 => 73,  124 => 72,  119 => 69,  117 => 68,  113 => 66,  111 => 65,  110 => 63,  107 => 62,  101 => 60,  99 => 59,  95 => 57,  93 => 55,  89 => 53,  87 => 51,  84 => 50,  78 => 48,  76 => 47,  72 => 45,  70 => 44,  69 => 42,  66 => 41,  60 => 39,  58 => 38,  53 => 36,  46 => 32,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", "C:\\wamp64\\www\\MonProjet\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\form.html.twig");
    }
}
