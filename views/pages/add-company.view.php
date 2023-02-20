<?php require "views/_partials/head.view.php";?>
    <div class="container">
        <h2>Pridėti naują įmonę</h2>
        <form method="post">
            <div class="form-group">
               <input type="text" class="form-control" name="title" placeholder="Įmonės pavadinimas"> 
            </div>
            <div class="form-group">
                <select name="type" class="form-control">
                    <option selected disabled>--Pasirinkite įmonės rūšį--</option>
                    <option value="uab">Uždaroji akcinė bendrovė</option>
                    <option value="iįmonė">Įndividuali įmonė</option>
                    <option value="všį">Viešoji įstaiga</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="activity" class="form-control" placeholder="Įmonės vadovas, įmonės veikla"> 
            </div>
            <div class="form-group">
                <input type="text" name="info" class="form-control" placeholder="Įmonės adresas, telefonas">
            </div>
            <div class="form-group">
                <input type="number" name="code" class="form-control" placeholder="Įmonės pvm kodas">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" >
            </div>
            <div class="form-group">
                <button type="submit" name="save">Saugoti</button>
            </div>
        </form>
    </div>
<?php require "views/_partials/htmlEnd.view.php";?>