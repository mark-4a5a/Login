    <?php include 'assets/header.php'; ?>
      <!-- ################################################################################################ -->
      <h1>Gebruikers</h1>
      <div class="scrollable">
        <?php
    if($user_level == 1){
        
    }elseif($user_level == 2){
        header('location: index.php');
    }elseif($user_level == 3){
        header('location: index.php');
    }elseif($user_level == 4){
        header('location: index.php');
    }elseif($user_level == 5){

    }else{
        header('location: index.php');
      }
    ?>
    <p>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Rol</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Voorraadbeheerder</td>
            </tr>
            <tr>
              <td>Accountmanager</td>
            </tr>
            <tr>
              <td>Manager</td>
            </tr>
            <tr>
              <td>Systeembeheerder</td>
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