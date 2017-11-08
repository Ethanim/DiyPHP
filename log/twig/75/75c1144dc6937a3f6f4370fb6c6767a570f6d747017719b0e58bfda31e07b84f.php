<?php

/* add.html */
class __TwigTemplate_7ea9b77e80bbf63804337710f6a3ac3aa141f61c4f0415d3e8205eb53d3be512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
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
        echo "<form action=\"/index/save\" method=\"post\">
\t<div align=\"center\">标题：<input type=\"text\" name=\"title\" ></div>
\t<br>\t
\t<div align=\"center\">内容：<textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
\t<br>\t
\t<div align=\"\"><input type=\"submit\" value=\"提交\"></div>
\t
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"/index/save\" method=\"post\">
\t<div align=\"center\">标题：<input type=\"text\" name=\"title\" ></div>
\t<br>\t
\t<div align=\"center\">内容：<textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
\t<br>\t
\t<div align=\"\"><input type=\"submit\" value=\"提交\"></div>
\t
</form>
{% endblock %}", "add.html", "D:\\vhost\\DiyPHP\\app\\views\\add.html");
    }
}
