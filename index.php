<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <!-- Js CDN Link for Barcode reader-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js"
            integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="body_app">

<nav class="navbar navbar-light bg-light mb-3">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">

            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Bootstrap

        </a>

    </div>

</nav>


<style>

    main {
        display: flex;

        justify-content: center;

        align-items: center;

        border-radius: 20px;
    }

    #reader {
        width: 600px;

        border-radius: 30px;
    }

    #result {

        text-align: center;

        font-size: 1.5rem;
    }
</style>

<main>
    <div id="reader" class="rounded"></div>

    <div id="result"></div>

</main>

<script>

    const scanner = new Html5QrcodeScanner('reader', {
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            width: 250,
            height: 250,
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 20, // Frames per second to attempt a scan
    });


    scanner.render(success, error);
    // Starts scanner

    function success(result) {

        let today = new Date().toISOString().slice(0, 10)

        const date_obj = new Date();

        time = new Date().toLocaleTimeString();

        document.getElementById('result').innerHTML = `

        <div class="card" style="width: 18rem; onload="console_log(${result});">

        <img src="barcode-scan.gif" class="card-img-top" alt="...">

        <div class="card-body">

        <form action="validator.php" method="post">

        <p style="font-size: 14px;" class="card-text">Bar Code Read Successfully : <span class="badge bg-primary">${result}</span></p>

        <p style="font-size: 14px;" class="card-text">Date : <span class="badge bg-primary">${today}</span></p>

        <p style="font-size: 14px;" class="card-text">Capture Time : <span class="badge bg-primary">${time}</span></p>

        <input type="hidden" name="number_index" value="${result}" id="result">

        <input type="hidden" name="time_val" value="${time}" id="capture_time">

        <input type="hidden" name="date_val" value="${today}" id="capture_date">

        <button type="submit" name="submit" class="btn btn-outline-primary btn-sm">Validation</button>

        </form>

        </div>

        </div>
        `;

        // Prints result as a link inside result element

        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed

    }

    function error(err) {
        console.error(err);
        // Prints any errors to the console
    }

    function console_log(result)
    {
        console.log(result);
    }
</script>



</html>