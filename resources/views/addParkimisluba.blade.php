@extends('layouts.app')
@section('content')
<title>ParkimisloaTaotlus</title>
<style>
    .top-section {
        background-color: #D7D7D7;
        padding: 20px;
        color: black;
    }
    .form-group {
        margin-bottom: 10px;
    }
    .bottom-section {
        padding: 20px;
    }
    .images {
        display: flex;
        justify-content: start;
    }

</style>
</head>
<body>
    <div class="top-section d-flex flex-column align-items-center justify-content-center">
        <h2 class="text-center">Parkimisloa taotlus</h2>
        <div class="form-group">
            <label for="fullname">Full name</label>
            <input type="text" id="fullname" name="fullname">

            <label for="regnumber">Reg Number</label>
            <input type="text" id="regnumber" name="regnumber">
        </div>

        <div class="form-group">
            <label for="signature">Signature</label>
            <canvas id="signature" width="500" height="200" style="border:2px solid black;"></canvas>
        </div>

        <div class="d-flex align-items-center">
            <p class="mr-3">1 jäänud - külaline</p>
            <button class="btn btn-success">Saada</button>
        </div>
    </div>

    <div class="bottom-section d-flex align-items-center justify-content-center">
        <div class="form-group mr-3">
            <select class="form-select" id="carNumbers">
                <option selected>Vali auto number...</option>
                <option value="1">078 BFP</option>
                <option value="2">290 TKD</option>
            </select>
        </div>
        <button class="btn btn-danger mr-3">Kustutada</button>
        <div class="images">
            <a href="https://www.transpordiamet.ee/">
                <img style="width: 60%; height: auto;" src="http://127.0.0.1:8000/images/Transpordiamet.png" alt="Transpordiamet">
            </a>
            <a href="https://www.eesti.ee/et">
                <img style="width: 60%; height: auto;" src="http://127.0.0.1:8000/images/EestiEE.png" alt="EestiEE">
            </a>
        </div>
    </div>


    <script>
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
    </script>
@endsection
