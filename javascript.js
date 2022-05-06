function checkOrder(currentForm) {
    if (currentForm.name.value == "" ||
        currentForm.name.value == "Benutzername") {
        document.getElementById("name").style.color="red";
        currentForm.name.focus();
        return false;
    }
    if (currentForm.password.value == "") {

        document.getElementById("password").style.color="red";
        currentForm.password.focus();
        return false;
    }


    var selected = false;
    for (var i = 0; i <= 2 ; i++)
        if (currentForm.size[i].checked == true)
            selected = true;

    if (selected == false) {
        document.getElementById("burgerSize").style.color="red";
        return false;
    }

    return true;
}

function textdelete(newValue){
    newValue.value=" ";
}

$(document).ready(function(){
    $(window).scroll(function (){
        if($(this).scrollTop() >0){
            $(".scroll").css({"opacity" : "0"})
        }
        else{
            $(".scroll").css({"opacity" : "1"})
        }
    })
})


function setNewScroll(){
    document.getElementById("anim").src ="assets/scroll.svg"
}
function setOldScroll(){
    document.getElementById("anim").src="assets/scroll_anim.svg"
}










