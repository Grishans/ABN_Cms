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

/* D:\ABN_at_cms/themes/abn/layouts/default.htm */
class __TwigTemplate_742ee7e62fd4dcb583d56c5b847f03870b84d8addecac3e0ed112f4f18cf8ba4 extends \Twig\Template
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
        $tags = array("set" => 1, "styles" => 24, "for" => 36, "partial" => 74, "framework" => 185, "scripts" => 186);
        $filters = array("escape" => 8, "theme" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'styles', 'for', 'partial', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        $context["menu"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["social"] = twig_get_attribute($this->env, $this->source, ($context["socialList"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        $context["contact"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["contactList"] ?? null), "records", [], "any", false, false, true, 3)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 4
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style/style.css");
        echo "\" />
        <link rel=\"shortcut icon\" href=\"assets/img/favicon.ico'|theme }}\" type=\"image/x-icon\" />

        <link
            rel=\"stylesheet\"
            type=\"text/css\"
            href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"
        />
        ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "    </head>
    <body>

        <div class=\"global__wrap\">
            <div class=\"sidebar\">
              <div class=\"sidebar__logo\">
                <a href=\"#\">
                  <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, true, 32), "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\" alt=\"\" />
                </a>
              </div>
              <div class=\"sidebar__sn\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 37
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "logo", [], "any", false, false, true, 38), "path", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" />
                  </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </div>
              <div class=\"mainDots\">
                <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_2", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</span>
              </div>
              <div class=\"sidebar__language\">
                <div class=\"sl__wrap\">
                  <a id=\"RU\"
                    class=\"langRU\"
                    href=\"#\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: 'ru'\"
                    >RU</a
                  >
                  <div class=\"sl__wrap__swith\">
                    <div class=\"sl__wrap__swith_trigger\"></div>
                  </div>
                  <a id=\"EN\"
                    class=\"langEN\"
                    href=\"#\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: 'en'\"
                    >EN</a
                  >
                </div>
              </div>
              <div class=\"mobilNavTrigger\">
                <img class=\"mobilNavBurger\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mobilNavTrigger.svg");
        echo "\" alt=\"\">
                <img class=\"mobilNavCross\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mobilMenuCross.svg");
        echo "\" alt=\"\">
              </div>
            </div>
            <div class=\"content\">
              <div class=\"mainSlider\">
                <div class=\"block block1\" data-title=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_1", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/about_us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "                </div>

                <div class=\"block block2\" data-title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_3", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 78
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/textile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 79
        echo "                </div>

                <div class=\"block block3\" data-title=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/electronics"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "                </div>

                <div class=\"block block4\" data-title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/prod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "                </div>

                <div class=\"block block5\" data-title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/ind_equipment"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 91
        echo "                </div>

                <div class=\"block block6\" data-title=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_7", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "\">
                    ";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/consalting"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "                </div>

                <div class=\"block block7\" data-title=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "\">
                    <section class=\"block__wrap contacts\">
                        <div class=\"fullBlock\">
                          <div class=\"fullBlock__contacts__wrap\">
                            <div class=\"fcw__form\">
                              <p class=\"content__title\">";
        // line 102
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "name_form", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "</p>
                              <form action=\"\">
          
                                <label for=\"formName\">";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_1", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo " <p>*</p></label>
                                <input type=\"text\" id=\"formName\">
          
                                <label for=\"formEmail\">";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_2", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo " <p>*</p></label>
                                <input type=\"text\" id=\"formEmail\">
          
                                <label for=\"formText\">";
        // line 111
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_3", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "</label>
                                <textarea id=\"formText\" cols=\"30\" rows=\"10\"></textarea>
          
                                <span class=\"mainBtn\">
                                  <input type=\"submit\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "text_send_btn", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "\" id=\"formBtn\">
                                </span>
                                
          
                              </form>
                            </div>
                            <div class=\"fcw__map\">
                              <div class=\"map__wrap\">
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.8080268264566!2d-9.157220776078441!3d38.74516731944253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331acf68cb01%3A0x52d9238e53b71ae!2zUi4gQ3Jpc3TDs3bDo28gRmlndWVpcmVkbyA1LCAxNjAwLTE4NSBMaXNib2EsINCf0L7RgNGC0YPQs9Cw0LvQuNGP!5e0!3m2!1sru!2sua!4v1616576167709!5m2!1sru!2sua\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                              </div>
                              <div class=\"map__contact\">
                                <div class=\"mc__block\">
                                  <img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Contacts/Geo.svg");
        echo "\" alt=\"\">
                                  <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"mc__block\">
                                  <img src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Contacts/Mail.svg");
        echo "\" alt=\"\">
                                  <p>";
        // line 132
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        echo "</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class=\"mainTitle mainTitle__electronic\">";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"footer\">
                          <p>© 2021 <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All rights reserved</p>
                        </div>
                      </section>
                </div>

              </div>
            </div>
          </div>
      
          <script src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
          <script
            type=\"text/javascript\"
            src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"
          ></script>
          <script src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
          <script>
            \$(\".mainSlider\").slick({
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              adaptiveHeight: true,
              arrow: false,
              draggable: false,
              dots: true,
              appendDots: \$(\".mainDots\"),
              customPaging: function (slider, i) {
                var title = \$(slider.\$slides[i]).data(\"title\");
                return '<a class=\"pager__item\"> ' + title + \" </a>\";
              },
              responsive: [
                {
                  breakpoint: 920,
                  settings: {
                    arrow: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    draggable: true,
                  },
                },
              ],
            });
          </script>

        ";
        // line 185
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 186
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 187
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\ABN_at_cms/themes/abn/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 187,  394 => 186,  383 => 185,  349 => 154,  329 => 137,  321 => 132,  317 => 131,  311 => 128,  307 => 127,  292 => 115,  285 => 111,  279 => 108,  273 => 105,  267 => 102,  259 => 97,  255 => 95,  251 => 94,  247 => 93,  243 => 91,  239 => 90,  235 => 89,  231 => 87,  227 => 86,  223 => 85,  219 => 83,  215 => 82,  211 => 81,  207 => 79,  203 => 78,  199 => 77,  195 => 75,  191 => 74,  187 => 73,  179 => 68,  175 => 67,  148 => 43,  144 => 41,  133 => 38,  128 => 37,  124 => 36,  117 => 32,  108 => 25,  105 => 24,  94 => 16,  90 => 15,  82 => 10,  78 => 9,  74 => 8,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set menu = menuList.records[0] %}
{% set social = socialList.records %}
{% set contact = contactList.records[0] %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <link rel=\"shortcut icon\" href=\"{{ 'assets/img/favicon.ico'|theme }}\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"{{ 'assets/style/style.css'|theme }}\" />
        <link rel=\"shortcut icon\" href=\"assets/img/favicon.ico'|theme }}\" type=\"image/x-icon\" />

        <link
            rel=\"stylesheet\"
            type=\"text/css\"
            href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"
        />
        {% styles %}
    </head>
    <body>

        <div class=\"global__wrap\">
            <div class=\"sidebar\">
              <div class=\"sidebar__logo\">
                <a href=\"#\">
                  <img src=\"{{ menu.logo.path }}\" alt=\"\" />
                </a>
              </div>
              <div class=\"sidebar__sn\">
                {% for s in social %}
                  <a href=\"{{ s.url }}\">
                    <img src=\"{{ s.logo.path }}\" alt=\"{{ s.name }}\" />
                  </a>
                {% endfor %}
              </div>
              <div class=\"mainDots\">
                <span>{{ menu.item_2 }}</span>
              </div>
              <div class=\"sidebar__language\">
                <div class=\"sl__wrap\">
                  <a id=\"RU\"
                    class=\"langRU\"
                    href=\"#\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: 'ru'\"
                    >RU</a
                  >
                  <div class=\"sl__wrap__swith\">
                    <div class=\"sl__wrap__swith_trigger\"></div>
                  </div>
                  <a id=\"EN\"
                    class=\"langEN\"
                    href=\"#\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: 'en'\"
                    >EN</a
                  >
                </div>
              </div>
              <div class=\"mobilNavTrigger\">
                <img class=\"mobilNavBurger\" src=\"{{ 'assets/img/mobilNavTrigger.svg'|theme }}\" alt=\"\">
                <img class=\"mobilNavCross\" src=\"{{ 'assets/img/mobilMenuCross.svg'|theme }}\" alt=\"\">
              </div>
            </div>
            <div class=\"content\">
              <div class=\"mainSlider\">
                <div class=\"block block1\" data-title=\"{{ menu.item_1 }}\">
                    {% partial 'site/about_us' %}
                </div>

                <div class=\"block block2\" data-title=\"{{ menu.item_3 }}\">
                    {% partial 'site/textile' %}
                </div>

                <div class=\"block block3\" data-title=\"{{ menu.item_4 }}\">
                    {% partial 'site/electronics' %}
                </div>

                <div class=\"block block4\" data-title=\"{{ menu.item_5 }}\">
                    {% partial 'site/prod' %}
                </div>

                <div class=\"block block5\" data-title=\"{{ menu.item_6 }}\">
                    {% partial 'site/ind_equipment' %}
                </div>

                <div class=\"block block6\" data-title=\"{{ menu.item_7 }}\">
                    {% partial 'site/consalting' %}
                </div>

                <div class=\"block block7\" data-title=\"{{ menu.item_8 }}\">
                    <section class=\"block__wrap contacts\">
                        <div class=\"fullBlock\">
                          <div class=\"fullBlock__contacts__wrap\">
                            <div class=\"fcw__form\">
                              <p class=\"content__title\">{{ contact.name_form }}</p>
                              <form action=\"\">
          
                                <label for=\"formName\">{{ contact.field_1 }} <p>*</p></label>
                                <input type=\"text\" id=\"formName\">
          
                                <label for=\"formEmail\">{{ contact.field_2 }} <p>*</p></label>
                                <input type=\"text\" id=\"formEmail\">
          
                                <label for=\"formText\">{{ contact.field_3 }}</label>
                                <textarea id=\"formText\" cols=\"30\" rows=\"10\"></textarea>
          
                                <span class=\"mainBtn\">
                                  <input type=\"submit\" value=\"{{ contact.text_send_btn }}\" id=\"formBtn\">
                                </span>
                                
          
                              </form>
                            </div>
                            <div class=\"fcw__map\">
                              <div class=\"map__wrap\">
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.8080268264566!2d-9.157220776078441!3d38.74516731944253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331acf68cb01%3A0x52d9238e53b71ae!2zUi4gQ3Jpc3TDs3bDo28gRmlndWVpcmVkbyA1LCAxNjAwLTE4NSBMaXNib2EsINCf0L7RgNGC0YPQs9Cw0LvQuNGP!5e0!3m2!1sru!2sua!4v1616576167709!5m2!1sru!2sua\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                              </div>
                              <div class=\"map__contact\">
                                <div class=\"mc__block\">
                                  <img src=\"{{ 'assets/img/Contacts/Geo.svg'|theme }}\" alt=\"\">
                                  <p>{{ contact.address }}</p>
                                </div>
                                <div class=\"mc__block\">
                                  <img src=\"{{ 'assets/img/Contacts/Mail.svg'|theme }}\" alt=\"\">
                                  <p>{{ contact.email }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class=\"mainTitle mainTitle__electronic\">{{ menu.item_8 }}</div>
                        </div>
                        <div class=\"footer\">
                          <p>© 2021 <a href=\"https://itd.company/portfolio/\">ITD Company.</a> All rights reserved</p>
                        </div>
                      </section>
                </div>

              </div>
            </div>
          </div>
      
          <script src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
          <script
            type=\"text/javascript\"
            src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"
          ></script>
          <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
          <script>
            \$(\".mainSlider\").slick({
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              adaptiveHeight: true,
              arrow: false,
              draggable: false,
              dots: true,
              appendDots: \$(\".mainDots\"),
              customPaging: function (slider, i) {
                var title = \$(slider.\$slides[i]).data(\"title\");
                return '<a class=\"pager__item\"> ' + title + \" </a>\";
              },
              responsive: [
                {
                  breakpoint: 920,
                  settings: {
                    arrow: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    draggable: true,
                  },
                },
              ],
            });
          </script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "D:\\ABN_at_cms/themes/abn/layouts/default.htm", "");
    }
}
