<section class="agencies">
    <div class="agencies__container">
        <h4 class="section-title">Nuestras Agencias</h4>
        @forelse($agencies as $agency)
            <article class="agency">
                <a href="{{ route('home.customers', $agency) }}" class="agency__link">
                    <span class="agency__title">{{ $agency->name}}</span></a>
            </article>
        @empty
            <p>Estimado usuario. <br>No hay agencias registradas en el sistema, favor de verificar mas tarde.</p>
        @endforelse

    </div>
</section>
