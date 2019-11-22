<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/aja+++x/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Default form register -->
<form class="text-center border border-light p-5" method="post" action="./server/signup_server.php">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
        </div>
    </div>
    <!-- E-mail -->
    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
    <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">
    <input type="text"" id="phonenumber" name="phonenumber" class="form-control mb-4" placeholder="Phonenumber">
                
                <div class="form-group">
                    <select id="program" name="program" class="form-control">
                        <option value="" selected>Study programs</option>
                        <option value="sie">SIE</option>
                        <option value="hedspi">HEDSPI</option>
                        <option value="ict">ICT</option>
                        <option value="dsai">DS-AI</option>
                    </select>
                </div>
                
                <div class="form-group row">
                    <label class="col-2 col-form-label"><b>Birthday</b></label>
                    <div class="col-10">
                        <input class="form-control" name="bday" type="date" id="bday">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label"><b> Gender</b></label>
                    <div class="col-10">
                        <div class="form-check form-check-inline">
                            <label><input type="radio" name="gender" value="Male" id="gender_0">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label><input type="radio" name="gender" value="Female" id="gender_1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">    
                            <label><input type="radio" name="gender" value="Other"" id="gender_2">Other</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"><b> Hobby/Hobbies</b></label>
                    <div class="col-10">
                        <div class="form-check form-check-inline">
                        <label><input type="checkbox" name="hobbies[]" value="Reading">Reading</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label><input type="checkbox" name="hobbies[]" value="Sleeping">Sleeping</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label><input type="checkbox" name="hobbies[]" value="Traveling">Traveling</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label><input type="checkbox" name="hobbies[]" value="Learning">Learning</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label><input type = "checkbox" name= "hobbies[]" value="Sport">Sport</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label><input type = "checkbox" name= "hobbies[]" value="Music">Music</label>
                        </div>
                    </div>
                </div>
    <!-- add the following elements to the form -->
    <!-- a password field to input the password -->
    <!-- a radio button named "sex", values: male / female -->
    <!-- a checkbox named "hobbies", values: Reading, Sport, Music, ... -->
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="reg_user">Sign up</button>

</form>
<!-- Default form register -->
</body>
</html>