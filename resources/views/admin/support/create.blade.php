<h1>Criar support</h1>
<a href="{{route('support.index')}}">index</a>

<form action="{{ route('support.store')}}" method="POST">
  {{-- <input type="hidden" name="" id="" value="{{csrf_token()}}" name="_token"> --}}
  @csrf()
  <input type="text" name="subject" id="" placeholder="Assunto">
  <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição"></textarea>
  <button type="submit">Enviar</button>
</form>