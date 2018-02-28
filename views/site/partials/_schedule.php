<?
    $daysOfWeek          = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    $today               = time();
    $month               = date('F', $today);
    $lastDayOfMonth      = intval( date('t', $today) );
    $firstDayOfWeek      = date('D', strtotime( date('Y').'-'.date('m').'-01' ));
    $numCellsBeforeStart = array_search($firstDayOfWeek, $daysOfWeek);
?>

<div class="card mb-3 w-100">
    <div class="card-body pb-1">
        <h4 class="card-title text-danger">
            <i class="fas fa-fw fa-calendar-alt"></i>
            Schedule
        </h4>
        Every week, watch Tracy stream live on <a href="https://www.twitch.tv/tracydoll" target="_blank">Twitch</a> every other day.
    </div><!-- .card-body -->
    <table class="table table-sm table-bordered mb-0" style="table-layout: fixed;">
        <thead>
            <tr class="table-info">
                <th colspan="7" class="text-center"><?= $month; ?></th>
            </tr>
            <tr class="table-dark">
                <? foreach( $daysOfWeek as $day ): ?>
                    <th class="text-center"><?= $day; ?></th>
                <? endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <? $counter = 0; for( $cell = 1; $cell <= $lastDayOfMonth; $cell++): $counter++; ?>
                    <? if( $numCellsBeforeStart ): ?>
                        <? for( $i = 0; $i < $numCellsBeforeStart; $i++ ): ?>
                            <td class="table-secondary"></td>
                        <? endfor; ?>
                    <? endif; $counter += $numCellsBeforeStart; $numCellsBeforeStart = 0; ?>
                    <? if( $counter > 7 ): $counter = 1; ?>
                        </tr>
                        <tr>
                    <? endif; $active = ( $cell === intval( date('d') ) ) ?  'class="table-warning"' : ''; ?>
                    <td <?= $active?>>
                        <?= $cell; ?>
                        <?
                            if( $cell % 2 == 0 ):
                                if( $cell < intval( date('d') ) )
                                    $href = 'https://www.twitch.tv/tracydoll/videos/all';
                                else
                                    $href =  'https://www.twitch.tv/tracydoll';

                        ?>
                            <a target="_blank" href="<?= $href; ?>" title="Twitch" style="color: #6441A4;text-decoration: none;"><i class="fab fa-fw fa-twitch ml-2"></i></a>
                        <? endif; ?>
                    </td>
                <? endfor; ?>
                <? if( $counter < 7 ): ?>
                    <? for( $i = $counter; $i < 7; $i++ ): ?>
                        <td class="table-secondary"></td>
                    <? endfor; ?>
                <? endif; ?>
            </tr>
        </tbody>
    </table>
</div><!-- .card -->
