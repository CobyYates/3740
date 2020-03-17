    <header>
      <div class="headerContent">
        <figure class="logo">
          <img
            src="images/logo.png"
            srcset="
              images/logo1x.png 1x,
              images/logo2x.png 2x,
              images/logo3x.png 3x"
          />
        </figure>
        <h3><a href="tel:1-800-555-1234">1-800-555-1234</a></h3>
      </div>
    </header>
    <nav>
      <section class="navContainer">
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/cruizes.php">Cruises</a></li>
          <li>
            <label for="drop-1" class="toggle">Cruises</label>
            <a href="#">Agents</a>
            <input type="checkbox" id="drop-1" />
            <ul>
              <li><a href="/agent1.php">Agent 1</a></li>
              <li><a href="/agent2.php">Agent 2</a></li>
            </ul>
          </li>
          <li><a href="/bookCruise.php">Book</a></li>
        </ul>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </section>
    </nav>

