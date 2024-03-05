<tr>
    <td><?= $production->title ?></td>
    <td class="text-end"><?= $production->language ?></td>
    <td class="text-end"><?= $production->production_year ?></td>
    <td class="text-end">
        <ul>
            <?php foreach ($production->genres as $genre) : ?>
                <li style="list-style: none;"><?= $genre ?></li>
            <?php endforeach; ?>
        </ul>
    </td>
    <td class="text-end"><?= $production->vote ?></td>
    <?php if ($production instanceof Movie) : ?>
        <td class="text-end"><?= $production->profits ?></td>
        <td class="text-end"><?= $production->duration ?></td>
        <td class="text-end">-</td>
    <?php elseif ($production instanceof TVSerie) : ?>
        <td class="text-end">-</td>
        <td class="text-end">-</td>
        <td class="text-end"><?= $production->seasons ?></td>
    <?php endif; ?>
</tr>