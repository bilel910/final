<html>
<head>
<title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="../../css/styleLogin.css"></head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript" src="login.js"></script> 
	<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<body>
<div class="error">
			<?php session_start(); 
			if(isset($_SESSION['RegistererrorUser'])==1){
				echo $_SESSION['RegistererrorUser'];
			} ?>
			<div id="p"></div>
			<div id="p1"></div>
			<div id="p2"></div>
			</div>

    <div class="loginbox">
    <img src="../../pic/avatar.png" class="avatar">
        <h1>Welcome</h1>
        <form name="myForm1" onsubmit="return RegvalidateForm()" action="insert.php"  method="post" >
			<p>Name</p>
            <input type="text" name="name" pattern="[A-Z]{0-15}[a-z]{0-15}" id="user_name" placeholder="Enter name" />
            
			<p>Email</p>
            <input type="text" name="email"  id="mailid" placeholder="Enter Email" />
			
            <p>Password</p>
            <input type="password" name="password1" id="passwordKey" placeholder="Enter Password" />
			
            <input type="submit" name="submitRegister" value="submit"  />
			<input type="checkbox" onclick="Afficher()"  />
		
                           <br>
			<a href="login.php">Already have an Amount?</a>
		
			<div class="form-group">
   
   <?php
   if(isset($_POST['captcha'])){//Le formulaire est envoyé, on traite les données...
	   if($_POST['captcha']!=$_SESSION['captcha']){//si le captcha sélectionné n'est pas le bon
		   echo "Captcha incorrect!";//on stop le traitement
	   } else {
		   echo "Captcha correct!";
		   //on continu le traitement...
	   }
   }
   /**
	La partie de code suivante doit impérativement être placée en dessous de la vérification des champs du formulaire, sinon le code sera toujours faux lors de sa vérification car il sera toujours un nouveau code
	**/
	
   //si le formulaire n'est pas encore été cliqué, on défini le captcha
   $NombreDeCaractCode=4;//vous pouvez définir ici combien vous souhaitez avec de caractères pour chaque code
   $NombreDeCodes=5;//vous pouvez définir ici combien vous souhaitez avoir de faux codes à choisir dans la liste déroulante
   $CodeCaptcha=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);//j'ai enlevé le O (lettre o) et le 0 (chiffre 0) volontairement car ils peuvent prêter à confusion
   $_SESSION['captcha']=$CodeCaptcha;//pensez à bien initialiser la session avec "session_start();" tout en haut de votre page, avant n'importe quel balise HTML
   $ListeCodes[]=$CodeCaptcha;//initiation du tableau qui contiendra tous les faux codes à choisir dans la liste
   for($i=1;$i<=($NombreDeCodes-1);$i++){
	   $ListeCodes[]=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);
   }
   shuffle($ListeCodes);//on mélange tous les codes
   /**
	Fin de la partie code à placé en dessous de la vérification des champs 
	**/
   ?><br/>
   <form method="post">  
   <!-- ici les autres champs de mon formulaire -->
   <p>Choisissez le code <?php echo $_SESSION['captcha']; ?> dans la liste suivante: </p>
   <select name="captcha" onchange="this.form.submit()"><!-- avec onchange="this.form.submit()" on valide le formulaire dès qu'il à choisi le code! -->
	   <option>Choissiez le code affiché:</option>
	   <?php foreach($ListeCodes as $Code){ ?>
		   <?php echo '<option value="'.$Code.'">'.$Code.'</option>'; ?>
	   <?php } ?>
   </select>
   <!-- <input type="submit" name="valider" value="Valider"> on laisse le bouton valider au cas où le javascript ne serait pas activé sur le navigateur du visiteur -->
   <br><br>
   
   
   
   </form>
   </div>                      
<script>
 /* function CheckPassword(inputtxt) 
{ 
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
if(inputtxt.value.match(pass)) 
{ 
alert('Correct, try another...')
return true;
}
else
{ 
alert('Wrong...!')
return false;
}
}*/
function Afficher()
{ 
var input = document.getElementById("passwordKey"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>
        </form>
		<br> <br>
    </div>
<script>
	  

</body>
</head>
</html>