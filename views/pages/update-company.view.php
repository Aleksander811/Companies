<?php require "views/_partials/head.view.php";?>
    <div class="container">
        <h2>Atnaujinti įmonę</h2>
        <form method="post">
            <div class="form-group">
               <input type="text" class="form-control" name="title" placeholder="Įmonės pavadinimas" value="<?=$data['name'];?>"> 
            </div>
            <div class="form-group">
                <select name="type" class="form-control" value="<?=$data['type'];?>">
                    <option value="uab">Uždaroji akcinė bendrovė</option>
                    <option value="iįmonė">Įndividuali įmonė</option>
                    <option value="všį">Viešoji įstaiga</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="activity" class="form-control" value="<?=$data['subject'];?>" placeholder="Įmonės vadovas, įmonės veikla"> 
            </div>
            <div class="form-group">
                <input type="text" name="info" class="form-control" value="<?=$data['info'];?>" placeholder="Įmonės adresas, telefonas">
            </div>
            <div class="form-group">
                <input type="number" name="code" class="form-control" value="<?=$data['code'];?>" placeholder="Įmonės pvm kodas">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="<?=$data['email'];?>" placeholder="Email" >
            </div>
            <div class="form-group">
                <button type="submit" name="update">Atnaujinti</button>
            </div>
        </form>
    </div>
<?php require "views/_partials/htmlEnd.view.php";?>