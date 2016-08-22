/* include at the end of the body section */
function init(){
	document.body.innerHTML += '<div id="users-device-size">\
								  <div id="xs" class="visible-xs"></div>\
								  <div id="sm" class="visible-sm"></div>\
								  <div id="md" class="visible-md"></div>\
								  <div id="lg" class="visible-lg"></div>\
								</div>';
}

function getBootstrapDeviceSize() {
  return $('#users-device-size').find('div:visible').first().attr('id');
}

init();
document.writeln(getBootstrapDeviceSize());
