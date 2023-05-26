<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento de Moda</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        body{
            background-image: url(imagens/fundo.jpg);
        }
       
        .login-box {
  position: absolute;
  top: 47%;
  left: 50%;
  width: 500px;
  height: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(10, 10, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 20px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}
.btn {
  font-size: 1.2rem;
  padding: 1rem 2.5rem;
  border: none;
  outline: none;
  border-radius: 0.4rem;
  cursor: pointer;
  text-transform: uppercase;
  background-color: rgb(14, 14, 26);
  color: rgb(234, 234, 234);
  font-weight: 700;
  transition: 0.6s;
  box-shadow: 0px 0px 60px #1f4c65;
  -webkit-box-reflect: below 10px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));
}

.btn:active {
  scale: 0.92;
}

.btn:hover {
  background: rgb(2,29,78);
  background: linear-gradient(270deg, rgba(2, 29, 78, 0.681) 0%, rgba(31, 215, 232, 0.873) 60%);
  color: rgb(4, 4, 38);
}







#header {
    box-sizing: border-box;
    height: 100px;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 2px 2px 2px 3px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    background-color:#000036;
  
  }
  a{
    text-decoration: none;
    color: #1A1A1A;
  }
  
  .logo2 {
    display: none;
  }
  
  
  .logoo {
    width: 150px;
    margin-top: 3%;
    margin-left: -200px;
    padding: 2%;
  }
  
  #menu {
    margin-top: 6%;
    display: flex;
    list-style: none;
    gap: 0.5rem;
  
  }
  
  #menu a {
  
    display: block;
    padding: 2.0rem;
    color: #fefffe;
    text-decoration: none;
    font-family: 'Mukta', sans-serif;
    font-size: 1.4em;
  
   
  }
  
  #menu a:hover {
    transition: 0.5s;
    transform: scale(1.1);
    color: #a5b6b2;
  }
  



  h1{
    color: white;
    margin-left: 31%;
    font-family: 'Dancing Script', cursive;
    font-size: 44px;
}
  

  /* Responsividade */


  @media (max-width: 1000px) {
    body{
        background-image: url(imagens/fundo2.jpg);
    }
    .login-box {
  position: absolute;
  top: 65%;
  left: 50%;
  width: 370px;
  height: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(10, 10, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

  
  
  
    #header {
    box-sizing: border-box;
    height: 100px;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 2px 2px 2px 3px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    background-color:#000036;
  
  }
    
  #menu a {
  
  display: block;
  padding: 2.0rem;
  color: #fefffe;
  text-decoration: none;
  font-family: 'Mukta', sans-serif;
  text-align: center;
  font-size: 20px;

 
}


  
  
      h1{
      
        color: white;
    margin-left: 23%;
    font-family: 'Dancing Script', cursive;
    font-size: 40px;
}


@media (max-width: 600px) {
    body{
        background-image: url(imagens/fundo2.jpg);
    }
    #header {
    width: 100%;
    box-sizing: border-box;
    height: 100px;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 2px 2px 2px 3px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    background-color:#000036;
  
  }
  
  #menu a {
  
  display: block;
  padding: 1.0rem;
  color: #fefffe;
  text-decoration: none;
  font-family: 'Mukta', sans-serif;
  text-align: center;
  font-size: 13px;

 
}
   
  
    
    .login-box {
  position: absolute;
  top: 76%;
  left: 50%;
  width: 370px;
  height: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(10, 10, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
  
  
  
      h1{
      
        color: white;
    margin-left: 12%;
    font-family: 'Dancing Script', cursive;
    font-size: 40px;

}



}
}

    </style>
</head>
<body>


<header id="header">


    <a href="index.php"> <img class="logoo" src="imagens/logo.png" /></a>
    <img class="logo2" src="imagens/logo2.png" />


    <nav id="nav">
     



      <ul id="menu" role="menu">
          <li> <a href="index.php" data-menu="HOME"> HOME</a></li>
          <li> <a href="index2.php">CONFIRMADOS</a></li>
          <li> <a href="#">EVENTO</a></li>
       
      </ul>

    </nav>


</header>


<h1>Participe do Maior Evento de Moda do Mundo:</h1>


<div class="login-box">
 
  <form method="POST">
    <div class="user-box">
      <input type="text" name="campo1" required="">
      <label>Nome: </label>
    </div>
    <div class="user-box">
      <input type="text" name="campo2" required="">
      <label>Sobrenome: </label>
    </div>
    <div class="user-box">
      <input type="text" name="campo3" required="">
      <label>RG: </label>
    </div>
    <input type="submit" value="Enviar" class="btn">
  </form>
</div>





<?php

$conn = mysqli_connect("localhost", "id20741702_evelyn", "Admin@23", "id20741702_banco");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $campo1 = $_POST["campo1"];
    $campo2 = $_POST["campo2"];
    $campo3 = $_POST["campo3"];


    $sql = "INSERT INTO nomes (nome, sobrenome, rg) VALUES ('$campo1', '$campo2', '$campo3')";


    if(mysqli_query($conn, $sql)){
        echo "Convidado já está na lista, tudo certo!";
    }else{
        echo "Erro no momento de listar o convidado!";
    }
}
?>
    
</body>
</html>