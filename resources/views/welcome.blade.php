@extends('layout')
@section('title')<title>LoL-guides</title>@endsection
@section('main')   
            <h class="title_landing"><center>Educational articles about<br>League of Legens</center></h>
            <div class="central">
            <ul class="main_list">
                <li class="main_item">
                    <a href="/micro" class="rec">
                        <h class="micro_champs_heading">Learn basic game<br>mechanics.</h>
                        <img src="./images/micro.png" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">These guides will help you to learn<br>more about the basic mechanics<br>of the game, such as the roles and<br>responsibilities of the players, the<br>value of the items and what their<br>purpose, additional abilities,<br>comeback system and so on.</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="/macro" class="rec">
                        <h class="macro_heading">Start dealing with<br>macro.</h>
                        <img src="./images/macro.png" alt="Landing" class="macro-pic">
                        <p class="macro_text">Since LoL is a strategy, sooner or<br>later you’ll need something more<br>than the right keystroke. This block<br>and its guides are created to<br>understand and anticipate the<br>actions of the opponent’s team<br>and even more.</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="/champions" class="rec">
                        <h class="micro_champs_heading">Explore champions<br>with us.</h>
                        <img src="./images/champions.png" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">Since LoL is a strategy, sooner or<br>later you’ll need something more<br>than the right keystroke. This block<br>and its guides are created to<br>understand and anticipate the<br>actions of the opponent’s team<br>and even more.</p>
                    </a>
                </li>

            </ul>
    
            </div>
@endsection
@section('footer')<footer class="footer landing">@endsection