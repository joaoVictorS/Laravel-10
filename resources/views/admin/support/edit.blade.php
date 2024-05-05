<h1>Duvida {{$support->id}}</h1>
<a href="{{route('support.index')}}">index</a>

<form action="{{ route('support.update', $support->id)}}" method="POST">
  {{-- <input type="hidden" name="" id="" value="{{csrf_token()}}" name="_token"> --}}
  @csrf()
  @method('PUT')
  <input type="text" name="subject" id="" placeholder="Assunto" value="{{$support->subject}}">
  <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição" >{{$support->body}}</textarea>
  <button type="submit">Enviar</button>
</form>