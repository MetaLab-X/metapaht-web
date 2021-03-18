<?php
	function getdata_editer($id)
	{
		$sql="select * from  editer where id='$id'";
		$fetData=mysql_fetch_array(mysql_query("$sql"));
		$dataE="";
		
		$dataE[1]=$fetData['id'];
		$dataE[2]=$fetData['name_th'];
		$dataE[3]=$fetData['name_en'];
		$dataE[4]=$fetData['detail_th'];
		$dataE[5]=$fetData['detail_en'];
		return $dataE;
	}
	function getNews_First(){
		$data="";
		$sql="select * ,news_cate.cate_nameTH AS NEWTYPE , news.descriptionTH AS NEWSDES  from news ,news_cate 
		where  news.cate=news_cate.cate_id  AND news.con_show='1' 
		order by news.id DESC limit 0,2";
		$qry=mysql_query($sql);
		$data[0][0]=mysql_num_rows($qry);
		$i=1;
		while($fet=mysql_fetch_array($qry)){
			$data[$i][1]=$fet['id'];
			$data[$i][2]=$fet['titleTH'];
			$data[$i][3]=$fet['NEWSDES'];
			$data[$i][4]=$fet['con_day'];
			$mNum=$fet['con_month'];
			if($mNum==1){$data[$i][5]="January";}
			if($mNum==2){$data[$i][5]="February";}
			if($mNum==3){$data[$i][5]="March";}
			if($mNum==4){$data[$i][5]="April";}
			if($mNum==5){$data[$i][5]="May";}
			if($mNum==6){$data[$i][5]="June";}
			if($mNum==7){$data[$i][5]="July";}
			if($mNum==8){$data[$i][5]="August";}
			if($mNum==9){$data[$i][5]="September";}
			if($mNum==10){$data[$i][5]="October";}
			if($mNum==11){$data[$i][5]="November";}
			if($mNum==12){$data[$i][5]="December";}
			$data[$i][6]=$fet['con_year'];
			$data[$i][7]=$fet['con_img'];
			$data[$i][8]=$fet['NEWTYPE'];
			$i=$i+1;
		}
		return $data;
	}
	function getNews_First2($typeID){
		$data="";
		$sql="select * ,news_cate.cate_nameTH AS NEWTYPE , news.descriptionTH AS NEWSDES from news ,news_cate where news.cate=news_cate.cate_id AND news.con_show='1' AND news.cate='$typeID' order by news.id DESC limit 0,5";
		$qry=mysql_query($sql);
		$data[0][0]=mysql_num_rows($qry);
		$i=1;
		while($fet=mysql_fetch_array($qry)){
			$data[$i][1]=$fet['id'];
			$data[$i][2]=$fet['titleTH'];
			$data[$i][3]=$fet['NEWSDES'];
			$data[$i][4]=$fet['con_day'];
			$mNum=$fet['con_month'];
			if($mNum==1){$data[$i][5]="January";}
			if($mNum==2){$data[$i][5]="February";}
			if($mNum==3){$data[$i][5]="March";}
			if($mNum==4){$data[$i][5]="April";}
			if($mNum==5){$data[$i][5]="May";}
			if($mNum==6){$data[$i][5]="June";}
			if($mNum==7){$data[$i][5]="July";}
			if($mNum==8){$data[$i][5]="August";}
			if($mNum==9){$data[$i][5]="September";}
			if($mNum==10){$data[$i][5]="October";}
			if($mNum==11){$data[$i][5]="November";}
			if($mNum==12){$data[$i][5]="December";}
			$data[$i][6]=$fet['con_year'];
			$data[$i][7]=$fet['con_img'];
			$data[$i][8]=$fet['NEWTYPE'];
			$i=$i+1;
		}
		return $data;
	}
	
	function getNews_First3($typeID){
		$data="";
		$sql="select * ,news_cate.cate_nameTH AS NEWTYPE , news.descriptionTH AS NEWSDES from news ,news_cate where news.cate=news_cate.cate_id AND news.con_show='1' AND news.id='$typeID' order by news.id DESC limit 0,5";
		$qry=mysql_query($sql);
		$data[0][0]=mysql_num_rows($qry);
		$i=1;
		while($fet=mysql_fetch_array($qry)){
			$data[1]=$fet['id'];
			$data[2]=$fet['titleTH'];
			$data[3]=$fet['NEWSDES'];
			$data[4]=$fet['con_day'];
			$mNum=$fet['con_month'];
			if($mNum==1){$data[5]="January";}
			if($mNum==2){$data[5]="February";}
			if($mNum==3){$data[5]="March";}
			if($mNum==4){$data[5]="April";}
			if($mNum==5){$data[5]="May";}
			if($mNum==6){$data[5]="June";}
			if($mNum==7){$data[5]="July";}
			if($mNum==8){$data[5]="August";}
			if($mNum==9){$data[5]="September";}
			if($mNum==10){$data[5]="October";}
			if($mNum==11){$data[5]="November";}
			if($mNum==12){$data[5]="December";}
			$data[6]=$fet['con_year'];
			$data[7]=$fet['con_img'];
			$data[8]=$fet['NEWTYPE'];
			$data[9]=$fet['detailTH'];
			$i=$i+1;
		}
		return $data;
	}
	
	
	

?>