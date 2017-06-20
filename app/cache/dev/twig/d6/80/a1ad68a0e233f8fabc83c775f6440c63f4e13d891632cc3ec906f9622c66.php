<?php

/* EspritNaoBundle:Cours:creation.html.twig */
class __TwigTemplate_d680a1ad68a0e233f8fabc83c775f6440c63f4e13d891632cc3ec906f9622c66 extends Twig_Template
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
        // line 3
        echo "<!DOCTYPE html><html lang=\"en\">
      
        
        
        

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <script type=\"text/javascript\" src=\"http://www.parsecdn.com/js/parse-1.2.12.min.js\"></script>
    <title>B</title>

    <!-- Bootstrap Core CSS -->
    <link   href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/business-casual.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
 <script  src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style type=\"text/css\">
            .buttonspeed
            {
           width: 200px;
    height: 200px;
    background-image: url(";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/speed.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
                 .buttonpause
            {
           width: 200px;
    height: 200px;
    background-image: url(";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/pause.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
             .buttonstart
            {
           width: 200px;
    height: 200px;
    background-image: url(";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/start.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
        
             .buttonexplain
            {
           width: 200px;
    height: 200px;
    background-image: url(";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/speak.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
             .buttonhello
            {
           width: 200px;
    height: 200px;
    background-image: url(";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/hello.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
        </style>
      
</head>

<body>

    <div class=\"brand\">Nao Robot</div>
  

    <!-- Navigation -->
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class=\"navbar-brand\" href=\"index.html\">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
               <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\" >Add Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ListCours");
        echo "\">show Lessons</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\">create Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("esprit_nao_enseignant");
        echo "\" >check presence  </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ip");
        echo "\" >Controle Nao</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
   <center> 

<h2>
 <script type=\"text/javascript\">
   \t\tfunction insertText ()
   \t\t{
\t\t document.getElementById(\"text\").value = document.getElementById(\"text\").value+\"\\\\rspd=80\\\\\";
   \t\t}
   \t\tfunction insertText1 ()
   \t\t{
\t\t document.getElementById(\"text\").value = document.getElementById(\"text\").value+\"\\\\pau=120\\\\\";
   \t\t}
   \t\tfunction insertText2 ()
   \t\t{
\t\t document.getElementById(\"text\").value = document.getElementById(\"text\").value+\"^start(Yes_1)\";
   \t\t}
      function insertText3 ()
      {
     document.getElementById(\"text\").value = document.getElementById(\"text\").value+\"^start(Explain_1)\";
      }
      function insertText4 ()
      {
     document.getElementById(\"text\").value = document.getElementById(\"text\").value+\"^start(Hey_1)\";
      }
  \t\t</script>
</head>

<center>
    <button type=\"image\" class=\"buttonspeed\" onclick=\"insertText ()\">speed</button>
\t<button  type=\"image\" class=\"buttonpause\" onclick=\"insertText1 ()\">pause</button>
    <button  type=\"image\" class=\"buttonstart\"  onclick=\"insertText2 ()\">Start Animation</button>
    <button  type=\"image\" class=\"buttonexplain\"  onclick=\"insertText3 ()\">Explain</button>
    <button type=\"image\" class=\"buttonhello\"  onclick=\"insertText4()\">Hello</button>
       
    
        
    </center>
\t<br>
\t<br>
\t<center>
            <script>
                var ss= document.getElementById(\"text\").value;
              function save(){
                  
                  
                  
                  
                  
              }   
                
                
            </script>
<textarea name=\"textfield\" id=\"text\"  rows=\"10\" cols=\"100\"></textarea>
<a id=dl onclick=\"convert()\" class=\"button\" download=\"file.txt\">Download</a>



</center>

</h2>   
    


    
                    

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12 text-center\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                      

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                    <h2 class=\"brand-before\">
                        <small>Welcome to </small>
                    </h2>
                    <h1 class=\"brand-name\">Nao Assistant</h1>
                    <hr class=\"tagline-divider\">
                    <h2>
                        <small>By
                            <strong>Special One</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
           
        </div>

        
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
   

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
            function convert() {
                content=document.getElementById(\"text\");
  dl.href=\"data:text/plain,\"+encodeURIComponent(content.value);
dl.click();
}


</script>
   
    

</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 247,  175 => 121,  169 => 118,  163 => 115,  157 => 112,  151 => 109,  116 => 77,  104 => 68,  91 => 58,  79 => 49,  67 => 40,  52 => 28,  44 => 23,  38 => 20,  19 => 3,);
    }
}
