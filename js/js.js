function increment(x) {
    let value = Number(x.value);

    x.value = value + 1;

    let calculatorPoint = document.getElementById(x.id + "-calculator");

    let elementValue = Number(calculatorPoint.value);

    calculatorPoint.value = elementValue + 1;
}

function decrement(x) {
    let value = Number(x.value);

    if(value != 0){
        x.value = value - 1;
    }

    let calculatorPoint = document.getElementById(x.id + "-calculator");

    let elementValue = Number(calculatorPoint.value);

    if(value != 0) {
        calculatorPoint.value = elementValue - 1;
    }
}

function doMatchValue(x) {
    let value = Number(x.value);

    let calculatorPoint = document.getElementById(x.id + "-calculator");

    calculatorPoint.value = value;
}

function countCommonPrice() {
    let counterPencil = Number(document.getElementById("counterPencil").value);

    let rubber = Number(document.getElementById("rubber").value);

    let pen = Number(document.getElementById("pen").value);

    let corrector = Number(document.getElementById("corrector").value);

    let ruler = Number(document.getElementById("ruler").value);

    let pastel = Number(document.getElementById("pastel").value);

    let pencilCase = Number(document.getElementById("pencilCase").value);

    let markers = Number(document.getElementById("markers").value);

    let pencilSharpener = Number(document.getElementById("pencilSharpener").value);

    let sum = 15*counterPencil + 1.5*rubber + 3*pen + 5*corrector + 1*ruler + 25*pastel + 10*pencilCase + 20*markers + 2.5*pencilSharpener;

    let commonPrice = document.getElementById("commonPrice");

    commonPrice.value = sum;
}

setInterval(countCommonPrice, 100);