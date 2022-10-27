<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>From design</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <style>
            .d_design{
                border: 1px solid black;
                color: white;
                background: blue;
            }
            .d_desig{
                border: 1px solid black;
                color: white;
                background: red;
            }
            .error{
                border: 1px solid #000;
                color: red;
                font-weight: bold;
                background: yellow;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <h1 class="text-bold">Form Validation</h1>

                <?php
                    $name='';
                    $email='';
                    $address='';
                    $taxtarea='';
                    $city='';
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $email= $_POST['email'];
                        $address= $_POST['address'];
                        $taxtarea= $_POST['taxtarea'];
                        $city= $_POST['city'];
                        // if($name==''|| $email==''|| $address==''|| $taxtarea=='' || $city==''){
                        //     echo '<span class="d_desig">please input all data</span>';
                        // }else{
                        //     echo '<span class="d_design">Data inshart successfully</span>';
                        // }
                        $er= 0;
                        if($name==''){
                            $er++;
                            print('<span class="error">Please Input your name</span>');
                            print('<br>');
                        }
                            $er++;
                            print('<span class="error">Please Input your valid email</span>');
                            print('<br>');
                        }
                        if($address==''){
                            $er++;
                            print('<span class="error">Please Input your address</span>');
                            print('<br>');
                        }
                        if($taxtarea==''){
                            $er++;
                            print('<span class="error">Please Input your message</span>');
                            print('<br>');
                        }
                        if($city==''){
                            $er++;
                            print('<span class="error">Please Input your city name</span>');
                            print('<br>');
                        }
                ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="" placeholder="Type your name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" placeholder="Type your address">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label box-size-fixt">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="taxtarea" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" name="city">City</label>
                    <select class="form-control" name="city">
                        <option>select one</option>
                    <option value="Dhaka">Dhaka</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Nilphamary">Nilphamary</option>
                        <option value="Bandarban">Bandarban</option>
                    </select>
                </div>
                <div>
                    <input type="submit" name="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
