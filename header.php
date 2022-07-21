<header class="header">

   <div class="flex">

      <a href="#" class="logo">M0hammadreza.ir</a>

      <nav class="navbar">
         <a href="admin.php">اضافه کردن غذای جدید</a>
         <a href="products.php">مشاهده لیست غذاها</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">سبدخرید <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>