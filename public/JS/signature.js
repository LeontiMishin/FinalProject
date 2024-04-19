var canvas = document.getElementById('signature');
var context = canvas.getContext('2d');
var drawing = false;
var mousePos = { x:0, y:0 };
var lastPos = mousePos;

canvas.addEventListener('mousedown', function (e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
}, false);

canvas.addEventListener('mouseup', function () {
    drawing = false;
}, false);

canvas.addEventListener('mousemove', function (e) {
    mousePos = getMousePos(canvas, e);
    renderCanvas();
}, false);

function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
    };
}

function renderCanvas() {
    if (drawing) {
        context.moveTo(lastPos.x, lastPos.y);
        context.lineTo(mousePos.x, mousePos.y);
        context.stroke();
        lastPos = mousePos;
    }
}
