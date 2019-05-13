<?php
class TimeTravel {
    /**
     * Starting date
     * @var DateTime
     */
    private $start;

    /**
     * Ending date
     * @var DateTime
     */
    private $end;
    
    /**
     * @param $start
     * @param $end
     */

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getTravelInfo() : string
    {
        $diff = $this->start->diff($this->end);
        return $diff->format('Il y a %Y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates.');
    }

    public function findDate(DateInterval $interval) : string
    {
        $diff = $this->start->sub($interval);
        return $diff->format('d-m-Y');
    }

    public function backToFutureStepByStep(DatePeriod $step) : array
    {
        $allDates = [];
        foreach ($step as $date) {
            $allDates[] = $date->format("M d Y A h:i");
        }
        return $allDates;
    }
}
