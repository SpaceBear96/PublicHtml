$(document).ready(function(){
    $("#btnNuevo").click(function(){
        $("#frmDatos").fadeToggle();    
    });
    $("#btnGuardar").click(function(){
        valnom = $("#txtNombre").val();
        valtel = $("#txtTelefono").val();
        valdir = $("#txtDireccion").val();
        datos={
            "nombre": valnom,
            "telefono": valtel,
            "direccion": valdir
        }
        $.post("guardar.php",datos,function(rpta){
            alert(rpta);
        });
    });
    $(".btnEditar").click(function(){
        val_id = $(this).data("id");
        datos ={
            "id" : val_id
        };
        $.post("mostrar.php",datos,function(rpta){
            $("#txtNombre").val(rpta[0]);
            $("#txtTelefono").val(rpta[1]);
            $("#txtDireccion").val(rpta[2]);
            $("#frmDatos").show();
        });
    });
})