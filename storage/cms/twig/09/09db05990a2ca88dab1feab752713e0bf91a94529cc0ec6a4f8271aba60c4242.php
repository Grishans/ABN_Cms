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

/* D:\ABN_at_cms/themes/abn/partials/site/textile.htm */
class __TwigTemplate_05cd0495713d2a1c02bf69af6ca2dcea33175c3ae9b340b8ac20068d4cca7a7d extends \Twig\Template
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
        $filters = array("escape" => 9, "raw" => 12, "replace" => 12, "theme" => 16);
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
        $context["textile"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["textileList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap textile\">
    <div class=\"fullBlock\">
      <div class=\"fullBlock__textile__wrap\">
        <div class=\"ftw__text\">
          <p class=\"content__title\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "title_page_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
        </div>
        <div class=\"ftw__img\">
          <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/textileVectorTop.png");
        echo "\" alt=\"\" />
        </div>
      </div>
      <div class=\"mainTitle mainTitle__textile1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_3", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>
      <div class=\"mainTitle mainTitle__textile2\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
    </div>
    <div class=\"contentBlock\">
      <div class=\"contentBlock__textile__wrap\">
        <div class=\"ctw__block1\">
          <img
            class=\"textile__block1__bg\"
            src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoTop.png");
        echo "\"
            alt=\"\"
          />
          <div class=\"ctwb1__text\">
            <p class=\"secondTitle\">
              ";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "title_page_2", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
            </p>
            <p class=\"content__text\">
              ";
        // line 35
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "desc_page_2", [], "any", false, false, true, 35), 35, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
        <div class=\"ctw__block2\">
          <div class=\"ctw__block2__wrap\">
            <div class=\"ctw__block2__box\">
              <p class=\"content__title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 44
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 44), 44, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <div class=\"ctw__block2__box\">
              <p class=\"content__title\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 50
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 50), 50, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <div class=\"ctw__block2__box\">
              <p class=\"content__title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 56
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textile"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 56), 56, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <span class=\"mainBtn\">
              <span>Связаться с нами</span>
            </span>
          </div>
          
          <img
            class=\"textile__block2__bg1\"
            src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoRightCenter.png");
        echo "\"
            alt=\"\"
          />
        </div>
        <div class=\"footer\">
          <p>
            © 2021
            <a href=\"https://itd.company/portfolio/\"
              >ITD Company.</a
            >
            All rights reserved
          </p>
        </div>
      </div>
    </div>
    <img
      class=\"textile__block2__bg2\"
      src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Textile/ellipseInfoBottom.svg");
        echo "\"
      alt=\"\"
    />
  </section>";
    }

    public function getTemplateName()
    {
        return "D:\\ABN_at_cms/themes/abn/partials/site/textile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  173 => 66,  160 => 56,  155 => 54,  148 => 50,  143 => 48,  136 => 44,  131 => 42,  121 => 35,  115 => 32,  107 => 27,  97 => 20,  93 => 19,  87 => 16,  80 => 12,  74 => 9,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set textile = textileList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap textile\">
    <div class=\"fullBlock\">
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
          <img
            class=\"textile__block1__bg\"
            src=\"{{ 'assets/img/Textile/ellipseInfoTop.png'|theme }}\"
            alt=\"\"
          />
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
              <span>Связаться с нами</span>
            </span>
          </div>
          
          <img
            class=\"textile__block2__bg1\"
            src=\"{{ 'assets/img/Textile/ellipseInfoRightCenter.png'|theme }}\"
            alt=\"\"
          />
        </div>
        <div class=\"footer\">
          <p>
            © 2021
            <a href=\"https://itd.company/portfolio/\"
              >ITD Company.</a
            >
            All rights reserved
          </p>
        </div>
      </div>
    </div>
    <img
      class=\"textile__block2__bg2\"
      src=\"{{ 'assets/img/Textile/ellipseInfoBottom.svg'|theme }}\"
      alt=\"\"
    />
  </section>", "D:\\ABN_at_cms/themes/abn/partials/site/textile.htm", "");
    }
}
