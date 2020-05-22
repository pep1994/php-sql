$(document).ready(init);

function getPaganti() { 

    $.ajax({
        method: "GET",
        url: "getAllPaganti.php",
        dataType: "json",
        success: function (data) {

            console.log(data);
            

            var target = $('ul');

            for (var pagante of data) {
                
                target.append("<li>" + pagante.name + " " + pagante.lastname + " - " + pagante.address + "</li>");
                $('li').css('line-height', 2);

            }
            
        },
        error: function (err) {  

            console.error(err);
            
        }
        
    });

 }


function init () {

    getPaganti();

  }