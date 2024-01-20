@extends('layouts.app')

@section('content')
<div class="flex-container">
<div class='dashboard_link'>
   
<div class="Link_left" style='margin-left: 0px'>
                <ul class="linked">
                    <a href="#" class="list-group-item" style="background-color: teal;">Dashboard</a>
                    <a href="/resource" class="list-group-item">Resources</a>
                    <a href="/feedback" class="list-group-item">Feedback</a>
                </ul>
</div>
</div>

<div class="dash_container">
    <h4>MAP _ Illustration of potential hazard</h4>
    <div id="map"></div>
    <h3>Bar Chart</h3>
    <canvas id="accidentChart"></canvas>
    
</div>
</div>
<div class='recently'>
 <h5>Recently Accident Hazard Occurred</h5>
 <div class="recently_list">
 <ul style="list-style-type: none; padding: 0; margin: 0;">
        @foreach($sensorData->take(2) as $data)
        <li>
            <strong>On</strong> {{ $data->timestamp }} | The car with plate number {{ $data->license_plate }}  has been reported to cause potential hazard.
        </li>
        @endforeach
    </ul>
</div>
    <div class="image_controller"  style="margin-top: 20px;">
    <a href="/alldetails "> <img src="{{ asset('Image/scroll.png') }}" alt="continue" style=" vertical-align: middle; margin-right:650px; width:70px;height:70px;" /></a>
    <div class="download" style="display: inline-block; margin-left: 10px;">
        <strong  style=" color:green;">Download App</strong>
        <img src="{{ asset('Image/appdownload.png') }}" alt="continue" style="vertical-align: middle; margin-left:5px;" />
    </div>
</div>


</div>
</div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG06u0SQFBEzWIvI85e57psRrfMdQkpF4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Function to initialize the Google Map
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 40.7128, lng: -74.0060 },
                zoom: 7 
            });

            var markers = [
                @foreach($markers as $marker)
                {
                    position: {
                        lat: parseFloat('{{ $marker['position']['lat'] }}'),
                        lng: parseFloat('{{ $marker['position']['lng'] }}')
                    },
                    draggable: {{ $marker['draggable'] ? 'true' : 'false' }},
                    title: '{{ $marker['title'] }}',
                    info: 'Plate: {{ $marker['title'] }}<br>Latitude: {{ $marker['position']['lat'] }}<br>Longitude: {{ $marker['position']['lng'] }}' 
                },
                @endforeach
            ];

            markers.forEach(markerData => {
                var marker = new google.maps.Marker({
                    position: markerData.position,
                    map: map,
                    draggable: markerData.draggable,
                    title: markerData.title
                });

                var infoWindow = new google.maps.InfoWindow({
                    content: markerData.info
                });

                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
            });
        }

        // Function to initialize the Chart
        function initChart() {
            var accidentData = @json($accidentCounts);

            var ctx = document.getElementById('accidentChart').getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: accidentData.map(data => data.date),
                    datasets: [{
                        label: 'Accidents by Date',
                        data: accidentData.map(data => data.count),
                        backgroundColor: 'brown',
                        borderColor: 'none',
                        borderWidth: 1
                    }]
                },
                options: {
                    barPercentage: 0.3,
                    categorySpacing: 01,
                    categoryPercentage: 0.7,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Event listeners to ensure both map and chart initialize properly
        document.addEventListener('DOMContentLoaded', initMap);
        document.addEventListener('DOMContentLoaded', initChart);
    </script>

@endsection
