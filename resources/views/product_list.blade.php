@extends('layouts.app')
@section('content')
<a href="/catalog/sort/name/asc">название вверх</a>
<a href="/catalog/sort/name/desc">название низ</a>

<div>Фильтр</div>
<div>
    @foreach ($cat as $obCat )


    <div><a href="/catalog/filtr/{{$obCat->id}}">{{$obCat->name}}</a></div>
    @endforeach

</div>
<div class='list'>

    @foreach ($products as $obProduct )
    <div class="item">
        <div class="title">
         <a href="/catalog/{{$obProduct->id}}"> {{$obProduct->name}}</a>
        </div>
        <div class="price">
            {{$obProduct->year}}
        </div>
    </div>
    @endforeach

</div>
@endsection
