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
    })
})