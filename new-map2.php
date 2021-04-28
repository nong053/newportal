<html><head>
	
	<title>NCOC PORTAL</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





	<style>


    @import url(fonts/thsarabunnew.css);
    body{ font-family: 'THSarabunNew', sans-serif; 
    /* line-height: 1.7em; background: #e1e1e1;  */
    }


		html, body {
			height: 100%;
			margin: 0;
		}
		#map {
			width: 100%;
			height: 100%;
		}
        .graph1{
            width:500px;
            height: 500px;
            background:"#cccccc";
        }
        .graph2{
            width:500px;
            height: 500px;
            background:"green";
        }
     
        
	
    .info { 
        padding: 6px 8px; font-family:'THSarabunNew', sans-serif;
        /* background: white;
        background: rgba(255,255,255,0.8);  */
        background: radial-gradient(farthest-side ellipse at 10% 0,#333867 20%,#17193b);
        box-shadow: 0 0 15px rgba(0,0,0,0.2); 
        border-radius: 5px; 
        color:#ccc;
        } 
    .info h4 { 
        margin: 0 0 5px; color: #ccc; 
        }
    .legend { 
        text-align: left; line-height: 18px; color: #ccc; } 
    .legend i {
            width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; 
        }

        .title{
            clear: both;
            padding-top:15px;
        }

    </style>
</head>
<body class="">

<div id="map" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0" style="position: relative; outline: none;">









<!-- <script type="text/javascript" src="https://leafletjs.com/examples/choropleth/us-states.js"></script> -->
<script type="text/javascript" src="thailand.js"></script>

<script type="text/javascript">



var dataRight='';


$(document).ready(function(){
    var dataEnable="";
$.ajax({
                url:"api/service.php",
                type:"post",
                dataType:"json",
                data:{"action":"getData"},
                async:false,
                success:function(data){
                   

                   

                    if(data[0]['data_report_status1']==1){
                       
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>สถานการณ์การแพร่ระบาดของโรค COVID-19 ทั่วโลก</h4>";
                            dataEnable+="<img src=\"images/data_report01.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status2']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>ประเทศที่มีผู้ติดเชื้อฯ สูงสุด 10 อันดับ</h4>";
                        dataEnable+="<img src=\"images/data_report02.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status3']==1){
                        dataEnable+="<div class='title'>";
                            dataEnable+="<h4>ประชาคมอาเซียน</h4>";
                        dataEnable+="<img src=\"images/data_report03.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status4']==1){
                        dataEnable+="<div class='title'>";
                            dataEnable+="<h4> สถานการณ์การแพร่ระบาดของโรค COVID-19 ประเทศไทย</h4>";
                        dataEnable+="<img src=\"images/summay-covid19.png\" style=\"width:100%;  \">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status5']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4> ศักยภาพ ร.พ.สังกัด ท.อ</h4>";
                        dataEnable+="<img src=\"images/hopital-rtaf3.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status6']==1){
                        dataEnable+="<div class='title'>";
                            dataEnable+="<h4> สถิติผู้ติดเชื้อ</h4>";
                        dataEnable+="<img src=\"images/data_report06.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status7']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>State Quarantine</h4>";
                        dataEnable+="<img src=\"images/data_report07.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status8']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>การสนับสนุนด้านเวชภัณฑ์ป้องกัน</h4>";
                        dataEnable+="<img src=\"images/data_report08.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status9']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>การประชาสัมพันธ์</h4>";
                        dataEnable+="<img src=\"images/data_report09.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status10']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>จำนวนผู้ป่วย ARI Clinic</h4>";
                        dataEnable+="<img src=\"images/data_report10.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status11']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4>พัสดุสายแพทย์</h4>";
                        dataEnable+="<img src=\"images/data_report11.png\" style=\"width:100%;\">";
                        dataEnable+="<img src=\"images/data_report11-2.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status12']==1){
                        dataEnable+="<div class='title' >";
                            dataEnable+="<h4>พัสดุสายพลาธิการ</h4>";
                        dataEnable+="<img src=\"images/data_report12.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                    if(data[0]['data_report_status13']==1){
                        dataEnable+="<div  class='title'>";
                            dataEnable+="<h4> เครื่องบินลำเลียงสนับสนุนการงานด้านการแพทย์</h4>";
                        dataEnable+="<img src=\"images/data_report13-1.png\" style=\"width:100%;\">";
                        dataEnable+="</div>";
                    }

                }
            });

            dataRight= '<div  class="col-md-12"  style="padding-left:0px; padding-right:0px;">' +dataEnable+'</div>';




function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}



	var map = L.map('map').setView([13.736717,104.523186], 7);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/light-v9',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);


	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

    

	info.update = function (props) {
		this._div.innerHTML = '<h4 style="text-align:center;padding:10px;">อัปเดตสถานการณ์โควิด 19 ในไทย </h4>' +  (props ?
			
            
            '<div class="row1" style="width:450px;">'+
                '<div  class="col-md-12" style="padding-left:0px; padding-right:0px;">'+
                    '<div style="padding:10px; border:1px #ccc solid; border-radius:5px; margin-bottom:5px; background: radial-gradient(farthest-side ellipse at 10% 0,#333867 20%,#17193b);">'+
                    '<b style="font-size:18px; margin-bottom:5px; ">' + props.name + '</b><br />ผู้ป่วยสะสม <span style="font-size:35px; position:absolute;top:10px; right:10px; font-weight:bold; color:red; float:right;">' + numberWithCommas(props.infected) + ' </span></sup>'+
                    '</div>'+
                   
                '</div>'+
                
                dataRight+
              
            '</div>'
            


			:  '<div class="row1" style="width:450px;">'+
                '<div  class="col-md-12"  style="padding-left:0px; padding-right:0px;">'+
                '<div style="padding:10px; border:1px #ccc solid; border-radius:5px; margin-bottom:5px; background: radial-gradient(farthest-side ellipse at 10% 0,#333867 20%,#17193b);">'+
                    '<b style="font-size:18px; margin-bottom:5px; ">ประเทศไทย </b><br />ผู้ป่วยสะสม <span style="font-size:35px; position:absolute;top:10px; right:10px; font-weight:bold; color:red; float:right;">57,508</span> </sup>'+
                    '</div>'+
           
                '</div>'+
                dataRight+
            '</div>');
	};

	info.addTo(map);


	// get color depending on population density value
	function getColor(d) {
		return d > 1000 ? '#800026' :
				d > 500  ? '#BD0026' :
				d > 200  ? '#E31A1C' :
				d > 100  ? '#FC4E2A' :
				d > 50   ? '#FD8D3C' :
				d > 20   ? '#FEB24C' :
				d > 10   ? '#FED976' :
							'#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.infected)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 3,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.5
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
        console.log(e);
       
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map);

	map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');


	var legend = L.control({position: 'bottomleft'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 10, 20, 50, 100, 200, 500, 1000],
			labels = [],
			from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(map);
/*
โรงพยาบาลภูมิพลอดุลยเดช 13.910  100.168
โรงพยาบาลจันทรุเบกษา 14.102986799450537, 99.93920746822215
โรงพยาบาลทหารอากาศ (สีกัน) 13.941317833449533, 100.5813621835636
โรงพยาบาลกองบิน ๔๑ 18.77819384258235, 98.97289742594486
โรงพยาบาลกองบิน ๔๖ 16.79492775493855, 100.27485638359222
โรงพยาบาลกองบิน ๔ 15.27341598729875, 100.30566626823321
โรงพยาบาลกองบิน ๑ 14.921605696573927, 102.08082095473699
โรงพยาบาลกองบิน ๕ 11.764008854433957, 99.79516478354662
โรงพยาบาลกองบิน ๒๑ 15.260738600861265, 104.87044639706875
โรงพยาบาลกองบิน ๒๓ 17.386684454094784, 102.80227916825618
โรงพยาบาลกองบิน ๒ 14.87515083686046, 100.64458012590079
โรงพยาบาลกองบิน ๗ 9.155597412953382, 99.14531386818882
โรงพยาบาลกองบิน ๕๖ 6.929611705244659, 100.40993884119516
โรงพยาบาลสนามกองทัพอากาศ (ดอนเมือง) 13.909422260786203, 100.61565519324694



*/


var hospitalIcon = L.icon({
    iconUrl: 'images/marker-icon-58.png',


    iconSize:     [60, 60], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    // shadowAnchor: [4, 62],  // the same for the shadow
    // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

function markerOnClick(e)
{
    console.log(e);
  alert("hi. you clicked the marker at " + e.latlng);
}

    var marker1 = L.marker([13.910 , 100.168]).on('click', markerOnClick).addTo(map);//โรงพยาบาลภูมิพลอดุลยเดช
    var marker2 = L.marker([14.102986799450537, 99.93920746822215]).addTo(map);//โรงพยาบาลจันทรุเบกษา 
    var marker3 = L.marker([13.941317833449533, 100.5813621835636]).addTo(map);//โรงพยาบาลทหารอากาศ (สีกัน)
    var marker5 = L.marker([ 18.77819384258235, 98.97289742594486]).addTo(map);//โรงพยาบาลกองบิน ๔๑
    var marker6 = L.marker([ 16.79492775493855, 100.27485638359222]).addTo(map);//โรงพยาบาลกองบิน ๔๖
    var marker7 = L.marker([15.27341598729875, 100.30566626823321]).addTo(map);//โรงพยาบาลกองบิน ๔
    var marker8 = L.marker([14.921605696573927, 102.08082095473699]).addTo(map);//โรงพยาบาลกองบิน ๑
    var marker9 = L.marker([11.764008854433957, 99.79516478354662]).addTo(map);//โรงพยาบาลกองบิน ๕
    var marker10 = L.marker([15.260738600861265, 104.87044639706875]).addTo(map);//โรงพยาบาลกองบิน ๒๑
    var marker11 = L.marker([17.386684454094784, 102.80227916825618]).addTo(map);//โรงพยาบาลกองบิน ๒๓
    var marker12 = L.marker([14.87515083686046, 100.64458012590079]).addTo(map);//โรงพยาบาลกองบิน ๒
    var marker13 = L.marker([9.155597412953382, 99.14531386818882]).addTo(map);//โรงพยาบาลกองบิน ๗
    var marker14 = L.marker([6.929611705244659, 100.40993884119516]).addTo(map);//โรงพยาบาลกองบิน ๕๖
    var marker15 = L.marker([13.909422260786203, 100.61565519324694]).addTo(map);//โรงพยาบาลสนามกองทัพอากาศ (ดอนเมือง)

});

</script>

<style>
 .box1{
    width:100%;
     height:200px;
     background:#EE4900;
     border-radius:5px;
 }
 .box2{
    width:100%;
     height:200px;
     background:#7432A7;
     border-radius:5px;
 }
 .box3{
    width:100%;
     height:200px;
     background:#049B4A;
     border-radius:5px;
 }
 .box4{
    width:100%;
     height:200px;
     background:#BE1C2B;
     border-radius:5px;
 }
 .box5{
     width:100%;
     height:200px;
     background:#1876BC;
     border-radius:5px;
 }
</style>

<!-- <div style="z-index:900; position:relative; top:0px;">
<div class="row" >
    <div class="col-md-4">
        <div class="row" >
            <div class="col-md-7">
                <div class="box1">
                    ติดเชื้อเพิ่ม
                    <hr>

                </div>
                <div class="box2">
                    รักษาตัว
                    <hr>
                    
                </div>
            </div>
            <div class="col-md-5">
                <div class="box3">
                    เสียชีวิต
                    <hr>
                </div>
                <div class="box4">
                    หายแล้ว
                    <hr>
                </div>
                <div class="box5">
                    รักษาตัว
                    <hr>
                </div>
            
            </div>

            
        </div>
    </div>
    
</div>
</div> -->


</body></html>