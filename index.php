<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="imagem/boi iconep.png" type="image/x-icon">
</head>

<body>
   
    <header>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu E-mail" autofocus=""><br>
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha"><br><button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button><br> <a href="cadastro.php">Cadastrar</a><br><a id="p"><h1>Para acessar mais fuções faça o login</h1></a><br><a id="p"><h1 class="title has-text-grey">Experimente o Simulador Personalizado</h1></a><br>
                                    
                                </div>
                            </div>

                            
                                
                                   
                           

                            <div class="field">
                                
                            </div>
                            
                            
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

        <h1>Balanço para Açougue.</h1>
    
    </header>
    <main>

</form>
    <nav id="menu">    
    
        <ul type="disc">
            <a href="especificaçoes.html">Especificações</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="fale-conosco.html">Contatos</a>
           
        </ul>
        
        </nav>
        <span id="icone">
            <img src="imagem/boi_icone.png" alt="home"></span>
    <div id="pb"><h1 style="color: rgb(160, 9, 9); text-shadow: 1px 1px 1px black;">Consute seu<strong> lucro</strong>.</h1><br>
     <h3>O Peso da Carcaça Utilizado é de 220. </h3><br>
     <h3>A Porcentagem de quebra Utilizada é de 20%</h3>
 <br><br>Preço da Carcaça .....
    <input type="number" name="tPC" id="cPC" placeholder="Preço Carcaça">
     
</div>
   
   <br><br>

        <h2 id="pc"><strong>Digite aqui o preço das carnes.</strong></h2> <br>
    <div id="interface">


Alcatra ....................<input type="number" name="tAlcatra" id="cAlcatra" placeholder="Digite R$"><br><br>
Patinho ...................<input type="number" name="tPatinho" id="cPatinho" placeholder="Digite R$"><br><br>
Coxão de Fora .......<input type="number" name="tCoxãoF" id="cCoxãoF" placeholder="Digite R$"><br><br>
Tatu .........................<input type="number" name="tTatu" id="cTatu" placeholder="Digite R$"><br><br>
Coxão Mole............<input type="number" name="tCoxãoM" id="cCoxãoM" placeholder="Digite R$"><br><br>
Picanha ..................<input type="number" name="tPicanha" id="cPicanha" placeholder="Digite R$"><br><br>
Maminha ................<input type="number" name="tMaminha" id="cMaminha" placeholder="Digite R$"><br><br>
Filé Mignom ..........<input type="number" name="tFileM" id="cFileM" placeholder="Digite R$"><br><br>
Contra Filé .............<input type="number" name="tContraF" id="cContraF" placeholder="Digite R$"><br><br>
Filé ..........................<input type="number" name="tFile" id="cFile" placeholder="Digite R$"><br><br>
Paleta S/Osso...........<input type="number" name="tPaleta" id="cPaleta" placeholder="Digite R$"><br><br>
Agulha ....................<input type="number" name="tAgulha" id="cAgulha" placeholder="Digite R$"><br><br>
Ponta de Peito S/O..<input type="number" name="tPontaP" id="cPontaP" placeholder="Digite R$"><br><br>
Guisado de 2º .........<input type="number" name="tGuisado2" id="cGuisado2" placeholder="Digite R$"><br><br>
Matambre ...............<input type="number" name="tMatambre" id="cMatambre" placeholder="Digite R$"><br><br>
Múscolo ..................<input type="number" name="tMuscolo" id="cMuscolo" placeholder="Digite R$"><br><br>
Vazio .......................<input type="number" name="tVazio" id="cVazio" placeholder="Digite R$"><br><br>
Costela ....................<input type="number" name="tCostela" id="cCostela" placeholder="Digite R$"><br><br>
Costela Minga S/O..<input type="number" name="tCostelaM" id="cCostelaM" placeholder="Digite R$"><br><br>
Pescoço S/Osso........<input type="number" name="tPescoço" id="cPescoço" placeholder="Digite R$"><br><br>
Osso e Cebo .............<input type="number" name="tOsso" id="cOsso" placeholder="Digite R$"><br>               <br>
                            <input type="button" value="Verificar" onclick="calcular()">
                        </div> 

   
    <div id="aside">
      Resultados:<br><br>
      Lucro Bruto:<div id="LB">...</div><br>
      Lucro Limpo:<div id="LL">...</div><br>
      Perda em osso:<div id="PO">...</div><br>
      Lucro Medio P/Kg:<div id="LMK">...</div><br>
    </div>
    <div>
        <h2>Descrição:</h2>
        <h3>Como utilizar a ferramenta Balanço de Preço.</h3>
        <p>Primeiro digite os preços que você trabalha na tabela do seu estabelecimento.
            Você pode se deparar com a pergunta onde eu coloco os cortes expeciais como t-bone, entrecote e outros, abaixo segue uma lista de explicações:
            <li>Os cortes como T-bone, Entrecote, Chourixo, Capa do Filé..., basta vc adicionar 
                o preço da Chuta, que vc trabalha no seu estabelecimento, na caixa Filé e na caixa Contra Filé.
            </li>
            <li>Na caixa Paleta, costela Minga e Ponta de Peito, é importante adicionar o preço delas sem osso.</li>
            <li>Na caixa Pescoço e Muscolo, causo vc não possua um preço especifico pra elas 
                , Coloque o preço do Guisado de Segunda.
            </li>
          </p>
    </div>
    <img id="fundo" src="imagem/boi_icone2.png" alt="boi icone2">
    
        <br><br>
        Se você gostou dessa ideia nos ajude com um pix. <br><img src="imagem/pix.png" alt="home"> <br>
        Pix: cristian.meusimulador@gmail.com
        <br><br>  <p id="obs"> OBS: Lembrando que os valores aqui adiquiridos são valores aproximados, 
            pois podem sofre um pouco de alterações dependendo de fatores como:
            Raça do Boi, Sexo e Peso.</p> <br>

</main>
<script src="script.js"></script>
<footer>
    Ultima Atualização 15/11/2021. <br>
    Em Breve Novidades.&nbsp;&nbsp;
    <span id="SCP">Produzido por ScriptCP.</span>
</footer>
    
</body>

</html>