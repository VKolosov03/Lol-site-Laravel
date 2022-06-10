@extends('layout')
@section('title')<title>Search</title>@endsection
@section('footer_change') 
        @if(gettype($result)!="integer" && count($result)>0)
        <style type="text/css">
            .search{ top: {{(string)(450+count($result)*450)}}px; }
        </style>
        @endif
@endsection
@section('main')  
            <div class="central">
            <form method="post" action="/result">
                @csrf
                @if(gettype($result)!="integer")
                <input type="text" class="search_input" maxlength="60" name="result" id="result" placeholder="{{$searchword}}">
                @else
                <input type="text" class="search_input" maxlength="60" name="result" id="result" placeholder="Guides? News?">
                @endif
                <button class="search_button" >Search</button>
            </form>
            @if(gettype($result)!="integer")
                <h class="title_search">Results: {{count($result)}} found</h>
                <ul class="search_list">
                @foreach($result as $value)
                    <li class="search_item"> 
                        <a href="/{{$value->name}}" class="search_form"><img src="./images/{{$value->name}}.png" alt="Landing" class="search-pic"></a>
                        <a href="/{{$value->name}}" class="search_form"><div class="search_heading">{{$value->title}}</div></a>
                    </li>
                @endforeach
            @endif
            </div>
@endsection
@section('footer')<footer class="footer search">@endsection