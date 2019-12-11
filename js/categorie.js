$(function () {
    $('.selectpicker2').selectpicker();
});

$(document).ready(function() {  
    $("#but4").click(function(){
        let cat = [];
        $.each($(".selectpicker2 option:selected"), function(){            
            cat.push($(this).val());
        });
        //console.log("ville selectione - " + villes.join(", "));

        console.log(cat);

        
        //transforms array villes into a string
        let arrayjs= JSON.stringify(cat);
        console.log(arrayjs);

        
        //sends the string of ids to the index
        $.ajax({
            type: "POST",
                url: "index.php",
                data: {cate : arrayjs},
                dataType: "text",
/*                 success: function(html){
                alert( "Submitted");
                    } */
          }); 
          
          document.getElementById('but3').click();
          $('#resultrecherche').load('page/getcat.php');
          
        
    });
});