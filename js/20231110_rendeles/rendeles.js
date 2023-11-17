let arak=[300,600,1000,800]
function Szamol(){
    let darab = document.getElementById("mennyiseg").value;
    let index=document.getElementById("termek").options.selectedIndex;
    document.getElementById("egysegar").innerText=arak[index];
    let ossz = arak[index]*darab;
    document.getElementById("fizetendo").innerText=ossz;

}
document.querySelector('input[type="button"]').onclick=Szamol;

 document.getElementById('termek').onchange= function(){
    let index=document.getElementById("termek").options.selectedIndex;
    document.getElementById("egysegar").innerText=arak[index];
}



