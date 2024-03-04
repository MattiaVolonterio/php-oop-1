<tr>
    <td><?= $production->title ?></td>
    <td class="text-end"><?= $production->language ?></td>
    <td class="text-end"><?= $production->production_year ?></td>
    <td class="text-end">
        <ul>
            <?php foreach ($production->genre as $genre) : ?>
                <li style="list-style: none;"><?= $genre ?></li>
            <?php endforeach; ?>
        </ul>
    </td>
    <td class="text-end"><?= $production->vote ?></td>
</tr>