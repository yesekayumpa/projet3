
    <div class="conteneur">
        <h3>LISTE DES RAYONS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>TYPE</th>
            </tr>
            <?php foreach ($rayons as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["type"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
