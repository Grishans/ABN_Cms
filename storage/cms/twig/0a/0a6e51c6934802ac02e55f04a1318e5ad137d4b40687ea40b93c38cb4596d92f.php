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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/electronics.htm */
class __TwigTemplate_1193fe0aaa23d05f442d1c1aaa1333ef1ca71ca24b2c3a64957770d106f40110 extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 8, "raw" => 13, "replace" => 13);
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
        $context["electronic"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["electronicsList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap electronics\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullBlock__electroinic__wrap\">
      <img class=\"fullBlock__bg\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_1", [], "any", false, false, true, 8), "thumb", [0 => 800, 1 => 500, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      <div class=\"few__block\">
        <p class=\"content__title\">
          ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_1", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
        </p>
          ";
        // line 13
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_1", [], "any", false, false, true, 13), 13, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</div>

  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__electronics__wrap\">
      <div class=\"contentBlock__electronic__block1\">
        <p class=\"content__title\">
          ";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_2", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </p>
        <div class=\"ceb1__wraps\">
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img class=\"electronic__bg1__cube\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\" alt=\"\" />
              <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_2", [], "any", false, false, true, 30), "thumb", [0 => 630, 1 => 360, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
          </div>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
                ";
        // line 35
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "subdesc_page_2", [], "any", false, false, true, 35), 35, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block2\">
        <div class=\"ceb2__wrap\">
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_3", [], "any", false, false, true, 44), "thumb", [0 => 180, 1 => 180, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_1_page_3", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 47
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_1_page_3", [], "any", false, false, true, 47), 47, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_2_page_3", [], "any", false, false, true, 51), "thumb", [0 => 180, 1 => 180, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_2_page_3", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 54
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_2_page_3", [], "any", false, false, true, 54), 54, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_3_page_3", [], "any", false, false, true, 58), "thumb", [0 => 180, 1 => 180, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_3_page_3", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 61
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_3_page_3", [], "any", false, false, true, 61), 61, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block3\">
        <div class=\"cwb3__wrap\">
          <p class=\"secondTitle\">";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_4", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 68
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_4", [], "any", false, false, true, 68), 68, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
        <div class=\"electronic__bg2\">
          <div class=\"electronic__bg2__wrap\">
            <img class=\"electronic__bg2__cube\" src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\" alt=\"\" />
            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_4", [], "any", false, false, true, 76), "thumb", [0 => 750, 1 => 650, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
        </div>
      </div>
      <div class=\"footer\">
        <p>
          © 2021<a href=\"https://itd.company/portfolio/\">ITD Company.</a>All rights reserved
        </p>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/electronics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 76,  203 => 75,  193 => 68,  189 => 67,  180 => 61,  176 => 60,  171 => 58,  164 => 54,  160 => 53,  155 => 51,  148 => 47,  144 => 46,  139 => 44,  127 => 35,  119 => 30,  115 => 29,  107 => 24,  97 => 17,  93 => 16,  87 => 13,  82 => 11,  76 => 8,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set electronic = electronicsList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap electronics\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__electroinic__wrap\">
      <img class=\"fullBlock__bg\" src=\"{{ electronic.image_1_page_1.thumb(800, 500, {mode:'auto', quality:85}) }}\" alt=\"\" />
      <div class=\"few__block\">
        <p class=\"content__title\">
          {{ electronic.title_page_1 }}
        </p>
          {{ electronic.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_4 }}</div>
    <div class=\"mainTitle mainTitle__electronic1\">{{ menu.item_5 }}</div>

  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__electronics__wrap\">
      <div class=\"contentBlock__electronic__block1\">
        <p class=\"content__title\">
          {{ electronic.title_page_2 }}
        </p>
        <div class=\"ceb1__wraps\">
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img class=\"electronic__bg1__cube\" src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\" alt=\"\" />
              <img src=\"{{ electronic.image_1_page_2.thumb(630, 360, {mode:'auto', quality:85}) }}\" alt=\"\" />
            </div>
          </div>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
                {{ electronic.subdesc_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block2\">
        <div class=\"ceb2__wrap\">
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"{{ electronic.image_1_page_3.thumb(180, 180, {mode:'auto', quality:85}) }}\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">{{ electronic.title_1_page_3 }}</p>
              {{ electronic.desc_1_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"{{ electronic.image_2_page_3.thumb(180, 180, {mode:'auto', quality:85}) }}\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">{{ electronic.title_2_page_3 }}</p>
              {{ electronic.desc_2_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"ceb2w__block\">
            <div class=\"ceb2w__block__img\">
              <img src=\"{{ electronic.image_3_page_3.thumb(180, 180, {mode:'auto', quality:85}) }}\" alt=\"\" />
            </div>
            <p class=\"secondTitle\">{{ electronic.title_3_page_3 }}</p>
              {{ electronic.desc_3_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block3\">
        <div class=\"cwb3__wrap\">
          <p class=\"secondTitle\">{{ electronic.title_page_4 }}</p>
            {{ electronic.desc_page_4|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
        <div class=\"electronic__bg2\">
          <div class=\"electronic__bg2__wrap\">
            <img class=\"electronic__bg2__cube\" src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\" alt=\"\" />
            <img src=\"{{ electronic.image_1_page_4.thumb(750, 650, {mode:'auto', quality:85}) }}\" alt=\"\" />
          </div>
        </div>
      </div>
      <div class=\"footer\">
        <p>
          © 2021<a href=\"https://itd.company/portfolio/\">ITD Company.</a>All rights reserved
        </p>
      </div>
    </div>
  </div>
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/electronics.htm", "");
    }
}
