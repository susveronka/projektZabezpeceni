<!DOCTYPE html>
<html>
<head>
    <title>.</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main class="container py-5">
        <h1 class="mb-4">Formulář</h1>

        <form>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="login" placeholder="login" required>
                        <label for="login">Login</label>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Heslo</label>
                    </div>
                </div>


                    <button type="submit" class="bs-primary">Přihlásit</button>
                </div>
            </div>
        </form>
    </main>
</html>
