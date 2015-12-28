$(document).ready(function() {


    $('#formlogin').bootstrapValidator({
         message: 'Estos Datos no son correctos',

        fields:
        {
            txtemail:
            {
                message: 'Nombre de usuario no valido',
                validators:
                {
                     emailAddress: {
                        message: 'Formato incorrecto de email'
                     },
                    notEmpty:
                    {
                        message: 'Nombre de usuario requerido'
                    },
                    stringLength:
                    {
                        min: 6,
                        max: 30,
                        message: '6 caracteres como mínimo y 30 como máximo'
                    }
                }
            },
            txtcontrasenia:
            {
                message: 'Contraseña no valida',
                validators:
                {
                    notEmpty:
                    {
                        message: 'Contraseña requerido'
                    },
                    stringLength:
                    {
                        min: 8,
                        max: 30,
                        message: '8 caracteres como mínimo y 30 como máximo'
                    }
                }
            }
        }
    });
});


