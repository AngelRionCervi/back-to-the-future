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

    public function getTravelInfo() {
        $diff = $this->start->diff($this->end);
        return $diff->format('Il y a %Y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates.');
    }

    public function findDate(DateInterval $interval) {
        $diff = $this->start->sub($interval);
        return $diff->format('d-m-Y');
    // renvoie bien une date d'arrivée qui est $interval secondes avant la $date de départ.
    // Pour une date de départ au 31/12/1985, le résultat renvoie une réponse autour de 1954.

    }

    public function backToFutureStepByStep(DatePeriod $step) {
        $allDates = [];
        foreach ($step as $date) {
            $allDates[] = $date->format("M d Y A h:i");
        }
        return $allDates;
    }

    /**
     * @param $start
     * @param $end
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        $str = 'Je suis un voyage commençant le' . $start . 'finissant le ' . $end . '.';
        $str .= '<br />';
        return $str;
    }


}
