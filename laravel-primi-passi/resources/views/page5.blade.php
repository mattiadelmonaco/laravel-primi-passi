<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi con Laravel</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">HomePage</a>
                </li>
                <li>
                    <a href="{{ route('page-2') }}">Pagina 2</a>
                </li>
                <li>
                    <a href="{{ route('page-3') }}">Pagina 3</a>
                </li>
                <li>
                    <a href="{{ route('page-4') }}">Pagina 4</a>
                </li>
                <li>
                    <a href="{{ route('page-5') }}">Pagina 5</a>
                </li>
            </ul>
        </nav>
</header>

<main>
    <h1>Pagina 5</h1>
    <img src="https://www.coloradisegni.it/images/disegni/lettere-e-numeri/numero-5-cinque-corsivo.png" alt="immagine pagina 5" height="200">
</main>
    
</body>
</html>