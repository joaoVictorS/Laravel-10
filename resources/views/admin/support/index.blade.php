<h1>Listagem dos suportes</h1>

<a href="{{route('support.create')}}">Criar duvida</a>

<table>
  <thead>
    <th>Assuntos</th>
    <th>Status</th>
    <th>Descrição</th>
    <th>Ações</th>
  </thead>
  @foreach ($supports as $support)
    <tr>
      <td>{{$support->subject}}</td>
      <td>{{$support->status}}</td>
      <td>{{$support->body}}</td>
      <td>
        <a href="{{route('support.show', $support->id)}}">Ir</a>
        <a href="{{route('support.edit', $support->id)}}">Editar</a>
      </td>
    </tr>
  @endforeach
</table>
