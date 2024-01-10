<form action="" method="post" class="form-control">

    <input value="<?= $pizza->getName() ?>" placeholder="name" type="text" name="name" class="form-control">
    <input value="<?= $pizza->getSize() ?>" placeholder="size" type="text" name="size"  class="form-control">
    <button name="id" value="<?= $pizza->getId() ?>" class="btn btn-primary" type="submit" >Modifier</button>

</form>