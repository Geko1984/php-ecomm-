

<?php

$errMsg = '';

if ($loggedInUser) {
  echo '<script>location.href="'.ROOT_URL.'public"</script>';
  exit;
}

if (isset($_POST['login'])) {
    $user=(object)[
        'id'=>1,
        'email'=>'user@mail.it',
        'is_admin'=>true


    ];

    $_SESSION['user']=$user;
}
?>
<h2>Login</h2>

<form method="post">
<button class="btn btn-primary" type="submit" name="login">Login</button>
</form>