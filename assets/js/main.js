/* main.js */
function beginTest(){
	$("html, body").animate({ scrollTop: $(document).height() }, 1000);
}
$("#registerForm").submit(function(event){
	$("#register .load").show();
	$("#register form").hide();
	$.post({
		  url: "login.php",
		  data: $(this).serialize()
	})
	.done(function( data ) {
		if(data.charAt(0) === "E"){
			switch(data){
				case "E_NO_NAME_ENTERED":
					toast("snackbar", "red", "Please enter a name");
					$("#register .load").hide();
					$("#register form").show();		
					break;
				default:
					toast("snackbar", "red", data);
					$("#register .load").hide();
					$("#register form").show();	
			}
		} else {
			$("#register .load").hide();
			$("#register").html(data);
		}
	});
	event.preventDefault();
});
var answers = [	"X","X","X","X","X",
					"X","X","X","X","X",
					"X","X","X","X","X",
					"X","X","X","X","X",
					"X","X","X","X","X"  ];

$(".problem-options .option").click(function(){
	var problemID = $(this).parent().attr("id").replace(/[^0-9]/g, '')-1;
	if(answers[problemID] === $(this).html()){
		$(this).removeClass("active");
		answers[problemID] = "X";
		$("#problem"+(problemID+1)).addClass("w3-yellow");
	} else if(answers[problemID] === "X") {
		$(this).addClass("active");
		answers[problemID] = $(this).html();
		$("#problem"+(problemID+1)).removeClass("w3-yellow");
	} else if(answers[problemID] !== $(this).html()) {
		$("#problem"+(problemID+1)+" button.active").removeClass("active");
		$(this).addClass("active");
		answers[problemID] = $(this).html();
		$("#problem"+(problemID+1)).removeClass("w3-yellow");
	}
});
$(document).keydown(function(e){
	switch(e.keyCode ) { 
		case 39:
			$(".option:focus").next().focus();
			break;
		case 37:      
			$(".option:focus").prev().focus();
			break;
		default: 
			break;
	}
	
});