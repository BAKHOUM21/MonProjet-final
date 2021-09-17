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

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig */
class __TwigTemplate_4f0e12acc0d7c4dc5082d58fd9a4baba4f1f5b6d545b1530aa48065f36256920 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'modify_translations' => [$this, 'block_modify_translations'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('modify_translations', $context, $blocks);
    }

    public function block_modify_translations($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? null), 'form_start', ["method" => "get", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_modify")]);
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">description</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify translations", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can modify translations for every line of text inside PrestaShop.", [], "Admin.International.Help"), "html", null, true);
        echo "
                <br>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First, select a type of translation (such as \"Back office\" or \"Installed modules\"), and then select the language you want to translate strings in.", [], "Admin.International.Help"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type of translation", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "translation_type", []), 'errors');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "translation_type", []), 'widget', ["attr" => ["class" => "js-translation-type"]]);
        echo "
          </div>
        </div>
        <div class=\"form-group row js-email-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the type of email content", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "email_content_type", []), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "email_content_type", []), 'widget', ["attr" => ["class" => "js-email-content-type"]]);
        echo "
          </div>
        </div>
        <div class=\"form-group row js-theme-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your theme", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "theme", []), 'errors');
        echo "
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "theme", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row js-module-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your module", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "module", []), 'errors');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "module", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "language", []), 'errors');
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "language", []), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["modifyTranslationsForm"] ?? null), 'rest');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">edit</i>
          <span>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 109,  178 => 103,  167 => 95,  161 => 92,  157 => 91,  151 => 88,  143 => 83,  139 => 82,  133 => 79,  125 => 74,  121 => 73,  115 => 70,  107 => 65,  103 => 64,  97 => 61,  89 => 56,  85 => 55,  79 => 52,  68 => 44,  63 => 42,  51 => 33,  43 => 29,  37 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig", "C:\\wamp64\\www\\MonProjet\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Translations\\Blocks\\modify_translations.html.twig");
    }
}
