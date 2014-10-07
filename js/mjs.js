/**
 * @author wagentim
 */

$(document).ready(function() {
	// TODO add some initial codes
});
function getTime() {
	var d = new Date();
	var dayOfWeek = d.getDay();
	var dayArray=["一","二","三","四","五","六","日"];
	var output = "今天是 "+d.getFullYear()+"年"+d.getMonth()+"月"+d.getDate()+"日"+" "+"星期"+dayArray[dayOfWeek-1];
	$(".fixed_headerbar_content").html(output);
}
