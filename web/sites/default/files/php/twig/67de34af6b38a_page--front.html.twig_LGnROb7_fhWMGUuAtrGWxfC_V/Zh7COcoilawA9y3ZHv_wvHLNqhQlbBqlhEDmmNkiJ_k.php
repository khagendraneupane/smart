<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/ruhi/templates/layout/page--front.html.twig */
class __TwigTemplate_0412a1f19f0cdb10dda95d6b77256423 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->loadTemplate("@ruhi/template-parts/header.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 6)) {
            // line 7
            yield "    ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "  ";
        }
        // line 9
        yield "  <div class=\"container\">
    <div class=\"main-container\">
      ";
        // line 11
        if (($context["front_sidebar"] ?? null)) {
            // line 12
            yield "        <main id=\"main\" class=\"frontpage-main main-content\">
      ";
        } else {
            // line 14
            yield "        <main id=\"front-main\" class=\"frontpage-main main-content\">
      ";
        }
        // line 16
        yield "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 17)) {
            // line 18
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "        ";
        }
        // line 20
        yield "        <div class=\"node-content\">
          ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), "html", null, true);
        yield "
        </div>
        ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 23)) {
            // line 24
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "        ";
        }
        // line 26
        yield "      </main>
    ";
        // line 27
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 27))) {
            // line 28
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 28)->unwrap()->yield($context);
            // line 29
            yield "    ";
        }
        // line 30
        yield "    ";
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 30))) {
            // line 31
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 31)->unwrap()->yield($context);
            // line 32
            yield "    ";
        }
        // line 33
        yield "    </div><!--/main-container -->
\t</div><!--/container -->
  ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 35)) {
            // line 36
            yield "    ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 36)->unwrap()->yield($context);
            // line 37
            yield "  ";
        }
        // line 38
        yield "</div><!--/main-wrapper -->
";
        // line 39
        yield from $this->loadTemplate("@ruhi/template-parts/footer.html.twig", "themes/contrib/ruhi/templates/layout/page--front.html.twig", 39)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "front_sidebar"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ruhi/templates/layout/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  139 => 39,  136 => 38,  133 => 37,  130 => 36,  128 => 35,  124 => 33,  121 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  96 => 23,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  80 => 17,  77 => 16,  73 => 14,  69 => 12,  67 => 11,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ruhi/templates/layout/page--front.html.twig", "/Users/khagendraneupane/Development/Drupal/smartinnovation/web/themes/contrib/ruhi/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 2];
        static $filters = ["escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                [],
                $this->source
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
