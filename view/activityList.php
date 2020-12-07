
<?php
$activities = getActivitiesView();
?>


<table class="table table-bordered mt-5">
    <thead>
    <tr>
        <th>Activité</th>
        <th>Nombre de participant</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($activities as $activity){ ?>
        <tr>
            <td><?php echo $activity['Activity']; ?></td>
            <td><?php echo $activity['total']; if ($activity['MaxParticipant'] <900) {echo "/" .  $activity['MaxParticipant'];} ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>

