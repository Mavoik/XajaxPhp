function sendColor() {
    let color = document.getElementById("colorSelect").value;
    let colorP = '';
    
    if (color !== '') {
        colorP = document.getElementById("colorResult").style.backgroundColor = color;
    }
    if (color === '') {
        colorP = document.getElementById("colorResult").style.backgroundColor = '';
    }

    //let res = xajax_changeColor(colorP);
    let res = xajax.request({xjxfun: 'changeColor'}, {mode: 'asynchronous', parameters: [colorP]});
    return res;
}
