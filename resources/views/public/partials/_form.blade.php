<form action="{{ route('home.register') }}" method="POST" class="form">
    @csrf
    <div class="form__group">
        <input type="text" name="name" class="form__input" placeholder="NOMBRE COMPLETO" value="{{ old('name') }}" required>
        @error('name')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__group">
        <input type="email" name="email" class="form__input" placeholder="EMAIL" value="{{ old('email') }}" required>
        @error('email')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__group">
        <input type="text" name="phone" class="form__input" placeholder="TELÉFONO" value="{{ old('phone') }}" required>
        @error('phone')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__group">
        <select name="agency" class="form__input" required>
            <option value="">AGENCIA</option>
            @foreach ($agencies as $agency)
                <option value="{{ $agency->id }}" {{ old('agency') == $agency->id ? 'selected' : '' }}>{{ $agency->name }}</option>
            @endforeach
        </select>
        @error('agency')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__group">
        <input type="checkbox" class="form__check" id="form__check" name="terms_and_conditions" value="1" {{ old('terms_and_conditions') == '1' ? 'checked' : ''}}>
        <label class="form__label" for="form__check">Acepto términos y condiciones en infiniti.com</label>
    </div>
    <button type="submit" class="form__button">REGÍSTRATE</button>
</form>
