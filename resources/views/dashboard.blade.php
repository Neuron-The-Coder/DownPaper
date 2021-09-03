<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Free Wallpaper (still on prototyping)">
  <title>Down Paper</title>

  <style id="style">
    {{ $style }}
  </style>

</head>
<body>
  
  <x-nav></x-nav>
  <main>
    <div class="container">

      @foreach ($wallpapers as $i)
        <div class="wallpaper">
          <div class="picture">
            <img src="{{ 'https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/wallpaper/'.$i->image }}" alt="" srcset="" >
          </div>
          <div class="bar">
            <div class="title">
              <h3>{{ $i->name }}</h3>
              <p>{!! $i->description !!}</p>
            </div>
            <div class="buttons">
              <button class="button-enlarge">
                <img src="{{ 'https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/enlarge.svg' }}" alt="" srcset="">
              </button>
              <button class="button-download">
                <img src="{{ 'https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/download.svg' }}" alt="" srcset="">
              </button>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </main>

  <x-footer></x-footer>

  <script defer>
  </script>

</body>
</html>