<?php include 'assets/header.php'; ?>
      <!-- ################################################################################################ -->
      <?php
      if($user_level == 1){
      }elseif($user_level == 2){
        header('location: index.php');
      }elseif($user_level == 3){
      }elseif($user_level == 4){
      }elseif($user_level == 5){
        header('location: index.php');
      }else{
        header('location: index.php');
      }
      ?>
      <h1>Locaties</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Locatie</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Utrecht</td>
            </tr>
            <tr>
              <td>Nieuwegein</td>
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