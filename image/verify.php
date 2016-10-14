<?php
	
	if(isset($_GET["now"]))
	{
		verify_code();	
	}

	function verify_code()
	{
		$string="a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,p,q,r,s,t,,v,w,x,y,z,0,1,2,3,4,5,6,7,8,9";
		$arry=explode(",",$string);
		$code="";
		$image=imagecreate(50,30);
		$white=imagecolorallocate($image,255,255,255);
		$black=imagecolorallocate($image,0,0,0);
		imagefill($image,0,0,$white);
		$x=5;
		for($i=1;$i<=4;$i++)
		{
			$tmp=$arry[rand(0,35)];
			$code.=$tmp;
			$color=imagecolorallocate($image,rand(0,128),rand(0,128),rand(0,128));
			imagettftext($image,15,rand(-30,30),$x,15,$color,"simsunb.ttf",$tmp);
			$x+=11;
		}
		$name="verify".rand(0,3);
		imagejpeg($image,$name.".jpg");
		imagedestroy($image);
		echo "<img src='".$name.".jpg'>";
	}
	
	
?>
