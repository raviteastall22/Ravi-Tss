@include('layouts.header')
    <main>
        <div class="container scrollspy" id="started-section">
            <div class="section started">
                <div class="card profile">
                    <div class="nav-wrapper ex-t">
                        <div class="center-align">
                            <img class="avatar circle" src="http://localhost/truxai/public/images/logo-1.png" alt="">
                            <p></p>
                        </div>
                    </div>
                    <div class="card-image" style="background-image: url(http://localhost/truxai/public/images/user-profile-bg.jpg);"></div>

                </div>
            </div>
            <div class="section works scrollspy" id="works-section">
                <div class="col s12">
                    <div class="image center-align">
                        <img src="{{ asset('public/images/i-4.png') }}" alt="">
                    </div>
                    <?php  if($message){ ?>
                        <div class="alert"><?= $message; ?></div>
                    <?php } else { ?>
                        <div><a href="{{ route('register') }}">Go to Home Page</a></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('public/js/jquery.min.js.download') }}"></script>
        <script src="{{ asset('public/js/materialize.js.download') }}"></script>
        <script src="{{ asset('public/js/magnific-popup.js.download') }}"></script>
        <!-- Google map api -->
        <script type="text/javascript" src="{{ asset('public/js/js') }}"></script>
        <!-- Main Scripts -->
        <script src="{{ asset('public/js/main.js.download') }}"></script>
       
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        
    </body>
</html>
