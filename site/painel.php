<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Emprestar Coisas</title>
    <link rel="stylesheet"  href="css/estilo2.css">
    <style> 
        body{
    background-image: url("_imagens/background.png");
    
    </style> 

</head>
<body><img src="_imagens/logo-deitada-pequenab.png">
    <div id="interface">
        <hgroup>
            <header id="cabecalho">
            
        </header>
        
        </hgroup>    

        <hgroup>
        <h4>
        <nav id="Menu"> 
            <ul>
        <li><a href="painel.php"> Quem somos</a> </li>
        <li><a href="cadastrar.html"> Meus Itens</a> </li>
        <li><a href="contato.html"> Contato </a> </li>
        <li><a href="logout.php"> Sair </a> </li>
        
        </ul> 
        </nav>  
        </h4>
        
        <br>
        <img id="logo"src="_imagens/logo-inteira-grande.png">
        </hgroup>
        
        <h2>Quem somos:</h2>
        <p><b>Olá, <?php echo $_SESSION['nome'];?></b></p>

        <p> A <em>sustentabilidade </em> tem como pilar 3 elementos: <b>meio ambiente, impacto social e economia</b>. Por isso, entende-se que para uma sociedade ou sistema ser sustentável deve-se incentivar a conservação do meio ambiente, o bem-estar social e o ganho econômico de modo que não coloque em risco os 2 primeiros elementos.</p> 
        


        <p>Vivemos em um mundo tomado pelo consumismo, compramos diariamente coisas que não usaremos com frequência. Graças a isso você tem um cantinho da bagunça em sua casa, certo? A ideia é que esses itens sejam <b>compartilhados em comunidade</b>, maximizando sua utilidade, e poupando o acumulo de resíduos pelo planeta.</p>
        
        <p>Buscamos estabelecer aquelas relações entre vizinhos tão famosas para as nossas vovós, o empréstimo de coisas entre vizinhos. Afinal, há quanto tempo você não troca umas palavrinhas com seu vizinho? Você ao menos sabe o nome deles?</p>
        
       <p>Sabe quando você precisa de uma coisa, mas sabe que vai usar pouco. Tipo <b>uma ferramenta especifica, a decoração para a festa do seu filho ou uma escada</b>? então, ao invés de comprar é só cadastrar o produto que está precisando que perguntamos para os usuários mais próximos de sua localização quem pode te emprestar.</p>
    
        <p>O intuito principal é <b>estimular a sustentabilidade</b>, a economia e ainda de quebra nos conectar uns aos outros de uma maneira muito menos artificial. Vai que você conhece seu futuro melhor amigo quando você pedir uma furadeira emprestada?</p> 
        
        <p>E nada melhor do que <b>ajudar os outros e ser ajudado</b> não é mesmo? Então fique sempre por dentro das solicitações de seus vizinhos e ajude ao <b> Projeto Coisas Emprestadas </b> crescer cada vez mais. &lt3 </p>
        <p><b><a href="https://fia.com.br/blog/sustentabilidade/" target="_blank">Clique aqui</a></b> para mais informações sobre sustentabilidade.</p>

        <br/><br/><br/>

        
        



</div>
</body>
</html>