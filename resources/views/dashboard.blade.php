<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="{{ asset("storage/style.css") }}">

</head>
<body>
  
  <x-nav></x-nav>
  <main>
    <div class="container">

      @foreach ($wallpapers as $i)
        <div class="wallpaper">
          <div class="picture">
            <img src="{{ asset('storage/wallpaper/'.$i->image) }}" alt="" srcset="" >
          </div>
          <div class="bar">
            <div class="title">
              <h3>{{ $i->name }}</h3>
              <p>{!! $i->description !!}</p>
            </div>
            <div class="buttons">
              <button class="button-enlarge">
                <img src="{{ asset("storage/enlarge.svg") }}" alt="" srcset="">
              </button>
              <button class="button-download">
                <img src="{{ asset("storage/download.svg") }}" alt="" srcset="">
              </button>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </main>

  <x-footer></x-footer>

</body>
</html>