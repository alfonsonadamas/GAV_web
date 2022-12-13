var clic = 1;
function ocultar1() {
    
    if(clic == 1){
        document.getElementById("fomr_1").style.display = "block";
        clic = clic + 1;
    }else{
        document.getElementById("fomr_1").style.display = "none"
        clic = 1;
    }
}

var clic2 = 1;
function ocultar2() {
    
    if(clic2 == 1){
        document.getElementById("fomr_2").style.display = "block";
        clic2 = clic2 + 1;
    }else{
        document.getElementById("fomr_2").style.display = "none"
        clic2 = 1;
    }
}

var clic3 = 1;
function ocultar3() {
    
    if(clic3 == 1){
        document.getElementById("fomr_3").style.display = "block";
        clic3 = clic3 + 1;
    }else{
        document.getElementById("fomr_3").style.display = "none"
        clic3 = 1;
    }
}

var clic4 = 1;

function display() {
    if(clic4 == 1){
        document.getElementById("display").style.display = "block";
        clic4 = clic4 + 1;
    }else{
        document.getElementById("display").style.display = "none"
        clic4 = 1;
    }
    
}