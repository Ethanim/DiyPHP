<?php

/* layout.html */
class __TwigTemplate_8c9ca2e131c42875aa6e4a665560153976dbbc7a540ba76efde4f63176a2cc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
\t<style>
\t\ta:link , a:visited{color:#444;text-decoration:none;}
\t\ta:hover{color:red;}
\t</style>
</head>
<body>
\t<header>
\t\t<h2 align=\"center\">超级简单留言板</h2>
\t\t<div align=\"center\">
\t\t\t<a href=\"/\">所有留言</a>
\t\t\t<a href=\"/index/add\">添加留言</a>
\t\t</div>
\t</header>
\t\t<content>
\t\t\t<br>
\t\t\t";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "\t\t</content>
\t<footer>
\t\t<h2 align=\"center\">DiyPHP框架事例</h2>
\t</footer>
</body>
</html>";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  53 => 21,  44 => 23,  42 => 21,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
\t<style>
\t\ta:link , a:visited{color:#444;text-decoration:none;}
\t\ta:hover{color:red;}
\t</style>
</head>
<body>
\t<header>
\t\t<h2 align=\"center\">超级简单留言板</h2>
\t\t<div align=\"center\">
\t\t\t<a href=\"/\">所有留言</a>
\t\t\t<a href=\"/index/add\">添加留言</a>
\t\t</div>
\t</header>
\t\t<content>
\t\t\t<br>
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</content>
\t<footer>
\t\t<h2 align=\"center\">DiyPHP框架事例</h2>
\t</footer>
</body>
</html>", "layout.html", "D:\\vhost\\DiyPHP\\app\\views\\layout.html");
    }
}
