<?= $this->include('template/header'); ?>

<div class="col-sm-8">
    <div class="row">
        <div class="col-sm-12">
            <h1 style="font-weight: bold;"><?= $title; ?></h1>
            <hr>
            <p><?= $content; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col align-middle">
                    <img src="https://dummyimage.com/120/db7d25/fff.png" class="rounded rounded-circle mx-auto d-block" alt="Image 1">
                    <h3 class="text-center">Heading</h3>
                    <p class="text-center">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    <center><a href="#" class="btn btn-secondary">View Details</a></center>
                </div>
                <div class="col">
                    <img src="https://dummyimage.com/120/3e73e6/fff.png" class="rounded rounded-circle mx-auto d-block" alt="Image 2">
                    <h3 class="text-center">Heading</h3>
                    <p class="text-center">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    <center><a href="#" class="btn btn-secondary">View Details</a></center>
                </div>
                <div class="col">
                    <img src="https://dummyimage.com/120/71e6d4/fff.png" class="rounded rounded-circle mx-auto d-block" alt="Image 3">
                    <h3 class="text-center">Heading</h3>
                    <p class="text-center">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    <center><a href="#" class="btn btn-secondary">View Details</a></center>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->include('template/footer'); ?>