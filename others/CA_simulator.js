const canvas = document.getElementById("game");
const ctx = canvas.getContext("2d");

ctx.beginPath();
ctx.lineWidth = 1;
for (var i = 1; i < 80; i++){
    ctx.moveTo(10 * i+0.5, 10.5);
    ctx.lineTo(10 * i+0.5, 790.5);
}
for (var j = 1; j < 80; j++){
    ctx.moveTo(10.5, 10 * j+0.5);
    ctx.lineTo(790.5, 10 * j+0.5);
}
ctx.closePath();
ctx.stroke();

ctx.rect(1, 1, 10, 10);
ctx.rect(10, 10, 10, 10);
ctx.fill();