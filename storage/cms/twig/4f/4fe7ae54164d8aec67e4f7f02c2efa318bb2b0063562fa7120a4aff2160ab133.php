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

/* D:\ABN_at_cms/themes/abn/partials/site/consalting.htm */
class __TwigTemplate_b1ea5baba9524ba413542ecfa574ba5cab6e6072d84e8a7b22c5abae6e23bcf0 extends \Twig\Template
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
        $filters = array("escape" => 8, "raw" => 16, "replace" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw', 'replace'],
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
      <div class=\"fullBlock__consalting__wrap\">
        <div class=\"fc1w__title\">
          <p class=\"content__title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_1", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"fc1w__block1\">
          <div class=\"fc1wb__img\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_1", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" alt=\"\" />
          </div>
          <div class=\"fc1wb__text\">
            <p class=\"content__text\">
              ";
        // line 16
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_1", [], "any", false, false, true, 16), 16, $this->source), ["<p>" => "", "</p>" => ""]);
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
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_1", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"cpb2b__text\">
              <p>
                ";
        // line 30
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_1", [], "any", false, false, true, 30), 30, $this->source), ["<p>" => "", "</p>" => ""]);
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
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_1", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"cpb2b__text\">
              ";
        // line 42
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_1", [], "any", false, false, true, 42), 42, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </div>
          </div>
          <div class=\"cpb2__block\">
            <div class=\"cpb2b__number\">
              <p class=\"content__title\">3</p>
            </div>
            <div class=\"cpb2b__title\">
              <p class=\"secondTitle\">";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_1", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"cpb2b__text\">
              ";
        // line 53
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_1", [], "any", false, false, true, 53), 53, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </div>
          </div>
          <div class=\"color__line\"></div>
        </div>
      </div>
      <div class=\"mainTitle mainTitle__electronic\">";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_7", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</div>
      <div class=\"mainTitle mainTitle__electronic1\">";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</div>
    </div>
    <div class=\"fullBlock consulting2\">
      <div class=\"fullBlock__consalting__wrap\">
        <div class=\"fc2w__block1\">
          <p class=\"content__title\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_2", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
          </p>
          <div class=\"content__text\">
            <p class=\"content__text\">
              ";
        // line 70
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_2", [], "any", false, false, true, 70), 70, $this->source), ["<p>" => "", "</p>" => ""]);
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
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_1_page_1", [], "any", false, false, true, 79), "path", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\" alt=\"\" />
                </div>
              </div>
              <div class=\"fc2wbt__block__text\">
                <p class=\"secondTitle\">";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_2", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "</p>
                <p class=\"content__text\">
                  ";
        // line 85
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_2", [], "any", false, false, true, 85), 85, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
                </p>
              </div>
            </div>
            <div class=\"fc2wbt__block\">
              <div class=\"fc2wbt__block__img\">
                <div class=\"fc2wbt__block__img__wrap\">
                  <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_2_page_1", [], "any", false, false, true, 92), "path", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "\" alt=\"\" />
                </div>
              </div>
              <div class=\"fc2wbt__block__text\">
                <p class=\"secondTitle\">";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_2", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "</p>
                <p class=\"content__text\">
                  ";
        // line 98
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_2", [], "any", false, false, true, 98), 98, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
                </p>
              </div>
            </div>
            <div class=\"fc2wbt__block\">
              <div class=\"fc2wbt__block__img\">
                <div class=\"fc2wbt__block__img__wrap\">
                  <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subimage_3_page_1", [], "any", false, false, true, 105), "path", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "\" alt=\"\" />
                </div>
              </div>
              <div class=\"fc2wbt__block__text\">
                <p class=\"secondTitle\">";
        // line 109
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_2", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "</p>
                <p class=\"content__text\">
                  ";
        // line 111
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_2", [], "any", false, false, true, 111), 111, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
                </p>
              </div>
            </div>
          </div>
          <div class=\"fc2w__block__img\">
            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_2", [], "any", false, false, true, 117), "path", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
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
        // line 127
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "title_page_3", [], "any", false, false, true, 127), 127, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
          <div class=\"fc3w__block1__img\">
            <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "image_1_page_3", [], "any", false, false, true, 131), "path", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"fc3w__block1__text\">
            <p class=\"content__text\">
              ";
        // line 135
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "desc_page_3", [], "any", false, false, true, 135), 135, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            </p>
          </div>
        </div>
        <div class=\"fc3w__block2\">
          <div class=\"fc3w__block2__block\">
            <p class=\"secondTitle\">";
        // line 141
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_1_page_3", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">";
        // line 142
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_1_page_3", [], "any", false, false, true, 142), 142, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
          </div>
          <div class=\"fc3w__block2__block\">
            <p class=\"secondTitle\">";
        // line 145
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_2_page_3", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">";
        // line 146
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_2_page_3", [], "any", false, false, true, 146), 146, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
          </div>
          <div class=\"fc3w__block2__block\">
            <p class=\"secondTitle\">";
        // line 149
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subtitle_3_page_3", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "</p>
            <p class=\"content__text\">";
        // line 150
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cons"] ?? null), "subdesc_3_page_3", [], "any", false, false, true, 150), 150, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</p>
          </div>
        </div>
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
        return "D:\\ABN_at_cms/themes/abn/partials/site/consalting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 150,  304 => 149,  298 => 146,  294 => 145,  288 => 142,  284 => 141,  275 => 135,  268 => 131,  261 => 127,  248 => 117,  239 => 111,  234 => 109,  227 => 105,  217 => 98,  212 => 96,  205 => 92,  195 => 85,  190 => 83,  183 => 79,  171 => 70,  164 => 66,  155 => 60,  151 => 59,  142 => 53,  136 => 50,  125 => 42,  119 => 39,  107 => 30,  100 => 26,  87 => 16,  80 => 12,  73 => 8,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cons = consultingList.records[0] %}
{% set menu = menuList.records[0] %}

<section class=\"block__wrap consulting\">
    <div class=\"fullBlock consulting1\">
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
      </div>
    </div>
    <div class=\"footer footer_consulting\">
      <p>
        © 2021
        <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All
        rights reserved
      </p>
    </div>
  </section>", "D:\\ABN_at_cms/themes/abn/partials/site/consalting.htm", "");
    }
}
