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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/about_us.htm */
class __TwigTemplate_9e9d87a55a5509e43d48ed87f7398ceca9938d4032516d4f63587c3c9c7e67e0 extends \Twig\Template
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
        $filters = array("theme" => 5, "escape" => 9, "raw" => 11, "replace" => 11);
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
        $context["mainInfo"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["aboutList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "<section class=\"block__wrap about\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullblock__about__wrap\">
      <div class=\"faw__text\">
        <p class=\"content__title\">
          ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "title_page_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
        </p>
          ";
        // line 11
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "desc_page_1", [], "any", false, false, true, 11), 11, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        <span class=\"mainBtn\">
          <span data-slide='7'>Связаться с нами</span>
        </span>
      </div>
      <div class=\"faw__img\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "image_page_1", [], "any", false, false, true, 17), "thumb", [0 => 950, 1 => 600, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
    </div>

    <div class=\"mainTitle\">";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_1", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</div>
    <div class=\"fba__bg2\">
      <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Main/windowLampsTop.png");
        echo "\" alt=\"\" />
    </div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__about__wrap\">
      <div class=\"caw__title\">
        <p class=\"content__title\">
          ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "title_page_2", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
        </p>
      </div>
      <div class=\"caw__text\">
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 36
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 36), 36, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 40
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 40), 40, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 44
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 44), 44, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
      </div>
      <div class=\"caw__btn\">
        <span class=\"mainBtn\">
          <span data-slide='7'>Связаться с нами</span>
        </span>
      </div>
    </div>
    <div class=\"fba_bg3\">
      <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Main/aboutVectorBottom.png");
        echo "\" alt=\"\" />
    </div>
    <div class=\"fba_bg4\">
      <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/circle.png");
        echo "\" alt=\"\" />
    </div>
  </div>
  <div class=\"footer\">
    <p>
      © 2021
      <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All
      rights reserved
    </p>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/about_us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  158 => 54,  145 => 44,  141 => 43,  135 => 40,  131 => 39,  125 => 36,  121 => 35,  113 => 30,  103 => 23,  98 => 21,  91 => 17,  82 => 11,  77 => 9,  70 => 5,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainInfo = aboutList.records[0] %}
{% set menu = menuList.records[0] %}
<section class=\"block__wrap about\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullblock__about__wrap\">
      <div class=\"faw__text\">
        <p class=\"content__title\">
          {{ mainInfo.title_page_1 }}
        </p>
          {{ mainInfo.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        <span class=\"mainBtn\">
          <span data-slide='7'>Связаться с нами</span>
        </span>
      </div>
      <div class=\"faw__img\">
        <img src=\"{{ mainInfo.image_page_1.thumb(950, 600, {mode:'auto', quality:85}) }}\" alt=\"\" />
      </div>
    </div>

    <div class=\"mainTitle\">{{ menu.item_1 }}</div>
    <div class=\"fba__bg2\">
      <img src=\"{{ 'assets/img/Main/windowLampsTop.png'|theme }}\" alt=\"\" />
    </div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__about__wrap\">
      <div class=\"caw__title\">
        <p class=\"content__title\">
          {{ mainInfo.title_page_2 }}
        </p>
      </div>
      <div class=\"caw__text\">
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">{{ mainInfo.subtitle_1_page_2 }}</p>
            {{ mainInfo.subdesc_1_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">{{ mainInfo.subtitle_2_page_2 }}</p>
            {{ mainInfo.subdesc_2_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"cawt_block\">
          <p class=\"secondTitle\">{{ mainInfo.subtitle_3_page_2 }}</p>
            {{ mainInfo.subdesc_3_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
      </div>
      <div class=\"caw__btn\">
        <span class=\"mainBtn\">
          <span data-slide='7'>Связаться с нами</span>
        </span>
      </div>
    </div>
    <div class=\"fba_bg3\">
      <img src=\"{{ 'assets/img/Main/aboutVectorBottom.png'|theme }}\" alt=\"\" />
    </div>
    <div class=\"fba_bg4\">
      <img src=\"{{ 'assets/img/circle.png'|theme }}\" alt=\"\" />
    </div>
  </div>
  <div class=\"footer\">
    <p>
      © 2021
      <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All
      rights reserved
    </p>
  </div>
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/about_us.htm", "");
    }
}
