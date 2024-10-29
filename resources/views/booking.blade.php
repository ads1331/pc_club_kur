@include('layouts.header')

<section class="booking-section">
    <div class="container">
        <h2>Запись на Услугу</h2>
        <form id="booking-form" method="POST" action="{{ route('booking.submit') }}">
            @csrf

            <div class="form-group">
                <label for="service-type">Тип услуги:</label>
                <select id="service-type" name="service_id" required>
                    <option value="" disabled selected>Выберите услугу</option>
                    @foreach($services as $service)
                        <option value="{{ $service->service_id }}" data-price="{{ $service->price }}">
                            {{ $service->name }} ({{ $service->price }} руб./час)
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Дата:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="hours">Количество часов:</label>
                <input type="number" id="hours" name="hours" required min="1" placeholder="Введите количество часов">
            </div>

            <div class="form-group">
                <label for="time">Время:</label>
                <input type="time" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="total-price" color:white>Итого:</label>
                <input type="text" id="total-price" name="total_price" readonly value="0" style="border: none; background: transparent; color: white;">
            </div>

            <button type="submit">Записаться</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>© 2024 ПК Клуб. Все права защищены.</p>
    </div>
</footer>

<script>
    const serviceTypeSelect = document.getElementById('service-type');
    const hoursInput = document.getElementById('hours');
    const totalPriceInput = document.getElementById('total-price');

    function updatePrice() {
        const selectedOption = serviceTypeSelect.options[serviceTypeSelect.selectedIndex];
        const pricePerHour = parseFloat(selectedOption.getAttribute('data-price')) || 0;
        const hours = parseInt(hoursInput.value) || 0;
        const totalPrice = pricePerHour * hours;

        totalPriceInput.value = totalPrice.toFixed(2) + ' руб.';
    }

    serviceTypeSelect.addEventListener('change', updatePrice);
    hoursInput.addEventListener('input', updatePrice);
</script>

</body>
</html>
