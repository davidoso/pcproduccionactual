<!DOCTYPE html>
<html lang="es-MX">
<head>
    <?php $this->load->view('head'); ?>
</head>
<body class="bg">
    <div id="pc-navbar">
        <div class="container1">
            <div class="row justify-content-center">
                <p class="app-img"><img class="img-responsive" src="images/logo_peco.png"></p>
                <div class="vl"></div>
                <p class="app-title">PRODUCCIÓN ACTUAL</p>
            </div>
        </div>
    </div> <!-- pc-navbar ends -->
    <div class="row my-row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 class="table-title">Movimiento de hoy</h1>
        <table class="table table-bordered my-table">
          <thead class="tbl-blue-th">
            <tr>
              <th width="33%">Real</th>
              <th width="33%">Planeado</th>
              <th width="34%">Variación</th>
            </tr>
          </thead>
          <tbody id="tbl-hoy">
            <tr>
              <td width="33%">55</td>
              <td width="33%">141</td>
              <td width="34%">12,470</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 class="table-title">Movimiento de ayer</h1>
        <table class="table table-bordered my-table">
          <thead class="tbl-blue-th">
            <tr>
              <th width="33%">Real</th>
              <th width="33%">Planeado</th>
              <th width="34%">Variación</th>
            </tr>
          </thead>
          <tbody id="tbl-ayer">
            <tr>
              <td width="33%">55</td>
              <td width="33%">141</td>
              <td width="34%">12,470</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- row my-row ends -->
    <div class="row my-row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 class="table-title">Movimiento mensual</h1>
        <table class="table table-bordered my-table">
          <thead class="tbl-blue-th">
            <tr>
              <th width="33%">Real</th>
              <th width="33%">Planeado</th>
              <th width="34%">Variación</th>
            </tr>
          </thead>
          <tbody id="tbl-mensual">
            <tr>
              <td width="33%">55</td>
              <td width="33%">141</td>
              <td width="34%">12,470</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 class="table-title">Movimiento anual acumulado</h1>
        <table class="table table-bordered my-table">
          <thead class="tbl-blue-th">
            <tr>
              <th width="33%">Real</th>
              <th width="33%">Planeado</th>
              <th width="34%">Variación</th>
            </tr>
          </thead>
          <tbody id="tbl-anual">
            <tr>
              <td width="33%">55</td>
              <td width="33%">141</td>
              <td width="34%">12,470</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- row my-row ends -->
</body>
</html>