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

/* D:\Work\ABN_Cms/themes/abn/partials/site/electronics.htm */
class __TwigTemplate_c1175d8a6848c147a0776757f34f55de2cdbf7603f110231c81b6e9d761ff992 extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 8, "raw" => 14, "replace" => 14);
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_1", [], "any", false, false, true, 8), "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      <div class=\"few__block\">
        <p class=\"content__title\">
          ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_1", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
        </p>
        <p class=\"content__text\">
          ";
        // line 14
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_1", [], "any", false, false, true, 14), 14, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
        </p>
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>

  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__electronics__wrap\">
      <div class=\"contentBlock__electronic__block1\">
        <p class=\"secondTitle\">
          ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
        </p>
        <div class=\"ceb1__wraps\">
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img class=\"electronic__bg1__cube\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\" alt=\"\" />
              <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_2", [], "any", false, false, true, 32), "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
          </div>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
              <p class=\"content__title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "subtitle_page_2", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 39
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "subdesc_page_2", [], "any", false, false, true, 39), 39, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block2\">
        <div class=\"ceb2__wrap\">
          <div class=\"ceb2w__block\">
            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_3", [], "any", false, false, true, 48), "path", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <p class=\"secondTitle\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_1_page_3", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</p>
            <p class=\"text\">
              ";
        // line 51
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_1_page_3", [], "any", false, false, true, 51), 51, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"ceb2w__block\">
            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_2_page_3", [], "any", false, false, true, 55), "path", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <p class=\"secondTitle\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_2_page_3", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</p>
            <p class=\"text\">
              ";
        // line 58
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_2_page_3", [], "any", false, false, true, 58), 58, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"ceb2w__block\">
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_3_page_3", [], "any", false, false, true, 62), "path", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <p class=\"secondTitle\">";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_3_page_3", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "</p>
            <p class=\"text\">
              ";
        // line 65
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_3_page_3", [], "any", false, false, true, 65), 65, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block3\">
        <div class=\"cwb3__wrap\">
          <p class=\"content__title\">";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_4", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</p>
          <p class=\"content__text\">
            ";
        // line 74
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_4", [], "any", false, false, true, 74), 74, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
        <div class=\"electronic__bg2\">
          <div class=\"electronic__bg2__wrap\">
            <img class=\"electronic__bg2__cube\" src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\" alt=\"\" />
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_4", [], "any", false, false, true, 83), "path", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
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
        return "D:\\Work\\ABN_Cms/themes/abn/partials/site/electronics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 83,  213 => 82,  202 => 74,  197 => 72,  187 => 65,  182 => 63,  178 => 62,  171 => 58,  166 => 56,  162 => 55,  155 => 51,  150 => 49,  146 => 48,  134 => 39,  129 => 37,  121 => 32,  117 => 31,  109 => 26,  99 => 19,  95 => 18,  88 => 14,  82 => 11,  76 => 8,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set electronic = electronicsList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap electronics\">
  <div class=\"fullBlock\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__electroinic__wrap\">
      <img class=\"fullBlock__bg\" src=\"{{ electronic.image_1_page_1.path }}\" alt=\"\" />
      <div class=\"few__block\">
        <p class=\"content__title\">
          {{ electronic.title_page_1 }}
        </p>
        <p class=\"content__text\">
          {{ electronic.desc_page_1|replace({'<p>':'','</p>':''})|raw }}
        </p>
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_4 }}</div>
    <div class=\"mainTitle mainTitle__electronic1\">{{ menu.item_5 }}</div>

  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__electronics__wrap\">
      <div class=\"contentBlock__electronic__block1\">
        <p class=\"secondTitle\">
          {{ electronic.title_page_2 }}
        </p>
        <div class=\"ceb1__wraps\">
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img class=\"electronic__bg1__cube\" src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\" alt=\"\" />
              <img src=\"{{ electronic.image_1_page_2.path }}\" alt=\"\" />
            </div>
          </div>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
              <p class=\"content__title\">{{ electronic.subtitle_page_2 }}</p>
              <p class=\"content__text\">
                {{ electronic.subdesc_page_2|replace({'<p>':'','</p>':''})|raw }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block2\">
        <div class=\"ceb2__wrap\">
          <div class=\"ceb2w__block\">
            <img src=\"{{ electronic.image_1_page_3.path }}\" alt=\"\" />
            <p class=\"secondTitle\">{{ electronic.title_1_page_3 }}</p>
            <p class=\"text\">
              {{ electronic.desc_1_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"ceb2w__block\">
            <img src=\"{{ electronic.image_2_page_3.path }}\" alt=\"\" />
            <p class=\"secondTitle\">{{ electronic.title_2_page_3 }}</p>
            <p class=\"text\">
              {{ electronic.desc_2_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"ceb2w__block\">
            <img src=\"{{ electronic.image_3_page_3.path }}\" alt=\"\" />
            <p class=\"secondTitle\">{{ electronic.title_3_page_3 }}</p>
            <p class=\"text\">
              {{ electronic.desc_3_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
        </div>
      </div>
      <div class=\"contentBlock__electronic__block3\">
        <div class=\"cwb3__wrap\">
          <p class=\"content__title\">{{ electronic.title_page_4 }}</p>
          <p class=\"content__text\">
            {{ electronic.desc_page_4|replace({'<p>':'','</p>':''})|raw }}
          </p>
          <span class=\"mainBtn\">
            <span data-slide='7'>Связаться с нами</span>
          </span>
        </div>
        <div class=\"electronic__bg2\">
          <div class=\"electronic__bg2__wrap\">
            <img class=\"electronic__bg2__cube\" src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\" alt=\"\" />
            <img src=\"{{ electronic.image_1_page_4.path }}\" alt=\"\" />
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
</section>", "D:\\Work\\ABN_Cms/themes/abn/partials/site/electronics.htm", "");
    }
}
