window.addEventListener("load", () => {
   const canvas = document.querySelector("#canvas");
   var ctx = canvas.getContext('2d');

   ctx.strokeStyle = "white";
   ctx.lineWidth = "10";
   ctx.strokeRect(0, 0, 400, 400);

   ctx.moveTo(200, 400);
   ctx.lineWidth = "3";
   ctx.lineTo(200, 0);
   ctx.stroke();

   ctx.moveTo(0, 200);
   ctx.lineTo(400, 200);
   ctx.stroke();

   ctx.beginPath();
   ctx.moveTo(200, 0);
   ctx.lineTo(190, 20);
   ctx.lineTo(210, 20);
   ctx.lineTo(200, 0);
   ctx.fillStyle = "white";
   ctx.fill();
   ctx.closePath();

   ctx.beginPath();
   ctx.moveTo(400, 200);
   ctx.lineTo(380, 190);
   ctx.lineTo(380, 210);
   ctx.lineTo(400, 200);
   ctx.fill();
   ctx.closePath();

   ctx.beginPath();
   ctx.moveTo(350, 200);
   ctx.lineTo(350, 50);
   ctx.lineTo(200, 50);
   ctx.lineTo(200, 200);
   ctx.lineTo(350, 200);
   ctx.fillStyle = "#00ffff"
   ctx.fill();
   ctx.closePath();

   ctx.beginPath();
   ctx.moveTo(200, 350);
   ctx.lineTo(200, 200);
   ctx.lineTo(50, 200);
   ctx.lineTo(200, 350);
   ctx.fill();
   ctx.closePath();

   ctx.beginPath();
   ctx.arc(200, 200, 150, 0, Math.PI * 0.5, true);
   ctx.lineTo(200, 200);
   ctx.lineTo(50, 200);
   ctx.fill();
   ctx.closePath();

   ctx.beginPath();
   ctx.moveTo(195, 125);
   ctx.lineTo(205, 125);
   ctx.stroke();
   ctx.moveTo(275, 195);
   ctx.lineTo(275, 205);
   ctx.stroke();
   ctx.moveTo(350, 195);
   ctx.lineTo(350, 205);
   ctx.stroke();
   ctx.moveTo(195, 50);
   ctx.lineTo(205, 50);
   ctx.stroke();
   ctx.closePath();

   ctx.moveTo(200, 400);
   ctx.lineWidth = "3";
   ctx.lineTo(200, 0);
   ctx.stroke();

   ctx.moveTo(0, 200);
   ctx.lineTo(400, 200);
   ctx.stroke();
   ctx.closePath();

   ctx.beginPath();
   ctx.fillStyle = "white";
   ctx.font = "17px serif";
   ctx.fillText("R/2", 167, 130);
   ctx.fillText("R", 180, 55);
   ctx.fillText("R/2", 262, 190);
   ctx.fillText("R", 344, 190);
   ctx.closePath();
});

function draw() {
   var ctx = document.getElementById('canvas').getContext('2d');
   ctx.font = "48px serif";
   ctx.fillText("Hello world", 10, 50);
}