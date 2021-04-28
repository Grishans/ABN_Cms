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

/* /var/www/u1329421/data/www/abn.test-for-guru.ru/plugins/itd/admin/components/feedbackform/default.htm */
class __TwigTemplate_140839141962f328cea44ba3630106df5d6d5ba82512aa4a683755806504c0a7 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<form data-request=\"onSend\" data-request-success=\"sendResult(data)\">
    <label for=\"formName\">";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_1", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo " <p>*</p></label>
    <input type=\"text\" name=\"name\" id=\"formName\" >

    <label for=\"formEmail\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_2", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo " <p>*</p></label>
    <input type=\"email\" name=\"email\" id=\"formEmail\" >

    <label for=\"formText\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "field_3", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</label>
    <textarea id=\"formText\" name=\"content\" cols=\"30\" rows=\"10\"></textarea>

    <span class=\"mainBtn\">
      <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "text_send_btn", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" id=\"formBtn\">
    </span>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1329421/data/www/abn.test-for-guru.ru/plugins/itd/admin/components/feedbackform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  77 => 8,  71 => 5,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\" data-request-success=\"sendResult(data)\">
    <label for=\"formName\">{{ contact.field_1 }} <p>*</p></label>
    <input type=\"text\" name=\"name\" id=\"formName\" >

    <label for=\"formEmail\">{{ contact.field_2 }} <p>*</p></label>
    <input type=\"email\" name=\"email\" id=\"formEmail\" >

    <label for=\"formText\">{{ contact.field_3 }}</label>
    <textarea id=\"formText\" name=\"content\" cols=\"30\" rows=\"10\"></textarea>

    <span class=\"mainBtn\">
      <input type=\"submit\" value=\"{{ contact.text_send_btn }}\" id=\"formBtn\">
    </span>
</form>", "/var/www/u1329421/data/www/abn.test-for-guru.ru/plugins/itd/admin/components/feedbackform/default.htm", "");
    }
}
