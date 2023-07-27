<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .landing-full {
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, rgba(76, 131, 186, 1) 0%, rgba(76, 131, 186, 1) 35%, rgba(192, 211, 231, 1) 100%);

      /* background-image: url(../assets/media/custom/batik.svg);
    background-size: 225px 225px;
    background-repeat: repeat; */
    }

    .authincation {
      background: linear-gradient(90deg, rgba(76, 131, 186, 1) 0%, rgba(76, 131, 186, 1) 35%, rgba(192, 211, 231, 1) 100%);
      display: flex;
      min-height: 100vh;
    }

    .authincation-content {
      background: #fff;
      box-shadow: 0 0 2.1875rem 0 rgba(154, 161, 171, 0.15);
      border-radius: 0.3125rem;
      display: flex;
  justify-content: center;
  align-items: center;
    }

    .authincation-content.style-1 {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(20px);
    }

    .authincation-content.style-1 .form-control {
      background: rgba(255, 255, 255, 0.6);
      border-radius: 0.3125rem;
    }

    .authincation-content.style-1 .user-icon {
      height: 6.25rem;
      background: var(--primary);
      width: 6.25rem;
      text-align: center;
      border-radius: 6.25rem;
      line-height: 6.25rem;
      margin-left: auto;
      font-size: 3.75rem;
      text-align: center;
      color: white;
      margin-right: auto;
      margin-top: -6.25rem;
      margin-bottom: 1.25rem;
    }

    .authincation-content.style-2 {
      background: transparent;
      box-shadow: none;
      max-width: 33.125rem;
      width: 100%;
    }

    .authincation-content.style-2 .form-control {
      border: 0;
      border-radius: 0.3125rem;
      box-shadow: 0rem 0rem 0.9375rem rgba(0, 0, 0, 0.08);
    }

    @media only screen and (max-width: 35.9375rem) {
      .authincation-content.style-2 .auth-form {
        padding: 1.875rem 0rem;
      }
    }

    .auth-form {
  padding: 3.125rem 3.125rem;
}
  @media only screen and (max-width: 35.9375rem) {
    .auth-form {
      padding: 1.875rem; } }
  .auth-form .btn {
    height: 3.125rem;
    font-weight: 700; }
  .auth-form .page-back {
    display: inline-block;
    margin-bottom: 0.9375rem; }
  </style>
</head>

<body class="v-100">
  <div class="authincation h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <h4 class="text-center mb-4">Scan QrCode</h4>
                  <div class="new-account mt-3">
                    <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>