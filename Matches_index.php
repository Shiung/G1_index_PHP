<?php  
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- ========index================= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="javascript/js_index/jquery.fullPage.min.js"></script>
	<script src="javascript/js_index/examples.js"></script>
	<script src="javascript/js_index/Matches_index.js"></script>
	<script src="javascript/js_index/slick.js"></script>
	<script src="javascript/js_index/sweetalert-dev.js"></script>
	<!-- ========/index================= -->
	<!-- =========loading============ -->
	<script src="javascript/loadingJS_index.js"></script>
	<!-- =========/loading============ -->
	<!-- ============header=================== -->
	<script src="javascript/script.js"></script>
	<!-- ============/header=================== -->
	<!-- ===headr==== -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- ===.headr==== -->
	<!-- icon========== -->	
	<link rel="Shortcut Icon" type="image/x-icon" href="images/matches.ico">
	<!-- /icon========== -->	
	<!-- =======共用======= -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/public.css">
	<!-- =======/共用======= -->
	<!-- =========loading============ -->
	<link rel="stylesheet" type="text/css" href="css/loadingCss.css">
	<!-- =========/loading============ -->
	<!-- =========index============ -->
	<link rel="stylesheet" type="text/css" href="css/css_index/jquery.fullPage.css">
	<link rel="stylesheet" type="text/css" href="css/css_index/Mathes_index.css">
	<link rel="stylesheet" type="text/css" href="css/css_index/slick.css">
  	<link rel="stylesheet" type="text/css" href="css/css_index/slick-theme.css">
  	<link rel="stylesheet" type="text/css" href="css/css_index/sweetalert.css">
  	<!-- =========/index============ -->
	<title>Matches</title>
</head>
<body>

<!-- ===================header================== -->
<!-- head -->
<?php 
require_once("modules/header.html");
 ?>
<!-- head over -->
<!-- =================/header==================== -->

<!-- loading -->		
<?php require_once('loading.php'); ?>
<!-- /loading -->

<!-- 首頁內容 -->
<div class="sectionAll">
	<div id="fullpage">
		<div class="section s1">
			<div class="content">
				<h2>關於MATHES</h2>
				<p>和朋友們在MATCHES找到無限樂趣!!!</p>
				<div class="pic1">
					<div class="style1"><img src="images/img_index/style1.png"></div>
					<div class="style2"><img src="images/img_index/style2.png"></div>
					<div class="style3 style3Move"><img src="images/img_index/style3.png"></div>
					<div class="style4 style4Move"><img src="images/img_index/style4.png"></div>
					<div class="style5"><img src="images/img_index/style5.png"></div>
					<div class="style6"><img src="images/img_index/style6.png"></div>
				</div>
				<div class="pic2">
					<div class="s1-present0"><img src="images/img_index/style1.png"></div>
					<div class="s1-present1 sp"><img src="images/img_index/s1-present1.png"></div>
					<div class="s1-present2 sp"><img src="images/img_index/s1-present2.png"></div>
					<div class="s1-present3 sp"><img src="images/img_index/s1-present3.png"></div>
					<div class="s1-present4 sp"><img src="images/img_index/s1-present4.png"></div>
					<div class="s1-present5 sp"><img src="images/img_index/s1-present5.png"></div>
					<div class="s1-present6 sp"><img src="images/img_index/s1-present6.png"></div>
					<div class="s1-present7 sp"><img src="images/img_index/s1-present7.png"></div>
					<div class="s1-present8 sp"><img src="images/img_index/s1-present8.png"></div>
					<div class="s1-present9 sp"><img src="images/img_index/s1-present9.png"></div>
					<div class="s1-present10"><img src="images/img_index/s1-present10.png"></div>
				</div>
				<div class="pic3">
					<div class="s1-friendship0"><img src="images/img_index/style1.png"></div>
					<div class="s1-friendship1"><img src="images/img_index/friendship1.png"></div>
					<div class="s1-friendship2"><img src="images/img_index/friendship2.png"></div>
					<div class="s1-friendship3"><img src="images/img_index/discussMessage1.png"></div>
					<div class="s1-friendship4"><img src="images/img_index/discussMessage2.png"></div>
					<div class="s1-friendship5"><img src="images/img_index/discussMessage3.png"></div>
					<div class="s1-friendship6"><img src="images/img_index/discussMessage4.png"></div>
					<div class="s1-friendship7"><img src="images/img_index/friendship3.png"></div>
				</div>
				<div class="signIn"><a href="register.php">立即加入</a></div>   
			</div>
			<div class="bubbleArea1">
				<div class="bubble"><img src="images/img_index/bubble.png"></div>
				<div class="bubble2"><img src="images/img_index/bubble.png"></div>
				<div class="bubble5"><img src="images/img_index/bubble.png"></div>
				<div class="bubble7"><img src="images/img_index/bubble.png"></div>
			</div>
			<div class="bubbleArea2">
				<div class="bubble3"><img src="images/img_index/bubble.png"></div>
				<div class="bubble4"><img src="images/img_index/bubble.png"></div>
				<div class="bubble6"><img src="images/img_index/bubble.png"></div>
				<div class="bubble8"><img src="images/img_index/bubble.png"></div>
			</div>
		</div>
		<div class="section s2">
			<div class="content2">
				<h2>交換禮物</h2>
				<p>與世界上另一個人分享驚喜與感動</p>
				<div class="present-cloud3 parallax" data-offset="20"><img src="images/img_index/cloud3.png"></div>
				<div class="present-floor"><img src="images/img_index/floor.png">
					<div class="cloth"><img src="images/img_index/cloth.png"></div>
					<div class="table"><img src="images/img_index/table.png"></div>
					<div class="sofa"><img src="images/img_index/sofa.png"></div>
					<div class="present1"><img src="images/img_index/present1.png"></div>
					<div class="person"><img src="images/img_index/person.png"></div>
					<div class="personSay">
						<p class="ps">將你的心意傳遞給世界上的任何人</p>
					</div>	
					<div class="personHover">
						<p>加入Matches吧!!!</p>
						<a href="register.php">GO</a>
					</div>
				</div>
				<div class="present-cloud1 parallax" data-offset="10"><img src="images/img_index/cloud1.png"></div>
				<div class="present-cloud2 parallax" data-offset="30"><img src="images/img_index/cloud2.png"></div>
				<div class="present-bird"></div>
				<div class="present-fly">
					<div class="present2"><img src="images/img_index/present1.png"></div>
					<img src="images/img_index/fly.png">
				</div>	
			</div>
			<div class="scrollDown1 scd"><img src="images/img_index/scrollDown1.png"></div>
			<div class="scrollDown2 scd"><img src="images/img_index/scrollDown2.png"></div>
			<div class="scrollDown3 scd"><img src="images/img_index/scrollDown2.png"></div>
			<div class="scrollDown4 scd"><img src="images/img_index/scrollDown2.png"></div>
		</div>
		<div class="section s3">
			<div class="content3">
				<div class="present-cloud4 parallax2" data-offset="10"><img src="images/img_index/cloud4.png"></div>
				<div class="present-cloud5 parallax2" data-offset="30"><img src="images/img_index/cloud5.png"></div>
				<div class="present-floor2"><img src="images/img_index/floor2.png">
					<div class="tree"><img src="images/img_index/tree.png"></div>
					<div class="house2"><img src="images/img_index/house2.png"></div>
					<div class="chair"><img src="images/img_index/chair.png"></div>
					<div class="person2"><img src="images/img_index/person2.png"></div>
					<div class="person2Present21"><img src="images/img_index/presnet2-1.png"></div>
					<div class="person2Present22"><img src="images/img_index/presnet2-2.png"></div>
					<!-- ============================禮物採花 svg=================== -->
					<div class="gift">
						<svg version="1.1" x="0px" y="0px" width="110px" height="145px" viewBox="0 0 110.167 145.688">
							<g><!-- <g class="giftHead"> -->
									<path fill="none" stroke="#EB6CA1" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M49.564,52.96
												c0,0,9.76-9.456-4.703-13.228S39.9,26.24,39.9,26.24s7.664-9.548-4.961-11.28S31.731,3.88,31.731,3.88"/>
									<path fill="none" stroke="#F18B48" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M66.298,44.636
												c0,0,7.067,0.659,3.649-6.361c-3.419-7.02,3.667-6.553,3.667-6.553s6.392-0.204,2.789-5.801c-3.604-5.597,3.305-5.038,3.305-5.038"/>
									<path fill="none" stroke="#EB6CA1" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M83.564,64.331
												c0,0,6.336,3.201,5.726-4.583c-0.611-7.784,5.812-4.755,5.812-4.755s6.022,2.15,4.72-4.377c-1.306-6.528,4.92-3.478,4.92-3.478"/>
									<path fill="none" stroke="#F18B48" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M25.78,60.934
												c0,0,2.747-6.545-4.974-5.389c-7.722,1.158-5.152-5.462-5.152-5.462s1.721-6.159-4.699-4.4c-6.42,1.762-3.815-4.663-3.815-4.663"/>
						</g>
						<g id="spot1">
							<circle fill="#7E6181" cx="12" cy="10.667" r="3.445"/>
							<circle fill="#E94962" cx="49.904" cy="7" r="2.237"/>
							<circle fill="#E94962" cx="12.667" cy="69" r="3.769"/>
							<circle fill="#00A6A7" cx="103.167" cy="83.5" r="1.917"/>
						</g>

						<g id="spot2">
							<polygon id="XMLID_694_" fill="#E94962" points="87.45,28.221 88.16,30.503 89.54,28.552 91.93,28.582 90.5,26.667 91.268,24.404 
								89.004,25.171 87.089,23.742 87.119,26.132 85.168,27.512 	"/>
							<polygon id="XMLID_691_" fill="#FDD25B" points="100.69,10.486 102.763,11.745 102.5,9.333 104.337,7.75 101.963,7.255 
								101.025,5.019 99.821,7.124 97.404,7.325 99.034,9.121 98.478,11.481 	"/>
							<polygon id="XMLID_688_" fill="#FDD25B" points="27.964,38.048 24.625,39.161 27.54,41.134 27.565,44.653 30.343,42.492 
								33.698,43.554 32.5,40.245 34.547,37.382 31.03,37.499 28.94,34.667 	"/>
							<polygon id="XMLID_673_" fill="#ED7D97" points="71.196,50.447 69.275,53.167 72.603,53.037 74.596,55.704 75.5,52.5 
								78.653,51.428 75.885,49.578 75.84,46.249 73.225,48.31 70.044,47.323 	"/>
						</g>
					</svg>
				</div>
				<!-- =======================================svg======================================== -->
				
				<div class="personSay2">
					<p>打開未知的驚喜</p>
				</div>
				<div class="person2Hover">
						<p>加入Matches吧!!!</p>
						<a href="register.php">GO</a>
				</div>
				</div>
				<div class="car"><img src="images/img_index/car.png">
					<div class="person2-present1"><img src="images/img_index/present1.png"></div>
				</div>
				<div class="person2-bird"></div>
				<div class="exchagePresent"><a href="exchange.php">參加交換禮物</a></div>
			</div>
		</div>
		<div class="section s4">
			<div class="content4">
				<h2>造型商城</h2>
				<p>隨心所欲打造獨一無二的自己</p>
				<div class="bgHouse parallax3" data-offset="5"><img src="images/img_index/bgHouse.png"></div>
				<div class="present-cloud7 parallax3" data-offset="30"><img src="images/img_index/cloud7.png"></div>
				<div class="present-cloud6 parallax3" data-offset="15"><img src="images/img_index/cloud6.png"></div>
				<div class="present-floor3"><img src="images/img_index/floor3.png">
					<div class="cloth2"><img src="images/img_index/cloth2.png"></div>
					<div class="hanger"><img src="images/img_index/hanger.png"></div>
					<div class="dressing"><img src="images/img_index/dressing-1.png"></div>
					<div class="dressing2"><img src="images/img_index/dressing-2.png"></div>
					<div class="dressing-door1"><img src="images/img_index/dressing-door1.png"></div>
					<div class="dressing-door2"><img src="images/img_index/dressing-door2.png"></div>
					<div class="dressing-door3"><img src="images/img_index/dressing-door3.png"></div>
					<div class="dressing-door4"><img src="images/img_index/dressing-door4.png"></div>
					<div class="dressing-door5"><img src="images/img_index/dressing-door5.png"></div>
					<div class="dressing-door6"><img src="images/img_index/dressing-door6.png"></div>
					<div class="dressing-door7"><img src="images/img_index/dressing-door7.png"></div>
					<div class="dressing-door8"><img src="images/img_index/dressing-door8.png"></div>
					<div class="dressing-door9"><img src="images/img_index/dressing-door9.png"></div>
					<div class="person3"><img src="images/img_index/person3.png"></div>
				</div>
				<div class="dressDoll"><a href="shop.php">打造我的專屬娃娃</a></div>
				<div class="changeDress">
					<div class="person-w sexcheck" data-check="1"><img src="images/img_index/person_w.png"></div>
					<p>幫你的專屬角色換換衣服吧</p>
					<div class="dressing_person1_dress dpd woman"><img src="images/img_index/dressing_person1_dress.png"></div>
					<div class="dressing_person2_dress dpd woman"><img src="images/img_index/dressing_person2_dress.png"></div>
					<div class="dressing_person3_dress dpd woman"><img src="images/img_index/dressing_person3_dress.png"></div>
					<div class="dressing_person4_dress dpd woman"><img src="images/img_index/dressing_person4_dress.png"></div>
				</div>
				<div class="changeDress2">
					<div class="person-m sexcheck" data-check="2"><img src="images/img_index/person_m.png"></div>
					<p>幫你的專屬角色換換衣服吧</p>
					<div class="dressing_person1_m_dress dpd man DefaultDisplayNone"><img src="images/img_index/dressing_person1_m_dress.png"></div>
					<div class="dressing_person2_m_dress dpd man DefaultDisplayNone"><img src="images/img_index/dressing_person2_m_dress.png"></div>
					<div class="dressing_person3_m_dress dpd man DefaultDisplayNone"><img src="images/img_index/dressing_person3_m_dress.png"></div>
					<div class="dressing_person4_m_dress dpd man DefaultDisplayNone"><img src="images/img_index/dressing_person4_m_dress.png"></div>
				</div>
			</div>
		</div>
		<div class="section s5">
			<div class="content5">
				<h2>討論區</h2>
				<p>各式熱門討論 等你發掘</p>
				<div class="present-cloud9 parallax4" data-offset="30"><img src="images/img_index/cloud9.png"></div>
				<div class="present-cloud8 parallax4" data-offset="10"><img src="images/img_index/cloud8.png"></div>
				<div class="present-floor4"><img src="images/img_index/floor4.png">
						<div class="present-park"><img src="images/img_index/park.png"></div>
						<div class="present-wheel-1"><img src="images/img_index/wheel-1.png"></div>
						<div class="present-wheel-2"><img src="images/img_index/wheel-2.png"></div>
						<div class="restRoom"><img src="images/img_index/restRoom.png"></div>
						<!-- <div class="discussMessage1 dm"><img src="images/img_index/discussMessage1.png"></div>
						<div class="discussMessage2 dm"><img src="images/img_index/discussMessage2.png"></div>
						<div class="discussMessage3 dm"><img src="images/img_index/discussMessage3.png"></div>
						<div class="discussMessage4 dm"><img src="images/img_index/discussMessage4.png"></div> -->
						<div class="discussSession1 ds"><h3>熱門文章</h3><div class="dsAfter1"></div></div>
						<div class="discussSession2 ds"><h3>交換禮物</h3><div class="dsAfter2"></div></div>
						<div class="discussSession3 ds"><h3>新手分享</h3><div class="dsAfter3"></div></div>
						<div class="discussSession4 ds"><h3>活動分享</h3><div class="dsAfter4"></div></div>
						<div class="person4"><img src="images/img_index/person4.png"></div>
						<div class="person5"><img src="images/img_index/person5.png"></div>
						<?php  
							try{
								require_once('connectBooks.php');
								$sql="select * from art order by ART_time desc";
								$art=$pdo->query($sql);
								
								for($i=0;$i<3;$i++){
									$artRow = $art->fetch(PDO::FETCH_ASSOC);								
						?>
						<div class="discussContent dc">
							<a href="talk_02.php?ART_no=<?php echo $artRow["ART_no"]; ?>">
								<div class="acpic"><img src="images/talk/<?php echo $artRow["ART_image"]; ?>"></div>
								<h4><?php echo $artRow["ART_title"]; ?></h4>
								<p>觀看更多內容</p>	
							</a>
						</div>
						<?php
								}
						?>
						<!-- ===========未動態抓取資料=============== -->
						<!-- <div class="discussContent1 dc">
							<a href="">
								<div class="acpic"><img src="https://api.fnkr.net/testimg/460x300/00CED1/FFF/?text=img+placeholder"></div>
								<h4>我是標題1</h4>
								<p>本類辦法閲讀整理所在</p>
							</a>
						</div>
						<div class="discussContent2 dc">
							<a href="">
								<div class="acpic">
									<img src="https://api.fnkr.net/testimg/460x300/00CED1/FFF/?text=img+placeholder">
								</div>
								<h4>我是標題2</h4>
								<p>男性戰鬥指定配件內置男性戰鬥指定配件內置男性戰鬥指定配件內置</p>
							</a>
						</div>
						<div class="discussContent3 dc">
							<a href="">
								<div class="acpic">
									<img src="https://api.fnkr.net/testimg/460x300/00CED1/FFF/?text=img+placeholder">
								</div>
								<h4>我是標題3</h4>
								<p>西部日誌課程股東列表</p>
							</a>
						</div> -->
				</div>
				<div class="discussArea"><a href="talk.php">前往討論區</a></div>
				
				<!-- ===========rwd=================== -->
				<section class="center slider rwdDiscuss">
				<?php  
					require_once('connectBooks.php');
					$sql="select * from art order by ART_time desc";
					$art=$pdo->query($sql);
					for($i=0;$i<3;$i++){
						$artRow = $art->fetch(PDO::FETCH_ASSOC);
				?>
				
					<div class="rwdDisc">
						<div class="imgBox"><img src="images/talk/<?php echo $artRow["ART_image"]; ?>"></div>
						<p><?php echo $artRow["ART_title"]; ?></p>
						<a href="talk_02.php?ART_no=<?php echo $artRow["ART_no"]; ?>">more</a>
					</div>
				<?php
					}
					}catch(PDOException $e){
						echo $e->getMessage();
					}
				?>
				</section>
				<!-- ======= 未動態抓取資料======= -->
				<!-- <section class="center slider rwdDiscuss">
					<div class="rwdDisc1">
						<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=1">
						<h3>我是標題1</h3>
						<p>本類辦法閲讀整理所在男性戰鬥指定配件內置男性戰鬥指定配件內置男性戰鬥指定配件內置</p>
						<a href="">more</a>
					</div>
					<div class="rwdDisc2">
						<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=2">
						<h3>我是標題2</h3>
						<p>男性戰鬥指定配件內置男性戰鬥指定配件內置男性戰鬥指定配件內置</p>
						<a href="">more</a>
					</div>
					<div class="rwdDisc3">
						<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=3">
						<h3>我是標題3</h3>
						<p>西部日誌課程股東列表</p>
						<a href="">more</a>
					</div>
				</section> -->
			</div>	
		</div>
		<div class="section s6">
			<div class="content6">	
			<?php  
				try{
					require_once("connectBooks.php");
					$sql = "select * from act where ACT_no=1";
					$act = $pdo->query($sql);		
					while($actRow=$act->fetch(PDO::FETCH_ASSOC)){						
			?>

				<h2>季節活動</h2>
				<p>在MATCHES得到滿滿驚喜</p>
				<div class="present-floor5"><img src="images/img_index/floor5.png">
					<div class="action1Box ab">
						<div class="action1">		
							<img src="images/img_index/action1.png">	
						</div>
						<div class="action1_back">
							<h3><?php echo $actRow["ACT_name"]; ?></h3>
							<div class="actionNumberTitle1">報名人數:<span class="actionNumber1 an"><?php 
								$sql = "select count(*) from sign where ACT_no=1";
								$num = $pdo->query($sql);
								$numRow=$num->fetchColumn(0);
								echo "$numRow"+"50"	;
							 ?></span>/<span class="actionNumberLimit1 anl"><?php echo $actRow["ACT_limit"]; ?></span></div>
							<div class="actionBar1"><div class="controlBar1 cb"></div></div>
							<p>一年一度的七夕情人節到了，你是否想好要送另一半什麼了呢?如果沒有另一半，也不用太傷心唷，在Matches你可以在線上找到契合的好友，與你一同參加七夕交換禮物活動，今年的七夕就來點不一樣的吧 !</p>
							<div class="actionGo1"><a href="acti.php">報名活動</a></div>
						</div>
					</div>
			<?php
				}
				$sql = "select * from act where ACT_no=2";
				$act = $pdo->query($sql);		
				while($actRow=$act->fetch(PDO::FETCH_ASSOC)){		
			?>
					<div class="action2Box ab">
						<div class="action2">
							<img src="images/img_index/action2.png">
						</div>
						<div class="action2_back">
							<h3><?php echo $actRow["ACT_name"]; ?></h3>
							<div class="actionNumberTitle2">報名人數:<span class="actionNumber2 an"><?php 
								$sql = "select count(*) from sign where ACT_no=2";
								$num = $pdo->query($sql);
								$numRow=$num->fetchColumn(0);
								echo "$numRow"+"30"	;
							 ?></span>/<span class="actionNumberLimit2 anl"><?php echo $actRow["ACT_limit"]; ?></span></div>
							<div class="actionBar2"><div class="controlBar2 cb"></div></div>
							<p>你是超級邊緣人嗎?還是活了20年沒收過生日禮物呢?沒關係，在Matches只要是當月壽星就可以跟你同月生日的好友一同慶生還等什麼呢? 脫離邊緣人就是今天 !</p>
							<div class="actionGo2"><a href="acti2.php">報名活動</a></div>
						</div>					
					</div>
			<?php
				}
				$sql = "select * from act where ACT_no=3";
				$act = $pdo->query($sql);		
				while($actRow=$act->fetch(PDO::FETCH_ASSOC)){		
			?>
					<div class="action3Box ab">
						<div class="action3">	
							<img src="images/img_index/action3.png">
							
						</div>
						<div class="action3_back">
							<h3><?php echo $actRow["ACT_name"]; ?></h3>
							<div class="actionNumberTitle3">報名人數:<span class="actionNumber3 an"><?php 
								$sql = "select count(*) from sign where ACT_no=3";
								$num = $pdo->query($sql);
								$numRow=$num->fetchColumn(0);
								echo "$numRow"+"70"	;
							 ?></span>/<span class="actionNumberLimit3 anl"><?php echo $actRow["ACT_limit"]; ?></span></div>
							<div class="actionBar3"><div class="controlBar3 cb"></div></div>
							<p>哈利波特慶周年啦~各種波特迷嗨起來吧!這次Matches的哈利波特交換禮物活動限定了只能送跟電影情節有關的禮物喔交換過程還可以認識共同興趣的好友!超級波特迷，千萬不要錯過啊~</p>
							<div class="actionGo3"><a href="acti3.php">報名活動</a></div>
						</div>
					</div>
				</div>
			<?php 
				} 
				}catch(PDOException $e){
					echo "錯誤行號 :",  $ex->getLine(), "<br>";
					echo "錯誤訊息 :", $ex->getMessage(), "<br>";
				}
			?>	
			</div>
			<div class="actBalloon1"><img src="images/img_index/balloon1.png"></div>
			<div class="actBalloon2"><img src="images/img_index/balloon2.png"></div>
			<div class="actBalloon3"><img src="images/img_index/balloon1.png"></div>
			<div class="actBalloon4"><img src="images/img_index/balloon2.png"></div>
			<div class="actBalloon5"><img src="images/img_index/balloon1.png"></div>
			<div class="actBalloon6"><img src="images/img_index/balloon2.png"></div>
			<div class="actBalloon7"><img src="images/img_index/balloon1.png"></div>
			<div class="actBalloon8"><img src="images/img_index/balloon2.png"></div>
			<!-- ======rwd========= -->
			<div class="s6Rwd">
				<h2>季節活動</h2>
				<p>在MATCHES得到滿滿驚喜</p>
				<section class="center slider">
					<div>
						<img src="images/img_index/action1.png">
						<h3  class="rwdTit" style="display: none;"><!-- 七夕情人節活動 --></h3>
						<div class="rwdCNum" style="display: none;"><!-- 50 --></div>
						<div class="rwdCLimt" style="display: none;"><!-- 80 --></div>
						<a class="rwdAnchorTrue" href="acti.php" style="display: none;">報名活動</a>
					</div>
					<div>
						<img src="images/img_index/action2.png">
						<h3 class="rwdTit" style="display: none;"><!-- 當月壽星活動 --></h3>
						<div class="rwdCNum" style="display: none;"><!-- 20 --></div>
						<div class="rwdCLimt" style="display: none;"><!-- 50 --></div>
						<a class="rwdAnchorTrue" href="acti2.php" style="display: none;">報名活動</a>
					</div>
					<div>
						<img src="images/img_index/action3.png">
						<h3 class="rwdTit" style="display: none;"><!-- 哈利波特週年活動 --></h3>
						<div class="rwdCNum" style="display: none;"><!-- 70 --></div>
						<div class="rwdCLimt" style="display: none;"><!-- 100 --></div>
						<a class="rwdAnchorTrue" href="acti3.php" style="display: none;">報名活動</a>
					</div>
				</section>
				<div class="rwdContent">
					<h3 id="currentTitle">當月壽星活動</h3>
					<div class="rwdPeople">報名人數:<span class="rwdCurentNum">20</span>/<span class="rwdCurentLimit">50</span></div>
					<div class="CNBar"><div class="CNBarTrue"></div></div>
					<a class="rwdAnchor" href="act.php">報名活動</a>
				</div>	
			</div>	
		</div>
		<div class="section s7">
			<div class="content7">
				<h2>MATCHES 紅利點數</h2>
				<p>在MATCHES 打造你的個人風格造型娃娃</p>
					<div class="bonus1">
						<div class="item1">
							<div class="bonus11"><img src="images/img_index/computer.png">
								<div class="computer-content1"><img src="images/img_index/computer-content1.png"></div>
								<div class="computer-content2"><img src="images/img_index/computer-content2.png"></div>
								<div class="computer-content3"><img src="images/img_index/computer-content3.png"></div>
								<div class="computer-content4"><img src="images/img_index/computer-content4.png"></div>
								<div class="computer-content5"><img src="images/img_index/computer-content5.png"></div>
								<div class="computer-content6"><img src="images/img_index/computer-content6.png"></div>
							</div>
							<p>在討論區發表文章和留言</p>
						</div>
					</div>
					<div class="bonus2">
						<div class="item2">
							<div class="bonus22"><img src="images/img_index/money.png"></div>
							<div class="bonus2-1 BM"><img src="images/img_index/money1.png"></div>
							<div class="bonus2-2 BM"><img src="images/img_index/money2.png"></div>
							<div class="bonus2-3 BM"><img src="images/img_index/money3.png"></div>
							<p>獲得MATCHES紅利點數</p>
						</div>
					</div>
					<div class="bonus3">
						<div class="item3">
							<div class="bonus33"><img src="images/img_index/shopping1.png"></div>
							<div class="window"></div>
							<div class="bonus3-1"><img src="images/img_index/shopping2.png"></div>
							<div class="bonus3-2 bshirt"><img src="images/img_index/shopping3.png"></div>
							<div class="bonus3-3 bshirt"><img src="images/img_index/shopping4.png"></div>
							<div class="bonus3-4 bshirt"><img src="images/img_index/shopping5.png"></div>
							<div class="bonus3-5 bshirt"><img src="images/img_index/shopping6.png"></div>
							<div class="bonus3-6 bshirt"><img src="images/img_index/shopping7.png"></div>
							<div class="bonus3-7 bshirt"><img src="images/img_index/shopping8.png"></div>
							<p>到商城打造你的專屬娃娃</p>
						</div>
					</div>
					<div class="direction1 dd"><img src="images/img_index/direction.png"></div>
					<div class="direction2 dd"><img src="images/img_index/direction.png"></div>
					<div class="direction3 dd"><img src="images/img_index/direction.png"></div>
					<div class="direction4 dd"><img src="images/img_index/direction.png"></div>
			</div>

				<!-- ============footer============= -->
				<?php 
				require_once("modules/footer.html");
				 ?>
		</div>
	</div>
</div>	
</body>
</html>
