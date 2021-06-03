<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Final Task</title>

   <!-- Bootstrap For Layout -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   <!-- Icons -->
   <script defer src="https://kit.fontawesome.com/819485ee32.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/solid.min.css">

   <!-- JQuery Buat SPA -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
   <!-- My CSS -->
   <link href="assets/style.css" rel="stylesheet" />
</head>
<body class="font-app">

   <!-- Sidebar -->
   <div id="mySidebar" class="left-menu">
      <a href="javascript:void(0)" class="close-btn" onclick="closeSide()">×</a>
      <a href="/FINAL"><i class="fas fa-home mx-2"></i>Home</a>
         <a class="clicked" id="task-1" onclick="closeSide()"><i class="fas fa-thumbtack mx-2"></i>Task 1 <span class="badge bg-success"><i class="fas fa-check"></i></span> </a>
         <a class="clicked" id="task-2" onclick="closeSide()"><i class="fas fa-thumbtack mx-2"></i>Task 2 <span class="badge bg-success"><i class="fas fa-check"></i></span> </a>
         <a class="clicked" id="task-3" onclick="closeSide()"><i class="fas fa-thumbtack mx-2"></i>Task 3 <span class="badge bg-success"><i class="fas fa-check"></i></span> </a>
         <a class="clicked" id="task-4" onclick="closeSide()"><i class="fas fa-thumbtack mx-2"></i>Task 4 <span class="badge bg-success"><i class="fas fa-check"></i></span> </a>
         <a href="https://github.com/elcodee/Final-Task-Dumbways/tree/master/CRUD"><i class="fas fa-thumbtack mx-2"></i>CRUD <span class="badge bg-primary"><i class="fas fa-spinner"></i></span> </a>
    </div>

    <div id="main">
       <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-secondary animate__animated animate__bounceInDown">
         <div class="container-fluid">
           <button class="navbar-toggler bg-blue-400" type="button" onclick="openSide()">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item px-2 py-2">
                  <button type="button" class="btn btn-outline-dark text-light" onclick="openSide()"><i class="fas fa-bars"></i>&nbsp; Menu</button>
               </li>
            </ul>
            <span class="navbar-text">
               <!-- <a href="/login" class="btn btn-outline-info text-white">Login</a> -->
            </span>
           </div>
         </div>
       </nav>

      <!-- Content -->
      <div class="container">
         <div class="content py-4">
      </div>

    </div>
</body>
<script>
   const openSide = () => {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
   }
   
   const closeSide = () => {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
   }


   $(document).ready(function(){
		$('.clicked').click(function(){
			let menu = $(this).attr('id');
			if(menu == "task-1"){
				$('.content').load('1.php');						
			}else if(menu == "task-2"){
				$('.content').load('2.php');						
			}else if(menu == "task-3"){
				$('.content').load('3.php');						
			}else if(menu == "task-4"){
				$('.content').load('4.php');						
			}
		});
 
		// ngeload halaman pertama
		$('.content').load('home.php');						
 
	});
</script>
</html>
