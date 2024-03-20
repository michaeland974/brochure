<nav id="mobile-overlay" 
     aria-expanded="false">
  <ul class="nav-list">
    <li>
      <a href="./index.php">Home</a>
    </li>
    <li>
      <a href="./index.php">About Us</a>
    </li>
    <li>
      <a href="./index.php">Memberships</a>
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
    <img <?php echo "src={$view->get_dir_path()}/svg/garden-logo.svg"?> 
         alt="Garden Club Logo">
  </a>

  <button id="toggle-icon"
          aria-controls="mobile-overlay"
          aria-expanded="false">
    <span id="middle-line"></span>
  </button>

</header>