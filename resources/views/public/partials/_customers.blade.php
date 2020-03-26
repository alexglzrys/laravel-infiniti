<section class="customers">
    <div class="customers__container">
        <h4 class="section-title">Clientes - Agencia {{ $agency->name }}</h4>
        @forelse ($agency->customers as $customer)
            <article class="customer">
                {{-- Solicitar una imagen aleatoria para el cliente con base en su id --}}
                <img src="{{ 'https://randomuser.me/api/portraits/med/men/'. $customer->id .'.jpg' }}" alt="" class="customer__img">
                <ul class="customer__information">
                    <li class="customer__item">{{ $customer->name }}</li>
                    {{-- Si el cliente no aceptó los términos y condiciones del servicio (registro), no se muestra su información de contacto --}}
                    @if($customer->terms_and_conditions)
                        <li class="customer__item customer__item--phone">
                            <a href="https://wa.me/521{{ $customer->information->phone }}" class="customer__link">{{ $customer->information->phone }}</a>
                        </li>
                        <li class="customer__item customer__item--email">
                            <a href="mailto:{{$customer->information->email}}" class="customer__link">{{ $customer->information->email }}</a>
                        </li>
                    @else
                        <li class="customer__item customer__item--info">El usuario no ha aceptado los términos y condiciones.</li>
                    @endif
                </ul>
            </article>
        @empty
            <p>Estimado usuario.<br>No hay clientes registrados con esta agencia.</p>
        @endforelse
    </div>
</section>
