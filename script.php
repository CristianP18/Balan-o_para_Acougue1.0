<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagem/boi iconep.png" type="image/x-icon">
    <title>script</title>
</head>
<body>

<?php

$alcatra = isset($_GET["tAlcatra"])?$_GET["tAlcatra"] : "[não informado]";
$patinho = isset($_GET["tPatinho"])?$_GET["tPatinho"] : "[não informado]";
$coxaoF = isset($_GET["tCoxãoF"])?$_GET["tCoxãoF"] : "[não informado]";
$tatu = isset($_GET["tTatu"])?$_GET["tTatu"] : "[não informado]";
$coxaoM = isset($_GET["tCoxãoM"])?$_GET["tCoxãoM"] : "[não informado]";
$picanha = isset($_GET["tPicanha"])?$_GET["tPicanha"] : "[não informado]";
$maminha = isset($_GET["tMaminha"])?$_GET["tMaminha"] : "[não informado]";
$fileM = isset($_GET["tFileM"])?$_GET["tFileM"] : "[não informado]";
$contraF = isset($_GET["tContraF"])?$_GET["tContraF"] : "[não informado]";
$file = isset($_GET["tFile"])?$_GET["tFile"] : "[não informado]";
$paleta = isset($_GET["tPaleta"])?$_GET["tPaleta"] : "[não informado]";
$agulha = isset($_GET["tAgulha"])?$_GET["tAgulha"] : "[não informado]";
$pontaP = isset($_GET["tPontaP"])?$_GET["tPontaP"] : "[não informado]";
$guisado = isset($_GET["tGuisado2"])?$_GET["tGuisado2"] : "[não informado]";
$matambre = isset($_GET["tMatambre"])?$_GET["tMatambre"] : "[não informado]";
$vazio = isset($_GET["tVazio"])?$_GET["tVazio"] : "[não informado]";
$costela = isset($_GET["tCostela"])?$_GET["tCostela"] : "[não informado]";
$costelaM = isset($_GET["tCostelaM"])?$_GET["tCostelaM"] : "[não informado]";
$muscolo = isset($_GET["tMuscolo"])?$_GET["tMuscolo"] : "[não informado]";
$pescoço = isset($_GET["tPescoço"])?$_GET["tPescoço"] : "[não informado]";
$osso = isset($_GET["tOsso"])?$_GET["tOsso"] : "[não informado]";
$pb = isset($_GET["tPB"])?$_GET["tPB"] : "[não informado]";
$pc= isset($_GET["tPC"])?$_GET["tPC"] : "[não informado]";
$Q = isset($_GET["tQ"])?$_GET["tQ"] : "[não informado]";


$P_alcatra = (((18 - $Q) * 3) / 100) + 3;
$P_patinho = (((18 - $Q) * 3.7) / 100) + 3.7;
$P_coxaoF = (((18 - $Q) * 4) / 100) + 4;
$P_coxaoM = (((18 - $Q) * 6) / 100) + 6;
$P_tatu = (((18 - $Q) * 1.7) / 100) + 1.7;
$P_picanha = (((18 - $Q) * 1.5) / 100) + 1.5;
$P_maminha = (((18 - $Q) * 1.2) / 100) + 1.2;
$P_contraF = (((18 - $Q) * 3) / 100) + 3;
$P_fileM = (((18 - $Q) * 1.2) / 100) + 1.2;
$P_vazio = (((18 - $Q) * 3.8) / 100) + 3.8;
$P_costela = (((18 - $Q) * 5.5) / 100) + 5.5;
$P_file = (((18 - $Q) * 9) / 100) + 9;
$P_agulha = (((18 - $Q) * 6.8) / 100) + 6.8;
$P_paleta = (((18 - $Q) * 7.5) / 100) + 7.5;
$P_pontaP = (((18 - $Q) * 4) / 100) + 4;
$P_muscolo = (((18 - $Q) * 4.8) / 100) + 4.8;
$P_pescoço = (((18 - $Q) * 4) / 100) + 4;
$P_guisado = (((18 - $Q) * 7.5) / 100) + 7.5;
$P_costelaM = (((18 - $Q) * 2.2) / 100) + 2.2;
$P_matambre = (((18 - $Q) * 1.6) / 100) + 1.6;
$P_osso = $Q;   

$Pç_alcatra  = (($pb * $P_alcatra) /   100) * $alcatra;
$Pç_patinho  = (($pb * $P_patinho) /   100) * $patinho;
$Pç_coxaoF   = (($pb * $P_coxaoF) /    100) * $coxaoF;
$Pç_coxaoM   = (($pb * $P_coxaoM) /    100) * $coxaoM;
$Pç_tatu     = (($pb * $P_tatu)    /   100) * $tatu;
$Pç_picanha  = (($pb * $P_picanha) /   100) * $picanha;          
$Pç_fileM    = (($pb * $P_fileM) /     100) * $fileM;
$Pç_contraF  = (($pb * $P_contraF) /   100) * $contraF;
$Pç_vazio    = (($pb * $P_vazio) /     100) * $vazio;
$Pç_costela  = (($pb * $P_costela) /   100) * $costela;
$Pç_file     = (($pb * $P_file) /      100) * $file;
$Pç_agulha   = (($pb * $P_agulha) /    100) * $agulha;
$Pç_paleta   = (($pb * $P_paleta) /    100) * $paleta;
$Pç_pontaP   = (($pb * $P_pontaP) /    100) * $pontaP;
$Pç_muscolo  = (($pb * $P_muscolo) /   100) * $muscolo;
$Pç_guisado  = (($pb * $P_guisado) /   100) * $guisado;
$Pç_costelaM = (($pb * $P_costelaM) /  100) * $costelaM;      
$Pç_osso     = (($pb * $P_osso) /      100) * $osso;
$Pç_pescoço  = (($pb * $P_pescoço) /   100) * $pescoço;
$Pç_maminha  = (($pb * $P_maminha) /   100) * $maminha;
$Pç_matambre = (($pb *$P_matambre) /   100) * $matambre;
$custo_boi = $pb * $pc;
$preço_venda = 
    $Pç_alcatra +
    $Pç_patinho +
    $Pç_coxaoF  +
    $Pç_coxaoM  +
    $Pc_tatu    +
    $Pç_picanha +
    $Pç_fileM   +
    $Pç_contraF +
    $Pç_vazio   +
    $Pç_costela +
    $Pç_file    +
    $Pç_agulha  +
    $Pç_paleta  +
    $Pç_pontaP  +
    $Pç_muscolo +
    $Pç_guisado +
    $Pç_costelaM+
    $Pç_osso    +
    $Pç_pescoço +
    $Pç_maminha +
    $Pç_matambre;

/*------------------------------------------------------------------------------------------*/

?>

<header>
        <h1>Balanço para Açougue.</h1>
    
    </header>
<main>

</form>
    <nav id="menu">    
    
        <ul type="disc">
            <a href="https://www.meusimulador.com/MeuSimulador">Inicio</a>
            <a href="index1.php">Simulador</a>
            <a href="personalizado.html">Simulador Personalizado</a>
            <a href="multimidia.html">Multimidia</a>
            <a href="https://www.meusimulador.com/MeuSimulador/comentarios/">Comentários</a>
            <a href="fale-conosco.html">Contatos</a>
            <a href="logout.php">Sair</a>
           
        </ul>

        </nav>
        <div id="aside2">
        <?php  
        echo "<h2>Resultados da Simulação:</h2><br><br>";
        echo "Total de Venda: ....... " .number_format($preço_venda,2,",",".") ."  R$<br><br>";
        echo "Osso e Cebo: ........... " .number_format((($pb * $P_osso) / 100),2,",",".") ."  Kg<br><br>";
        echo "Lucro: ...................... " .number_format(($preço_venda - $custo_boi),2,",",".") ."  kg<br><br>";
        echo "Lucro Médio Por Kg: " .number_format((($preço_venda - $custo_boi) / $pb),2,",",".")."  kg<br><br>";
                          


        echo "<h2>Total de Venda e de Peso, por Peça</h2><br><br>";
        echo "Alcatra: Total de Venda:  " .number_format(($Pç_alcatra),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_alcatra) /   100),2,",","."). " kg<br><br>";
        echo "Patinho: Total de Venda:  " .number_format(($Pç_patinho),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_patinho) /   100),2,",","."). " kg<br><br>";
        echo "Coxão de Fora: Total de Venda:  " .number_format(($Pç_coxaoF),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_coxaoF) /    100),2,",","."). " kg<br><br>";
        echo "Tatu: Total de Venda:  " .number_format(($Pç_tatu),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_tatu) /    100),2,",","."). " kg<br><br>";
        echo "Coxão Mole: Total de Venda:  " .number_format(($Pç_coxaoM),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_coxaoM) /    100),2,",","."). " kg<br><br>";
        echo "Picanha: Total de Venda:  " .number_format(($Pç_picanha),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_picanha) /    100),2,",","."). " kg<br><br>";
        echo "Maminha: Total de Venda:  " .number_format(($Pç_maminha),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_maminha) /    100),2,",","."). " kg<br><br>";
        echo "Filé Mignom: Total de Venda:  " .number_format(($Pç_fileM),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_fileM) /    100),2,",","."). " kg<br><br>";
        echo "Contra Filé: Total de Venda:  " .number_format(($Pç_contraF),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_contraF) /    100),2,",","."). " kg<br><br>";
        echo "Filé: Total de Venda:  " .number_format(($Pç_file),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_file) /    100),2,",","."). " kg<br><br>";
        echo "Paleta S/Osso: Total de Venda:  " .number_format(($Pç_paleta),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_paleta) /    100),2,",","."). " kg<br><br>";
        echo "Agulha: Total de Venda:  " .number_format(($Pç_agulha),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_agulha) /    100),2,",","."). " kg<br><br>";
        echo "Ponta de Peito S/Osso: Total de Venda:  " .number_format(($Pç_pontaP),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_pontaP) /    100),2,",","."). " kg<br><br>";
        echo "Guisado de 2º: Total de Venda:  " .number_format(($Pç_guisado),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_guisado) /    100),2,",","."). " kg<br><br>";
        echo "Matambre: Total de Venda:  " .number_format(($Pç_matambre),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_matambre) /    100),2,",","."). " kg<br><br>";
        echo "Múscolo: Total de Venda:  " .number_format(($Pç_muscolo),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_muscolo) /    100),2,",","."). " kg<br><br>";
        echo "Vazio: Total de Venda:  " .number_format(($Pç_vazio),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_vazio) /    100),2,",","."). " kg<br><br>";
        echo "Costela Ripa: Total de Venda:  " .number_format(($Pç_costela),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_costela) /    100),2,",","."). " kg<br><br>";
        echo "Costela Minga: Total de Venda:  " .number_format(($Pç_costelaM),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_costelaM) /    100),2,",","."). " kg<br><br>";
        echo "Pescoço  S/Osso: Total de Venda:  " .number_format(($Pç_pescoço),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_pescoço) /    100),2,",","."). " kg<br><br>";
        echo "Osso e Cebo: Total de Venda:  " .number_format(($Pç_osso),2,",",".")." R$<br>" ."Peso Total:  " .number_format((($pb * $P_osso) / 100),2,",","."). " kg<br><br>";
   

        ?>

        </div><br><br><br><br><br>

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