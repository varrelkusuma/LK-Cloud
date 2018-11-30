<?php
            session_start();

            // inisialisasi variabel
            $email = "";
            $password = "";
            $errors = array(); 

            // menghubungkan ke database
            $db = mysqli_connect('localhost', 'root', '', 'lkcloud');


            // LOGIN USER
            if (isset($_POST['login_user'])) {
                $email = mysqli_real_escape_string($db, $_POST['email']);
                $password = mysqli_real_escape_string($db, $_POST['kode']);
              
                if (empty($email)) {
                    array_push($errors, "Email is required");
                }
                if (empty($password)) {
                    array_push($errors, "Password is required");
                }
              
                if (count($errors) == 0) {
                    // $password = md5($password);
                    $query = "SELECT * FROM users WHERE email='$email' AND sandi = '$password'";
                    $results = mysqli_query($db, $query);
                    if (mysqli_num_rows($results) == 1) {
                      $_SESSION['email'] = $email;
                      $_SESSION['success'] = "You are now logged in";
                      $row = mysqli_fetch_array($results);
                       if ($row['jenis'] == 'pengguna') {
                            header('location: home_pengguna.php');
                        }
                        else {
                            header('location: home_admin.php');
                        }
                    
                    } else {
                        array_push($errors, "Wrong email/password combination");
                    }
                }
              }
?>  