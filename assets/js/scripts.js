
function availableCars(car){
    let quantity = 0;

    switch(car){
        case "Tyota":
            quantity = 3;
            break;

        case "Nissan":
            quantity = 2;
            break;

        case "Benz":
            quantity = 1;
            break;

        default:
            quantity = 0;
    }

    return quantity;
}

function loopRunner(){

    let animals = ["Schaff","Hänchen","Küh","Pferd"];

    animals.forEach( function(element){
        console.log(element);
    })

}