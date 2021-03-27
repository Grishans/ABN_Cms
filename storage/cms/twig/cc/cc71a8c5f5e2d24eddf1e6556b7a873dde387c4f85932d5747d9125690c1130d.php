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

/* D:\Work\ABN_Cms/themes/abn/partials/site/ind_equipment.htm */
class __TwigTemplate_17cd11245347ce620f6be10412bc5383178a323f530bb4b184271c2d91a53faa extends \Twig\Template
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
        <p class=\"content__text\">
          ";
        // line 13
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_1", [], "any", false, false, true, 13), 13, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
        </p>
      </div>
      <div class=\"fpw__img\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_1", [], "any", false, false, true, 17), "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__prom_wrap\">
      <div class=\"prom__content__Block1\">
        <div class=\"pcb1__text\">
          <p class=\"secondTitle\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_2", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 30
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_2", [], "any", false, false, true, 30), 30, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"pcb1__img\">
          <div class=\"pcb1__img__wrap\">
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_2", [], "any", false, false, true, 35), "path", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            <img class=\"hexBG1\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG1.png");
        echo "\" alt=\"\" />
            <img class=\"hexBG2\" src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG2.png");
        echo "\" alt=\"\" />
            <img class=\"hexBG3\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG3.png");
        echo "\" alt=\"\" />
          </div>
        </div>
      </div>
      <div class=\"prom__content__Block2\">
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_1_page_3", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 47
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_1_page_3", [], "any", false, false, true, 47), 47, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_3", [], "any", false, false, true, 51), "path", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
        </div>
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_2_page_3", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 58
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_2_page_3", [], "any", false, false, true, 58), 58, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_3", [], "any", false, false, true, 62), "path", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
        </div>
        <img class=\"pcb2__bg\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/shapeTop.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"prom__content__Block3\">
        <div class=\"pcb3__img\">
          <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_4", [], "any", false, false, true, 69), "path", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"pcb3__text\">
          <p class=\"secondTitle\">";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_4", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</p>
          <p class=\"content__text\">
            ";
        // line 74
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_4", [], "any", false, false, true, 74), 74, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
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
        return "D:\\Work\\ABN_Cms/themes/abn/partials/site/ind_equipment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  194 => 72,  188 => 69,  181 => 65,  175 => 62,  168 => 58,  163 => 56,  155 => 51,  148 => 47,  143 => 45,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  113 => 30,  107 => 27,  97 => 20,  91 => 17,  84 => 13,  78 => 10,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
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
        <p class=\"content__text\">
          {{ equipment.desc_page_1|replace({'<p>':'','</p>':''})|raw }}
        </p>
      </div>
      <div class=\"fpw__img\">
        <img src=\"{{ equipment.image_1_page_1.path }}\" alt=\"\" />
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_6 }}</div>
  </div>
  <div class=\"contentBlock\">
    <div class=\"contentBlock__prom_wrap\">
      <div class=\"prom__content__Block1\">
        <div class=\"pcb1__text\">
          <p class=\"secondTitle\">
            {{ equipment.title_page_2 }}
          </p>
          <p class=\"content__text\">
            {{ equipment.desc_page_2|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
        <div class=\"pcb1__img\">
          <div class=\"pcb1__img__wrap\">
            <img src=\"{{ equipment.image_1_page_2.path }}\" alt=\"\" />
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
            <p class=\"content__text\">
              {{ equipment.desc_1_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"{{ equipment.image_1_page_3.path }}\" alt=\"\" />
          </div>
        </div>
        <div class=\"pcb2__block\">
          <div class=\"pcb2b__text\">
            <p class=\"secondTitle\">{{ equipment.title_2_page_3 }}</p>
            <p class=\"content__text\">
              {{ equipment.desc_2_page_3|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
          <div class=\"pcb2b__img\">
            <img src=\"{{ equipment.image_1_page_3.path }}\" alt=\"\" />
          </div>
        </div>
        <img class=\"pcb2__bg\" src=\"{{ 'assets/img/Industrial/shapeTop.svg'|theme }}\" alt=\"\" />
      </div>
      <div class=\"prom__content__Block3\">
        <div class=\"pcb3__img\">
          <img src=\"{{ equipment.image_1_page_4.path }}\" alt=\"\" />
        </div>
        <div class=\"pcb3__text\">
          <p class=\"secondTitle\">{{ equipment.title_page_4 }}</p>
          <p class=\"content__text\">
            {{ equipment.desc_page_4|replace({'<p>':'','</p>':''})|raw }}
          </p>
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
</section>", "D:\\Work\\ABN_Cms/themes/abn/partials/site/ind_equipment.htm", "");
    }
}
