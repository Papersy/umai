<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umai - Anime Recipe Collection</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="#" class="active">Strona Główna</a>
            <a href="{{route('welcome')}}">Przepisy</a>
            <a href="#">Kontakt</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search..." />
            <button class="search-button">🔍</button>
        </div>
    </nav>

    <div class="welcome-banner">
        <div class="mascot-message">
            <p>Hejka!</p>
            <p>Witam w Umai. Tutaj znajdziesz przepisy na desery i wypieki z różnych anime. Wybierz odpowiedni przepis dla siebie i odkryj nowe odckowości!</p>
            <button class="cta-button">Wybierz przepis</button>
        </div>
    </div>

    <section class="recipes-section">
        <h2>Najnowsze Przepisy</h2>
        <div class="recipe-grid">
            <div class="recipe-card">
                <img src="https://placehold.co/300x200" alt="Anmitsu" />
                <h3>Anmitsu</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="recipe-card">
                <img src="https://placehold.co/300x200" alt="Dango" />
                <h3>Dango</h3>
                <p>Excepteur sint occaecat cupidatat non proident</p>
            </div>
            <div class="recipe-card">
                <img src="https://placehold.co/300x200" alt="Taiyaki" />
                <h3>Taiyaki</h3>
                <p>Excepteur sint occaecat cupidatat non proident</p>
            </div>
            <div class="recipe-card">
                <img src="https://placehold.co/300x200" alt="Strawberry Shortcake" />
                <h3>Strawberry Shortcake</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div>
    </section>
</body>
</html>