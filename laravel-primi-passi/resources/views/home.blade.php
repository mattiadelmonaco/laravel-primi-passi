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
    <h1>HomePage</h1>
    <img src="https://cdn.pixabay.com/photo/2016/02/08/11/24/homepage-1186348_1280.jpg" alt="immagine Homepage" width="300">
</main>
    
</body>
</html>