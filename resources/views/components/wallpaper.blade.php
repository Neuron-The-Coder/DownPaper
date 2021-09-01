<div class="wallpaper">
  <div class="picture">
    <img src="{{ asset('storage/wallpaper/'.$image) }}" alt="" srcset="" >
  </div>
  <div class="bar">
    <div class="title">
      <h3>{{ $name }}</h3>
      <p>{!! $description !!}</p>
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