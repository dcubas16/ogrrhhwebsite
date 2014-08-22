<script>

ko.bindingHandlers.stopBinding = {
	    init: function() {
	        return { controlsDescendantBindings: true };
	    }
	};

ko.virtualElements.allowedBindings.stopBinding = true;

var headerViewModel = {
		userId : ko.observable(null),
		userName : ko.observable(<?php echo "'".$userName."'";?>),
		password : ko.observable(null),
		logedUser : ko.observable(<?php echo $userName!=null; ?>),//Determina si un usuario esta logeado o no
		loginError : ko.observable(false),//Determina si no se logeo bien el usuario
		searchString : ko.observable(null),//Determina si no se logeo bien el usuario 
		
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
};

$(function() {
	ko.applyBindings(headerViewModel, $("body")[0]);
	$(".left-navbar").height($("#content-div").height());
});
</script>