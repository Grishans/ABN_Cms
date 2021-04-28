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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/textile.htm */
class __TwigTemplate_b744b45c42ca98b3dfd5962d6fdaca527110772d99dc4784e03bd1c0c6fe329c extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1);
        $filters = array("theme" => 6, "escape" => 10, "raw" => 12, "replace" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['theme', 'escape', 'raw', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["textile"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["textileList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap textile\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullBlock__textile__wrap\">
      <div class=\"ftw__text\">
        <p class=\"content__title\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "title_page_1", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
        </p>
          ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
      </div>
      <div class=\"ftw__img\">
        <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/textileVectorTop.png");
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__textile1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_3", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__textile2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__textile__wrap\">
      <div class=\"ctw__block1\">
        <img class=\"textile__block1__bg\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "image_1_page_2", [], "any", false, false, true, 24), "thumb", [0 => 600, 1 => 600, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        <div class=\"ctwb1__text\">
          <p class=\"content__title\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "title_page_2", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
          </p>
            ";
        // line 29
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_2", [], "any", false, false, true, 29), 29, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
      </div>
      <div class=\"ctw__block2\">
        <div class=\"ctw__block2__wrap\">
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 36
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 36), 36, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 40
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 40), 40, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 44
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 44), 44, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>

        <img class=\"textile__block2__bg1\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "image_2_page_2", [], "any", false, false, true, 51), "thumb", [0 => 600, 1 => 600, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
      <div class=\"footer\">
        <p>
          © 2021
          <a href=\"https://itd.company/portfolio/\">ITD Company.</a>
          All rights reserved
        </p>
      </div>
    </div>
  </div>
  <img class=\"textile__block2__bg2\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoBottom.svg");
        echo "\" alt=\"\" />
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/textile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  161 => 51,  151 => 44,  147 => 43,  141 => 40,  137 => 39,  131 => 36,  127 => 35,  118 => 29,  113 => 27,  107 => 24,  99 => 19,  95 => 18,  89 => 15,  83 => 12,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set textile = textileList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap textile\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__textile__wrap\">
      <div class=\"ftw__text\">
        <p class=\"content__title\">
          {{ textile.title_page_1 }}
        </p>
          {{ textile.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
      </div>
      <div class=\"ftw__img\">
        <img src=\"{{ 'assets/img/Textile/textileVectorTop.png'|theme }}\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__textile1\">{{ menu.item_3 }}</div>
    <div class=\"mainTitle mainTitle__textile2\">{{ menu.item_4 }}</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__textile__wrap\">
      <div class=\"ctw__block1\">
        <img class=\"textile__block1__bg\" src=\"{{ textile.image_1_page_2.thumb(600, 600, {mode:'auto', quality:85}) }}\" alt=\"\" />
        <div class=\"ctwb1__text\">
          <p class=\"content__title\">
            {{ textile.title_page_2 }}
          </p>
            {{ textile.desc_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
      </div>
      <div class=\"ctw__block2\">
        <div class=\"ctw__block2__wrap\">
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">{{ textile.subtitle_1_page_2 }}</p>
              {{ textile.subdesc_1_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">{{ textile.subtitle_2_page_2 }}</p>
              {{ textile.subdesc_2_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"secondTitle\">{{ textile.subtitle_3_page_2 }}</p>
              {{ textile.subdesc_3_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>

        <img class=\"textile__block2__bg1\" src=\"{{ textile.image_2_page_2.thumb(600, 600, {mode:'auto', quality:85}) }}\" alt=\"\" />
      </div>
      <div class=\"footer\">
        <p>
          © 2021
          <a href=\"https://itd.company/portfolio/\">ITD Company.</a>
          All rights reserved
        </p>
      </div>
    </div>
  </div>
  <img class=\"textile__block2__bg2\" src=\"{{ 'assets/img/Textile/ellipseInfoBottom.svg'|theme }}\" alt=\"\" />
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/textile.htm", "");
    }
}
