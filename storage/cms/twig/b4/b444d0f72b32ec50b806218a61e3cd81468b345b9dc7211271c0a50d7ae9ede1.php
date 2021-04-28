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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/consalting.htm */
class __TwigTemplate_3170f851740cef48ddbdb36fcc97015a0e48cb0019bb0b28618b96c7c0890f1f extends \Twig\Template
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
        $filters = array("theme" => 6, "escape" => 9, "raw" => 16, "replace" => 16);
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_1", [], "any", false, false, true, 13), "thumb", [0 => 1035, 1 => 660, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"fc1wb__text\">
            ";
        // line 16
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_1", [], "any", false, false, true, 16), 16, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
      </div>
      <div class=\"fc1w__block2\">
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">1</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_1", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 28
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_1", [], "any", false, false, true, 28), 28, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">2</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_1", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 39
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_1", [], "any", false, false, true, 39), 39, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"cpb2__block\">
          <div class=\"cpb2b__number\">
            <p class=\"content__title\">3</p>
          </div>
          <div class=\"cpb2b__title\">
            <p class=\"secondTitle\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_1", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"cpb2b__text\">
              ";
        // line 50
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_1", [], "any", false, false, true, 50), 50, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
          </div>
        </div>
        <div class=\"color__line\"></div>
      </div>
    </div>
    <div class=\"mainTitle mainTitle__electronic\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_7", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</div>
    <div class=\"mainTitle mainTitle__electronic1\">";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"fullBlock consulting2\">
    <div class=\"fullBlock__consalting__wrap\">
      <div class=\"fc2w__block1\">
        <p class=\"content__title\">
          ";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_2", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
        </p>
        <div class=\"fc2w__block__img\">
          <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_2", [], "any", false, false, true, 66), "thumb", [0 => 700, 1 => 700, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </div>
            ";
        // line 68
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_2", [], "any", false, false, true, 68), 68, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
      </div>
      <div class=\"fc2w__block2\">
        <div class=\"fc2w__block__text\">
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_1_page_1", [], "any", false, false, true, 75), "thumb", [0 => 55, 1 => 50, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "</p>
                ";
        // line 80
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 80), 80, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_2_page_1", [], "any", false, false, true, 86), "thumb", [0 => 55, 1 => 50, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "</p>
                ";
        // line 91
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 91), 91, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_3_page_1", [], "any", false, false, true, 97), "thumb", [0 => 55, 1 => 50, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">";
        // line 101
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "</p>
                ";
        // line 102
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 102), 102, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
            </div>
          </div>
        </div>
        <div class=\"fc2w__block__img\">
          <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_2", [], "any", false, false, true, 107), "thumb", [0 => 700, 1 => 700, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 107), 107, $this->source), "html", null, true);
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
        // line 117
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_3", [], "any", false, false, true, 117), 117, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"fc3w__block1__img\">
          <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_3", [], "any", false, false, true, 121), "thumb", [0 => 1205, 1 => 655, 2 => ["mode" => "auto", "quality" => 85]], "method", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"fc3w__block1__text\">
            ";
        // line 124
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_3", [], "any", false, false, true, 124), 124, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
      </div>
      <div class=\"fc3w__block2\">
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 129
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_3", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "</p>
          ";
        // line 130
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_3", [], "any", false, false, true, 130), 130, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 133
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_3", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</p>
          ";
        // line 134
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_3", [], "any", false, false, true, 134), 134, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_3", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "</p>
          ";
        // line 138
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_3", [], "any", false, false, true, 138), 138, $this->source), ["<p>" => "<p class=\"content__text\">"]);
        echo "
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
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/consalting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 138,  298 => 137,  292 => 134,  288 => 133,  282 => 130,  278 => 129,  270 => 124,  264 => 121,  257 => 117,  244 => 107,  236 => 102,  232 => 101,  225 => 97,  216 => 91,  212 => 90,  205 => 86,  196 => 80,  192 => 79,  185 => 75,  175 => 68,  170 => 66,  164 => 63,  155 => 57,  151 => 56,  142 => 50,  136 => 47,  125 => 39,  119 => 36,  108 => 28,  102 => 25,  90 => 16,  84 => 13,  77 => 9,  71 => 6,  66 => 3,  64 => 2,  62 => 1,);
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
          <img src=\"{{ cons.image_1_page_1.thumb(1035, 660, {mode:'auto', quality:85}) }}\" alt=\"\" />
        </div>
        <div class=\"fc1wb__text\">
            {{ cons.desc_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
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
              {{ cons.subdesc_1_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
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
              {{ cons.subdesc_2_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
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
              {{ cons.subdesc_3_page_1|replace({'<p>':'<p class=\"content__text\">'})|raw }}
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
          <img src=\"{{ cons.image_1_page_2.thumb(700, 700, {mode:'auto', quality:85}) }}\" alt=\"\" />
        </div>
            {{ cons.desc_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
      </div>
      <div class=\"fc2w__block2\">
        <div class=\"fc2w__block__text\">
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_1_page_1.thumb(55, 50, {mode:'auto', quality:85}) }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_1_page_2 }}</p>
                {{ cons.subdesc_1_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_2_page_1.thumb(55, 50, {mode:'auto', quality:85}) }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_2_page_2 }}</p>
                {{ cons.subdesc_2_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
            </div>
          </div>
          <div class=\"fc2wbt__block\">
            <div class=\"fc2wbt__block__img\">
              <div class=\"fc2wbt__block__img__wrap\">
                <img src=\"{{ cons.subimage_3_page_1.thumb(55, 50, {mode:'auto', quality:85}) }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"fc2wbt__block__text\">
              <p class=\"secondTitle\">{{ cons.subtitle_3_page_2 }}</p>
                {{ cons.subdesc_3_page_2|replace({'<p>':'<p class=\"content__text\">'})|raw }}
            </div>
          </div>
        </div>
        <div class=\"fc2w__block__img\">
          <img src=\"{{ cons.image_1_page_2.thumb(700, 700, {mode:'auto', quality:85}) }}\" alt=\"\" />
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
          <img src=\"{{ cons.image_1_page_3.thumb(1205, 655, {mode:'auto', quality:85}) }}\" alt=\"\">
        </div>
        <div class=\"fc3w__block1__text\">
            {{ cons.desc_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
      </div>
      <div class=\"fc3w__block2\">
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_1_page_3 }}</p>
          {{ cons.subdesc_1_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_2_page_3 }}</p>
          {{ cons.subdesc_2_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
        </div>
        <div class=\"fc3w__block2__block\">
          <p class=\"secondTitle\">{{ cons.subtitle_3_page_3 }}</p>
          {{ cons.subdesc_3_page_3|replace({'<p>':'<p class=\"content__text\">'})|raw }}
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
</section>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/themes/abn/partials/site/consalting.htm", "");
    }
}
