<?= $this->extend('base_layout') ?>

<?= $this->section('content') ?>

<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!-- Button trigger modal -->
            <!--end::Row-->
            <!--begin::Horizontal Form-->
            <div class="card card-warning card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Unit Kerja Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" action="<?= route_to('saveunit') ?>">
                    <!--begin::Body-->
                    <div class="card-body">
                    <input hidden type="text" value="<?= $data['id_unitkerja'] ?>" class="form-control" name="id_unitkerja" id="inputEmail3" />
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?= $data['nama_unitkerja'] ?>" class="form-control" name="nama_unitkerja" id="inputEmail3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kepala Unit Kerja</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="<?= $data['kepala_unitkerja'] ?>" name="kepala_unitkerja" />
                        </div>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="submit" class="btn float-end">Cancel</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                    
                  </div>
            
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
<?= $this->endSection() ?>