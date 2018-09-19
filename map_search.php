<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tiny Minute</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/frontend.myrsol.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript">var controller = "map_search"; var action = "index";if (!window.console) window.console = {};if (!window.console.log) window.console.log = function () { };</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/frontend.plugins.min.js"></script>
    <script type="text/javascript" src="js/frontend.myrsol.min.js"></script>
</head>
<body class="dynidx-map-fullscreen">
    <?php include('elements/header.php'); ?>


                <div class="dynidxmap-mobile-bar visible-xs clearfix">
  <a href="" class="btn btn-default" data-toggle="map-expand" data-state="open"></a>
  <a href="#" class="map-filters btn btn-default"><i class="fa fa-sliders" aria-hidden="true"></i> Filters</a>
  <div class="dynidxmap-sort dropdown">
    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:;">
      <i class="fa fa-filter"></i> Sort: <span class="dynidxmap-sort-filter">Price High to Low</span> <span class="caret"></span>
    </a>
    <ul class="dynidxmap-sort dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
      <li><a href="#" data-order="asking_price:desc">Price High to Low</a></li>
      <li><a href="#" data-order="asking_price:asc">Price Low to High</a></li>
      <li><a href="#" data-order="listing_date:desc">Newest</a></li>
      <li><a href="#" data-order="listing_date:asc">Oldest</a></li>
      <li><a href="#" data-order="beds:desc">Beds Most to Least</a></li>
      <li><a href="#" data-order="beds:asc">Beds Least to Most</a></li>
    </ul>
  </div>
  <a href="#" class="pull-right save-search btn btn-default">Save</a>
</div>


  <div class="dynidx-map-container">

      <div class="map-view">
        <div id="map" style="overflow: hidden; zoom: 1;"><a href="" class="btn hidden-xs" data-toggle="map-expand" data-state="open"></a><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -135, -99);"><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -135, -99);"><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1151!3i1640!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=128785" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1152!3i1641!4i256!2m3!1e0!2sm!3i435140168!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=128089" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1150!3i1640!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=19879" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1150!3i1638!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=111482" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1151!3i1641!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=2535" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1149!3i1641!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=6839" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1149!3i1640!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=2018" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1149!3i1638!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=93621" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1152!3i1639!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=71973" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1152!3i1640!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=106620" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1150!3i1641!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=24700" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1149!3i1639!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=98442" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1150!3i1639!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=116303" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1151!3i1639!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=94138" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1151!3i1638!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=89317" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: -512px; width: 256px; height: 256px;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1152!3i1638!4i256!2m3!1e0!2sm!3i435140805!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;token=67152" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div class="marker-price-label  marker-0" data-id="0" style="cursor: pointer; position: absolute; left: -248.5px; top: 99px;"><div class="price">$332.85m</div></div><div class="marker-price-label multi marker-1" data-id="1" style="cursor: pointer; position: absolute; left: 166.5px; top: -199px;"><div class="price">2 listings</div></div><div class="marker-price-label multi marker-2" data-id="2" style="cursor: pointer; position: absolute; left: 17.5px; top: -66px;"><div class="price">9 listings</div></div><div class="marker-price-label  marker-3" data-id="3" style="cursor: pointer; position: absolute; left: 215px; top: -231px;"><div class="price">$4.7m</div></div><div class="marker-price-label multi marker-4" data-id="4" style="cursor: pointer; position: absolute; left: 53.5px; top: -100px;"><div class="price">2 listings</div></div><div class="marker-price-label  marker-5" data-id="5" style="cursor: pointer; position: absolute; left: 185px; top: -227px;"><div class="price">$3.6m</div></div><div class="marker-price-label multi marker-6" data-id="6" style="cursor: pointer; position: absolute; left: 154.5px; top: -262px;"><div class="price">3 listings</div></div><div class="marker-price-label  marker-7" data-id="7" style="cursor: pointer; position: absolute; left: 77px; top: -113px;"><div class="price">$3.5m</div></div><div class="marker-price-label multi marker-8" data-id="8" style="cursor: pointer; position: absolute; left: 162.5px; top: -196px;"><div class="price">4 listings</div></div><div class="marker-price-label  marker-9" data-id="9" style="cursor: pointer; position: absolute; left: 74.5px; top: -114px;"><div class="price">$3.45m</div></div><div class="marker-price-label  marker-10" data-id="10" style="cursor: pointer; position: absolute; left: 131px; top: -163px;"><div class="price">$3.4m</div></div><div class="marker-price-label  marker-11" data-id="11" style="cursor: pointer; position: absolute; left: -319.5px; top: 321px;"><div class="price">$3.33m</div></div><div class="marker-price-label multi marker-12" data-id="12" style="cursor: pointer; position: absolute; left: -171.5px; top: 107px;"><div class="price">4 listings</div></div><div class="marker-price-label multi marker-13" data-id="13" style="cursor: pointer; position: absolute; left: -57.5px; top: -148px;"><div class="price">2 listings</div></div><div class="marker-price-label price-down marker-14" data-id="14" style="cursor: pointer; position: absolute; left: 29.5px; top: -75px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.95m</div></div><div class="marker-price-label multi marker-15" data-id="15" style="cursor: pointer; position: absolute; left: -332.5px; top: 328px;"><div class="price">2 listings</div></div><div class="marker-price-label  marker-16" data-id="16" style="cursor: pointer; position: absolute; left: 162px; top: -285px;"><div class="price">$2.9m</div></div><div class="marker-price-label  marker-17" data-id="17" style="cursor: pointer; position: absolute; left: 183px; top: -282px;"><div class="price">$2.9m</div></div><div class="marker-price-label multi marker-18" data-id="18" style="cursor: pointer; position: absolute; left: 185.5px; top: -223px;"><div class="price">2 listings</div></div><div class="marker-price-label multi marker-19" data-id="19" style="cursor: pointer; position: absolute; left: 106.5px; top: -149px;"><div class="price">8 listings</div></div><div class="marker-price-label  marker-20" data-id="20" style="cursor: pointer; position: absolute; left: 206.5px; top: -228px;"><div class="price">$2.75m</div></div><div class="marker-price-label price-down marker-21" data-id="21" style="cursor: pointer; position: absolute; left: 64.5px; top: -109px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.74m</div></div><div class="marker-price-label  marker-22" data-id="22" style="cursor: pointer; position: absolute; left: 55px; top: -91px;"><div class="price">$2.6m</div></div><div class="marker-price-label  marker-23" data-id="23" style="cursor: pointer; position: absolute; left: 180px; top: -289px;"><div class="price">$2.6m</div></div><div class="marker-price-label  marker-24" data-id="24" style="cursor: pointer; position: absolute; left: 52px; top: -88px;"><div class="price">$2.6m</div></div><div class="marker-price-label  marker-25" data-id="25" style="cursor: pointer; position: absolute; left: -279px; top: 272px;"><div class="price">$2.6m</div></div><div class="marker-price-label  marker-26" data-id="26" style="cursor: pointer; position: absolute; left: 166px; top: -286px;"><div class="price">$2.6m</div></div><div class="marker-price-label price-down marker-27" data-id="27" style="cursor: pointer; position: absolute; left: 36px; top: -78px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.5m</div></div><div class="marker-price-label  marker-28" data-id="28" style="cursor: pointer; position: absolute; left: -148px; top: -82px;"><div class="price">$2.5m</div></div><div class="marker-price-label  marker-29" data-id="29" style="cursor: pointer; position: absolute; left: -282px; top: 277px;"><div class="price">$2.5m</div></div><div class="marker-price-label  marker-30" data-id="30" style="cursor: pointer; position: absolute; left: 140.5px; top: -282px;"><div class="price">$2.48m</div></div><div class="marker-price-label  marker-31" data-id="31" style="cursor: pointer; position: absolute; left: 80.5px; top: -120px;"><div class="price">$2.45m</div></div><div class="marker-price-label price-down marker-32" data-id="32" style="cursor: pointer; position: absolute; left: 159.5px; top: -280px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.45m</div></div><div class="marker-price-label  marker-33" data-id="33" style="cursor: pointer; position: absolute; left: 46.5px; top: -86px;"><div class="price">$2.45m</div></div><div class="marker-price-label price-down marker-34" data-id="34" style="cursor: pointer; position: absolute; left: 163.5px; top: -282px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.45m</div></div><div class="marker-price-label  marker-35" data-id="35" style="cursor: pointer; position: absolute; left: 168px; top: -289px;"><div class="price">$2.4m</div></div><div class="marker-price-label  marker-36" data-id="36" style="cursor: pointer; position: absolute; left: 178px; top: -248px;"><div class="price">$2.4m</div></div><div class="marker-price-label  marker-37" data-id="37" style="cursor: pointer; position: absolute; left: 170px; top: -195px;"><div class="price">$2.4m</div></div><div class="marker-price-label  marker-38" data-id="38" style="cursor: pointer; position: absolute; left: -198.5px; top: 167px;"><div class="price">$2.38m</div></div><div class="marker-price-label multi marker-39" data-id="39" style="cursor: pointer; position: absolute; left: 52.5px; top: -99px;"><div class="price">2 listings</div></div><div class="marker-price-label  marker-40" data-id="40" style="cursor: pointer; position: absolute; left: 135px; top: -165px;"><div class="price">$2.3m</div></div><div class="marker-price-label  marker-41" data-id="41" style="cursor: pointer; position: absolute; left: 47px; top: -83px;"><div class="price">$2.3m</div></div><div class="marker-price-label  marker-42" data-id="42" style="cursor: pointer; position: absolute; left: 183.5px; top: -285px;"><div class="price">$2.25m</div></div><div class="marker-price-label  marker-43" data-id="43" style="cursor: pointer; position: absolute; left: 76.5px; top: -116px;"><div class="price">$2.25m</div></div><div class="marker-price-label multi marker-44" data-id="44" style="cursor: pointer; position: absolute; left: -155.5px; top: 106px;"><div class="price">2 listings</div></div><div class="marker-price-label  marker-45" data-id="45" style="cursor: pointer; position: absolute; left: 31.5px; top: -75px;"><div class="price">$2.25m</div></div><div class="marker-price-label price-down marker-46" data-id="46" style="cursor: pointer; position: absolute; left: 20.5px; top: -282px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.23m</div></div><div class="marker-price-label  marker-47" data-id="47" style="cursor: pointer; position: absolute; left: 363px; top: -344px;"><div class="price">$2.2m</div></div><div class="marker-price-label  marker-48" data-id="48" style="cursor: pointer; position: absolute; left: 202px; top: -229px;"><div class="price">$2.2m</div></div><div class="marker-price-label  marker-49" data-id="49" style="cursor: pointer; position: absolute; left: 209px; top: -230px;"><div class="price">$2.2m</div></div><div class="marker-price-label  marker-50" data-id="50" style="cursor: pointer; position: absolute; left: 33px; top: -70px;"><div class="price">$2.2m</div></div><div class="marker-price-label  marker-51" data-id="51" style="cursor: pointer; position: absolute; left: 364px; top: -344px;"><div class="price">$2.2m</div></div><div class="marker-price-label  marker-52" data-id="52" style="cursor: pointer; position: absolute; left: -320.5px; top: 321px;"><div class="price">$2.13m</div></div><div class="marker-price-label  marker-53" data-id="53" style="cursor: pointer; position: absolute; left: 49px; top: -85px;"><div class="price">$2.1m</div></div><div class="marker-price-label  marker-54" data-id="54" style="cursor: pointer; position: absolute; left: 113px; top: -258px;"><div class="price">$2.1m</div></div><div class="marker-price-label price-down marker-55" data-id="55" style="cursor: pointer; position: absolute; left: -197px; top: 164px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2.1m</div></div><div class="marker-price-label  marker-56" data-id="56" style="cursor: pointer; position: absolute; left: 222px; top: -235px;"><div class="price">$2m</div></div><div class="marker-price-label  marker-57" data-id="57" style="cursor: pointer; position: absolute; left: 175px; top: -280px;"><div class="price">$2m</div></div><div class="marker-price-label  marker-58" data-id="58" style="cursor: pointer; position: absolute; left: 132px; top: -267px;"><div class="price">$2m</div></div><div class="marker-price-label price-down marker-59" data-id="59" style="cursor: pointer; position: absolute; left: 170px; top: -290px;"><div class="price"><i class="fa fa-long-arrow-down"></i> $2m</div></div><div class="marker-price-label  marker-60" data-id="60" style="cursor: pointer; position: absolute; left: 189px; top: -308px;"><div class="price">$2m</div></div><div class="marker-price-label  marker-61" data-id="61" style="cursor: pointer; position: absolute; left: 124px; top: -186px;"><div class="price">$2m</div></div><div class="marker-price-label  marker-62" data-id="62" style="cursor: pointer; position: absolute; left: -341.5px; top: 346px;"><div class="price">$1.95m</div></div><div class="marker-price-label  marker-63" data-id="63" style="cursor: pointer; position: absolute; left: 108.5px; top: -153px;"><div class="price">$1.95m</div></div><div class="marker-price-label  marker-64" data-id="64" style="cursor: pointer; position: absolute; left: -348px; top: 362px;"><div class="price">$1.9m</div></div><div class="marker-price-label  marker-65" data-id="65" style="cursor: pointer; position: absolute; left: 186px; top: -229px;"><div class="price">$1.9m</div></div><div class="marker-price-label  marker-66" data-id="66" style="cursor: pointer; position: absolute; left: -312px; top: 313px;"><div class="price">$1.9m</div></div><div class="marker-price-label  marker-67" data-id="67" style="cursor: pointer; position: absolute; left: -139.5px; top: -224px;"><div class="price">$1.89m</div></div><div class="marker-price-label  marker-68" data-id="68" style="cursor: pointer; position: absolute; left: 168.5px; top: -208px;"><div class="price">$1.88m</div></div><div class="marker-price-label  marker-69" data-id="69" style="cursor: pointer; position: absolute; left: -267.5px; top: 255px;"><div class="price">$1.88m</div></div></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=33.696,-78.8794&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 240px; top: 310px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2018 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 226px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2018 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 60px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2018 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 155px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><span class="control-item new-polygon" style="z-index: 0; position: absolute; left: 140px; top: 0px;"><i class="fa fa-pencil"></i> Draw</span><span class="control-item delete-polygon" style="z-index: 0; position: absolute; left: 203px; top: 0px;"><i class="fa fa-times"></i></span><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 60px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@33.696,-78.8794,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 141px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"></button></div></div><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="width: 40px; height: 40px;"><button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"></button><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"></button></div></div></div><div class="gmnoprint gm-style-mtc" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; text-align: left; width: 120px; left: 0px; top: 0px;"><div role="button" tabindex="0" title="Change map style" aria-label="Change map style" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 8px 17px; border-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; font-weight: 500;">Map<img alt="" src="https://maps.gstatic.com/mapfiles/arrow-down.png" draggable="false" style="user-select: none; border: 0px; padding: 0px; margin: -2px 0px 0px; position: absolute; right: 6px; top: 50%; width: 7px; height: 4px;"></div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; top: 100%; left: 0px; right: 0px; text-align: left; display: none;"><div draggable="false" title="Show street map" style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px; font-weight: 500;">Map</div><div draggable="false" title="Show satellite imagery" style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px;">Satellite</div><div style="margin: 1px 0px; border-top: 1px solid rgb(235, 235, 235);"></div><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div><div style="margin: 1px 0px; border-top: 1px solid rgb(235, 235, 235); display: none;"></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; display: none;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; right: 0px; bottom: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"></button></div></div></div>
      </div>
      <div class="list-view">
        <div class="dynidx-map-list-block">
          <a href="#" class="map-filters btn btn-default"><i class="fa fa-sliders" aria-hidden="true"></i> Filters</a>
          <div class="dynidxmap-sort dropdown">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:;">
              <i class="fa fa-filter"></i> Sort: <span class="dynidxmap-sort-filter">Price High to Low</span> <span class="caret"></span>
            </a>
            <ul class="dynidxmap-sort dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#" data-order="asking_price:desc">Price High to Low</a></li>
              <li><a href="#" data-order="asking_price:asc">Price Low to High</a></li>
              <li><a href="#" data-order="listing_date:desc">Newest</a></li>
              <li><a href="#" data-order="listing_date:asc">Oldest</a></li>
              <li><a href="#" data-order="beds:desc">Beds Most to Least</a></li>
              <li><a href="#" data-order="beds:asc">Beds Least to Most</a></li>
            </ul>
          </div>
          <a href="#" class="pull-right save-search btn btn-default">Save</a>
        </div>

        <div class="dynidx-map-results js-enable-modal" data-enable-modal="true">
  <div class="view-property dynidx-map-summary" data-id="0" data-mlsid="1803601" data-url="/listings/view/residential/1803601">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1803601_1.jpg" style="background-image: url(&quot;http://images.myrsol.com/sc_ccar/1803601_1.jpg&quot;), url(&quot;https://assets.myrsol.com/dark-notfound.svg&quot;);">
          <div class="marker-content">
              <div class="marker-addr">
                  736 Culbertson Ave.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$332,854,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1803601</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>3300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="1" data-mlsid="186948" data-url="/listings/view/residential/186948">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/186948_1.jpg" style="background-image: url(&quot;http://images.myrsol.com/sc_ccar/186948_1.jpg&quot;), url(&quot;https://assets.myrsol.com/dark-notfound.svg&quot;);">
          <div class="marker-content">
              <div class="marker-addr">
                  8000 Beach Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$4,800,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 186948</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="153108" data-url="/listings/view/residential/153108">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/153108_1.jpg" style="background-image: url(&quot;http://images.myrsol.com/sc_ccar/153108_1.jpg&quot;), url(&quot;https://assets.myrsol.com/dark-notfound.svg&quot;);">
          <div class="marker-content">
              <div class="marker-addr">
                  3304 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$4,750,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 153108</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="3" data-mlsid="185569" data-url="/listings/view/residential/185569">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/185569_1.jpg" style="background-image: url(&quot;http://images.myrsol.com/sc_ccar/185569_1.jpg&quot;), url(&quot;https://assets.myrsol.com/dark-notfound.svg&quot;);">
          <div class="marker-content">
              <div class="marker-addr">
                  8920 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$4,700,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 185569</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="4" data-mlsid="208325" data-url="/listings/view/residential/208325">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/208325_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4400 North Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 208325</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="5" data-mlsid="814811" data-url="/listings/view/residential/814811">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/814811_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  342 Posada Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 814811</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="6" data-mlsid="722764" data-url="/listings/view/residential/722764">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/722764_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9089 Marina Parkway<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 722764</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="168301" data-url="/listings/view/residential/168301">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/168301_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4306 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 168301</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>4600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="4" data-mlsid="178418" data-url="/listings/view/residential/178418">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/178418_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4400 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 178418</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="7" data-mlsid="185766" data-url="/listings/view/residential/185766">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/185766_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4806 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 185766</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>3100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="8" data-mlsid="156558" data-url="/listings/view/residential/156558">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/156558_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  174 Beach Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 156558</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>N/A</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="9" data-mlsid="1810980" data-url="/listings/view/residential/1810980">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1810980_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4902 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,450,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1810980</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>9800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="10" data-mlsid="1519384" data-url="/listings/view/residential/1519384">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1519384_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6502 N Ocean Boulevard<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,400,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1519384</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>6600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="11" data-mlsid="623295" data-url="/listings/view/residential/623295">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/623295_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1017 S Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,325,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 623295</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>3000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="700584" data-url="/listings/view/residential/700584">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/700584_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4602 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 700584</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="12" data-mlsid="179362" data-url="/listings/view/residential/179362">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/179362_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4901 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$3,075,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 179362</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>5300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="13" data-mlsid="1713240" data-url="/listings/view/residential/1713240">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1713240_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1360 Brookgreen Dr.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,999,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1713240</li>
                          <li>Residential / pending contingent on financing</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>9</span> Beds</li>
                          <li><span>8</span> Baths</li>
                          <li><span>16000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="12" data-mlsid="606399" data-url="/listings/view/residential/606399">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/606399_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4903 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,999,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 606399</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>5300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="14" data-mlsid="1722469" data-url="/listings/view/residential/1722469">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1722469_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3304 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1722469</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="12" data-mlsid="179258" data-url="/listings/view/residential/179258">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/179258_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4803 S Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 179258</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="15" data-mlsid="202413" data-url="/listings/view/residential/202413">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/202413_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1311 S Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 202413</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>8</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>4900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="16" data-mlsid="704052" data-url="/listings/view/residential/704052">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/704052_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1597 Serena Dr<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29597</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 704052</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="17" data-mlsid="206201" data-url="/listings/view/residential/206201">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/206201_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1767 Cliffwood Dr.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 206201</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="18" data-mlsid="188980" data-url="/listings/view/residential/188980">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/188980_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8695 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 188980</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="18" data-mlsid="611420" data-url="/listings/view/residential/611420">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/611420_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8695 N Ocean Boulevard<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 611420</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="1108900" data-url="/listings/view/residential/1108900">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1108900_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6202 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1108900</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="1312099" data-url="/listings/view/residential/1312099">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1312099_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8814 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,899,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1312099</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="180885" data-url="/listings/view/residential/180885">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/180885_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9006 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,800,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 180885</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>4000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="20" data-mlsid="1718829" data-url="/listings/view/residential/1718829">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1718829_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8826 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,750,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1718829</li>
                          <li>Residential / sold-non-mls ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>8</span> Baths</li>
                          <li><span>11500</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="731304" data-url="/listings/view/residential/731304">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/731304_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4806 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,750,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 731304</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>3200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="21" data-mlsid="1704304" data-url="/listings/view/residential/1704304">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1704304_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4706 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,735,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1704304</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="1419989" data-url="/listings/view/residential/1419989">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1419989_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6504 N Ocean Boulevard<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,700,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1419989</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="22" data-mlsid="1816760" data-url="/listings/view/residential/1816760">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1816760_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4004 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1816760</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="23" data-mlsid="1701112" data-url="/listings/view/residential/1701112">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1701112_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9857 Bellasara Circle<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1701112</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>7600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="24" data-mlsid="204417" data-url="/listings/view/residential/204417">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/204417_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3900 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 204417</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>2</span> Baths</li>
                          <li><span>4000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="25" data-mlsid="180813" data-url="/listings/view/residential/180813">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/180813_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  613 N Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,600,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 180813</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>2700</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="26" data-mlsid="618618" data-url="/listings/view/residential/618618">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/618618_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1564 Serena Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,595,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 618618</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>3</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="919831" data-url="/listings/view/residential/919831">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/919831_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3202 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,511,391</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 919831</li>
                          <li>Residential / sold-non-mls ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="27" data-mlsid="1418826" data-url="/listings/view/residential/1418826">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1418826_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3404 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1418826</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>5100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="28" data-mlsid="700869" data-url="/listings/view/residential/700869">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/700869_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  128 Causey Street<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 700869</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>4800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="1017334" data-url="/listings/view/residential/1017334">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1017334_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4306 North Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,500,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1017334</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>4600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="29" data-mlsid="628674" data-url="/listings/view/residential/628674">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/628674_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  613 N Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,499,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 628674</li>
                          <li>Residential / sold-non-mls ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="30" data-mlsid="601374" data-url="/listings/view/residential/601374">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/601374_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8675 Bella Vista Circle<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,482,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 601374</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="31" data-mlsid="1800432" data-url="/listings/view/residential/1800432">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1800432_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  5104 North Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,450,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1800432</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="32" data-mlsid="1508828" data-url="/listings/view/residential/1508828">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1508828_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1681 Serena Dr<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,450,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1508828</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>10000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="33" data-mlsid="186777" data-url="/listings/view/residential/186777">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/186777_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3804 N Ocean Boulevard<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,450,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 186777</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>3</span> Beds</li>
                          <li><span>1</span> Baths</li>
                          <li><span>5500</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="34" data-mlsid="1707105" data-url="/listings/view/residential/1707105">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1707105_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1727 Serena Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,449,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1707105</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="166131" data-url="/listings/view/residential/166131">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/166131_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4902 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,400,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 166131</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5400</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="35" data-mlsid="193246" data-url="/listings/view/residential/193246">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/193246_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1519 Serena Dr. (lot 54)<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,400,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 193246</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>5300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="36" data-mlsid="824096" data-url="/listings/view/residential/824096">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/824096_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8041 Verona Drive (8 Castillo)<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,395,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 824096</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="6" data-mlsid="817370" data-url="/listings/view/residential/817370">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/817370_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9237 Marina Parkway<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,395,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 817370</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="37" data-mlsid="1314926" data-url="/listings/view/residential/1314926">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1314926_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  7806 Beach Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,395,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1314926</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="38" data-mlsid="1612935" data-url="/listings/view/residential/1612935">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1612935_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4905 S Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,375,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1612935</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>5700</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="39" data-mlsid="1803956" data-url="/listings/view/residential/1803956">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1803956_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4306 North Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,350,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1803956</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>8</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>4900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="157586" data-url="/listings/view/residential/157586">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/157586_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4710 North Ocean Boulevard<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,300,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 157586</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>4900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="40" data-mlsid="1422104" data-url="/listings/view/residential/1422104">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1422104_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6600 North Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,295,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1422104</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>6300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="41" data-mlsid="209801" data-url="/listings/view/residential/209801">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/209801_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3700 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC </span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,295,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 209801</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>5000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="42" data-mlsid="1726459" data-url="/listings/view/residential/1726459">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1726459_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9089 Marina Parkway<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,254,750</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1726459</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>8100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="1708241" data-url="/listings/view/residential/1708241">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1708241_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8802 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,250,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1708241</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>8600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="43" data-mlsid="134389" data-url="/listings/view/residential/134389">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/134389_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  5000 N 0cean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,250,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 134389</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>N/A</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="44" data-mlsid="1617690" data-url="/listings/view/residential/1617690">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1617690_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  5003 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,249,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1617690</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>6900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="45" data-mlsid="1108431" data-url="/listings/view/residential/1108431">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1108431_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3304 N. Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,245,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1108431</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="46" data-mlsid="1509676" data-url="/listings/view/residential/1509676">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1509676_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  5048 Big Bear Court<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,225,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1509676</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>10000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="47" data-mlsid="1811448" data-url="/listings/view/residential/1811448">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1811448_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  307 Ocean View Dr<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1811448</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>8200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="48" data-mlsid="1808047" data-url="/listings/view/residential/1808047">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1808047_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  109 Wildwood Dunes Trail<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1808047</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>8600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="49" data-mlsid="1815793" data-url="/listings/view/residential/1815793">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1815793_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  101 Club Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1815793</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>7800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="50" data-mlsid="1119326" data-url="/listings/view/residential/1119326">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1119326_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3104 N 0cean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1119326</li>
                          <li>Residential / sold-non-mls ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>4400</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="51" data-mlsid="182447" data-url="/listings/view/residential/182447">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/182447_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  308 Ocean View Dr .<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,200,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 182447</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="8" data-mlsid="1624675" data-url="/listings/view/residential/1624675">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1624675_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  7804 Beach Dr.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,180,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1624675</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>4000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="52" data-mlsid="605060" data-url="/listings/view/residential/605060">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/605060_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1019 S Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,125,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 605060</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>3000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="159492" data-url="/listings/view/residential/159492">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/159492_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6204 North Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,100,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 159492</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>5500</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="1115998" data-url="/listings/view/residential/1115998">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1115998_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4204 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,100,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1115998</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>5900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="53" data-mlsid="606274" data-url="/listings/view/residential/606274">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/606274_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  3800 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,100,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 606274</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>4900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="54" data-mlsid="1012043" data-url="/listings/view/residential/1012043">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1012043_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1529 Bellini Ct.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,099,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1012043</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="55" data-mlsid="1302609" data-url="/listings/view/residential/1302609">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1302609_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4803 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,095,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1302609</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>8</span> Beds</li>
                          <li><span>8</span> Baths</li>
                          <li><span>6200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="1" data-mlsid="904787" data-url="/listings/view/residential/904787">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/904787_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8000 E Beach Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$2,075,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 904787</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="56" data-mlsid="1400011" data-url="/listings/view/residential/1400011">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1400011_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9002 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,999,950</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1400011</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>10000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="8" data-mlsid="820860" data-url="/listings/view/residential/820860">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/820860_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  174 Beach Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,999,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 820860</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="57" data-mlsid="1406673" data-url="/listings/view/residential/1406673">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1406673_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1691 Serena Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,999,900</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1406673</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>7300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="58" data-mlsid="1817554" data-url="/listings/view/residential/1817554">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1817554_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1529 Cadiz Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,999,500</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1817554</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>8300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="59" data-mlsid="1510349" data-url="/listings/view/residential/1510349">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1510349_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1511 Serena Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,995,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1510349</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="15" data-mlsid="1723351" data-url="/listings/view/residential/1723351">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1723351_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1311 S Ocean Boulevard<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,995,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1723351</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>8</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>5100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="60" data-mlsid="1523759" data-url="/listings/view/residential/1523759">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1523759_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9180 Arignon Ct.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,995,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1523759</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="61" data-mlsid="709898" data-url="/listings/view/residential/709898">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/709898_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  301 67TH Avenue North<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,995,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 709898</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="6" data-mlsid="807783" data-url="/listings/view/residential/807783">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/807783_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  9337 Marina Parkway<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,990,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 807783</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="44" data-mlsid="1711243" data-url="/listings/view/residential/1711243">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1711243_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4903 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,979,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1711243</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>5200</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="19" data-mlsid="158990" data-url="/listings/view/residential/158990">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/158990_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  6702 N Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,975,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 158990</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>3</span> Baths</li>
                          <li><span>2300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="62" data-mlsid="1809725" data-url="/listings/view/residential/1809725">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1809725_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1763 S Waccamaw Drive<br>
                  <span class="city-state-zip">Garden City, SC 29576</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1809725</li>
                          <li>Residential / active</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>3800</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="8" data-mlsid="166873" data-url="/listings/view/residential/166873">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/166873_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  311 Beach Dr.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 166873</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="39" data-mlsid="165160" data-url="/listings/view/residential/165160">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/165160_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4306 N. Ocn Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 165160</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>7</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>4600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="63" data-mlsid="633618" data-url="/listings/view/residential/633618">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/633618_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  5725 Haskell Circle<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,950,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 633618</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>3</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>4500</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="12" data-mlsid="145788" data-url="/listings/view/residential/145788">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/145788_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4903 S Ocean Blvd<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,945,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 145788</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>N/A</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="64" data-mlsid="195868" data-url="/listings/view/residential/195868">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/195868_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  304 N Waccamaw Drive<br>
                  <span class="city-state-zip">Murrells Inlet, SC 29576</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 195868</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>3500</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="65" data-mlsid="1212807" data-url="/listings/view/residential/1212807">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar//not_here.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  342 Posada Drive<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,900,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1212807</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>8100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="66" data-mlsid="909661" data-url="/listings/view/residential/909661">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/909661_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1311 S Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,899,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 909661</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>8</span> Beds</li>
                          <li><span>7</span> Baths</li>
                          <li><span>4900</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="13" data-mlsid="1017038" data-url="/listings/view/residential/1017038">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1017038_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1360 Brookgreen Dr.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,899,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1017038</li>
                          <li>Residential / sold-co-op by ccar member</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>9</span> Beds</li>
                          <li><span>8</span> Baths</li>
                          <li><span>6100</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="2" data-mlsid="155704" data-url="/listings/view/residential/155704">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/155704_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  4100 N Ocean Blvd.<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29577</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,895,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 155704</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>6</span> Beds</li>
                          <li><span>5</span> Baths</li>
                          <li><span>1000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="67" data-mlsid="1818290" data-url="/listings/view/residential/1818290">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/1818290_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1982 Vercelli Way<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29579</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,890,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 1818290</li>
                          <li>Residential / sold before listed</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>4</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>7600</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="68" data-mlsid="178977" data-url="/listings/view/residential/178977">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/178977_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  8028 Cortona<br>
                  <span class="city-state-zip">Myrtle Beach, SC 29572</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,880,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 178977</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>3</span> Beds</li>
                          <li><span>4</span> Baths</li>
                          <li><span>4300</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="view-property dynidx-map-summary" data-id="69" data-mlsid="189494" data-url="/listings/view/residential/189494">
      <div class="marker-img lazyload" data-src="http://images.myrsol.com/sc_ccar/189494_1.jpg">
          <div class="marker-content">
              <div class="marker-addr">
                  1517 N Ocean Blvd<br>
                  <span class="city-state-zip">Surfside Beach, SC 29575</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">$1,875,000</li>
                          <li><img src="//assets.myrsol.com/board_logos/brlogo_house25.gif" class="br-logo" alt="BR"> MLS# 189494</li>
                          <li>Residential / sold-inner office</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>5</span> Beds</li>
                          <li><span>6</span> Baths</li>
                          <li><span>3000</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
<div class="clearfix"></div><div id="disclaimer" class="noprint">
<p>
      The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of the Coastal Carolinas Association of REALTORS ® Real estate listings held by brokerage firms other than Brand Name Real Estate are marked with the Broker Reciprocity logo and detailed information about them includes name of the listing brokers.
    </p>
    <p>
      The information being provided is for consumers' personal, non-commercial use and may not be used for any other purpose other than to identify prospective properties consumers may be interested in purchasing.
    </p>
    <p>
      Information deemed reliable but not guaranteed. © Copyright Coastal Carolinas Association of Realtors®. All rights reserved. Last updated on 09-18-2018 1:34pm est.
    </p>
        <p>Any images related to data from the MLS is the sole property of the MLS and not the responsibility of the owner of this website.</p><br><p>This real estate website and IDX data is hosted by Dynamic IDX, LLC</p></div></div>
      </div>

  </div>

<div id="dynidxPropertyView"></div>
<div id="prop_display"></div>
<div id="ss-add-holder"></div>
<!-- map filters -->
<div class="modal" id="mapFilterModal" role="dialog" aria-labelledby="mapFilterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mapFilterModalLabel">Map Filter</h4>
            </div>
            <div class="modal-body">
                <form id="ListingFilterSearchForm" autocomplete="off" method="post" action="#" novalidate="novalidate"><input type="hidden" name="data[Listing][filter]" value="" id="ListingFilter"><input type="hidden" name="data[Listing][bounds]" value="-79.013296,33.581667,-78.745504,33.810181" id="ListingBounds"><input type="hidden" name="data[Listing][lat]" value="" id="ListingLat"><input type="hidden" name="data[Listing][lon]" value="" id="ListingLon"><input type="hidden" name="data[Listing][zoom]" value="12" id="ListingZoom"><input type="hidden" name="data[Listing][near]" value="" id="ListingNear"><input type="hidden" name="data[Listing][prox_lat]" value="" id="ListingProxLat"><input type="hidden" name="data[Listing][prox_lon]" value="" id="ListingProxLon"><input type="hidden" name="data[Listing][polyg]" value="" id="ListingPolyg"><input type="hidden" name="data[Listing][shape]" value="" id="ListingShape"><input type="hidden" name="data[Listing][limit]" value="" id="ListingLimit"><input type="hidden" name="data[Listing][page]" value="" id="ListingPage"><input type="hidden" name="data[Listing][sort]" value="asking_price" id="ListingSort"><input type="hidden" name="data[Listing][direction]" value="desc" id="ListingDirection">                <div class="row border-between">
                    <div class="col-sm-6 col-md-6">
                        <h3>Property Type</h3>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls1"><input name="data[Listing][class][]" type="checkbox" id="ListingCls1" data-id="1" data-class="Residential" value="1" checked="checked">Residential</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls2"><input name="data[Listing][class][]" type="checkbox" id="ListingCls2" data-id="2" data-class="Condo/Townhouse" value="2">Condo/Townhouse</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls3"><input name="data[Listing][class][]" type="checkbox" id="ListingCls3" data-id="3" data-class="Land" value="3">Land</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls4"><input name="data[Listing][class][]" type="checkbox" id="ListingCls4" data-id="4" data-class="Multi Family" value="4">Multi Family</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls5"><input name="data[Listing][class][]" type="checkbox" id="ListingCls5" data-id="5" data-class="Commercial/Industrial" value="5">Commercial/Industrial</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls44"><input name="data[Listing][class][]" type="checkbox" id="ListingCls44" data-id="44" data-class="Rental" value="44">Rental</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingCls45"><input name="data[Listing][class][]" type="checkbox" id="ListingCls45" data-id="45" data-class="Interval Ownership" value="45">Interval Ownership</label></div></div>                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <h3>Status</h3>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus0"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus0" value="0">Active</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus5"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus5" value="5">pending contingent on financing</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus6"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus6" value="6">Contingency Contract/OTH</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus7"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus7" value="7">Pending Contingent Contract</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus8"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus8" value="8">Sold-Inner Office</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus9"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus9" value="9">Sold-Co-Op By Ccar Member</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus10"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus10" value="10">Sold-Non-Mls Ccar Member</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus11"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus11" value="11">Sold Before Listed</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus12"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus12" value="12">hold-don't show</label></div></div><div class="col-md-6 col-sm-6"><div class="checkbox"><label for="ListingStatus13"><input class="styled" name="data[Listing][status][]" type="checkbox" id="ListingStatus13" value="13">pending sale - cash terms</label></div></div>                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6">
  <div class="form-group">
    <label class="control-label" for="ListingLp">Min Price:</label>
    <input name="data[Listing][lp]" type="text" value="" placeholder="$ Min Price" data-v-min="0" class="form-control" id="ListingLp">  </div>
</div>

<div class="col-md-2 col-sm-2 col-xs-6">
  <div class="form-group">
    <label class="control-label" for="ListingHp">Max Price</label>
    <input name="data[Listing][hp]" type="text" value="" placeholder="$ Max Price" data-v-min="0" class="form-control" id="ListingHp">  </div>
</div><div class="col-md-2 col-sm-2 col-xs-6">
  <div class="form-group">
    <label class="control-label" for="ListingBr">Beds:</label>
    <select name="data[Listing][br]" class="form-control" id="ListingBr">
<option value="0">Any</option>
<option value="Efficiency">Efficiency</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
<option value="6">6+</option>
<option value="7">7+</option>
<option value="8">8+</option>
<option value="9">9+</option>
<option value="10">10+</option>
<option value="11">11+</option>
<option value="12">12+</option>
</select>    </div>
  </div>


    <div class="col-md-2 col-sm-2 col-xs-6">
      <div class="form-group">
        <label class="control-label" for="ListingFba">Full Baths:</label>
  <select name="data[Listing][fba]" class="form-control" id="ListingFba">
<option value="0">Any</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
<option value="6">6+</option>
</select>      </div>
    </div>
                </div>

                <div class="row"><div id="feature-group-6900" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6900">County</label><select name="data[Listing][county]" class="single-select form-control" id="county">
<option value="">Any County</option>
<option value="Anderson">Anderson</option>
<option value="Beaufort">Beaufort</option>
<option value="Berkeley">Berkeley</option>
<option value="Bladen">Bladen</option>
<option value="Brunswick">Brunswick</option>
<option value="Charleston">Charleston</option>
<option value="Chester">Chester</option>
<option value="Chester County">Chester County</option>
<option value="Chesterfield">Chesterfield</option>
<option value="Clarendon">Clarendon</option>
<option value="Colleton">Colleton</option>
<option value="Columbus">Columbus</option>
<option value="Darlington">Darlington</option>
<option value="Dillon">Dillon</option>
<option value="Dorchester">Dorchester</option>
<option value="Florence">Florence</option>
<option value="Georgetown">Georgetown</option>
<option value="Horry">Horry</option>
<option value="Jasper">Jasper</option>
<option value="Kershaw">Kershaw</option>
<option value="Lancaster">Lancaster</option>
<option value="Lee">Lee</option>
<option value="Lexington">Lexington</option>
<option value="Marion">Marion</option>
<option value="Marlboro">Marlboro</option>
<option value="Moore">Moore</option>
<option value="New Hanover">New Hanover</option>
<option value="Oconee">Oconee</option>
<option value="Orangeburg">Orangeburg</option>
<option value="Outside of NC and SC">Outside of NC and SC</option>
<option value="Pickens">Pickens</option>
<option value="Richland">Richland</option>
<option value="Robeson">Robeson</option>
<option value="Rutherford">Rutherford</option>
<option value="Watauga">Watauga</option>
<option value="Wilkes">Wilkes</option>
<option value="Williamsburg">Williamsburg</option>
<option value="Wilson">Wilson</option>
<option value="York">York</option>
</select></div></div><div id="feature-group-6534" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6534">Acres</label><div class="row">
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMinAcres" style="display: none;">Min Acres</label>
            <input type="text" id="ListingMinAcres" name="data[Listing][min_acres]" class="form-control number" placeholder="No Min" value="">
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMaxAcres" style="display: none;">Max Acres</label>
            <input type="text" id="ListingMaxAcres" name="data[Listing][max_acres]" class="form-control number greaterThan" data-min="ListingMinAcres" placeholder="No Max" value="">
        </div>
    </div>
</div></div></div><div id="feature-group-6630" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6630">Elementary School</label><select name="data[Listing][2_school_elem]" class="single-select form-control" id="Listing2SchoolElem">
<option value="">- Any -</option>
<option value="272">Anderson</option>
<option value="148">Andrews</option>
<option value="294">Art</option>
<option value="124,297">Aynor</option>
<option value="281">Belville</option>
<option value="269">Berkley</option>
<option value="301">Bladen Lakes Primary School</option>
<option value="153">Bolivia</option>
<option value="229">BrittonS Neck</option>
<option value="143">Browns Ferry</option>
<option value="116">Brunswick Learning Center</option>
<option value="100">Burgess</option>
<option value="107">Carolina Forest</option>
<option value="134">Carvers Bay</option>
<option value="273">Charleston</option>
<option value="296">Chavis</option>
<option value="118,268,309">Conway</option>
<option value="161">Conway Primary School</option>
<option value="227,292,304">Daisy</option>
<option value="283,257">Deep Creek</option>
<option value="307">Delco</option>
<option value="155">Easterling</option>
<option value="278">Edgewood</option>
<option value="276,288">Fair Bluff</option>
<option value="112,287">Forestbrook</option>
<option value="101,280,300">Green Sea Floyds</option>
<option value="291">Gresham</option>
<option value="138">Hemingway</option>
<option value="137">Homewood</option>
<option value="128,271,120">Jesse Mae Monroe</option>
<option value="117">Johnsonville</option>
<option value="105">Kensington</option>
<option value="133">Kingston</option>
<option value="250">Lake City</option>
<option value="156">Lakeview</option>
<option value="109,303">Lakewood</option>
<option value="147">Lincoln</option>
<option value="152">Longs</option>
<option value="130,277">Loris</option>
<option value="115">Maryville</option>
<option value="154">Mccormick</option>
<option value="149,284">Mcdonald</option>
<option value="126">Midland</option>
<option value="136">Midland Gallivants Ferry</option>
<option value="104,261,263">Myrtle Beach</option>
<option value="142">Myrtle Beach Primary School</option>
<option value="145">North Mullins Primary School</option>
<option value="102,266,253,108,144,262,274,266,264">North Myrtle Beach</option>
<option value="258,279,113,123">Ocean Bay</option>
<option value="254">Ocean Drive</option>
<option value="270">Oceanbay</option>
<option value="119">Outside Of Horry &amp; Georgetown Co</option>
<option value="131">Palmetto Bays</option>
<option value="125,305">Pee Dee</option>
<option value="146">Plantersville</option>
<option value="140">Pleasant Hill</option>
<option value="242">River Oaks</option>
<option value="255">Riverside</option>
<option value="110">Saint James</option>
<option value="135">Sampit</option>
<option value="111,267">Seaside</option>
<option value="129,293">Socastee</option>
<option value="127">South Conway</option>
<option value="159">South Port</option>
<option value="290">St James</option>
<option value="299,151">St. James Elementary - Mcclellan</option>
<option value="231">St. Mark Elementary Elementary</option>
<option value="157">St. Mark</option>
<option value="139">Supply</option>
<option value="259">Towncreek</option>
<option value="308">Union Primary</option>
<option value="132">Union Primary School</option>
<option value="106">Virginia Williamson</option>
<option value="103">Waccamaw</option>
<option value="256">Waterway</option>
<option value="230">Whiteville Primary School</option>
<option value="302">Wilmington</option>
<option value="282">Winyah</option>
</select></div></div><div id="feature-group-6629" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6629">Middle School</label><select name="data[Listing][2_school_middle]" class="single-select form-control" id="Listing2SchoolMiddle">
<option value="">- Any -</option>
<option value="321">Anderson</option>
<option value="187,346,192">Andrew</option>
<option value="180,339">Aynor</option>
<option value="311">Berkley</option>
<option value="171">Black Water</option>
<option value="182">Carvers Bay</option>
<option value="185">Cedar Grove</option>
<option value="236">Central</option>
<option value="333">Cerro Gordo</option>
<option value="322">Charleston</option>
<option value="344">Chavis</option>
<option value="347">Cheraw</option>
<option value="176,338">Conway</option>
<option value="320">Creek Bridge</option>
<option value="342">Elizabethtown</option>
<option value="325">Fair Bluff</option>
<option value="170">Forestbrook</option>
<option value="167,313">Georgetown</option>
<option value="260,327">Green Sea Floyds</option>
<option value="163">Greensea Floyds</option>
<option value="337">Gresham</option>
<option value="323">Guideway</option>
<option value="183">Hemingway</option>
<option value="233,235,331">Johnakin</option>
<option value="174">Johnsonville</option>
<option value="245">Kingstree</option>
<option value="251">Lake City</option>
<option value="196">Lake View</option>
<option value="249">Leland</option>
<option value="244">Littlefield</option>
<option value="178,326">Loris</option>
<option value="232">Marion Intermediate</option>
<option value="319">Mcclellanville</option>
<option value="172">Mullins</option>
<option value="184,191">Myrtle Beach Intermediate School</option>
<option value="166,312,310,330">Myrtle Beach</option>
<option value="164,334,318">North Myrtle Beach</option>
<option value="345">Ocean Bay</option>
<option value="169">Ocean Bay</option>
<option value="328">Old Dock</option>
<option value="175">Out Of Operation-Carolina Forest</option>
<option value="177">Outside Of Horry and Georgetown Co</option>
<option value="189">Palmetto Bay</option>
<option value="195">Palmetto Jr. High</option>
<option value="194">Pleasant Hill</option>
<option value="190">Rosemary</option>
<option value="162">Saint James</option>
<option value="168">Shallotte</option>
<option value="173">South Brunswick</option>
<option value="329">Southside</option>
<option value="317,315,315">St. James</option>
<option value="335">Terrills Bay</option>
<option value="165,316">Waccamaw</option>
<option value="234">Waccamaw Nc</option>
<option value="181">Whittemore Park</option>
<option value="341">Williams Township</option>
<option value="332">Winyah</option>
</select></div></div><div id="feature-group-2507" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_2507">SQFT</label><div class="row">
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMinSqft" style="display: none;">Min SqFt</label>
            <input type="text" id="ListingMinSqft" name="data[Listing][min_sqft]" class="form-control digits" placeholder="No Min" value="">
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMaxSqft" style="display: none;">Max SqFt</label>
            <input type="text" id="ListingMaxSqft" name="data[Listing][max_sqft]" class="form-control digits greaterThan" data-min="ListingMinSqft" placeholder="No Max" value="">
        </div>
    </div>
</div></div></div><div id="feature-group-6628" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6628">High School</label><select name="data[Listing][2_school_high]" class="single-select form-control" id="Listing2SchoolHigh">
<option value="">- Any -</option>
<option value="361">Anderson</option>
<option value="222">Andrews</option>
<option value="215,376">Aynor</option>
<option value="348">Berkely</option>
<option value="206">Carolina Forest</option>
<option value="216">Carvers Bay</option>
<option value="362">Charleston</option>
<option value="382">Cheraw</option>
<option value="366">Columbus</option>
<option value="211,356">Conway</option>
<option value="355">Creek Bridge</option>
<option value="380">East Bladen</option>
<option value="360">Fair Bluff</option>
<option value="204">Georgetown</option>
<option value="220,369">Green Sea Floyds</option>
<option value="200">Greensea Floyds</option>
<option value="373">Gresham</option>
<option value="367">Guideway</option>
<option value="217">Hemingway</option>
<option value="210">Johnsonville</option>
<option value="247">Kingstree Senior</option>
<option value="252">Lake City</option>
<option value="223">Lake View</option>
<option value="359,371">Lincoln</option>
<option value="213,363">Loris</option>
<option value="237">Marion</option>
<option value="208">Mullins</option>
<option value="203,350,353">Myrtle Beach</option>
<option value="221">North Brunswick</option>
<option value="201,209">North Myrtle Beach</option>
<option value="358">O B Wilkinson</option>
<option value="212">Outside Of Horry &amp; Georgetown Co</option>
<option value="374">Palmetto Bays</option>
<option value="378">Pleasant Hill</option>
<option value="218">S Columbus</option>
<option value="199">Saint James</option>
<option value="207,377,351,354">Socastee</option>
<option value="219">South Brunswick</option>
<option value="357,370,352">St. James</option>
<option value="349">Syja</option>
<option value="375">Terrills Bay</option>
<option value="202,364,365">Waccamaw</option>
<option value="226">Waccamaw Neck</option>
<option value="205">West Brunswick</option>
<option value="238">Whiteville</option>
<option value="381">Williams Township</option>
<option value="372">Winyah</option>
</select></div></div><div id="feature-group-3026" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_3026">Days On Market</label><select name="data[Listing][dom]" class="single-select form-control" id="ftr_dom">
<option value="">- Any -</option>
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
</select></div></div><div id="feature-group-3027" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_3027">Last Updated</label><select name="data[Listing][lastupdated]" class="single-select form-control" id="ftr_lastupdated">
<option value="">- Any -</option>
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
</select></div></div><div id="feature-group-5865" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_5865">Price Change</label><select name="data[Listing][price_change]" class="single-select form-control" id="price_change">
<option value="">Any</option>
<option value="p">Increased</option>
<option value="-">Decreased</option>
</select></div></div><div id="feature-group-5548" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_5548">Furnished</label><select name="data[Listing][furnished]" class="single-select form-control" id="ListingFurnished">
<option value="">No Preference</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></div></div><div id="feature-group-5855" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_5855">Virtual Tour</label><select name="data[Listing][virtualtour]" class="single-select form-control" id="virtualtour">
<option value="">- Any -</option>
<option value="no">No</option>
<option value="yes">Yes</option>
</select></div></div><div id="feature-group-5856" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_5856">Photos</label><select name="data[Listing][photo_count]" class="single-select form-control" id="ftr_photo_count">
<option value="">- Any -</option>
<option value="no">No</option>
<option value="yes">Yes</option>
</select></div></div><div id="feature-group-6940" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6940">Open house</label><select name="data[Listing][openhouse_yn]" class="single-select form-control" id="ListingOpenhouseYn">
<option value="">Any</option>
<option value="yes">Yes</option>
<option value="no">No</option>
</select></div></div><div id="feature-group-6990" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6990">Sold Date</label><select name="data[Listing][solddate]" class="single-select form-control" id="ListingSolddate">
<option value="">Any</option>
<option value="1">1 Day</option>
<option value="5">5 Days</option>
<option value="15">15 Days</option>
<option value="30">1 Month</option>
<option value="91">3 Months</option>
<option value="182">6 Months</option>
<option value="273">9 Months</option>
<option value="365">1 Year</option>
</select></div></div><div id="feature-group-6976" class="col-md-3 col-sm-6"><div class="form-group"><label class="control-label" for="ftr_6976">Year Built</label><div class="row">
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMinYearBuilt" style="display: none;">Min Year Built</label>
            <input type="text" id="ListingMinYearBuilt" name="data[Listing][min_yearbuilt]" class="form-control digits" min="1818" max="2018" minlength="4" maxlength="4" placeholder="No Min" value="">
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="minmax-input">
            <label for="ListingMaxYearBuilt" style="display: none;">Max Year Built</label>
            <input type="text" id="ListingMaxYearBuilt" name="data[Listing][max_yearbuilt]" class="form-control digits greaterThan" data-min="ListingMinYearBuilt" min="1818" max="2018" minlength="4" maxlength="4" placeholder="No Max" value="">
        </div>
    </div>
</div></div></div></div>
                </form>      </div><!--/.modal-body-->
    </div>
  </div>
    <div class="modal-footer">
        <button class="pull-left btn btn-success map-filter-search">Search</button>
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>

</div>
<span id="prox-minmax" style="display: none;" data-maxlat="53.867794036865234" data-maxlon="-123.78929138183594" data-minlat="14.599512100219727" data-minlon="120.98422241210938">
</span>

<script id="dynidx-map-summary-tpl" type="text/x-custom-template">
  <div class="view-property dynidx-map-summary" data-id="{data_id}" data-mlsid="{mlsnum}" data-url="{prop_url}">
      <div class="marker-img lazyload" data-src="{photo}">
          <div class="marker-content">
              <div class="marker-addr">
                  {addr}<br>
                  <span class="city-state-zip">{city}, {state} {zip}</span>
              </div>
              <div class="marker-summary">
                  <div class="marker-data">
                      <ul>
                          <li class="priceBlock">{price}</li>
                          <li>{brlogo} MLS# {mlsnum}</li>
                          <li>{pclass} / {status}</li>
                      </ul>
                  </div>
                  <div class="marker-stats">
                      <ul>
                          <li><span>{beds}</span> Beds</li>
                          <li><span>{baths}</span> Baths</li>
                          <li><span>{sqft}</span> SqFt</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</script>
<script>
/*
src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
*/
</script>

<script type="text/javascript" src="js/tm-07.plugins.min.js"></script>
<script type="text/javascript" src="js/tm-07.scripts.min.js"></script>
</body>
</html>