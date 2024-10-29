@include('layouts.header')

<section class="services-list">
    <div class="container">
        <h2>Наши Услуги</h2>
        <div class="service-cards">
            @foreach ($services as $service)
            
           
            <div class="service-card">
                <img src="{{$service->image}}" alt="Игровой ПК">
                <h3>{{$service->name}}</h3>
                <p>{{$service->type}}</p>
                <div class="fps-info">
                    <p>{{$service->name}} <span>{{$service->price}} руб. час</span></p>
                    <p>{{$service->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>© 2024 ПК Клуб. Все права защищены.</p>
    </div>
</footer>
</body>
</html>
