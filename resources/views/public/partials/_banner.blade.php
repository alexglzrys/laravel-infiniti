<section class="banner">
    <div class="banner__container">
        <div class="banner__form">
            <h2 class="banner__slogan">MOMENTOS <span class="banner__model">QX INFINIT</span></h2>
            @if(session('success'))
                <div class="banner__message">{!! session('success') !!}</div>
            @elseif(session('error'))
                <div class="banner__message banner__message--error">{!! session('error') !!}</div>
            @else
                @include('public.partials._form')
            @endif
        </div>
        <div class="banner__image">
        </div>
    </div>
</section>
