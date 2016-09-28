<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en">
  <?php $this->load->view('common/header')?>
  <body>
  <?php $this->load->view('common/top')?>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <th>編輯會員資料</th>
              </thead>
              <tbody>
                <form method="POST" action="localhost/e-store/application/models/Member_model.php">
                <tr><td>變更姓名</td><td><input type="text" name="name"></td></tr>
                <tr><td>變更帳號</td><td><input type="text" name="username"></td></tr>
                <tr><td>變更地址</td><td><input type="text" name="address"></td></tr>
                <tr><td>變更生日</td><td><input type="text" name="birthday"></td></tr>
                <tr><td>變更密碼</td><td><input type="password" name="password"></td></tr>
                <input type="submit" name="send" value="送出">
                </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('/public/js/bootstrap.min.js')?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url('/public/js/holder.min.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('/public/js/ie10-viewport-bug-workaround.js')?>"></script>


</body></html>