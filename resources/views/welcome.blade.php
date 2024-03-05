<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    
    <title>TaskHub</title>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> 

</head>
<style>
 
        body {
        
            background: linear-gradient(to right, #d9b8eb 10%, #9D6CD2 30%, #397d5c 90%);
        }
        .boxx {
            background-color:#ead9f4;  
            display: flex;
            align-items: center;
            justify-content: center;
    width: 800px;
    height: 600px;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
    margin-left: 50px;

        }
        .container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; 
    margin-right: 20px; 
    margin-left: 50px;

  background : repeating-conic-gradient(from var(--a) , #ff2770 0% , #ff2770 5%, transparent 5% , transparent 40% , #ff2770 50%)

}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-right: 40px;
    margin-left: 40px; 
}

    </style>
<body>
<div class="container">
   <div  class="boxx">
     <div>
           <img src="../images/task-management-concept-vector-25812305.png" alt="" style="opacity: 0.6; height:600px; width:390px;    margin-right: 195px; border-radius: 25px;" />
       </div>

   

<form action="{{route('registeruser')}}" class="space-y-6 text-black" style="
background:#ead9f4; margin-right:10px;
" method="post">
@if(Session::has('success'))
<div class="alert alert-secondary" role="alert">
{{Session::get('success')}}
</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-warning" role="alert">
{{Session::get('fail')}}
</div>
@endif
@csrf
<h1 class="text-2xl font-bold ml-auto animate-bounce w-6 h-6" style="color: purple; margin-left:1px;">SignUp
</h1>

<div class=" ">
<i class="fa-solid fa-user" style=" position: absolute;
            top: 35%;
            right: 580px;
            transform: translateY(-50%);
            color: #000;
            margin-left:873px;
            pointer-events: none; color:orange;"></i>
 <input type="text" placeholder="Username"  value="{{old('name')}}" name="name"  class="bg-white bg-opacity-30 rounded-md py-2 px-4 w-full" style="width:300px;"/>
 <span style="color:red;">
@error('name'){{$message}}@enderror </span>

<br>
<br>

   <i class="fa-solid fa-envelope-open"  style=" position: absolute;
   top: 47%;
   right: 580px;
            transform: translateY(-50%);
            color: #000;
            margin-left:873px;
            pointer-events: none; color:orange;"></i>
                   </div>
                   <input type="email" value="{{old('email')}}" placeholder="Email adress" name="email" style="width:300px;" class="bg-white bg-opacity-30 rounded-md py-2 px-4 w-full"/>
                   <span style="color:red;">
@error('email'){{$message}}@enderror </span>
<div>
   <i class="fa-solid fa-lock" style="position: absolute;
            top: 61%;
            right: 580px;
            color: #000;
            margin-left:873px;
            pointer-events: none; color:orange;"></i>
                   </div>
                   <input type="password" value="{{old('password')}}" placeholder="Password"  name="password" style="width:300px;" class="bg-white bg-opacity-30 rounded-md py-2 px-4 w-full"/>
                   <span style="color:red;">
@error('password'){{$message}}@enderror </span>
                   
     
              
    <button class="bg-orange-500 hover:bg-orange-400 font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded transition-transform transform hover:translate-x-1 focus:outline-none animate-move transition-colors duration-300" style="color: white; margin-left: 0px;  cursor: pointer;
    transition: background-color 0.3s ease; width: 300px; background: linear-gradient(to right, #d9b8eb 10%, #9D6CD2 30%, #397d5c 90%);">
  SignUp
</button>
</form>


           
       </div>
       
       </div>
</body>
</html>
