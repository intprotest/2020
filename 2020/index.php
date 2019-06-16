

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>მუნიციპალიტეტების რეესტრი</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="/2020/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->

    <!-- Custom styles -->
    <link href="/2020/css/munreg.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href='/2020/material/css/ripples.min.css' rel="stylesheet">
<link href='/2020/material/css/material-wfont.min.css' rel="stylesheet">

  </head>
  <body>
 
<!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
    <div class="navbar navbar-material-teal navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="logo">
          <a href="index.php" style="text-decoration: none;">
          <img src="http://caucasusoffline.com/newlogo4.jpg" class="pull-left" style="height:44px;margin:4px 6px 0 0"></a>
          <div class="napr">საჯარო </div>
          <div class="munreg">მუნიციპალიტეტები</div>
        </div>
        <div class="collapse navbar-collapse">

        <form class="navbar-form navbar-right" name="mun_filter" id="mun_filter" role="form">
            <div class="form-group">
                <input class="form-control input-lg" id="searchinput" name="searchinput" type="search" placeholder="სწრაფი ძებნა" />
            </div>
        </form>

        </div><!--/.nav-collapse -->
      </div>
    </div>
  
  <!-- Begin page content -->
  <div class="container center-container">

    <div class="center-row">

      <div id="munreg-main" class="col-xs-8 col-sm-8 munreg-main">
        <div class="napr" style="text-align: center;margin:5em">კონკრეტული მუნიციპალიტეტის შესახებ ინფორმაციისა და ამონაწერის  მისაღებად აირჩიეთ შესაბამისი მუნიციპალიტეტი
&nbsp;<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></div>
        <div style="text-align: center;margin:5em"><img src="images/map.png" align="center" class="img-responsive"></div>
      </div>

      <div class="col-xs-4 col-sm-4 munreg-sidebar">

        <div id="municipalitetebi" class="list-group">
	  
	  
<a id="MUN-Tbilisi" href="#" class="list-group-item">
<span style="display:none">ქალაქ თბილისის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქალაქ თბილისის მუნიციპალიტეტი</div>
</a>
	  
	  
	  
	   <!-- აჭარა -->
	  

 <a id="MUN-Batumi" href="#" class="list-group-item">
<span style="display:none">ქალაქ ბათუმის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქალაქ ბათუმის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Kobuleti" href="#" class="list-group-item">
<span style="display:none">ქობულეთი მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქობულეთი მუნიციპალიტეტი</div>
</a>

<a id="MUN-Keda" href="#" class="list-group-item">
<span style="display:none">ქედის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქედის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Shuakhevi" href="#" class="list-group-item">
<span style="display:none">შუახევის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> შუახევის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Khelvachauri" href="#" class="list-group-item">
<span style="display:none">ხელვაჩაურის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხელვაჩაურის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Khulo" href="#" class="list-group-item">
<span style="display:none">ხულოს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხულოს მუნიციპალიტეტი</div>
</a>



 <!-- გურია -->


<a id="MUN-Lanchkhuti" href="#" class="list-group-item">
<span style="display:none">ლანჩხუთის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ლანჩხუთის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Ozurgeti" href="#" class="list-group-item">
<span style="display:none">ოზურგეთის  მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ოზურგეთის  მუნიციპალიტეტი</div>
</a>


<a id="MUN-Chokhatauri" href="#" class="list-group-item">
<span style="display:none">ჩოხატაურის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ჩოხატაურის მუნიციპალიტეტი</div>
</a>


 <!-- იმერეთი -->


<a id="MUN-Kutaisi" href="#" class="list-group-item">
<span style="display:none">ქალაქ ქუთაისის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქალაქ ქუთაისის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Baghdati" href="#" class="list-group-item">
<span style="display:none">ბაღდათის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ბაღდათის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Vani" href="#" class="list-group-item">
<span style="display:none">ვანის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ვანის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Zestaponi" href="#" class="list-group-item">
<span style="display:none">ზესტაფონის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ზესტაფონის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Terjola" href="#" class="list-group-item">
<span style="display:none">თერჯოლის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> თერჯოლის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Samtredia" href="#" class="list-group-item">
<span style="display:none">სამტრედიის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> სამტრედიის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Sachkhere" href="#" class="list-group-item">
<span style="display:none">საჩხერის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> საჩხერის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Tkibuli" href="#" class="list-group-item">
<span style="display:none">ტყიბულის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ტყიბულის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Tskaltubo" href="#" class="list-group-item">
<span style="display:none">წყალტუბოს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> წყალტუბოს მუნიციპალიტეტი</div>
</a>

<a id="MUN-Chiatura" href="#" class="list-group-item">
<span style="display:none">ჭიათურის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ჭიათურის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Kharagauli" href="#" class="list-group-item">
<span style="display:none">ხარაგაულის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხარაგაულის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Khoni" href="#" class="list-group-item">
<span style="display:none">ხონის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხონის მუნიციპალიტეტი</div>
</a>


 <!-- კახეთი -->



<a id="MUN-Akhmeta" href="#" class="list-group-item">
<span style="display:none">ახმეტის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ახმეტის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Gurjaani" href="#" class="list-group-item">
<span style="display:none">გურჯაანის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> გურჯაანის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Dedoplistskaro" href="#" class="list-group-item">
<span style="display:none">დედოფლისწყაროს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> დედოფლისწყაროს მუნიციპალიტეტი</div>
</a>

<a id="MUN-Telavi" href="#" class="list-group-item">
<span style="display:none">თელავის  მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> თელავის  მუნიციპალიტეტი</div>
</a>


<a id="MUN-Lagodekhi" href="#" class="list-group-item">
<span style="display:none">ლაგოდეხის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ლაგოდეხის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Sagarejo" href="#" class="list-group-item">
<span style="display:none">საგარეჯოს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> საგარეჯოს მუნიციპალიტეტი</div>
</a>

<a id="MUN-Sighnagi" href="#" class="list-group-item">
<span style="display:none">სიღნაღის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> სიღნაღის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Kvareli" href="#" class="list-group-item">
<span style="display:none">ყვარლის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ყვარლის მუნიციპალიტეტი</div>
</a>


 <!-- მცხეთა-მთიანეთი -->

<a id="MUN-Akhalgori" href="#" class="list-group-item">
<span style="display:none">ახალგორის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ახალგორის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Dusheti" href="#" class="list-group-item">
<span style="display:none">დუშეთის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> დუშეთის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Tianeti" href="#" class="list-group-item">
<span style="display:none">თიანეთის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> თიანეთის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Mtskheta" href="#" class="list-group-item">
<span style="display:none">მცხეთის მუნიციპალიტეტი </span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> მცხეთის მუნიციპალიტეტი </div>
</a>

<a id="MUN-Kazbegi" href="#" class="list-group-item">
<span style="display:none">ყაზბეგის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ყაზბეგის მუნიციპალიტეტი</div>
</a>






 <!-- რაჭა-ლეჩხუმი და ქვემო სვანეთი -->

<a id="MUN-Ambrolauri" href="#" class="list-group-item">
<span style="display:none">ამბროლაურის  მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ამბროლაურის  მუნიციპალიტეტი</div>
</a>



<a id="MUN-Lentekhi" href="#" class="list-group-item">
<span style="display:none">ლენტეხის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ლენტეხის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Oni" href="#" class="list-group-item">
<span style="display:none">ონის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ონის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Tsageri" href="#" class="list-group-item">
<span style="display:none">ცაგერის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ცაგერის მუნიციპალიტეტი</div>
</a>


 <!-- სამეგრელო-ზემო სვანეთი -->

<a id="MUN-Poti" href="#" class="list-group-item">
<span style="display:none">ქალაქ ფოთის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქალაქ ფოთის მუნიციპალიტეტი</div>
</a>


  <a id="MUN-Abasha" href="#" class="list-group-item">
<span style="display:none">აბაშის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> აბაშის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Zugdidi" href="#" class="list-group-item">
<span style="display:none">ზუგდიდის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ზუგდიდის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Martvili" href="#" class="list-group-item">
<span style="display:none">მარტვილის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> მარტვილის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Mestia" href="#" class="list-group-item">
<span style="display:none">მესტიის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> მესტიის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Senaki" href="#" class="list-group-item">
<span style="display:none">სენაკის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> სენაკის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Chkhorotsku" href="#" class="list-group-item">
<span style="display:none">ჩხოროწყუს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ჩხოროწყუს მუნიციპალიტეტი</div>
</a>



<a id="MUN-Tsalenjikha" href="#" class="list-group-item">
<span style="display:none">წალენჯიხის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> წალენჯიხის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Khobi" href="#" class="list-group-item">
<span style="display:none">ხობის  მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხობის  მუნიციპალიტეტი</div>
</a>



 <!-- სამცხე-ჯავახეთი -->


<a id="MUN-Adigeni" href="#" class="list-group-item">
<span style="display:none">ადიგენის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ადიგენის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Aspindza" href="#" class="list-group-item">
<span style="display:none">ასპინძის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ასპინძის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Akhalkalaki" href="#" class="list-group-item">
<span style="display:none">ახალქალაქის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ახალქალაქის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Akhaltsikhe" href="#" class="list-group-item">
<span style="display:none">ახალციხის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ახალციხის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Borjomi" href="#" class="list-group-item">
<span style="display:none">ბორჯომის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ბორჯომის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Ninotsminda" href="#" class="list-group-item">
<span style="display:none">ნინოწმინდის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ნინოწმინდის მუნიციპალიტეტი</div>
</a>









 <!-- ქვემო ქართლი  -->

<a id="MUN-Rustavi" href="#" class="list-group-item">
<span style="display:none">ქალაქ რუსთავის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქალაქ რუსთავის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Bolnisi" href="#" class="list-group-item">
<span style="display:none">ბოლნისის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ბოლნისის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Gardabani" href="#" class="list-group-item">
<span style="display:none">გარდაბნის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> გარდაბნის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Dmanisi" href="#" class="list-group-item">
<span style="display:none">დმანისის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> დმანისის მუნიციპალიტეტი</div>
</a>




<a id="MUN-Tetritskaro" href="#" class="list-group-item">
<span style="display:none">თეთრიწყაროს მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> თეთრიწყაროს მუნიციპალიტეტი</div>
</a>


<a id="MUN-Marneuli" href="#" class="list-group-item">
<span style="display:none">მარნეულის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> მარნეულის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Tsalka" href="#" class="list-group-item">
<span style="display:none">წალკის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> წალკის მუნიციპალიტეტი</div>
</a>




 <!-- შიდა ქართლი -->


<a id="MUN-Gori" href="#" class="list-group-item">
<span style="display:none">გორის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> გორის მუნიციპალიტეტი</div>
</a>

<a id="MUN-Kaspi" href="#" class="list-group-item">
<span style="display:none">კასპის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> კასპის მუნიციპალიტეტი</div>
</a>



<a id="MUN-Kareli" href="#" class="list-group-item">
<span style="display:none">ქარელის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქარელის მუნიციპალიტეტი</div>
</a>


<a id="MUN-Khashuri" href="#" class="list-group-item">
<span style="display:none">ხაშურის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ხაშურის მუნიციპალიტეტი</div>
</a>
 





 <!-- ოკუპირებული მუნიციპალიტეტები  -->

<a id="MUN1015" href="mun/apkhazeti/azhara.html" class="list-group-item">
<span style="display:none">აჟარის (ზემო აფხაზეთის) მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> აჟარის (ზემო აფხაზეთის) მუნიციპალიტეტი</div>
</a>

<a id="MUN32" href="mun/shidakartli/eredvi.html" class="list-group-item">
<span style="display:none">ერედვის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ერედვის მუნიციპალიტეტი</div>
</a>

<a id="MUN31" href="mun/shidakartli/tighvi.html" class="list-group-item">
<span style="display:none">თიღვის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> თიღვის მუნიციპალიტეტი</div>
</a>

<a id="MUN27" href="mun/shidakartli/kurta.html" class="list-group-item">
<span style="display:none">ქურთის მუნიციპალიტეტი</span>
<div class="mun-type-name"></div>
<div class="mun-name"><i class="icon icon-material-keyboard-arrow-right"></i> ქურთის მუნიციპალიტეტი</div>
</a>



 <!-- -------------- -->






</div>
</div>
</div>
</div>
<div id="footer" class="navbar-material-teal">
<div class="container">
<div> CAUCASUSOFFLINE.COM  <span style="font-family: roboto condensed;">:: 2014-2019 </span><a href=" http://caucasusoffline.com/2020/index.php   "><span class="glyphicon glyphicon-link"></span> CAUCASUSOFFLINE.COM</a></div>
</div>
</div>

 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<script src="/2020/js/jquery.min.js"></script>

<script src="/2020/js/bootstrap.min.js"></script>
 <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<script src="/2020/material/js/ripples.min.js"></script>
<script src="/2020/material/js/material.min.js"></script>
<script src="/2020/js/bootstrap-list-filter.src.js"></script>

<script src="/2020/js/geokbd.js"></script>   

<script src="/2020/js/munreg.js"></script>






 



</body>
</html>