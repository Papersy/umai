<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="{{ prepStyle('/style.css') }}">
    <title>Bibliografia - Umai Anime Recipe Collection</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="{{route('index')}}">Strona Główna</a>
            <a href="{{route('recipe')}}">Przepisy</a>
            <a href="{{route('favorites')}}">Ulubione</a>
            <a href="{{route('bibliografia')}}" class="active">Bibliografia</a>
        </div>
        <div class="search-bar">
            <form action="{{ route('recipe') }}" method="GET" style="display: flex;">
                <input type="text" name="search" placeholder="Search..." />
                <button type="submit" class="search-button">🔍</button>
            </form>
        </div>
    </nav>

    <div class="bibliografia-content">
        <h1>Bibliografia</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-brand">Umai</div>
                <div class="footer-text">
                    <p>Jeśli masz jakiekolwiek pytania, nie wahaj się z nami skontaktować.</p>
                    <p>Jesteśmy gotowi odpowiedzieć na wszelkie pytania i zapewnić Państwu niezbędną pomoc.</p>
                </div>
            </div>
            <div class="social-links">
		<a href="https://www.facebook.com/profile.php?id=100056639597769" title="Facebook">📘</a>
                <a href="mailto:katagolubova46@gmail.com" title="Email">📧</a>
                <a href="https://www.instagram.com/_myniceeng__" title="Instagram">📸</a>
                <a href="https://t.me/kittykott" title="Telegram">📬</a>
            </div>
        </div>
    </footer>
</body>
</html>
