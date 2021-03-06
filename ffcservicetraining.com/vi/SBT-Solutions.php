<?php
	use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		// Load Composer's autoloader
		require '../vendor/autoload.php';

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){


		$mail = new PHPMailer(true);
		$mail->CharSet = "utf-8";
		$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host = "mail.ffcservicetraining.com"; // specify main and backup server
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
	   // $mail->SMTPAutoTLS = false;
		$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
		$mail->Username = "noreply@ffcservicetraining.com"; // your SMTP username or your gmail username
		$mail->Password = "1234@Qazx"; // your SMTP password or your gmail password

									  // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('noreply@ffcservicetraining.com', 'Noreply');
		$mail->addAddress('ffcservicetraining@gmail.com', 'FFC Team'); 
		$mail->addReplyTo('noreply@ffcservicetraining.com', 'Noreply');
		
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST['fullname']." - From SBT Solutions";
		$mail->Body    = "Name: ".$_POST['fullname']."<br>Email: ".$_POST['email'];
		//$mail->AltBody = $_POST['fullname']."\n".$_POST['email']."\n".$_POST['phone']."\n".$_POST['message']."\n";

		if(!$mail->send()) {
			echo '';
		} else {
			echo '';
		}
}
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with FFCServiceTraining Website Builder v4.11.5, https://ffcservicetraining.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="FFCServiceTraining v4.11.5, ffcservicetraining.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x41.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>SBT Solutions</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <meta property="og:title" content="SBT SOLUTIONS">
  <meta property="og:description" content="Công nghệ Kinh doanh Thông minh. Giúp bạn xây 1 lần, hưởng 1  đời. Không tin không được...">
  <meta property="og:image" content="https://ffcservicetraining.com/vi/sbtthumbnail.jpg">
  
</head>
<body>

<section once="footers" class="cid-rT7Xrgmc1y" id="footer6-1">

    

    

    <div class="container">
        <div class="media-container-row align-right mbr-white">
            <div class="col-12">
                <div style="padding-left: 2rem;background-image: url(assets/images/langicon.png);background-repeat: no-repeat;padding-right: 2rem;width:165px;float: right;" id="translate_select"></div>
					 
            </div>
        </div>
    </div>
</section>
 <section class="menu cid-rT7UIVKgoZ" once="menu" id="menu1-0">

   <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center  navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://ffcservicetraining.com">
                         <img src="assets/images/logo-122x41.png" alt="FFCServiceTraining" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="gioi-thieu.html">
                        Giới Thiệu</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="dich-vu-va-dao-tao.html">
                        Dịch Vụ &amp; Đào Tạo</a></li>
						<li class="nav-item"><a class="nav-link link text-black display-4" href="SBT-Solutions.html">
                        SBT Solutions</a></li>
						<li class="nav-item"><a class="nav-link link text-black display-4" href="giao-duc.html">
                        Giáo Dục</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="thanh-vien.html">
                        Thành Viên</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="lien-he.html">
                        Liên hệ</a>
                </li></ul>
            
        </div>
    </nav>
</section>



 <section class="header9 cid-rWY1lGQcJs mbr-parallax-background" id="header9-0">

    

    

    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10">
            
            <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2"><span style="font-style: normal;">Chào bạn!</span></h3>
            <p class="mbr-text align-left pb-3 mbr-fonts-style display-5">■  Chắc chắn bạn đã từng nghe câu nói “phi thương bất phú” (không làm kinh doanh thì khó mà giàu) ít nhất 1 lần trong đời?


<br>■  Và, chắc chắn sâu thẳm bên trong bạn cũng từng mong muốn, cũng từng khao khát khởi nghiệp hay tự kinh doanh (tự doanh) để làm chủ  cuộc chơi tài chính?<br><br></p>

<h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2"><span style="font-style: normal;">....nhưng: </span></h3>
<p class="mbr-text align-left pb-3 mbr-fonts-style display-5">
■  Bạn chưa có vốn hoặc vốn ít.
<br>■  Bạn sợ làm ăn thua lỗi hay thất bại.
<br>■  Bạn chưa biết kinh doanh sản phẩm gì là “chất” nhất.
<br>■  Bạn không có kỹ năng kinh doanh, tiếp thị & bán hàng. 
<br>■  Bạn không rành công nghệ, thậm chí là “mù” công nghệ.
<br>■  Bạn chưa có người hướng dẫn & không biết phải bắt đầu từ đâu.
....giờ đây bạn không cần phải lo lắng, không cần phải...nữa đêm thức giấc, ruột đau như cắt, nước mắt đầm đìa nữa, bởi vì FFC Service & Training đã có GIẢI PHÁP cho bạn:<br></p>
            
        </div>
    </div>

    
</section>


<section class="header1 cid-rWY1rL0sfj mbr-parallax-background" id="header1-1">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    <img src="assets/images/im003.png" alt="Mobirise" title="">
                </p>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
<div>Công Nghệ Kinh Doanh Thông Minh</div><div><span class="mbr-ogr">S</span>mart <span class="mbr-ogr">B</span>iz Tech <span class="mbr-ogr">S</span>olutions</div></h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    Siêu Công Nghệ - Kết "Huynh Đệ" - Tạo Tiền Tệ
                </p>
                
            </div>
        </div>
    </div>

</section>


<section class="mbr-section content7 cid-rWY1O8iASJ" id="content7-2">
          <img src="assets/images/bg003.png" alt="Mobirise" title="" width=100% style="margin-top: -30px;">
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 mbr-white">&nbsp;<span style="font-weight: normal;"><span class="mbr-ogr">SBT</span> SOLUTIONS &amp; ĐỐI TƯỢNG PHÙ HỢP:</span></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content mbr-figure">
                        <div class="mbr-section-text">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7"><span class="mbr-ogr">CÁ NHÂN</span>
							<br>Thích khởi nghiệp.
<br>Thích kinh doanh tự do.
<br>Thích làm việc theo nhóm & có hệ thống. 
<br>Thích vận hành hệ thống kinh doanh 1 người.
<br>Thích độc lập & tự chủ hoàn toàn về tài chính.<br>
                            </p>
                        </div>
                    </div>
                    <div class="mbr-figure" style="width: 45%;">
                     <img src="assets/images/im001.png" alt="Mobirise" title="">  
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container mt-5">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content mbr-figure">
                        <div class="mbr-section-text">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7"><span class="mbr-ogr">DOANH NGHIỆP</span>
							<br>Doanh chủ.
<br>Quản lý Doanh nghiệp.
<br>Bộ phận Tuyển dụng & Đào tạo.
<br>Bộ phận Kinh doanh & Marketing.
<br>Bộ phận Chăm sóc & Quản lý Khách hàng.<br>
                            </p>
                        </div>
                    </div>
                    <div class="mbr-figure" style="width: 45%;">
                     <img src="assets/images/im002.png" alt="Mobirise" title="">  
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-12 align-center">                
                <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4" href="#" id="myBtn">YES! Change My Life NOW!<br><span style="font-size:8pt">I'm looking for FAST action takers - This won't be open long...</span></a></div>
            </div>
        </div>
    </div>
</section>





<section class="features8 cid-rWY5Fztf5d mbr-parallax-background" id="features8-6">

    

    

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><span class="mbr-ogr">SBT</span> SOLUTIONS
<div><span style="
    margin: 0;
    padding: 0 0 0.5rem 0;
    border-bottom: solid #ff7800;
">&amp; TÍNH NĂNG VƯỢT TRỘI:</span></div></h4>
                    <p class="mbr-text mbr-fonts-style display-7">​<span class="mbr-ogr">1.</span> Chọn lọc khách hàng tự động.
<br>​​<span class="mbr-ogr">2.</span> Tuyển dụng người mới tự động. 
<br>​​<span class="mbr-ogr">3.</span> Chăm sóc khách hàng tự động.
<br>​<span class="mbr-ogr">4.</span> Chi phí cực thấp, hiệu quả cực cao.
<br>​​<span class="mbr-ogr">5.</span> Phân bổ khách hàng (Opt-in) tự động.
<br>​​<span class="mbr-ogr">6.</span> Mẫu quảng cáo (contents) được biên soạn sẵn từ a đến z.
<br>​<span class="mbr-ogr">7.</span> ​Ứng dụng Mobile App, đặt kinh doanh của bạn trọn trong lòng bàn tay. 
<br>​​<span class="mbr-ogr">8.</span> Sở hữu khối lượng data khách hàng “khủng” trong thời gian ngắn nhất.
<br>​​<span class="mbr-ogr">9.</span> Mẫu ấn phẩm quảng cáo (banner, poster v.v.) được thiết kế sẵn từ a đến z.</p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><span class="mbr-ogr">SBT</span> SOLUTIONS
<div><span style="
    margin: 0;
    padding: 0 0 0.5rem 0;
    border-bottom: solid #ff7800;
">&amp; GIÁ TRỊ ĐÍCH THỰC:</span></div></h4>
                    <p class="mbr-text mbr-fonts-style display-7">​​<span class="mbr-ogr">1.</span> “Xây” 1 lần, hưởng 1 đời.
					<br>​​<span class="mbr-ogr">2.</span> Thu nhập chủ động & không giới hạn.
<br>​​<span class="mbr-ogr">3.</span> Thu nhập thụ động ngay khi bạn đang ngủ. 
<br>​​<span class="mbr-ogr">4.</span> Vận hành theo nhóm hoặc cá nhân độc lập.
<br>​<span class="mbr-ogr">5.</span> Được sở hữu hệ thống kinh doanh tự động hoá “như mơ”.
<br>​​<span class="mbr-ogr">6.</span> Cơ hội để tạo dựng đế chế kinh doanh hàng triệu Mỹ kim theo cách của bạn.
<br>​<span class="mbr-ogr">7.</span> ​Phát triển kinh doanh toàn cầu, không giới hạn không gian & thời gian.
<br>​​<span class="mbr-ogr">8.</span> Không cần nhiều kiến thức, kinh nghiệm vẫn có cơ hội thành công & hạnh phúc.
<br>​​<span class="mbr-ogr">9.</span> Và, hơn thế nữa...<br><br></p>
                    
                </div>
            </div>

            

            
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rWY1Wzvmo3" id="content4-4">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-12">
                <h2 class="align-center mbr-fonts-style display-5 mbr-ogr">BẠN SẼ KHÔNG BAO GIỜ BIẾT BẠN TUYỆT VỜI ĐẾN MỨC NÀO ĐÂU
<div>CHO ĐẾN KHI BẠN HÀNH ĐỘNG & LÀM CHỦ GIẢI PHÁP NÀY:</div></h2>
                
                
            </div>
        </div>
    </div>
</section>
<section class="header1 cid-rWY1rL0sfj mbr-parallax-background" id="header1-1">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
			<p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    <img src="assets/images/im003.png" alt="Mobirise" title="">
                </p>
                
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2"><div>Công Nghệ Kinh Doanh Thông Minh</div>
<div><span class="mbr-ogr">S</span>mart <span class="mbr-ogr">B</span>iz Tech <span class="mbr-ogr">S</span>olutions</div></h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    Embrace Technology – Connect People – Create Value
                </p>
                
            </div>
        </div>
    </div>

</section>

<section class="header1 cid-rWY5TpuXUD" id="header16-7">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-5">HÃY LIÊN HỆ NGAY VỚI NGƯỜI TRAO CHO BẠN THÔNG TIN NÀY. HÃY NHỚ…
<div>THÀNH CÔNG KHÔNG CÓ DẤU CHÂN CỦA KẺ LƯỜI BIẾNG & SỢ HÃI!!!</div></h1>
                
                
               
            </div>

        </div>
    </div>
<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 align-center">                
                <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4" href="#" id="myBtn1">YES! Change My Life NOW!<br><span style="font-size:8pt">I'm looking for FAST action takers - This won't be open long...</span></a></div>
            </div>
        </div>
    </div>
</section>




<section class="cid-rT8fWwWMB1" id="footer5-j">

    

    

    <div class="container">
        
        <div class="footer-lower">
            
            <div class="media-container-row mbr-white">
                
                <div class="col-md-6 mbr-figure">
                    <div class="social-list align-right">
                        
                        <div class="soc-item">
                            <a href="https://twitter.com/ffcservice?s=09" target="_blank">
                                <img src="assets/images/twitter.png" alt="FFCServiceTraining" title="">
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/ffcservicetraining.global" target="_blank">
                                <img src="assets/images/facebook.png" alt="FFCServiceTraining" title="">
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/channel/UCQYj04trT1YC2P0iJFX-Jdg" target="_blank">
                                <img src="assets/images/youtube.png" alt="FFCServiceTraining" title="">
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/p/B9eodboFf3S/?igshid=3a6hgg9924v5" target="_blank">
                                <img src="assets/images/instagram.png" alt="FFCServiceTraining" title="">
                            </a>
                        </div>
                        
                    </div>
                </div>
				<div class="col-md-6 copyright mbr-figure">
                    <span class="mbr-fonts-style display-7 mbr-white">
                        ©2019 FFC SERVICE &amp; TRAINING - All rights reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
  
    <span class="close">&times;</span>
    
  </div>
  <div class="modal-body">
    <form action="SBT-Solutions.php" method="POST" class="mbr-form form-with-styler" data-form-title="FFCServiceTraining Form"><input type="hidden" name="email" data-form-email="true" value="x0F6t1z0Tuj9jqzBpjlBZQGu4q8tbKkr6iIJwk5uqcpk4unMwlB6+AkGHySk9rh7vMggGZBAatzhVO3bJFSXn0oF8uU8TtqfbNL+DvadXqchZaE8s7su1mbJ5386acVW">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row" style="padding: 0 20px 20px 20px;">
                        <div class="col-md-12  form-group">
                            <h3 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-5 mbr-white align-center" ><span style="font-weight: normal;"><span class="mbr-ogr">SBT</span> SOLUTIONS</span></h3>
                        </div>
						<div class="col-md-12  form-group">
                            
                            <input type="text" name="fullname" required="required" class="form-control display-7" placeholder="Your First Name Here...">
                        </div>
                        <div class="col-md-12  form-group">
                            
                            <input type="email" name="email" required="required" class="form-control display-7" placeholder="Your Email Address Here...">
                        </div>
                        
						
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" id="btnSubmit" class="btn btn-black-outline btn-form display-4">Begin Your Application</button>
                        </div>
						<div class="col-md-12 input-group-btn align-center">
                            <span class="display-7 icon1">  Your information is safe. We never sell your information to anyone.</span>
                        </div>
                    </div>
                </form>
  </div>
  
</div></div>
<div id="Registered" class="modal">
<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
  
    <span  class="close">&times;</span>
    
  </div>
  <div class="modal-body">
    <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-7 mt-3 mbr-white">
                    Chúc mừng Bạn đã đăng ký thành công. Chúng tôi sẽ xem xét & phúc đáp đến Bạn sớm nhất. <br><br>Trân trọng! <br>FFC Team
                </h3>
  </div>
  
</div></div>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
<script type="text/javascript" 
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'translate_select');
        }
    </script>
<script type="text/javascript">
    $('#translate_select').on('click', function(data) {
  if(this.firstChild.firstChild.firstChild.value==='vi')
  window.location.href ='vi';
});
</script>


<script type="text/javascript">




// Get the modal
var modal = document.getElementById("myModal");
var modalRegistered = document.getElementById("Registered");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanRegistered = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
spanRegistered.onclick = function() {
  modalRegistered.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }

}
$(window).on("load", function() {

     modalRegistered.style.display = "block";
});
</script>


<script type="text/javascript">
_atrk_opts = { atrk_acct:"hQFZq1hNdI20fn", domain:"ffcservicetraining.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=hQFZq1hNdI20fn" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
</body>
</html>