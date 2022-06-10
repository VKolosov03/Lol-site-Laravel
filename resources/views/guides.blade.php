@extends('layout')
@section('title')<title>Guides</title>@endsection
@section('footer_change') 
        @if(count($reply)>0)
        <style type="text/css">
            .guides{ top: {{(string)(3150+count($reply)*175)}}px; }
        </style>
        @endif
@endsection
@section('main')
            <div class="central">
                <h class="title_landing"><center>{{$guide->title}}</center></h>
                <div><img src="./images/{{$guide->name}}.png" alt="Landing" class="guide-pic1"></div>
                <p class="guide_text1">{{$guide->first_paragraph}}</p>
                <p class="guide_text2">{!!$guide->second_paragraph!!}</p>
                <p class="guide_text3">{{$guide->third_paragraph}}</p>
                <div><img src="./images/{{$guide->name}}2.png" alt="Landing" class="guide-pic2"></div>
                <form method="post" action="{{$guide->name}}/reply">
                    @csrf
                    <input type="text" class="comment_input" minlength="3" maxlength="140" name="comment" id="comment" placeholder="Leave your comment here">
                    <button type="submit" class="comment_button" >Reply</button>
                </form>
                @if(count($reply) > 0)
                    <p class="comment_title">Comments:</p>
                    <ul class="comment_list">
                    @foreach($reply as $value)
                        <li class="comment_item"> <section class="comment_section">
                        <hr class="comment_line">
                        <p class="comment_name">Stranger</p> 
                        <p class="comment_context">{{$value->context}}</p>  
                        </section></li>
                    @endforeach
                    <li class="comment_item"><section class="comment_section">
                    <hr class="comment_line">'
                    </section></li>
                    </ul>
                @endif
            </div>
@endsection
@section('footer')<footer class="footer guides">@endsection