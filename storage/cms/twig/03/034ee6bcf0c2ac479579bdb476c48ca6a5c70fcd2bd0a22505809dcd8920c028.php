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

/* D:\ABN_at_cms/themes/abn/partials/site/ind_equipment.htm */
class __TwigTemplate_6f47e8a1548c2646bf235e4345dc42c3b38a6ffa72fedd7dab3efe1e479f50f3 extends \Twig\Template
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
        $filters = array("escape" => 9, "raw" => 12, "replace" => 12, "theme" => 37);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw', 'replace', 'theme'],
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
      <div class=\"fullBlock__prom__wrap\">
        <div class=\"fpw__text\">
          <p class=\"content__title\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"fpw__img\">
          <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_1", [], "any", false, false, true, 16), "path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
      </div>
      <div class=\"mainTitle mainTitle__electronic\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>
    </div>
    <div class=\"contentBlock\">
      <div class=\"contentBlock__prom_wrap\">
        <div class=\"prom__content__Block1\">
          <div class=\"pcb1__text\">
            <p class=\"secondTitle\">
              ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
            </p>
            <p class=\"content__text\">
              ";
        // line 29
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_2", [], "any", false, false, true, 29), 29, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"pcb1__img\">
            <div class=\"pcb1__img__wrap\">
              <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_2", [], "any", false, false, true, 34), "path", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              <img
                class=\"hexBG1\"
                src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG1.png");
        echo "\"
                alt=\"\"
              />
              <img
                class=\"hexBG2\"
                src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG2.png");
        echo "\"
                alt=\"\"
              />
              <img
                class=\"hexBG3\"
                src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/hexBG3.png");
        echo "\"
                alt=\"\"
              />
            </div>
          </div>
        </div>
        <div class=\"prom__content__Block2\">
          <div class=\"pcb2__block\">
            <div class=\"pcb2b__text\">
              <p class=\"secondTitle\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_1_page_3", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 58
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_1_page_3", [], "any", false, false, true, 58), 58, $this->source), ["<p>" => "", "</p>" => ""]);
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
          <div class=\"pcb2__block\">
            <div class=\"pcb2b__text\">
              <p class=\"secondTitle\">";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_2_page_3", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 69
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_2_page_3", [], "any", false, false, true, 69), 69, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <div class=\"pcb2b__img\">
              <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_3", [], "any", false, false, true, 73), "path", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
          </div>
          <img
            class=\"pcb2__bg\"
            src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Industrial/shapeTop.svg");
        echo "\"
            alt=\"\"
          />
        </div>
        <div class=\"prom__content__Block3\">
          <div class=\"pcb3__img\">
            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "image_1_page_4", [], "any", false, false, true, 84), "path", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
          <div class=\"pcb3__text\">
            <p class=\"secondTitle\">";
        // line 87
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "title_page_4", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 89
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["equipment"] ?? null), "desc_page_4", [], "any", false, false, true, 89), 89, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
            <span class=\"mainBtn\">
              <span>Связаться с нами</span>
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
        return "D:\\ABN_at_cms/themes/abn/partials/site/ind_equipment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 89,  206 => 87,  200 => 84,  191 => 78,  183 => 73,  176 => 69,  171 => 67,  163 => 62,  156 => 58,  151 => 56,  139 => 47,  131 => 42,  123 => 37,  117 => 34,  109 => 29,  103 => 26,  93 => 19,  87 => 16,  80 => 12,  74 => 9,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set equipment = equipmentList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap prom\">
    <div class=\"fullBlock promFullBlock\">
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
              <img
                class=\"hexBG1\"
                src=\"{{ 'assets/img/Industrial/hexBG1.png'|theme }}\"
                alt=\"\"
              />
              <img
                class=\"hexBG2\"
                src=\"{{ 'assets/img/Industrial/hexBG2.png'|theme }}\"
                alt=\"\"
              />
              <img
                class=\"hexBG3\"
                src=\"{{ 'assets/img/Industrial/hexBG3.png'|theme }}\"
                alt=\"\"
              />
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
          <img
            class=\"pcb2__bg\"
            src=\"{{ 'assets/img/Industrial/shapeTop.svg'|theme }}\"
            alt=\"\"
          />
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
              <span>Связаться с нами</span>
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
  </section>", "D:\\ABN_at_cms/themes/abn/partials/site/ind_equipment.htm", "");
    }
}
