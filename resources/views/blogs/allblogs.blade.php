<!DOCTYPE html>
<html lang="en">

<head>
<style>
    .shade {
            width: 1366px;
            height: 469px;
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
        }

        .box {
            width: 1250px;
            height: 25px;
        }
</style>
  <title>BloggOn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <div class="coverimg">
    @include('blogs.header')

    @section('content')
    @stop
                <img src="{{asset('assect/img/Untitled Project (78).jpg')}}"  style="width: 100%;  position: relative; background-position: left left; background-size: contain;
                height:500px; margin-top: -8rem !important;">
            <div class="box">
                <div class="shade">
                    <div style="text-align: left; font-family: Times New Roman; color: white; margin-top: 190px; margin-left:90px;">
                        <h1 style="font-size:7vw">Blogs you might like here
                        </h1>
                    </div>
            </div>
        </div>
    </div>

</head>
<body>


</body>
</html>
