<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin|Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css?v=3.2.0') ?>">

    <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjAodjIpJTIyJTJDJTIyeCUyMiUzQTAuNzg4NzA1ODc5MTcyMjIzNyUyQyUyMnclMjIlM0ExMzYwJTJDJTIyaCUyMiUzQTc2OCUyQyUyMmolMjIlM0E2NjclMkMlMjJlJTIyJTNBMTM2MCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRmV4YW1wbGVzJTJGbG9naW4tdjIuaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRmV4YW1wbGVzJTJGcHJvamVjdHMuaHRtbCUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0ExODAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE"></script><script nonce="6ebf3c8c-1288-4f82-b932-18a5dbfed263">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="login-page" style="min-height: 466px;">
    
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>Dashboard</a>
        </div>
    <div class="card-body">
        <p class="login-box-msg">Entre com seu usuário e senha</p>
            <form action="/validar-usuario" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuário" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12 p-4">
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </div>
                </div>
            </form>
    </div>
</div>

</body>
</html>