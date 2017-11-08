<?php

/* index.html */
class __TwigTemplate_d854477ccd5c8559a6839e9a2b5e3257948eaa16864ab5fd4fd94e12030f31a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "<div align=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "content", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo ".<a onclick=\"return confirm('确定要删除吗？')\" href=\"/index/del/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" >删除</a></div><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}

{% for value in data %}
<div align=\"center\">{{ value.title }}.{{ value.content }}.{{ value.createtime|date('Y-m-d H:i:s') }}.<a onclick=\"return confirm('确定要删除吗？')\" href=\"/index/del/id/{{ value.id }}\" >删除</a></div><br>
{% endfor %}

{% endblock %}

", "index.html", "D:\\vhost\\DiyPHP\\app\\views\\index.html");
    }
}
