<div class="card h-100 shadow">
    <div class="card-header">
        <h4 class="text-center">
            <?php echo $computer->brand->model ?>
        </h4>
    </div>
    <div class="card-body d-flex flex-column">
        <span>
            <strong>RAM:</strong>
            <ul class="list-unstyled">
                <li><?php echo $computer->RAM->speed ?></li>
                <li><?php echo $computer->RAM->memory ?></li>
            </ul>
        </span>
        <span>
            <strong>CPU:</strong>
            <ul class="list-unstyled">
                <li><?php echo $computer->CPU->core ?></li>
                <li><?php echo $computer->CPU->frequency ?></li>
            </ul>
        </span>
        <span>
            <strong>Memory:</strong>
            <ul class="list-unstyled">
                <li><?php echo $computer->memory->capacity ?></li>
            </ul>
        </span>
        <span>
            <strong>Display:</strong>
            <ul class="list-unstyled">
                <li><?php echo $computer->display->size ?></li>
                <li><?php echo $computer->display->resolution ?></li>
            </ul>
        </span>
        <?php if ($computer instanceof desktop) : ?>
            <span>
                <strong>Mouse:</strong>
                <ul class="list-unstyled">
                    <li><?php echo $computer->mouse->model ?></li>
                    <li><?php echo $computer->mouse->keys ?></li>
                </ul>
            </span>
            <span>
                <strong>Keyboard:</strong>
                <ul class="list-unstyled">
                    <li><?php echo $computer->keyboard->layout ?></li>
                    <li><?php echo $computer->keyboard->model ?></li>
                </ul>
            </span>
        <?php else : ?>
            <span>
                <strong>webcam:</strong>
                <ul class="list-unstyled">
                    <li><?php echo $computer->webcam->model ?></li>
                    <li><?php echo $computer->webcam->resolution ?></li>
                </ul>
            </span>
            <span>
                <strong>Battery Life:</strong>
                <ul class="list-unstyled">
                    <li><?php echo $computer->battery->batteryLife ?></li>
                </ul>
            </span>
        <?php endif ?>
    </div>
</div>