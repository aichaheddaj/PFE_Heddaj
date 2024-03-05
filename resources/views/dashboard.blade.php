<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
    @vite('resources/css/style.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <!-- container start -->
    <div class="container">
        <!-- left start -->
        <div class="left">
            <!-- header start -->
            <header>
                <!-- logo start -->
                <div class="logo">
                    <div class="close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
                <!-- nav start -->
                <nav>
                <img src="../images/logo.jpg" alt="" height="60px" width="60px" style="position: relative; top: -10px; left: 40px;">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined full" style="color:#1e6847;">
                                    dashboard
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('piegraphe')}}">
                                <span class="material-symbols-outlined" style="color:#1e6847;">
                                    pie_chart
                                </span>
                                <span class="title">Pie Chart</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('linegraphe')}}">
                                <span class="material-symbols-outlined" style="color:#1e6847;">
                                stacked_line_chart

                                </span>
                                <span class="title">Line Chart</span>
                            </a>
                        </li>
                        <li>
                        <router-link to="/tasks" class="nav-link">
                        <a href="{{route('tache')}}">
        <span class="material-symbols-outlined" style="color:#1e6847;">task</span>
        <span class="title">My Task</span>
    </a>
</router-link>



                           
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined" style="color:#1e6847;">
                                    chat_bubble
                                </span>
                                <span class="title">Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="material-symbols-outlined" style="color:#1e6847;">
                            calendar_today</span>

                                <span class="title">Calendar</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- nav end -->
            </header>
            <!-- header end -->
            <!-- upgrade start -->
       
            <!-- upgrade end -->
        </div>
        <!-- left end -->
        <!-- right start -->
        <div class="right">
            <!-- top start -->
            <div class="top">
                <!-- searchBx start -->
                <div class="searchBx" style="display: flex;
            align-items: center; ">
                <img src="../images/logo.jpg" alt="" height="40px" width="40px" style="position: relative; top: -10px; left: 40px;">

                     <h1 style="      margin-left: 43px;       background: linear-gradient(to right, #8a2be2, #20B2AA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;">TaskHub</h1>
                  
                </div>
                <!-- searchBx end -->
                <!-- user start -->
                <div class="user">
                    <span class="material-symbols-outlined" style="color:#FFA500;">
                        notifications
                    </span>
                    <div class="userImg">
                    <span class="material-symbols-outlined">
                        account_circle
                        </span>
                    </div>
                    <h2>User<br></h2>
                    <div class="arrow">
                        <span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </div>
                    <div class="toggle">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
                <!-- user end -->
            </div>
            <!-- top end -->
            <!-- main start -->
            <main>
                <!-- projectCard start -->
                
            </main>
            <!-- main end -->
        </div>
        <!-- right end -->
    </div>
    <!-- container end -->
        <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>