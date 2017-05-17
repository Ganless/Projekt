window.onload = function () {
    var c = document.getElementById("duk"); //plocka ut canvas objekt.
    var ctx = c.getContext("2d");
    c.width = 1300;
    c.height = 700;

    function degToRad(degree) {
        var factor = Math.PI / 180;
        return degree * factor;
    }

    // Linjer färg, tjocklek, ändar
    ctx.strokeStyle = "#4500ff";
    ctx.lineWidth = 20;
    ctx.lineCap = "round";

    // En glow effekt
    ctx.shadowBlur = 15;
    ctx.shadowColor = "#4500ff";

    function renderTime() {
        var now = new Date();
        var options = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };
        var today = now.toLocaleDateString('sv-SE', options);
        var time = now.toLocaleTimeString();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var days = 7;
        var weeks = 52;
        var milliseconds = now.getMilliseconds();
        var newHours = hours + (minutes / 60);
        var newMinutes = minutes + (seconds / 60);
        var newSeconds = seconds + (milliseconds / 1000);

        //Backgrounds

        ctx.clearRect(0, 0, 1920, 1080);



        //Hours
        ctx.beginPath();
        ctx.arc(600, 300, 220, degToRad(270), degToRad((newHours * 15) - 90));
        ctx.stroke();

        //Minutes
        ctx.beginPath();
        ctx.arc(600, 300, 190, degToRad(270), degToRad((newMinutes * 6) - 90));
        ctx.stroke();

        //Seconds
        ctx.beginPath();
        ctx.arc(600, 300, 160, degToRad(270), degToRad((newSeconds * 6) - 90));
        ctx.stroke();

        //Date
        ctx.font = "35px Arial";
        ctx.fillStyle = "#4500ff";
        ctx.fillText(today, 475, 280);

        //Time
        ctx.font = "35px Arial";
        ctx.fillStyle = "#4500ff";
        ctx.fillText(time, 525, 320);

    }
    setInterval(renderTime, 1);

};
