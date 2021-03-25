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

/* D:\ABN_at_cms/themes/abn/partials/site/electronics.htm */
class __TwigTemplate_8a1a31f8472ec955d6788a167db3501284c46a9201c923b1dc60110ef3c1f325 extends \Twig\Template
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
        $filters = array("escape" => 9, "raw" => 12, "replace" => 12, "theme" => 42);
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
        $context["electronic"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["electronicsList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["menu"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        echo "
<section class=\"block__wrap electronics\">
    <div class=\"fullBlock\">
      <div class=\"fullBlock__electroinic__wrap\">
        <div class=\"few__block\">
          <p class=\"content__title\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
          </p>
          <p class=\"content__text\">
            ";
        // line 12
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_1", [], "any", false, false, true, 12), 12, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
          </p>
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
      <img
        class=\"fullBlock__bg\"
        src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_1", [], "any", false, false, true, 20), "path", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\"
        alt=\"\"
      />
    </div>
    <div class=\"contentBlock\">
      <div class=\"contentBlock__electronics__wrap\">
        <div class=\"contentBlock__electronic__block1\">
          <p class=\"content__title\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_2", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
          </p>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
              <p class=\"content__title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "subtitle_page_2", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</p>
              <p class=\"content__text\">
                ";
        // line 34
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "subdesc_page_2", [], "any", false, false, true, 34), 34, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img
                class=\"electronic__bg1__cube\"
                src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\"
                alt=\"\"
              />
              <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_2", [], "any", false, false, true, 45), "path", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
          </div>
        </div>
        <div class=\"contentBlock__electronic__block2\">
          <div class=\"ceb2__wrap\">
            <div class=\"ceb2w__block\">
              <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_3", [], "any", false, false, true, 52), "path", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              <p class=\"secondTitle\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_1_page_3", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "</p>
              <p class=\"text\">
                ";
        // line 55
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_1_page_3", [], "any", false, false, true, 55), 55, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <div class=\"ceb2w__block\">
              <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_2_page_3", [], "any", false, false, true, 59), "path", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              <p class=\"secondTitle\">";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_2_page_3", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</p>
              <p class=\"text\">
                ";
        // line 62
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_2_page_3", [], "any", false, false, true, 62), 62, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
            <div class=\"ceb2w__block\">
              <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_3_page_3", [], "any", false, false, true, 66), "path", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "\" alt=\"\" />
              <p class=\"secondTitle\">";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_3_page_3", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</p>
              <p class=\"text\">
                ";
        // line 69
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_3_page_3", [], "any", false, false, true, 69), 69, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
              </p>
            </div>
          </div>
        </div>
        <div class=\"contentBlock__electronic__block3\">
          <div class=\"cwb3__wrap\">
            <p class=\"content__title\">";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "title_page_4", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">
              ";
        // line 78
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "desc_page_4", [], "any", false, false, true, 78), 78, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
            <span class=\"mainBtn\">
              <span>Связаться с нами</span>
            </span>
          </div>
          <div class=\"electronic__bg2\">
            <div class=\"electronic__bg2__wrap\">
              <img
                class=\"electronic__bg2__cube\"
                src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Electronic/cube.png");
        echo "\"
                alt=\"\"
              />
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image_1_page_4", [], "any", false, false, true, 91), "path", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "\" alt=\"\" />
            </div>
          </div>
        </div>
        <div class=\"footer\">
          <p>
            © 2021<a href=\"https://itd.company/portfolio/\"
              >ITD Company.</a
            >All rights reserved
          </p>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "D:\\ABN_at_cms/themes/abn/partials/site/electronics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 91,  216 => 88,  203 => 78,  198 => 76,  188 => 69,  183 => 67,  179 => 66,  172 => 62,  167 => 60,  163 => 59,  156 => 55,  151 => 53,  147 => 52,  137 => 45,  131 => 42,  120 => 34,  115 => 32,  108 => 28,  97 => 20,  91 => 17,  87 => 16,  80 => 12,  74 => 9,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set electronic = electronicsList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap electronics\">
    <div class=\"fullBlock\">
      <div class=\"fullBlock__electroinic__wrap\">
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
      <img
        class=\"fullBlock__bg\"
        src=\"{{ electronic.image_1_page_1.path }}\"
        alt=\"\"
      />
    </div>
    <div class=\"contentBlock\">
      <div class=\"contentBlock__electronics__wrap\">
        <div class=\"contentBlock__electronic__block1\">
          <p class=\"content__title\">
            {{ electronic.title_page_2 }}
          </p>
          <div class=\"ceb1__wrap\">
            <div class=\"cew__text\">
              <p class=\"content__title\">{{ electronic.subtitle_page_2 }}</p>
              <p class=\"content__text\">
                {{ electronic.subdesc_page_2|replace({'<p>':'','</p>':''})|raw }}
              </p>
            </div>
          </div>
          <div class=\"electronic__bg1\">
            <div class=\"electronic__bg1__wrap\">
              <img
                class=\"electronic__bg1__cube\"
                src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\"
                alt=\"\"
              />
              <img src=\"{{ electronic.image_1_page_2.path }}\" alt=\"\" />
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
              <span>Связаться с нами</span>
            </span>
          </div>
          <div class=\"electronic__bg2\">
            <div class=\"electronic__bg2__wrap\">
              <img
                class=\"electronic__bg2__cube\"
                src=\"{{ 'assets/img/Electronic/cube.png'|theme }}\"
                alt=\"\"
              />
              <img src=\"{{ electronic.image_1_page_4.path }}\" alt=\"\" />
            </div>
          </div>
        </div>
        <div class=\"footer\">
          <p>
            © 2021<a href=\"https://itd.company/portfolio/\"
              >ITD Company.</a
            >All rights reserved
          </p>
        </div>
      </div>
    </div>
  </section>", "D:\\ABN_at_cms/themes/abn/partials/site/electronics.htm", "");
    }
}
