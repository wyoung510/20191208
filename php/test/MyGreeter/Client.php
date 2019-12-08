<?php
namespace MyGreeter;
date_default_timezone_set('Asia/Shanghai');
class Client
{

    protected  $time;
    protected  $message='';

    public function getGreeting(){

        // $time1 = strtotime('2019-12-07 13:30');
        $this->time =date( 'H',time() );
        $case = 0;
        if( $this->time >= 12 && $this->time <18){
            $case = 1;
        }elseif ($this->time >= 18 && $this->time <24 ){
            $case = 2;
        }
        switch ($case){
            case 0 :
                $this->message = 'Good morning';
                break;
            case 1:
                $this->message = 'Good afternoon';
                break;
            case 2:
                $this->message = 'Good evening';
                break;
        }
        return  $this->message;
    }

}
