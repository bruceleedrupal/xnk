/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../scss/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');


const $ = require('jquery');
global.$ = global.jQuery = $;

require('bootstrap/js/src/tab.js');
require('bootstrap/js/src/alert.js');
require('admin-lte/build/js/AdminLTE.js');

function _initiallize_display(selectElement,values){	
   siblings= selectElement.siblings('input');   
   console.log(selectElement);
   if(values.indexOf(selectElement.val())!=-1){
   	  siblings.show();
   }
    else 
      siblings.hide();
}


function initiallize_display(id,values){	
   var selectElement;
   selectElement= $(id);
   _initiallize_display(selectElement,values);
	selectElement.on('change',function(){
		 _initiallize_display(selectElement,values);
	});
}






$(document).ready(function(){
     initiallize_display('#patient_xyqk',['51']);
     initiallize_display('#patient_yjqk',['55','56','57']);

});
