class SimuladorCalculo {
    constructor() {}

    mudaFoto(foto) {
        document.getElementById("icone").src = foto;
    }

    calcular_simulador() {
        let alcatra = parseFloat(document.querySelector('input#cAlcatra').value);
        let patinho = parseFloat(document.querySelector('input#cPatinho').value);
        let coxaoF = parseFloat(document.querySelector('input#cCoxãoF').value);
        let tatu = parseFloat(document.querySelector('input#cTatu').value);
        let coxaoM = parseFloat(document.querySelector('input#cCoxãoM').value);
        let picanha = parseFloat(document.querySelector('input#cPicanha').value);
        let maminha = parseFloat(document.querySelector('input#cMaminha').value);
        let fileM = parseFloat(document.querySelector('input#cFileM').value);
        let contraF = parseFloat(document.querySelector('input#cContraF').value);
        let file = parseFloat(document.querySelector('input#cFile').value);
        let paleta = parseFloat(document.querySelector('input#cPaleta').value);
        let agulha = parseFloat(document.querySelector('input#cAgulha').value);
        let pontaP = parseFloat(document.querySelector('input#cPontaP').value);
        let guisado = parseFloat(document.querySelector('input#cGuisado2').value);
        let osso = parseFloat(document.querySelector('input#cOsso').value);
        let pescoço = parseFloat(document.querySelector('input#cPescoço').value);
        let pb = parseFloat(document.querySelector('input#cPB').value);
        let pc = parseFloat(document.querySelector('input#cPC').value);
        let muscolo = parseFloat(document.querySelector('input#cMuscolo').value);
        let costela = parseFloat(document.querySelector('input#cCostela').value);
        let costelaM = parseFloat(document.querySelector('input#cCostelaM').value);
        let matambre = parseFloat(document.querySelector('input#cMatambre').value);
        let vazio = parseFloat(document.querySelector('input#cVazio').value);
        
        let Q = 22; // Definido como um valor fixo
        
        // Verificar se os valores são válidos
        if (isNaN(alcatra) || isNaN(patinho) || isNaN(coxaoF) || isNaN(tatu) || isNaN(coxaoM) || isNaN(picanha) || isNaN(maminha) || isNaN(fileM) || isNaN(contraF) || isNaN(file) || isNaN(paleta) || isNaN(agulha) || isNaN(pontaP) || isNaN(guisado) || isNaN(osso) || isNaN(pescoço) || isNaN(pb) || isNaN(pc) || isNaN(muscolo) || isNaN(costela) || isNaN(costelaM) || isNaN(matambre) || isNaN(vazio)) {
            alert("Por favor, insira valores numéricos em todos os campos.");
            return;
        }
        
        let P_alcatra = (((18 - Q) * 3) / 100) + 3;
        let P_patinho = (((18 - Q) * 3.7) / 100) + 3.7;
        let P_coxaoF = (((18 - Q) * 4) / 100) + 4;
        let P_coxaoM = (((18 - Q) * 6) / 100) + 6;
        let P_tatu = (((18 - Q) * 1.7) / 100) + 1.7;
        let P_picanha = (((18 - Q) * 1.5) / 100) + 1.5;
        let P_maminha = (((18 - Q) * 1.2) / 100) + 1.2;
        let P_fileM = (((18 - Q) * 1.2) / 100) + 1.2;
        let P_contraF = (((18 - Q) * 3) / 100) + 3;
        let P_file = (((18 - Q) * 9) / 100) + 9;
        let P_paleta = (((18 - Q) * 7.5) / 100) + 7.5;
        let P_agulha = (((18 - Q) * 6.8) / 100) + 6.8;
        let P_pontaP = (((18 - Q) * 4) / 100) + 4;
        let P_guisado = (((18 - Q) * 7.5) / 100) + 7.5;
        let P_osso = Q;     
        let P_vazio = (((18 - Q) * 3.8) / 100) + 3.8;
        let P_costela = (((18 - Q) * 5.5) / 100) + 5.5;
        let P_costelaM = (((18 - Q) * 2.2) / 100) + 2.2;
        let P_matambre = (((18 - Q) * 1.6) / 100) + 1.6;
        let P_pescoço = (((18 - Q) * 4) / 100) + 4;
        let P_muscolo = (((18 - Q) * 4.8) / 100) + 4.8;

        let Pç_alcatra = (pb * P_alcatra) / 100 * alcatra;
        let Pç_patinho = (pb * P_patinho) / 100 * patinho;
        let Pç_coxaoF = (pb * P_coxaoF) / 100 * coxaoF;
        let Pç_coxaoM = (pb * P_coxaoM) / 100 * coxaoM;
        let Pç_tatu = (pb * P_tatu) / 100 * tatu;
        let Pç_picanha = (pb * P_picanha) / 100 * picanha;
        let Pç_maminha = (pb * P_maminha) / 100 * maminha;
        let Pç_fileM = (pb * P_fileM) / 100 * fileM;
        let Pç_contraF = (pb * P_contraF) / 100 * contraF;
        let Pç_file = (pb * P_file) / 100 * file;
        let Pç_paleta = (pb * P_paleta) / 100 * paleta;
        let Pç_agulha = (pb * P_agulha) / 100 * agulha;
        let Pç_pontaP = (pb * P_pontaP) / 100 * pontaP;
        let Pç_guisado = (pb * P_guisado) / 100 * guisado;
        let Pç_osso = (pb * P_osso) / 100 * osso;
        let Pç_vazio = (pb * P_vazio) / 100 * vazio;
        let Pç_costela = (pb * P_costela) / 100 * costela;
        let Pç_costelaM = (pb * P_costelaM) / 100 * costelaM;
        let Pç_matambre = (pb * P_matambre) / 100 * matambre;
        let Pç_pescoço = (pb * P_pescoço) / 100 * pescoço;
        let Pç_muscolo = (pb * P_muscolo) / 100 * muscolo;

        let custo_boi = pc * pb;

        let preço_venda = 
            Pç_alcatra + Pç_patinho + Pç_coxaoF + Pç_coxaoM + Pç_tatu + Pç_picanha + 
            Pç_maminha + Pç_fileM + Pç_contraF + Pç_file + Pç_paleta + Pç_agulha + 
            Pç_pontaP + Pç_guisado + Pç_osso + Pç_vazio + Pç_costela + Pç_costelaM + 
            Pç_matambre + Pç_pescoço + Pç_muscolo;

        let lb = document.querySelector('div#LB');
        let po = document.querySelector('div#PO');
        let ll = document.querySelector('div#LL');
        let lmk = document.querySelector('div#LMK');

        lb.innerHTML = `Total de Venda ${preço_venda.toFixed(2)}R$ `;
        po.innerHTML = `Osso e Cebo ${((pb * P_osso) / 100).toFixed(2)} Kg`;
        ll.innerHTML = `${(preço_venda - custo_boi).toFixed(2)}R$`;
        lmk.innerHTML = `É de ${(preço_venda - custo_boi) / pb.toFixed(2)}`;
    }
}

// Exemplo de uso:
// let simulador = new SimuladorCalculo();
// simulador.calcular_simulador();
