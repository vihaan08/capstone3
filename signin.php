<?php
    $con = mysqli_connect('localhost','root','','Capstone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);