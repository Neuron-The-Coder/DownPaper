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
        <x-wallpaper :wallpaper="$i"></x-wallpaper>
      @endforeach


    </div>
  </main>

  <x-footer></x-footer>

</body>
</html>