<style>
body {
    background-image: url(<?= base_url()?>assets/images/home.jpg);
    font-family: "Helvetica Neue", Helvetica, Arial;
    padding-top: 7%;
      background-repeat:no-repeat;
      background-size: 100% 100%;
    
}

.container {
    width: 406px;
    max-width: 406px;
    margin: 0 auto;
}

#signup {
    padding: 0px 25px 25px;
     background: #fcf1d5;
    box-shadow: 
        0px 0px 0px 5px #fa7758, 
        0px 4px 20px #fa7758;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .header p {
    color: #8f8f8f;
    font-size: 14px;
    font-weight: 300;
}

#signup .sep {
    height: 1px;
    background: #e8e8e8;
    width: 406px;
    margin: 0px -25px;
}

#signup .inputs {
    margin-top: 25px;
}

#signup .inputs label {
    color: #8f8f8f;
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 1px;
    margin-bottom: 7px;
    display: block;
}

input::-webkit-input-placeholder {
    color:    #b5b5b5;
}

input:-moz-placeholder {
    color:    #b5b5b5;
}

.view-btn{

}


#signup .inputs input[type=text]:focus, input[type=password]:focus {
    background: #fff;
    box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    outline: none;   
}

#signup .inputs .checkboxy {
    display: block;
    position: static;
    height: 25px;
    margin-top: 10px;
    clear: both;
}

#signup .inputs input[type=checkbox] {
    float: left;
    margin-right: 10px;
    margin-top: 3px;
}

#signup .inputs label.terms {
    float: left;
    font-size: 14px;
    font-style: italic;
}

#signup .inputs #submit {
    width: 100%;
    margin-top: 20px;
    padding: 15px 0;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;
        background: -moz-linear-gradient(
        top,
        #b9c5dd 0%,
        #a4b0cb);
/*    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#b9c5dd),
        to(#a4b0cb));*/
    background: #fa7758!important;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #fa7758;
    -moz-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    text-shadow:
        0px 1px 3px rgba(000,000,000,0.3),
        0px 0px 0px rgba(255,255,255,0);
    display: table;
    position: static;
    clear: both;
}

#signup .inputs #submit:hover {
    background: -moz-linear-gradient(
        top,
        #a4b0cb 0%,
        #b9c5dd);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#a4b0cb),
        to(#b9c5dd));
}
.logo_semen {
    padding-top: 5%;
    background-attachment: scroll;
    background-clip: border-box;
    background-color: rgba(0, 0, 0, 0);
     background-image: url(<?= base_url()?>assets/images/logo.png);

    background-origin: padding-box;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 140px 120px;
    height: 120px;
    margin: 20px auto auto;
    /*width: 100px;*/
}
</style>	

  <title>MONITORING</title>
  <link rel="icon" href="<?php echo base_url('assets/images/logo1.png');?>" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url('assets/images/logo1.png');?>" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css') ?>">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css') ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>">
<div class="container">
<?php echo  $this->session->flashdata('message');?>
    <form id="signup" method="post">
        <div class="header">
            <div class="logo_semen"></div>
            <h3 style="border: none !important; text-align: center;color:#000"><b>MONITORING PRINTER SIG</b></h3>
        </div>
        <div class="sep"></div>
        <div class="inputs" >
            <input type="text" class="form-control"  name="username" placeholder="Username"><br>
            <input type="password" class="form-control" name="password" placeholder="Password"><br>
            <input id="submit" type="submit" value="Login" ><br>
                <button  id="submit" class="view-btn">
                    <a style="color: white;" href="<?php echo base_url().'homeguest/guestview'?>"><i class="fa fa-plus-square" aria-hidden="true"></i>&ensp;Guest View</a>
                </button>  
                
           <!-- <button type="button" id="submit" class="btn btn-success" onclick="login()" >Login</button>
            <span id="loading" style="display:none;">	<center><i  class="fa fa-spinner fa-spin fa-3x" ></i> Loading.. </center></span>
			-->
		</div>
    </form>
</div>

<script>

    function login() {
        $('#loading').show();           
        var formData = new FormData($("#signup")[0]);
        $.ajax({
            type: "POST",
            url: 'Login/',
            data: formData,
            success: function (data) {
                $('#loading').hide();
                var obj = JSON.parse(data)
                var company = obj.company;    
                var jabatan = obj.jabatan; 
                if(jabatan == 'ASR' || jabatan == 'ASR3' || jabatan == 'ASR2'){
                    if(company == '2000' || company == '5000' || company == '7000'){
                        $('#myAsuransi').modal('show');
                    }else{
                        window.location.href = 'Home';
                    }
                }else if(jabatan == 'PGD' || jabatan == 'PGD3' || jabatan == 'PGD2'){
                    if(company == '2000' || company == '5000'){
                        $('#myAdvert').modal('show');
                    }else{
                        window.location.href = 'Home';
                    }
                }else{
                    window.location.href = 'Home';
                }
            },
            async: false,
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function changeSession(){
        $('.loadingMod').show();
        var formData = new FormData($("#frmCompany")[0]);
        $.ajax({
            type: "POST",
            url: 'Login/changeSession',
            data: formData,
            success: function () {
                $('.loadingMod').hide();
                window.location.href = 'Home';
            },
            async: false,
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function changeSessionAsuransi(){
        $('.loadingMod').show();
        var formData = new FormData($("#frmCompanyAsuransi")[0]);
        $.ajax({
            type: "POST",
            url: 'Login/changeSession',
            data: formData,
            success: function () {
                $('.loadingMod').hide();
                window.location.href = 'Home';
            },
            async: false,
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function logoutSession(){
        window.location.href = 'login/logout';
    }
</script>