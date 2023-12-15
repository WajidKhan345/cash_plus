<h1>Test Route</h1>


<h3>City: {{ $city }} </h3>
<h3>Javascript: {{ !empty($javascript) ? $javascript : 'No JavaScript Code Here' }} </h3>
<br>
@foreach ($users as $id => $list)
    <h3>{{ $id }} --{{ $list['name'] }} | {{ $list['mobile-no.'] }} | {{ $list['city'] }}
    <a href="">Show</a>
    </h3>
@endforeach
