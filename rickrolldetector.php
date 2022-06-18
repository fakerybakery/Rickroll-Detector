<?php
function isRickRoll($url) {
  $c = file_get_contents($url);
  return (strpos($c, 'https://youtube') && strpos($c, 'dQw4w9WgXcQ')) || strpos($c, 'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?&enablejsapi=1&autoplay=1&mute=1') || strpos($c, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ') || strpos($c, 'rick astley') || strpos($c, 'rickroll') || strpos($c, 'rick roll') || strpos($c, 'never gonna give you up');
}
// Usage:
if (isRickRoll('https://www.tomorrowtides.com/')) {
  echo "Yep, it's a rick roll!";
} else {
  echo "Nope, it's not a rick roll!";
}
