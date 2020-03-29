<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>

</html>

<body>
	<center>
		<h1>
			<?php

				echo "Hello World!";
				$v1 = "this is a variable";
				$v_int1 = 1;
				$v_int2 = 2;
				$v_intsum  = $v_int1 + $v_int2;

			

			?>
			<br>
				<?php
					echo $v_intsum;
				?>
			</br>
			<br>
				<?php
					if($v_int1 == $v_int2){
						echo "First and Second V are equal";
					}else{
						echo "the Input vars are not equal";
					}
				?>
			</br>
		</h1>
	</center>

</body>

