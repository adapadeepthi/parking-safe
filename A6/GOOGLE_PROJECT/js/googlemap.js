var map;
var geocoder;
function loadMap() {
	var allData = JSON.parse(document.getElementById('allData').innerHTML);
	var vehicle_type=document.getElementById('veh_type').innerHTML;
	var time_period=document.getElementById('time_period').innerHTML;
	var from=document.getElementById('from').innerHTML;
	var to=document.getElementById('to').innerHTML;
	var vehicle_type=document.getElementById('veh_type').innerHTML;
	var vehicle_num=document.getElementById('vehicle_num').innerHTML;
	var from_time=document.getElementById('from_time').innerHTML;
	var to_time=document.getElementById('to_time').innerHTML;
	console.log(time_period);
	if(vehicle_type=='car')
	{
		time_period=time_period*4;
	}
	if(allData.length==0)
	{
		alert("no data available for the given location");
		return ;
	}
	console.log(allData);
	console.log(parseFloat(allData[0].lat));
	console.log(parseFloat(allData[0].lng));
	var location={lat:parseFloat(allData[0].lat),lng:parseFloat(allData[0].lng)};
	//var location = {lat:parseFloat(allData[0].lat),lng:parseFloat(allData[0].lng)};
 	map=new google.maps.Map(document.getElementById('map'),{
		zoom:12;
		center:location
	});
	var marker=new google.maps.Marker({
		position:location,
		map:map
	});
	var cdata = JSON.parse(document.getElementById('allData').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);
	
    showAllColleges(allData,time_period,to,from,vehicle_num,from_time,to_time)
}
function showAllColleges(allData,time_period,to,from,vehicle_num,from_time,to_time) {
var infoWind = new google.maps.InfoWindow;
Array.prototype.forEach.call(allData, function(data){
var content = document.createElement('div');
var strong = document.createElement('strong');
strong.textContent = data.address ;
console.log(data.address);
console.log(data);
content.appendChild(strong);

var x = document.createElement("A");
  var t = document.createTextNode("navigate");
  console.log(data.id);
  x.setAttribute("href", "http://localhost:8090/A6/booking_details/booking.php?id="+data.id+"&time="+time_period+"&to="+to+"&from="+from+"&vehicle_num="+vehicle_num+"&from_time="+from_time+"&to_time="+to_time);
  x.appendChild(t);

content.appendChild(x);


var marker = new google.maps.Marker({
     position: new google.maps.LatLng(data.lat, data.lng),
     map: map
   });

   marker.addListener('mouseover', function(){
    infoWind.setContent(content);
    infoWind.open(map, marker);
   })
})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	      //  updateCollegeWithLatLng(points);
	      } else {
	        //alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}
//function updateCollegeWithLatLng(points) {
	//$.ajax({
		//url:"action.php",
		//method:"post",
		//data: points,
		//success: function(res) {
		//	console.log(res)
	//	}
	//})
	
//}