<?php
include('./server/session.php');
if(!isset($_SESSION['login_user'])){
  // echo $_SESSION['login_user'];
	header("location: index.php"); // Redirecting To Home Page
}
?>
<html>

<head>
  <title>List User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script language="JavaScript" type="text/javascript">
    function ifDelete(){
        return confirm('Are you sure?');
    }
  </script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body>
  <div style="padding-left: 20%;padding-right: 20%; padding-top: 20px">
  <div class="h4 text-center border border-light p-2">
    <p class="h4 mb-4 text-center">List Users</p>
    <b id="welcome" class="text-center">Welcome : <i><?php echo $login_session; ?></i></b>
	<form action="./server/logout.php" method="post">
		<button type="submit" class="btn btn-danger">Log out</button>
	</form>
  </div>
  

  <?php 
    $db = mysqli_connect('localhost', 'root', '', 'lab');
    $query = "SELECT * FROM user";
    $q = mysqli_query($db, $query);
    while($row = mysqli_fetch_assoc($q)){
        $images[] = $row;   // read data from DB 
    }
  ?>

  <input class="form-control" type="text" name="search" placeholder="Search" />

  <table border="0" cellspacing="2" cellpadding="2" class="table table-hover">
    <thead>
    <tr>
      <th id="firstname"><font face="Arial">First name</font></th> 
      <th id="lastname"><font face="Arial">Last name</font></th> 
      <th id="email"><font face="Arial">Email</font></th> 
      <th id="phonenumber"><font face="Arial">Phone</font></th> 
      <th id="datepicker"><font face="Arial">Birthday</font></th> 
      <th id="gender"><font face="Arial">Gender</font></th> 
      <th id="hobbies"><font face="Arial">Hobbies</font></th> 
      <th id="program"><font face="Arial">Program</font></th> 
      <th id="delete"><font face="Arial">Delete</font></th> 
      <th id="edit"><font face="Arial">Edit</font></th> 
    </tr>
    </thead>
    <tbody></tbody>
    </table>
  </div>
  <script type="text/javascript">
    var data = <?php echo json_encode($images); ?>;
    function myFunction(id) {
      var r = confirm("Delete?");
      if (r == true) {
        window.location = './server/delete.php?id='+id;
      } else {
        txt = "You pressed Cancel!";
      }
    }
    function showData(d) {
        let html = '';
      for(let i in d) {
        html += '<tr> \n' +
    '                 <td>'+d[i].firstname+'</td> \n' +
    '                 <td>'+d[i].lastname+'</td> \n' +
    '                 <td>'+d[i].email+'</td> \n' +
    '                 <td>'+d[i].phonenumber+'</td> \n' +
    '                 <td>'+d[i].gender+'</td> \n' +
    '                 <td>'+d[i].hobbies+'</td> \n' +
    '                 <td>'+d[i].bday+'</td> \n' +
    '                 <td>'+d[i].program+'</td> \n' +   
    '                 <td><a type="button" class="btn btn-danger" onclick="myFunction('+d[i].ID+')" >Delete</a></td> \n' +
    '                 <td><a type="button" class="btn btn-success" href="./edit.php?id='+d[i].ID+'">Edit</a></td> \n' +
    '             </tr>'
      }
      $('tbody').html();
      $('tbody').html(html);
    }
    $(document).ready(function(){
      showData(data);
      $("input").keyup(function(){
        let k = $('input').val().trim().toLowerCase();
        if (k == null  && k == '') {
          showData(data)
        } else {
          let d = data.filter(function (a) {
              return a.firstname.toLowerCase().includes(k) || a.lastname.toLowerCase().includes(k) // sort by first name 
            });
          showData(d);
        }
      });
      $('th').on('click', function(){ // sort function 
        console.log($(this).hasClass('asc'));
        let id = this.id;
        console.log(id);
        if (!$(this).hasClass('asc') && !$(this).hasClass('desc')) {
          $(this).addClass('asc');
          let d = data.sort((a, b) => a[id] > b[id] ? 1 : -1);
          showData(d);
        } else if ($(this).hasClass('asc')){
          $(this).removeClass('asc');
          $(this).addClass('desc');
          let d = data.sort((a, b) => a[id] > b[id] ? -1 : 1);
          showData(d);
        } else if($(this).hasClass('desc')) {
          $(this).removeClass('desc');
          $(this).addClass('asc');
          let d = data.sort((a, b) => a[id] > b[id] ? 1 : -1);
        }

      })
    })
  </script>
</body>
</html>
