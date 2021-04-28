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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/prod.htm */
class __TwigTemplate_5345e8890911d268a4a94adfb1ee45dc8038e1f8ac400d05b3ec56bd1d0077a2 extends \Twig\Template
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
        $context["prod"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["prodList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap products\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullBlock__products__wrap\">
      <div class=\"fpw__text\">
        <p class=\"content__title\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_page_1", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
        </p>
          ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
      </div>
      <div class=\"fpw__img\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_1", [], "any", false, false, true, 15), "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__products__wrap\">
      <div class=\"content__product__block1\">
        <div class=\"cpb__text\">
          <p class=\"content__title\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_page_2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
          </p>
            ";
        // line 28
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_2", [], "any", false, false, true, 28), 28, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"cpb__bg\">
          <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_2", [], "any", false, false, true, 31), "path", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_2_page_2", [], "any", false, false, true, 32), "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_3_page_2", [], "any", false, false, true, 33), "path", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <img class=\"cpb__bg1\" src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Food/infoBoobleCenter.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"content__product__block2\">
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">1</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_1_page_3", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 46
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_1_page_3", [], "any", false, false, true, 46), 46, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_2_page_3", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 57
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_2_page_3", [], "any", false, false, true, 57), 57, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 65
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_3_page_3", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 68
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_3_page_3", [], "any", false, false, true, 68), 68, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"color__line\"></div>
        <img class=\"block2__bg\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Food/infoBoobleCenter.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"content__product__block3\">
        <img class=\"cpb3__img__mobil\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_4", [], "any", false, false, true, 75), "path", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        <div class=\"cpb3__block__title\">
          <p class=\"content__title\">
            ";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_page_4", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
          </p>
        </div>
        <div class=\"cpb3__block__textImg\">
          <div class=\"cpb3b__text\">
              ";
        // line 83
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_4", [], "any", false, false, true, 83), 83, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
          <div class=\"cpb3b__img\">
            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_4", [], "any", false, false, true, 86), "path", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <img class=\"block3__bg\" src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Food//infoBoobleBottom.svg");
        echo "\" alt=\"\" />
          </div>
        </div>
        <div class=\"cpb3__block__btn\">
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
      </div>
      <div class=\"footer\">
        <p>
          © 2021
          <a href=\"https://itd.company/portfolio/\">ITD Company. </a>All rights reserved
        </p>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/prod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 87,  217 => 86,  211 => 83,  203 => 78,  197 => 75,  191 => 72,  184 => 68,  178 => 65,  167 => 57,  161 => 54,  150 => 46,  144 => 43,  133 => 35,  128 => 33,  124 => 32,  120 => 31,  114 => 28,  109 => 26,  99 => 19,  95 => 18,  89 => 15,  83 => 12,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set prod = prodList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap products\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__products__wrap\">
      <div class=\"fpw__text\">
        <p class=\"content__title\">
          {{ prod.title_page_1 }}
        </p>
          {{ prod.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
      </div>
      <div class=\"fpw__img\">
        <img src=\"{{ prod.image_1_page_1.path }}\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_5 }}</div>
    <div class=\"mainTitle mainTitle__electronic1\">{{ menu.item_6 }}</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__products__wrap\">
      <div class=\"content__product__block1\">
        <div class=\"cpb__text\">
          <p class=\"content__title\">
            {{ prod.title_page_2 }}
          </p>
            {{ prod.desc_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"cpb__bg\">
          <img src=\"{{ prod.image_1_page_2.path }}\" alt=\"\" />
          <img src=\"{{ prod.image_2_page_2.path }}\" alt=\"\" />
          <img src=\"{{ prod.image_3_page_2.path }}\" alt=\"\" />
        </div>
        <img class=\"cpb__bg1\" src=\"{{ 'assets/img/Food/infoBoobleCenter.svg'|theme }}\" alt=\"\" />
      </div>
      <div class=\"content__product__block2\">
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">1</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ prod.title_1_page_3 }}</p>
          </div>
          <div class=\"cpb2b__text\">
              {{ prod.desc_1_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ prod.title_2_page_3 }}</p>
          </div>
          <div class=\"cpb2b__text\">
              {{ prod.desc_2_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ prod.title_3_page_3 }}</p>
          </div>
          <div class=\"cpb2b__text\">
              {{ prod.desc_3_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
        </div>
        <div class=\"color__line\"></div>
        <img class=\"block2__bg\" src=\"{{ 'assets/img/Food/infoBoobleCenter.svg'|theme }}\" alt=\"\" />
      </div>
      <div class=\"content__product__block3\">
        <img class=\"cpb3__img__mobil\" src=\"{{ prod.image_1_page_4.path }}\" alt=\"\" />
        <div class=\"cpb3__block__title\">
          <p class=\"content__title\">
            {{ prod.title_page_4 }}
          </p>
        </div>
        <div class=\"cpb3__block__textImg\">
          <div class=\"cpb3b__text\">
              {{ prod.desc_page_4|replace({'<p>':'<p class=\"content__text\">'})|raw }}
          </div>
          <div class=\"cpb3b__img\">
            <img src=\"{{ prod.image_1_page_4.path }}\" alt=\"\" />
            <img class=\"block3__bg\" src=\"{{ 'assets/img/Food//infoBoobleBottom.svg'|theme }}\" alt=\"\" />
          </div>
        </div>
        <div class=\"cpb3__block__btn\">
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
      </div>
      <div class=\"footer\">
        <p>
          © 2021
          <a href=\"https://itd.company/portfolio/\">ITD Company. </a>All rights reserved
        </p>
      </div>
    </div>
  </div>
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/prod.htm", "");
    }
}
