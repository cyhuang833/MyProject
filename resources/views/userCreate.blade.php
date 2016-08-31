<html lang="en">
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>


    <title>Relay2 Login</title>
    <link href="{{ URL::asset('css/my.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("img/stardust.png");
        }
    </style>
    {{--<script src="{{URL:asset('js/my.js'); }}"></script>--}}
    <script src="http://laravel.example.com/js/my.js"></script>

</head>
<body>

<div class="text-center" style="padding:50px 0">
    <div class="logo">login</div>
    <!-- Main Form -->
    <div class="login-form-1">
    <?php
    echo Form::open(array('url' => 'create', 'id' => 'login-form', 'class' => 'text-left'));
    ?>
    <!--        <form id="login-form" class="text-left"  url="create" method="post">-->


        <div class="login-form-main-message"></div>
        <div class="main-login-form">
            <div class="login-group">
                <div class="form-group">
                    <label for="lg_useraccount" class="sr-only"></label>
                    <input type="text" class="form-control" id="lg_useraccount" name="userAccount"
                           placeholder="Account">
                </div>
                <div class="form-group">
                    <label for="lg_username" class="sr-only"></label>
                    <input type="text" class="form-control" id="lg_username" name="userName"
                           placeholder="Name">
                </div>
                <div>
                    <label for="lg_branch" class="sr-only"></label>
                    <select id="lg_branch" name="branch" form="login-form">
                        <option value='' disabled selected>Branch</option>
                        <option value='台中-6666'>Taipei</option>
                        <option value='台南-7777'>Taichung</option>
                        <option value='高雄-8888'>Kaoxiong</option>
                    </select>
                </div>

            </div>
            <input type="hidden" class="form-control" name="uamip" value=<?php echo $_GET['uamip'];?> >
            <input type="hidden" class="form-control" name="uamport" value=<?php echo $_GET['uamport'];?> >
            <input type="hidden" class="form-control" name="challenge" value=<?php echo $_GET['challenge'];?> >
            <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="etc-login-form">
            <p>new user? <a href="#">create new account</a></p>
        </div>
        <!--        </form>-->
        <?php
        echo Form::close();
        ?>
    </div>
    <!-- end:Main Form -->
</div>

</body>
</html>
<!---->
<?php
//
//echo Form::open(array('url' => 'create'));
//
//echo '<h3> User Name</h3>';
//echo Form::text('userName');//this is the name to access the DATA
//
//echo '<h3> User Account</h3>';
//echo Form::text('userAccount');
//
//echo '<h3> Branch</h3>';
//echo Form::select('branch', array('台北-1234' => 'Taipei', '台南-5678' => 'Tainan'));
//
//echo '<br/>';
//echo Form::submit('Click Me!');
//echo Form::close();
//?>