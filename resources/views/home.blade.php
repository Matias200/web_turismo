@extends('layouts.app')

@section('content')

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Made with ❤ by Jorge Epuñan - @csslab">
  
  <title>jQuery Timelinr - Dando vida al tiempo</title>
  {{-- <link rel="stylesheet" href="css/style.css" media="screen" /> --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  {{-- <script src="js/jquery.timelinr-0.9.7.js"></script> --}}
  <script src="{{ asset('js/jquery.timelinr-0.9.7.js') }}"></script>

  <script>
    $(function(){
      $().timelinr({
        arrowKeys: 'true'
      })
    });
  </script>
  
</head>

{{-- <body>
  <section class="content-header">
    <div class="container-fluid">
      <h1>Lista de Eventos</h1>
    </div>
</section>

  <div id="timeline">
    @foreach ($eventos as $evento)
    <ul id="dates">
      <li><a href="#1900">{{ $evento->nombre }}</a></li>
    </ul>

    <ul id="issues">
      <li id="1900">
        <img src="images/1.png" width="256" height="256" />
        <h1>1900</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
    </ul>
    @endforeach
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
  
  <h1>CSSLab.cl - jQuery Timelinr - Horizontal <a href="http://www.csslab.cl/2011/08/18/jquery-timelinr/" title="Volver al artículo original">[Volver/Back]</a></h1>
  <h2>&copy; 2011 CSSLab.cl</h2>

</body> --}}


@endsection