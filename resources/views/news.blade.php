@extends('layout')
@section('title')<title>News</title>@endsection
@section('main') 
            <h class="title_landing"><center>Latest League of Legends news</center></h> 
            <div class="central">
            <hr class="line headline">
            <ul class="news_list">
                <li class="news_item">
                    <a href="/error" class="news_link">
                        <h class="news_heading">New champion out of Void</h>
                        <img src="./images/newchamp.png" alt="Landing" class="news-pic">
                        <p class="news_text">Riot dropped info about new champion in<br>April. It might be Rek’Sai’s enemy and also<br>might be pretty similar...</p>
                        <p class="news_data">12.03.22</p>
                    </a>
                    <hr class="line">
                </li>
                <li class="news_item">
                    <a href="/error" class="news_link">
                        <h class="news_heading">LCL has been stopped </h>
                        <img src="./images/lcl.png" alt="Landing" class="news-pic">
                        <p class="news_text">League of Legends Continental League<br>was pre-suspended due to Russian<br>military incursion into the territory of...</p>
                        <p class="news_data">24.02.22</p>
                    </a>
                    <hr class="line">
                </li>
                <li class="news_item">
                    <a href="/error" class="news_link">
                        <h class="news_heading">Season 12 is here</h>
                        <img src="./images/season12.png" alt="Landing" class="news-pic">
                        <p class="news_text">Today Riot  updated LoL to patch 12.1 with<br>new rank system, another banch of buffs<br>and nerfs and obviously with new pack...</p>
                        <p class="news_data">12.01.22</p>
                    </a>
                    <hr class="line">
                </li>
            </ul>
        </div>
@endsection
@section('footer')<footer class="footer news">@endsection