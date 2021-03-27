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

/* D:\Work\ABN_Cms/themes/abn/partials/site/prod.htm */
class __TwigTemplate_1d9ace357381a4d34344dba344420f14fe9a1d972f577b79a5f073a068509b05 extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 10, "raw" => 31, "replace" => 31);
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
        <p class=\"content__text\">
          ";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_1", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
        </p>
      </div>
      <div class=\"fpw__img\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_1", [], "any", false, false, true, 17), "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__products__wrap\">
      <div class=\"content__product__block1\">
        <div class=\"cpb__text\">
          <p class=\"content__title\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_page_2", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 31
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_2", [], "any", false, false, true, 31), 31, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"cpb__bg\">
          <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_2", [], "any", false, false, true, 35), "path", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_2_page_2", [], "any", false, false, true, 36), "path", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_3_page_2", [], "any", false, false, true, 37), "path", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <img class=\"cpb__bg1\" src=\"";
        // line 39
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
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_1_page_3", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_1_page_3", [], "any", false, false, true, 50), 50, $this->source);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_2_page_3", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            <p>
              ";
        // line 62
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_2_page_3", [], "any", false, false, true, 62), 62, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_3_page_3", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            <p>
              ";
        // line 75
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_3_page_3", [], "any", false, false, true, 75), 75, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
        <div class=\"color__line\"></div>
        <img class=\"block2__bg\" src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Food/infoBoobleCenter.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"content__product__block3\">
        <img class=\"cpb3__img__mobil\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_4", [], "any", false, false, true, 83), "path", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        <div class=\"cpb3__block__title\">
          <p class=\"secondTitle\">
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "title_page_4", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
          </p>
        </div>
        <div class=\"cpb3__block__textImg\">
          <div class=\"cpb3b__text\">
            ";
        // line 91
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "desc_page_4", [], "any", false, false, true, 91), 91, $this->source);
        echo "
          </div>
          <div class=\"cpb3b__img\">
            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "image_1_page_4", [], "any", false, false, true, 94), "path", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <img class=\"block3__bg\" src=\"";
        // line 95
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
        return "D:\\Work\\ABN_Cms/themes/abn/partials/site/prod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 95,  225 => 94,  219 => 91,  211 => 86,  205 => 83,  199 => 80,  191 => 75,  184 => 71,  172 => 62,  165 => 58,  154 => 50,  148 => 47,  137 => 39,  132 => 37,  128 => 36,  124 => 35,  117 => 31,  111 => 28,  101 => 21,  97 => 20,  91 => 17,  84 => 13,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
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
        <p class=\"content__text\">
          {{ prod.desc_page_1 }}
        </p>
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
          <p class=\"content__text\">
            {{ prod.desc_page_2|replace({'<p>':'','</p>':''})|raw }}
          </p>
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
            {{ prod.desc_1_page_3|raw }}
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
            <p>
              {{ prod.desc_2_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
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
            <p>
              {{ prod.desc_3_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
        </div>
        <div class=\"color__line\"></div>
        <img class=\"block2__bg\" src=\"{{ 'assets/img/Food/infoBoobleCenter.svg'|theme }}\" alt=\"\" />
      </div>
      <div class=\"content__product__block3\">
        <img class=\"cpb3__img__mobil\" src=\"{{ prod.image_1_page_4.path }}\" alt=\"\" />
        <div class=\"cpb3__block__title\">
          <p class=\"secondTitle\">
            {{ prod.title_page_4 }}
          </p>
        </div>
        <div class=\"cpb3__block__textImg\">
          <div class=\"cpb3b__text\">
            {{ prod.desc_page_4|raw }}
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
</section>", "D:\\Work\\ABN_Cms/themes/abn/partials/site/prod.htm", "");
    }
}
