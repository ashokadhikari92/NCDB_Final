<?php namespace App\Helper;


class NCDBHelper{

    public function getVaccilatorList()
    {
        $vaccilators = config('ncdb.vaccilator');

        return $vaccilators;
    }

    public function getBirthTypes()
    {
        return config('ncdb.birth_types');
    }

    public function calculateAge($birthDate)
    {
        $today = date_create(date('Y-m-d'));
        $birthDate = date_create($birthDate);
        $age = date_diff($today,$birthDate);
        $age = $age->y.' Years '.$age->m.' Months '.$age->d.' Days';
        return $age;
    }

    public function calculateTotalDays($birthDate)
    {
        $today = date_create(date('Y-m-d'));
        $birthDate = date_create($birthDate);
        $age = date_diff($birthDate,$today);
        $age = $age->format("%a");
        return $age;
    }

    public function convertBStoAD($date)
    {
        return $date;
    }

    public static function getKeyName()
    {
        return config('ncdb.key&name');
    }

    public function getNepaliDate($date)
    {
        $date = date('Y-m-d',strtotime($date));
        dd($date);
        $year = 2015 ; $month = 8; $day = 30;

        $dateConverter = new Nepali_Calendar();

        $nepaliDate = $dateConverter->eng_to_nep($year,$month,$day);

        return $nepaliDate['year'].'-'.$nepaliDate['month'].'-'.$nepaliDate['date'];
    }

    public function getEnglishDate($date)
    {
        $year = 2072 ; $month = 5; $day = 13;

        $dateConverter = new Nepali_Calendar();

        $englishDate = $dateConverter->nep_to_eng($year,$month,$day);

        return $englishDate['year'].'-'.$englishDate['month'].'-'.$englishDate['date'];
    }
}