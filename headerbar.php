<nav>
  <ul>
    <li><a>Privacy</a></li>
    <li><a href='register.php'>Register</a></li>
    <li id='loginItem'><a>Login</a></li>
    <li id='loginForm'><a>
      <form action='encrypt.php' method='post'>
        <input type="text" name="loginUsername" placeholder="Username:">
        <input type="password" name="loginPassword" placeholder="Password:">
        <input type="submit">
      </form>
    </a></li>
    <li><a><?php echo $userName; ?><br></a></li>
  </ul>
</nav>
