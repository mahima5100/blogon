<!DOCTYPE html>
<html>

<head>
    <link href=
'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <script src=
'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
    </script>

    <script src=
'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
    </script>

  <link href="{{asset('assect/css/progressbar.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">

					<form id="form">
						<ul id="progressbar">
							<li class="active" id="step1">
								<strong>Step 1</strong>
							</li>
							<li id="step2"><strong>Step 2</strong></li>
							<li id="step3"><strong>Step 3</strong></li>
							<li id="step4"><strong>Step 4</strong></li>
						</ul>
						<div class="progress sticky-top">
							<div class="progress-bar"></div>
						</div> <br>
						<fieldset>
							<h2>Welcome</h2>
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />


                                <img src="{{asset('assect/img/download (19).jpg')}}"  style="width: 70%;  position: relative; background-position: center center; background-size: contain; height:400px; margin-top: 90px; margin-left: 150px;">
                                <div class="box1">
                                    <div class="shade1">
                                        <br><button class="button btn-float-left">LOG-IN</button>
                                        <br><br><br><button class="button btn-float-left">SING-IN</button>
                                        {{-- <div style="text-align: left; font-family: Times New Roman; color: white; margin-top: 190px; margin-left:90px;">
                                             <h1 style="font-size:7vw">
                                             </h1>
                                        </div> --}}
                                </div>
                            </div>
						</fieldset>
						<fieldset>
							<h2>Create</h2>
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Back" />
						</fieldset>
						<fieldset>
							<h2>Add Images</h2>
							<input type="button" name="next-step"
								class="next-step" value="Final Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Back" />
						</fieldset>
						<fieldset>
							<div class="finish">
								<h2 class="text text-center">
									<strong>FINISHED</strong>
								</h2>
							</div>
							<input type="button" name="previous-step"
								class="previous-step"
								value="Back" />
						</fieldset>
					</form>
		</div>
	</div>
</body>
<script src="{{ asset('assect/js/progress.js')}}"></script>
 @yield('content')
</html>
