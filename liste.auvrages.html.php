
    <div class="conteneur">
        <h3>LISTE DES OUVRAGES</h3>
        <table>
            <tr>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE D'EDITION</th>
                <th>AUTEUR</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                        <tr>
                            <th><?php echo($val["code"]); ?> </th>
                            <th> <?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["date_edition"]); ?></th>
                            <th><?php echo($val["id_auteurs"]); ?></th>
                            <th><?php echo($val["id_rayons"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
