<?php include_once("common/class.banglaDate.php");

$bn=new BanglaDate(time());$bn->set_time(time(), 6);$date=$bn->get_date();
$dtDateBN=$date[0]."&nbsp;".$date[1]."&nbsp;".$date[2];
?>
<header>
<div class="container MobileHide">
	<div class="row">
			<div class="col-lg-4 col-sm-12 col-4">
				<div class="DateTime h-100 d-flex align-items-center ">
					<p class="date">
						<i class="fa fa-calendar" aria-hidden="true"></i><span> <?php echo fEn2Bn($dtDay); ?>
							<?php echo fEn2Bn($dtDateTime); ?>, <?php echo ($dtDateBN); ?></span> 
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-4">
			<div class="DLogoArea">
				<div class="row">
			<div class="col-lg-12">
				<div class="DLogo d-flex justify-content-center">
					<a href="<?php echo $sSiteURL; ?>">
						<img src="<?php echo $sLogoURL; ?>" alt="<?php echo $sSiteTitle; ?>"
							title="<?php echo $sSiteTitle; ?>" class="img-fluid img100">
					</a>
				</div>
			</div>
		</div>
	</div>
			</div>
			<div class="col-lg-4 col-4 col-sm-12">
				<div class="SocialIcon h-100 d-flex justify-content-end align-items-center">
				<div class="header-top-right">
					<div class="DSocialLink">
						<ul>
							<li><a href="<?php echo $sFburl; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> </li>
							<li><a href="<?php echo $sTwitterUrl; ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> </li>
							<li><a href="<?php echo $sLinkedInUrl; ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a> </li>
							<li><a href="<?php echo $sYoutubeUrl; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a> </li>
							<li><a href="<?php echo $sInstaUrl; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a> </li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	
</div>

<div id="myHeader">
	<div class="DHeaderNav MobileHide">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="#" class="StickyLogo" rel="home">
			<img src="<?php echo $sSiteURL; ?>media/common/logo.png"
				title="<?php echo $sSiteTitle; ?>" alt="<?php echo $sSiteTitle; ?>"
				class="img-fluid img100">
		</a>
		<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav m-auto">
				<li class="nav-item"><a class="nav-link" href="#">সর্বশেষ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">জাতীয়</a></li>
				<li class="nav-item"><a class="nav-link" href="#">রাজনীতি</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">সারাদেশ <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">ঢাকা</a></li>
						<li><a class="dropdown-item" href="">চট্টগ্রাম</a></li>
						<li><a class="dropdown-item" href="">রাজশাহী</a></li>
						<li><a class="dropdown-item" href="">খুলনা</a></li>
						<li><a class="dropdown-item" href="">বরিশাল</a></li>
						<li><a class="dropdown-item" href="">সিলেট</a></li>
						<li><a class="dropdown-item" href="">রংপুর</a></li>
						<li><a class="dropdown-item" href="">ময়মনসিংহ</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">আন্তর্জাতিক <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">এশিয়া</a></li>
						<li><a class="dropdown-item" href="">ইউরোপ</a></li>
						<li><a class="dropdown-item" href="">আমেরিকা</a></li>
						<li><a class="dropdown-item" href="">আফ্রিকা</a></li>
						<li><a class="dropdown-item" href="">অস্ট্রেলিয়া</a></li>
						<li><a class="dropdown-item" href="">মধ্যপ্রাচ্য</a></li>
						<li><a class="dropdown-item" href="">আরও</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">খেলাধুলা <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">ক্রিকেট</a></li>
						<li><a class="dropdown-item" href="">ফুটবল</a></li>
						<li><a class="dropdown-item" href="">হকি</a></li>
						<li><a class="dropdown-item" href="">টেনিস</a></li>
						<li><a class="dropdown-item" href="">অন্যান্য</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">অর্থনীতি <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">ব্যাংক</a></li>
						<li><a class="dropdown-item" href="">বীমা</a></li>
						<li><a class="dropdown-item" href="">শেয়ার বাজার</a></li>
						<li><a class="dropdown-item" href="">শিল্প</a></li>
						<li><a class="dropdown-item" href="">অন্যান্য</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">বিনোদন <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">চলচিত্র</a></li>
						<li><a class="dropdown-item" href="">নাটক</a></li>
						<li><a class="dropdown-item" href="">গান</a></li>
						<li><a class="dropdown-item" href="">স্বাক্ষাতকার</a></li>
						<li><a class="dropdown-item" href="">ওটিটি</a></li>
						<li><a class="dropdown-item" href="">আরও</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">লাইফস্টাইল <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu DiplayInline" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="">স্বাস্থ্য পরামর্শ</a></li>
						<li><a class="dropdown-item" href="">টিপস</a></li>
						<li><a class="dropdown-item" href="">রূপচর্চা</a></li>
						<li><a class="dropdown-item" href="">রেসিপি</a></li>
						<li><a class="dropdown-item" href="">ফ্যাশন</a></li>
						<li><a class="dropdown-item" href="">নারী</a></li>
						<li><a class="dropdown-item" href="">শিশু</a></li>
						<li><a class="dropdown-item" href="">ঘরোয়া উপায়</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">চাকরি</a></li>
				<li class="nav-item dropdown  has-megamenu">
					<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown disable" aria-expanded="false">আরও <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu megamenu" role="menu" aria-labelledby="navbarDropdown" style="left: initial;">
					<div class="container">
					<div class="row">
						<div class="col-md-3">
							<li><a class="dropdown-item" href="#">আইন-আদালত</a></li>
							<li><a class="dropdown-item" href="#">শিক্ষা</a></li>
							<li><a class="dropdown-item" href="#">স্বাস্থ্য</a></li>
						</div>
						<div class="col-md-3">
							<li><a class="dropdown-item" href="#">তথ্যপ্রযক্তি</a></li>
							<li><a class="dropdown-item" href="#">ভ্রমন</a></li>
							<li><a class="dropdown-item" href="#">প্রবাস</a></li>
						</div>
						<div class="col-md-3">
							<li><a class="dropdown-item" href="#">শিল্প-সাহিত্য</a></li>
							<li><a class="dropdown-item" href="#">গণমাধ্যম</a></li>
							<li><a class="dropdown-item" href="#">কৃষি</a></li>
						</div>
						<div class="col-md-3">
							<li><a class="dropdown-item" href="#">মতামত</a></li>
							<li><a class="dropdown-item" href="#">পরিবেশ</a></li>
							<li><a class="dropdown-item" href="#">আবহাওয়া</a></li>
						</div>
						<div class="col-md-3">
							<li><a class="dropdown-item" href="#">ধর্ম</a></li>
							<li><a class="dropdown-item" href="#">ভিন্নখবর</a></li>
							<li><a class="dropdown-item" href="#">আর্কাইভস</a></li>
						</div>
					</div>
					</div>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	</div>
	</div>
	</div>
	</div>
</div>

<div id="myHeader2">
<div id="mobile-nav" class="MobileMenu MobileShow">
	<div class="DMLogo d-flex h-100 align-items-center justify-content-center"><a href="#"><img src="media/common/logo.png" class="img-fluid img100"></a></div>
	<div class=" d-flex h-100 align-items-center justify-content-start"><span onclick="myMenuBtnChng()" id="menu-button" class="menu-button fas fa-bars"></span></div>
	<ul>
		<li>
			<div class="MobileDateArea">
				<p class="date"> 
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span> <?php echo fEn2Bn($dtDay); ?>
						<?php echo fEn2Bn($dtDateTime); ?>, <?php echo ($dtDateBN); ?></span> 
				</p>
			</div>
		</li>
		<li><a href="#">জাতীয়</a></li>
		<li><a href="#">রাজনীতি</a></li>
		<li class="parent">
			<a href="#">সারাদেশ</a>
			<ul class="SubMenuM">
				<li><a href="#">ঢাকা</a></li>
				<li><a href="#">চট্টগ্রাম</a></li>
				<li><a href="#">রাজশাহী</a></li>
				<li><a href="#">খুলনা</a></li>
				<li><a href="#">বরিশাল</a></li>
				<li><a href="#">সিলেট</a></li>
				<li><a href="#">রংপুর</a></li>
				<li><a href="#">ময়মনসিংহ</a></li>
			</ul>
		</li>
		<li class="parent">
			<a href="#">আন্তর্জাতিক</a>
			<ul class="SubMenuM">
				<li><a href="#">এশিয়া</a></li>
				<li><a href="#">ইউরোপ</a></li>
				<li><a href="#">আমেরিকা</a></li>
				<li><a href="#">আফ্রিকা</a></li>
				<li><a href="#">অস্ট্রেলিয়া</a></li>
				<li><a href="#">মধ্যপ্রাচ্য</a></li>
				<li><a href="#">আরও</a></li>
			</ul>
		</li>
		<li class="parent">
			<a href="#">খেলাধুলা</a>
			<ul class="SubMenuM">
				<li><a href="#">ক্রিকেট</a></li>
				<li><a href="#">ফুটবল</a></li>
				<li><a href="">হকি</a></li>
				<li><a href="">টেনিস</a></li>
				<li><a href="#">আরও</a></li>
			</ul>
		</li>
		<li class="parent">
			<a href="#">বিনোদন</a>
			<ul class="SubMenuM">
				<li><a href="#">চলচিত্র</a></li>
				<li><a href="#">নাটক</a></li>
				<li><a href="#">গান</a></li>
				<li><a href="#">স্বাক্ষাতকার</a></li>
				<li><a href="#">ওটিটি</a></li>
				<li><a href="#">আরও</a></li>
			</ul>
		</li>
		<li class="parent">
			<a href="#">অর্থনীতি</a>
			<ul class="SubMenuM">
				<li><a href="">ব্যাংক</a></li>
				<li><a href="">বীমা</a></li>
				<li><a href="">শেয়ার বাজার</a></li>
				<li><a href="">শিল্প</a></li>
				<li><a href="">অন্যান্য</a></li>
			</ul>
		</li>
		<li class="parent">
			<a href="#">লাইফস্টাইল</a>
			<ul class="SubMenuM">
			<li><a href="">স্বাস্থ্য পরামর্শ</a></li>
			<li><a href="">টিপস</a></li>
			<li><a href="">রূপচর্চা</a></li>
			<li><a href="">রেসিপি</a></li>
			<li><a href="">ফ্যাশন</a></li>
			<li><a href="">নারী</a></li>
			<li><a href="">শিশু</a></li>
			<li><a href="">ঘরোয়া উপায়</a></li>
			</ul>
		</li>
		<li><a href="#">চাকরি</a></li>
		<li class="parent">
			<a href="#">আরও</a>
			<ul class="SubMenuM">
			<li><a href="#">আইন-আদালত</a></li>
			<li><a href="#">শিক্ষা</a></li>
			<li><a href="#">স্বাস্থ্য</a></li>
			<li><a href="#">তথ্যপ্রযক্তি</a></li>
			<li><a href="#">ভ্রমন</a></li>
			<li><a href="#">প্রবাস</a></li>
			<li><a href="#">শিল্প-সাহিত্য</a></li>
			<li><a href="#">গণমাধ্যম</a></li>
			<li><a href="#">কৃষি</a></li>
			<li><a href="#">মতামত</a></li>
			<li><a href="#">পরিবেশ</a></li>
			<li><a href="#">আবহাওয়া</a></li>
			<li><a href="#">ধর্ম</a></li>
			<li><a href="#">ভিন্নখবর</a></li>
			<li><a href="#">আর্কাইভস</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>

</header>