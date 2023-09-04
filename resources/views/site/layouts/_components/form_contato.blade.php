{{ $slot }}

<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        
        @foreach ($motivos_contato as $key => $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contato') == $motivo->id ? 'selected' : '' }}>{{ $motivo->motivo_contato }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">{{ (!empty(old('mensagem'))) ? old('mensagem') : '' }}</textarea>
    <br>
    <button type="submit" value="{{ old('submit') }}" class="{{ $classe }}">ENVIAR</button>
</form>