<!DOCTYPE html>
<html>
<title>سامانه آزمون آنلاین | پنل دبیر</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/w3.css" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="/css/ficon/all.css">
<link href="/css/ficon/solid.css" rel="stylesheet">

<script src="sweetalert2.all.min.js"></script>
<script>
function sw()
{
    Swal.fire({
  title: 'هشدا حذف!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
}
    </script>


<link rel="preconnect" href="//fdn.fontcdn.ir"><link rel="preconnect" href="//v1.fontapi.ir"><link href="https://v1.fontapi.ir/css/Sahel" rel="stylesheet">

<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Sahel", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->


        <!-- Right Column -->
        <div class="w3-twothird">

            <div dir="rtl" class="w3-container w3-card w3-white w3-margin-bottom w3-right-align">
                
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-server fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i> آزمون های فعال   </h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>آزمون مقدماتی ریاضیات - پایه دهم</b></h5>
                    <h6 class="w3-text-teal"><i class="fas fa-user fa-fw w3-margin-right"></i> 1400/02/12 <span class="w3-tag w3-teal w3-round">فعال</span></h6>
                    <p>آزمون به صورت چهارگزینه ای و آنلاین است - زمان آزمون 90 دقیقه</p>
                    {{ print_r($Ex) }}
                    <input type="button" class="w3-button w3-teal w3-round w3-hover-green" value="ویرایش آزمون ">
                    <input type="button" class="w3-button w3-red w3-hover-deep-orange w3-round" value="حذف آزمون" onclick="sw()">
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>آزمون مقدماتی فیزیک - پایه دهم</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> 1400/02/12 <span class="w3-tag w3-deep-orange w3-round">منتظر اعلام نتیجه</span></h6>
                    <p>آزمون به صورت چهارگزینه ای و آنلاین است - زمان آزمون 90 دقیقه</p>
                    <hr>
                </div>

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>آزمون مقدماتی شیمی - پایه دهم</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> 1400/02/12 <span class="w3-tag w3-red w3-round">آزمون لغو شد</span></h6>
                    <p>آزمون به صورت چهارگزینه ای و آنلاین است - زمان آزمون 90 دقیقه</p>
                    <hr>
                </div>

            </div>

            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                @if($errors->any())
                <div class="w3-container">
                    <div class="w3-panel w3-yellow w3-border w3-round-large">
                        <h3>Warning</h3>
                        <ul>
                            @foreach($errors -> all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <form action="/teacher" method="post" class="w3-container">
                    @csrf
                    <label>Exam Title</label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" name="title" type="text">

                    <label>Exam Type</label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" name="type" type="text">

                    <label>Number of questions</label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" name="qcount" type="text">

                    <label>Answers</label>
                    <input class="w3-input w3-border w3-round w3-margin-bottom" name="answers" type="text">

                    <input class="w3-button w3-teal w3-hover-blue w3-round" type="submit" value="Send Data to Server">
                </form>

                
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>LiveWire - Laravel</b></h5>
                    @livewireStyles                    
                    @livewire('counter')
                    @livewireScripts
                    <hr>
                </div>

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>LiveWire - Laravel</b></h5>
                    @livewireStyles
                    @livewire('comments')
                    @livewireScripts
                    <hr>
                </div>

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                    <p>Web Development! All I need to know in one place</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>London Business School</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                    <p>Master Degree</p>
                    <hr>
                </div>
                <div class="w3-container">
                
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_3k4nnphs.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>

                    <iframe src="http://aeregister.ir/s">df</iframe>

                    <h5 class="w3-opacity"><b>School of Coding</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                    <p>Bachelor Degree</p><br>
                </div>
            </div>

            <!-- End Right Column -->
        </div>




        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img src="image\avatar_hat.jpg" style="width:100%" alt="Avaftar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2>Jane Doe</h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                    <p>Adobe Photoshop</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                    </div>
                    <p>Photography</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                            <div class="w3-center w3-text-white">80%</div>
                        </div>
                    </div>
                    <p>Illustrator</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                    </div>
                    <p>Media</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                    </div>
                    <br>

                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                    <p>English</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>Spanish</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                    </div>
                    <p>German</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                    </div>
                    <br>
                </div>
            </div><br>

            <!-- End Left Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
    
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-laravel-p w3-hover-opacity"></i>
    <i class="fab fa-500px"></i>
    <i class="fab fa-laravel"></i>
    <i class="fas fa-address-card"></i>
</footer>
</body>
</html>