<html>

<head>
  <title>List User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script language="JavaScript" type="text/javascript">
    function ifDelete(){
        return confirm('Are you sure?');
    }
  </script>
</head>

<body>
  <div style="padding-left: 20%;padding-right: 20%; padding-top: 20px">
  <div class="h4 text-center border border-light p-2">
    <p class="h4 mb-4 text-center">List Users
      <a href="./index.php">
        <button type="button" class="btn">&gt &nbsp Sign up</button>
      </a>
    </p>
  </div>

  <table border="0" cellspacing="2" cellpadding="2" class="table table-hover">
    <tr>
      <td> <font face="Arial">First name</font> </td>
      <td> <font face="Arial">Last name</font> </td>
      <td> <font face="Arial">Email</font> </td>
      <td> <font face="Arial">Phone number</font> </td>
      <td> <font face="Arial">Gender</font> </td>
      <td> <font face="Arial">Hobbies</font> </td>
      <td> <font face="Arial">Birthday</font> </td>
      <td> <font face="Arial">Program</font> </td>
      <td> <font face="Arial">Delete</font> </td>
      <td> <font face="Arial">Edit</font> </td>      
    </tr>
      <?php
    $db = mysqli_connect('localhost', 'root', '', 'lab');
    $query = "SELECT * FROM user";
    $q = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($q)) {
      $field0name = $row["ID"];
      $field1name = $row["firstname"];
      $field2name = $row["lastname"];
      $field3name = $row["email"];
      $field4name = $row["phonenumber"];
      $field5name = $row["gender"];
      $field6name = $row["hobbies"];
      $field7name = $row["bday"];
      $field8name = $row["program"];

      echo '<tr>
                  <td>' . $field1name . '</td>
                  <td>' . $field2name . '</td>
                  <td>' . $field3name . '</td>
                  <td>' . $field4name . '</td>
                  <td>' . $field5name . '</td>
                  <td>' . $field6name . '</td>
                  <td>' . $field7name . '</td>
                  <td>' . $field8name . '</td>
                  <td>
                    <a type="button" color="red" class="btn btn-danger" href="delete.php?id=' . $field0name . '"'?>
                      onclick="return ifDelete()"<?php echo'>Delete</a></td>
                  <td>
                    <a type="button" color ="green" class="btn btn-success" href="edit.php?id=' . $field0name . '">
                    Edit</a></td>
              </tr>';
    }
    ?>
  </div>
</body>

</html>
