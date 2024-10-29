@include('layouts.header')

<section class="games-list">
        <div class="container">
            <h2>Наши Игры</h2>
            <div class="game-cards">
                @foreach ($games as $game)
                
                
                <div class="game-card">
                    <img src="{{$game->image_url}}" alt="{{$game->title}}">
                    <h3>{{$game->title}}</h3>
                    <div class="fps-info">
                        <p>ПК Стандарт: <span>{{$game->fps_standard}}</span></p>
                        <p>ПК Премиум: <span>{{$game->fps_premium}}</span></p>
                        <p>ПК VIP: <span>{{$game->fps_vip}}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer >
        <div class="container">
            <p>© 2024 ПК Клуб. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>