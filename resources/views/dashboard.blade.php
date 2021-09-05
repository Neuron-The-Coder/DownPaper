<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Free Kartrider Wallpaper for you all :>">
  <title>Down Paper</title>

  <style id="style">
    {{ github_fetch_content("/style.css") }}
  </style>

  {{-- <link rel="stylesheet" href="{{ asset("storage/style.css") }}"> --}}
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
  
  <x-nav></x-nav>
  <main>
    <div class="container">

      @foreach ($wallpapers as $i)
        <div class="wallpaper">
          <div class="picture">
            <img src="{{ github_fetch("/wallpaper/".$i->image) }}" alt="" srcset="" >
          </div>
          <div class="bar">
            <div class="title">
              <h3>{{ $i->name }}</h3>
              <p>{!! $i->description !!}</p>
            </div>
            <div class="buttons">
              <button class="button-enlarge">
                <img src="{{ github_fetch("/enlarge.svg")  }}" alt="" srcset="">
              </button>
              <a href="{{ route('download', ["image" => $i->image]) }}">
                <button class="button-download">
                  <img src="{{ github_fetch("/download.svg")  }}" alt="" srcset="">
                </button>
              </a>
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