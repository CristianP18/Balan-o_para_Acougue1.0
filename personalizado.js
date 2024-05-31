function mudaFoto (foto) { 
    document.getElementById("icone").src = foto;
}

function calcular() {
  
    alcatra1 = document.querySelector('input#cAlcatra')
    patinho1 = document.querySelector('input#cPatinho')
    coxaoF1 = document.querySelector('input#cCoxãoF') 
    tatu1 = document.querySelector('input#cTatu') 
    coxaoM1 = document.querySelector('input#cCoxãoM')
    picanha1 = document.querySelector('input#cPicanha') 
    maminha1 = document.querySelector('input#cMaminha') 
    fileM1 = document.querySelector('input#cFileM') 
    contraF1 = document.querySelector('input#cContraF') 
    file1 = document.querySelector('input#cFile') 
    paleta1 = document.querySelector('input#cPaleta') 
    agulha1 = document.querySelector('input#cAgulha') 
    pontaP1 = document.querySelector('input#cPontaP') 
    guisado1 = document.querySelector('input#cGuisado2')  
    osso1 = document.querySelector('input#cOsso')
    pescoço1 = document.querySelector('input#cPescoço')
    pb1 = document.querySelector('input#cPB')
    pc1 = document.querySelector('input#cPC')
    muscolo1 = document.querySelector('input#cMuscolo')
    costela1 = document.querySelector('input#cCostela')
    costelaM1 = document.querySelector('input#cCostelaM')
    matambre1 = document.querySelector('input#cMatambre')
    vazio1 = document.querySelector('input#cVazio')
    Q1 = document.querySelector('input#cQ') 
    if (alcatra1.value.length == 0){
        alert(`Confira o Preço da Alcatra`)}
        else{
            if (guisado1.value.length == 0){
                alert(`Confira o Preço do Guisado`)
                
            }else{  if (patinho1.value.length == 0){
                alert(`Confira o Preço do Patinho`)
                
            }else{ if (coxaoF1.value.length == 0 ){
                alert(`Confira o Preço do Coxão de Fora`)
                
            }else{  if ( tatu1.value.length == 0){
                alert(`Confira o Preço do Tatu`)
            } else{  if ( coxaoM1.value.length == 0){
                alert(`Confira o Preço do Coxão Mole`)
            }else{ if (picanha1.value.length == 0 ){
                alert(`Confira o Preço da Picanha`)
            }else{if ( maminha1.value.length == 0 ){
                alert(`Confira o Preço do Maminha`)
            }else{  if (fileM1.value.length == 0){
                alert(`Confira o Preço do Filé Mignom`)
            }else{ if (contraF1.value.length == 0){
                alert(`Confira o Preço do Contra Filé`)
            }else{if (file1.value.length == 0 ){
                alert(`Confira o Preço do Filé`)
            }else{if (paleta1.value.length == 0){
                alert(`Confira o Preço da Paleta S/Osso`)
            }else{  if ( agulha1.value.length == 0){
                alert(`Confira o Preço da Agulha`)
            }else{ if (pontaP1.value.length == 0){
                alert(`Confira o Preço da Ponta de Peito Sem Osso`)
            }else{if (pescoço1.value.length == 0){
                alert(`Confira o Preço do Pescoço`)
            }else{if (muscolo1.value.length == 0){
                alert(`Confira o Preço do Múscolo`)
            }else{if (costela1.value.length == 0){
                alert(`Confira o Preço da Costela Ripa`)
            }else{ if (costelaM1.value.length == 0){
                alert(`Confira o Preço da Costela Minga Sem Osso `)
            }else{ if (matambre1.value.length == 0){
                alert(`Confira o Preço do Matambre`)
            }else{if (vazio1.value.length == 0){
                alert(`Confira o Preço do Vazio`)
            }else{  if (pb1.value.length == 0 ){
                alert(`Confira o Peso da carcaça`)
            }else{if (pc1.value.length == 0){
                alert(`Confira o Preço da Carcaça`)
            }else
            lb = document.querySelector('div#LB')
            ll = document.querySelector('div#LL')
            po = document.querySelector('div#PO')
            lmk = document.querySelector('div#LMK')
            Q = Number(Q1.value)
            alcatra = Number(alcatra1.value)
            patinho = Number(patinho1.value)
            coxaoF = Number(coxaoF1.value)
            tatu = Number(tatu1.value)
            coxaoM = Number(coxaoM1.value)
            picanha = Number(picanha1.value)
            maminha = Number(maminha1.value)
            fileM = Number(fileM1.value)
            contraF = Number(contraF1.value)
            file = Number(file1.value)
            paleta = Number(paleta1.value)
            agulha = Number(agulha1.value)
            pontaP = Number(pontaP1.value)
            guisado = Number(guisado1.value)
            pescoço = Number(pescoço1.value)
            osso = Number(osso1.value)
            vazio = Number(vazio1.value)
            muscolo = Number(muscolo1.value)
            costela = Number(costela1.value)
            costelaM = Number(costelaM1.value)
            matambre = Number(matambre1.value)  
            pb = Number(pb1.value)
            pc = Number(pc1.value)              
            P_alcatra = (((18 - Q) * 3) / 100) + 3
            P_patinho = (((18 - Q) * 3.7) / 100) + 3.7
            P_coxaoF = (((18 - Q) * 4) / 100) + 4
            P_coxaoM = (((18 - Q) * 6) / 100) + 6
            P_tatu = (((18 - Q) * 1.7) / 100) + 1.7
            P_picanha = (((18 - Q) * 1.5) / 100) + 1.5
            P_maminha = (((18 - Q) * 1.2) / 100) + 1.2
            P_contraF = (((18 - Q) * 3) / 100) + 3
            P_fileM = (((18 - Q) * 1.2) / 100) + 1.2
            P_vazio = (((18 - Q) * 3.8) / 100) + 3.8
            P_costela = (((18 - Q) * 5.5) / 100) + 5.5
            P_file = (((18 - Q) * 9) / 100) + 9
            P_agulha = (((18 - Q) * 6.8) / 100) + 6.8
            P_paleta = (((18 - Q) * 7.5) / 100) + 7.5
            P_pontaP = (((18 - Q) * 4) / 100) + 4
            P_muscolo = (((18 - Q) * 4.8) / 100) + 4.8
            P_pescoço = (((18 - Q) * 4) / 100) + 4
            P_guisado = (((18 - Q) * 7.5) / 100) + 7.5
            P_costelaM = (((18 - Q) * 2.2) / 100) + 2.2
            P_matambre = (((18 - Q) * 1.6) / 100) + 1.6
            P_osso = Q     
            Pç_alcatra  = (pb * P_alcatra) /   100 * alcatra
            Pç_patinho  = (pb * P_patinho) /   100 * patinho
            Pç_coxaoF   = (pb * P_coxaoF) /    100 * coxaoF
            Pç_coxaoM   = (pb * P_coxaoM) /    100 * coxaoM
            Pç_picanha  = (pb * P_picanha) /   100 * picanha          
            Pç_fileM    = (pb * P_fileM) /     100 * fileM
            Pç_contraF  = (pb * P_contraF) /   100 * contraF
            Pç_vazio    = (pb * P_vazio) /     100 * vazio
            Pç_costela  = (pb * P_costela) /   100 * costela
            Pç_file     = (pb * P_file) /      100 * file
            Pç_agulha   = (pb * P_agulha) /    100 * agulha
            Pç_paleta   = (pb * P_paleta) /    100 * paleta
            Pç_pontaP   = (pb * P_pontaP) /    100 * pontaP
            Pç_muscolo  = (pb * P_muscolo) /   100 * muscolo
            Pç_guisado  = (pb * P_guisado) /   100 * guisado
            Pç_costelaM = (pb * P_costelaM) /  100 *costelaM      
            Pç_osso     = (pb * P_osso) /      100 * osso
            Pç_pescoço  = (pb * P_pescoço) /   100 * pescoço
            Pç_maminha  = (pb * P_maminha) /   100 * maminha
            Pç_matambre = ((pb * P_matambre) / 100) * matambre
            custo_boi   = pc * pb
            preço_venda = 
                Pç_alcatra +
                Pç_patinho +
                Pç_coxaoF  +
                Pç_coxaoM  +
                Pç_picanha +
                Pç_fileM   +
                Pç_contraF +
                Pç_vazio   +
                Pç_costela +
                Pç_file    +
                Pç_agulha  +
                Pç_paleta  +
                Pç_pontaP  +
                Pç_muscolo +
                Pç_guisado +
                Pç_costelaM+
                Pç_osso    +
                Pç_pescoço +
                Pç_maminha +
                Pç_matambre
            lb.innerHTML = `Total de Venda ${preço_venda.toFixed(2)}R$ `;
            po.innerHTML = `Osso e Cebo ${((pb * P_osso) / 100).toFixed(2)} Kg`;
            ll.innerHTML = `${(preço_venda - custo_boi).toFixed(2)}R$`;
            lmk.innerHTML = `É de ${ ((preço_venda - custo_boi) / pb).toFixed(2)}`;
        }}}}}}}}}}}}}}}}}}}}}}


      