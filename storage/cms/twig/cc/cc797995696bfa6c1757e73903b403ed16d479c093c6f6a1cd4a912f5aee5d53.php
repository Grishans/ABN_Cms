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

/* D:\ABN_at_cms/plugins/itd/admin/components/feedbackform/default.htm */
class __TwigTemplate_687d7f1153e0920fc8a2eff6a4c393ee49bb442ec74ebc18e59f1f52a7b65e12 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<form  data-request=\"onSend\">
    <div>
        <label for=\"name\">Last Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">

        <p data-validate-for=\"last_name\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"email\">Email</label>
        <input type=\"text\" name=\"email\" class=\"form-control\">
        <p data-validate-for=\"email\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"content\">Message</label>
        <textarea rows=\"6\" cols=\"20\" name=\"content\" class=\"form-control\"></textarea>
        <p data-validate-for=\"content\"  class=\"text-danger\"></p> 
    </div>

    <div>
        <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\ABN_at_cms/plugins/itd/admin/components/feedbackform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form  data-request=\"onSend\">
    <div>
        <label for=\"name\">Last Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">

        <p data-validate-for=\"last_name\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"email\">Email</label>
        <input type=\"text\" name=\"email\" class=\"form-control\">
        <p data-validate-for=\"email\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"content\">Message</label>
        <textarea rows=\"6\" cols=\"20\" name=\"content\" class=\"form-control\"></textarea>
        <p data-validate-for=\"content\"  class=\"text-danger\"></p> 
    </div>

    <div>
        <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    </div>
</form>", "D:\\ABN_at_cms/plugins/itd/admin/components/feedbackform/default.htm", "");
    }
}
