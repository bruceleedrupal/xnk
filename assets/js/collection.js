function _initiallize_display_collection(selectElement,values){ 
   var nextElement = selectElement.parent().parent('.row').next();
   if(values.indexOf(selectElement.val())!=-1){
          nextElement.show();
   }
    else
      nextElement.hide();
}


function initiallize_display_collection(id,values){ 
   var selectElement;
   selectElement= $(id);
   _initiallize_display_collection(selectElement,values);
        selectElement.on('change',function(){
                 _initiallize_display_collection($(this),values);
        });
}

function initiallize_display_collection_all() {

	initiallize_display_collection('.lcevent_lcdie',['1']);
	return true;
}

$(document).ready(function(){

initiallize_display_collection_all();

 $('.collection').collection({
          'allow_down':false,
          'allow_up':false,
          'add':'<a href="#" class="btn btn-default"><i class="fa fa-plus-square"></i>',
          'remove':'<a href="#" class="btn btn-default"><i class="fa fa-trash"></i></a>',
	 'after_add': function(collection,element){ return initiallize_display_collection_all();}
   });



});
