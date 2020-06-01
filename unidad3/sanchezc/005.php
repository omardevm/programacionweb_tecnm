<?php

                                   $numero=4;

                                   if($numero>=1 && $numero<=7){

                                               switch($numero){

                                                           case 1: $dia='Domingo'; break;

                                                           case 2: $dia='Lunes'; break;

                                                           case 3: $dia='Martes'; break;

                                                           case 4: $dia='Miercoles'; break;

                                                           case 5: $dia='Jueves'; break;

                                                           case 6: $dia='Viernes'; break;

                                                           case 7: $dia='Sábado'; break;

                                               }
                                               echo 'El dia de la semana que le corresponde es '.$dia;
                                   }

                                   else

                                               echo 'El Numero no está en el rango de1 a7';

                        ?>