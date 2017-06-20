<?php

/* EspritNaoBundle:Cours:espaceenseignant.html.twig */
class __TwigTemplate_645646e501e29b15b06b2238df9b0b046e4f8db7ad5bafdb5e8fd1f6a12c2839 extends Twig_Template
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
        echo "<html lang=\"en\">
      
        
        
        

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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/business-casual.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
 <script  src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
 <script type=\"text/javascript\">
 var session;
 var etudiant=[];
 
    function hideipbutton(){
    document.getElementById(\"buttonconnect\").style.visibility = \"hidden\"; 
\t  document.getElementById(\"ip\").style.visibility = \"hidden\";    
\t   document.getElementById(\"presence\").style.visibility = \"hidden\";   
   }
function find (){
Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");
var  rs= Parse.Object.extend(\"classe\");
var query = new Parse.Query(rs);
query.equalTo(\"idenseignant\",document.getElementById(\"identifiant\").value);
query.find({
  success: function(results) {
      document.getElementById(\"identifiant\").style.visibility = \"hidden\"; 
      document.getElementById(\"buttonidentifiant\").style.visibility = \"hidden\"; 
    
\tfor (var i = 0; i < results.length; i++) { 
      var texteLien = \"Voir\";      
      var object = results[i];
      classe =object.get('nom');
      document.getElementById(\"1234\").innerHTML=(document.getElementById(\"1234\").innerHTML+'<button id=\"btncheck\" onclick=\"etudiants(\\''+classe+'\\')\">check </button>'+'    '+ object.get('nom')+'<br><br><br>');
    }
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});
\t}
        function etudiants (classe){

\t\t
Parse.initialize(\"VroiSgb3IRJO9nJbRH1MC9m3uocER6yeNhEkIGJo\",\"g93TXzYLB26ViJN8wMner3gmx8w86UkZI6YTXGjM\");
var  r= Parse.Object.extend(\"etudiant\");


var query1 = new Parse.Query(r);
query1.equalTo(\"idclasse\",classe);
query1.find({
  success: function(results) {
       
      document.getElementById(\"1234\").style.display = \"none\"; 
     
   \t\t\t\t\t\t
\t
\tdocument.getElementById(\"table\").innerHTML=(document.getElementById(\"table\").innerHTML+'<tr><td>nom</td><td>prenom</td><td>presence</td><td>absence</td></tr>');
\tfor (var i = 0; i < results.length; i++) { 
\tvar object = results[i];
\tetudiant[i]=new Array(5);
       etudiant[i][0]= object.get('nom');    
       etudiant[i][1]=object.get('prenom');
       etudiant[i][2]=object.get('presence');
       etudiant[i][3]=object.get('absence');
\t    etudiant[i][4]=object.id;
\t   
      var texteLien = \"Voir\";      
      var object = results[i];
\t  document.getElementById(\"table\").innerHTML=(document.getElementById(\"table\").innerHTML+'<tr>'+'<td>'+object.get('nom')+'</td>'+'<td>'+object.get('prenom')+'</td>'+'<td>'+object.get('presence')+'</td>'+'<td>'+object.get('absence')+'</td>'+'</tr>');
      //document.getElementById(\"12345\").innerHTML=(document.getElementById(\"12345\").innerHTML+'<li>'+'nom:  '+object.get('nom')+'</li>'+'<li>'+'prenom:  '+object.get('prenom')+'</li>'+'<li>'+'presence:  '+object.get('presence')+'</li>'+'<li>'+'absence:  '+object.get('absence')+'</li>'+'<br>'+'<input type=\"radio\" value=\"1\" > Present</input>'+'<input type=\"radio\" value=\"-1\" >Absent</input>'+'<br><br>');
    }
\t\t    document.getElementById(\"buttonconnect\").style.visibility = \"visible\"; 
\t  document.getElementById(\"ip\").style.visibility = \"visible\";    
\t  document.getElementById(\"presence\").style.visibility = \"visible\";    
  },

  error: function(error) {
    // error is an instance of Parse.Error.
  }
});
        }
\t\t
function connect()
    {
var str1 = \"http://nao:nao@\";
var str2 = document.getElementById(\"ip\").value;
var str3 = \"/libs/qimessaging/1.0/qimessaging.js\";
var res = str1.concat(str2,str3);
var my_awesome_script = document.createElement('script');
my_awesome_script.setAttribute('src',res);

document.head.appendChild(my_awesome_script);

     
      ipadresse = document.getElementById(\"ip\").value;   
      session = new QiSession(ipadresse);
      session.socket().on('connect', function()
      {
        console.log(\"QiSession connected!\");
      }).on('disconnect', function(){
        console.log(\"QiSession disconnect\");
      });
    }
\t
\t
\t
\tfunction SpeechRecognition(){
console.log(\"hello :p \"+ new Date());
        session.service(\"ALTextToSpeech\").done(function(tts)
      {
        tts.say(etudiant[i][0]+etudiant[i][1]);
      });

\t  \tsession.service(\"ALSpeechRecognition\").done(function (asr) {
\t\tvocabulary = [\"present\",\"absent\"];
\t\tasr.setVocabulary(vocabulary, false);
\t\tasr.pause(false);
\t\tasr.subscribe(\"Test_ASR\");

\t\tsession.service(\"ALMemory\").done(function (ALMemory) {
\t\tALMemory.subscriber(\"WordRecognized\").done(function (subscriber){
\t\tsubscriber.signal.connect(function (words) {

\t\tsession.service(\"ALMemory\").done(function(subscriber)
\t\t  {
\t\tsession.service(\"ALTextToSpeech\").done(function(tts)
\t\t {
\t\tif(words[0]==\"present\"){

\t\t   // Create the object.
var student = Parse.Object.extend(\"etudiant\");
var student = new student();

student.set(\"objectId\", etudiant[i][4]);
console.log(etudiant[i][4]);
student.save(null, {
  success: function(student) {
    // Now let's update it with some new data. In this case, only cheatMode and score
    // will get sent to the cloud. playerName hasn't changed.
    student.set(\"presence\", etudiant[i][2]+1);
    student.save();
  }
});
   
\t\t\t\t
\t\tasr.pause(true);\t
\t\t}
\t\telse
\t\tif(words[0]==\"absent\")
\t\t{
\t\t
   // Create the object.
var student = Parse.Object.extend(\"etudiant\");
var student = new student();

student.set(\"objectId\", etudiant[i][4]);
console.log(etudiant[i][4]);
student.save(null, {
  success: function(student) {
    // Now let's update it with some new data. In this case, only cheatMode and score
    // will get sent to the cloud. playerName hasn't changed.
    student.set(\"absence\", etudiant[i][3]+1);
    student.save();
  }
});
   
\t\tasr.pause(true);
\t\t}
\t\t//cas illi masama3 7atta kelma ya3refha
\t\t//asr.pause(true);
\t\t
\t\t  });
\t


\t\t  });

\t\t});
\t  });
\t});
\t});\t
\t
\t   if( i<etudiant.length-1){
i=i+1;
window.setTimeout(SpeechRecognition, 3000);
}

    }
\t
\t
\t
\t  var i=0;
\t  function presence()
    {
\t
\t
console.log(etudiant);
SpeechRecognition();
\t   }
\t   



\t   

   

\t
\t
\t
\t
\t
\t

\t</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style type=\"text/css\">
  .buttonstart
            {
    width: 700px;
    height: 700px;
    background-image: url(";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/start.png"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
                        border: none;
            }
            .buttonpause
            {
           width: 300px;
    height: 300px;
    background-image: url(";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loading.gif"), "html", null, true);
        echo ");
    background-repeat: no-repeat;
    cursor:pointer;
    animation-duration: 2s;
animation-direction: alternate;
                        border: none;
            }
        </style>
      
</head>

<body onload = \"hideipbutton()\">

    <div class=\"brand\">Nao Robot</div>
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
               <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("esprit_nao_AddCours");
        echo "\" >Add Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ListCours");
        echo "\">show Lessons</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("esprit_nao_CreerCours");
        echo "\">create Lesson</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("esprit_nao_enseignant");
        echo "\" >check presence  </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 286
        echo $this->env->getExtension('routing')->getPath("esprit_nao_ip");
        echo "\" >Controle Nao</a>
                    </li>
                   
                </ul>
            </div>


<h2>
<center>
    
     <h2 class=\"brand-before\">
\t <table>
\t <tr>
\t <td><button   class=\"button\" id=\"buttonconnect\" onclick=\"connect()\">Connect</button></td>
\t <td><input  name=\"2\" type=\"text\" id=\"ip\" placeholder='enter nao IP'/></td>
\t </tr>
\t <tr>
\t <br>
\t <td></td><td><button  class=\"button\" id=\"presence\" onclick=\"presence()\">Ask for presence</button></td>

\t </tr>
\t </table>
      
                        <br>
                        <input name=\"1\" type=\"text\" id=\"identifiant\" placeholder='enter your identifiant'/>
                        <button class=\"button\" id=\"buttonidentifiant\" onclick=\"find()\">Afficher</button>
\t\t\t\t\t\t
                        <br>
                        
\t\t\t\t\t\t<table  border=\"4\"    style=\"background-color:blue\" id=\"table\" >
\t</table>
                        <p id=\"1234\"></p>
                        <p id=\"12345\"></p>

     </h2>
    </center>
</h2>
    <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "EspritNaoBundle:Cours:espaceenseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 323,  332 => 286,  326 => 283,  320 => 280,  314 => 277,  308 => 274,  288 => 257,  276 => 248,  52 => 27,  44 => 22,  38 => 19,  19 => 2,);
    }
}
