<?php require "views/_partials/head.view.php";?>
   <div class="container">
        <div class="card d-grid gap-2 col-4 mx-auto">
            <div class="card-header mx-auto">
                COMPANIES app
            </div>
            <div class="card-header mx-auto">
                <a href="/add-company" class="btn btn-success">Pridėti naują įmonę</a>
            </div>
        </div>
        <table class="table table-bordered table-striped mt-3">
            <tr>
                <th>Įmonės pavadinimas</th>
                <th>Įmonės veikla, vadovas</th>
                <th>Rūšis</th>
                <th>Adresas, telefonas</th>
                <th>Pvm kodas</th>
                <th>El.paštas</th>
                <th>Redaguoti</th>
                <th>Šalinti</th>
            </tr>
            <?php foreach ($company->allCompanies() as $data):?>
            <tr>
                <td><?=$data['name'];?></td>    
                <td><?=$data['subject'];?></td>
                <td><?=$data['type'];?></td>
                <td><?=$data['info'];?></td>
                <td><?=$data['code'];?></td>
                <td><?=$data['email'];?></td>
                <td><a href="/update-company/id/<?=$data['id'];?>">Atnaujinti</a></td>
                <td><a href="/delete-company/id/<?=$data['id'];?>">Šalinti</a></td>
            </tr>
            <?php endforeach;?>
        </table>
   </div> 
<?php require "views/_partials/htmlEnd.view.php";?>