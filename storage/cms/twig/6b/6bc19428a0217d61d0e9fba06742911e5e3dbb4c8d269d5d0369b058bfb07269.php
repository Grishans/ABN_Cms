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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/ind_equipment.htm */
class __TwigTemplate_49c19b3b31a072ab64dec45aa2afdd41a5f0e77849781b387dbb6a430a3a8098 extends \Twig\Template
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
        $context["equipment"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["equipmentList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap prom\">
  <div class=\"fullBlock promFullBlock\">
    <img class=\"logoMobil\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullBlock__prom__wrap\">
      <div class=\"fpw__text\">
        <p class=\"content__title\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_1", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
        </p>
          ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
      </div>
      <div class=\"fpw__img\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_1", [], "any", false, false, true, 15), "thumb", [0 => 950, 1 => 500, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__prom_wrap\">
      <div class=\"prom__content__Block1\">
        <div class=\"pcb1__text\">
          <p class=\"content__title\">
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_2", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
          </p>
            ";
        // line 27
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_2", [], "any", false, false, true, 27), 27, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"pcb1__img\">
          <div class=\"pcb1__img__wrap\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_2", [], "any", false, false, true, 31), "thumb", [0 => 460, 1 => 460, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <img class=\"hexBG1\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG1.png");
        echo "\" alt=\"\" />
            <img class=\"hexBG2\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG2.png");
        echo "\" alt=\"\" />
            <img class=\"hexBG3\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG3.png");
        echo "\" alt=\"\" />
          </div>
        </div>
      </div>
      <div class=\"prom__content__Block2\">
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_1_page_3", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 42
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_1_page_3", [], "any", false, false, true, 42), 42, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_3", [], "any", false, false, true, 45), "thumb", [0 => 110, 1 => 100, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
        </div>
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_2_page_3", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 51
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_2_page_3", [], "any", false, false, true, 51), 51, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_2_page_3", [], "any", false, false, true, 54), "thumb", [0 => 110, 1 => 100, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
        </div>
        <img class=\"pcb2__bg\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/shapeTop.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"prom__content__Block3\">
        <div class=\"pcb3__img\">
          <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_4", [], "any", false, false, true, 61), "thumb", [0 => 430, 1 => 450, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"pcb3__text\">
          <p class=\"secondTitle\">";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_4", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 65
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_4", [], "any", false, false, true, 65), 65, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
      </div>
    </div>
    <div class=\"footer\">
      <p>
        © 2021
        <a href=\"https://itd.company/portfolio/\">ITD Company.</a>
        All rights reserved
      </p>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/ind_equipment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  186 => 64,  180 => 61,  173 => 57,  167 => 54,  161 => 51,  157 => 50,  149 => 45,  143 => 42,  139 => 41,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  110 => 27,  105 => 25,  95 => 18,  89 => 15,  83 => 12,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set equipment = equipmentList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap prom\">
  <div class=\"fullBlock promFullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__prom__wrap\">
      <div class=\"fpw__text\">
        <p class=\"content__title\">
          {{ equipment.title_page_1 }}
        </p>
          {{ equipment.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
      </div>
      <div class=\"fpw__img\">
        <img src=\"{{ equipment.image_1_page_1.thumb(950, 500, {mode:'auto', quality:85}) }}\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_6 }}</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__prom_wrap\">
      <div class=\"prom__content__Block1\">
        <div class=\"pcb1__text\">
          <p class=\"content__title\">
            {{ equipment.title_page_2 }}
          </p>
            {{ equipment.desc_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"pcb1__img\">
          <div class=\"pcb1__img__wrap\">
            <img src=\"{{ equipment.image_1_page_2.thumb(460, 460, {mode:'auto', quality:85}) }}\" alt=\"\" />
            <img class=\"hexBG1\" src=\"{{ 'assets/img/Industrial/hexBG1.png'|theme }}\" alt=\"\" />
            <img class=\"hexBG2\" src=\"{{ 'assets/img/Industrial/hexBG2.png'|theme }}\" alt=\"\" />
            <img class=\"hexBG3\" src=\"{{ 'assets/img/Industrial/hexBG3.png'|theme }}\" alt=\"\" />
          </div>
        </div>
      </div>
      <div class=\"prom__content__Block2\">
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">{{ equipment.title_1_page_3 }}</p>
              {{ equipment.desc_1_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"{{ equipment.image_1_page_3.thumb(110, 100, {mode:'auto', quality:85}) }}\" alt=\"\" />
          </div>
        </div>
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">{{ equipment.title_2_page_3 }}</p>
              {{ equipment.desc_2_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"{{ equipment.image_2_page_3.thumb(110, 100, {mode:'auto', quality:85}) }}\" alt=\"\" />
          </div>
        </div>
        <img class=\"pcb2__bg\" src=\"{{ 'assets/img/Industrial/shapeTop.svg'|theme }}\" alt=\"\" />
      </div>
      <div class=\"prom__content__Block3\">
        <div class=\"pcb3__img\">
          <img src=\"{{ equipment.image_1_page_4.thumb(430, 450, {mode:'auto', quality:85}) }}\" alt=\"\" />
        </div>
        <div class=\"pcb3__text\">
          <p class=\"secondTitle\">{{ equipment.title_page_4 }}</p>
            {{ equipment.desc_page_4|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
      </div>
    </div>
    <div class=\"footer\">
      <p>
        © 2021
        <a href=\"https://itd.company/portfolio/\">ITD Company.</a>
        All rights reserved
      </p>
    </div>
  </div>
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/ind_equipment.htm", "");
    }
}
