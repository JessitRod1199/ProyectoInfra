
$(document).ready(function() {
    agregar();
    function agregar() {
        $.ajax({
            type: "GET",
            url: "PHP/selecttabla.php",
            success: function(r) {
                let plantilla = '';
                let Tex="";
                r.forEach(element => {
        
                plantilla += `
                <tr>
                <td>${element.id}</td>
                <td>${element.nombre}</td>
                <td>${element.edad}</td>
                <td><img src="${element.url}" height="auto" width="50px"></td>
                </tr>
                `
                });
                $('#datos').html(plantilla);
            }
        });
    }
    $('#Productos').submit(function(u){
   const datos={
            nombre:$('#nombre').val(),
            edad: $('edad').val(),
            url: $('url').val(),


         };
         var nom=$('#nombre').val();
         var ed=$('#edad').val();
         var ur=$('#url').val();

       $.ajax({
         type:"POST",
         url:"PHP/insert.php",
         data:{nombre:nom, edad:ed,url:ur},
         success:function(n){
           console.log(u);
           
           agregar();
           document.getElementById("RegistroAlerte").style.display="block";
            setTimeout(function(){  location.reload(); }, 4000); 
         }
       });
       $('#Productos').trigger('reset');
         u.preventDefault()
       });       
});