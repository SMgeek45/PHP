<?php
        if ($notes) :
        ?>
            <div class="accordion mb-3" id="accordionNotes">
                <?php foreach ($notes as $index => $actualNote) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo "$index"; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo "$index"; ?>" aria-expanded="false" aria-controls="collapse<?php echo "$index"; ?>">
                                <?php echo $actualNote['title']; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo "$index"; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo "$index"; ?>" data-bs-parent="#accordionNotes">
                            <div class="accordion-body">
                                <pre>
<?php echo $actualNote['note']; ?>
</pre>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else : // if no note
        ?>
            <p>Vous n'avez pas encore de note</p>
        <?php endif ?>