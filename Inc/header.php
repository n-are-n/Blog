  <header class="p-3 bg-dark text-white">
      <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                      <use xlink:href="#bootstrap" />
                  </svg>
              </a>

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="index.php" class="nav-link px-2 text-secondary">Feed</a></li>
                    <?php if(isset($_SESSION['ID'])) { ?>
                        <li><a href="manage.php?id=<?php echo $_SESSION['ID'] ?>" class="nav-link px-2 text-white">Post</a></li>
                        <li><a href="favorite.php" class="nav-link px-2 text-white">Favorite</a></li>
                    <?php } ?>
              </ul>

              <form id="search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
              </form>

              <div class="text-end">
                  <button type="submit" form="search" class="btn btn-outline-info me-2">Search</button>
                  <?php if (isset($_SESSION['ID'])) : ?>
                      <a href="<?php echo BASE_URL ?>signout.php">
                          <button type="button" class="btn btn-outline-danger">Logout</button>
                      </a>
                  <?php endif ?>
                  <?php if (empty($_SESSION['ID'])) : ?>
                        <a href="signin.php">
                            <button type="button" class="btn btn-outline-light me-2">Login</button>
                        </a>
                        <a href="signup.php">
                            <button type="button" class="btn btn-outline-warning">Sign Up</button>
                        </a>
                  <?php endif ?>
              </div>
          </div>
      </div>
  </header>
