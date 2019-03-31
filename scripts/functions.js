


function myFunction(elmnt, clr) {
    elmnt.style.color = clr;
}

function rollDice() {

    document.getElementById("dest").value = randomNum(20);
    document.getElementById("forc").value = randomNum(20);
    document.getElementById("const").value = randomNum(20);
    document.getElementById("intel").value = randomNum(20);
    document.getElementById("conhe").value = randomNum(20);
    document.getElementById("charis").value = randomNum(20);

}

function randomNum(dice) {
    var rand = Math.floor((Math.random() * dice) + 1);

    return rand;
}
