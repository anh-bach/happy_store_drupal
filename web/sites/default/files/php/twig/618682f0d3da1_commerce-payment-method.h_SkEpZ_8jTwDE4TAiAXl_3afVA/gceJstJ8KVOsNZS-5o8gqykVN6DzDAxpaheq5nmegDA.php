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

/* modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig */
class __TwigTemplate_5ec18b25bfd878068cde71bd53823739022b3edacc68846f431e493e0761f547 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig"));

        // line 21
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  <div class=\"field field--name-label\">
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method"] ?? null), "label", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "isReusable", [], "any", false, false, true, 25) && twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 25))) {
            // line 26
            echo "    <div class=\"field field--name-expires\">
      ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expires"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 27), 27, $this->source), "custom", "n/Y"]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 30
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method"] ?? null), "billing_profile", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
</article>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  58 => 27,  55 => 26,  53 => 25,  48 => 23,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig", "/app/web/modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25);
        static $filters = array("escape" => 21, "t" => 27, "format_date" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'format_date'],
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
}
