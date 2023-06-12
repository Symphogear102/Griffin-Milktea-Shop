$time = now();
        echo $time->monthName;
        echo '<br>';
        echo $time->month;
        echo '<br>';
        echo $time->dayOfWeek;
        echo '<br>';
        echo $time->weekOfYear;
        echo '<br>';
        echo Carbon::today();
        echo '<br>';

        $employs = DB::table('deliveries')->sum('zPayment');
        $employes = DB::table('deliveries')->sum('zPayment');
        $total = $employs + $employes;

        print_r($total);  
    echo '<br>';
       
        $newyear = new Carbon('First day of January 2020');

        echo $newyear->diffForHumans();
        echo '<br>';
        echo Carbon::createFromDate();