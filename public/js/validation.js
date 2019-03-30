$(document).ready(function () {
    var loginValidator = $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },


        messages: {
            email: {
                required: "La direccion es obligatioria",
                email: "Introduce un email válido"
            },
            password: {
                required: "Introduce una contraseña"
            }
        },
    });

    var signupValidator = $("#signupForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6,
            }
        },

        messages: {
            name: {
                required: "Nombre requerido",
                minlength: "Longitud minima {0} "
            },
            email: {
                required: "La direccion es obligatioria",
                email: "Introduce un email válido"
            },
            password: {
                required: "Introduce una contraseña",
                minlength: "Longitud minima {0}"
            }
        },
    });

    


    var createRecipeValidator = $("#createRecipeForm").validate({
        ignore: [],
        rules: {
            title: {
                required: true,
                minlength: 3
            },
            "ingredient[]": {
                required: true,
            },
            "description[]": {
                required: true,
            },
            "info[]": {
                required: true,
            },
            "image": {
                required: true,
                extension: "png|jpeg|jpg",
            }
        },

        messages: {
            required: "Campo requerido",
            title: {
                required: "Titulo obligatorio",
                minlength: "Minimo {0} caracteres"
            },
            "ingredient[]": {
                required: "Ingrediente obligatorio",
            },
            "description[]": {
                required: "Preparacion obligatoria",
            },
            "info[]": {
                required: "Número de comensales obligatorio",
            },
            "image": {
                required: "Imagen obligatoria",
                image: "El archivo debe ser una imagen",
            }
        },
    });
    $("#comensales").rules("add", {
        required: true,
        messages: {
            required: "Campo obligatorio"
        }
    });
});
