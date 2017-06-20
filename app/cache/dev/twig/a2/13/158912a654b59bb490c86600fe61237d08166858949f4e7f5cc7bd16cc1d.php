<?php

/* EspritNaoBundle:Cours:home.html.twig */
class __TwigTemplate_a213158912a654b59bb490c86600fe61237d08166858949f4e7f5cc7bd16cc1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Dark Sign In Form a Flat Responsive Widget Template :: w3layouts</title>
\t<link   href=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
\t<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

\t<!-- For-Mobile-Apps-and-Meta-Tags -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<meta name=\"keywords\" content=\"Dark Sign In Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design\" />
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                 <script type=\"text/javascript\" src=\"http://www.parsecdn.com/js/parse-1.2.12.min.js\"></script>
\t<!-- //For-Mobile-Apps-and-Meta-Tags -->
        
</head>

<body>
    
    
   
    <h1>NAO ASSISTANT</h1>
    <div class=\"container\">
        <h2>Sign In</h2>
\t\t<form>
\t\t\t<input type=\"text\" class=\"name\" placeholder=\"Username\" id=\"usernametext\" required=\"\">
\t\t\t<input type=\"password\" class=\"password\" placeholder=\"Password\" id=\"passwordtext\" required=\"\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<input type=\"checkbox\" id=\"brand1\" value=\"\">
\t\t\t\t\t<label for=\"brand1\"><span></span>Remember me</label>
\t\t\t\t</li>
\t\t\t</ul>
            <a href=\"#\">Forgot Password?</a><br>
\t\t\t<div class=\"clear\"></div>
                        <a><input type=\"button\" onclick=\"signin()\" value=\"SIGN IN\"></a>
                           <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("esprit_nao_signup");
        echo "\"><input type=\"button\"  value=\"SIGN UP\"></a>
\t\t</form>
               
\t</div>
\t<div class=\"footer\">
\t\t
\t</div>
               
    <script type=\"text/javascript\">
   function signin(){
            Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");
          Parse.User.logIn(document.getElementById(\"usernametext\").value,document.getElementById(\"passwordtext\").value, {
  success: function(user) {
   window.location=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\";
  
  },
  error: function(user, error) {
  window.location=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\";
  }
});
        }
        
        
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 56,  77 => 52,  61 => 39,  25 => 6,  19 => 2,);
    }
}
