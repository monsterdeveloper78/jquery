<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
            crossorigin="anonymous"
    >

    <title>jquery</title>
</head>
<body>
<div class="container ">
    <div class="row">
        <div class=" row  mt-3 d-flex justify-content-center align-items-center">
            <div class=" col-md-4 " id="IdSelector">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_1">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" well col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_2">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_3">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" col-md-4" testAttribute="containSelector">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_4">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4" testAttribute="exactSelector">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_5">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4" testAttribute="amir hosein">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_6">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4" testAttribute="amir">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_7">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4" testAttribute="mmd hosein">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_8">
                        اجرا
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_9">
                        اجرا
                        <label>
                            <input type="button" value="button">
                        </label>
                    </a>

                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_10">
                        اجرا
                        <label for="">
                            <input type="checkbox" name="checkbox" id="" value="amir">
                        </label>

                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_11">
                        اجرا

                    </a>
                </div>
                <div id="parent">
                    <p class="test">1</p>
                    <p class="test">2</p>
                    <div class="">
                        <p>test</p>
                    </div>
                    <p class="test">3</p>
                    <p class="test">4</p>
                    <p class="test">5</p>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_12">
                        اجرا
                        <span id="test">
                            amir
                        </span>
                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_13">
                        اجرا

                    </a>
                </div>
                <div id="descendantId">
                    <p class="test">1</p>
                    <p class="test">2</p>
                    <div class="">
                        <p>test</p>
                    </div>
                    <p class="test">3</p>
                    <p class="test">4</p>
                    <p class="test">5</p>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_14">
                        اجرا
                        <label for="">
                            <input type="button" name="" id="" disabled value="disabled">
                        </label>

                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_15">
                        اجرا
                        <label for="">
                            <input type="button" name="" id="" value="amir" >
                        </label>

                    </a>
                </div>
            </div>
            <div class=" selector col-md-4">
                <div class=" p-5 pull-left">
                    <a class="btn btn-warning btn-block" id="Button_16">
                        اجرا


                    </a>
                    <div class="alert alert-warning"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="./jquery-3.7.1.min.js"></script>
<script src="./selector.js"></script>
</body>
</html>
