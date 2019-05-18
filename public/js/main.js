var addIngredientIcon = document.querySelector("#add-ingredient");
var addStepIcon = document.querySelector("#add-step");

if (addIngredientIcon != null) {
    addIngredientIcon.addEventListener("click", function () {
        let ingredientsBox = document.querySelector("#ingredients");

        var node = document.createElement("input");
        node.setAttribute("class", "form-control");
        node.setAttribute("type", "text");
        node.setAttribute("name", "ingredient[]");
        node.setAttribute("placeholder", "Escribe un ingrediente...");

        ingredientsBox.appendChild(node);
    });

    addStepIcon.addEventListener("click", function () {
        let stepsBox = document.querySelector("#steps");

        var node = document.createElement("textarea");
        node.setAttribute("class", "form-control");
        node.setAttribute("type", "text");
        node.setAttribute("name", "description[]");
        node.setAttribute("placeholder", "Escribe el siguiente paso...");

        stepsBox.appendChild(node);
    });
}



/* CONTAR CARACTERES DEL LOS COMENTARIOS */
function countChar(val) {
    var len = val.value.length;
    if (len >= 500) {
        val.value = val.value.substring(0, 500);
    } else {
        $('#charNum').text(500 - len);
    }
};

/* PREVENIR VARIOS SUBMIT */
$('#but-recipe-create').click(function() {
    $('#createRecipeForm').submit();
    $(this).attr('disabled',true);
});