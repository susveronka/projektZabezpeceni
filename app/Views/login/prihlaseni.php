
<html>
<head>
    <meta charset="utf-8">
    <title>Přihlášení</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <link href=" node_modules\@fortawesome\fontawesome-free\css\all.min.css" rel="stylesheet" />
    
    

</head>
<body>
    <main class="container py-5">
        <h1 class="mb-4">Přihlásit se</h1>

            <form method="post" action="<?= site_url('login/prihlaseniPost') ?>">
                <?= csrf_field() ?>
                <div class="row g-3">
                 <div class="input-group mb-3">

<span class="input-group-text"><i class="fa-regular fa-user"></i></span>
    <div class="form-floating">       
        <input class="form-control" type="text" name="login" id="login" placeholder="a"/>
        <label for="login" class="form-label">Přihlašovací jméno</label>
    </div>
</div>

<div class="input-group mb-3">
                 <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
    <div class="form-floating">       
        <input class="form-control" type="password" name="password" id="password" placeholder="a"/>
        <label for="password" class="form-label">Heslo</label>
    </div>
</div>


                    <div class="col-md-12">
                        <button type="submit" class="bs-primary">Přihlásit</button>
                    </div>
                </div>
            </form>
       
    </main>
</body>
</html>
