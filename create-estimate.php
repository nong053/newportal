<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<style>
@import url(fonts/thsarabunnew.css);
body{ font-family: 'THSarabunNew', sans-serif; 
/* line-height: 1.7em; background: #e1e1e1;  */
}

body {
    overflow-x: hidden;
    /* color: rgba(244,244,245,.9); */
    background: radial-gradient(farthest-side ellipse at 10% 0,#333867 20%,#17193b);
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
}
.bg_blue{
    background:#BBC8EB
}
</style>
<body>

<?php
    include("api/config.php");
?>




<div class='container-fluid '>
<div class='row' style='padding-top:30px;'>
    <div class='col-md-2'>
    
    <div class="panel panel-primary"> 
        <div class="panel-heading"> 
            <h3 class="panel-title">
                ฝ่ายการแพทย์
            </h3> 
        </div> 
        <div class="panel-body bg_blue" > 
       

        

        <ul class="list-group bg_blue">


            <?php
            $strSQL="select * from medical_report_tbl";
            $result=mysqli_query($conn,$strSQL);
            $rs=mysqli_fetch_array($result);

            ?>

           
            <?php
           if($rs["data_report_status1"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  checked id="dataDeploy-1" class="dataDeploy" > สถานการณ์การแพร่ระบาดของโรค COVID-19 ทั่วโลก</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-1" class="dataDeploy" > สถานการณ์การแพร่ระบาดของโรค COVID-19 ทั่วโลก</li>
            <?php
           }
           ?>

           <?php
            if($rs["data_report_status2"]=='1'){
            ?>
            <li class="list-group-item bg_blue"><input type="checkbox" checked id="dataDeploy-2" class="dataDeploy" > ประเทศที่มีผู้ติดเชื้อฯ สูงสุด 10 อันดับ</li>
            <?php
           }else{
            ?>
            <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-2" class="dataDeploy" > ประเทศที่มีผู้ติดเชื้อฯ สูงสุด 10 อันดับ</li>
            <?php
           }
           ?>


           
<?php
            if($rs["data_report_status3"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-3" class="dataDeploy" checked > ประชาคมอาเซียน</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-3" class="dataDeploy" > ประชาคมอาเซียน</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status4"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" checked id="dataDeploy-4" class="dataDeploy" checked> สถานการณ์การแพร่ระบาดของโรค COVID-19 ประเทศไทย</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-4" class="dataDeploy" > สถานการณ์การแพร่ระบาดของโรค COVID-19 ประเทศไทย</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status5"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" checked id="dataDeploy-5" class="dataDeploy" checked> ศักยภาพ ร.พ.สังกัด ท.อ</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-5" class="dataDeploy" > ศักยภาพ ร.พ.สังกัด ท.อ</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status6"]=='1'){
            ?>
              <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-6" class="dataDeploy" checked> สถิติผู้ติดเชื้อ</li>
            <?php
           }else{
            ?>
              <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-6" class="dataDeploy" > สถิติผู้ติดเชื้อ</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status7"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-7" class="dataDeploy" checked> State Quarantine</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox"  id="dataDeploy-7" class="dataDeploy" > State Quarantine</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status8"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-8" class="dataDeploy" checked> การสนับสนุนด้านเวชภัณฑ์ป้องกัน</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-8" class="dataDeploy" > การสนับสนุนด้านเวชภัณฑ์ป้องกัน</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status9"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-9" class="dataDeploy" checked> การประชาสัมพันธ์</li>
            <?php
           }else{
            ?>
            <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-9" class="dataDeploy" > การประชาสัมพันธ์</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status10"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-10" class="dataDeploy" checked> จำนวนผู้ป่วย ARI Clinic</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-10" class="dataDeploy" > จำนวนผู้ป่วย ARI Clinic</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status11"]=='1'){
            ?>
              <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-11" class="dataDeploy" checked> พัสดุสายแพทย์</li>
            <?php
           }else{
            ?>
              <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-11" class="dataDeploy" > พัสดุสายแพทย์</li>
            <?php
           }
           ?>

           
<?php
            if($rs["data_report_status12"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-12" class="dataDeploy" checked> พัสดุสายพลาธิการ</li>
            <?php
           }else{
            ?>
            <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-12" class="dataDeploy" > พัสดุสายพลาธิการ</li>
            <?php
           }
           ?>

<?php
            if($rs["data_report_status13"]=='1'){
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-13" class="dataDeploy" checked> เครื่องบินลำเลียงสนับสนุนการงานด้านการแพทย์</li>
            <?php
           }else{
            ?>
             <li class="list-group-item bg_blue"><input type="checkbox" id="dataDeploy-13" class="dataDeploy" > เครื่องบินลำเลียงสนับสนุนการงานด้านการแพทย์</li>
            <?php
           }
           ?>

           

            
           
            
            
            
            
           
            
            
          
            
            
            
           
            
            
            
            
            

            
  
        </ul>
        <p>
            <button type="button" id="btnSave" class="btn btn-primary"><i class='glyphicon glyphicon-floppy-disk'></i> บันทึก</button>
            </p>
        </div> 
    </div>


    
    </div>
    <div class='col-md-4'>
    
<div class="panel panel-primary"> 
    <div class="panel-heading"> 
        <h3 class="panel-title">
            Data
        </h3> 
    </div> 
    <div class="panel-body bg_blue"> 
        
    <h4>ข่าวที่เกี่ยวข้อง</h4>
    <div class="col-sm-6 col-md-6"> 
        <div class="thumbnail"> 
        <img alt="100%x200" data-src="holder.js/100%x200" src="https://www.thaipost.net/main/uploads/photos/big/20210424/image_big_60842dbb5515e.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> 
            <div class="caption"> 
            <h3>ทอ.ส่งเครื่อบินรับ ขรก.</h3> 
            <p>
            24 เม.ย. 64 - พลอากาศโท ฐานัตถ์ จันทร์อำไพ เจ้ากรมกิจการพลเรือนทหารอากาศ ในฐานะโฆษกกองทัพอากาศ เปิดเผยว่า จากสถานการณ์การแพร่ระบาดของโควิด-19 ในประเทศอินเดียที่มีการระบาดอย่างหนักและมีความรุนแรงในหลายพื้นที่ โดยเฉพาะระบบ
            </p> 
            
            </div> 
        </div> 
    </div>

    <div class="col-sm-6 col-md-6"> 
        <div class="thumbnail"> 
        <img alt="100%x200" data-src="holder.js/100%x200" src="https://www.matichon.co.th/wp-content/uploads/2021/04/%E0%B8%97%E0%B8%AD-%E0%B9%81%E0%B8%88%E0%B8%87.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> 
            <div class="caption"> 
            <h3>ทอ.แจง ส่ง A-320 รับผู้ช่วยทูตทหาร</h3> 
            <p>มื่อวันที่ 25 เมษายน พล.อ.ท.ฐานัตถ์ จันทร์อำไพ เจ้ากรมกิจการพลเรือนทหารอากาศ ในฐานะโฆษกกองทัพอากาศ ชี้แจงถึงความจำเป็นที่จะต้องส่งเครื่องบินลำเลียงแบบที่ 15 แอร์บัส (A320)</p> 
            
            </div> 
        </div> 
    </div>

    <hr>

    <div class="col-sm-12 col-md-12"> 
        <div class="thumbnail"> 
        <img alt="100%x200" data-src="holder.js/100%x200" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4VuDcXGSdhmc0emjeoKjC2I3PPxzqSO3pKdYUNVcsOYcepgEiYy.webp" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> 
            <div class="caption"> 
            <h3>ศบค.สั่งชะลอ 3 ชาติเข้าไทย กักตัว 21 วัน</h3> 
            <p>
            ศบค.ยืนยันสกัดกั้นการแพร่ระบาดเชื้อโควิดฯ สายพันธุ์อินเดียเข้มข้น ย้ำข่าวเหมาลำมาไทยไม่จริง แจงผู้ป่วยอินเดีย 7 ราย มาเมื่อ 17 เม.ย.โดยเครื่องบินพาณิชย์ มีเอกสารครบถ้วน เข้ารักษา รพ.แล้ว ขณะที่ศปก.ศบค.ชะลอเข้าไทยจากประเทศต้นทาง "อินเดีย-ปากีสถาน-บังกลาเทศ" เพิ่มมาตรการการกักตัวเป็น 21 วัน 
            </p> 
            
            </div> 
        </div> 
    </div>


    
        

    </div> 
</div>


    
    </div>
    <div class='col-md-6'>
    
<div class="panel panel-primary"> 
    <div class="panel-heading"> 
        <h3 class="panel-title">
           Map
        </h3> 
    </div> 
    <div class="panel-body bg_blue"> 
    <iframe src="http://localhost/new-ncoc-portal/new-map2.php" height="100%" width="100%" title="NCOC PORTAL"></iframe>
    </div> 
</div>
    
    </div>
</div>
</div>
</body>

<script>
    $(document).ready(function(){
         $("#btnSave").click(function(){
           // alert($("#dataDeploy-1").val());
            var dataDeploy1;
            var dataDeploy2;
            var dataDeploy3;
            var dataDeploy4;
            var dataDeploy5;
            var dataDeploy6;
            var dataDeploy7;
            var dataDeploy8;
            var dataDeploy9;
            var dataDeploy10;
            var dataDeploy11;
            var dataDeploy12;
            var dataDeploy13;
           

            if ($('#dataDeploy-1').is(":checked"))
            {
                dataDeploy1=1;
            // it is checked
            }else{
                dataDeploy1=0;
            }

            if ($('#dataDeploy-2').is(":checked"))
            {
                dataDeploy2=1;
            }else{
                dataDeploy2=0;
            }

            if ($('#dataDeploy-3').is(":checked"))
            {
                dataDeploy3=1;
            }else{
                dataDeploy3=0;
            }

            if ($('#dataDeploy-4').is(":checked"))
            {
                dataDeploy4=1;
            }else{
                dataDeploy4=0;
            }
            if ($('#dataDeploy-5').is(":checked"))
            {
                dataDeploy5=1;
            }else{
                dataDeploy5=0;
            }
            if ($('#dataDeploy-6').is(":checked"))
            {
                dataDeploy6=1;
            }else{
                dataDeploy6=0;
            }
            if ($('#dataDeploy-7').is(":checked"))
            {
                dataDeploy7=1;
            }else{
                dataDeploy7=0;
            }
            if ($('#dataDeploy-8').is(":checked"))
            {
                dataDeploy8=1;
            }else{
                dataDeploy8=0;
            }
            if ($('#dataDeploy-9').is(":checked"))
            {
                dataDeploy9=1;
            }else{
                dataDeploy9=0;
            }
            if ($('#dataDeploy-10').is(":checked"))
            {
                dataDeploy10=1;
            }else{
                dataDeploy10=0;
            }
            if ($('#dataDeploy-11').is(":checked"))
            {
                dataDeploy11=1;
            }else{
                dataDeploy11=0;
            }
            if ($('#dataDeploy-12').is(":checked"))
            {
                dataDeploy12=1;
            }else{
                dataDeploy12=0;
            }
            if ($('#dataDeploy-13').is(":checked"))
            {
                dataDeploy13=1;
            }else{
                dataDeploy13=0;
            }

            $.ajax({
                url:"api/service.php",
                type:"post",
                dataType:"json",
                data:{
                    "dataDeploy1":dataDeploy1,
                    "dataDeploy2":dataDeploy2,
                    "dataDeploy3":dataDeploy3,
                    "dataDeploy4":dataDeploy4,
                    "dataDeploy5":dataDeploy5,
                    "dataDeploy6":dataDeploy6,
                    "dataDeploy7":dataDeploy7,
                    "dataDeploy8":dataDeploy8,
                    "dataDeploy9":dataDeploy9,
                    "dataDeploy10":dataDeploy10,
                    "dataDeploy11":dataDeploy11,
                    "dataDeploy12":dataDeploy12,
                    "dataDeploy13":dataDeploy13,
                    "action":"save"
                },
                success:function(data){
                   
                    if(data[0]=="success"){
                       // alert("บันทึกเรียบร้อย");
                        location.reload();
                    }
                }
            });
         });
    });
</script>