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
    <h1>Pagina 3</h1>
    <img src="https://images.unsplash.com/photo-1556917452-890eed890648?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bnVtZXJvJTIwM3xlbnwwfHwwfHx8MA%3D%3D" alt="immagine pagina 3" width="300">
</main>
    
</body>
</html>