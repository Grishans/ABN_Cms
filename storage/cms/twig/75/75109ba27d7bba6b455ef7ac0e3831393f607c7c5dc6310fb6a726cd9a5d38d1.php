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

/* D:\Work\ABN_Cms/themes/abn/layouts/default.htm */
class __TwigTemplate_30e04842997978019ce65414038c54a11ba1e466be7edc5ada6d55be8c5caf34 extends \Twig\Template
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
        $tags = array("set" => 1, "styles" => 21, "for" => 34, "partial" => 60, "framework" => 311, "scripts" => 312);
        $filters = array("escape" => 9, "theme" => 16);
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
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "meta_title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">

  <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\" />
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style/style.css");
        echo "\" />
  <link rel=\"shortcut icon\" href=\"assets/img/favicon.ico'|theme }}\" type=\"image/x-icon\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\" />
  ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 22
        echo "</head>

<body>

  <div class=\"global__wrap\">
    <div class=\"sidebar\">
      <div class=\"sidebar__logo\">
        <a href=\"#\">
          <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "logo", [], "any", false, false, true, 30), "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </a>
      </div>
      <div class=\"sidebar__sn\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 35
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\">
          <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "logo", [], "any", false, false, true, 36), "path", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\" />
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      </div>
      <div class=\"mainDots\">
        <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_2", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "</span>
      </div>
      <div class=\"sidebar__language\">
        <div class=\"sl__wrap\">
          <a id=\"RU\" class=\"langRU\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">RU</a>
          <div class=\"sl__wrap__swith\">
            <div class=\"sl__wrap__swith_trigger\"></div>
          </div>
          <a id=\"EN\" class=\"langEN\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">EN</a>
        </div>
      </div>
      <div class=\"mobilNavTrigger\">
        <img class=\"mobilNavBurger\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mobilNavTrigger.svg");
        echo "\" alt=\"\">
        <img class=\"mobilNavCross\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mobilMenuCross.svg");
        echo "\" alt=\"\">
      </div>
    </div>
    <div class=\"content\">
      <div class=\"mainSlider\">
        <div class=\"block block1\" data-title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_1", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "\">
          ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/about_us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "        </div>

        <div class=\"block block2\" data-title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_3", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "\">
          ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/textile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "        </div>

        <div class=\"block block3\" data-title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_4", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\">
          ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/electronics"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "        </div>

        <div class=\"block block4\" data-title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_5", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "\">
          ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/prod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "        </div>

        <div class=\"block block5\" data-title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_6", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\">
          ";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/ind_equipment"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "        </div>

        <div class=\"block block6\" data-title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_7", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\">
          ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/consalting"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "        </div>

        <div class=\"block block7\" data-title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "\">
          <section class=\"block__wrap contacts\">
            <div class=\"fullBlock fullBlock__contacts\">
              <div class=\"fullBlock__contacts__wrap\">
                <div class=\"fcw__form\">
                  <p class=\"content__title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "name_form", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "</p>
                  <form action=\"\">

                    <label for=\"formName\">";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_1", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo " <p>*</p></label>
                    <input type=\"text\" id=\"formName\">

                    <label for=\"formEmail\">";
        // line 94
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_2", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo " <p>*</p></label>
                    <input type=\"text\" id=\"formEmail\">

                    <label for=\"formText\">";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_3", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "</label>
                    <textarea id=\"formText\" cols=\"30\" rows=\"10\"></textarea>

                    <span class=\"mainBtn\">
                      <input type=\"submit\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "text_send_btn", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "\" id=\"formBtn\">
                    </span>


                  </form>
                </div>
                <div class=\"fcw__map\">
                  <div class=\"map__wrap\">
                    <iframe
                      src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.8080268264566!2d-9.157220776078441!3d38.74516731944253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331acf68cb01%3A0x52d9238e53b71ae!2zUi4gQ3Jpc3TDs3bDo28gRmlndWVpcmVkbyA1LCAxNjAwLTE4NSBMaXNib2EsINCf0L7RgNGC0YPQs9Cw0LvQuNGP!5e0!3m2!1sru!2sua!4v1616576167709!5m2!1sru!2sua\"
                      width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                  </div>
                  <div class=\"map__contact\">
                    <div class=\"mc__block\">
                      <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Contacts/Geo.svg");
        echo "\" alt=\"\">
                      <p>";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"mc__block\">
                      <img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Contacts/Mail.svg");
        echo "\" alt=\"\">
                      <p>";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"mainTitle mainTitle__electronic\">";
        // line 125
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item_8", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
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
  <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
  <script src=\"";
        // line 139
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
      swipe: false,
      dots: true,
      appendDots: \$(\".mainDots\"),
      customPaging: function (slider, i) {
        var title = \$(slider.\$slides[i]).data(\"title\");
        return '<a class=\"pager__item\"> ' + title + \" </a>\";
      },
      responsive: [
        {
          breakpoint: 600,
          settings: {
            arrow: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: true,
          },
        },
      ],
    });
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".ceb2__wrap\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$('.color__line').detach();
      \$('.block2__bg').detach();
      \$(\".content__product__block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$('.pcb2__bg').detach();
      \$(\".prom__content__Block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".fc1w__block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".fc2w__block__text\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    \$('span[data-slide]').click(function (e) {
      e.preventDefault();
      var slideno = \$(this).data('slide');
      \$('.mainSlider').slick('slickGoTo', slideno - 1);
      \$('.block7').css('opacity', '1')
    });
  </script>

  ";
        // line 311
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
        // line 312
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 313
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\Work\\ABN_Cms/themes/abn/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 313,  520 => 312,  509 => 311,  334 => 139,  317 => 125,  309 => 120,  305 => 119,  299 => 116,  295 => 115,  278 => 101,  271 => 97,  265 => 94,  259 => 91,  253 => 88,  245 => 83,  241 => 81,  237 => 80,  233 => 79,  229 => 77,  225 => 76,  221 => 75,  217 => 73,  213 => 72,  209 => 71,  205 => 69,  201 => 68,  197 => 67,  193 => 65,  189 => 64,  185 => 63,  181 => 61,  177 => 60,  173 => 59,  165 => 54,  161 => 53,  146 => 41,  142 => 39,  131 => 36,  126 => 35,  122 => 34,  115 => 30,  105 => 22,  102 => 21,  95 => 17,  91 => 16,  83 => 11,  79 => 10,  75 => 9,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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

  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\" />
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
          <a id=\"RU\" class=\"langRU\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">RU</a>
          <div class=\"sl__wrap__swith\">
            <div class=\"sl__wrap__swith_trigger\"></div>
          </div>
          <a id=\"EN\" class=\"langEN\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">EN</a>
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
            <div class=\"fullBlock fullBlock__contacts\">
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
                    <iframe
                      src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.8080268264566!2d-9.157220776078441!3d38.74516731944253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331acf68cb01%3A0x52d9238e53b71ae!2zUi4gQ3Jpc3TDs3bDo28gRmlndWVpcmVkbyA1LCAxNjAwLTE4NSBMaXNib2EsINCf0L7RgNGC0YPQs9Cw0LvQuNGP!5e0!3m2!1sru!2sua!4v1616576167709!5m2!1sru!2sua\"
                      width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
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
  <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
  <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
  <script>
    \$(\".mainSlider\").slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      arrow: false,
      draggable: false,
      swipe: false,
      dots: true,
      appendDots: \$(\".mainDots\"),
      customPaging: function (slider, i) {
        var title = \$(slider.\$slides[i]).data(\"title\");
        return '<a class=\"pager__item\"> ' + title + \" </a>\";
      },
      responsive: [
        {
          breakpoint: 600,
          settings: {
            arrow: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: true,
          },
        },
      ],
    });
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".ceb2__wrap\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$('.color__line').detach();
      \$('.block2__bg').detach();
      \$(\".content__product__block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$('.pcb2__bg').detach();
      \$(\".prom__content__Block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".fc1w__block2\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    if (\$(window).width() < 600) {
      \$(\".fc2w__block__text\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrow: false,
        draggable: false,
        dots: true,
        responsive: [
          {
            breakpoint: 600,
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
    }
  </script>
  <script>
    \$('span[data-slide]').click(function (e) {
      e.preventDefault();
      var slideno = \$(this).data('slide');
      \$('.mainSlider').slick('slickGoTo', slideno - 1);
      \$('.block7').css('opacity', '1')
    });
  </script>

  {% framework extras %}
  {% scripts %}

</body>

</html>", "D:\\Work\\ABN_Cms/themes/abn/layouts/default.htm", "");
    }
}
