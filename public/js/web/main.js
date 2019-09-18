var serialize = function (form) {
	var serialized = [];
	for (var i = 0; i < form.elements.length; i++) {
		var field = form.elements[i];
		if (!field.name || field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') continue;
		if (field.type === 'select-multiple') {
			for (var n = 0; n < field.options.length; n++) {
				if (!field.options[n].selected) continue;
				serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[n].value));
			}
		}
		else if ((field.type !== 'checkbox' && field.type !== 'radio') || field.checked) {
			serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value));
		}
	}
	return serialized.join('&');
};

var ajax = function(file, ajaxUrl){
	var lang = document.getElementById("language").value;
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/"+lang+"/ajax/index/"+file, true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xhttp.send(ajaxUrl);
	return xhttp;
};

var tempmodal = function(title, body, buttons){
	var html = '<div id="tempmodal" class="modal" tabindex="-1" role="dialog">';
	html += '<div class="modal-dialog" role="document">';
	html += '<div class="modal-content">';
	html += '<div class="modal-header">';
	html += '<h5 class="modal-title">'+title+'</h5>';
	html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
	html += '<span aria-hidden="true">&times;</span>';
	html += '</button>';
	html += '</div>';
	html += '<div class="modal-body">';
	html += body;
	html += '</div>';
	if(buttons!="false"){
		html += '<div class="modal-footer">';
		html += buttons;
		html += '</div>';
	}
	html += '</div>';
	html += '</div>';
	html += '</div>';
	/*<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
    <button type="button" class="btn btn-primary">Save changes</button>*/
    return html;
};

(function(){

	if(typeof document.getElementsByClassName("g-login-button")[0] !== "undefined"){
		document.getElementsByClassName("g-login-button")[0].addEventListener("click", (e) => {
			document.getElementsByClassName("g-login-button")[0].childNodes[1].style.display = "inline-block";
			
			$("#tempmodal").remove();

			var title = document.getElementsByClassName("g-login-button")[0].getAttribute("modal-title");
			var form = document.querySelector('#g-form-login');
			var formData = serialize(form);
			var lang = document.getElementById("language").value;

			var xhttp = ajax("investor_login",formData);
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var responseText = JSON.parse(this.responseText);

					if(responseText.Error.Code==1){
						var body = "<p>"+responseText.Error.Text+"</p>";
						var modal = tempmodal(title, body, "false");

						document.querySelector('[name="code"]').value = '';
						document.getElementsByClassName("g-realod-protect")[0].click();
					}else{
						var body = "<p>"+responseText.Success.Text+"</p>";
						var modal = tempmodal(title, body, "false");
						
						setTimeout(function(){
							location.href = "/"+lang+"/home";
						}, 1000);
					}
					
					$("body").append(modal);
					$("#tempmodal").modal("show");

					document.getElementsByClassName("g-login-button")[0].childNodes[1].style.display = "none";
				}
			};
		});
	};

	if(typeof document.getElementsByClassName("g-logout")[0] !== "undefined"){
		document.getElementsByClassName("g-logout")[0].addEventListener("click", (e) => {
			var lang = document.getElementById("language").value;
			location.href = "/"+lang+"/login";
		});
	};

	if(typeof document.getElementsByClassName("g-realod-protect")[0] !== "undefined"){
		document.getElementsByClassName("g-realod-protect")[0].addEventListener("click", (e) => {
			var img = document.getElementsByClassName("g-realod-protect")[0].getAttribute("data-img");
			var src = document.getElementsByClassName(img)[0].getAttribute('src');
			document.getElementsByClassName(img)[0].setAttribute('src', src+"&v="+Math.random());
		});
	};

})();