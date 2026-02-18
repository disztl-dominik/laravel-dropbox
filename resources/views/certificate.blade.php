<form method="POST" action="/certificate/generate">
    @csrf
    <select name="animal_id">
        <option value="">-- Állat --</option>
        @foreach($animals as $animal)
            <option value="{{ $animal->id }}">{{ $animal->name }}</option>
        @endforeach
    </select>
    <button type="submit">Generálás</button>
</form>