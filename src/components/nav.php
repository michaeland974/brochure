<nav id="mobile-overlay" 
     aria-expanded="false">
  <ul class="nav-list">
    <li>
      <a href="./index.php">Home</a>
    </li>
    <li>
      <a href="./about-us.php">About Us</a>
    </li>
    <li>
      <a href="./memberships.php">Memberships</a>
    </li>
    <li>
      <a href="./index.php">Locations</a>
    </li>
    <li>
      <a href="./contact.php">Contact</a>
    </li>
  </ul>
</nav>

<header>
  <a id="logo" href="./index.php">
    <img <?php echo "src={$view->get_dir_path()}/svg/logo.svg"?> 
         alt="Garden Club Logo">
  </a>

  <nav id="desktop-nav-list">
    <ul>
      <li>
        <a href="./index.php">Home</a>
      </li>
      <li>
        <a href="./about-us.php">About Us</a>
      </li>
      <li>
        <a href="./memberships.php">Memberships</a>
      </li>
      <li>
        <a href="./index.php">Locations</a>
      </li>
      <li>
        <a href="./contact.php">Contact</a>
      </li>
    </ul>
  </nav>

  <button id="toggle-icon"
          aria-controls="mobile-overlay"
          aria-expanded="false">
    <span id="middle-line"></span>
  </button>

</header>