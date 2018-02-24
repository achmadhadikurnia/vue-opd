<template>
  <div>

    <div class="row">
      <div class="col-lg-6 mb-3">
        <div class="card h-100" style="color: #fff; background-color: #2196F3;">
          <div class="card-body">
            <vue-opd-bar-03></vue-opd-bar-03>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /col -->
      <div class="col-lg-6 mb-3">
        <div class="card h-100" style="color: #fff; background-color: #4CAF50;">
          <div class="card-body">
            <vue-opd-pie-03></vue-opd-pie-03>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /col -->
    </div><!-- /.row -->

    <!-- ===================================================================== -->

    <div class="row">
      <div class="col-lg-8 mb-3">
        <div class="card h-100" style="color: #fff; background-color: #009688;">
          <div class="card-header">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            Anggaran dan Penyereapan Berdasarkan OPD
          </div>
          <div class="card-body">
            <vue-opd-bar-01></vue-opd-bar-01>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /col -->
      <div class="col-lg-4 mb-3">
        <div class="card h-100" style="color: #fff; background-color: #FF9800;">
          <div class="card-header">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            Anggaran dan Penyereapan Berdasarkan OPD
          </div>
          <div class="card-body">
            <vue-opd-pie-01></vue-opd-pie-01>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /col -->
    </div><!-- /.row -->

    <!-- ===================================================================== -->

    <div class="row">
      <div class="col-lg-6 mb-3">
        <div class="card h-100" style="color: #fff; background-color: #F44336;">
          <div class="card-header">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            Anggaran dan penyerapan per bulan tiap OPD
          </div>
          <div class="card-body">
            <vue-opd-pie-02></vue-opd-pie-02>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.col -->
      <div class="col-lg-6 mb-3">
        <div class="card text-white bg-dark h-100">
          <div class="card-header">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            Anggaran dan penyerapan per bulan tiap OPD
          </div>
          <div class="card-body">
            <vue-opd-bar-02></vue-opd-bar-02>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /col -->
    </div><!-- /.row -->

  </div>
</template>
