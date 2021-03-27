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

/* D:\Work\ABN_Cms/themes/abn/partials/site/consalting.htm */
class __TwigTemplate_46e729b652a923b0ec40b2e20cbc9c2467c204117560f97545ab7446e3e887be extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 9, "raw" => 17, "replace" => 17);
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
        $context["cons"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["consultingList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap consulting\">
  <div class=\"fullBlock consulting1\">
    <img class=\"logoMobil\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc1w__title\">
        <p class=\"content__title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
      </div>
      <div class=\"fc1w__block1\">
        <div class=\"fc1wb__img\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_1", [], "any", false, false, true, 13), "path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"fc1wb__text\">
          <p class=\"content__text\">
            ";
        // line 17
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_1", [], "any", false, false, true, 17), 17, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
      </div>
      <div class=\"fc1w__block2\">
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">1</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_1", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            <p>
              ";
        // line 31
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_1", [], "any", false, false, true, 31), 31, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_1", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            ";
        // line 43
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_1", [], "any", false, false, true, 43), 43, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_1", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
            ";
        // line 54
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_1", [], "any", false, false, true, 54), 54, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </div>
        </div>
        <div class=\"color__line\"></div>
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_7", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"fullBlock consulting2\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc2w__block1\">
        <p class=\"content__title\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_2", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
        </p>
        <div class=\"fc2w__block__img\">
          <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_2", [], "any", false, false, true, 70), "path", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"content__text\">
          <p class=\"content__text\">
            ";
        // line 74
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_2", [], "any", false, false, true, 74), 74, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
      </div>
      <div class=\"fc2w__block2\">
        <div class=\"fc2w__block__text\">
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_1_page_1", [], "any", false, false, true, 83), "path", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 87
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 89
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 89), 89, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_2_page_1", [], "any", false, false, true, 96), "path", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 100
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 102
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 102), 102, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_3_page_1", [], "any", false, false, true, 109), "path", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 115
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 115), 115, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
        </div>
        <div class=\"fc2w__block__img\">
          <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_2", [], "any", false, false, true, 121), "path", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
      </div>
    </div>
  </div>
  <div class=\"fullBlock consulting3\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc3w__block1\">
        <div class=\"fc3w__block1__title\">
          <p class=\"content__title\">
            ";
        // line 131
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_3", [], "any", false, false, true, 131), 131, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"fc3w__block1__img\">
          <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_3", [], "any", false, false, true, 135), "path", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"fc3w__block1__text\">
          <p class=\"content__text\">
            ";
        // line 139
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_3", [], "any", false, false, true, 139), 139, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
      </div>
      <div class=\"fc3w__block2\">
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 145
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_3", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "</p>
          <p class=\"content__text\">";
        // line 146
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_3", [], "any", false, false, true, 146), 146, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 149
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_3", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "</p>
          <p class=\"content__text\">";
        // line 150
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_3", [], "any", false, false, true, 150), 150, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 153
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_3", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "</p>
          <p class=\"content__text\">";
        // line 154
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_3", [], "any", false, false, true, 154), 154, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
        </div>
      </div>
      <span class=\"mainBtn\">
        <span data-slide='7'>Связаться с нами</span>
      </span>
    </div>
  </div>
  <div class=\"footer footer_consulting\">
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
        return "D:\\Work\\ABN_Cms/themes/abn/partials/site/consalting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 154,  314 => 153,  308 => 150,  304 => 149,  298 => 146,  294 => 145,  285 => 139,  278 => 135,  271 => 131,  258 => 121,  249 => 115,  244 => 113,  237 => 109,  227 => 102,  222 => 100,  215 => 96,  205 => 89,  200 => 87,  193 => 83,  181 => 74,  174 => 70,  168 => 67,  159 => 61,  155 => 60,  146 => 54,  140 => 51,  129 => 43,  123 => 40,  111 => 31,  104 => 27,  91 => 17,  84 => 13,  77 => 9,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cons = consultingList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap consulting\">
  <div class=\"fullBlock consulting1\">
    <img class=\"logoMobil\" src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc1w__title\">
        <p class=\"content__title\">{{ cons.title_page_1 }}</p>
      </div>
      <div class=\"fc1w__block1\">
        <div class=\"fc1wb__img\">
          <img src=\"{{ cons.image_1_page_1.path }}\" alt=\"\" />
        </div>
        <div class=\"fc1wb__text\">
          <p class=\"content__text\">
            {{ cons.desc_page_1|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
      </div>
      <div class=\"fc1w__block2\">
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">1</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ cons.subtitle_1_page_1 }}</p>
          </div>
          <div class=\"cpb2b__text\">
            <p>
              {{ cons.subdesc_1_page_1|replace({'<p>':'','</p>':''})|raw }}
            </p>
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ cons.subtitle_2_page_1 }}</p>
          </div>
          <div class=\"cpb2b__text\">
            {{ cons.subdesc_2_page_1|replace({'<p>':'','</p>':''})|raw }}
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">{{ cons.subtitle_3_page_1 }}</p>
          </div>
          <div class=\"cpb2b__text\">
            {{ cons.subdesc_3_page_1|replace({'<p>':'','</p>':''})|raw }}
          </div>
        </div>
        <div class=\"color__line\"></div>
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_7 }}</div>
    <div class=\"mainTitle mainTitle__electronic1\">{{ menu.item_8 }}</div>
  </div>
  <div class=\"fullBlock consulting2\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc2w__block1\">
        <p class=\"content__title\">
          {{ cons.title_page_2 }}
        </p>
        <div class=\"fc2w__block__img\">
          <img src=\"{{ cons.image_1_page_2.path }}\" alt=\"\" />
        </div>
        <div class=\"content__text\">
          <p class=\"content__text\">
            {{ cons.desc_page_2|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
      </div>
      <div class=\"fc2w__block2\">
        <div class=\"fc2w__block__text\">
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_1_page_1.path }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_1_page_2 }}</p>
              <p class=\"content__text\">
                {{ cons.subdesc_1_page_2|replace({'<p>':'','</p>':''})|raw }}
              </p>
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_2_page_1.path }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_2_page_2 }}</p>
              <p class=\"content__text\">
                {{ cons.subdesc_2_page_2|replace({'<p>':'','</p>':''})|raw }}
              </p>
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_3_page_1.path }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_3_page_2 }}</p>
              <p class=\"content__text\">
                {{ cons.subdesc_3_page_2|replace({'<p>':'','</p>':''})|raw }}
              </p>
            </div>
          </div>
        </div>
        <div class=\"fc2w__block__img\">
          <img src=\"{{ cons.image_1_page_2.path }}\" alt=\"\" />
        </div>
      </div>
    </div>
  </div>
  <div class=\"fullBlock consulting3\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc3w__block1\">
        <div class=\"fc3w__block1__title\">
          <p class=\"content__title\">
            {{ cons.title_page_3|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
        <div class=\"fc3w__block1__img\">
          <img src=\"{{ cons.image_1_page_3.path }}\" alt=\"\">
        </div>
        <div class=\"fc3w__block1__text\">
          <p class=\"content__text\">
            {{ cons.desc_page_3|replace({'<p>':'','</p>':''})|raw }}
          </p>
        </div>
      </div>
      <div class=\"fc3w__block2\">
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_1_page_3 }}</p>
          <p class=\"content__text\">{{ cons.subdesc_1_page_3|replace({'<p>':'','</p>':''})|raw }}</p>
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_2_page_3 }}</p>
          <p class=\"content__text\">{{ cons.subdesc_2_page_3|replace({'<p>':'','</p>':''})|raw }}</p>
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_3_page_3 }}</p>
          <p class=\"content__text\">{{ cons.subdesc_3_page_3|replace({'<p>':'','</p>':''})|raw }}</p>
        </div>
      </div>
      <span class=\"mainBtn\">
        <span data-slide='7'>Связаться с нами</span>
      </span>
    </div>
  </div>
  <div class=\"footer footer_consulting\">
    <p>
      © 2021
      <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All
      rights reserved
    </p>
  </div>
</section>", "D:\\Work\\ABN_Cms/themes/abn/partials/site/consalting.htm", "");
    }
}
