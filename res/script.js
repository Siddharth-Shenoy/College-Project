$(document).ready(function()
{

	$.get("./pages/getlogin.php",function(data,status)
	{
		if(status=="success")
		{
			$("#tabaccount").html(data);
		}
	});
	$("a#tabbutton").click(function()
	{
		let tabbody = $(this).attr("mtarget");
		let action = $(this).attr("actionurl");
		$.get(action,function(data,status)
		{
			if(status=="success")
			{
				// /console.log(data);
				$("#"+tabbody).html(data);
			}
		});
		$("a#tabbutton").attr("class","");
		$(this).attr("class","active");
		console.log(tabbody + "," + action);
	});
	$("#dropdownclick").click(function()
	{
		// /alert("clicked");
		let target = $(this).attr("mtarget");
		if($("#"+target).css("display") == "none")
			$("#"+target).css("display","block");
		else
			$("#"+target).css("display","none");
		//$("body").css("background-color","black");
	});
});