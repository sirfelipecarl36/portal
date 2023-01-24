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

/* modules/contrib/markdown/templates/installable-library.html.twig */
class __TwigTemplate_335784570795801be16ee22a7446d13c44f1fc7027a17b247b780ec9e288ff7d extends \Twig\Template
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
        // line 32
        $context["classes"] = [0 => "installable-library", 1 => ((        // line 34
($context["id"] ?? null)) ? (("installable-library--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 34, $this->source)))) : ("")), 2 => ((        // line 35
($context["status"] ?? null)) ? (("installable-library--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 35, $this->source)))) : ("")), 3 => ((        // line 36
($context["isMultiple"] ?? null)) ? ("installable-library--multiple") : ("")), 4 => ((        // line 37
($context["isPreferred"] ?? null)) ? ("installable-library--preferred") : (""))];
        // line 39
        echo "<span";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  <span class=\"installable-library-status";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "isInstalled", [], "any", false, false, true, 40)) ? (" installable-library-status--installed") : ("")));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["statusTitle"] ?? null), 40, $this->source), "html", null, true);
        echo "\"></span>
  <span class=\"installable-library-content\">
    <span>
      <strong>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
        echo "</strong>
    </span>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "version", [], "any", false, false, true, 45)) {
            // line 46
            echo "      ";
            if ((($context["preferredLibrary"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "id", [], "any", false, false, true, 46) != twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "id", [], "any", false, false, true, 46)))) {
                // line 47
                echo "        ";
                $context["preferredLatestVersion"] = twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "getLatestVersion", [], "any", false, false, true, 47);
                // line 48
                echo "        <span><em>
          ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Replaced with"));
                echo ":
          ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "getVersionLink", [0 => ($context["preferredLatestVersion"] ?? null), 1 => ((((twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "label", [], "any", false, false, true, 50)) ? (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "label", [], "any", false, false, true, 50)) : (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "id", [], "any", false, false, true, 50))) . ":") . $this->sandbox->ensureToStringAllowed(($context["preferredLatestVersion"] ?? null), 50, $this->source))], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "
        </em></span>
      ";
            } elseif ((            // line 52
($context["latestVersion"] ?? null) && (($context["latestVersion"] ?? null) != twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "version", [], "any", false, false, true, 52)))) {
                // line 53
                echo "        <span><em>
          ";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Latest"));
                echo ":
          ";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getVersionLink", [0 => ($context["latestVersion"] ?? null)], "method", false, false, true, 55)) ? (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getVersionLink", [0 => ($context["latestVersion"] ?? null)], "method", false, false, true, 55)) : (($context["latestVersion"] ?? null))), "html", null, true);
                echo "
          ";
                // line 56
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getNewerVersions", [], "any", false, false, true, 56)) == 1)) {
                    // line 57
                    echo "              (1 release behind)
          ";
                } else {
                    // line 59
                    echo "              (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getNewerVersions", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
                    echo " releases behind)
          ";
                }
                // line 61
                echo "        </em></span>
      ";
            }
            // line 63
            echo "    ";
        } elseif (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getInstallCommand", [], "any", false, false, true, 63)) {
            // line 64
            echo "      <span>
        <kbd class=\"installable-library-command\">
          ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "getInstallCommand", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
        </kbd>
      </span>
    ";
        }
        // line 70
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "requirementViolations", [], "any", false, false, true, 70)) {
            // line 71
            echo "      <ul class=\"installable-library-violations\">
          ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "requirementViolations", [], "any", false, false, true, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                // line 73
                echo "            <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["violation"], 73, $this->source), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </ul>
    ";
        }
        // line 77
        echo "    ";
        if (((($context["libary"] ?? null) && ($context["preferredLibrary"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "id", [], "any", false, false, true, 77) != twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "id", [], "any", false, false, true, 77)))) {
            // line 78
            echo "      <span>
        <em>
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Upgrade to"));
            echo ": ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "getLink", [], "any", false, false, true, 80)) ? (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "getLink", [], "any", false, false, true, 80)) : (((twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "label", [], "any", false, false, true, 80)) ? (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "label", [], "any", false, false, true, 80)) : (twig_get_attribute($this->env, $this->source, ($context["preferredLibrary"] ?? null), "id", [], "any", false, false, true, 80))))), "html", null, true);
            echo "
        </em>
      </span>
    ";
        }
        // line 84
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "hasRequestFailure", [], "any", false, false, true, 84)) {
            // line 85
            echo "      <span><small><em>*";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Unable to retrieve info, <a href=\":url\" target=\"_blank\">check logs</a>", [":url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("dblog.overview", [], ["query" => ["type" => [0 => "markdown"]]])]));
            echo ".</em></small></span>
    ";
        }
        // line 87
        echo "  </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/markdown/templates/installable-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 87,  168 => 85,  165 => 84,  156 => 80,  152 => 78,  149 => 77,  145 => 75,  136 => 73,  132 => 72,  129 => 71,  126 => 70,  119 => 66,  115 => 64,  112 => 63,  108 => 61,  102 => 59,  98 => 57,  96 => 56,  92 => 55,  88 => 54,  85 => 53,  83 => 52,  78 => 50,  74 => 49,  71 => 48,  68 => 47,  65 => 46,  63 => 45,  58 => 43,  50 => 40,  45 => 39,  43 => 37,  42 => 36,  41 => 35,  40 => 34,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/markdown/templates/installable-library.html.twig", "/var/www/portal/drupal/web/modules/contrib/markdown/templates/installable-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 45, "for" => 72);
        static $filters = array("clean_class" => 34, "escape" => 39, "t" => 49, "length" => 56);
        static $functions = array("path" => 85);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 't', 'length'],
                ['path']
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
