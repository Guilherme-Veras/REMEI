$(document).ready(function() {
    //init DateTimePickers
    materialKit.initFormExtendedDatetimepickers();

    // Sliders Init
    materialKit.initSliders();
});

function scrollToBuscar() {
    if ($('#area-buscar').length != 0) {
        $("html, body").animate({
            scrollTop: $('#area-buscar').offset().top
        }, 1000);
    }
}

function scrollToEmAlta() {
    if ($('#area-EmAlta').length != 0) {
        $("html, body").animate({
            scrollTop: $('#area-EmAlta').offset().top
        }, 1000);
    }
}

function scrollToGiani() {
    if ($('#integrante-Giani').length != 0) {
        $("html, body").animate({
            scrollTop: $('#integrante-Giani').offset().top
        }, 1000);
    }
}

function scrollToGuilherme() {
    if ($('#integrante-Guilherme').length != 0) {
        $("html, body").animate({
            scrollTop: $('#integrante-Guilherme').offset().top
        }, 1000);
    }
}

function scrollToJece() {
    if ($('#integrante-Jece').length != 0) {
        $("html, body").animate({
            scrollTop: $('#integrante-Jece').offset().top
        }, 1000);
    }
}

$(document).ready(function() {
    $('#facebook').sharrre({
        share: {
            facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

    $('#googlePlus').sharrre({
        share: {
            googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

    $('#twitter').sharrre({
        share: {
            twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
            twitter: {
            via: 'CreativeTim'
            }
        },
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

});

document.getElementById("ano").innerHTML = new Date().getFullYear();

window.onresize=function() {
    getReponsive();
}

function getReponsive() {
   if (window.screen.availWidth <= 370)
       $("#busca-index").addClass("mx-auto");
   else
       $("#busca-index").removeClass("mx-auto");
}

$('.carousel').carousel({
  interval: 3000
})


// Noticação
var notifications = [
    {
        nome: 'attention',
        icon: 'fa-exclamation',
        emoj: '<i class="fas fa-surprise"></i>',
        color: 'Message--orange'
    },

    {
        nome: 'error',
        icon: 'fa-times',
        emoj: '<i class="fas fa-sad-tear "></i>',
        color: 'Message--red'
    },

    {
        nome: 'success',
        icon: 'fa-check',
        emoj: '<i class="fas fa-smile-beam"></i>',
        color: 'Message--green'
    }
];


function verificarNovaSenha(){
    if(($('#password').val().length <= 5) || ($('#confirmepassword').val().length <= 5)) {
        msg=" É preciso que a senha tenha no minimo 6 caracteres!";
        alert(msg);
    }else if($('#password').val() != $('#confirmepassword').val()){
        alert(" As senhas não se conhecidem!");
        
    }else{
        msg="Senha modificada com sucesso!";
        document.getElementById('formao').submit();
    }
}

function verificarLogin(){
    msg="Login com sucesso!";
        showMessage(msg, 'success');
}   

function verificarCadastro(){

    if (($('#nome').val().length <= 0) ||
        ($('#email').val().length <= 5) ||
        ($('#confirmeemail').val().length <= 5) ||
        ($('#password').val().length <= 5) ||
        ($('#confirmepassword').val().length <= 5)){
        msg=" Não pode ter campos em branco!";
       // showMessage(msg, 'error');
    }else if($('#email').val() != $('#confirmeemail').val()){
        msg=" Os email não se conhecidem!";
        //showMessage(msg, 'attention');
    }else if(($('#password').val().length <= 5) || ($('#confirmepassword').val().length <= 5)) {
        msg=" É preciso que a senha tenha no minimo 6 caracteres!";
        //showMessage(msg, 'error');
    }else if($('#password').val() != $('#confirmepassword').val()){
        msg=" As senhas não se conhecidem!";
        //showMessage(msg, 'attention');
    }else/* if(!$('#chk').is(":checked")) {
        msg=" É preciso aceitar os termos de uso";
        //showMessage(msg, 'attention');
    }else*/{
        document.getElementById('formao').submit();
        msg="Cadastrado com sucesso!";
        //showMessage(msg, 'success');
    }
    alert(msg)
}





function showMessage(texto, tipo){
    var indice = -1;
    for(var i=0; i<notifications.length; i++) {
        if(notifications[i].nome === tipo) {
            indice = i;
        }
    }

    texto = notifications[indice]['emoj'] + texto;


    $(".Message").removeClass("Message--orange Message--red Message--green");
    document.getElementById("text-message").innerHTML = texto ;
    $("#icon-message").addClass(notifications[indice]['icon']);
    $(".Message").addClass(notifications[indice]['color']);
    $(".Message").removeClass("is-hidden");
}


function closeMessage(el) {
  el.addClass('is-hidden');
  el.removeClass("Message--orange Message--red Message--green");
}

$('.js-messageClose').on('click', function(e) {
  closeMessage($(this).closest('.Message'));
});

$('#js-helpMe').on('click', function(e) {
  alert('Help you we will, young padawan');
  closeMessage($(this).closest('.Message'));
});

$('#js-authMe').on('click', function(e) {
  alert('Okelidokeli, requesting data transfer.');
  closeMessage($(this).closest('.Message'));
});

$('#js-showMe').on('click', function(e) {
  alert("You're off to our help section. See you later!");
  closeMessage($(this).closest('.Message'));
});

$(document).ready(function() {
  setTimeout(function() {
    closeMessage($('#js-timer'));
  }, 5000);
});



$(document).ready(function(){

    $("#checkTodos").click(function(){

        if(!$("#chk-checkTodos").is(":checked")) {
            $(this).removeClass("check-active");
            $("#chk-checkTodos").removeAttr("checked");

            $('.checkFiltro').removeClass("check-active");
            $('.chk-checkFiltro').removeAttr("checked");
        }else {
            $(this).addClass("check-active");
            $("#chk-checkTodos").attr("checked", "checked");

            $('.checkFiltro').addClass("check-active");
            $('.chk-checkFiltro').attr("checked", "checked");
        }
    });

});

function myChecked(lbl, chk){
    lbl = '#' + lbl;
    chk = '#' + chk;

 
    $("#checkTodos").removeClass("check-active");
    $("#chk-checkTodos").removeAttr("checked");
    $("#lbl-area").removeClass("check-active");
    $("#lbl-autor").removeClass("check-active");
    $("#lbl-metodologia").removeClass("check-active");
    $("#lbl-post").removeClass("check-active");

    $(lbl).addClass("check-active");

   /* if(!$(chk).is(":checked")) {
        $(lbl).removeClass("check-active");
        $(chk).removeAttr("checked");
    }else{

        $(lbl).addClass("check-active");
        $(chk).attr("checked", "checked");

    }

    if( !((!$("#chk-area").is(":checked")) &&
        (!$("#chk-autor").is(":checked")) &&
        (!$("#chk-metodologia").is(":checked")) &&
        (!$("#chk-post").is(":checked")))) {

        $("#checkTodos").removeClass("check-active");
        $("#chk-checkTodos").removeAttr("checked");

    }

    if($("#chk-autor").is(":checked")) {
        $("#link-posts").addClass("pesquisa-ocuta");
        $("#Post").addClass("pesquisa-ocuta");
    }*/
}

function myChecked_termoDeUso(lbl, chk){
    lbl = '#' + lbl;
    chk = '#' + chk;

    if(!$(chk).is(":checked")) {
        $(lbl).removeClass("check-active");
        $(chk).removeAttr("checked");
    }else{

        $(lbl).addClass("check-active");
        $(chk).attr("checked", "checked");

    }
}


