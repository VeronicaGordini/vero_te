// JavaScript Document

$(document).ready(function ()
{
    $("#modulo").validate(
    {
        rules:
        {
            nome: "required",
            mail: {
      				required: true,
      				email: true, 
			},
            message: "required",
            
         },
            
        messages:
        {
            nome: "manca nome",
            mail: "manca mail valido",
            message: "manca messaggio",
           
        }
    });
});
