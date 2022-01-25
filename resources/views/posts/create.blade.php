@extends('layouts.app')

@section('content')
<form action="/posts/store" method="POST">
    @csrf
    <input type="text" name="title" pleaceholder="Título"><br>
    <textarea name="content" rows="3" pleaceholder="Conteúdo"></textarea><br>
    <button type="submit">Publicar</button>
</form>
@endsection