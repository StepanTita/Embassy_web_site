var reg_bool = false;
(function ($) {
    "use strict";

    $('#choose-img').click(function(e){
        $('#hidden-file').trigger('click');
    })


    var target = $("#choose-img")[0];
    var drag_over = true;
    target.addEventListener("dragover", function(event) {
        event.preventDefault(); // отменяем действие по умолчанию
        $(this).css({
            "cursor" : "pointer",
        })
        if(drag_over){
            $(this).parent().parent().toggleClass('hover');
            drag_over = false
        }
    }, false);
    target.addEventListener("drop", function(event) {
        // отменяем действие по умолчанию
        event.preventDefault();
        if(!drag_over){
            $(this).parent().parent().toggleClass('hover');
        }
        drag_over = true;
        var file = event.dataTransfer.files[0];
        let img_holder = $("#choose-mini-img")[0];
        const fReader = new FileReader();
        if (file) 
        {
            fReader.readAsDataURL(file);
        } 
        else 
        {
            image_holder.src = "";
        }
        fReader.onloadend = function(e) {
            img_holder.src = fReader.result;
        }
        
        img_holder.src = img_holder.result;
    }, false);
    /*==================================================================
    [ Validate ]*/
    var input_reg = $('.reg .validate-input .input100');
    var input_auth = $('.auth .validate-input .input100');

    function user_exists(el)
    {
        
    }

    $('.validate-form').on('submit',function(){
        var check = true;
        var input;
        if(reg_bool){
            input = input_reg;
        }
        else{
            input = input_auth;
        }
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
            if(user_exists(input[i]) == true)
            {
                check=false;
            }
        }
        $('#bicycle')[0].value = $('#wheel')[0].value;
        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);

var reg_body = $('html, body');
var creat_acc_butt = $('#GoToReg');
var auth_butt = $('#GoToAuth');
var auth_form = $('.auth')[0];
var reg_form = $('.reg')[0];


creat_acc_butt.click(function(e){
    show(reg_form);
    setTimeout(hide_auth, 1500); //--------------------------------------REPAIR WITH ANIMATIONEND------------------------------------------
    auth_form.style.opacity = 0;
    reg_form.style.opacity = 1;
    reg_form.style.zIndex = 1;
    auth_form.style.zIndex = 0;
    //hide_auth();
    reg_bool = true;
})

auth_butt.click(function(e){
    show(auth_form);
    setTimeout(hide_reg, 1000); //--------------------------------------REPAIR WITH ANIMATIONEND------------------------------------------
    reg_form.style.opacity = 0;
    auth_form.style.opacity = 1;
    auth_form.style.zIndex = 1;
    reg_form.style.zIndex = 0;
    reg_bool = false;
    //hide_reg();
})

function hide_auth()
{
    auth_form.style.visibility = "hidden";
    //auth_form.removeEventListener("animationend", hide_auth);
}

function hide_reg()
{
    reg_form.style.visibility = "hidden";
    //reg_form.removeEventListener("animationend", hide_reg);
}

function show(elem)
{
    elem.style.visibility = "visible";
}

var control = $("#hidden-file")[0];
function previewFile(event) {
    // Когда происходит изменение элементов управления, значит появились новые файлы
    var file = document.querySelector('input[type=file]').files[0];
    let img_holder = $("#choose-mini-img")[0];
    const fReader = new FileReader();
    if (file) 
    {
        fReader.readAsDataURL(file);
    } 
    else 
    {
        image_holder.src = "";
    }
    fReader.onloadend = function(e) {
        img_holder.src = fReader.result;
    }
 
}