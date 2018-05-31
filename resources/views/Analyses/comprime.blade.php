@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Fiche D'analyses d'un comprimé</h1>
  </div>
  <div class="container-fluid">
     <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              
              <tbody>
                <tr class="odd gradeX">
                  <td class="center" colspan="2">CODE:<br /> <input type="text" /></td>
                  <td class="center" colspan="2">DCI: <br /> <input type="text" /></td>
                </tr>
                <tr class="even gradeC">
                  <td>Reference Essai: <br /> <input type="text" /></td>
                  <td>Dosage: <br /> <input type="text" /></td>
                  <td>Lot N°: <br /> <input type="text" /></td>
                  <td>Peremption: <br /> <input type="text" /></td>
                </tr>
                <tr class="odd gradeA">
                    <td colspan="2">
                        <div class="control-group">
                        <label class="control-label">Essai</label>
                    </td>
                    <td >Norme</td>
                    <td >Observations</td>
                </tr>
                <tr class="even gradeA">
                    <td colspan="2">
                        <div class="controls">
                            <select multiple >
                            <option>Premier Essai</option>
                            <option selected>Second Essai</option>
                            <option>3e Essai</option>
                            <option>4e Essai</option>
                            <option>5e Essai</option>
                            <option>6e Essai</option>
                            <option>7e Essai</option>
                            <option>8e Essai</option>
                            </select>
                        </div>
                        </div>
                    </td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                    <td colspan="4"><strong> Poids Moyens, Uniformite de masse</strong></td>
                </tr>
                <tr>
                    <td>
                       <input type="text" placeholder="PM 1"/> <br /> 
                       <input type="text" placeholder="PM 2"/> <br />
                       <input type="text" placeholder="PM 3"/> <br />
                       <input type="text" placeholder="PM 4"/> <br />
                       <input type="text" placeholder="PM 5"/> <br />
                    </td>
                     <td>
                        <input type="text" placeholder="PM 6"/> <br /> 
                        <input type="text" placeholder="PM 7"/> <br />
                        <input type="text" placeholder="PM 8"/> <br />
                        <input type="text" placeholder="PM 9"/> <br />
                        <input type="text" placeholder="PM 10"/> 
                    </td>
                     <td>
                        <input type="text" placeholder="PM 11"/> <br /> 
                        <input type="text" placeholder="PM 12"/> <br />
                        <input type="text" placeholder="PM 13"/> <br />
                        <input type="text" placeholder="PM 14"/> <br />
                        <input type="text" placeholder="PM 15"/> 
                    </td>
                     <td>
                        <input type="text" placeholder="PM 16"/> <br /> 
                        <input type="text" placeholder="PM 17"/> <br />
                        <input type="text" placeholder="PM 18"/> <br />
                        <input type="text" placeholder="PM 19"/> <br />
                        <input type="text" placeholder="PM 20"/> 
                    </td>
                </tr>

                <tr>
                    <td>Poids Total des comprimés <br /> <input type="text" placeholder="Poids Total"/></td>
                    <td>Tolerance: <br /> <input type="text" placeholder="Tolerance"/></td>
                    <td>Ecart Type: <br /> <input type="text" placeholder="Ecart Type"/></td>
                    <td>% d'Uniformite de masse: <br /> <input type="text" placeholder="Pourcentage d'Uniformite de Masse"/></td>
                </tr>

                <tr>
                    <td colspan="2">Coefficient de variation: <br /> <input type="text" placeholder="Coef de Variation"/></td>
                    <td colspan="2"><strong>Poids Moyens du comprimé: </strong><br /> <input type="text" placeholder="Pm = "/></td>
                </tr>

                <tr>
                    <td colspan="4"><strong>HPLC</strong></td>
                </tr>

                <tr>
                    <td colspan="2"><strong>Equipement</strong> <br /> <input type="text" placeholder="Equipement"/> </td>

                    <td colspan=""><strong>Qualifie</strong> <br /> <input type="text" placeholder="Equipement"/> </td>

                    <td colspan=""><strong>Date prochaine qualification: </strong> <br /> <input type="date" placeholder="Equipement"/> </td>
                </tr>

                <tr>
                     <td colspan="2">
                     <strong>Reactifs utilisés</strong> <br />
                        <div class="controls">
                            <select multiple >
                            <option>Premier Essai</option>
                            <option selected>Second Essai</option>
                            <option>3e Essai</option>
                            <option>4e Essai</option>
                            <option>5e Essai</option>
                            <option>6e Essai</option>
                            <option>7e Essai</option>
                            <option>8e Essai</option>
                            </select>
                        </div>
                        </div>
                    </td>

                    <td>
                        <strong>Numero Lot</strong> <br />
                        <input type="text" />
                    </td>

                    <td>
                        <strong>Date de Peremption </strong> <br />
                        <input type="date" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <strong>Conditions chromatographiques :</strong> <br />
                        <input type="text" />
                    </td>
                    <td>
                        <strong>Volume d'injection :</strong> <br />
                        <input type="text" />
                    </td>
                    <td>
                        <strong>Longueur d'onde :</strong> <br />
                        <input type="text" />
                    </td>
                    <td>
                        <strong>Température :</strong> <br />
                        <input type="text" />
                    </td>

                </tr>

                <tr>
                    <td colspan="2">
                        <strong>Debit :</strong> <br />
                        <input type="text" />
                    </td>
                    <td>
                        <strong>Detection :</strong> <br />
                        <input type="text" />
                    </td>
                    <td>
                        <strong>Colonne :</strong> <br />
                        <input type="text" />
                    </td>

                </tr>

                <tr>
                    <td colspan="4">Diluant: <br /><input type="text" /></td>
                </tr>

                <tr>
                    <td colspan="2">Phase mobile: <br /> <input type="text" /></td>

                    <td >pH: <br /> <input type="text" /></td>

                    <td >Ajustage: <br /> <input type="text" /> </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
  </div>
</div>

@endsection

{{-- Préparation de la solution standard :                   
Substance de référence :
N° de lot :
Date de péremption :
Titre :
Prise d’essai substance de référence P1:
Prise d’essai substance de référence P2:
Echantillon :
Prise d’essai N° 1 :
Prise d’essai N° 2 :
Prise d’essai N° 3 : --}}
