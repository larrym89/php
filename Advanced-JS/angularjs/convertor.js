function inTomm(inch) {
    return inch * 25.4
}

function mmToin(mm){
    return mm / 25.4
}

function convert(unit, value){
    return unit(value).toFixed(3)
}

result = convert(inTomm, 23)
console.log(result)