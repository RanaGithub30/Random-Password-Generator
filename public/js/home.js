$(document).ready(function(){

    /*
           On Page Load 
    */

    var type = "all";

    $.ajax({
        url: "password-generation",
        type:'GET',
        data: {type:type},
        success: function(data) {
            if($.isEmptyObject(data.error)){
                document.getElementById('generation-box').value = data.success;
            }else{
                printErrorMsg(data.error);
            }
        }
    });


    /*
    When changed on total length
    */

    $("#pass_length").keyup(function(e){
    setTimeout(function(){
       
            e.preventDefault();

            var pass_length = $("input[name='pass_length']").val();
            var uppercase = $('#check1').is(':checked');
            var lowercase = $('#check2').is(':checked');
            var numbers = $('#check3').is(':checked');
            var symbols = $('#check4').is(':checked');
            var type = "all";

            $.ajax({
                url: "password-generation",
                type:'GET',
                data: {pass_length:pass_length, uppercase:uppercase, lowercase:lowercase, numbers:numbers, symbols:symbols, type:type},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        document.getElementById('generation-box').value = data.success;
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

            // alert(pass_length);
        }, 1500);
    });
});


/*
       For Refresh
*/

$(document).ready(function(){
    $("#refresh").click(function(e){
       
            e.preventDefault();
            var type = "all";
            var pass_length = $("input[name='pass_length']").val();
            if(pass_length == ''){
                pass_length = 15;
            }else{
                pass_length = pass_length;
            }
            
            $.ajax({
                url: "password-generation",
                type:'GET',
                data: {type:type, pass_length:pass_length},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        document.getElementById('generation-box').value = data.success;
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        
    });
});

/*
     When Submiting a page
*/

$(document).ready(function(){
    $("#submit").click(function(e){
       
            e.preventDefault();
            var pass_length = $("input[name='pass_length']").val();
            var uppercase = $('#check1').is(':checked');
            var lowercase = $('#check2').is(':checked');
            var numbers = $('#check3').is(':checked');
            var symbols = $('#check4').is(':checked');
            var type = "selected";

            if(pass_length == ''){
                pass_length = 15;
            }else{
                pass_length = pass_length;
            }

            $.ajax({
                url: "password-generation",
                type:'GET',
                data: {pass_length:pass_length,uppercase:uppercase,lowercase:lowercase,numbers:numbers, symbols:symbols,type:type},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        document.getElementById('generation-box').value = data.success;
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        
    });
});

/*
 * copy password
*/

function copyText() {
    // Get the text field
    var copyText = document.getElementById("generation-box");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
    
    // Alert the copied text
    alert("Copied the text");
  }