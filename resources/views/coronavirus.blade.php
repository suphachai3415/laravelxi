<h1>Thailand Coronavirus Report</h1>
<table border="1">
    <tr>
        <th>Date</th> <th>Country</th> <th>Total</th> <th>Active</th> <th>Death</th> <th>Recovered</th>
    </tr>
    @foreach($reports as $item)
    <tr>
        <td>{{ $item->date }}</td>
        <td>{{ $item->country }}</td>
        <td>{{ $item->total }}</td>
        <td>{{ $item->active }}</td>
        <td>{{ $item->death }}</td>
        <td>{{ $item->recovered }}</td>
    </tr>
    @endforeach
</table>

<h1>Thailand Coronavirus Report</h1>
<table>
    <tr>
        <th>#</th> <th>Date</th> <th>Country</th> <th>Total</th> <th>Active</th> <th>Death</th> <th>Recovered</th>
    </tr>
    @foreach($reports as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->date }}</td>
        <td>{{ $item->country }}</td>
        <td>{{ $item->total }}</td>
        <td>{{ $item->active }}</td>
        <td>{{ $item->death }}</td>
        <td>{{ $item->recovered }}</td>
    </tr>
    @endforeach
</table>

Route::get('/coronavirus',function(){
    $reports = [
        (object) ["country"=>"Thailand" , "date"=>"2020-04-19" , "total"=>"2765", "active"=>"790"  , "death"=>"47", "recovered"=>"1928"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-18" , "total"=>"2733", "active"=>"899"  , "death"=>"47", "recovered"=>"1787"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-17" , "total"=>"2700", "active"=>"964"  , "death"=>"47", "recovered"=>"1689"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-16" , "total"=>"2672", "active"=>"1033" , "death"=>"46", "recovered"=>"1593"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-15" , "total"=>"2643", "active"=>"1103" , "death"=>"43", "recovered"=>"1497"],
    ];
    return view("coronavirus", compact("reports") );
})->name('coronavirus');

@switch($item->country)
@case("Thailand")
    <img src="https://spng.pngfind.com/pngs/s/637-6378530_thailand-flag-logo-vector-thailand-flag-hd-png.png" width=20 >
    @break
@case("China")
    <img src="https://cdn.countryflags.com/thumbs/china/flag-400.png" width=20 >
    @break
@endswitch


