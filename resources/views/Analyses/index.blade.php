@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Analyses en cours </a> <a href="#" class="current">Analayses</a> </div>
    <h1>Analyses</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Analyses de Comprimés</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>References Essai</th>
                  <th>Dosage</th>
                  <th>Lot</th>
                  <th>Peremption</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
<td>
                        <div class="fr">
                             <a href="/analyses/comprime" class="btn btn-success btn-mini">Consulter</a>
                        </div>
                    </td>                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                  <td class="center">C</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                  <td class="center">A</td>
                </tr>
                <tr class="even gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                  <td class="center">A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Analyses de gellules</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Analyses de Syrops</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Column name</th>
                  <th>Column name</th>
                  <th>Column name</th>
                  <th>Column name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Analyses d'Ampoules</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Column name</th>
                  <th>Column name</th>
                  <th>Column name</th>
                  <th>Column name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        @endsection