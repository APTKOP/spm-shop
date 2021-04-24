 <?php
    $images = array(
        'https://i.imgur.com/YNICsHz.png',
        'https://i.imgur.com/LO555M8.png',
        'https://get.wallhere.com/photo/landscape-video-games-sea-lake-rock-Minecraft-coast-cliff-national-park-wilderness-tilt-shift-plateau-Terrain-mountain-soil-geology-landform-geographical-feature-aerial-photography-ecosystem-149932.jpg',
    );
    $image  = $images[array_rand($images)];
    $output =  "<style>
                    body {
                        background-image: url($image);
                        background-color: #fffff;
                        background-attachment: fixed
                    }
                </style>";
    echo $output;
?>