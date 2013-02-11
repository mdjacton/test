<div class="bookings index">
    <h2><?php echo __('Bookings'); ?></h2>

    <?php
//   echo $book_date = substr($bookings[0]['Booking']['booking_date'],0,10);exit;
//   echo "<pre>" ; print_r($bookings); echo "</pre>";exit;
//   echo "<pre>" ; print_r($bookingDates); echo "</pre>";//exit;
    $monthNames = Array("January", "February", "March", "April", "May", "June", "July",
        "August", "September", "October", "November", "December");

    if (!isset($_REQUEST["month"]))
        $_REQUEST["month"] = date("n");
    if (!isset($_REQUEST["year"]))
        $_REQUEST["year"] = date("Y");

    $cMonth = $_REQUEST["month"];
    $cYear = $_REQUEST["year"];

    $prev_year = $cYear;
    $next_year = $cYear;
    $prev_month = $cMonth - 1;
    $next_month = $cMonth + 1;

    if ($prev_month == 0) {
        $prev_month = 12;
        $prev_year = $cYear - 1;
    }
    if ($next_month == 13) {
        $next_month = 1;
        $next_year = $cYear + 1;
    }
    ?>
    <table width="100%">
        <tr align="center">
            <td bgcolor="#999999" style="color:#FFFFFF">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="50%" align="left">  
                            <a href="<?php echo "/test/bookings/index" . "?month=" . $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a>
                        </td>
                        <td width="50%" align="right">
                            <a href="<?php echo "/test/bookings/index" . "?month=" . $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF;float: right">Next</a>  
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table width="100%" border="1" cellpadding="2" cellspacing="2">
                    <tr align="center">
                        <td colspan="7" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong><?php echo $monthNames[$cMonth - 1] . ' ' . $cYear; ?></strong></td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>S</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>M</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>T</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>W</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>T</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>F</strong></td>
                        <td align="center" bgcolor="#999999" style="color:#FFFFFF;text-align: center"><strong>S</strong></td>
                    </tr>
                    <?php
                    $timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
                    $maxday = date("t", $timestamp);
                    $thismonth = getdate($timestamp);
                    //echo "<pre>" ; print_r($thismonth); echo "</pre>";
                    $startday = $thismonth['wday'];
                    for ($i = 0; $i < ($maxday + $startday); $i++) {
                        if (($i % 7) == 0) {
                            echo "<tr height='80px'>";
                        }
                        if ($i < $startday) {
                            echo "<td></td>";
                        } else {

                            echo '<td>';
                            //$book_date = substr($bookings[0]['Booking']['booking_date'], 0, 10);
                            //$curr_date = $thismonth['year'] . "-" . $thismonth['mon'] . "-" . ($i - $startday + 1);
                            $curr_date = date('Y m d', strtotime($thismonth['year'] . "-" . $thismonth['mon'] . "-" . ($i - $startday + 1)));
                            $today_date = date('Y m d');

                            //$book_date = date('Y m d', strtotime($bookings[0]['Booking']['booking_date']));
                            if (isset($bookingDates[$curr_date])) {
                                $booked = $bookingDates[$curr_date]['User']['username'];
                                $doc_action = 'view';
                                $booking_id = $bookingDates[$curr_date]['Booking']['id'];
                            } else {
                                $doc_action = 'add';
                                $booked = null;
                                $booking_id = null;
                            }
                            $this_day = ($i - $startday + 1);
//                            echo $this_day;
                            if ($curr_date > $today_date) {
                                echo $this->Html->link(__($i - $startday + 1), array(
                                    'plugin' => null,
                                    'controller' => 'bookings',
                                    'action' => $doc_action, $user_id,$this_day,$thismonth['month'],$thismonth['year'],$booking_id
                                        )
                                );
                            } else {
                                echo ($i - $startday + 1);
                            }
                            echo "<br>" . $booked .
                            "</td>";
                            if (($i % 7) == 6) {
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
     <li><?php echo$this->Html->link(__('View your profile'), array('controller' => 'users', 'action' => 'view', $user_id))?><li>
        <?php if($group_id == 5) :?>
            <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Cars'), array('controller' => 'cars', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Acces Control'), array('plugin' => 'admin', 'controller' => 'acl', 'action' => 'index')); ?> </li>
        <?php endif; ?>

    </ul>
</div>
