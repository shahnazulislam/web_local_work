<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="POST" action="valid.php">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h4 class="text-center">Form</h4>
                <div class="blank mb-5"></div>
                </div>
                <div class="col-6 form-height">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control mb-3" name="first_name" placeholder="Type Your Name">
                    <label for="">Fathers name:</label>
                    <input type="text" class="form-control mb-3" name="fathers_name" placeholder="Type your father name">
                    <label for="">Email:</label>
                    <input type="email" class="form-control mb-3" name="email" placeholder="Valid Email">
                    <label for="">Hobby:</label>
                    <input type="text" class="form-control mb-3" name="hobby" placeholder="Type your hobby">

                </div>
                <div class="col-6">
                    <label for="">Last Name:</label>
                    <input type="text" class="form-control mb-3" name="last_name" placeholder="Type Yout Title">
                    <label for="">Mother name:</label>
                    <input type="text" class="form-control mb-3" name="mothers_name" placeholder="Type your Mothers name">
                    <label for="">Contuct:</label>
                    <input type="contuct" class="form-control mb-3" name="contuct" placeholder="Type Your Co-Number">
                    <label for="">Date of birth:</label>
                    <input type="date" class="form-control mb-3"name="date_of_birth"> 
                </div>
                <div class="col-12">
                    <!-- gender section -->
                    <input type="radio" id="male" name="select_gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="select_gender" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" id="Other" name="select_gender" value="Other">
                    <label for="Other" class="mb-3">Other</label><br>
                    <button>Submit</button>
                </div>

            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>