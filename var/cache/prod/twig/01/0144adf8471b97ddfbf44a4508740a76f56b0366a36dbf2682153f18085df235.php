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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig */
class __TwigTemplate_6817734c490906e48c9c670bdd644ef58c6294ad27ca1184ff236596d5308514 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'supplier_form_rest' => [$this, 'block_supplier_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Suppliers", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">

      ";
        // line 37
        ob_start(function () { return ''; });
        // line 38
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["invalidCatalogNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
      ";
        // line 41
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" =>         // line 43
($context["invalidCatalogNameHint"] ?? null)]);
        // line 44
        echo "

      ";
        // line 46
        ob_start(function () { return ''; });
        // line 47
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}"), "html", null, true);
        echo "
      ";
        $context["invalidGenericNameHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
      ";
        // line 50
        ob_start(function () { return ''; });
        // line 51
        echo "        ";
        // line 52
        echo "          ";
        echo ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear in the list of suppliers.", [], "Admin.Catalog.Help") . ($context["invalidCatalogNameHint"] ?? null));
        echo "
        ";
        // line 54
        echo "      ";
        $context["descriptionHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
      ";
        // line 56
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "help" =>         // line 58
($context["descriptionHint"] ?? null)]);
        // line 59
        echo "

      ";
        // line 61
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "phone", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home phone", [], "Admin.Global"), "hint" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone number for this supplier", [], "Admin.Catalog.Help")]);
        // line 64
        echo "

      ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "mobile_phone", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone", [], "Admin.Global"), "hint" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone number for this supplier.", [], "Admin.Catalog.Help")]);
        // line 69
        echo "

      ";
        // line 71
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "address", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global")]);
        // line 73
        echo "

      ";
        // line 75
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "address2", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address (2)", [], "Admin.Global")]);
        // line 77
        echo "

      ";
        // line 79
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "post_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip/postal code", [], "Admin.Global")]);
        // line 81
        echo "

      ";
        // line 83
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "city", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "Admin.Global")]);
        // line 85
        echo "

      ";
        // line 87
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "id_country", []), ["attr" => ["class" => "js-supplier-country-select", "data-states-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_states")]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global")]);
        // line 91
        echo "

      <div class=\"js-supplier-state";
        // line 93
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["supplierForm"] ?? null), "id_state", []), "vars", []), "choices", []))) {
            echo " d-none";
        }
        echo "\">
        ";
        // line 94
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "id_state", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State", [], "Admin.Global")]);
        // line 96
        echo "
      </div>

      ";
        // line 99
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "dni", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DNI", [], "Admin.Global")]);
        // line 101
        echo "

      ";
        // line 103
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "logo", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logo", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a supplier logo from your computer.", [], "Admin.Catalog.Help")]);
        // line 106
        echo "

      ";
        // line 108
        if (((isset($context["logoImage"]) || array_key_exists("logoImage", $context)) &&  !(null === ($context["logoImage"] ?? null)))) {
            // line 109
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 112
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", 112)->display($context);
            // line 113
            echo "          </div>
        </div>
      ";
        }
        // line 116
        echo "
      ";
        // line 117
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Catalog.Feature"), "help" =>         // line 119
($context["invalidGenericNameHint"] ?? null)]);
        // line 120
        echo "

      ";
        // line 122
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 124
($context["invalidGenericNameHint"] ?? null)]);
        // line 125
        echo "

      ";
        // line 127
        ob_start(function () { return ''; });
        // line 128
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 129
        echo twig_escape_filter($this->env, ($context["invalidGenericNameHint"] ?? null), "html", null, true);
        echo "
      ";
        $context["keywordHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "
      ";
        // line 132
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 134
($context["keywordHint"] ?? null)]);
        // line 135
        echo "

      ";
        // line 137
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "is_enabled", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled", [], "Admin.Global")]);
        // line 139
        echo "

      ";
        // line 141
        if ($this->getAttribute(($context["supplierForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 142
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["supplierForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 144
            echo "
      ";
        }
        // line 146
        echo "
      ";
        // line 147
        $this->displayBlock('supplier_form_rest', $context, $blocks);
        // line 150
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
 ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 147
    public function block_supplier_form_rest($context, array $blocks = [])
    {
        // line 148
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["supplierForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 148,  274 => 147,  268 => 162,  261 => 158,  255 => 155,  251 => 154,  245 => 150,  243 => 147,  240 => 146,  236 => 144,  233 => 142,  231 => 141,  227 => 139,  225 => 137,  221 => 135,  219 => 134,  218 => 132,  215 => 131,  210 => 129,  205 => 128,  203 => 127,  199 => 125,  197 => 124,  196 => 122,  192 => 120,  190 => 119,  189 => 117,  186 => 116,  181 => 113,  179 => 112,  174 => 109,  172 => 108,  168 => 106,  166 => 103,  162 => 101,  160 => 99,  155 => 96,  153 => 94,  147 => 93,  143 => 91,  141 => 87,  137 => 85,  135 => 83,  131 => 81,  129 => 79,  125 => 77,  123 => 75,  119 => 73,  117 => 71,  113 => 69,  111 => 66,  107 => 64,  105 => 61,  101 => 59,  99 => 58,  98 => 56,  95 => 55,  92 => 54,  87 => 52,  85 => 51,  83 => 50,  80 => 49,  74 => 47,  72 => 46,  68 => 44,  66 => 43,  65 => 41,  62 => 40,  56 => 38,  54 => 37,  46 => 32,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", "C:\\wamp64\\www\\MonProjet\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Suppliers\\Blocks\\form.html.twig");
    }
}
