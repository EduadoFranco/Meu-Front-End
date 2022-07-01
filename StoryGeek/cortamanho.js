var tamanho = window.document.getElementById('test')
var tamanho2 = window.document.getElementById('test2')
var tamanho3 = window.document.getElementById('test3')
var tamanho4 = window.document.getElementById('test4')
var tamanho5 = window.document.getElementById('test5')
var tamanho6 = window.document.getElementById('test6')
var tamanho7 = window.document.getElementById('test7')

function clicar(){
    tamanho.style.background= '#141542'
    tamanho.style.color= 'white'
    tamanho.style.width='30px'
    tamanho.style.height='25px'
    tamanho.style.borderRadius = "25px"

}

function clicar2(){
    tamanho2.style.background= '#141542'
    tamanho2.style.color= 'white'
    tamanho2.style.width='30px'
    tamanho2.style.height='25px'
    tamanho2.style.borderRadius = "25px"

}
function clicar3(){
    tamanho3.style.background= '#141542'
    tamanho3.style.color= 'white'
    tamanho3.style.width='30px'
    tamanho3.style.height='25px'
    tamanho3.style.borderRadius = "25px"

}
function clicar4(){
    tamanho4.style.background= '#141542'
    tamanho4.style.color= 'white'
    tamanho4.style.width='30px'
    tamanho4.style.height='25px'
    tamanho4.style.borderRadius = "25px"

}
function clicar5(){
    tamanho5.style.background= '#141542'
    tamanho5.style.color= 'white'
    tamanho5.style.width='30px'
    tamanho5.style.height='25px'
    tamanho5.style.borderRadius = "25px"

}
function clicar6(){
    tamanho6.style.background= '#141542'
    tamanho6.style.color= 'white'
    tamanho6.style.width='30px'
    tamanho6.style.height='25px'
    tamanho6.style.borderRadius = "25px"

}

function clicar7(){
    tamanho7.style.background= '#141542'
    tamanho7.style.color= 'white'
    tamanho7.style.width='30px'
    tamanho7.style.height='25px'
    tamanho7.style.borderRadius = "25px"

}


//trocar imagem compra

function img1(){
    document.getElementById('imgprincipal').src="img/roupas/imgrp1.jpg";

}

function img2(){
    document.getElementById('imgprincipal').src="img/roupas/imgrp2.jpg";

}

function img3(){
    document.getElementById('imgprincipal').src="img/ropas2/imgp1.png";

}

function img4(){
    document.getElementById('imgprincipal').src="img/ropas2/imgp2.png";

}

function img5(){
    document.getElementById('imgprincipal').src="img/ropas2/imgp3.png";

}

function img6(){
    document.getElementById('imgprincipal').src="img/roupas/imgrp3.jpg";

}

function img7(){
    document.getElementById('imgprincipal').src="img/roupas/imgrp4.jpg";

}

function img8(){
    document.getElementById('imgprincipal').src="img/ropas2/imgp4.png";

}

//carregar imagem

function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input").addEventListener("change", readImage, false);

function readImage2() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview2").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input2").addEventListener("change", readImage2, false);


function readImage3() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview3").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input3").addEventListener("change", readImage3, false);



function readImage4() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview4").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input4").addEventListener("change", readImage4, false);

function readImage5() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview5").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input5").addEventListener("change", readImage5, false);



