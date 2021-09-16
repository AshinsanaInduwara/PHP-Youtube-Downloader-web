<?php



$ytsearchfinal = $_POST["search"];


$res = str_replace(" ","+",$ytsearchfinal);





    $ytapi = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=1&q=$res&type=video&key=AIzaSyBauPdSbIDo0hfgjdO_iz2TcyRyoPuuIXk");
    $ytdecode = json_decode($ytapi, true);
    $id = $ytdecode['items'][0]['id']['videoId'];
    $channelname = $ytdecode['items'][0]['snippet']['channelTitle'];
    $title = $ytdecode['items'][0]['snippet']['title'];
    $publishedat = $ytdecode['items'][0]['snippet']['publishedAt'];
    $imgmp3 = $ytdecode['items'][0]['snippet']['thumbnails']['medium']['url'];


    $j = '{"id":"'.$id.'","channelname":"'.$channelname.'","title":"'.$title.'","imgmp3":"'.$imgmp3.'","publishdate":"'.$publishedat.'" }' ;

 ?>

<div class="mt-3 card" style="width: 25rem;">
  <img src="<?php echo $imgmp3; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $title; ?></h5>
    <p class="card-text"><?php echo $channelname; ?></p>
    <input id="vidid" type="text" value="<?php echo $id; ?>" hidden />
   <button onclick="download();" class="btn btn-warning col-lg-12">Download</button>
  </div>
</div>