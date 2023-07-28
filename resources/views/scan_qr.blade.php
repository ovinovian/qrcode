<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scanner Qrcode</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-onix-digital.css') }}">
  <style>
    .main-bg {
      background: linear-gradient(90deg, rgba(76, 131, 186, 1) 0%, rgba(76, 131, 186, 1) 35%, rgba(192, 211, 231, 1) 100%);
      display: flex;
      min-height: 100vh;
    }

    #reader__scan_region img {
      height: 250px;
    }

    #html5-qrcode-button-camera-start{
      background-color: #22c55e;
      border-radius: 10px;
      border-color: #00c112;
      color: #ffffff;
      font-weight: bold;
      padding: 10px 15px;
      margin-top: 15px;
      margin-bottom: 15px;
    }

    #html5-qrcode-button-camera-stop {
      background-color: #ef4444;
      border-radius: 10px;
      border-color: #dc2626;
      color: #fff;
      font-weight: bold;
      padding: 10px 15px;
      margin-top: 15px;
      margin-bottom: 15px;
    }
  </style>

</head>

<body class="v-100">
  <div class="main-bg h-100 d-flex justify-content-center align-items-center">
    <div class="container h-100">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">

            <div class="card-body">
            <audio id="successAudio" src="{{ asset('assets/music/access_granted.mp3') }}" preload="auto"></audio>
              <h5 class="card-title text-center">Scan Qrcode Disini</h5>
              <div id="reader" style="max-height: 600px;"></div>
              <div>
                <p id="read-result">

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script>
    function onScanSuccess(decodedText, decodedResult) {
      // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);

        // Play the short music when QR code is successfully scanned
        const successAudio = document.getElementById('successAudio');
        successAudio.play();
        
        html5QrcodeScanner.pause();
    }

    function onScanFailure(error) {
      // handle scan failure, usually better to ignore and keep scanning.
      // for example:
      console.warn(`Code scan error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", {
        fps: 10,
        qrbox: {
          width: 300,
          height: 300
        }
      },
      /* verbose= */
      false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
  </script>
</body>

</html>