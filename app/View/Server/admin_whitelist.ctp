<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('WHITELIST') ?></h3>
        </div>
        <div class="box-body">

          <?php foreach ($servers as $key => $value) { ?>
            <a href="<?= $this->Html->url(array('controller' => 'server', 'action' => 'whitelist', 'admin' => true, $value['Server']['id'])) ?>" class="btn btn-lg btn-success"><?= $value['Server']['name'] ?></a>
          <?php } ?>

          <hr>

          <?php if($list != "NEED_SERVER_ON") { ?>
            <table class="table table-bordered dataTable">
                <thead>
                    <tr>
                        <th><?= $Lang->get('PSEUDO') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $k => $v) { ?>
                        <tr>
                            <td><?= $v ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
          <?php } else { ?>
              <div class="well">
                  <div class="alert alert-danger"><?= $Lang->get('NEED_SERVER_ON') ?></div>
              </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
