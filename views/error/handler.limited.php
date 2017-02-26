<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Slow Down">
<title>Slow Down</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
/* Error Page Inline Styles */
body {
  padding-top: 20px;
}
/* Layout */
.jumbotron {
  font-size: 21px;
  font-weight: 200;
  line-height: 2.1428571435;
  color: inherit;
  padding: 10px 0px;
}
/* Everything but the jumbotron gets side spacing for mobile-first views */
.masthead, .body-content, {
  padding-left: 15px;
  padding-right: 15px;
}
/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  background-color: transparent;
}
.jumbotron .btn {
  font-size: 21px;
  padding: 14px 24px;
}
/* Colors */
.green {color:#5cb85c;}
.orange {color:#f0ad4e;}
.red {color:#d9534f;}
</style>
<script type="text/javascript">
  function loadDomain() {
    var display = document.getElementById("display-domain");
    display.innerHTML = document.domain;
  }
</script>
</head>
<body onload="javascript:loadDomain();">
<!-- Error Page Content -->
<div class="container">
  <!-- Jumbotron -->
  <div class="jumbotron">
    <h1><i class="fa fa-dashboard red"></i> Slow Down</h1>
    <h3>Rate Limit Exceeded.</h3>
    <p class="lead">The web server is returning a rate limiting notification <em><span id="display-domain"></span></em>.</p>
    <a href="javascript:document.location.reload(true);" class="btn btn-default btn-lg text-center"><span class="green">Try This Page Again</span></a>
  </div>
</div>
<div class="container">
  <div class="body-content">
    <div class="row">
      <div class="col-md-6">
        <h2>What happened?</h2>
        <p class="lead">This error means you have exceeded the request rate limit for the the web server you are accessing.</p>
        <p class="lead"> Rate Limit Thresholds are set higher than a human browsing this site should be able to reach and mostly for protection against automated requests and attacks.</p>
      </div>
      <div class="col-md-6">
        <h2>What can I do?</h2>
        <p class="lead">If you're a site visitor</p>
        <p>The best thing to do is to slow down with your requests and try again in a few minutes. We apologize for any inconvenience.</p>
        <p class="lead">If you're the site owner</p>
         <p>This error is mostly likely very brief, the best thing to do is to check back in a few minutes and everything will probably be working normal again. If the error persists, contact your website host.</p>
     </div>
    </div>
  </div>
</div>

<!-- End Error Page Content -->
<!--Scripts-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
