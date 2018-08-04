<?php 
include("page/header.php");
?>

    <div class="wrapper">
      
     <div class="container-fluid">
        <div id="content">
<div class="row">
  <div class="col-lg-12" id="application-form-birth">
    <div class="page-header">
      <h1>Birth Certificate Application Formss</h1>
 
        <form id="birth_form" action="/birth/form" class="form-horizontal" method="post" novalidate="novalidate" wtx-context="F5059A7D-C616-4FC6-803A-8EB5558B22E9">
        

      <h4 class="page-header">Name on the Birth Certificate</h4>

      <div class="form-group">
        <label for="primary_first_name" class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-8">
          <input type="text" name="primary[first_name]" value="" id="primary_first_name" class="required checkfieldforinvalid form-control" maxlength="30" wtx-context="CB1E6AB8-0ABD-4C7C-B4A6-38D6CFC8A01A">
        </div>
      </div>
        
        <div class="form-group">
          <label for="primary_middle_name" class="col-sm-2 control-label">Middle Name</label>
          <div class="col-sm-8">
            <input type="text" name="primary[middle_name]" value="" id="primary_middle_name" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="07C88300-E283-4582-9A78-413993F16510">
          </div>
        </div>
        
        <div class="form-group">
          <label for="primary_last_name" class="col-sm-2 control-label">Last Name</label>
          <div class="col-sm-8">
            <input type="text" name="primary[last_name]" value="" id="primary_last_name" class="required form-control checkfieldforinvalid" maxlength="20" wtx-context="8D1AE2F7-F09C-4D86-8255-12EA2F590636">
          </div>
        </div>
        
        <h4 class="page-header">Birth Details</h4>
        
        <div class="form-group">
          <label for="gender" class="control-label col-sm-2">Gender</label>
          <div class="col-sm-6 col-md-3">
                        <select name="gender" id="gender" class="required form-control" wtx-context="8CF63AE3-E0DB-45C7-88BA-6EFBE360946A">
              <option value="">- Select -</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
                      </div>
        </div>
        
        <div class="form-group">
  <label for="birthday_month" class="control-label col-sm-2">Birthday</label>
    
    <div class="col-sm-3 col-md-3">
      <select name="birthday[month]" id="birthday_month" class="required event_date_element form-control" required="" wtx-context="5E327C12-C255-4F6E-B58A-09CD9D1043F5">
        <option value="">- Month -</option>
                <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May" dt="">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
    </div>

    <div class="col-sm-3 col-md-3">
      <select name="birthday[day]" id="birthday_day" class="required form-control event_date_element" required="" wtx-context="5E72F560-7961-4BDE-8C39-F6DC6C986367">
        <option value="">- Day -</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
    </div>

    <div class="col-sm-3 col-md-3">
      <select name="birthday[year]" id="birthday_year" class="required form-control event_date_element" required="" wtx-context="11A4F83A-6499-4883-B978-C330746708C5">
        <option value="">- Year -</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
              </select>
    </div>

    <label id="event_date_error" class="error hide" style="display: none;">Invalid Date</label>
</div>


<div id="within_ph">
  <div class="form-group">
    <label for="birth_place_province" class="control-label col-sm-2">Birth Place Province</label>
    <div class="col-sm-6 col-md-3">
      <select name="birth_place[province]" id="birth_place_province" class="required form-control" required="" wtx-context="062B9E77-9D2D-4B96-B4AA-882D83E75359">
        <option value=""> - Select a Province - </option>
                  <option value="024">DAVAO DEL SUR</option>
              </select>
    </div>
  </div>

  <div class="form-group">
    <label for="birth_place_city" class="control-label col-sm-2">Birth Place City</label>
    <div class="col-sm-6 col-md-3">
      <select name="birth_place[city]" id="birth_place_city" class="required form-control" required="" wtx-context="64AADA72-841C-4579-A559-0358F60C7A11">
        <option value=""> - Select a City - </option>
        	 <option value=""> Digos City </option>
                                </select>
    </div>
  </div>
</div>

<div id="outside_ph" class="hide">
  <div class="form-group">
    <label for="outside_ph_dispatch_number" class="control-label col-sm-2">Dispatch Number</label>
    <div class="col-sm-6 col-md-3">
      <input type="text" name="outside_ph[dispatch_number]" value="" id="outside_ph_dispatch_number" class="form-control" wtx-context="D64613CB-D501-499D-B3A9-0F8339213E78">
    </div>
  </div>

  <div class="form-group">
    <label for="outside_ph_reference_number" class="control-label col-sm-2">Reference Number</label>
    <div class="col-sm-6 col-md-3">
      <input type="text" name="outside_ph[reference_number]" value="" id="outside_ph_reference_number" class="form-control" wtx-context="F0C4DC0B-3086-47B6-8421-2948BF601392">
    </div>
  </div>
  
</div>

        
        <div class="form-group">
          <label for="birthright" class="control-label col-sm-2">Type of Birth</label>
          <div class="col-sm-6 col-md-3">
            <select name="typeofBirth" id="birthright" class="required form-control" wtx-context="3AC5F122-6D51-4144-875F-C0FE4BD213F5">
              <option value="">- Select -</option>
              <option value="Single">Single</option>
              <option value="Twin">Twin</option>
              <option value="Triplet">Triplet</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label for="birthright" class="control-label col-sm-2">Birth Order (first,second, etc.)</label>
          <div class="col-sm-6 col-md-3">
             <input type="text" name="birthOrder" value="" id="birthOrder" class="form-control" wtx-context="F0C4DC0B-3086-47B6-8421-2948BF601392">
          </div>
        </div>

        <h4 class="page-header">Father's Name</h4>

        <div class="form-group">
          <label for="father_first_name" class="control-label col-sm-2">First Name</label>
          <div class="col-sm-8">
            <input type="text" name="father[first_name]" value="" id="father_first_name" maxlength="30" class="checkfieldforinvalid form-control" wtx-context="249A2AF8-1F11-446A-8955-999D9846FF27">
          </div>
        </div>

        <div class="form-group">
          <label for="father_middle_name" class="control-label col-sm-2">Middle Name</label>
          <div class="col-sm-8">
            <input type="text" name="father[middle_name]" value="" id="father_middle_name" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="B3DA3783-7608-450E-8A3B-33F30DEC0DCA">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Last Name</label>
          <div class="col-sm-8">
            <input type="text" name="father[last_name]" value="" id="father_last_name" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Citezenship</label>
          <div class="col-sm-8">
            <input type="text" name="fatherCitizenship" value="" id="father_citizenship" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Religion</label>
          <div class="col-sm-8">
            <input type="text" name="fatherReligion" value="" id="father_religion" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Occupation</label>
          <div class="col-sm-8">
            <input type="text" name="fatherOccupation" value="" id="father_occupation" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>
        
        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Age at the time of this Birth</label>
          <div class="col-sm-8">
            <input type="text" name="fatherAgeofBirth" value="" id="father_age_of_birth" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>
        <h4 class="page-header">Mother's <strong>Maiden</strong> Name</h4>
      

        <div class="form-group">
          <label for="mother_first_name" class="control-label col-sm-2">First Name</label>
          <div class="col-sm-8">
            <input type="text" name="mother[first_name]" value="" id="mother_first_name" class="required checkfieldforinvalid form-control" maxlength="30" wtx-context="9CF48D4A-BED1-46EE-A7EB-0C24B7F92D9E">
          </div>
        </div>

        <div class="form-group">
          <label for="mother_middle_name" class="control-label col-sm-2">Middle Name</label>
          <div class="col-sm-8">
            <input type="text" name="mother[middle_name]" value="" id="mother_middle_name" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="1EC01226-016B-4FE9-8DAB-5F4C4494ED0E">
          </div>
        </div>

        <div class="form-group">
          <label for="mother_last_name" class="control-label col-sm-2">Last Name</label>
          <div class="col-sm-8">
            <input type="text" name="mother[last_name]" value="" id="mother_last_name" class="required checkfieldforinvalid form-control" maxlength="20" wtx-context="63B6D235-3D8F-4840-882A-9C5BCFF052A0">
          </div>
        </div>
        
        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Citezenship</label>
          <div class="col-sm-8">
            <input type="text" name="motherCitizenship" value="" id="mother_citizenship" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Religion</label>
          <div class="col-sm-8">
            <input type="text" name="motherReligion" value="" id="mother_religion" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>

        <div class="form-group">
          <label for="father_last_name" class="control-label col-sm-2">Occupation</label>
          <div class="col-sm-8">
            <input type="text" name="motherOccupation" value="" id="mother_occupation" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>
        
        </div><label for="father_last_name" class="control-label col-sm-2">Age at the time of this Birth</label>
          <div class="col-sm-8">
            <input type="text" name="motherAgeofBirth" value="" id="mother_age_of_birth" maxlength="20" class="checkfieldforinvalid form-control" wtx-context="3AEDC26D-5792-4F71-B8A3-CD808CB20201">
          </div>
        </div>
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Submit <i class="glyphicon glyphicon-chevron-right glyphicon-white"></i></button>
        </div>
      
      </form></div>
      
    
  </div>
    
</div>

        </div>
      </div>
    

    

    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-3.2.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <!-- <script type="text/javascript" src="/js/jquery-ui-1.10.2.custom.min.js"></script> -->
    <script type="text/javascript" src="/js/nsohelpline.js?cb=180620"></script>

    <script type="text/javascript" src="/js/mobile-detect.min.js"></script>
    <script>
      var md = new MobileDetect(window.navigator.userAgent);

      $reso = window.screen.width + ' x ' + window.screen.height;
      $user_info = [];
      $user_info['resolution'] = $reso;
      $user_info['raw_data'] = md.ua;
      $user_info['user_agent'] = md.userAgent();
      $user_info['os'] = md.os();
      $user_info['mobile_grade'] = md.mobileGrade();
      $user_info['mobile'] = md.phone();
      $url = "/mobile/sendInfo";

      idleTimer = null;
      idleState = false;
      idleWait = 5000;

      $(function () {
          $('*').on('mousemove keydown scroll', function () {
              if ($(this).is('#call-btn')) {
                  $('#call-modal').modal({
                      show: true
                  });
                  return false;
              } else {
                  clearTimeout(idleTimer);

                  if (idleState == true) {
                      $("#call-btn").addClass('hidden');
                  }

                  idleState = false;

                  idleTimer = setTimeout(function () {
                      $("#call-btn").removeClass('hidden');
                      idleState = true;
                  }, idleWait);
              }
          });

          $('body').trigger('mousemove');
      });
    </script>


    <script type="text/javascript" charset="utf-8">
  $(function () {
    var month = "#birthday_month";
    var day = "#birthday_day";
    var year = "#birthday_year";
    
    $('.event_date_element').change(function () {
      
      // This checks if the date parses to the same date
      var y = $(year).val();
      var m = $(month).val();
      var d = $(day).val();
      
      // Why? because javascript months are zero-based.
      var month_name = {
        0: 'January',
        1: 'February',
        2: 'March',
        3: 'April',
        4: 'May',
        5: 'June',
        6: 'July',
        7: 'August',
        8: 'September',
        9: 'October',
        10: 'November',
        11: 'December'
      };
      
      if (y && d && m) {
        dt = new Date(m + ' ' + d + ', ' + y);
        t1 = (month_name[dt.getMonth()] == m);
        t2 = (dt.getDate() == d);
        t3 = (dt.getFullYear() == y);
        
        var valid = (t1 && t2 && t3);
        
        if (valid) {
          valid = (dt.getTime() < new Date().getTime());
        }
        
        if (valid) {
          $('#event_date_error').hide();
          $('button[type="submit"]').removeAttr('disabled');
        } else {
          $('#event_date_error').show();
          $('button[type="submit"]').attr('disabled', 'disabled');
        }
        
      }
    });
  });
</script>
<script type="text/javascript" charset="utf-8">
  $(function () {
    var country_id = "#birth_place_country";
    var province_id = "#birth_place_province";
    var city_id = "#birth_place_city";
    var endpoint = "/forms/municipalities";
    
    $(province_id).change(function () {
      $(city_id).attr('disabled', 'disabled').html('<option>Loading...</option>');
      $.get(endpoint, {province: $(this).val()}, function (data) {
        $(city_id).removeAttr('disabled').html('<option value=""> - Select a City - </option>').append(data);
        // $(city_id).html(data);
      });
    });
    
    $(country_id).change(function () {
      if ($(this).val() != '608') {
        $(city_id).attr('disabled', 'disabled');
        $(province_id).attr('disabled', 'disabled');
        
        $('#outside_ph').show();
        $('#outside_ph').removeClass('hide');
        $('#within_ph').hide();
      } else {
        $(city_id).removeAttr('disabled');
        $(province_id).removeAttr('disabled');
        
        $('#outside_ph').hide();
        $('#within_ph').show();
        $('#outside_ph').addClass('hide');
      }
    });
  });
</script>

          <!-- FB Share -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1558460760835612";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- REQUESTED BY MARKETING -->

      <!-- Adroll Script -->
      <script type="text/javascript">
      adroll_adv_id = "WZW4XC5F3BC7ZDL733N2I3";
      adroll_pix_id = "AJR625KIAFHFFGIMGORGDL";
      (function () {
      var oldonload = window.onload;
      window.onload = function(){
         __adroll_loaded=true;
         var scr = document.createElement("script");
         var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
         scr.setAttribute('async', 'true');
         scr.type = "text/javascript";
         scr.src = host + "/j/roundtrip.js";
         ((document.getElementsByTagName('head') || [null])[0] ||
          document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
         if(oldonload){oldonload()}};
      }());
      </script>

      <!-- Google Code for Remarketing Tag -->
      <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 993544040;
      var google_custom_params = window.google_tag_params;
      var google_remarketing_only = true;
      /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/993544040/?value=0&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>

      <!-- FB Pixel Tracking -->
      <script>(function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
          var fbds = document.createElement('script');
          fbds.async = true;
          fbds.src = '//connect.facebook.net/en_US/fbds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(fbds, s);
          _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '1624357704460596']);
      })();
      window._fbq = window._fbq || [];
      window._fbq.push(['track', 'PixelInitialized', {}]);
      </script>
      <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1624357704460596&amp;ev=PixelInitialized" /></noscript>

<?php 
include("page/footer.php");
?>

<?php


if(isset($_POST['index'])){

    //getting text data
   $pid = $_SESSION["uid"];
   $product_title = $_POST['product_title'];
   $product_cat = $_POST['product_cat'];
   $product_price = $_POST['product_price'];
   $product_desc = $_POST['product_desc'];
   
    //getting image data
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];
   
   move_uploaded_file($product_image_tmp,"product_images/$product_image");
   
   $insert_product = "insert into Register (name,prd_cat,prd_title,prd_price,prd_desc,prd_img) values ('$pid','$product_cat','$product_title','$product_price','$product_desc','$product_image')";
   
   $run_product = mysqli_query($con,$insert_product);
   
   if($run_product){
   
   echo"<script>alert('Product Has been inserted')</script>";
   echo"<script>window.open('Producer.php?tn=$r','_self')</script>";
   }


}


?>















































