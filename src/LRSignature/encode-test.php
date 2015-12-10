#!/usr/local/opt/php54/bin/php
<?php

require "/Users/joehobson/Documents/navNorth/OET/LearningReg/src/LRphpLib/LearningRegistry/src/Bencode/LearningRegistryBencodeEncoder.php";

use LearningRegistryBencodeEncoder;

$startJSON = 'abcdefghijklmnopqrstuvwxyz0123456789';

$hashedText = hash('SHA256', $startJSON);
$hashedText = hash('SHA256', $startJSON);
$bencoder = new LearningRegistryBencodeEncoder($hashedText);
$bencodedText = $bencoder->encodeData($hashedText);

#hashedText = hashlib.sha256(startJSON.encode("utf-8")).hexdigest()
#hashedUTF8 = hashlib.sha256(startJSON).hexdigest()
#encoded = bencode(hashedUTF8)

# Print it
fwrite(STDOUT, "Straight is :" . $hashedText);
fwrite(STDOUT, "UTF8 is :" . $utf8_encode($hashedText));
fwrite(STDOUT, "Encoded is :" . $bencodedText);

?>