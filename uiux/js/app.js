//Custom Javascript implementations
//
//
//1. Autocomplete patient seection dropdown
//
// AJAX call for autocomplete 
// use $(function(){...})
// to make this a self invoking function that is available right after page load
$(function(){
	$("#search-box").keyup(function(){

			if($(this).val() != ''){
								$.ajax({
								type: "POST",
								url: "http://localhost/kaizen/KaizenMed/clients/read/",
								data:'keyword='+$(this).val(),
								beforeSend: function(){
									$("#search-box").css("background","#FFF url(http://localhost/kaizen/KaizenMed/uiux/img/LoaderIcon.gif) no-repeat 165px");
									},
							success: function(data){
								var clients = JSON.parse(data);

								if(clients.length > 0){
										$("#suggestion-box").show();
										var list = '<ul class="uk-nav uk-nav-dropdown">';
										for (i = 0; i < clients.length; i++) {
											list += '<li class="clickClientName" id="'+clients[i]['clinicID']+'" ><a href="#">'+clients[i]['name']+'</a></li>';
										}
										list += '</ul>';

										$("#suggestion-box").html(list);
										$("#search-box").css("background","#FFF");
								}else{
										$("#suggestion-box").html('');
										$("#suggestion-box").hide();
								}
								
							},
							crossDomain: true,
							error: function(error){
								console.log(error);
							}

			});
			}else{
									$("#suggestion-box").html('');
									$("#suggestion-box").hide();
			}


});


//when an item in dropdow list is clicked do something
	$(".uk-button-dropdown").on('click','.clickClientName',function(){

			var modal = UIkit.modal("#add-booking");
			modal.find($("#clinic-id").attr('value',$(this).attr('id')));

			$("#search-box").val($(this).text());
			$("#suggestion-box").hide();
	});

});




