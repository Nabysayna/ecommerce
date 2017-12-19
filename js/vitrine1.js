var nombre=1;
function nouveaute(){
	nombre=1;
}
function vedette(){
	nombre=2;
}
function modal(){
	//var mag=$(this).attr('class');
	//var mag=this.;
	//console.log(mag);
	//alert(mag);

	/*$('#myModal').on('shown.bs.modal', function () {
         $('#myInput').focus();
           });*/
      }
function afficherv1(id){
 if(id==1){
	document.location.href='afficher_plus_nouveaute.php';
    }
  if(id==2){
	document.location.href='afficher_plus_vedette.php';
    }
  if(id==3){
	document.location.href='afficher_plus_nouveaute.php';
    }


}
$(document).ready(function(){
	var donnee="",donneeserver,donneeafficher=[],donneeszone=[];
	/*$.ajax({
          	url : 'nouveaute.php',
          	type :'post',
          	dataType : 'json',
          	success : function(data){
          		//donneeserver=data;
          		donneeafficher=[];
          		console.log(data);
          		$.each(data,function(cle,val){ 
          			//donnee+='<img style="height:200px; width:200px;margin:10px" src="'+this.url+'" alt="image" />';
          			donneeafficher.push(this);
          		});
          	 },
          	error : function(data){ alert('erreur');console.log(data);}
          });*/
	$( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.values[ 0 ] + " fcfa  -  "  + ui.values[ 1 ] + "  fcfa " );
      }
    });
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) + " fcfa  -  " +
        $( "#slider-range" ).slider( "values", 1 ) + "  fcfa " );
   /* $("#slider-range").on('click',function(){
    	var minmax=$(this).slider("option","values");
    	//var prix=$(this).attr('prix').split('/');
		var i=0;
         for(i=0;i<donneeafficher.length;i++){
             if(parseInt(donneeafficher[i].prix)>=parseInt(minmax[0]) && parseInt(donneeafficher[i].prix)<=parseInt(minmax[1])){
             	donnee+='<img style="height:200px; width:200px;margin:10px" src="'+donneeafficher[i].url+'" alt="image" />';
             	//donneeafficher.push(this);
             	console.log(donneeafficher);
             }
         }
         $("#ids").html(donnee);
         donnee="";

    });*/
    $("#slider-range").on('slidechange',function(event,ui){
    	var minmax=$(this).slider("option","values");
		var i=0;
         for(i=0;i<donneeafficher.length;i++){
             if(parseInt(donneeafficher[i].prix)>=parseInt(minmax[0]) && parseInt(donneeafficher[i].prix)<=parseInt(minmax[1])){
             	donnee+='<img style="height:200px; width:200px;margin:10px" src="'+donneeafficher[i].url+'" alt="image" />';
             	//donneeafficher.push(this);
             	console.log(donneeafficher);
             }
         }
         $("#ids").html(donnee);
         donnee="";

    });
    $(".couleur").on('click',function(){
    	var color=$(this).attr('value');
    	var i=0;
    	for(i=0;i<donneeafficher.length;i++){
    		 console.log(donneeafficher[i].couleur);
             if(donneeafficher[i].couleur!="" && donneeafficher[i].couleur==color){
             	donnee+='<img style="height:200px; width:200px;margin:10px" src="'+donneeafficher[i].url+'" alt="image" />';
             	//donneeafficher.push(this);
             	console.log(donneeafficher);
             }
         }
         $("#ids").html(donnee);
         donnee="";

    });
    /*$('.prix').on('click',function(){
		var prix=$(this).attr('prix').split('/');
		var i=0;
         for(i=0;i<donneeafficher.length;i++){
             if(parseInt(donneeafficher[i].prix)>=parseInt(prix[0]) && parseInt(donneeafficher[i].prix)<=parseInt(prix[1])){
             	donnee+='<img style="height:200px; width:200px;margin:10px" src="'+donneeafficher[i].url+'" alt="image" />';
             	//donneeafficher.push(this);
             	console.log(donneeafficher);
             }
         }
         $("#ids").html(donnee);
         donnee="";
	});*/
  
	
	$("#region").on('change',function(){
		var reg=$(this).val(); //'%\"type\":\"petiteannonce\"%'
		var reg2=reg;
          $.ajax({
          	url : 'getzone.php',
          	type :'post',
          	data : 'region='+reg2,
          	dataType : 'json',
          	success : function(data){
          		donneeserver=data;
          		donneeafficher=[];
          		console.log(data);
          		$.each(data,function(cle,val){ 
          			donnee+='<img style="height:200px; width:200px;margin:10px" src="'+this.url+'" alt="image" />';
          			donneeafficher.push(this);
          		});
          	  $("#ids").html(donnee);donnee="";},
          	error : function(data){ alert('erreur');console.log(data);}
          });
	});
	$("#zone").on('change',function(){
		var zone=$(this).val();
		donneeafficher=[];
		$.each(donneeserver,function(){
			var adresse=this.adresse;
			console.log(adresse.zone);
			console.log(zone);
		  if(adresse.zone==zone){
			donnee+='<img style="height:200px; width:200px;margin:10px" src="'+this.url+'" alt="image" />';
			//donneeszone.push(this);
			donneeafficher.push(this);
            console.log(adresse.zone);
           }
          
		});
		$("#ids").html(donnee); 
		 //$("#ids").html(donnee);
         donnee="";
	});
	$("#szone").on('change',function(){
        donneeafficher=[];
		var souszone=$(this).val();
		$.each(donneeserver,function(){
			var adresse=this.adresse;
			console.log(adresse.zone);
		  if(adresse.szone==souszone){
			donnee+='<img style="height:200px; width:200px;margin:10px" src="'+this.url+'" alt="image" />';
			donneeafficher.push(this);
            console.log(adresse.szone);
           }

		});
		    $("#ids").html(donnee);
            donnee="";
	});
	
	$( "#accordion" ).accordion();
	//$( "#id" ).hide();
	//$( "#id" ).click.show();
	//$( "#accordion1" ).hide();
	$( "#accordion1" ).accordion();
	$(".link").on('click',function(){
		var att=$(this).attr('links');
		$('#zoom').html('<img src="'+att+'"alt="image" />');
		var desk=$(this).attr('desk');
		var tab=desk.split('/');
		console.log(tab[0]);
		$('#description').html('<b style="font-size:1.5em">'+tab[0]+'</b>');
		$('#prix').html('<b style="font-size:1.5em">Prix : '+tab[1]+' fcfa</b>');
		//$('#link').attr('src',att);
		$('#zoom').zoom();
		
		//$('#zoom').zoom({src : att});
       

	});
	
});