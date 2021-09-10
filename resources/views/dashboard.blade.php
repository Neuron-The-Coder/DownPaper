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
  
  <div class="modal-container" id="display-modal">
    <div class="modal">
      <div class="modal-content" id="modal">
        <div class="modal-header">
          <h2 id="modal-fill-name">{{ $wallpapers[0]->name }}</h2>
          <p id="modal-exit">&times;</p>
        </div>
        <div class="modal-picture">
          <img id="modal-fill-image" src="{{ github_fetch("/wallpaper/".$wallpapers[0]->image) }}" alt="" srcset="">
        </div>
        <div class="modal-description">
          <p id="modal-fill-description">{{ $wallpapers[0]->description }}</p>
        </div>
        <div class="modal-menu">
          <a id="modal-fill-download" href="{{ route('download', ["image" => $wallpapers[0]->image]) }}">
            <button class="modal-download">
              <img src="{{ github_fetch("/download.svg")  }}" alt="" srcset="">
              <div class="modal-download-text">
                <p id="text">Download</p>
                <p id="resolution">Resolution</p>
              </div>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <x-nav></x-nav>

  <main>
    <div class="container">
      @foreach ($wallpapers as $i)
        <div class="wallpaper">
          <div class="picture">
            <img src="{{ github_fetch("/wallpaper/".$i->image) }}" alt="" srcset="">
          </div>
          <div class="bar">
            <div class="title">
              <h3>{{ $i->name }}</h3>
              <p>{!! $i->description !!}</p>
            </div>
            <div class="buttons">
              <button class="button-enlarge" wallpaper_id="{{ $i->id }}">
                <img src="{{ github_fetch("/enlarge.svg")}}" alt="" srcset="" >
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

  {{-- <script>
    // Modal things
    /*
      Logic
      1. Pakek AJAX berdasarkan ID
      2. Display modal
    */
    function backToMain(){
      document.getElementById("display-modal").style.display = "none";
    }

    alls = document.querySelectorAll("main .wallpaper");
    for (let i=0; i<alls.length; i++){
      let el = alls[i].querySelector(".button-enlarge");
      el.addEventListener("click", async function(){
        let name = el.getAttribute("wall_title");
        let data = {
          id : name,
          _token : "{{ csrf_token() }}"
        }

        let ajaxres = await fetch(`{{ route("fetchwallpaper") }}`, {
          method : "POST",
          headers : {
            "Content-Type" : "application/json"
          },
          body : JSON.stringify(data)
        });

        let resultdata = await ajaxres.json();
        console.log(resultdata);

        // LEGGO THE DATAH
        let modal = document.getElementById("modal");
        document.getElementById("modal-fill-name").innerHTML = resultdata.name;
        document.getElementById("modal-fill-image").setAttribute("src", resultdata.image_url);
        document.getElementById("modal-fill-description").innerHTML = resultdata.description;
        document.getElementById("modal-fill-download").setAttribute("href", resultdata.image_download_url);
        
        let tempimg = new Image();
        tempimg.src = resultdata.image_url;
        tempimg.onload = function() {
          document.getElementById("resolution").innerHTML = `${this.width}x${this.height}`;
        };

        document.getElementById("modal-exit").addEventListener('click', backToMain());
        document.getElementById("display-modal").style.display = "block";
      });
    }
  </script> --}}

  <script>

    alls = document.querySelectorAll("main .wallpaper");
    for (let i=0; i<alls.length; i++){
      let el = alls[i].querySelector(".button-enlarge");
      el.addEventListener("click", function(){
        
        resultdata = {
          name : alls[i].querySelector(".bar .title h3").innerHTML,
          description : alls[i].querySelector(".bar .title p").innerHTML,
          image_url : alls[i].querySelector(".picture img").getAttribute("src"),
          image_download_url : alls[i].querySelector(".buttons > a").getAttribute("href")
        }

        // LEGGO THE DATAH
        let modal = document.getElementById("modal");
        document.getElementById("modal-fill-name").innerHTML = resultdata.name;
        document.getElementById("modal-fill-image").setAttribute("src", resultdata.image_url);
        document.getElementById("modal-fill-description").innerHTML = resultdata.description;
        document.getElementById("modal-fill-download").setAttribute("href", resultdata.image_download_url);
        
        let tempimg = new Image();
        tempimg.src = resultdata.image_url;
        tempimg.onload = function() {
          document.getElementById("resolution").innerHTML = `${this.width}x${this.height}`;
        };

        document.getElementById("modal-exit").addEventListener('click', function() {
          document.getElementById("display-modal").style.display = "none";
          document.querySelector("body").style.overflowY = "auto";
        });

        document.getElementById("display-modal").style.display = "block";
        document.querySelector("body").style.overflowY = "hidden";
      });
    }

    window.addEventListener("click", function(e){
      console.log(e.target);
      if (e.target == document.getElementById("display-modal")){
        document.getElementById("display-modal").style.display = "none";
        document.querySelector("body").style.overflowY = "auto";
      }
    });
  </script>

</body>
</html>