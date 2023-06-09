<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
</head>
<style>

a{ text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }

body{
        background-image: url("../img/bg_gred.gif");
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
<body>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                <img src="../img/gred_2.png" width="100" class="rounded-circle"  alt="">
                </div>
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">Undergraduate</span>
                    <h5 class="mt-2 mb-0">Grady Simanjaya</h5>
                    <span>Bina Nusantara University</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">Hello, i'm Grady. Right now, i'm undergraduate student in Bina Nusantara University, majoring in computer science and statistics. I'm like to learn about Machine Learning especially Deep learning. My birth day is on 20 february 2002. it means i'm 21 years old. As the 6th semester student i like to focus on my study more than being a social butterfly.</p>
                    
                    </div>

                    <h5>SKILLS</h5>
                     <ul class="social-list">
                        <li>Python</li>
                        <li>||</li>
                        <li>C</li>
                        <li>||</li>
                        <li>Java</li>
                    </ul>

                    <h5>Hobbies</h5>
                     <ul class="social-list">
                        <li>Listening to music</li>
                        <li>||</li>
                        <li>Reading Book</li>
                        <li>||</li>
                        <li>Gym</li>
                    </ul>
                    <?php if($nim_grady == 0): ?>
                        <div class="text center mt2 mb2">NIM belum dimasukan</div>
                    <?php elseif($nim_grady != 0): ?>
                        <div class="text center mt2 mb2">NIM Sudah Dimasukan</div>
                    <?php endif; ?>
                    <div class="buttons"> 
                        <button class="btn btn-outline-primary px-4" ><a href="ivo">Ivo</a></button>
                        <button class="btn btn-outline-primary px-4" ><a href="kenzio">Kenzio</a></button>
                        <button class="btn btn-outline-primary px-4" ><a href="../">Home</a></button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
</body>
</html><?php /**PATH C:\Folder kuliah\tugas profiling\profile_webprog\resources\views/profile/grady.blade.php ENDPATH**/ ?>