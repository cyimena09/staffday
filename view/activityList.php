

<table>
    <tr>
        <td>Activité</td>
        <td>Nombre de participant</td>
    </tr>
    <?php foreach ($activities as $activity ){ ?>
        <tr>
            <td><?php echo $activity['Activity']; ?></td>
            <td><?php echo $activity['total'] . "/" ; if ($activity['MaxParticipant'] <900) {echo $activity['MaxParticipant'];} ?></td>
        </tr>
    <?php }?>
</table>

<p>Participant au souper</p>
