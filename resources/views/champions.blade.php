@extends('spin')
@section('title_spin')<title>Champions</title>@endsection
@section('spin_title')<h class="title_landing"><center>Champions guides and reviews</center></h>@endsection
@section('guide_init')
<a href="/pyke"><img src="./images/pyke.png" alt="Landing" class="circle"></a>
<a href="/pyke" class="caption"><p class="caption_text">Pyke - carry(sup)</p></a>
@endsection
@section('side_left')<div><img src="./images/gragas.png" alt="Landing" class="med_circle"></div>@endsection
@section('side_right')<div><img src="./images/lux.png" alt="Landing" class="med_circle right_pic"></div>@endsection
<!-- массив данных с названиями и когда нажимаешь на кнопку, то они меняются местами -->