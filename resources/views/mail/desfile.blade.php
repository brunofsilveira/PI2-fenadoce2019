<h3>Convite Desfile: Rainha da Fenadoce</h3>
<h4>Na próxima quinta-feira, dia 23/05/2019, ocorrerá um desfile no Clube Comercial</h4>
<h4>Sua presença é muito importante</h4>
<h4>Candidata: {{ $candidata->nome }}</h4>
<h4>Representante do Clube: {{ $candidata->clube }}</h4>
<img src="{{ $message->embed(public_path('storage/' . $candidata->foto)) }}">