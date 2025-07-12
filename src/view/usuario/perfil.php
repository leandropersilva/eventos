<div class="container position-relative" style="padding-top: 2vh;">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <img src="<?= $imageLink ?>" class="img-fluid rounded-2" alt="Foto de perfil">
        </div>
        <div class="col-6">
            <img src="<?= $imageLink ?>" class="img-fluid rounded-2" alt="Foto de perfil">
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
            <p class="m-0"><?= count($meets) ?> encontros marcados</p>
        </div>
        <div class="col-12">
            <table class="table border">
                <tbody>
                    <?php foreach ($meets as $meet) { ?>
                        <tr>
                            <td style="width: 110px; height: 80px;">
                                <img style="height: 100%; width: 100%; object-fit: cover" src="<?= $meet['img'] ?>" class="img-fluid rounded-2" alt="Foto do encontro">
                            </td>
                            <td><?= $meet['description'] ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2">
                            <button id="addMeet" class="w-100 btn btn-secondary d-flex justify-content-center align-items-center">
                                <span class="material-icons">add</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>