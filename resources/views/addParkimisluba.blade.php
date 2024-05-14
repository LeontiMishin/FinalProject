@extends('layouts.app')
@section('content')
<title>ParkimisloaTaotlus</title>
<style>
    .top-section {
        background-color: #D7D7D7;
        color: black;
        text-align: center;
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
        margin-top: 20px;
    }
    .images a {
        margin-right: 20px;
    }
    .d-flex {
        align-items: center;
    }
    .d-flex button {
        margin: 0 20px;
    }
    @media (max-width: 600px) {
        .top-section, .bottom-section {
            flex-direction: column;
            align-items: stretch;
        }
        .form-group {
            width: 100%;
        }
        .images img {
            width: 100%;
            height: auto;
        }
    }
    .text1 {
        padding-top: 15px;
    }
</style>
</head>
<body>



<form id="signatureForm" action="/submit" method="post">
    @csrf

    <div class="top-section py-3 d-flex flex-column align-items-center justify-content-center">
        <h2 class="text-center">Parkimisloa taotlus</h2>
        <div class="form-group row text1">
                <div class="col-sm-6">
                    <label for="fullname">Full name:</label>
                    <input type="text" id="fullname" name="fullname" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="regnumber">Reg Number:</label>
                    <input type="text" id="regnumber" name="regnumber" class="form-control">
                </div>
        </div>

        <div class="form-group">
            <label for="hiddenSignatureInput"></label>
            <canvas id="signature" width="500" height="200" style="border:2px solid black;"></canvas>
            <input type="hidden" id="hiddenSignatureInput" name="signature">
        </div>

        <div class="d-flex align-items-center">
            <p class="mr-3">1 jäänud - külaline</p>
            <button type="submit" class="btn btn-success">Saada</button>
        </div>
    </div>
</form>


    <div class="container py-3 d-flex align-items-center justify-content-center">
        <div class="form-group mr-3">
            <select class="form-select" id="carNumbers">
                <option selected>Vali auto number...</option>
                @foreach($tickets as $new)
                    <option value="{{$new->id}}">{{$new->carPlate}}</option>
                @endforeach
            </select>
            <button class="btn btn-danger mr-3" onclick="deleteTicket()">Kustutada</button>
        </div>
        <div class="d-flex flex-wrap">
            <a href="https://www.transpordiamet.ee/">
                <img style="width: 60%; height: auto;" src="http://127.0.0.1:8000/images/Transpordiamet.png" alt="Transpordiamet">
            </a>
            <a href="https://www.eesti.ee/et">
                <img style="width: 60%; height: auto;" src="http://127.0.0.1:8000/images/EestiEE.png" alt="EestiEE">
            </a>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js" defer></script>


<script>
    function deleteTicket() {
        var selectedId = document.getElementById('carNumbers').value;
        if (!selectedId) {
            alert('Palun valige auto number');
            return;
        }
        if (confirm('Kas olete kindel, et soovite selle numbri kustutada?')) {
            fetch(`/delete-ticket/${selectedId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            }).then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.success) {
                    alert('Number on kustutatud!');
                    window.location.reload();
                } else {
                    alert('Viga numbra kustutamisel');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }

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

    document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('signature');
    var signaturePad = new SignaturePad(canvas);
    var form = document.getElementById('signatureForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var signatureData = signaturePad.toDataURL('image/png');
        console.log('Signature Data:', signatureData);

        document.getElementById('hiddenSignatureInput').value = signatureData;
        console.log('Hidden input set', document.getElementById('hiddenSignatureInput').value);

        form.submit();
    });
});



</script>

</body>
@endsection
