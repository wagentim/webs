<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="author" content="wagentim">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link type="text/css" href="style/user.css" rel="stylesheet">
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="js/mjs.js"></script>
<script>
	$(function() {
		$("#speed").selectmenu();
		$("#files").selectmenu();
		$("#number").selectmenu().selectmenu("menuWidget").addClass("overflow");
	});
		</script>
		<title>Home Apps</title>
	</head>
	<body>
		<div class="header_wrap">
			<div class="header_content">
				<nav>
					<a href="main.php">Home Apps</a> | 
					<a>代购系统</a>
				</nav>
			</div>
		</div>
		<div class="left_block">
			显示大概的统计数据
		</div>
		<!-- main area -->
		
		<!-- the operation area -->
		<
		<div class="demo">
			<form action="#">
				<fieldset>
					<label for="speed">Select a speed</label>
					<select name="speed" id="speed">
						<option>Slower</option>
						<option>Slow</option>
						<option selected="selected">Medium</option>
						<option>Fast</option>
						<option>Faster</option>
					</select>
					<label for="files">Select a file</label>
					<select name="files" id="files">
						<optgroup label="Scripts">
							<option value="jquery">jQuery.js</option>
							<option value="jqueryui">ui.jQuery.js</option>
						</optgroup>
						<optgroup label="Other files">
							<option value="somefile">Some unknown file</option>
							<option value="someotherfile">Some other file with a very long option text</option>
						</optgroup>
					</select>
					<label for="number">Select a number</label>
					<select name="number" id="number">
						<option>1</option>
						<option selected="selected">2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
					</select>
				</fieldset>
			</form>
		</div>
		<div class="table"></div>
	</body>
</html>