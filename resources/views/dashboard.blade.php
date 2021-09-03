<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style id="style"></style>

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
    var xrf = new XMLHttpRequest();
    xrf.onreadystatechange = function(){
      if (xrf.readyState === 4 && xrf.status === 200){
        document.getElementById("style").innerHTML = xrf.responseText;
      }
    }

    xrf.open('GET', 'https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/style.css');
    xrf.send();

  </script>

</body>
</html>