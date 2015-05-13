<div class="col-md-4 col-md-offset-4">
  <div class="page-header text-center">
    <h1>Whitelist Manager - <?= $_SERVER['SERVER_NAME'] ?></h1>
  </div>
  <div role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
      <li role="presentation"><a href="#whitelist" aria-controls="whitelist" role="tab" data-toggle="tab">Whitelist</a></li>
      <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="profile">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>#</td>
              <td>Username</td>
              <td>Added By</td>
              <td>When</td>
            </tr>
          </thead>
          <tbody>
              <?php
                $db = new PDO("sqlite:database.sqlite");
                $query = $db->prepare("SELECT * FROM whitelist");
                $query->execute();
                $data = $query->fetchAll();
                foreach ($data as $key => $value) {
              ?>
              <tr>
                <td><?= $value[0] ?></td>
                <td><?= $value[1] ?></td>
                <td><?= $value[2] ?></td>
                <td><?= $value[3] ?></td>
              </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
      </div>
      <div role="tabpanel" class="tab-pane" id="whitelist">
        <p>Whitelist</p>
      </div>
      <div role="tabpanel" class="tab-pane" id="users">
        <p>Users</p>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <p>Settings</p>
      </div>
    </div>
  </div>
</div>
