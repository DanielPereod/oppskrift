var addIngredientIcon = document.querySelector("#add-ingredient");
var addStepIcon = document.querySelector("#add-step");


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
