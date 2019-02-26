$(document).ready(function(){
    $("#btnNuevo").click(function(){
        $("#frmDatos").fadeToggle();    
    });
    $("#btnGuardar").click(function(){
        valnom = $("#txtNombres").val();
        valtel = $("#txtTelefono").val();
        valdir = $("#txtDireccion").val();


    })
})