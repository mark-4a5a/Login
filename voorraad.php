<?php include 'assets/header.php'; ?>
      <!-- ################################################################################################ -->
      <?php
      if($user_level == 1){
      }elseif($user_level == 2){
      }elseif($user_level == 3){
      }elseif($user_level == 4){
      }elseif($user_level == 5){
          header('location: index.php');
      }else{
        header('location: index.php');
      }
      ?>
      <h1>Voorraad</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>Locatie</th>
              <th>Voorraad</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Machine A</td>
              <td>Utrecht</td>
              <td>16</td>
            </tr>
            <tr>
              <td>Machine B</td>
              <td>Utrecht</td>
              <td>28</td>
            </tr>
            <tr>
              <td>Machine C</td>
              <td>Nieuwegein</td>
              <td>17</td>
            </tr>
            <tr>
              <td>Machine D</td>
              <td>Nieuwegein</td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<?php include 'assets/footer.php'; ?>