<?php
namespace App\Service;

use IntlDateFormatter;

class ActionGenerator
{
    public function getAction(): array
    {
        $array_day=
        [
           [ 'id'=>1,
             'first'=>"Lundi  à  06:00",
             'second'=>"Lundi  à  09:00",
             'third'=>"Lundi  à  12:00",
             'fourth'=>"Lundi  à  15:00",
             'fifth'=>"Lundi  à  18:00",
           ],

           [ 'id'=>2,
             'first'=>"Mardi  à  06:00",
             'second'=>"Mardi  à  09:00",
             'third'=>"Mardi  à  12:00",
             'fourth'=>"Mardi  à  15:00",
             'fifth'=>"Mardi  à  18:00",
           ],

           [ 'id'=>3,
             'first'=>"Mercredi  à  06:00",
             'second'=>"Mercredi  à  09:00",
             'third'=>"Mercredi  à  12:00",
             'fourth'=>"Mercredi  à  15:00",
             'fifth'=>"Mercredi  à  18:00",
           ],

          [ 'id'=>4,
           'first'=>"Jeudi  à  06:00",
           'second'=>"Jeudi  à  09:00",
           'third'=>"Jeudi  à  12:00",
           'fourth'=>"Jeudi  à  15:00",
           'fifth'=>"Jeudi  à  18:00",
          ],

          [ 'id'=>5,
          'first'=>"Vendredi  à  06:00",
          'second'=>"Vendredi  à  09:00",
          'third'=>"Vendredi  à  12:00",
          'fourth'=>"Vendredi  à  15:00",
          'fifth'=>"Vendredi  à  18:00",
          ],


          [ 'id'=>6,
          'first'=>"Samedi  à  06:00",
          'second'=>"Samedi  à  09:00",
          'third'=>"Samedi  à  12:00",
          'fourth'=>"Samedi  à  15:00",
          'fifth'=>"Samedi  à  18:00",
          ],

          [ 'id'=>7,
            'first'=>"Dimanche  à  06:00",
            'second'=>"Dimanche  à  09:00",
            'third'=>"Dimanche  à  12:00",
            'fourth'=>"Dimanche  à  15:00",
            'fifth'=>"Dimanche  à  18:00",
          ],];

        $format = new IntlDateFormatter('en',
        IntlDateFormatter::FULL, 
        IntlDateFormatter::FULL
        );
        $format->setPattern('EEEE');

        $jour=ucfirst($format->format(time()));

        $date= date('d');

        $jourDate="$jour $date";
        
        $heure=date('H:i');


        $table=
        [
           'array_day'=>$array_day,
           'jourDate'=>$jourDate,
           'heure'=>$heure   
        ];
        


        return $table;
    }
}