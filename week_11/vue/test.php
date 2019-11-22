<?php
$db = mysqli_connect('localhost', 'root', '', 'lab');
$query = "SELECT * FROM user";
$q = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($q)) {
  $images[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Realtime function</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style type="text/css">
    html,
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin-top: 16px;
      margin-bottom: 16px;
    }

    div#app {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    div#app .search-wrapper {
      position: relative;
    }

    div#app .search-wrapper label {
      position: absolute;
      font-size: 12px;
      color: rgba(0, 0, 0, 0.5);
      top: 8px;
      left: 12px;
      z-index: -1;
      transition: .15s all ease-in-out;
    }

    div#app .search-wrapper input {
      padding: 4px 12px;
      color: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.12);
      transition: .15s all ease-in-out;
      background: white;
    }

    div#app .search-wrapper input:focus {
      outline: none;
      transform: scale(1.05);
    }

    div#app .search-wrapper input:focus+label {
      font-size: 10px;
      transform: translateY(-24px) translateX(-12px);
    }

    div#app .search-wrapper input::-webkit-input-placeholder {
      font-size: 12px;
      color: rgba(0, 0, 0, 0.5);
      font-weight: 100;
    }

    div#app .wrapper {
      display: flex;
      max-width: 444px;
      flex-wrap: wrap;
      padding-top: 12px;
    }

    div#app .card {
      box-shadow: rgba(0, 0, 0, 0.117647) 0px 1px 6px, rgba(0, 0, 0, 0.117647) 0px 1px 4px;
      max-width: 124px;
      margin: 12px;
      transition: .15s all ease-in-out;
    }

    div#app .card:hover {
      transform: scale(1.1);
    }

    div#app .card a {
      text-decoration: none;
      padding: 12px;
      color: #03A9F4;
      font-size: 24px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    div#app .card a img {
      height: 100px;
    }

    div#app .card a small {
      font-size: 10px;
      padding: 4px;
    }

    div#app .hotpink {
      background: hotpink;
    }

    div#app .green {
      background: green;
    }

    div#app .box {
      width: 100px;
      height: 100px;
      border: 1px solid rgba(0, 0, 0, 0.12);
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="search-wrapper">
      <input class="form-control" type="text" v-model="search" placeholder="Type some thing!" />
      <label><strong> Search user(s) by first name:</strong></label>
    </div>
    <br>
    <table border="0" cellspacing="2" cellpadding="2" class="table table-hover">
      <thead>
        <tr>
          <th id="firstname">
            <font face="Arial">First name</font>
          </th>
          <th id="lastname">
            <font face="Arial">Last name</font>
          </th>
          <th id="email">
            <font face="Arial">Email</font>
          </th>
          <th id="phonenumber">
            <font face="Arial">Phone</font>
          </th>
          <th id="datepicker">
            <font face="Arial">Birthday</font>
          </th>
          <th id="gender">
            <font face="Arial">Gender</font>
          </th>
          <th id="hobbies">
            <font face="Arial">Hobbies</font>
          </th>
          <th id="program">
            <font face="Arial">Program</font>
          </th>
        </tr>
      </thead>
      <tbody v-for="user in filteredList">
        <tr>
          <td>{{ user.firstname }}</td>
          <td>{{ user.lastname }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.phonenumber }}</td>
          <td>{{ user.bday }}</td>
          <td>{{ user.gender }}</td>
          <td>{{ user.hobbies }}</td>
          <td>{{ user.program }}</td>
        </tr>
      </tbody>
    </table>
    <br>
    <!-- <per-user v-for="user in postList" v-bind:user="user" v-bind:key="user.id"></per-user> -->
    <!-- <div class="wrapper">
    <div class="card" v-for="post in postList">
      <a v-bind:href="post.link" target="_blank">
        <img v-bind:src="post.img"/>
        <small>posted by: {{ post.email }}</small>
        {{ post.title }}
      </a>
    </div>
  </div> -->
  <div>
  <h2>Trích xuất dữ liệu realtime:</h2>
    <input class="form-control" type="text" id="container" placeholder="Enter text" v-model="value"></input>
    <br>
    <p>{{ value }}</p>
  </div>
  <div>
  <h2>Validation real time:</h2>
    <input class="form-control" type="text" id="email" placeholder="Enter email" v-model="email" :class="isEmailValid() ? 'is-invalid' : ''">
    <br>
    <p>{{ message }}</p>
  </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.9/vue.min.js"></script>
  <script>
    /*GET DATA FROM DB*/
    var query_data = <?php echo json_encode($images); ?>;
    /*GET DATA FROM DB*/


    class Post {
      constructor(title, link, author, img) {
        this.title = title;
        this.link = link;
        this.author = author;
        this.img = img;
      }
    }

    // Vue.component('per-user', {
    //   props: ['user'],
    //   template: '<td>{{ user.firstname }}</td> <td>{{ user.email }}</td>'                 
    // })

    const app = new Vue({
      el: '#app',
      data: {
        search: '',
        value: '',
        email: '',
        message: '',
        reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/,
        userList: query_data // DISPLAY DATA QUERIED FROM DB
      },
      methods: {
        isEmailValid: function() {
          if (this.reg.test(this.email) == false) this.message="Email bạn nhập chưa đúng hoặc chưa nhập gì!"
          else this.message="Bạn đã nhập email! hợp lệ!"
          return (this.email == "") ? "" : (this.reg.test(this.email)) ? false : true;
        }
      },
      computed: {
        filteredList() {
          return this.userList.filter(user => {
            return user.firstname.toLowerCase().includes(this.search.toLowerCase())
          })
        }
      }
    })
  </script>

</body>

</html>