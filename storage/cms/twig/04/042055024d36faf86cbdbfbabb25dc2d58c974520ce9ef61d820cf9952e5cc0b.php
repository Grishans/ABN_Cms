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

/* D:\Work\ABN_Cms/themes/abn/partials/site/textile.htm */
class __TwigTemplate_6622d68646e00d5fad0eb6d9f504629985c193c35ca7ed749788a9ac9be36ed5 extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 10, "raw" => 13, "replace" => 13);
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
        <p class=\"content__text\">
          ";
        // line 13
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_1", [], "any", false, false, true, 13), 13, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
        </p>
      </div>
      <div class=\"ftw__img\">
        <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/textileVectorTop.png");
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__textile1\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_3", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__textile2\">";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__textile__wrap\">
      <div class=\"ctw__block1\">
        <img class=\"textile__block1__bg\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoTop.png");
        echo "\" alt=\"\" />
        <div class=\"ctwb1__text\">
          <p class=\"secondTitle\">
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "title_page_2", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 32
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_2", [], "any", false, false, true, 32), 32, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
      </div>
      <div class=\"ctw__block2\">
        <div class=\"ctw__block2__wrap\">
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 41
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 41), 41, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 47
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 47), 47, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 53
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 53), 53, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>

        <img class=\"textile__block2__bg1\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoRightCenter.png");
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
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoBottom.svg");
        echo "\" alt=\"\" />
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Work\\ABN_Cms/themes/abn/partials/site/textile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 72,  171 => 61,  160 => 53,  155 => 51,  148 => 47,  143 => 45,  136 => 41,  131 => 39,  121 => 32,  115 => 29,  109 => 26,  101 => 21,  97 => 20,  91 => 17,  84 => 13,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
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
        <p class=\"content__text\">
          {{ textile.desc_page_1|replace({'<p>':'','</p>':''})|raw }}
        </p>
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
        <img class=\"textile__block1__bg\" src=\"{{ 'assets/img/Textile/ellipseInfoTop.png'|theme }}\" alt=\"\" />
        <div class=\"ctwb1__text\">
          <p class=\"secondTitle\">
            {{ textile.title_page_2 }}
          </p>
          <p class=\"content__text\">
            {{ textile.desc_page_2|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
      </div>
      <div class=\"ctw__block2\">
        <div class=\"ctw__block2__wrap\">
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">{{ textile.subtitle_1_page_2 }}</p>
            <p class=\"content__text\">
              {{ textile.subdesc_1_page_2|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">{{ textile.subtitle_2_page_2 }}</p>
            <p class=\"content__text\">
              {{ textile.subdesc_2_page_2|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"ctw__block2__box\">
            <p class=\"content__title\">{{ textile.subtitle_3_page_2 }}</p>
            <p class=\"content__text\">
              {{ textile.subdesc_3_page_2|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>

        <img class=\"textile__block2__bg1\" src=\"{{ 'assets/img/Textile/ellipseInfoRightCenter.png'|theme }}\" alt=\"\" />
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
</section>", "D:\\Work\\ABN_Cms/themes/abn/partials/site/textile.htm", "");
    }
}
