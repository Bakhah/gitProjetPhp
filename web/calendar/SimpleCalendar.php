<?php


namespace donatj;

include __DIR__.'/../lib/connection.php';
/**
 * Simple Calendar.
 *
 * @author Jesse G. Donat <donatj@gmail.com>
 *
 * @link http://donatstudios.com
 *
 * @license http://opensource.org/licenses/mit-license.php
 */
class SimpleCalendar
{
    /**
     * Array of Week Day Names.
     *
     * @var array
     */
    public $wday_names = false;
    private $now;
    private $dailyHtml = array();
    private $offset = 0;
    /**
     * Constructor - Calls the setDate function.
     *
     * @see setDate
     *
     * @param null|string $date_string
     */
    public function __construct($date_string = null)
    {
        $this->setDate($date_string);
        $this->updateDailyHtml();
    }

    public function updateDailyHtml()
    {
        $dailyHtml = NULL;
        $con = GetMyConnection();
        $sql = 'SELECT * FROM menu, recipe where (menu.id_recipe = recipe.id)';
        $req = mysqli_query($con, $sql);

        while ($data = mysqli_fetch_assoc($req)) {
          $this->addDailyHtml($data[day_moment], $data[name], $data[jour]);
        }
        CleanUpDB();
    }
    /**
     * Sets the date for the calendar.
     *
     * @param null|string $date_string Date string parsed by strtotime for the calendar date. If null set to current timestamp
     */
    public function setDate($date_string = null)
    {
        if ($date_string) {
            $this->now = getdate(strtotime($date_string));
        } else {
            $this->now = getdate();
        }
    }

    public function updateMenu($recipe_id, $day, $day_moment)
    {
      $con = GetMyConnection();

      $req = mysqli_query($con, 'SELECT * FROM menu where (jour = \''.$day.'\' AND day_moment = \''.$day_moment.'\')');
      $recipe_name = mysqli_query($con, 'SELECT name from recipe where (id = '.$recipe_id.')');
      if (mysqli_num_rows($req) > 0)
      {
        mysqli_query($con, 'DELETE from menu where (jour = \''.$day.'\' AND day_moment = \''.$day_moment.'\')');
      }
      mysqli_query($con, 'INSERT into menu values (NULL, \''.$day.'\', '.$recipe_id.', \''.$day_moment.'\')');
      CleanUpDB();
      $this->updateDailyHtml();
    }

    public function deleteMenu($day, $day_moment)
    {
      $con = GetMyConnection();
      mysqli_query($con, 'DELETE from menu where (jour = \''.$day.'\' AND day_moment = \''.$day_moment.'\')');
      CleanUpDB();
      $this->updateDailyHtml();
    }
    /**
     * Add a daily event to the calendar.
     *
     * @param string      $html              The raw HTML to place on the calendar for this event
     * @param string      $start_date_string Date string for when the event starts
     * @param null|string $end_date_string   Date string for when the event ends. Defaults to start date
     */
    public function addDailyHtml($day_moment, $html, $start_date)
    {
        static $htmlCount = 0;
        $working_date = $start_date;
        do {
            $tDate = date_parse($start_date);
            $working_date += 86400; 
            $this->dailyHtml[$tDate['year']][$tDate['month']][$tDate['day']][$day_moment] = $html;
        } while ($working_date < $end_date + 1);
        ++$htmlCount;
    }
    /**
     * Clear all daily events for the calendar.
     */
    public function clearDailyHtml()
    {
        $this->dailyHtml = array();
    }
    /**
     * Sets the first day of the week.
     *
     * @param int|string $offset Day to start on, ex: "Monday" or 0-6 where 0 is Sunday
     */
    public function setStartOfWeek($offset)
    {
        if (is_int($offset)) {
            $this->offset = $offset % 7;
        } else {
            $this->offset = date('N', strtotime($offset)) % 7;
        }
    }
    /**
     * Returns/Outputs the Calendar.
     *
     * @param bool $echo Whether to echo resulting calendar
     *
     * @return string HTML of the Calendar
     */
    public function show($echo = true)
    {

        if ($this->wday_names) {
            $wdays = $this->wday_names;
        } else {
            $today = (86400 * (date('N')));
            $wdays = array();
            for ($i = 0; $i < 7; ++$i) {
                $wdays[] = strftime('%a', time() - $today + ($i * 86400));
            }
        }
        $this->arrayRotate($wdays, $this->offset);
        $wday = date('N', mktime(0, 0, 1, $this->now['mon'], 1, $this->now['year'])) - $this->offset;
        $no_days = cal_days_in_month(CAL_GREGORIAN, $this->now['mon'], $this->now['year']);
        $out = '<table style="table-layout:fixed;"class="table table-bordered"><thead><tr>';
        for ($i = 0; $i < 7; ++$i) {
            $out .= '<th>'.$wdays[$i].'</th>';
        }
        $out .= "</tr></thead>\n<tbody>\n<tr>";
        $wday = ($wday + 7) % 7;
        if ($wday == 7) {
            $wday = 0;
        } else {
            $out .= str_repeat('<td>&nbsp;</td>', $wday);
        }
        $count = $wday + 1;
        for ($i = 1; $i <= $no_days; ++$i) {
            $out .= '<td'.($i == $this->now['mday'] && $this->now['mon'] == date('n') && $this->now['year'] == date('Y') ? '' : '').'>';
            $datetime = mktime(0, 0, 1, $this->now['mon'], $i, $this->now['year']);
            $out .= '<time datetime="'.date('Y-m-d', $datetime).'">'.$i.'</time>';
            $dHtml_arr = false;
            $iterator = 0;

            if (isset($this->dailyHtml[$this->now['year']][$this->now['mon']][$i]['midday']))
            {
              $dHtml = $this->dailyHtml[$this->now['year']][$this->now['mon']][$i]['midday'];
                $out .= '<div>
                          <form method="post" action="edit_event.php">
                            <input type="hidden" name="day" value="'.$i.'">
                            <input type="hidden" name="month" value="'.$this->now['mon'].'">
                            <input type="hidden" name="year" value="'.$this->now['year'].'">
                            <input type="hidden" name="recipe" value="'.$dHtml.'">
                            <input type="hidden" name="moment" value="midday">
                            <input type="submit" class="form-control" title="'.$dHtml.'" value="'.$dHtml.'">
                          </form>
                        </div>';
            }
            else {

              $out .= '<div>
                        <form method="post" action="new_event.php">
                          <input type="hidden" name="day" value="'.$i.'">
                          <input type="hidden" name="month" value="'.$this->now['mon'].'">
                          <input type="hidden" name="year" value="'.$this->now['year'].'">
                          <input type="hidden" name="moment" value="midday">
                          <input type="submit" class="form-control" title="Cliquez ici pour ajouter une recette" value="+">
                        </form>
                      </div>';
            }
            if (isset($this->dailyHtml[$this->now['year']][$this->now['mon']][$i]['evening']))
            {
              $dHtml = $this->dailyHtml[$this->now['year']][$this->now['mon']][$i]['evening'];
                $out .= '<div>
                          <form method="post" action="edit_event.php">
                            <input type="hidden" name="day" value="'.$i.'">
                            <input type="hidden" name="month" value="'.$this->now['mon'].'">
                            <input type="hidden" name="year" value="'.$this->now['year'].'">
                            <input type="hidden" name="recipe" value="'.$dHtml.'">
                            <input type="hidden" name="moment" value="evening">
                            <input type="submit" class="form-control" title="'.$dHtml.'" value="'.$dHtml.'">
                          </form>
                        </div>';
            }
            else {
              $out .= '<div>
                        <form method="post" action="new_event.php">
                          <input type="hidden" name="day" value="'.$i.'">
                          <input type="hidden" name="month" value="'.$this->now['mon'].'">
                          <input type="hidden" name="year" value="'.$this->now['year'].'">
                          <input type="hidden" name="moment" value="evening">
                          <input type="submit" class="form-control" title="Cliquez ici pour ajouter une recette" value="+">
                        </form>
                      </div>';
            }
            $out .= '</td>';
            if ($count > 6) {
                $out .= "</tr>\n".($i != $count ? '<tr>' : '');
                $count = 0;
            }
            ++$count;
        }
        $out .= ($count != 1 ? str_repeat('<td>&nbsp;</td>', 8 - $count) : '')."</tr>\n</tbody></table>\n";
        if ($echo) {
            echo $out;
        }

        return $out;
    }
    private function arrayRotate(&$data, $steps)
    {
        $count = count($data);
        if ($steps < 0) {
            $steps = $count + $steps;
        }
        $steps = $steps % $count;
        for ($i = 0; $i < $steps; ++$i) {
            array_push($data, array_shift($data));
        }
    }
}
