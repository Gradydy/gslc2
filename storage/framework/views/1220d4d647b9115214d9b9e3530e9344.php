<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Cuma buat nugas jangan di push ke git -->
    <title>Tugas bro</title>
  </head>
  <script src="jgn-push.js"></script>
  <body>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
            <div class="text-center mt-3">
                    <h5 class="mt-2 mb-0">Search orang menggunakan Else if</h5>
                    <span>Pilih salah satu</span>
            </div>
            <div class="text-center">
                <img src="../img/ken_2.jpg" width="100" height="100" class="rounded-circle"  alt="">
                <img src="../img/gred_2.png" width="100" height="100" class="rounded-circle"  alt="">
                <img src="../img/ivo_2.jpg" width="100" height="100" class="rounded-circle"  alt="">
            </div>
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="isi" placeholder="Ivo/Kenzio/Grady">
              </div>
              <button id="caribtn" class="btn btn-primary">Cari</button>
              <script>
                  const caribtn = document.getElementById("caribtn");
                  const isi = document.getElementById("isi")

                  if(isi = "Kenzio"){
                    document.body.innerHTML = "<h5>halo bang apa kabar</h5>";
                  }
                  else if(caribtn = "Grady"){
                    document.getElementById('caribtn').onclick = function() {
                        location.href = "http://google.nl";
                    }
                  }
                  else{
                    document.getElementById('button').onclick = function() {
                      document.body.innerHTML = "<h5>halo bang apa kabar</h5>";
                    }
                  }
                
                
              </script>
                <h5>halo bang apa kabar</h5>

            </form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <style>

a{ text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }

body{
        /* background-image: url("../img/bg_gred.gif"); */
    background-color: black;
    background-size: 100% 100%;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button{
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

</style>
</html>
<?php /**PATH C:\Folder kuliah\tugas profiling\profile_webprog\resources\views/JGN-DI-PUSH.blade.php ENDPATH**/ ?>