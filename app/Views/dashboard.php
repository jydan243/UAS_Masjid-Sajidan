<?php
$session = \Config\Services ::session();
$user = $session->get('username');
?>
<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="<?= base_url('');?>/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pendapatan</span>
                          <h3 class="card-title mb-2">Rp,120.000.000</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +85%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="<?= base_url('');?>/assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Penjualan</span>
                          <h3 class="card-title text-nowrap mb-1">Rp 95.850.000</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
    
<?= $this->include('footer'); ?>
