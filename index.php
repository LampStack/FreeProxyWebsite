<!DOCTYPE html>
<html>
<?php
$getProxies = json_decode(file_get_contents('https://mtpro.xyz/api/?type=mtproto'), true);
$getEmojies = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Free MTProto Proxies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root {
      --primary-color: #2196F3;
      --secondary-color: #E3F2FD;
      --text-color: #333333;
      --background-color: #FFFFFF;
      --dark-mode-background-color: #333333;
      --dark-mode-text-color: #FFFFFF;
      --box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
    }

    body {
      margin: 0;
      overflow-x: auto;
      background-color: var(--background-color);
      color: var(--text-color);
      transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
      font-family: 'Roboto', sans-serif;
    }

    .top-toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: var(--primary-color);
      padding: 8px;
      box-shadow: var(--box-shadow);
    }

    .top-toolbar a {
      color: var(--background-color);
      text-decoration: none;
      padding: 8px;
    }

    .footer-bar {
      display: flex;
      justify-content: center;
      background-color: var(--primary-color);
      background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
      padding: 8px;
      box-shadow: var(--box-shadow);
    }

    .footer-bar a {
      color: var(--background-color);
      text-decoration: none;
      padding: 8px;
    }

    h1 {
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
      box-shadow: var(--box-shadow);
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid var(--primary-color);
    }

    th {
      background-color: var(--primary-color);
      color: var(--background-color);
    }

    tr:nth-child(even) {
      background-color: var(--secondary-color);
    }

    .link-preview {
      display: inline-block;
      max-width: 300px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      box-shadow: var(--box-shadow);
      border-radius: 10px;
      padding: 5px;
      background-color: var(--secondary-color);
      color: var(--text-color);
      transform: translateZ(0);
      transition: transform 0.25s ease-out;
    }

    .link-preview:hover {
      transform: translate(5px, 5px);
    }

    @media (max-width: 768px) {
      table {
        font-size: 12px;
        padding: 0;
      }

      th,
      td {
        padding: 5px;
      }

      .link-preview {
        max-width: 185px;
        padding: 3px;
      }
    }
  </style>
</head>

<body>
  <div class="top-toolbar">
    <div>
      <a href="https://t.me/LampStack">Developer</a>
      <a href="https://t.me/vpnManagerRobot">Our Services</a>
      <a href="https://github.com/LampStack">GitHub</a>
    </div>
    <div>
      <a href="">♻️ Refresh</a>
    </div>
  </div>
  <h1>Free MTProto Proxies</h1>
  <table id="proxy-table">
    <tbody>
      <tr>
        <th>#</th>
        <th>Country</th>
        <th>Ping</th>
        <th>Link</th>
        <th>Add Time</th>
      </tr>
<?php
$counter = 1;
foreach($getProxies as $proxy){
if($counter == 101) break;
if($proxy['country'] == 'IR'){
$LINK = 'https://t.me/proxy?server='.$proxy['host'].'&port='.$proxy['port'].'&secret=' . $proxy['secret'];
$ping = $proxy['ping'];
if($ping < 500){
$addTime = date('H:i:s Y/m/d', $proxy['addTime']);
foreach($getEmojies as $emojie){
if($emojie['code'] == $proxy['country']){
$countryImage = $emojie['image'];
break;
}
}
echo '<tr>
<td>'.$counter.'</td>
<td><img src = "'.$countryImage.'" width="30" height="30"/></td>
<td>'.$ping.' ms</td>
<td><a href="'.$LINK.'"
class="link-preview">'.$LINK.'</a></td>
<td>'.$addTime.'</td>
</tr>';
$counter++;
}
}
}
foreach($getProxies as $proxy){
if($counter == 101) break;
if($proxy['country'] != 'IR'){
$LINK = 'https://t.me/proxy?server='.$proxy['host'].'&port='.$proxy['port'].'&secret=' . $proxy['secret'];
$ping = $proxy['ping'];
if($ping < 500){
$addTime = date('H:i:s Y/m/d', $proxy['addTime']);
foreach($getEmojies as $emojie){
if($emojie['code'] == $proxy['country']){
$countryImage = $emojie['image'];
break;
}
}
echo '<tr>
<td>'.$counter.'</td>
<td><img src = "'.$countryImage.'" width="30" height="30"/></td>
<td>'.$ping.' ms</td>
<td><a href="'.$LINK.'"
class="link-preview">'.$LINK.'</a></td>
<td>'.$addTime.'</td>
</tr>';
$counter++;
}
}
}

?>


      <div class="footer-bar">
        <div>
          <a href="https://t.me/LampStack">LampStack © 2023</a>
        </div>
      </div>


</body>

</html>
