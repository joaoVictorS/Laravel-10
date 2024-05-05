<h1>Detalhes da duvida {{$support->id}}</h1>
<a href="{{route('support.index')}}">Voltar</a>
<ul>
  <li>Assunto: {{$support->subject}}</li>
  <li>Conteudo: {{$support->body}}</li>
  <li>Status: {{$support->status}}</li>
</ul>

<form action="{{route('support.destroy',$support->id)}}" method="POST">
  @csrf()
  @method('DELETE')
  <button type="submit">Deletar</button>
</form>