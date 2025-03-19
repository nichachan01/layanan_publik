<?= $this->extend('base_layout') ?>

<?= $this->section('content') ?>

<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!-- Button trigger modal -->
              <div class="col-lg-3 col-6">
              <a href="<?= route_to('tambahunit') ?>">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputModal">
                  Tambah Data Unit Kerja
                </button>
              </a>
              </div>
              <!-- //modal -->
               
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">No</th>
                          <th>Nama Unit Kerja</th>
                          <th>Kepala Unit Kerja</th>
                          <th ">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($units as $unit): ?>
                        <tr class="align-middle">
                          <td><?= $unit['id_unitkerja'] ?></td>
                          <td><?= $unit['nama_unitkerja'] ?></td>
                          <td>
                          <?= $unit['kepala_unitkerja'] ?>
                          </td>
                          <td>
                          <a href="<?= route_to('editunit',$unit['id_unitkerja']) ?>">
                            <button class="btn btn-sm btn-outline-primary">
                                Edit
                            </button>
                          </a>
                          <a href="<?= route_to('deleteunit',$unit['id_unitkerja']) ?>">
                              <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                  Hapus
                              </button>
                          </a> 
                        </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
            
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
<?= $this->endSection() ?>