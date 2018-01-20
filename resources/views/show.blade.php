@extends('layouts.app1')

@section('content')
<script src="{{asset('Build/Cesium/Cesium.js')}}"></script>
<style>
      @import url({{asset('Build/Cesium/Widgets/widgets.css')}});
 
#cesiumContainer {
    width:1000px;	 
}
.cesium-viewer-bottom{
    display:none;
}
.sec{
    padding: 20px;
}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
</style>
<script>

function bigPicture() {
      viewer.trackedEntity = undefined
	 
	 if (icrfSwitch == false) { 
	  scene.preRender.addEventListener(icrf);
	  icrfSwitch = true ;
	 } ;
      viewer.camera.setView({
      destination : Cesium.Cartesian3.fromDegrees(-117.16, 32.0, 1500000000.0)
     });
	 viewer.trackedEntity = earthCore ;
	 console.log ("big picture") ;
}

function showSpaceCraft() {
    viewer.trackedEntity = undefined
	
	if (icrfSwitch) { 
	   scene.preRender.removeEventListener(icrf); 
	   icrfSwitch = false ;
	   } ;

    var spaceCraft = czmlDataSource1.entities.getById('lunarProbe') ;	
	  viewer.trackedEntity = spaceCraft ;
}
function showTheMoon() {
    viewer.trackedEntity = undefined
	
   if (icrfSwitch) { 
      scene.preRender.removeEventListener(icrf);
   	  icrfSwitch = false ;
	} ;
	   
	var ourMoon = czmlDataSource2.entities.getById('theMoon') ;	
    viewer.trackedEntity = ourMoon ;
}
function showTheEarth() {
      viewer.trackedEntity = undefined  
	  
   if (icrfSwitch == false) {   
	  scene.preRender.addEventListener(icrf);
	  icrfSwitch = true ;
	};
  // Set position with a top-down view
      viewer.camera.setView({
      destination : Cesium.Cartesian3.fromDegrees(-117.16, 32.0, 150000000.0)
     });
	  viewer.trackedEntity = earthCore ;
}

function initializeButtons() {
	  document.getElementById('showShip').disabled = true;
    //  document.getElementById('showMoon').disabled = true;
      document.getElementById('showEarth').disabled = true;
     // document.getElementById('bigPicture').disabled = true;
      document.getElementById('announcement').innerHTML = "Models are loading.";
	
    
	  setTimeout(activateButtons,2000) ;   // Wait two seconds before activating the buttons.
      
}

function activateButtons() {
	  // Enable the buttons
         document.getElementById('showShip').disabled = false;
        // document.getElementById('showMoon').disabled = false;
         document.getElementById('showEarth').disabled = false;
         //document.getElementById('bigPicture').disabled = false;
         document.getElementById('announcement').innerHTML = "Models have loaded; you may select a view point.";
		 
		 luna = czmlDataSource2.entities.getById('theMoon') ;    // Get the entity for the Moon.
		 viewer.clock.onTick.addEventListener(rotateMoon) ;      // Rotate the Moon.
}

</script>

<center>
    <section class="container-fluid sec" onload="initializeButtons()">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <h2 id="announcement">{{$sattalite->title}}</h2>
            </div>
            
            
            <!--<input type="button" id="bigPicture" value="Big Picture" onclick="bigPicture();" /><br>-->
            <input type="button" id="showShip" value="Spacecraft" onclick="showSpaceCraft();" />
            <!--<input type="button" id="showMoon" value="Moon" onclick="showTheMoon();" /><br>-->
            <input type="button" id="showEarth" value="Earth" onclick="showTheEarth();" /><br>
            <br>
            <img src="{{asset( '/images/sattalites/'.$sattalite->image)}}" style="width:200px;float:right;" alt="{{ URL::to('browse/'.$sattalite->id) }}">
            <div><strong><h3 style="text-align: left;">Description: </h3></strong></div>
            <div style="text-align: left;">{!! $sattalite->description !!}</div>
            <br>
            
            
     
            
            <span><strong class="pull-left">Two Line Element Set (TLE): </strong></span><br/>

            <div style="text-align: left;">{!! $sattalite->tle !!}</div>
        </div>
        <div class="col-md-7">
            <div id="cesiumContainer"></div>
        </div>
    </div>
        {!! $sattalite->visual_data !!}
  <script>
   var viewer = new Cesium.Viewer('cesiumContainer', {
       infoBox : false,
       selectionIndicator : false,
       baseLayerPicker : false,
        //Use OpenStreetMaps
        imageryProvider : new Cesium.ArcGisMapServerImageryProvider({
            url : 'https://services.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer'
         })
	});
	var scene = viewer.scene;
    var clock = viewer.clock;

   var czmlDataSource1 = new Cesium.CzmlDataSource();
   
    var data = {!! json_encode($sattalite->data_file) !!};


       czmlDataSource1.load(JSON.parse(data));
       viewer.dataSources.add(czmlDataSource1); 
	   
   var czmlDataSource2 = new Cesium.CzmlDataSource();
       //czmlDataSource2.load('LunarOrbit_withTexture.czml');
      // viewer.dataSources.add(czmlDataSource2);   

    var camera = viewer.scene.camera;
	
  function icrf(scene, time) {
    if (scene.mode !== Cesium.SceneMode.SCENE3D) {   // may not be necessary
        return;
    }
    var icrfToFixed = Cesium.Transforms.computeIcrfToFixedMatrix(time);
    if (Cesium.defined(icrfToFixed)) {
        var offset = Cesium.Cartesian3.clone(camera.position);
        var transform = Cesium.Matrix4.fromRotationTranslation(icrfToFixed);
        camera.lookAtTransform(transform, offset);
    }
};
	clock.multiplier =  100 ; // 60 * 60 * 60;          // speed of the simulation
    scene.preRender.addEventListener(icrf);  // enable Earth rotation
	var icrfSwitch = true ;                  // flag for icrf event listener
	
    scene.globe.enableLighting = true;
	viewer.scene.moon.show = false;           // Turn off the default moon.
	
	var previousTime = clock.currentTime ;
   function rotateMoon(scene, time) {
      var rotRadSec = 0.00000259722 ;        // rotation in radians per second
      var currentTime = clock.currentTime ;
	  var delta = Cesium.JulianDate.secondsDifference(previousTime, currentTime);
	  var spin = delta * rotRadSec;  // differnece in seconds * radians/second.
	  var axis = new Cesium.Cartesian3(0,0,1) ;   // spin about the Z axis
	  var rotation = Cesium.Quaternion.fromAxisAngle(axis, spin) ;
	   luna.orientation = rotation ;
	   previousTime = currentTime ;   // increment the time
   };
	  viewer.scene.camera.frustum.far = 1e12;            //Move the far wall of the viewing frustum.
	
	// Set position with a top-down view
      viewer.camera.setView({
      destination : Cesium.Cartesian3.fromDegrees(-117.16, 32.0, 1500000000.0)
     });
	
	var earthCore = viewer.entities.add(
     { id:"core",
       position : Cesium.Cartesian3(0,0,0),
       point: { show : false  }
	 });

	showTheEarth();
	// viewer.extend(Cesium.viewerCesiumInspectorMixin);  //Add Cesium Inspector
</script>
</section>
</center>
@endsection
