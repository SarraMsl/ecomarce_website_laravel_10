<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('admin/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!-- loader-->
    <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet">
    <title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-lock-screen">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
            <div class="card shadow-none bg-transparent">
                <div class="card-body p-md-5 text-center">
                    <h2 id="time" class="text-white"></h2>
                    <h5 id="date" class="text-white"></h5>
                    <div class="">
                        <img src="{{asset('admin/assets/images/icons/user.png')}}" class="mt-5" width="120" alt="" />
                    </div>
                    <p class="mt-2 text-white">Administrator</p>
                    <form class="row g-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 mt-3">
                            <input type="hidden" name="email" value="admindeaca@gmail.com" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-white">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

    <script>
        // Update time and date dynamically
        function updateTime() {
            var now = new Date();
            var timeElement = document.getElementById('time');
            var dateElement = document.getElementById('date');

            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            var dateString = now.toDateString();

            timeElement.innerText = timeString;
            dateElement.innerText = dateString;
        }

        // Update time every second
        setInterval(updateTime, 1000);
    </script>
</body>
</html>
